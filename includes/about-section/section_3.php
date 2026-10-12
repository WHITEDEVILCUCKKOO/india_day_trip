<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP
   ABOUT US — SECTION 03
   PERSONAL TOUCH PROMISE
   BRAND BLUE + ORANGE PREMIUM VERSION
========================================================= */

#idt-personal-touch,
#idt-personal-touch *{
    box-sizing:border-box;
}

#idt-personal-touch{
    --blue:#123B72;
    --blue-dark:#0D2C57;
    --blue-soft:#EAF1F8;

    --orange:#F2A23A;
    --orange-light:#FFC167;

    --cream:#F7F3EA;
    --cream-light:#FCFAF6;

    --heading:#25231F;
    --text:#665F56;

    --border:#E7DED0;
    --white:#FFFFFF;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:72px 24px 76px;

    background:
        radial-gradient(
            circle at 5% 18%,
            rgba(242,162,58,.075),
            transparent 27%
        ),
        radial-gradient(
            circle at 94% 84%,
            rgba(18,59,114,.055),
            transparent 28%
        ),
        linear-gradient(
            180deg,
            #FCFAF6 0%,
            #F6F2E9 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#idt-personal-touch::before{
    content:"";

    position:absolute;

    width:430px;
    height:430px;

    top:-255px;
    left:-170px;

    border-radius:50%;

    border:
        1px solid
        rgba(242,162,58,.10);

    pointer-events:none;
}


#idt-personal-touch::after{
    content:"";

    position:absolute;

    top:80px;
    right:28px;

    width:130px;
    height:130px;

    opacity:.18;

    background-image:
        radial-gradient(
            circle,
            rgba(18,59,114,.38) 1.2px,
            transparent 1.3px
        );

    background-size:16px 16px;

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-personal-touch .idt-touch-container{
    position:relative;
    z-index:2;

    width:1240px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-personal-touch .idt-touch-header{
    max-width:850px;

    margin:
        0 auto 46px;

    text-align:center;
}


/* =========================================================
   SUBHEADING — BLUE
========================================================= */

#idt-personal-touch .idt-touch-script{
    margin:0 0 8px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:35px;
    line-height:1;

    font-weight:400;
}


/* =========================================================
   LINE
========================================================= */

#idt-personal-touch .idt-touch-line{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    margin-bottom:17px;
}


#idt-personal-touch .idt-touch-line-main{
    width:48px;
    height:2px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--orange),
            var(--blue)
        );
}


#idt-personal-touch .idt-touch-line-dot{
    width:6px;
    height:6px;

    border-radius:50%;

    background:var(--orange);
}


/* =========================================================
   HEADING
========================================================= */

#idt-personal-touch .idt-touch-heading{
    margin:0 0 17px;

    color:var(--heading);

    font-family:"Playfair Display",Georgia,serif;

    font-size:40px;
    line-height:1.18;

    font-weight:600;

    letter-spacing:-.6px;
}


/* =========================================================
   INTRO
========================================================= */

#idt-personal-touch .idt-touch-intro{
    max-width:750px;

    margin:0 auto;

    color:var(--text);

    font-size:14.5px;
    line-height:1.78;

    font-weight:400;

    text-align:center;
}


/* =========================================================
   CARDS GRID
========================================================= */

#idt-personal-touch .idt-touch-grid{
    display:grid;

    grid-template-columns:
        repeat(4,minmax(0,1fr));

    gap:16px;
}


/* =========================================================
   CARD
========================================================= */

#idt-personal-touch .idt-touch-card{
    position:relative;

    min-width:0;
    min-height:305px;

    display:flex;
    flex-direction:column;

    padding:
        25px 21px 22px;

    overflow:hidden;

    background:
        linear-gradient(
            145deg,
            #FFFFFF 0%,
            #FCFAF6 100%
        );

    border:
        1px solid
        var(--border);

    border-radius:15px;

    box-shadow:
        0 10px 28px
        rgba(45,36,24,.055);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}


#idt-personal-touch .idt-touch-card:hover{
    transform:
        translateY(-5px);

    border-color:
        rgba(242,162,58,.48);

    box-shadow:
        0 18px 40px
        rgba(45,36,24,.10);
}


/* =========================================================
   TOP ACCENT
========================================================= */

#idt-personal-touch .idt-touch-card::before{
    content:"";

    position:absolute;

    top:0;
    left:0;

    width:50px;
    height:4px;

    border-radius:
        0 0 9px 0;

    background:
        linear-gradient(
            90deg,
            var(--orange),
            var(--blue)
        );

    transition:
        width .35s ease;
}


#idt-personal-touch .idt-touch-card:hover::before{
    width:100%;
}


/* =========================================================
   NUMBER
========================================================= */

