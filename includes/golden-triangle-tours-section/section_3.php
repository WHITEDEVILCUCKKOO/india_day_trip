<!-- =========================================================
     INDIA DAY TRIP
     GOLDEN TRIANGLE TOUR PACKAGES
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-golden-packages,
#idt-golden-packages *{
    box-sizing:border-box;
}

#idt-golden-packages{

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

#idt-golden-packages .idt-pack-container{
    position:relative;
    z-index:2;
    width:100%;
    max-width:1180px;
    margin:0 auto;
}

#idt-golden-packages .idt-pack-head{
    width:100%;
    max-width:730px;
    margin:0 auto 36px;
    text-align:center;
}

#idt-golden-packages .idt-pack-script{
    margin:0 0 6px;
    color:var(--blue);
    font-family:"Montez",cursive;
    font-size:31px;
    line-height:1;
    font-weight:400;
}

#idt-golden-packages .idt-pack-title{
    margin:0;
    color:var(--navy);
    font-family:"Playfair Display",Georgia,serif;
    font-size:34px;
    line-height:1.2;
    font-weight:700;
    letter-spacing:-.5px;
}

#idt-golden-packages .idt-pack-accent{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:7px;
    margin:14px auto 0;
}

#idt-golden-packages .idt-pack-accent::before{
    content:"";
    width:50px;
    height:2px;
    border-radius:30px;
    background:linear-gradient(90deg,var(--blue),var(--orange));
}

#idt-golden-packages .idt-pack-accent::after{
    content:"";
    width:6px;
    height:6px;
    background:var(--orange);
    transform:rotate(45deg);
}

#idt-golden-packages .idt-pack-lead{
    max-width:675px;
    margin:14px auto 0;
    color:var(--text);
    font-size:16px;
    line-height:1.72;
    font-weight:400;
}

#idt-golden-packages .idt-pack-grid{
    display:grid;
    grid-template-columns:repeat(3,minmax(0,1fr));
    gap:21px;
}

#idt-golden-packages .idt-pack-card{
    position:relative;
    display:flex;
    flex-direction:column;
    width:100%;
    min-width:0;
    overflow:hidden;

    border:1px solid rgba(12,45,98,.10);
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

#idt-golden-packages .idt-pack-card:hover{
    transform:translateY(-5px);
    border-color:rgba(46,96,149,.20);
    box-shadow:0 18px 38px rgba(12,45,98,.12);
}

#idt-golden-packages .idt-pack-image{
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

#idt-golden-packages .idt-pack-image img{
    position:relative;
    z-index:1;
    display:block;
    width:100%;
    height:100%;
    object-fit:cover;
    object-position:center;
    transform:scale(1.001);

    transition:
        transform 1.25s
        cubic-bezier(.2,.7,.2,1);
}

#idt-golden-packages .idt-pack-card:hover .idt-pack-image img{
    transform:scale(1.065);
}

#idt-golden-packages .idt-pack-overlay{
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

#idt-golden-packages .idt-pack-shine{
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

#idt-golden-packages .idt-pack-card:hover .idt-pack-shine{
    animation:
        idtGoldenPackShine
        1.75s
        cubic-bezier(.22,.61,.36,1)
        forwards;
}

@keyframes idtGoldenPackShine{

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

#idt-golden-packages .idt-pack-badge{
    position:absolute;
    top:13px;
    left:13px;
    z-index:6;

    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-height:30px;
    padding:7px 10px;

    border:1px solid rgba(255,255,255,.14);
    border-radius:5px;

    background:rgba(12,45,98,.93);
    color:#FFFFFF;

    font-size:11px;
    line-height:1;
    font-weight:700;

    box-shadow:
        0 7px 18px
        rgba(0,0,0,.15);

    backdrop-filter:blur(7px);
    -webkit-backdrop-filter:blur(7px);
}

#idt-golden-packages .idt-pack-image-bottom{
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

#idt-golden-packages .idt-pack-image-bottom span{
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

#idt-golden-packages .idt-pack-body{
    display:flex;
    flex-direction:column;
    flex:1;
    padding:18px 17px 18px;
}

