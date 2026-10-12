<!-- =========================================================
 INDIA DAY TRIP
 INDIA TOUR PACKAGES
 SECTION 07 — WHY TRAVEL WITH INDIA DAY TRIP
 CLEAN VERSION WITHOUT PHONE/BOTTOM CTA
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>
#idt-india-why,
#idt-india-why *{
    box-sizing:border-box;
}

#idt-india-why{
    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --white:#FFFFFF;

    position:relative;
    overflow:hidden;
    width:100%;
    padding:78px 24px;

    background:
        linear-gradient(
            120deg,
            #061A35 0%,
            #08264B 58%,
            #0C315C 100%
        );

    font-family:"Manrope",sans-serif;
}

#idt-india-why::after{
    content:"";
    position:absolute;
    width:430px;
    height:430px;
    right:-230px;
    top:-210px;
    border:1px solid rgba(255,255,255,.055);
    border-radius:50%;
}

#idt-india-why .idt-iw-wrap{
    position:relative;
    z-index:2;
    width:100%;
    max-width:1180px;
    margin:0 auto;
}

/* =========================
   MAIN LAYOUT
========================= */

#idt-india-why .idt-iw-layout{
    display:grid;
    grid-template-columns:400px minmax(0,1fr);
    gap:70px;
    align-items:start;
}

/* =========================
   LEFT CONTENT
========================= */

#idt-india-why .idt-iw-script{
    margin:0 0 8px;
    color:var(--sky);
    font-family:"Montez",cursive;
    font-size:31px;
    line-height:1;
    font-weight:400;
}

#idt-india-why .idt-iw-title{
    margin:0;
    color:#FFFFFF;
    font-family:"Playfair Display",serif;
    font-size:38px;
    line-height:1.2;
    font-weight:700;
    letter-spacing:-.5px;
}

#idt-india-why .idt-iw-line{
    display:flex;
    align-items:center;
    gap:7px;
    margin:17px 0 20px;
}

#idt-india-why .idt-iw-line::before{
    content:"";
    width:42px;
    height:2px;
    background:var(--sky);
}

#idt-india-why .idt-iw-line span{
    width:7px;
    height:7px;
    background:var(--orange);
    transform:rotate(45deg);
}

#idt-india-why .idt-iw-copy{
    margin:0;
    color:rgba(255,255,255,.69);
    font-size:14.5px;
    line-height:1.8;
}

#idt-india-why .idt-iw-copy + .idt-iw-copy{
    margin-top:13px;
}

/* =========================
   RIGHT SERVICES
========================= */

#idt-india-why .idt-iw-services{
    display:grid;
    grid-template-columns:repeat(2,minmax(0,1fr));
    border-top:1px solid rgba(255,255,255,.13);
    border-left:1px solid rgba(255,255,255,.13);
}

#idt-india-why .idt-iw-service{
    min-height:220px;
    padding:27px 27px 25px;
    border-right:1px solid rgba(255,255,255,.13);
    border-bottom:1px solid rgba(255,255,255,.13);
    transition:background .25s ease;
}

#idt-india-why .idt-iw-service:hover{
    background:rgba(255,255,255,.035);
}

/* =========================
   ICON
========================= */

#idt-india-why .idt-iw-icon{
    display:flex;
    align-items:center;
    justify-content:center;

    width:45px;
    height:45px;
    margin-bottom:19px;

    border-radius:7px;

    background:#FFFFFF;
    color:var(--navy);
}

#idt-india-why .idt-iw-icon svg{
    width:23px;
    height:23px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}

/* =========================
   SERVICE TEXT
========================= */

#idt-india-why .idt-iw-service h3{
    margin:0 0 8px;

    color:#FFFFFF;

    font-family:"Manrope",sans-serif;
    font-size:17px;
    line-height:1.4;
    font-weight:800;
}

#idt-india-why .idt-iw-service p{
    margin:0;

    color:rgba(255,255,255,.62);

    font-size:13px;
    line-height:1.7;
}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:1050px){

    #idt-india-why{
        padding:68px 28px;
    }

    #idt-india-why .idt-iw-layout{
        grid-template-columns:350px minmax(0,1fr);
        gap:45px;
    }

    #idt-india-why .idt-iw-service{
        padding:24px 22px;
    }
}

@media(max-width:991px){

    #idt-india-why{
        padding:60px 20px;
    }

    #idt-india-why .idt-iw-layout{
        grid-template-columns:1fr;
        gap:40px;
        max-width:760px;
        margin:auto;
    }

    #idt-india-why .idt-iw-left{
        max-width:650px;
    }
}

