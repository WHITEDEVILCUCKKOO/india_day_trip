<!-- =========================================================
     INDIA DAY TRIP
     GOLDEN TRIANGLE TOUR PACKAGES
     SECTION 01 — FULL SCREEN DESKTOP HERO
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-gt-hero-final,
#idt-gt-hero-final *{
    box-sizing:border-box;
}

#idt-gt-hero-final{
    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#2E6095;
    --sky:#79BDF2;
    --light-sky:#A7D8FF;
    --orange:#FF5D00;
    --white:#FFFFFF;

    position:relative;
    isolation:isolate;

    width:100%;
    max-width:100%;

    /* FULL SCREEN PC / LAPTOP */
    min-height:680px;
    height:calc(100vh - 80px);
    height:calc(100svh - 80px);
    max-height:920px;

    display:flex;
    align-items:center;

    overflow:hidden;

    padding:50px 24px;

    background-image:
        linear-gradient(
            90deg,
            rgba(5,20,39,.94) 0%,
            rgba(6,27,52,.87) 46%,
            rgba(5,23,44,.70) 100%
        ),
        url("https://indiadaytrip.com/assets/img/about/about-golden.webp");

    background-size:cover;
    background-position:center center;
    background-repeat:no-repeat;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   BACKGROUND EFFECT
========================================================= */

#idt-gt-hero-final::before{
    content:"";

    position:absolute;
    inset:0;

    z-index:-1;

    background:
        radial-gradient(
            circle at 76% 25%,
            rgba(121,189,242,.13),
            transparent 30%
        ),
        radial-gradient(
            circle at 15% 85%,
            rgba(255,93,0,.08),
            transparent 26%
        ),
        linear-gradient(
            180deg,
            rgba(0,0,0,.04),
            transparent 45%,
            rgba(0,0,0,.20)
        );

    pointer-events:none;
}


/* =========================================================
   MAIN WRAPPER
========================================================= */

#idt-gt-hero-final .idt-gt-wrap{
    position:relative;
    z-index:2;

    width:100%;
    max-width:1240px;

    margin:0 auto;

    display:grid;

    grid-template-columns:
        minmax(0,1fr)
        minmax(370px,415px);

    gap:52px;

    align-items:center;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#idt-gt-hero-final .idt-gt-content{
    width:100%;
    max-width:720px;

    margin:0;

    text-align:left;
}


/* =========================================================
   LABEL
========================================================= */

#idt-gt-hero-final .idt-gt-label{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    margin:0 0 14px;

    padding:7px 12px;

    border:
        1px solid
        rgba(255,122,47,.32);

    border-radius:4px;

    background:
        rgba(255,93,0,.12);

    color:#FFD1B7;

    font-size:11px;
    line-height:1.2;

    font-weight:800;

    letter-spacing:.065em;

    text-transform:uppercase;
}

#idt-gt-hero-final .idt-gt-label svg{
    width:14px;
    height:14px;

    flex:0 0 14px;

    fill:none;
    stroke:#FF8A4A;

    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   SCRIPT
========================================================= */

#idt-gt-hero-final .idt-gt-script{
    margin:0 0 7px;

    color:var(--sky);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;

    text-align:left;
}


/* =========================================================
   HEADING
========================================================= */

#idt-gt-hero-final .idt-gt-title{
    max-width:700px;

    margin:0;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:45px;
    line-height:1.12;

    font-weight:700;

    letter-spacing:-.8px;

    text-align:left;
}

#idt-gt-hero-final .idt-gt-title span{
    display:block;

    margin-top:3px;

    color:var(--light-sky);
}


/* =========================================================
   ACCENT
========================================================= */

#idt-gt-hero-final .idt-gt-accent{
    display:flex;

    align-items:center;
    justify-content:flex-start;

    gap:7px;

    margin:14px 0 15px;
}

#idt-gt-hero-final .idt-gt-accent::before,
#idt-gt-hero-final .idt-gt-accent::after{
    content:"";

    height:2px;

    border-radius:20px;
}

#idt-gt-hero-final .idt-gt-accent::before{
    width:34px;

    background:var(--sky);
}

#idt-gt-hero-final .idt-gt-accent::after{
    width:34px;

    background:var(--orange);
}

#idt-gt-hero-final .idt-gt-accent span{
    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}


/* =========================================================
   DESCRIPTION
========================================================= */

