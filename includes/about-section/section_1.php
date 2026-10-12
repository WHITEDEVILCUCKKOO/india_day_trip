<!-- =========================================================
     INDIA DAY TRIP — ABOUT HERO
     FULL DISPLAY COVER + CORRECT BRAND COLORS
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>

/* =========================================================
   BASE
========================================================= */

#idt-about-premium-hero,
#idt-about-premium-hero *{
    box-sizing:border-box;
}

#idt-about-premium-hero{

    --idt-navy:#0C2D62;
    --idt-deep-blue:#123B72;
    --idt-mid-blue:#2E6095;

    --idt-sky:#79BDF2;
    --idt-sky-light:#A7D8FF;

    --idt-orange:#FF5D00;
    --idt-orange-soft:#FF7A2F;

    --idt-white:#FFFFFF;

    position:relative;

    width:100%;
    max-width:100%;

    min-height:100svh;

    display:flex;
    align-items:center;

    overflow:hidden;

    padding:76px 24px;

    font-family:"Manrope",Arial,sans-serif;

    background:
        linear-gradient(
            90deg,
            rgba(1,9,20,.91) 0%,
            rgba(5,24,49,.87) 30%,
            rgba(8,41,82,.72) 60%,
            rgba(3,15,31,.46) 100%
        ),
        url("https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=2200&q=92")
        center center / cover no-repeat;

    isolation:isolate;
}


/* =========================================================
   CINEMATIC DEPTH
========================================================= */

#idt-about-premium-hero::before{

    content:"";

    position:absolute;
    inset:0;

    z-index:0;

    background:
        linear-gradient(
            180deg,
            rgba(0,0,0,.13) 0%,
            rgba(0,0,0,.02) 43%,
            rgba(0,7,17,.35) 100%
        );

    pointer-events:none;
}


/* =========================================================
   SUBTLE BRAND GLOW
========================================================= */

#idt-about-premium-hero::after{

    content:"";

    position:absolute;
    inset:0;

    z-index:0;

    background:
        radial-gradient(
            circle at 80% 20%,
            rgba(121,189,242,.10),
            transparent 30%
        ),
        radial-gradient(
            circle at 90% 82%,
            rgba(255,93,0,.055),
            transparent 22%
        );

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-about-premium-hero .idt-aph-container{

    position:relative;

    z-index:4;

    width:100%;
    max-width:1280px;

    margin:0 auto;
}


/* =========================================================
   GRID
========================================================= */

#idt-about-premium-hero .idt-aph-grid{

    display:grid;

    grid-template-columns:
        minmax(0,1.05fr)
        minmax(420px,.95fr);

    gap:66px;

    align-items:center;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#idt-about-premium-hero .idt-aph-content{

    width:100%;
    max-width:720px;
}


/* =========================================================
   SCRIPT
========================================================= */

#idt-about-premium-hero .idt-aph-script{

    margin:0 0 8px !important;
    padding:0 !important;

    color:var(--idt-sky) !important;

    font-family:"Montez",cursive !important;

    font-size:39px;
    line-height:1;

    font-weight:400;

    text-shadow:
        0 2px 12px rgba(0,0,0,.38);
}


/* =========================================================
   ACCENT LINE
========================================================= */

#idt-about-premium-hero .idt-aph-line{

    display:flex;

    align-items:center;

    gap:9px;

    width:max-content;

    margin:0 0 20px;
}


#idt-about-premium-hero .idt-aph-line span:first-child{

    display:block;

    width:55px;
    height:2px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--idt-sky),
            var(--idt-orange)
        );
}


#idt-about-premium-hero .idt-aph-line span:last-child{

    display:block;

    width:7px;
    height:7px;

    background:var(--idt-orange);

    transform:rotate(45deg);

    box-shadow:
        0 0 18px rgba(255,93,0,.30);
}


/* =========================================================
   MAIN HEADING
========================================================= */

