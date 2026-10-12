<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP
   DESTINATION SERIES — COMPLETE FINAL SECTION
========================================================= */

#idt-destination-series,
#idt-destination-series *{
    box-sizing:border-box;
}

#idt-destination-series{
    --idt-white:#ffffff;
    --idt-soft:#FCFAF6;
    --idt-pattern:#F5F8FC;
    --idt-navy:#0C2D62;
    --idt-navy-dark:#06213A;
    --idt-blue:#2E6095;
    --idt-blue-dark:#123B72;
    --idt-blue-tint:#EEF4FA;
    --idt-text:#5F7182;
    --idt-light:#8A9AA8;
    --idt-border:#D8E0EA;

    position:relative;
    width:100%;
    overflow:hidden;
    padding:72px 24px 78px;
    background:#ffffff;
    color:#0C2D62;
    font-family:"Manrope",Arial,sans-serif;
    isolation:isolate;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-destination-series .idt-dest-container{
    position:relative;
    z-index:5;
    width:1200px;
    max-width:100%;
    margin:0 auto;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#idt-destination-series .idt-dest-decoration{
    position:absolute;
    inset:0;
    z-index:0;
    overflow:hidden;
    pointer-events:none;
}


/* SOFT GLOW */

#idt-destination-series .idt-dest-glow{
    position:absolute;
    width:500px;
    height:500px;
    border-radius:50%;
    background:#F5F8FC;
    filter:blur(4px);
    opacity:.50;
}

#idt-destination-series .idt-dest-glow-top{
    top:-280px;
    left:-210px;
}

#idt-destination-series .idt-dest-glow-bottom{
    right:-280px;
    bottom:-300px;
    width:590px;
    height:590px;
    opacity:.40;
}


/* DOT PATTERN */

#idt-destination-series .idt-dots{
    position:absolute;
    width:100px;
    height:100px;
    opacity:.38;

    background-image:
        radial-gradient(
            #2E6095 1.4px,
            transparent 1.4px
        );

    background-size:14px 14px;
}

#idt-destination-series .idt-dots-top{
    top:105px;
    left:32px;
}

#idt-destination-series .idt-dots-bottom{
    right:40px;
    bottom:100px;
}


/* ROUTE LINE */

#idt-destination-series .idt-route{
    position:absolute;
    width:520px;
    height:300px;
    opacity:.38;
}

#idt-destination-series .idt-route-top{
    top:45px;
    right:-70px;
    transform:rotate(8deg);
}

#idt-destination-series .idt-route-bottom{
    left:-130px;
    bottom:80px;
    transform:rotate(-8deg);
}

#idt-destination-series .idt-route path{
    fill:none;
    stroke:#2E6095;
    stroke-width:2;
    stroke-linecap:round;
    stroke-dasharray:7 10;
}

#idt-destination-series .idt-route circle{
    fill:#fff;
    stroke:#2E6095;
    stroke-width:2;
}


/* LOCATION PIN */

#idt-destination-series .idt-pin{
    position:absolute;
    width:42px;
    height:42px;
    color:#2E6095;
    opacity:.32;
}

#idt-destination-series .idt-pin-one{
    top:48%;
    left:8%;
}

#idt-destination-series .idt-pin-two{
    top:64%;
    right:7%;
    transform:scale(.8);
}

#idt-destination-series .idt-pin svg{
    width:100%;
    height:100%;
}


/* ARCH */

#idt-destination-series .idt-arch{
    position:absolute;
    width:280px;
    height:180px;
    opacity:.13;
}

#idt-destination-series .idt-arch-left{
    left:-85px;
    bottom:18%;
}

#idt-destination-series .idt-arch-right{
    right:-80px;
    top:60%;
    transform:scaleX(-1);
}

#idt-destination-series .idt-arch path{
    fill:none;
    stroke:#0C2D62;
    stroke-width:2;
}


/* =========================================================
   SECTION HEADER
========================================================= */

#idt-destination-series .idt-dest-header{
    max-width:720px;
    margin:0 auto 58px;
    text-align:center;
}

#idt-destination-series .idt-dest-eyebrow{
    margin:0 0 8px;
    color:#2E6095;
    font-family:"Montez",cursive;
    font-size:40px;
    line-height:1.05;
    font-weight:400;
}

#idt-destination-series .idt-dest-rule{
    display:block;
    width:48px;
    height:2px;
    margin:0 auto 25px;
    background:#FF5D00;
}

