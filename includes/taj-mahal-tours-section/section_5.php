<!-- =========================================================
     INDIA DAY TRIP
     TAJ MAHAL TOUR PAGE
     SECTION 04 — WHAT'S INCLUDED
     PREMIUM FINAL VERSION
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-tour-inclusions,
#idt-tour-inclusions *{
    box-sizing:border-box;
}

#idt-tour-inclusions{
    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#123B72;
    --mid:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --orange2:#FF7A2F;
    --text:#5E6B7B;
    --muted:#7B8795;
    --line:#E5EAF0;
    --warm:#FCFAF6;
    --white:#FFFFFF;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:76px 24px;

    background:
        radial-gradient(
            circle at 0% 0%,
            rgba(121,189,242,.11),
            transparent 25%
        ),
        radial-gradient(
            circle at 100% 100%,
            rgba(255,93,0,.055),
            transparent 22%
        ),
        #FCFAF6;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   DECORATION
========================================================= */

#idt-tour-inclusions::before{
    content:"";
    position:absolute;
    top:58px;
    left:-85px;

    width:190px;
    height:190px;

    border:1px solid rgba(12,45,98,.06);
    border-radius:50%;

    pointer-events:none;
}

#idt-tour-inclusions::after{
    content:"";
    position:absolute;
    right:-65px;
    bottom:55px;

    width:150px;
    height:150px;

    border:1px solid rgba(255,93,0,.07);
    border-radius:50%;

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-tour-inclusions .idt-inc-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1100px;

    margin:0 auto;
}


/* =========================================================
   HEADING
========================================================= */

#idt-tour-inclusions .idt-inc-heading{
    max-width:750px;
    margin:0 auto 42px;
    text-align:center;
}

#idt-tour-inclusions .idt-inc-script{
    margin:0 0 7px;

    color:var(--blue);

    font-family:"Montez",cursive;
    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-tour-inclusions .idt-inc-h2{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;
    font-size:34px;
    line-height:1.2;

    font-weight:700;
    letter-spacing:-.5px;
}


/* ACCENT */

#idt-tour-inclusions .idt-inc-divider{
    display:flex;
    align-items:center;
    justify-content:center;

    gap:7px;

    margin:14px 0 0;
}

#idt-tour-inclusions .idt-inc-divider::before{
    content:"";

    width:52px;
    height:2px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--blue),
            var(--orange)
        );
}

#idt-tour-inclusions .idt-inc-divider::after{
    content:"";

    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-tour-inclusions .idt-inc-intro{
    max-width:690px;

    margin:15px auto 0;

    color:var(--text);

    font-size:16px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   MINI SUMMARY BAR
========================================================= */

#idt-tour-inclusions .idt-inc-summary{
    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    max-width:850px;

    margin:0 auto 25px;

    overflow:hidden;

    border:1px solid rgba(12,45,98,.09);
    border-radius:8px;

    background:rgba(255,255,255,.75);

    box-shadow:
        0 7px 24px
        rgba(12,45,98,.04);
}

#idt-tour-inclusions .idt-inc-summary-item{
    display:flex;
    align-items:center;
    justify-content:center;

    gap:9px;

    min-height:55px;

    padding:11px 16px;

    color:var(--navy);

    font-size:13.5px;
    line-height:1.4;

    font-weight:700;
}

#idt-tour-inclusions .idt-inc-summary-item + .idt-inc-summary-item{
    border-left:1px solid rgba(12,45,98,.08);
}

#idt-tour-inclusions .idt-inc-summary-item svg{
    width:18px;
    height:18px;

    flex:0 0 18px;

    fill:none;
    stroke:var(--blue);
    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-tour-inclusions .idt-inc-summary-item:nth-child(2) svg{
    stroke:var(--orange);
}


/* =========================================================
   MAIN GRID
========================================================= */

#idt-tour-inclusions .idt-inc-grid{
    display:grid;

    grid-template-columns:
        repeat(2,minmax(0,1fr));

    gap:22px;

    align-items:stretch;
}


/* =========================================================
   CARD
========================================================= */

