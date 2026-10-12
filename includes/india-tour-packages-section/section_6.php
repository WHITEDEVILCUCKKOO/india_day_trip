<!-- =========================================================
     INDIA DAY TRIP
     INDIA TOUR PACKAGES
     SECTION 06 — BUILT AROUND THE TRAVELER
     EDITORIAL IMAGE + CONTENT LAYOUT
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-traveler-editorial,
#idt-india-traveler-editorial *{
    box-sizing:border-box;
}

#idt-india-traveler-editorial{
    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --orange-soft:#FF7A2F;
    --text:#5B6671;
    --dark-text:#263545;
    --line:#E3E8ED;
    --warm:#FCFAF6;
    --white:#FFFFFF;

    position:relative;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:82px 24px;

    background:var(--warm);

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   BACKGROUND DETAIL
========================================================= */

#idt-india-traveler-editorial::before{
    content:"";

    position:absolute;

    width:420px;
    height:420px;

    left:-210px;
    top:-170px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(121,189,242,.10),
            rgba(121,189,242,0) 70%
        );

    pointer-events:none;
}

#idt-india-traveler-editorial::after{
    content:"";

    position:absolute;

    width:320px;
    height:320px;

    right:-160px;
    bottom:-140px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,93,0,.055),
            rgba(255,93,0,0) 70%
        );

    pointer-events:none;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-india-traveler-editorial .idt-ite-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1200px;

    margin:0 auto;

    display:grid;

    grid-template-columns:
        minmax(0,1.02fr)
        minmax(0,.98fr);

    gap:68px;

    align-items:center;
}


/* =========================================================
   IMAGE COMPOSITION
========================================================= */

#idt-india-traveler-editorial .idt-ite-visual{
    position:relative;

    min-height:590px;
}


/* MAIN IMAGE */

#idt-india-traveler-editorial .idt-ite-main-image{
    position:absolute;

    top:0;
    left:0;

    width:82%;
    height:500px;

    overflow:hidden;

    border-radius:10px;

    box-shadow:
        0 24px 55px
        rgba(12,45,98,.13);
}

#idt-india-traveler-editorial .idt-ite-main-image img{
    width:100%;
    height:100%;

    display:block;

    object-fit:cover;
    object-position:center;
}


/* SMALL IMAGE */

#idt-india-traveler-editorial .idt-ite-small-image{
    position:absolute;

    right:0;
    bottom:0;

    width:48%;
    height:245px;

    overflow:hidden;

    border:8px solid var(--warm);

    border-radius:9px;

    box-shadow:
        0 18px 42px
        rgba(12,45,98,.15);
}

#idt-india-traveler-editorial .idt-ite-small-image img{
    width:100%;
    height:100%;

    display:block;

    object-fit:cover;
}


/* IMAGE LABEL */

#idt-india-traveler-editorial .idt-ite-image-note{
    position:absolute;

    left:22px;
    bottom:56px;

    z-index:4;

    max-width:230px;

    padding:14px 16px;

    border-left:3px solid var(--orange);

    background:
        rgba(7,31,63,.92);

    color:#FFFFFF;

    box-shadow:
        0 12px 30px
        rgba(0,0,0,.16);
}

#idt-india-traveler-editorial .idt-ite-image-note span{
    display:block;

    margin-bottom:4px;

    color:var(--sky);

    font-size:9.5px;
    line-height:1.2;

    font-weight:800;

    letter-spacing:.08em;

    text-transform:uppercase;
}

#idt-india-traveler-editorial .idt-ite-image-note strong{
    display:block;

    font-size:13px;
    line-height:1.55;

    font-weight:700;
}


/* =========================================================
   CONTENT
========================================================= */

#idt-india-traveler-editorial .idt-ite-content{
    width:100%;
}

#idt-india-traveler-editorial .idt-ite-script{
    margin:0 0 7px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-india-traveler-editorial .idt-ite-title{
    margin:0;

    max-width:600px;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:38px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.65px;
}

#idt-india-traveler-editorial .idt-ite-accent{
    display:flex;

    align-items:center;

    gap:7px;

    margin:15px 0 19px;
}

#idt-india-traveler-editorial .idt-ite-accent::before{
    content:"";

    width:42px;
    height:2px;

    background:var(--navy);
}

#idt-india-traveler-editorial .idt-ite-accent span{
    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-india-traveler-editorial .idt-ite-accent::after{
    content:"";

    width:24px;
    height:2px;

    background:var(--orange);
}

#idt-india-traveler-editorial .idt-ite-intro{
    margin:0 0 27px;

    color:var(--text);

    font-size:15px;
    line-height:1.82;
}


