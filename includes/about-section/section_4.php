<!-- =========================================================
     INDIA DAY TRIP
     BEST SELLING TOUR PACKAGES
     LIQUID GLASS INFINITE AUTO SLIDER
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

/* =========================================================
   RESET
========================================================= */

#idt-best-selling,
#idt-best-selling *{
    box-sizing:border-box;
}


/* =========================================================
   SECTION
========================================================= */

#idt-best-selling{

    --idt-navy:#0C2D62;
    --idt-deep:#071F3F;
    --idt-blue:#123B72;
    --idt-mid:#2E6095;
    --idt-sky:#79BDF2;

    --idt-orange:#FF5D00;
    --idt-orange-soft:#FF7A2F;

    position:relative;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:18px 72px;

    background:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-best-selling .idt-best-wrapper{

    position:relative;

    width:100%;
    max-width:1762px;

    margin:0 auto;

    overflow:hidden;

    border-radius:26px;

    padding:36px 58px 38px;

    background:
        linear-gradient(
            135deg,
            #071F3F 0%,
            #0C2D62 48%,
            #123B72 100%
        );

    box-shadow:
        0 18px 45px
        rgba(12,45,98,.12);
}


/* =========================================================
   BACKGROUND PATTERN
========================================================= */

#idt-best-selling .idt-best-wrapper::before{

    content:"";

    position:absolute;
    inset:0;

    z-index:0;

    background-image:
        url("https://indiadaytrip.com/wp-content/uploads/2026/09/download-1.png");

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    opacity:.05;

    pointer-events:none;
}


/* =========================================================
   DEPTH
========================================================= */

#idt-best-selling .idt-best-wrapper::after{

    content:"";

    position:absolute;
    inset:0;

    z-index:0;

    background:
        radial-gradient(
            circle at 10% 20%,
            rgba(121,189,242,.10),
            transparent 28%
        ),
        radial-gradient(
            circle at 92% 80%,
            rgba(255,93,0,.05),
            transparent 24%
        );

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-best-selling .idt-best-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1320px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-best-selling .idt-best-header{

    text-align:center;

    margin-bottom:27px;
}


#idt-best-selling .idt-best-script{

    margin:0 0 4px;

    color:var(--idt-sky);

    font-family:"Montez",cursive;

    font-size:38px;
    line-height:1;

    font-weight:400;
}


#idt-best-selling .idt-best-heading{

    margin:0;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:31px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.6px;
}


/* =========================================================
   HEADER LINE
========================================================= */

#idt-best-selling .idt-best-head-line{

    display:flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    margin:12px auto 0;
}


#idt-best-selling .idt-best-head-line span:first-child{

    width:48px;
    height:2px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--idt-sky),
            var(--idt-orange)
        );
}


#idt-best-selling .idt-best-head-line span:last-child{

    width:6px;
    height:6px;

    background:var(--idt-orange);

    transform:rotate(45deg);
}


/* =========================================================
   SLIDER VIEWPORT
========================================================= */

#idt-best-selling .idt-best-slider{

    width:100%;

    overflow:hidden;

    position:relative;
}


/* =========================================================
   TRACK
========================================================= */

#idt-best-selling .idt-best-track{

    display:flex;

    align-items:stretch;

    width:max-content;

    will-change:transform;

    transform:translate3d(0,0,0);
}


/* =========================================================
   SLIDE
========================================================= */

#idt-best-selling .idt-best-slide{

    flex:0 0 345px;

    width:345px;

    padding-right:18px;
}


/* =========================================================
   LIQUID GLASS CARD
========================================================= */

#idt-best-selling .idt-best-card{

    position:relative;

    width:100%;
    height:100%;

    overflow:hidden;

    border-radius:18px;

    border:
        1px solid
        rgba(255,255,255,.22);

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.18) 0%,
            rgba(255,255,255,.08) 45%,
            rgba(255,255,255,.05) 100%
        );

    backdrop-filter:
        blur(18px)
        saturate(145%);

    -webkit-backdrop-filter:
        blur(18px)
        saturate(145%);

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.22),
        inset 0 -1px 0 rgba(255,255,255,.05),
        0 15px 35px rgba(0,0,0,.16);

    transition:
        transform .35s ease,
        border-color .35s ease,
        box-shadow .35s ease;
}


/* LIQUID SHINE */

