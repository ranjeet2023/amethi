<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;
use App\Models\Image;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    public function image(Request $request)
    {
        foreach ($request->file('image') as $uploadedImage) {
            $image = 'original_' . time() . '.' . $uploadedImage->getClientOriginalExtension();
            $path = public_path('uploads/' . $image);
            $uploadedImage->move(public_path('uploads'), $image);
            $imageModel = new Image();
            $imageModel->image = $image;
            $imageModel->save();
        }
        return 'Images uploaded successfully!';
    }


    public function uploadimage()
    {
        $allImages = Image::all()->shuffle();
        $perPage = 36;
        $currentPage = request()->get('page', 1);
        $paginatedData = new LengthAwarePaginator(
            $allImages->slice(($currentPage - 1) * $perPage, $perPage)->values(),
            count($allImages),
            $perPage,
            $currentPage,
           ['path' => route('gallery')]
        );
        return view('gallery', compact('paginatedData'));
    }

    public function project()
    {
        return view('project');
    }


}
