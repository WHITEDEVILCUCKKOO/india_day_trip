<!-- =========================================================
     INDIA DAY TRIP
     TAJ MAHAL TOUR PACKAGES
     SECTION 01 — PREMIUM HERO
     BREADCRUMB REMOVED + LABEL SPACING FIXED
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-taj-tour-hero,
#idt-taj-tour-hero *{
    box-sizing:border-box;
}

#idt-taj-tour-hero{

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

    min-height:570px;

    display:flex;
    align-items:center;

    overflow:hidden;

    padding:48px 24px 46px;

    background:
        linear-gradient(
            90deg,
            rgba(3,13,29,.94) 0%,
            rgba(5,24,51,.90) 35%,
            rgba(8,32,65,.78) 64%,
            rgba(3,14,30,.72) 100%
        ),
        url("https://indiadaytrip.com/assets/img/about/about-taj.webp")
        center center / cover no-repeat;

    font-family:"Manrope",Arial,sans-serif;
}

#idt-taj-tour-hero::before{

    content:"";

    position:absolute;
    inset:0;

    z-index:0;

    background:
        linear-gradient(
            180deg,
            rgba(0,0,0,.18) 0%,
            transparent 28%,
            transparent 72%,
            rgba(0,0,0,.25) 100%
        );

    pointer-events:none;
}

#idt-taj-tour-hero::after{

    content:"";

    position:absolute;

    width:440px;
    height:440px;

    right:-170px;
    bottom:-220px;

    z-index:0;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,93,0,.10),
            transparent 70%
        );

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-taj-tour-hero .idt-taj-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1240px;

    margin:0 auto;
}


/* =========================================================
   GRID
========================================================= */

#idt-taj-tour-hero .idt-taj-grid{

    display:grid;

    grid-template-columns:
        minmax(0,1fr)
        minmax(385px,420px);

    align-items:center;

    gap:48px;
}


/* =========================================================
   LEFT
========================================================= */

#idt-taj-tour-hero .idt-taj-content{

    width:100%;
    max-width:735px;
}


/* =========================================================
   TOP LABEL — SPACING FIXED
========================================================= */

#idt-taj-tour-hero .idt-taj-label{

    display:inline-flex;

    align-items:center;

    gap:8px;

    width:max-content;

    margin:
        0 0 18px;

    padding:
        8px 12px;

    border:
        1px solid
        rgba(255,122,47,.30);

    border-radius:6px;

    background:
        rgba(255,93,0,.12);

    color:#FF9A62;

    font-size:11px;
    line-height:1;

    font-weight:800;

    letter-spacing:.11em;

    text-transform:uppercase;

    backdrop-filter:blur(8px);
    -webkit-backdrop-filter:blur(8px);
}

#idt-taj-tour-hero .idt-taj-label span{

    width:6px;
    height:6px;

    flex:0 0 6px;

    border-radius:50%;

    background:var(--idt-orange);
}


/* =========================================================
   SCRIPT
========================================================= */

#idt-taj-tour-hero .idt-taj-script{

    margin:
        0 0 7px;

    color:var(--idt-sky);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}


/* =========================================================
   HEADING
========================================================= */

#idt-taj-tour-hero .idt-taj-heading{

    max-width:720px;

    margin:
        0 0 16px;

    color:#FFFFFF;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size:45px;
    line-height:1.08;

    font-weight:700;

    letter-spacing:-1px;
}

#idt-taj-tour-hero .idt-taj-heading span{
    color:var(--idt-sky);
}


/* =========================================================
   MAIN PARAGRAPH
========================================================= */

#idt-taj-tour-hero .idt-taj-description{

    max-width:700px;

    margin:0;

    color:rgba(255,255,255,.80);

    font-size:16px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   META
========================================================= */

#idt-taj-tour-hero .idt-taj-meta{

    display:flex;

    align-items:center;
    flex-wrap:wrap;

    gap:9px;

    margin-top:20px;
}

#idt-taj-tour-hero .idt-taj-meta-item{

    display:inline-flex;

    align-items:center;

    gap:7px;

    min-height:34px;

    padding:8px 11px;

    border:
        1px solid
        rgba(255,255,255,.13);

    border-radius:7px;

    background:
        rgba(255,255,255,.075);

    color:
        rgba(255,255,255,.90);

    font-size:12px;
    line-height:1.2;

    font-weight:600;

    backdrop-filter:blur(8px);
    -webkit-backdrop-filter:blur(8px);
}

