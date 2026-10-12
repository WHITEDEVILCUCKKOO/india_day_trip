<!-- =========================================================
     INDIA DAY TRIP
     INDIA TOUR PACKAGES
     SECTION 03 — BROWSE BY REGION & THEME
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-packages-grid,
#idt-india-packages-grid *{
    box-sizing:border-box;
}

#idt-india-packages-grid{
    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#2E6095;
    --sky:#79BDF2;
    --light-sky:#A7D8FF;
    --orange:#FF5D00;
    --orange-soft:#FF7A2F;
    --text:#5C6672;
    --warm:#FCFAF6;
    --white:#FFFFFF;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:72px 24px 76px;

    background:
        radial-gradient(
            circle at 8% 10%,
            rgba(121,189,242,.07),
            transparent 24%
        ),
        radial-gradient(
            circle at 93% 92%,
            rgba(255,93,0,.045),
            transparent 22%
        ),
        var(--warm);

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-india-packages-grid .idt-ipg-wrap{
    width:100%;
    max-width:1180px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-india-packages-grid .idt-ipg-head{
    width:100%;
    max-width:780px;

    margin:0 auto 38px;

    text-align:center;
}

#idt-india-packages-grid .idt-ipg-script{
    margin:0 0 7px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-india-packages-grid .idt-ipg-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:35px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.5px;
}

#idt-india-packages-grid .idt-ipg-accent{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    margin:13px 0 15px;
}

#idt-india-packages-grid .idt-ipg-accent::before,
#idt-india-packages-grid .idt-ipg-accent::after{
    content:"";

    width:34px;
    height:2px;

    border-radius:20px;
}

#idt-india-packages-grid .idt-ipg-accent::before{
    background:var(--navy);
}

#idt-india-packages-grid .idt-ipg-accent::after{
    background:var(--orange);
}

#idt-india-packages-grid .idt-ipg-accent span{
    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-india-packages-grid .idt-ipg-lead{
    max-width:700px;

    margin:0 auto;

    color:var(--text);

    font-size:15.5px;
    line-height:1.72;
}


/* =========================================================
   GRID
========================================================= */

#idt-india-packages-grid .idt-ipg-grid{
    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap:22px;
}


/* =========================================================
   CARD
========================================================= */

#idt-india-packages-grid .idt-ipg-card{
    position:relative;

    min-width:0;

    height:360px;

    overflow:hidden;

    border-radius:10px;

    border:
        1px solid
        rgba(12,45,98,.08);

    background:#DDE4EA;

    box-shadow:
        0 14px 34px
        rgba(12,45,98,.07);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}

#idt-india-packages-grid .idt-ipg-card:hover{
    transform:translateY(-5px);

    border-color:
        rgba(46,96,149,.16);

    box-shadow:
        0 23px 48px
        rgba(12,45,98,.12);
}


/* IMAGE */

#idt-india-packages-grid .idt-ipg-image{
    position:absolute;
    inset:0;
}

#idt-india-packages-grid .idt-ipg-image img{
    width:100%;
    height:100%;

    display:block;

    object-fit:cover;
    object-position:center;

    transition:
        transform .6s ease;
}

#idt-india-packages-grid .idt-ipg-card:hover
.idt-ipg-image img{
    transform:scale(1.055);
}


/* OVERLAY */

#idt-india-packages-grid .idt-ipg-card::after{
    content:"";

    position:absolute;
    inset:0;

    z-index:1;

    background:
        linear-gradient(
            180deg,
            rgba(4,17,34,.08) 0%,
            rgba(4,17,34,.18) 28%,
            rgba(5,22,44,.72) 70%,
            rgba(3,15,30,.94) 100%
        );

    pointer-events:none;
}


/* =========================================================
   TOP LABEL
========================================================= */

