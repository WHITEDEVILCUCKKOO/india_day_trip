<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP — ABOUT US
   BEYOND THE TOURIST CHECKLIST
   FINAL PREMIUM BRAND VERSION
========================================================= */

#idt-beyond-checklist,
#idt-beyond-checklist *{
    box-sizing:border-box;
}

#idt-beyond-checklist{
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
            circle at 92% 12%,
            rgba(18,59,114,.055),
            transparent 26%
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

#idt-beyond-checklist::before{
    content:"";

    position:absolute;

    right:-175px;
    top:-205px;

    width:420px;
    height:420px;

    border-radius:50%;

    border:
        1px solid
        rgba(18,59,114,.09);

    pointer-events:none;
}


#idt-beyond-checklist::after{
    content:"";

    position:absolute;

    left:20px;
    bottom:34px;

    width:110px;
    height:110px;

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

#idt-beyond-checklist .idt-beyond-container{
    position:relative;
    z-index:2;

    width:1240px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   MAIN GRID
========================================================= */

#idt-beyond-checklist .idt-beyond-grid{
    display:grid;

    grid-template-columns:
        minmax(0,1.03fr)
        minmax(440px,.97fr);

    gap:70px;

    align-items:center;
}


/* =========================================================
   CONTENT
========================================================= */

#idt-beyond-checklist .idt-beyond-content{
    position:relative;
}


/* =========================================================
   ACCENT LINE
========================================================= */

#idt-beyond-checklist .idt-beyond-line{
    display:flex;

    align-items:center;

    gap:8px;

    margin-bottom:17px;
}


#idt-beyond-checklist .idt-beyond-line span:first-child{
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


#idt-beyond-checklist .idt-beyond-line span:last-child{
    width:6px;
    height:6px;

    border-radius:50%;

    background:var(--blue);
}


/* =========================================================
   HEADING
========================================================= */

#idt-beyond-checklist .idt-beyond-heading{
    max-width:620px;

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

#idt-beyond-checklist .idt-beyond-copy{
    display:flex;

    flex-direction:column;

    gap:17px;
}


#idt-beyond-checklist .idt-beyond-copy p{
    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.82;

    font-weight:400;

    text-align:justify;
    text-justify:inter-word;
}


/* =========================================================
   STATEMENT CARD
========================================================= */

#idt-beyond-checklist .idt-beyond-statement{
    position:relative;

    margin-top:30px;

    padding:
        22px 24px;

    overflow:hidden;

    background:
        linear-gradient(
            145deg,
            #FFFFFF 0%,
            #FCFAF6 100%
        );

    border:
        1px solid
        var(--border);

    border-radius:13px;

    box-shadow:
        0 10px 28px
        rgba(45,36,24,.055);
}


#idt-beyond-checklist .idt-beyond-statement::before{
    content:"";

    position:absolute;

    top:0;
    left:0;

    width:4px;
    height:100%;

    background:
        linear-gradient(
            180deg,
            var(--blue),
            var(--orange)
        );
}


#idt-beyond-checklist .idt-beyond-statement p{
    margin:0;

    color:var(--blue-dark);

    font-family:"Playfair Display",Georgia,serif;

    font-size:14.5px;
    line-height:1.72;

    font-weight:500;

    text-align:justify;
}


/* =========================================================
   CTA TEXT
========================================================= */

#idt-beyond-checklist .idt-beyond-cta{
    margin-top:18px;
}


#idt-beyond-checklist .idt-beyond-cta p{
    margin:0;

    color:var(--blue);

    font-size:14.5px;
    line-height:1.6;

    font-weight:700;
}


/* =========================================================
   IMAGE AREA
========================================================= */

#idt-beyond-checklist .idt-beyond-visual{
    position:relative;

    width:100%;

    min-height:555px;
}


/* =========================================================
   FRAME
========================================================= */

#idt-beyond-checklist .idt-beyond-frame{
    position:absolute;

    top:26px;
    right:24px;

    width:445px;
    max-width:90%;

    height:490px;

    border:
        1px solid
        rgba(242,162,58,.48);

    border-radius:
        30px 8px 30px 30px;

    transform:rotate(2deg);

    pointer-events:none;
}


/* =========================================================
   MAIN IMAGE
========================================================= */

#idt-beyond-checklist .idt-beyond-main-image{
    position:absolute;

    top:0;
    right:0;

    width:460px;
    max-width:92%;

    height:500px;

    overflow:hidden;

    border-radius:
        30px 8px 30px 30px;

    background:#ECE5D9;

    box-shadow:
        0 24px 50px
        rgba(40,34,25,.14);
}


