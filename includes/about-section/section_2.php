<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP — FOUNDER SECTION
   BRAND BLUE + ORANGE PREMIUM VERSION
========================================================= */

#idt-founder-section,
#idt-founder-section *{
    box-sizing:border-box;
}

#idt-founder-section{
    --blue:#123B72;
    --blue-dark:#0D2C57;
    --blue-soft:#EAF1F8;

    --orange:#F2A23A;
    --orange-light:#FFC168;

    --cream:#F6F2E8;
    --cream-light:#FCFAF5;

    --text:#655F56;
    --heading:#25231F;
    --line:#E8E0D2;
    --white:#FFFFFF;

    position:relative;
    width:100%;

    overflow:hidden;

    padding:72px 24px 76px;

    background:
        radial-gradient(
            circle at 92% 10%,
            rgba(242,162,58,.08),
            transparent 26%
        ),
        radial-gradient(
            circle at 3% 90%,
            rgba(18,59,114,.055),
            transparent 24%
        ),
        linear-gradient(
            180deg,
            #FBF9F4 0%,
            #F5F1E8 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}

#idt-founder-section::before{
    content:"";

    position:absolute;

    width:410px;
    height:410px;

    top:-245px;
    right:-165px;

    border-radius:50%;

    border:
        1px solid
        rgba(242,162,58,.11);

    pointer-events:none;
}

#idt-founder-section::after{
    content:"";

    position:absolute;

    left:0;
    bottom:25px;

    width:155px;
    height:155px;

    opacity:.22;

    background-image:
        radial-gradient(
            circle,
            rgba(18,59,114,.28) 1.2px,
            transparent 1.3px
        );

    background-size:17px 17px;

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-founder-section .idt-founder-container{
    position:relative;
    z-index:3;

    width:1240px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   MAIN GRID
========================================================= */

#idt-founder-section .idt-founder-grid{
    display:grid;

    grid-template-columns:
        minmax(440px,.95fr)
        minmax(0,1.05fr);

    gap:72px;

    align-items:center;
}


/* =========================================================
   LEFT IMAGE AREA
========================================================= */

#idt-founder-section .idt-founder-visual{
    position:relative;

    width:100%;

    min-height:590px;
}


#idt-founder-section .idt-founder-frame{
    position:absolute;

    top:25px;
    left:24px;

    width:440px;
    max-width:89%;

    height:525px;

    border:
        1px solid
        rgba(242,162,58,.48);

    border-radius:
        8px 30px 30px 30px;

    transform:rotate(-2deg);

    pointer-events:none;
}


#idt-founder-section .idt-founder-image{
    position:absolute;

    top:0;
    left:0;

    width:455px;
    max-width:92%;

    height:530px;

    overflow:hidden;

    border-radius:
        8px 30px 30px 30px;

    background:#E9E2D6;

    box-shadow:
        0 24px 50px
        rgba(40,34,25,.14);
}


#idt-founder-section .idt-founder-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .7s ease;
}


#idt-founder-section .idt-founder-image:hover img{
    transform:scale(1.045);
}


#idt-founder-section .idt-founder-image::after{
    content:"";

    position:absolute;
    inset:0;

    background:
        linear-gradient(
            180deg,
            transparent 55%,
            rgba(20,17,13,.42) 100%
        );

    pointer-events:none;
}


/* =========================================================
   FOUNDER NAME BOX
========================================================= */

#idt-founder-section .idt-founder-name-box{
    position:absolute;

    left:28px;
    bottom:24px;

    z-index:4;

    min-width:205px;

    padding:16px 20px;

    border-radius:10px;

    background:
        linear-gradient(
            135deg,
            var(--blue-dark),
            var(--blue)
        );

    border:
        1px solid
        rgba(255,255,255,.12);

    box-shadow:
        0 14px 30px
        rgba(13,44,87,.20);
}


#idt-founder-section .idt-founder-name{
    display:block;

    margin-bottom:4px;

    color:#FFFFFF;

    font-family:"Playfair Display",Georgia,serif;

    font-size:17px;
    line-height:1.25;

    font-weight:600;
}


