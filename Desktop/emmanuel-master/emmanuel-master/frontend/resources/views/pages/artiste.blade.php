@extends('layouts.app')
@section('content')
{{-- code --}}
 <!--header-->
 <header class="header relative h-screen">
    <div class="header-artiste absolute">
        <div class="leading-8 mr-6 md:mr-44 mt-44 ">
            <div class="top-2 items-center md:items-end text-secondary text-3xl md:text-5xl lg:text-5xl tracking-normal flex flex-col mt-64">
                <div class=" text-4xl">Temiloluwa <b>Badmus</b></div>
                <div class=" text-sm leading-3 tracking-wider mt-8 mx-8 md:mx-36">Singer | Songwriter</div>
                <div class="flex mt-8 mx-8 md:mx-36">
                    <a href="#"><img src="https://ik.imagekit.io/jumzeey/emma-img/Group__5__oKkTS4_It.png?updatedAt=1630843978636" alt="" class="p-2"></a>
                    <a href="#"><img src="https://ik.imagekit.io/jumzeey/emma-img/008-twitter_1_9Opk9B5EC.png?updatedAt=1630843978609" alt="" class="p-2"></a>
                    <a href="#"><img src="https://ik.imagekit.io/jumzeey/emma-img/Group__6__Gd1eQgmS_zS.png?updatedAt=1630843978599" alt="" class="p-2"></a>
                    <a href="#"><img src="https://ik.imagekit.io/jumzeey/emma-img/012-spotify_H3UAL46Z3.png?updatedAt=1630843978627" alt="" class="p-2"></a>
                    <a href="#"><img src="https://ik.imagekit.io/jumzeey/emma-img/Vector__3__-8C8e9T6OX.png?updatedAt=1630843967946" alt="" class="p-2"></a>
                </div>
                <div class="btn text-base p-2 mx-8 md:mx-36 mt-4">
                   <a class = "text-secondary" href="mailto:emmanuelbrown350@gmail.com?subject=Book%20Temiloluwa">Book Temiloluwa</a>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="m-8 mt-16 mx-20">
    {{-- about the artiste --}}
    <div>
        <div class="mt-2">
            <h1 class="text-center mb-8">About Temiloluwa</h1>
        </div>
        <div>
            <p>
                Temilade Tobiloba Badmus also known as Temiloluwa is a Christian born worship minister/Actress born in the early 90s into the Family of the Badmus, in Ijebu-Igbo, she had her primary and secondary school education in Ijebu-ode and graduated to the higher institution where she is currently studying Music. She has done a lot of movie soundtracks and also ministered alongside various other anointed ministers of God and also with Evang. Tunde Ara in the ongoing Sunday live worship of the Luli concert. <br><br>Purified is her first official singles although she has done some other works fitted to be out in some months to come, she is currently working on her first Christian movie production that gives an insight if the divine call.
            </p>
        </div>
    </div>
     {{-- discography --}}
     <div>
        <div class="mt-12">
            <h1 class="mb-8">Discography</h1>
        </div>
        <div class="flex mt-8 flex-col md:flex-row lg:flex-row">
            <a href="https://distrokid.com/hyperfollow/temiloluwabadmus/encounter"><img src="https://ik.imagekit.io/jumzeey/emma-img/PURIFIED_Main_Cover_1__1__lAUyK71qJ.png?updatedAt=1630848996697" alt="" class="p-2 h-48 w-48"></a>
            <a href="https://audiomack.com/emmanuelbrown350/album/encounter"><img src="https://ik.imagekit.io/jumzeey/emma-img/DIGITAL_album_cover_-_front_1_IAKPdl25O.png?updatedAt=1630848996735" alt="" class="p-2 h-48 w-48"></a>
            <a href="https://distrokid.com/hyperfollow/temiloluwabadmus/moment-of-worship-20-feat-marysings-3"><img src="https://ik.imagekit.io/jumzeey/emma-img/MOW_NEW_copy_jmc9qw7mv.jpg?updatedAt=1641990971065" alt="" class="p-2 h-48 w-48"></a>
            <a href="https://youtu.be/Amrr13UrkKc"><img src="https://ik.imagekit.io/jumzeey/emma-img/mow_2_new_copy-1__1__PMOPz4Acj.jpg?updatedAt=1641990973767" alt="" class="p-2 h-48 w-48"></a>
        </div>
    </div>
    {{-- upcoming projects--}}
    <div>
        <div class="mt-12">
            <h1 class="text-center mb-8 text-2xl md:text-4xl">Upcoming Projects / Events</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-4">
            <div class="mt-4 bg-yellow-100 p-4 w-auto md:w-96">
                <div class="flex flex-row mx-4">
                    <div class=" bg-red-600 text-secondary font-bold">
                        <div class="flex flex-col m-6">
                            <span class=" text-4xl">27</span>
                            <span class="font-thin">DATE</span>
                        </div>
                    </div>
                    <div class="grid grid-rows-2 mx-4">
                        <span>Moment Of Worship</span>
                        <span>
                            <a href="">
                                <div class="btn mt-4 px-2 w-auto">
                                    <button class="mx-auto text-secondary text-center text-xs">Add to reminder</button>
                                </div>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-4 bg-yellow-100 p-4  w-auto md:w-96">
                <div class="flex flex-row mx-4">
                    <div class=" bg-red-600 text-secondary font-bold">
                        <div class="flex flex-col m-6">
                            <span class=" text-4xl">27</span>
                            <span class="font-thin">DATE</span>
                        </div>
                    </div>
                    <div class="flex flex-col mx-4">
                        <span>The Encounter Experience</span>
                        <span>
                            <a href="">
                                <div class="btn mt-4 px-2 w-30">
                                    <button class="mx-auto text-secondary text-center text-xs">Add to reminder</button>
                                </div>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-4 bg-yellow-100 p-4  w-auto md:w-96">
                <div class="flex flex-row mx-4">
                    <div class=" bg-red-600 text-secondary font-bold">
                        <div class="flex flex-col m-6">
                        <span class=" text-2xl font-thin">Feb</span>
                            <span class=" text-4xl">27</span>
                            <span class="font-thin">DATE</span>
                        </div>
                    </div>
                    <div class="flex flex-col mx-4">
                        <span>The Encounter Church Tour</span>
                        <span>
                            <a href="">
                                <div class="btn mt-4 px-2 w-30">
                                    <button class="mx-auto text-secondary text-center text-xs">Add to reminder</button>
                                </div>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-4 bg-yellow-100 p-4  w-auto md:w-96">
                <div class="flex flex-row mx-4">
                    <div class=" bg-red-600 text-secondary font-bold">
                        <div class="flex flex-col m-6">
                            <span class=" text-4xl">27</span>
                            <span class="font-thin">DATE</span>
                        </div>
                    </div>
                    <div class="flex flex-col mx-4">
                        <span>The Encounter Experience</span>
                        <span>
                            <a href="">
                                <div class="btn mt-4 px-2 w-30">
                                    <button class="mx-auto text-secondary text-center text-xs">Add to reminder</button>
                                </div>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
</main>
<!--social-->
@include('partials.social')
<!--subscribe to newsletter-->
@include('partials.subscribe')
@endsection