<!-- =========================================================
     INDIA DAY TRIP
     INDIA TOUR PACKAGES
     SECTION 02 — PRIVATE & CUSTOMISED INDIA TOURS
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-packages-intro,
#idt-india-packages-intro *{
    box-sizing:border-box;
}

#idt-india-packages-intro{
    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --orange-soft:#FF7A2F;
    --text:#596574;
    --text-dark:#374453;
    --line:#E7EBEF;
    --soft:#F7FAFC;
    --white:#FFFFFF;

    position:relative;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:72px 24px 74px;

    background:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   SUBTLE BACKGROUND DETAIL
========================================================= */

#idt-india-packages-intro::before{
    content:"";

    position:absolute;

    top:-160px;
    right:-170px;

    width:390px;
    height:390px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(121,189,242,.09),
            rgba(121,189,242,.025) 48%,
            transparent 70%
        );

    pointer-events:none;
}

#idt-india-packages-intro::after{
    content:"";

    position:absolute;

    left:-150px;
    bottom:-180px;

    width:360px;
    height:360px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,93,0,.035),
            transparent 68%
        );

    pointer-events:none;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-india-packages-intro .idt-ipintro-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1080px;

    margin:0 auto;
}


/* =========================================================
   SECTION HEADER
========================================================= */

#idt-india-packages-intro .idt-ipintro-head{
    width:100%;
    max-width:820px;

    margin:0 auto 40px;

    text-align:center;
}


/* SCRIPT */

#idt-india-packages-intro .idt-ipintro-script{
    margin:0 0 8px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}


/* TITLE */

#idt-india-packages-intro .idt-ipintro-title{
    max-width:800px;

    margin:0 auto;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:36px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.55px;
}


/* ACCENT */

#idt-india-packages-intro .idt-ipintro-accent{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    margin:14px 0 16px;
}

#idt-india-packages-intro .idt-ipintro-accent::before{
    content:"";

    width:38px;
    height:2px;

    border-radius:30px;

    background:var(--navy);
}

#idt-india-packages-intro .idt-ipintro-accent span{
    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-india-packages-intro .idt-ipintro-accent::after{
    content:"";

    width:25px;
    height:2px;

    border-radius:30px;

    background:var(--orange);
}


/* INTRO LEAD */

#idt-india-packages-intro .idt-ipintro-lead{
    max-width:760px;

    margin:0 auto;

    color:var(--text);

    font-size:16px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   EDITORIAL CONTENT
========================================================= */

#idt-india-packages-intro .idt-ipintro-content{
    width:100%;
    max-width:960px;

    margin:0 auto;
}


/* OPENING PARAGRAPH */

#idt-india-packages-intro .idt-ipintro-opening{
    margin:0 0 30px;

    padding-bottom:29px;

    border-bottom:1px solid var(--line);

    color:var(--text-dark);

    font-size:15.5px;
    line-height:1.82;

    font-weight:400;
}


/* =========================================================
   CONTENT BLOCKS
========================================================= */

#idt-india-packages-intro .idt-ipintro-block{
    position:relative;

    padding:0 0 27px;
    margin:0 0 27px;

    border-bottom:1px solid var(--line);
}

#idt-india-packages-intro .idt-ipintro-block:last-of-type{
    margin-bottom:0;

    border-bottom:0;
}


/* SUBHEADING */

#idt-india-packages-intro .idt-ipintro-block h3{
    position:relative;

    margin:0 0 10px;

    padding-left:18px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:19px;
    line-height:1.4;

    font-weight:800;

    letter-spacing:-.15px;
}

#idt-india-packages-intro .idt-ipintro-block h3::before{
    content:"";

    position:absolute;

    top:5px;
    bottom:5px;
    left:0;

    width:3px;

    border-radius:20px;

    background:
        linear-gradient(
            180deg,
            var(--orange),
            var(--orange-soft)
        );
}


/* PARAGRAPH */

#idt-india-packages-intro .idt-ipintro-block p{
    margin:0;

    color:var(--text);

    font-size:15px;
    line-height:1.82;

    font-weight:400;
}