#idt-golden-packages .idt-pack-meta{
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

#idt-golden-packages .idt-pack-meta-item{
    display:inline-flex;
    align-items:center;
    gap:5px;
}

#idt-golden-packages .idt-pack-meta-item::before{
    content:"";
    width:5px;
    height:5px;
    flex:0 0 5px;
    border-radius:50%;
    background:var(--sky);
}

#idt-golden-packages .idt-pack-name{
    min-height:54px;
    margin:0 0 11px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:20px;
    line-height:1.35;
    font-weight:800;

    letter-spacing:-.35px;
}

#idt-golden-packages .idt-pack-text{
    margin:0;
    color:var(--text);
    font-size:14px;
    line-height:1.68;
    font-weight:400;
}

#idt-golden-packages .idt-pack-features{
    display:flex;
    align-items:center;
    flex-wrap:wrap;
    gap:7px;
    margin-top:14px;
}

#idt-golden-packages .idt-pack-feature{
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

#idt-golden-packages .idt-pack-feature.orange{
    background:#FFF2EA;
    color:var(--orange);
}

#idt-golden-packages .idt-pack-actions{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:8px;

    margin-top:auto;
    padding-top:17px;
}

#idt-golden-packages .idt-pack-outline,
#idt-golden-packages .idt-pack-btn{
    display:flex;
    align-items:center;
    justify-content:center;

    min-height:42px;
    padding:10px 12px;

    border-radius:5px;

    text-align:center;
    text-decoration:none;

    font-size:12px;
    line-height:1.2;
    font-weight:800;

    transition:
        background .25s ease,
        color .25s ease,
        border-color .25s ease,
        transform .25s ease;
}

#idt-golden-packages .idt-pack-outline{
    border:1px solid #D8E1EA;
    background:#FFFFFF;
    color:var(--navy);
}

#idt-golden-packages .idt-pack-outline:hover{
    border-color:var(--blue);
    background:#F3F7FB;
    color:var(--blue);
    transform:translateY(-1px);
}

#idt-golden-packages .idt-pack-btn{
    border:1px solid var(--navy);
    background:var(--navy);
    color:#FFFFFF;
}

#idt-golden-packages .idt-pack-btn:hover{
    border-color:var(--orange);
    background:var(--orange);
    color:#FFFFFF;
    transform:translateY(-1px);
}

#idt-golden-packages .idt-pack-bottom{
    display:flex;
    justify-content:center;
    align-items:center;

    margin-top:34px;
}

#idt-golden-packages .idt-pack-main-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:10px;

    min-height:48px;
    padding:12px 20px;

    border:1px solid var(--navy);
    border-radius:5px;

    background:var(--navy);
    color:#FFFFFF;

    text-decoration:none;

    font-size:13px;
    line-height:1.2;
    font-weight:800;

    transition:
        background .25s ease,
        border-color .25s ease,
        transform .25s ease;
}

#idt-golden-packages .idt-pack-main-btn:hover{
    border-color:var(--orange);
    background:var(--orange);
    color:#FFFFFF;
    transform:translateY(-2px);
}

#idt-golden-packages .idt-pack-main-btn svg{
    width:17px;
    height:17px;
    fill:none;
    stroke:currentColor;
    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:1050px){

    #idt-golden-packages{
        padding-left:20px;
        padding-right:20px;
    }

    #idt-golden-packages .idt-pack-grid{
        grid-template-columns:repeat(2,minmax(0,1fr));
    }

}

@media(max-width:680px){

    #idt-golden-packages{
        padding:52px 16px 58px;
    }

    #idt-golden-packages .idt-pack-head{
        margin-bottom:28px;
    }

    #idt-golden-packages .idt-pack-script{
        font-size:27px;
    }

    #idt-golden-packages .idt-pack-title{
        font-size:28px;
    }

    #idt-golden-packages .idt-pack-lead{
        font-size:14px;
        line-height:1.65;
    }

    #idt-golden-packages .idt-pack-grid{
        grid-template-columns:1fr;
        gap:17px;
    }

    #idt-golden-packages .idt-pack-image{
        height:215px;
        flex-basis:215px;
    }

    #idt-golden-packages .idt-pack-name{
        font-size:19px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-golden-packages .idt-pack-card,
    #idt-golden-packages .idt-pack-image img,
    #idt-golden-packages .idt-pack-outline,
    #idt-golden-packages .idt-pack-btn,
    #idt-golden-packages .idt-pack-main-btn{
        transition:none;
    }

    #idt-golden-packages .idt-pack-shine{
        display:none;
    }

}

