<!-- =========================================================
     INDIA DAY TRIP
     GOLDEN TRIANGLE TOUR PAGE
     SECTION 06 — EVERYTHING YOU NEED TO KNOW
     STICKY LEFT CONTENT
     SAME DESIGN AS TAJ MAHAL PAGE
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-golden-info,
#idt-golden-info *{
    box-sizing:border-box;
}

#idt-golden-info{
    --navy:#0C2D62;
    --blue:#123B72;
    --mid:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --text:#5F6D7E;
    --line:#E7ECF1;
    --warm:#F7F3E9;
    --white:#FFFFFF;

    position:relative;

    width:100%;
    max-width:100%;

    overflow:visible !important;

    padding:54px 24px 56px;

    background:
        linear-gradient(
            90deg,
            rgba(247,243,233,.72) 0%,
            rgba(247,243,233,.72) 38%,
            #FFFFFF 38%,
            #FFFFFF 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   MAIN CONTAINER
========================================================= */

#idt-golden-info .idt-info-wrap{
    position:relative;

    display:grid;

    grid-template-columns:
        380px minmax(0,1fr);

    align-items:start;

    gap:58px;

    width:100%;
    max-width:1160px;

    margin:0 auto;

    overflow:visible !important;
}


/* =========================================================
   LEFT COLUMN
========================================================= */

#idt-golden-info .idt-info-left{
    position:relative;

    align-self:stretch;

    min-width:0;

    overflow:visible !important;
}


/* =========================================================
   STICKY CONTENT
========================================================= */

#idt-golden-info .idt-info-sticky{
    position:-webkit-sticky;
    position:sticky;

    top:90px;

    width:100%;
    height:max-content;

    align-self:start;

    z-index:3;
}


/* =========================================================
   LEFT HEADING
========================================================= */

#idt-golden-info .idt-info-script{
    margin:0 0 7px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-golden-info .idt-info-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:34px;
    line-height:1.22;

    font-weight:700;

    letter-spacing:-.5px;
}


/* ACCENT */

#idt-golden-info .idt-info-line{
    display:flex;

    align-items:center;

    gap:7px;

    margin:15px 0 0;
}

#idt-golden-info .idt-info-line::before{
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

#idt-golden-info .idt-info-line::after{
    content:"";

    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}


/* INTRO */

#idt-golden-info .idt-info-intro{
    margin:16px 0 0;

    color:var(--text);

    font-size:16px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   IMPORTANT NOTE
========================================================= */

#idt-golden-info .idt-info-note{
    position:relative;

    margin-top:27px;

    padding:20px 20px 20px 22px;

    border-left:3px solid var(--orange);

    background:#FFFFFF;

    box-shadow:
        0 10px 26px
        rgba(12,45,98,.055);
}

#idt-golden-info .idt-info-note-top{
    display:flex;

    align-items:center;

    gap:10px;

    margin-bottom:7px;
}

#idt-golden-info .idt-info-note-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:35px;
    height:35px;

    flex:0 0 35px;

    color:var(--blue);
}

#idt-golden-info .idt-info-note-icon svg{
    width:22px;
    height:22px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-golden-info .idt-info-note strong{
    color:var(--navy);

    font-size:15px;
    line-height:1.4;

    font-weight:800;
}

#idt-golden-info .idt-info-note p{
    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.68;

    font-weight:400;
}


/* =========================================================
   RIGHT COLUMN
========================================================= */

#idt-golden-info .idt-info-right{
    position:relative;

    width:100%;
    min-width:0;
}


/* =========================================================
   INFORMATION ROW
========================================================= */

#idt-golden-info .idt-info-item{
    display:grid;

    grid-template-columns:
        54px minmax(0,1fr);

    align-items:start;

    gap:18px;

    margin:0 0 25px;

    padding:0 0 25px;

    border-bottom:
        1px solid
        var(--line);
}

#idt-golden-info .idt-info-item:last-child{
    margin-bottom:0;

    padding-bottom:0;

    border-bottom:0;
}


/* =========================================================
   ICON
========================================================= */

#idt-golden-info .idt-info-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:50px;
    height:50px;

    flex:0 0 50px;

    border-radius:50%;

    background:#EEF5FB;

    color:var(--blue);

    transition:
        transform .3s ease,
        background .3s ease;
}

#idt-golden-info .idt-info-item:nth-child(even) .idt-info-icon{
    background:#FFF2EA;

    color:var(--orange);
}

#idt-golden-info .idt-info-item:hover .idt-info-icon{
    transform:translateY(-2px);
}

#idt-golden-info .idt-info-icon svg{
    width:23px;
    height:23px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RIGHT CONTENT
========================================================= */

#idt-golden-info .idt-info-copy{
    min-width:0;
}

#idt-golden-info .idt-info-copy h3{
    margin:0 0 6px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:20px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:-.25px;
}