#idt-beyond-checklist .idt-beyond-main-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .65s ease;
}


#idt-beyond-checklist .idt-beyond-main-image:hover img{
    transform:scale(1.04);
}


#idt-beyond-checklist .idt-beyond-main-image::after{
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
   SMALL IMAGE
========================================================= */

#idt-beyond-checklist .idt-beyond-small-image{
    position:absolute;

    left:0;
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


#idt-beyond-checklist .idt-beyond-small-image-inner{
    width:100%;
    height:100%;

    overflow:hidden;

    border-radius:12px;
}


#idt-beyond-checklist .idt-beyond-small-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .65s ease;
}


#idt-beyond-checklist .idt-beyond-small-image:hover img{
    transform:scale(1.05);
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-beyond-checklist{
        padding:
            60px 22px 64px;
    }


    #idt-beyond-checklist .idt-beyond-container{
        width:1060px;
    }


    #idt-beyond-checklist .idt-beyond-grid{
        grid-template-columns:
            minmax(0,1fr)
            405px;

        gap:48px;
    }


    #idt-beyond-checklist .idt-beyond-heading{
        font-size:37px;
    }


    #idt-beyond-checklist .idt-beyond-copy p{
        font-size:13.8px;
    }


    #idt-beyond-checklist .idt-beyond-visual{
        min-height:500px;
    }


    #idt-beyond-checklist .idt-beyond-main-image{
        width:390px;
        height:440px;
    }


    #idt-beyond-checklist .idt-beyond-frame{
        width:380px;
        height:430px;
    }


    #idt-beyond-checklist .idt-beyond-small-image{
        width:180px;
        height:200px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px)
and (min-width:768px){

    #idt-beyond-checklist{
        padding:
            50px 20px 54px;
    }


    #idt-beyond-checklist .idt-beyond-container{
        width:100%;
        max-width:900px;
    }


    #idt-beyond-checklist .idt-beyond-grid{
        grid-template-columns:
            minmax(0,1.08fr)
            minmax(305px,.92fr);

        gap:32px;
    }


    #idt-beyond-checklist .idt-beyond-heading{
        margin-bottom:18px;

        font-size:30px;
        line-height:1.22;
    }


    #idt-beyond-checklist .idt-beyond-copy{
        gap:13px;
    }


    #idt-beyond-checklist .idt-beyond-copy p{
        font-size:12px;
        line-height:1.68;
    }


    #idt-beyond-checklist .idt-beyond-visual{
        min-height:405px;
    }


    #idt-beyond-checklist .idt-beyond-main-image{
        width:310px;
        height:350px;
    }


    #idt-beyond-checklist .idt-beyond-frame{
        top:18px;
        right:10px;

        width:300px;
        height:340px;
    }


    #idt-beyond-checklist .idt-beyond-small-image{
        width:135px;
        height:150px;

        padding:5px;
    }


    #idt-beyond-checklist .idt-beyond-statement{
        margin-top:25px;

        padding:
            17px 18px;
    }


    #idt-beyond-checklist .idt-beyond-statement p{
        font-size:12px;
        line-height:1.65;
    }


    #idt-beyond-checklist .idt-beyond-cta p{
        font-size:12.5px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-beyond-checklist{
        padding:
            46px 14px 50px;
    }


    #idt-beyond-checklist .idt-beyond-grid{
        display:flex;

        flex-direction:column;

        gap:36px;
    }


    /* IMAGE FIRST */

    #idt-beyond-checklist .idt-beyond-visual{
        order:1;

        width:100%;

        max-width:440px;

        min-height:425px;

        margin:0 auto;
    }


    #idt-beyond-checklist .idt-beyond-main-image{
        top:0;
        left:50%;
        right:auto;

        width:355px;
        max-width:88%;

        height:355px;

        transform:translateX(-50%);

        border-radius:20px;
    }


    #idt-beyond-checklist .idt-beyond-main-image:hover img{
        transform:none;
    }


    #idt-beyond-checklist .idt-beyond-frame{
        top:16px;
        left:50%;
        right:auto;

        width:345px;
        max-width:85%;

        height:345px;

        transform:
            translateX(-50%)
            rotate(1.2deg);

        border-radius:20px;
    }


    #idt-beyond-checklist .idt-beyond-small-image{
        left:50%;
        bottom:0;

        width:145px;
        height:155px;

        transform:
            translateX(-108%);
    }


    #idt-beyond-checklist .idt-beyond-small-image:hover img{
        transform:none;
    }


    /* CONTENT SECOND */

    #idt-beyond-checklist .idt-beyond-content{
        order:2;

        width:100%;

        text-align:center;
    }


    #idt-beyond-checklist .idt-beyond-line{
        justify-content:center;
    }


    #idt-beyond-checklist .idt-beyond-heading{
        max-width:580px;

        margin:
            0 auto 19px;

        font-size:28px;
        line-height:1.24;

        text-align:center;
    }


    #idt-beyond-checklist .idt-beyond-copy{
        max-width:620px;

        margin:0 auto;

        gap:14px;
    }


    #idt-beyond-checklist .idt-beyond-copy p{
        font-size:13.5px;
        line-height:1.72;

        text-align:center;
    }


    #idt-beyond-checklist .idt-beyond-statement{
        max-width:620px;

        margin:
            27px auto 0;

        padding:
            18px 16px;

        border-left:
            1px solid
            var(--border);
    }


    #idt-beyond-checklist .idt-beyond-statement::before{
        width:100%;
        height:3px;
    }


    #idt-beyond-checklist .idt-beyond-statement p{
        font-size:13px;
        line-height:1.68;

        text-align:center;
    }


    #idt-beyond-checklist .idt-beyond-cta{
        text-align:center;
    }


    #idt-beyond-checklist .idt-beyond-cta p{
        font-size:13.5px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-beyond-checklist{
        padding:
            42px 11px 46px;
    }


    #idt-beyond-checklist .idt-beyond-visual{
        max-width:370px;

        min-height:375px;
    }


    #idt-beyond-checklist .idt-beyond-main-image{
        width:305px;
        height:305px;
    }


    #idt-beyond-checklist .idt-beyond-frame{
        width:295px;
        height:295px;
    }


    #idt-beyond-checklist .idt-beyond-small-image{
        width:125px;
        height:135px;
    }


    #idt-beyond-checklist .idt-beyond-heading{
        font-size:25px;
    }


    #idt-beyond-checklist .idt-beyond-copy p{
        font-size:13px;
        line-height:1.68;
    }


    #idt-beyond-checklist .idt-beyond-statement p{
        font-size:12.5px;
    }


    #idt-beyond-checklist .idt-beyond-cta p{
        font-size:13px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-beyond-checklist{
        padding-left:9px;
        padding-right:9px;
    }


    #idt-beyond-checklist .idt-beyond-visual{
        min-height:340px;
    }


    #idt-beyond-checklist .idt-beyond-main-image{
        width:270px;
        height:270px;
    }


    #idt-beyond-checklist .idt-beyond-frame{
        width:260px;
        height:260px;
    }


    #idt-beyond-checklist .idt-beyond-small-image{
        width:110px;
        height:120px;
    }


    #idt-beyond-checklist .idt-beyond-heading{
        font-size:23px;
    }


    #idt-beyond-checklist .idt-beyond-copy p{
        font-size:12.5px;
    }

}

