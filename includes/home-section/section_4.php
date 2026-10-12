<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
#idt-popular-packages,
#idt-popular-packages *{
    box-sizing:border-box;
}

#idt-popular-packages{
    --idt-bg:#fcfaf6;
    --idt-card:#ffffff;

    --idt-navy:#0c2d62;
    --idt-blue:#2e6095;
    --idt-blue-dark:#123b72;

    --idt-text:#5f7182;
    --idt-border:#d8e0ea;

    width:100%;
    position:relative;
    overflow:hidden;

    padding:58px 24px 64px;

    background:#fcfaf6;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-popular-packages .idt-packages-container{
    width:1480px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-popular-packages .idt-packages-header{
    text-align:center;

    max-width:1400px;

    margin:0 auto;
}


/* =========================================================
   SCRIPT TITLE
========================================================= */

#idt-popular-packages .idt-script-title{
    display:flex;
    align-items:flex-end;
    justify-content:center;

    margin:0 0 14px;

    color:#2E6095;

    font-family:"Montez",cursive;

    font-size:41px;
    line-height:1;
    font-weight:400;
}


/* highlighted first word */

#idt-popular-packages .idt-script-highlight{
    display:inline-block;

    padding:8px 4px 5px;

    background:transparent;

    color:#2E6095;

    line-height:.95;
}


/* Packages */

#idt-popular-packages .idt-script-rest{
    position:relative;

    display:inline-block;

    padding:0 0 5px 4px;
}


/* cyan underline */

#idt-popular-packages .idt-script-rest::after{
    content:"";

    position:absolute;

    left:0;
    bottom:-5px;

    width:72px;
    height:2px;

    background:#FF5D00;
}


/* =========================================================
   MAIN HEADING
========================================================= */

#idt-popular-packages .idt-main-heading{
    margin:0 0 20px;

    color:#0c2d62;

    font-family:"Playfair Display",Georgia,serif;

    font-size:42px;
    line-height:1.18;
    font-weight:700;

    letter-spacing:-1.4px;
}

#idt-popular-packages .idt-heading-blue{
    color:#0C2D62;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#idt-popular-packages .idt-description{
    max-width:1260px;

    margin:0 auto;

    color:#5f7182;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:18px;
    line-height:1.78;
    font-weight:400;

    text-align:justify;
    text-justify:inter-word;
}


/* =========================================================
   FILTERS
========================================================= */

#idt-popular-packages .idt-filters-wrap{
    margin-top:32px;
}


#idt-popular-packages .idt-filters{
    display:flex;

    align-items:center;
    justify-content:center;

    flex-wrap:wrap;

    gap:14px;

    margin:0;
    padding:0;

    list-style:none;
}


#idt-popular-packages .idt-filter-btn{
    min-height:48px;

    padding:0 23px;

    border:1px solid #d8e0ea;

    border-radius:999px;

    background:#0c2d62;

    color:#fff;

    font-family:"Manrope",Arial,sans-serif;

    font-size:14px;
    line-height:1;
    font-weight:700;

    text-transform:uppercase;

    cursor:pointer;

    transition:
        background .25s ease,
        color .25s ease,
        border-color .25s ease,
        transform .25s ease;
}


#idt-popular-packages .idt-filter-btn:hover{
    border-color:#2E6095;

    transform:translateY(-1px);
}


#idt-popular-packages .idt-filter-btn.active{
    background:#2E6095;

    border-color:#2E6095;

    color:#071d30;
}


/* =========================================================
   CAROUSEL
========================================================= */

#idt-popular-packages .idt-carousel{
    position:relative;

    margin-top:34px;
}


#idt-popular-packages .idt-carousel-viewport{
    width:100%;

    overflow:hidden;
}


#idt-popular-packages .idt-carousel-track{
    display:flex;

    align-items:stretch;

    gap:22px;

    will-change:transform;

    transition:
        transform .55s
        cubic-bezier(.22,.61,.36,1);
}


/* =========================================================
   CARD
========================================================= */

#idt-popular-packages .idt-package-card{
    flex:
        0 0
        calc(
            (100% - 66px) / 4
        );

    min-width:0;

    display:flex;

    flex-direction:column;

    overflow:hidden;

    border-radius:14px;

    background:#ffffff;

    box-shadow:
        0 2px 10px
        rgba(9,43,76,.045);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}