/* =========================================================
   PLANNING NOTE
========================================================= */

#idt-india-packages-intro .idt-ipintro-note{
    display:grid;

    grid-template-columns:46px minmax(0,1fr);

    gap:15px;

    align-items:center;

    margin-top:31px;

    padding:18px 20px;

    border:
        1px solid
        rgba(12,45,98,.09);

    border-left:
        3px solid var(--orange);

    border-radius:6px;

    background:
        linear-gradient(
            90deg,
            rgba(247,250,252,.98),
            rgba(255,255,255,1)
        );
}


/* NOTE ICON */

#idt-india-packages-intro .idt-ipintro-note-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:46px;
    height:46px;

    border-radius:50%;

    background:
        rgba(46,96,149,.08);

    color:var(--blue);
}

#idt-india-packages-intro .idt-ipintro-note-icon svg{
    width:21px;
    height:21px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* NOTE TEXT */

#idt-india-packages-intro .idt-ipintro-note-small{
    display:block;

    margin:0 0 3px;

    color:var(--orange);

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.09em;

    text-transform:uppercase;
}

#idt-india-packages-intro .idt-ipintro-note p{
    margin:0;

    color:var(--text-dark);

    font-size:14px;
    line-height:1.65;

    font-weight:500;
}

#idt-india-packages-intro .idt-ipintro-note strong{
    color:var(--navy);

    font-weight:800;
}


/* =========================================================
   DESKTOP
========================================================= */

@media(min-width:1400px){

    #idt-india-packages-intro{
        padding-top:78px;
        padding-bottom:80px;
    }

}


/* =========================================================
   1200
========================================================= */

@media(max-width:1200px){

    #idt-india-packages-intro{
        padding:66px 28px 68px;
    }

    #idt-india-packages-intro .idt-ipintro-wrap{
        max-width:1000px;
    }

    #idt-india-packages-intro .idt-ipintro-content{
        max-width:900px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-india-packages-intro{
        padding:58px 20px 60px;
    }

    #idt-india-packages-intro .idt-ipintro-head{
        margin-bottom:34px;
    }

    #idt-india-packages-intro .idt-ipintro-title{
        font-size:33px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-india-packages-intro{
        padding:50px 15px 52px;
    }

    #idt-india-packages-intro .idt-ipintro-head{
        margin-bottom:29px;
    }

    #idt-india-packages-intro .idt-ipintro-script{
        font-size:28px;
    }

    #idt-india-packages-intro .idt-ipintro-title{
        font-size:29px;
        line-height:1.23;
    }

    #idt-india-packages-intro .idt-ipintro-lead{
        font-size:15px;
        line-height:1.7;
    }

    #idt-india-packages-intro .idt-ipintro-opening{
        margin-bottom:25px;
        padding-bottom:24px;

        font-size:14.8px;
        line-height:1.78;
    }

    #idt-india-packages-intro .idt-ipintro-block{
        margin-bottom:23px;
        padding-bottom:23px;
    }

    #idt-india-packages-intro .idt-ipintro-block h3{
        font-size:18px;
    }

    #idt-india-packages-intro .idt-ipintro-block p{
        font-size:14.5px;
        line-height:1.78;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-india-packages-intro{
        padding:44px 13px 46px;
    }

    #idt-india-packages-intro .idt-ipintro-script{
        font-size:27px;
    }

    #idt-india-packages-intro .idt-ipintro-title{
        font-size:27px;
    }

    #idt-india-packages-intro .idt-ipintro-lead{
        font-size:14.5px;
    }

    #idt-india-packages-intro .idt-ipintro-opening{
        font-size:14.3px;
    }

    #idt-india-packages-intro .idt-ipintro-block h3{
        padding-left:15px;

        font-size:17px;
    }

    #idt-india-packages-intro .idt-ipintro-block p{
        font-size:14.2px;
    }

    #idt-india-packages-intro .idt-ipintro-note{
        grid-template-columns:40px minmax(0,1fr);

        gap:12px;

        padding:16px 14px;
    }

    #idt-india-packages-intro .idt-ipintro-note-icon{
        width:40px;
        height:40px;
    }

    #idt-india-packages-intro .idt-ipintro-note p{
        font-size:13.2px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-india-packages-intro{
        padding:40px 10px 42px;
    }

    #idt-india-packages-intro .idt-ipintro-title{
        font-size:25px;
    }

}