#idt-founder-section .idt-founder-role{
    display:block;

    color:var(--orange-light);

    font-size:9px;
    line-height:1.4;

    font-weight:700;

    letter-spacing:.09em;

    text-transform:uppercase;
}


/* =========================================================
   SMALL IMAGE
========================================================= */

#idt-founder-section .idt-founder-small-image{
    position:absolute;

    right:0;
    bottom:0;

    z-index:5;

    width:200px;
    height:220px;

    padding:7px;

    overflow:hidden;

    border-radius:18px;

    background:#FFFFFF;

    border:
        1px solid
        #ECE3D5;

    box-shadow:
        0 18px 38px
        rgba(42,34,23,.16);
}


#idt-founder-section .idt-founder-small-image-inner{
    width:100%;
    height:100%;

    overflow:hidden;

    border-radius:12px;
}


#idt-founder-section .idt-founder-small-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:transform .55s ease;
}


#idt-founder-section .idt-founder-small-image:hover img{
    transform:scale(1.05);
}


/* =========================================================
   RIGHT CONTENT
========================================================= */

#idt-founder-section .idt-founder-content{
    position:relative;
    z-index:4;
}


/* SUBHEADING — ONLY CHANGE */

#idt-founder-section .idt-founder-script{
    margin:0 0 7px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:35px;
    line-height:1;

    font-weight:400;
}


/* ACCENT LINE */

#idt-founder-section .idt-founder-line{
    display:flex;
    align-items:center;

    gap:8px;

    margin-bottom:17px;
}


#idt-founder-section .idt-founder-line-main{
    width:48px;
    height:2px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--orange),
            var(--blue)
        );
}


#idt-founder-section .idt-founder-line-dot{
    width:6px;
    height:6px;

    border-radius:50%;

    background:var(--orange);
}


/* =========================================================
   MAIN HEADING
========================================================= */

#idt-founder-section .idt-founder-heading{
    max-width:670px;

    margin:0 0 23px;

    color:var(--heading);

    font-family:"Playfair Display",Georgia,serif;

    font-size:41px;
    line-height:1.18;

    font-weight:600;

    letter-spacing:-.6px;
}


/* =========================================================
   COPY
========================================================= */

#idt-founder-section .idt-founder-copy{
    display:flex;

    flex-direction:column;

    gap:15px;
}


#idt-founder-section .idt-founder-copy p{
    max-width:710px;

    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.8;

    font-weight:400;

    text-align:justify;
    text-justify:inter-word;
}


/* =========================================================
   MISSION / VISION
========================================================= */

#idt-founder-section .idt-purpose-grid{
    display:grid;

    grid-template-columns:
        repeat(2,minmax(0,1fr));

    gap:16px;

    margin-top:31px;
}


#idt-founder-section .idt-purpose-card{
    position:relative;

    min-width:0;
    min-height:195px;

    overflow:hidden;

    padding:
        24px 22px 22px;

    border:
        1px solid
        #E7DED0;

    border-radius:14px;

    background:
        linear-gradient(
            145deg,
            #FFFFFF 0%,
            #FCFAF6 100%
        );

    box-shadow:
        0 10px 28px
        rgba(45,36,24,.055);

    transition:
        transform .3s ease,
        border-color .3s ease,
        box-shadow .3s ease;
}


#idt-founder-section .idt-purpose-card:hover{
    transform:translateY(-5px);

    border-color:
        rgba(242,162,58,.50);

    box-shadow:
        0 18px 38px
        rgba(45,36,24,.09);
}


#idt-founder-section .idt-purpose-card::before{
    content:"";

    position:absolute;

    top:0;
    left:0;

    width:55px;
    height:4px;

    border-radius:
        0 0 9px 0;

    background:
        linear-gradient(
            90deg,
            var(--orange),
            var(--blue)
        );

    transition:
        width .35s ease;
}


#idt-founder-section .idt-purpose-card:hover::before{
    width:100%;
}