#idt-popular-packages .idt-package-card:hover{
    transform:translateY(-3px);

    box-shadow:
        0 10px 28px
        rgba(9,43,76,.10);
}


/* =========================================================
   IMAGE
========================================================= */

#idt-popular-packages .idt-package-media{
    position:relative;

    width:100%;
    height:235px;

    overflow:hidden;

    background:#eaf3f6;
}


#idt-popular-packages .idt-package-media img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;

    transition:transform .6s ease;
}


#idt-popular-packages .idt-package-card:hover
.idt-package-media img{
    transform:scale(1.035);
}


/* =========================================================
   BADGE
========================================================= */

#idt-popular-packages .idt-package-badge{
    position:absolute;

    top:14px;
    left:14px;

    padding:6px 11px;

    border-radius:999px;

    font-size:10px;
    line-height:1;
    font-weight:700;

    letter-spacing:.04em;

    text-transform:uppercase;
}


#idt-popular-packages .idt-package-badge.value{
    background:#79BDF2;

    color:#102231;
}


#idt-popular-packages .idt-package-badge.seller{
    background:#FF5D00;

    color:#fff;
}


/* =========================================================
   CARD BODY
========================================================= */

#idt-popular-packages .idt-package-body{
    display:flex;

    flex-direction:column;

    flex:1;

    padding:20px 18px 18px;
}


/* =========================================================
   RATING
========================================================= */

#idt-popular-packages .idt-rating-row{
    display:flex;

    align-items:center;

    gap:7px;

    margin-bottom:14px;

    color:#65788a;

    font-size:13px;
}


#idt-popular-packages .idt-stars{
    display:flex;

    gap:2px;

    color:#2E6095;
}


#idt-popular-packages .idt-stars span{
    font-size:15px;

    line-height:1;
}


/* =========================================================
   META
========================================================= */

#idt-popular-packages .idt-meta{
    display:flex;

    align-items:flex-start;

    flex-wrap:wrap;

    gap:12px 16px;

    min-height:24px;

    margin-bottom:13px;

    color:#64788d;

    font-size:13px;
    line-height:1.5;
}


#idt-popular-packages .idt-meta-item{
    display:flex;

    align-items:flex-start;

    gap:6px;
}


#idt-popular-packages .idt-meta-item svg{
    width:15px;
    height:15px;

    margin-top:2px;

    flex:0 0 15px;

    fill:none;

    stroke:currentColor;

    stroke-width:1.7;
}


/* =========================================================
   CARD TITLE
========================================================= */

#idt-popular-packages .idt-package-title{
    margin:0 0 16px;

    min-height:48px;

    color:#0c2d62;

    font-family:"Manrope",Arial,sans-serif;

    font-size:17px;
    line-height:1.45;
    font-weight:700;

    display:-webkit-box;

    -webkit-box-orient:vertical;
    -webkit-line-clamp:2;

    overflow:hidden;
}


/* =========================================================
   ACTIONS
========================================================= */

#idt-popular-packages .idt-package-actions{
    display:flex;

    align-items:center;

    gap:10px;

    margin-top:auto;
}


/* ENQUIRE */

#idt-popular-packages .idt-enquire-btn{
    flex:1;

    min-height:45px;

    display:flex;

    align-items:center;
    justify-content:center;

    padding:0 15px;

    border-radius:9px;

    background:#0c2d62;

    color:#fff !important;

    font-size:13px;
    line-height:1;
    font-weight:700;

    text-decoration:none !important;

    transition:
        background .25s ease,
        transform .25s ease;
}


#idt-popular-packages .idt-enquire-btn:hover{
    background:#123B72;

    color:#fff !important;

    transform:translateY(-1px);
}


/* WHATSAPP */

#idt-popular-packages .idt-whatsapp-btn{
    width:45px;
    height:45px;

    flex:0 0 45px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:9px;

    background:#25d366;

    color:#fff !important;

    text-decoration:none !important;

    transition:
        background .25s ease,
        transform .25s ease;
}


#idt-popular-packages .idt-whatsapp-btn:hover{
    background:#1ebd5b;

    transform:translateY(-1px);
}


#idt-popular-packages .idt-whatsapp-btn svg{
    width:21px;
    height:21px;

    fill:currentColor;
}


