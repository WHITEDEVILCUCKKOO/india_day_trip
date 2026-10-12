<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
#idt-travel-gallery-final,
#idt-travel-gallery-final *{
    box-sizing:border-box;
}

#idt-travel-gallery-final{
    --idt-navy:#0C2D62;
    --idt-blue:#2E6095;

    position:relative;
    width:100%;
    margin:0;

    padding:50px 24px 70px;

    overflow:hidden;

    background:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    isolation:isolate;
}


/* =========================================================
   MAIN WRAPPER
========================================================= */

#idt-travel-gallery-final .idt-gallery-wrap{
    position:relative;
    z-index:5;

    width:100%;
    max-width:1600px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-travel-gallery-final .idt-gallery-heading{
    position:relative;
    z-index:20;

    margin:0 auto 52px;

    text-align:center;
}


#idt-travel-gallery-final .idt-gallery-script{
    display:block;

    margin:0 0 3px;

    color:#2E6095;

    font-family:"Montez",cursive;

    font-size:39px;
    line-height:1;
    font-weight:400;
}


#idt-travel-gallery-final .idt-gallery-title{
    margin:0;

    color:#0C2D62;

    font-family:"Playfair Display",Georgia,serif;

    font-size:43px;
    line-height:1.1;
    font-weight:600;

    letter-spacing:-1.2px;
}



#idt-travel-gallery-final .idt-gallery-title::after{
    content:"";
    display:block;
    width:44px;
    height:2px;
    margin:15px auto 0;
    background:#FF5D00;
    border-radius:999px;
}

/* =========================================================
   SIDE SHAPE
========================================================= */

#idt-travel-gallery-final .idt-side-shape{
    position:absolute;

    z-index:2;

    left:6.5%;
    top:218px;

    width:92px;

    pointer-events:none;
    user-select:none;

    animation:
        idtShapeFloat
        4.5s
        ease-in-out
        infinite;
}


#idt-travel-gallery-final .idt-side-shape img{
    width:100%;
    height:auto;

    display:block;

    object-fit:contain;
}


@keyframes idtShapeFloat{

    0%{
        transform:translate3d(-4px,0,0);
    }

    50%{
        transform:translate3d(8px,0,0);
    }

    100%{
        transform:translate3d(-4px,0,0);
    }

}


/* =========================================================
   CENTERED GALLERY OUTER
========================================================= */

#idt-travel-gallery-final .idt-gallery-center{
    width:100%;

    display:flex;

    justify-content:center;

    align-items:flex-start;
}


/* =========================================================
   CENTERED STAGE
========================================================= */

#idt-travel-gallery-final .idt-gallery-stage{
    position:relative;

    width:1420px;
    height:625px;

    flex:0 0 1420px;

    margin:0 auto;
}


/* =========================================================
   COMMON CARD
========================================================= */

#idt-travel-gallery-final .idt-gallery-card{
    position:absolute;

    overflow:hidden;

    border-radius:20px;

    background:#EEF4FA;

    transform:translate3d(0,0,0);

    backface-visibility:hidden;
    -webkit-backface-visibility:hidden;

    will-change:transform;

    transition:
        box-shadow .35s ease;
}


#idt-travel-gallery-final .idt-gallery-card img{
    display:block;

    width:100%;
    height:100%;

    margin:0;
    padding:0;

    object-fit:cover;
    object-position:center;

    transform:scale(1);

    transition:transform .55s ease;
}


/* ELEMENTOR FIX */

.elementor
#idt-travel-gallery-final
.idt-gallery-card img,

.elementor-widget-html
#idt-travel-gallery-final
.idt-gallery-card img{

    width:100% !important;
    height:100% !important;

    max-width:none !important;

    object-fit:cover !important;
}


/* =========================================================
   FLOATING ANIMATION
========================================================= */

#idt-travel-gallery-final .idt-gallery-card-1{
    animation:idtGalleryMoveOne 6s ease-in-out infinite;
}

