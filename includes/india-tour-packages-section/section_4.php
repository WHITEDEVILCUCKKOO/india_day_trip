<!-- =========================================================
     INDIA DAY TRIP
     INDIA TOUR PACKAGES
     SECTION 04 — EXTEND YOUR JOURNEY
     NEPAL • SRI LANKA • BHUTAN
     VISIBLE IMAGE CARDS
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-extensions,
#idt-india-extensions *{
    box-sizing:border-box;
}

#idt-india-extensions{
    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#2E6095;
    --sky:#79BDF2;
    --light-sky:#A7D8FF;
    --orange:#FF5D00;
    --orange-soft:#FF7A2F;
    --text:#5D6773;
    --warm:#FCFAF6;
    --white:#FFFFFF;
    --line:#E6EBF0;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:70px 24px 74px;

    background:
        radial-gradient(
            circle at 8% 10%,
            rgba(121,189,242,.06),
            transparent 24%
        ),
        radial-gradient(
            circle at 92% 90%,
            rgba(255,93,0,.035),
            transparent 22%
        ),
        #FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-india-extensions .idt-iext-wrap{
    width:100%;
    max-width:1180px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-india-extensions .idt-iext-head{
    width:100%;
    max-width:770px;

    margin:0 auto 38px;

    text-align:center;
}

#idt-india-extensions .idt-iext-script{
    margin:0 0 7px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-india-extensions .idt-iext-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:35px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.5px;
}

#idt-india-extensions .idt-iext-accent{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    margin:13px 0 15px;
}

#idt-india-extensions .idt-iext-accent::before,
#idt-india-extensions .idt-iext-accent::after{
    content:"";

    width:34px;
    height:2px;

    border-radius:20px;
}

#idt-india-extensions .idt-iext-accent::before{
    background:var(--navy);
}

#idt-india-extensions .idt-iext-accent::after{
    background:var(--orange);
}

#idt-india-extensions .idt-iext-accent span{
    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-india-extensions .idt-iext-lead{
    max-width:700px;

    margin:0 auto;

    color:var(--text);

    font-size:15.5px;
    line-height:1.72;
}


/* =========================================================
   GRID
========================================================= */

#idt-india-extensions .idt-iext-grid{
    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap:22px;
}


/* =========================================================
   CARD
========================================================= */

#idt-india-extensions .idt-iext-card{
    display:flex;
    flex-direction:column;

    min-width:0;

    overflow:hidden;

    border:
        1px solid
        rgba(12,45,98,.09);

    border-radius:10px;

    background:#FFFFFF;

    box-shadow:
        0 13px 34px
        rgba(12,45,98,.065);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}

#idt-india-extensions .idt-iext-card:hover{
    transform:translateY(-5px);

    border-color:
        rgba(46,96,149,.17);

    box-shadow:
        0 24px 48px
        rgba(12,45,98,.11);
}


/* =========================================================
   IMAGE
========================================================= */

#idt-india-extensions .idt-iext-image{
    position:relative;

    width:100%;
    height:225px;

    overflow:hidden;

    background:#E2E8EE;
}

#idt-india-extensions .idt-iext-image::after{
    content:"";

    position:absolute;
    inset:0;

    background:
        linear-gradient(
            180deg,
            rgba(4,18,36,.03) 25%,
            rgba(4,18,36,.12) 70%,
            rgba(4,18,36,.30) 100%
        );

    pointer-events:none;
}

#idt-india-extensions .idt-iext-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .6s ease;
}

#idt-india-extensions .idt-iext-card:hover
.idt-iext-image img{
    transform:scale(1.05);
}


/* =========================================================
   IMAGE LABEL
========================================================= */