/* =========================================================
   BOTTOM CONTROLS
========================================================= */

#idt-popular-packages .idt-carousel-footer{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:20px;

    margin-top:24px;
}


/* ARROWS */

#idt-popular-packages .idt-arrow-group{
    display:flex;

    gap:10px;
}


#idt-popular-packages .idt-arrow-btn{
    width:46px;
    height:46px;

    padding:0;

    border:1px solid #d8e0ea;

    border-radius:50%;

    background:#0c2d62;

    color:#fff;

    display:flex;

    align-items:center;
    justify-content:center;

    cursor:pointer;

    transition:
        background .25s ease,
        border-color .25s ease,
        opacity .25s ease,
        transform .25s ease;
}


#idt-popular-packages .idt-arrow-btn:hover{
    background:#2E6095;

    border-color:#2E6095;

    transform:translateY(-1px);
}


#idt-popular-packages .idt-arrow-btn:disabled{
    opacity:.35;

    cursor:not-allowed;

    transform:none;
}


#idt-popular-packages .idt-arrow-btn svg{
    width:18px;
    height:18px;

    fill:none;

    stroke:currentColor;

    stroke-width:2;
}


/* =========================================================
   VIEW ALL
========================================================= */

#idt-popular-packages .idt-view-all{
    min-height:48px;

    padding:0 25px;

    border-radius:9px;

    background:#0c2d62;

    color:#fff !important;

    display:inline-flex;

    align-items:center;
    justify-content:center;

    font-size:13px;
    font-weight:700;

    text-transform:uppercase;

    text-decoration:none !important;

    transition:
        background .25s ease,
        transform .25s ease;
}


#idt-popular-packages .idt-view-all:hover{
    background:#123B72;

    color:#fff !important;

    transform:translateY(-1px);
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:1024px){

    #idt-popular-packages{
        padding:55px 20px;
    }


    #idt-popular-packages .idt-script-title{
        font-size:36px;
    }


    #idt-popular-packages .idt-main-heading{
        font-size:37px;
    }


    #idt-popular-packages .idt-description{
        max-width:900px;

        font-size:16px;
        line-height:1.75;

        text-align:justify;
        text-justify:inter-word;
    }


    #idt-popular-packages .idt-filters{
        justify-content:flex-start;

        flex-wrap:nowrap;

        overflow-x:auto;

        padding-bottom:6px;

        scrollbar-width:none;
    }


    #idt-popular-packages .idt-filters::-webkit-scrollbar{
        display:none;
    }


    #idt-popular-packages .idt-filter-btn{
        min-height:48px;

        padding:0 22px;

        font-size:12px;

        white-space:nowrap;
    }


    #idt-popular-packages .idt-package-card{
        flex:
            0 0
            calc(
                (100% - 24px) / 2
            );
    }


    #idt-popular-packages .idt-carousel-track{
        gap:24px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:640px){

    #idt-popular-packages{
        padding:45px 15px;
    }


    #idt-popular-packages .idt-script-title{
        font-size:31px;

        margin-bottom:17px;
    }


    #idt-popular-packages .idt-main-heading{
        font-size:29px;

        line-height:1.25;

        letter-spacing:-.6px;
    }


    #idt-popular-packages .idt-description{
        font-size:15px;

        line-height:1.72;

        text-align:justify;
        text-justify:inter-word;
    }


    #idt-popular-packages .idt-filters-wrap{
        margin-top:24px;
    }


    #idt-popular-packages .idt-filter-btn{
        min-height:45px;

        padding:0 18px;

        font-size:11px;
    }


    #idt-popular-packages .idt-carousel{
        margin-top:32px;
    }


    #idt-popular-packages .idt-carousel-track{
        gap:18px;
    }


    #idt-popular-packages .idt-package-card{
        flex:0 0 100%;
    }


    #idt-popular-packages .idt-package-media{
        height:245px;
    }


    #idt-popular-packages .idt-package-body{
        padding:19px 17px;
    }


    #idt-popular-packages .idt-carousel-footer{
        flex-direction:column;

        align-items:stretch;
    }


    #idt-popular-packages .idt-arrow-group{
        justify-content:center;
    }


    #idt-popular-packages .idt-view-all{
        width:100%;
    }

}


