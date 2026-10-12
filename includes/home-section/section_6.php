<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP
   TRAVEL EXPERIENCES
   WORDPRESS / ELEMENTOR HOVER FIXED
========================================================= */

#idt-journey-final,
#idt-journey-final *{
    box-sizing:border-box;
}

#idt-journey-final{
    --idt-bg:#FCFAF6;
    --idt-card:#ffffff;
    --idt-navy:#0c2d62;
    --idt-blue:#2E6095;
    --idt-blue-light:#EEF4FA;
    --idt-text:#66798a;
    --idt-border:#D8E0EA;

    position:relative;
    width:100%;
    overflow:visible;

    margin:0;
    padding:48px 24px 55px;

    background:#FCFAF6;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-journey-final .idt-journey-container{
    width:1380px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-journey-final .idt-journey-header{
    max-width:720px;

    margin:0 auto 40px;

    text-align:center;
}


#idt-journey-final .idt-journey-eyebrow{
    display:block;

    margin:0 0 4px;

    color:#2E6095;

    font-family:"Montez",cursive;

    font-size:37px;
    line-height:1.05;
    font-weight:400;
}


#idt-journey-final .idt-eyebrow-line{
    width:45px;
    height:2px;

    margin:0 auto 14px;

    background:#FF5D00;
}


#idt-journey-final .idt-journey-heading{
    margin:0;

    color:#0C2D62;

    font-family:"Playfair Display",Georgia,serif;

    font-size:42px;
    line-height:1.16;
    font-weight:600;

    letter-spacing:-1px;
}


#idt-journey-final .idt-heading-divider{
    width:48px;
    height:1px;

    margin:16px auto 0;

    background:#79BDF2;
}


/* =========================================================
   GRID
========================================================= */

#idt-journey-final .idt-journey-grid{
    position:relative;

    display:grid;

    grid-template-columns:repeat(4,minmax(0,1fr));

    gap:20px;

    overflow:visible;
}


/* =========================================================
   CARD
========================================================= */

#idt-journey-final .idt-journey-card{
    position:relative !important;

    z-index:1;

    min-height:232px;

    margin:0 !important;

    padding:23px 20px 21px;

    display:flex !important;
    flex-direction:column;
    align-items:center;
    justify-content:flex-start;

    text-align:center;

    background:#ffffff !important;

    border:1px solid #D8E0EA !important;

    border-radius:16px !important;

    box-shadow:
        0 4px 12px
        rgba(9,43,76,.055) !important;

    color:inherit !important;

    text-decoration:none !important;

    transform:translate3d(0,0,0) !important;

    -webkit-transform:translate3d(0,0,0) !important;

    transition:
        transform .32s cubic-bezier(.2,.7,.3,1),
        box-shadow .32s ease,
        border-color .32s ease,
        background-color .32s ease !important;

    -webkit-transition:
        -webkit-transform .32s cubic-bezier(.2,.7,.3,1),
        box-shadow .32s ease,
        border-color .32s ease,
        background-color .32s ease !important;

    will-change:transform;

    backface-visibility:hidden;
    -webkit-backface-visibility:hidden;
}


/* featured card */

#idt-journey-final .idt-journey-card.featured{
    border-color:#79BDF2 !important;
}


/* =========================================================
   IMPORTANT WORDPRESS HOVER FIX
========================================================= */

@media (hover:hover) and (pointer:fine){

    #idt-journey-final .idt-journey-card:hover,
    #idt-journey-final a.idt-journey-card:hover,
    body #idt-journey-final a.idt-journey-card:hover{

        z-index:20 !important;

        transform:
            translate3d(0,-12px,0)
            !important;

        -webkit-transform:
            translate3d(0,-12px,0)
            !important;

        border-color:#2E6095 !important;

        background:#ffffff !important;

        box-shadow:
            0 18px 38px
            rgba(9,43,76,.15)
            !important;
    }

}


