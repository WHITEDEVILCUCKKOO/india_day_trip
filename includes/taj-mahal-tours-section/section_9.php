<!-- =========================================================
     INDIA DAY TRIP
     SECTION 08 — COMPACT JOURNEY PLANNER
     REDUCED HEIGHT + REDUCED PADDING
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-journey-planner,
#idt-journey-planner *{
    box-sizing:border-box;
}

#idt-journey-planner{
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

#idt-journey-planner .idt-jp-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1160px;

    margin:0 auto;
}


/* =========================================================
   MAIN LAYOUT
========================================================= */

#idt-journey-planner .idt-jp-main{
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

#idt-journey-planner .idt-jp-script{
    margin:0 0 6px;

    color:var(--sky);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;
}

#idt-journey-planner .idt-jp-title{
    max-width:500px;

    margin:0;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:34px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.45px;
}

#idt-journey-planner .idt-jp-accent{
    display:flex;
    align-items:center;

    gap:7px;

    margin:12px 0 15px;
}

#idt-journey-planner .idt-jp-accent::before{
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

#idt-journey-planner .idt-jp-accent::after{
    content:"";

    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-journey-planner .idt-jp-intro{
    max-width:500px;

    margin:0;

    color:rgba(255,255,255,.74);

    font-size:15.5px;
    line-height:1.7;
}


/* =========================================================
   BENEFITS
========================================================= */

#idt-journey-planner .idt-jp-benefits{
    display:grid;

    gap:9px;

    margin-top:18px;
}

#idt-journey-planner .idt-jp-benefit{
    display:flex;

    align-items:flex-start;

    gap:9px;

    color:rgba(255,255,255,.88);

    font-size:14.5px;
    line-height:1.5;

    font-weight:600;
}

#idt-journey-planner .idt-jp-check{
    display:flex;

    align-items:center;
    justify-content:center;

    width:20px;
    height:20px;

    flex:0 0 20px;

    margin-top:1px;

    border:
        1px solid
        rgba(121,189,242,.35);

    border-radius:50%;

    color:var(--sky);
}

#idt-journey-planner .idt-jp-check svg{
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

#idt-journey-planner .idt-jp-actions{
    display:flex;

    flex-wrap:wrap;

    gap:9px;

    margin-top:20px;
}

#idt-journey-planner .idt-jp-btn{
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

#idt-journey-planner .idt-jp-btn-primary{
    background:#FFFFFF;

    color:var(--navy);

    border:1px solid #FFFFFF;
}

#idt-journey-planner .idt-jp-btn-secondary{
    background:transparent;

    color:#FFFFFF;

    border:
        1px solid
        rgba(255,255,255,.22);
}

#idt-journey-planner .idt-jp-btn:hover{
    transform:translateY(-2px);
}

#idt-journey-planner .idt-jp-btn svg{
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

#idt-journey-planner .idt-jp-route{
    position:relative;

    padding:4px 0 4px 40px;
}

#idt-journey-planner .idt-jp-route::before{
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
   STEP
========================================================= */

#idt-journey-planner .idt-jp-step{
    position:relative;

    display:grid;

    grid-template-columns:
        48px minmax(0,1fr);

    gap:14px;

    align-items:center;

    min-height:78px;

    padding:8px 0;
}

#idt-journey-planner .idt-jp-step::before{
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

#idt-journey-planner .idt-jp-step:last-child::before{
    background:var(--orange);
}


/* ICON */

#idt-journey-planner .idt-jp-step-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:48px;
    height:48px;

    border-radius:50%;

    border:
        1px solid
        rgba(255,255,255,.10);

    background:
        rgba(255,255,255,.05);

    color:var(--sky);
}

#idt-journey-planner .idt-jp-step:last-child .idt-jp-step-icon{
    color:#FF8A4A;
}

#idt-journey-planner .idt-jp-step-icon svg{
    width:22px;
    height:22px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.65;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* COPY */

#idt-journey-planner .idt-jp-step-small{
    display:block;

    margin-bottom:2px;

    color:rgba(255,255,255,.44);

    font-size:10.5px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;
}

#idt-journey-planner .idt-jp-step h3{
    margin:0 0 2px;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:18px;
    line-height:1.3;

    font-weight:800;
}

#idt-journey-planner .idt-jp-step p{
    max-width:450px;

    margin:0;

    color:rgba(255,255,255,.64);

    font-size:14px;
    line-height:1.5;
}


/* =========================================================
   BOTTOM CHOICE
========================================================= */

#idt-journey-planner .idt-jp-choice{
    display:grid;

    grid-template-columns:
        160px
        minmax(0,1fr)
        minmax(0,1fr);

    margin-top:26px;

    padding-top:18px;

    border-top:
        1px solid
        rgba(255,255,255,.09);
}


/* LABEL */

