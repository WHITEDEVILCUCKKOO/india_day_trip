<!-- =========================================================
     INDIA DAY TRIP
     GOLDEN TRIANGLE TOUR PAGE
     SECTION 08 — COMPACT JOURNEY PLANNER
     DELHI → AGRA → JAIPUR
     SAME DESIGN + GOLDEN TRIANGLE CONTENT
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-golden-journey,
#idt-golden-journey *{
    box-sizing:border-box;
}

#idt-golden-journey{
    --navy:#0C2D62;
    --blue:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;

    position:relative;
    width:100%;
    max-width:100%;
    overflow:hidden;

    padding:38px 24px 40px;

    background:
        radial-gradient(
            circle at 88% 15%,
            rgba(121,189,242,.12),
            transparent 24%
        ),
        radial-gradient(
            circle at 8% 90%,
            rgba(255,93,0,.05),
            transparent 22%
        ),
        linear-gradient(
            135deg,
            #071A31 0%,
            #082342 52%,
            #071728 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-golden-journey .idt-jp-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1160px;

    margin:0 auto;
}


/* =========================================================
   MAIN LAYOUT
========================================================= */

#idt-golden-journey .idt-jp-main{
    display:grid;

    grid-template-columns:
        minmax(0,.92fr)
        minmax(0,1.08fr);

    gap:54px;

    align-items:center;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#idt-golden-journey .idt-jp-script{
    margin:0 0 6px;

    color:var(--sky);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-golden-journey .idt-jp-title{
    max-width:510px;

    margin:0;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:34px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.45px;
}

#idt-golden-journey .idt-jp-accent{
    display:flex;
    align-items:center;

    gap:7px;

    margin:12px 0 15px;
}

#idt-golden-journey .idt-jp-accent::before{
    content:"";

    width:48px;
    height:2px;

    background:
        linear-gradient(
            90deg,
            var(--sky),
            var(--orange)
        );

    border-radius:20px;
}

#idt-golden-journey .idt-jp-accent::after{
    content:"";

    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-golden-journey .idt-jp-intro{
    max-width:510px;

    margin:0;

    color:rgba(255,255,255,.74);

    font-size:15.5px;
    line-height:1.7;
}


/* =========================================================
   BENEFITS
========================================================= */

#idt-golden-journey .idt-jp-benefits{
    display:grid;

    gap:9px;

    margin-top:18px;
}

#idt-golden-journey .idt-jp-benefit{
    display:flex;

    align-items:flex-start;

    gap:9px;

    color:rgba(255,255,255,.88);

    font-size:14.5px;
    line-height:1.5;

    font-weight:600;
}

#idt-golden-journey .idt-jp-check{
    display:flex;

    align-items:center;
    justify-content:center;

    width:20px;
    height:20px;

    flex:0 0 20px;

    margin-top:1px;

    border:1px solid rgba(121,189,242,.35);

    border-radius:50%;

    color:var(--sky);
}

#idt-golden-journey .idt-jp-check svg{
    width:11px;
    height:11px;

    fill:none;
    stroke:currentColor;

    stroke-width:2.2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   ACTIONS
========================================================= */

#idt-golden-journey .idt-jp-actions{
    display:flex;

    flex-wrap:wrap;

    gap:9px;

    margin-top:20px;
}

#idt-golden-journey .idt-jp-btn{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    min-height:43px;

    padding:10px 17px;

    border-radius:5px;

    text-decoration:none;

    font-size:13px;
    line-height:1;

    font-weight:800;

    transition:
        transform .25s ease,
        background .25s ease,
        border-color .25s ease;
}

#idt-golden-journey .idt-jp-btn-primary{
    background:#FFFFFF;

    color:var(--navy);

    border:1px solid #FFFFFF;
}

#idt-golden-journey .idt-jp-btn-secondary{
    background:transparent;

    color:#FFFFFF;

    border:1px solid rgba(255,255,255,.22);
}

#idt-golden-journey .idt-jp-btn:hover{
    transform:translateY(-2px);
}

#idt-golden-journey .idt-jp-btn svg{
    width:16px;
    height:16px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RIGHT ROUTE
========================================================= */

#idt-golden-journey .idt-jp-route{
    position:relative;

    padding:4px 0 4px 40px;
}

#idt-golden-journey .idt-jp-route::before{
    content:"";

    position:absolute;

    top:32px;
    bottom:32px;
    left:11px;

    width:1px;

    background:
        linear-gradient(
            180deg,
            rgba(121,189,242,.28),
            rgba(121,189,242,.78),
            rgba(255,93,0,.68)
        );
}


