<!-- =========================================================
     INDIA DAY TRIP
     GOLDEN TRIANGLE TOUR PACKAGES
     EXTENSION OPTIONS SECTION
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

/* =========================================================
   SECTION BASE
========================================================= */

#idt-gt-extensions,
#idt-gt-extensions *{
    box-sizing:border-box;
}

#idt-gt-extensions{
    --navy:#0C2D62;
    --deep:#071F3F;
    --deep-2:#0A274C;
    --blue:#2E6095;
    --sky:#79BDF2;
    --light-sky:#A7D8FF;
    --orange:#FF5D00;
    --orange-soft:#FF7A2F;
    --white:#FFFFFF;

    position:relative;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:76px 24px 80px;

    background:
        radial-gradient(
            circle at 88% 12%,
            rgba(121,189,242,.09),
            transparent 28%
        ),
        radial-gradient(
            circle at 8% 92%,
            rgba(255,93,0,.07),
            transparent 26%
        ),
        #071F3F;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   SUBTLE BACKGROUND LINE
========================================================= */

#idt-gt-extensions::before{
    content:"";

    position:absolute;
    inset:0;

    pointer-events:none;

    background:
        linear-gradient(
            180deg,
            rgba(255,255,255,.02),
            transparent 35%,
            rgba(255,255,255,.015)
        );
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-gt-extensions .idt-gte-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1240px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-gt-extensions .idt-gte-head{
    width:100%;
    max-width:760px;

    margin:0 0 42px;

    text-align:left;
}


/* SMALL LABEL */

#idt-gt-extensions .idt-gte-label{
    display:inline-flex;

    align-items:center;

    gap:8px;

    margin:0 0 16px;

    padding:8px 12px;

    border:
        1px solid
        rgba(121,189,242,.18);

    border-radius:5px;

    background:
        rgba(255,255,255,.07);

    color:#C7E7FF;

    font-size:10.5px;
    line-height:1;

    font-weight:800;

    letter-spacing:.12em;

    text-transform:uppercase;

    backdrop-filter:blur(8px);
    -webkit-backdrop-filter:blur(8px);
}

#idt-gt-extensions .idt-gte-label svg{
    width:14px;
    height:14px;

    fill:none;
    stroke:var(--orange-soft);

    stroke-width:1.9;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* SCRIPT */

#idt-gt-extensions .idt-gte-script{
    margin:0 0 7px;

    color:var(--sky);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}


/* HEADING */

#idt-gt-extensions .idt-gte-title{
    max-width:720px;

    margin:0;

    color:#FFFFFF;

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size:38px;
    line-height:1.18;

    font-weight:700;

    letter-spacing:-.55px;
}

#idt-gt-extensions .idt-gte-title span{
    color:var(--light-sky);
}


/* ACCENT */

#idt-gt-extensions .idt-gte-accent{
    display:flex;

    align-items:center;

    gap:7px;

    margin:15px 0 17px;
}

#idt-gt-extensions .idt-gte-accent::before{
    content:"";

    width:42px;
    height:2px;

    border-radius:20px;

    background:var(--sky);
}

#idt-gt-extensions .idt-gte-accent span{
    width:7px;
    height:7px;

    transform:rotate(45deg);

    background:var(--orange);
}

#idt-gt-extensions .idt-gte-accent::after{
    content:"";

    width:24px;
    height:2px;

    border-radius:20px;

    background:var(--orange);
}


/* DESCRIPTION */

#idt-gt-extensions .idt-gte-intro{
    max-width:720px;

    margin:0;

    color:
        rgba(255,255,255,.72);

    font-size:15.5px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   CARD GRID
========================================================= */

#idt-gt-extensions .idt-gte-grid{
    display:grid;

    grid-template-columns:
        repeat(4,minmax(0,1fr));

    gap:16px;
}


/* =========================================================
   CARD
========================================================= */

#idt-gt-extensions .idt-gte-card{
    position:relative;

    display:flex;
    flex-direction:column;

    min-width:0;
    min-height:340px;

    padding:23px 21px 21px;

    overflow:hidden;

    border:
        1px solid
        rgba(255,255,255,.12);

    border-radius:10px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.085),
            rgba(255,255,255,.045)
        );

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.04),
        0 14px 35px rgba(0,0,0,.12);

    transition:
        transform .28s ease,
        border-color .28s ease,
        background .28s ease,
        box-shadow .28s ease;
}

