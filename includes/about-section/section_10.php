<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP — FINAL CTA
   BRAND COLOR VERSION
   ONLY COLORS UPDATED
========================================================= */

#idt-trip-cta,
#idt-trip-cta *{
    box-sizing:border-box;
}

#idt-trip-cta{
    --navy:#123B72;
    --deep:#0D2C57;
    --deep2:#123B72;

    --orange:#F2A23A;
    --orange-light:#FFC167;

    --white:#FFFFFF;
    --text:#EEF3F8;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:58px 24px 64px;

    background:
        linear-gradient(
            135deg,
            #FBF8F2 0%,
            #F6F1E7 45%,
            #FCFAF6 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-trip-cta .idt-trip-container{
    width:1240px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   MAIN WRAPPER
========================================================= */

#idt-trip-cta .idt-trip-wrap{
    position:relative;

    display:grid;

    grid-template-columns:
        minmax(0,1.04fr)
        minmax(430px,.96fr);

    min-height:470px;

    overflow:hidden;

    border-radius:24px;

    background:
        linear-gradient(
            135deg,
            #0D2C57 0%,
            #123B72 55%,
            #1A4C83 100%
        );

    box-shadow:
        0 18px 48px
        rgba(18,59,114,.14);
}


/* =========================================================
   LEFT IMAGE
========================================================= */

#idt-trip-cta .idt-trip-image{
    position:relative;

    min-height:470px;

    overflow:hidden;
}

#idt-trip-cta .idt-trip-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .75s ease;
}

#idt-trip-cta .idt-trip-wrap:hover
.idt-trip-image img{
    transform:scale(1.025);
}


/* IMAGE OVERLAY */

#idt-trip-cta .idt-trip-image::after{
    content:"";

    position:absolute;
    inset:0;

    background:
        linear-gradient(
            90deg,
            rgba(13,44,87,.02) 0%,
            rgba(18,59,114,.10) 48%,
            rgba(13,44,87,.72) 100%
        );

    pointer-events:none;
}


/* =========================================================
   RIGHT CONTENT
========================================================= */

#idt-trip-cta .idt-trip-content{
    position:relative;

    display:flex;

    flex-direction:column;

    justify-content:center;

    padding:
        58px 54px 58px 50px;

    background:
        linear-gradient(
            145deg,
            #0D2C57 0%,
            #123B72 46%,
            #1A4C83 100%
        );
}


/* SOFT GRADIENT GLOW */

#idt-trip-cta .idt-trip-content::before{
    content:"";

    position:absolute;

    top:-80px;
    right:-90px;

    width:280px;
    height:280px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,193,103,.20) 0%,
            rgba(242,162,58,.09) 38%,
            transparent 72%
        );

    pointer-events:none;
}


/* BOTTOM ACCENT */

#idt-trip-cta .idt-trip-content::after{
    content:"";

    position:absolute;

    left:50px;
    bottom:35px;

    width:78px;
    height:3px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            #FFC167 0%,
            #F2A23A 55%,
            rgba(242,162,58,.08) 100%
        );
}


/* =========================================================
   TOP LINE
========================================================= */

#idt-trip-cta .idt-trip-line{
    position:relative;
    z-index:2;

    display:flex;

    align-items:center;

    gap:8px;

    margin-bottom:18px;
}

#idt-trip-cta .idt-trip-line span:first-child{
    width:48px;
    height:2px;

    background:
        linear-gradient(
            90deg,
            #FFC167,
            #F2A23A
        );
}

#idt-trip-cta .idt-trip-line span:last-child{
    width:6px;
    height:6px;

    background:#FFC167;

    transform:rotate(45deg);
}


/* =========================================================
   HEADING
========================================================= */

#idt-trip-cta .idt-trip-heading{
    position:relative;
    z-index:2;

    max-width:520px;

    margin:0 0 24px;

    color:#FFFFFF;

    font-size:43px;
    line-height:1.18;
    font-weight:700;

    letter-spacing:-1px;
}


/* =========================================================
   TEXT
========================================================= */

#idt-trip-cta .idt-trip-text{
    position:relative;
    z-index:2;

    max-width:570px;

    margin:0;

    color:#EEF3F8;

    font-size:15.5px;
    line-height:1.82;
    font-weight:400;

    text-align:justify;
    text-justify:inter-word;
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-trip-cta{
        padding:
            54px 22px 58px;
    }

    #idt-trip-cta .idt-trip-container{
        width:1060px;
    }

    #idt-trip-cta .idt-trip-wrap{
        grid-template-columns:
            minmax(0,1fr)
            420px;

        min-height:430px;
    }

    #idt-trip-cta .idt-trip-image{
        min-height:430px;
    }

    #idt-trip-cta .idt-trip-content{
        padding:
            48px 42px;
    }

    #idt-trip-cta .idt-trip-heading{
        font-size:38px;
    }

    #idt-trip-cta .idt-trip-text{
        font-size:15px;
    }

    #idt-trip-cta .idt-trip-content::after{
        left:42px;
        bottom:28px;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px)
