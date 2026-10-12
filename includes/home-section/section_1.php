<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Montez&display=swap" rel="stylesheet">

<style>
#idt-final-hero,
#idt-final-hero *{
    box-sizing:border-box;
}

#idt-final-hero{
    --blue:#0C2D62;
    --dark:#0C2D62;
    --white:#ffffff;

    position:relative;
    width:100%;
    margin:0;
    padding:0 0 54px;
    overflow:hidden;
    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   HERO
========================================================= */

#idt-final-hero .idt-hero-main{
    position:relative;
    width:100%;
    height:610px;
    overflow:hidden;
    background:#222;
}


/* =========================================================
   SLIDES
========================================================= */

#idt-final-hero .idt-slide{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    opacity:0;
    visibility:hidden;
    z-index:1;
    transition:opacity .9s ease, visibility .9s ease;
}

#idt-final-hero .idt-slide.active{
    opacity:1;
    visibility:visible;
    z-index:2;
}


/* =========================================================
   BACKGROUND
========================================================= */

#idt-final-hero .idt-bg{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    overflow:hidden;
}

#idt-final-hero .idt-bg img{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    display:block;
    object-fit:cover;
    object-position:center center;
    transform:scale(1);
    transition:transform 7s ease;
}

#idt-final-hero .idt-slide.active .idt-bg img{
    transform:scale(1);
}

#idt-final-hero .idt-bg::after{
    content:"";
    position:absolute;
    inset:0;
    z-index:2;
    background:linear-gradient(
        90deg,
        rgba(23,18,16,.51) 0%,
        rgba(24,20,18,.32) 50%,
        rgba(12,12,12,.50) 100%
    );
}


/* =========================================================
   CONTENT CONTAINER
========================================================= */

#idt-final-hero .idt-container{
    position:relative;
    z-index:5;
    width:1450px;
    max-width:calc(100% - 80px);
    height:100%;
    margin:0 auto;
    display:flex;
    align-items:center;
}

#idt-final-hero .idt-content{
    width:900px;
    max-width:72%;
    margin-top:-4px;
}


/* =========================================================
   SUBTITLE
========================================================= */

#idt-final-hero .idt-subtitle{
    display:block;
    margin:0;
    color:#fff;
    font-family:"Montez",cursive;
    font-size:34px;
    line-height:1.2;
    font-weight:400;
    opacity:0;
    transform:translateY(28px);
    text-shadow:0 2px 5px rgba(0,0,0,.18);
}


/* =========================================================
   TITLE
========================================================= */

#idt-final-hero .idt-title{
    display:block;
    max-width:900px;
    margin:18px 0 0;
    padding:0;
    color:#fff;
    font-family:"Manrope",Arial,sans-serif;
    font-size:44px;
    line-height:1.22;
    font-weight:700;
    letter-spacing:-.7px;
    opacity:0;
    transform:translateY(28px);
}


/* =========================================================
   BUTTON GROUP
========================================================= */

#idt-final-hero .idt-buttons{
    display:flex;
    align-items:center;
    gap:14px;
    margin-top:38px;
    opacity:0;
    transform:translateY(28px);
}


/* =========================================================
   HERO BUTTONS
========================================================= */

#idt-final-hero .idt-btn{
    height:58px;
    padding:0 29px;
    border-radius:999px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:9px;
    font-family:"Manrope",Arial,sans-serif;
    font-size:15px;
    line-height:1;
    font-weight:600;
    text-decoration:none !important;
    transition:
        transform .3s ease,
        background-color .3s ease,
        border-color .3s ease,
        color .3s ease;
}

#idt-final-hero .idt-btn-primary{
    min-width:185px;
    background:#0C2D62;
    border:1px solid #0C2D62;
    color:#fff !important;
}

#idt-final-hero .idt-btn-primary:hover{
    background:#123B72;
    border-color:#123B72;
    color:#fff !important;
    transform:translateY(-2px);
}

#idt-final-hero .idt-btn-outline{
    min-width:180px;
    background:rgba(255,255,255,.035);
    border:1px solid rgba(255,255,255,.92);
    color:#fff !important;
}

#idt-final-hero .idt-btn-outline:hover{
    background:#fff;
    border-color:#fff;
    color:#0C2D62 !important;
    transform:translateY(-2px);
}


/* =========================================================
   BUTTON ARROW
========================================================= */

#idt-final-hero .idt-button-arrow{
    position:relative;
    display:block;
    width:18px;
    height:12px;
    flex:0 0 18px;
    transition:transform .3s ease;
}

#idt-final-hero .idt-button-arrow::before{
    content:"";
    position:absolute;
    left:0;
    top:5.5px;
    width:17px;
    height:1px;
    background:currentColor;
}

#idt-final-hero .idt-button-arrow::after{
    content:"";
    position:absolute;
    right:0;
    top:2px;
    width:7px;
    height:7px;
    border-top:1px solid currentColor;
    border-right:1px solid currentColor;
    transform:rotate(45deg);
}

#idt-final-hero .idt-btn:hover .idt-button-arrow{
    transform:translateX(3px);
}


/* =========================================================
   ENTRY ANIMATION
========================================================= */

#idt-final-hero .idt-slide.active .idt-subtitle{
    animation:idtFadeUp .65s .15s forwards;
}