#idt-taj-tour-hero .idt-taj-meta-item svg{

    width:15px;
    height:15px;

    flex:0 0 15px;

    fill:none;

    stroke:var(--idt-sky);

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   ACTIONS
========================================================= */

#idt-taj-tour-hero .idt-taj-actions{

    display:flex;

    align-items:center;
    flex-wrap:wrap;

    gap:10px;

    margin-top:21px;
}

#idt-taj-tour-hero .idt-taj-btn-primary,
#idt-taj-tour-hero .idt-taj-btn-secondary{

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    min-height:43px;

    border-radius:8px;

    text-decoration:none !important;

    font-size:12px;
    line-height:1;

    font-weight:700;

    transition:
        transform .3s ease,
        background .3s ease,
        border-color .3s ease,
        box-shadow .3s ease;
}

#idt-taj-tour-hero .idt-taj-btn-primary{

    padding:12px 18px;

    background:var(--idt-orange);

    color:#FFFFFF !important;

    box-shadow:
        0 11px 23px
        rgba(0,0,0,.18);
}

#idt-taj-tour-hero .idt-taj-btn-primary:hover{

    transform:translateY(-2px);

    background:var(--idt-orange-soft);
}

#idt-taj-tour-hero .idt-taj-btn-secondary{

    padding:12px 17px;

    border:
        1px solid
        rgba(255,255,255,.25);

    background:
        rgba(255,255,255,.07);

    color:#FFFFFF !important;

    backdrop-filter:blur(8px);
    -webkit-backdrop-filter:blur(8px);
}

#idt-taj-tour-hero .idt-taj-btn-secondary:hover{

    transform:translateY(-2px);

    background:
        rgba(121,189,242,.15);

    border-color:
        rgba(121,189,242,.48);
}

#idt-taj-tour-hero .idt-taj-actions svg{

    width:16px;
    height:16px;

    fill:none;

    stroke:currentColor;

    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   TRUST
========================================================= */

#idt-taj-tour-hero .idt-taj-trust{

    display:flex;

    align-items:center;
    flex-wrap:wrap;

    gap:16px;

    margin-top:17px;

    color:
        rgba(255,255,255,.70);

    font-size:11px;
    line-height:1.45;

    font-weight:600;
}

#idt-taj-tour-hero .idt-taj-trust-item{

    display:flex;

    align-items:center;

    gap:6px;
}

#idt-taj-tour-hero .idt-taj-trust svg{

    width:13px;
    height:13px;

    fill:none;

    stroke:var(--idt-sky);

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RIGHT LIQUID GLASS CARD
========================================================= */

#idt-taj-tour-hero .idt-taj-info-card{

    position:relative;

    width:100%;
    max-width:420px;

    overflow:hidden;

    padding:
        27px 28px 26px;

    border:
        1px solid
        rgba(255,255,255,.22);

    border-radius:22px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.18) 0%,
            rgba(255,255,255,.09) 40%,
            rgba(121,189,242,.08) 72%,
            rgba(255,255,255,.05) 100%
        );

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.34),
        inset 0 -1px 0 rgba(255,255,255,.06),
        0 24px 55px rgba(0,0,0,.25);

    backdrop-filter:
        blur(25px)
        saturate(155%);

    -webkit-backdrop-filter:
        blur(25px)
        saturate(155%);
}

#idt-taj-tour-hero .idt-taj-info-card::before{

    content:"";

    position:absolute;

    width:300px;
    height:300px;

    top:-190px;
    right:-110px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(121,189,242,.30) 0%,
            rgba(121,189,242,.10) 40%,
            transparent 72%
        );

    pointer-events:none;
}

#idt-taj-tour-hero .idt-taj-info-card::after{

    content:"";

    position:absolute;

    top:-90%;
    left:-90%;

    width:95%;
    height:270%;

    transform:rotate(23deg);

    background:
        linear-gradient(
            90deg,
            transparent 0%,
            rgba(255,255,255,.03) 17%,
            rgba(255,255,255,.10) 34%,
            rgba(255,255,255,.25) 50%,
            rgba(255,255,255,.10) 66%,
            rgba(255,255,255,.03) 82%,
            transparent 100%
        );

    pointer-events:none;

    animation:
        idtTajGlassMove
        6.5s
        ease-in-out
        infinite;
}

@keyframes idtTajGlassMove{

    0%{
        left:-100%;
    }

    38%{
        left:145%;
    }

    100%{
        left:145%;
    }
}


/* =========================================================
   RIGHT CARD HEADER
========================================================= */

