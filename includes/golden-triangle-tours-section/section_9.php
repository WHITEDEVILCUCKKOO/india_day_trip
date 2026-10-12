<!-- =========================================================
     INDIA DAY TRIP
     GOLDEN TRIANGLE TOUR PAGE
     SECTION 07 — PLACES TO VISIT
     DELHI + AGRA + JAIPUR ONLY
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-golden-places,
#idt-golden-places *{
    box-sizing:border-box;
}

#idt-golden-places{
    --navy:#0C2D62;
    --blue:#2E6095;
    --orange:#FF5D00;
    --text:#5F6874;
    --line:#E6E9ED;
    --warm:#FCFAF6;
    --white:#FFFFFF;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:52px 24px 56px;

    background:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}

#idt-golden-places .idt-gp-wrap{
    width:100%;
    max-width:1160px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-golden-places .idt-gp-head{
    display:grid;

    grid-template-columns:
        minmax(0,1fr)
        minmax(0,1fr);

    gap:56px;

    align-items:end;

    margin-bottom:30px;
}

#idt-golden-places .idt-gp-script{
    margin:0 0 6px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-golden-places .idt-gp-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:34px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.5px;
}

#idt-golden-places .idt-gp-accent{
    display:flex;
    align-items:center;

    gap:7px;

    margin-top:14px;
}

#idt-golden-places .idt-gp-accent::before{
    content:"";

    width:52px;
    height:2px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--navy),
            var(--orange)
        );
}

#idt-golden-places .idt-gp-accent::after{
    content:"";

    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-golden-places .idt-gp-intro{
    margin:0;

    max-width:520px;

    color:var(--text);

    font-size:16px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   MAIN GOLDEN TRIANGLE FEATURE
========================================================= */

#idt-golden-places .idt-gp-feature{
    display:grid;

    grid-template-columns:
        58% 42%;

    min-height:410px;

    margin-bottom:20px;

    overflow:hidden;

    border:1px solid var(--line);
    border-radius:10px;

    background:#FFFFFF;
}

#idt-golden-places .idt-gp-feature-image{
    position:relative;

    min-height:410px;

    overflow:hidden;

    background:#EDF1F4;
}

#idt-golden-places .idt-gp-feature-image img{
    position:absolute;

    inset:0;

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:transform .7s ease;
}

#idt-golden-places .idt-gp-feature:hover img{
    transform:scale(1.04);
}

#idt-golden-places .idt-gp-feature-copy{
    display:flex;

    flex-direction:column;
    justify-content:center;

    padding:42px 40px;
}

#idt-golden-places .idt-gp-eyebrow{
    display:flex;

    align-items:center;

    gap:8px;

    margin:0 0 9px;

    color:var(--blue);

    font-size:12px;
    line-height:1.4;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;
}

#idt-golden-places .idt-gp-eyebrow::before{
    content:"";

    width:22px;
    height:1px;

    background:var(--orange);
}

#idt-golden-places .idt-gp-feature h3{
    margin:0 0 10px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:26px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:-.4px;
}

#idt-golden-places .idt-gp-feature p{
    margin:0;

    color:var(--text);

    font-size:15.5px;
    line-height:1.72;
}


/* =========================================================
   THREE CITIES GRID
========================================================= */

#idt-golden-places .idt-gp-grid{
    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap:20px;
}


/* =========================================================
   CITY CARD
========================================================= */

#idt-golden-places .idt-gp-item{
    display:flex;

    flex-direction:column;

    min-width:0;

    overflow:hidden;

    border:1px solid var(--line);

    border-radius:9px;

    background:#FFFFFF;

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}

#idt-golden-places .idt-gp-item:hover{
    transform:translateY(-4px);

    box-shadow:
        0 14px 30px
        rgba(12,45,98,.07);
}


/* IMAGE */

#idt-golden-places .idt-gp-item-image{
    position:relative;

    width:100%;
    height:230px;

    overflow:hidden;

    background:#EDF1F4;
}

#idt-golden-places .idt-gp-item-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:transform .7s ease;
}

#idt-golden-places .idt-gp-item:hover img{
    transform:scale(1.05);
}


/* CONTENT */

#idt-golden-places .idt-gp-item-copy{
    display:flex;

    flex-direction:column;

    flex:1;

    padding:20px 20px 21px;
}

#idt-golden-places .idt-gp-item-tag{
    display:block;

    margin-bottom:6px;

    color:var(--blue);

    font-size:11.5px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;
}

#idt-golden-places .idt-gp-item:nth-child(even)
.idt-gp-item-tag{
    color:var(--orange);
}