#idt-about-premium-hero .idt-aph-title{

    max-width:710px;

    margin:0 0 20px !important;
    padding:0 !important;

    color:#FFFFFF !important;

    font-family:"Playfair Display",Georgia,serif !important;

    font-size:54px;
    line-height:1.08;

    font-weight:600;

    letter-spacing:-1.25px;

    text-shadow:
        0 4px 15px rgba(0,0,0,.50),
        0 12px 30px rgba(0,0,0,.24);
}


/* =========================================================
   FOCUS WORD
========================================================= */

#idt-about-premium-hero .idt-aph-title span{

    color:var(--idt-sky) !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#idt-about-premium-hero .idt-aph-desc{

    max-width:665px;

    margin:0 0 24px !important;
    padding:0 !important;

    color:rgba(255,255,255,.88) !important;

    font-size:14px;
    line-height:1.8;

    font-weight:400;

    text-shadow:
        0 2px 10px rgba(0,0,0,.38);
}


/* =========================================================
   BREADCRUMB
========================================================= */

#idt-about-premium-hero .idt-aph-breadcrumb{

    display:inline-flex;

    align-items:center;

    gap:10px;

    padding:10px 17px;

    border:
        1px solid
        rgba(255,255,255,.18);

    border-radius:999px;

    background:
        rgba(3,18,38,.52);

    backdrop-filter:blur(10px);
    -webkit-backdrop-filter:blur(10px);

    color:
        rgba(255,255,255,.75) !important;

    font-size:11px;
    line-height:1.3;

    font-weight:600;

    box-shadow:
        0 10px 30px
        rgba(0,0,0,.12);
}


#idt-about-premium-hero .idt-aph-breadcrumb a,
#idt-about-premium-hero .idt-aph-breadcrumb a:link,
#idt-about-premium-hero .idt-aph-breadcrumb a:visited{

    color:#FFFFFF !important;

    text-decoration:none !important;

    transition:color .25s ease;
}


#idt-about-premium-hero .idt-aph-breadcrumb a:hover,
#idt-about-premium-hero .idt-aph-breadcrumb a:focus{

    color:var(--idt-orange-soft) !important;
}


#idt-about-premium-hero .idt-aph-arrow{

    color:var(--idt-orange) !important;

    font-weight:700;
}


/* =========================================================
   STATS
========================================================= */

#idt-about-premium-hero .idt-aph-stats{

    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap:11px;

    max-width:690px;

    margin-top:27px;
}


#idt-about-premium-hero .idt-aph-stat{

    position:relative;

    min-height:84px;

    padding:14px 15px;

    overflow:hidden;

    border:
        1px solid
        rgba(255,255,255,.13);

    border-radius:11px;

    background:
        rgba(3,22,47,.48);

    backdrop-filter:blur(9px);
    -webkit-backdrop-filter:blur(9px);

    box-shadow:
        0 10px 28px
        rgba(0,0,0,.10);
}


#idt-about-premium-hero .idt-aph-stat::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    width:42px;
    height:3px;

    background:
        linear-gradient(
            90deg,
            var(--idt-orange),
            var(--idt-sky)
        );

    border-radius:0 0 8px 0;
}


#idt-about-premium-hero .idt-aph-stat strong{

    display:block;

    margin:0 0 5px;

    color:#FFFFFF !important;

    font-family:"Playfair Display",Georgia,serif !important;

    font-size:17px;
    line-height:1.2;

    font-weight:600;
}


#idt-about-premium-hero .idt-aph-stat span{

    display:block;

    color:rgba(255,255,255,.62) !important;

    font-size:7.5px;
    line-height:1.45;

    font-weight:600;

    text-transform:uppercase;

    letter-spacing:.06em;
}


/* =========================================================
   RIGHT VISUAL
========================================================= */

#idt-about-premium-hero .idt-aph-visual{

    position:relative;

    width:100%;

    min-height:520px;
}


/* =========================================================
   LARGE IMAGE CARD
========================================================= */

