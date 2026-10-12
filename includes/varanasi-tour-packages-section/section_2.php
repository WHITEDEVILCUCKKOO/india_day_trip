<!-- =========================================================
     INDIA DAY TRIP
     TAJ MAHAL TOUR PACKAGES
     SECTION 02 — TOUR INTRODUCTION
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

/* =========================================================
   RESET — ONLY THIS SECTION
========================================================= */

#idt-taj-intro,
#idt-taj-intro *{
    box-sizing:border-box;
}


/* =========================================================
   SECTION
========================================================= */

#idt-taj-intro{

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

#idt-taj-intro::before{

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

#idt-taj-intro .idt-ti-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1240px;

    margin:0 auto;
}


/* =========================================================
   GRID
========================================================= */

#idt-taj-intro .idt-ti-grid{

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

#idt-taj-intro .idt-ti-visual{

    position:relative;

    width:100%;

    min-height:520px;
}


/* MAIN IMAGE */

#idt-taj-intro .idt-ti-main-image{

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


#idt-taj-intro .idt-ti-main-image img{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .8s ease;
}


#idt-taj-intro .idt-ti-main-image:hover img{
    transform:scale(1.045);
}


/* SECOND IMAGE */

#idt-taj-intro .idt-ti-small-image{

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


#idt-taj-intro .idt-ti-small-image img{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .8s ease;
}


#idt-taj-intro .idt-ti-small-image:hover img{
    transform:scale(1.05);
}


/* =========================================================
   IMAGE ACCENT
========================================================= */

#idt-taj-intro .idt-ti-main-image::after{

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

#idt-taj-intro .idt-ti-float{

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


#idt-taj-intro .idt-ti-float::before{

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


#idt-taj-intro .idt-ti-float-label{

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


#idt-taj-intro .idt-ti-float-title{

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

#idt-taj-intro .idt-ti-content{

    width:100%;
    max-width:610px;
}


/* =========================================================
   SCRIPT
========================================================= */

#idt-taj-intro .idt-ti-script{

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

#idt-taj-intro .idt-ti-heading{

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


#idt-taj-intro .idt-ti-heading span{
    color:var(--idt-blue);
}


/* =========================================================
   HEADING ACCENT
========================================================= */

#idt-taj-intro .idt-ti-line{

    display:flex;

    align-items:center;

    gap:8px;

    width:max-content;

    margin:
        0 0 22px;
}


#idt-taj-intro .idt-ti-line span:first-child{

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


#idt-taj-intro .idt-ti-line span:last-child{

    width:7px;
    height:7px;

    background:var(--idt-orange);

    transform:rotate(45deg);
}


/* =========================================================
   PARAGRAPHS
========================================================= */

#idt-taj-intro .idt-ti-text{

    margin:
        0 0 14px;

    color:var(--idt-text);

    font-size:15.5px;
    line-height:1.78;

    font-weight:400;
}


#idt-taj-intro .idt-ti-text:last-of-type{
    margin-bottom:0;
}


/* =========================================================
   HIGHLIGHTS
========================================================= */

#idt-taj-intro .idt-ti-points{

    display:grid;

    grid-template-columns:
        repeat(2,minmax(0,1fr));

    gap:11px 16px;

    margin-top:25px;
}


#idt-taj-intro .idt-ti-point{

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


#idt-taj-intro .idt-ti-point-icon{

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


#idt-taj-intro .idt-ti-point-icon svg{

    width:15px;
    height:15px;

    fill:none;

    stroke:currentColor;

    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}


#idt-taj-intro .idt-ti-point span:last-child{

    color:var(--idt-navy);

    font-size:12px;
    line-height:1.4;

    font-weight:700;
}


/* =========================================================
   CTA
========================================================= */

#idt-taj-intro .idt-ti-action{

    display:flex;

    align-items:center;

    flex-wrap:wrap;

    gap:12px;

    margin-top:28px;
}


#idt-taj-intro .idt-ti-btn{

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


#idt-taj-intro .idt-ti-btn:hover{

    transform:translateY(-2px);

    background:var(--idt-blue);

    box-shadow:
        0 16px 30px
        rgba(12,45,98,.22);
}


#idt-taj-intro .idt-ti-btn svg{

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

#idt-taj-intro .idt-ti-note{

    display:flex;

    align-items:center;

    gap:8px;

    color:#758294;

    font-size:11.5px;
    line-height:1.4;

    font-weight:600;
}


