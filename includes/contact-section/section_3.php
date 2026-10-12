<!-- =========================================================
     INDIA DAY TRIP — CONTACT DETAIL CARDS
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

/* =========================================================
   BASE
========================================================= */

#idt-contact-cards,
#idt-contact-cards *{
    box-sizing:border-box;
}

#idt-contact-cards{

    --idt-navy:#0C2D62;
    --idt-deep:#123B72;
    --idt-blue:#2E6095;
    --idt-sky:#79BDF2;

    --idt-orange:#FF5D00;
    --idt-orange-soft:#FF7A2F;

    --idt-text:#647487;
    --idt-muted:#8B97A4;

    --idt-white:#FFFFFF;
    --idt-warm:#FCFAF6;
    --idt-cream:#F7F3E9;
    --idt-line:#E2E7EC;

    position:relative;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:66px 24px;

    background:
        radial-gradient(
            circle at 6% 10%,
            rgba(46,96,149,.07),
            transparent 26%
        ),
        radial-gradient(
            circle at 94% 90%,
            rgba(255,93,0,.045),
            transparent 25%
        ),
        #FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   DECORATION
========================================================= */

#idt-contact-cards::before{

    content:"";

    position:absolute;

    left:-120px;
    top:40px;

    width:250px;
    height:250px;

    border-radius:50%;

    border:
        1px solid
        rgba(12,45,98,.07);

    pointer-events:none;
}


#idt-contact-cards::after{

    content:"";

    position:absolute;

    right:-100px;
    bottom:-110px;

    width:270px;
    height:270px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(12,45,98,.055),
            transparent 70%
        );

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-contact-cards .idt-cc-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1240px;

    margin:0 auto;
}


/* =========================================================
   GRID
========================================================= */

#idt-contact-cards .idt-cc-grid{

    display:grid;

    grid-template-columns:
        repeat(4,minmax(0,1fr));

    gap:18px;
}


/* =========================================================
   CARD
========================================================= */

#idt-contact-cards .idt-cc-card{

    position:relative;

    min-height:248px;

    display:flex;

    flex-direction:column;

    padding:26px 23px 22px;

    overflow:hidden;

    border:
        1px solid
        rgba(12,45,98,.10);

    border-radius:16px;

    background:#FFFFFF;

    text-decoration:none !important;

    box-shadow:
        0 10px 30px
        rgba(12,45,98,.055);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}


#idt-contact-cards a.idt-cc-card,
#idt-contact-cards a.idt-cc-card:link,
#idt-contact-cards a.idt-cc-card:visited{

    text-decoration:none !important;
}


/* =========================================================
   TOP ACCENT
========================================================= */

#idt-contact-cards .idt-cc-card::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:4px;

    background:
        linear-gradient(
            90deg,
            var(--idt-navy) 0%,
            var(--idt-blue) 72%,
            var(--idt-orange) 100%
        );

    transform:scaleX(.32);

    transform-origin:left center;

    transition:
        transform .35s ease;
}


#idt-contact-cards .idt-cc-card:hover::before{
    transform:scaleX(1);
}


/* =========================================================
   SOFT CARD GLOW
========================================================= */

#idt-contact-cards .idt-cc-card::after{

    content:"";

    position:absolute;

    top:-80px;
    right:-80px;

    width:165px;
    height:165px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(46,96,149,.075),
            transparent 70%
        );

    pointer-events:none;
}


/* =========================================================
   CARD HOVER
========================================================= */

#idt-contact-cards .idt-cc-card:hover{

    transform:translateY(-5px);

    border-color:
        rgba(46,96,149,.25);

    box-shadow:
        0 18px 42px
        rgba(12,45,98,.10);
}


/* =========================================================
   TOP ROW
========================================================= */

#idt-contact-cards .idt-cc-top{

    position:relative;
    z-index:2;

    display:flex;

    align-items:center;
    justify-content:space-between;

    margin-bottom:23px;
}