/* =========================================================
   ROUTE STEP
========================================================= */

#idt-golden-journey .idt-jp-step{
    position:relative;

    display:grid;

    grid-template-columns:
        48px minmax(0,1fr);

    gap:14px;

    align-items:center;

    min-height:78px;

    padding:8px 0;
}

#idt-golden-journey .idt-jp-step::before{
    content:"";

    position:absolute;

    left:-35px;
    top:50%;

    width:13px;
    height:13px;

    border:3px solid #0A2442;

    border-radius:50%;

    background:var(--sky);

    transform:translateY(-50%);
}

#idt-golden-journey .idt-jp-step:last-child::before{
    background:var(--orange);
}


/* ICON */

#idt-golden-journey .idt-jp-step-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:48px;
    height:48px;

    border-radius:50%;

    border:1px solid rgba(255,255,255,.10);

    background:rgba(255,255,255,.05);

    color:var(--sky);
}

#idt-golden-journey .idt-jp-step:last-child .idt-jp-step-icon{
    color:#FF8A4A;
}

#idt-golden-journey .idt-jp-step-icon svg{
    width:22px;
    height:22px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.65;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* COPY */

#idt-golden-journey .idt-jp-step-small{
    display:block;

    margin-bottom:2px;

    color:rgba(255,255,255,.44);

    font-size:10.5px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;
}

#idt-golden-journey .idt-jp-step h3{
    margin:0 0 2px;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:18px;
    line-height:1.3;

    font-weight:800;
}

#idt-golden-journey .idt-jp-step p{
    max-width:450px;

    margin:0;

    color:rgba(255,255,255,.64);

    font-size:14px;
    line-height:1.5;
}


/* =========================================================
   BOTTOM CHOICE
========================================================= */

#idt-golden-journey .idt-jp-choice{
    display:grid;

    grid-template-columns:
        160px
        minmax(0,1fr)
        minmax(0,1fr);

    margin-top:26px;

    padding-top:18px;

    border-top:1px solid rgba(255,255,255,.09);
}


/* LABEL */

#idt-golden-journey .idt-jp-choice-label{
    padding-right:22px;

    color:rgba(255,255,255,.46);

    font-size:10.5px;
    line-height:1.45;

    font-weight:800;

    letter-spacing:.08em;

    text-transform:uppercase;
}

#idt-golden-journey .idt-jp-choice-label strong{
    display:block;

    margin-top:3px;

    color:#FFFFFF;

    font-size:14.5px;
    line-height:1.4;

    letter-spacing:0;

    text-transform:none;
}


/* CHOICE ITEM */

#idt-golden-journey .idt-jp-choice-item{
    display:grid;

    grid-template-columns:
        40px minmax(0,1fr);

    gap:11px;

    align-items:start;

    min-width:0;

    padding:0 20px;

    border-left:1px solid rgba(255,255,255,.09);
}

#idt-golden-journey .idt-jp-choice-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:40px;
    height:40px;

    border-radius:50%;

    background:rgba(121,189,242,.08);

    color:var(--sky);
}

#idt-golden-journey .idt-jp-choice-item:last-child .idt-jp-choice-icon{
    background:rgba(255,93,0,.08);

    color:#FF8A4A;
}

#idt-golden-journey .idt-jp-choice-icon svg{
    width:19px;
    height:19px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.7;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-golden-journey .idt-jp-choice-item h4{
    margin:0 0 3px;

    color:#FFFFFF;

    font-size:14.5px;
    line-height:1.4;

    font-weight:800;
}

#idt-golden-journey .idt-jp-choice-item p{
    margin:0;

    color:rgba(255,255,255,.56);

    font-size:13px;
    line-height:1.5;
}


/* =========================================================
   RESPONSIVE — 1200
========================================================= */

@media(max-width:1200px){

    #idt-golden-journey{
        padding:36px 28px 38px;
    }

    #idt-golden-journey .idt-jp-wrap{
        max-width:1050px;
    }

    #idt-golden-journey .idt-jp-main{
        gap:44px;
    }

}


/* =========================================================
   RESPONSIVE — 991
========================================================= */