/* =========================================================
   INDIA DAY TRIP — FIXED FONT SYSTEM
========================================================= */

#idt-popular-packages .idt-package-badge,
#idt-popular-packages .idt-rating-row,
#idt-popular-packages .idt-meta,
#idt-popular-packages .idt-package-title,
#idt-popular-packages .idt-enquire-btn,
#idt-popular-packages .idt-view-all{
    font-family:"Manrope",Arial,sans-serif;
}


/* ACTIVE / CLICKED TAB — WHITE WITH BLUE BORDER & TEXT */

#idt-popular-packages .idt-filter-btn.active{
    background:#FFFFFF !important;
    color:#0C2D62 !important;
    border-color:#2E6095 !important;
    box-shadow:0 5px 14px rgba(12,45,98,.08) !important;
}

</style>


<section id="idt-popular-packages">

    <div class="idt-packages-container">


        <!-- HEADER -->

        <div class="idt-packages-header">


            <div class="idt-script-title">

                <span class="idt-script-highlight">
                    Popular
                </span>

                <span class="idt-script-rest">
                    Packages
                </span>

            </div>


            <h2 class="idt-main-heading">

                Our Most-Loved

                <span class="idt-heading-blue">
                    Tour Packages
                </span>

            </h2>


            <p class="idt-description">

                At India Day Trip India, we hand-craft the best possible India holiday packages as per the preferences of our customers, allowing them to experience moments that define a lifetime. Every package shown below is a tribute to a fully dedicated, customizable, and private traveling package available all throughout the year. Browse freely and then book your India tour with a specialist today.

            </p>

        </div>



        <!-- FILTERS -->

        <div class="idt-filters-wrap">

            <ul
                class="idt-filters"
                id="idtPackagesFilters">
            </ul>

        </div>



        <!-- CAROUSEL -->

        <div class="idt-carousel">

            <div class="idt-carousel-viewport">

                <div
                    class="idt-carousel-track"
                    id="idtPackagesTrack">
                </div>

            </div>

        </div>



        <!-- BOTTOM -->

        <div class="idt-carousel-footer">


            <div class="idt-arrow-group">

                <button
                    type="button"
                    class="idt-arrow-btn"
                    id="idtPackagesPrev"
                    aria-label="Previous packages">

                    <svg viewBox="0 0 24 24">

                        <path d="M19 12H5"></path>

                        <path d="M12 19L5 12L12 5"></path>

                    </svg>

                </button>


                <button
                    type="button"
                    class="idt-arrow-btn"
                    id="idtPackagesNext"
                    aria-label="Next packages">

                    <svg viewBox="0 0 24 24">

                        <path d="M5 12H19"></path>

                        <path d="M12 5L19 12L12 19"></path>

                    </svg>

                </button>

            </div>



            <a
                href="/tour/"
                class="idt-view-all"
                id="idtPackagesViewAll">

                View All Golden Triangle Tours

            </a>

        </div>


    </div>

</section>


