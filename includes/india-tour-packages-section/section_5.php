<!-- =========================================================
     INDIA DAY TRIP
     INDIA TOUR PACKAGES
     SECTION 05 — TOUR PACKAGES BY LENGTH OF STAY
     DARK PREMIUM GRADIENT VERSION
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-duration,
#idt-india-duration *{
    box-sizing:border-box;
}

#idt-india-duration{
    --navy:#0C2D62;
    --deep:#071F3F;
    --deep-2:#0A274C;
    --deep-3:#123B72;
    --blue:#2E6095;
    --sky:#79BDF2;
    --light-sky:#A7D8FF;
    --orange:#FF5D00;
    --orange-soft:#FF7A2F;
    --white:#FFFFFF;

    position:relative;
    isolation:isolate;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:76px 24px 80px;

    background:
        radial-gradient(
            circle at 14% 18%,
            rgba(121,189,242,.12),
            transparent 30%
        ),
        radial-gradient(
            circle at 88% 80%,
            rgba(255,93,0,.08),
            transparent 26%
        ),
        linear-gradient(
            135deg,
            #06172E 0%,
            #071F3F 42%,
            #0A2B54 72%,
            #071A34 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   BACKGROUND DETAILS
========================================================= */

#idt-india-duration::before{
    content:"";

    position:absolute;
    inset:0;

    z-index:-1;

    background:
        linear-gradient(
            180deg,
            rgba(255,255,255,.018),
            transparent 38%,
            rgba(255,255,255,.012)
        );

    pointer-events:none;
}

#idt-india-duration::after{
    content:"";

    position:absolute;

    width:420px;
    height:420px;

    right:-180px;
    top:-180px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(121,189,242,.10),
            transparent 70%
        );

    pointer-events:none;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-india-duration .idt-idur-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1180px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-india-duration .idt-idur-head{
    width:100%;
    max-width:780px;

    margin:0 auto 42px;

    text-align:center;
}

#idt-india-duration .idt-idur-script{
    margin:0 0 8px;

    color:var(--sky);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-india-duration .idt-idur-title{
    margin:0;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:36px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.55px;
}

#idt-india-duration .idt-idur-title span{
    color:var(--light-sky);
}


/* ACCENT */

#idt-india-duration .idt-idur-accent{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    margin:14px 0 16px;
}

#idt-india-duration .idt-idur-accent::before{
    content:"";

    width:40px;
    height:2px;

    border-radius:20px;

    background:var(--sky);
}

#idt-india-duration .idt-idur-accent span{
    width:7px;
    height:7px;

    transform:rotate(45deg);

    background:var(--orange);
}

#idt-india-duration .idt-idur-accent::after{
    content:"";

    width:25px;
    height:2px;

    border-radius:20px;

    background:var(--orange);
}


/* LEAD */

#idt-india-duration .idt-idur-lead{
    max-width:690px;

    margin:0 auto;

    color:rgba(255,255,255,.70);

    font-size:15.5px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   GRID
========================================================= */

#idt-india-duration .idt-idur-grid{
    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap:18px;
}


/* =========================================================
   CARD
========================================================= */

#idt-india-duration .idt-idur-card{
    position:relative;

    display:flex;
    flex-direction:column;

    min-width:0;
    min-height:360px;

    overflow:hidden;

    padding:24px 22px 22px;

    border:
        1px solid
        rgba(255,255,255,.12);

    border-radius:12px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.11) 0%,
            rgba(255,255,255,.055) 55%,
            rgba(121,189,242,.035) 100%
        );

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.05),
        0 18px 44px rgba(0,0,0,.16);

    backdrop-filter:blur(14px);
    -webkit-backdrop-filter:blur(14px);

    transition:
        transform .28s ease,
        border-color .28s ease,
        box-shadow .28s ease,
        background .28s ease;
}