#idt-gt-hero-final .idt-gt-desc{
    max-width:660px;

    margin:0;

    color:rgba(255,255,255,.78);

    font-size:16px;
    line-height:1.7;

    font-weight:400;

    text-align:left;
}


/* =========================================================
   ROUTE
========================================================= */

#idt-gt-hero-final .idt-gt-route{
    display:flex;

    align-items:center;
    justify-content:flex-start;

    flex-wrap:nowrap;

    gap:9px;

    width:100%;

    margin:18px 0 0;
}

#idt-gt-hero-final .idt-route-place{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:6px;

    white-space:nowrap;

    color:#FFFFFF;

    font-size:13.5px;
    line-height:1.3;

    font-weight:800;
}

#idt-gt-hero-final .idt-route-place svg{
    width:15px;
    height:15px;

    flex:0 0 15px;

    fill:none;
    stroke:var(--sky);

    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-gt-hero-final .idt-route-arrow{
    display:flex;

    align-items:center;
    justify-content:center;

    color:rgba(255,255,255,.40);
}

#idt-gt-hero-final .idt-route-arrow svg{
    width:22px;
    height:14px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.5;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   BUTTONS
========================================================= */

#idt-gt-hero-final .idt-gt-actions{
    display:grid;

    grid-template-columns:max-content 128px;

    gap:10px;

    width:auto;

    margin:21px 0 0;

    justify-content:start;
}

#idt-gt-hero-final .idt-gt-btn{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    width:100%;

    min-height:45px;

    padding:10px 14px;

    border-radius:5px;

    text-decoration:none !important;

    font-family:"Manrope",Arial,sans-serif;

    font-size:12.5px;
    line-height:1.2;

    font-weight:800;

    white-space:nowrap;

    transition:
        transform .25s ease,
        background .25s ease,
        border-color .25s ease;
}

#idt-gt-hero-final .idt-gt-btn-primary{
    width:auto;

    padding-left:18px;
    padding-right:18px;

    background:var(--orange);

    border:1px solid var(--orange);

    color:#FFFFFF;
}

#idt-gt-hero-final .idt-gt-btn-primary:hover{
    background:#E95400;

    border-color:#E95400;

    transform:translateY(-2px);
}

#idt-gt-hero-final .idt-gt-btn-secondary{
    width:128px;

    background:
        rgba(255,255,255,.07);

    border:
        1px solid
        rgba(255,255,255,.25);

    color:#FFFFFF;

    backdrop-filter:blur(8px);
    -webkit-backdrop-filter:blur(8px);
}

#idt-gt-hero-final .idt-gt-btn-secondary:hover{
    background:
        rgba(255,255,255,.12);

    border-color:
        rgba(255,255,255,.40);

    transform:translateY(-2px);
}

#idt-gt-hero-final .idt-gt-btn svg{
    width:15px;
    height:15px;

    flex:0 0 15px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.9;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   TRUST POINTS
========================================================= */

#idt-gt-hero-final .idt-gt-trust{
    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    width:100%;
    max-width:610px;

    margin:18px 0 0;

    padding-top:16px;

    border-top:
        1px solid
        rgba(255,255,255,.12);
}

#idt-gt-hero-final .idt-trust-item{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:6px;

    min-width:0;

    padding:0 10px;

    color:rgba(255,255,255,.76);

    font-size:12px;
    line-height:1.35;

    font-weight:700;

    text-align:center;

    white-space:nowrap;
}

#idt-gt-hero-final
.idt-trust-item + .idt-trust-item{
    border-left:
        1px solid
        rgba(255,255,255,.11);
}

#idt-gt-hero-final .idt-trust-item svg{
    width:15px;
    height:15px;

    flex:0 0 15px;

    fill:none;
    stroke:var(--sky);

    stroke-width:2;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RIGHT GLASS PANEL
========================================================= */

#idt-gt-hero-final .idt-gt-panel{
    position:relative;

    width:100%;
    max-width:415px;

    margin:0 auto;

    padding:24px 24px 21px;

    overflow:hidden;

    border:
        1px solid
        rgba(255,255,255,.17);

    border-radius:18px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.13),
            rgba(255,255,255,.05)
        );

    box-shadow:
        0 24px 65px
        rgba(0,0,0,.22);

    backdrop-filter:blur(22px);
    -webkit-backdrop-filter:blur(22px);
}

