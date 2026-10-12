<!-- =========================================================
 INDIA DAY TRIP
 INDIA TOUR PACKAGES
 SECTION 11 — FINAL CTA
 PREMIUM DARK CLOSING SECTION
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-final-cta,
#idt-india-final-cta *{
    box-sizing:border-box;
}

#idt-india-final-cta{
    --navy:#0C2D62;
    --deep:#071F3F;
    --deep2:#092B54;
    --blue:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --orange2:#FF7A2F;
    --white:#FFFFFF;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:82px 24px 84px;

    background:
        radial-gradient(
            circle at 12% 20%,
            rgba(121,189,242,.13),
            transparent 28%
        ),
        radial-gradient(
            circle at 90% 85%,
            rgba(255,93,0,.08),
            transparent 24%
        ),
        linear-gradient(
            135deg,
            #06172E 0%,
            #071F3F 48%,
            #0A2D57 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   DECORATIVE LINES
========================================================= */

#idt-india-final-cta::before{
    content:"";
    position:absolute;
    width:460px;
    height:460px;
    right:-220px;
    top:-220px;
    border:1px solid rgba(255,255,255,.05);
    border-radius:50%;
    pointer-events:none;
}

#idt-india-final-cta::after{
    content:"";
    position:absolute;
    left:0;
    right:0;
    bottom:0;
    height:1px;
    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.18),
            transparent
        );
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-india-final-cta .idt-ifc-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1180px;

    margin:0 auto;

    display:grid;

    grid-template-columns:
        minmax(0,1.2fr)
        minmax(310px,.8fr);

    gap:78px;

    align-items:center;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#idt-india-final-cta .idt-ifc-script{
    margin:0 0 9px;

    color:var(--sky);

    font-family:"Montez",cursive;

    font-size:32px;
    line-height:1;
}

#idt-india-final-cta .idt-ifc-title{
    margin:0;

    max-width:720px;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:42px;
    line-height:1.18;

    font-weight:700;

    letter-spacing:-.7px;
}

#idt-india-final-cta .idt-ifc-title span{
    color:var(--sky);
}

#idt-india-final-cta .idt-ifc-accent{
    display:flex;
    align-items:center;
    gap:7px;

    margin:18px 0 21px;
}

#idt-india-final-cta .idt-ifc-accent::before{
    content:"";
    width:44px;
    height:2px;
    background:var(--sky);
}

#idt-india-final-cta .idt-ifc-accent span{
    width:7px;
    height:7px;
    background:var(--orange);
    transform:rotate(45deg);
}

#idt-india-final-cta .idt-ifc-accent::after{
    content:"";
    width:25px;
    height:2px;
    background:var(--orange);
}

#idt-india-final-cta .idt-ifc-copy{
    max-width:700px;

    margin:0;

    color:rgba(255,255,255,.72);

    font-size:15px;
    line-height:1.8;
}


/* =========================================================
   SIMPLE INFO LINE
========================================================= */

#idt-india-final-cta .idt-ifc-info{
    display:flex;
    align-items:center;
    gap:10px;

    margin-top:27px;

    color:rgba(255,255,255,.78);

    font-size:12.5px;
    line-height:1.55;

    font-weight:600;
}

#idt-india-final-cta .idt-ifc-info svg{
    width:18px;
    height:18px;
    flex:0 0 18px;

    fill:none;
    stroke:var(--sky);

    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RIGHT ACTION AREA
========================================================= */

#idt-india-final-cta .idt-ifc-action{
    padding-left:38px;

    border-left:
        1px solid
        rgba(255,255,255,.13);
}

#idt-india-final-cta .idt-ifc-action-label{
    display:block;

    margin-bottom:7px;

    color:#FF9A62;

    font-size:9.5px;
    line-height:1.2;

    font-weight:800;

    letter-spacing:.1em;

    text-transform:uppercase;
}

#idt-india-final-cta .idt-ifc-action h3{
    margin:0 0 11px;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:20px;
    line-height:1.45;

    font-weight:800;
}

#idt-india-final-cta .idt-ifc-action p{
    margin:0 0 22px;

    color:rgba(255,255,255,.62);

    font-size:13px;
    line-height:1.7;
}


/* =========================================================
   BUTTONS
========================================================= */

#idt-india-final-cta .idt-ifc-buttons{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
}

#idt-india-final-cta .idt-ifc-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-height:46px;

    padding:12px 18px;

    border-radius:4px;

    text-decoration:none !important;

    font-size:11.5px;
    line-height:1;

    font-weight:800;

    transition:
        transform .25s ease,
        background .25s ease,
        border-color .25s ease;
}