/* =========================================================
   ICON
========================================================= */

#idt-contact-cards .idt-cc-icon{

    width:52px;
    height:52px;

    flex:0 0 52px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:13px;

    border:
        1px solid
        rgba(12,45,98,.10);

    background:
        rgba(12,45,98,.055);

    transition:
        transform .3s ease,
        background .3s ease,
        border-color .3s ease;
}


#idt-contact-cards .idt-cc-card:hover .idt-cc-icon{

    transform:translateY(-2px);

    background:
        rgba(255,93,0,.065);

    border-color:
        rgba(255,93,0,.15);
}


#idt-contact-cards .idt-cc-icon svg{

    width:23px;
    height:23px;

    fill:none;

    stroke:var(--idt-blue);

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   NUMBER
========================================================= */

#idt-contact-cards .idt-cc-number{

    color:
        rgba(12,45,98,.12) !important;

    font-size:28px;
    line-height:1;

    font-weight:800;
}


/* =========================================================
   LABEL
========================================================= */

#idt-contact-cards .idt-cc-label{

    position:relative;
    z-index:2;

    display:block;

    margin-bottom:7px;

    color:var(--idt-orange) !important;

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    text-transform:uppercase;

    letter-spacing:.12em;
}


/* =========================================================
   TITLE
========================================================= */

#idt-contact-cards .idt-cc-title{

    position:relative;
    z-index:2;

    margin:0 0 9px !important;
    padding:0 !important;

    color:var(--idt-navy) !important;

    font-family:"Manrope",Arial,sans-serif !important;

    font-size:17px;
    line-height:1.4;

    font-weight:700;

    word-break:break-word;
}


/* =========================================================
   DETAIL
========================================================= */

#idt-contact-cards .idt-cc-detail{

    position:relative;
    z-index:2;

    margin:0 !important;
    padding:0 !important;

    color:var(--idt-text) !important;

    font-size:11.5px;
    line-height:1.7;

    font-weight:500;

    word-break:break-word;
}


/* =========================================================
   ARROW
========================================================= */

#idt-contact-cards .idt-cc-arrow{

    position:relative;
    z-index:2;

    width:34px;
    height:34px;

    flex:0 0 34px;

    display:flex;

    align-items:center;
    justify-content:center;

    align-self:flex-end;

    margin-top:auto;

    border-radius:50%;

    border:
        1px solid
        rgba(12,45,98,.08);

    background:
        rgba(12,45,98,.05);

    color:var(--idt-blue) !important;

    transition:
        background .3s ease,
        border-color .3s ease,
        color .3s ease,
        transform .3s ease;
}


#idt-contact-cards .idt-cc-card:hover .idt-cc-arrow{

    transform:translateX(3px);

    border-color:var(--idt-navy);

    background:var(--idt-navy);

    color:#FFFFFF !important;
}


#idt-contact-cards .idt-cc-arrow svg{

    width:15px;
    height:15px;

    fill:none;

    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   WHATSAPP
========================================================= */

#idt-contact-cards .idt-cc-whatsapp .idt-cc-icon{

    background:
        rgba(20,154,118,.065);

    border-color:
        rgba(20,154,118,.13);
}


#idt-contact-cards .idt-cc-whatsapp .idt-cc-icon svg{
    stroke:#149A76;
}


