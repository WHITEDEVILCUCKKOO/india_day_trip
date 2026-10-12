<!-- =========================================================
 INDIA DAY TRIP
 INDIA TOUR PACKAGES
 SECTION 09 — ESSENTIAL INDIA TOUR PLANNING GUIDE
 LEFT SIDE STICKY UNTIL RIGHT CONTENT ENDS
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-planning-guide,
#idt-india-planning-guide *{
    box-sizing:border-box;
}

#idt-india-planning-guide{
    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --text:#596673;
    --dark:#27384A;
    --line:#E3E8EC;
    --white:#FFFFFF;
    --warm:#FCFAF6;

    position:relative;
    width:100%;
    overflow:visible !important;

    padding:82px 24px 86px;

    background:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   BACKGROUND DETAILS
========================================================= */

#idt-india-planning-guide::before{
    content:"";
    position:absolute;
    width:420px;
    height:420px;
    left:-220px;
    top:-170px;
    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(121,189,242,.10),
            rgba(121,189,242,0) 70%
        );

    pointer-events:none;
}

#idt-india-planning-guide::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    right:-180px;
    bottom:-150px;
    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,93,0,.045),
            rgba(255,93,0,0) 70%
        );

    pointer-events:none;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-india-planning-guide .idt-ipg-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1180px;

    margin:0 auto;

    overflow:visible !important;
}


/* =========================================================
   HEADER
========================================================= */

#idt-india-planning-guide .idt-ipg-head{
    max-width:860px;

    margin:0 auto 48px;

    text-align:center;
}

#idt-india-planning-guide .idt-ipg-script{
    margin:0 0 8px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;
}

#idt-india-planning-guide .idt-ipg-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:36px;
    line-height:1.22;

    font-weight:700;

    letter-spacing:-.55px;
}

#idt-india-planning-guide .idt-ipg-accent{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    margin:14px 0 16px;
}

#idt-india-planning-guide .idt-ipg-accent::before{
    content:"";
    width:40px;
    height:2px;
    background:var(--navy);
}

#idt-india-planning-guide .idt-ipg-accent span{
    width:7px;
    height:7px;
    background:var(--orange);
    transform:rotate(45deg);
}

#idt-india-planning-guide .idt-ipg-accent::after{
    content:"";
    width:25px;
    height:2px;
    background:var(--orange);
}

#idt-india-planning-guide .idt-ipg-lead{
    max-width:720px;

    margin:0 auto;

    color:var(--text);

    font-size:15px;
    line-height:1.78;
}


/* =========================================================
   MAIN LAYOUT
========================================================= */

#idt-india-planning-guide .idt-ipg-layout{
    display:grid;

    grid-template-columns:
        minmax(0,.82fr)
        minmax(0,1.18fr);

    gap:66px;

    align-items:start;

    overflow:visible !important;
}


/* =========================================================
   LEFT SIDE
========================================================= */

#idt-india-planning-guide .idt-ipg-left{
    position:relative;

    align-self:stretch;

    min-width:0;

    overflow:visible !important;
}


/* =========================================================
   IMPORTANT STICKY AREA
   This remains sticky only inside .idt-ipg-left height.
   When right content ends, sticky naturally releases.
========================================================= */

#idt-india-planning-guide .idt-ipg-sticky{
    position:-webkit-sticky;
    position:sticky;

    top:100px;

    width:100%;
    height:max-content;

    align-self:start;

    z-index:5;
}


/* =========================================================
   IMAGE
========================================================= */

#idt-india-planning-guide .idt-ipg-image{
    position:relative;

    width:100%;
    height:560px;

    overflow:hidden;

    border-radius:10px;

    background:#EEF3F7;

    box-shadow:
        0 24px 55px
        rgba(12,45,98,.12);
}

#idt-india-planning-guide .idt-ipg-image img{
    width:100%;
    height:100%;

    display:block;

    object-fit:cover;
    object-position:center;

    transition:transform .45s ease;
}

#idt-india-planning-guide .idt-ipg-image:hover img{
    transform:scale(1.025);
}

#idt-india-planning-guide .idt-ipg-image::after{
    content:"";

    position:absolute;
    inset:0;

    background:
        linear-gradient(
            to top,
            rgba(7,31,63,.62) 0%,
            rgba(7,31,63,.13) 46%,
            rgba(7,31,63,0) 72%
        );

    pointer-events:none;
}


/* =========================================================
   IMAGE CAPTION
========================================================= */

#idt-india-planning-guide .idt-ipg-caption{
    position:absolute;

    left:22px;
    right:22px;
    bottom:22px;

    z-index:3;

    color:#FFFFFF;
}

#idt-india-planning-guide .idt-ipg-caption span{
    display:block;

    margin-bottom:5px;

    color:var(--sky);

    font-size:9px;
    line-height:1.2;

    font-weight:800;

    letter-spacing:.1em;

    text-transform:uppercase;
}