#idt-gt-hero-final .idt-gt-panel::before{
    content:"";

    position:absolute;

    top:-40%;
    left:-70%;

    width:42%;
    height:180%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.10),
            transparent
        );

    transform:rotate(18deg);

    animation:
        idtGTGlassMove
        7s linear infinite;

    pointer-events:none;
}

@keyframes idtGTGlassMove{

    0%{
        left:-70%;
    }

    55%,
    100%{
        left:145%;
    }

}


/* =========================================================
   PANEL HEAD
========================================================= */

#idt-gt-hero-final .idt-panel-head{
    position:relative;

    width:100%;

    margin:0 auto 15px;

    text-align:center;
}

#idt-gt-hero-final .idt-panel-small{
    margin:0 0 5px;

    color:var(--light-sky);

    font-size:10.5px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:.08em;

    text-transform:uppercase;
}

#idt-gt-hero-final .idt-panel-title{
    margin:0;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:22px;
    line-height:1.32;

    font-weight:800;

    letter-spacing:-.25px;
}

#idt-gt-hero-final .idt-panel-desc{
    max-width:330px;

    margin:7px auto 0;

    color:rgba(255,255,255,.64);

    font-size:13.5px;
    line-height:1.58;
}


/* =========================================================
   CITY LIST
========================================================= */

#idt-gt-hero-final .idt-city-list{
    position:relative;

    display:grid;

    width:100%;
}

#idt-gt-hero-final .idt-city{
    position:relative;

    display:grid;

    grid-template-columns:
        44px minmax(0,1fr);

    gap:12px;

    align-items:center;

    min-height:69px;

    text-align:left;
}

#idt-gt-hero-final
.idt-city:not(:last-child)::after{
    content:"";

    position:absolute;

    top:54px;
    left:21.5px;

    width:1px;
    height:28px;

    background:
        linear-gradient(
            180deg,
            rgba(121,189,242,.65),
            rgba(255,255,255,.10)
        );
}

#idt-gt-hero-final .idt-city-icon{
    position:relative;
    z-index:2;

    display:flex;

    align-items:center;
    justify-content:center;

    width:44px;
    height:44px;

    border:
        1px solid
        rgba(121,189,242,.25);

    border-radius:50%;

    background:
        rgba(121,189,242,.09);

    color:var(--sky);
}

#idt-gt-hero-final
.idt-city:nth-child(2)
.idt-city-icon{
    color:#FF9B61;

    border-color:
        rgba(255,122,47,.23);

    background:
        rgba(255,93,0,.08);
}

#idt-gt-hero-final .idt-city-icon svg{
    width:20px;
    height:20px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.7;
    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-gt-hero-final .idt-city-small{
    display:block;

    margin:0 0 1px;

    color:rgba(255,255,255,.43);

    font-size:9.5px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.075em;

    text-transform:uppercase;
}

#idt-gt-hero-final .idt-city h3{
    margin:0 0 1px;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:16px;
    line-height:1.35;

    font-weight:800;
}

#idt-gt-hero-final .idt-city p{
    margin:0;

    color:rgba(255,255,255,.60);

    font-size:12.5px;
    line-height:1.45;
}


/* =========================================================
   PANEL BOTTOM
========================================================= */

#idt-gt-hero-final .idt-panel-bottom{
    position:relative;

    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    margin-top:12px;
    padding-top:14px;

    border-top:
        1px solid
        rgba(255,255,255,.10);

    color:rgba(255,255,255,.65);

    font-size:12px;
    line-height:1.4;

    font-weight:600;

    text-align:center;
}

#idt-gt-hero-final .idt-panel-bottom svg{
    width:15px;
    height:15px;

    flex:0 0 15px;

    fill:none;
    stroke:var(--sky);

    stroke-width:1.9;
    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-gt-hero-final .idt-panel-bottom strong{
    color:#FFFFFF;

    font-weight:800;
}


/* =========================================================
   LARGE DESKTOP
========================================================= */

@media(min-width:1600px){

    #idt-gt-hero-final{
        min-height:760px;

        height:calc(100vh - 80px);
        height:calc(100svh - 80px);

        max-height:960px;

        padding-top:60px;
        padding-bottom:60px;

        background-position:center 48%;
    }

    #idt-gt-hero-final .idt-gt-wrap{
        max-width:1320px;
    }

}


