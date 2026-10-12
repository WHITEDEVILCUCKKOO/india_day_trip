<!-- =========================================================
     INDIA DAY TRIP
     GOLDEN TRIANGLE TOUR PACKAGES
     SECTION 02 — TOUR INTRODUCTION
     SAME DESIGN AS TAJ MAHAL SERVICE PAGE
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

/* =========================================================
   RESET — ONLY THIS SECTION
========================================================= */

#idt-gt-intro,
#idt-gt-intro *{
    box-sizing:border-box;
}


/* =========================================================
   SECTION
========================================================= */

#idt-gt-intro{

    --idt-navy:#0C2D62;
    --idt-deep:#071F3F;
    --idt-blue:#123B72;
    --idt-mid:#2E6095;
    --idt-sky:#79BDF2;

    --idt-orange:#FF5D00;
    --idt-orange-soft:#FF7A2F;

    --idt-dark:#171817;
    --idt-text:#647184;

    --idt-white:#FFFFFF;
    --idt-warm:#FCFAF6;
    --idt-cream:#F7F3E9;
    --idt-line:#E3E8ED;

    position:relative;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:74px 24px;

    background:
        radial-gradient(
            circle at 5% 18%,
            rgba(121,189,242,.10),
            transparent 24%
        ),
        radial-gradient(
            circle at 95% 88%,
            rgba(255,93,0,.045),
            transparent 23%
        ),
        #FCFAF6;

    font-family:
        "Manrope",
        Arial,
        sans-serif;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#idt-gt-intro::before{

    content:"";

    position:absolute;

    width:360px;
    height:360px;

    left:-220px;
    bottom:-210px;

    border-radius:50%;

    border:
        1px solid
        rgba(12,45,98,.07);

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-gt-intro .idt-gti-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1240px;

    margin:0 auto;
}


/* =========================================================
   GRID
========================================================= */

#idt-gt-intro .idt-gti-grid{

    display:grid;

    grid-template-columns:
        minmax(420px,.93fr)
        minmax(0,1.07fr);

    align-items:center;

    gap:76px;
}


/* =========================================================
   LEFT VISUAL
========================================================= */

#idt-gt-intro .idt-gti-visual{

    position:relative;

    width:100%;

    min-height:520px;
}


/* MAIN IMAGE */

#idt-gt-intro .idt-gti-main-image{

    position:absolute;

    left:0;
    top:0;

    width:76%;
    height:455px;

    overflow:hidden;

    border-radius:20px;

    background:#D9E0E6;

    box-shadow:
        0 24px 58px
        rgba(12,45,98,.14);
}


#idt-gt-intro .idt-gti-main-image img{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .8s ease;
}


#idt-gt-intro .idt-gti-main-image:hover img{
    transform:scale(1.045);
}


/* SECOND IMAGE */

#idt-gt-intro .idt-gti-small-image{

    position:absolute;

    right:0;
    bottom:0;

    width:46%;
    height:245px;

    overflow:hidden;

    border:
        7px solid
        #FCFAF6;

    border-radius:18px;

    background:#D9E0E6;

    box-shadow:
        0 22px 48px
        rgba(12,45,98,.15);
}


#idt-gt-intro .idt-gti-small-image img{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .8s ease;
}


#idt-gt-intro .idt-gti-small-image:hover img{
    transform:scale(1.05);
}


/* =========================================================
   IMAGE ACCENT
========================================================= */

#idt-gt-intro .idt-gti-main-image::after{

    content:"";

    position:absolute;

    left:0;
    top:0;

    width:90px;
    height:4px;

    z-index:3;

    background:
        linear-gradient(
            90deg,
            var(--idt-orange),
            var(--idt-sky)
        );
}


/* =========================================================
   FLOATING GLASS LABEL
========================================================= */