#idt-journey-planner .idt-jp-choice-label{
    padding-right:22px;

    color:rgba(255,255,255,.46);

    font-size:10.5px;
    line-height:1.45;

    font-weight:800;

    letter-spacing:.08em;

    text-transform:uppercase;
}

#idt-journey-planner .idt-jp-choice-label strong{
    display:block;

    margin-top:3px;

    color:#FFFFFF;

    font-size:14.5px;
    line-height:1.4;

    letter-spacing:0;

    text-transform:none;
}


/* CHOICE ITEM */

#idt-journey-planner .idt-jp-choice-item{
    display:grid;

    grid-template-columns:
        40px minmax(0,1fr);

    gap:11px;

    align-items:start;

    min-width:0;

    padding:0 20px;

    border-left:
        1px solid
        rgba(255,255,255,.09);
}

#idt-journey-planner .idt-jp-choice-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:40px;
    height:40px;

    border-radius:50%;

    background:
        rgba(121,189,242,.08);

    color:var(--sky);
}

#idt-journey-planner .idt-jp-choice-item:last-child .idt-jp-choice-icon{
    background:
        rgba(255,93,0,.08);

    color:#FF8A4A;
}

#idt-journey-planner .idt-jp-choice-icon svg{
    width:19px;
    height:19px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.7;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-journey-planner .idt-jp-choice-item h4{
    margin:0 0 3px;

    color:#FFFFFF;

    font-size:14.5px;
    line-height:1.4;

    font-weight:800;
}

#idt-journey-planner .idt-jp-choice-item p{
    margin:0;

    color:rgba(255,255,255,.56);

    font-size:13px;
    line-height:1.5;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:1200px){

    #idt-journey-planner{
        padding:36px 28px 38px;
    }

    #idt-journey-planner .idt-jp-wrap{
        max-width:1050px;
    }

    #idt-journey-planner .idt-jp-main{
        gap:44px;
    }

}

@media(max-width:991px){

    #idt-journey-planner{
        padding:34px 20px 36px;
    }

    #idt-journey-planner .idt-jp-main{
        grid-template-columns:
            minmax(0,.95fr)
            minmax(0,1.05fr);

        gap:32px;
    }

    #idt-journey-planner .idt-jp-intro{
        font-size:15px;
    }

    #idt-journey-planner .idt-jp-choice{
        grid-template-columns:
            135px
            minmax(0,1fr)
            minmax(0,1fr);
    }

    #idt-journey-planner .idt-jp-choice-item{
        padding:0 15px;
    }

}

@media(max-width:767px){

    #idt-journey-planner{
        padding:32px 15px 34px;
    }

    #idt-journey-planner .idt-jp-main{
        grid-template-columns:1fr;

        gap:26px;
    }

    #idt-journey-planner .idt-jp-intro{
        max-width:none;

        font-size:15px;
    }

    #idt-journey-planner .idt-jp-route{
        padding-left:36px;
    }

    #idt-journey-planner .idt-jp-step{
        min-height:74px;
    }

    #idt-journey-planner .idt-jp-choice{
        grid-template-columns:1fr;

        margin-top:22px;
        padding-top:16px;
    }

    #idt-journey-planner .idt-jp-choice-label{
        padding:0 0 12px;
    }

    #idt-journey-planner .idt-jp-choice-item{
        padding:13px 0;

        border-left:0;

        border-top:
            1px solid
            rgba(255,255,255,.08);
    }

}

@media(max-width:430px){

    #idt-journey-planner{
        padding:30px 13px 32px;
    }

    #idt-journey-planner .idt-jp-actions{
        display:grid;

        grid-template-columns:1fr 1fr;
    }

    #idt-journey-planner .idt-jp-btn{
        width:100%;

        padding:10px 9px;

        font-size:12px;
    }

    #idt-journey-planner .idt-jp-route{
        padding-left:31px;
    }

    #idt-journey-planner .idt-jp-route::before{
        left:8px;
    }

    #idt-journey-planner .idt-jp-step::before{
        left:-28px;
    }

    #idt-journey-planner .idt-jp-step{
        grid-template-columns:
            43px minmax(0,1fr);

        gap:11px;
    }

    #idt-journey-planner .idt-jp-step-icon{
        width:43px;
        height:43px;
    }

    #idt-journey-planner .idt-jp-step h3{
        font-size:17px;
    }

    #idt-journey-planner .idt-jp-step p{
        font-size:13.5px;
    }

}

@media(max-width:360px){

    #idt-journey-planner{
        padding:28px 10px 30px;
    }

}

</style>


