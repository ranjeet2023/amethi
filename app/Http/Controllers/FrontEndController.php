<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function website_creation(){
        return view('frontend.our_services.new_website_creation');
    }
    public function join_now()
    {
        return view('frontend.joinnow');
    }

    public function frontend()
    {
        return view('frontend.ourCourses.frontend');
    }

    public function backend()
    {
        return view('frontend.ourCourses.backend');
    }

    public function fullstack()
    {
        return view('frontend.ourCourses.fullstack');
    }

    public function laravel()
    {
        return view('frontend.ourCourses.laravel');
    }

    public function NewWebsite(){
        return view('frontend.ourServices.newWebsite');
    }
    public function Ecommerce(){
        return view('frontend.ourServices.e-commerse');
    }
    public function School(){
        return view('frontend.ourServices.school');
    }
    public function WebMaintaine(){
        return view('frontend.ourServices.webmaintain');
    }
    public function AmethiTech(){
        return view('amethitech');
    }
    public function SendMail(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required|max:5555',
        ]);

        if (!empty($request->number)) {
            $phone = $request->number;
        } else {
            $phone = 'NO PHONE INFORMATION';
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        try {
            Mail::to('ranjeetmaurya2033@gmail.com')->send(new SendMail($data));
        } catch (\Exception $e) {
            $errorMessage = 'Error sending email: ' . $e->getMessage();
            return redirect()->back()->withErrors($errorMessage);
        }

        return redirect()->back()->withSuccess('Email sent successfully');
    }
    public function StoreNow(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->mobile,
             'address' => $request->address,
            'subject' => 'this is subject for join now ',
            'message' => 'this email is come for join form',
        ];
        try {
            Mail::to('ranjeetmaurya2033@gmail.com')->send(new SendMail($data));
        } catch (\Exception $e) {
            $errorMessage = 'Error sending email: ' . $e->getMessage();

        }
        return redirect()->back()->withSuccess('Your form send successfully');
    }
}