#idt-travel-gallery-final .idt-gallery-card-2{
    animation:idtGalleryMoveTwo 7s ease-in-out infinite;
}

#idt-travel-gallery-final .idt-gallery-card-3{
    animation:idtGalleryMoveOne 7.5s ease-in-out infinite;
}

#idt-travel-gallery-final .idt-gallery-card-4{
    animation:idtGalleryMoveCenter 8s ease-in-out infinite;
}

#idt-travel-gallery-final .idt-gallery-card-5{
    animation:idtGalleryMoveTwo 7.2s ease-in-out infinite;
}

#idt-travel-gallery-final .idt-gallery-card-6{
    animation:idtGalleryMoveOne 6.8s ease-in-out infinite;
}

#idt-travel-gallery-final .idt-gallery-card-7{
    animation:idtGalleryMoveTwo 6.3s ease-in-out infinite;
}


@keyframes idtGalleryMoveOne{

    0%{
        transform:translate3d(-4px,0,0);
    }

    50%{
        transform:translate3d(5px,0,0);
    }

    100%{
        transform:translate3d(-4px,0,0);
    }

}


@keyframes idtGalleryMoveTwo{

    0%{
        transform:translate3d(5px,0,0);
    }

    50%{
        transform:translate3d(-5px,0,0);
    }

    100%{
        transform:translate3d(5px,0,0);
    }

}


@keyframes idtGalleryMoveCenter{

    0%{
        transform:translate3d(-3px,0,0);
    }

    50%{
        transform:translate3d(3px,0,0);
    }

    100%{
        transform:translate3d(-3px,0,0);
    }

}


/* =========================================================
   HOVER
========================================================= */

@media(hover:hover) and (pointer:fine){

    #idt-travel-gallery-final .idt-gallery-card:hover{
        z-index:30;

        animation-play-state:paused;

        box-shadow:
            0 14px 30px
            rgba(12,45,98,.11);
    }


    #idt-travel-gallery-final .idt-gallery-card:hover img{
        transform:scale(1.035);
    }

}


/* =========================================================
   CENTERED DESKTOP POSITIONS
========================================================= */

/*
   Stage width = 1420px
   Full mosaic is centered inside this stage.
*/


/* LEFT SMALL */

#idt-travel-gallery-final .idt-gallery-card-1{
    width:270px;
    height:205px;

    left:0;
    top:230px;
}


/* RED FORT */

#idt-travel-gallery-final .idt-gallery-card-2{
    width:270px;
    height:286px;

    left:285px;
    top:58px;
}


/* TAJ LOWER */

#idt-travel-gallery-final .idt-gallery-card-3{
    width:270px;
    height:278px;

    left:285px;
    top:358px;
}


/* QUTUB MINAR CENTER */

#idt-travel-gallery-final .idt-gallery-card-4{
    width:270px;
    height:505px;

    left:575px;
    top:98px;
}


/* TAJ GROUP TOP */

#idt-travel-gallery-final .idt-gallery-card-5{
    width:270px;
    height:310px;

    left:865px;
    top:25px;
}


/* FRIEND GROUP BOTTOM */

#idt-travel-gallery-final .idt-gallery-card-6{
    width:270px;
    height:278px;

    left:865px;
    top:350px;
}


/* RIGHT SMALL */

#idt-travel-gallery-final .idt-gallery-card-7{
    width:270px;
    height:205px;

    left:1150px;
    top:230px;
}


/* =========================================================
   OBJECT POSITION
========================================================= */

#idt-travel-gallery-final .idt-gallery-card-1 img{
    object-position:center 43%;
}

#idt-travel-gallery-final .idt-gallery-card-2 img{
    object-position:center center;
}

#idt-travel-gallery-final .idt-gallery-card-3 img{
    object-position:center center;
}

#idt-travel-gallery-final .idt-gallery-card-4 img{
    object-position:center center;
}

