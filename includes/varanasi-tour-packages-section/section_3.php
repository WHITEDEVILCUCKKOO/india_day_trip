```html
<!-- =========================================================
     INDIA DAY TRIP
     VARANASI TOUR PACKAGES
     SECTION 02
     COMPLETE FINAL CODE — 4 CARDS
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-varanasi-packages,
#idt-varanasi-packages *{
    box-sizing:border-box;
}

#idt-varanasi-packages{

    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#123B72;
    --mid:#2E6095;
    --sky:#79BDF2;

    --orange:#FF5D00;
    --orange-soft:#FF7A2F;

    --text:#5F6D7E;
    --line:#E4E9EE;

    --white:#FFFFFF;
    --warm:#FCFAF6;
    --cream:#F7F3E9;

    position:relative;
    width:100%;
    max-width:100%;
    overflow:hidden;

    padding:68px 24px 72px;

    background:
        radial-gradient(
            circle at 8% 10%,
            rgba(121,189,242,.08),
            transparent 23%
        ),
        radial-gradient(
            circle at 94% 90%,
            rgba(255,93,0,.035),
            transparent 22%
        ),
        #FCFAF6;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-varanasi-packages .idt-pack-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1180px;

    margin:0 auto;
}


/* =========================================================
   SECTION HEADER
========================================================= */

#idt-varanasi-packages .idt-pack-head{

    width:100%;
    max-width:730px;

    margin:0 auto 36px;

    text-align:center;
}

#idt-varanasi-packages .idt-pack-script{

    margin:0 0 6px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-varanasi-packages .idt-pack-title{

    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:34px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.5px;
}

#idt-varanasi-packages .idt-pack-accent{

    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    margin:14px auto 0;
}

#idt-varanasi-packages .idt-pack-accent::before{

    content:"";

    width:50px;
    height:2px;

    border-radius:30px;

    background:
        linear-gradient(
            90deg,
            var(--blue),
            var(--orange)
        );
}

#idt-varanasi-packages .idt-pack-accent::after{

    content:"";

    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-varanasi-packages .idt-pack-lead{

    max-width:675px;

    margin:14px auto 0;

    color:var(--text);

    font-size:16px;
    line-height:1.72;

    font-weight:400;
}


/* =========================================================
   GRID
========================================================= */

#idt-varanasi-packages .idt-pack-grid{

    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap:21px;
}


/* =========================================================
   CARD
========================================================= */

#idt-varanasi-packages .idt-pack-card{

    position:relative;

    display:flex;
    flex-direction:column;

    width:100%;
    min-width:0;

    overflow:hidden;

    border:
        1px solid
        rgba(12,45,98,.10);

    border-radius:9px;

    background:#FFFFFF;

    box-shadow:
        0 8px 24px
        rgba(12,45,98,.06);

    transform:translateY(0);

    transition:
        transform .38s ease,
        box-shadow .38s ease,
        border-color .38s ease;
}

#idt-varanasi-packages .idt-pack-card:hover{

    transform:translateY(-5px);

    border-color:
        rgba(46,96,149,.20);

    box-shadow:
        0 18px 38px
        rgba(12,45,98,.12);
}


/* =========================================================
   IMAGE
========================================================= */

#idt-varanasi-packages .idt-pack-image{

    position:relative;

    width:100%;
    height:205px;

    flex:0 0 205px;

    overflow:hidden;

    isolation:isolate;

    background:
        linear-gradient(
            135deg,
            #DDE6EF,
            #EEF3F7
        );
}

#idt-varanasi-packages .idt-pack-image img{

    position:relative;
    z-index:1;

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transform:scale(1.001);

    transition:
        transform 1.25s cubic-bezier(.2,.7,.2,1);
}

#idt-varanasi-packages .idt-pack-card:hover .idt-pack-image img{
    transform:scale(1.065);
}


/* =========================================================
   IMAGE OVERLAY
========================================================= */

#idt-varanasi-packages .idt-pack-overlay{

    position:absolute;
    inset:0;
    z-index:2;

    pointer-events:none;

    background:
        linear-gradient(
            180deg,
            rgba(3,18,38,.02) 28%,
            rgba(3,18,38,.08) 58%,
            rgba(3,18,38,.32) 100%
        );
}


/* =========================================================
   SLOW SHINE
========================================================= */

#idt-varanasi-packages .idt-pack-shine{

    position:absolute;

    top:-45%;
    left:-95%;

    z-index:4;

    width:48%;
    height:190%;

    pointer-events:none;

    opacity:0;

    transform:rotate(18deg);

    background:
        linear-gradient(
            90deg,
            rgba(255,255,255,0) 0%,
            rgba(255,255,255,.04) 20%,
            rgba(255,255,255,.16) 38%,
            rgba(255,255,255,.42) 50%,
            rgba(255,255,255,.15) 63%,
            rgba(255,255,255,.03) 80%,
            rgba(255,255,255,0) 100%
        );
}

#idt-varanasi-packages .idt-pack-card:hover .idt-pack-shine{

    animation:
        idtVaranasiPackShine
        1.75s
        cubic-bezier(.22,.61,.36,1)
        forwards;
}

@keyframes idtVaranasiPackShine{

    0%{
        left:-95%;
        opacity:0;
    }

    8%{
        opacity:.20;
    }

    22%{
        opacity:.72;
    }

    78%{
        opacity:.68;
    }

    94%{
        opacity:.18;
    }

    100%{
        left:145%;
        opacity:0;
    }

}


/* =========================================================
   BADGE
========================================================= */

#idt-varanasi-packages .idt-pack-badge{

    position:absolute;

    top:13px;
    left:13px;

    z-index:6;

    display:inline-flex;

    align-items:center;
    justify-content:center;

    min-height:30px;

    padding:7px 10px;

    border:
        1px solid
        rgba(255,255,255,.14);

    border-radius:5px;

    background:
        rgba(12,45,98,.93);

    color:#FFFFFF;

    font-size:11px;
    line-height:1;

    font-weight:700;

    letter-spacing:.02em;

    box-shadow:
        0 7px 18px
        rgba(0,0,0,.15);

    backdrop-filter:blur(7px);
    -webkit-backdrop-filter:blur(7px);
}


/* =========================================================
   IMAGE BOTTOM
========================================================= */

#idt-varanasi-packages .idt-pack-image-bottom{

    position:absolute;

    left:13px;
    right:13px;
    bottom:11px;

    z-index:5;

    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:10px;
}

#idt-varanasi-packages .idt-pack-image-bottom span{

    display:inline-flex;

    align-items:center;

    gap:5px;

    color:rgba(255,255,255,.95);

    font-size:11px;
    line-height:1.3;

    font-weight:700;

    text-shadow:
        0 2px 8px
        rgba(0,0,0,.35);
}


/* =========================================================
   BODY
========================================================= */

#idt-varanasi-packages .idt-pack-body{

    display:flex;
    flex-direction:column;

    flex:1;

    padding:18px 17px 18px;
}


/* =========================================================
   META
========================================================= */

#idt-varanasi-packages .idt-pack-meta{

    display:flex;

    align-items:center;
    flex-wrap:wrap;

    gap:8px 13px;

    margin-bottom:12px;

    color:#758293;

    font-size:12.5px;
    line-height:1.4;

    font-weight:600;
}

#idt-varanasi-packages .idt-pack-meta-item{

    display:inline-flex;

    align-items:center;

    gap:5px;
}

#idt-varanasi-packages .idt-pack-meta-item::before{

    content:"";

    width:5px;
    height:5px;

    flex:0 0 5px;

    border-radius:50%;

    background:var(--sky);
}


/* =========================================================
   CARD TITLE
========================================================= */

#idt-varanasi-packages .idt-pack-name{

    min-height:54px;

    margin:0 0 11px;

    color:var(--navy);

    font-family:
        "Manrope",
        Arial,
        sans-serif;

    font-size:20px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:-.35px;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#idt-varanasi-packages .idt-pack-text{

    margin:0;

    color:var(--text);

    font-size:14px;
    line-height:1.68;

    font-weight:400;
}


/* =========================================================
   FEATURES
========================================================= */

#idt-varanasi-packages .idt-pack-features{

    display:flex;

    align-items:center;
    flex-wrap:wrap;

    gap:7px;

    margin-top:14px;
}

#idt-varanasi-packages .idt-pack-feature{

    display:inline-flex;

    align-items:center;

    gap:5px;

    min-height:27px;

    padding:6px 9px;

    border-radius:4px;

    background:#F1F6FB;

    color:var(--blue);

    font-size:11.5px;
    line-height:1.2;

    font-weight:700;
}

#idt-varanasi-packages .idt-pack-feature.orange{

    background:#FFF2EA;

    color:var(--orange);
}


/* =========================================================
   BUTTONS
========================================================= */

#idt-varanasi-packages .idt-pack-actions{

    display:grid;

    grid-template-columns:
        1fr 1fr;

    gap:8px;

    margin-top:auto;

    padding-top:17px;
}

#idt-varanasi-packages .idt-pack-outline,
#idt-varanasi-packages .idt-pack-btn{

    display:inline-flex;

    align-items:center;
    justify-content:center;

    min-height:41px;

    padding:10px 11px;

    border-radius:5px;

    text-decoration:none !important;

    font-family:"Manrope",Arial,sans-serif;

    font-size:12px;
    line-height:1;

    font-weight:700;

    transition:
        transform .3s ease,
        background .3s ease,
        color .3s ease,
        border-color .3s ease,
        box-shadow .3s ease;
}

#idt-varanasi-packages .idt-pack-outline{

    border:
        1px solid
        rgba(255,93,0,.50);

    background:#FFFFFF;

    color:var(--orange) !important;
}

#idt-varanasi-packages .idt-pack-outline:hover{

    transform:translateY(-2px);

    background:#FFF5EF;

    border-color:var(--orange);

    color:var(--orange) !important;
}

#idt-varanasi-packages .idt-pack-btn{

    border:
        1px solid
        var(--navy);

    background:var(--navy);

    color:#FFFFFF !important;

    box-shadow:
        0 8px 18px
        rgba(12,45,98,.12);
}

#idt-varanasi-packages .idt-pack-btn:hover{

    transform:translateY(-2px);

    background:var(--blue);

    border-color:var(--blue);

    color:#FFFFFF !important;

    box-shadow:
        0 10px 22px
        rgba(12,45,98,.18);
}


/* =========================================================
   MAIN CTA
========================================================= */

#idt-varanasi-packages .idt-pack-bottom{

    margin-top:29px;

    text-align:center;
}

#idt-varanasi-packages .idt-pack-main-btn{

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    min-height:46px;

    padding:12px 20px;

    border-radius:6px;

    background:var(--navy);

    color:#FFFFFF !important;

    text-decoration:none !important;

    font-size:13px;
    line-height:1;

    font-weight:700;

    box-shadow:
        0 11px 24px
        rgba(12,45,98,.16);

    transition:
        transform .3s ease,
        background .3s ease,
        box-shadow .3s ease;
}

#idt-varanasi-packages .idt-pack-main-btn:hover{

    transform:translateY(-2px);

    background:var(--blue);

    color:#FFFFFF !important;

    box-shadow:
        0 15px 30px
        rgba(12,45,98,.21);
}

#idt-varanasi-packages .idt-pack-main-btn svg{

    width:16px;
    height:16px;

    fill:none;

    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RESPONSIVE — 1200
========================================================= */

@media(max-width:1200px){

    #idt-varanasi-packages{

        padding:62px 28px 65px;
    }

    #idt-varanasi-packages .idt-pack-container{
        max-width:1060px;
    }

    #idt-varanasi-packages .idt-pack-grid{
        gap:18px;
    }

    #idt-varanasi-packages .idt-pack-image{

        height:195px;
        flex-basis:195px;
    }

    #idt-varanasi-packages .idt-pack-lead{
        font-size:15px;
    }

    #idt-varanasi-packages .idt-pack-name{
        font-size:19px;
    }

}


/* =========================================================
   RESPONSIVE — TABLET
========================================================= */

@media(max-width:991px){

    #idt-varanasi-packages{

        padding:54px 20px 58px;
    }

    #idt-varanasi-packages .idt-pack-grid{

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:18px;
    }

    #idt-varanasi-packages .idt-pack-image{

        height:215px;
        flex-basis:215px;
    }

    #idt-varanasi-packages .idt-pack-lead{
        font-size:14.5px;
    }

    #idt-varanasi-packages .idt-pack-name{
        font-size:19px;
    }

    #idt-varanasi-packages .idt-pack-text{
        font-size:13.5px;
    }

}


/* =========================================================
   RESPONSIVE — MOBILE
========================================================= */

@media(max-width:767px){

    #idt-varanasi-packages{

        padding:48px 15px 52px;
    }

    #idt-varanasi-packages .idt-pack-head{
        margin-bottom:30px;
    }

    #idt-varanasi-packages .idt-pack-grid{
        grid-template-columns:1fr;
    }

    #idt-varanasi-packages .idt-pack-card{

        width:100%;
        max-width:560px;

        margin:0 auto;
    }

    #idt-varanasi-packages .idt-pack-image{

        height:245px;
        flex-basis:245px;
    }

    #idt-varanasi-packages .idt-pack-lead{

        max-width:580px;

        font-size:14px;
        line-height:1.7;
    }

    #idt-varanasi-packages .idt-pack-meta{
        font-size:12px;
    }

    #idt-varanasi-packages .idt-pack-name{

        min-height:auto;

        font-size:19px;
        line-height:1.4;
    }

    #idt-varanasi-packages .idt-pack-text{

        font-size:13.5px;

        line-height:1.65;
    }

    #idt-varanasi-packages .idt-pack-feature{
        font-size:11px;
    }

}


/* =========================================================
   RESPONSIVE — SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-varanasi-packages{

        padding:42px 13px 46px;
    }

    #idt-varanasi-packages .idt-pack-image{

        height:215px;
        flex-basis:215px;
    }

    #idt-varanasi-packages .idt-pack-body{

        padding:16px 15px 17px;
    }

    #idt-varanasi-packages .idt-pack-lead{
        font-size:13.5px;
    }

    #idt-varanasi-packages .idt-pack-name{
        font-size:18px;
    }

    #idt-varanasi-packages .idt-pack-text{
        font-size:13px;
    }

    #idt-varanasi-packages .idt-pack-meta{
        font-size:11.5px;
    }

    #idt-varanasi-packages .idt-pack-image-bottom span{
        font-size:10px;
    }

}


/* =========================================================
   RESPONSIVE — EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-varanasi-packages{

        padding:39px 10px 43px;
    }

    #idt-varanasi-packages .idt-pack-image{

        height:195px;
        flex-basis:195px;
    }

    #idt-varanasi-packages .idt-pack-actions{
        grid-template-columns:1fr;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-varanasi-packages *,
    #idt-varanasi-packages *::before,
    #idt-varanasi-packages *::after{

        animation:none !important;
        transition:none !important;
    }

}

</style>


<section id="idt-varanasi-packages">

    <div class="idt-pack-container">


        <!-- =====================================================
             SECTION HEADER
        ====================================================== -->

        <div class="idt-pack-head">

            <p class="idt-pack-script">
                Find Your Perfect Journey
            </p>

            <h2 class="idt-pack-title">
                Choose Your Varanasi Tour Package
            </h2>

            <div
                class="idt-pack-accent"
                aria-hidden="true">
            </div>

            <p class="idt-pack-lead">
                Explore our carefully planned Varanasi tours and choose the journey that best matches your schedule, spiritual interests and the places you want to experience.
            </p>

        </div>


        <!-- =====================================================
             TOUR GRID
        ====================================================== -->

        <div class="idt-pack-grid">


            <!-- =================================================
                 CARD 01
                 VARANASI DAY TOUR
            ================================================== -->

            <article class="idt-pack-card">

                <div class="idt-pack-image">

                    <img
                        src="https://images.unsplash.com/photo-1561361058-c24e02d2e44d?auto=format&fit=crop&w=1400&q=90"
                        alt="Varanasi Day Tour"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/about/about-same.webp';">

                    <span class="idt-pack-overlay"></span>
                    <span class="idt-pack-shine"></span>

                    <span class="idt-pack-badge">
                        Day Tour
                    </span>

                    <div class="idt-pack-image-bottom">
                        <span>1 Day</span>
                        <span>Varanasi</span>
                    </div>

                </div>


                <div class="idt-pack-body">

                    <div class="idt-pack-meta">

                        <span class="idt-pack-meta-item">
                            Same Day
                        </span>

                        <span class="idt-pack-meta-item">
                            City Highlights
                        </span>

                    </div>


                    <h3 class="idt-pack-name">
                        Varanasi Day Tour
                    </h3>


                    <p class="idt-pack-text">
                        Experience the spiritual heart of Varanasi in a single day with time to explore sacred ghats, temples, local landmarks and the timeless atmosphere of the River Ganges.
                    </p>


                    <div class="idt-pack-features">

                        <span class="idt-pack-feature">
                            1 Day
                        </span>

                        <span class="idt-pack-feature orange">
                            Varanasi
                        </span>

                    </div>


                    <div class="idt-pack-actions">

                        <a
                            href="https://indiadaytrip.com/tour/varanasi-day-tour"
                            data-idt-url="https://indiadaytrip.com/tour/varanasi-day-tour"
                            target="_self"
                            class="idt-pack-outline idt-force-link">
                            View Details
                        </a>

                        <a
                            href="https://wa.me/918126052755?text=Hello%20India%20Day%20Trip%2C%20I%20want%20details%20about%20the%20Varanasi%20Day%20Tour."
                            target="_blank"
                            rel="noopener noreferrer"
                            class="idt-pack-btn">
                            Enquire Now
                        </a>

                    </div>

                </div>

            </article>


            <!-- =================================================
                 CARD 02
                 2 DAYS VARANASI TOUR
            ================================================== -->

            <article class="idt-pack-card">

                <div class="idt-pack-image">

                    <img
                        src="https://images.unsplash.com/photo-1561359313-0639aad49ca6?auto=format&fit=crop&w=1400&q=90"
                        alt="2 Days Varanasi Tour"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/about/about-same.webp';">

                    <span class="idt-pack-overlay"></span>
                    <span class="idt-pack-shine"></span>

                    <span class="idt-pack-badge">
                        2 Days
                    </span>

                    <div class="idt-pack-image-bottom">
                        <span>2 Days</span>
                        <span>Varanasi</span>
                    </div>

                </div>


                <div class="idt-pack-body">

                    <div class="idt-pack-meta">

                        <span class="idt-pack-meta-item">
                            Spiritual Tour
                        </span>

                        <span class="idt-pack-meta-item">
                            Private Journey
                        </span>

                    </div>


                    <h3 class="idt-pack-name">
                        2 Days Varanasi Tour
                    </h3>


                    <p class="idt-pack-text">
                        Discover the essential sights of Varanasi over two days, including sacred ghats, temples and memorable experiences along the River Ganges.
                    </p>


                    <div class="idt-pack-features">

                        <span class="idt-pack-feature">
                            2 Days
                        </span>

                        <span class="idt-pack-feature orange">
                            Varanasi
                        </span>

                    </div>


                    <div class="idt-pack-actions">

                        <a
                            href="https://indiadaytrip.com/tour/2-days-varanasi-tour"
                            data-idt-url="https://indiadaytrip.com/tour/2-days-varanasi-tour"
                            target="_self"
                            class="idt-pack-outline idt-force-link">
                            View Details
                        </a>

                        <a
                            href="https://wa.me/918126052755?text=Hello%20India%20Day%20Trip%2C%20I%20want%20details%20about%20the%202%20Days%20Varanasi%20Tour."
                            target="_blank"
                            rel="noopener noreferrer"
                            class="idt-pack-btn">
                            Enquire Now
                        </a>

                    </div>

                </div>

            </article>


            <!-- =================================================
                 CARD 03
                 VARANASI AND AYODHYA TOUR
            ================================================== -->

            <article class="idt-pack-card">

                <div class="idt-pack-image">

                    <img
                        src="https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=1400&q=90"
                        alt="Varanasi and Ayodhya Tour"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/about/about-same.webp';">

                    <span class="idt-pack-overlay"></span>
                    <span class="idt-pack-shine"></span>

                    <span class="idt-pack-badge">
                        Spiritual
                    </span>

                    <div class="idt-pack-image-bottom">
                        <span>Multi-Day</span>
                        <span>Varanasi → Ayodhya</span>
                    </div>

                </div>


                <div class="idt-pack-body">

                    <div class="idt-pack-meta">

                        <span class="idt-pack-meta-item">
                            Pilgrimage Tour
                        </span>

                        <span class="idt-pack-meta-item">
                            Private Tour
                        </span>

                    </div>


                    <h3 class="idt-pack-name">
                        Varanasi and Ayodhya Tour
                    </h3>


                    <p class="idt-pack-text">
                        Explore two of North India's most important spiritual destinations with a private journey through the sacred traditions, temples and heritage of Varanasi and Ayodhya.
                    </p>


                    <div class="idt-pack-features">

                        <span class="idt-pack-feature">
                            Varanasi
                        </span>

                        <span class="idt-pack-feature orange">
                            Ayodhya
                        </span>

                    </div>


                    <div class="idt-pack-actions">

                        <a
                            href="https://indiadaytrip.com/tour/varanasi-and-ayodhya-tour"
                            data-idt-url="https://indiadaytrip.com/tour/varanasi-and-ayodhya-tour"
                            target="_self"
                            class="idt-pack-outline idt-force-link">
                            View Details
                        </a>

                        <a
                            href="https://wa.me/918126052755?text=Hello%20India%20Day%20Trip%2C%20I%20want%20details%20about%20the%20Varanasi%20and%20Ayodhya%20Tour."
                            target="_blank"
                            rel="noopener noreferrer"
                            class="idt-pack-btn">
                            Enquire Now
                        </a>

                    </div>

                </div>

            </article>


            <!-- =================================================
                 CARD 04
                 DELHI VARANASI SARNATH
            ================================================== -->

            <article class="idt-pack-card">

                <div class="idt-pack-image">

                    <img
                        src="https://images.unsplash.com/photo-1599831069477-b2acdc0bcb91?auto=format&fit=crop&w=1400&q=90"
                        alt="From Delhi Varanasi and Sarnath Tour"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/about/about-same.webp';">

                    <span class="idt-pack-overlay"></span>
                    <span class="idt-pack-shine"></span>

                    <span class="idt-pack-badge">
                        From Delhi
                    </span>

                    <div class="idt-pack-image-bottom">
                        <span>Private Tour</span>
                        <span>Delhi → Varanasi</span>
                    </div>

                </div>


                <div class="idt-pack-body">

                    <div class="idt-pack-meta">

                        <span class="idt-pack-meta-item">
                            Varanasi
                        </span>

                        <span class="idt-pack-meta-item">
                            Sarnath
                        </span>

                    </div>


                    <h3 class="idt-pack-name">
                        From Delhi : Varanasi and Sarnath Tour
                    </h3>


                    <p class="idt-pack-text">
                        Travel from Delhi to Varanasi and discover the sacred ghats, temples and spiritual atmosphere of the city along with the historic Buddhist site of Sarnath.
                    </p>


                    <div class="idt-pack-features">

                        <span class="idt-pack-feature">
                            Varanasi
                        </span>

                        <span class="idt-pack-feature orange">
                            Sarnath
                        </span>

                    </div>


                    <div class="idt-pack-actions">

                        <a
                            href="https://indiadaytrip.com/tour/from-delhi-varanasi-and-sarnath-tour"
                            data-idt-url="https://indiadaytrip.com/tour/from-delhi-varanasi-and-sarnath-tour"
                            target="_self"
                            class="idt-pack-outline idt-force-link">
                            View Details
                        </a>

                        <a
                            href="https://wa.me/918126052755?text=Hello%20India%20Day%20Trip%2C%20I%20want%20details%20about%20the%20From%20Delhi%20Varanasi%20and%20Sarnath%20Tour."
                            target="_blank"
                            rel="noopener noreferrer"
                            class="idt-pack-btn">
                            Enquire Now
                        </a>

                    </div>

                </div>

            </article>


        </div>


        <!-- =====================================================
             BOTTOM CTA
        ====================================================== -->

        <div class="idt-pack-bottom">

            <a
                href="https://wa.me/918126052755?text=Hello%20India%20Day%20Trip%2C%20I%20want%20to%20customise%20a%20Varanasi%20Tour."
                target="_blank"
                rel="noopener noreferrer"
                class="idt-pack-main-btn">

                Customise Your Varanasi Tour

                <svg viewBox="0 0 24 24">
                    <path d="M7 17 17 7"></path>
                    <path d="M7 7h10v10"></path>
                </svg>

            </a>

        </div>


    </div>


    <!-- =========================================================
         EXACT URL PROTECTION
    ========================================================= -->

    <script>

    (function(){

        "use strict";

        function initIdtExactLinks(){

            var root =
                document.getElementById(
                    "idt-varanasi-packages"
                );

            if(!root) return;


            var links =
                root.querySelectorAll(
                    "a.idt-force-link[data-idt-url]"
                );


            links.forEach(function(link){

                var exactUrl =
                    link.getAttribute(
                        "data-idt-url"
                    );

                if(!exactUrl) return;


                link.setAttribute(
                    "href",
                    exactUrl
                );

                link.setAttribute(
                    "target",
                    "_self"
                );

                link.removeAttribute(
                    "onclick"
                );

            });


            root.addEventListener(
                "click",
                function(event){

                    var link =
                        event.target.closest(
                            "a.idt-force-link[data-idt-url]"
                        );

                    if(
                        !link ||
                        !root.contains(link)
                    ){
                        return;
                    }


                    var exactUrl =
                        link.getAttribute(
                            "data-idt-url"
                        );

                    if(!exactUrl) return;


                    event.preventDefault();

                    event.stopPropagation();


                    if(
                        typeof event.stopImmediatePropagation
                        === "function"
                    ){

                        event.stopImmediatePropagation();

                    }


                    window.location.assign(
                        exactUrl
                    );

                },
                true
            );

        }


        if(
            document.readyState === "loading"
        ){

            document.addEventListener(
                "DOMContentLoaded",
                initIdtExactLinks
            );

        }else{

            initIdtExactLinks();

        }

    })();

    </script>


</section>
```