#idt-personal-touch .idt-touch-number{
    position:absolute;

    top:13px;
    right:15px;

    color:
        rgba(18,59,114,.09);

    font-family:"Playfair Display",Georgia,serif;

    font-size:39px;
    line-height:1;

    font-weight:600;
}


/* =========================================================
   ICON
========================================================= */

#idt-personal-touch .idt-touch-icon{
    position:relative;

    width:46px;
    height:46px;

    flex:0 0 46px;

    display:flex;
    align-items:center;
    justify-content:center;

    margin-bottom:17px;

    border-radius:11px;

    background:
        linear-gradient(
            145deg,
            #FFF0D9,
            #FFF8ED
        );

    border:
        1px solid
        #F4DFC2;

    color:var(--orange);

    transition:
        background .3s ease,
        color .3s ease,
        transform .3s ease;
}


#idt-personal-touch .idt-touch-icon svg{
    width:21px;
    height:21px;

    fill:none;

    stroke:currentColor;

    stroke-width:1.7;

    stroke-linecap:round;
    stroke-linejoin:round;

    transition:
        transform .6s ease;
}


#idt-personal-touch .idt-touch-card:hover
.idt-touch-icon{
    background:
        linear-gradient(
            135deg,
            var(--blue-dark),
            var(--blue)
        );

    color:var(--orange-light);

    transform:
        rotate(-4deg)
        scale(1.04);
}


#idt-personal-touch .idt-touch-card:hover
.idt-touch-icon svg{
    transform:
        rotate(360deg);
}


/* =========================================================
   CARD TITLE
========================================================= */

#idt-personal-touch .idt-touch-card-title{
    position:relative;

    z-index:2;

    margin:
        0 0 10px;

    color:var(--blue-dark);

    font-family:"Playfair Display",Georgia,serif;

    font-size:17px;
    line-height:1.38;

    font-weight:600;
}


/* =========================================================
   CARD TEXT
========================================================= */

#idt-personal-touch .idt-touch-card-text{
    position:relative;

    z-index:2;

    margin:0;

    color:var(--text);

    font-size:12.5px;
    line-height:1.7;

    font-weight:400;

    text-align:justify;
    text-justify:inter-word;
}


/* =========================================================
   BOTTOM ACCENT
========================================================= */

#idt-personal-touch .idt-touch-card::after{
    content:"";

    position:absolute;

    right:0;
    bottom:0;

    width:0;
    height:3px;

    background:
        linear-gradient(
            90deg,
            var(--blue),
            var(--orange)
        );

    transition:
        width .35s ease;
}