#idt-travel-gallery-final .idt-gallery-card-5 img{
    object-position:center 42%;
}

#idt-travel-gallery-final .idt-gallery-card-6 img{
    object-position:center center;
}

#idt-travel-gallery-final .idt-gallery-card-7 img{
    object-position:center center;
}


/* =========================================================
   LARGE LAPTOP
========================================================= */

@media(max-width:1500px){

    #idt-travel-gallery-final .idt-gallery-center{
        height:570px;
    }


    #idt-travel-gallery-final .idt-gallery-stage{
        transform:scale(.88);

        transform-origin:center top;
    }

}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1250px){

    #idt-travel-gallery-final{
        padding-top:44px;
        padding-bottom:52px;
    }


    #idt-travel-gallery-final .idt-gallery-heading{
        margin-bottom:40px;
    }


    #idt-travel-gallery-final .idt-gallery-script{
        font-size:34px;
    }


    #idt-travel-gallery-final .idt-gallery-title{
        font-size:38px;
    }


    #idt-travel-gallery-final .idt-gallery-center{
        height:500px;
    }


    #idt-travel-gallery-final .idt-gallery-stage{
        transform:scale(.75);

        transform-origin:center top;
    }


    #idt-travel-gallery-final .idt-side-shape{
        left:3%;
        top:190px;

        width:75px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-travel-gallery-final{
        padding:50px 20px 58px;
    }


    #idt-travel-gallery-final .idt-gallery-script{
        font-size:31px;
    }


    #idt-travel-gallery-final .idt-gallery-title{
        font-size:34px;
    }


    #idt-travel-gallery-final .idt-gallery-center{
        height:auto;

        display:block;
    }


    #idt-travel-gallery-final .idt-gallery-stage{
        position:relative;

        width:100%;
        height:auto;

        transform:none;

        display:grid;

        grid-template-columns:
            repeat(3,minmax(0,1fr));

        grid-auto-rows:230px;

        gap:15px;
    }


    #idt-travel-gallery-final .idt-gallery-card{
        position:relative;

        inset:auto;

        width:auto;
        height:auto;

        border-radius:17px;
    }


    #idt-travel-gallery-final .idt-gallery-card-1{
        grid-column:1;
        grid-row:2;
    }


    #idt-travel-gallery-final .idt-gallery-card-2{
        grid-column:1;
        grid-row:1;
    }


    #idt-travel-gallery-final .idt-gallery-card-3{
        grid-column:1;
        grid-row:3;
    }


    #idt-travel-gallery-final .idt-gallery-card-4{
        grid-column:2;
        grid-row:1 / span 2;
    }


    #idt-travel-gallery-final .idt-gallery-card-5{
        grid-column:3;
        grid-row:1;
    }


    #idt-travel-gallery-final .idt-gallery-card-6{
        grid-column:3;
        grid-row:2;
    }


    #idt-travel-gallery-final .idt-gallery-card-7{
        grid-column:2 / span 2;
        grid-row:3;
    }


    #idt-travel-gallery-final .idt-side-shape{
        display:none;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:640px){

    #idt-travel-gallery-final{
        padding:42px 15px 48px;
    }


    #idt-travel-gallery-final .idt-gallery-script{
        font-size:28px;
    }


    #idt-travel-gallery-final .idt-gallery-title{
        font-size:30px;
    }


    #idt-travel-gallery-final .idt-gallery-stage{
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        grid-auto-rows:185px;

        gap:12px;
    }


    #idt-travel-gallery-final .idt-gallery-card{
        border-radius:14px;

        animation:none !important;
    }


    #idt-travel-gallery-final .idt-gallery-card-1{
        grid-column:1;
        grid-row:1;
    }


    #idt-travel-gallery-final .idt-gallery-card-2{
        grid-column:2;
        grid-row:1;
    }


    #idt-travel-gallery-final .idt-gallery-card-3{
        grid-column:1;
        grid-row:2;
    }


    #idt-travel-gallery-final .idt-gallery-card-4{
        grid-column:2;
        grid-row:2 / span 2;
    }


    #idt-travel-gallery-final .idt-gallery-card-5{
        grid-column:1;
        grid-row:3;
    }


    #idt-travel-gallery-final .idt-gallery-card-6{
        grid-column:1;
        grid-row:4;
    }


    #idt-travel-gallery-final .idt-gallery-card-7{
        grid-column:2;
        grid-row:4;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-travel-gallery-final .idt-gallery-stage{
        grid-auto-rows:160px;

        gap:10px;
    }


    #idt-travel-gallery-final .idt-gallery-script{
        font-size:26px;
    }


    #idt-travel-gallery-final .idt-gallery-title{
        font-size:28px;
    }

}


