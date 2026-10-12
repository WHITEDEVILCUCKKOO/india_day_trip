<!-- =========================================================
 INDIA DAY TRIP
 INDIA TOUR PACKAGES
 SECTION 08 — TRAVEL STYLES
 BUDGET / MID-RANGE / LUXURY
 CLEAN PROFESSIONAL COMPARISON
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-travel-styles,
#idt-india-travel-styles *{
    box-sizing:border-box;
}

#idt-india-travel-styles{
    --navy:#0C2D62;
    --blue:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --warm:#FCFAF6;
    --white:#FFFFFF;
    --text:#5A6673;
    --line:#E3E8ED;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:78px 24px 80px;

    background:
        radial-gradient(circle at 6% 10%,rgba(121,189,242,.08),transparent 25%),
        radial-gradient(circle at 95% 90%,rgba(255,93,0,.05),transparent 22%),
        var(--warm);

    font-family:"Manrope",sans-serif;
}

/* =========================================================
   WRAP
========================================================= */

#idt-india-travel-styles .idt-its-wrap{
    width:100%;
    max-width:1180px;
    margin:0 auto;
}

/* =========================================================
   HEADER
========================================================= */

#idt-india-travel-styles .idt-its-head{
    max-width:800px;
    margin:0 auto 42px;
    text-align:center;
}

#idt-india-travel-styles .idt-its-script{
    margin:0 0 8px;
    color:var(--blue);
    font-family:"Montez",cursive;
    font-size:31px;
    line-height:1;
}

#idt-india-travel-styles .idt-its-title{
    margin:0;
    color:var(--navy);
    font-family:"Playfair Display",serif;
    font-size:36px;
    line-height:1.22;
    font-weight:700;
    letter-spacing:-.5px;
}

#idt-india-travel-styles .idt-its-accent{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:7px;
    margin:14px 0 16px;
}

#idt-india-travel-styles .idt-its-accent:before{
    content:"";
    width:40px;
    height:2px;
    background:var(--navy);
}

#idt-india-travel-styles .idt-its-accent span{
    width:7px;
    height:7px;
    background:var(--orange);
    transform:rotate(45deg);
}

#idt-india-travel-styles .idt-its-accent:after{
    content:"";
    width:25px;
    height:2px;
    background:var(--orange);
}

#idt-india-travel-styles .idt-its-lead{
    max-width:720px;
    margin:0 auto;
    color:var(--text);
    font-size:15px;
    line-height:1.75;
}

/* =========================================================
   MAIN GRID
========================================================= */

#idt-india-travel-styles .idt-its-grid{
    display:grid;
    grid-template-columns:repeat(3,minmax(0,1fr));
    gap:0;

    border-top:1px solid var(--line);
    border-bottom:1px solid var(--line);
}

/* =========================================================
   COLUMN
========================================================= */

#idt-india-travel-styles .idt-its-col{
    min-width:0;
    padding:0 28px 31px;
    position:relative;
}

#idt-india-travel-styles .idt-its-col:not(:last-child){
    border-right:1px solid var(--line);
}

/* =========================================================
   IMAGE
========================================================= */

#idt-india-travel-styles .idt-its-image{
    height:205px;
    margin:0 -28px 26px;
    overflow:hidden;
    position:relative;
}

#idt-india-travel-styles .idt-its-image img{
    width:100%;
    height:100%;
    display:block;
    object-fit:cover;
    transition:transform .4s ease;
}

#idt-india-travel-styles .idt-its-col:hover .idt-its-image img{
    transform:scale(1.035);
}

#idt-india-travel-styles .idt-its-image:after{
    content:"";
    position:absolute;
    inset:0;
    background:
        linear-gradient(to top,rgba(7,31,63,.28),transparent 60%);
}

/* =========================================================
   LABEL
========================================================= */

#idt-india-travel-styles .idt-its-label{
    display:inline-flex;
    align-items:center;
    gap:7px;

    margin-bottom:9px;

    color:var(--orange);
    font-size:9.5px;
    line-height:1;
    font-weight:800;
    letter-spacing:.09em;
    text-transform:uppercase;
}

#idt-india-travel-styles .idt-its-label:before{
    content:"";
    width:18px;
    height:2px;
    background:var(--orange);
}

/* =========================================================
   TEXT
========================================================= */

#idt-india-travel-styles .idt-its-col h3{
    margin:0 0 10px;
    color:var(--navy);
    font-family:"Manrope",sans-serif;
    font-size:19px;
    line-height:1.4;
    font-weight:800;
}

#idt-india-travel-styles .idt-its-col > p{
    margin:0;
    color:var(--text);
    font-size:13.7px;
    line-height:1.75;
}

/* =========================================================
   DETAILS
========================================================= */

#idt-india-travel-styles .idt-its-details{
    margin-top:20px;
    padding-top:17px;
    border-top:1px solid var(--line);
}

#idt-india-travel-styles .idt-its-detail{
    display:flex;
    align-items:flex-start;
    gap:10px;
}