#idt-about-premium-hero .idt-aph-glass-card{

    position:absolute;

    top:50%;
    right:0;

    width:450px;

    padding:12px 12px 18px;

    overflow:hidden;

    border:
        1px solid
        rgba(255,255,255,.19);

    border-radius:20px;

    background:
        rgba(3,20,42,.76);

    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);

    box-shadow:
        0 30px 70px
        rgba(0,0,0,.30);

    transform:translateY(-50%);
}


/* =========================================================
   CARD TOP ACCENT
========================================================= */

#idt-about-premium-hero .idt-aph-glass-card::before{

    content:"";

    position:absolute;

    top:0;
    left:28px;

    z-index:3;

    width:92px;
    height:4px;

    border-radius:0 0 10px 10px;

    background:
        linear-gradient(
            90deg,
            var(--idt-orange),
            var(--idt-orange-soft),
            var(--idt-sky)
        );
}


/* =========================================================
   IMAGE
========================================================= */

#idt-about-premium-hero .idt-aph-card-image{

    position:relative;

    width:100%;
    height:345px;

    overflow:hidden;

    border-radius:13px;

    background:#172638;
}


#idt-about-premium-hero .idt-aph-card-image::after{

    content:"";

    position:absolute;
    inset:0;

    background:
        linear-gradient(
            180deg,
            rgba(0,0,0,0) 55%,
            rgba(2,14,30,.24) 100%
        );

    pointer-events:none;
}


#idt-about-premium-hero .idt-aph-card-image img{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:transform .65s ease;
}


#idt-about-premium-hero
.idt-aph-glass-card:hover
.idt-aph-card-image img{

    transform:scale(1.045);
}


/* =========================================================
   IMAGE COPY
========================================================= */

#idt-about-premium-hero .idt-aph-card-copy{

    padding:14px 5px 1px;
}


#idt-about-premium-hero .idt-aph-card-copy small{

    display:block;

    margin-bottom:5px;

    color:var(--idt-orange-soft) !important;

    font-size:8px;
    line-height:1.4;

    font-weight:700;

    text-transform:uppercase;

    letter-spacing:.14em;
}


#idt-about-premium-hero .idt-aph-card-copy strong{

    display:block;

    color:#FFFFFF !important;

    font-family:"Playfair Display",Georgia,serif !important;

    font-size:17px;
    line-height:1.4;

    font-weight:600;
}


/* =========================================================
   DECORATIVE CIRCLE
========================================================= */

#idt-about-premium-hero .idt-aph-circle{

    position:absolute;

    z-index:1;

    right:-120px;
    top:-130px;

    width:370px;
    height:370px;

    border-radius:50%;

    border:
        1px solid
        rgba(121,189,242,.12);

    pointer-events:none;
}