#idt-gt-extensions .idt-gte-card:hover{
    transform:translateY(-5px);

    border-color:
        rgba(121,189,242,.30);

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.11),
            rgba(121,189,242,.055)
        );

    box-shadow:
        0 22px 45px
        rgba(0,0,0,.18);
}


/* TOP LIGHT */

#idt-gt-extensions .idt-gte-card::before{
    content:"";

    position:absolute;

    top:-80px;
    right:-80px;

    width:170px;
    height:170px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(121,189,242,.11),
            transparent 68%
        );

    pointer-events:none;
}


/* =========================================================
   ICON
========================================================= */

#idt-gt-extensions .idt-gte-icon{
    position:relative;
    z-index:2;

    display:flex;

    align-items:center;
    justify-content:center;

    width:48px;
    height:48px;

    margin-bottom:17px;

    border-radius:11px;

    background:var(--orange);

    color:#FFFFFF;

    box-shadow:
        0 9px 22px
        rgba(255,93,0,.20);
}

#idt-gt-extensions .idt-gte-icon svg{
    width:22px;
    height:22px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   CARD CONTENT
========================================================= */

#idt-gt-extensions .idt-gte-card h3{
    position:relative;
    z-index:2;

    margin:0 0 10px;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:18px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:-.15px;
}

#idt-gt-extensions .idt-gte-card p{
    position:relative;
    z-index:2;

    margin:0;

    color:
        rgba(255,255,255,.66);

    font-size:13.5px;
    line-height:1.72;

    font-weight:400;
}


/* =========================================================
   CARD LINK
========================================================= */

#idt-gt-extensions .idt-gte-link{
    position:relative;
    z-index:2;

    display:inline-flex;

    align-items:center;

    gap:7px;

    width:max-content;

    margin-top:auto;
    padding-top:20px;

    color:#FF9B61;

    text-decoration:none !important;

    font-size:12px;
    line-height:1.2;

    font-weight:800;

    transition:
        color .25s ease,
        gap .25s ease;
}

#idt-gt-extensions .idt-gte-link:hover{
    color:#FFFFFF;

    gap:10px;
}

#idt-gt-extensions .idt-gte-link svg{
    width:15px;
    height:15px;

    fill:none;
    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   BOTTOM CTA
========================================================= */

#idt-gt-extensions .idt-gte-bottom{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:25px;

    margin-top:24px;

    padding:18px 20px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius:8px;

    background:
        rgba(255,255,255,.045);
}

#idt-gt-extensions .idt-gte-bottom-copy{
    min-width:0;
}

#idt-gt-extensions .idt-gte-bottom-small{
    display:block;

    margin-bottom:3px;

    color:var(--sky);

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.08em;

    text-transform:uppercase;
}

#idt-gt-extensions .idt-gte-bottom h3{
    margin:0;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:17px;
    line-height:1.4;

    font-weight:800;
}

#idt-gt-extensions .idt-gte-bottom-btn{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    flex:0 0 auto;

    min-height:42px;

    padding:10px 16px;

    border-radius:5px;

    background:var(--orange);

    color:#FFFFFF;

    text-decoration:none !important;

    font-size:12px;
    line-height:1;

    font-weight:800;

    transition:
        transform .25s ease,
        background .25s ease;
}

#idt-gt-extensions .idt-gte-bottom-btn:hover{
    transform:translateY(-2px);

    background:var(--orange-soft);
}

#idt-gt-extensions .idt-gte-bottom-btn svg{
    width:15px;
    height:15px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.9;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   1200PX
========================================================= */

