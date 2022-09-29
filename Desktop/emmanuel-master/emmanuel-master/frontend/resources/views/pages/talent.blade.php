@extends('layouts.app')
@section('content')
     <!--header-->
     <header class="header relative h-screen">
        <div class="header-talent absolute">
            <div class="header-text absolute text-center leading-8 animate__animated animate__pulse">
                <span class="top-2 text-secondary text-3xl md:text-5xl lg:text-5xl tracking-normal">Our Artiste overview and Bio.
                </span>
            </div>
        </div>
    </header>
    <!--Talents-->
    <div class="mt-12 mx-auto mb-8">
        <h1 class="mx-auto text-center">Our Talents</h1>
    </div>
    <div class="mt-8">
        <div class="md:m-16 lg:m-16 m-8">
            <div class="flex flex-col md:flex-row lg:flex-row">
                <div class="md:w-2/4 lg:w-2/4">
                    <img src="https://ik.imagekit.io/jumzeey/emma-img/_DSC6118_1_f9rSd0nLX.png?updatedAt=1629358690822')">
                   </div>
                   <div class=" md:w-2/4 lg:w-2/4 mt-8">
                       <h4 class="font-bold mb-4 text-center md:text-left lg:text-left">Temilade Tobiloba Badmus</h4>
                       <p class="mx-auto">
                           Temilade Tobiloba Badmus also known as Temiloluwa is a Christian born worship minister/Actress born in the early 90s into the Family of the Badmus, in Ijebu-Igbo, she had her primary and secondary school education in Ijebu-ode and graduated to the higher institution where she is currently studying Music. <br><br> She has done a lot of movie soundtracks and also ministered alongside various other anointed ministers of God, home and abroad.<br><br> <span class="font-bold">Purified</span> is her first official singles although she has done some other works fitted to be out in some months to come, she is currently working on her first Christian movie production that gives an insight if the divine call.              </p>
                   </div>
            </div>
            <div class="mt-8 ">
                <a href="{{route('artiste')}}">
                    <div class="btn mt-8 w-72 md:w-64 p-2 ">
                        <button class="mx-auto text-secondary text-center">View Full Profile</button>
                    </div>
                </a>
            </div>
            {{-- <div class="project mt-8 mb-8">
                <div class="font-bold">
                    <h1 class="text-xl">Projects from Temiloluwa</h1>
                </div>
                <div class=" flex flex-wrap flex-col md:flex-row mt-4">
                    <div class="p-2">
                        <img src="https://ik.imagekit.io/jumzeey/emma-img/PURIFIED_Main_Cover_1_jf9bDgYAQ.png?updatedAt=1629359826366" alt="">
                    </div>
                    <div  class="p-2">
                        <img class="w-36 h-36" src="https://ik.imagekit.io/jumzeey/emma-img/WhatsApp_Image_2021-08-19_at_11.42.36_GB__LamFjR.jpeg?updatedAt=1629461895092" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    
    <!--social-->
    @include('partials.social')
    <!--subscribe to newsletter-->
    @include('partials.subscribe')
@endsection