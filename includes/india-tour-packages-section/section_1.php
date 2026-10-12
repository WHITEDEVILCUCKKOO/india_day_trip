<!-- =========================================================
     INDIA DAY TRIP
     INDIA TOUR PACKAGES
     SECTION 01 — PREMIUM HERO
     SCREENSHOT INSPIRED COMPOSITION
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-packages-hero,
#idt-india-packages-hero *{
    box-sizing:border-box;
}

#idt-india-packages-hero{
    --navy:#0C2D62;
    --deep:#071F3F;
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

    min-height:690px;

    height:calc(100vh - 78px);
    height:calc(100svh - 78px);

    max-height:920px;

    display:flex;
    align-items:center;

    overflow:hidden;

    padding:54px 24px;

    font-family:"Manrope",Arial,sans-serif;

    background:
        linear-gradient(
            90deg,
            rgba(3,14,29,.95) 0%,
            rgba(4,20,42,.90) 34%,
            rgba(7,31,61,.76) 64%,
            rgba(3,14,29,.54) 100%
        ),
        url("https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=2000&q=92")
        center 52% / cover no-repeat;
}


/* =========================================================
   ATMOSPHERE
========================================================= */

#idt-india-packages-hero::before{
    content:"";

    position:absolute;
    inset:0;

    z-index:-1;

    background:
        radial-gradient(
            circle at 82% 23%,
            rgba(121,189,242,.12),
            transparent 28%
        ),
        radial-gradient(
            circle at 13% 88%,
            rgba(255,93,0,.09),
            transparent 26%
        ),
        linear-gradient(
            180deg,
            rgba(0,0,0,.08) 0%,
            transparent 40%,
            rgba(0,0,0,.24) 100%
        );

    pointer-events:none;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-india-packages-hero .idt-iph-wrap{
    width:100%;
    max-width:1240px;

    margin:0 auto;

    display:grid;

    grid-template-columns:
        minmax(0,760px)
        minmax(340px,1fr);

    gap:56px;

    align-items:center;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#idt-india-packages-hero .idt-iph-content{
    width:100%;
    max-width:760px;

    text-align:left;
}


/* TOP LABEL */

#idt-india-packages-hero .idt-iph-label{
    display:inline-flex;

    align-items:center;

    gap:8px;

    margin:0 0 16px;

    padding:7px 11px;

    border:
        1px solid
        rgba(255,122,47,.30);

    border-radius:5px;

    background:
        rgba(255,93,0,.12);

    color:#FFB184;

    font-size:10.5px;
    line-height:1;

    font-weight:800;

    letter-spacing:.10em;

    text-transform:uppercase;
}

#idt-india-packages-hero .idt-iph-label span{
    width:6px;
    height:6px;

    border-radius:50%;

    background:var(--orange);
}


/* SCRIPT */

#idt-india-packages-hero .idt-iph-script{
    margin:0 0 8px;

    color:var(--sky);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}


/* HEADING */

#idt-india-packages-hero .idt-iph-title{
    max-width:760px;

    margin:0;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:48px;
    line-height:1.08;

    font-weight:700;

    letter-spacing:-1px;
}

#idt-india-packages-hero .idt-iph-title span{
    display:block;

    margin-top:3px;

    color:var(--light-sky);
}


/* ACCENT */

#idt-india-packages-hero .idt-iph-accent{
    display:flex;

    align-items:center;

    gap:7px;

    margin:15px 0 17px;
}

#idt-india-packages-hero .idt-iph-accent::before{
    content:"";

    width:40px;
    height:2px;

    border-radius:20px;

    background:var(--sky);
}

#idt-india-packages-hero .idt-iph-accent span{
    width:6px;
    height:6px;

    transform:rotate(45deg);

    background:var(--orange);
}

#idt-india-packages-hero .idt-iph-accent::after{
    content:"";

    width:24px;
    height:2px;

    border-radius:20px;

    background:var(--orange);
}


/* DESCRIPTION */

#idt-india-packages-hero .idt-iph-desc{
    max-width:700px;

    margin:0;

    color:rgba(255,255,255,.80);

    font-size:16px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   META CHIPS
========================================================= */

#idt-india-packages-hero .idt-iph-meta{
    display:flex;

    align-items:center;
    flex-wrap:wrap;

    gap:8px;

    margin-top:20px;
}