and (min-width:768px){

    #idt-trip-cta{
        padding:
            48px 22px 52px;
    }

    #idt-trip-cta .idt-trip-container{
        width:100%;
        max-width:900px;
    }

    #idt-trip-cta .idt-trip-wrap{
        grid-template-columns:
            minmax(0,1fr)
            minmax(320px,.92fr);

        min-height:380px;

        border-radius:20px;
    }

    #idt-trip-cta .idt-trip-image{
        min-height:380px;
    }

    #idt-trip-cta .idt-trip-content{
        padding:
            36px 30px;
    }

    #idt-trip-cta .idt-trip-line{
        margin-bottom:14px;
    }

    #idt-trip-cta .idt-trip-heading{
        margin-bottom:18px;

        font-size:31px;
        line-height:1.22;
    }

    #idt-trip-cta .idt-trip-text{
        font-size:13.5px;
        line-height:1.72;
    }

    #idt-trip-cta .idt-trip-content::after{
        left:30px;
        bottom:24px;

        width:55px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-trip-cta{
        padding:
            44px 14px 48px;

        background:
            linear-gradient(
                135deg,
                #FBF8F2 0%,
                #F4EEE3 100%
            );
    }

    #idt-trip-cta .idt-trip-wrap{
        display:flex;

        flex-direction:column;

        min-height:auto;

        border-radius:20px;
    }

    #idt-trip-cta .idt-trip-image{
        width:100%;
        min-height:300px;
        height:300px;
    }

    #idt-trip-cta .idt-trip-image::after{
        background:
            linear-gradient(
                180deg,
                rgba(13,44,87,0) 42%,
                rgba(18,59,114,.12) 68%,
                rgba(13,44,87,.78) 100%
            );
    }

    #idt-trip-cta .idt-trip-wrap:hover
    .idt-trip-image img{
        transform:none;
    }

    #idt-trip-cta .idt-trip-content{
        padding:
            34px 22px 38px;

        text-align:center;

        background:
            linear-gradient(
                145deg,
                #0D2C57 0%,
                #123B72 48%,
                #1A4C83 100%
            );
    }

    #idt-trip-cta .idt-trip-line{
        justify-content:center;

        margin-bottom:16px;
    }

    #idt-trip-cta .idt-trip-heading{
        max-width:560px;

        margin:
            0 auto 20px;

        font-size:29px;
        line-height:1.24;

        text-align:center;
    }

    #idt-trip-cta .idt-trip-text{
        max-width:620px;

        margin:0 auto;

        font-size:14.5px;
        line-height:1.72;

        text-align:center;
    }

    #idt-trip-cta .idt-trip-content::after{
        left:50%;
        bottom:20px;

        width:58px;

        transform:translateX(-50%);
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-trip-cta{
        padding:
            40px 10px 44px;
    }

    #idt-trip-cta .idt-trip-wrap{
        border-radius:17px;
    }

    #idt-trip-cta .idt-trip-image{
        min-height:250px;
        height:250px;
    }

    #idt-trip-cta .idt-trip-content{
        padding:
            30px 17px 35px;
    }

    #idt-trip-cta .idt-trip-heading{
        font-size:26px;
    }

    #idt-trip-cta .idt-trip-text{
        font-size:14px;
        line-height:1.68;
    }
}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-trip-cta{
        padding-left:8px;
        padding-right:8px;
    }

    #idt-trip-cta .idt-trip-image{
        min-height:225px;
        height:225px;
    }

    #idt-trip-cta .idt-trip-content{
        padding:
            27px 14px 33px;
    }

    #idt-trip-cta .idt-trip-heading{
        font-size:24px;
    }

    #idt-trip-cta .idt-trip-text{
        font-size:13.5px;
    }
}
</style>


<section id="idt-trip-cta">

    <div class="idt-trip-container">

        <div class="idt-trip-wrap">


            <!-- LEFT IMAGE -->

            <div class="idt-trip-image">

                <img
                    src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1600&q=88"
                    alt="Plan Your India Trip With Us">

            </div>



            <!-- RIGHT CONTENT -->

            <div class="idt-trip-content">

                <div
                    class="idt-trip-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>


                <h2 class="idt-trip-heading">
                    Plan Your India Trip With Us
                </h2>


                <p class="idt-trip-text">
                    If you’re searching for a trusted India tour operator who plans with genuine care instead of copy-pasted itineraries, reach out to Anshul Gupta and the India Day Trip team today. We’ll help you build a journey that feels less like a tour and more like your own personal story of India, one worth telling long after you’re back home.
                </p>

            </div>


        </div>

    </div>

</section>