@media(max-width:767px){

    #idt-india-why{
        padding:50px 15px;
    }

    #idt-india-why .idt-iw-script{
        font-size:28px;
    }

    #idt-india-why .idt-iw-title{
        font-size:30px;
    }

    #idt-india-why .idt-iw-services{
        grid-template-columns:1fr;
    }

    #idt-india-why .idt-iw-service{
        min-height:auto;
        padding:23px 20px;
    }
}

@media(max-width:430px){

    #idt-india-why{
        padding:44px 13px;
    }

    #idt-india-why .idt-iw-script{
        font-size:26px;
    }

    #idt-india-why .idt-iw-title{
        font-size:27px;
    }

    #idt-india-why .idt-iw-copy{
        font-size:13.8px;
    }

    #idt-india-why .idt-iw-service{
        padding:21px 17px;
    }

    #idt-india-why .idt-iw-service h3{
        font-size:16.5px;
    }

    #idt-india-why .idt-iw-service p{
        font-size:12.8px;
    }
}

@media(max-width:360px){

    #idt-india-why{
        padding:40px 10px;
    }

    #idt-india-why .idt-iw-title{
        font-size:25px;
    }
}
</style>


<section id="idt-india-why">

    <div class="idt-iw-wrap">

        <div class="idt-iw-layout">

            <!-- LEFT CONTENT -->
            <div class="idt-iw-left">

                <p class="idt-iw-script">
                    Travel With Confidence
                </p>

                <h2 class="idt-iw-title">
                    Why Plan Your India Journey With India Day Trip?
                </h2>

                <div class="idt-iw-line">
                    <span></span>
                </div>

                <p class="idt-iw-copy">
                    Travelling across India becomes much easier when the route, travel time and sightseeing plan are organised properly from the beginning.
                </p>

                <p class="idt-iw-copy">
                    We focus on private journeys that are practical, flexible and shaped around the destinations you actually want to experience.
                </p>

            </div>


            <!-- RIGHT SERVICES -->
            <div class="idt-iw-services">


                <!-- PRIVATE TRAVEL -->
                <div class="idt-iw-service">

                    <div class="idt-iw-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M5 17h14"></path>
                            <path d="M6 17v2"></path>
                            <path d="M18 17v2"></path>
                            <path d="M4 13l2-6h12l2 6"></path>
                            <path d="M3 13h18v4H3z"></path>
                            <circle cx="7" cy="15" r="1"></circle>
                            <circle cx="17" cy="15" r="1"></circle>
                        </svg>

                    </div>

                    <h3>
                        Private Travel
                    </h3>

                    <p>
                        Explore with a private travel plan rather than following the fixed timings and route of a large shared group.
                    </p>

                </div>


                <!-- FLEXIBLE ITINERARIES -->
                <div class="idt-iw-service">

                    <div class="idt-iw-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s6-5.1 6-11a6 6 0 1 0-12 0c0 5.9 6 11 6 11z"></path>
                            <circle cx="12" cy="10" r="2.2"></circle>
                        </svg>

                    </div>

                    <h3>
                        Flexible Itineraries
                    </h3>

                    <p>
                        Select the cities, experiences and number of days that suit your journey instead of being restricted to one standard package.
                    </p>

                </div>


                <!-- ROUTE PLANNING -->
                <div class="idt-iw-service">

                    <div class="idt-iw-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M9 18 3 21V6l6-3 6 3 6-3v15l-6 3-6-3z"></path>
                            <path d="M9 3v15"></path>
                            <path d="M15 6v15"></path>
                        </svg>

                    </div>

                    <h3>
                        Practical Route Planning
                    </h3>

                    <p>
                        Routes are organised with real travel distances and sightseeing time in mind so the journey remains comfortable and realistic.
                    </p>

                </div>


                <!-- TRAVEL SUPPORT -->
                <div class="idt-iw-service">

                    <div class="idt-iw-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 13v-2a8 8 0 0 1 16 0v2"></path>
                            <path d="M4 13h3v6H5a1 1 0 0 1-1-1v-5z"></path>
                            <path d="M20 13h-3v6h2a1 1 0 0 0 1-1v-5z"></path>
                            <path d="M17 19c0 1.1-.9 2-2 2h-3"></path>
                        </svg>

                    </div>

                    <h3>
                        Travel Assistance
                    </h3>

                    <p>
                        Get clear communication while planning your itinerary and assistance with the travel arrangements included in your journey.
                    </p>

                </div>


            </div>

        </div>

    </div>

</section>