/* keyboard focus */

#idt-journey-final .idt-journey-card:focus-visible{
    z-index:20 !important;

    transform:
        translate3d(0,-8px,0)
        !important;

    -webkit-transform:
        translate3d(0,-8px,0)
        !important;

    border-color:#2E6095 !important;

    outline:2px solid rgba(46,96,149,.18);

    outline-offset:3px;
}


/* =========================================================
   ICON
========================================================= */

#idt-journey-final .idt-journey-icon{
    position:relative;

    width:62px;
    height:62px;

    flex:0 0 62px;

    margin:0 0 17px;

    display:flex;
    align-items:center;
    justify-content:center;

    border:1px solid #79BDF2;

    border-radius:50%;

    background:#EEF4FA;

    color:#2E6095;

    transform:translate3d(0,0,0);

    transition:
        transform .30s ease,
        background-color .30s ease,
        border-color .30s ease,
        color .30s ease;
}


#idt-journey-final .featured .idt-journey-icon{
    background:#DDEBFA;
    border-color:#79BDF2;
}


@media (hover:hover) and (pointer:fine){

    #idt-journey-final .idt-journey-card:hover
    .idt-journey-icon{

        transform:
            translate3d(0,-3px,0);

        background:#2E6095;

        border-color:#2E6095;

        color:#ffffff;
    }

}


#idt-journey-final .idt-journey-icon svg{
    width:25px;
    height:25px;

    display:block;

    fill:none;

    stroke:currentColor;

    stroke-width:1.7;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   TITLE
========================================================= */

#idt-journey-final .idt-journey-title{
    margin:0 0 9px !important;

    padding:0;

    color:#0c2d62 !important;

    font-family:"Manrope",Arial,sans-serif;

    font-size:17px;
    line-height:1.35;
    font-weight:700;

    text-decoration:none !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#idt-journey-final .idt-journey-desc{
    max-width:285px;

    margin:0 !important;

    padding:0;

    color:#66798a !important;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:12.5px;
    line-height:1.65;
    font-weight:400;

    text-decoration:none !important;
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-journey-final .idt-journey-container{
        width:1100px;
    }

    #idt-journey-final .idt-journey-heading{
        font-size:38px;
    }

    #idt-journey-final .idt-journey-card{
        min-height:225px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-journey-final{
        padding:45px 20px 50px;
    }

    #idt-journey-final .idt-journey-header{
        margin-bottom:34px;
    }

    #idt-journey-final .idt-journey-eyebrow{
        font-size:32px;
    }

    #idt-journey-final .idt-journey-heading{
        font-size:34px;
    }

    #idt-journey-final .idt-journey-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:18px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:640px){

    #idt-journey-final{
        padding:38px 15px 44px;
    }

    #idt-journey-final .idt-journey-header{
        margin-bottom:28px;
    }

    #idt-journey-final .idt-journey-eyebrow{
        font-size:28px;
    }

    #idt-journey-final .idt-journey-heading{
        font-size:28px;
        line-height:1.22;
    }

    #idt-journey-final .idt-journey-grid{
        grid-template-columns:1fr;

        gap:14px;
    }

    #idt-journey-final .idt-journey-card{
        min-height:auto;

        padding:21px 18px;
    }

    #idt-journey-final .idt-journey-icon{
        width:58px;
        height:58px;

        flex-basis:58px;

        margin-bottom:14px;
    }

    #idt-journey-final .idt-journey-icon svg{
        width:23px;
        height:23px;
    }

    #idt-journey-final .idt-journey-title{
        font-size:16px;
    }

    #idt-journey-final .idt-journey-desc{
        font-size:12px;
    }

}


/* =========================================================
   REMOVE ELEMENTOR LINK INTERFERENCE
========================================================= */

.elementor
#idt-journey-final
.idt-journey-card,