#idt-golden-info .idt-info-copy p{
    margin:0;

    color:var(--text);

    font-size:15.5px;
    line-height:1.72;

    font-weight:400;
}


/* SMALL DETAIL */

#idt-golden-info .idt-info-small{
    display:inline-flex;

    align-items:center;

    gap:8px;

    margin-top:10px;

    color:var(--mid);

    font-size:13px;
    line-height:1.4;

    font-weight:700;
}

#idt-golden-info .idt-info-item:nth-child(even) .idt-info-small{
    color:var(--orange);
}

#idt-golden-info .idt-info-small::before{
    content:"";

    width:18px;
    height:1px;

    background:currentColor;
}


/* =========================================================
   1200PX
========================================================= */

@media(max-width:1200px){

    #idt-golden-info{
        padding:50px 28px 52px;
    }

    #idt-golden-info .idt-info-wrap{
        max-width:1050px;

        grid-template-columns:
            340px minmax(0,1fr);

        gap:45px;
    }

    #idt-golden-info .idt-info-sticky{
        top:80px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px) and (min-width:768px){

    #idt-golden-info{
        padding:46px 20px 48px;

        background:
            linear-gradient(
                90deg,
                rgba(247,243,233,.70) 0%,
                rgba(247,243,233,.70) 36%,
                #FFFFFF 36%,
                #FFFFFF 100%
            );
    }

    #idt-golden-info .idt-info-wrap{
        grid-template-columns:
            290px minmax(0,1fr);

        gap:34px;
    }

    #idt-golden-info .idt-info-sticky{
        top:70px;
    }

    #idt-golden-info .idt-info-intro{
        font-size:15px;
    }

    #idt-golden-info .idt-info-note{
        padding:17px 16px 17px 18px;
    }

    #idt-golden-info .idt-info-copy h3{
        font-size:19px;
    }

    #idt-golden-info .idt-info-copy p{
        font-size:15px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-golden-info{
        overflow:hidden !important;

        padding:42px 15px 44px;

        background:#FFFFFF;
    }

    #idt-golden-info .idt-info-wrap{
        display:block;

        overflow:visible !important;
    }

    #idt-golden-info .idt-info-left{
        display:block;

        margin-bottom:31px;
    }

    #idt-golden-info .idt-info-sticky{
        position:relative;

        top:auto;

        height:auto;
    }

    #idt-golden-info .idt-info-script{
        font-size:28px;
    }

    #idt-golden-info .idt-info-title{
        font-size:29px;
        line-height:1.22;
    }

    #idt-golden-info .idt-info-intro{
        font-size:15px;
        line-height:1.7;
    }

    #idt-golden-info .idt-info-note{
        max-width:570px;
    }

    #idt-golden-info .idt-info-item{
        grid-template-columns:
            47px minmax(0,1fr);

        gap:14px;

        margin-bottom:22px;

        padding-bottom:22px;
    }

    #idt-golden-info .idt-info-icon{
        width:44px;
        height:44px;

        flex-basis:44px;
    }

    #idt-golden-info .idt-info-icon svg{
        width:21px;
        height:21px;
    }

    #idt-golden-info .idt-info-copy h3{
        font-size:19px;
    }

    #idt-golden-info .idt-info-copy p{
        font-size:15px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-golden-info{
        padding:38px 13px 40px;
    }

    #idt-golden-info .idt-info-left{
        margin-bottom:28px;
    }

    #idt-golden-info .idt-info-script{
        font-size:26px;
    }

    #idt-golden-info .idt-info-title{
        font-size:27px;
    }

    #idt-golden-info .idt-info-note{
        padding:17px 16px 17px 18px;
    }

    #idt-golden-info .idt-info-item{
        grid-template-columns:1fr;

        gap:10px;
    }

    #idt-golden-info .idt-info-icon{
        width:42px;
        height:42px;
    }

    #idt-golden-info .idt-info-copy h3{
        margin-bottom:5px;

        font-size:18px;
    }

    #idt-golden-info .idt-info-copy p{
        font-size:14.5px;
        line-height:1.68;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-golden-info{
        padding:36px 10px 38px;
    }

    #idt-golden-info .idt-info-script{
        font-size:25px;
    }

    #idt-golden-info .idt-info-title{
        font-size:25px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-golden-info *,
    #idt-golden-info *::before,
    #idt-golden-info *::after{
        transition:none !important;
        animation:none !important;
    }

}

</style>