#idt-tour-inclusions .idt-inc-card{
    position:relative;

    display:flex;
    flex-direction:column;

    overflow:hidden;

    min-width:0;

    border:1px solid rgba(12,45,98,.10);
    border-radius:10px;

    background:#FFFFFF;

    box-shadow:
        0 12px 32px
        rgba(12,45,98,.055);

    transition:
        transform .4s cubic-bezier(.2,.7,.2,1),
        box-shadow .4s ease,
        border-color .4s ease;
}

#idt-tour-inclusions .idt-inc-card:hover{
    transform:translateY(-5px);

    border-color:rgba(12,45,98,.17);

    box-shadow:
        0 20px 44px
        rgba(12,45,98,.105);
}


/* TOP LINE */

#idt-tour-inclusions .idt-inc-card::before{
    content:"";

    position:absolute;
    z-index:3;

    top:0;
    left:0;

    width:100%;
    height:3px;

    background:
        linear-gradient(
            90deg,
            var(--blue),
            var(--sky)
        );
}

#idt-tour-inclusions .idt-inc-card.idt-excluded::before{
    background:
        linear-gradient(
            90deg,
            var(--orange),
            var(--orange2)
        );
}


/* =========================================================
   CARD HEADER
========================================================= */

#idt-tour-inclusions .idt-inc-card-head{
    position:relative;

    display:flex;
    align-items:center;

    gap:15px;

    padding:25px 25px 21px;

    border-bottom:
        1px solid
        rgba(12,45,98,.075);
}


/* ICON */

#idt-tour-inclusions .idt-inc-icon{
    display:flex;
    align-items:center;
    justify-content:center;

    width:52px;
    height:52px;

    flex:0 0 52px;

    border-radius:10px;

    background:#EDF5FC;

    color:var(--blue);

    transition:
        transform .4s ease,
        background .4s ease;
}

#idt-tour-inclusions .idt-excluded .idt-inc-icon{
    background:#FFF1E8;
    color:var(--orange);
}

#idt-tour-inclusions .idt-inc-card:hover .idt-inc-icon{
    transform:translateY(-2px);
}

#idt-tour-inclusions .idt-inc-icon svg{
    width:25px;
    height:25px;

    fill:none;
    stroke:currentColor;
    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* HEADER CONTENT */

#idt-tour-inclusions .idt-inc-head-copy{
    min-width:0;
}

#idt-tour-inclusions .idt-inc-label{
    display:block;

    margin-bottom:3px;

    color:var(--mid);

    font-size:11.5px;
    line-height:1.3;

    font-weight:800;

    text-transform:uppercase;

    letter-spacing:.09em;
}

#idt-tour-inclusions .idt-excluded .idt-inc-label{
    color:var(--orange);
}

#idt-tour-inclusions .idt-inc-card-title{
    margin:0;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:21px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:-.35px;
}


/* =========================================================
   LIST AREA
========================================================= */

#idt-tour-inclusions .idt-inc-list-wrap{
    flex:1;

    padding:21px 25px 24px;
}

#idt-tour-inclusions .idt-inc-list{
    list-style:none;

    margin:0;
    padding:0;
}

#idt-tour-inclusions .idt-inc-list li{
    display:flex;

    align-items:flex-start;

    gap:12px;

    padding:12px 0;

    border-bottom:
        1px solid
        rgba(12,45,98,.065);

    color:var(--text);

    font-size:15.5px;
    line-height:1.58;

    font-weight:500;
}

#idt-tour-inclusions .idt-inc-list li:first-child{
    padding-top:0;
}

#idt-tour-inclusions .idt-inc-list li:last-child{
    padding-bottom:0;
    border-bottom:0;
}


/* LIST ICON */

#idt-tour-inclusions .idt-inc-list-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:23px;
    height:23px;

    flex:0 0 23px;

    margin-top:1px;

    border-radius:50%;

    background:#EDF5FC;

    color:var(--blue);
}

#idt-tour-inclusions .idt-excluded .idt-inc-list-icon{
    background:#FFF1E8;
    color:var(--orange);
}

#idt-tour-inclusions .idt-inc-list-icon svg{
    width:13px;
    height:13px;

    fill:none;
    stroke:currentColor;
    stroke-width:2.4;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   BOTTOM INFORMATION
