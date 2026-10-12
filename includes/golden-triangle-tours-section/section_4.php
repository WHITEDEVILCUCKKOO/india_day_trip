<!-- =========================================================
     INDIA DAY TRIP
     GOLDEN TRIANGLE TOUR PACKAGES
     SECTION 03 — ABOUT EACH GOLDEN TRIANGLE PACKAGE
     ICON VERSION — NO SERIAL NUMBERS
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin">

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-golden-package-details,
#idt-golden-package-details *{
    box-sizing:border-box;
}

#idt-golden-package-details{

    --navy:#0C2D62;
    --blue:#123B72;
    --mid:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --text:#5F6D7E;
    --white:#FFFFFF;

    position:relative;
    width:100%;
    max-width:100%;
    overflow:hidden;

    padding:70px 24px 72px;

    background:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-golden-package-details .idt-pd-container{
    width:100%;
    max-width:1180px;
    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-golden-package-details .idt-pd-head{
    max-width:720px;
    margin:0 auto 38px;
    text-align:center;
}

#idt-golden-package-details .idt-pd-script{
    margin:0 0 6px;
    color:var(--blue);
    font-family:"Montez",cursive;
    font-size:31px;
    line-height:1;
    font-weight:400;
}

#idt-golden-package-details .idt-pd-title{
    margin:0;
    color:var(--navy);
    font-family:"Playfair Display",Georgia,serif;
    font-size:34px;
    line-height:1.2;
    font-weight:700;
    letter-spacing:-.5px;
}

#idt-golden-package-details .idt-pd-accent{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:7px;
    margin:14px auto 0;
}

#idt-golden-package-details .idt-pd-accent::before{
    content:"";
    width:50px;
    height:2px;
    border-radius:20px;
    background:linear-gradient(90deg,var(--blue),var(--orange));
}

#idt-golden-package-details .idt-pd-accent::after{
    content:"";
    width:6px;
    height:6px;
    background:var(--orange);
    transform:rotate(45deg);
}

#idt-golden-package-details .idt-pd-lead{
    max-width:680px;
    margin:14px auto 0;
    color:var(--text);
    font-size:16px;
    line-height:1.72;
    font-weight:400;
}


/* =========================================================
   GRID
========================================================= */

#idt-golden-package-details .idt-pd-grid{
    display:grid;
    grid-template-columns:repeat(2,minmax(0,1fr));
    gap:19px;
}


/* =========================================================
   CARD
========================================================= */

#idt-golden-package-details .idt-pd-card{

    position:relative;

    display:flex;
    flex-direction:column;

    min-height:100%;

    padding:24px 24px 22px;

    overflow:hidden;

    border:1px solid rgba(12,45,98,.10);
    border-radius:8px;

    background:#FFFFFF;

    box-shadow:
        0 8px 24px
        rgba(12,45,98,.05);

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        border-color .35s ease;
}

#idt-golden-package-details .idt-pd-card:hover{
    transform:translateY(-4px);
    border-color:rgba(46,96,149,.20);
    box-shadow:0 16px 34px rgba(12,45,98,.10);
}


/* =========================================================
   SIDE ACCENT
========================================================= */

#idt-golden-package-details .idt-pd-card::before{
    content:"";
    position:absolute;
    left:0;
    top:24px;
    width:3px;
    height:54px;
    border-radius:0 5px 5px 0;
    background:var(--blue);
}

#idt-golden-package-details .idt-pd-card:nth-child(even)::before{
    background:var(--orange);
}


/* =========================================================
   TOP ROW
========================================================= */

#idt-golden-package-details .idt-pd-top{
    display:flex;
    align-items:flex-start;
    gap:15px;
}


/* =========================================================
   ICON BOX
========================================================= */

#idt-golden-package-details .idt-pd-icon{

    display:flex;
    align-items:center;
    justify-content:center;

    width:48px;
    height:48px;

    flex:0 0 48px;

    border-radius:10px;

    background:#EFF5FB;
    color:var(--blue);
}

#idt-golden-package-details .idt-pd-card:nth-child(even) .idt-pd-icon{
    background:#FFF1E8;
    color:var(--orange);
}

#idt-golden-package-details .idt-pd-icon svg{
    width:24px;
    height:24px;

    fill:none;
    stroke:currentColor;
    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   CONTENT
========================================================= */

#idt-golden-package-details .idt-pd-content{
    flex:1;
    min-width:0;
}

#idt-golden-package-details .idt-pd-card-title{
    margin:0 0 6px;
    color:var(--navy);
    font-family:"Manrope",Arial,sans-serif;
    font-size:20px;
    line-height:1.35;
    font-weight:800;
    letter-spacing:-.3px;
}