#idt-golden-places .idt-gp-item h3{
    margin:0 0 7px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:20px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:-.25px;
}

#idt-golden-places .idt-gp-item p{
    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.68;
}


/* =========================================================
   BOTTOM NOTE
========================================================= */

#idt-golden-places .idt-gp-bottom{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:24px;

    margin-top:24px;

    padding-top:18px;

    border-top:1px solid var(--line);
}

#idt-golden-places .idt-gp-bottom-left{
    display:flex;

    align-items:center;

    gap:10px;

    color:var(--navy);

    font-size:14.5px;
    line-height:1.5;

    font-weight:700;
}

#idt-golden-places .idt-gp-bottom-left svg{
    width:20px;
    height:20px;

    flex:0 0 20px;

    fill:none;

    stroke:var(--orange);

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-golden-places .idt-gp-bottom-right{
    max-width:390px;

    color:var(--text);

    font-size:13.5px;
    line-height:1.55;

    text-align:right;
}


/* =========================================================
   RESPONSIVE 1200
========================================================= */

@media(max-width:1200px){

    #idt-golden-places{
        padding:48px 28px 50px;
    }

    #idt-golden-places .idt-gp-wrap{
        max-width:1050px;
    }

    #idt-golden-places .idt-gp-feature{
        grid-template-columns:
            56% 44%;
    }

    #idt-golden-places .idt-gp-feature-copy{
        padding:36px 34px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-golden-places{
        padding:45px 20px 47px;
    }

    #idt-golden-places .idt-gp-head{
        grid-template-columns:1fr;

        gap:14px;

        margin-bottom:26px;
    }

    #idt-golden-places .idt-gp-intro{
        max-width:760px;
    }

    #idt-golden-places .idt-gp-feature{
        grid-template-columns:1fr;

        min-height:0;
    }

    #idt-golden-places .idt-gp-feature-image{
        min-height:350px;
    }

    #idt-golden-places .idt-gp-feature-copy{
        padding:28px;
    }

    #idt-golden-places .idt-gp-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));
    }

    #idt-golden-places .idt-gp-item:last-child{
        grid-column:1 / -1;

        width:calc(50% - 10px);

        justify-self:center;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-golden-places{
        padding:42px 15px 44px;
    }

    #idt-golden-places .idt-gp-script{
        font-size:28px;
    }

    #idt-golden-places .idt-gp-title{
        font-size:29px;
        line-height:1.22;
    }

    #idt-golden-places .idt-gp-intro{
        font-size:15px;
        line-height:1.7;
    }

    #idt-golden-places .idt-gp-feature-image{
        min-height:300px;
    }

    #idt-golden-places .idt-gp-feature-copy{
        padding:24px 21px;
    }

    #idt-golden-places .idt-gp-feature h3{
        font-size:22px;
    }

    #idt-golden-places .idt-gp-feature p{
        font-size:15px;
    }

    #idt-golden-places .idt-gp-grid{
        grid-template-columns:1fr;
    }

    #idt-golden-places .idt-gp-item:last-child{
        grid-column:auto;

        width:100%;
    }

    #idt-golden-places .idt-gp-item-image{
        height:245px;
    }

    #idt-golden-places .idt-gp-bottom{
        flex-direction:column;

        align-items:flex-start;

        gap:7px;
    }

    #idt-golden-places .idt-gp-bottom-right{
        max-width:none;

        text-align:left;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-golden-places{
        padding:38px 13px 40px;
    }

    #idt-golden-places .idt-gp-script{
        font-size:26px;
    }

    #idt-golden-places .idt-gp-title{
        font-size:27px;
    }

    #idt-golden-places .idt-gp-feature-image{
        min-height:250px;
    }

    #idt-golden-places .idt-gp-feature-copy{
        padding:21px 17px;
    }

    #idt-golden-places .idt-gp-feature h3{
        font-size:20px;
    }

    #idt-golden-places .idt-gp-feature p{
        font-size:14.5px;
    }

    #idt-golden-places .idt-gp-item-image{
        height:220px;
    }

    #idt-golden-places .idt-gp-item-copy{
        padding:18px 17px 20px;
    }

    #idt-golden-places .idt-gp-item h3{
        font-size:18px;
    }

    #idt-golden-places .idt-gp-item p{
        font-size:14.5px;
    }

}


@media(max-width:360px){

    #idt-golden-places{
        padding:36px 10px 38px;
    }

    #idt-golden-places .idt-gp-script{
        font-size:25px;
    }

    #idt-golden-places .idt-gp-title{
        font-size:25px;
    }

}