========================================================= */

#idt-tour-inclusions .idt-inc-bottom{
    display:grid;

    grid-template-columns:
        minmax(0,1fr) auto;

    align-items:center;

    gap:22px;

    margin-top:24px;

    padding:19px 21px;

    border:
        1px solid
        rgba(12,45,98,.10);

    border-radius:8px;

    background:#FFFFFF;

    box-shadow:
        0 8px 24px
        rgba(12,45,98,.045);
}


/* LEFT */

#idt-tour-inclusions .idt-inc-bottom-left{
    display:flex;
    align-items:flex-start;

    gap:13px;
}

#idt-tour-inclusions .idt-inc-bottom-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:42px;
    height:42px;

    flex:0 0 42px;

    border-radius:8px;

    background:#EEF5FB;

    color:var(--blue);
}

#idt-tour-inclusions .idt-inc-bottom-icon svg{
    width:21px;
    height:21px;

    fill:none;
    stroke:currentColor;
    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-tour-inclusions .idt-inc-bottom-copy strong{
    display:block;

    margin-bottom:3px;

    color:var(--navy);

    font-size:15px;
    line-height:1.35;

    font-weight:800;
}

#idt-tour-inclusions .idt-inc-bottom-copy p{
    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.6;

    font-weight:400;
}


/* CTA */

#idt-tour-inclusions .idt-inc-btn{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    min-height:44px;

    padding:11px 17px;

    border:1px solid var(--navy);
    border-radius:5px;

    background:var(--navy);

    color:#FFFFFF !important;

    text-decoration:none !important;

    font-family:"Manrope",Arial,sans-serif;

    font-size:13px;
    line-height:1;

    font-weight:700;

    white-space:nowrap;

    box-shadow:
        0 9px 20px
        rgba(12,45,98,.14);

    transition:
        transform .3s ease,
        background .3s ease,
        box-shadow .3s ease;
}

#idt-tour-inclusions .idt-inc-btn:hover{
    transform:translateY(-2px);

    background:var(--blue);

    box-shadow:
        0 13px 25px
        rgba(12,45,98,.20);
}

#idt-tour-inclusions .idt-inc-btn svg{
    width:16px;
    height:16px;

    fill:none;
    stroke:currentColor;
    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-tour-inclusions{
        padding:60px 20px 62px;
    }

    #idt-tour-inclusions .idt-inc-wrap{
        max-width:900px;
    }

    #idt-tour-inclusions .idt-inc-grid{
        gap:17px;
    }

    #idt-tour-inclusions .idt-inc-card-head{
        padding:22px 20px 19px;
    }

    #idt-tour-inclusions .idt-inc-list-wrap{
        padding:20px;
    }

    #idt-tour-inclusions .idt-inc-list li{
        font-size:15px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-tour-inclusions{
        padding:50px 15px 52px;
    }

    #idt-tour-inclusions .idt-inc-heading{
        margin-bottom:31px;
    }

    #idt-tour-inclusions .idt-inc-intro{
        font-size:15px;
        line-height:1.7;
    }


    /* SUMMARY */

    #idt-tour-inclusions .idt-inc-summary{
        grid-template-columns:1fr;
        max-width:570px;
    }

    #idt-tour-inclusions .idt-inc-summary-item{
        justify-content:flex-start;

        min-height:auto;

        padding:13px 16px;
    }

    #idt-tour-inclusions .idt-inc-summary-item + .idt-inc-summary-item{
        border-left:0;
        border-top:1px solid rgba(12,45,98,.08);
    }


    /* CARDS */

    #idt-tour-inclusions .idt-inc-grid{
        grid-template-columns:1fr;
    }

    #idt-tour-inclusions .idt-inc-card{
        width:100%;
        max-width:570px;

        margin:0 auto;
    }

    #idt-tour-inclusions .idt-inc-card-title{
        font-size:20px;
    }

    #idt-tour-inclusions .idt-inc-list li{
        font-size:15px;
    }


    /* BOTTOM */

    #idt-tour-inclusions .idt-inc-bottom{
        max-width:570px;

        margin-left:auto;
        margin-right:auto;

        grid-template-columns:1fr;
    }

    #idt-tour-inclusions .idt-inc-btn{
        width:100%;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-tour-inclusions{
        padding:44px 13px 47px;
    }

    #idt-tour-inclusions .idt-inc-card-head{
        padding:20px 17px 18px;
        gap:12px;
    }

    #idt-tour-inclusions .idt-inc-icon{
        width:45px;
        height:45px;

        flex-basis:45px;
    }

    #idt-tour-inclusions .idt-inc-icon svg{
        width:22px;
        height:22px;
    }

    #idt-tour-inclusions .idt-inc-card-title{
        font-size:19px;
    }

    #idt-tour-inclusions .idt-inc-list-wrap{
        padding:18px 17px 20px;
    }

    #idt-tour-inclusions .idt-inc-list li{
        gap:10px;

        padding:11px 0;

        font-size:14.5px;
        line-height:1.58;
    }

    #idt-tour-inclusions .idt-inc-summary-item{
        font-size:13px;
    }

    #idt-tour-inclusions .idt-inc-bottom{
        padding:17px;
    }

    #idt-tour-inclusions .idt-inc-bottom-copy p{
        font-size:14px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-tour-inclusions{
        padding:41px 10px 44px;
    }

    #idt-tour-inclusions .idt-inc-card-head{
        align-items:flex-start;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-tour-inclusions *,
    #idt-tour-inclusions *::before,
    #idt-tour-inclusions *::after{
        transition:none !important;
        animation:none !important;
    }

}