#idt-best-selling .idt-best-card::before{

    content:"";

    position:absolute;

    top:-60%;
    left:-35%;

    z-index:5;

    width:65%;
    height:180%;

    transform:rotate(24deg);

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.09),
            rgba(255,255,255,.22),
            rgba(255,255,255,.07),
            transparent
        );

    pointer-events:none;

    transition:left .8s ease;
}


#idt-best-selling .idt-best-card:hover::before{
    left:95%;
}


#idt-best-selling .idt-best-card:hover{

    transform:translateY(-4px);

    border-color:
        rgba(121,189,242,.36);

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.24),
        0 20px 42px rgba(0,0,0,.20);
}


/* =========================================================
   IMAGE
========================================================= */

#idt-best-selling .idt-best-image{

    position:relative;

    width:100%;
    height:205px;

    overflow:hidden;

    border-radius:
        17px 17px 0 0;

    background:#071F3F;
}


#idt-best-selling .idt-best-image::after{

    content:"";

    position:absolute;
    inset:0;

    z-index:2;

    background:
        linear-gradient(
            180deg,
            rgba(0,0,0,.01) 35%,
            rgba(1,12,26,.16) 65%,
            rgba(1,12,26,.52) 100%
        );

    pointer-events:none;
}


#idt-best-selling .idt-best-image::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    z-index:3;

    width:72px;
    height:3px;

    background:
        linear-gradient(
            90deg,
            var(--idt-orange),
            var(--idt-orange-soft),
            var(--idt-sky)
        );
}


#idt-best-selling .idt-best-image img{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center center;

    transform:scale(1.01);

    transition:transform .65s ease;
}


#idt-best-selling .idt-best-card:hover
.idt-best-image img{

    transform:scale(1.055);
}


/* =========================================================
   CONTENT
========================================================= */

#idt-best-selling .idt-best-content{

    position:relative;

    min-height:75px;

    display:flex;

    align-items:center;

    padding:
        15px 17px 16px 20px;

    background:
        linear-gradient(
            180deg,
            rgba(255,255,255,.08),
            rgba(255,255,255,.035)
        );
}


/* ORANGE MICRO ACCENT */

#idt-best-selling .idt-best-content::before{

    content:"";

    position:absolute;

    left:0;
    top:17px;

    width:3px;
    height:34px;

    border-radius:
        0 6px 6px 0;

    background:var(--idt-orange);
}


/* =========================================================
   TITLE
========================================================= */

#idt-best-selling .idt-best-title{

    margin:0;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:18px;
    line-height:1.35;

    font-weight:600;

    letter-spacing:-.2px;
}


/* =========================================================
   LARGE LAPTOP
========================================================= */