#idt-india-final-cta .idt-ifc-btn-primary{
    background:var(--orange);
    color:#FFFFFF;
}

#idt-india-final-cta .idt-ifc-btn-primary:hover{
    background:var(--orange2);
    transform:translateY(-2px);
}

#idt-india-final-cta .idt-ifc-btn-secondary{
    border:1px solid rgba(255,255,255,.22);
    background:rgba(255,255,255,.04);
    color:#FFFFFF;
}

#idt-india-final-cta .idt-ifc-btn-secondary:hover{
    border-color:rgba(121,189,242,.45);
    background:rgba(121,189,242,.07);
    transform:translateY(-2px);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:1050px){

    #idt-india-final-cta{
        padding:72px 28px 74px;
    }

    #idt-india-final-cta .idt-ifc-wrap{
        gap:55px;
    }

    #idt-india-final-cta .idt-ifc-title{
        font-size:38px;
    }
}


@media(max-width:991px){

    #idt-india-final-cta{
        padding:62px 20px 66px;
    }

    #idt-india-final-cta .idt-ifc-wrap{
        grid-template-columns:1fr;

        gap:38px;

        max-width:760px;
    }

    #idt-india-final-cta .idt-ifc-action{
        padding-left:0;
        padding-top:28px;

        border-left:0;

        border-top:
            1px solid
            rgba(255,255,255,.13);
    }
}


@media(max-width:767px){

    #idt-india-final-cta{
        padding:52px 15px 56px;
    }

    #idt-india-final-cta .idt-ifc-script{
        font-size:28px;
    }

    #idt-india-final-cta .idt-ifc-title{
        font-size:31px;
    }

    #idt-india-final-cta .idt-ifc-copy{
        font-size:14.5px;
    }
}


@media(max-width:430px){

    #idt-india-final-cta{
        padding:46px 13px 50px;
    }

    #idt-india-final-cta .idt-ifc-script{
        font-size:26px;
    }

    #idt-india-final-cta .idt-ifc-title{
        font-size:27px;
    }

    #idt-india-final-cta .idt-ifc-copy{
        font-size:13.8px;
    }

    #idt-india-final-cta .idt-ifc-action h3{
        font-size:18px;
    }

    #idt-india-final-cta .idt-ifc-buttons{
        display:grid;

        grid-template-columns:1fr;
    }

    #idt-india-final-cta .idt-ifc-btn{
        width:100%;
    }
}


@media(max-width:360px){

    #idt-india-final-cta{
        padding:42px 10px 46px;
    }

    #idt-india-final-cta .idt-ifc-title{
        font-size:25px;
    }

}

</style>


<section id="idt-india-final-cta">

    <div class="idt-ifc-wrap">


        <!-- LEFT -->

        <div class="idt-ifc-left">

            <p class="idt-ifc-script">
                Your India Journey Starts Here
            </p>

            <h2 class="idt-ifc-title">
                Ready to Plan Your
                <span>India Journey?</span>
            </h2>

            <div class="idt-ifc-accent">
                <span></span>
            </div>

            <p class="idt-ifc-copy">
                Tell us when you are travelling, how many days you have and the destinations you would most like to explore. Your itinerary can then be shaped around your preferred route, travel pace and sightseeing interests.
            </p>

            <div class="idt-ifc-info">

                <svg viewBox="0 0 24 24">
                    <path d="M9 18 3 21V6l6-3 6 3 6-3v15l-6 3-6-3z"></path>
                    <path d="M9 3v15"></path>
                    <path d="M15 6v15"></path>
                </svg>

                <span>
                    Private routes • Flexible duration • Multi-city journeys
                </span>

            </div>

        </div>


        <!-- RIGHT -->

        <div class="idt-ifc-action">

            <span class="idt-ifc-action-label">
                Start Planning
            </span>

            <h3>
                Share Your Travel Plans With Us
            </h3>

            <p>
                Send your preferred travel dates, number of days and the places you want to visit. We can then discuss a suitable India itinerary around your requirements.
            </p>

            <div class="idt-ifc-buttons">

                <a
                    class="idt-ifc-btn idt-ifc-btn-primary"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >
                    Plan My India Tour
                </a>

                <a
                    class="idt-ifc-btn idt-ifc-btn-secondary"
                    href="tel:+918126052755"
                >
                    Call Us
                </a>

            </div>

        </div>


    </div>

</section>