#idt-gt-intro .idt-gti-float{

    position:absolute;

    left:32px;
    bottom:34px;

    z-index:5;

    width:205px;

    padding:
        16px 17px;

    border:
        1px solid
        rgba(255,255,255,.50);

    border-radius:14px;

    background:
        rgba(255,255,255,.78);

    backdrop-filter:
        blur(18px)
        saturate(145%);

    -webkit-backdrop-filter:
        blur(18px)
        saturate(145%);

    box-shadow:
        0 17px 42px
        rgba(12,45,98,.14);
}


#idt-gt-intro .idt-gti-float::before{

    content:"";

    position:absolute;

    inset:0;

    border-radius:inherit;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.42),
            transparent 55%
        );

    pointer-events:none;
}


#idt-gt-intro .idt-gti-float-label{

    position:relative;
    z-index:2;

    display:block;

    margin-bottom:4px;

    color:var(--idt-orange);

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.10em;

    text-transform:uppercase;
}


#idt-gt-intro .idt-gti-float-title{

    position:relative;
    z-index:2;

    display:block;

    color:var(--idt-navy);

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size:18px;
    line-height:1.3;

    font-weight:700;
}


/* =========================================================
   RIGHT CONTENT
========================================================= */

#idt-gt-intro .idt-gti-content{

    width:100%;
    max-width:610px;
}


/* =========================================================
   SCRIPT
========================================================= */

#idt-gt-intro .idt-gti-script{

    margin:
        0 0 7px;

    color:var(--idt-blue);

    font-family:"Montez",cursive;

    font-size:38px;
    line-height:1;

    font-weight:400;
}


/* =========================================================
   HEADING
========================================================= */

#idt-gt-intro .idt-gti-heading{

    max-width:590px;

    margin:
        0 0 20px;

    color:var(--idt-navy);

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size:41px;
    line-height:1.16;

    font-weight:700;

    letter-spacing:-.8px;
}


#idt-gt-intro .idt-gti-heading span{
    color:var(--idt-blue);
}


/* =========================================================
   HEADING ACCENT
========================================================= */

#idt-gt-intro .idt-gti-line{

    display:flex;

    align-items:center;

    gap:8px;

    width:max-content;

    margin:
        0 0 22px;
}


#idt-gt-intro .idt-gti-line span:first-child{

    width:54px;
    height:2px;

    border-radius:30px;

    background:
        linear-gradient(
            90deg,
            var(--idt-blue),
            var(--idt-orange)
        );
}


#idt-gt-intro .idt-gti-line span:last-child{

    width:7px;
    height:7px;

    background:var(--idt-orange);

    transform:rotate(45deg);
}


/* =========================================================
   PARAGRAPHS
========================================================= */

#idt-gt-intro .idt-gti-text{

    margin:
        0 0 14px;

    color:var(--idt-text);

    font-size:15.5px;
    line-height:1.78;

    font-weight:400;
}


#idt-gt-intro .idt-gti-text:last-of-type{
    margin-bottom:0;
}


/* =========================================================
   HIGHLIGHTS
========================================================= */

#idt-gt-intro .idt-gti-points{

    display:grid;

    grid-template-columns:
        repeat(2,minmax(0,1fr));

    gap:11px 16px;

    margin-top:25px;
}


#idt-gt-intro .idt-gti-point{

    display:flex;

    align-items:center;

    gap:10px;

    min-height:48px;

    padding:
        10px 12px;

    border:
        1px solid
        rgba(12,45,98,.09);

    border-radius:10px;

    background:
        rgba(255,255,255,.66);

    box-shadow:
        0 8px 24px
        rgba(12,45,98,.04);
}


#idt-gt-intro .idt-gti-point-icon{

    display:flex;

    align-items:center;
    justify-content:center;

    width:30px;
    height:30px;

    flex:0 0 30px;

    border-radius:8px;

    background:
        rgba(46,96,149,.09);

    color:var(--idt-blue);
}


#idt-gt-intro .idt-gti-point-icon svg{

    width:15px;
    height:15px;

    fill:none;

    stroke:currentColor;

    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}