#idt-founder-section .idt-purpose-icon{
    display:flex;
    align-items:center;
    justify-content:center;

    width:45px;
    height:45px;

    margin-bottom:15px;

    border-radius:11px;

    background:
        linear-gradient(
            145deg,
            #FFF1DD,
            #FFF8ED
        );

    border:
        1px solid
        #F5DFC0;

    color:var(--orange);
}


#idt-founder-section .idt-purpose-icon svg{
    width:21px;
    height:21px;

    fill:none;

    stroke:currentColor;

    stroke-width:1.7;

    stroke-linecap:round;
    stroke-linejoin:round;

    transition:transform .55s ease;
}


#idt-founder-section
.idt-purpose-card:hover
.idt-purpose-icon svg{
    transform:rotate(360deg);
}


#idt-founder-section .idt-purpose-title{
    margin:0 0 9px;

    color:var(--blue-dark);

    font-family:"Playfair Display",Georgia,serif;

    font-size:19px;
    line-height:1.3;

    font-weight:600;
}


#idt-founder-section .idt-purpose-text{
    margin:0;

    color:var(--text);

    font-size:12.5px;
    line-height:1.7;

    font-weight:400;

    text-align:justify;
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-founder-section{
        padding:
            64px 22px 68px;
    }

    #idt-founder-section .idt-founder-container{
        width:1060px;
    }

    #idt-founder-section .idt-founder-grid{
        grid-template-columns:
            410px
            minmax(0,1fr);

        gap:50px;
    }

    #idt-founder-section .idt-founder-heading{
        font-size:37px;
    }

    #idt-founder-section .idt-founder-visual{
        min-height:530px;
    }

    #idt-founder-section .idt-founder-image{
        width:395px;
        height:470px;
    }

    #idt-founder-section .idt-founder-frame{
        width:385px;
        height:460px;
    }

    #idt-founder-section .idt-founder-small-image{
        width:170px;
        height:190px;
    }

    #idt-founder-section .idt-founder-copy p{
        font-size:13.5px;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px)