#idt-taj-tour-hero .idt-taj-info-small{

    position:relative;
    z-index:3;

    display:block;

    margin-bottom:7px;

    color:#B6E0FF;

    font-size:12px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.12em;

    text-transform:uppercase;
}

#idt-taj-tour-hero .idt-taj-info-title{

    position:relative;
    z-index:3;

    max-width:340px;

    margin:0 0 20px;

    color:#FFFFFF;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size:25px;
    line-height:1.22;

    font-weight:600;

    letter-spacing:-.35px;
}


/* =========================================================
   HIGHLIGHTS
========================================================= */

#idt-taj-tour-hero .idt-taj-highlights{

    position:relative;
    z-index:3;

    display:flex;

    flex-direction:column;
}

#idt-taj-tour-hero .idt-taj-highlight{

    display:grid;

    grid-template-columns:
        42px
        minmax(0,1fr);

    align-items:center;

    gap:13px;

    padding:12px 0;

    border-bottom:
        1px solid
        rgba(255,255,255,.11);
}

#idt-taj-tour-hero .idt-taj-highlight:first-child{
    padding-top:0;
}

#idt-taj-tour-hero .idt-taj-highlight:last-child{

    padding-bottom:0;

    border-bottom:0;
}


/* =========================================================
   ICON
========================================================= */

#idt-taj-tour-hero .idt-taj-highlight-icon{

    display:flex;

    align-items:center;
    justify-content:center;

    width:42px;
    height:42px;

    border:
        1px solid
        rgba(255,255,255,.18);

    border-radius:12px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.15),
            rgba(121,189,242,.08)
        );

    box-shadow:
        inset 0 1px 0
        rgba(255,255,255,.17);

    backdrop-filter:blur(10px);
    -webkit-backdrop-filter:blur(10px);

    color:#A8D9FF;
}

#idt-taj-tour-hero .idt-taj-highlight-icon svg{

    width:20px;
    height:20px;

    fill:none;

    stroke:currentColor;

    stroke-width:1.75;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RIGHT CARD CONTENT
========================================================= */

#idt-taj-tour-hero .idt-taj-highlight strong{

    display:block;

    margin-bottom:3px;

    color:#FFFFFF;

    font-size:14px;
    line-height:1.35;

    font-weight:700;
}

#idt-taj-tour-hero .idt-taj-highlight span{

    display:block;

    color:
        rgba(255,255,255,.78);

    font-size:13px;
    line-height:1.55;

    font-weight:400;
}


/* =========================================================
   BOTTOM LINE
========================================================= */

#idt-taj-tour-hero .idt-taj-bottom-line{

    position:absolute;

    left:50%;
    bottom:0;

    z-index:4;

    width:92px;
    height:3px;

    transform:
        translateX(-50%);

    border-radius:
        10px 10px 0 0;

    background:
        linear-gradient(
            90deg,
            var(--idt-sky),
            var(--idt-orange)
        );
}


/* =========================================================
   1200
========================================================= */