#idt-india-planning-guide .idt-ipg-caption strong{
    display:block;

    max-width:360px;

    font-size:15px;
    line-height:1.55;

    font-weight:700;
}


/* =========================================================
   NOTE UNDER IMAGE
========================================================= */

#idt-india-planning-guide .idt-ipg-note{
    margin-top:18px;

    padding:2px 0 2px 14px;

    border-left:3px solid var(--orange);
}

#idt-india-planning-guide .idt-ipg-note p{
    margin:0;

    color:var(--text);

    font-size:12.8px;
    line-height:1.7;
}


/* =========================================================
   RIGHT CONTENT
========================================================= */

#idt-india-planning-guide .idt-ipg-content{
    min-width:0;
}

#idt-india-planning-guide .idt-ipg-intro{
    margin:0 0 8px;

    color:var(--dark);

    font-size:15px;
    line-height:1.82;
}


/* =========================================================
   CONTENT POINTS — NO CARDS
========================================================= */

#idt-india-planning-guide .idt-ipg-block{
    position:relative;

    padding:27px 0 26px 34px;

    border-bottom:1px solid var(--line);
}

#idt-india-planning-guide .idt-ipg-block:first-of-type{
    margin-top:10px;

    border-top:1px solid var(--line);
}

#idt-india-planning-guide .idt-ipg-block::before{
    content:"";

    position:absolute;

    left:0;
    top:32px;

    width:11px;
    height:11px;

    border:2px solid var(--orange);

    border-radius:50%;

    background:#FFFFFF;
}

#idt-india-planning-guide .idt-ipg-label{
    display:block;

    margin-bottom:5px;

    color:var(--blue);

    font-size:9px;
    line-height:1.2;

    font-weight:800;

    letter-spacing:.1em;

    text-transform:uppercase;
}

#idt-india-planning-guide .idt-ipg-block h3{
    margin:0 0 8px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:18px;
    line-height:1.4;

    font-weight:800;
}

#idt-india-planning-guide .idt-ipg-block p{
    margin:0;

    color:var(--text);

    font-size:13.7px;
    line-height:1.76;
}


/* =========================================================
   ENDING
========================================================= */

#idt-india-planning-guide .idt-ipg-ending{
    margin-top:27px;
}

#idt-india-planning-guide .idt-ipg-ending strong{
    display:block;

    margin-bottom:6px;

    color:var(--navy);

    font-size:14px;
    line-height:1.5;

    font-weight:800;
}

#idt-india-planning-guide .idt-ipg-ending p{
    margin:0;

    color:var(--text);

    font-size:13.7px;
    line-height:1.75;
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1100px){

    #idt-india-planning-guide{
        padding:72px 28px 76px;
    }

    #idt-india-planning-guide .idt-ipg-layout{
        gap:48px;
    }

    #idt-india-planning-guide .idt-ipg-image{
        height:515px;
    }

    #idt-india-planning-guide .idt-ipg-sticky{
        top:90px;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-india-planning-guide{
        padding:62px 20px 66px;
    }

    #idt-india-planning-guide .idt-ipg-layout{
        grid-template-columns:1fr;

        gap:40px;

        max-width:760px;

        margin:0 auto;
    }

    #idt-india-planning-guide .idt-ipg-left{
        align-self:auto;
    }

    #idt-india-planning-guide .idt-ipg-sticky{
        position:relative;

        top:auto;
    }

    #idt-india-planning-guide .idt-ipg-image{
        height:460px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-india-planning-guide{
        padding:52px 15px 56px;
    }

    #idt-india-planning-guide .idt-ipg-head{
        margin-bottom:36px;
    }

    #idt-india-planning-guide .idt-ipg-script{
        font-size:28px;
    }

    #idt-india-planning-guide .idt-ipg-title{
        font-size:30px;
    }

    #idt-india-planning-guide .idt-ipg-lead{
        font-size:14.7px;
    }

    #idt-india-planning-guide .idt-ipg-image{
        height:390px;
    }

    #idt-india-planning-guide .idt-ipg-block{
        padding:
            22px 0 21px 28px;
    }

    #idt-india-planning-guide .idt-ipg-block::before{
        top:27px;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-india-planning-guide{
        padding:46px 13px 50px;
    }

    #idt-india-planning-guide .idt-ipg-script{
        font-size:26px;
    }

    #idt-india-planning-guide .idt-ipg-title{
        font-size:27px;
    }

    #idt-india-planning-guide .idt-ipg-lead{
        font-size:14.3px;
    }

    #idt-india-planning-guide .idt-ipg-image{
        height:315px;

        border-radius:8px;
    }

    #idt-india-planning-guide .idt-ipg-caption{
        left:16px;
        right:16px;
        bottom:16px;
    }

    #idt-india-planning-guide .idt-ipg-caption strong{
        font-size:13px;
    }

    #idt-india-planning-guide .idt-ipg-block{
        padding:
            20px 0 19px 24px;
    }

    #idt-india-planning-guide .idt-ipg-block h3{
        font-size:17px;
    }

    #idt-india-planning-guide .idt-ipg-block p{
        font-size:13.3px;
    }

    #idt-india-planning-guide .idt-ipg-intro{
        font-size:14px;
    }
}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-india-planning-guide{
        padding:42px 10px 46px;
    }

    #idt-india-planning-guide .idt-ipg-title{
        font-size:25px;
    }

    #idt-india-planning-guide .idt-ipg-image{
        height:280px;
    }
}