#idt-india-extensions .idt-iext-label{
    position:absolute;

    left:15px;
    bottom:14px;

    z-index:3;

    display:inline-flex;

    align-items:center;

    min-height:27px;

    padding:6px 10px;

    border-radius:4px;

    background:
        rgba(255,93,0,.94);

    color:#FFFFFF;

    font-size:9.5px;
    line-height:1;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;

    box-shadow:
        0 7px 18px
        rgba(0,0,0,.15);
}


/* =========================================================
   BODY
========================================================= */

#idt-india-extensions .idt-iext-body{
    display:flex;
    flex-direction:column;

    flex:1;

    padding:21px 20px 20px;
}

#idt-india-extensions .idt-iext-small{
    display:block;

    margin-bottom:5px;

    color:var(--blue);

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;
}

#idt-india-extensions .idt-iext-card h3{
    margin:0 0 9px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:20px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:-.2px;
}

#idt-india-extensions .idt-iext-card p{
    margin:0;

    color:var(--text);

    font-size:13.5px;
    line-height:1.7;
}


/* =========================================================
   FEATURES
========================================================= */

#idt-india-extensions .idt-iext-features{
    display:flex;

    flex-wrap:wrap;

    gap:6px;

    margin-top:15px;
}

#idt-india-extensions .idt-iext-feature{
    display:inline-flex;

    align-items:center;

    gap:5px;

    padding:6px 8px;

    border:
        1px solid
        rgba(12,45,98,.08);

    border-radius:4px;

    background:#F7F9FB;

    color:#566371;

    font-size:10.5px;
    line-height:1.2;

    font-weight:700;
}

#idt-india-extensions .idt-iext-feature svg{
    width:12px;
    height:12px;

    fill:none;
    stroke:var(--blue);

    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   CARD LINK
========================================================= */

#idt-india-extensions .idt-iext-link{
    display:inline-flex;

    align-items:center;
    justify-content:flex-start;

    gap:7px;

    width:max-content;

    margin-top:auto;
    padding-top:19px;

    color:var(--orange);

    text-decoration:none !important;

    font-size:11.5px;
    line-height:1;

    font-weight:800;

    transition:
        color .25s ease,
        gap .25s ease;
}

#idt-india-extensions .idt-iext-link:hover{
    color:var(--navy);

    gap:10px;
}

#idt-india-extensions .idt-iext-link svg{
    width:14px;
    height:14px;

    fill:none;
    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   BOTTOM CTA
========================================================= */

#idt-india-extensions .idt-iext-bottom{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:22px;

    margin-top:28px;

    padding:19px 21px;

    border:
        1px solid
        rgba(12,45,98,.08);

    border-radius:8px;

    background:var(--warm);
}

#idt-india-extensions .idt-iext-bottom-small{
    display:block;

    margin-bottom:3px;

    color:var(--orange);

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;
}

#idt-india-extensions .idt-iext-bottom h3{
    margin:0;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:18px;
    line-height:1.4;

    font-weight:800;
}

#idt-india-extensions .idt-iext-bottom-btn{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    flex:0 0 auto;

    min-height:43px;

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

#idt-india-extensions .idt-iext-bottom-btn:hover{
    transform:translateY(-2px);

    background:#123B72;
}


/* =========================================================
   1200PX
========================================================= */

