<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP — ABOUT US
   REAL LOCAL CONNECTIONS
   FINAL BRAND VERSION
========================================================= */

#idt-local-connections,
#idt-local-connections *{
    box-sizing:border-box;
}

#idt-local-connections{
    --blue:#123B72;
    --blue-dark:#0D2C57;
    --blue-light:#3D6FA5;

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

    padding:70px 24px 74px;

    background:
        radial-gradient(
            circle at 92% 14%,
            rgba(18,59,114,.055),
            transparent 25%
        ),
        radial-gradient(
            circle at 5% 88%,
            rgba(242,162,58,.06),
            transparent 25%
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

#idt-local-connections::before{
    content:"";

    position:absolute;

    width:420px;
    height:420px;

    right:-210px;
    top:-220px;

    border-radius:50%;

    border:
        1px solid
        rgba(18,59,114,.09);

    pointer-events:none;
}


#idt-local-connections::after{
    content:"";

    position:absolute;

    left:24px;
    bottom:38px;

    width:115px;
    height:115px;

    opacity:.17;

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

#idt-local-connections .idt-local-container{
    position:relative;

    z-index:2;

    width:1240px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   MAIN GRID
========================================================= */

#idt-local-connections .idt-local-grid{
    display:grid;

    grid-template-columns:
        minmax(445px,.95fr)
        minmax(0,1.05fr);

    gap:70px;

    align-items:center;
}


/* =========================================================
   IMAGE AREA
========================================================= */

#idt-local-connections .idt-local-visual{
    position:relative;

    width:100%;

    min-height:570px;
}


/* =========================================================
   MAIN IMAGE
========================================================= */

#idt-local-connections .idt-local-main-image{
    position:absolute;

    top:0;
    left:0;

    width:470px;
    max-width:91%;

    height:510px;

    overflow:hidden;

    border-radius:
        8px 30px 30px 30px;

    background:#ECE5D9;

    box-shadow:
        0 24px 50px
        rgba(40,34,25,.14);
}


#idt-local-connections .idt-local-main-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .65s ease;
}


#idt-local-connections .idt-local-main-image:hover img{
    transform:scale(1.04);
}


/* WARM IMAGE OVERLAY */

#idt-local-connections .idt-local-main-image::after{
    content:"";

    position:absolute;

    inset:0;

    background:
        linear-gradient(
            180deg,
            transparent 60%,
            rgba(20,17,13,.20) 100%
        );

    pointer-events:none;
}


/* =========================================================
   IMAGE FRAME
========================================================= */

#idt-local-connections .idt-local-frame{
    position:absolute;

    top:26px;
    left:27px;

    width:458px;
    max-width:89%;

    height:498px;

    border:
        1px solid
        rgba(242,162,58,.48);

    border-radius:
        8px 30px 30px 30px;

    transform:rotate(-2deg);

    pointer-events:none;
}


/* =========================================================
   SMALL IMAGE
========================================================= */

#idt-local-connections .idt-local-small-image{
    position:absolute;

    right:0;
    bottom:0;

    width:215px;
    height:235px;

    padding:7px;

    overflow:hidden;

    background:#FFFFFF;

    border:
        1px solid
        #ECE2D4;

    border-radius:18px;

    box-shadow:
        0 18px 38px
        rgba(42,34,23,.15);
}


#idt-local-connections .idt-local-small-image-inner{
    width:100%;
    height:100%;

    overflow:hidden;

    border-radius:12px;
}


#idt-local-connections .idt-local-small-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .65s ease;
}


#idt-local-connections .idt-local-small-image:hover img{
    transform:scale(1.05);
}


/* =========================================================
   DECORATIVE CORNER
========================================================= */

#idt-local-connections .idt-local-visual-line{
    position:absolute;

    right:46px;
    top:40px;

    width:72px;
    height:72px;

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

#idt-local-connections .idt-local-content{
    position:relative;
}


/* =========================================================
   HEADING ACCENT LINE
========================================================= */

#idt-local-connections .idt-local-heading-line{
    display:flex;

    align-items:center;

    gap:8px;

    margin-bottom:17px;
}


#idt-local-connections .idt-local-heading-line span:first-child{
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