#idt-final-hero .idt-slide.active .idt-title{
    animation:idtFadeUp .7s .32s forwards;
}

#idt-final-hero .idt-slide.active .idt-buttons{
    animation:idtFadeUp .7s .50s forwards;
}

@keyframes idtFadeUp{
    from{
        opacity:0;
        transform:translateY(28px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}


/* =========================================================
   RIGHT SLIDER NAVIGATION
========================================================= */

#idt-final-hero .idt-navigation{
    position:absolute;
    z-index:20;
    top:50%;
    right:78px;
    transform:translateY(-50%);
    display:flex;
    flex-direction:column;
    align-items:center;
}


/* =========================================================
   LIQUID GLASS ARROW BUTTON
========================================================= */

#idt-final-hero .idt-nav-btn{
    position:relative;
    width:54px;
    height:54px;
    padding:0;
    border:1px solid rgba(255,255,255,.22);
    outline:none;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    cursor:pointer;
    overflow:hidden;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.22),
            rgba(255,255,255,.08)
        );

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.35),
        inset 0 -1px 0 rgba(255,255,255,.08),
        0 8px 24px rgba(0,0,0,.16);

    backdrop-filter:blur(14px) saturate(155%);
    -webkit-backdrop-filter:blur(14px) saturate(155%);

    transition:
        transform .3s ease,
        background .3s ease,
        border-color .3s ease,
        box-shadow .3s ease;
}

#idt-final-hero .idt-nav-btn::before{
    content:"";
    position:absolute;
    top:4px;
    left:8px;
    right:8px;
    height:42%;
    border-radius:50%;
    background:linear-gradient(
        180deg,
        rgba(255,255,255,.26),
        rgba(255,255,255,0)
    );
    pointer-events:none;
}

#idt-final-hero .idt-nav-btn::after{
    content:"";
    position:absolute;
    width:32px;
    height:32px;
    right:-15px;
    bottom:-15px;
    border-radius:50%;
    background:rgba(12,45,98,.30);
    filter:blur(8px);
    pointer-events:none;
}

#idt-final-hero .idt-nav-btn:hover{
    transform:scale(1.06);
    border-color:rgba(255,255,255,.42);
    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.28),
            rgba(12,45,98,.20)
        );

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.45),
        0 10px 25px rgba(0,0,0,.20);
}

#idt-final-hero .idt-nav-btn svg{
    position:relative;
    z-index:3;
    width:20px;
    height:20px;
    fill:none;
    stroke:currentColor;
    stroke-width:1.4;
}


/* =========================================================
   VERTICAL PAGINATION
========================================================= */

#idt-final-hero .idt-dots{
    height:102px;
    margin:18px 0;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    align-items:center;
}

#idt-final-hero .idt-dot{
    width:2px;
    height:22px;
    padding:0;
    border:0;
    background:rgba(255,255,255,.90);
    opacity:.9;
    cursor:pointer;
    transition:.3s ease;
}

#idt-final-hero .idt-dot.active{
    background:#FF5D00;
    opacity:1;
}


/* =========================================================
   BOOKING / SEARCH AREA
========================================================= */

#idt-final-hero .idt-booking{
    position:relative;
    z-index:30;
    left:auto;
    bottom:auto;
    transform:none;
    width:1450px;
    max-width:calc(100% - 80px);
    margin:24px auto 0;
}


/* =========================================================
   SEARCH BOX
========================================================= */

#idt-final-hero .idt-booking-form{
    width:100%;
    min-height:100px;
    padding:13px 20px;

    background:#fff;

    border:2px solid #0C2D62;
    border-radius:15px;

    box-shadow:0 10px 30px rgba(0,0,0,.12);

    display:grid;

    grid-template-columns:
        1fr
        1fr
        .9fr
        1.25fr
        205px;

    align-items:center;
}


/* =========================================================
   SEARCH FIELD
========================================================= */

#idt-final-hero .idt-field{
    position:relative;
    min-width:0;
    padding:2px 20px;
    border-right:1px solid #e3e3e3;
}

#idt-final-hero .idt-field:first-child{
    padding-left:4px;
}

#idt-final-hero .idt-field:nth-child(4){
    border-right:0;
}


/* =========================================================
   LABEL
========================================================= */

#idt-final-hero .idt-field label{
    display:block;
    margin:0 0 6px;
    color:#252525;
    font-family:"Manrope",Arial,sans-serif;
    font-size:14px;
    line-height:1.2;
    font-weight:600;
}


/* =========================================================
   SELECT / INPUT
========================================================= */

#idt-final-hero .idt-field select,
#idt-final-hero .idt-field input{
    display:block;
    width:100%;
    height:31px;

    margin:0;
    padding:0 2px;

    border:0 !important;
    border-radius:0 !important;
    outline:0 !important;
    box-shadow:none !important;

    background:#fff !important;
    color:#777;

    font-family:"Manrope",Arial,sans-serif;
    font-size:14px;
    line-height:31px;
    font-weight:400;
}

#idt-final-hero .idt-field input::placeholder{
    color:#8b8b8b;
    opacity:1;
}


/* =========================================================
   SEARCH BUTTON
========================================================= */