@media(max-width:1200px){

    #idt-india-extensions{
        padding:
            64px 28px 68px;
    }

    #idt-india-extensions .idt-iext-wrap{
        max-width:1060px;
    }

    #idt-india-extensions .idt-iext-grid{
        gap:18px;
    }

    #idt-india-extensions .idt-iext-image{
        height:210px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-india-extensions{
        padding:
            56px 20px 60px;
    }

    #idt-india-extensions .idt-iext-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));
    }

    #idt-india-extensions .idt-iext-card:last-child{
        grid-column:1 / -1;

        width:calc(50% - 9px);

        justify-self:center;
    }

    #idt-india-extensions .idt-iext-image{
        height:225px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-india-extensions{
        padding:
            48px 15px 52px;
    }

    #idt-india-extensions .idt-iext-head{
        margin-bottom:30px;
    }

    #idt-india-extensions .idt-iext-script{
        font-size:28px;
    }

    #idt-india-extensions .idt-iext-title{
        font-size:29px;
    }

    #idt-india-extensions .idt-iext-lead{
        font-size:15px;
    }

    #idt-india-extensions .idt-iext-grid{
        grid-template-columns:1fr;
    }

    #idt-india-extensions .idt-iext-card,
    #idt-india-extensions .idt-iext-card:last-child{
        width:100%;
        max-width:590px;

        grid-column:auto;

        margin:0 auto;
    }

    #idt-india-extensions .idt-iext-image{
        height:275px;
    }

    #idt-india-extensions .idt-iext-bottom{
        flex-direction:column;

        align-items:flex-start;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-india-extensions{
        padding:
            42px 13px 46px;
    }

    #idt-india-extensions .idt-iext-script{
        font-size:26px;
    }

    #idt-india-extensions .idt-iext-title{
        font-size:27px;
    }

    #idt-india-extensions .idt-iext-lead{
        font-size:14.5px;
    }

    #idt-india-extensions .idt-iext-image{
        height:225px;
    }

    #idt-india-extensions .idt-iext-body{
        padding:
            18px 16px 17px;
    }

    #idt-india-extensions .idt-iext-card h3{
        font-size:18px;
    }

    #idt-india-extensions .idt-iext-card p{
        font-size:13.2px;
    }

    #idt-india-extensions .idt-iext-bottom{
        padding:
            17px 16px;
    }

    #idt-india-extensions .idt-iext-bottom-btn{
        width:100%;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-india-extensions{
        padding:
            40px 10px 44px;
    }

    #idt-india-extensions .idt-iext-title{
        font-size:25px;
    }

    #idt-india-extensions .idt-iext-image{
        height:205px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-india-extensions *,
    #idt-india-extensions *::before,
    #idt-india-extensions *::after{
        transition:none !important;
        animation:none !important;
    }

}

</style>