#idt-india-packages-grid .idt-ipg-label{
    position:absolute;

    top:16px;
    left:16px;

    z-index:3;

    display:inline-flex;

    align-items:center;

    min-height:27px;

    padding:6px 9px;

    border-radius:4px;

    background:
        rgba(255,93,0,.92);

    color:#FFFFFF;

    font-size:9.5px;
    line-height:1;

    font-weight:800;

    letter-spacing:.065em;

    text-transform:uppercase;

    box-shadow:
        0 7px 18px
        rgba(0,0,0,.14);
}


/* =========================================================
   CONTENT
========================================================= */

#idt-india-packages-grid .idt-ipg-content{
    position:absolute;

    left:0;
    right:0;
    bottom:0;

    z-index:3;

    padding:23px 20px 21px;
}

#idt-india-packages-grid .idt-ipg-small{
    display:block;

    margin-bottom:5px;

    color:var(--light-sky);

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.075em;

    text-transform:uppercase;
}

#idt-india-packages-grid .idt-ipg-card h3{
    margin:0 0 8px;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:20px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:-.2px;
}

#idt-india-packages-grid .idt-ipg-card p{
    margin:0;

    color:
        rgba(255,255,255,.76);

    font-size:13px;
    line-height:1.62;
}


/* =========================================================
   CARD FOOT
========================================================= */

#idt-india-packages-grid .idt-ipg-foot{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:12px;

    margin-top:15px;
    padding-top:13px;

    border-top:
        1px solid
        rgba(255,255,255,.14);
}

#idt-india-packages-grid .idt-ipg-meta{
    display:flex;

    align-items:center;

    gap:5px;

    min-width:0;

    color:
        rgba(255,255,255,.68);

    font-size:10.5px;
    line-height:1.25;

    font-weight:700;
}

#idt-india-packages-grid .idt-ipg-meta svg{
    width:13px;
    height:13px;

    flex:0 0 13px;

    fill:none;
    stroke:var(--sky);

    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-india-packages-grid .idt-ipg-link{
    display:inline-flex;

    align-items:center;

    gap:6px;

    flex:0 0 auto;

    color:#FFFFFF;

    text-decoration:none !important;

    font-size:10.5px;
    line-height:1;

    font-weight:800;

    transition:
        color .25s ease,
        gap .25s ease;
}

#idt-india-packages-grid .idt-ipg-link:hover{
    color:#FF9A62;

    gap:8px;
}

#idt-india-packages-grid .idt-ipg-link svg{
    width:13px;
    height:13px;

    fill:none;
    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   BOTTOM CTA
========================================================= */

#idt-india-packages-grid .idt-ipg-bottom{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:22px;

    margin-top:28px;

    padding:20px 22px;

    border:
        1px solid
        rgba(12,45,98,.08);

    border-radius:8px;

    background:#FFFFFF;

    box-shadow:
        0 9px 25px
        rgba(12,45,98,.035);
}

#idt-india-packages-grid .idt-ipg-bottom-small{
    display:block;

    margin-bottom:3px;

    color:var(--orange);

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;
}

#idt-india-packages-grid .idt-ipg-bottom h3{
    margin:0;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:18px;
    line-height:1.4;

    font-weight:800;
}

#idt-india-packages-grid .idt-ipg-bottom-btn{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    min-height:43px;

    flex:0 0 auto;

    padding:10px 17px;

    border-radius:5px;

    background:var(--navy);

    color:#FFFFFF;

    text-decoration:none !important;

    font-size:12px;
    line-height:1;

    font-weight:800;

    transition:
        transform .25s ease,
        background .25s ease;
}

#idt-india-packages-grid .idt-ipg-bottom-btn:hover{
    transform:translateY(-2px);

    background:#123B72;
}

#idt-india-packages-grid .idt-ipg-bottom-btn svg{
    width:14px;
    height:14px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   1200
========================================================= */