and (min-width:768px){

    #idt-founder-section{
        padding:
            54px 20px 58px;
    }

    #idt-founder-section .idt-founder-container{
        width:100%;
        max-width:900px;
    }

    #idt-founder-section .idt-founder-grid{
        grid-template-columns:
            minmax(300px,.88fr)
            minmax(0,1.12fr);

        gap:32px;
    }


    #idt-founder-section .idt-founder-visual{
        min-height:430px;
    }

    #idt-founder-section .idt-founder-image{
        width:310px;
        max-width:92%;

        height:380px;
    }

    #idt-founder-section .idt-founder-frame{
        top:17px;
        left:10px;

        width:300px;
        max-width:89%;

        height:370px;
    }

    #idt-founder-section .idt-founder-small-image{
        width:132px;
        height:150px;

        padding:5px;
    }

    #idt-founder-section .idt-founder-name-box{
        left:14px;
        bottom:16px;

        min-width:155px;

        padding:
            11px 13px;
    }

    #idt-founder-section .idt-founder-name{
        font-size:13px;
    }

    #idt-founder-section .idt-founder-role{
        font-size:7px;
    }


    #idt-founder-section .idt-founder-script{
        font-size:29px;
    }

    #idt-founder-section .idt-founder-line{
        margin-bottom:14px;
    }

    #idt-founder-section .idt-founder-heading{
        margin-bottom:18px;

        font-size:30px;
        line-height:1.2;
    }

    #idt-founder-section .idt-founder-copy{
        gap:11px;
    }

    #idt-founder-section .idt-founder-copy p{
        font-size:11.5px;
        line-height:1.7;
    }


    #idt-founder-section .idt-purpose-grid{
        gap:9px;

        margin-top:22px;
    }

    #idt-founder-section .idt-purpose-card{
        min-height:165px;

        padding:
            15px 12px;
    }

    #idt-founder-section .idt-purpose-icon{
        width:35px;
        height:35px;

        margin-bottom:9px;
    }

    #idt-founder-section .idt-purpose-icon svg{
        width:16px;
        height:16px;
    }

    #idt-founder-section .idt-purpose-title{
        margin-bottom:6px;

        font-size:14px;
    }

    #idt-founder-section .idt-purpose-text{
        font-size:10px;
        line-height:1.55;

        text-align:left;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-founder-section{
        padding:
            47px 15px 52px;
    }


    #idt-founder-section .idt-founder-grid{
        display:flex;

        flex-direction:column;

        gap:37px;
    }


    #idt-founder-section .idt-founder-visual{
        width:100%;

        max-width:450px;

        min-height:435px;

        margin:0 auto;

        order:1;
    }


    #idt-founder-section .idt-founder-image{
        top:0;
        left:50%;

        width:355px;
        max-width:88%;

        height:355px;

        transform:translateX(-50%);

        border-radius:20px;
    }


    #idt-founder-section .idt-founder-image:hover img{
        transform:none;
    }


    #idt-founder-section .idt-founder-frame{
        top:16px;
        left:50%;

        width:345px;
        max-width:85%;

        height:345px;

        transform:
            translateX(-50%)
            rotate(-1.5deg);
    }


    #idt-founder-section .idt-founder-small-image{
        right:50%;
        bottom:0;

        width:145px;
        height:160px;

        transform:
            translateX(112%);
    }


    #idt-founder-section .idt-founder-name-box{
        left:50%;
        bottom:18px;

        min-width:175px;

        padding:
            12px 14px;

        transform:
            translateX(-100%);
    }


    #idt-founder-section .idt-founder-content{
        width:100%;

        order:2;

        text-align:center;
    }


    #idt-founder-section .idt-founder-script{
        font-size:30px;

        text-align:center;
    }


    #idt-founder-section .idt-founder-line{
        justify-content:center;
    }


    #idt-founder-section .idt-founder-heading{
        max-width:600px;

        margin:
            0 auto 19px;

        font-size:29px;
        line-height:1.23;

        text-align:center;
    }


    #idt-founder-section .idt-founder-copy{
        gap:14px;
    }


    #idt-founder-section .idt-founder-copy p{
        max-width:620px;

        margin:
            0 auto;

        font-size:13.5px;
        line-height:1.75;

        text-align:center;
    }


    #idt-founder-section .idt-purpose-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:10px;

        margin-top:28px;
    }


    #idt-founder-section .idt-purpose-card{
        min-height:210px;

        padding:
            18px 12px 17px;

        text-align:center;
    }


    #idt-founder-section .idt-purpose-card::before{
        width:45px;
    }


    #idt-founder-section .idt-purpose-icon{
        width:41px;
        height:41px;

        margin:
            0 auto 13px;
    }


    #idt-founder-section .idt-purpose-title{
        font-size:15px;

        text-align:center;
    }


    #idt-founder-section .idt-purpose-text{
        font-size:11px;
        line-height:1.6;

        text-align:center;

        overflow-wrap:anywhere;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-founder-section{
        padding:
            42px 11px 47px;
    }


    #idt-founder-section .idt-founder-visual{
        max-width:370px;

        min-height:380px;
    }


    #idt-founder-section .idt-founder-image{
        width:305px;
        height:305px;
    }


    #idt-founder-section .idt-founder-frame{
        width:295px;
        height:295px;
    }


    #idt-founder-section .idt-founder-small-image{
        width:125px;
        height:140px;
    }


    #idt-founder-section .idt-founder-name-box{
        min-width:150px;

        padding:
            10px 11px;
    }


    #idt-founder-section .idt-founder-name{
        font-size:12px;
    }


    #idt-founder-section .idt-founder-script{
        font-size:27px;
    }


    #idt-founder-section .idt-founder-heading{
        font-size:26px;
    }


    #idt-founder-section .idt-founder-copy p{
        font-size:13px;
        line-height:1.7;
    }


    #idt-founder-section .idt-purpose-grid{
        gap:8px;
    }


    #idt-founder-section .idt-purpose-card{
        min-height:215px;

        padding:
            16px 8px;
    }


    #idt-founder-section .idt-purpose-title{
        font-size:14px;
    }


    #idt-founder-section .idt-purpose-text{
        font-size:10px;
        line-height:1.53;
    }
}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-founder-section{
        padding-left:8px;
        padding-right:8px;
    }


    #idt-founder-section .idt-founder-visual{
        min-height:340px;
    }


    #idt-founder-section .idt-founder-image{
        width:270px;
        height:270px;
    }


    #idt-founder-section .idt-founder-frame{
        width:260px;
        height:260px;
    }


    #idt-founder-section .idt-founder-small-image{
        width:110px;
        height:122px;
    }


    #idt-founder-section .idt-founder-name-box{
        min-width:132px;
    }


    #idt-founder-section .idt-founder-heading{
        font-size:24px;
    }


    #idt-founder-section .idt-purpose-card{
        min-height:220px;

        padding:
            14px 6px;
    }


    #idt-founder-section .idt-purpose-title{
        font-size:13px;
    }


    #idt-founder-section .idt-purpose-text{
        font-size:9.5px;
    }
}