#idt-india-travel-styles .idt-its-detail + .idt-its-detail{
    margin-top:11px;
}

#idt-india-travel-styles .idt-its-detail svg{
    width:16px;
    height:16px;
    flex:0 0 16px;
    margin-top:2px;

    fill:none;
    stroke:var(--blue);
    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-india-travel-styles .idt-its-detail span{
    color:#465462;
    font-size:12.3px;
    line-height:1.55;
    font-weight:600;
}

/* =========================================================
   CTA
========================================================= */

#idt-india-travel-styles .idt-its-link{
    display:inline-flex;
    align-items:center;
    gap:7px;

    margin-top:21px;

    color:var(--navy);
    text-decoration:none!important;

    font-size:11.5px;
    line-height:1;
    font-weight:800;
}

#idt-india-travel-styles .idt-its-link svg{
    width:14px;
    height:14px;
    fill:none;
    stroke:currentColor;
    stroke-width:2;
    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-india-travel-styles .idt-its-link:hover{
    color:var(--orange);
}

/* =========================================================
   BOTTOM NOTE
========================================================= */

#idt-india-travel-styles .idt-its-note{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:24px;

    margin-top:28px;
    padding-top:22px;
}

#idt-india-travel-styles .idt-its-note-text{
    max-width:760px;
}

#idt-india-travel-styles .idt-its-note-small{
    display:block;
    margin-bottom:4px;
    color:var(--orange);
    font-size:9.5px;
    line-height:1.2;
    font-weight:800;
    letter-spacing:.08em;
    text-transform:uppercase;
}

#idt-india-travel-styles .idt-its-note h3{
    margin:0;
    color:var(--navy);
    font-family:"Manrope",sans-serif;
    font-size:17px;
    line-height:1.5;
    font-weight:800;
}

#idt-india-travel-styles .idt-its-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:8px;

    min-height:44px;
    padding:11px 17px;

    border-radius:4px;
    background:var(--navy);
    color:#fff;

    text-decoration:none!important;
    white-space:nowrap;

    font-size:11.5px;
    font-weight:800;
}

#idt-india-travel-styles .idt-its-btn:hover{
    background:#123B72;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    #idt-india-travel-styles{
        padding:60px 20px 64px;
    }

    #idt-india-travel-styles .idt-its-grid{
        grid-template-columns:1fr;
        max-width:720px;
        margin:0 auto;
    }

    #idt-india-travel-styles .idt-its-col{
        padding:0 0 30px;
    }

    #idt-india-travel-styles .idt-its-col:not(:last-child){
        border-right:0;
        border-bottom:1px solid var(--line);
        margin-bottom:30px;
    }

    #idt-india-travel-styles .idt-its-image{
        margin:0 0 24px;
        height:280px;
    }
}

@media(max-width:767px){

    #idt-india-travel-styles{
        padding:50px 15px 54px;
    }

    #idt-india-travel-styles .idt-its-script{
        font-size:28px;
    }

    #idt-india-travel-styles .idt-its-title{
        font-size:30px;
    }

    #idt-india-travel-styles .idt-its-lead{
        font-size:14.7px;
    }

    #idt-india-travel-styles .idt-its-note{
        flex-direction:column;
        align-items:flex-start;
    }
}

@media(max-width:430px){

    #idt-india-travel-styles{
        padding:44px 13px 48px;
    }

    #idt-india-travel-styles .idt-its-script{
        font-size:26px;
    }

    #idt-india-travel-styles .idt-its-title{
        font-size:27px;
    }

    #idt-india-travel-styles .idt-its-image{
        height:220px;
    }

    #idt-india-travel-styles .idt-its-col h3{
        font-size:18px;
    }

    #idt-india-travel-styles .idt-its-col > p{
        font-size:13.3px;
    }

    #idt-india-travel-styles .idt-its-btn{
        width:100%;
    }
}

@media(max-width:360px){

    #idt-india-travel-styles{
        padding:40px 10px 44px;
    }

    #idt-india-travel-styles .idt-its-title{
        font-size:25px;
    }

}

</style>