#idt-local-connections .idt-local-heading-line span:last-child{
    width:6px;
    height:6px;

    border-radius:50%;

    background:var(--blue);
}


/* =========================================================
   HEADING
========================================================= */

#idt-local-connections .idt-local-heading{
    max-width:650px;

    margin:0 0 23px;

    color:var(--blue-dark);

    font-family:"Playfair Display",Georgia,serif;

    font-size:41px;
    line-height:1.18;

    font-weight:600;

    letter-spacing:-.6px;
}


/* =========================================================
   COPY
========================================================= */

#idt-local-connections .idt-local-copy{
    position:relative;

    display:flex;

    flex-direction:column;

    gap:16px;

    padding-left:22px;
}


#idt-local-connections .idt-local-copy::before{
    content:"";

    position:absolute;

    left:0;
    top:5px;

    width:3px;

    height:calc(100% - 10px);

    border-radius:10px;

    background:
        linear-gradient(
            180deg,
            var(--blue),
            rgba(18,59,114,.08)
        );
}


#idt-local-connections .idt-local-copy p{
    max-width:690px;

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

    #idt-local-connections{
        padding:
            62px 22px 66px;
    }


    #idt-local-connections .idt-local-container{
        width:1060px;
    }


    #idt-local-connections .idt-local-grid{
        grid-template-columns:
            405px
            minmax(0,1fr);

        gap:50px;
    }


    #idt-local-connections .idt-local-visual{
        min-height:500px;
    }


    #idt-local-connections .idt-local-main-image{
        width:390px;
        height:445px;
    }


    #idt-local-connections .idt-local-frame{
        width:380px;
        height:435px;
    }


    #idt-local-connections .idt-local-small-image{
        width:180px;
        height:200px;
    }


    #idt-local-connections .idt-local-heading{
        font-size:37px;
    }


    #idt-local-connections .idt-local-copy p{
        font-size:13.8px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px)
and (min-width:768px){

    #idt-local-connections{
        padding:
            52px 20px 56px;
    }


    #idt-local-connections .idt-local-container{
        width:100%;
        max-width:900px;
    }


    #idt-local-connections .idt-local-grid{
        grid-template-columns:
            minmax(305px,.88fr)
            minmax(0,1.12fr);

        gap:34px;
    }


    #idt-local-connections .idt-local-visual{
        min-height:420px;
    }


    #idt-local-connections .idt-local-main-image{
        width:315px;
        max-width:91%;

        height:365px;

        border-radius:18px;
    }


    #idt-local-connections .idt-local-frame{
        top:18px;
        left:14px;

        width:305px;
        max-width:89%;

        height:355px;

        border-radius:18px;
    }


    #idt-local-connections .idt-local-small-image{
        width:142px;
        height:160px;

        padding:5px;

        border-radius:14px;
    }


    #idt-local-connections .idt-local-visual-line{
        right:26px;
        top:25px;

        width:48px;
        height:48px;
    }


    #idt-local-connections .idt-local-heading-line{
        margin-bottom:13px;
    }


    #idt-local-connections .idt-local-heading{
        margin-bottom:18px;

        font-size:30px;
        line-height:1.22;
    }


    #idt-local-connections .idt-local-copy{
        gap:12px;

        padding-left:17px;
    }


    #idt-local-connections .idt-local-copy p{
        font-size:12px;
        line-height:1.68;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-local-connections{
        padding:
            46px 14px 50px;
    }


    #idt-local-connections::after{
        opacity:.10;
    }


    #idt-local-connections .idt-local-grid{
        display:flex;

        flex-direction:column;

        gap:36px;
    }


    /* IMAGE */

    #idt-local-connections .idt-local-visual{
        width:100%;

        max-width:440px;

        min-height:430px;

        margin:0 auto;
    }


    #idt-local-connections .idt-local-main-image{
        top:0;
        left:50%;

        width:355px;
        max-width:88%;

        height:360px;

        transform:translateX(-50%);

        border-radius:20px;
    }


    #idt-local-connections .idt-local-main-image:hover img{
        transform:none;
    }


    #idt-local-connections .idt-local-frame{
        top:16px;
        left:50%;

        width:345px;
        max-width:85%;

        height:350px;

        transform:
            translateX(-50%)
            rotate(-1.3deg);

        border-radius:20px;
    }


    #idt-local-connections .idt-local-small-image{
        right:50%;
        bottom:0;

        width:145px;
        height:155px;

        transform:
            translateX(108%);

        border-radius:14px;
    }


    #idt-local-connections .idt-local-small-image:hover img{
        transform:none;
    }


    #idt-local-connections .idt-local-visual-line{
        display:none;
    }


    /* CONTENT */

    #idt-local-connections .idt-local-content{
        width:100%;

        text-align:center;
    }


    #idt-local-connections .idt-local-heading-line{
        justify-content:center;
    }


    #idt-local-connections .idt-local-heading{
        max-width:580px;

        margin:
            0 auto 19px;

        font-size:28px;
        line-height:1.24;

        text-align:center;
    }


    #idt-local-connections .idt-local-copy{
        max-width:610px;

        margin:0 auto;

        padding-left:0;

        gap:14px;
    }


    #idt-local-connections .idt-local-copy::before{
        display:none;
    }


    #idt-local-connections .idt-local-copy p{
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

    #idt-local-connections{
        padding:
            42px 11px 46px;
    }


    #idt-local-connections .idt-local-visual{
        max-width:370px;

        min-height:380px;
    }


    #idt-local-connections .idt-local-main-image{
        width:305px;
        height:310px;
    }


    #idt-local-connections .idt-local-frame{
        width:295px;
        height:300px;
    }


    #idt-local-connections .idt-local-small-image{
        width:125px;
        height:135px;
    }


    #idt-local-connections .idt-local-heading{
        font-size:25px;
    }


    #idt-local-connections .idt-local-copy p{
        font-size:13px;
        line-height:1.68;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-local-connections{
        padding-left:9px;
        padding-right:9px;
    }


    #idt-local-connections .idt-local-visual{
        min-height:340px;
    }


    #idt-local-connections .idt-local-main-image{
        width:270px;
        height:275px;
    }


    #idt-local-connections .idt-local-frame{
        width:260px;
        height:265px;
    }


    #idt-local-connections .idt-local-small-image{
        width:110px;
        height:120px;
    }


    #idt-local-connections .idt-local-heading{
        font-size:23px;
    }


    #idt-local-connections .idt-local-copy p{
        font-size:12.5px;
    }

}

