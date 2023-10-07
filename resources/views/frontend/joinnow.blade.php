

@extends('frontend.layouts.header')
@section('title')
<title>website design contact 7217645059 </title>
@endsection

@section('meta')
<meta name="description" content="contact for website desing in amethi , specializing in website design for schools, hotels, and hospitals. Contact us at 7217645059 for low-cost and effective website solutions for your business.">
<meta name="keywords" content="web design services Amethi">
@endsection
@section('index-script')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
<script src="https://kit.fontawesome.com/26ae5e4e2d.js" crossorigin="anonymous"></script>
<style>
    .text-secondary{
        color: black !important;
    }
</style>
@endsection

@section('content')
 <section data-bs-version="5.1" class="features6 cid-tlVYUtaSS3 " id="features06-b" style='background-color:#c6ffe0 !important'>
        <div class="container">
            <div class="row"></div>
                <div class="card text-black" style="border-radius: 35px;" style="background-color: #eee;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1" style="font-family: 'Times New Roman', Times, serif">
                                @if(Session::get('success'))
                                        <div class="alert alert-success">
                                            {{session::get('success')}}
                                        </div>
                                @endif
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Contact for Web developer</p>
                                <form class="mx-1 mx-md-4" action="{{ url('storenow') }}" method="Post">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" name="name"
                                                value="{{ old('name') }}" class="form-control" />
                                            <label class="form-label" for="form3Example1c">Full Name </label>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" name="email"
                                                value="{{ old('email') }}"class="form-control" />
                                            <label class="form-label" for="form3Example3c">Email</label>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-map-marker fa-lg me-3 fa-fw" aria-hidden="true"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" name="address"
                                                value="{{ old('email') }}" class="form-control" />
                                            <label class="form-label" for="form3Example1c">Address </label>
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-mobile fa-lg me-3 fa-fw" aria-hidden="true"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="number" id="form3Example1c" name="mobile"
                                                value="{{ old('mobile') }}" class="form-control" placeholder="+91" />
                                            <label class="form-label" for="form3Example1c">Mobile </label>
                                            @error('mobile')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-calendar fa-lg me-3 fa-fw" aria-hidden="true"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="date" id="form3Example1c" name="date"
                                                value="{{ old('date') }}"class="form-control" />
                                            <label class="form-label" for="form3Example1c">Start Date </label>
                                            @error('date')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" name="qualification"
                                                value="{{ old('qualification') }}"class="form-control" />
                                            <label class="form-label" for="form3Example1c">Qualification </label>
                                            @error('qualification')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                    class="img-fluid rounded" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
 <script  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
@endsection
