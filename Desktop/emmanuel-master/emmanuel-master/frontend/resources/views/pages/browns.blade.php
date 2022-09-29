@extends('layouts.app')
@section('content')
    <!--header-->
    <header class="header mx-8 mt-0 overflow-hidden">
        <div class="header-brown mt-20">
            <div class="heading md:mx-16 mt-4 md:mt-32 lg:mt-32 lg:mx-16 text-center">
            </div>
            <div class="heading-content mt-8 text-center">
                <p>Brown’s eyez is the official photography company of Emmanuel’s concept located in Paris France, with Brown’s eyez photography you can get any type of photoshoots and media concept you want, and also we cover any events of any kinds.</p>
            </div>
            <div class="b-social flex justify-center mt-8">
                <a href="nailto:emmanuelbrown350@gmail.com"><img src="https://ik.imagekit.io/jumzeey/emma-img/gmail_s2bGHoinn.png?updatedAt=1629248575436" alt="" srcset=""></a>
                <a href=""><img src="https://ik.imagekit.io/jumzeey/emma-img/Group_1KCtc1-AM.png?updatedAt=1629248548498" alt="" srcset=""></a>
                <a href=""><img src="https://ik.imagekit.io/jumzeey/emma-img/Group__1__sZMSXAlyU.png?updatedAt=1629248594139" alt=""></a>
            </div>
        </div>
    </header>
    <div>
        <!-- Calendly inline widget begin -->
        {{-- <div class="calendly-inline-widget" data-url="https://calendly.com/emmanuelbrown350/30min" style="min-width:320px;height:130vh;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script> --}}
        <!-- Calendly inline widget end -->
    </div>
    <!--portfolio-->
    <div class="text-regular">
        <div class="portfolio-title text-center">
            <h1 class="text-thin text-3xl lg:mt-8 mt-4">Portfolio</h1>
        </div>
        <div class="mt-4" id='app'>
            <image-gallery></image-gallery>
        </div>
    </div>
    
@endsection