/* =========================================================
   LAPTOP / SMALL DESKTOP
========================================================= */

@media(max-width:1200px) and (min-width:992px){

    #idt-gt-hero-final{
        min-height:650px;

        height:calc(100vh - 75px);
        height:calc(100svh - 75px);

        max-height:820px;

        padding:45px 28px;

        background-position:center center;
    }

    #idt-gt-hero-final .idt-gt-wrap{
        max-width:1080px;

        grid-template-columns:
            minmax(0,1fr)
            minmax(345px,385px);

        gap:38px;
    }

    #idt-gt-hero-final .idt-gt-title{
        font-size:41px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-gt-hero-final{
        min-height:auto;

        height:auto;
        max-height:none;

        padding:42px 20px;

        background-position:center center;
    }

    #idt-gt-hero-final .idt-gt-wrap{
        grid-template-columns:1fr;

        gap:30px;
    }

    #idt-gt-hero-final .idt-gt-content{
        max-width:760px;

        margin:0 auto;

        text-align:center;
    }

    #idt-gt-hero-final .idt-gt-label{
        margin-left:auto;
        margin-right:auto;
    }

    #idt-gt-hero-final .idt-gt-script,
    #idt-gt-hero-final .idt-gt-title,
    #idt-gt-hero-final .idt-gt-desc{
        text-align:center;
    }

    #idt-gt-hero-final .idt-gt-title{
        max-width:700px;

        margin-left:auto;
        margin-right:auto;

        font-size:39px;
    }

    #idt-gt-hero-final .idt-gt-desc{
        max-width:680px;

        margin-left:auto;
        margin-right:auto;
    }

    #idt-gt-hero-final .idt-gt-accent,
    #idt-gt-hero-final .idt-gt-route{
        justify-content:center;
    }

    #idt-gt-hero-final .idt-gt-actions{
        grid-template-columns:
            minmax(0,1.28fr)
            minmax(0,.72fr);

        width:100%;
        max-width:490px;

        margin-left:auto;
        margin-right:auto;
    }

    #idt-gt-hero-final .idt-gt-btn-primary,
    #idt-gt-hero-final .idt-gt-btn-secondary{
        width:100%;
    }

    #idt-gt-hero-final .idt-gt-trust{
        margin-left:auto;
        margin-right:auto;
    }

    #idt-gt-hero-final .idt-gt-panel{
        max-width:610px;

        padding:23px 28px 20px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-gt-hero-final{
        padding:38px 15px 40px;
    }

    #idt-gt-hero-final .idt-gt-wrap{
        gap:27px;
    }

    #idt-gt-hero-final .idt-gt-script{
        font-size:29px;
    }

    #idt-gt-hero-final .idt-gt-title{
        font-size:34px;
        line-height:1.15;
    }

    #idt-gt-hero-final .idt-gt-desc{
        font-size:15px;
        line-height:1.67;
    }

    #idt-gt-hero-final .idt-gt-actions{
        max-width:500px;

        grid-template-columns:
            minmax(0,1.25fr)
            minmax(0,.75fr);
    }

    #idt-gt-hero-final .idt-gt-btn{
        min-height:43px;

        padding:9px 10px;

        font-size:11.5px;
    }

    #idt-gt-hero-final .idt-gt-trust{
        max-width:560px;
    }

    #idt-gt-hero-final .idt-trust-item{
        padding:0 6px;

        font-size:11.5px;
    }

    #idt-gt-hero-final .idt-gt-panel{
        max-width:560px;

        border-radius:14px;
    }

}


/* =========================================================
   430PX
========================================================= */