@media(max-width:1200px){

    #idt-gt-extensions{
        padding:
            68px 28px 72px;
    }

    #idt-gt-extensions .idt-gte-wrap{
        max-width:1080px;
    }

    #idt-gt-extensions .idt-gte-grid{
        gap:14px;
    }

    #idt-gt-extensions .idt-gte-card{
        min-height:350px;

        padding:
            21px 18px 20px;
    }

    #idt-gt-extensions .idt-gte-card h3{
        font-size:17px;
    }

    #idt-gt-extensions .idt-gte-card p{
        font-size:13px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-gt-extensions{
        padding:
            58px 20px 62px;
    }

    #idt-gt-extensions .idt-gte-head{
        margin-bottom:34px;
    }

    #idt-gt-extensions .idt-gte-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:16px;
    }

    #idt-gt-extensions .idt-gte-card{
        min-height:310px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-gt-extensions{
        padding:
            50px 15px 54px;
    }

    #idt-gt-extensions .idt-gte-head{
        max-width:620px;

        margin:
            0 auto 30px;

        text-align:center;
    }

    #idt-gt-extensions .idt-gte-label{
        margin:
            0 auto 15px;
    }

    #idt-gt-extensions .idt-gte-script{
        font-size:29px;
    }

    #idt-gt-extensions .idt-gte-title{
        margin-left:auto;
        margin-right:auto;

        font-size:31px;
    }

    #idt-gt-extensions .idt-gte-accent{
        justify-content:center;
    }

    #idt-gt-extensions .idt-gte-intro{
        margin-left:auto;
        margin-right:auto;

        font-size:15px;
    }

    #idt-gt-extensions .idt-gte-bottom{
        flex-direction:column;

        align-items:flex-start;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:560px){

    #idt-gt-extensions .idt-gte-grid{
        grid-template-columns:1fr;
    }

    #idt-gt-extensions .idt-gte-card{
        width:100%;
        max-width:520px;

        min-height:auto;

        margin:0 auto;

        padding:
            21px 19px 20px;
    }

    #idt-gt-extensions .idt-gte-link{
        margin-top:18px;
        padding-top:0;
    }

}


/* =========================================================
   430PX
========================================================= */

@media(max-width:430px){

    #idt-gt-extensions{
        padding:
            44px 13px 48px;
    }

    #idt-gt-extensions .idt-gte-script{
        font-size:27px;
    }

    #idt-gt-extensions .idt-gte-title{
        font-size:28px;
        line-height:1.2;
    }

    #idt-gt-extensions .idt-gte-intro{
        font-size:14.5px;
    }

    #idt-gt-extensions .idt-gte-icon{
        width:44px;
        height:44px;

        margin-bottom:15px;
    }

    #idt-gt-extensions .idt-gte-icon svg{
        width:20px;
        height:20px;
    }

    #idt-gt-extensions .idt-gte-card h3{
        font-size:17px;
    }

    #idt-gt-extensions .idt-gte-card p{
        font-size:13.3px;
    }

    #idt-gt-extensions .idt-gte-bottom{
        padding:
            17px 16px;
    }

    #idt-gt-extensions .idt-gte-bottom-btn{
        width:100%;
    }

}


/* =========================================================
   360PX
========================================================= */

@media(max-width:360px){

    #idt-gt-extensions{
        padding:
            40px 10px 44px;
    }

    #idt-gt-extensions .idt-gte-title{
        font-size:26px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-gt-extensions *,
    #idt-gt-extensions *::before,
    #idt-gt-extensions *::after{
        animation:none !important;
        transition:none !important;
    }

}

</style>


