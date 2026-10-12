<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP — ABOUT US
   PHOTOGRAPHY-FRIENDLY, COMFORT-FOCUSED TRAVEL
   FINAL PREMIUM BRAND VERSION
========================================================= */

#idt-photo-comfort,
#idt-photo-comfort *{
    box-sizing:border-box;
}

#idt-photo-comfort{
    --blue:#123B72;
    --blue-dark:#0D2C57;
    --blue-light:#3A6EA5;

    --orange:#F2A23A;
    --orange-light:#FFC167;

    --heading:#25231F;
    --text:#655F56;

    --cream:#F7F3EA;
    --cream-light:#FCFAF6;

    --border:#E7DED0;
    --white:#FFFFFF;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:68px 24px 72px;

    background:
        radial-gradient(
            circle at 94% 12%,
            rgba(18,59,114,.055),
            transparent 25%
        ),
        radial-gradient(
            circle at 4% 88%,
            rgba(242,162,58,.055),
            transparent 24%
        ),
        linear-gradient(
            180deg,
            #FCFAF6 0%,
            #F6F2E9 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#idt-photo-comfort::before{
    content:"";

    position:absolute;

    width:410px;
    height:410px;

    top:-215px;
    right:-180px;

    border-radius:50%;

    border:
        1px solid
        rgba(18,59,114,.09);

    pointer-events:none;
}


#idt-photo-comfort::after{
    content:"";

    position:absolute;

    left:26px;
    bottom:34px;

    width:105px;
    height:105px;

    opacity:.16;

    background-image:
        radial-gradient(
            circle,
            rgba(18,59,114,.38) 1.2px,
            transparent 1.3px
        );

    background-size:15px 15px;

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-photo-comfort .idt-photo-container{
    position:relative;
    z-index:2;

    width:1240px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   MAIN GRID
========================================================= */

#idt-photo-comfort .idt-photo-grid{
    display:grid;

    grid-template-columns:
        minmax(455px,.96fr)
        minmax(0,1.04fr);

    gap:72px;

    align-items:center;
}


/* =========================================================
   LEFT VISUAL
========================================================= */

#idt-photo-comfort .idt-photo-visual{
    position:relative;

    width:100%;

    min-height:565px;
}


/* =========================================================
   MAIN IMAGE
========================================================= */

#idt-photo-comfort .idt-photo-main{
    position:absolute;

    top:0;
    left:0;

    width:480px;
    max-width:92%;

    height:510px;

    overflow:hidden;

    border-radius:
        8px 30px 8px 30px;

    background:#ECE5D9;

    box-shadow:
        0 24px 50px
        rgba(40,34,25,.14);
}


#idt-photo-comfort .idt-photo-main img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .65s ease;
}


#idt-photo-comfort .idt-photo-main:hover img{
    transform:scale(1.04);
}


#idt-photo-comfort .idt-photo-main::after{
    content:"";

    position:absolute;

    inset:0;

    background:
        linear-gradient(
            180deg,
            transparent 62%,
            rgba(20,17,13,.18) 100%
        );

    pointer-events:none;
}


/* =========================================================
   OFFSET FRAME
========================================================= */

#idt-photo-comfort .idt-photo-frame{
    position:absolute;

    top:25px;
    left:27px;

    width:468px;
    max-width:90%;

    height:498px;

    border:
        1px solid
        rgba(242,162,58,.48);

    border-radius:
        8px 30px 8px 30px;

    transform:rotate(-1.5deg);

    pointer-events:none;
}


/* =========================================================
   SMALL IMAGE
========================================================= */

#idt-photo-comfort .idt-photo-small{
    position:absolute;

    right:0;
    bottom:0;

    width:205px;
    height:225px;

    padding:7px;

    background:#FFFFFF;

    border:
        1px solid
        #ECE2D4;

    border-radius:18px;

    box-shadow:
        0 18px 38px
        rgba(42,34,23,.15);
}


#idt-photo-comfort .idt-photo-small-inner{
    width:100%;
    height:100%;

    overflow:hidden;

    border-radius:12px;
}


#idt-photo-comfort .idt-photo-small img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .55s ease;
}


#idt-photo-comfort .idt-photo-small:hover img{
    transform:scale(1.05);
}


/* =========================================================
   DECORATIVE CORNER
========================================================= */