#idt-india-duration .idt-idur-card:hover{
    transform:translateY(-5px);

    border-color:
        rgba(121,189,242,.30);

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.135),
            rgba(121,189,242,.055)
        );

    box-shadow:
        0 24px 55px
        rgba(0,0,0,.22);
}


/* TOP GLOW */

#idt-india-duration .idt-idur-card::before{
    content:"";

    position:absolute;

    top:-85px;
    right:-85px;

    width:180px;
    height:180px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(121,189,242,.14),
            transparent 68%
        );

    pointer-events:none;
}


/* FEATURED MIDDLE CARD */

#idt-india-duration .idt-idur-card-featured{
    border-color:
        rgba(255,122,47,.24);

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.12),
            rgba(255,93,0,.055)
        );
}

#idt-india-duration .idt-idur-card-featured::before{
    background:
        radial-gradient(
            circle,
            rgba(255,93,0,.15),
            transparent 68%
        );
}


/* =========================================================
   TOP ROW
========================================================= */

#idt-india-duration .idt-idur-top{
    position:relative;
    z-index:2;

    display:flex;

    align-items:flex-start;
    justify-content:space-between;

    gap:12px;

    margin-bottom:20px;
}


/* DAYS */

#idt-india-duration .idt-idur-number{
    display:flex;

    align-items:flex-end;

    gap:8px;
}

#idt-india-duration .idt-idur-number strong{
    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:54px;
    line-height:.86;

    font-weight:700;

    letter-spacing:-1px;
}

#idt-india-duration .idt-idur-number span{
    padding-bottom:5px;

    color:var(--light-sky);

    font-size:10px;
    line-height:1;

    font-weight:800;

    letter-spacing:.11em;

    text-transform:uppercase;
}


/* TYPE */

#idt-india-duration .idt-idur-type{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    min-height:27px;

    padding:6px 9px;

    border:
        1px solid
        rgba(255,255,255,.13);

    border-radius:4px;

    background:
        rgba(255,255,255,.06);

    color:rgba(255,255,255,.73);

    font-size:9px;
    line-height:1;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;
}

#idt-india-duration
.idt-idur-card-featured
.idt-idur-type{
    border-color:
        rgba(255,122,47,.25);

    background:
        rgba(255,93,0,.09);

    color:#FFB78F;
}


/* =========================================================
   CONTENT
========================================================= */

#idt-india-duration .idt-idur-card h3{
    position:relative;
    z-index:2;

    margin:0 0 10px;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:19px;
    line-height:1.38;

    font-weight:800;

    letter-spacing:-.15px;
}

#idt-india-duration .idt-idur-card p{
    position:relative;
    z-index:2;

    margin:0;

    color:rgba(255,255,255,.65);

    font-size:13.5px;
    line-height:1.72;
}


/* =========================================================
   ROUTE LINE
========================================================= */

#idt-india-duration .idt-idur-route{
    position:relative;
    z-index:2;

    display:flex;

    align-items:center;
    flex-wrap:wrap;

    gap:7px;

    margin-top:17px;
}

#idt-india-duration .idt-idur-route span{
    display:inline-flex;

    align-items:center;

    min-height:27px;

    padding:6px 8px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius:4px;

    background:
        rgba(255,255,255,.055);

    color:rgba(255,255,255,.72);

    font-size:10px;
    line-height:1.1;

    font-weight:700;
}


/* =========================================================
   CTA
========================================================= */

#idt-india-duration .idt-idur-link{
    position:relative;
    z-index:2;

    display:inline-flex;

    align-items:center;

    gap:7px;

    width:max-content;

    margin-top:auto;
    padding-top:22px;

    color:#FF9C65;

    text-decoration:none !important;

    font-size:11.5px;
    line-height:1;

    font-weight:800;

    transition:
        color .25s ease,
        gap .25s ease;
}

#idt-india-duration .idt-idur-link:hover{
    color:#FFFFFF;

    gap:10px;
}