#idt-about-premium-hero .idt-aph-circle::before{

    content:"";

    position:absolute;

    inset:48px;

    border-radius:50%;

    border:
        1px solid
        rgba(255,93,0,.08);
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-about-premium-hero{

        min-height:100svh;

        padding:
            66px 22px;
    }


    #idt-about-premium-hero .idt-aph-container{
        max-width:1080px;
    }


    #idt-about-premium-hero .idt-aph-grid{

        grid-template-columns:
            minmax(0,1fr)
            390px;

        gap:46px;
    }


    #idt-about-premium-hero .idt-aph-script{
        font-size:34px;
    }


    #idt-about-premium-hero .idt-aph-title{
        font-size:46px;
    }


    #idt-about-premium-hero .idt-aph-desc{
        font-size:13px;
    }


    #idt-about-premium-hero .idt-aph-visual{
        min-height:460px;
    }


    #idt-about-premium-hero .idt-aph-glass-card{
        width:385px;
    }


    #idt-about-premium-hero .idt-aph-card-image{
        height:285px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px) and (min-width:768px){

    #idt-about-premium-hero{

        min-height:100svh;

        padding:
            54px 20px;

        background:
            linear-gradient(
                90deg,
                rgba(1,10,22,.90) 0%,
                rgba(6,30,61,.82) 48%,
                rgba(5,30,62,.62) 100%
            ),
            url("https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1800&q=90")
            center center / cover no-repeat;
    }


    #idt-about-premium-hero .idt-aph-container{

        width:100%;
        max-width:900px;
    }


    #idt-about-premium-hero .idt-aph-grid{

        grid-template-columns:
            minmax(0,1fr)
            310px;

        gap:30px;
    }


    #idt-about-premium-hero .idt-aph-script{
        font-size:29px;
    }


    #idt-about-premium-hero .idt-aph-title{

        font-size:35px;

        line-height:1.13;
    }


    #idt-about-premium-hero .idt-aph-desc{

        font-size:11.5px;

        line-height:1.68;
    }


    #idt-about-premium-hero .idt-aph-stats{

        gap:7px;

        margin-top:20px;
    }


    #idt-about-premium-hero .idt-aph-stat{

        min-height:72px;

        padding:
            10px 9px;
    }


    #idt-about-premium-hero .idt-aph-stat strong{
        font-size:13px;
    }


    #idt-about-premium-hero .idt-aph-stat span{
        font-size:6px;
    }


    #idt-about-premium-hero .idt-aph-visual{
        min-height:370px;
    }


    #idt-about-premium-hero .idt-aph-glass-card{

        width:300px;
    }


    #idt-about-premium-hero .idt-aph-card-image{
        height:225px;
    }


    #idt-about-premium-hero .idt-aph-card-copy strong{
        font-size:13px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-about-premium-hero{

        min-height:auto;

        padding:
            52px 15px 46px;

        background:
            linear-gradient(
                180deg,
                rgba(1,12,27,.88) 0%,
                rgba(5,30,62,.82) 52%,
                rgba(1,12,27,.91) 100%
            ),
            url("https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=90")
            center center / cover no-repeat;
    }


    #idt-about-premium-hero .idt-aph-grid{

        display:flex;

        flex-direction:column;

        gap:34px;
    }


    #idt-about-premium-hero .idt-aph-content{

        width:100%;
        max-width:600px;

        margin:0 auto;

        text-align:center;
    }


    #idt-about-premium-hero .idt-aph-script{
        font-size:31px;
    }


    #idt-about-premium-hero .idt-aph-line{

        justify-content:center;

        margin:
            0 auto 16px;
    }


    #idt-about-premium-hero .idt-aph-title{

        max-width:580px;

        margin:
            0 auto 18px !important;

        font-size:34px;

        line-height:1.14;
    }


    #idt-about-premium-hero .idt-aph-desc{

        max-width:570px;

        margin:
            0 auto 22px !important;

        font-size:12.5px;
        line-height:1.72;

        text-align:center;
    }


    #idt-about-premium-hero .idt-aph-stats{

        width:100%;
        max-width:520px;

        margin:
            24px auto 0;

        gap:8px;
    }


    #idt-about-premium-hero .idt-aph-stat{

        min-height:75px;

        padding:
            10px 8px;
    }


    #idt-about-premium-hero .idt-aph-stat strong{
        font-size:12px;
    }


    #idt-about-premium-hero .idt-aph-stat span{
        font-size:5.8px;
    }


    #idt-about-premium-hero .idt-aph-visual{

        width:100%;
        max-width:450px;

        min-height:auto;

        margin:0 auto;
    }


    #idt-about-premium-hero .idt-aph-glass-card{

        position:relative;

        top:auto;
        right:auto;

        width:100%;

        max-width:410px;

        margin:0 auto;

        padding:
            10px 10px 15px;

        transform:none;
    }


    #idt-about-premium-hero .idt-aph-card-image{
        height:300px;
    }


    #idt-about-premium-hero .idt-aph-circle{
        display:none;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-about-premium-hero{

        padding:
            46px 13px 40px;
    }


    #idt-about-premium-hero .idt-aph-script{
        font-size:28px;
    }


    #idt-about-premium-hero .idt-aph-title{
        font-size:29px;
    }


    #idt-about-premium-hero .idt-aph-desc{
        font-size:12px;
    }


    #idt-about-premium-hero .idt-aph-stats{

        grid-template-columns:1fr;

        max-width:310px;
    }


    #idt-about-premium-hero .idt-aph-stat{

        min-height:auto;

        padding:
            12px 13px;
    }


    #idt-about-premium-hero .idt-aph-stat strong{
        font-size:13px;
    }


    #idt-about-premium-hero .idt-aph-stat span{
        font-size:6.5px;
    }


    #idt-about-premium-hero .idt-aph-glass-card{
        max-width:360px;
    }


    #idt-about-premium-hero .idt-aph-card-image{
        height:255px;
    }

}