@media(max-width:1200px){

    #idt-taj-tour-hero{

        min-height:540px;

        padding:
            43px 28px 41px;
    }

    #idt-taj-tour-hero .idt-taj-container{
        max-width:1060px;
    }

    #idt-taj-tour-hero .idt-taj-grid{

        grid-template-columns:
            minmax(0,1fr)
            minmax(360px,390px);

        gap:35px;
    }

    #idt-taj-tour-hero .idt-taj-heading{
        font-size:40px;
    }

    #idt-taj-tour-hero .idt-taj-description{
        font-size:15px;
    }

    #idt-taj-tour-hero .idt-taj-info-card{

        max-width:390px;

        padding:
            25px 24px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-taj-tour-hero{

        min-height:auto;

        padding:
            42px 20px;
    }

    #idt-taj-tour-hero .idt-taj-grid{

        grid-template-columns:
            minmax(0,1fr)
            minmax(320px,350px);

        gap:25px;
    }

    #idt-taj-tour-hero .idt-taj-heading{
        font-size:34px;
    }

    #idt-taj-tour-hero .idt-taj-description{
        font-size:14px;
    }

    #idt-taj-tour-hero .idt-taj-meta-item{
        font-size:11px;
    }

    #idt-taj-tour-hero .idt-taj-info-card{
        max-width:350px;
    }

    #idt-taj-tour-hero .idt-taj-info-title{
        font-size:22px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-taj-tour-hero{

        padding:
            37px 15px;

        background:
            linear-gradient(
                180deg,
                rgba(3,13,29,.94) 0%,
                rgba(5,24,51,.88) 55%,
                rgba(3,14,30,.94) 100%
            ),
            url("https://indiadaytrip.com/assets/img/about/about-taj.webp")
            center center / cover no-repeat;
    }

    #idt-taj-tour-hero .idt-taj-grid{

        display:flex;

        flex-direction:column;

        gap:25px;
    }

    #idt-taj-tour-hero .idt-taj-content{

        max-width:620px;

        margin:0 auto;

        text-align:center;
    }

    #idt-taj-tour-hero .idt-taj-label{

        margin:
            0 auto 18px;

        font-size:10px;
    }

    #idt-taj-tour-hero .idt-taj-script{

        margin-bottom:7px;
    }

    #idt-taj-tour-hero .idt-taj-heading{

        max-width:580px;

        margin:
            0 auto 13px;

        font-size:32px;
    }

    #idt-taj-tour-hero .idt-taj-description{

        max-width:560px;

        margin:0 auto;

        font-size:14px;
        line-height:1.7;
    }

    #idt-taj-tour-hero .idt-taj-meta{

        justify-content:center;

        margin-top:17px;
    }

    #idt-taj-tour-hero .idt-taj-meta-item{
        font-size:10.5px;
    }

    #idt-taj-tour-hero .idt-taj-actions{

        justify-content:center;

        margin-top:19px;
    }

    #idt-taj-tour-hero .idt-taj-trust{

        justify-content:center;

        margin-top:15px;

        font-size:10px;
    }

    #idt-taj-tour-hero .idt-taj-info-card{

        width:100%;
        max-width:590px;

        margin:0 auto;

        padding:
            27px 25px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-taj-tour-hero{

        padding:
            33px 13px;
    }

    #idt-taj-tour-hero .idt-taj-script{
        font-size:26px;
    }

    #idt-taj-tour-hero .idt-taj-heading{

        font-size:28px;

        line-height:1.12;
    }

    #idt-taj-tour-hero .idt-taj-description{
        font-size:13px;
    }

    #idt-taj-tour-hero .idt-taj-actions{

        display:grid;

        grid-template-columns:
            1fr 1fr;

        width:100%;

        gap:8px;
    }

    #idt-taj-tour-hero .idt-taj-btn-primary,
    #idt-taj-tour-hero .idt-taj-btn-secondary{

        width:100%;

        font-size:10.5px;
    }

    #idt-taj-tour-hero .idt-taj-info-card{

        padding:
            24px 19px;

        border-radius:18px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-taj-tour-hero{

        padding:
            30px 10px;
    }

    #idt-taj-tour-hero .idt-taj-heading{
        font-size:26px;
    }

    #idt-taj-tour-hero .idt-taj-actions{
        grid-template-columns:1fr;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-taj-tour-hero *,
    #idt-taj-tour-hero *::before,
    #idt-taj-tour-hero *::after{

        animation:none !important;

        transition:none !important;
    }

}

</style>