#idt-taj-intro .idt-ti-note svg{

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

    #idt-taj-intro{

        padding:
            62px 28px;
    }


    #idt-taj-intro .idt-ti-container{
        max-width:1060px;
    }


    #idt-taj-intro .idt-ti-grid{

        grid-template-columns:
            minmax(380px,.92fr)
            minmax(0,1.08fr);

        gap:55px;
    }


    #idt-taj-intro .idt-ti-visual{
        min-height:475px;
    }


    #idt-taj-intro .idt-ti-main-image{

        height:415px;
    }


    #idt-taj-intro .idt-ti-small-image{

        height:220px;
    }


    #idt-taj-intro .idt-ti-heading{
        font-size:37px;
    }


    #idt-taj-intro .idt-ti-text{
        font-size:14.5px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-taj-intro{

        padding:
            54px 20px;
    }


    #idt-taj-intro .idt-ti-grid{

        grid-template-columns:
            minmax(330px,.90fr)
            minmax(0,1.10fr);

        gap:36px;
    }


    #idt-taj-intro .idt-ti-visual{
        min-height:430px;
    }


    #idt-taj-intro .idt-ti-main-image{

        width:80%;
        height:375px;

        border-radius:17px;
    }


    #idt-taj-intro .idt-ti-small-image{

        width:48%;
        height:190px;

        border-width:6px;
    }


    #idt-taj-intro .idt-ti-float{

        left:18px;
        bottom:24px;

        width:180px;

        padding:
            13px 14px;
    }


    #idt-taj-intro .idt-ti-float-title{
        font-size:16px;
    }


    #idt-taj-intro .idt-ti-script{
        font-size:33px;
    }


    #idt-taj-intro .idt-ti-heading{
        font-size:31px;
    }


    #idt-taj-intro .idt-ti-text{

        font-size:13.5px;
        line-height:1.72;
    }


    #idt-taj-intro .idt-ti-points{

        grid-template-columns:1fr;

        gap:8px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-taj-intro{

        padding:
            48px 15px;
    }


    #idt-taj-intro .idt-ti-grid{

        display:flex;

        flex-direction:column;

        gap:40px;
    }


    #idt-taj-intro .idt-ti-visual{

        width:100%;
        max-width:570px;

        min-height:500px;

        margin:0 auto;
    }


    #idt-taj-intro .idt-ti-main-image{

        width:82%;
        height:420px;
    }


    #idt-taj-intro .idt-ti-small-image{

        width:48%;
        height:220px;
    }


    #idt-taj-intro .idt-ti-content{

        max-width:620px;

        margin:0 auto;

        text-align:center;
    }


    #idt-taj-intro .idt-ti-script{
        font-size:32px;
    }


    #idt-taj-intro .idt-ti-heading{

        max-width:570px;

        margin:
            0 auto 17px;

        font-size:31px;
    }


    #idt-taj-intro .idt-ti-line{

        margin:
            0 auto 20px;
    }


    #idt-taj-intro .idt-ti-text{

        font-size:14px;
        line-height:1.72;
    }


    #idt-taj-intro .idt-ti-points{

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        max-width:560px;

        margin:
            24px auto 0;

        text-align:left;
    }


    #idt-taj-intro .idt-ti-action{

        justify-content:center;

        margin-top:25px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-taj-intro{

        padding:
            42px 13px;
    }


    #idt-taj-intro .idt-ti-visual{

        min-height:405px;
    }


    #idt-taj-intro .idt-ti-main-image{

        width:86%;
        height:335px;

        border-radius:15px;
    }


    #idt-taj-intro .idt-ti-small-image{

        width:51%;
        height:175px;

        border-width:5px;

        border-radius:14px;
    }


    #idt-taj-intro .idt-ti-float{

        left:13px;
        bottom:19px;

        width:165px;

        padding:
            12px 13px;

        border-radius:12px;
    }


    #idt-taj-intro .idt-ti-float-label{
        font-size:8px;
    }


    #idt-taj-intro .idt-ti-float-title{
        font-size:14px;
    }


    #idt-taj-intro .idt-ti-script{
        font-size:29px;
    }


    #idt-taj-intro .idt-ti-heading{

        font-size:28px;
        line-height:1.17;
    }


    #idt-taj-intro .idt-ti-text{
        font-size:13px;
    }


    #idt-taj-intro .idt-ti-points{

        grid-template-columns:1fr;

        max-width:400px;
    }


    #idt-taj-intro .idt-ti-point{

        min-height:46px;
    }


    #idt-taj-intro .idt-ti-point span:last-child{
        font-size:11.5px;
    }


    #idt-taj-intro .idt-ti-action{

        flex-direction:column;

        width:100%;
    }


    #idt-taj-intro .idt-ti-btn{
        width:100%;
    }


    #idt-taj-intro .idt-ti-note{

        justify-content:center;

        font-size:10.5px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-taj-intro{

        padding:
            39px 10px;
    }


    #idt-taj-intro .idt-ti-visual{
        min-height:360px;
    }


    #idt-taj-intro .idt-ti-main-image{
        height:300px;
    }


    #idt-taj-intro .idt-ti-small-image{
        height:155px;
    }


    #idt-taj-intro .idt-ti-float{

        width:150px;

        padding:
            10px 11px;
    }


    #idt-taj-intro .idt-ti-heading{
        font-size:25px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-taj-intro .idt-ti-main-image img,
    #idt-taj-intro .idt-ti-small-image img,
    #idt-taj-intro .idt-ti-btn{

        transition:none !important;
    }

}