</style>


<section id="idt-beyond-checklist">

    <div class="idt-beyond-container">

        <div class="idt-beyond-grid">


            <!-- LEFT CONTENT -->

            <div class="idt-beyond-content">


                <div
                    class="idt-beyond-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>


                <h2 class="idt-beyond-heading">
                    Beyond the Tourist Checklist
                </h2>


                <div class="idt-beyond-copy">

                    <p>
                        We plan every trip so the famous sites are just one part of a bigger story. Our guests wander through local markets, try street food when they’re curious enough to, and ride through busy lanes in a tuk-tuk that feels nothing like a tour bus. Alongside the landmarks, we build in cultural interactions, heritage walks, and local festivals whenever the timing allows, along with detours to hidden corners most tourists never find.
                    </p>

                </div>


                <div class="idt-beyond-statement">

                    <p>
                        This is what “Designed for Memories, Not Just Miles” actually looks like in practice: a trip that gives you India’s iconic attractions and the quieter, more personal moments that make the whole journey feel like yours.
                    </p>

                </div>


                <div class="idt-beyond-cta">

                    <p>
                        Get in touch for a personalized quotation for your India trip.
                    </p>

                </div>


            </div>



            <!-- RIGHT VISUAL -->

            <div class="idt-beyond-visual">


                <div class="idt-beyond-frame"></div>


                <div class="idt-beyond-main-image">

                    <img
                        src="https://images.unsplash.com/photo-1532664189809-02133fee698d?auto=format&fit=crop&w=1400&q=90"
                        alt="Authentic India Travel Experience">

                </div>


                <div class="idt-beyond-small-image">

                    <div class="idt-beyond-small-image-inner">

                        <img
                            src="https://images.unsplash.com/photo-1590050752117-238cb0fb12b1?auto=format&fit=crop&w=900&q=90"
                            alt="Local India Travel">

                    </div>

                </div>


            </div>


        </div>

    </div>

</section>