// humburger menu js

document.getElementById("hamburger").onclick = function toggleMenu() {
    const navToggle = document.getElementsByClassName("toggle");
    for (let i = 0; i < navToggle.length; i++) {
      navToggle.item(i).classList.toggle("hidden");
    }
  };

  // owl carousel js
  $(document).ready(function(){
    $("#caro1").owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        dots:false,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false,
                loop:true
            },
            600:{
                items:1,
                nav:false,
                loop:true
            },
            1000:{
                items:1,
                nav:false,
                loop:true
            }
        }
    });
  });
        //caro 2 carousel
        $(document).ready(function(){
            $("#caro2").owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                dots:false,
                nav:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        loop:true
                    },
                    600:{
                        items:2,
                        nav:true,
                        loop:true
                    },
                    1000:{
                        items:3,
                        nav:true,
                        loop:true
                    }
                }
            });
          });

          //caro 3 carousel
        $(document).ready(function(){
            $("#caro3").owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                dots:false,
                nav:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        loop:true
                    },
                    600:{
                        items:1,
                        nav:true,
                        loop:true
                    },
                    1000:{
                        items:1,
                        nav:true,
                        loop:true
                    }
                }
            });
          });