#idt-final-hero .idt-search-btn{
    width:100%;
    height:54px;

    padding:0 18px;

    border:0 !important;
    outline:0 !important;

    border-radius:9px;

    background:#0C2D62 !important;
    color:#fff !important;

    display:flex;
    align-items:center;
    justify-content:center;

    gap:7px;

    cursor:pointer;

    font-family:"Manrope",Arial,sans-serif;
    font-size:14px;
    line-height:1;
    font-weight:600;

    text-decoration:none !important;

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}

#idt-final-hero .idt-search-btn:hover,
#idt-final-hero .idt-search-btn:focus,
#idt-final-hero .idt-search-btn:active{
    background:#0C2D62 !important;
    color:#fff !important;
    border-color:#0C2D62 !important;
    transform:translateY(-1px);
    box-shadow:0 5px 14px rgba(12,45,98,.25);
}

#idt-final-hero .idt-search-btn span,
#idt-final-hero .idt-search-btn:hover span,
#idt-final-hero .idt-search-btn:focus span,
#idt-final-hero .idt-search-btn:active span{
    color:#fff !important;
}

#idt-final-hero .idt-search-btn svg{
    width:16px;
    height:16px;
    color:#fff !important;
    stroke:#fff !important;
}



#idt-final-hero .idt-search-status{width:1450px;max-width:calc(100% - 80px);margin:12px auto 0;padding:0;border-radius:10px;font-family:"Manrope",Arial,sans-serif;font-size:13px;line-height:1.55;text-align:center;transition:.25s ease}
#idt-final-hero .idt-search-status.show{padding:11px 15px;background:#fff8f3;border:1px solid rgba(255,93,0,.22);color:#70442d}
#idt-final-hero .idt-search-status strong{color:#0C2D62}
@media(max-width:991px){#idt-final-hero .idt-search-status{max-width:calc(100% - 40px)}}
@media(max-width:767px){#idt-final-hero .idt-search-status{max-width:calc(100% - 26px);font-size:12px}}

/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1500px){

    #idt-final-hero .idt-container,
    #idt-final-hero .idt-booking{
        width:1280px;
    }

    #idt-final-hero .idt-navigation{
        right:42px;
    }
}


/* =========================================================
   SMALL LAPTOP
========================================================= */

@media(max-width:1250px){

    #idt-final-hero .idt-container{
        width:calc(100% - 70px);
    }

    #idt-final-hero .idt-booking{
        width:calc(100% - 70px);
    }

    #idt-final-hero .idt-navigation{
        right:24px;
    }

    #idt-final-hero .idt-title{
        font-size:41px;
    }

    #idt-final-hero .idt-subtitle{
        font-size:32px;
    }

    #idt-final-hero .idt-booking-form{
        grid-template-columns:
            1fr
            1fr
            .9fr
            1.2fr
            180px;
    }

    #idt-final-hero .idt-field{
        padding-left:15px;
        padding-right:15px;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-final-hero{
        padding-bottom:0;
    }

    #idt-final-hero .idt-hero-main{
        height:550px;
    }

    #idt-final-hero .idt-container{
        width:100%;
        max-width:100%;
        padding:0 70px 0 35px;
    }

    #idt-final-hero .idt-content{
        max-width:90%;
    }

    #idt-final-hero .idt-subtitle{
        font-size:30px;
    }

    #idt-final-hero .idt-title{
        font-size:38px;
    }

    #idt-final-hero .idt-buttons{
        margin-top:34px;
    }

    #idt-final-hero .idt-navigation{
        right:16px;
    }

    #idt-final-hero .idt-nav-btn{
        width:48px;
        height:48px;
    }

    #idt-final-hero .idt-nav-btn svg{
        width:18px;
        height:18px;
    }

    #idt-final-hero .idt-booking{
        position:relative;
        left:auto;
        bottom:auto;
        transform:none;
        width:calc(100% - 40px);
        margin:22px auto 0;
    }

    #idt-final-hero .idt-booking-form{
        min-height:auto;
        grid-template-columns:1fr 1fr;
        gap:10px;
        padding:15px;
    }

    #idt-final-hero .idt-field{
        min-height:64px;
        padding:8px 12px;
        border:1px solid #e6e6e6;
        border-radius:7px;
    }

    #idt-final-hero .idt-field:first-child{
        padding-left:12px;
    }

    #idt-final-hero .idt-field:nth-child(4){
        border-right:1px solid #e6e6e6;
    }

    #idt-final-hero .idt-field label{
        font-size:13.5px;
    }

    #idt-final-hero .idt-field select,
    #idt-final-hero .idt-field input{
        font-size:13.5px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-final-hero .idt-hero-main{
        height:510px;
    }

    #idt-final-hero .idt-container{
        width:100%;
        max-width:100%;
        padding:0 20px;
        justify-content:center;
        text-align:center;
    }

    #idt-final-hero .idt-content{
        width:100%;
        max-width:100%;
        margin-top:-20px;
    }

    #idt-final-hero .idt-subtitle{
        font-size:27px;
    }

    #idt-final-hero .idt-title{
        max-width:100%;
        margin-top:15px;
        font-size:33px;
        line-height:1.25;
    }

    #idt-final-hero .idt-buttons{
        justify-content:center;
        gap:8px;
        margin-top:28px;
    }

    #idt-final-hero .idt-btn{
        min-width:0;
        width:148px;
        height:50px;
        padding:0 11px;
        font-size:13px;
        gap:6px;
    }

    #idt-final-hero .idt-button-arrow{
        width:15px;
        flex-basis:15px;
    }

    #idt-final-hero .idt-button-arrow::before{
        width:14px;
    }

    #idt-final-hero .idt-button-arrow::after{
        width:6px;
        height:6px;
        top:2.5px;
    }


    /* MOBILE NAVIGATION */

    #idt-final-hero .idt-navigation{
        top:auto;
        right:50%;
        bottom:15px;
        transform:translateX(50%);
        flex-direction:row;
        gap:8px;
    }

    #idt-final-hero .idt-nav-btn{
        width:40px;
        height:40px;
    }

    #idt-final-hero .idt-nav-btn svg{
        width:16px;
        height:16px;
    }

    #idt-final-hero .idt-dots{
        width:auto;
        height:auto;
        margin:0;
        flex-direction:row;
        gap:5px;
    }

    #idt-final-hero .idt-dot{
        width:19px;
        height:2px;
    }

    #idt-final-hero .idt-dot.active{
        width:24px;
    }


    /* MOBILE SEARCH */

    #idt-final-hero .idt-booking{
        width:calc(100% - 26px);
        margin:18px auto 0;
    }

    #idt-final-hero .idt-booking-form{
        grid-template-columns:1fr;
        gap:8px;
        padding:12px;
        border-radius:12px;
    }

    #idt-final-hero .idt-field{
        min-height:58px;
        padding:7px 11px;
    }

    #idt-final-hero .idt-field label{
        font-size:13px;
        margin-bottom:4px;
    }

    #idt-final-hero .idt-field select,
    #idt-final-hero .idt-field input{
        height:28px;
        font-size:13px;
    }

    #idt-final-hero .idt-search-btn{
        height:50px;
        font-size:13px;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-final-hero .idt-hero-main{
        height:490px;
    }

    #idt-final-hero .idt-subtitle{
        font-size:25px;
    }

    #idt-final-hero .idt-title{
        font-size:30px;
    }

    #idt-final-hero .idt-btn{
        width:138px;
        height:48px;
        padding:0 8px;
        font-size:12.5px;
    }

    #idt-final-hero .idt-field label{
        font-size:12.5px;
    }

    #idt-final-hero .idt-field select,
    #idt-final-hero .idt-field input{
        font-size:12.5px;
    }
}
</style>