#idt-gt-intro .idt-gti-point span:last-child{

    color:var(--idt-navy);

    font-size:12px;
    line-height:1.4;

    font-weight:700;
}


/* =========================================================
   CTA
========================================================= */

#idt-gt-intro .idt-gti-action{

    display:flex;

    align-items:center;

    flex-wrap:wrap;

    gap:12px;

    margin-top:28px;
}


#idt-gt-intro .idt-gti-btn{

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:9px;

    min-height:46px;

    padding:
        13px 19px;

    border-radius:9px;

    background:var(--idt-navy);

    color:#FFFFFF !important;

    text-decoration:none !important;

    font-size:12px;
    line-height:1;

    font-weight:700;

    box-shadow:
        0 12px 26px
        rgba(12,45,98,.18);

    transition:
        transform .3s ease,
        background .3s ease,
        box-shadow .3s ease;
}


#idt-gt-intro .idt-gti-btn:hover{

    transform:translateY(-2px);

    background:var(--idt-blue);

    box-shadow:
        0 16px 30px
        rgba(12,45,98,.22);
}


#idt-gt-intro .idt-gti-btn svg{

    width:16px;
    height:16px;

    fill:none;

    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   SMALL NOTE
========================================================= */

#idt-gt-intro .idt-gti-note{

    display:flex;

    align-items:center;

    gap:8px;

    color:#758294;

    font-size:11.5px;
    line-height:1.4;

    font-weight:600;
}


#idt-gt-intro .idt-gti-note svg{

    width:15px;
    height:15px;

    flex:0 0 15px;

    fill:none;

    stroke:var(--idt-orange);

    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   1200
========================================================= */