#idt-india-packages-hero .idt-iph-meta-item{
    display:inline-flex;

    align-items:center;

    gap:7px;

    min-height:34px;

    padding:8px 10px;

    border:
        1px solid
        rgba(255,255,255,.14);

    border-radius:5px;

    background:
        rgba(255,255,255,.07);

    color:rgba(255,255,255,.88);

    font-size:11.5px;
    line-height:1.2;

    font-weight:700;

    backdrop-filter:blur(8px);
    -webkit-backdrop-filter:blur(8px);
}

#idt-india-packages-hero .idt-iph-meta-item svg{
    width:14px;
    height:14px;

    fill:none;
    stroke:var(--sky);

    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   BUTTONS
========================================================= */

#idt-india-packages-hero .idt-iph-actions{
    display:flex;

    align-items:center;
    flex-wrap:wrap;

    gap:10px;

    margin-top:22px;
}

#idt-india-packages-hero .idt-iph-btn{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    min-height:44px;

    padding:11px 17px;

    border-radius:5px;

    text-decoration:none !important;

    font-size:12px;
    line-height:1;

    font-weight:800;

    transition:
        transform .25s ease,
        background .25s ease,
        border-color .25s ease;
}

#idt-india-packages-hero .idt-iph-btn-primary{
    background:var(--orange);

    border:1px solid var(--orange);

    color:#FFFFFF;
}

#idt-india-packages-hero .idt-iph-btn-primary:hover{
    background:var(--orange-soft);

    transform:translateY(-2px);
}

#idt-india-packages-hero .idt-iph-btn-secondary{
    background:rgba(255,255,255,.07);

    border:
        1px solid
        rgba(255,255,255,.25);

    color:#FFFFFF;

    backdrop-filter:blur(8px);
    -webkit-backdrop-filter:blur(8px);
}

#idt-india-packages-hero .idt-iph-btn-secondary:hover{
    background:rgba(121,189,242,.14);

    border-color:rgba(121,189,242,.42);

    transform:translateY(-2px);
}

#idt-india-packages-hero .idt-iph-btn svg{
    width:15px;
    height:15px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.9;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   TRUST STRIP
========================================================= */

#idt-india-packages-hero .idt-iph-trust{
    display:grid;

    grid-template-columns:
        repeat(3,max-content);

    gap:18px;

    margin-top:18px;
    padding-top:15px;

    width:max-content;
    max-width:100%;

    border-top:
        1px solid
        rgba(255,255,255,.12);
}

#idt-india-packages-hero .idt-iph-trust-item{
    display:flex;

    align-items:center;

    gap:6px;

    color:rgba(255,255,255,.70);

    font-size:11px;
    line-height:1.3;

    font-weight:700;
}

#idt-india-packages-hero .idt-iph-trust-item svg{
    width:13px;
    height:13px;

    fill:none;
    stroke:var(--sky);

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RIGHT JOURNEY PANEL
========================================================= */

#idt-india-packages-hero .idt-iph-panel{
    position:relative;

    width:100%;
    max-width:400px;

    justify-self:end;

    overflow:hidden;

    padding:25px 24px 22px;

    border:
        1px solid
        rgba(255,255,255,.19);

    border-radius:18px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.15),
            rgba(255,255,255,.055)
        );

    box-shadow:
        0 25px 65px
        rgba(0,0,0,.24);

    backdrop-filter:
        blur(22px)
        saturate(145%);

    -webkit-backdrop-filter:
        blur(22px)
        saturate(145%);
}

#idt-india-packages-hero .idt-iph-panel::before{
    content:"";

    position:absolute;

    top:-50%;
    left:-80%;

    width:44%;
    height:200%;

    transform:rotate(18deg);

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.12),
            transparent
        );

    animation:
        idtIPHGlass 7s ease-in-out infinite;

    pointer-events:none;
}

@keyframes idtIPHGlass{

    0%{
        left:-80%;
    }

    42%{
        left:145%;
    }

    100%{
        left:145%;
    }

}


/* PANEL HEADER */

#idt-india-packages-hero .idt-iph-panel-small{
    position:relative;
    z-index:2;

    display:block;

    margin-bottom:5px;

    color:#B9E1FF;

    font-size:10px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:.10em;

    text-transform:uppercase;
}