#idt-photo-comfort .idt-photo-corner{
    position:absolute;

    top:28px;
    right:28px;

    width:62px;
    height:62px;

    border-top:
        2px solid
        rgba(18,59,114,.48);

    border-right:
        2px solid
        rgba(242,162,58,.48);

    pointer-events:none;
}


/* =========================================================
   CONTENT
========================================================= */

#idt-photo-comfort .idt-photo-content{
    position:relative;
}


/* =========================================================
   HEADING ACCENT
========================================================= */

#idt-photo-comfort .idt-photo-line{
    display:flex;

    align-items:center;

    gap:8px;

    margin-bottom:17px;
}


#idt-photo-comfort .idt-photo-line span:first-child{
    width:48px;
    height:2px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--blue),
            var(--orange)
        );
}


#idt-photo-comfort .idt-photo-line span:last-child{
    width:6px;
    height:6px;

    border-radius:50%;

    background:var(--blue);
}


/* =========================================================
   HEADING
========================================================= */

#idt-photo-comfort .idt-photo-heading{
    max-width:650px;

    margin:0 0 24px;

    color:var(--blue-dark);

    font-family:"Playfair Display",Georgia,serif;

    font-size:41px;
    line-height:1.18;

    font-weight:600;

    letter-spacing:-.6px;
}


/* =========================================================
   TEXT
========================================================= */

#idt-photo-comfort .idt-photo-copy{
    display:flex;

    flex-direction:column;

    gap:17px;
}


#idt-photo-comfort .idt-photo-copy p{
    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.82;

    font-weight:400;

    text-align:justify;
    text-justify:inter-word;
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-photo-comfort{
        padding:
            60px 22px 64px;
    }

    #idt-photo-comfort .idt-photo-container{
        width:1060px;
    }

    #idt-photo-comfort .idt-photo-grid{
        grid-template-columns:
            410px
            minmax(0,1fr);

        gap:50px;
    }

    #idt-photo-comfort .idt-photo-visual{
        min-height:500px;
    }

    #idt-photo-comfort .idt-photo-main{
        width:395px;
        height:445px;
    }

    #idt-photo-comfort .idt-photo-frame{
        width:385px;
        height:435px;
    }

    #idt-photo-comfort .idt-photo-small{
        width:180px;
        height:200px;
    }

    #idt-photo-comfort .idt-photo-heading{
        font-size:37px;
    }

    #idt-photo-comfort .idt-photo-copy p{
        font-size:13.8px;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px) and (min-width:768px){

    #idt-photo-comfort{
        padding:
            50px 20px 54px;
    }

    #idt-photo-comfort .idt-photo-container{
        width:100%;
        max-width:900px;
    }

    #idt-photo-comfort .idt-photo-grid{
        grid-template-columns:
            minmax(305px,.88fr)
            minmax(0,1.12fr);

        gap:34px;
    }

    #idt-photo-comfort .idt-photo-visual{
        min-height:420px;
    }

    #idt-photo-comfort .idt-photo-main{
        width:315px;
        max-width:91%;

        height:365px;

        border-radius:18px;
    }

    #idt-photo-comfort .idt-photo-frame{
        top:18px;
        left:14px;

        width:305px;
        max-width:89%;

        height:355px;

        border-radius:18px;
    }

    #idt-photo-comfort .idt-photo-small{
        width:142px;
        height:160px;

        padding:5px;

        border-radius:14px;
    }

    #idt-photo-comfort .idt-photo-corner{
        top:23px;
        right:22px;

        width:46px;
        height:46px;
    }

    #idt-photo-comfort .idt-photo-line{
        margin-bottom:13px;
    }

    #idt-photo-comfort .idt-photo-heading{
        margin-bottom:18px;

        font-size:30px;
        line-height:1.22;
    }

    #idt-photo-comfort .idt-photo-copy{
        gap:13px;
    }

    #idt-photo-comfort .idt-photo-copy p{
        font-size:12px;
        line-height:1.68;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-photo-comfort{
        padding:
            46px 14px 50px;
    }

    #idt-photo-comfort .idt-photo-grid{
        display:flex;

        flex-direction:column;

        gap:36px;
    }


    #idt-photo-comfort .idt-photo-visual{
        width:100%;
        max-width:440px;

        min-height:430px;

        margin:0 auto;
    }


    #idt-photo-comfort .idt-photo-main{
        top:0;
        left:50%;

        width:355px;
        max-width:88%;

        height:360px;

        transform:translateX(-50%);

        border-radius:20px;
    }


    #idt-photo-comfort .idt-photo-main:hover img{
        transform:none;
    }


    #idt-photo-comfort .idt-photo-frame{
        top:16px;
        left:50%;

        width:345px;
        max-width:85%;

        height:350px;

        transform:
            translateX(-50%)
            rotate(-1deg);

        border-radius:20px;
    }


    #idt-photo-comfort .idt-photo-small{
        right:50%;
        bottom:0;

        width:145px;
        height:155px;

        transform:translateX(108%);

        border-radius:14px;
    }


    #idt-photo-comfort .idt-photo-small:hover img{
        transform:none;
    }


    #idt-photo-comfort .idt-photo-corner{
        display:none;
    }


    #idt-photo-comfort .idt-photo-content{
        width:100%;

        text-align:center;
    }


    #idt-photo-comfort .idt-photo-line{
        justify-content:center;
    }


    #idt-photo-comfort .idt-photo-heading{
        max-width:600px;

        margin:
            0 auto 19px;

        font-size:28px;
        line-height:1.24;

        text-align:center;
    }


    #idt-photo-comfort .idt-photo-copy{
        max-width:620px;

        margin:0 auto;

        gap:14px;
    }


    #idt-photo-comfort .idt-photo-copy p{
        margin:0 auto;

        font-size:13.5px;
        line-height:1.72;

        text-align:center;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-photo-comfort{
        padding:
            42px 11px 46px;
    }

    #idt-photo-comfort .idt-photo-visual{
        max-width:370px;

        min-height:380px;
    }

    #idt-photo-comfort .idt-photo-main{
        width:305px;
        height:310px;
    }

    #idt-photo-comfort .idt-photo-frame{
        width:295px;
        height:300px;
    }

    #idt-photo-comfort .idt-photo-small{
        width:125px;
        height:135px;
    }

    #idt-photo-comfort .idt-photo-heading{
        font-size:25px;
    }

    #idt-photo-comfort .idt-photo-copy p{
        font-size:13px;
        line-height:1.68;
    }
}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-photo-comfort{
        padding-left:9px;
        padding-right:9px;
    }

    #idt-photo-comfort .idt-photo-visual{
        min-height:340px;
    }

    #idt-photo-comfort .idt-photo-main{
        width:270px;
        height:275px;
    }

    #idt-photo-comfort .idt-photo-frame{
        width:260px;
        height:265px;
    }

    #idt-photo-comfort .idt-photo-small{
        width:110px;
        height:120px;
    }

    #idt-photo-comfort .idt-photo-heading{
        font-size:23px;
    }

    #idt-photo-comfort .idt-photo-copy p{
        font-size:12.5px;
    }
}
</style>