</style>


<section id="idt-tour-inclusions">

    <div class="idt-inc-wrap">


        <!-- =================================================
             HEADING
        ================================================== -->

        <div class="idt-inc-heading">

            <p class="idt-inc-script">
                Everything You Need
            </p>

            <h2 class="idt-inc-h2">
                What’s Included in Your Tour
            </h2>

            <div
                class="idt-inc-divider"
                aria-hidden="true">
            </div>

            <p class="idt-inc-intro">
                We keep your Taj Mahal journey simple and transparent. Here’s what is generally included in your tour and what may need to be arranged separately depending on the package you choose.
            </p>

        </div>


        <!-- =================================================
             QUICK SUMMARY
        ================================================== -->

        <div class="idt-inc-summary">

            <div class="idt-inc-summary-item">

                <svg viewBox="0 0 24 24">
                    <path d="M3 17h18"></path>
                    <path d="M5 17V9h14v8"></path>
                    <path d="M8 9V6h8v3"></path>
                </svg>

                Private Sightseeing

            </div>


            <div class="idt-inc-summary-item">

                <svg viewBox="0 0 24 24">
                    <path d="M4 17h16"></path>
                    <path d="M6 17V8h12v9"></path>
                    <path d="M9 8V5h6v3"></path>
                </svg>

                Flexible Itinerary

            </div>


            <div class="idt-inc-summary-item">

                <svg viewBox="0 0 24 24">
                    <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                    <circle cx="12" cy="10" r="2.5"></circle>
                </svg>

                Local Agra Assistance

            </div>

        </div>


        <!-- =================================================
             CARDS
        ================================================== -->

        <div class="idt-inc-grid">


            <!-- =================================================
                 INCLUDED
            ================================================== -->

            <article class="idt-inc-card">

                <div class="idt-inc-card-head">

                    <div class="idt-inc-icon">

                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="m8 12 2.6 2.6L16.5 9"></path>
                        </svg>

                    </div>


                    <div class="idt-inc-head-copy">

                        <span class="idt-inc-label">
                            Included
                        </span>

                        <h3 class="idt-inc-card-title">
                            Your Tour Includes
                        </h3>

                    </div>

                </div>


                <div class="idt-inc-list-wrap">

                    <ul class="idt-inc-list">


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m6 12 4 4 8-8"></path>
                                </svg>
                            </span>

                            <span>
                                Private air-conditioned transportation
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m6 12 4 4 8-8"></path>
                                </svg>
                            </span>

                            <span>
                                Hotel or airport pickup where applicable
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m6 12 4 4 8-8"></path>
                                </svg>
                            </span>

                            <span>
                                Experienced local tour guide in Agra
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m6 12 4 4 8-8"></path>
                                </svg>
                            </span>

                            <span>
                                Sightseeing according to your selected itinerary
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m6 12 4 4 8-8"></path>
                                </svg>
                            </span>

                            <span>
                                Travel assistance throughout your planned journey
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m6 12 4 4 8-8"></path>
                                </svg>
                            </span>

                            <span>
                                Flexible stops where your schedule permits
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m6 12 4 4 8-8"></path>
                                </svg>
                            </span>

                            <span>
                                Private and personalised travel experience
                            </span>

                        </li>


                    </ul>

                </div>

            </article>


            <!-- =================================================
                 NOT INCLUDED
            ================================================== -->

            <article class="idt-inc-card idt-excluded">

                <div class="idt-inc-card-head">

                    <div class="idt-inc-icon">

                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="m9 9 6 6"></path>
                            <path d="m15 9-6 6"></path>
                        </svg>

                    </div>


                    <div class="idt-inc-head-copy">

                        <span class="idt-inc-label">
                            Not Included
                        </span>

                        <h3 class="idt-inc-card-title">
                            Usually Not Included
                        </h3>

                    </div>

                </div>


                <div class="idt-inc-list-wrap">

                    <ul class="idt-inc-list">


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m8 8 8 8"></path>
                                    <path d="m16 8-8 8"></path>
                                </svg>
                            </span>

                            <span>
                                Monument entry tickets unless specifically selected
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m8 8 8 8"></path>
                                    <path d="m16 8-8 8"></path>
                                </svg>
                            </span>

                            <span>
                                Personal shopping and private expenses
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m8 8 8 8"></path>
                                    <path d="m16 8-8 8"></path>
                                </svg>
                            </span>

                            <span>
                                Meals unless mentioned in your selected itinerary
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m8 8 8 8"></path>
                                    <path d="m16 8-8 8"></path>
                                </svg>
                            </span>

                            <span>
                                Accommodation unless your package includes an overnight stay
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m8 8 8 8"></path>
                                    <path d="m16 8-8 8"></path>
                                </svg>
                            </span>

                            <span>
                                Tips and personal gratuities
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m8 8 8 8"></path>
                                    <path d="m16 8-8 8"></path>
                                </svg>
                            </span>

                            <span>
                                Activities or services outside the confirmed itinerary
                            </span>

                        </li>


                        <li>

                            <span class="idt-inc-list-icon">
                                <svg viewBox="0 0 24 24">
                                    <path d="m8 8 8 8"></path>
                                    <path d="m16 8-8 8"></path>
                                </svg>
                            </span>

                            <span>
                                Any personal expenses not specifically mentioned in the package
                            </span>

                        </li>


                    </ul>

                </div>

            </article>


        </div>


        <!-- =================================================
             BOTTOM CUSTOMISATION BAR
        ================================================== -->

        <div class="idt-inc-bottom">

            <div class="idt-inc-bottom-left">

                <div class="idt-inc-bottom-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 21v-7"></path>
                        <path d="M4 10V3"></path>
                        <path d="M12 21v-9"></path>
                        <path d="M12 8V3"></path>
                        <path d="M20 21v-5"></path>
                        <path d="M20 12V3"></path>
                        <path d="M1 14h6"></path>
                        <path d="M9 8h6"></path>
                        <path d="M17 16h6"></path>
                    </svg>

                </div>


                <div class="idt-inc-bottom-copy">

                    <strong>
                        Need a customised tour?
                    </strong>

                    <p>
                        Inclusions can be adjusted according to your pickup location, selected package and personal travel requirements.
                    </p>

                </div>

            </div>


            <a
                href="https://wa.me/918126052755"
                target="_blank"
                rel="noopener noreferrer"
                class="idt-inc-btn">

                Customise My Tour

                <svg viewBox="0 0 24 24">
                    <path d="M7 17 17 7"></path>
                    <path d="M7 7h10v10"></path>
                </svg>

            </a>

        </div>


    </div>

</section>