</style>


<section id="idt-india-packages-intro">

    <div class="idt-ipintro-wrap">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-ipintro-head">


            <p class="idt-ipintro-script">
                Discover India Your Way
            </p>


            <h2 class="idt-ipintro-title">
                India Tour Packages — Private &amp; Customised Journeys Across India
            </h2>


            <div
                class="idt-ipintro-accent"
                aria-hidden="true"
            >
                <span></span>
            </div>


            <p class="idt-ipintro-lead">
                Explore India with a journey shaped around the places you want to see, the time you have available and the way you prefer to travel.
            </p>


        </div>


        <!-- =================================================
             EDITORIAL CONTENT
        ================================================== -->

        <div class="idt-ipintro-content">


            <p class="idt-ipintro-opening">
                India brings together remarkably different travel experiences within one country. Historic cities, Mughal monuments, Rajasthan’s royal heritage, spiritual destinations, mountain landscapes and regional cultures can all become part of the same journey. Our India tour packages are designed to help travellers connect these experiences through a clear, comfortable and thoughtfully planned private itinerary.
            </p>


            <!-- 01 -->

            <div class="idt-ipintro-block">

                <h3>
                    Private India Tours Designed Around Your Travel Plans
                </h3>

                <p>
                    Your India journey does not need to follow a fixed group-tour schedule. The route, number of days, sightseeing pace and destinations can be planned around your individual travel requirements. Whether you want a focused journey through a few iconic cities or a longer itinerary across several regions, the trip can be structured according to the time available to you.
                </p>

            </div>


            <!-- 02 -->

            <div class="idt-ipintro-block">

                <h3>
                    Explore India by Region, Theme or Travel Style
                </h3>

                <p>
                    Start with Delhi, Agra and Jaipur on the Golden Triangle, travel deeper into Rajasthan for forts, palaces and historic cities, discover cultural and spiritual destinations, or extend your journey towards mountain and nature-focused regions. Choosing destinations around your interests helps create an India itinerary that feels connected rather than simply covering as many places as possible.
                </p>

            </div>


            <!-- 03 -->

            <div class="idt-ipintro-block">

                <h3>
                    Flexible Itineraries for Short Trips and Longer Journeys
                </h3>

                <p>
                    A shorter India holiday can concentrate on one region and its most important experiences, while additional days make it possible to combine different parts of the country at a more comfortable pace. Travel distances and transfer times are considered when planning the route so that your itinerary remains practical and leaves enough time to experience each destination properly.
                </p>

            </div>


            <!-- 04 -->

            <div class="idt-ipintro-block">

                <h3>
                    Travel With Clear Planning and Local Assistance
                </h3>

                <p>
                    A well-planned private journey should make it clear where you are travelling, how the route connects, what transportation is arranged and which services are included. Once your itinerary is confirmed, the aim is to keep each stage of the journey organised while providing local assistance for the arrangements included in your tour.
                </p>

            </div>


            <!-- =================================================
                 PLANNING NOTE
            ================================================== -->

            <div class="idt-ipintro-note">


                <div class="idt-ipintro-note-icon">

                    <svg viewBox="0 0 24 24">

                        <circle
                            cx="12"
                            cy="12"
                            r="9"
                        ></circle>

                        <path d="M12 8v4"></path>

                        <path d="M12 16h.01"></path>

                    </svg>

                </div>


                <div>

                    <span class="idt-ipintro-note-small">
                        Planning Tip
                    </span>

                    <p>
                        Share your <strong>travel dates, preferred destinations and total number of days</strong> before finalising the route. This helps create a more realistic and comfortable India itinerary.
                    </p>

                </div>


            </div>


        </div>


    </div>

</section>