#idt-india-packages-hero .idt-iph-panel-title{
    position:relative;
    z-index:2;

    margin:0 0 7px;

    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;

    font-size:22px;
    line-height:1.3;

    font-weight:800;
}

#idt-india-packages-hero .idt-iph-panel-desc{
    position:relative;
    z-index:2;

    margin:0 0 16px;

    color:rgba(255,255,255,.65);

    font-size:13px;
    line-height:1.6;
}


/* PANEL OPTIONS */

#idt-india-packages-hero .idt-iph-route-list{
    position:relative;
    z-index:2;

    display:grid;
}

#idt-india-packages-hero .idt-iph-route{
    display:grid;

    grid-template-columns:
        42px minmax(0,1fr);

    align-items:center;

    gap:12px;

    padding:12px 0;

    border-bottom:
        1px solid
        rgba(255,255,255,.10);
}

#idt-india-packages-hero .idt-iph-route:last-child{
    border-bottom:0;
}

#idt-india-packages-hero .idt-iph-route-icon{
    display:flex;

    align-items:center;
    justify-content:center;

    width:42px;
    height:42px;

    border-radius:50%;

    border:
        1px solid
        rgba(121,189,242,.23);

    background:
        rgba(121,189,242,.08);

    color:var(--sky);
}

#idt-india-packages-hero .idt-iph-route:nth-child(2)
.idt-iph-route-icon{
    color:#FF9A62;

    border-color:
        rgba(255,122,47,.23);

    background:
        rgba(255,93,0,.08);
}

#idt-india-packages-hero .idt-iph-route-icon svg{
    width:19px;
    height:19px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-india-packages-hero .idt-iph-route strong{
    display:block;

    margin-bottom:2px;

    color:#FFFFFF;

    font-size:14px;
    line-height:1.3;

    font-weight:800;
}

#idt-india-packages-hero .idt-iph-route span{
    display:block;

    color:rgba(255,255,255,.62);

    font-size:12px;
    line-height:1.5;
}


/* PANEL FOOT */

#idt-india-packages-hero .idt-iph-panel-foot{
    position:relative;
    z-index:2;

    margin-top:12px;
    padding-top:13px;

    border-top:
        1px solid
        rgba(255,255,255,.10);

    color:rgba(255,255,255,.68);

    font-size:11.5px;
    line-height:1.45;

    font-weight:600;
}


/* =========================================================
   LARGE DESKTOP
========================================================= */

@media(min-width:1600px){

    #idt-india-packages-hero{
        min-height:760px;

        height:calc(100vh - 80px);
        height:calc(100svh - 80px);

        max-height:960px;

        padding-top:60px;
        padding-bottom:60px;
    }

    #idt-india-packages-hero .idt-iph-wrap{
        max-width:1320px;
    }

    #idt-india-packages-hero .idt-iph-title{
        font-size:52px;
    }

}


/* =========================================================
   1200
========================================================= */