<section id="idt-gt-extensions">

    <div class="idt-gte-wrap">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-gte-head">


            <div class="idt-gte-label">

                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14"></path>
                    <path d="m14 7 5 5-5 5"></path>
                </svg>

                Extend Your Journey

            </div>


            <p class="idt-gte-script">
                Explore More of India
            </p>


            <h2 class="idt-gte-title">
                Beyond the Golden Triangle —
                <span>Extend Your India Journey</span>
            </h2>


            <div
                class="idt-gte-accent"
                aria-hidden="true"
            >
                <span></span>
            </div>


            <p class="idt-gte-intro">
                Delhi, Agra and Jaipur are an ideal starting point for discovering India. Add another destination to your Golden Triangle itinerary and continue your journey through wildlife, spiritual cities, Rajasthan or South India.
            </p>


        </div>


        <!-- =================================================
             EXTENSION CARDS
        ================================================== -->

        <div class="idt-gte-grid">


            <!-- =============================================
                 RANTHAMBORE
            ============================================== -->

            <article class="idt-gte-card">


                <div class="idt-gte-icon">

                    <svg viewBox="0 0 24 24">
                        <circle cx="8" cy="8" r="1.5"></circle>
                        <circle cx="16" cy="8" r="1.5"></circle>
                        <circle cx="6" cy="13" r="1.5"></circle>
                        <circle cx="18" cy="13" r="1.5"></circle>
                        <path d="M8.5 18c1.2-3 2.2-4.5 3.5-4.5s2.3 1.5 3.5 4.5c-1.2 1.3-2.3 2-3.5 2s-2.3-.7-3.5-2Z"></path>
                    </svg>

                </div>


                <h3>
                    Golden Triangle with Ranthambore
                </h3>


                <p>
                    Add Ranthambore to your Golden Triangle route for a different side of Rajasthan. Combine Delhi, Agra and Jaipur with a wildlife-focused stay near Ranthambore National Park and enjoy a balanced mix of heritage and nature.
                </p>


                <a
                    class="idt-gte-link"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >

                    Plan This Extension

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>

                </a>


            </article>


            <!-- =============================================
                 VARANASI
            ============================================== -->

            <article class="idt-gte-card">


                <div class="idt-gte-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 19h16"></path>
                        <path d="M7 19v-7"></path>
                        <path d="M17 19v-7"></path>
                        <path d="M9 12h6"></path>
                        <path d="M10 12V8l2-4 2 4v4"></path>
                        <path d="M5 22c2-1 4-1 6 0s4 1 8 0"></path>
                    </svg>

                </div>


                <h3>
                    Golden Triangle with Varanasi
                </h3>


                <p>
                    Continue from the Golden Triangle to Varanasi for a deeper cultural and spiritual experience. Explore the historic riverfront, ancient lanes and traditional atmosphere surrounding the Ganges.
                </p>


                <a
                    class="idt-gte-link"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >

                    Plan This Extension

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>

                </a>


            </article>


            <!-- =============================================
                 RAJASTHAN
            ============================================== -->

            <article class="idt-gte-card">


                <div class="idt-gte-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 20h16"></path>
                        <path d="M5 20V9h14v11"></path>
                        <path d="M8 9V6h3v3"></path>
                        <path d="M13 9V5h3v4"></path>
                        <path d="M9 20v-5h6v5"></path>
                    </svg>

                </div>


                <h3>
                    Golden Triangle with Rajasthan
                </h3>


                <p>
                    Continue beyond Jaipur into Rajasthan and discover royal cities such as Jodhpur, Udaipur or Jaisalmer. Add forts, palaces, lakes and desert landscapes to create a more extensive North India journey.
                </p>


                <a
                    class="idt-gte-link"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >

                    Plan This Extension

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>

                </a>


            </article>


            <!-- =============================================
                 KERALA
            ============================================== -->

            <article class="idt-gte-card">


                <div class="idt-gte-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 20c-5-3-7-7-6-12 5 0 9 2 12 6-1 3-3 5-6 6Z"></path>
                        <path d="M7 17c3-2 6-4 10-5"></path>
                    </svg>

                </div>


                <h3>
                    Golden Triangle with Kerala
                </h3>


                <p>
                    Combine North India’s historic Golden Triangle with a South India extension. Explore Kerala’s coastal landscapes, greenery and relaxed regional character as part of a longer private India itinerary.
                </p>


                <a
                    class="idt-gte-link"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >

                    Plan This Extension

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>

                </a>


            </article>


        </div>


        <!-- =================================================
             BOTTOM CTA
        ================================================== -->

        <div class="idt-gte-bottom">


            <div class="idt-gte-bottom-copy">

                <span class="idt-gte-bottom-small">
                    Build a Longer India Journey
                </span>

                <h3>
                    Add the destinations that best match your travel time and interests.
                </h3>

            </div>


            <a
                class="idt-gte-bottom-btn"
                href="https://wa.me/918126052755"
                target="_blank"
                rel="noopener"
            >

                Customise My Tour

                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14"></path>
                    <path d="m14 7 5 5-5 5"></path>
                </svg>

            </a>


        </div>


    </div>

</section>