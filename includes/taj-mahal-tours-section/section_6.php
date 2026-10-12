<!-- =========================================================
     INDIA DAY TRIP
     TAJ MAHAL TOUR PAGE
     SECTION 05 — WHY BOOK WITH INDIA DAY TRIP
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-taj-why,
#idt-taj-why *{
    box-sizing:border-box;
}

#idt-taj-why{
    --navy:#0C2D62;
    --deep:#071F3F;
    --deep2:#0A1627;
    --blue:#123B72;
    --sky:#79BDF2;
    --light-sky:#A7D8FF;
    --orange:#FF5D00;
    --white:#FFFFFF;

    position:relative;
    width:100%;
    max-width:100%;
    overflow:hidden;

    padding:54px 24px 56px;

    background:
        radial-gradient(
            circle at 10% 8%,
            rgba(121,189,242,.10),
            transparent 28%
        ),
        radial-gradient(
            circle at 92% 90%,
            rgba(255,93,0,.06),
            transparent 23%
        ),
        linear-gradient(
            135deg,
            #071A31 0%,
            #081524 52%,
            #07111D 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   DECORATIVE DETAILS
========================================================= */

#idt-taj-why::before{
    content:"";
    position:absolute;

    width:250px;
    height:250px;

    left:-130px;
    top:40px;

    border:1px solid rgba(121,189,242,.08);
    border-radius:50%;

    pointer-events:none;
}

#idt-taj-why::after{
    content:"";
    position:absolute;

    width:180px;
    height:180px;

    right:-90px;
    bottom:35px;

    border:1px solid rgba(255,93,0,.08);
    border-radius:50%;

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-taj-why .idt-why-container{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1180px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-taj-why .idt-why-head{
    max-width:760px;

    margin:0 auto 34px;

    text-align:center;
}

#idt-taj-why .idt-why-script{
    margin:0 0 7px;

    color:var(--sky);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-taj-why .idt-why-title{
    margin:0;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:34px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.5px;
}

#idt-taj-why .idt-why-accent{
    display:flex;
    align-items:center;
    justify-content:center;

    gap:7px;

    margin:14px auto 0;
}

#idt-taj-why .idt-why-accent::before{
    content:"";

    width:52px;
    height:2px;

    border-radius:30px;

    background:
        linear-gradient(
            90deg,
            var(--sky),
            var(--orange)
        );
}

#idt-taj-why .idt-why-accent::after{
    content:"";

    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-taj-why .idt-why-lead{
    max-width:700px;

    margin:15px auto 0;

    color:rgba(255,255,255,.70);

    font-size:16px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   FEATURE GRID
========================================================= */

#idt-taj-why .idt-why-grid{
    display:grid;

    grid-template-columns:
        repeat(6,minmax(0,1fr));

    gap:20px;
}


/* 3 CARDS FIRST ROW */

#idt-taj-why .idt-why-card:nth-child(1){
    grid-column:span 2;
}

#idt-taj-why .idt-why-card:nth-child(2){
    grid-column:span 2;
}

#idt-taj-why .idt-why-card:nth-child(3){
    grid-column:span 2;
}


/* 2 CARDS CENTERED SECOND ROW */

#idt-taj-why .idt-why-card:nth-child(4){
    grid-column:2 / span 2;
}

#idt-taj-why .idt-why-card:nth-child(5){
    grid-column:4 / span 2;
}


/* =========================================================
   CARD
========================================================= */

#idt-taj-why .idt-why-card{
    position:relative;

    display:flex;
    flex-direction:column;

    min-height:250px;

    overflow:hidden;

    padding:27px 24px 25px;

    border:
        1px solid
        rgba(255,255,255,.09);

    border-radius:10px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.065),
            rgba(255,255,255,.025)
        );

    box-shadow:
        0 12px 30px
        rgba(0,0,0,.14);

    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);

    transition:
        transform .4s ease,
        border-color .4s ease,
        background .4s ease,
        box-shadow .4s ease;
}

#idt-taj-why .idt-why-card:hover{
    transform:translateY(-6px);

    border-color:
        rgba(121,189,242,.25);

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.085),
            rgba(255,255,255,.035)
        );

    box-shadow:
        0 20px 42px
        rgba(0,0,0,.22);
}