@media(max-width:430px){

    #idt-gt-hero-final{
        padding:34px 13px 36px;

        background-position:center center;
    }

    #idt-gt-hero-final .idt-gt-label{
        max-width:100%;

        padding:6px 9px;

        font-size:9.8px;
    }

    #idt-gt-hero-final .idt-gt-script{
        font-size:27px;
    }

    #idt-gt-hero-final .idt-gt-title{
        font-size:30px;
    }

    #idt-gt-hero-final .idt-gt-desc{
        font-size:14.5px;
    }

    #idt-gt-hero-final .idt-gt-route{
        gap:5px;
    }

    #idt-gt-hero-final .idt-route-place{
        gap:4px;

        font-size:11.5px;
    }

    #idt-gt-hero-final .idt-route-place svg{
        width:13px;
        height:13px;

        flex-basis:13px;
    }

    #idt-gt-hero-final .idt-route-arrow svg{
        width:15px;
    }

    #idt-gt-hero-final .idt-gt-actions{
        grid-template-columns:
            minmax(0,1.35fr)
            minmax(0,.65fr);

        gap:7px;

        margin-top:18px;
    }

    #idt-gt-hero-final .idt-gt-btn{
        min-height:41px;

        padding:8px 6px;

        font-size:10.2px;
    }

    #idt-gt-hero-final .idt-gt-trust{
        grid-template-columns:
            repeat(3,minmax(0,1fr));

        margin-top:15px;
        padding-top:14px;
    }

    #idt-gt-hero-final .idt-trust-item{
        flex-direction:column;

        gap:4px;

        padding:0 4px;

        white-space:normal;

        font-size:10px;
        line-height:1.25;
    }

    #idt-gt-hero-final .idt-gt-panel{
        padding:19px 16px 17px;
    }

    #idt-gt-hero-final .idt-panel-title{
        font-size:19px;
    }

    #idt-gt-hero-final .idt-panel-desc{
        font-size:12.5px;
    }

    #idt-gt-hero-final .idt-city{
        grid-template-columns:
            40px minmax(0,1fr);

        gap:10px;

        min-height:64px;
    }

    #idt-gt-hero-final .idt-city-icon{
        width:40px;
        height:40px;
    }

    #idt-gt-hero-final
    .idt-city:not(:last-child)::after{
        left:19.5px;
        top:51px;

        height:25px;
    }

    #idt-gt-hero-final .idt-city h3{
        font-size:15px;
    }

    #idt-gt-hero-final .idt-city p{
        font-size:11.8px;
    }

}


/* =========================================================
   360PX
========================================================= */

@media(max-width:360px){

    #idt-gt-hero-final{
        padding:32px 10px 34px;
    }

    #idt-gt-hero-final .idt-gt-title{
        font-size:28px;
    }

    #idt-gt-hero-final .idt-gt-desc{
        font-size:14px;
    }

    #idt-gt-hero-final .idt-route-place{
        font-size:10.7px;
    }

    #idt-gt-hero-final .idt-route-place svg{
        display:none;
    }

    #idt-gt-hero-final .idt-gt-btn{
        font-size:9.5px;
    }

    #idt-gt-hero-final .idt-trust-item{
        font-size:9.3px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-gt-hero-final *,
    #idt-gt-hero-final *::before,
    #idt-gt-hero-final *::after{
        animation:none !important;
        transition:none !important;
    }

}

</style>


