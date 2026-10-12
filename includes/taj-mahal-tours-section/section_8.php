<!-- =========================================================
     INDIA DAY TRIP
     SECTION 07 — NEARBY ATTRACTIONS
     CLEAN ALIGNED PREMIUM VERSION
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-nearby-clean,
#idt-nearby-clean *{
    box-sizing:border-box;
}

#idt-nearby-clean{
    --navy:#0C2D62;
    --blue:#2E6095;
    --orange:#FF5D00;
    --text:#5F6874;
    --line:#E6E9ED;
    --warm:#FCFAF6;
    --white:#FFFFFF;

    width:100%;
    overflow:hidden;

    padding:52px 24px 56px;

    background:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}

#idt-nearby-clean .idt-near-wrap{
    width:100%;
    max-width:1160px;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-nearby-clean .idt-near-head{
    display:grid;

    grid-template-columns:
        minmax(0,1fr)
        minmax(0,1fr);

    gap:56px;

    align-items:end;

    margin-bottom:30px;
}

#idt-nearby-clean .idt-near-script{
    margin:0 0 6px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}

#idt-nearby-clean .idt-near-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:34px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.5px;
}

#idt-nearby-clean .idt-near-accent{
    display:flex;
    align-items:center;

    gap:7px;

    margin-top:14px;
}

#idt-nearby-clean .idt-near-accent::before{
    content:"";

    width:52px;
    height:2px;

    background:
        linear-gradient(
            90deg,
            var(--navy),
            var(--orange)
        );

    border-radius:20px;
}

#idt-nearby-clean .idt-near-accent::after{
    content:"";

    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-nearby-clean .idt-near-intro{
    margin:0;

    max-width:520px;

    color:var(--text);

    font-size:16px;
    line-height:1.75;

    font-weight:400;
}


/* =========================================================
   MAIN FEATURE
========================================================= */

#idt-nearby-clean .idt-near-feature{
    display:grid;

    grid-template-columns:
        58% 42%;

    min-height:410px;

    margin-bottom:20px;

    overflow:hidden;

    border:1px solid var(--line);
    border-radius:10px;

    background:var(--white);
}

#idt-nearby-clean .idt-near-feature-image{
    position:relative;

    min-height:410px;

    overflow:hidden;

    background:#EDF1F4;
}

#idt-nearby-clean .idt-near-feature-image img{
    position:absolute;

    inset:0;

    width:100%;
    height:100%;

    object-fit:cover;

    transition:transform .7s ease;
}

#idt-nearby-clean .idt-near-feature:hover img{
    transform:scale(1.04);
}

#idt-nearby-clean .idt-near-feature-copy{
    display:flex;

    flex-direction:column;
    justify-content:center;

    padding:42px 40px;
}

#idt-nearby-clean .idt-near-eyebrow{
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

#idt-nearby-clean .idt-near-eyebrow::before{
    content:"";

    width:22px;
    height:1px;

    background:var(--orange);
}

#idt-nearby-clean .idt-near-feature h3{
    margin:0 0 10px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:26px;
    line-height:1.3;

    font-weight:800;

    letter-spacing:-.4px;
}

#idt-nearby-clean .idt-near-feature p{
    margin:0;

    color:var(--text);

    font-size:15.5px;
    line-height:1.72;
}


/* =========================================================
   SECONDARY GRID
========================================================= */

#idt-nearby-clean .idt-near-grid{
    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap:20px;
}


/* =========================================================
   SECONDARY ITEM
========================================================= */

#idt-nearby-clean .idt-near-item{
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

#idt-nearby-clean .idt-near-item:hover{
    transform:translateY(-4px);

    box-shadow:
        0 14px 30px
        rgba(12,45,98,.07);
}


/* IMAGE — SAME HEIGHT FOR ALL */

#idt-nearby-clean .idt-near-item-image{
    position:relative;

    width:100%;
    height:230px;

    overflow:hidden;

    background:#EDF1F4;
}

#idt-nearby-clean .idt-near-item-image img{
    width:100%;
    height:100%;

    object-fit:cover;

    display:block;

    transition:transform .7s ease;
}

#idt-nearby-clean .idt-near-item:hover img{
    transform:scale(1.05);
}


/* CONTENT — SAME STRUCTURE */

#idt-nearby-clean .idt-near-item-copy{
    display:flex;

    flex-direction:column;

    flex:1;

    padding:20px 20px 21px;
}