<section id="idt-final-hero">

    <div class="idt-hero-main">


        <!-- SLIDE 1 - AGRA -->

        <div class="idt-slide active">

            <div class="idt-bg">
                <img
                    src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=2400&q=88"
                    alt="Agra India Tour">
            </div>

            <div class="idt-container">

                <div class="idt-content">

                    <span class="idt-subtitle">
                        Get unforgettable pleasure with us
                    </span>

                    <h1 class="idt-title">
                        Travel with India Day Trip and Discover The Beauty of India
                    </h1>

                    <div class="idt-buttons">

                        <a href="/tour/" class="idt-btn idt-btn-primary">
                            <span>Explore Tours</span>
                            <span class="idt-button-arrow"></span>
                        </a>

                        <a href="/about/" class="idt-btn idt-btn-outline">
                            <span>Our Services</span>
                            <span class="idt-button-arrow"></span>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- SLIDE 2 - DELHI -->

        <div class="idt-slide">

            <div class="idt-bg">
                <img
                    src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=2400&q=92"
                    alt="Delhi India Tour">
            </div>

            <div class="idt-container">

                <div class="idt-content">

                    <span class="idt-subtitle">
                        Get unforgettable pleasure with us
                    </span>

                    <h2 class="idt-title">
                        Explore The Heart of Delhi
                    </h2>

                    <div class="idt-buttons">

                        <a href="/tour/" class="idt-btn idt-btn-primary">
                            <span>Explore Tours</span>
                            <span class="idt-button-arrow"></span>
                        </a>

                        <a href="/about/" class="idt-btn idt-btn-outline">
                            <span>Our Services</span>
                            <span class="idt-button-arrow"></span>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- SLIDE 3 - VARANASI -->

        <div class="idt-slide">

            <div class="idt-bg">
                <img
                    src="https://images.unsplash.com/photo-1771313018650-254f6b5f2c91?auto=format&fit=crop&fm=jpg&q=88&w=3000"
                    alt="Varanasi India Tour">
            </div>

            <div class="idt-container">

                <div class="idt-content">

                    <span class="idt-subtitle">
                        Get unforgettable pleasure with us
                    </span>

                    <h2 class="idt-title">
                        Experience The City of Varanasi
                    </h2>

                    <div class="idt-buttons">

                        <a href="/tour/" class="idt-btn idt-btn-primary">
                            <span>Explore Tours</span>
                            <span class="idt-button-arrow"></span>
                        </a>

                        <a href="/about/" class="idt-btn idt-btn-outline">
                            <span>Our Services</span>
                            <span class="idt-button-arrow"></span>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- RIGHT SIDE NAVIGATION -->

        <div class="idt-navigation">

            <button
                type="button"
                class="idt-nav-btn idt-prev"
                aria-label="Previous Slide">

                <svg viewBox="0 0 32 32">
                    <path d="M16 26V6"></path>
                    <path d="M9 13L16 6L23 13"></path>
                </svg>

            </button>


            <div class="idt-dots">

                <button type="button" class="idt-dot active" aria-label="Slide 1"></button>
                <button type="button" class="idt-dot" aria-label="Slide 2"></button>
                <button type="button" class="idt-dot" aria-label="Slide 3"></button>

            </div>


            <button
                type="button"
                class="idt-nav-btn idt-next"
                aria-label="Next Slide">

                <svg viewBox="0 0 32 32">
                    <path d="M16 6V26"></path>
                    <path d="M9 19L16 26L23 19"></path>
                </svg>

            </button>

        </div>

    </div>


    <!-- SEARCH BOX -->

    <div class="idt-booking">

        <form
            class="idt-booking-form"
            action="#"
            method="GET"
            novalidate>


            <div class="idt-field">

                <label for="idt-location">
                    Location
                </label>

                <select id="idt-location" name="location">
                    <option value="">Select Location</option>
                </select>

            </div>


            <div class="idt-field">

                <label for="idt-tour-type">
                    Tour Type
                </label>

                <select id="idt-tour-type" name="tour_type">
                    <option value="">Select Tour Type</option>
                </select>

            </div>


            <div class="idt-field">

                <label for="idt-duration">
                    Duration
                </label>

                <select id="idt-duration" name="duration">
                    <option value="">Select Duration</option>
                </select>

            </div>


            <div class="idt-field">

                <label for="idt-tour-search">
                    Search Tours
                </label>

                <select id="idt-tour-search" name="tourPage">
                    <option value="">Select Tour Page</option>
                </select>

            </div>


            <div>

                <button
                    type="submit"
                    class="idt-search-btn">

                    <svg viewBox="0 0 24 24" fill="none">

                        <circle
                            cx="10.5"
                            cy="10.5"
                            r="6.5"
                            stroke-width="1.8">
                        </circle>

                        <path
                            d="M15.5 15.5L21 21"
                            stroke-width="1.8"
                            stroke-linecap="round">
                        </path>

                    </svg>

                    <span>Search Tours</span>

                </button>

            </div>

        </form>

    </div>

    <div id="idt-search-status" class="idt-search-status" aria-live="polite"></div>