#idt-golden-package-details .idt-pd-text{
    margin:0;
    color:var(--text);
    font-size:15px;
    line-height:1.72;
    font-weight:400;
}


/* =========================================================
   TAGS
========================================================= */

#idt-golden-package-details .idt-pd-tags{
    display:flex;
    align-items:center;
    flex-wrap:wrap;
    gap:7px;
    margin-top:17px;
}

#idt-golden-package-details .idt-pd-tag{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-height:29px;

    padding:6px 9px;

    border-radius:4px;

    background:#F1F6FB;
    color:var(--blue);

    font-size:12px;
    line-height:1.2;
    font-weight:700;
}

#idt-golden-package-details .idt-pd-tag.orange{
    background:#FFF2EA;
    color:var(--orange);
}


/* =========================================================
   BOTTOM
========================================================= */

#idt-golden-package-details .idt-pd-bottom{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:14px;
    margin-top:auto;
    padding-top:18px;
}

#idt-golden-package-details .idt-pd-note{
    display:flex;
    align-items:center;
    gap:7px;

    color:#788697;

    font-size:12.5px;
    line-height:1.4;
    font-weight:600;
}

#idt-golden-package-details .idt-pd-note svg{
    width:16px;
    height:16px;
    flex:0 0 16px;

    fill:none;
    stroke:var(--blue);
    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   BUTTON
========================================================= */

#idt-golden-package-details .idt-pd-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:7px;

    min-height:40px;

    padding:10px 14px;

    border-radius:5px;

    background:var(--navy);
    color:#FFFFFF !important;

    text-decoration:none !important;

    font-size:12.5px;
    line-height:1;
    font-weight:700;

    white-space:nowrap;

    transition:
        transform .3s ease,
        background .3s ease,
        box-shadow .3s ease;
}

#idt-golden-package-details .idt-pd-btn:hover{
    transform:translateY(-2px);
    background:var(--blue);
    box-shadow:0 10px 20px rgba(12,45,98,.15);
}

#idt-golden-package-details .idt-pd-btn svg{
    width:15px;
    height:15px;

    fill:none;
    stroke:currentColor;
    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:1200px){

    #idt-golden-package-details{
        padding:62px 28px 64px;
    }

    #idt-golden-package-details .idt-pd-container{
        max-width:1060px;
    }

    #idt-golden-package-details .idt-pd-lead{
        font-size:15px;
    }

    #idt-golden-package-details .idt-pd-card-title{
        font-size:19px;
    }

    #idt-golden-package-details .idt-pd-text{
        font-size:14px;
    }

}


@media(max-width:991px){

    #idt-golden-package-details{
        padding:54px 20px 58px;
    }

    #idt-golden-package-details .idt-pd-grid{
        gap:16px;
    }

    #idt-golden-package-details .idt-pd-card{
        padding:21px;
    }

    #idt-golden-package-details .idt-pd-card-title{
        font-size:18px;
    }

    #idt-golden-package-details .idt-pd-text{
        font-size:13.5px;
    }

    #idt-golden-package-details .idt-pd-bottom{
        align-items:flex-start;
        flex-direction:column;
    }

}


@media(max-width:767px){

    #idt-golden-package-details{
        padding:48px 15px 52px;
    }

    #idt-golden-package-details .idt-pd-head{
        margin-bottom:30px;
    }

    #idt-golden-package-details .idt-pd-script{
        font-size:28px;
    }

    #idt-golden-package-details .idt-pd-title{
        font-size:29px;
        line-height:1.22;
    }

    #idt-golden-package-details .idt-pd-grid{
        grid-template-columns:1fr;
    }

    #idt-golden-package-details .idt-pd-card{
        width:100%;
        max-width:570px;
        margin:0 auto;
        padding:21px 19px;
    }

    #idt-golden-package-details .idt-pd-lead{
        font-size:14px;
        line-height:1.7;
    }

    #idt-golden-package-details .idt-pd-card-title{
        font-size:19px;
    }

    #idt-golden-package-details .idt-pd-text{
        font-size:13.5px;
    }

    #idt-golden-package-details .idt-pd-bottom{
        flex-direction:row;
        align-items:center;
    }

}