@media(max-width:1200px) and (min-width:992px){

    #idt-india-packages-hero{
        min-height:650px;

        height:calc(100vh - 75px);
        height:calc(100svh - 75px);

        max-height:820px;

        padding:45px 28px;
    }

    #idt-india-packages-hero .idt-iph-wrap{
        max-width:1080px;

        grid-template-columns:
            minmax(0,1fr)
            minmax(330px,370px);

        gap:38px;
    }

    #idt-india-packages-hero .idt-iph-title{
        font-size:42px;
    }

    #idt-india-packages-hero .idt-iph-desc{
        font-size:15px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-india-packages-hero{
        min-height:auto;

        height:auto;
        max-height:none;

        padding:48px 20px;

        background:
            linear-gradient(
                180deg,
                rgba(3,14,29,.93) 0%,
                rgba(5,25,50,.87) 54%,
                rgba(3,14,29,.94) 100%
            ),
            url("https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1400&q=90")
            center center / cover no-repeat;
    }

    #idt-india-packages-hero .idt-iph-wrap{
        grid-template-columns:1fr;

        gap:30px;
    }

    #idt-india-packages-hero .idt-iph-content{
        max-width:760px;

        margin:0 auto;

        text-align:center;
    }

    #idt-india-packages-hero .idt-iph-label{
        margin-left:auto;
        margin-right:auto;
    }

    #idt-india-packages-hero .idt-iph-title{
        max-width:700px;

        margin-left:auto;
        margin-right:auto;

        font-size:39px;
    }

    #idt-india-packages-hero .idt-iph-desc{
        max-width:680px;

        margin-left:auto;
        margin-right:auto;
    }

    #idt-india-packages-hero .idt-iph-accent,
    #idt-india-packages-hero .idt-iph-meta,
    #idt-india-packages-hero .idt-iph-actions{
        justify-content:center;
    }

    #idt-india-packages-hero .idt-iph-trust{
        margin-left:auto;
        margin-right:auto;
    }

    #idt-india-packages-hero .idt-iph-panel{
        max-width:610px;

        justify-self:center;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-india-packages-hero{
        padding:42px 15px;
    }

    #idt-india-packages-hero .idt-iph-script{
        font-size:29px;
    }

    #idt-india-packages-hero .idt-iph-title{
        font-size:34px;
        line-height:1.14;
    }

    #idt-india-packages-hero .idt-iph-desc{
        font-size:15px;
        line-height:1.68;
    }

    #idt-india-packages-hero .idt-iph-panel{
        max-width:560px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-india-packages-hero{
        padding:36px 13px 38px;
    }

    #idt-india-packages-hero .idt-iph-label{
        font-size:9.5px;

        padding:6px 9px;
    }

    #idt-india-packages-hero .idt-iph-script{
        font-size:27px;
    }

    #idt-india-packages-hero .idt-iph-title{
        font-size:28px;
    }

    #idt-india-packages-hero .idt-iph-desc{
        font-size:14.3px;
    }

    #idt-india-packages-hero .idt-iph-meta{
        gap:6px;
    }

    #idt-india-packages-hero .idt-iph-meta-item{
        font-size:10px;
    }

    #idt-india-packages-hero .idt-iph-actions{
        display:grid;

        grid-template-columns:
            minmax(0,1.4fr)
            minmax(0,.6fr);

        width:100%;

        gap:7px;
    }

    #idt-india-packages-hero .idt-iph-btn{
        width:100%;

        padding:9px 6px;

        font-size:10px;
    }

    #idt-india-packages-hero .idt-iph-trust{
        grid-template-columns:
            repeat(3,minmax(0,1fr));

        width:100%;

        gap:0;
    }

    #idt-india-packages-hero .idt-iph-trust-item{
        flex-direction:column;

        text-align:center;

        font-size:9.5px;
    }

    #idt-india-packages-hero .idt-iph-panel{
        padding:20px 17px 18px;

        border-radius:15px;
    }

    #idt-india-packages-hero .idt-iph-panel-title{
        font-size:19px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-india-packages-hero{
        padding-left:10px;
        padding-right:10px;
    }

    #idt-india-packages-hero .idt-iph-title{
        font-size:26px;
    }

    #idt-india-packages-hero .idt-iph-desc{
        font-size:14px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-india-packages-hero *,
    #idt-india-packages-hero *::before,
    #idt-india-packages-hero *::after{
        animation:none !important;
        transition:none !important;
    }

}

</style>


