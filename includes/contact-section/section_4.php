<!-- =========================================================
     INDIA DAY TRIP
     PREMIUM CONTACT LOCATION SECTION
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-location-section,
#idt-location-section *{
    box-sizing:border-box;
}

#idt-location-section{

    --idt-navy:#0C2D62;
    --idt-deep:#123B72;
    --idt-blue:#2E6095;
    --idt-sky:#79BDF2;
    --idt-orange:#FF5D00;
    --idt-orange-soft:#FF7A2F;

    --idt-dark:#171817;
    --idt-text:#667486;
    --idt-line:#E2E7EC;
    --idt-warm:#FCFAF6;
    --idt-white:#FFFFFF;

    position:relative;

    width:100%;

    overflow:hidden;

    padding:72px 24px;

    background:
        linear-gradient(
            180deg,
            #FFFFFF 0%,
            #FCFAF6 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   DECORATIVE BACKGROUND
========================================================= */

#idt-location-section::before{

    content:"";

    position:absolute;

    width:420px;
    height:420px;

    left:-210px;
    top:-180px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(121,189,242,.12),
            transparent 68%
        );

    pointer-events:none;
}

#idt-location-section::after{

    content:"";

    position:absolute;

    width:340px;
    height:340px;

    right:-180px;
    bottom:-180px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,93,0,.055),
            transparent 70%
        );

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-location-section .idt-location-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1240px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-location-section .idt-location-header{

    width:100%;
    max-width:760px;

    margin:
        0 auto 40px;

    text-align:center;
}

#idt-location-section .idt-location-script{

    margin:
        0 0 4px;

    color:var(--idt-blue);

    font-family:"Montez",cursive;

    font-size:38px;
    line-height:1;

    font-weight:400;
}

#idt-location-section .idt-location-heading{

    margin:0;

    color:var(--idt-navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:42px;
    line-height:1.16;

    font-weight:700;

    letter-spacing:-.8px;
}

#idt-location-section .idt-location-heading span{
    color:var(--idt-blue);
}

#idt-location-section .idt-location-line{

    display:flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    margin:
        15px auto 16px;
}

#idt-location-section .idt-location-line span:first-child{

    width:54px;
    height:2px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--idt-blue),
            var(--idt-orange)
        );
}

#idt-location-section .idt-location-line span:last-child{

    width:7px;
    height:7px;

    background:var(--idt-orange);

    transform:rotate(45deg);
}

#idt-location-section .idt-location-description{

    max-width:650px;

    margin:0 auto;

    color:var(--idt-text);

    font-size:14px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   MAIN LOCATION BOX
========================================================= */

#idt-location-section .idt-location-box{

    position:relative;

    display:grid;

    grid-template-columns:
        360px
        minmax(0,1fr);

    width:100%;

    min-height:470px;

    overflow:hidden;

    border-radius:22px;

    background:#FFFFFF;

    border:
        1px solid
        rgba(12,45,98,.09);

    box-shadow:
        0 24px 60px
        rgba(12,45,98,.10);
}


/* =========================================================
   LEFT SIDE
========================================================= */

#idt-location-section .idt-location-info{

    position:relative;

    display:flex;

    flex-direction:column;

    justify-content:center;

    overflow:hidden;

    padding:
        46px 38px;

    background:
        linear-gradient(
            160deg,
            #071F3F 0%,
            #0C2D62 58%,
            #123B72 100%
        );
}


/* SUBTLE SHAPES */

#idt-location-section .idt-location-info::before{

    content:"";

    position:absolute;

    width:270px;
    height:270px;

    right:-160px;
    top:-150px;

    border-radius:50%;

    border:
        1px solid
        rgba(121,189,242,.11);

    pointer-events:none;
}

#idt-location-section .idt-location-info::after{

    content:"";

    position:absolute;

    width:200px;
    height:200px;

    left:-110px;
    bottom:-120px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(121,189,242,.12),
            transparent 70%
        );

    pointer-events:none;
}