@media(max-width:1500px){

    #idt-best-selling{

        padding:
            17px 48px;
    }


    #idt-best-selling .idt-best-wrapper{

        padding:
            34px 52px 36px;
    }


    #idt-best-selling .idt-best-slide{

        flex-basis:320px;

        width:320px;

        padding-right:17px;
    }


    #idt-best-selling .idt-best-image{
        height:195px;
    }

}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-best-selling{

        padding:
            16px 30px;
    }


    #idt-best-selling .idt-best-wrapper{

        padding:
            32px 38px 34px;

        border-radius:23px;
    }


    #idt-best-selling .idt-best-header{
        margin-bottom:24px;
    }


    #idt-best-selling .idt-best-script{
        font-size:35px;
    }


    #idt-best-selling .idt-best-heading{
        font-size:28px;
    }


    #idt-best-selling .idt-best-slide{

        flex-basis:292px;

        width:292px;

        padding-right:15px;
    }


    #idt-best-selling .idt-best-image{
        height:180px;
    }


    #idt-best-selling .idt-best-content{
        min-height:70px;
    }


    #idt-best-selling .idt-best-title{
        font-size:16px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-best-selling{

        padding:
            14px 20px;
    }


    #idt-best-selling .idt-best-wrapper{

        padding:
            30px 26px 31px;

        border-radius:21px;
    }


    #idt-best-selling .idt-best-header{
        margin-bottom:23px;
    }


    #idt-best-selling .idt-best-script{
        font-size:32px;
    }


    #idt-best-selling .idt-best-heading{
        font-size:25px;
    }


    #idt-best-selling .idt-best-slide{

        flex-basis:275px;

        width:275px;

        padding-right:14px;
    }


    #idt-best-selling .idt-best-image{
        height:170px;
    }


    #idt-best-selling .idt-best-content{
        min-height:68px;
    }


    #idt-best-selling .idt-best-title{
        font-size:15px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-best-selling{

        padding:
            12px 12px;
    }


    #idt-best-selling .idt-best-wrapper{

        padding:
            28px 17px 29px;

        border-radius:19px;
    }


    #idt-best-selling .idt-best-header{
        margin-bottom:22px;
    }


    #idt-best-selling .idt-best-script{
        font-size:31px;
    }


    #idt-best-selling .idt-best-heading{

        font-size:23px;

        line-height:1.24;
    }


    #idt-best-selling .idt-best-slide{

        flex-basis:270px;

        width:270px;

        padding-right:12px;
    }


    #idt-best-selling .idt-best-image{
        height:175px;
    }


    #idt-best-selling .idt-best-content{

        min-height:66px;

        padding:
            14px 15px 15px 18px;
    }


    #idt-best-selling .idt-best-title{
        font-size:15.5px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-best-selling{

        padding:
            9px 9px;
    }


    #idt-best-selling .idt-best-wrapper{

        padding:
            25px 13px 26px;

        border-radius:17px;
    }


    #idt-best-selling .idt-best-header{
        margin-bottom:20px;
    }


    #idt-best-selling .idt-best-script{
        font-size:29px;
    }


    #idt-best-selling .idt-best-heading{
        font-size:21px;
    }


    #idt-best-selling .idt-best-slide{

        flex-basis:245px;

        width:245px;

        padding-right:10px;
    }


    #idt-best-selling .idt-best-image{
        height:160px;
    }


    #idt-best-selling .idt-best-content{
        min-height:63px;
    }


    #idt-best-selling .idt-best-title{
        font-size:14.5px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-best-selling{

        padding:
            8px 7px;
    }


    #idt-best-selling .idt-best-wrapper{

        padding:
            23px 11px 24px;
    }


    #idt-best-selling .idt-best-script{
        font-size:27px;
    }


    #idt-best-selling .idt-best-heading{
        font-size:19px;
    }


    #idt-best-selling .idt-best-slide{

        flex-basis:225px;

        width:225px;

        padding-right:9px;
    }


    #idt-best-selling .idt-best-image{
        height:145px;
    }


    #idt-best-selling .idt-best-title{
        font-size:13.5px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-best-selling .idt-best-image img,
    #idt-best-selling .idt-best-card,
    #idt-best-selling .idt-best-card::before{
        transition:none;
    }

}

</style>