@media(max-width:1200px){

    #idt-india-packages-grid{
        padding:
            64px 28px 68px;
    }

    #idt-india-packages-grid .idt-ipg-wrap{
        max-width:1060px;
    }

    #idt-india-packages-grid .idt-ipg-grid{
        gap:18px;
    }

    #idt-india-packages-grid .idt-ipg-card{
        height:345px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-india-packages-grid{
        padding:
            56px 20px 60px;
    }

    #idt-india-packages-grid .idt-ipg-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:18px;
    }

    #idt-india-packages-grid .idt-ipg-card{
        height:365px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-india-packages-grid{
        padding:
            48px 15px 52px;
    }

    #idt-india-packages-grid .idt-ipg-head{
        margin-bottom:30px;
    }

    #idt-india-packages-grid .idt-ipg-script{
        font-size:28px;
    }

    #idt-india-packages-grid .idt-ipg-title{
        font-size:29px;
    }

    #idt-india-packages-grid .idt-ipg-lead{
        font-size:15px;
    }

    #idt-india-packages-grid .idt-ipg-grid{
        grid-template-columns:1fr;

        gap:17px;
    }

    #idt-india-packages-grid .idt-ipg-card{
        width:100%;
        max-width:590px;

        height:390px;

        margin:0 auto;
    }

    #idt-india-packages-grid .idt-ipg-bottom{
        flex-direction:column;

        align-items:flex-start;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-india-packages-grid{
        padding:
            42px 13px 46px;
    }

    #idt-india-packages-grid .idt-ipg-script{
        font-size:26px;
    }

    #idt-india-packages-grid .idt-ipg-title{
        font-size:27px;
    }

    #idt-india-packages-grid .idt-ipg-lead{
        font-size:14.5px;
    }

    #idt-india-packages-grid .idt-ipg-card{
        height:355px;
    }

    #idt-india-packages-grid .idt-ipg-content{
        padding:
            20px 17px 18px;
    }

    #idt-india-packages-grid .idt-ipg-card h3{
        font-size:18px;
    }

    #idt-india-packages-grid .idt-ipg-card p{
        font-size:12.7px;
    }

    #idt-india-packages-grid .idt-ipg-bottom{
        padding:
            18px 17px;
    }

    #idt-india-packages-grid .idt-ipg-bottom-btn{
        width:100%;
    }

}


/* =========================================================
   360
========================================================= */

@media(max-width:360px){

    #idt-india-packages-grid{
        padding:
            40px 10px 44px;
    }

    #idt-india-packages-grid .idt-ipg-title{
        font-size:25px;
    }

    #idt-india-packages-grid .idt-ipg-card{
        height:340px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-india-packages-grid *,
    #idt-india-packages-grid *::before,
    #idt-india-packages-grid *::after{
        transition:none !important;
        animation:none !important;
    }

}

</style>


