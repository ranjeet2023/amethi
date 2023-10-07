@extends('frontend.layouts.header')
@section('title')
<title>Website maintenance services in Amethi  </title>
@endsection

@section('meta')
<meta name="description" content="very low cost website desing in amethi ">
<meta name="keywords" content="website design in Amethi, low-cost website design, school website design, hotel website design, hospital website design, effective website solutions">
@endsection

@section('style-css')
<style>
    .page_404 {
    padding: 40px 0;
    background: #fff;
    font-family: "Arvo", serif;
    }

    .page_404 img {
    width: 100%;
    }

    .four_zero_four_bg {
    background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    height: 400px;
    background-position: center;
    }

    .four_zero_four_bg h1 {
    font-size: 80px;
    }

    .four_zero_four_bg h3 {
    font-size: 80px;
    }

    .link_404 {
    color: #fff !important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;
    }
    .contant_box_404 {
    margin-top: -50px;
    }
</style>
@endsection
@section('content')
<section data-bs-version="5.1" class="menu menu1 cid-tlVfrwbwzd mt-5" once="menu" id="menu01-0" style="text-align:center">
            <div class="col-sm-8 mx-auto ">
              <div class="col-sm-12">
                <div class="four_zero_four_bg">
                  <h1 class="text-center ">404</h1>
                </div>
                <div class="contant_box_404">
                  <h3 class="h2">
                    Look like you're lost
                  </h3>
                  <p>the page you are looking for not avaible!</p>
                  <a href="{{ url('/') }}" class="link_404">Go to AmethiTech</a>
                </div>
          </div>
        </div>
 </section>
@endsection
