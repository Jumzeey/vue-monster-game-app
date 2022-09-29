@extends('layouts.app')
@section('content')
    <!--header-->
    <header class="header relative h-screen">
        <div class="header-services absolute">
            <div class="header-text absolute text-center leading-8 animate__animated animate__pulse">
                <span class="top-2 text-secondary text-3xl md:text-5xl lg:text-5xl tracking-normal">Here is a list of what we do.
                </span>
            </div>
        </div>
    </header>
    <!--services-->
    <div class="text-regular">
        <div class="mt-20 text-center">
            <h1 class="text-thin text-3xl">Services</h1>
        </div>
    </div>
    <div class="container-services mt-8">
        <div class=" flex flex-col md:flex-row lg:flex-row md:m-8 lg:m-8">
            <div class="md:pl-12 lg:pl-12 mx-auto md:w-2/4 lg:w-2/4">
             <img src="https://ik.imagekit.io/jumzeey/emma-img/Mask_Group_AwO3eWRg6.png?updatedAt=1629291270751')">
            </div>
            <div class="p-4 w-full md:w-2/4 lg:w-2/4">
                <h4 class="font-thin mb-4 text-center md:text-left lg:text-left font-bold">ARTISTE MANAGEMENT</h4>
                <p class="mx-auto">
                    In emmanuel's concept we are graced to manage artist that are set to render an endless service to the maker through their songs, and this is a manegment deal not a record label deal but we stand a well organised company and body in christ to make sure that our artists get the best they can ever think of. <br><br> Note that this service comes with an official signing and also terms and conditions are applied between the two parties.
                </p>
            </div>
        </div>
        <div class=" flex flex-col-reverse flex-col md:flex-row lg:flex-row md:m-8 lg:m-8">
            <div class="p-4 w-full md:w-2/4 lg:w-2/4">
                <h4 class="font-thin mb-4 text-center md:text-left lg:text-left font-bold">CONCERT ORGANISATION</h4>
                <p class="mx-auto">
                     We help churches, independent body and other organisations to organise a powerful and spirit filled musical concert both virtual and open space concert from their favourite ministers, stage, good musical equipments, media, promotion and publicity of the events.<br><br> <b>We send a pdf file for more details</b>.
                </p>
            </div>
            <div class="md:pl-12 lg:pl-12 mx-auto md:w-2/4 lg:w-2/4">
                <img src="https://ik.imagekit.io/jumzeey/emma-img/Mask_Group__1__JzlF8C5mYz0.png?updatedAt=1629304430123')">
               </div>
        </div>
        <div class=" flex flex-col md:flex-row lg:flex-row md:m-8 lg:m-8">
            <div class="md:pl-12 lg:pl-12 mx-auto md:w-2/4 lg:w-2/4">
             <img src="https://ik.imagekit.io/jumzeey/emma-img/Mask_Group__2__4c2I5lGd0L.png?updatedAt=1629304429935')">
            </div>
            <div class="p-4 w-full md:w-2/4 lg:w-2/4">
                <h4 class="font-thin mb-4 text-center md:text-left lg:text-left font-bold">ARTIST PROMOTION AND REBRANDING</h4>
                <p class="mx-auto">
                    We help promote and rebrand both Artist and Ministers of God from scratch to whatever you aim to become, in this service we help you promote your music basically on all digital platforms (most especially on Spotify), boomplay, audiomack and major downloading sites plus we make the streaming charts available for you to see how your audience are doing and how organic your streamers are. <br><br> Also we help promote musical videos both local and international and also on major online viewing sites. <br><br> We help rebranding your profile from your photoshoots to your graphic designs and all your social media pages to attract more follower. <br><br> This also comes with terms and conditions. <br><br> <b>We send a pdf file for more details</b>.
                </p>
            </div>
        </div>
        <div class=" flex flex-col flex-col-reverse md:flex-row lg:flex-row md:m-8 lg:m-8">
            <div class="p-4 w-full md:w-2/4 lg:w-2/4">
                <h4 class="font-thin mb-4 text-center md:text-left lg:text-left font-bold">MUSIC PRODUCTION</h4>
                <p class="mx-auto">
                    We offer a very good digital and analogue music production of a very good taste, we produce, mix and master your your jobs to your very satisfaction. <br><br> Our studio is a very conducive environment and also our staffs are very accommodating. <br><br> Check in for more information..
                </p>
            </div>
            <div class="md:pl-12 lg:pl-12 mx-auto md:w-2/4 lg:w-2/4">
                <img src="https://ik.imagekit.io/jumzeey/emma-img/Mask_Group__3__VtpMmFnte.png?updatedAt=1629304429810')">
               </div>
        </div>
        <div class=" flex flex-col md:flex-row lg:flex-row md:m-8 lg:m-8">
            <div class="md:pl-12 lg:pl-12 mx-auto md:w-2/4 lg:w-2/4">
             <img src="https://ik.imagekit.io/jumzeey/emma-img/Mask_Group__4__9rrbHvG_wt.png?updatedAt=1629304430050')">
            </div>
            <div class="p-4 w-full md:w-2/4 lg:w-2/4">
                <h4 class="font-thin mb-4 text-center md:text-left lg:text-left font-bold">BROWN'S EYEZ</h4>
                <p class="mx-auto">
                    This is our professional photography brand that brings out the beauty in you, we offer photoshoots session, we cover events like naming ceremony, birthday parties, weeding ceremonies, burial ceremonies, seminal, conference meetings, we also make movies and musical videos. <br><br> Head office is suited in Paris, France and branch office in Lagos Nigeria.
                </p>
                <a href="{{route('browns eyez')}}">
                    <div class="browns-btn mt-8">
                        <button class="mx-auto btn">See portfolio</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--get in touch-->
    <div class="text-regular">
        <div class="mt-20 text-center">
            <h1 class="text-thin text-3xl">Get in Touch</h1>
        </div>
    </div>
    <div class="flex flex-col md:flex-row lg:flex-row mt-8 md:m-28 lg:m-28 m-12">
        <div class=" md:w-2/4 lg:w-2/4">
            <h4 class="leading-10 text-regular text-2xl mb-8">
                Connect with us in anyway convinient for you
            </h4>
            <div class="flex flex-col">
                <div class="mb-4">
                    <a href= "mailto: Emmanuelbrown350@gmail.com" class="flex" >
                        <span class="pr-2"><img src="https://ik.imagekit.io/jumzeey/emma-img/Group__2__IplsHtDUb-.png?updatedAt=1629310982578" alt=""></span>
                        <span>Emmanuelbrown350@gmail.com</span>
                    </a>
                </div>
                <div class="mb-4">
                    <a href= "" class="flex" >
                        <span class="pr-2"><img src="https://ik.imagekit.io/jumzeey/emma-img/Group__3__ZQLZTItq1y.png?updatedAt=1629310982565" alt=""></span>
                        <span>Browneyez</span>
                    </a>
                </div>
                <div class="mb-4">
                    <a href= "" class="flex" >
                        <span class="pr-2"><img src="https://ik.imagekit.io/jumzeey/emma-img/Group__4__rgf7DPPol.png?updatedAt=1629310982579" alt=""></span>
                        <span>Browneyez</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="md:w-2/4 lg:w-2/4">
            <form action="" class="flex flex-col">
                <input type="text" name="" id="" placeholder="First Name" class="input-box m-2 md:w-16  placeholder-gray-500 placeholder-opacity-25">
                <input type="email" name="" id="" placeholder="Email Address" class="input-box m-2 md:w-16  placeholder-gray-500 placeholder-opacity-25">
                <textarea name="" id="" cols="30" rows="10" placeholder="Message" class="input-box m-2 md:w-16  placeholder-gray-500 placeholder-opacity-25"></textarea>
                <input type="button" value="SUBMIT" class="p-2 text-xs btn m-2 ">
            </form>
        </div>
    </div>
    <!--social-->
    @include('partials.social')
    <!--subscribe to newsletter-->
    @include('partials.subscribe')
@endsection