#idt-contact-cards .idt-cc-whatsapp:hover .idt-cc-icon{

    background:
        rgba(20,154,118,.10);

    border-color:
        rgba(20,154,118,.20);
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-contact-cards{

        padding:
            58px 22px;
    }


    #idt-contact-cards .idt-cc-container{
        max-width:1060px;
    }


    #idt-contact-cards .idt-cc-grid{
        gap:14px;
    }


    #idt-contact-cards .idt-cc-card{

        min-height:235px;

        padding:
            23px 20px 20px;
    }


    #idt-contact-cards .idt-cc-title{
        font-size:15px;
    }


    #idt-contact-cards .idt-cc-detail{
        font-size:10.5px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-contact-cards{

        padding:
            52px 22px;
    }


    #idt-contact-cards .idt-cc-container{
        max-width:900px;
    }


    #idt-contact-cards .idt-cc-grid{

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:14px;
    }


    #idt-contact-cards .idt-cc-card{

        min-height:220px;

        padding:
            22px 20px;
    }


    #idt-contact-cards .idt-cc-icon{

        width:47px;
        height:47px;

        flex-basis:47px;
    }


    #idt-contact-cards .idt-cc-icon svg{

        width:21px;
        height:21px;
    }


    #idt-contact-cards .idt-cc-title{
        font-size:16px;
    }


    #idt-contact-cards .idt-cc-detail{
        font-size:11px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-contact-cards{

        padding:
            46px 15px;
    }


    #idt-contact-cards .idt-cc-grid{

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:11px;
    }


    #idt-contact-cards .idt-cc-card{

        min-height:205px;

        padding:
            18px 15px;

        border-radius:14px;
    }


    #idt-contact-cards .idt-cc-top{
        margin-bottom:17px;
    }


    #idt-contact-cards .idt-cc-icon{

        width:42px;
        height:42px;

        flex-basis:42px;

        border-radius:11px;
    }


    #idt-contact-cards .idt-cc-icon svg{

        width:19px;
        height:19px;
    }


    #idt-contact-cards .idt-cc-number{
        font-size:21px;
    }


    #idt-contact-cards .idt-cc-label{

        margin-bottom:5px;

        font-size:8px;
    }


    #idt-contact-cards .idt-cc-title{

        margin-bottom:7px !important;

        font-size:13px;
    }


    #idt-contact-cards .idt-cc-detail{

        font-size:9.5px;

        line-height:1.6;
    }


    #idt-contact-cards .idt-cc-arrow{

        width:30px;
        height:30px;

        flex-basis:30px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-contact-cards{

        padding:
            42px 13px;
    }


    #idt-contact-cards .idt-cc-grid{

        grid-template-columns:1fr;

        gap:12px;
    }


    #idt-contact-cards .idt-cc-card{

        min-height:auto;

        padding:
            19px 17px;

        border-radius:14px;
    }


    #idt-contact-cards .idt-cc-top{

        margin-bottom:14px;
    }


    #idt-contact-cards .idt-cc-icon{

        width:44px;
        height:44px;

        flex-basis:44px;
    }


    #idt-contact-cards .idt-cc-icon svg{

        width:20px;
        height:20px;
    }


    #idt-contact-cards .idt-cc-number{
        font-size:22px;
    }


    #idt-contact-cards .idt-cc-label{
        font-size:8px;
    }


    #idt-contact-cards .idt-cc-title{
        font-size:15px;
    }


    #idt-contact-cards .idt-cc-detail{

        font-size:10.5px;

        line-height:1.65;

        padding-right:6px !important;
    }


    #idt-contact-cards .idt-cc-arrow{

        margin-top:18px;

        align-self:flex-start;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-contact-cards{

        padding:
            38px 10px;
    }


    #idt-contact-cards .idt-cc-card{

        padding:
            17px 15px;
    }


    #idt-contact-cards .idt-cc-title{
        font-size:14px;
    }


    #idt-contact-cards .idt-cc-detail{
        font-size:10px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-contact-cards .idt-cc-card,
    #idt-contact-cards .idt-cc-card::before,
    #idt-contact-cards .idt-cc-icon,
    #idt-contact-cards .idt-cc-arrow{

        transition:none;
    }

}

</style>