@media(max-width:1200px){

    #idt-gt-intro{

        padding:
            62px 28px;
    }


    #idt-gt-intro .idt-gti-container{
        max-width:1060px;
    }


    #idt-gt-intro .idt-gti-grid{

        grid-template-columns:
            minmax(380px,.92fr)
            minmax(0,1.08fr);

        gap:55px;
    }


    #idt-gt-intro .idt-gti-visual{
        min-height:475px;
    }


    #idt-gt-intro .idt-gti-main-image{

        height:415px;
    }


    #idt-gt-intro .idt-gti-small-image{

        height:220px;
    }


    #idt-gt-intro .idt-gti-heading{
        font-size:37px;
    }


    #idt-gt-intro .idt-gti-text{
        font-size:14.5px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-gt-intro{

        padding:
            54px 20px;
    }


    #idt-gt-intro .idt-gti-grid{

        grid-template-columns:
            minmax(330px,.90fr)
            minmax(0,1.10fr);

        gap:36px;
    }


    #idt-gt-intro .idt-gti-visual{
        min-height:430px;
    }


    #idt-gt-intro .idt-gti-main-image{

        width:80%;
        height:375px;

        border-radius:17px;
    }


    #idt-gt-intro .idt-gti-small-image{

        width:48%;
        height:190px;

        border-width:6px;
    }


    #idt-gt-intro .idt-gti-float{

        left:18px;
        bottom:24px;

        width:180px;

        padding:
            13px 14px;
    }


    #idt-gt-intro .idt-gti-float-title{
        font-size:16px;
    }


    #idt-gt-intro .idt-gti-script{
        font-size:33px;
    }


    #idt-gt-intro .idt-gti-heading{
        font-size:31px;
    }


    #idt-gt-intro .idt-gti-text{

        font-size:13.5px;
        line-height:1.72;
    }


    #idt-gt-intro .idt-gti-points{

        grid-template-columns:1fr;

        gap:8px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-gt-intro{

        padding:
            48px 15px;
    }


    #idt-gt-intro .idt-gti-grid{

        display:flex;

        flex-direction:column;

        gap:40px;
    }


    #idt-gt-intro .idt-gti-visual{

        width:100%;
        max-width:570px;

        min-height:500px;

        margin:0 auto;
    }


    #idt-gt-intro .idt-gti-main-image{

        width:82%;
        height:420px;
    }


    #idt-gt-intro .idt-gti-small-image{

        width:48%;
        height:220px;
    }


    #idt-gt-intro .idt-gti-content{

        max-width:620px;

        margin:0 auto;

        text-align:center;
    }


    #idt-gt-intro .idt-gti-script{
        font-size:32px;
    }


    #idt-gt-intro .idt-gti-heading{

        max-width:570px;

        margin:
            0 auto 17px;

        font-size:31px;
    }


    #idt-gt-intro .idt-gti-line{

        margin:
            0 auto 20px;
    }


    #idt-gt-intro .idt-gti-text{

        font-size:14px;
        line-height:1.72;
    }


    #idt-gt-intro .idt-gti-points{

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        max-width:560px;

        margin:
            24px auto 0;

        text-align:left;
    }


    #idt-gt-intro .idt-gti-action{

        justify-content:center;

        margin-top:25px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-gt-intro{

        padding:
            42px 13px;
    }


    #idt-gt-intro .idt-gti-visual{

        min-height:405px;
    }


    #idt-gt-intro .idt-gti-main-image{

        width:86%;
        height:335px;

        border-radius:15px;
    }


    #idt-gt-intro .idt-gti-small-image{

        width:51%;
        height:175px;

        border-width:5px;

        border-radius:14px;
    }


    #idt-gt-intro .idt-gti-float{

        left:13px;
        bottom:19px;

        width:165px;

        padding:
            12px 13px;

        border-radius:12px;
    }


    #idt-gt-intro .idt-gti-float-label{
        font-size:8px;
    }


    #idt-gt-intro .idt-gti-float-title{
        font-size:14px;
    }


    #idt-gt-intro .idt-gti-script{
        font-size:29px;
    }


    #idt-gt-intro .idt-gti-heading{

        font-size:28px;
        line-height:1.17;
    }


    #idt-gt-intro .idt-gti-text{
        font-size:13px;
    }


    #idt-gt-intro .idt-gti-points{

        grid-template-columns:1fr;

        max-width:400px;
    }


    #idt-gt-intro .idt-gti-point{

        min-height:46px;
    }


    #idt-gt-intro .idt-gti-point span:last-child{
        font-size:11.5px;
    }


    #idt-gt-intro .idt-gti-action{

        flex-direction:column;

        width:100%;
    }


    #idt-gt-intro .idt-gti-btn{
        width:100%;
    }


    #idt-gt-intro .idt-gti-note{

        justify-content:center;

        font-size:10.5px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-gt-intro{

        padding:
            39px 10px;
    }


    #idt-gt-intro .idt-gti-visual{
        min-height:360px;
    }


    #idt-gt-intro .idt-gti-main-image{
        height:300px;
    }


    #idt-gt-intro .idt-gti-small-image{
        height:155px;
    }


    #idt-gt-intro .idt-gti-float{

        width:150px;

        padding:
            10px 11px;
    }


    #idt-gt-intro .idt-gti-heading{
        font-size:25px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-gt-intro .idt-gti-main-image img,
    #idt-gt-intro .idt-gti-small-image img,
    #idt-gt-intro .idt-gti-btn{

        transition:none !important;
    }

}

</style>


