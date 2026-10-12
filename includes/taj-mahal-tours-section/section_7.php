<!-- =========================================================
     INDIA DAY TRIP
     TAJ MAHAL TOUR PAGE
     SECTION 06 — EVERYTHING YOU NEED TO KNOW
     STICKY LEFT CONTENT — COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-taj-info,
#idt-taj-info *{
    box-sizing:border-box;
}

#idt-taj-info{
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

    /* IMPORTANT FOR STICKY */
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

#idt-taj-info .idt-info-wrap{
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

#idt-taj-info .idt-info-left{
    position:relative;

    align-self:stretch;

    min-width:0;

    overflow:visible !important;
}


/* =========================================================
   ACTUAL STICKY CONTENT

   Sticky remains active only while .idt-info-left / section
   is present. Once right content finishes, it naturally
   releases and the next section scrolls normally.
========================================================= */

#idt-taj-info .idt-info-sticky{
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

#idt-taj-info .idt-info-script{
    margin:0 0 7px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-taj-info .idt-info-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:34px;
    line-height:1.22;

    font-weight:700;

    letter-spacing:-.5px;
}


/* ACCENT */

#idt-taj-info .idt-info-line{
    display:flex;

    align-items:center;

    gap:7px;

    margin:15px 0 0;
}

#idt-taj-info .idt-info-line::before{
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

#idt-taj-info .idt-info-line::after{
    content:"";

    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}


/* INTRO */

#idt-taj-info .idt-info-intro{
    margin:16px 0 0;

    color:var(--text);

    font-size:16px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   IMPORTANT NOTE
========================================================= */

#idt-taj-info .idt-info-note{
    position:relative;

    margin-top:27px;

    padding:20px 20px 20px 22px;

    border-left:3px solid var(--orange);

    background:#FFFFFF;

    box-shadow:
        0 10px 26px
        rgba(12,45,98,.055);
}

#idt-taj-info .idt-info-note-top{
    display:flex;

    align-items:center;

    gap:10px;

    margin-bottom:7px;
}

#idt-taj-info .idt-info-note-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:35px;
    height:35px;

    flex:0 0 35px;

    color:var(--blue);
}

#idt-taj-info .idt-info-note-icon svg{
    width:22px;
    height:22px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-taj-info .idt-info-note strong{
    color:var(--navy);

    font-size:15px;
    line-height:1.4;

    font-weight:800;
}

#idt-taj-info .idt-info-note p{
    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.68;

    font-weight:400;
}


/* =========================================================
   RIGHT COLUMN
========================================================= */

#idt-taj-info .idt-info-right{
    position:relative;

    width:100%;
    min-width:0;
}


/* =========================================================
   INFORMATION ROW
========================================================= */

#idt-taj-info .idt-info-item{
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

#idt-taj-info .idt-info-item:last-child{
    margin-bottom:0;

    padding-bottom:0;

    border-bottom:0;
}


/* =========================================================
   ICON
========================================================= */

#idt-taj-info .idt-info-icon{
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

#idt-taj-info .idt-info-item:nth-child(even) .idt-info-icon{
    background:#FFF2EA;

    color:var(--orange);
}

#idt-taj-info .idt-info-item:hover .idt-info-icon{
    transform:translateY(-2px);
}

#idt-taj-info .idt-info-icon svg{
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

#idt-taj-info .idt-info-copy{
    min-width:0;
}

#idt-taj-info .idt-info-copy h3{
    margin:0 0 6px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:20px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:-.25px;
}

#idt-taj-info .idt-info-copy p{
    margin:0;

    color:var(--text);

    font-size:15.5px;
    line-height:1.72;

    font-weight:400;
}


/* SMALL DETAIL */

#idt-taj-info .idt-info-small{
    display:inline-flex;

    align-items:center;

    gap:8px;

    margin-top:10px;

    color:var(--mid);

    font-size:13px;
    line-height:1.4;

    font-weight:700;
}

#idt-taj-info .idt-info-item:nth-child(even) .idt-info-small{
    color:var(--orange);
}

#idt-taj-info .idt-info-small::before{
    content:"";

    width:18px;
    height:1px;

    background:currentColor;
}


/* =========================================================
   1200PX
========================================================= */

@media(max-width:1200px){

    #idt-taj-info{
        padding:50px 28px 52px;
    }

    #idt-taj-info .idt-info-wrap{
        max-width:1050px;

        grid-template-columns:
            340px minmax(0,1fr);

        gap:45px;
    }

    #idt-taj-info .idt-info-sticky{
        top:80px;
    }

}


/* =========================================================
   TABLET — STICKY STILL ACTIVE
========================================================= */

@media(max-width:991px) and (min-width:768px){

    #idt-taj-info{
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

    #idt-taj-info .idt-info-wrap{
        grid-template-columns:
            290px minmax(0,1fr);

        gap:34px;
    }

    #idt-taj-info .idt-info-sticky{
        top:70px;
    }

    #idt-taj-info .idt-info-intro{
        font-size:15px;
    }

    #idt-taj-info .idt-info-note{
        padding:17px 16px 17px 18px;
    }

    #idt-taj-info .idt-info-copy h3{
        font-size:19px;
    }

    #idt-taj-info .idt-info-copy p{
        font-size:15px;
    }

}


/* =========================================================
   MOBILE
   Sticky disabled because columns stack vertically.
========================================================= */