<section id="idt-contact-cards">

    <div class="idt-cc-container">

        <div class="idt-cc-grid">


            <!-- =================================================
                 PHONE
            ================================================== -->

            <a
                href="tel:+918126052755"
                class="idt-cc-card">

                <div class="idt-cc-top">

                    <div class="idt-cc-icon">

                        <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true">

                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92z"></path>

                        </svg>

                    </div>


                    <span class="idt-cc-number">
                        01
                    </span>

                </div>


                <span class="idt-cc-label">
                    Call Us
                </span>


                <h3 class="idt-cc-title">
                    +91 81260 52755
                </h3>


                <p class="idt-cc-detail">
                    Speak directly with the India Day Trip team for your travel plans and tour enquiries.
                </p>


                <span class="idt-cc-arrow">

                    <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true">

                        <path d="M5 12h14"></path>
                        <path d="M13 6l6 6-6 6"></path>

                    </svg>

                </span>

            </a>


            <!-- =================================================
                 WHATSAPP
            ================================================== -->

            <a
                href="https://wa.me/918126052755"
                target="_blank"
                rel="noopener"
                class="idt-cc-card idt-cc-whatsapp">

                <div class="idt-cc-top">

                    <div class="idt-cc-icon">

                        <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true">

                            <path d="M21 11.5a8.5 8.5 0 0 1-12.5 7.5L3 21l2-5.2A8.5 8.5 0 1 1 21 11.5z"></path>

                            <path d="M8.5 8.5c.7 3.1 2.4 4.9 5.8 6"></path>

                        </svg>

                    </div>


                    <span class="idt-cc-number">
                        02
                    </span>

                </div>


                <span class="idt-cc-label">
                    WhatsApp
                </span>


                <h3 class="idt-cc-title">
                    +91 81260 52755
                </h3>


                <p class="idt-cc-detail">
                    Connect with us on WhatsApp for quick assistance before or during your India journey.
                </p>


                <span class="idt-cc-arrow">

                    <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true">

                        <path d="M5 12h14"></path>
                        <path d="M13 6l6 6-6 6"></path>

                    </svg>

                </span>

            </a>


            <!-- =================================================
                 EMAIL
            ================================================== -->

            <a
                href="mailto:info@indiadaytrip.com"
                class="idt-cc-card">

                <div class="idt-cc-top">

                    <div class="idt-cc-icon">

                        <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true">

                            <rect
                                x="3"
                                y="5"
                                width="18"
                                height="14"
                                rx="2">
                            </rect>

                            <path d="M3 7l9 6 9-6"></path>

                        </svg>

                    </div>


                    <span class="idt-cc-number">
                        03
                    </span>

                </div>


                <span class="idt-cc-label">
                    Email Us
                </span>


                <h3 class="idt-cc-title">
                    info@indiadaytrip.com
                </h3>


                <p class="idt-cc-detail">
                    Send your tour requirements, travel dates and itinerary details directly to our team.
                </p>


                <span class="idt-cc-arrow">

                    <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true">

                        <path d="M5 12h14"></path>
                        <path d="M13 6l6 6-6 6"></path>

                    </svg>

                </span>

            </a>


            <!-- =================================================
                 ADDRESS
            ================================================== -->

            <div class="idt-cc-card">

                <div class="idt-cc-top">

                    <div class="idt-cc-icon">

                        <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true">

                            <path d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0z"></path>

                            <circle
                                cx="12"
                                cy="10"
                                r="3">
                            </circle>

                        </svg>

                    </div>


                    <span class="idt-cc-number">
                        04
                    </span>

                </div>


                <span class="idt-cc-label">
                    Visit Us
                </span>


                <h3 class="idt-cc-title">
                    Agra, India
                </h3>


                <p class="idt-cc-detail">
                    Shop No. 2, Gupta Market, Tajganj, Agra, Uttar Pradesh, India
                </p>


                <span class="idt-cc-arrow">

                    <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true">

                        <path d="M5 12h14"></path>
                        <path d="M13 6l6 6-6 6"></path>

                    </svg>

                </span>

            </div>


        </div>

    </div>

</section>