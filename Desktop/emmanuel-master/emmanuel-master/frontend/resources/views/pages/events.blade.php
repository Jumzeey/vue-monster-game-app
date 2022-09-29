@extends('layouts.app')
@section('content')
    <!--header-->
    <header class="header relative h-screen">
        <div class="header-event absolute">
            <div class="header-text absolute text-center leading-8 animate__animated animate__pulse">
                <span class="top-2 text-secondary text-3xl md:text-5xl lg:text-5xl tracking-normal">We are Committed to 
                    <b>Worship</b> and <b>Praise</b>  God.
                </span>
            </div>
        </div>
    </header>
    <!--event-->
    <div class="mt-12 mx-auto mb-8">
        <h1 class="mx-auto text-center">Our Events</h1>
        <div class="mt-8 leading-6 mx-8 md:mx-20 lg:mx-20">
            <p>
                Emmanuel’s concept is graced with two yearly musical concert Which are PURIFIED CELESTIAL and THE ENCOUNTER ATMOSPHERE (TEA) which are dated for August (purified celestial) and November (TEA) of every year and also for now remains a virtual concert.
            </p>
        </div>
    </div>
    <div class="mt-24 md:mx-20 lg:mx-20 mx-8">
        <div class="event-title font-bold text-2xl tracking-wider mb-4">The Encounter Atmosphere</div>
        <div class="flex flex-col md:flex-row lg:flex-row">
            <div class="img md:w-2/4 lg:w-2/4">
                <img src="https://ik.imagekit.io/jumzeey/emma-img/emmanuelsconceptz-___B5e3kGHI0ob___-1_1_NahasSPOD.png?updatedAt=1629312855488" alt="">
            </div>
            <div class="img-body md:w-2/4 lg:w-2/4 mt-8">
                <p>
                    To encounter Christ is to touch reality and experience transcendence. He gives us a sense of self-worth or personal significance, because He assures us of God's love for us. <br><br> He set us free from guilt because He died for us and from paralyzing fear because He reigns. One encounter with Jesus Christ is enough to change you instantly and forever. <br><br> This musical concert is all about Encountering The Person of Jesus Christ our Lord and Saviour, because it is an atmosphere to experience God in worship
                </p>
            </div>
        </div>
        <a href="">
            <div class="btn mt-8 w-64 p-2 ">
                <button class="mx-auto text-secondary ">See All Pictures From Tea V1</button>
            </div>
        </a>
        <div>
            <iframe src="" frameborder="0"></iframe>
        </div>
        <div class="event-title font-bold text-2xl tracking-wider mt-5 mb-4">Purified Celestial</div>
        <div class="flex flex-col md:flex-row lg:flex-row">
            <div class="img md:w-2/4 lg:w-2/4">
                <img src="https://ik.imagekit.io/jumzeey/emma-img/400088100870_152170_1_vLDeyJc8B.png?updatedAt=1629312855330" alt="">
            </div>
            <div class="img-body md:w-2/4 lg:w-2/4 mt-8">
                <p>
                    <span class="font-bold">PURIFIED CELESTIAL</span> is an atmosphere of love and unity created for the glorification of the father through our worship, praises or any genres of songs. <br><br> Purified celestial is also an avenue to appreciate our uprising music ministers in the fold(CCC) whose fire are burning for Christ and ready to work for the purification of our heart. <br><br> Through out the years we could witnessed that a lot of our young minsters are striving to promote there ministries and also show forth the glory of God in them but don’t have the capacity to make them go far, so we seize the opportunity to lend a helping hand as a body of Christ to crate a platform where this could be done, which we have created today as a virtual concert and has started since the 31st of August 2020 and it would continue to be a early concert till we upgrade it from virtual to a city tour concert. <br><br> God bless
                </p>
            </div>
        </div>
        <a href="">
            <div class="btn mt-8 w-64 p-2 ">
                <button class="mx-auto text-secondary ">See All Pictures From Purified Celestial</button>
            </div>
        </a>
        <div>
            <iframe src="" frameborder="0"></iframe>
        </div>
    </div>

    <!--social-->
    @include('partials.social')
    <!--subscribe to newsletter-->
    @include('partials.subscribe')
@endsection