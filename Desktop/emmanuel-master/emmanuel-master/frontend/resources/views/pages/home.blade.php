@extends('layouts.app')
@section('content')
<!--The slideshow-->
        <div class="owl-carousel owl-theme" id="caro1">
            <div class="carousel-item active slide1 w-full">
                <div class="header-caro absolute  leading-8">
                    <span class="top-2 md:text-left lg:text-left text-secondary">
                       <h1 class="text-2xl md:text-4xl">Brown's Eyez</h1>
                       <p class="mt-4 md:mt-8 h-auto w-80 md:text-base text-sm font-thin  md:w-3/5 break-words leading-5 md:leading-16 lg:leading-16">
                        Brown’s eyez is the official photography company of Emmanuel’s concept located in Paris France, with Brown’s eyez photography you can get anytime of photoshoots and media concept you want, and also you we cover events of any kinds.
                       </p>
                       <div class="browns-btn mt-8">
                            <a href="{{route('browns eyez')}}">
                            <button class="mx-auto btn text-white">See portfolio</button>
                            </a>
                        </div>
                    </span>
                </div>
            </div>
            <div class="carousel-item slide2 w-full">
                <div class="header-caro1 absolute">
                    <span class="text-4xl text-secondary leading-10">We are <br><b>dedicated</b> in<br> praising <b>God</b>.
                    </span>
                </div>
            </div>
            <div class="carousel-item slide3 w-full">
                <div class="header-caro1 absolute text-secondary">
                    <span class="text-4xl leading-10">We help great <b>artistes</b><br>  unleash their<br> full <b>potential</b>.
                    </span>
                </div>
            </div>
        </div>
<!--The Z-index about-->
        <div class="about-box max-w-md mx-auto  overflow-hidden md:max-w-2xl">
            <div class="md:flex mx-12">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://ik.imagekit.io/jumzeey/emma-img/IMG_2839_1_SjC_8ZIDhW.png">
                </div>
                <div class="px-12 py-14 h-full  md:pb-28 about-content">
                    <span href="#" class="block mt-1 text-lg font-medium text-secondary">About Us</span>
                    <p class="mt-2 text-secondary py-8">Emmanuel’s concept is a body of christ that is set to build up spiritual leaders, to raise up Generals in the kingdom both in music and in word.</p>
                    <button class=" btn-lg btn-primary mt-2 "><a href="#" class="p-2 m-4" >Read More</a></button>
                </div>
            </div>
        </div>