<section id="idt-india-travel-styles">

    <div class="idt-its-wrap">

        <!-- HEADER -->
        <div class="idt-its-head">

            <p class="idt-its-script">
                Choose Your Travel Style
            </p>

            <h2 class="idt-its-title">
                Budget, Mid-Range & Luxury India Tours
            </h2>

            <div class="idt-its-accent">
                <span></span>
            </div>

            <p class="idt-its-lead">
                The same India route can be experienced in different ways. Choose the travel style that best matches your comfort expectations, accommodation preferences and overall journey.
            </p>

        </div>


        <!-- GRID -->
        <div class="idt-its-grid">


            <!-- BUDGET -->
            <article class="idt-its-col">

                <div class="idt-its-image">
                    <img
                        src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1000&q=88"
                        alt="Essential India travel"
                        loading="lazy"
                    >
                </div>

                <span class="idt-its-label">
                    Essential Travel
                </span>

                <h3>
                    Comfortable & Practical India Tours
                </h3>

                <p>
                    A straightforward travel style focused on the destinations and experiences that matter most, with practical accommodation choices and an efficiently planned route.
                </p>

                <div class="idt-its-details">

                    <div class="idt-its-detail">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 19h18"/>
                            <path d="M5 19v-7h14v7"/>
                            <path d="M7 12V8h10v4"/>
                        </svg>
                        <span>Practical accommodation options</span>
                    </div>

                    <div class="idt-its-detail">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 18 9 3l3 9 3-6 5 12"/>
                        </svg>
                        <span>Focus on major sights and key destinations</span>
                    </div>

                    <div class="idt-its-detail">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 17h14"/>
                            <path d="M6 17v2M18 17v2"/>
                            <path d="M4 13l2-6h12l2 6"/>
                            <path d="M3 13h18v4H3z"/>
                        </svg>
                        <span>Private route planning available</span>
                    </div>

                </div>

                <a class="idt-its-link"
                   href="https://wa.me/918126052755"
                   target="_blank"
                   rel="noopener">
                    Discuss This Travel Style

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"/>
                        <path d="m14 7 5 5-5 5"/>
                    </svg>
                </a>

            </article>


            <!-- MID RANGE -->
            <article class="idt-its-col">

                <div class="idt-its-image">
                    <img
                        src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1000&q=88"
                        alt="Premium Rajasthan journey"
                        loading="lazy"
                    >
                </div>

                <span class="idt-its-label">
                    Balanced Comfort
                </span>

                <h3>
                    Mid-Range India Tours
                </h3>

                <p>
                    A balanced option for travellers who want comfortable stays, well-paced sightseeing and a more polished overall journey without moving into a fully luxury travel style.
                </p>

                <div class="idt-its-details">

                    <div class="idt-its-detail">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 20h16"/>
                            <path d="M6 20V7h12v13"/>
                            <path d="M9 11h2M13 11h2M9 15h2M13 15h2"/>
                        </svg>
                        <span>Comfort-focused hotel selection</span>
                    </div>

                    <div class="idt-its-detail">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="8"/>
                            <path d="M12 8v4l3 2"/>
                        </svg>
                        <span>Balanced sightseeing and travel time</span>
                    </div>

                    <div class="idt-its-detail">
                        <svg viewBox="0 0 24 24">
                            <path d="M9 18 3 21V6l6-3 6 3 6-3v15l-6 3-6-3z"/>
                            <path d="M9 3v15M15 6v15"/>
                        </svg>
                        <span>Flexible regional and multi-city routes</span>
                    </div>

                </div>

                <a class="idt-its-link"
                   href="https://wa.me/918126052755"
                   target="_blank"
                   rel="noopener">
                    Discuss This Travel Style

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"/>
                        <path d="m14 7 5 5-5 5"/>
                    </svg>
                </a>

            </article>


            <!-- LUXURY -->
            <article class="idt-its-col">

                <div class="idt-its-image">
                    <img
                        src="https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1000&q=88"
                        alt="Luxury India heritage travel"
                        loading="lazy"
                    >
                </div>

                <span class="idt-its-label">
                    Elevated Journey
                </span>

                <h3>
                    Luxury India Tours
                </h3>

                <p>
                    Designed for travellers who prefer refined accommodation, a slower journey rhythm and a higher level of comfort while exploring India’s major destinations.
                </p>

                <div class="idt-its-details">

                    <div class="idt-its-detail">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 18h16"/>
                            <path d="M6 18V8l6-4 6 4v10"/>
                            <path d="M9 18v-5h6v5"/>
                        </svg>
                        <span>Premium and heritage-style stays</span>
                    </div>

                    <div class="idt-its-detail">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 3 14.2 8.2 20 9l-4.2 4 1.1 5.7L12 16l-4.9 2.7L8.2 13 4 9l5.8-.8z"/>
                        </svg>
                        <span>Comfort-focused travel experience</span>
                    </div>

                    <div class="idt-its-detail">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="8"/>
                            <path d="m8.5 12 2.2 2.2 4.8-5"/>
                        </svg>
                        <span>More time for selected destinations</span>
                    </div>

                </div>

                <a class="idt-its-link"
                   href="https://wa.me/918126052755"
                   target="_blank"
                   rel="noopener">
                    Discuss This Travel Style

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"/>
                        <path d="m14 7 5 5-5 5"/>
                    </svg>
                </a>

            </article>

        </div>


        <!-- BOTTOM NOTE -->
        <div class="idt-its-note">

            <div class="idt-its-note-text">

                <span class="idt-its-note-small">
                    Your Comfort Level, Your Choice
                </span>

                <h3>
                    Not sure which travel style suits you? Share your expectations and preferred destinations and we can help shape the right option.
                </h3>

            </div>

            <a class="idt-its-btn"
               href="https://wa.me/918126052755"
               target="_blank"
               rel="noopener">
                Plan My India Tour
            </a>

        </div>

    </div>

</section>