</style>


<section id="idt-taj-intro">

    <div class="idt-ti-container">


        <div class="idt-ti-grid">


            <!-- =================================================
                 LEFT IMAGE COMPOSITION
            ================================================== -->

            <div class="idt-ti-visual">


                <div class="idt-ti-main-image">

                    <img
                        src="https://indiadaytrip.com/assets/img/about/about-taj.webp"
                        alt="Taj Mahal Tour with India Day Trip"
                        loading="lazy">

                </div>


                <div class="idt-ti-small-image">

                    <img
                        src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1200&q=90"
                        alt="Taj Mahal in Agra"
                        loading="lazy">

                </div>


                <div class="idt-ti-float">

                    <span class="idt-ti-float-label">
                        Explore Agra
                    </span>

                    <span class="idt-ti-float-title">
                        A Journey Beyond the Taj Mahal
                    </span>

                </div>


            </div>


            <!-- =================================================
                 RIGHT CONTENT
            ================================================== -->

            <div class="idt-ti-content">


                <p class="idt-ti-script">
                    Discover the Story of Agra
                </p>


                <h2 class="idt-ti-heading">
                    Experience the Taj Mahal
                    <span>Beyond the Photograph</span>
                </h2>


                <div
                    class="idt-ti-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>


                <p class="idt-ti-text">
                    A Taj Mahal tour is more than a visit to one monument. It is a journey into the history, architecture and stories that shaped Agra into one of India’s most remarkable heritage cities.
                </p>


                <p class="idt-ti-text">
                    With India Day Trip, your journey can be planned around the way you prefer to travel. Explore the Taj Mahal with an experienced local guide, discover the grand halls of Agra Fort, travel comfortably from Delhi, and leave enough time to enjoy the city without feeling rushed.
                </p>


                <!-- HIGHLIGHTS -->

                <div class="idt-ti-points">


                    <div class="idt-ti-point">

                        <span class="idt-ti-point-icon">

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


                    <div class="idt-ti-point">

                        <span class="idt-ti-point-icon">

                            <svg viewBox="0 0 24 24">

                                <circle
                                    cx="12"
                                    cy="8"
                                    r="3">
                                </circle>

                                <path
                                    d="M6 20c0-4 2.5-7 6-7s6 3 6 7">
                                </path>

                            </svg>

                        </span>

                        <span>
                            Private Local Guide
                        </span>

                    </div>


                    <div class="idt-ti-point">

                        <span class="idt-ti-point-icon">

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


                    <div class="idt-ti-point">

                        <span class="idt-ti-point-icon">

                            <svg viewBox="0 0 24 24">

                                <path d="m5 12 4 4L19 6"></path>

                            </svg>

                        </span>

                        <span>
                            Personalised Experience
                        </span>

                    </div>


                </div>


                <!-- CTA -->

                <div class="idt-ti-action">


                    <a
                        class="idt-ti-btn"
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer">

                        Plan Your Agra Journey

                        <svg viewBox="0 0 24 24">

                            <path d="M7 17 17 7"></path>

                            <path d="M7 7h10v10"></path>

                        </svg>

                    </a>


                    <div class="idt-ti-note">

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