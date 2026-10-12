<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP
   INTERNATIONAL TRAVELERS
   COMPLETE FINAL WORDPRESS SECTION
========================================================= */

#idt-international-section,
#idt-international-section *{
    box-sizing:border-box;
}

#idt-international-section{
    --idt-bg:#FCFAF6;
    --idt-white:#FFFFFF;
    --idt-navy:#0C2D62;
    --idt-blue:#2E6095;
    --idt-blue-dark:#123B72;
    --idt-text:#5F7182;
    --idt-border:#D8E0EA;
    --idt-whatsapp:#25D366;

    position:relative;
    width:100%;
    overflow:visible;

    padding:58px 24px 62px;

    background:#FCFAF6;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-international-section .idt-intl-container{
    width:1450px;
    max-width:100%;
    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-international-section .idt-intl-header{
    max-width:720px;
    margin-bottom:44px;
}


/* SCRIPT TITLE */

#idt-international-section .idt-intl-eyebrow{
    margin:0 0 7px;

    color:#2E6095;

    font-family:"Montez",cursive;

    font-size:41px;
    line-height:1.05;
    font-weight:400;
}


/* CYAN LINE */

#idt-international-section .idt-intl-eyebrow-line{
    width:58px;
    height:2px;

    margin:0 0 25px;

    background:#FF5D00;
}


/* MAIN HEADING */

#idt-international-section .idt-intl-heading{
    margin:0 0 26px;

    color:#0C2D62;

    font-family:"Playfair Display",Georgia,serif;

    font-size:39px;
    line-height:1.32;
    font-weight:500;

    letter-spacing:-.8px;
}


#idt-international-section .idt-intl-heading strong{
    font-weight:700;
}


#idt-international-section .idt-intl-heading-accent{
    display:block;

    color:#0C2D62;

    font-weight:600;
}


/* DESCRIPTION */

#idt-international-section .idt-intl-description{
    max-width:680px;

    margin:0;

    color:#5F7182;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:15px;
    line-height:1.85;
    font-weight:400;
}


#idt-international-section .idt-intl-description strong{
    color:#0C2D62;
    font-weight:700;
}


/* =========================================================
   GRID
========================================================= */

#idt-international-section .idt-intl-grid{
    display:grid;

    grid-template-columns:repeat(3,minmax(0,1fr));

    gap:24px;

    margin-top:47px;
}


/* =========================================================
   CARD
========================================================= */

#idt-international-section .idt-intl-card{
    position:relative;

    min-height:277px;

    padding:29px 28px 27px;

    display:flex;
    flex-direction:column;

    background:#FFFFFF;

    border:1px solid #D8E0EA;
    border-top:4px solid var(--card-accent,#2E6095);

    border-radius:17px;

    box-shadow:
        0 3px 12px rgba(9,43,76,.04);

    transform:translate3d(0,0,0) !important;

    transition:
        transform .30s ease,
        box-shadow .30s ease,
        border-color .30s ease,
        background-color .30s ease !important;

    will-change:transform;
}


/* UK FEATURED CARD */

#idt-international-section .idt-intl-card.featured{
    background:#F5F8FC;

    border-left-color:#CF142B;
    border-right-color:#CF142B;
    border-bottom-color:#CF142B;

    box-shadow:
        0 0 0 1px rgba(207,20,43,.08);
}


/* =========================================================
   HOVER — WORDPRESS SAFE
========================================================= */

@media (hover:hover) and (pointer:fine){

    body #idt-international-section .idt-intl-card:hover{
        z-index:20;

        transform:
            translate3d(0,-10px,0)
            !important;

        background:#FFFFFF;

        border-color:var(--card-accent,#2E6095);

        box-shadow:
            0 18px 36px
            rgba(9,43,76,.13);
    }

}


/* =========================================================
   MOST BOOKED
========================================================= */

#idt-international-section .idt-intl-featured-badge{
    position:absolute;

    top:-13px;
    right:27px;

    padding:8px 16px;

    border-radius:999px;

    background:#CF142B;

    color:#fff;

    font-size:10px;
    line-height:1;
    font-weight:700;

    letter-spacing:.03em;

    text-transform:uppercase;

    box-shadow:
        0 5px 13px rgba(207,20,43,.15);
}