#idt-destination-series .idt-dest-main-heading{
    margin:0;
    color:#0C2D62;
    font-family:"Playfair Display",Georgia,serif;
    font-size:42px;
    line-height:1.18;
    font-weight:600;
    letter-spacing:-.8px;
}

#idt-destination-series .idt-dest-main-heading span{
    color:#0C2D62;
}


/* =========================================================
   DESTINATION LIST
========================================================= */

#idt-destination-series .idt-dest-list{
    display:flex;
    flex-direction:column;
    gap:38px;
    margin:0;
    padding:0;
    list-style:none;
}


/* =========================================================
   CARD
========================================================= */

#idt-destination-series .idt-dest-card{
    position:relative;
    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:stretch;
    overflow:hidden;
    min-height:430px;
    background:#fff;
    border:1px solid #D8E0EA;
    border-radius:18px;

    opacity:0;
    transform:translateY(28px);

    transition:
        opacity .7s ease,
        transform .7s ease,
        box-shadow .3s ease;
}

#idt-destination-series .idt-dest-card.idt-visible{
    opacity:1;
    transform:translateY(0);
}

#idt-destination-series .idt-dest-card:hover{
    box-shadow:0 12px 35px rgba(9,43,76,.08);
}


/* IMAGE RIGHT */

#idt-destination-series .idt-image-right .idt-card-content{
    order:1;
}

#idt-destination-series .idt-image-right .idt-card-media{
    order:2;
}


/* IMAGE LEFT */

#idt-destination-series .idt-image-left .idt-card-content{
    order:2;
}

#idt-destination-series .idt-image-left .idt-card-media{
    order:1;
}


/* =========================================================
   CONTENT
========================================================= */

#idt-destination-series .idt-card-content{
    position:relative;
    z-index:2;
    display:flex;
    flex-direction:column;
    justify-content:center;
    padding:46px 52px;
}


/* WATERMARK */

#idt-destination-series .idt-watermark{
    position:absolute;
    top:22px;
    right:24px;
    width:62px;
    height:62px;
    color:#2E6095;
    opacity:.08;
    pointer-events:none;
}

#idt-destination-series .idt-image-left .idt-watermark{
    left:24px;
    right:auto;
}

#idt-destination-series .idt-watermark svg{
    width:100%;
    height:100%;
    fill:none;
    stroke:currentColor;
    stroke-width:1.4;
}


/* SMALL LABEL */

#idt-destination-series .idt-label{
    display:inline-flex;
    align-items:center;
    gap:8px;
    margin-bottom:15px;
    color:#2E6095;
    font-size:11.5px;
    line-height:1.2;
    font-weight:700;
    letter-spacing:.1em;
    text-transform:uppercase;
}

#idt-destination-series .idt-label-icon{
    width:21px;
    height:21px;
    flex:0 0 21px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    background:#EEF4FA;
}

#idt-destination-series .idt-label-icon svg{
    width:11px;
    height:11px;
    fill:none;
    stroke:#123B72;
    stroke-width:2;
}


/* CARD HEADING */

#idt-destination-series .idt-card-heading{
    max-width:500px;
    margin:0 0 18px;
    color:#0C2D62;
    font-family:"Playfair Display",Georgia,serif;
    font-size:27px;
    line-height:1.30;
    font-weight:600;
}

#idt-destination-series .idt-card-heading span{
    color:#0C2D62;
}


/* MINI DIVIDER */

#idt-destination-series .idt-card-divider{
    display:flex;
    align-items:center;
    gap:8px;
    margin-bottom:18px;
}

#idt-destination-series .idt-card-divider-line{
    width:31px;
    height:2px;
    background:#FF5D00;
}

#idt-destination-series .idt-card-divider-dot{
    width:5px;
    height:5px;
    border-radius:50%;
    background:#FF5D00;
}


/* DESCRIPTION */

#idt-destination-series .idt-card-description{
    max-width:44ch;
    margin:0 0 29px;
    color:#5F7182;
    font-family:"DM Sans","Manrope",Arial,sans-serif;
    font-size:14.5px;
    line-height:1.78;
    font-weight:400;
}


/* =========================================================
   CTA BUTTON
========================================================= */