<section id="idt-golden-info">

    <div class="idt-info-wrap">


        <!-- =================================================
             LEFT COLUMN
        ================================================== -->

        <div class="idt-info-left">


            <div class="idt-info-sticky">

                <p class="idt-info-script">
                    Plan Your Journey Better
                </p>

                <h2 class="idt-info-title">
                    Everything You Need to Know
                </h2>

                <div
                    class="idt-info-line"
                    aria-hidden="true">
                </div>

                <p class="idt-info-intro">
                    A little planning can make your Golden Triangle journey through Delhi, Agra and Jaipur much more comfortable. These practical points will help you choose the right duration, travel pace and itinerary.
                </p>


                <!-- IMPORTANT NOTE -->

                <div class="idt-info-note">

                    <div class="idt-info-note-top">

                        <span class="idt-info-note-icon">

                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M12 11v5"></path>
                                <path d="M12 8h.01"></path>
                            </svg>

                        </span>

                        <strong>
                            Important Travel Note
                        </strong>

                    </div>

                    <p>
                        Monument opening days and visiting hours can differ across Delhi, Agra and Jaipur, so your itinerary should be planned around the attractions you want to visit.
                    </p>

                </div>

            </div>

        </div>


        <!-- =================================================
             RIGHT COLUMN
        ================================================== -->

        <div class="idt-info-right">


            <!-- ITEM 01 -->

            <div class="idt-info-item">

                <div class="idt-info-icon">

                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M12 2v3"></path>
                        <path d="M12 19v3"></path>
                        <path d="M2 12h3"></path>
                        <path d="M19 12h3"></path>
                        <path d="M4.9 4.9 7 7"></path>
                        <path d="M17 17l2.1 2.1"></path>
                    </svg>

                </div>


                <div class="idt-info-copy">

                    <h3>
                        Best Time for the Golden Triangle
                    </h3>

                    <p>
                        Cooler months are generally more comfortable for extended sightseeing across Delhi, Agra and Jaipur. Starting sightseeing earlier in the day can also help you make better use of your travel schedule.
                    </p>

                    <span class="idt-info-small">
                        Plan sightseeing around the weather
                    </span>

                </div>

            </div>


            <!-- ITEM 02 -->

            <div class="idt-info-item">

                <div class="idt-info-icon">

                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M12 7v5l3 2"></path>
                    </svg>

                </div>


                <div class="idt-info-copy">

                    <h3>
                        Choose the Right Tour Duration
                    </h3>

                    <p>
                        A shorter itinerary is suitable if your time in India is limited, while four or five days gives you a more comfortable pace with additional time for monuments, local areas and flexible stops.
                    </p>

                    <span class="idt-info-small">
                        Choose between compact and relaxed itineraries
                    </span>

                </div>

            </div>


            <!-- ITEM 03 -->

            <div class="idt-info-item">

                <div class="idt-info-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M5 17h14"></path>
                        <path d="M4 12l2-5h12l2 5"></path>
                        <path d="M3 12h18v5H3z"></path>
                        <circle cx="7" cy="17" r="1.5"></circle>
                        <circle cx="17" cy="17" r="1.5"></circle>
                    </svg>

                </div>


                <div class="idt-info-copy">

                    <h3>
                        Travel Between the Three Cities
                    </h3>

                    <p>
                        Private road travel allows you to move between Delhi, Agra and Jaipur with greater flexibility for pickup locations, sightseeing stops and route adjustments according to your confirmed itinerary.
                    </p>

                    <span class="idt-info-small">
                        Comfortable private intercity travel
                    </span>

                </div>

            </div>


            <!-- ITEM 04 -->

            <div class="idt-info-item">

                <div class="idt-info-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                        <circle cx="12" cy="10" r="2.5"></circle>
                    </svg>

                </div>


                <div class="idt-info-copy">

                    <h3>
                        Main Destinations on the Route
                    </h3>

                    <p>
                        The classic route connects Delhi, Agra and Jaipur. Depending on your available time, the journey can also be adjusted with additional heritage stops such as Fatehpur Sikri or other destinations.
                    </p>

                    <span class="idt-info-small">
                        Delhi → Agra → Jaipur
                    </span>

                </div>

            </div>


            <!-- ITEM 05 -->

            <div class="idt-info-item">

                <div class="idt-info-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M7 7V5a5 5 0 0 1 10 0v2"></path>
                        <path d="M5 7h14l-1 14H6L5 7Z"></path>
                        <path d="M9 11h6"></path>
                    </svg>

                </div>


                <div class="idt-info-copy">

                    <h3>
                        What to Carry
                    </h3>

                    <p>
                        Comfortable footwear, valid identification and weather-appropriate clothing are useful for long sightseeing days. Travelling with a lighter day bag also makes monument visits easier.
                    </p>

                    <span class="idt-info-small">
                        Keep sightseeing essentials simple
                    </span>

                </div>

            </div>


            <!-- ITEM 06 -->

            <div class="idt-info-item">

                <div class="idt-info-icon">

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


                <div class="idt-info-copy">

                    <h3>
                        Choose a Flexible Itinerary
                    </h3>

                    <p>
                        Your pickup point, available days, preferred monuments and travel pace can be considered when planning the Golden Triangle format that best suits your journey.
                    </p>

                    <span class="idt-info-small">
                        Plan the route around your schedule
                    </span>

                </div>

            </div>


        </div>

    </div>

</section>