@media(max-width:430px){

    #idt-golden-package-details{
        padding:42px 13px 46px;
    }

    #idt-golden-package-details .idt-pd-script{
        font-size:26px;
    }

    #idt-golden-package-details .idt-pd-title{
        font-size:27px;
    }

    #idt-golden-package-details .idt-pd-card{
        padding:19px 16px;
    }

    #idt-golden-package-details .idt-pd-top{
        gap:11px;
    }

    #idt-golden-package-details .idt-pd-icon{
        width:42px;
        height:42px;
        flex-basis:42px;
    }

    #idt-golden-package-details .idt-pd-icon svg{
        width:21px;
        height:21px;
    }

    #idt-golden-package-details .idt-pd-card-title{
        font-size:18px;
    }

    #idt-golden-package-details .idt-pd-text{
        font-size:13px;
    }

    #idt-golden-package-details .idt-pd-bottom{
        flex-direction:column;
        align-items:flex-start;
    }

    #idt-golden-package-details .idt-pd-btn{
        width:100%;
    }

}


@media(max-width:360px){

    #idt-golden-package-details{
        padding:39px 10px 43px;
    }

    #idt-golden-package-details .idt-pd-script{
        font-size:25px;
    }

    #idt-golden-package-details .idt-pd-title{
        font-size:25px;
    }

    #idt-golden-package-details .idt-pd-top{
        flex-direction:column;
    }

}

</style>