<section id="idt-best-selling">

    <div class="idt-best-wrapper">

        <div class="idt-best-container">


            <!-- HEADER -->

            <div class="idt-best-header">

                <div class="idt-best-script">
                    Our Specialties
                </div>

                <h2 class="idt-best-heading">
                    Best Selling Tour Packages
                </h2>

                <div
                    class="idt-best-head-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>

            </div>


            <!-- AUTO LOOP SLIDER -->

            <div class="idt-best-slider">

                <div class="idt-best-track">


                    <!-- INDIA TOUR PACKAGES -->

                    <div class="idt-best-slide">

                        <article class="idt-best-card">

                            <div class="idt-best-image">

                                <img
                                    src="https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=90"
                                    alt="India Tour Packages"
                                    loading="lazy">

                            </div>


                            <div class="idt-best-content">

                                <h3 class="idt-best-title">
                                    India Tour Packages
                                </h3>

                            </div>

                        </article>

                    </div>


                    <!-- TAJ MAHAL -->

                    <div class="idt-best-slide">

                        <article class="idt-best-card">

                            <div class="idt-best-image">

                                <img
                                    src="https://indiadaytrip.com/assets/img/about/about-taj.webp"
                                    alt="Taj Mahal Tour Packages"
                                    loading="lazy">

                            </div>


                            <div class="idt-best-content">

                                <h3 class="idt-best-title">
                                    Taj Mahal Tour Packages
                                </h3>

                            </div>

                        </article>

                    </div>


                    <!-- GOLDEN TRIANGLE -->

                    <div class="idt-best-slide">

                        <article class="idt-best-card">

                            <div class="idt-best-image">

                                <img
                                    src="https://indiadaytrip.com/assets/img/about/about-golden.webp"
                                    alt="Golden Triangle Tour Packages"
                                    loading="lazy">

                            </div>


                            <div class="idt-best-content">

                                <h3 class="idt-best-title">
                                    Golden Triangle Tour Packages
                                </h3>

                            </div>

                        </article>

                    </div>


                    <!-- RAJASTHAN -->

                    <div class="idt-best-slide">

                        <article class="idt-best-card">

                            <div class="idt-best-image">

                                <img
                                    src="https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=92"
                                    alt="Rajasthan Tour Packages"
                                    loading="lazy">

                            </div>


                            <div class="idt-best-content">

                                <h3 class="idt-best-title">
                                    Rajasthan Tour Packages
                                </h3>

                            </div>

                        </article>

                    </div>


                    <!-- NEW DELHI AND AGRA -->

                    <div class="idt-best-slide">

                        <article class="idt-best-card">

                            <div class="idt-best-image">

                                <img
                                    src="https://images.unsplash.com/photo-1539635278303-d4002c07eae3?auto=format&fit=crop&w=1400&q=90"
                                    alt="New Delhi and Agra Tour Packages"
                                    loading="lazy">

                            </div>


                            <div class="idt-best-content">

                                <h3 class="idt-best-title">
                                    New Delhi and Agra Tour Packages
                                </h3>

                            </div>

                        </article>

                    </div>


                    <!-- VARANASI -->

                    <div class="idt-best-slide">

                        <article class="idt-best-card">

                            <div class="idt-best-image">

                                <img
                                    src="https://indiadaytrip.com/assets/img/about/about-same.webp"
                                    alt="Varanasi Tour Packages"
                                    loading="lazy">

                            </div>


                            <div class="idt-best-content">

                                <h3 class="idt-best-title">
                                    Varanasi Tour Packages
                                </h3>

                            </div>

                        </article>

                    </div>


                </div>

            </div>


        </div>

    </div>

</section>


<script>

(function(){

    const section =
        document.querySelector("#idt-best-selling");

    if(!section){
        return;
    }


    const track =
        section.querySelector(".idt-best-track");


    if(!track){
        return;
    }


    const originalSlides =
        Array.from(track.children);


    if(!originalSlides.length){
        return;
    }


    /* =====================================================
       DUPLICATE FOR SEAMLESS LOOP
    ===================================================== */

    originalSlides.forEach(function(slide){

        const clone =
            slide.cloneNode(true);

        clone.setAttribute(
            "aria-hidden",
            "true"
        );

        track.appendChild(clone);

    });


    let position = 0;

    let originalWidth = 0;

    let lastTime = null;

    let animationFrame = null;


    /* =====================================================
       SLIDER SPEED
    ===================================================== */

    const speed = 36;


    /* =====================================================
       CALCULATE WIDTH
    ===================================================== */

    function calculateWidth(){

        originalWidth = 0;


        originalSlides.forEach(
            function(slide){

                originalWidth +=
                    slide.getBoundingClientRect().width;

            }
        );


        if(originalWidth > 0){

            position =
                position % originalWidth;

        }

    }


    /* =====================================================
       CONTINUOUS AUTO LOOP
    ===================================================== */

    function animate(time){

        if(lastTime === null){
            lastTime = time;
        }


        const delta =
            (time - lastTime) / 1000;


        lastTime = time;


        if(originalWidth > 0){

            position +=
                speed * delta;


            if(position >= originalWidth){

                position -=
                    originalWidth;

            }


            track.style.transform =
                "translate3d(" +
                (-position) +
                "px,0,0)";

        }


        animationFrame =
            requestAnimationFrame(
                animate
            );

    }


    /* =====================================================
       RESIZE
    ===================================================== */

    let resizeTimer;


    window.addEventListener(
        "resize",
        function(){

            clearTimeout(
                resizeTimer
            );


            resizeTimer =
                setTimeout(
                    calculateWidth,
                    150
                );

        }
    );


    /* =====================================================
       IMAGE LOAD
    ===================================================== */

    const images =
        section.querySelectorAll("img");


    images.forEach(
        function(image){

            if(!image.complete){

                image.addEventListener(
                    "load",
                    calculateWidth
                );

            }

        }
    );


    /* =====================================================
       INIT
    ===================================================== */

    calculateWidth();


    if(
        !window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        ).matches
    ){

        animationFrame =
            requestAnimationFrame(
                animate
            );

    }

})();

</script>