<section id="idt-india-packages-hero">

    <div class="idt-iph-wrap">


        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="idt-iph-content">


            <div class="idt-iph-label">
                <span></span>
                India Tour Packages
            </div>


            <p class="idt-iph-script">
                Explore India Your Way
            </p>


            <h1 class="idt-iph-title">
                India Tour Packages
                <span>
                    Bespoke Journeys, Built Entirely Around You
                </span>
            </h1>


            <div
                class="idt-iph-accent"
                aria-hidden="true"
            >
                <span></span>
            </div>


            <p class="idt-iph-desc">
                Discover India through private and flexible journeys designed around your travel time, preferred destinations and sightseeing interests. Explore historic cities, iconic monuments, royal Rajasthan, spiritual destinations, mountain regions and more with personal travel assistance throughout your journey.
            </p>


            <!-- META -->

            <div class="idt-iph-meta">


                <div class="idt-iph-meta-item">

                    <svg viewBox="0 0 24 24">
                        <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                        <circle cx="12" cy="10" r="2.3"></circle>
                    </svg>

                    Multi-Destination Tours

                </div>


                <div class="idt-iph-meta-item">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 12h16"></path>
                        <path d="m15 7 5 5-5 5"></path>
                    </svg>

                    Flexible Routes

                </div>


                <div class="idt-iph-meta-item">

                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M12 7v5l3 2"></path>
                    </svg>

                    Flexible Duration

                </div>


                <div class="idt-iph-meta-item">

                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="8" r="3"></circle>
                        <path d="M6 20c0-4 2.5-7 6-7s6 3 6 7"></path>
                    </svg>

                    Private Assistance

                </div>


            </div>


            <!-- BUTTONS -->

            <div class="idt-iph-actions">


                <a
                    class="idt-iph-btn idt-iph-btn-primary"
                    href="https://wa.me/918126052755"
                    target="_blank"
                    rel="noopener noreferrer"
                >

                    Plan My India Tour

                    <svg viewBox="0 0 24 24">
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>

                </a>


                <a
                    class="idt-iph-btn idt-iph-btn-secondary"
                    href="tel:+918126052755"
                >

                    <svg viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92Z"></path>
                    </svg>

                    Call Us

                </a>


            </div>


            <!-- TRUST -->

            <div class="idt-iph-trust">


                <div class="idt-iph-trust-item">

                    <svg viewBox="0 0 24 24">
                        <path d="m6 12 4 4 8-8"></path>
                    </svg>

                    Private Tours

                </div>


                <div class="idt-iph-trust-item">

                    <svg viewBox="0 0 24 24">
                        <path d="m6 12 4 4 8-8"></path>
                    </svg>

                    Custom Itineraries

                </div>


                <div class="idt-iph-trust-item">

                    <svg viewBox="0 0 24 24">
                        <path d="m6 12 4 4 8-8"></path>
                    </svg>

                    Local Assistance

                </div>


            </div>


        </div>


        <!-- =================================================
             RIGHT PANEL
        ================================================== -->

        <aside class="idt-iph-panel">


            <span class="idt-iph-panel-small">
                Discover India
            </span>


            <h2 class="idt-iph-panel-title">
                One Country. Many Different Journeys.
            </h2>


            <p class="idt-iph-panel-desc">
                Choose the destinations and travel experiences that best match your available time and interests.
            </p>


            <div class="idt-iph-route-list">


                <!-- NORTH INDIA -->

                <div class="idt-iph-route">

                    <div class="idt-iph-route-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 20h16"></path>
                            <path d="M6 20V10h12v10"></path>
                            <path d="M8 10V7h8v3"></path>
                        </svg>

                    </div>


                    <div>

                        <strong>
                            North India
                        </strong>

                        <span>
                            Delhi, Agra, Jaipur and heritage destinations.
                        </span>

                    </div>

                </div>


                <!-- RAJASTHAN -->

                <div class="idt-iph-route">

                    <div class="idt-iph-route-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 20V8l8-4 8 4v12"></path>
                            <path d="M8 20v-7h8v7"></path>
                        </svg>

                    </div>


                    <div>

                        <strong>
                            Rajasthan
                        </strong>

                        <span>
                            Forts, palaces, lakes and royal cities.
                        </span>

                    </div>

                </div>


                <!-- CULTURE -->

                <div class="idt-iph-route">

                    <div class="idt-iph-route-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M12 3v18"></path>
                            <path d="m7 8 5-5 5 5"></path>
                        </svg>

                    </div>


                    <div>

                        <strong>
                            Cultural & Spiritual India
                        </strong>

                        <span>
                            Historic cities, traditions and spiritual destinations.
                        </span>

                    </div>

                </div>


                <!-- HIMALAYAS -->

                <div class="idt-iph-route">

                    <div class="idt-iph-route-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="m3 19 6-9 4 6 3-4 5 7"></path>
                        </svg>

                    </div>


                    <div>

                        <strong>
                            Himalayas & Beyond
                        </strong>

                        <span>
                            Mountain landscapes and extended regional journeys.
                        </span>

                    </div>

                </div>


            </div>


            <div class="idt-iph-panel-foot">
                Your India itinerary can be planned around your preferred destinations, travel dates and available number of days.
            </div>


        </aside>


    </div>

</section>