<!--Services carousel-->
        <div class="services">
            <h1 class="mx-auto">Our Services</h1>
            <div class="p-10 owl-carousel owl-theme" id="caro2">
                <div class="item">
                    <a href="">
                        <div class="item-img">
                            <img src="https://ik.imagekit.io/jumzeey/emma-img/PicsArt_12-24-02.00_1_khk33svDiyHQ.png?updatedAt=1617092807950" alt="" class="h-80 w-64">
                        </div>
                        <div class="item-overlay"></div>
                        <div class="item-text mx-auto">
                            <p>Brown's <br> Eyez</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="item-img">
                            <img src="https://ik.imagekit.io/jumzeey/emma-img/headway-5QgIuuBxKwM-unsplash_cFcIZEHZSXm9-.png?updatedAt=1617092806888" alt="" class="h-80 w-64">
                        </div>
                        <div class="item-overlay"></div>
                        <div class="item-text">
                            <p>Artiste <br> Management</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="item-img">
                            <img src="https://ik.imagekit.io/jumzeey/emma-img/andreas-forsberg-rMdOHpO3h5E-unsplash_1__1__EfLdvi8kR0xxr.png?updatedAt=1617092806486" alt="" class="h-80 w-64">
                        </div>
                        <div class="item-overlay"></div>
                        <div class="item-text">
                            <p>Music <br> Production</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="item-img">
                            <img src="https://ik.imagekit.io/jumzeey/emma-img/jakob-owens-ycExgCMRggc-unsplash_ZbE_M8_gu.png?updatedAt=1617092807470" alt="" class="h-80 w-64">
                        </div>
                        <div class="item-overlay"></div>
                        <div class="item-text mx-auto">
                            <p>Concert <br> Organisation</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="item-img">
                            <img src="https://ik.imagekit.io/jumzeey/emma-img/_DSC6178_1_fGKAFxf4Aq.png?updatedAt=1626727186868" alt="" class="h-80 w-64">
                        </div>
                        <div class="item-overlay"></div>
                        <div class="item-text">
                            <p>Artist Promotion <br> and Rebranding</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--Events carousel-->
        <div class="events">
            <h1 class="mx-auto text-center">Our Events</h1>
            <div class="event-container owl-carousel owl-theme " id="caro3">
                <div >
                    <img src="https://ik.imagekit.io/jumzeey/emma-img/ENCOUNTER_ADS_P2mIE0Xz2A.png?updatedAt=1617092807054" class="h-2" alt="">
                </div>
                {{-- <div >
                    <img src="https://ik.imagekit.io/jumzeey/emma-img/PURIFIED_Main_Cover_1_xL5BdUxzc6.png?updatedAt=1617092808113"  alt="">
                </div> --}}
            </div>
        </div>
        <!--changing events-->
        <div class="h-auto p-24 flex flex-col md:flex-row lg:flex-row change text-secondary" >
            <div class="changing-info text-secondary">
                <div class="changing-info-first leading-8">
                    <h4>Missed any of our events?</h4> 
                    <h4>Watch our events</h4>
                </div>
                <h1 class="md:mt-2 lg:mt-2">Check out our channel</h1>
            </div>
            <div>
                <img class="md:ml-64 lg:ml-64 ml-8" src="https://ik.imagekit.io/jumzeey/emma-img/Subtract__1__firq0LRJl.png?updatedAt=1629249490366" alt="">
            </div>
        </div> 
        <!--image gallery-->
        <div class="gallery relative mt-8">
            <div class="gallery-info">
                <h1 class="mx-auto text-center">Our Events Gallery</h1>
                <p class="gallery-para">These are some of the pictures taken from the event we hosted, 
                    <b>Encounter 1.0, Purified Celestial, Unlimited Praise</b> and so on</p>
            </div>
            <div class="gallery-images pt-8 px-8 md:px-24 lg:px-24 ">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 lg:grid-cols-3 md:gap-4 lg:gap-4 items-center mx-auto">
                        <div><img class="rounded shadow-md" src="https://ik.imagekit.io/jumzeey/emma-img/emmanuelsconceptz-___B5e6eNlow-p___-6_YJF0yPQtK.png?updatedAt=1627994079008" alt=""></div>
                        <div><img class="rounded shadow-md" src="https://ik.imagekit.io/jumzeey/emma-img/400086600160_156076_nNxUG4aOS.png?updatedAt=1627994061316" alt=""></div>
                        <div><img class="rounded shadow-md" src="https://ik.imagekit.io/jumzeey/emma-img/emmanuelsconceptz-___B5gYerIoWof___-_Q8TtOzq8O7y.png?updatedAt=1627994059614" alt=""></div>
                        <div><img class="rounded shadow-md" src="https://ik.imagekit.io/jumzeey/emma-img/400088100870_152170_xv_xSy4jn.png?updatedAt=1627994066364" alt=""></div>
                        <div><img class="rounded shadow-md" src="https://ik.imagekit.io/jumzeey/emma-img/400089900706_156841_yeWkPdFbUU_O.png?updatedAt=1627994072172" alt=""></div>
                        <div><img class="rounded shadow-md" src="https://ik.imagekit.io/jumzeey/emma-img/emmanuelsconceptz-___B5e3kGHI0ob___-1_X5kVqbdQjiy.png?updatedAt=1627994078985" alt=""></div>
                        <div><img class="rounded shadow-md" src="https://ik.imagekit.io/jumzeey/emma-img/emmanuelsconceptz-___B5e4CH1ofC____-_8xosOssUYh.png?updatedAt=1627994079905" alt=""></div>
                        <div><img class="rounded shadow-md" src="https://ik.imagekit.io/jumzeey/emma-img/400119700354_50840_1_HJ3LRGHRi.png?updatedAt=1627994070501" alt=""></div>
                        <div><img class="rounded shadow-md" src="https://ik.imagekit.io/jumzeey/emma-img/400094700159_145975_ri4gdarbZ.png?updatedAt=1627994082140" alt=""></div>
                    </div>
            </div>
            <div class="gallery-btn btn-lg btn-primary mx-auto pt-8">
                <a href="#"><button>View all pictures</button></a>
            </div>
        </div>
        <!--purified-->
        <div class="purified m-24 mx-auto">
            <div class="video-embed relative mb-4 mx-auto h-16">
                <video playsinline autoplay muted loop  id="bgvid" class="absolute">
                    <source src="https://ik.imagekit.io/jumzeey/emma-video/Temiloluwa_-_Purified_ft_Aduragbemi___official_Video_1_1__5GE9ZBT9N.mp4?updatedAt=1627997850986" type="video/mp4">
                </video>
                <div class="video-info pt-64 p-8">
                    <div>
                        <h1>Purified</h1>
                    </div>
                    <div class="video-para">
                        <p>Purified is a revelation of what we need at every moment of life, a holy manifestation of the kingdom is as well into existence by the fulfillment of the work of the father on this project. </p>
                    </div>
                    <a href="https://www.youtube.com/watch?v=rgDJgUV4dHg" target="blank">
                        <div class="video-btn mt-8">
                            <button>watch the video for free</button>
                        </div>
                    </a>
                </div>                
            </div>
            <div class="video-link-img mx-auto">
                    <img lass="w-16 md:w-32 lg:w-48" src="https://ik.imagekit.io/jumzeey/emma-img/MUSIC11_1_tHI2qmc_Jp.png?updatedAt=1627998929442" alt="" srcset="">
            </div>
        </div>
        <!--Brown's eyes-->
        <div class="browns-eye p-16 mb-8">
            <div class="browns-text">
                <h4>Check out</h4>
                <h1>BROWN'S EYE</h1>
                <a href="#"><h4 class="flex">
                    <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="30" height="30"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M55.04,10.32c-24.65626,0 -44.72,20.06374 -44.72,44.72v61.92c0,24.65626 20.06374,44.72 44.72,44.72h61.92c24.65626,0 44.72,-20.06374 44.72,-44.72v-61.92c0,-24.65626 -20.06374,-44.72 -44.72,-44.72zM55.04,17.2h61.92c20.9375,0 37.84,16.9025 37.84,37.84v61.92c0,20.9375 -16.9025,37.84 -37.84,37.84h-61.92c-20.9375,0 -37.84,-16.9025 -37.84,-37.84v-61.92c0,-20.9375 16.9025,-37.84 37.84,-37.84zM127.28,37.84c-3.79972,0 -6.88,3.08028 -6.88,6.88c0,3.79972 3.08028,6.88 6.88,6.88c3.79972,0 6.88,-3.08028 6.88,-6.88c0,-3.79972 -3.08028,-6.88 -6.88,-6.88zM86,48.16c-20.85771,0 -37.84,16.98229 -37.84,37.84c0,20.85771 16.98229,37.84 37.84,37.84c20.85771,0 37.84,-16.98229 37.84,-37.84c0,-20.85771 -16.98229,-37.84 -37.84,-37.84zM86,55.04c17.13948,0 30.96,13.82052 30.96,30.96c0,17.13948 -13.82052,30.96 -30.96,30.96c-17.13948,0 -30.96,-13.82052 -30.96,-30.96c0,-17.13948 13.82052,-30.96 30.96,-30.96z"></path></g></g></svg>
                </span>official_browneyez</h4></a>
                    <div class="browns-btn mt-8">
                        <a href="{{route('browns eyez')}}">
                        <button class="mx-auto btn">See portfolio</button>
                        </a>
                    </div>
            </div>
        </div>
        <!--subscribe to newsletter-->
        @include('partials.subscribe')
@endsection