#idt-personal-touch .idt-touch-card:hover::after{
    width:100%;
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-personal-touch{
        padding:
            64px 22px 68px;
    }

    #idt-personal-touch .idt-touch-container{
        width:1060px;
    }

    #idt-personal-touch .idt-touch-heading{
        font-size:36px;
    }

    #idt-personal-touch .idt-touch-grid{
        gap:13px;
    }

    #idt-personal-touch .idt-touch-card{
        min-height:315px;

        padding:
            22px 17px 20px;
    }

    #idt-personal-touch .idt-touch-card-title{
        font-size:15.5px;
    }

    #idt-personal-touch .idt-touch-card-text{
        font-size:12px;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-personal-touch{
        padding:
            54px 20px 58px;
    }

    #idt-personal-touch .idt-touch-container{
        width:860px;
    }

    #idt-personal-touch .idt-touch-header{
        margin-bottom:38px;
    }

    #idt-personal-touch .idt-touch-script{
        font-size:30px;
    }

    #idt-personal-touch .idt-touch-heading{
        font-size:31px;
        line-height:1.22;
    }

    #idt-personal-touch .idt-touch-intro{
        font-size:13.5px;
        line-height:1.72;
    }

    #idt-personal-touch .idt-touch-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:13px;
    }

    #idt-personal-touch .idt-touch-card{
        min-height:235px;

        padding:
            20px 17px 19px;
    }

    #idt-personal-touch .idt-touch-icon{
        width:42px;
        height:42px;

        flex-basis:42px;

        margin-bottom:14px;
    }

    #idt-personal-touch .idt-touch-icon svg{
        width:19px;
        height:19px;
    }

    #idt-personal-touch .idt-touch-card-title{
        margin-bottom:8px;

        font-size:15px;
    }

    #idt-personal-touch .idt-touch-card-text{
        font-size:12px;
        line-height:1.63;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-personal-touch{
        padding:
            47px 12px 51px;
    }

    #idt-personal-touch::after{
        opacity:.10;
    }

    #idt-personal-touch .idt-touch-header{
        margin-bottom:31px;
    }

    #idt-personal-touch .idt-touch-script{
        font-size:28px;
    }

    #idt-personal-touch .idt-touch-heading{
        font-size:28px;
        line-height:1.24;
    }

    #idt-personal-touch .idt-touch-intro{
        max-width:560px;

        font-size:13px;
        line-height:1.68;

        text-align:center;
    }

    #idt-personal-touch .idt-touch-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:9px;
    }

    #idt-personal-touch .idt-touch-card{
        min-height:260px;

        padding:
            16px 11px 16px;

        border-radius:12px;

        text-align:center;
    }

    #idt-personal-touch .idt-touch-number{
        top:9px;
        right:9px;

        font-size:31px;
    }

    #idt-personal-touch .idt-touch-icon{
        width:39px;
        height:39px;

        flex-basis:39px;

        margin:
            0 auto 11px;

        border-radius:9px;
    }

    #idt-personal-touch .idt-touch-icon svg{
        width:17px;
        height:17px;
    }

    #idt-personal-touch .idt-touch-card-title{
        margin-bottom:7px;

        font-size:13px;
        line-height:1.36;

        text-align:center;
    }

    #idt-personal-touch .idt-touch-card-text{
        font-size:10.5px;
        line-height:1.52;

        text-align:center;

        overflow-wrap:anywhere;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-personal-touch{
        padding:
            42px 9px 46px;
    }

    #idt-personal-touch .idt-touch-script{
        font-size:26px;
    }

    #idt-personal-touch .idt-touch-heading{
        font-size:25px;
    }

    #idt-personal-touch .idt-touch-intro{
        font-size:12.5px;
    }

    #idt-personal-touch .idt-touch-grid{
        gap:7px;
    }

    #idt-personal-touch .idt-touch-card{
        min-height:275px;

        padding:
            14px 8px;
    }

    #idt-personal-touch .idt-touch-icon{
        width:36px;
        height:36px;

        flex-basis:36px;
    }

    #idt-personal-touch .idt-touch-icon svg{
        width:15px;
        height:15px;
    }

    #idt-personal-touch .idt-touch-card-title{
        font-size:12px;
    }

    #idt-personal-touch .idt-touch-card-text{
        font-size:9.8px;
        line-height:1.47;
    }
}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-personal-touch{
        padding-left:7px;
        padding-right:7px;
    }

    #idt-personal-touch .idt-touch-heading{
        font-size:23px;
    }

    #idt-personal-touch .idt-touch-grid{
        gap:6px;
    }

    #idt-personal-touch .idt-touch-card{
        min-height:290px;

        padding:
            13px 6px;
    }

    #idt-personal-touch .idt-touch-card-title{
        font-size:11px;
    }

    #idt-personal-touch .idt-touch-card-text{
        font-size:9.2px;
        line-height:1.43;
    }
}
</style>


