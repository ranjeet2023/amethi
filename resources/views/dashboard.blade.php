<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="background-color: rgba(220, 231, 210, 0.622)">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-dark ">
                    {{ __("You're logged in!") }}
                    <form action="{{ url('images') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group text-dark">
                            <label for="" class="text-dark">Upload gallery images</label><br><br>
                            <input type="file" class="form-control" name="image[]" required placeholder="" aria-describedby="fileHelpId" multiple>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