#idt-india-duration .idt-idur-link svg{
    width:14px;
    height:14px;

    fill:none;
    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   BOTTOM STRIP
========================================================= */

#idt-india-duration .idt-idur-bottom{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:24px;

    margin-top:24px;

    padding:19px 20px;

    border:
        1px solid
        rgba(255,255,255,.10);

    border-radius:8px;

    background:
        rgba(255,255,255,.045);

    backdrop-filter:blur(10px);
    -webkit-backdrop-filter:blur(10px);
}

#idt-india-duration .idt-idur-bottom-small{
    display:block;

    margin-bottom:4px;

    color:var(--sky);

    font-size:9.5px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.09em;

    text-transform:uppercase;
}

#idt-india-duration .idt-idur-bottom h3{
    margin:0;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:17px;
    line-height:1.45;

    font-weight:800;
}

#idt-india-duration .idt-idur-bottom-btn{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    flex:0 0 auto;

    min-height:43px;

    padding:10px 16px;

    border-radius:5px;

    background:var(--orange);

    color:#FFFFFF;

    text-decoration:none !important;

    font-size:11.5px;
    line-height:1;

    font-weight:800;

    transition:
        transform .25s ease,
        background .25s ease;
}

#idt-india-duration .idt-idur-bottom-btn:hover{
    transform:translateY(-2px);

    background:var(--orange-soft);
}

#idt-india-duration .idt-idur-bottom-btn svg{
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

    #idt-india-duration{
        padding:
            68px 28px 72px;
    }

    #idt-india-duration .idt-idur-wrap{
        max-width:1060px;
    }

    #idt-india-duration .idt-idur-grid{
        gap:16px;
    }

    #idt-india-duration .idt-idur-card{
        min-height:365px;

        padding:
            22px 19px 20px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-india-duration{
        padding:
            58px 20px 62px;
    }

    #idt-india-duration .idt-idur-grid{
        grid-template-columns:1fr;

        max-width:700px;

        margin-left:auto;
        margin-right:auto;

        gap:15px;
    }

    #idt-india-duration .idt-idur-card{
        min-height:auto;
    }

    #idt-india-duration .idt-idur-link{
        margin-top:20px;
        padding-top:0;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-india-duration{
        padding:
            50px 15px 54px;
    }

    #idt-india-duration .idt-idur-head{
        margin-bottom:32px;
    }

    #idt-india-duration .idt-idur-script{
        font-size:29px;
    }

    #idt-india-duration .idt-idur-title{
        font-size:30px;
    }

    #idt-india-duration .idt-idur-lead{
        font-size:15px;
    }

    #idt-india-duration .idt-idur-bottom{
        flex-direction:column;

        align-items:flex-start;
    }

}


/* =========================================================
   430
========================================================= */

@media(max-width:430px){

    #idt-india-duration{
        padding:
            44px 13px 48px;
    }

    #idt-india-duration .idt-idur-script{
        font-size:27px;
    }

    #idt-india-duration .idt-idur-title{
        font-size:28px;
    }

    #idt-india-duration .idt-idur-lead{
        font-size:14.5px;
    }

    #idt-india-duration .idt-idur-card{
        padding:
            20px 17px 18px;

        border-radius:9px;
    }

    #idt-india-duration .idt-idur-number strong{
        font-size:48px;
    }

    #idt-india-duration .idt-idur-card h3{
        font-size:18px;
    }

    #idt-india-duration .idt-idur-card p{
        font-size:13.2px;
    }

    #idt-india-duration .idt-idur-bottom{
        padding:
            17px 16px;
    }

    #idt-india-duration .idt-idur-bottom-btn{
        width:100%;
    }

}


/* =========================================================
   360
========================================================= */

@media(max-width:360px){

    #idt-india-duration{
        padding:
            40px 10px 44px;
    }

    #idt-india-duration .idt-idur-title{
        font-size:26px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-india-duration *,
    #idt-india-duration *::before,
    #idt-india-duration *::after{
        transition:none !important;
        animation:none !important;
    }

}