/* REDUCED MOTION */

@media(prefers-reduced-motion:reduce){

    #idt-travel-gallery-final .idt-gallery-card,
    #idt-travel-gallery-final .idt-side-shape{
        animation:none !important;
    }

}
</style>


<section id="idt-travel-gallery-final">


    <!-- SIDE SHAPE -->

    <div class="idt-side-shape" aria-hidden="true">

        <img
            src="https://indiadaytrip.com/assets/img/shape/shape_4.webp"
            alt="">

    </div>



    <div class="idt-gallery-wrap">


        <!-- HEADER -->

        <div class="idt-gallery-heading">

            <span class="idt-gallery-script">
                Capture Your Memories
            </span>

            <h2 class="idt-gallery-title">
                Travel Gallery
            </h2>

        </div>



        <!-- CENTER HOLDER -->

        <div class="idt-gallery-center">


            <div class="idt-gallery-stage">


                <div class="idt-gallery-card idt-gallery-card-1">

                    <img
                        src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1800&q=85"
                        alt="Taj Mahal Agra India travel"
                        loading="lazy"
                        decoding="async"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/about/about-taj.webp';">

                </div>



                <div class="idt-gallery-card idt-gallery-card-2">

                    <img
                        src="https://s7ap1.scene7.com/is/image/incredibleindia/red-fort-delhi1-attr-hero?qlt=90"
                        alt="Red Fort Delhi India"
                        loading="lazy"
                        decoding="async"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/gallery/hg2.webp';">

                </div>



                <div class="idt-gallery-card idt-gallery-card-3">

                    <img
                        src="https://images.unsplash.com/photo-1602643163983-ed0babc39797?auto=format&fit=crop&w=1800&q=85"
                        alt="Hawa Mahal Jaipur Rajasthan"
                        loading="lazy"
                        decoding="async"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/gallery/hg3.webp';">

                </div>



                <div class="idt-gallery-card idt-gallery-card-4">

                    <img
                        src="https://images.unsplash.com/photo-1752661497642-a185a43d41b3?auto=format&fit=crop&w=1800&q=85"
                        alt="Qutub Minar Delhi India"
                        loading="lazy"
                        decoding="async"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/gallery/hg4.webp';">

                </div>



                <div class="idt-gallery-card idt-gallery-card-5">

                    <img
                        src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1800&q=85"
                        alt="India Gate New Delhi"
                        loading="lazy"
                        decoding="async"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/home/about.webp';">

                </div>



                <div class="idt-gallery-card idt-gallery-card-6">

                    <img
                        src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1800&q=85"
                        alt="Taj Mahal heritage tour India"
                        loading="lazy"
                        decoding="async"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/gallery/hg6.webp';">

                </div>



                <div class="idt-gallery-card idt-gallery-card-7">

                    <img
                        src="https://cdn.audleytravel.com/4767/3405/79/209236-the-ghats-varanasi.jpg"
                        alt="Varanasi Ghats India travel"
                        loading="lazy"
                        decoding="async"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/tours-image/1777026616_69eb46389383f.webp';">

                </div>


            </div>

        </div>


    </div>

</section>