/* =========================================================
   CONTENT BLOCKS — NOT CARDS
========================================================= */

#idt-india-traveler-editorial .idt-ite-point{
    position:relative;

    padding:
        18px 0 18px 25px;

    border-top:
        1px solid var(--line);
}

#idt-india-traveler-editorial .idt-ite-point:last-of-type{
    border-bottom:
        1px solid var(--line);
}

#idt-india-traveler-editorial .idt-ite-point::before{
    content:"";

    position:absolute;

    left:0;
    top:24px;

    width:8px;
    height:8px;

    border-radius:50%;

    background:var(--orange);

    box-shadow:
        0 0 0 5px
        rgba(255,93,0,.08);
}

#idt-india-traveler-editorial .idt-ite-point-label{
    display:block;

    margin-bottom:4px;

    color:var(--blue);

    font-size:9.5px;
    line-height:1.2;

    font-weight:800;

    letter-spacing:.09em;

    text-transform:uppercase;
}

#idt-india-traveler-editorial .idt-ite-point h3{
    margin:0 0 6px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:18px;
    line-height:1.42;

    font-weight:800;
}

#idt-india-traveler-editorial .idt-ite-point p{
    margin:0;

    color:var(--text);

    font-size:13.8px;
    line-height:1.72;
}


/* =========================================================
   CTA AREA
========================================================= */

#idt-india-traveler-editorial .idt-ite-action{
    display:flex;

    align-items:center;

    gap:17px;

    margin-top:27px;
}

#idt-india-traveler-editorial .idt-ite-btn{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    min-height:45px;

    padding:11px 18px;

    border-radius:5px;

    background:var(--navy);

    color:#FFFFFF;

    text-decoration:none !important;

    font-size:11.5px;
    line-height:1;

    font-weight:800;

    transition:
        background .25s ease,
        transform .25s ease;
}

#idt-india-traveler-editorial .idt-ite-btn:hover{
    background:#123B72;

    transform:translateY(-2px);
}

#idt-india-traveler-editorial .idt-ite-btn svg{
    width:14px;
    height:14px;

    fill:none;
    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-india-traveler-editorial .idt-ite-contact{
    color:var(--text);

    font-size:11px;
    line-height:1.4;

    font-weight:700;
}

#idt-india-traveler-editorial .idt-ite-contact strong{
    display:block;

    margin-top:2px;

    color:var(--navy);

    font-size:13px;
}


/* =========================================================
   1200
========================================================= */

@media(max-width:1200px){

    #idt-india-traveler-editorial{
        padding:
            72px 28px;
    }

    #idt-india-traveler-editorial .idt-ite-wrap{
        max-width:1060px;

        gap:50px;
    }

    #idt-india-traveler-editorial .idt-ite-visual{
        min-height:540px;
    }

    #idt-india-traveler-editorial .idt-ite-main-image{
        height:455px;
    }

    #idt-india-traveler-editorial .idt-ite-small-image{
        height:220px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-india-traveler-editorial{
        padding:
            62px 20px;
    }

    #idt-india-traveler-editorial .idt-ite-wrap{
        grid-template-columns:1fr;

        gap:45px;

        max-width:760px;
    }

    #idt-india-traveler-editorial .idt-ite-visual{
        min-height:575px;
    }

    #idt-india-traveler-editorial .idt-ite-main-image{
        width:84%;
        height:485px;
    }

    #idt-india-traveler-editorial .idt-ite-small-image{
        width:45%;
        height:230px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-india-traveler-editorial{
        padding:
            52px 15px;
    }

    #idt-india-traveler-editorial .idt-ite-wrap{
        gap:36px;
    }

    #idt-india-traveler-editorial .idt-ite-visual{
        min-height:auto;

        display:grid;

        grid-template-columns:
            1.3fr .7fr;

        grid-template-rows:auto auto;

        gap:10px;
    }

    #idt-india-traveler-editorial .idt-ite-main-image,
    #idt-india-traveler-editorial .idt-ite-small-image{
        position:relative;

        inset:auto;

        width:100%;

        border:0;
    }

    #idt-india-traveler-editorial .idt-ite-main-image{
        grid-column:1 / -1;

        height:340px;
    }

    #idt-india-traveler-editorial .idt-ite-small-image{
        grid-column:2;

        height:150px;

        margin-top:-70px;

        border:
            6px solid var(--warm);
    }

    #idt-india-traveler-editorial .idt-ite-image-note{
        left:14px;
        bottom:14px;

        max-width:210px;
    }

    #idt-india-traveler-editorial .idt-ite-script{
        font-size:28px;
    }

    #idt-india-traveler-editorial .idt-ite-title{
        font-size:30px;
    }

    #idt-india-traveler-editorial .idt-ite-intro{
        font-size:14.7px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-india-traveler-editorial{
        padding:
            46px 13px;
    }

    #idt-india-traveler-editorial .idt-ite-main-image{
        height:285px;
    }

    #idt-india-traveler-editorial .idt-ite-small-image{
        height:125px;

        margin-top:-55px;
    }

    #idt-india-traveler-editorial .idt-ite-image-note{
        max-width:190px;

        padding:
            11px 12px;
    }

    #idt-india-traveler-editorial .idt-ite-script{
        font-size:26px;
    }

    #idt-india-traveler-editorial .idt-ite-title{
        font-size:27px;
    }

    #idt-india-traveler-editorial .idt-ite-point{
        padding:
            16px 0 16px 22px;
    }

    #idt-india-traveler-editorial .idt-ite-point h3{
        font-size:17px;
    }

    #idt-india-traveler-editorial .idt-ite-point p{
        font-size:13.4px;
    }

    #idt-india-traveler-editorial .idt-ite-action{
        align-items:flex-start;

        flex-direction:column;
    }

    #idt-india-traveler-editorial .idt-ite-btn{
        width:100%;
    }

}