</style>


<section id="idt-india-duration">

    <div class="idt-idur-wrap">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-idur-head">

            <p class="idt-idur-script">
                Choose the Pace That Suits You
            </p>


            <h2 class="idt-idur-title">
                India Tour Packages
                <span>by Length of Stay</span>
            </h2>


            <div
                class="idt-idur-accent"
                aria-hidden="true"
            >
                <span></span>
            </div>


            <p class="idt-idur-lead">
                Whether you have one week or two, choose a practical starting point for your India journey and customise the destinations around your available time.
            </p>

        </div>


        <!-- =================================================
             DURATION GRID
        ================================================== -->

        <div class="idt-idur-grid">


            <!-- =================================================
                 7 DAYS
            ================================================== -->

            <article class="idt-idur-card">


                <div class="idt-idur-top">

                    <div class="idt-idur-number">
                        <strong>7</strong>
                        <span>Days</span>
                    </div>

                    <span class="idt-idur-type">
                        Focused Journey
                    </span>

                </div>


                <h3>
                    Classic North India Highlights
                </h3>


                <p>
                    A focused journey for travellers who want to experience some of North India’s most important destinations without trying to cover too much in limited time.
                </p>


                <div class="idt-idur-route">

                    <span>Delhi</span>
                    <span>Agra</span>
                    <span>Jaipur</span>

                </div>


                <a
                    class="idt-idur-link"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >

                    Plan 7 Day Journey

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>

                </a>


            </article>


            <!-- =================================================
                 10 DAYS
            ================================================== -->

            <article class="idt-idur-card idt-idur-card-featured">


                <div class="idt-idur-top">

                    <div class="idt-idur-number">
                        <strong>10</strong>
                        <span>Days</span>
                    </div>

                    <span class="idt-idur-type">
                        Extended Highlights
                    </span>

                </div>


                <h3>
                    Golden Triangle Plus One Extension
                </h3>


                <p>
                    Add another destination to the classic Golden Triangle and create a broader India experience while keeping travel distances and sightseeing time well balanced.
                </p>


                <div class="idt-idur-route">

                    <span>Delhi</span>
                    <span>Agra</span>
                    <span>Jaipur</span>
                    <span>+ Extension</span>

                </div>


                <a
                    class="idt-idur-link"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >

                    Plan 10 Day Journey

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>

                </a>


            </article>


            <!-- =================================================
                 14 DAYS
            ================================================== -->

            <article class="idt-idur-card">


                <div class="idt-idur-top">

                    <div class="idt-idur-number">
                        <strong>14</strong>
                        <span>Days</span>
                    </div>

                    <span class="idt-idur-type">
                        Deeper Exploration
                    </span>

                </div>


                <h3>
                    Multi-Region India Journey
                </h3>


                <p>
                    Two weeks gives you more freedom to explore multiple destinations at a comfortable pace and combine North India with Rajasthan, cultural regions or another extension.
                </p>


                <div class="idt-idur-route">

                    <span>North India</span>
                    <span>Rajasthan</span>
                    <span>Beyond</span>

                </div>


                <a
                    class="idt-idur-link"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >

                    Plan 14 Day Journey

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

        <div class="idt-idur-bottom">


            <div>

                <span class="idt-idur-bottom-small">
                    Your Dates. Your Route.
                </span>

                <h3>
                    Have fewer than 7 days or more than 14? We can shape the itinerary around your exact travel schedule.
                </h3>

            </div>


            <a
                class="idt-idur-bottom-btn"
                href="https://wa.me/918126052755"
                target="_blank"
                rel="noopener"
            >

                Customise My Duration

                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14"></path>
                    <path d="m14 7 5 5-5 5"></path>
                </svg>

            </a>


        </div>


    </div>

</section>