@media(max-width:991px){

    #idt-golden-journey{
        padding:34px 20px 36px;
    }

    #idt-golden-journey .idt-jp-main{
        grid-template-columns:
            minmax(0,.95fr)
            minmax(0,1.05fr);

        gap:32px;
    }

    #idt-golden-journey .idt-jp-intro{
        font-size:15px;
    }

    #idt-golden-journey .idt-jp-choice{
        grid-template-columns:
            135px
            minmax(0,1fr)
            minmax(0,1fr);
    }

    #idt-golden-journey .idt-jp-choice-item{
        padding:0 15px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-golden-journey{
        padding:32px 15px 34px;
    }

    #idt-golden-journey .idt-jp-main{
        grid-template-columns:1fr;

        gap:26px;
    }

    #idt-golden-journey .idt-jp-script{
        font-size:28px;
    }

    #idt-golden-journey .idt-jp-title{
        max-width:none;

        font-size:29px;
    }

    #idt-golden-journey .idt-jp-intro{
        max-width:none;

        font-size:15px;
    }

    #idt-golden-journey .idt-jp-route{
        padding-left:36px;
    }

    #idt-golden-journey .idt-jp-step{
        min-height:74px;
    }

    #idt-golden-journey .idt-jp-choice{
        grid-template-columns:1fr;

        margin-top:22px;
        padding-top:16px;
    }

    #idt-golden-journey .idt-jp-choice-label{
        padding:0 0 12px;
    }

    #idt-golden-journey .idt-jp-choice-item{
        padding:13px 0;

        border-left:0;

        border-top:1px solid rgba(255,255,255,.08);
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-golden-journey{
        padding:30px 13px 32px;
    }

    #idt-golden-journey .idt-jp-script{
        font-size:26px;
    }

    #idt-golden-journey .idt-jp-title{
        font-size:27px;
        line-height:1.22;
    }

    #idt-golden-journey .idt-jp-actions{
        display:grid;

        grid-template-columns:1fr 1fr;
    }

    #idt-golden-journey .idt-jp-btn{
        width:100%;

        padding:10px 9px;

        font-size:12px;
    }

    #idt-golden-journey .idt-jp-route{
        padding-left:31px;
    }

    #idt-golden-journey .idt-jp-route::before{
        left:8px;
    }

    #idt-golden-journey .idt-jp-step::before{
        left:-28px;
    }

    #idt-golden-journey .idt-jp-step{
        grid-template-columns:
            43px minmax(0,1fr);

        gap:11px;
    }

    #idt-golden-journey .idt-jp-step-icon{
        width:43px;
        height:43px;
    }

    #idt-golden-journey .idt-jp-step h3{
        font-size:17px;
    }

    #idt-golden-journey .idt-jp-step p{
        font-size:13.5px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-golden-journey{
        padding:28px 10px 30px;
    }

    #idt-golden-journey .idt-jp-script{
        font-size:25px;
    }

    #idt-golden-journey .idt-jp-title{
        font-size:25px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-golden-journey *,
    #idt-golden-journey *::before,
    #idt-golden-journey *::after{
        transition:none !important;
        animation:none !important;
    }

}

</style>