/* TOP ACCENT */

#idt-taj-why .idt-why-card::before{
    content:"";

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:2px;

    background:
        linear-gradient(
            90deg,
            var(--sky),
            rgba(121,189,242,.08)
        );
}

#idt-taj-why .idt-why-card:nth-child(even)::before{
    background:
        linear-gradient(
            90deg,
            var(--orange),
            rgba(255,93,0,.08)
        );
}


/* =========================================================
   ICON
========================================================= */

#idt-taj-why .idt-why-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:52px;
    height:52px;

    flex:0 0 52px;

    margin-bottom:19px;

    border:
        1px solid
        rgba(121,189,242,.18);

    border-radius:10px;

    background:
        rgba(121,189,242,.10);

    color:var(--light-sky);

    transition:
        transform .4s ease,
        background .4s ease;
}

#idt-taj-why .idt-why-card:nth-child(even) .idt-why-icon{
    border-color:rgba(255,93,0,.18);

    background:rgba(255,93,0,.08);

    color:#FF9A62;
}

#idt-taj-why .idt-why-card:hover .idt-why-icon{
    transform:translateY(-2px);
}

#idt-taj-why .idt-why-icon svg{
    width:25px;
    height:25px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   CARD CONTENT
========================================================= */

#idt-taj-why .idt-why-card-title{
    margin:0 0 8px;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:20px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:-.3px;
}

#idt-taj-why .idt-why-text{
    margin:0;

    color:rgba(255,255,255,.67);

    font-size:15px;
    line-height:1.72;

    font-weight:400;
}


/* =========================================================
   SMALL BOTTOM DETAIL
========================================================= */

#idt-taj-why .idt-why-mini{
    display:flex;

    align-items:center;

    gap:7px;

    margin-top:auto;

    padding-top:18px;

    color:rgba(167,216,255,.80);

    font-size:12.5px;
    line-height:1.4;

    font-weight:700;
}

#idt-taj-why .idt-why-card:nth-child(even) .idt-why-mini{
    color:rgba(255,154,98,.88);
}

#idt-taj-why .idt-why-mini::before{
    content:"";

    width:18px;
    height:1px;

    background:currentColor;

    opacity:.75;
}


/* =========================================================
   1200
========================================================= */

@media(max-width:1200px){

    #idt-taj-why{
        padding:50px 28px 52px;
    }

    #idt-taj-why .idt-why-container{
        max-width:1060px;
    }

    #idt-taj-why .idt-why-card{
        min-height:250px;

        padding:
            25px 21px 23px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-taj-why{
        padding:46px 20px 48px;
    }

    #idt-taj-why .idt-why-head{
        margin-bottom:30px;
    }

    #idt-taj-why .idt-why-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:17px;
    }

    #idt-taj-why .idt-why-card:nth-child(n){
        grid-column:auto;
    }

    #idt-taj-why .idt-why-card:nth-child(5){
        grid-column:1 / -1;

        width:calc(50% - 8.5px);

        justify-self:center;
    }

    #idt-taj-why .idt-why-card{
        min-height:245px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-taj-why{
        padding:42px 15px 44px;
    }

    #idt-taj-why .idt-why-head{
        margin-bottom:27px;
    }

    #idt-taj-why .idt-why-lead{
        font-size:15px;
        line-height:1.7;
    }

    #idt-taj-why .idt-why-grid{
        grid-template-columns:1fr;
    }

    #idt-taj-why .idt-why-card:nth-child(n){
        grid-column:auto;

        width:100%;

        max-width:570px;

        justify-self:center;
    }

    #idt-taj-why .idt-why-card{
        min-height:auto;

        padding:24px 21px 23px;
    }

    #idt-taj-why .idt-why-card-title{
        font-size:19px;
    }

    #idt-taj-why .idt-why-text{
        font-size:15px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-taj-why{
        padding:38px 13px 40px;
    }

    #idt-taj-why .idt-why-head{
        margin-bottom:24px;
    }

    #idt-taj-why .idt-why-card{
        padding:22px 18px 21px;
    }

    #idt-taj-why .idt-why-icon{
        width:46px;
        height:46px;

        flex-basis:46px;

        margin-bottom:16px;
    }

    #idt-taj-why .idt-why-icon svg{
        width:22px;
        height:22px;
    }

    #idt-taj-why .idt-why-card-title{
        font-size:18px;
        margin-bottom:6px;
    }

    #idt-taj-why .idt-why-text{
        font-size:14.5px;
        line-height:1.68;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-taj-why{
        padding:36px 10px 38px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-taj-why *,
    #idt-taj-why *::before,
    #idt-taj-why *::after{
        transition:none !important;
        animation:none !important;
    }

}