<section id="idt-india-packages-grid">

    <div class="idt-ipg-wrap">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-ipg-head">


            <p class="idt-ipg-script">
                Discover India by Region &amp; Experience
            </p>


            <h2 class="idt-ipg-title">
                All India Tour Packages — Browse by Region &amp; Theme
            </h2>


            <div
                class="idt-ipg-accent"
                aria-hidden="true"
            >
                <span></span>
            </div>


            <p class="idt-ipg-lead">
                Choose a journey based on the destinations and experiences that interest you most, then customise the route and duration around your travel plans.
            </p>


        </div>


        <!-- =================================================
             PACKAGE GRID
        ================================================== -->

        <div class="idt-ipg-grid">


            <!-- =================================================
                 01 GOLDEN TRIANGLE
            ================================================== -->

            <article class="idt-ipg-card">


                <div class="idt-ipg-image">

                    <img
                        src="https://indiadaytrip.com/assets/img/about/about-golden.webp"
                        alt="Golden Triangle Tour Packages"
                        loading="lazy"
                    >

                </div>


                <span class="idt-ipg-label">
                    North India
                </span>


                <div class="idt-ipg-content">

                    <span class="idt-ipg-small">
                        Delhi • Agra • Jaipur
                    </span>

                    <h3>
                        Golden Triangle Tour Packages
                    </h3>

                    <p>
                        Discover three of North India’s most celebrated destinations through a private journey combining heritage, architecture and local culture.
                    </p>


                    <div class="idt-ipg-foot">

                        <div class="idt-ipg-meta">

                            <svg viewBox="0 0 24 24">
                                <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                                <circle cx="12" cy="10" r="2"></circle>
                            </svg>

                            3 Iconic Cities

                        </div>


                        <a
                            class="idt-ipg-link"
                            href="/golden-triangle-tour-packages/"
                        >

                            Explore Tour

                            <svg viewBox="0 0 24 24">
                                <path d="M5 12h14"></path>
                                <path d="m14 7 5 5-5 5"></path>
                            </svg>

                        </a>

                    </div>

                </div>


            </article>


            <!-- =================================================
                 02 TAJ MAHAL
            ================================================== -->

            <article class="idt-ipg-card">


                <div class="idt-ipg-image">

                    <img
                        src="https://indiadaytrip.com/assets/img/about/about-taj.webp"
                        alt="Taj Mahal Tour Packages"
                        loading="lazy"
                    >

                </div>


                <span class="idt-ipg-label">
                    Agra
                </span>


                <div class="idt-ipg-content">

                    <span class="idt-ipg-small">
                        Taj Mahal • Agra Fort
                    </span>

                    <h3>
                        Taj Mahal Tour Packages
                    </h3>

                    <p>
                        Visit the Taj Mahal and discover Agra’s Mughal heritage with flexible private tours from Delhi and other nearby destinations.
                    </p>


                    <div class="idt-ipg-foot">

                        <div class="idt-ipg-meta">

                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M12 7v5l3 2"></path>
                            </svg>

                            Short & Multi-Day

                        </div>


                        <a
                            class="idt-ipg-link"
                            href="/taj-mahal-tour-packages/"
                        >

                            Explore Tour

                            <svg viewBox="0 0 24 24">
                                <path d="M5 12h14"></path>
                                <path d="m14 7 5 5-5 5"></path>
                            </svg>

                        </a>

                    </div>

                </div>


            </article>


            <!-- =================================================
                 03 RAJASTHAN
            ================================================== -->

            <article class="idt-ipg-card">


                <div class="idt-ipg-image">

                    <img
                        src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1200&q=90"
                        alt="Rajasthan Tour Packages"
                        loading="lazy"
                    >

                </div>


                <span class="idt-ipg-label">
                    Royal India
                </span>


                <div class="idt-ipg-content">

                    <span class="idt-ipg-small">
                        Jaipur • Jodhpur • Udaipur
                    </span>

                    <h3>
                        Rajasthan Tour Packages
                    </h3>

                    <p>
                        Explore royal cities, grand forts, historic palaces, lakes and desert landscapes through flexible Rajasthan itineraries.
                    </p>


                    <div class="idt-ipg-foot">

                        <div class="idt-ipg-meta">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 20V8l8-4 8 4v12"></path>
                            </svg>

                            Forts & Palaces

                        </div>


                        <a
                            class="idt-ipg-link"
                            href="/rajasthan-tour-packages/"
                        >

                            Explore Tour

                            <svg viewBox="0 0 24 24">
                                <path d="M5 12h14"></path>
                                <path d="m14 7 5 5-5 5"></path>
                            </svg>

                        </a>

                    </div>

                </div>


            </article>


            <!-- =================================================
                 04 SPIRITUAL INDIA
            ================================================== -->

            <article class="idt-ipg-card">


                <div class="idt-ipg-image">

                    <img
                        src="https://images.unsplash.com/photo-1561361513-2d000a50f0dc?auto=format&fit=crop&w=1200&q=90"
                        alt="Spiritual India Tour Packages"
                        loading="lazy"
                    >

                </div>


                <span class="idt-ipg-label">
                    Cultural Journey
                </span>


                <div class="idt-ipg-content">

                    <span class="idt-ipg-small">
                        Varanasi &amp; Spiritual Cities
                    </span>

                    <h3>
                        Spiritual India Tour Packages
                    </h3>

                    <p>
                        Discover historic spiritual destinations, riverfront traditions and cultural experiences through thoughtfully planned private journeys.
                    </p>


                    <div class="idt-ipg-foot">

                        <div class="idt-ipg-meta">

                            <svg viewBox="0 0 24 24">
                                <path d="M12 3v18"></path>
                                <path d="m7 8 5-5 5 5"></path>
                            </svg>

                            Culture & Heritage

                        </div>


                        <a
                            class="idt-ipg-link"
                            href="https://wa.me/918126052755"
                            target="_blank"
                            rel="noopener"
                        >

                            Plan Tour

                            <svg viewBox="0 0 24 24">
                                <path d="M5 12h14"></path>
                                <path d="m14 7 5 5-5 5"></path>
                            </svg>

                        </a>

                    </div>

                </div>


            </article>


            <!-- =================================================
                 05 HIMALAYAN JOURNEYS
            ================================================== -->

            <article class="idt-ipg-card">


                <div class="idt-ipg-image">

                    <img
                        src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=90"
                        alt="Himalayan India Tour Packages"
                        loading="lazy"
                    >

                </div>


                <span class="idt-ipg-label">
                    Mountains
                </span>


                <div class="idt-ipg-content">

                    <span class="idt-ipg-small">
                        Nature • Mountains • Scenic Routes
                    </span>

                    <h3>
                        Himalayan India Journeys
                    </h3>

                    <p>
                        Add mountain destinations and scenic regional routes to your India holiday for a journey focused on landscapes, nature and slower travel.
                    </p>


                    <div class="idt-ipg-foot">

                        <div class="idt-ipg-meta">

                            <svg viewBox="0 0 24 24">
                                <path d="m3 19 6-9 4 6 3-4 5 7"></path>
                            </svg>

                            Mountain Regions

                        </div>


                        <a
                            class="idt-ipg-link"
                            href="https://wa.me/918126052755"
                            target="_blank"
                            rel="noopener"
                        >

                            Plan Tour

                            <svg viewBox="0 0 24 24">
                                <path d="M5 12h14"></path>
                                <path d="m14 7 5 5-5 5"></path>
                            </svg>

                        </a>

                    </div>

                </div>


            </article>


            <!-- =================================================
                 06 CUSTOM INDIA
            ================================================== -->

            <article class="idt-ipg-card">


                <div class="idt-ipg-image">

                    <img
                        src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=1200&q=90"
                        alt="Custom India Tour Packages"
                        loading="lazy"
                    >

                </div>


                <span class="idt-ipg-label">
                    Designed Around You
                </span>


                <div class="idt-ipg-content">

                    <span class="idt-ipg-small">
                        Your Route • Your Duration
                    </span>

                    <h3>
                        Custom India Tour Packages
                    </h3>

                    <p>
                        Build a private India itinerary around your preferred destinations, number of days and sightseeing interests for a completely flexible journey.
                    </p>


                    <div class="idt-ipg-foot">

                        <div class="idt-ipg-meta">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 6h16"></path>
                                <path d="M4 12h11"></path>
                                <path d="M4 18h8"></path>
                            </svg>

                            Flexible Itinerary

                        </div>


                        <a
                            class="idt-ipg-link"
                            href="https://wa.me/918126052755"
                            target="_blank"
                            rel="noopener"
                        >

                            Customise Tour

                            <svg viewBox="0 0 24 24">
                                <path d="M5 12h14"></path>
                                <path d="m14 7 5 5-5 5"></path>
                            </svg>

                        </a>

                    </div>

                </div>


            </article>


        </div>


        <!-- =================================================
             BOTTOM CTA
        ================================================== -->

        <div class="idt-ipg-bottom">


            <div>

                <span class="idt-ipg-bottom-small">
                    Not Sure Which Route to Choose?
                </span>

                <h3>
                    Share your travel dates and preferred destinations — we can help plan the route.
                </h3>

            </div>


            <a
                class="idt-ipg-bottom-btn"
                href="https://wa.me/918126052755"
                target="_blank"
                rel="noopener"
            >

                Plan My India Tour

                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14"></path>
                    <path d="m14 7 5 5-5 5"></path>
                </svg>

            </a>


        </div>


    </div>

</section>