</style>


<section id="idt-golden-packages">

<div class="idt-pack-container">


    <!-- HEADER -->

    <div class="idt-pack-head">

        <p class="idt-pack-script">
            Find Your Perfect Journey
        </p>

        <h2 class="idt-pack-title">
            Choose Your Golden Triangle Tour Package
        </h2>

        <div class="idt-pack-accent"></div>

        <p class="idt-pack-lead">
            Explore Delhi, Agra and Jaipur with private Golden Triangle itineraries designed for different travel durations, sightseeing preferences and travel styles.
        </p>

    </div>


    <div class="idt-pack-grid">


        <!-- =================================================
             CARD 01
        ================================================== -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://indiadaytrip.com/assets/img/about/about-golden.webp"
                    alt="From Delhi : 2 Days Agra and Jaipur Tour by Car"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Classic
                </span>

                <div class="idt-pack-image-bottom">
                    <span>Flexible</span>
                    <span>Delhi → Agra → Jaipur</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Classic Circuit</span>
                    <span class="idt-pack-meta-item">Private Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    From Delhi : 2 Days Agra and Jaipur Tour by Car
                </h3>

                <p class="idt-pack-text">
                    Discover the classic Golden Triangle route connecting Delhi, Agra and Jaipur with a private sightseeing journey through India’s most celebrated heritage cities.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Golden Triangle</span>
                    <span class="idt-pack-feature orange">Agra & Jaipur</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/from-delhi-2-days-agra-and-jaipur-tour-by-car"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 02 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle Tour 2N3D"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    2N / 3D
                </span>

                <div class="idt-pack-image-bottom">
                    <span>3 Days</span>
                    <span>Delhi → Agra → Jaipur</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Classic Circuit</span>
                    <span class="idt-pack-meta-item">Private Tour</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle Tour 2N3D
                </h3>

                <p class="idt-pack-text">
                    Explore Delhi, Agra and Jaipur with a compact Golden Triangle itinerary covering the essential heritage highlights of North India.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">2N / 3D</span>
                    <span class="idt-pack-feature orange">Three Cities</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tour-2n3d/"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 03 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle Tour 3N4D"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    3N / 4D
                </span>

                <div class="idt-pack-image-bottom">
                    <span>4 Days</span>
                    <span>Delhi → Agra → Jaipur</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Balanced Journey</span>
                    <span class="idt-pack-meta-item">Private Car</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle Tour 3N4D
                </h3>

                <p class="idt-pack-text">
                    Enjoy a balanced journey through Delhi, Agra and Jaipur with additional time for sightseeing, heritage and local experiences.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">3N / 4D</span>
                    <span class="idt-pack-feature orange">Private Tour</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-toui-3n4d"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 04 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle Tour 4N5D"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    4N / 5D
                </span>

                <div class="idt-pack-image-bottom">
                    <span>5 Days</span>
                    <span>Delhi → Agra → Jaipur</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Relaxed Pace</span>
                    <span class="idt-pack-meta-item">Three Cities</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle Tour 4N5D
                </h3>

                <p class="idt-pack-text">
                    Take a more relaxed Golden Triangle journey with comfortable sightseeing time across Delhi, Agra and Jaipur.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">4N / 5D</span>
                    <span class="idt-pack-feature orange">Three Cities</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tour-4n5d"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 05 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://indiadaytrip.com/assets/img/about/about-golden.webp"
                    alt="6 Days Golden Triangle Tour"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    6 Days
                </span>

                <div class="idt-pack-image-bottom">
                    <span>6 Days</span>
                    <span>Delhi → Agra → Jaipur</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Relaxed Pace</span>
                    <span class="idt-pack-meta-item">Three Cities</span>
                </div>

                <h3 class="idt-pack-name">
                    6 Days Golden Triangle Tour
                </h3>

                <p class="idt-pack-text">
                    Enjoy six days across Delhi, Agra and Jaipur with more time for major monuments, heritage attractions and a comfortable private travel schedule.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">6 Days</span>
                    <span class="idt-pack-feature orange">Three Cities</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/6-days-golden-triangle-tour/"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 06 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle Tour with Ranthambore 4N5D"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Ranthambore
                </span>

                <div class="idt-pack-image-bottom">
                    <span>4N / 5D</span>
                    <span>Golden Triangle → Ranthambore</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Heritage & Wildlife</span>
                    <span class="idt-pack-meta-item">Private Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle Tour with Ranthambore 4N5D
                </h3>

                <p class="idt-pack-text">
                    Combine the classic Golden Triangle with Ranthambore for a journey blending heritage sightseeing with a wildlife-focused Rajasthan experience.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Golden Triangle</span>
                    <span class="idt-pack-feature orange">Ranthambore</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tour-with-ranthambore-4n5d"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 07 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1570168007204-dfb528c6958f?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle Tour From Mumbai"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    From Mumbai
                </span>

                <div class="idt-pack-image-bottom">
                    <span>Extended Tour</span>
                    <span>Mumbai → Golden Triangle</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">From Mumbai</span>
                    <span class="idt-pack-meta-item">Private Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle Tour From Mumbai
                </h3>

                <p class="idt-pack-text">
                    Begin your Golden Triangle journey from Mumbai and explore Delhi, Agra and Jaipur through a carefully planned private itinerary.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Mumbai</span>
                    <span class="idt-pack-feature orange">Golden Triangle</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tour-from-mumbai"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 08 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1561361058-c24cecae35ca?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle Tours with Varanasi 5N6D"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Varanasi
                </span>

                <div class="idt-pack-image-bottom">
                    <span>5N / 6D</span>
                    <span>Golden Triangle → Varanasi</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Heritage & Spiritual</span>
                    <span class="idt-pack-meta-item">Extended Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle Tours with Varanasi 5N6D
                </h3>

                <p class="idt-pack-text">
                    Extend the Golden Triangle to Varanasi and experience the spiritual atmosphere of one of India’s oldest cities.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">5N / 6D</span>
                    <span class="idt-pack-feature orange">Varanasi</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tours-with-varanasi-5n6d"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 09 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1595658658481-d53d3f999875?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle Tour with Udaipur 7N8D"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Udaipur
                </span>

                <div class="idt-pack-image-bottom">
                    <span>7N / 8D</span>
                    <span>Golden Triangle → Udaipur</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Royal Rajasthan</span>
                    <span class="idt-pack-meta-item">Extended Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle Tour with Udaipur 7N8D
                </h3>

                <p class="idt-pack-text">
                    Extend your Golden Triangle journey to Udaipur and experience Rajasthan’s royal architecture, beautiful lakes, historic palaces and romantic heritage.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">7N / 8D</span>
                    <span class="idt-pack-feature orange">Udaipur</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tour-with-udaipur-7n8d"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 10 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle with Rajasthan Tour"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Rajasthan
                </span>

                <div class="idt-pack-image-bottom">
                    <span>Extended Journey</span>
                    <span>Golden Triangle → Rajasthan</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Rajasthan Heritage</span>
                    <span class="idt-pack-meta-item">Private Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle with Rajasthan Tour
                </h3>

                <p class="idt-pack-text">
                    Travel beyond the classic Golden Triangle and experience more of Rajasthan with a private itinerary combining iconic cities, forts, palaces and regional heritage.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Golden Triangle</span>
                    <span class="idt-pack-feature orange">Rajasthan</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-with-rajasthan-tour/"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 11 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle Tour with Pushkar"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Pushkar
                </span>

                <div class="idt-pack-image-bottom">
                    <span>Extended Tour</span>
                    <span>Golden Triangle → Pushkar</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Heritage & Culture</span>
                    <span class="idt-pack-meta-item">Extended Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle Tour with Pushkar
                </h3>

                <p class="idt-pack-text">
                    Combine Delhi, Agra and Jaipur with the sacred town of Pushkar for a varied journey featuring monuments, local culture and Rajasthan’s spiritual character.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Golden Triangle</span>
                    <span class="idt-pack-feature orange">Pushkar</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tour-with-pushkar/"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 12 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1600100397608-f010f0b6a5e0?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle Tour with Orchha and Khajuraho"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Heritage
                </span>

                <div class="idt-pack-image-bottom">
                    <span>Extended Tour</span>
                    <span>Golden Triangle → Orchha</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Heritage Extension</span>
                    <span class="idt-pack-meta-item">Private Tour</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle Tour with Orchha and Khajuraho
                </h3>

                <p class="idt-pack-text">
                    Extend the Golden Triangle with Orchha and Khajuraho for an immersive journey through historic forts, temples, architecture and central India’s cultural heritage.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Orchha</span>
                    <span class="idt-pack-feature orange">Khajuraho</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tour-with-orchha-and-khajuraho/"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 13 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle with Jodhpur and Pushkar by Car"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Rajasthan
                </span>

                <div class="idt-pack-image-bottom">
                    <span>Extended Tour</span>
                    <span>Jodhpur → Pushkar</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Rajasthan Route</span>
                    <span class="idt-pack-meta-item">Private Car</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle with Jodhpur and Pushkar by Car
                </h3>

                <p class="idt-pack-text">
                    Travel by private car from Delhi through Agra and Jaipur to Jodhpur and Pushkar for an extended journey combining the Golden Triangle with Rajasthan.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Jodhpur</span>
                    <span class="idt-pack-feature orange">Pushkar</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-with-jodhpur-and-pushkar-by-car/"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 14 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1570168007204-dfb528c6958f?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle with Mumbai"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Mumbai
                </span>

                <div class="idt-pack-image-bottom">
                    <span>Extended Tour</span>
                    <span>Mumbai → Golden Triangle</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">From Mumbai</span>
                    <span class="idt-pack-meta-item">Private Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle with Mumbai
                </h3>

                <p class="idt-pack-text">
                    Combine Mumbai with the heritage highlights of Delhi, Agra and Jaipur through a private multi-city India itinerary.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Mumbai</span>
                    <span class="idt-pack-feature orange">Golden Triangle</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tour-with-mumbai"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 15 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle with Goa Tour"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Goa
                </span>

                <div class="idt-pack-image-bottom">
                    <span>Extended Tour</span>
                    <span>Golden Triangle → Goa</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Heritage & Beach</span>
                    <span class="idt-pack-meta-item">Extended Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle with Goa Tour
                </h3>

                <p class="idt-pack-text">
                    Combine the heritage highlights of Delhi, Agra and Jaipur with Goa for a journey blending culture, architecture and coastal experiences.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Golden Triangle</span>
                    <span class="idt-pack-feature orange">Goa</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-with-goa-tour"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 16 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1595815771614-ade9d652a65d?auto=format&fit=crop&w=1400&q=90"
                    alt="Golden Triangle with Haridwar and Rishikesh"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Spiritual
                </span>

                <div class="idt-pack-image-bottom">
                    <span>Extended Tour</span>
                    <span>Golden Triangle → Rishikesh</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Heritage & Spiritual</span>
                    <span class="idt-pack-meta-item">Extended Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    Golden Triangle with Haridwar and Rishikesh
                </h3>

                <p class="idt-pack-text">
                    Combine Delhi, Agra and Jaipur with Haridwar and Rishikesh for a broader North India journey featuring heritage and spiritual experiences.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Golden Triangle</span>
                    <span class="idt-pack-feature orange">Rishikesh</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/golden-triangle-tour-with-haridwar-and-rishikesh"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 17 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1599661046827-dacff0c0f09a?auto=format&fit=crop&w=1400&q=90"
                    alt="2 Day Jaipur City Overnight Tour"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Jaipur
                </span>

                <div class="idt-pack-image-bottom">
                    <span>2 Days</span>
                    <span>Delhi → Jaipur</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Overnight Tour</span>
                    <span class="idt-pack-meta-item">Private Journey</span>
                </div>

                <h3 class="idt-pack-name">
                    2 Day Jaipur City Overnight Tour
                </h3>

                <p class="idt-pack-text">
                    Enjoy a two-day Jaipur tour from Delhi with an overnight stay and a comfortable itinerary covering the city’s major heritage attractions.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">2 Days</span>
                    <span class="idt-pack-feature orange">Jaipur</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/2-day-jaipur-city-overnight-tour"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 18 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=90"
                    alt="1 Day Delhi and 1 Day Agra Tour by Car"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    2 Days
                </span>

                <div class="idt-pack-image-bottom">
                    <span>2 Days</span>
                    <span>Delhi → Agra</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Delhi & Agra</span>
                    <span class="idt-pack-meta-item">Private Car</span>
                </div>

                <h3 class="idt-pack-name">
                    1 Day Delhi and 1 Day Agra Tour by Car
                </h3>

                <p class="idt-pack-text">
                    Spend one day exploring Delhi and another discovering Agra by private car, combining capital-city sightseeing with the Taj Mahal and Mughal heritage.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Delhi</span>
                    <span class="idt-pack-feature orange">Agra</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/1-day-delhi-and-1-day-agra-tour-by-car/"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 19 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1400&q=90"
                    alt="Delhi Private Tour by Car"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Delhi
                </span>

                <div class="idt-pack-image-bottom">
                    <span>1 Day</span>
                    <span>Delhi</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Delhi Sightseeing</span>
                    <span class="idt-pack-meta-item">Private Car</span>
                </div>

                <h3 class="idt-pack-name">
                    Delhi Private Tour by Car
                </h3>

                <p class="idt-pack-text">
                    Explore the major highlights of Delhi on a private day tour by car, with flexible sightseeing across the capital’s historic and modern landmarks.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Delhi</span>
                    <span class="idt-pack-feature orange">Private Tour</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/delhi-private-day-tour-by-car/"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


        <!-- CARD 20 -->

        <article class="idt-pack-card">

            <div class="idt-pack-image">

                <img
                    src="https://images.unsplash.com/photo-1599661046827-dacff0c0f09a?auto=format&fit=crop&w=1400&q=90"
                    alt="From Delhi: Jaipur City Private Day Tour by Car"
                    loading="lazy">

                <span class="idt-pack-overlay"></span>
                <span class="idt-pack-shine"></span>

                <span class="idt-pack-badge">
                    Jaipur
                </span>

                <div class="idt-pack-image-bottom">
                    <span>1 Day</span>
                    <span>Delhi → Jaipur</span>
                </div>

            </div>

            <div class="idt-pack-body">

                <div class="idt-pack-meta">
                    <span class="idt-pack-meta-item">Jaipur Day Tour</span>
                    <span class="idt-pack-meta-item">Private Car</span>
                </div>

                <h3 class="idt-pack-name">
                    From Delhi: Jaipur City Private Day Tour by Car
                </h3>

                <p class="idt-pack-text">
                    Explore Jaipur from Delhi by private car with a full-day itinerary covering the Pink City’s major forts, palaces and heritage attractions.
                </p>

                <div class="idt-pack-features">
                    <span class="idt-pack-feature">Delhi</span>
                    <span class="idt-pack-feature orange">Jaipur</span>
                </div>

                <div class="idt-pack-actions">

                    <a
                        href="https://indiadaytrip.com/tour/from-delhi-jaipur-city-private-day-tour-by-car"
                        class="idt-pack-outline">
                        View Details
                    </a>

                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pack-btn">
                        Enquire Now
                    </a>

                </div>

            </div>

        </article>


    </div>


    <!-- BOTTOM CTA -->

    <div class="idt-pack-bottom">

        <a
            href="https://wa.me/918126052755"
            target="_blank"
            rel="noopener noreferrer"
            class="idt-pack-main-btn">

            Customise Your Golden Triangle Tour

            <svg viewBox="0 0 24 24">
                <path d="M7 17 17 7"></path>
                <path d="M7 7h10v10"></path>
            </svg>

        </a>

    </div>


</div>

</section>