/* =========================================================
   360
========================================================= */

@media(max-width:360px){

    #idt-india-traveler-editorial{
        padding:
            42px 10px;
    }

    #idt-india-traveler-editorial .idt-ite-title{
        font-size:25px;
    }

    #idt-india-traveler-editorial .idt-ite-main-image{
        height:250px;
    }

}

</style>


<section id="idt-india-traveler-editorial">

    <div class="idt-ite-wrap">


        <!-- =================================================
             LEFT IMAGE COMPOSITION
        ================================================== -->

        <div class="idt-ite-visual">


            <div class="idt-ite-main-image">

                <img
                    src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1300&q=90"
                    alt="Private India journey"
                    loading="lazy"
                >

            </div>


            <div class="idt-ite-small-image">

                <img
                    src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=900&q=90"
                    alt="Rajasthan travel experience"
                    loading="lazy"
                >

            </div>


            <div class="idt-ite-image-note">

                <span>
                    Your India Journey
                </span>

                <strong>
                    Planned around your time, interests and preferred travel pace.
                </strong>

            </div>


        </div>


        <!-- =================================================
             RIGHT CONTENT
        ================================================== -->

        <div class="idt-ite-content">


            <p class="idt-ite-script">
                Travel Your Own Way
            </p>


            <h2 class="idt-ite-title">
                Every India Journey Starts With the Traveler
            </h2>


            <div
                class="idt-ite-accent"
                aria-hidden="true"
            >
                <span></span>
            </div>


            <p class="idt-ite-intro">
                India offers far more than a fixed route or standard itinerary. The right journey depends on how many days you have, the places that genuinely interest you and the pace at which you want to experience them.
            </p>


            <!-- TRAVEL TIME -->

            <div class="idt-ite-point">

                <span class="idt-ite-point-label">
                    Travel Time
                </span>

                <h3>
                    A Route That Fits the Days You Have
                </h3>

                <p>
                    We shape the route around your actual travel window so your journey feels comfortable and realistic, with enough time for sightseeing instead of unnecessary rushing between destinations.
                </p>

            </div>


            <!-- INTERESTS -->

            <div class="idt-ite-point">

                <span class="idt-ite-point-label">
                    Your Interests
                </span>

                <h3>
                    Choose India Through the Experiences You Want
                </h3>

                <p>
                    Heritage cities, Rajasthan, the Taj Mahal, spiritual destinations, mountain regions or a combination of several experiences can be brought together around what matters most to you.
                </p>

            </div>


            <!-- TRAVEL STYLE -->

            <div class="idt-ite-point">

                <span class="idt-ite-point-label">
                    Travel Style
                </span>

                <h3>
                    Private Travel With More Freedom
                </h3>

                <p>
                    Your itinerary can allow more time in selected cities, prioritise important sights and maintain a more flexible sightseeing pace without following a rigid shared-group schedule.
                </p>

            </div>


            <!-- CTA -->

            <div class="idt-ite-action">

                <a
                    class="idt-ite-btn"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >

                    Plan My India Journey

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>

                </a>


                <div class="idt-ite-contact">

                    Prefer to speak with us?

                    <strong>
                        +91 81260 52755
                    </strong>

                </div>

            </div>


        </div>


    </div>

</section>