<section id="idt-personal-touch">

    <div class="idt-touch-container">


        <div class="idt-touch-header">

            <p class="idt-touch-script">
                Thoughtful Travel, Made Personal
            </p>


            <div
                class="idt-touch-line"
                aria-hidden="true">

                <span class="idt-touch-line-main"></span>

                <span class="idt-touch-line-dot"></span>

            </div>


            <h2 class="idt-touch-heading">
                Where the "Personal Touch" Promise Actually Holds Up
            </h2>


            <p class="idt-touch-intro">
                Any operator can put "personal" on a homepage. Few can back it up once you're actually on the ground. This is where that promise turns into something real.
            </p>

        </div>



        <div class="idt-touch-grid">


            <article class="idt-touch-card">

                <span class="idt-touch-number">
                    01
                </span>

                <span class="idt-touch-icon">

                    <svg viewBox="0 0 24 24">

                        <path d="M4 5H20"></path>
                        <path d="M4 12H16"></path>
                        <path d="M4 19H13"></path>
                        <path d="M18 16L21 19L18 22"></path>

                    </svg>

                </span>

                <h3 class="idt-touch-card-title">
                    Your Itinerary Isn't Copied from Anyone Else's Trip
                </h3>

                <p class="idt-touch-card-text">
                    Most tour packages get reused hundreds of times with the city names swapped around. Ours don't work that way. We build your route around what you actually want to do, skip what bores you, and slow down wherever you want to linger longer.
                </p>

            </article>



            <article class="idt-touch-card">

                <span class="idt-touch-number">
                    02
                </span>

                <span class="idt-touch-icon">

                    <svg viewBox="0 0 24 24">

                        <circle cx="12" cy="12" r="8"></circle>

                        <path d="M12 7V12L16 14"></path>

                    </svg>

                </span>

                <h3 class="idt-touch-card-title">
                    India, Your Way
                </h3>

                <p class="idt-touch-card-text">
                    We design every itinerary around your interests, travel style, preferred pace, and your budget. If you want three unhurried days in Jaipur instead of a rushed morning, that’s the trip we’ll build.
                </p>

            </article>



            <article class="idt-touch-card">

                <span class="idt-touch-number">
                    03
                </span>

                <span class="idt-touch-icon">

                    <svg viewBox="0 0 24 24">

                        <circle cx="8" cy="8" r="3"></circle>

                        <circle cx="17" cy="9" r="2.5"></circle>

                        <path d="M3 20C3 16.5 5 14 8 14C11 14 13 16.5 13 20"></path>

                        <path d="M14 20C14.2 17.4 15.4 15.5 17.5 15.5C19.6 15.5 21 17.4 21 20"></path>

                    </svg>

                </span>

                <h3 class="idt-touch-card-title">
                    One Trip, One Dedicated Team
                </h3>

                <p class="idt-touch-card-text">
                    You won’t have to juggle different agents for different cities or wonder which “operator” is actually responsible for your booking. One team follows your journey from start to finish.
                </p>

            </article>



            <article class="idt-touch-card">

                <span class="idt-touch-number">
                    04
                </span>

                <span class="idt-touch-icon">

                    <svg viewBox="0 0 24 24">

                        <path d="M5 3H19V21H5Z"></path>

                        <path d="M8 8H16"></path>

                        <path d="M8 12H16"></path>

                        <path d="M8 16H13"></path>

                    </svg>

                </span>

                <h3 class="idt-touch-card-title">
                    Transparent From Day One
                </h3>

                <p class="idt-touch-card-text">
                    We quote clear inclusions and straightforward pricing before you book anything. No vague line items, no costs that mysteriously appear halfway through your trip.
                </p>

            </article>



            <article class="idt-touch-card">

                <span class="idt-touch-number">
                    05
                </span>

                <span class="idt-touch-icon">

                    <svg viewBox="0 0 24 24">

                        <circle cx="12" cy="8" r="4"></circle>

                        <path d="M5 21C5 16.5 7.5 14 12 14C16.5 14 19 16.5 19 21"></path>

                        <path d="M18 5L20 7L23 4"></path>

                    </svg>

                </span>

                <h3 class="idt-touch-card-title">
                    Handpicked Travel Professionals
                </h3>

                <p class="idt-touch-card-text">
                    Every driver and licensed guide we work with is carefully selected, vetted for experience, safety record, and the ability to genuinely connect with international travelers, not just recite dates and names.
                </p>

            </article>



            <article class="idt-touch-card">

                <span class="idt-touch-number">
                    06
                </span>

                <span class="idt-touch-icon">

                    <svg viewBox="0 0 24 24">

                        <path d="M3 15V9L6 6H17L21 11V15"></path>

                        <path d="M5 15H19"></path>

                        <circle cx="7" cy="17" r="2"></circle>

                        <circle cx="17" cy="17" r="2"></circle>

                    </svg>

                </span>

                <h3 class="idt-touch-card-title">
                    Your Driver, Your Vehicle, Your Schedule
                </h3>

                <p class="idt-touch-card-text">
                    Private transportation means you’re never chasing a group bus or waiting on someone else’s timetable. Stop for photos, linger over lunch, or change your plans on the fly.
                </p>

            </article>



            <article class="idt-touch-card">

                <span class="idt-touch-number">
                    07
                </span>

                <span class="idt-touch-icon">

                    <svg viewBox="0 0 24 24">

                        <path d="M5 4V9H10"></path>

                        <path d="M19 20V15H14"></path>

                        <path d="M6.5 17.5A8 8 0 0 0 19 10"></path>

                        <path d="M17.5 6.5A8 8 0 0 0 5 14"></path>

                    </svg>

                </span>

                <h3 class="idt-touch-card-title">
                    Flexible at Every Step
                </h3>

                <p class="idt-touch-card-text">
                    Sightseeing stops, meal breaks, shopping detours, photography pauses- if your plans shift mid-trip, we shift with you instead of forcing you back onto a rigid schedule
                </p>

            </article>



            <article class="idt-touch-card">

                <span class="idt-touch-number">
                    08
                </span>

                <span class="idt-touch-icon">

                    <svg viewBox="0 0 24 24">

                        <path d="M5 4H19C20.1 4 21 4.9 21 6V15C21 16.1 20.1 17 19 17H10L5 21V17C3.9 17 3 16.1 3 15V6C3 4.9 3.9 4 5 4Z"></path>

                        <path d="M8 10H16"></path>

                    </svg>

                </span>

                <h3 class="idt-touch-card-title">
                    24/7 WhatsApp Assistance
                </h3>

                <p class="idt-touch-card-text">
                    Questions don’t wait for business hours, and neither do we. Reach out anytime before or during your trip and get a real response from someone who knows your itinerary.
                </p>

            </article>


        </div>

    </div>

</section>