#idt-nearby-clean .idt-near-item-tag{
    display:block;

    margin-bottom:6px;

    color:var(--blue);

    font-size:11.5px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:.07em;

    text-transform:uppercase;
}

#idt-nearby-clean .idt-near-item:nth-child(even)
.idt-near-item-tag{
    color:var(--orange);
}

#idt-nearby-clean .idt-near-item h3{
    margin:0 0 7px;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    font-size:20px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:-.25px;
}

#idt-nearby-clean .idt-near-item p{
    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.68;
}


/* =========================================================
   BOTTOM NOTE
========================================================= */

#idt-nearby-clean .idt-near-bottom{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:24px;

    margin-top:24px;

    padding-top:18px;

    border-top:1px solid var(--line);
}

#idt-nearby-clean .idt-near-bottom-left{
    display:flex;

    align-items:center;

    gap:10px;

    color:var(--navy);

    font-size:14.5px;
    line-height:1.5;

    font-weight:700;
}

#idt-nearby-clean .idt-near-bottom-left svg{
    width:20px;
    height:20px;

    flex:0 0 20px;

    fill:none;

    stroke:var(--orange);

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-nearby-clean .idt-near-bottom-right{
    max-width:390px;

    color:var(--text);

    font-size:13.5px;
    line-height:1.55;

    text-align:right;
}


/* =========================================================
   RESPONSIVE — 1200
========================================================= */

@media(max-width:1200px){

    #idt-nearby-clean{
        padding:48px 28px 50px;
    }

    #idt-nearby-clean .idt-near-wrap{
        max-width:1050px;
    }

    #idt-nearby-clean .idt-near-feature{
        grid-template-columns:
            56% 44%;
    }

    #idt-nearby-clean .idt-near-feature-copy{
        padding:36px 34px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-nearby-clean{
        padding:45px 20px 47px;
    }

    #idt-nearby-clean .idt-near-head{
        grid-template-columns:1fr;

        gap:14px;

        margin-bottom:26px;
    }

    #idt-nearby-clean .idt-near-intro{
        max-width:760px;
    }

    #idt-nearby-clean .idt-near-feature{
        grid-template-columns:1fr;

        min-height:0;
    }

    #idt-nearby-clean .idt-near-feature-image{
        min-height:350px;
    }

    #idt-nearby-clean .idt-near-feature-copy{
        padding:28px;
    }

    #idt-nearby-clean .idt-near-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));
    }

    #idt-nearby-clean .idt-near-item:last-child{
        grid-column:1 / -1;

        width:calc(50% - 10px);

        justify-self:center;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-nearby-clean{
        padding:42px 15px 44px;
    }

    #idt-nearby-clean .idt-near-intro{
        font-size:15px;
        line-height:1.7;
    }

    #idt-nearby-clean .idt-near-feature-image{
        min-height:300px;
    }

    #idt-nearby-clean .idt-near-feature-copy{
        padding:24px 21px;
    }

    #idt-nearby-clean .idt-near-feature h3{
        font-size:22px;
    }

    #idt-nearby-clean .idt-near-feature p{
        font-size:15px;
    }

    #idt-nearby-clean .idt-near-grid{
        grid-template-columns:1fr;
    }

    #idt-nearby-clean .idt-near-item:last-child{
        grid-column:auto;

        width:100%;
    }

    #idt-nearby-clean .idt-near-item-image{
        height:245px;
    }

    #idt-nearby-clean .idt-near-bottom{
        flex-direction:column;

        align-items:flex-start;

        gap:7px;
    }

    #idt-nearby-clean .idt-near-bottom-right{
        max-width:none;

        text-align:left;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-nearby-clean{
        padding:38px 13px 40px;
    }

    #idt-nearby-clean .idt-near-feature-image{
        min-height:250px;
    }

    #idt-nearby-clean .idt-near-feature-copy{
        padding:21px 17px;
    }

    #idt-nearby-clean .idt-near-feature h3{
        font-size:20px;
    }

    #idt-nearby-clean .idt-near-feature p{
        font-size:14.5px;
    }

    #idt-nearby-clean .idt-near-item-image{
        height:220px;
    }

    #idt-nearby-clean .idt-near-item-copy{
        padding:18px 17px 20px;
    }

    #idt-nearby-clean .idt-near-item h3{
        font-size:18px;
    }

    #idt-nearby-clean .idt-near-item p{
        font-size:14.5px;
    }

}