</style>


<section id="idt-local-connections">

    <div class="idt-local-container">

        <div class="idt-local-grid">


            <!-- LEFT VISUAL -->

            <div class="idt-local-visual">


                <div class="idt-local-frame"></div>


                <div class="idt-local-main-image">

                    <img
                        src="https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1400&q=90"
                        alt="Jaipur Local Travel Experience">

                </div>


                <div class="idt-local-small-image">

                    <div class="idt-local-small-image-inner">

                        <img
                            src="https://images.unsplash.com/photo-1561361513-2d000a50f0dc?auto=format&fit=crop&w=900&q=90"
                            alt="Varanasi Local Travel Experience">

                    </div>

                </div>


                <div
                    class="idt-local-visual-line"
                    aria-hidden="true">
                </div>


            </div>



            <!-- RIGHT CONTENT -->

            <div class="idt-local-content">


                <div
                    class="idt-local-heading-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>


                <h2 class="idt-local-heading">
                    Real Local Connections, Not Just Local Stops
                </h2>


                <div class="idt-local-copy">


                    <p>
                        A monument is just a building until someone helps you understand what it meant to the people who built it, lived around it, or still gather there today. That’s the difference between a rushed photo stop and an experience you’ll actually remember.
                    </p>


                    <p>
                        In Jaipur, our guides walk you through the Pink City’s forts, palaces, and bustling bazaars with real historical context, the architectural quirks, the stories behind centuries-old havelis, the details a guidebook leaves out. In Varanasi, our local guides help you understand the ghats, the temples, and the evening aarti ceremony with the respect and context it deserves, so the Ganges becomes more than a photo in your camera roll.
                    </p>


                    <p>
                        Every guide affiliated with India Day Trip is local to the region they cover, licensed, and chosen specifically for how well they connect with international travelers who are seeing India for the first time.
                    </p>


                </div>


            </div>


        </div>

    </div>

</section>