</style>


<section id="idt-taj-why">

    <div class="idt-why-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-why-head">

            <p class="idt-why-script">
                Travel With Confidence
            </p>

            <h2 class="idt-why-title">
                Why Book With India Day Trip
            </h2>

            <div
                class="idt-why-accent"
                aria-hidden="true">
            </div>

            <p class="idt-why-lead">
                From your first enquiry to the final stop of your journey, we focus on making your Taj Mahal experience comfortable, flexible and easy to manage.
            </p>

        </div>


        <!-- =================================================
             FEATURE GRID
        ================================================== -->

        <div class="idt-why-grid">


            <!-- CARD 01 -->

            <article class="idt-why-card">

                <div class="idt-why-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 21s7-4.5 7-11V5l-7-3-7 3v5c0 6.5 7 11 7 11Z"></path>
                        <path d="m9 11 2 2 4-4"></path>
                    </svg>

                </div>

                <h3 class="idt-why-card-title">
                    Private, Personalised Travel
                </h3>

                <p class="idt-why-text">
                    Enjoy a private tour experience planned around your schedule instead of following the pace of a large shared group.
                </p>

                <div class="idt-why-mini">
                    Your journey, your pace
                </div>

            </article>


            <!-- CARD 02 -->

            <article class="idt-why-card">

                <div class="idt-why-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                        <circle cx="12" cy="10" r="2.5"></circle>
                        <path d="M8 4.5 6.5 3"></path>
                    </svg>

                </div>

                <h3 class="idt-why-card-title">
                    Local Agra Knowledge
                </h3>

                <p class="idt-why-text">
                    Explore the city with local travel assistance and practical guidance that helps make your time in Agra smoother and more enjoyable.
                </p>

                <div class="idt-why-mini">
                    Local insight in Agra
                </div>

            </article>


            <!-- CARD 03 -->

            <article class="idt-why-card">

                <div class="idt-why-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M3 17h18"></path>
                        <path d="M5 17V9h14v8"></path>
                        <path d="M7 9l2-3h6l2 3"></path>
                        <circle cx="8" cy="17" r="2"></circle>
                        <circle cx="16" cy="17" r="2"></circle>
                    </svg>

                </div>

                <h3 class="idt-why-card-title">
                    Comfortable Tour Planning
                </h3>

                <p class="idt-why-text">
                    From private transportation to sightseeing coordination, your journey is organised to keep the overall experience simple and comfortable.
                </p>

                <div class="idt-why-mini">
                    Smooth travel arrangements
                </div>

            </article>


            <!-- CARD 04 -->

            <article class="idt-why-card">

                <div class="idt-why-icon">

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

                <h3 class="idt-why-card-title">
                    Flexible Itineraries
                </h3>

                <p class="idt-why-text">
                    Adjust pickup points, sightseeing preferences and travel timings wherever your selected tour allows for greater flexibility.
                </p>

                <div class="idt-why-mini">
                    Plans built around you
                </div>

            </article>


            <!-- CARD 05 -->

            <article class="idt-why-card">

                <div class="idt-why-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M21 15a4 4 0 0 1-4 4H8l-5 3 1.5-5A8 8 0 1 1 21 15Z"></path>
                        <path d="M8 10h8"></path>
                        <path d="M8 14h5"></path>
                    </svg>

                </div>

                <h3 class="idt-why-card-title">
                    Direct Travel Assistance
                </h3>

                <p class="idt-why-text">
                    Get straightforward assistance for tour planning, pickup coordination and itinerary-related questions before and during your journey.
                </p>

                <div class="idt-why-mini">
                    Easy communication
                </div>

            </article>


        </div>

    </div>

</section>