#idt-destination-series .idt-card-btn{
    position:relative;
    align-self:flex-start;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    min-height:50px;
    padding:0 24px;
    overflow:hidden;
    isolation:isolate;
    border-radius:10px;
    background:#0C2D62;
    color:#fff !important;
    font-size:13.5px;
    line-height:1;
    font-weight:700;
    text-decoration:none !important;

    transition:
        transform .25s ease,
        gap .25s ease;
}

#idt-destination-series .idt-card-btn::before{
    content:"";
    position:absolute;
    inset:0;
    z-index:-1;
    background:#123B72;
    transform:translateX(-101%);
    transition:transform .4s ease;
}

#idt-destination-series .idt-card-btn:hover::before{
    transform:translateX(0);
}

#idt-destination-series .idt-card-btn:hover{
    color:#fff !important;
    gap:14px;
    transform:translateY(-1px);
}

#idt-destination-series .idt-card-btn svg{
    width:16px;
    height:16px;
    fill:none;
    stroke:currentColor;
    stroke-width:2;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   IMAGE AREA
========================================================= */

#idt-destination-series .idt-card-media{
    position:relative;
    min-height:430px;
    overflow:hidden;
    background:#EEF4FA;
}

#idt-destination-series .idt-card-media img{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    display:block;
    object-fit:cover;
    object-position:center;
    transform:scale(1.06);
    opacity:0;

    transition:
        transform .9s ease,
        opacity .9s ease;
}

#idt-destination-series .idt-dest-card.idt-visible
.idt-card-media img{
    transform:scale(1);
    opacity:1;
}

#idt-destination-series .idt-card-media::after{
    content:"";
    position:absolute;
    inset:0;
    pointer-events:none;

    background:
        linear-gradient(
            135deg,
            rgba(12,45,98,.05),
            transparent 50%
        );
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:1024px){

    #idt-destination-series{
        padding:62px 20px 68px;
    }

    #idt-destination-series .idt-dest-main-heading{
        font-size:36px;
    }

    #idt-destination-series .idt-dest-header{
        margin-bottom:48px;
    }

    #idt-destination-series .idt-card-content{
        padding:36px 32px;
    }

    #idt-destination-series .idt-dest-card{
        min-height:360px;
    }

    #idt-destination-series .idt-card-media{
        min-height:360px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-destination-series{
        padding:48px 16px 55px;
    }

    #idt-destination-series .idt-dest-header{
        margin-bottom:38px;
    }

    #idt-destination-series .idt-dest-eyebrow{
        font-size:30px;
    }

    #idt-destination-series .idt-dest-rule{
        margin-bottom:20px;
    }

    #idt-destination-series .idt-dest-main-heading{
        font-size:29px;
        line-height:1.28;
    }

    #idt-destination-series .idt-dest-list{
        gap:26px;
    }

    #idt-destination-series .idt-dest-card,
    #idt-destination-series .idt-image-right,
    #idt-destination-series .idt-image-left{
        grid-template-columns:1fr;
        min-height:auto;
    }

    #idt-destination-series .idt-image-right .idt-card-content,
    #idt-destination-series .idt-image-left .idt-card-content{
        order:2;
    }

    #idt-destination-series .idt-image-right .idt-card-media,
    #idt-destination-series .idt-image-left .idt-card-media{
        order:1;
    }

    #idt-destination-series .idt-card-media{
        height:260px;
        min-height:260px;
    }

    #idt-destination-series .idt-card-content{
        padding:28px 22px 31px;
    }

    #idt-destination-series .idt-card-heading{
        font-size:21px;
    }

    #idt-destination-series .idt-card-description{
        max-width:none;
        font-size:13px;
    }

    #idt-destination-series .idt-card-btn{
        width:100%;
    }

    #idt-destination-series .idt-watermark{
        width:45px;
        height:45px;
    }

    #idt-destination-series .idt-route{
        width:320px;
        height:190px;
        opacity:.15;
    }

    #idt-destination-series .idt-dots{
        opacity:.18;
        transform:scale(.75);
    }

    #idt-destination-series .idt-pin{
        opacity:.14;
    }
}


/* REDUCED MOTION */

@media(prefers-reduced-motion:reduce){

    #idt-destination-series .idt-dest-card,
    #idt-destination-series .idt-card-media img{
        transition:none !important;
        opacity:1 !important;
        transform:none !important;
    }
}


/* FONT SYSTEM */

#idt-destination-series .idt-label,
#idt-destination-series .idt-card-btn{
    font-family:"Manrope",Arial,sans-serif;
}
</style>