/* =========================================================
   LOCATION ICON
========================================================= */

#idt-location-section .idt-location-icon{

    position:relative;
    z-index:2;

    display:flex;

    align-items:center;
    justify-content:center;

    width:52px;
    height:52px;

    margin-bottom:23px;

    border-radius:14px;

    border:
        1px solid
        rgba(255,255,255,.15);

    background:
        rgba(255,255,255,.08);

    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);

    color:var(--idt-sky);

    box-shadow:
        inset 0 1px 0
        rgba(255,255,255,.12);
}

#idt-location-section .idt-location-icon svg{

    width:25px;
    height:25px;

    fill:none;

    stroke:currentColor;

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   LOCATION INFO TEXT
========================================================= */

#idt-location-section .idt-location-small{

    position:relative;
    z-index:2;

    display:block;

    margin-bottom:8px;

    color:var(--idt-orange-soft);

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.13em;

    text-transform:uppercase;
}

#idt-location-section .idt-location-title{

    position:relative;
    z-index:2;

    margin:
        0 0 14px;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:28px;
    line-height:1.25;

    font-weight:600;
}

#idt-location-section .idt-location-address{

    position:relative;
    z-index:2;

    margin:0;

    color:
        rgba(255,255,255,.72);

    font-size:13px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   DIVIDER
========================================================= */

#idt-location-section .idt-location-divider{

    position:relative;
    z-index:2;

    width:100%;
    height:1px;

    margin:
        24px 0;

    background:
        rgba(255,255,255,.11);
}


/* =========================================================
   QUICK CONTACT
========================================================= */

#idt-location-section .idt-location-contact{

    position:relative;
    z-index:2;

    display:flex;

    flex-direction:column;

    gap:11px;
}

#idt-location-section .idt-location-contact a{

    display:flex;

    align-items:center;

    gap:10px;

    color:
        rgba(255,255,255,.84);

    text-decoration:none;

    font-size:12px;
    line-height:1.4;

    font-weight:500;

    transition:
        color .3s ease;
}

#idt-location-section .idt-location-contact a:hover{
    color:#FFFFFF;
}

#idt-location-section .idt-location-contact svg{

    width:16px;
    height:16px;

    flex:0 0 16px;

    fill:none;

    stroke:var(--idt-sky);

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   BUTTON
========================================================= */

#idt-location-section .idt-location-button{

    position:relative;
    z-index:2;

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:9px;

    width:max-content;

    margin-top:26px;

    padding:
        13px 19px;

    border-radius:10px;

    background:var(--idt-orange);

    color:#FFFFFF !important;

    text-decoration:none !important;

    font-size:12px;
    line-height:1;

    font-weight:700;

    box-shadow:
        0 10px 22px
        rgba(0,0,0,.16);

    transition:
        transform .3s ease,
        background .3s ease,
        box-shadow .3s ease;
}

#idt-location-section .idt-location-button:hover{

    transform:translateY(-2px);

    background:var(--idt-orange-soft);

    box-shadow:
        0 14px 28px
        rgba(0,0,0,.20);
}

#idt-location-section .idt-location-button svg{

    width:16px;
    height:16px;

    fill:none;

    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   MAP SIDE
========================================================= */

#idt-location-section .idt-location-map{

    position:relative;

    width:100%;
    height:100%;

    min-height:470px;

    overflow:hidden;

    background:#E9EEF3;
}

#idt-location-section .idt-location-map iframe{

    display:block;

    width:100%;
    height:100%;

    min-height:470px;

    border:0;

    filter:
        grayscale(.08)
        saturate(.90)
        contrast(1.02);

    transition:
        filter .35s ease;
}

#idt-location-section .idt-location-map:hover iframe{

    filter:
        grayscale(0)
        saturate(1)
        contrast(1);
}


/* =========================================================
   MAP FLOATING LABEL
========================================================= */