.elementor-widget-html
#idt-journey-final
.idt-journey-card{

    text-decoration:none !important;

    transform:
        translate3d(0,0,0)
        !important;

}


@media (hover:hover) and (pointer:fine){

    .elementor
    #idt-journey-final
    .idt-journey-card:hover,

    .elementor-widget-html
    #idt-journey-final
    .idt-journey-card:hover{

        transform:
            translate3d(0,-12px,0)
            !important;

        -webkit-transform:
            translate3d(0,-12px,0)
            !important;
    }

}
</style>


<section id="idt-journey-final">

    <div class="idt-journey-container">


        <!-- HEADER -->

        <div class="idt-journey-header">

            <span class="idt-journey-eyebrow">
                Travel Experiences
            </span>

            <div class="idt-eyebrow-line"></div>

            <h2 class="idt-journey-heading">
                A Journey Crafted for You
            </h2>

            <div class="idt-heading-divider"></div>

        </div>



        <!-- CARDS -->

        <div class="idt-journey-grid">


            <!-- HONEYMOON -->

            <a
                href="#"
                class="idt-journey-card">

                <span class="idt-journey-icon">

                    <svg viewBox="0 0 24 24">

                        <path
                            d="M20.8 4.6C18.7 2.5 15.3 2.5 13.2 4.6L12 5.8L10.8 4.6C8.7 2.5 5.3 2.5 3.2 4.6C1.1 6.7 1.1 10.1 3.2 12.2L12 21L20.8 12.2C22.9 10.1 22.9 6.7 20.8 4.6Z">
                        </path>

                    </svg>

                </span>


                <h3 class="idt-journey-title">
                    Honeymoon Tours
                </h3>


                <p class="idt-journey-desc">
                    Romantic escapes crafted for couples — from candlelit Taj Mahal sunrises to Kerala houseboat evenings.
                </p>

            </a>



            <!-- WILDLIFE -->

            <a
                href="#"
                class="idt-journey-card featured">

                <span class="idt-journey-icon">

                    <svg viewBox="0 0 24 24">

                        <path
                            d="M2 12s3.6-6 10-6 10 6 10 6-3.6 6-10 6-10-6-10-6z">
                        </path>

                        <circle
                            cx="12"
                            cy="12"
                            r="2.6">
                        </circle>

                    </svg>

                </span>


                <h3 class="idt-journey-title">
                    Wildlife Safaris
                </h3>


                <p class="idt-journey-desc">
                    Expert-guided safaris at Ranthambore, Kanha, Periyar, and more — in pursuit of tigers, elephants, and rare birds.
                </p>

            </a>



            <!-- HERITAGE -->

            <a
                href="#"
                class="idt-journey-card">

                <span class="idt-journey-icon">

                    <svg viewBox="0 0 24 24">

                        <path d="M12 3L19 8V9H5V8L12 3Z"></path>

                        <path d="M4 21H20"></path>

                        <path d="M6 21V11"></path>

                        <path d="M18 21V11"></path>

                        <path d="M10 21V11"></path>

                        <path d="M14 21V11"></path>

                    </svg>

                </span>


                <h3 class="idt-journey-title">
                    Heritage &amp; Culture
                </h3>


                <p class="idt-journey-desc">
                    UNESCO World Heritage Sites, ancient temples, Mughal forts, and living cultural traditions across India.
                </p>

            </a>



            <!-- LUXURY -->

            <a
                href="#"
                class="idt-journey-card">

                <span class="idt-journey-icon">

                    <svg viewBox="0 0 24 24">

                        <path d="M12 3L16.5 9L12 21L7.5 9L12 3Z"></path>

                        <path d="M7.5 9H16.5"></path>

                        <path d="M4.5 9L12 3L19.5 9"></path>

                    </svg>

                </span>


                <h3 class="idt-journey-title">
                    Luxury Palace Stays
                </h3>


                <p class="idt-journey-desc">
                    Stay in hand-picked palace hotels, heritage havelis and luxury resorts — India’s most exclusive addresses.
                </p>

            </a>



            <!-- FAMILY -->

            <a
                href="#"
                class="idt-journey-card">

                <span class="idt-journey-icon">

                    <svg viewBox="0 0 24 24">

                        <circle
                            cx="8.5"
                            cy="8"
                            r="2.2">
                        </circle>

                        <circle
                            cx="16"
                            cy="8.5"
                            r="1.8">
                        </circle>

                        <path
                            d="M3.5 20C3.5 17 5.7 14.8 8.5 14.8C11.3 14.8 13.5 17 13.5 20">
                        </path>

                        <path
                            d="M13.8 20C14 17.6 15.6 15.9 17.8 15.9C20 15.9 21.4 17.5 21.7 19.6">
                        </path>

                    </svg>

                </span>


                <h3 class="idt-journey-title">
                    Family Tours
                </h3>


                <p class="idt-journey-desc">
                    Child-friendly itineraries with engaging activities, safe travel, and experiences the whole family will treasure.
                </p>

            </a>



            <!-- SOLO -->

            <a
                href="#"
                class="idt-journey-card">

                <span class="idt-journey-icon">

                    <svg viewBox="0 0 24 24">

                        <circle
                            cx="12"
                            cy="7.5"
                            r="3.2">
                        </circle>

                        <path
                            d="M5 20.5C5 16.6 8.1 13.5 12 13.5C15.9 13.5 19 16.6 19 20.5">
                        </path>

                    </svg>

                </span>


                <h3 class="idt-journey-title">
                    Solo Travel
                </h3>


                <p class="idt-journey-desc">
                    Safe, guided solo travel experiences across India designed to let you explore at your own pace with full support.
                </p>

            </a>



            <!-- KERALA -->

            <a
                href="#"
                class="idt-journey-card">

                <span class="idt-journey-icon">

                    <svg viewBox="0 0 24 24">

                        <path
                            d="M2 8C3.5 6.7 5 6.7 6.5 8C8 9.3 9.5 9.3 11 8C12.5 6.7 14 6.7 15.5 8C17 9.3 18.5 9.3 20 8">
                        </path>

                        <path
                            d="M2 13C3.5 11.7 5 11.7 6.5 13C8 14.3 9.5 14.3 11 13C12.5 11.7 14 11.7 15.5 13C17 14.3 18.5 14.3 20 13">
                        </path>

                        <path
                            d="M2 18C3.5 16.7 5 16.7 6.5 18C8 19.3 9.5 19.3 11 18C12.5 16.7 14 16.7 15.5 18C17 19.3 18.5 19.3 20 18">
                        </path>

                    </svg>

                </span>


                <h3 class="idt-journey-title">
                    Kerala Backwaters
                </h3>


                <p class="idt-journey-desc">
                    Drift through Alleppey’s emerald waterways on a private houseboat surrounded by coconut palms and silence.
                </p>

            </a>



            <!-- INTERNATIONAL -->

            <a
                href="#"
                class="idt-journey-card">

                <span class="idt-journey-icon">

                    <svg viewBox="0 0 24 24">

                        <circle
                            cx="12"
                            cy="12"
                            r="8.5">
                        </circle>

                        <path
                            d="M3.5 12H20.5">
                        </path>

                        <path
                            d="M12 3.5C14.5 5.9 15.8 8.9 15.8 12C15.8 15.1 14.5 18.1 12 20.5C9.5 18.1 8.2 15.1 8.2 12C8.2 8.9 9.5 5.9 12 3.5Z">
                        </path>

                    </svg>

                </span>


                <h3 class="idt-journey-title">
                    International Groups
                </h3>


                <p class="idt-journey-desc">
                    Specialist tours for travelers from the USA, UK, Australia, Canada and Germany with timezone-sensitive support.
                </p>

            </a>


        </div>

    </div>

</section>