<script>
(function(){

    const section =
        document.getElementById(
            "idt-popular-packages"
        );


    if(!section){
        return;
    }


    /* =====================================================
       CATEGORIES
    ====================================================== */

    const categories = [

        {
            id:"golden-triangle",
            label:"Golden Triangle",
            viewLabel:"View All Golden Triangle Tours",
            viewUrl:"/tour/"
        },

        {
            id:"rajasthan",
            label:"Rajasthan",
            viewLabel:"View All Rajasthan Tours",
            viewUrl:"/tour/"
        },

        {
            id:"varanasi",
            label:"Varanasi",
            viewLabel:"View All Varanasi Tours",
            viewUrl:"/tour/"
        },

        {
            id:"kerala",
            label:"Kerala",
            viewLabel:"View All Kerala Tours",
            viewUrl:"/tour/"
        },

        {
            id:"same-day",
            label:"Same-Day Tours",
            viewLabel:"View All Same-Day Tours",
            viewUrl:"/tour/"
        }

    ];



    /* =====================================================
       PACKAGES
       REAL TITLES + REAL URLS
    ====================================================== */

    const packages = [

        /* =================================================
           GOLDEN TRIANGLE
        ================================================= */

        {
            category:"golden-triangle",
            title:"From Delhi : 2 Days Agra and Jaipur Tour by Car",
            url:"https://indiadaytrip.com/tour/from-delhi-2-days-agra-and-jaipur-tour-by-car",
            image:"https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle Tour 2N3D",
            url:"https://indiadaytrip.com/tour/golden-triangle-tour-2n3d/",
            image:"https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle Tour 3N4D",
            url:"https://indiadaytrip.com/tour/golden-triangle-toui-3n4d",
            image:"https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle Tour 4N5D",
            url:"https://indiadaytrip.com/tour/golden-triangle-tour-4n5d",
            image:"https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=88",
            rating:"4.7",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"6 Days Golden Triangle Tour",
            url:"https://indiadaytrip.com/tour/6-days-golden-triangle-tour/",
            image:"https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle Tour with Ranthambore 4N5D",
            url:"https://indiadaytrip.com/tour/golden-triangle-tour-with-ranthambore-4n5d",
            image:"https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle Tour From Mumbai",
            url:"https://indiadaytrip.com/tour/golden-triangle-tour-from-mumbai",
            image:"https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle Tours with Varanasi 5N6D",
            url:"https://indiadaytrip.com/tour/golden-triangle-tours-with-varanasi-5n6d",
            image:"https://images.unsplash.com/photo-1524230507669-5ff97982bb5e?auto=format&fit=crop&w=1400&q=88",
            rating:"4.7",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle Tour with Udaipur 7N8D",
            url:"https://indiadaytrip.com/tour/golden-triangle-tour-with-udaipur-7n8d",
            image:"https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle with Rajasthan Tour",
            url:"https://indiadaytrip.com/tour/golden-triangle-with-rajasthan-tour/",
            image:"https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle Tour with Pushkar",
            url:"https://indiadaytrip.com/tour/golden-triangle-tour-with-pushkar/",
            image:"https://images.unsplash.com/photo-1518002054494-3a6f94352e9d?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle Tour with Orchha and Khajuraho",
            url:"https://indiadaytrip.com/tour/golden-triangle-tour-with-orchha-and-khajuraho/",
            image:"https://images.unsplash.com/photo-1558799401-1dc3b00e4c5c?auto=format&fit=crop&w=1400&q=88",
            rating:"4.7",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle with Jodhpur and Pushkar by Car",
            url:"https://indiadaytrip.com/tour/golden-triangle-with-jodhpur-and-pushkar-by-car/",
            image:"https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle with Mumbai",
            url:"https://indiadaytrip.com/tour/golden-triangle-tour-with-mumbai",
            image:"https://images.unsplash.com/photo-1546708973-b339540b5162?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle with Goa Tour",
            url:"https://indiadaytrip.com/tour/golden-triangle-with-goa-tour",
            image:"https://images.unsplash.com/photo-1588598198321-9735fd52455b?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"Golden Triangle with Haridwar and Rishikesh",
            url:"https://indiadaytrip.com/tour/golden-triangle-tour-with-haridwar-and-rishikesh",
            image:"https://images.unsplash.com/photo-1586613835347-9f47b4fc6a1d?auto=format&fit=crop&w=1400&q=88",
            rating:"4.7",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"golden-triangle",
            title:"2 Day Jaipur City Overnight Tour",
            url:"https://indiadaytrip.com/tour/2-days-jaipur-overnight-tour-from-delhi/",
            image:"https://images.unsplash.com/photo-1470114716159-e389f8712fda?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },


        /* =================================================
           RAJASTHAN
        ================================================= */

        {
            category:"rajasthan",
            title:"Rajasthan City Tour 3N4D",
            url:"https://indiadaytrip.com/tour/rajasthan-city-tour-3n4d/",
            image:"https://images.unsplash.com/photo-1605640840605-14ac1855827b?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"rajasthan",
            title:"Rajasthan Heritage Tour 4N5D",
            url:"https://indiadaytrip.com/tour/rajasthan-heritage-tour-4n5d/",
            image:"https://images.unsplash.com/photo-1553856622-d1b352e5a211?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"rajasthan",
            title:"Royal Rajasthan Tour 5N6D",
            url:"https://indiadaytrip.com/tour/royal-rajasthan-tour-5n6d",
            image:"https://images.unsplash.com/photo-1514222134-b57cbb8ce073?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"rajasthan",
            title:"Colorful Rajasthan Tour 8N9D",
            url:"https://indiadaytrip.com/tour/colorful-rajasthan-tour-8d9n/",
            image:"https://images.unsplash.com/photo-1533130061792-64b345e4a833?auto=format&fit=crop&w=1400&q=88",
            rating:"4.7",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"rajasthan",
            title:"Classic Rajasthan Tour",
            url:"https://indiadaytrip.com/tour/colorful-rajasthan-tour-8d9n/",
            image:"https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"rajasthan",
            title:"Rajasthan Fort and Places Tour",
            url:"https://indiadaytrip.com/tour/rajasthan-fort-and-places-tour",
            image:"https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"rajasthan",
            title:"Jaisalmer and Desert Tour",
            url:"https://indiadaytrip.com/tour/jaisalmer-and-desert-tour",
            image:"https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },


        /* =================================================
           VARANASI
        ================================================= */

        {
            category:"varanasi",
            title:"Varanasi Day Tour",
            url:"https://indiadaytrip.com/tour/jaisalmer-and-desert-tour",
            image:"https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"varanasi",
            title:"2 Days Varanasi tour",
            url:"https://indiadaytrip.com/tour/2-days-varanasi-tour",
            image:"https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"varanasi",
            title:"Varanasi and Ayodhya Tour",
            url:"https://indiadaytrip.com/tour/varanasi-and-ayodhya-tour",
            image:"https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"varanasi",
            title:"From Delhi : Varanasi and Sarnath Tour",
            url:"https://indiadaytrip.com/tour/varanasi-and-ayodhya-tour",
            image:"https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=88",
            rating:"4.7",
            duration:"Tour Package",
            locations:"India Day Trip"
        },


        /* =================================================
           KERALA
        ================================================= */

        {
            category:"kerala",
            title:"Alappuzha Private Houseboat Cruise",
            url:"https://indiadaytrip.com/tour/alappuzha-private-houseboat-cruise",
            image:"https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"kerala",
            title:"4 Days kerala Tour from Cochin",
            url:"https://indiadaytrip.com/tour/4-days-kerala-tour-from-cochin",
            image:"https://images.unsplash.com/photo-1518002054494-3a6f94352e9d?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"kerala",
            title:"5 Days Kerala Tour From Cochin",
            url:"https://indiadaytrip.com/tour/5-days-kerala-tour-from-cochin",
            image:"https://images.unsplash.com/photo-1558799401-1dc3b00e4c5c?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"kerala",
            title:"One Week of Kerala Tour Packages",
            url:"https://indiadaytrip.com/tour/one-week-of-kerala-tour-packages",
            image:"https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=1400&q=88",
            rating:"4.7",
            duration:"Tour Package",
            locations:"India Day Trip"
        },


        /* =================================================
           SAME-DAY / TAJ MAHAL
        ================================================= */

        {
            category:"same-day",
            title:"From Delhi: Taj Mahal and Agra Overnight Tour",
            url:"https://indiadaytrip.com/tour/from-delhi-taj-mahal-and-agra-overnight-tour/",
            image:"https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"same-day",
            title:"Taj Mahal Tour by Gatimaan Express Train",
            url:"https://indiadaytrip.com/tour/taj-mahal-tour-by-gatimaan-express-train/",
            image:"https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"same-day",
            title:"Taj Mahal Sunrise and Old Delhi Tour",
            url:"https://indiadaytrip.com/tour/taj-mahal-sunrise-and-old-delhi-tour",
            image:"https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"same-day",
            title:"Taj Mahal and Agra Tour by Premium Cars",
            url:"https://indiadaytrip.com/tour/taj-mahal-and-agra-tour-by-premium-cars",
            image:"https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=88",
            rating:"4.7",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"same-day",
            title:"From Delhi: Day Trip To Taj Mahal and Agra Fort by Car",
            url:"https://indiadaytrip.com/tour/from-delhi-day-trip-to-taj-mahal-and-agra-fort-by-car",
            image:"https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"same-day",
            title:"Taj Mahal Sunrise Tour From Delhi",
            url:"http://indiadaytrip.com/tour/taj-mahal-sunrise-tour-from-delhi",
            image:"https://images.unsplash.com/photo-1524230507669-5ff97982bb5e?auto=format&fit=crop&w=1400&q=88",
            rating:"4.9",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"same-day",
            title:"Same Day Taj Mahal Tour by Luxury Car",
            url:"https://indiadaytrip.com/tour/same-day-taj-mahal-tour-by-luxury-car/",
            image:"https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1400&q=88",
            rating:"4.8",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"same-day",
            title:"1 Day Delhi and 1 Day Agra Tour by Car",
            url:"https://indiadaytrip.com/tour/1-day-delhi-and-1-day-agra-tour-by-car/",
            image:"https://images.unsplash.com/photo-1546708973-b339540b5162?auto=format&fit=crop&w=1400&q=88",
            rating:"4.7",
            duration:"Tour Package",
            locations:"India Day Trip"
        },

        {
            category:"same-day",
            title:"Delhi Private Tour by Car",
            url:"https://indiadaytrip.com/tour/delhi-private-day-tour-by-car/",
            image:"https://images.unsplash.com/photo-1588598198321-9735fd52455b?auto=format&fit=crop&w=1400&q=88",
            rating:"5.0",
            duration:"Tour Package",
            locations:"India Day Trip"
        }

    ];



    let activeCategory =
        "golden-triangle";


    let currentIndex =
        0;


    const filters =
        section.querySelector(
            "#idtPackagesFilters"
        );


    const track =
        section.querySelector(
            "#idtPackagesTrack"
        );


    const prev =
        section.querySelector(
            "#idtPackagesPrev"
        );


    const next =
        section.querySelector(
            "#idtPackagesNext"
        );


    const viewAll =
        section.querySelector(
            "#idtPackagesViewAll"
        );



    /* =====================================================
       VISIBLE CARDS
    ====================================================== */

    function visibleCards(){

        if(window.innerWidth <= 640){
            return 1;
        }

        if(window.innerWidth <= 1024){
            return 2;
        }

        return 4;

    }



    /* =====================================================
       CARD TEMPLATE
    ====================================================== */

    function packageCard(pkg){


        return `

            <article class="idt-package-card">


                <div class="idt-package-media">

                    <img
                        src="${pkg.image}"
                        alt="${pkg.title}"
                        loading="lazy"
                        decoding="async"
                        onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1400&q=88';">

                </div>


                <div class="idt-package-body">


                    <div class="idt-rating-row">

                        <span class="idt-stars">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                        </span>

                        <span>
                            ${pkg.rating} (TripAdvisor)
                        </span>

                    </div>



                    <div class="idt-meta">


                        <span class="idt-meta-item">

                            <svg viewBox="0 0 24 24">

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="9">
                                </circle>

                                <path d="M12 7V12L15 14"></path>

                            </svg>

                            ${pkg.duration}

                        </span>



                        <span class="idt-meta-item">

                            <svg viewBox="0 0 24 24">

                                <path
                                    d="
                                        M20 10
                                        C20 15
                                        12 21
                                        12 21
                                        C12 21
                                        4 15
                                        4 10
                                        A8 8 0 0 1
                                        20 10
                                        Z">
                                </path>

                                <circle
                                    cx="12"
                                    cy="10"
                                    r="2.5">
                                </circle>

                            </svg>

                            ${pkg.locations}

                        </span>

                    </div>



                    <h3 class="idt-package-title">

                        ${pkg.title}

                    </h3>



                    <div class="idt-package-actions">


                        <a
                            href="${pkg.url}"
                            target="_blank"
                            rel="noopener"
                            class="idt-enquire-btn">

                            View Tour

                        </a>



                        <a
                            href="https://wa.me/918126052755?text=${encodeURIComponent(
                                "Hello, I am interested in " +
                                pkg.title
                            )}"
                            target="_blank"
                            rel="noopener"
                            class="idt-whatsapp-btn"
                            aria-label="WhatsApp enquiry">


                            <svg viewBox="0 0 24 24">

                                <path
                                    d="M20.52 3.48A11.8 11.8 0 0 0 12.1 0C5.52 0 .17 5.35.17 11.93c0 2.1.55 4.16 1.6 5.97L.07 24l6.25-1.64a11.86 11.86 0 0 0 5.77 1.47h.01c6.58 0 11.93-5.35 11.93-11.93 0-3.19-1.25-6.19-3.51-8.42zM12.1 21.82a9.86 9.86 0 0 1-5.03-1.38l-.36-.21-3.71.97.99-3.61-.23-.37a9.9 9.9 0 1 1 8.34 4.6zm5.44-7.41c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.47-1.75-1.64-2.04-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.03-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.49 0 1.47 1.07 2.89 1.22 3.09.15.2 2.1 3.21 5.09 4.5.71.31 1.27.49 1.7.63.72.23 1.37.2 1.88.12.57-.08 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35z">
                                </path>

                            </svg>

                        </a>

                    </div>


                </div>


            </article>

        `;

    }



    /* =====================================================
       CURRENT DATA
    ====================================================== */

    function currentPackages(){

        return packages.filter(
            function(pkg){

                return (
                    pkg.category ===
                    activeCategory
                );

            }
        );

    }



    /* =====================================================
       RENDER FILTERS
    ====================================================== */

    function renderFilters(){

        filters.innerHTML =
            categories.map(
                function(cat){

                    return `

                        <li>

                            <button
                                type="button"
                                class="idt-filter-btn ${
                                    cat.id ===
                                    activeCategory
                                    ? "active"
                                    : ""
                                }"
                                data-category="${cat.id}">

                                ${cat.label}

                            </button>

                        </li>

                    `;

                }
            ).join("");

    }



    /* =====================================================
       RENDER CARDS
    ====================================================== */

    function renderCards(){

        const data =
            currentPackages();


        track.innerHTML =
            data.map(
                packageCard
            ).join("");


        currentIndex = 0;


        updateViewAll();

        requestAnimationFrame(
            updateSlider
        );

    }



    /* =====================================================
       VIEW ALL
    ====================================================== */

    function updateViewAll(){

        const cat =
            categories.find(
                function(item){

                    return (
                        item.id ===
                        activeCategory
                    );

                }
            );


        if(!cat){
            return;
        }


        viewAll.textContent =
            cat.viewLabel;


        viewAll.href =
            cat.viewUrl;

    }



    /* =====================================================
       MAX INDEX
    ====================================================== */

    function maxIndex(){

        return Math.max(
            0,
            currentPackages().length -
            visibleCards()
        );

    }



    /* =====================================================
       SLIDER POSITION
    ====================================================== */

    function updateSlider(){

        const card =
            track.querySelector(
                ".idt-package-card"
            );


        if(!card){
            return;
        }


        const styles =
            getComputedStyle(track);


        const gap =
            parseFloat(
                styles.gap
            ) || 0;


        const width =
            card.getBoundingClientRect()
            .width;


        const offset =
            currentIndex *
            (
                width +
                gap
            );


        track.style.transform =
            "translate3d(-" +
            offset +
            "px,0,0)";


        prev.disabled =
            currentIndex <= 0;


        next.disabled =
            currentIndex >=
            maxIndex();

    }



    /* =====================================================
       CHANGE CATEGORY
    ====================================================== */

    filters.addEventListener(
        "click",
        function(event){

            const button =
                event.target.closest(
                    ".idt-filter-btn"
                );


            if(!button){
                return;
            }


            const category =
                button.dataset.category;


            if(
                category ===
                activeCategory
            ){
                return;
            }


            activeCategory =
                category;


            renderFilters();

            renderCards();

        }
    );



    /* =====================================================
       PREVIOUS
    ====================================================== */

    prev.addEventListener(
        "click",
        function(){

            if(currentIndex > 0){

                currentIndex--;

                updateSlider();

            }

        }
    );



    /* =====================================================
       NEXT
    ====================================================== */

    next.addEventListener(
        "click",
        function(){

            if(
                currentIndex <
                maxIndex()
            ){

                currentIndex++;

                updateSlider();

            }

        }
    );



    /* =====================================================
       RESIZE
    ====================================================== */

    let resizeTimer;


    window.addEventListener(
        "resize",
        function(){

            clearTimeout(
                resizeTimer
            );


            resizeTimer =
                setTimeout(
                    function(){

                        currentIndex =
                            Math.min(
                                currentIndex,
                                maxIndex()
                            );


                        updateSlider();

                    },
                    120
                );

        }
    );



    /* =====================================================
       INIT
    ====================================================== */

    renderFilters();

    renderCards();

})();
</script>