/* =========================================================
   390PX
========================================================= */

@media(max-width:390px){

    #idt-about-premium-hero{

        padding-left:12px;
        padding-right:12px;
    }


    #idt-about-premium-hero .idt-aph-title{
        font-size:27px;
    }


    #idt-about-premium-hero .idt-aph-card-image{
        height:235px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-about-premium-hero{

        padding:
            42px 10px 36px;
    }


    #idt-about-premium-hero .idt-aph-script{
        font-size:26px;
    }


    #idt-about-premium-hero .idt-aph-title{
        font-size:25px;
    }


    #idt-about-premium-hero .idt-aph-desc{
        font-size:11.5px;
    }


    #idt-about-premium-hero .idt-aph-card-image{
        height:215px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-about-premium-hero .idt-aph-card-image img{
        transition:none;
    }

}

</style>


<section id="idt-about-premium-hero">


    <div
        class="idt-aph-circle"
        aria-hidden="true">
    </div>


    <div class="idt-aph-container">

        <div class="idt-aph-grid">


            <!-- =================================================
                 LEFT CONTENT
            ================================================== -->

            <div class="idt-aph-content">


                <p class="idt-aph-script">
                    About India Day Trip
                </p>


                <div
                    class="idt-aph-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>


                <h1 class="idt-aph-title">

                    India Is Better When You Leave Room for the

                    <span>
                        Unexpected
                    </span>

                </h1>


                <p class="idt-aph-desc">
                    You can plan every hotel, monument, and transfer, but the moments you remember are usually the ones you never planned. India Day Trip leaves room for the unexpected; quiet streets, shared chai, hidden corners, and experiences that make your journey truly yours.
                </p>


                <div
                    class="idt-aph-breadcrumb"
                    aria-label="Breadcrumb">

                    <a href="/">
                        Home
                    </a>

                    <span class="idt-aph-arrow">
                        →
                    </span>

                    <span>
                        About India Day Trip
                    </span>

                </div>


                <!-- =================================================
                     STATS
                ================================================== -->

                <div class="idt-aph-stats">


                    <div class="idt-aph-stat">

                        <strong>
                            Since 2015
                        </strong>

                        <span>
                            Running Since 2015
                        </span>

                    </div>


                    <div class="idt-aph-stat">

                        <strong>
                            Tested Routes
                        </strong>

                        <span>
                            Every Route Tested
                        </span>

                    </div>


                    <div class="idt-aph-stat">

                        <strong>
                            Worldwide
                        </strong>

                        <span>
                            International Travelers
                        </span>

                    </div>


                </div>


            </div>


            <!-- =================================================
                 RIGHT IMAGE
            ================================================== -->

            <div class="idt-aph-visual">


                <div class="idt-aph-glass-card">


                    <div class="idt-aph-card-image">

                        <img
                            src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=92"
                            alt="India Day Trip Travel Experience"
                            loading="eager"
                            fetchpriority="high">

                    </div>


                    <div class="idt-aph-card-copy">

                        <small>
                            India Day Trip
                        </small>

                        <strong>
                            Designed for Memories, Not Just Miles
                        </strong>

                    </div>


                </div>


            </div>


        </div>

    </div>

</section>