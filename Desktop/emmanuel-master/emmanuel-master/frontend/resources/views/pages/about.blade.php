@extends('layouts.app')
@section('content')
    <!--header-->
    <header class="header relative h-screen">
        <div class="header-about absolute">
            <div class="header-text absolute text-center leading-8 animate__animated animate__pulse">
                <span class="top-2 text-secondary text-3xl md:text-5xl lg:text-5xl tracking-normal">We are Committed to 
                    <b>Worship</b>, <b>Praise</b>  & <b>Building</b> 
                    up spiritual Leaders
                </span>
            </div>
        </div>
    </header>
    <!--about us-->
    <div class="about-us mt-16 text-center">
        <div>
            <h1>About Us</h1>
        </div>
        <div class="about-contents w-auto leading-8 break-normal m-16 text-left">
            <p>
                Emmanuel’s concept is a body of christ that is set to build up spiritual leaders, to raise up Generals in the kingdom both in music and in word. <br> We set up a general Loving standard among all Christian dominations, and all other religious that are verified serving and worshipping the Father in truth, love and in the right way. <br> In Emmanuel’s concept we are a family in christ that evangelise christ in truth and in spirt, we create rooms for young, truthful, spiritual and disciplined ministers of the kingdom that are ready to work for christ not because of the earthly rewards but for the heavenly appreciation. <br><br> In Emmanuel’s concept we manage Music MINISTERS and also make ARTIST promotional service, we are always ready to work with any young and upcoming ministers of God that have given us much guarantees that they are worthy of the task, More-so we only work with MINISTERS OF CHIRST not just any ARTIST. <br><br> Emmanuel’s concept is also opportune to have movie conjunction with G10 movie academy owned by SHOLA Akintunde Lagata of which we have done lots of project to evangelise christ and also on many more, this equally means in no time we are extending our wings to the DRAMA MINISTRY by HIS GRACE. <br><br> We are presently managing Minister Temilade Tobiloba Badmus also known as TEMILOLUWA and she is Officially signed under our managing and promotional service and she is currently doing fine by the power of Christ Jesus. <br>
            </p>
        </div>
    </div>
     <!--mission & vision-->
     <div class="about-us mt-16 text-center">
        <div>
            <h1 class="mx-8">Our Vision & Mission</h1>
        </div>
        <div class="w-auto leading-8 break-normal m-16 text-left">
            <p>
                Our mission is to bring the lost souls back to the father through music, word and drama ministry. Also we set to give a helping hand to all upcoming minsters that are ready to work for christ by creating a Platform for them all. <br><br> Our vision is to see the kingdom filled with new souls through the work of God graced to pass through us, and also we visualise to celebrate all the misters that passes through Emmanuel’s concept platforms to get to the limelight of glory. <br><br>
            </p>
        </div>
    </div>
    <!--events-->
    <div class="mt-16 text-center">
        <div>
            <h1 class="mx-8">Our Events</h1>
        </div>
        <div class="w-auto leading-8 break-normal m-16 text-left">
            <p>
                Emmanuel’s concept is graced with two yearly musical concert Which are PURIFIED CELESTIAL and THE ENCOUNTER ATMOSPHERE (TEA) which are dated for August (purified celestial) and November (TEA) of every year and also for now remains a virtual concert.
            </p>
        </div>
        <div class="mt-8 p-2.5 btn">
            <a href="{{route('events')}}">
                <button class="mx-auto btn">SEE EVENTS</button>
            </a>
        </div>
    </div>
    <!--social-->
    @include('partials.social')
    <!--subscribe to newsletter-->
    @include('partials.subscribe')
@endsection