<section id="idt-golden-package-details">

    <div class="idt-pd-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-pd-head">

            <p class="idt-pd-script">
                Explore Every Option
            </p>

            <h2 class="idt-pd-title">
                About Each Golden Triangle Package
            </h2>

            <div class="idt-pd-accent" aria-hidden="true"></div>

            <p class="idt-pd-lead">
                Each Golden Triangle itinerary offers a different travel pace and experience, so you can choose the journey that best suits your available time, sightseeing preferences and travel style.
            </p>

        </div>


        <!-- =================================================
             GRID
        ================================================== -->

        <div class="idt-pd-grid">


            <!-- =================================================
                 CARD 01
            ================================================== -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">

                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 7v5l3 2"></path>
                            <path d="M8 3h8"></path>
                        </svg>

                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            3 Days Golden Triangle Tour
                        </h3>

                        <p class="idt-pd-text">
                            Ideal for travellers with limited time. Explore the key highlights of Delhi, Agra and Jaipur in a compact private journey covering the essential heritage and cultural experiences of all three cities.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">

                    <span class="idt-pd-tag">
                        3 Days
                    </span>

                    <span class="idt-pd-tag orange">
                        Compact Journey
                    </span>

                    <span class="idt-pd-tag">
                        Private Tour
                    </span>

                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">

                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s7-5.2 7-12a7 7 0 1 0-14 0c0 6.8 7 12 7 12Z"></path>
                            <circle cx="12" cy="9" r="2"></circle>
                        </svg>

                        Delhi → Agra → Jaipur

                    </div>


                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pd-btn">

                        View Tour

                        <svg viewBox="0 0 24 24">
                            <path d="M7 17 17 7"></path>
                            <path d="M7 7h10v10"></path>
                        </svg>

                    </a>

                </div>

            </article>


            <!-- =================================================
                 CARD 02
            ================================================== -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M5 17h14"></path>
                            <path d="M4 12l2-5h12l2 5"></path>
                            <path d="M3 12h18v5H3z"></path>
                            <circle cx="7" cy="17" r="1"></circle>
                            <circle cx="17" cy="17" r="1"></circle>
                        </svg>

                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            4 Days Golden Triangle Tour
                        </h3>

                        <p class="idt-pd-text">
                            A balanced itinerary for travellers who want more sightseeing time without making the journey too long. Enjoy Delhi, Agra and Jaipur with a comfortable private travel schedule.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">

                    <span class="idt-pd-tag">
                        4 Days
                    </span>

                    <span class="idt-pd-tag orange">
                        Balanced Pace
                    </span>

                    <span class="idt-pd-tag">
                        Private Car
                    </span>

                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">

                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 7v5l3 2"></path>
                        </svg>

                        Comfortable Travel Pace

                    </div>


                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pd-btn">

                        View Tour

                        <svg viewBox="0 0 24 24">
                            <path d="M7 17 17 7"></path>
                            <path d="M7 7h10v10"></path>
                        </svg>

                    </a>

                </div>

            </article>


            <!-- =================================================
                 CARD 03
            ================================================== -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 7h10"></path>
                            <path d="M18 7h2"></path>
                            <circle cx="16" cy="7" r="2"></circle>
                            <path d="M4 17h2"></path>
                            <path d="M10 17h10"></path>
                            <circle cx="8" cy="17" r="2"></circle>
                        </svg>

                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            5 Days Golden Triangle Tour
                        </h3>

                        <p class="idt-pd-text">
                            Designed for travellers who prefer a more relaxed pace. Spend additional time discovering monuments, local culture and city experiences without feeling rushed between destinations.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">

                    <span class="idt-pd-tag">
                        5 Days
                    </span>

                    <span class="idt-pd-tag orange">
                        Relaxed Pace
                    </span>

                    <span class="idt-pd-tag">
                        Flexible
                    </span>

                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 7h10"></path>
                            <path d="M18 7h2"></path>
                            <circle cx="16" cy="7" r="2"></circle>
                            <path d="M4 17h2"></path>
                            <path d="M10 17h10"></path>
                            <circle cx="8" cy="17" r="2"></circle>
                        </svg>

                        Flexible Sightseeing

                    </div>


                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pd-btn">

                        View Tour

                        <svg viewBox="0 0 24 24">
                            <path d="M7 17 17 7"></path>
                            <path d="M7 7h10v10"></path>
                        </svg>

                    </a>

                </div>

            </article>


            <!-- =================================================
                 CARD 04
            ================================================== -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">

                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="13" r="4"></circle>
                            <path d="M12 2v3"></path>
                            <path d="M4.5 5.5 7 8"></path>
                            <path d="M19.5 5.5 17 8"></path>
                            <path d="M2 13h3"></path>
                            <path d="M19 13h3"></path>
                            <path d="M5 20h14"></path>
                        </svg>

                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            Golden Triangle with Sunrise Taj Mahal
                        </h3>

                        <p class="idt-pd-text">
                            Experience the Taj Mahal in the peaceful early morning while following the classic Delhi, Agra and Jaipur route for a memorable combination of heritage and iconic sightseeing.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">

                    <span class="idt-pd-tag">
                        Sunrise
                    </span>

                    <span class="idt-pd-tag orange">
                        Taj Mahal
                    </span>

                    <span class="idt-pd-tag">
                        Private Tour
                    </span>

                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">

                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="13" r="4"></circle>
                            <path d="M12 2v3"></path>
                            <path d="M5 20h14"></path>
                        </svg>

                        Sunrise Taj Experience

                    </div>


                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pd-btn">

                        View Tour

                        <svg viewBox="0 0 24 24">
                            <path d="M7 17 17 7"></path>
                            <path d="M7 7h10v10"></path>
                        </svg>

                    </a>

                </div>

            </article>


            <!-- =================================================
                 CARD 05
            ================================================== -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M3 20h18"></path>
                            <path d="M5 20V8h14v12"></path>
                            <path d="M8 8V5h8v3"></path>
                            <path d="M9 12h6"></path>
                        </svg>

                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            Golden Triangle with Fatehpur Sikri
                        </h3>

                        <p class="idt-pd-text">
                            Add Fatehpur Sikri to your Golden Triangle journey and discover another important Mughal heritage destination while travelling between Agra and Jaipur.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">

                    <span class="idt-pd-tag">
                        Heritage
                    </span>

                    <span class="idt-pd-tag orange">
                        Fatehpur Sikri
                    </span>

                    <span class="idt-pd-tag">
                        Extra Stop
                    </span>

                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">

                        <svg viewBox="0 0 24 24">
                            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="2.4"></circle>
                        </svg>

                        Agra → Fatehpur Sikri → Jaipur

                    </div>


                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pd-btn">

                        View Tour

                        <svg viewBox="0 0 24 24">
                            <path d="M7 17 17 7"></path>
                            <path d="M7 7h10v10"></path>
                        </svg>

                    </a>

                </div>

            </article>


            <!-- =================================================
                 CARD 06
            ================================================== -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 7h10"></path>
                            <path d="M18 7h2"></path>
                            <circle cx="16" cy="7" r="2"></circle>
                            <path d="M4 17h2"></path>
                            <path d="M10 17h10"></path>
                            <circle cx="8" cy="17" r="2"></circle>
                        </svg>

                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            Custom Golden Triangle Tour
                        </h3>

                        <p class="idt-pd-text">
                            Create a personalised Golden Triangle itinerary around your travel dates, preferred pace, sightseeing interests and any additional destinations you would like to include.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">

                    <span class="idt-pd-tag">
                        Personalised
                    </span>

                    <span class="idt-pd-tag orange">
                        Custom Route
                    </span>

                    <span class="idt-pd-tag">
                        Flexible Dates
                    </span>

                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 7h10"></path>
                            <path d="M18 7h2"></path>
                            <circle cx="16" cy="7" r="2"></circle>
                            <path d="M4 17h2"></path>
                            <path d="M10 17h10"></path>
                            <circle cx="8" cy="17" r="2"></circle>
                        </svg>

                        Built Around Your Plans

                    </div>


                    <a
                        href="https://wa.me/918126052755"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="idt-pd-btn">

                        View Tour

                        <svg viewBox="0 0 24 24">
                            <path d="M7 17 17 7"></path>
                            <path d="M7 7h10v10"></path>
                        </svg>

                    </a>

                </div>

            </article>


        </div>

    </div>

</section>