<section id="idt-india-extensions">

    <div class="idt-iext-wrap">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-iext-head">

            <p class="idt-iext-script">
                Extend Your India Journey
            </p>

            <h2 class="idt-iext-title">
                Nepal, Sri Lanka &amp; Bhutan Extensions
            </h2>

            <div
                class="idt-iext-accent"
                aria-hidden="true"
            >
                <span></span>
            </div>

            <p class="idt-iext-lead">
                Add another destination to your India itinerary and create a wider South Asian journey with a private extension to Nepal, Sri Lanka or Bhutan.
            </p>

        </div>


        <!-- =================================================
             CARDS
        ================================================== -->

        <div class="idt-iext-grid">


            <!-- =================================================
                 NEPAL
            ================================================== -->

            <article class="idt-iext-card">


                <div class="idt-iext-image">

                    <img
                        src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1200&q=90"
                        alt="Nepal Himalaya Tour Extension"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=1200&q=90';"
                    >

                    <span class="idt-iext-label">
                        Nepal
                    </span>

                </div>


                <div class="idt-iext-body">

                    <span class="idt-iext-small">
                        Himalayas • Heritage • Culture
                    </span>

                    <h3>
                        India with Nepal Extension
                    </h3>

                    <p>
                        Continue your India journey into Nepal and combine historic cities, Himalayan scenery and cultural experiences within one extended itinerary.
                    </p>


                    <div class="idt-iext-features">

                        <span class="idt-iext-feature">

                            <svg viewBox="0 0 24 24">
                                <path d="m3 19 6-9 4 6 3-4 5 7"></path>
                            </svg>

                            Mountains

                        </span>

                        <span class="idt-iext-feature">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 20h16"></path>
                                <path d="M6 20V10h12v10"></path>
                            </svg>

                            Heritage

                        </span>

                    </div>


                    <a
                        class="idt-iext-link"
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener"
                    >

                        Plan Nepal Extension

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14"></path>
                            <path d="m14 7 5 5-5 5"></path>
                        </svg>

                    </a>

                </div>


            </article>


            <!-- =================================================
                 SRI LANKA
            ================================================== -->

            <article class="idt-iext-card">


                <div class="idt-iext-image">

                    <img
                        src="https://images.unsplash.com/photo-1586185115491-7c850ede8f3c?auto=format&fit=crop&w=1200&q=90"
                        alt="Sri Lanka Travel Extension"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=90';"
                    >

                    <span class="idt-iext-label">
                        Sri Lanka
                    </span>

                </div>


                <div class="idt-iext-body">

                    <span class="idt-iext-small">
                        Coast • Culture • Nature
                    </span>

                    <h3>
                        India with Sri Lanka Extension
                    </h3>

                    <p>
                        Extend your India trip to Sri Lanka and explore coastal scenery, historic destinations, tropical landscapes and a more relaxed island journey.
                    </p>


                    <div class="idt-iext-features">

                        <span class="idt-iext-feature">

                            <svg viewBox="0 0 24 24">
                                <path d="M3 17c3 1 5 1 8 0s5-1 10 0"></path>
                            </svg>

                            Coast

                        </span>

                        <span class="idt-iext-feature">

                            <svg viewBox="0 0 24 24">
                                <path d="M12 20c-5-3-7-7-6-12 5 0 9 2 12 6-1 3-3 5-6 6Z"></path>
                            </svg>

                            Nature

                        </span>

                    </div>


                    <a
                        class="idt-iext-link"
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener"
                    >

                        Plan Sri Lanka Extension

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14"></path>
                            <path d="m14 7 5 5-5 5"></path>
                        </svg>

                    </a>

                </div>


            </article>


            <!-- =================================================
                 BHUTAN
            ================================================== -->

            <article class="idt-iext-card">


                <div class="idt-iext-image">

                    <img
                        src="https://images.unsplash.com/photo-1578556881786-851d4b79cb73?auto=format&fit=crop&w=1200&q=90"
                        alt="Bhutan Mountain Tour Extension"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=1200&q=90';"
                    >

                    <span class="idt-iext-label">
                        Bhutan
                    </span>

                </div>


                <div class="idt-iext-body">

                    <span class="idt-iext-small">
                        Mountains • Monasteries • Culture
                    </span>

                    <h3>
                        India with Bhutan Extension
                    </h3>

                    <p>
                        Combine your India journey with Bhutan for mountain landscapes, traditional architecture, cultural landmarks and a quieter Himalayan experience.
                    </p>


                    <div class="idt-iext-features">

                        <span class="idt-iext-feature">

                            <svg viewBox="0 0 24 24">
                                <path d="m3 19 6-9 4 6 3-4 5 7"></path>
                            </svg>

                            Himalayas

                        </span>

                        <span class="idt-iext-feature">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 20h16"></path>
                                <path d="M7 20V10h10v10"></path>
                                <path d="M9 10V7h6v3"></path>
                            </svg>

                            Monasteries

                        </span>

                    </div>


                    <a
                        class="idt-iext-link"
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener"
                    >

                        Plan Bhutan Extension

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14"></path>
                            <path d="m14 7 5 5-5 5"></path>
                        </svg>

                    </a>

                </div>


            </article>


        </div>


        <!-- =================================================
             BOTTOM CTA
        ================================================== -->

        <div class="idt-iext-bottom">

            <div>

                <span class="idt-iext-bottom-small">
                    Planning a Multi-Country Journey?
                </span>

                <h3>
                    Combine India with Nepal, Sri Lanka or Bhutan around your available travel time.
                </h3>

            </div>


            <a
                class="idt-iext-bottom-btn"
                href="https://wa.me/918126052755"
                target="_blank"
                rel="noopener"
            >
                Customise My Journey
            </a>

        </div>


    </div>

</section>