/* =========================================================
   FLAG
========================================================= */

#idt-international-section .idt-intl-flag{
    width:67px;
    height:45px;

    margin-bottom:19px;

    overflow:hidden;

    border-radius:6px;

    box-shadow:
        0 3px 8px rgba(9,43,76,.20);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


#idt-international-section .idt-intl-flag svg{
    width:100%;
    height:100%;
    display:block;
}


@media (hover:hover) and (pointer:fine){

    #idt-international-section .idt-intl-card:hover
    .idt-intl-flag{

        transform:
            rotate(-3deg)
            scale(1.06);

        box-shadow:
            0 8px 16px
            rgba(9,43,76,.22);
    }

}


/* =========================================================
   CARD TITLE
========================================================= */

#idt-international-section .idt-intl-card-title{
    margin:0 0 10px;

    color:#0C2D62;

    font-size:18px;
    line-height:1.35;
    font-weight:700;
}


/* =========================================================
   CARD DESCRIPTION
========================================================= */

#idt-international-section .idt-intl-card-desc{
    margin:0 0 25px;

    color:#5F7182;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:14px;
    line-height:1.72;
    font-weight:400;

    flex:1;
}


/* =========================================================
   CTA
========================================================= */

#idt-international-section .idt-intl-card-link{
    display:inline-flex;

    align-items:center;

    gap:8px;

    align-self:flex-start;

    color:var(--card-accent-text,#0C2D62) !important;

    font-size:14px;
    line-height:1;
    font-weight:700;

    text-decoration:none !important;

    transition:
        color .25s ease,
        gap .25s ease;
}


#idt-international-section .idt-intl-card-link svg{
    width:15px;
    height:15px;

    fill:none;

    stroke:currentColor;

    stroke-width:2;

    transition:transform .25s ease;
}


#idt-international-section .idt-intl-card-link:hover{
    gap:11px;
}


#idt-international-section .idt-intl-card-link:hover svg{
    transform:translateX(3px);
}


/* =========================================================
   BOTTOM CTA
========================================================= */

#idt-international-section .idt-intl-bottom{
    display:flex;

    justify-content:center;

    margin-top:40px;
}


#idt-international-section .idt-whatsapp-btn{
    position:relative;

    min-height:52px;

    padding:0 28px;

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:10px;

    overflow:hidden;

    isolation:isolate;

    border-radius:10px;

    background:#0C2D62;

    color:#fff !important;

    font-size:14px;
    line-height:1;
    font-weight:700;

    text-decoration:none !important;

    transition:
        transform .25s ease,
        box-shadow .25s ease;
}


#idt-international-section .idt-whatsapp-btn::before{
    content:"";

    position:absolute;
    inset:0;

    z-index:-1;

    background:#25D366;

    transform:translateX(-101%);

    transition:transform .4s ease;
}


#idt-international-section .idt-whatsapp-btn:hover::before{
    transform:translateX(0);
}


#idt-international-section .idt-whatsapp-btn:hover{
    color:#fff !important;

    transform:translateY(-3px);

    box-shadow:
        0 9px 22px rgba(37,211,102,.18);
}


#idt-international-section .idt-whatsapp-btn svg{
    width:18px;
    height:18px;
    fill:currentColor;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:1024px){

    #idt-international-section{
        padding:52px 20px 56px;
    }

    #idt-international-section .idt-intl-container{
        width:900px;
    }

    #idt-international-section .idt-intl-grid{
        grid-template-columns:repeat(2,minmax(0,1fr));

        gap:19px;
    }

    #idt-international-section .idt-intl-heading{
        font-size:34px;
    }

    #idt-international-section .idt-intl-eyebrow{
        font-size:35px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:640px){

    #idt-international-section{
        padding:42px 16px 46px;
    }

    #idt-international-section .idt-intl-header{
        margin-bottom:34px;
    }

    #idt-international-section .idt-intl-eyebrow{
        font-size:29px;
    }

    #idt-international-section .idt-intl-eyebrow-line{
        margin-bottom:20px;
    }

    #idt-international-section .idt-intl-heading{
        font-size:27px;

        line-height:1.3;
    }

    #idt-international-section .idt-intl-description{
        font-size:13px;

        line-height:1.75;
    }

    #idt-international-section .idt-intl-grid{
        grid-template-columns:1fr;

        gap:16px;

        margin-top:34px;
    }

    #idt-international-section .idt-intl-card{
        min-height:auto;

        padding:24px 20px;
    }

    #idt-international-section .idt-intl-card-title{
        font-size:17px;
    }

    #idt-international-section .idt-intl-card-desc{
        font-size:13px;
    }

    #idt-international-section .idt-whatsapp-btn{
        width:100%;
    }

}