<section id="idt-taj-tour-hero">

    <div class="idt-taj-container">


        <div class="idt-taj-grid">


            <!-- LEFT CONTENT -->

            <div class="idt-taj-content">


                <div class="idt-taj-label">

                    <span></span>

                    Taj Mahal Tour Packages

                </div>


                <p class="idt-taj-script">
                    Discover Agra with India Day Trip
                </p>


                <h1 class="idt-taj-heading">
                    Taj Mahal Tour Packages
                    <span>from Delhi</span>
                </h1>


                <p class="idt-taj-description">
                    Experience one of India’s most iconic journeys with our carefully planned Taj Mahal tour packages from Delhi. Discover the timeless beauty of the Taj Mahal, explore the historic Agra Fort, walk through the heritage streets of Agra, and enjoy a private journey designed around your schedule and travel style.
                </p>


                <div class="idt-taj-meta">


                    <div class="idt-taj-meta-item">

                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 7v5l3 2"></path>
                        </svg>

                        Same Day & Multi-Day Tours

                    </div>


                    <div class="idt-taj-meta-item">

                        <svg viewBox="0 0 24 24">
                            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="2.4"></circle>
                        </svg>

                        Delhi to Agra

                    </div>


                    <div class="idt-taj-meta-item">

                        <svg viewBox="0 0 24 24">
                            <path d="M5 17h14l1-5-4-4H8l-4 4 1 5Z"></path>
                            <circle cx="7.5" cy="17" r="1.5"></circle>
                            <circle cx="16.5" cy="17" r="1.5"></circle>
                        </svg>

                        Private Transfers

                    </div>


                    <div class="idt-taj-meta-item">

                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="3"></circle>
                            <path d="M6 20c0-4 2.5-7 6-7s6 3 6 7"></path>
                        </svg>

                        Private Tour Guide

                    </div>


                </div>


                <div class="idt-taj-actions">


                    <a
                        class="idt-taj-btn-primary"
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer">

                        Plan Your Taj Mahal Tour

                        <svg viewBox="0 0 24 24">
                            <path d="M7 17 17 7"></path>
                            <path d="M7 7h10v10"></path>
                        </svg>

                    </a>


                    <a
                        class="idt-taj-btn-secondary"
                        href="tel:+918126052755">

                        <svg viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92Z"></path>
                        </svg>

                        +91 81260 52755

                    </a>


                </div>


                <div class="idt-taj-trust">


                    <div class="idt-taj-trust-item">

                        <svg viewBox="0 0 24 24">
                            <path d="m5 12 4 4L19 6"></path>
                        </svg>

                        Private & Personalised

                    </div>


                    <div class="idt-taj-trust-item">

                        <svg viewBox="0 0 24 24">
                            <path d="m5 12 4 4L19 6"></path>
                        </svg>

                        Flexible Itineraries

                    </div>


                    <div class="idt-taj-trust-item">

                        <svg viewBox="0 0 24 24">
                            <path d="m5 12 4 4L19 6"></path>
                        </svg>

                        Local Travel Assistance

                    </div>


                </div>


            </div>


            <!-- RIGHT LIQUID GLASS CARD -->

            <aside class="idt-taj-info-card">


                <span class="idt-taj-info-small">
                    Tour Highlights
                </span>


                <h2 class="idt-taj-info-title">
                    Your Taj Mahal Journey at a Glance
                </h2>


                <div class="idt-taj-highlights">


                    <div class="idt-taj-highlight">

                        <div class="idt-taj-highlight-icon">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 19h16"></path>
                                <path d="M7 19V9h10v10"></path>
                                <path d="M9 9V6h6v3"></path>
                            </svg>

                        </div>


                        <div>

                            <strong>
                                Taj Mahal
                            </strong>

                            <span>
                                Explore Agra’s world-famous monument with your private guide.
                            </span>

                        </div>

                    </div>


                    <div class="idt-taj-highlight">

                        <div class="idt-taj-highlight-icon">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 20V8l8-4 8 4v12"></path>
                                <path d="M8 20v-7h8v7"></path>
                            </svg>

                        </div>


                        <div>

                            <strong>
                                Agra Fort
                            </strong>

                            <span>
                                Walk through the impressive courtyards and royal history of Agra.
                            </span>

                        </div>

                    </div>


                    <div class="idt-taj-highlight">

                        <div class="idt-taj-highlight-icon">

                            <svg viewBox="0 0 24 24">
                                <path d="M5 17h14l1-5-4-4H8l-4 4 1 5Z"></path>
                                <circle cx="7.5" cy="17" r="1.5"></circle>
                                <circle cx="16.5" cy="17" r="1.5"></circle>
                            </svg>

                        </div>


                        <div>

                            <strong>
                                Private Travel
                            </strong>

                            <span>
                                Comfortable private transfers between Delhi and Agra.
                            </span>

                        </div>

                    </div>


                    <div class="idt-taj-highlight">

                        <div class="idt-taj-highlight-icon">

                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="3"></circle>
                                <path d="M6 20c0-4 2.5-7 6-7s6 3 6 7"></path>
                            </svg>

                        </div>


                        <div>

                            <strong>
                                Expert Local Guide
                            </strong>

                            <span>
                                Discover the stories, architecture and culture behind each monument.
                            </span>

                        </div>

                    </div>


                    <div class="idt-taj-highlight">

                        <div class="idt-taj-highlight-icon">

                            <svg viewBox="0 0 24 24">
                                <path d="M12 3v18"></path>
                                <path d="m7 8 5-5 5 5"></path>
                            </svg>

                        </div>


                        <div>

                            <strong>
                                Flexible Tour Options
                            </strong>

                            <span>
                                Choose the tour style and schedule that works best for your journey.
                            </span>

                        </div>

                    </div>


                </div>


            </aside>


        </div>


    </div>


    <div
        class="idt-taj-bottom-line"
        aria-hidden="true">
    </div>


</section>