<section id="idt-gt-intro">

    <div class="idt-gti-container">


        <div class="idt-gti-grid">


            <!-- =================================================
                 LEFT IMAGE COMPOSITION
            ================================================== -->

            <div class="idt-gti-visual">


                <!-- MAIN IMAGE -->

                <div class="idt-gti-main-image">

                    <img
                        src="https://indiadaytrip.com/assets/img/about/about-golden.webp"
                        alt="Golden Triangle Tour Delhi Agra Jaipur"
                        loading="lazy"
                    >

                </div>


                <!-- SECOND IMAGE -->

                <div class="idt-gti-small-image">

                    <img
                        src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1200&q=90"
                        alt="Jaipur Golden Triangle Tour"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/about/about-taj.webp';"
                    >

                </div>


                <!-- FLOATING LABEL -->

                <div class="idt-gti-float">

                    <span class="idt-gti-float-label">
                        Explore North India
                    </span>

                    <span class="idt-gti-float-title">
                        Three Cities, One Remarkable Journey
                    </span>

                </div>


            </div>


            <!-- =================================================
                 RIGHT CONTENT
            ================================================== -->

            <div class="idt-gti-content">


                <!-- SCRIPT -->

                <p class="idt-gti-script">
                    Discover India’s Golden Triangle
                </p>


                <!-- HEADING -->

                <h2 class="idt-gti-heading">
                    Experience Delhi, Agra & Jaipur
                    <span>In One Timeless Journey</span>
                </h2>


                <!-- ACCENT -->

                <div
                    class="idt-gti-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>


                <!-- TEXT -->

                <p class="idt-gti-text">
                    A Golden Triangle tour brings together three of India’s most iconic destinations — Delhi, Agra and Jaipur — in one unforgettable journey through history, architecture and culture.
                </p>


                <p class="idt-gti-text">
                    With India Day Trip, your journey can be planned around the way you prefer to travel. Explore the historic landmarks of Delhi, experience the Taj Mahal and Mughal heritage of Agra, discover Jaipur’s royal forts and palaces, and travel comfortably between each destination without feeling rushed.
                </p>


                <!-- =================================================
                     HIGHLIGHTS
                ================================================== -->

                <div class="idt-gti-points">


                    <!-- POINT 01 -->

                    <div class="idt-gti-point">

                        <span class="idt-gti-point-icon">

                            <svg viewBox="0 0 24 24">

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="9">
                                </circle>

                                <path d="M12 7v5l3 2"></path>

                            </svg>

                        </span>

                        <span>
                            Flexible Tour Timings
                        </span>

                    </div>


                    <!-- POINT 02 -->

                    <div class="idt-gti-point">

                        <span class="idt-gti-point-icon">

                            <svg viewBox="0 0 24 24">

                                <path d="M12 21s7-5.2 7-12a7 7 0 1 0-14 0c0 6.8 7 12 7 12Z"></path>

                                <circle
                                    cx="12"
                                    cy="9"
                                    r="2">
                                </circle>

                            </svg>

                        </span>

                        <span>
                            Delhi, Agra & Jaipur
                        </span>

                    </div>


                    <!-- POINT 03 -->

                    <div class="idt-gti-point">

                        <span class="idt-gti-point-icon">

                            <svg viewBox="0 0 24 24">

                                <path
                                    d="M5 17h14l1-5-4-4H8l-4 4 1 5Z">
                                </path>

                                <circle
                                    cx="7.5"
                                    cy="17"
                                    r="1.5">
                                </circle>

                                <circle
                                    cx="16.5"
                                    cy="17"
                                    r="1.5">
                                </circle>

                            </svg>

                        </span>

                        <span>
                            Comfortable Private Travel
                        </span>

                    </div>


                    <!-- POINT 04 -->

                    <div class="idt-gti-point">

                        <span class="idt-gti-point-icon">

                            <svg viewBox="0 0 24 24">

                                <path d="m5 12 4 4L19 6"></path>

                            </svg>

                        </span>

                        <span>
                            Personalised Itinerary
                        </span>

                    </div>


                </div>


                <!-- =================================================
                     CTA
                ================================================== -->

                <div class="idt-gti-action">


                    <a
                        class="idt-gti-btn"
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer">

                        Plan Your Golden Triangle Journey

                        <svg viewBox="0 0 24 24">

                            <path d="M7 17 17 7"></path>

                            <path d="M7 7h10v10"></path>

                        </svg>

                    </a>


                    <div class="idt-gti-note">

                        <svg viewBox="0 0 24 24">

                            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"></path>

                            <path d="M12 8v4"></path>

                            <path d="M12 16h.01"></path>

                        </svg>

                        Tour can be customised around your schedule

                    </div>


                </div>


            </div>


        </div>


    </div>

</section>