<section id="idt-photo-comfort">

    <div class="idt-photo-container">

        <div class="idt-photo-grid">


            <!-- LEFT VISUAL -->

            <div class="idt-photo-visual">


                <div class="idt-photo-frame"></div>


                <div class="idt-photo-main">

                    <img
                        src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=90"
                        alt="Photography Friendly India Travel">

                </div>


                <div class="idt-photo-small">

                    <div class="idt-photo-small-inner">

                        <img
                            src="https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=900&q=90"
                            alt="Comfort Focused India Travel">

                    </div>

                </div>


                <div
                    class="idt-photo-corner"
                    aria-hidden="true">
                </div>


            </div>



            <!-- RIGHT CONTENT -->

            <div class="idt-photo-content">


                <div
                    class="idt-photo-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>


                <h2 class="idt-photo-heading">
                    Photography-Friendly, Comfort-Focused Travel
                </h2>


                <div class="idt-photo-copy">


                    <p>
                        Many of our guests travel specifically to capture India through a lens; its architecture, its people, its landscapes, its color. We build extra time and flexible stops into every itinerary for exactly that, because rushing past a perfect frame defeats the purpose of being there in the first place.
                    </p>


                    <p>
                        At the same time, comfort never takes a back seat to authenticity. We offer 3-star, 4-star, and 5-star hotel options depending on your budget, paired with reliable private transportation, so you can chase the raw, real side of India without sacrificing a good night’s sleep.
                    </p>


                </div>


            </div>


        </div>

    </div>

</section>