</style>


<section id="idt-golden-places">

    <div class="idt-gp-wrap">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-gp-head">

            <div>

                <p class="idt-gp-script">
                    Explore Three Iconic Cities
                </p>

                <h2 class="idt-gp-title">
                    Places to Visit on Your Golden Triangle Tour
                </h2>

                <div
                    class="idt-gp-accent"
                    aria-hidden="true">
                </div>

            </div>


            <p class="idt-gp-intro">
                Discover Delhi, Agra and Jaipur through their most memorable monuments, royal architecture and cultural landmarks — the three destinations that define India’s classic Golden Triangle journey.
            </p>

        </div>


        <!-- =================================================
             MAIN FEATURE — GOLDEN TRIANGLE
        ================================================== -->

        <article class="idt-gp-feature">

            <div class="idt-gp-feature-image">

                <img
                    src="https://indiadaytrip.com/assets/img/about/about-golden.webp"
                    alt="Golden Triangle Tour Delhi Agra Jaipur"
                    loading="lazy"
                    onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/about/about-taj.webp';"
                >

            </div>


            <div class="idt-gp-feature-copy">

                <p class="idt-gp-eyebrow">
                    India’s Classic Route
                </p>

                <h3>
                    Delhi, Agra & Jaipur
                </h3>

                <p>
                    Travel through three of North India’s most iconic destinations in one beautifully connected journey. Experience Delhi’s historic landmarks, the timeless Mughal heritage of Agra and Jaipur’s magnificent forts, palaces and colourful old city.
                </p>

            </div>

        </article>


        <!-- =================================================
             THREE GOLDEN TRIANGLE CITIES
        ================================================== -->

        <div class="idt-gp-grid">


            <!-- =================================================
                 DELHI
            ================================================== -->

            <article class="idt-gp-item">

                <div class="idt-gp-item-image">

                    <img
                        src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1200&q=90"
                        alt="Delhi Golden Triangle Tour"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/about/about-golden.webp';"
                    >

                </div>


                <div class="idt-gp-item-copy">

                    <span class="idt-gp-item-tag">
                        Delhi
                    </span>

                    <h3>
                        Historic & Modern Delhi
                    </h3>

                    <p>
                        Discover the contrast of Old and New Delhi through historic monuments, vibrant markets, grand avenues and important landmarks that introduce you to India’s capital.
                    </p>

                </div>

            </article>


            <!-- =================================================
                 AGRA
            ================================================== -->

            <article class="idt-gp-item">

                <div class="idt-gp-item-image">

                    <img
                        src="https://indiadaytrip.com/assets/img/about/about-taj.webp"
                        alt="Taj Mahal Agra Golden Triangle Tour"
                        loading="lazy"
                    >

                </div>


                <div class="idt-gp-item-copy">

                    <span class="idt-gp-item-tag">
                        Agra
                    </span>

                    <h3>
                        Taj Mahal & Mughal Agra
                    </h3>

                    <p>
                        Experience the Taj Mahal and discover Agra’s rich Mughal heritage, including impressive architecture, historic landmarks and stories from the era of the Mughal emperors.
                    </p>

                </div>

            </article>


            <!-- =================================================
                 JAIPUR
            ================================================== -->

            <article class="idt-gp-item">

                <div class="idt-gp-item-image">

                    <img
                        src="https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=1200&q=90"
                        alt="Jaipur Golden Triangle Tour"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='https://indiadaytrip.com/assets/img/about/about-golden.webp';"
                    >

                </div>


                <div class="idt-gp-item-copy">

                    <span class="idt-gp-item-tag">
                        Jaipur
                    </span>

                    <h3>
                        Forts, Palaces & Pink City
                    </h3>

                    <p>
                        Explore Jaipur’s royal character through Amber Fort, historic palaces, Hawa Mahal and the colourful streets of the Pink City.
                    </p>

                </div>

            </article>


        </div>


        <!-- =================================================
             BOTTOM NOTE
        ================================================== -->

        <div class="idt-gp-bottom">

            <div class="idt-gp-bottom-left">

                <svg viewBox="0 0 24 24">
                    <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                    <circle cx="12" cy="10" r="2.5"></circle>
                </svg>

                Delhi → Agra → Jaipur — one unforgettable journey.

            </div>


            <div class="idt-gp-bottom-right">
                Your Golden Triangle sightseeing can be adjusted according to your selected package, travel duration and preferred pace.
            </div>

        </div>


    </div>

</section>