</style>


<section id="idt-india-planning-guide">

    <div class="idt-ipg-wrap">


        <!-- HEADER -->

        <div class="idt-ipg-head">

            <p class="idt-ipg-script">
                Plan India With Clarity
            </p>

            <h2 class="idt-ipg-title">
                Planning Your India Tour Package — Essential Guide
            </h2>

            <div class="idt-ipg-accent" aria-hidden="true">
                <span></span>
            </div>

            <p class="idt-ipg-lead">
                A good India itinerary is not only about choosing destinations. Travel time, route order, climate and the pace of sightseeing all influence how comfortable the journey feels.
            </p>

        </div>


        <!-- MAIN -->

        <div class="idt-ipg-layout">


            <!-- LEFT STICKY SIDE -->

            <div class="idt-ipg-left">

                <div class="idt-ipg-sticky">

                    <div class="idt-ipg-image">

                        <img
                            src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1200&q=90"
                            alt="Planning a private India tour"
                            loading="lazy"
                        >

                        <div class="idt-ipg-caption">

                            <span>
                                Plan Before You Travel
                            </span>

                            <strong>
                                The right route can make the difference between a rushed holiday and a comfortable India journey.
                            </strong>

                        </div>

                    </div>


                    <div class="idt-ipg-note">

                        <p>
                            India is a large country, so realistic travel times and well-ordered destinations are especially important when planning a multi-city itinerary.
                        </p>

                    </div>

                </div>

            </div>


            <!-- RIGHT SIDE -->

            <div class="idt-ipg-content">


                <p class="idt-ipg-intro">
                    Before finalising an India tour, it helps to decide what you want the journey to feel like. Some travellers want to see several regions, while others prefer to explore fewer destinations in greater depth. The most practical itinerary usually balances both sightseeing and travel time.
                </p>


                <div class="idt-ipg-block">

                    <span class="idt-ipg-label">
                        Route Planning
                    </span>

                    <h3>
                        Start With the Destinations That Matter Most
                    </h3>

                    <p>
                        Begin with the places you genuinely want to visit, then connect them in a logical route. Delhi, Agra and Jaipur combine naturally, while Rajasthan, Varanasi or mountain destinations may require additional travel days.
                    </p>

                </div>


                <div class="idt-ipg-block">

                    <span class="idt-ipg-label">
                        Travel Duration
                    </span>

                    <h3>
                        Avoid Trying to Cover Too Much in Too Little Time
                    </h3>

                    <p>
                        Adding more destinations does not always create a better journey. A realistic schedule gives you enough time for sightseeing, transfers, hotel check-ins and occasional slower moments without making every day feel rushed.
                    </p>

                </div>


                <div class="idt-ipg-block">

                    <span class="idt-ipg-label">
                        Seasonal Planning
                    </span>

                    <h3>
                        Consider the Region and Time of Year
                    </h3>

                    <p>
                        Weather conditions vary across India. The best route can depend on whether you are visiting North India, Rajasthan, the Himalayan regions or another part of the country, so the season should be considered while shaping the itinerary.
                    </p>

                </div>


                <div class="idt-ipg-block">

                    <span class="idt-ipg-label">
                        Travel Pace
                    </span>

                    <h3>
                        Decide How Much Time You Want in Each Destination
                    </h3>

                    <p>
                        Some cities can be explored efficiently in a short stay, while others are better experienced over several days. Your itinerary should reflect whether you prefer a faster highlights trip or a more relaxed travel rhythm.
                    </p>

                </div>


                <div class="idt-ipg-block">

                    <span class="idt-ipg-label">
                        Private Journey
                    </span>

                    <h3>
                        Keep the Itinerary Flexible Where Possible
                    </h3>

                    <p>
                        Private travel gives you greater control over how the route is organised. Destinations can be added or removed, overnight stays adjusted and sightseeing priorities changed according to your available time and interests.
                    </p>

                </div>


                <div class="idt-ipg-ending">

                    <strong>
                        A better India itinerary begins with the right balance.
                    </strong>

                    <p>
                        Share your travel dates, number of days and the places you would most like to visit. From there, the journey can be shaped into a practical route that suits your schedule and preferred travel style.
                    </p>

                </div>


            </div>

        </div>

    </div>

</section>