/* =========================================================
   INDIA DAY TRIP — FIXED FONT SYSTEM
========================================================= */
#idt-international-section .idt-intl-card-title,
#idt-international-section .idt-intl-featured-badge,
#idt-international-section .idt-intl-card-link,
#idt-international-section .idt-whatsapp-btn{
    font-family:"Manrope",Arial,sans-serif;
}

</style>


<section id="idt-international-section">


    <div class="idt-intl-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-intl-header">


            <p class="idt-intl-eyebrow">
                International Travelers
            </p>


            <div class="idt-intl-eyebrow-line"></div>


            <h2 class="idt-intl-heading">

                <strong>
                    Planning to Book from Abroad?
                </strong>

                <span class="idt-intl-heading-accent">
                    India Tour Packages for International Travelers
                </span>

            </h2>


            <p class="idt-intl-description">

                At India Day Trips India, we welcome travelers from all around the globe. We manage everything, from
                <strong>multilingual guides</strong>
                to visa guidance, international airport meet-and-greet, and time-zone-sensitive communication — making India tour bookings from abroad butter-smooth!

            </p>


        </div>



        <!-- =================================================
             GRID
        ================================================== -->

        <div class="idt-intl-grid">


            <!-- =================================================
                 USA
            ================================================== -->

            <article
                class="idt-intl-card"
                style="
                    --card-accent:#3C3B6E;
                    --card-accent-text:#2E2D57;
                ">


                <div class="idt-intl-flag">

                    <svg viewBox="0 0 30 20">

                        <rect width="30" height="20" fill="#B22234"/>

                        <g fill="#FFFFFF">
                            <rect y="1.54" width="30" height="1.54"/>
                            <rect y="4.62" width="30" height="1.54"/>
                            <rect y="7.69" width="30" height="1.54"/>
                            <rect y="10.77" width="30" height="1.54"/>
                            <rect y="13.85" width="30" height="1.54"/>
                            <rect y="16.92" width="30" height="1.54"/>
                        </g>

                        <rect width="13" height="10.77" fill="#3C3B6E"/>

                        <g fill="#FFFFFF">
                            <circle cx="2.2" cy="1.8" r=".55"/>
                            <circle cx="5.2" cy="1.8" r=".55"/>
                            <circle cx="8.2" cy="1.8" r=".55"/>
                            <circle cx="11.2" cy="1.8" r=".55"/>
                            <circle cx="3.7" cy="3.4" r=".55"/>
                            <circle cx="6.7" cy="3.4" r=".55"/>
                            <circle cx="9.7" cy="3.4" r=".55"/>
                            <circle cx="2.2" cy="5" r=".55"/>
                            <circle cx="5.2" cy="5" r=".55"/>
                            <circle cx="8.2" cy="5" r=".55"/>
                            <circle cx="11.2" cy="5" r=".55"/>
                        </g>

                    </svg>

                </div>


                <h3 class="idt-intl-card-title">
                    From the USA
                </h3>


                <p class="idt-intl-card-desc">
                    India tour packages from the USA with US time-zone support, direct-flight coordination &amp; dollar billing.
                </p>


                <a
                    href="/international/usa/"
                    class="idt-intl-card-link">

                    View Packages

                    <svg viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>

                </a>

            </article>



            <!-- =================================================
                 UK
            ================================================== -->

            <article
                class="idt-intl-card featured"
                style="
                    --card-accent:#CF142B;
                    --card-accent-text:#A10E24;
                ">


                <span class="idt-intl-featured-badge">
                    Most Booked
                </span>


                <div class="idt-intl-flag">

                    <svg viewBox="0 0 30 20">

                        <rect width="30" height="20" fill="#00247D"/>

                        <path
                            d="M0 0L30 20M30 0L0 20"
                            stroke="#FFFFFF"
                            stroke-width="4">
                        </path>

                        <path
                            d="M0 0L30 20M30 0L0 20"
                            stroke="#CF142B"
                            stroke-width="1.6">
                        </path>

                        <path
                            d="M15 0V20M0 10H30"
                            stroke="#FFFFFF"
                            stroke-width="6.6">
                        </path>

                        <path
                            d="M15 0V20M0 10H30"
                            stroke="#CF142B"
                            stroke-width="4">
                        </path>

                    </svg>

                </div>


                <h3 class="idt-intl-card-title">
                    From the UK
                </h3>


                <p class="idt-intl-card-desc">
                    India tour packages from the UK — including Scotland &amp; Northern Ireland. GBP pricing available.
                </p>


                <a
                    href="/international/uk/"
                    class="idt-intl-card-link">

                    View Packages

                    <svg viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>

                </a>

            </article>



            <!-- =================================================
                 GERMANY
            ================================================== -->

            <article
                class="idt-intl-card"
                style="
                    --card-accent:#FFCE00;
                    --card-accent-text:#171412;
                ">


                <div class="idt-intl-flag">

                    <svg viewBox="0 0 30 20">

                        <rect
                            width="30"
                            height="6.67"
                            y="0"
                            fill="#000000">
                        </rect>

                        <rect
                            width="30"
                            height="6.67"
                            y="6.67"
                            fill="#DD0000">
                        </rect>

                        <rect
                            width="30"
                            height="6.66"
                            y="13.34"
                            fill="#FFCE00">
                        </rect>

                    </svg>

                </div>


                <h3 class="idt-intl-card-title">
                    From Germany
                </h3>


                <p class="idt-intl-card-desc">
                    German-speaking guides across Delhi, Agra, Jaipur &amp; Rajasthan. Deutschsprachiger Service.
                </p>


                <a
                    href="/international/germany/"
                    class="idt-intl-card-link">

                    View Packages

                    <svg viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>

                </a>

            </article>



            <!-- =================================================
                 FRANCE
            ================================================== -->

            <article
                class="idt-intl-card"
                style="
                    --card-accent:#0055A4;
                    --card-accent-text:#003D78;
                ">


                <div class="idt-intl-flag">

                    <svg viewBox="0 0 30 20">

                        <rect
                            width="10"
                            height="20"
                            x="0"
                            fill="#0055A4">
                        </rect>

                        <rect
                            width="10"
                            height="20"
                            x="10"
                            fill="#FFFFFF">
                        </rect>

                        <rect
                            width="10"
                            height="20"
                            x="20"
                            fill="#EF4135">
                        </rect>

                    </svg>

                </div>


                <h3 class="idt-intl-card-title">
                    From France
                </h3>


                <p class="idt-intl-card-desc">
                    French-speaking expert guides available throughout all our private India tours.
                </p>


                <a
                    href="/international/france/"
                    class="idt-intl-card-link">

                    View Packages

                    <svg viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>

                </a>

            </article>



            <!-- =================================================
                 AUSTRALIA
            ================================================== -->

            <article
                class="idt-intl-card"
                style="
                    --card-accent:#00247B;
                    --card-accent-text:#001C5E;
                ">


                <div class="idt-intl-flag">

                    <svg viewBox="0 0 30 20">

                        <rect
                            width="30"
                            height="20"
                            fill="#00247B">
                        </rect>

                        <g transform="scale(.5)">

                            <rect
                                width="30"
                                height="20"
                                fill="#00247B">
                            </rect>

                            <path
                                d="M0 0L30 20M30 0L0 20"
                                stroke="#FFFFFF"
                                stroke-width="4">
                            </path>

                            <path
                                d="M0 0L30 20M30 0L0 20"
                                stroke="#CF142B"
                                stroke-width="1.6">
                            </path>

                            <path
                                d="M15 0V20M0 10H30"
                                stroke="#FFFFFF"
                                stroke-width="6.6">
                            </path>

                            <path
                                d="M15 0V20M0 10H30"
                                stroke="#CF142B"
                                stroke-width="4">
                            </path>

                        </g>


                        <g fill="#FFFFFF">
                            <circle cx="21" cy="5" r=".9"/>
                            <circle cx="24.5" cy="8.5" r="1.1"/>
                            <circle cx="24" cy="13.5" r=".9"/>
                            <circle cx="19.5" cy="15.5" r=".7"/>
                        </g>

                    </svg>

                </div>


                <h3 class="idt-intl-card-title">
                    From Australia
                </h3>


                <p class="idt-intl-card-desc">
                    Flexible itineraries timed around Australian international departure schedules.
                </p>


                <a
                    href="/international/australia/"
                    class="idt-intl-card-link">

                    View Packages

                    <svg viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>

                </a>

            </article>



            <!-- =================================================
                 CANADA
            ================================================== -->

            <article
                class="idt-intl-card"
                style="
                    --card-accent:#FF0000;
                    --card-accent-text:#C40000;
                ">


                <div class="idt-intl-flag">

                    <svg viewBox="0 0 30 20">

                        <rect width="30" height="20" fill="#FFFFFF"></rect>

                        <rect
                            width="7.5"
                            height="20"
                            x="0"
                            fill="#FF0000">
                        </rect>

                        <rect
                            width="7.5"
                            height="20"
                            x="22.5"
                            fill="#FF0000">
                        </rect>

                        <path
                            d="M15 3.2L16 6.4L18.6 5L17.6 8L20 8L17.6 10L18.6 12.4L16 11.4L16.4 15L15 12.8L13.6 15L14 11.4L11.4 12.4L12.4 10L10 8L12.4 8L11.4 5L14 6.4Z"
                            fill="#FF0000">
                        </path>

                    </svg>

                </div>


                <h3 class="idt-intl-card-title">
                    From Canada
                </h3>


                <p class="idt-intl-card-desc">
                    Customized India tour packages designed for Canadian travel windows &amp; budgets.
                </p>


                <a
                    href="/international/canada/"
                    class="idt-intl-card-link">

                    View Packages

                    <svg viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>

                </a>

            </article>


        </div>



        <!-- =================================================
             WHATSAPP CTA
        ================================================== -->

        <div class="idt-intl-bottom">


            <a
                href="https://wa.me/918126052755?text=Hi%2C%20I%27m%20an%20international%20traveler%20interested%20in%20an%20India%20tour%20package."
                target="_blank"
                rel="noopener"
                class="idt-whatsapp-btn">


                <svg viewBox="0 0 24 24">

                    <path
                        d="M12.04 2c-5.5 0-9.96 4.46-9.96 9.96 0 1.76.46 3.48 1.34 5L2 22l5.2-1.36a9.9 9.9 0 0 0 4.84 1.23h.01c5.5 0 9.96-4.46 9.96-9.96S17.54 2 12.04 2zm5.8 14.24c-.24.68-1.4 1.3-1.93 1.36-.5.06-1.12.09-1.8-.12-.42-.12-.96-.31-1.65-.6-2.9-1.25-4.8-4.14-4.94-4.33-.14-.19-1.18-1.57-1.18-3 0-1.42.75-2.12 1.02-2.41.27-.29.58-.36.78-.36.19 0 .39 0 .56.01.18.01.42-.07.66.5.24.58.83 2 .9 2.14.07.14.12.31.02.5-.1.19-.15.31-.29.48-.14.17-.3.38-.43.51-.14.14-.29.29-.13.57.17.29.75 1.24 1.6 2 .74.66 1.44.94 1.73 1.07.29.14.46.12.63-.07.17-.19.72-.84.92-1.13.19-.29.38-.24.63-.14.26.1 1.65.78 1.93.92.29.14.48.21.55.33.07.12.07.68-.17 1.36z">
                    </path>

                </svg>


                WhatsApp Our International Team Now

            </a>


        </div>


    </div>


</section>