<section id="idt-journey-planner">

    <div class="idt-jp-wrap">


        <div class="idt-jp-main">


            <!-- LEFT CONTENT -->

            <div>

                <p class="idt-jp-script">
                    From Delhi to the Taj
                </p>

                <h2 class="idt-jp-title">
                    A Smooth Journey to Agra, Planned Around You
                </h2>

                <div
                    class="idt-jp-accent"
                    aria-hidden="true">
                </div>


                <p class="idt-jp-intro">
                    Start from Delhi and enjoy a well-planned Taj Mahal journey designed around your pickup point, travel preference and available sightseeing time.
                </p>


                <div class="idt-jp-benefits">

                    <div class="idt-jp-benefit">

                        <span class="idt-jp-check">
                            <svg viewBox="0 0 24 24">
                                <path d="m6 12 4 4 8-8"></path>
                            </svg>
                        </span>

                        Flexible pickup and departure planning

                    </div>


                    <div class="idt-jp-benefit">

                        <span class="idt-jp-check">
                            <svg viewBox="0 0 24 24">
                                <path d="m6 12 4 4 8-8"></path>
                            </svg>
                        </span>

                        Private sightseeing based on your itinerary

                    </div>


                    <div class="idt-jp-benefit">

                        <span class="idt-jp-check">
                            <svg viewBox="0 0 24 24">
                                <path d="m6 12 4 4 8-8"></path>
                            </svg>
                        </span>

                        Local travel assistance in Agra

                    </div>

                </div>


                <div class="idt-jp-actions">

                    <a
                        class="idt-jp-btn idt-jp-btn-primary"
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener"
                    >
                        Plan My Journey

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


            <!-- RIGHT ROUTE -->

            <div class="idt-jp-route">


                <div class="idt-jp-step">

                    <span class="idt-jp-step-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M3 21h18"></path>
                            <path d="M5 21V8l7-5 7 5v13"></path>
                            <path d="M9 21v-6h6v6"></path>
                        </svg>

                    </span>

                    <div>

                        <span class="idt-jp-step-small">
                            Start
                        </span>

                        <h3>
                            Pickup in Delhi
                        </h3>

                        <p>
                            Begin from your hotel, airport or selected Delhi location.
                        </p>

                    </div>

                </div>


                <div class="idt-jp-step">

                    <span class="idt-jp-step-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M5 17h14"></path>
                            <path d="M4 12l2-5h12l2 5"></path>
                            <path d="M3 12h18v5H3z"></path>
                        </svg>

                    </span>

                    <div>

                        <span class="idt-jp-step-small">
                            Travel
                        </span>

                        <h3>
                            Continue to Agra
                        </h3>

                        <p>
                            Choose a private car or an express-train tour option.
                        </p>

                    </div>

                </div>


                <div class="idt-jp-step">

                    <span class="idt-jp-step-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 20h16"></path>
                            <path d="M6 20V11"></path>
                            <path d="M18 20V11"></path>
                            <path d="M9 11V8l3-4 3 4v3"></path>
                        </svg>

                    </span>

                    <div>

                        <span class="idt-jp-step-small">
                            Explore
                        </span>

                        <h3>
                            Private Agra Sightseeing
                        </h3>

                        <p>
                            Visit the Taj Mahal and selected attractions at your preferred pace.
                        </p>

                    </div>

                </div>


                <div class="idt-jp-step">

                    <span class="idt-jp-step-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="2.5"></circle>
                        </svg>

                    </span>

                    <div>

                        <span class="idt-jp-step-small">
                            Finish
                        </span>

                        <h3>
                            Return or Stay in Agra
                        </h3>

                        <p>
                            Return to Delhi or continue with an overnight itinerary.
                        </p>

                    </div>

                </div>


            </div>

        </div>


        <!-- BOTTOM CHOICE -->

        <div class="idt-jp-choice">

            <div class="idt-jp-choice-label">

                Choose Your

                <strong>
                    Travel Style
                </strong>

            </div>


            <div class="idt-jp-choice-item">

                <span class="idt-jp-choice-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M5 17h14"></path>
                        <path d="M4 12l2-5h12l2 5"></path>
                        <path d="M3 12h18v5H3z"></path>
                    </svg>

                </span>

                <div>

                    <h4>
                        Private Car
                    </h4>

                    <p>
                        Flexible pickup, private travel and a personalised sightseeing pace.
                    </p>

                </div>

            </div>


            <div class="idt-jp-choice-item">

                <span class="idt-jp-choice-icon">

                    <svg viewBox="0 0 24 24">
                        <rect x="4" y="3" width="16" height="14" rx="2"></rect>
                        <path d="M7 7h10"></path>
                        <path d="m8 21 2-4"></path>
                        <path d="m16 21-2-4"></path>
                    </svg>

                </span>

                <div>

                    <h4>
                        Gatimaan Express
                    </h4>

                    <p>
                        A structured same-day rail journey for faster Delhi to Agra travel.
                    </p>

                </div>

            </div>

        </div>


    </div>

</section>