@media(max-width:360px){

    #idt-nearby-clean{
        padding:36px 10px 38px;
    }

}

</style>


<section id="idt-nearby-clean">

    <div class="idt-near-wrap">


        <!-- HEADER -->

        <div class="idt-near-head">

            <div>

                <p class="idt-near-script">
                    Discover More of Agra
                </p>

                <h2 class="idt-near-title">
                    Places to Visit Near the Taj Mahal
                </h2>

                <div
                    class="idt-near-accent"
                    aria-hidden="true">
                </div>

            </div>


            <p class="idt-near-intro">
                Explore more of Agra beyond the Taj Mahal with a selection of important Mughal landmarks, scenic viewpoints and heritage experiences that can fit naturally into your itinerary.
            </p>

        </div>


        <!-- MAIN FEATURE -->

        <article class="idt-near-feature">

            <div class="idt-near-feature-image">

                <img
                    src="https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=1500&q=90"
                    alt="Agra Fort"
                    loading="lazy"
                    onerror="this.src='https://indiadaytrip.com/assets/img/about/about-taj.webp';"
                >

            </div>


            <div class="idt-near-feature-copy">

                <p class="idt-near-eyebrow">
                    Mughal Heritage
                </p>

                <h3>
                    Agra Fort
                </h3>

                <p>
                    Explore one of Agra’s most important Mughal landmarks, known for its impressive red sandstone architecture, royal courtyards and historic palaces. It is one of the easiest attractions to combine with a Taj Mahal visit.
                </p>

            </div>

        </article>


        <!-- SECONDARY ATTRACTIONS -->

        <div class="idt-near-grid">


            <!-- ITEM 1 -->

            <article class="idt-near-item">

                <div class="idt-near-item-image">

                    <img
                        src="https://images.unsplash.com/photo-1602642977157-b7c8b8003afd?auto=format&fit=crop&w=1000&q=90"
                        alt="Mehtab Bagh"
                        loading="lazy"
                        onerror="this.src='https://indiadaytrip.com/assets/img/about/about-taj.webp';"
                    >

                </div>

                <div class="idt-near-item-copy">

                    <span class="idt-near-item-tag">
                        Riverside Garden
                    </span>

                    <h3>
                        Mehtab Bagh
                    </h3>

                    <p>
                        Visit the peaceful Mughal garden across the Yamuna River for a different and scenic view of the Taj Mahal.
                    </p>

                </div>

            </article>


            <!-- ITEM 2 -->

            <article class="idt-near-item">

                <div class="idt-near-item-image">

                    <img
                        src="https://indiadaytrip.com/assets/img/about/about-golden.webp"
                        alt="Fatehpur Sikri"
                        loading="lazy"
                        onerror="this.src='https://indiadaytrip.com/assets/img/about/about-taj.webp';"
                    >

                </div>

                <div class="idt-near-item-copy">

                    <span class="idt-near-item-tag">
                        Historic Mughal City
                    </span>

                    <h3>
                        Fatehpur Sikri
                    </h3>

                    <p>
                        Discover the former Mughal capital with its grand gateways, courtyards and beautifully preserved historic architecture.
                    </p>

                </div>

            </article>


            <!-- ITEM 3 -->

            <article class="idt-near-item">

                <div class="idt-near-item-image">

                    <img
                        src="https://images.unsplash.com/photo-1524307877635-1a31e1a427d3?auto=format&fit=crop&w=1000&q=90"
                        alt="Agra heritage experience"
                        loading="lazy"
                        onerror="this.src='https://indiadaytrip.com/assets/img/about/about-taj.webp';"
                    >

                </div>

                <div class="idt-near-item-copy">

                    <span class="idt-near-item-tag">
                        Local Experience
                    </span>

                    <h3>
                        Agra Heritage
                    </h3>

                    <p>
                        Explore traditional craftsmanship, local neighbourhoods and cultural experiences beyond Agra’s major monuments.
                    </p>

                </div>

            </article>


        </div>


        <!-- BOTTOM NOTE -->

        <div class="idt-near-bottom">

            <div class="idt-near-bottom-left">

                <svg viewBox="0 0 24 24">
                    <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                    <circle cx="12" cy="10" r="2.5"></circle>
                </svg>

                Add nearby attractions according to your available travel time.

            </div>


            <div class="idt-near-bottom-right">
                Your Agra sightseeing can be adjusted according to your selected tour and preferred pace.
            </div>

        </div>


    </div>

</section>