</style>


<section id="idt-founder-section">

    <div class="idt-founder-container">

        <div class="idt-founder-grid">


            <div class="idt-founder-visual">


                <div class="idt-founder-frame"></div>


                <div class="idt-founder-image">

                    <img
                        src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1400&q=90"
                        alt="India Day Trip Travel Experience">


                    <div class="idt-founder-name-box">

                        <span class="idt-founder-name">
                            Anshul Gupta
                        </span>

                        <span class="idt-founder-role">
                            Founder • India Day Trip
                        </span>

                    </div>

                </div>



                <div class="idt-founder-small-image">

                    <div class="idt-founder-small-image-inner">

                        <img
                            src="https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=900&q=90"
                            alt="Jaipur India Travel">

                    </div>

                </div>


            </div>



            <div class="idt-founder-content">


                <p class="idt-founder-script">
                    Meet the Founder
                </p>


                <div
                    class="idt-founder-line"
                    aria-hidden="true">

                    <span class="idt-founder-line-main"></span>

                    <span class="idt-founder-line-dot"></span>

                </div>



                <h2 class="idt-founder-heading">
                    The Man Behind Every Itinerary
                </h2>



                <div class="idt-founder-copy">


                    <p>
                        Anshul Gupta founded the company not from a business plan alone, but from a desire to address the frustrations travelers often face. Year after year, he watched travelers get rushed, ignored, and sold the same recycled package as everyone before them. Nobody asked what they actually wanted. Nobody slowed down.
                    </p>


                    <p>
                        So he built India Day Trip around one simple idea: no two travelers are the same, so no two trips should be either. Over the years, guests from Spain, Italy, Australia, the USA, Canada, and dozens of other countries have shown up expecting a tour. They leave with something closer to a story.
                    </p>


                </div>



                <div class="idt-purpose-grid">


                    <article class="idt-purpose-card">


                        <span class="idt-purpose-icon">

                            <svg viewBox="0 0 24 24">

                                <circle cx="12" cy="12" r="8"></circle>
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M12 2V5"></path>
                                <path d="M12 19V22"></path>
                                <path d="M2 12H5"></path>
                                <path d="M19 12H22"></path>

                            </svg>

                        </span>


                        <h3 class="idt-purpose-title">
                            Our Mission
                        </h3>


                        <p class="idt-purpose-text">
                            To turn a trip to India into something more personal, bringing together the places you want to see, the experiences you didn't know to ask for, and the people who make India unforgettable.
                        </p>


                    </article>



                    <article class="idt-purpose-card">


                        <span class="idt-purpose-icon">

                            <svg viewBox="0 0 24 24">

                                <path d="M2.5 12C4.7 7.8 8 5.5 12 5.5C16 5.5 19.3 7.8 21.5 12C19.3 16.2 16 18.5 12 18.5C8 18.5 4.7 16.2 2.5 12Z"></path>

                                <circle cx="12" cy="12" r="2.7"></circle>

                            </svg>

                        </span>


                        <h3 class="idt-purpose-title">
                            Our Vision
                        </h3>


                        <p class="idt-purpose-text">
                            To set a new standard for thoughtful, private travel in India, and become the benchmark for journeys made exceptionally personal.
                        </p>


                    </article>


                </div>


            </div>


        </div>

    </div>

</section>