<section id="idt-golden-journey">

    <div class="idt-jp-wrap">


        <div class="idt-jp-main">


            <!-- =================================================
                 LEFT CONTENT
            ================================================== -->

            <div>

                <p class="idt-jp-script">
                    Delhi • Agra • Jaipur
                </p>

                <h2 class="idt-jp-title">
                    A Smooth Golden Triangle Journey, Planned Around You
                </h2>

                <div
                    class="idt-jp-accent"
                    aria-hidden="true">
                </div>


                <p class="idt-jp-intro">
                    Travel through Delhi, Agra and Jaipur with a well-planned private itinerary designed around your available days, sightseeing interests and preferred travel pace.
                </p>


                <div class="idt-jp-benefits">


                    <div class="idt-jp-benefit">

                        <span class="idt-jp-check">

                            <svg viewBox="0 0 24 24">
                                <path d="m6 12 4 4 8-8"></path>
                            </svg>

                        </span>

                        Flexible pickup, departure and tour duration

                    </div>


                    <div class="idt-jp-benefit">

                        <span class="idt-jp-check">

                            <svg viewBox="0 0 24 24">
                                <path d="m6 12 4 4 8-8"></path>
                            </svg>

                        </span>

                        Private travel between Delhi, Agra and Jaipur

                    </div>


                    <div class="idt-jp-benefit">

                        <span class="idt-jp-check">

                            <svg viewBox="0 0 24 24">
                                <path d="m6 12 4 4 8-8"></path>
                            </svg>

                        </span>

                        Sightseeing planned around your selected itinerary

                    </div>


                </div>


                <div class="idt-jp-actions">

                    <a
                        class="idt-jp-btn idt-jp-btn-primary"
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener"
                    >
                        Plan My Golden Triangle

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14"></path>
                            <path d="m14 7 5 5-5 5"></path>
                        </svg>

                    </a>


                    <a
                        class="idt-jp-btn idt-jp-btn-secondary"
                        href="tel:+918126052755"
                    >
                        Call Us
                    </a>

                </div>

            </div>


            <!-- =================================================
                 RIGHT — GOLDEN TRIANGLE ROUTE
            ================================================== -->

            <div class="idt-jp-route">


                <!-- DELHI -->

                <div class="idt-jp-step">

                    <span class="idt-jp-step-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M3 21h18"></path>
                            <path d="M6 21V9"></path>
                            <path d="M18 21V9"></path>
                            <path d="M4 9h16"></path>
                            <path d="M8 9V6"></path>
                            <path d="M16 9V6"></path>
                            <path d="M7 6h10"></path>
                        </svg>

                    </span>


                    <div>

                        <span class="idt-jp-step-small">
                            Begin
                        </span>

                        <h3>
                            Explore Delhi
                        </h3>

                        <p>
                            Start your journey with the historic monuments, markets and landmarks of Old and New Delhi.
                        </p>

                    </div>

                </div>


                <!-- AGRA -->

                <div class="idt-jp-step">

                    <span class="idt-jp-step-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 20h16"></path>
                            <path d="M6 20V11"></path>
                            <path d="M18 20V11"></path>
                            <path d="M9 11V8l3-4 3 4v3"></path>
                            <path d="M8 14h8"></path>
                        </svg>

                    </span>


                    <div>

                        <span class="idt-jp-step-small">
                            Continue
                        </span>

                        <h3>
                            Discover Agra
                        </h3>

                        <p>
                            Experience the Taj Mahal and discover the Mughal heritage that makes Agra an essential part of the route.
                        </p>

                    </div>

                </div>


                <!-- OPTIONAL HERITAGE STOP -->

                <div class="idt-jp-step">

                    <span class="idt-jp-step-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M3 21h18"></path>
                            <path d="M5 21V10h14v11"></path>
                            <path d="M8 10V7h8v3"></path>
                            <path d="M10 21v-6h4v6"></path>
                        </svg>

                    </span>


                    <div>

                        <span class="idt-jp-step-small">
                            Heritage Stop
                        </span>

                        <h3>
                            Fatehpur Sikri
                        </h3>

                        <p>
                            Add the historic Mughal city of Fatehpur Sikri while travelling from Agra towards Jaipur.
                        </p>

                    </div>

                </div>


                <!-- JAIPUR -->

                <div class="idt-jp-step">

                    <span class="idt-jp-step-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M3 21h18"></path>
                            <path d="M5 21V8h14v13"></path>
                            <path d="M8 8V5h8v3"></path>
                            <path d="M8 12h2"></path>
                            <path d="M14 12h2"></path>
                            <path d="M10 21v-5h4v5"></path>
                        </svg>

                    </span>


                    <div>

                        <span class="idt-jp-step-small">
                            Complete
                        </span>

                        <h3>
                            Experience Jaipur
                        </h3>

                        <p>
                            Complete the Golden Triangle with Jaipur’s magnificent forts, palaces and colourful Pink City.
                        </p>

                    </div>

                </div>


            </div>

        </div>


        <!-- =================================================
             BOTTOM CHOICE
        ================================================== -->

        <div class="idt-jp-choice">


            <div class="idt-jp-choice-label">

                Choose Your

                <strong>
                    Journey Style
                </strong>

            </div>


            <!-- PRIVATE CAR -->

            <div class="idt-jp-choice-item">

                <span class="idt-jp-choice-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M5 17h14"></path>
                        <path d="M4 12l2-5h12l2 5"></path>
                        <path d="M3 12h18v5H3z"></path>
                        <circle cx="7" cy="17" r="1.5"></circle>
                        <circle cx="17" cy="17" r="1.5"></circle>
                    </svg>

                </span>


                <div>

                    <h4>
                        Private Golden Triangle Tour
                    </h4>

                    <p>
                        Travel between Delhi, Agra and Jaipur privately with greater flexibility for sightseeing and stops.
                    </p>

                </div>

            </div>


            <!-- CUSTOM ITINERARY -->

            <div class="idt-jp-choice-item">

                <span class="idt-jp-choice-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 19V5"></path>
                        <path d="M4 7h11l-2 3 2 3H4"></path>
                        <path d="M8 19h12"></path>
                        <path d="M16 16l4 3-4 3"></path>
                    </svg>

                </span>


                <div>

                    <h4>
                        Custom Golden Triangle Journey
                    </h4>

                    <p>
                        Adjust the duration, sightseeing and additional destinations around your travel plans.
                    </p>

                </div>

            </div>


        </div>


    </div>

</section>