@media(max-width:767px){

    #idt-taj-info{
        overflow:hidden !important;

        padding:42px 15px 44px;

        background:#FFFFFF;
    }

    #idt-taj-info .idt-info-wrap{
        display:block;

        overflow:visible !important;
    }

    #idt-taj-info .idt-info-left{
        display:block;

        margin-bottom:31px;
    }

    #idt-taj-info .idt-info-sticky{
        position:relative;

        top:auto;

        height:auto;
    }

    #idt-taj-info .idt-info-intro{
        font-size:15px;
        line-height:1.7;
    }

    #idt-taj-info .idt-info-note{
        max-width:570px;
    }

    #idt-taj-info .idt-info-item{
        grid-template-columns:
            47px minmax(0,1fr);

        gap:14px;

        margin-bottom:22px;

        padding-bottom:22px;
    }

    #idt-taj-info .idt-info-icon{
        width:44px;
        height:44px;

        flex-basis:44px;
    }

    #idt-taj-info .idt-info-icon svg{
        width:21px;
        height:21px;
    }

    #idt-taj-info .idt-info-copy h3{
        font-size:19px;
    }

    #idt-taj-info .idt-info-copy p{
        font-size:15px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-taj-info{
        padding:38px 13px 40px;
    }

    #idt-taj-info .idt-info-left{
        margin-bottom:28px;
    }

    #idt-taj-info .idt-info-note{
        padding:17px 16px 17px 18px;
    }

    #idt-taj-info .idt-info-item{
        grid-template-columns:1fr;

        gap:10px;
    }

    #idt-taj-info .idt-info-icon{
        width:42px;
        height:42px;
    }

    #idt-taj-info .idt-info-copy h3{
        margin-bottom:5px;

        font-size:18px;
    }

    #idt-taj-info .idt-info-copy p{
        font-size:14.5px;
        line-height:1.68;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-taj-info{
        padding:36px 10px 38px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-taj-info *,
    #idt-taj-info *::before,
    #idt-taj-info *::after{
        transition:none !important;
        animation:none !important;
    }

}

</style>


<section id="idt-taj-info">

    <div class="idt-info-wrap">


        <!-- =================================================
             LEFT COLUMN
        ================================================== -->

        <div class="idt-info-left">

            <!-- ACTUAL STICKY WRAPPER -->

            <div class="idt-info-sticky">

                <p class="idt-info-script">
                    Plan Your Visit Better
                </p>

                <h2 class="idt-info-title">
                    Everything You Need to Know
                </h2>

                <div
                    class="idt-info-line"
                    aria-hidden="true">
                </div>

                <p class="idt-info-intro">
                    A little planning can make your Taj Mahal journey much more comfortable. These practical points will help you choose the right timing, travel style and itinerary for your visit to Agra.
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
                        The Taj Mahal is generally closed to regular visitors on Fridays, so keep this in mind while selecting your travel date.
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
                        Best Time to Visit
                    </h3>

                    <p>
                        Early morning is a popular choice for a calmer atmosphere and softer light. Cooler months are also more comfortable for spending longer hours sightseeing around Agra.
                    </p>

                    <span class="idt-info-small">
                        Early morning recommended
                    </span>

                </div>

            </div>


            <!-- ITEM 02 -->

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
                        Keep your essentials simple: comfortable footwear, valid identification and weather-appropriate items. A lighter day bag also makes monument sightseeing easier.
                    </p>

                    <span class="idt-info-small">
                        Travel light and comfortably
                    </span>

                </div>

            </div>


            <!-- ITEM 03 -->

            <div class="idt-info-item">

                <div class="idt-info-icon">

                    <svg viewBox="0 0 24 24">
                        <rect x="3" y="6" width="18" height="13" rx="2"></rect>
                        <circle cx="12" cy="12.5" r="3"></circle>
                        <path d="M8 6l1-2h6l1 2"></path>
                    </svg>

                </div>


                <div class="idt-info-copy">

                    <h3>
                        Photography & Local Guidance
                    </h3>

                    <p>
                        Your local guide can help with monument procedures, photography areas and a more efficient route through the main sightseeing points during your tour.
                    </p>

                    <span class="idt-info-small">
                        Useful help while sightseeing
                    </span>

                </div>

            </div>


            <!-- ITEM 04 -->

            <div class="idt-info-item">

                <div class="idt-info-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M3 17h18"></path>
                        <path d="M5 17V9h14v8"></path>
                        <path d="M7 9l2-3h6l2 3"></path>
                        <circle cx="8" cy="17" r="2"></circle>
                        <circle cx="16" cy="17" r="2"></circle>
                    </svg>

                </div>


                <div class="idt-info-copy">

                    <h3>
                        Travel Time from Delhi
                    </h3>

                    <p>
                        Journey time varies depending on your pickup location, traffic and chosen transport. Private car and express train options both work well for Delhi to Agra travel.
                    </p>

                    <span class="idt-info-small">
                        Car and train options available
                    </span>

                </div>

            </div>


            <!-- ITEM 05 -->

            <div class="idt-info-item">

                <div class="idt-info-icon">

                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M12 7v5l3 2"></path>
                    </svg>

                </div>


                <div class="idt-info-copy">

                    <h3>
                        How Long to Spend in Agra
                    </h3>

                    <p>
                        A same-day tour is suitable for the main highlights, while an overnight journey gives you a more relaxed schedule and time to explore additional heritage locations.
                    </p>

                    <span class="idt-info-small">
                        Same day or overnight
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
                        Your pickup point, preferred monuments and available travel time can be considered while choosing the tour format that best suits your journey.
                    </p>

                    <span class="idt-info-small">
                        Plan around your schedule
                    </span>

                </div>

            </div>


        </div>

    </div>

</section>