<section id="idt-gt-hero-final">

    <div class="idt-gt-wrap">


        <!-- LEFT CONTENT -->

        <div class="idt-gt-content">


            <div class="idt-gt-label">

                <svg viewBox="0 0 24 24">
                    <path d="M12 21s7-5.2 7-12a7 7 0 1 0-14 0c0 6.8 7 12 7 12Z"></path>
                    <circle cx="12" cy="9" r="2.2"></circle>
                </svg>

                Golden Triangle Tour Packages

            </div>


            <p class="idt-gt-script">
                Three Cities, One Timeless Journey
            </p>


            <h1 class="idt-gt-title">

                Golden Triangle Tour Packages

                <span>
                    Delhi, Agra & Jaipur
                </span>

            </h1>


            <div
                class="idt-gt-accent"
                aria-hidden="true"
            >
                <span></span>
            </div>


            <p class="idt-gt-desc">
                Discover India’s celebrated Golden Triangle with a private journey through Delhi, Agra and Jaipur. Experience historic landmarks, Mughal heritage, royal architecture and vibrant local culture with a tour planned around your travel style.
            </p>


            <!-- ROUTE -->

            <div
                class="idt-gt-route"
                aria-label="Golden Triangle Route"
            >


                <span class="idt-route-place">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 21s7-5.2 7-12a7 7 0 1 0-14 0c0 6.8 7 12 7 12Z"></path>
                        <circle cx="12" cy="9" r="2"></circle>
                    </svg>

                    Delhi

                </span>


                <span class="idt-route-arrow">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 12h15"></path>
                        <path d="m15 8 4 4-4 4"></path>
                    </svg>

                </span>


                <span class="idt-route-place">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 21s7-5.2 7-12a7 7 0 1 0-14 0c0 6.8 7 12 7 12Z"></path>
                        <circle cx="12" cy="9" r="2"></circle>
                    </svg>

                    Agra

                </span>


                <span class="idt-route-arrow">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 12h15"></path>
                        <path d="m15 8 4 4-4 4"></path>
                    </svg>

                </span>


                <span class="idt-route-place">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 21s7-5.2 7-12a7 7 0 1 0-14 0c0 6.8 7 12 7 12Z"></path>
                        <circle cx="12" cy="9" r="2"></circle>
                    </svg>

                    Jaipur

                </span>


            </div>


            <!-- BUTTONS -->

            <div class="idt-gt-actions">


                <a
                    class="idt-gt-btn idt-gt-btn-primary"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener"
                >

                    Plan Your Golden Triangle Tour

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>

                </a>


                <a
                    class="idt-gt-btn idt-gt-btn-secondary"
                    href="tel:+918126052755"
                >

                    <svg viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92Z"></path>
                    </svg>

                    Call Us

                </a>


            </div>


            <!-- TRUST -->

            <div class="idt-gt-trust">


                <div class="idt-trust-item">

                    <svg viewBox="0 0 24 24">
                        <path d="m6 12 4 4 8-8"></path>
                    </svg>

                    Private Tours

                </div>


                <div class="idt-trust-item">

                    <svg viewBox="0 0 24 24">
                        <path d="m6 12 4 4 8-8"></path>
                    </svg>

                    Flexible Itineraries

                </div>


                <div class="idt-trust-item">

                    <svg viewBox="0 0 24 24">
                        <path d="m6 12 4 4 8-8"></path>
                    </svg>

                    Local Assistance

                </div>


            </div>


        </div>


        <!-- RIGHT PANEL -->

        <aside class="idt-gt-panel">


            <div class="idt-panel-head">

                <p class="idt-panel-small">
                    Your Journey at a Glance
                </p>

                <h2 class="idt-panel-title">
                    Explore India’s Golden Triangle
                </h2>

                <p class="idt-panel-desc">
                    Three iconic destinations connected in one flexible private journey.
                </p>

            </div>


            <div class="idt-city-list">


                <!-- DELHI -->

                <div class="idt-city">

                    <span class="idt-city-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M5 20h14"></path>
                            <path d="M7 20V9h10v11"></path>
                            <path d="M5 9h14"></path>
                            <path d="M9 9V5h6v4"></path>
                        </svg>

                    </span>


                    <div>

                        <span class="idt-city-small">
                            Capital Heritage
                        </span>

                        <h3>
                            Delhi
                        </h3>

                        <p>
                            Historic monuments, old-city character and modern India.
                        </p>

                    </div>

                </div>


                <!-- AGRA -->

                <div class="idt-city">

                    <span class="idt-city-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 20h16"></path>
                            <path d="M6 20V11"></path>
                            <path d="M18 20V11"></path>
                            <path d="M8 11h8"></path>
                            <path d="M9 11V8l3-4 3 4v3"></path>
                        </svg>

                    </span>


                    <div>

                        <span class="idt-city-small">
                            Mughal Heritage
                        </span>

                        <h3>
                            Agra
                        </h3>

                        <p>
                            The Taj Mahal, Agra Fort and timeless Mughal architecture.
                        </p>

                    </div>

                </div>


                <!-- JAIPUR -->

                <div class="idt-city">

                    <span class="idt-city-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 20h16"></path>
                            <path d="M6 20V10h12v10"></path>
                            <path d="M8 10V7h8v3"></path>
                            <path d="M10 7V4h4v3"></path>
                        </svg>

                    </span>


                    <div>

                        <span class="idt-city-small">
                            Royal Rajasthan
                        </span>

                        <h3>
                            Jaipur
                        </h3>

                        <p>
                            Majestic forts, royal palaces and Rajasthan’s vibrant culture.
                        </p>

                    </div>

                </div>


            </div>


            <div class="idt-panel-bottom">

                <svg viewBox="0 0 24 24">
                    <path d="m6 12 4 4 8-8"></path>
                </svg>

                <span>
                    <strong>Private & Flexible</strong>
                    journey planned around you
                </span>

            </div>


        </aside>


    </div>

</section>