<section id="idt-destination-series">

    <!-- BACKGROUND DECORATIONS -->
    <div class="idt-dest-decoration" aria-hidden="true">

        <div class="idt-dest-glow idt-dest-glow-top"></div>
        <div class="idt-dest-glow idt-dest-glow-bottom"></div>

        <div class="idt-dots idt-dots-top"></div>
        <div class="idt-dots idt-dots-bottom"></div>


        <!-- TOP ROUTE -->
        <svg class="idt-route idt-route-top" viewBox="0 0 520 300">

            <path d="M35 230C95 185 90 110 165 130C225 146 210 215 275 220C350 226 350 100 440 105C470 107 488 125 505 145"></path>

            <circle cx="35" cy="230" r="7"></circle>
            <circle cx="165" cy="130" r="7"></circle>
            <circle cx="275" cy="220" r="7"></circle>
            <circle cx="440" cy="105" r="7"></circle>

        </svg>


        <!-- BOTTOM ROUTE -->
        <svg class="idt-route idt-route-bottom" viewBox="0 0 520 300">

            <path d="M20 100C80 120 105 195 170 180C230 165 230 90 300 90C370 90 375 195 445 180C475 174 495 155 510 135"></path>

            <circle cx="20" cy="100" r="7"></circle>
            <circle cx="170" cy="180" r="7"></circle>
            <circle cx="300" cy="90" r="7"></circle>
            <circle cx="445" cy="180" r="7"></circle>

        </svg>


        <!-- LOCATION PIN 1 -->
        <span class="idt-pin idt-pin-one">

            <svg viewBox="0 0 24 24" fill="none">

                <path
                    d="M12 21C12 21 19 14.8 19 9C19 5.13 15.87 2 12 2C8.13 2 5 5.13 5 9C5 14.8 12 21 12 21Z"
                    stroke="currentColor"
                    stroke-width="1.5">
                </path>

                <circle
                    cx="12"
                    cy="9"
                    r="2.5"
                    stroke="currentColor"
                    stroke-width="1.5">
                </circle>

            </svg>

        </span>


        <!-- LOCATION PIN 2 -->
        <span class="idt-pin idt-pin-two">

            <svg viewBox="0 0 24 24" fill="none">

                <path
                    d="M12 21C12 21 19 14.8 19 9C19 5.13 15.87 2 12 2C8.13 2 5 5.13 5 9C5 14.8 12 21 12 21Z"
                    stroke="currentColor"
                    stroke-width="1.5">
                </path>

                <circle
                    cx="12"
                    cy="9"
                    r="2.5"
                    stroke="currentColor"
                    stroke-width="1.5">
                </circle>

            </svg>

        </span>


        <!-- ARCH LEFT -->
        <svg class="idt-arch idt-arch-left" viewBox="0 0 280 180">

            <path d="M30 170V85C30 35 75 10 140 10C205 10 250 35 250 85V170"></path>

            <path d="M65 170V92C65 55 95 35 140 35C185 35 215 55 215 92V170"></path>

            <path d="M105 170V100C105 78 120 65 140 65C160 65 175 78 175 100V170"></path>

        </svg>


        <!-- ARCH RIGHT -->
        <svg class="idt-arch idt-arch-right" viewBox="0 0 280 180">

            <path d="M30 170V85C30 35 75 10 140 10C205 10 250 35 250 85V170"></path>

            <path d="M65 170V92C65 55 95 35 140 35C185 35 215 55 215 92V170"></path>

            <path d="M105 170V100C105 78 120 65 140 65C160 65 175 78 175 100V170"></path>

        </svg>

    </div>


    <!-- MAIN CONTAINER -->
    <div class="idt-dest-container">

        <!-- HEADER -->
        <div class="idt-dest-header">

            <p class="idt-dest-eyebrow">
                Destination Series
            </p>

            <span class="idt-dest-rule"></span>

            <h2 class="idt-dest-main-heading">
                Explore India's
                <span>
                    Iconic Historical<br>
                    Destinations
                </span>
            </h2>

        </div>


        <!-- DESTINATION CARDS -->
        <ul class="idt-dest-list">


            <!-- =================================================
                 GOLDEN TRIANGLE
            ================================================== -->
            <li>

                <article class="idt-dest-card idt-image-right">

                    <div class="idt-card-content">

                        <span class="idt-watermark">

                            <svg viewBox="0 0 24 24">
                                <path d="M12 2L19 8H5L12 2Z"></path>
                                <path d="M6 21V10"></path>
                                <path d="M18 21V10"></path>
                                <path d="M9 21V14"></path>
                                <path d="M15 21V14"></path>
                                <path d="M4 21H20"></path>
                            </svg>

                        </span>


                        <span class="idt-label">

                            <span class="idt-label-icon">

                                <svg viewBox="0 0 24 24">
                                    <path d="M12 2L19 8H5L12 2Z"></path>
                                    <path d="M6 21V10"></path>
                                    <path d="M18 21V10"></path>
                                    <path d="M4 21H20"></path>
                                </svg>

                            </span>

                            Most Popular Circuit

                        </span>


                        <h3 class="idt-card-heading">
                            The Golden Triangle —
                            <span>
                                India’s Most Elegant Tour Spot
                            </span>
                        </h3>


                        <div class="idt-card-divider">
                            <span class="idt-card-divider-line"></span>
                            <span class="idt-card-divider-dot"></span>
                        </div>


                        <p class="idt-card-description">
                            Delhi, Agra, and Jaipur form one of India’s most celebrated travel circuits — a journey through Mughal monuments, layered history, and Jaipur’s royal architecture, all within easy reach of one another.
                        </p>


                        <!-- FINAL GOLDEN TRIANGLE URL -->
                        <a
                            href="https://indiadaytrip.com/golden-triangle-tours/"
                            class="idt-card-btn">

                            View All Golden Triangle Tours

                            <svg viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>

                        </a>

                    </div>


                    <div class="idt-card-media">

                        <img
                            src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?q=85&w=1400&auto=format&fit=crop"
                            alt="Taj Mahal Agra Golden Triangle Tour"
                            loading="lazy">

                    </div>

                </article>

            </li>


            <!-- =================================================
                 RAJASTHAN
            ================================================== -->
            <li>

                <article class="idt-dest-card idt-image-left">

                    <div class="idt-card-content">

                        <span class="idt-watermark">

                            <svg viewBox="0 0 24 24">
                                <path d="M3 21H21"></path>
                                <path d="M5 21V10L8 7L12 10L16 7L19 10V21"></path>
                                <path d="M12 21V15"></path>
                            </svg>

                        </span>


                        <span class="idt-label">

                            <span class="idt-label-icon">

                                <svg viewBox="0 0 24 24">
                                    <path d="M3 21H21"></path>
                                    <path d="M5 21V10L8 7L12 10L16 7L19 10V21"></path>
                                </svg>

                            </span>

                            Land of Palaces

                        </span>


                        <h3 class="idt-card-heading">
                            Rajasthan —
                            <span>
                                Land of Kings, Palaces &amp; Desert Silences
                            </span>
                        </h3>


                        <div class="idt-card-divider">
                            <span class="idt-card-divider-line"></span>
                            <span class="idt-card-divider-dot"></span>
                        </div>


                        <p class="idt-card-description">
                            From hilltop forts to lakeside palaces, Rajasthan carries its royal past into the present. Explore Jaipur, Jodhpur, and Jaisalmer, where desert landscapes meet centuries of living tradition.
                        </p>


                        <!-- FINAL RAJASTHAN URL -->
                        <a
                            href="https://indiadaytrip.com/rajasthan-tour-packages/"
                            class="idt-card-btn">

                            View Rajasthan Tours

                            <svg viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>

                        </a>

                    </div>


                    <div class="idt-card-media">

                        <img
                            src="https://images.unsplash.com/photo-1524230507669-5ff97982bb5e?q=85&w=1400&auto=format&fit=crop"
                            alt="Rajasthan heritage fort"
                            loading="lazy">

                    </div>

                </article>

            </li>


            <!-- =================================================
                 SOUTH INDIA / KERALA
            ================================================== -->
            <li>

                <article class="idt-dest-card idt-image-right">

                    <div class="idt-card-content">

                        <span class="idt-watermark">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 20C12 21 18 15 19 5C9 6 3 12 4 20Z"></path>
                                <path d="M4 20C6 16 9 13 13 11"></path>
                            </svg>

                        </span>


                        <span class="idt-label">

                            <span class="idt-label-icon">

                                <svg viewBox="0 0 24 24">
                                    <path d="M4 20C12 21 18 15 19 5C9 6 3 12 4 20Z"></path>
                                    <path d="M4 20C6 16 9 13 13 11"></path>
                                </svg>

                            </span>

                            Temples &amp; Backwaters

                        </span>


                        <h3 class="idt-card-heading">
                            South India —
                            <span>
                                Temples, Backwaters &amp; Spice Trails
                            </span>
                        </h3>


                        <div class="idt-card-divider">
                            <span class="idt-card-divider-line"></span>
                            <span class="idt-card-divider-dot"></span>
                        </div>


                        <p class="idt-card-description">
                            Drift through Kerala’s tranquil backwaters, wander ancient temple towns, and follow spice trails through tropical hills — South India moves at a gentler, greener pace.
                        </p>


                        <!-- FINAL KERALA URL -->
                        <a
                            href="https://indiadaytrip.com/kerala-tours-packages/"
                            class="idt-card-btn">

                            View South India Tours

                            <svg viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>

                        </a>

                    </div>


                    <div class="idt-card-media">

                        <img
                            src="https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?q=85&w=1400&auto=format&fit=crop"
                            alt="Kerala backwaters South India"
                            loading="lazy">

                    </div>

                </article>

            </li>


            <!-- =================================================
                 WILDLIFE INDIA
            ================================================== -->
            <li>

                <article class="idt-dest-card idt-image-left">

                    <div class="idt-card-content">

                        <span class="idt-watermark">

                            <svg viewBox="0 0 24 24">

                                <circle cx="6" cy="8" r="2"></circle>
                                <circle cx="12" cy="5" r="2"></circle>
                                <circle cx="18" cy="8" r="2"></circle>

                                <path d="M12 12C8 12 6 15 6 18A3 3 0 0 0 12 19A3 3 0 0 0 18 18C18 15 16 12 12 12Z"></path>

                            </svg>

                        </span>


                        <span class="idt-label">

                            <span class="idt-label-icon">

                                <svg viewBox="0 0 24 24">

                                    <circle cx="6" cy="8" r="2"></circle>
                                    <circle cx="12" cy="5" r="2"></circle>
                                    <circle cx="18" cy="8" r="2"></circle>

                                    <path d="M12 12C8 12 6 15 6 18A3 3 0 0 0 12 19A3 3 0 0 0 18 18C18 15 16 12 12 12Z"></path>

                                </svg>

                            </span>

                            Thrill &amp; Wildlife

                        </span>


                        <h3 class="idt-card-heading">
                            Wildlife India —
                            <span>
                                Tiger Safaris &amp; National Park Tours
                            </span>
                        </h3>


                        <div class="idt-card-divider">
                            <span class="idt-card-divider-line"></span>
                            <span class="idt-card-divider-dot"></span>
                        </div>


                        <p class="idt-card-description">
                            Track tigers through the forests of Ranthambore and Bandhavgarh, or spot elephants and leopards in Jim Corbett — India’s national parks offer some of the world’s finest wildlife encounters.
                        </p>


                        <!-- INDIA TOUR PACKAGES URL -->
                        <a
                            href="https://indiadaytrip.com/india-tour-packages"
                            class="idt-card-btn">

                            View Wildlife Tours

                            <svg viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>

                        </a>

                    </div>


                    <div class="idt-card-media">

                        <img
                            src="https://images.unsplash.com/photo-1544979590-37e9b47eb705?q=85&w=1400&auto=format&fit=crop"
                            alt="India wildlife safari"
                            loading="lazy">

                    </div>

                </article>

            </li>

        </ul>

    </div>

</section>


<script>
(function(){

    const section =
        document.getElementById(
            "idt-destination-series"
        );

    if(!section){
        return;
    }

    const cards =
        section.querySelectorAll(
            ".idt-dest-card"
        );

    const reducedMotion =
        window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        ).matches;

    if(
        reducedMotion ||
        !("IntersectionObserver" in window)
    ){

        cards.forEach(
            function(card){

                card.classList.add(
                    "idt-visible"
                );

            }
        );

        return;
    }

    const observer =
        new IntersectionObserver(
            function(entries){

                entries.forEach(
                    function(entry){

                        if(entry.isIntersecting){

                            entry.target.classList.add(
                                "idt-visible"
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    }
                );

            },
            {
                threshold:.15,
                rootMargin:"0px 0px -50px 0px"
            }
        );

    cards.forEach(
        function(card){

            observer.observe(
                card
            );

        }
    );

})();
</script>