#idt-location-section .idt-map-label{

    position:absolute;

    left:22px;
    bottom:22px;

    z-index:3;

    display:flex;

    align-items:center;

    gap:10px;

    padding:
        11px 14px;

    border:
        1px solid
        rgba(255,255,255,.52);

    border-radius:12px;

    background:
        rgba(255,255,255,.88);

    backdrop-filter:blur(15px);
    -webkit-backdrop-filter:blur(15px);

    box-shadow:
        0 12px 30px
        rgba(12,45,98,.14);
}

#idt-location-section .idt-map-dot{

    width:8px;
    height:8px;

    flex:0 0 8px;

    border-radius:50%;

    background:var(--idt-orange);

    box-shadow:
        0 0 0 5px
        rgba(255,93,0,.10);
}

#idt-location-section .idt-map-label span:last-child{

    color:var(--idt-navy);

    font-size:11px;
    line-height:1.3;

    font-weight:700;
}


/* =========================================================
   TABLET / LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-location-section{
        padding:60px 22px;
    }

    #idt-location-section .idt-location-container{
        max-width:1060px;
    }

    #idt-location-section .idt-location-heading{
        font-size:37px;
    }

    #idt-location-section .idt-location-box{

        grid-template-columns:
            330px
            minmax(0,1fr);

        min-height:440px;
    }

    #idt-location-section .idt-location-info{
        padding:39px 31px;
    }

    #idt-location-section .idt-location-map,
    #idt-location-section .idt-location-map iframe{
        min-height:440px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-location-section{
        padding:52px 20px;
    }

    #idt-location-section .idt-location-header{
        margin-bottom:32px;
    }

    #idt-location-section .idt-location-script{
        font-size:33px;
    }

    #idt-location-section .idt-location-heading{
        font-size:32px;
    }

    #idt-location-section .idt-location-description{
        font-size:12.5px;
    }

    #idt-location-section .idt-location-box{

        grid-template-columns:
            295px
            minmax(0,1fr);

        min-height:410px;

        border-radius:19px;
    }

    #idt-location-section .idt-location-info{
        padding:32px 25px;
    }

    #idt-location-section .idt-location-title{
        font-size:24px;
    }

    #idt-location-section .idt-location-address{
        font-size:11.5px;
    }

    #idt-location-section .idt-location-contact a{
        font-size:10.5px;
    }

    #idt-location-section .idt-location-map,
    #idt-location-section .idt-location-map iframe{
        min-height:410px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-location-section{
        padding:46px 15px;
    }

    #idt-location-section .idt-location-header{
        margin-bottom:29px;
    }

    #idt-location-section .idt-location-script{
        font-size:31px;
    }

    #idt-location-section .idt-location-heading{
        font-size:29px;
    }

    #idt-location-section .idt-location-description{

        max-width:540px;

        font-size:12.5px;
    }

    #idt-location-section .idt-location-box{

        display:flex;

        flex-direction:column;

        min-height:0;

        border-radius:18px;
    }

    #idt-location-section .idt-location-info{

        padding:
            31px 24px 32px;

        text-align:center;

        align-items:center;
    }

    #idt-location-section .idt-location-icon{
        margin:
            0 auto 20px;
    }

    #idt-location-section .idt-location-title{
        font-size:25px;
    }

    #idt-location-section .idt-location-address{
        max-width:430px;
    }

    #idt-location-section .idt-location-divider{
        max-width:390px;
    }

    #idt-location-section .idt-location-contact{
        align-items:center;
    }

    #idt-location-section .idt-location-button{
        margin-top:23px;
    }

    #idt-location-section .idt-location-map,
    #idt-location-section .idt-location-map iframe{

        width:100%;
        height:360px;
        min-height:360px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-location-section{
        padding:40px 13px;
    }

    #idt-location-section .idt-location-header{
        margin-bottom:25px;
    }

    #idt-location-section .idt-location-script{
        font-size:28px;
    }

    #idt-location-section .idt-location-heading{
        font-size:27px;
    }

    #idt-location-section .idt-location-description{
        font-size:12px;
    }

    #idt-location-section .idt-location-info{
        padding:27px 20px 29px;
    }

    #idt-location-section .idt-location-title{
        font-size:23px;
    }

    #idt-location-section .idt-location-contact{
        width:100%;
    }

    #idt-location-section .idt-location-contact a{
        justify-content:center;
    }

    #idt-location-section .idt-location-map,
    #idt-location-section .idt-location-map iframe{

        height:310px;
        min-height:310px;
    }

    #idt-location-section .idt-map-label{

        left:14px;
        bottom:14px;

        padding:9px 11px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-location-section{
        padding:37px 10px;
    }

    #idt-location-section .idt-location-heading{
        font-size:25px;
    }

    #idt-location-section .idt-location-info{
        padding:25px 17px 27px;
    }

    #idt-location-section .idt-location-title{
        font-size:21px;
    }

    #idt-location-section .idt-location-button{
        width:100%;
    }

    #idt-location-section .idt-location-map,
    #idt-location-section .idt-location-map iframe{

        height:285px;
        min-height:285px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-location-section .idt-location-button,
    #idt-location-section .idt-location-map iframe{
        transition:none;
    }

}

</style>


<section id="idt-location-section">

    <div class="idt-location-container">


        <!-- HEADER -->

        <div class="idt-location-header">

            <p class="idt-location-script">
                Find Us in Agra
            </p>

            <h2 class="idt-location-heading">
                Visit <span>India Day Trip</span>
            </h2>

            <div
                class="idt-location-line"
                aria-hidden="true">

                <span></span>
                <span></span>

            </div>

            <p class="idt-location-description">
                Find our location in Agra and connect with the India Day Trip team for your travel plans, private tours and journey assistance.
            </p>

        </div>


        <!-- MAIN LOCATION BOX -->

        <div class="idt-location-box">


            <!-- LEFT INFO -->

            <div class="idt-location-info">

                <div
                    class="idt-location-icon"
                    aria-hidden="true">

                    <svg viewBox="0 0 24 24">

                        <path
                            d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z">
                        </path>

                        <circle
                            cx="12"
                            cy="10"
                            r="2.5">
                        </circle>

                    </svg>

                </div>


                <span class="idt-location-small">
                    Our Location
                </span>


                <h3 class="idt-location-title">
                    India Day Trip, Agra
                </h3>


                <p class="idt-location-address">
                    Shop No. 2, Gupta Market, Tajganj, Agra, Uttar Pradesh, India
                </p>


                <div class="idt-location-divider"></div>


                <div class="idt-location-contact">

                    <a href="tel:+918126052755">

                        <svg viewBox="0 0 24 24">

                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92Z">
                            </path>

                        </svg>

                        +91 81260 52755

                    </a>


                    <a href="mailto:info@indiadaytrip.com">

                        <svg viewBox="0 0 24 24">

                            <rect
                                x="3"
                                y="5"
                                width="18"
                                height="14"
                                rx="2">
                            </rect>

                            <path d="m3 7 9 6 9-6"></path>

                        </svg>

                        info@indiadaytrip.com

                    </a>

                </div>


                <a
                    class="idt-location-button"
                    href="https://maps.app.goo.gl/uz3HcJUNNvTExFg38"
                    target="_blank"
                    rel="noopener noreferrer">

                    Get Directions

                    <svg viewBox="0 0 24 24">

                        <path d="M7 17 17 7"></path>

                        <path d="M7 7h10v10"></path>

                    </svg>

                </a>

            </div>


            <!-- MAP -->

            <div class="idt-location-map">

                <iframe
                    src="https://www.google.com/maps?q=Shop%20No.%202%2C%20Gupta%20Market%2C%20Tajganj%2C%20Agra%2C%20Uttar%20Pradesh%2C%20India&output=embed"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                    title="India Day Trip Location in Agra">
                </iframe>


                <div class="idt-map-label">

                    <span class="idt-map-dot"></span>

                    <span>
                        India Day Trip • Agra
                    </span>

                </div>

            </div>


        </div>

    </div>

</section>