</section>


<script>
(function(){

    const hero =
        document.getElementById(
            "idt-final-hero"
        );

    if(!hero){
        return;
    }

    const slides =
        hero.querySelectorAll(
            ".idt-slide"
        );

    const dots =
        hero.querySelectorAll(
            ".idt-dot"
        );

    const prev =
        hero.querySelector(
            ".idt-prev"
        );

    const next =
        hero.querySelector(
            ".idt-next"
        );

    let current = 0;
    let timer = null;

    const speed = 5500;


    function showSlide(index){

        if(index >= slides.length){
            index = 0;
        }

        if(index < 0){
            index = slides.length - 1;
        }

        slides.forEach(
            function(slide){

                slide.classList.remove(
                    "active"
                );

            }
        );

        dots.forEach(
            function(dot){

                dot.classList.remove(
                    "active"
                );

            }
        );

        slides[index].classList.add(
            "active"
        );

        if(dots[index]){

            dots[index].classList.add(
                "active"
            );

        }

        current = index;
    }


    function nextSlide(){
        showSlide(current + 1);
    }


    function previousSlide(){
        showSlide(current - 1);
    }


    function stopAuto(){

        if(timer){

            clearInterval(timer);

            timer = null;

        }

    }


    function startAuto(){

        stopAuto();

        timer =
            setInterval(
                function(){

                    nextSlide();

                },
                speed
            );

    }


    if(next){

        next.addEventListener(
            "click",
            function(){

                nextSlide();

                startAuto();

            }
        );

    }


    if(prev){

        prev.addEventListener(
            "click",
            function(){

                previousSlide();

                startAuto();

            }
        );

    }


    dots.forEach(
        function(dot,index){

            dot.addEventListener(
                "click",
                function(){

                    showSlide(index);

                    startAuto();

                }
            );

        }
    );


    let startX = 0;
    let endX = 0;


    hero.addEventListener(
        "touchstart",
        function(event){

            startX =
                event.changedTouches[0]
                .screenX;

        },
        {passive:true}
    );


    hero.addEventListener(
        "touchend",
        function(event){

            endX =
                event.changedTouches[0]
                .screenX;


            if(startX - endX > 50){

                nextSlide();

                startAuto();

            }


            if(endX - startX > 50){

                previousSlide();

                startAuto();

            }

        },
        {passive:true}
    );



    /* =========================================================
       DEPENDENT TOUR DROPDOWNS
       Location -> Tour Type -> Duration -> Tour Page -> Search
    ========================================================= */
    const bookingForm = hero.querySelector(".idt-booking-form");
    const searchStatus = document.getElementById("idt-search-status");
    const locationSelect = hero.querySelector("#idt-location");
    const typeSelect = hero.querySelector("#idt-tour-type");
    const durationSelect = hero.querySelector("#idt-duration");
    const tourSelect = hero.querySelector("#idt-tour-search");

    const tourPages = [{"name": "Taj Mahal Tour Packages", "url": "https://indiadaytrip.com/taj-mahal-tour-packages/", "loc": ["agra"], "type": ["taj-mahal"], "dur": ""}, {"name": "Taj Mahal Overnight Tour from Delhi", "url": "https://indiadaytrip.com/taj-mahal-overnight-tour-from-delhi/", "loc": ["agra", "delhi"], "type": ["taj-mahal"], "dur": "2"}, {"name": "Taj Mahal Sunrise Tour from Delhi", "url": "https://indiadaytrip.com/taj-mahal-sunrise-tour-from-delhi/", "loc": ["agra", "delhi"], "type": ["taj-mahal", "same-day"], "dur": "1"}, {"name": "Taj Mahal Tour by Superfast Train", "url": "https://indiadaytrip.com/taj-mahal-tour-by-superfast-train/", "loc": ["agra", "delhi"], "type": ["taj-mahal", "same-day"], "dur": "1"}, {"name": "Same Day Taj Mahal Tour by Luxury Car", "url": "https://indiadaytrip.com/same-day-taj-mahal-tour-by-luxury-car/", "loc": ["agra", "delhi"], "type": ["taj-mahal", "same-day"], "dur": "1"}, {"name": "Taj Mahal Tour from Delhi by Luxury Cars", "url": "https://indiadaytrip.com/taj-mahal-tour-from-delhi-by-luxury-cars/", "loc": ["agra", "delhi"], "type": ["taj-mahal"], "dur": "1"}, {"name": "Golden Triangle Tour Packages", "url": "https://indiadaytrip.com/golden-triangle-tour-packages/", "loc": ["delhi", "agra", "jaipur"], "type": ["golden-triangle"], "dur": ""}, {"name": "Golden Triangle Tour with Orchha and Khajuraho", "url": "https://indiadaytrip.com/golden-triangle-tour-with-orchha-and-khajuraho/", "loc": ["delhi", "agra", "jaipur", "orchha", "khajuraho"], "type": ["golden-triangle"], "dur": ""}, {"name": "Golden Triangle Tour with Pushkar", "url": "https://indiadaytrip.com/golden-triangle-tour-with-pushkar/", "loc": ["delhi", "agra", "jaipur", "pushkar"], "type": ["golden-triangle"], "dur": ""}, {"name": "Golden Triangle with Rajasthan Tour", "url": "https://indiadaytrip.com/golden-triangle-with-rajasthan-tour/", "loc": ["delhi", "agra", "jaipur", "rajasthan"], "type": ["golden-triangle", "rajasthan"], "dur": ""}, {"name": "6 Days Golden Triangle Tour", "url": "https://indiadaytrip.com/6-days-golden-triangle-tour/", "loc": ["delhi", "agra", "jaipur"], "type": ["golden-triangle"], "dur": "6"}, {"name": "Delhi Agra Jaipur 3 Days Golden Triangle Tour", "url": "https://indiadaytrip.com/delhi-agra-jaipur-3-days-golden-triangle-tour/", "loc": ["delhi", "agra", "jaipur"], "type": ["golden-triangle"], "dur": "3"}, {"name": "Delhi Agra Jaipur 4 Days Golden Triangle Tour", "url": "https://indiadaytrip.com/delhi-agra-jaipur-4-days-golden-triangle-tour/", "loc": ["delhi", "agra", "jaipur"], "type": ["golden-triangle"], "dur": "4"}, {"name": "Delhi Agra Jaipur 5 Days Golden Triangle Tour", "url": "https://indiadaytrip.com/delhi-agra-jaipur-5-days-golden-triangle-tour/", "loc": ["delhi", "agra", "jaipur"], "type": ["golden-triangle"], "dur": "5"}, {"name": "Delhi Agra Jaipur Jodhpur and Pushkar by Car", "url": "https://indiadaytrip.com/delhi-agra-jaipur-jodhpur-and-pushkar-by-car/", "loc": ["delhi", "agra", "jaipur", "jodhpur", "pushkar", "rajasthan"], "type": ["golden-triangle", "rajasthan"], "dur": ""}, {"name": "Delhi Agra Jaipur Tour with Bharatpur and Ranthambore", "url": "https://indiadaytrip.com/delhi-agra-jaipur-tour-with-bharatpur-and-ranthambore/", "loc": ["delhi", "agra", "jaipur", "bharatpur", "ranthambore", "rajasthan"], "type": ["golden-triangle", "rajasthan"], "dur": ""}, {"name": "Delhi Private Day Tour by Car", "url": "https://indiadaytrip.com/delhi-private-day-tour-by-car/", "loc": ["delhi"], "type": ["same-day"], "dur": "1"}, {"name": "1 Day Delhi and 1 Day Agra Tour by Car", "url": "https://indiadaytrip.com/1-day-delhi-and-1-day-agra-tour-by-car/", "loc": ["delhi", "agra"], "type": ["same-day", "taj-mahal"], "dur": "2"}, {"name": "Jaipur Overnight Tour from Delhi", "url": "https://indiadaytrip.com/jaipur-overnight-tour-from-delhi/", "loc": ["jaipur", "delhi", "rajasthan"], "type": ["rajasthan"], "dur": "2"}, {"name": "2 Days Jaipur Overnight Tour from Delhi", "url": "https://indiadaytrip.com/2-days-jaipur-overnight-tour-from-delhi/", "loc": ["jaipur", "delhi", "rajasthan"], "type": ["rajasthan"], "dur": "2"}, {"name": "Rajasthan Tour Packages", "url": "https://indiadaytrip.com/rajasthan-tour-packages/", "loc": ["rajasthan"], "type": ["rajasthan"], "dur": ""}, {"name": "5 Days Rajasthan Tour", "url": "https://indiadaytrip.com/5-days-rajasthan-tour/", "loc": ["rajasthan"], "type": ["rajasthan"], "dur": "5"}, {"name": "7 Days Rajasthan Tour", "url": "https://indiadaytrip.com/7-days-rajasthan-tour/", "loc": ["rajasthan"], "type": ["rajasthan"], "dur": "7"}, {"name": "10 Days Rajasthan Tour", "url": "https://indiadaytrip.com/10-days-rajasthan-tour/", "loc": ["rajasthan"], "type": ["rajasthan"], "dur": "10"}, {"name": "Jaisalmer Desert Tour", "url": "https://indiadaytrip.com/jaisalmer-desert-tour/", "loc": ["jaisalmer", "rajasthan"], "type": ["rajasthan"], "dur": ""}, {"name": "Rajasthan Forts and Palaces Tour", "url": "https://indiadaytrip.com/rajasthan-forts-and-palaces-tour/", "loc": ["rajasthan"], "type": ["rajasthan"], "dur": ""}, {"name": "Rajasthan Heritage Tour", "url": "https://indiadaytrip.com/rajasthan-heritage-tour/", "loc": ["rajasthan"], "type": ["rajasthan"], "dur": ""}, {"name": "Real Rajasthan Tour", "url": "https://indiadaytrip.com/real-rajasthan-tour/", "loc": ["rajasthan"], "type": ["rajasthan"], "dur": ""}, {"name": "Rural Rajasthan Tour", "url": "https://indiadaytrip.com/rural-rajasthan-tour/", "loc": ["rajasthan"], "type": ["rajasthan"], "dur": ""}, {"name": "Ultimate Classical Rajasthan Tour", "url": "https://indiadaytrip.com/ultimate-classical-rajasthan-tour/", "loc": ["rajasthan"], "type": ["rajasthan"], "dur": ""}, {"name": "Delhi Agra Jaipur and Udaipur by Car", "url": "https://indiadaytrip.com/delhi-agra-jaipur-and-udaipur-by-car/", "loc": ["delhi", "agra", "jaipur", "udaipur", "rajasthan"], "type": ["golden-triangle", "rajasthan"], "dur": ""}, {"name": "India Tour Packages", "url": "https://indiadaytrip.com/india-tour-packages/", "loc": ["india"], "type": ["india"], "dur": ""}, {"name": "Kerala Tours Package", "url": "https://indiadaytrip.com/kerala-tours-package/", "loc": ["kerala"], "type": ["kerala"], "dur": ""}, {"name": "Delhi Agra Jaipur Kerala Tour", "url": "https://indiadaytrip.com/delhi-agra-jaipur-kerala-tour/", "loc": ["delhi", "agra", "jaipur", "kerala"], "type": ["golden-triangle", "kerala"], "dur": ""}, {"name": "Kerala Honeymoon Tour Package", "url": "https://indiadaytrip.com/kerala-honeymoon-tour-package/", "loc": ["kerala"], "type": ["kerala"], "dur": ""}, {"name": "Kerala Backwaters Houseboat Tour Package", "url": "https://indiadaytrip.com/kerala-backwaters-houseboat-tour-package/", "loc": ["kerala", "alleppey"], "type": ["kerala"], "dur": ""}, {"name": "Kochi Munnar Alleppey Tour Package – 5 Days", "url": "https://indiadaytrip.com/kochi-munnar-alleppey-tour-package-5-days/", "loc": ["kochi", "munnar", "alleppey", "kerala"], "type": ["kerala"], "dur": "5"}, {"name": "Munnar Thekkady Alleppey Tour Package", "url": "https://indiadaytrip.com/munnar-thekkady-alleppey-tour-package/", "loc": ["munnar", "thekkady", "alleppey", "kerala"], "type": ["kerala"], "dur": ""}, {"name": "Varanasi Tour Packages", "url": "https://indiadaytrip.com/varanasi-tour-packages/", "loc": ["varanasi"], "type": ["varanasi"], "dur": ""}, {"name": "Varanasi Ayodhya Tour Package – 4 Days", "url": "https://indiadaytrip.com/varanasi-ayodhya-tour-package-4-days/", "loc": ["varanasi", "ayodhya"], "type": ["varanasi"], "dur": "4"}, {"name": "Varanasi Sarnath Tour Package", "url": "https://indiadaytrip.com/varanasi-sarnath-tour-package/", "loc": ["varanasi", "sarnath"], "type": ["varanasi"], "dur": "3"}, {"name": "2 Days Varanasi Tour Package", "url": "https://indiadaytrip.com/2-days-varanasi-tour-package/", "loc": ["varanasi"], "type": ["varanasi"], "dur": "2"}];

    const locationLabels = {
        "agra":"Agra","delhi":"Delhi","jaipur":"Jaipur","varanasi":"Varanasi",
        "ayodhya":"Ayodhya","sarnath":"Sarnath","rajasthan":"Rajasthan",
        "udaipur":"Udaipur","jaisalmer":"Jaisalmer","pushkar":"Pushkar",
        "ranthambore":"Ranthambore","bharatpur":"Bharatpur","jodhpur":"Jodhpur",
        "orchha":"Orchha","khajuraho":"Khajuraho","kerala":"Kerala",
        "kochi":"Kochi","munnar":"Munnar","thekkady":"Thekkady","alleppey":"Alleppey",
        "india":"India"
    };

    const typeLabels = {
        "same-day":"Same Day Tour",
        "taj-mahal":"Taj Mahal Tour",
        "golden-triangle":"Golden Triangle Tour",
        "rajasthan":"Rajasthan Tour",
        "kerala":"Kerala Tour",
        "varanasi":"Varanasi Tour",
        "india":"India Tour"
    };

    function unique(values){
        return [...new Set(values.filter(Boolean))];
    }

    function fillSelect(select, placeholder, items, labelFn){
        const oldValue = select.value;
        select.innerHTML = "";
        const first = document.createElement("option");
        first.value = "";
        first.textContent = placeholder;
        select.appendChild(first);

        items.forEach(function(value){
            const option = document.createElement("option");
            option.value = value;
            option.textContent = labelFn(value);
            select.appendChild(option);
        });

        if(items.includes(oldValue)) select.value = oldValue;
    }

    function matchingTours(stage){
        const location = locationSelect.value;
        const type = typeSelect.value;
        const duration = durationSelect.value;

        return tourPages.filter(function(tour){
            if(stage >= 1 && location && !tour.loc.includes(location)) return false;
            if(stage >= 2 && type && !tour.type.includes(type)) return false;
            if(stage >= 3 && duration && tour.dur !== duration) return false;
            return true;
        });
    }

    function resetMessage(){
        if(searchStatus){
            searchStatus.innerHTML = "";
            searchStatus.classList.remove("show");
        }
    }

    function showMessage(message){
        if(!searchStatus) return;
        searchStatus.innerHTML = message;
        searchStatus.classList.add("show");
    }

    function loadLocations(){
        const locations = unique(tourPages.flatMap(function(tour){ return tour.loc; }))
            .sort(function(a,b){
                return (locationLabels[a] || a).localeCompare(locationLabels[b] || b);
            });
        fillSelect(locationSelect, "Select Location", locations, function(v){
            return locationLabels[v] || v;
        });
    }

    function loadTypes(){
        const tours = matchingTours(1);
        const types = unique(tours.flatMap(function(tour){ return tour.type; }))
            .sort(function(a,b){
                return (typeLabels[a] || a).localeCompare(typeLabels[b] || b);
            });
        fillSelect(typeSelect, "Select Tour Type", types, function(v){
            return typeLabels[v] || v;
        });
        durationSelect.innerHTML = '<option value="">Select Duration</option>';
        tourSelect.innerHTML = '<option value="">Select Tour Page</option>';
    }

    function loadDurations(){
        const tours = matchingTours(2);
        const durations = unique(tours.map(function(tour){ return tour.dur; }))
            .sort(function(a,b){ return Number(a) - Number(b); });

        fillSelect(durationSelect, "Select Duration", durations, function(v){
            return v === "1" ? "1 Day" : v + " Days";
        });

        tourSelect.innerHTML = '<option value="">Select Tour Page</option>';
    }

    function loadTourPages(){
        const tours = matchingTours(3).sort(function(a,b){
            return a.name.localeCompare(b.name);
        });

        tourSelect.innerHTML = '<option value="">Select Tour Page</option>';
        tours.forEach(function(tour){
            const option = document.createElement("option");
            option.value = tour.url;
            option.textContent = tour.name;
            tourSelect.appendChild(option);
        });

        if(tours.length === 1){
            tourSelect.value = tours[0].url;
        }
    }

    locationSelect.addEventListener("change", function(){
        resetMessage();
        typeSelect.value = "";
        durationSelect.value = "";
        tourSelect.value = "";
        loadTypes();
    });

    typeSelect.addEventListener("change", function(){
        resetMessage();
        durationSelect.value = "";
        tourSelect.value = "";
        loadDurations();
    });

    durationSelect.addEventListener("change", function(){
        resetMessage();
        tourSelect.value = "";
        loadTourPages();
    });

    tourSelect.addEventListener("change", resetMessage);

    bookingForm.addEventListener("submit", function(event){
        event.preventDefault();

        if(!locationSelect.value){
            showMessage("<strong>Please select a location first.</strong>");
            return;
        }
        if(!typeSelect.value){
            showMessage("<strong>Please select a tour type.</strong>");
            return;
        }
        if(!durationSelect.value){
            showMessage("<strong>Please select a duration.</strong>");
            return;
        }
        if(!tourSelect.value){
            const available = matchingTours(3);
            if(!available.length){
                showMessage("<strong>No tour page is available for this combination.</strong> Please change your selection.");
            } else {
                showMessage("<strong>Please select a tour page.</strong>");
            }
            return;
        }

        window.location.href = tourSelect.value;
    });

    loadLocations();

    startAuto();

})();
</script>