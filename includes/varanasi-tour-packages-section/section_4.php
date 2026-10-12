<!-- =========================================================
     INDIA DAY TRIP
     TAJ MAHAL TOUR PACKAGES
     SECTION 03 — ABOUT EACH TAJ MAHAL PACKAGE
     ICON VERSION — NO SERIAL NUMBERS
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin">

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-taj-package-details,
#idt-taj-package-details *{
    box-sizing:border-box;
}

#idt-taj-package-details{

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

#idt-taj-package-details .idt-pd-container{
    width:100%;
    max-width:1180px;
    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-taj-package-details .idt-pd-head{
    max-width:720px;
    margin:0 auto 38px;
    text-align:center;
}

#idt-taj-package-details .idt-pd-script{
    margin:0 0 6px;
    color:var(--blue);
    font-family:"Montez",cursive;
    font-size:31px;
    line-height:1;
    font-weight:400;
}

#idt-taj-package-details .idt-pd-title{
    margin:0;
    color:var(--navy);
    font-family:"Playfair Display",Georgia,serif;
    font-size:34px;
    line-height:1.2;
    font-weight:700;
    letter-spacing:-.5px;
}

#idt-taj-package-details .idt-pd-accent{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:7px;
    margin:14px auto 0;
}

#idt-taj-package-details .idt-pd-accent::before{
    content:"";
    width:50px;
    height:2px;
    border-radius:20px;
    background:linear-gradient(90deg,var(--blue),var(--orange));
}

#idt-taj-package-details .idt-pd-accent::after{
    content:"";
    width:6px;
    height:6px;
    background:var(--orange);
    transform:rotate(45deg);
}

#idt-taj-package-details .idt-pd-lead{
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

#idt-taj-package-details .idt-pd-grid{
    display:grid;
    grid-template-columns:repeat(2,minmax(0,1fr));
    gap:19px;
}


/* =========================================================
   CARD
========================================================= */

#idt-taj-package-details .idt-pd-card{

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

#idt-taj-package-details .idt-pd-card:hover{
    transform:translateY(-4px);
    border-color:rgba(46,96,149,.20);
    box-shadow:0 16px 34px rgba(12,45,98,.10);
}


/* =========================================================
   SIDE ACCENT
========================================================= */

#idt-taj-package-details .idt-pd-card::before{
    content:"";
    position:absolute;
    left:0;
    top:24px;
    width:3px;
    height:54px;
    border-radius:0 5px 5px 0;
    background:var(--blue);
}

#idt-taj-package-details .idt-pd-card:nth-child(even)::before{
    background:var(--orange);
}


/* =========================================================
   TOP ROW
========================================================= */

#idt-taj-package-details .idt-pd-top{
    display:flex;
    align-items:flex-start;
    gap:15px;
}


/* =========================================================
   ICON BOX
========================================================= */

#idt-taj-package-details .idt-pd-icon{

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

#idt-taj-package-details .idt-pd-card:nth-child(even) .idt-pd-icon{
    background:#FFF1E8;
    color:var(--orange);
}

#idt-taj-package-details .idt-pd-icon svg{
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

#idt-taj-package-details .idt-pd-content{
    flex:1;
    min-width:0;
}

#idt-taj-package-details .idt-pd-card-title{
    margin:0 0 6px;
    color:var(--navy);
    font-family:"Manrope",Arial,sans-serif;
    font-size:20px;
    line-height:1.35;
    font-weight:800;
    letter-spacing:-.3px;
}

#idt-taj-package-details .idt-pd-text{
    margin:0;
    color:var(--text);
    font-size:15px;
    line-height:1.72;
    font-weight:400;
}


/* =========================================================
   TAGS
========================================================= */

#idt-taj-package-details .idt-pd-tags{
    display:flex;
    align-items:center;
    flex-wrap:wrap;
    gap:7px;
    margin-top:17px;
}

#idt-taj-package-details .idt-pd-tag{
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

#idt-taj-package-details .idt-pd-tag.orange{
    background:#FFF2EA;
    color:var(--orange);
}


/* =========================================================
   BOTTOM
========================================================= */

#idt-taj-package-details .idt-pd-bottom{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:14px;
    margin-top:auto;
    padding-top:18px;
}

#idt-taj-package-details .idt-pd-note{
    display:flex;
    align-items:center;
    gap:7px;

    color:#788697;

    font-size:12.5px;
    line-height:1.4;
    font-weight:600;
}

#idt-taj-package-details .idt-pd-note svg{
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

#idt-taj-package-details .idt-pd-btn{
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

#idt-taj-package-details .idt-pd-btn:hover{
    transform:translateY(-2px);
    background:var(--blue);
    box-shadow:0 10px 20px rgba(12,45,98,.15);
}

#idt-taj-package-details .idt-pd-btn svg{
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

    #idt-taj-package-details{
        padding:62px 28px 64px;
    }

    #idt-taj-package-details .idt-pd-container{
        max-width:1060px;
    }

    #idt-taj-package-details .idt-pd-lead{
        font-size:15px;
    }

    #idt-taj-package-details .idt-pd-card-title{
        font-size:19px;
    }

    #idt-taj-package-details .idt-pd-text{
        font-size:14px;
    }

}

@media(max-width:991px){

    #idt-taj-package-details{
        padding:54px 20px 58px;
    }

    #idt-taj-package-details .idt-pd-grid{
        gap:16px;
    }

    #idt-taj-package-details .idt-pd-card{
        padding:21px;
    }

    #idt-taj-package-details .idt-pd-card-title{
        font-size:18px;
    }

    #idt-taj-package-details .idt-pd-text{
        font-size:13.5px;
    }

    #idt-taj-package-details .idt-pd-bottom{
        align-items:flex-start;
        flex-direction:column;
    }

}

@media(max-width:767px){

    #idt-taj-package-details{
        padding:48px 15px 52px;
    }

    #idt-taj-package-details .idt-pd-head{
        margin-bottom:30px;
    }

    #idt-taj-package-details .idt-pd-grid{
        grid-template-columns:1fr;
    }

    #idt-taj-package-details .idt-pd-card{
        width:100%;
        max-width:570px;
        margin:0 auto;
        padding:21px 19px;
    }

    #idt-taj-package-details .idt-pd-lead{
        font-size:14px;
        line-height:1.7;
    }

    #idt-taj-package-details .idt-pd-card-title{
        font-size:19px;
    }

    #idt-taj-package-details .idt-pd-text{
        font-size:13.5px;
    }

    #idt-taj-package-details .idt-pd-bottom{
        flex-direction:row;
        align-items:center;
    }

}

@media(max-width:430px){

    #idt-taj-package-details{
        padding:42px 13px 46px;
    }

    #idt-taj-package-details .idt-pd-card{
        padding:19px 16px;
    }

    #idt-taj-package-details .idt-pd-top{
        gap:11px;
    }

    #idt-taj-package-details .idt-pd-icon{
        width:42px;
        height:42px;
        flex-basis:42px;
    }

    #idt-taj-package-details .idt-pd-icon svg{
        width:21px;
        height:21px;
    }

    #idt-taj-package-details .idt-pd-card-title{
        font-size:18px;
    }

    #idt-taj-package-details .idt-pd-text{
        font-size:13px;
    }

    #idt-taj-package-details .idt-pd-bottom{
        flex-direction:column;
        align-items:flex-start;
    }

    #idt-taj-package-details .idt-pd-btn{
        width:100%;
    }

}

@media(max-width:360px){

    #idt-taj-package-details{
        padding:39px 10px 43px;
    }

    #idt-taj-package-details .idt-pd-top{
        flex-direction:column;
    }

}

</style>


<section id="idt-taj-package-details">

    <div class="idt-pd-container">


        <div class="idt-pd-head">

            <p class="idt-pd-script">
                Explore Every Option
            </p>

            <h2 class="idt-pd-title">
                About Each Taj Mahal Package
            </h2>

            <div class="idt-pd-accent" aria-hidden="true"></div>

            <p class="idt-pd-lead">
                Each Taj Mahal tour is designed around a different travel style, so you can choose between a quick same-day journey, an early sunrise visit, private sightseeing or a more relaxed overnight experience.
            </p>

        </div>


        <div class="idt-pd-grid">


            <!-- CARD 01 -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 18h18"></path>
                            <path d="M5 18V9h14v9"></path>
                            <path d="M7 9V6h10v3"></path>
                            <path d="M9 18v-5h6v5"></path>
                        </svg>
                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            Same Day Taj Mahal Tour from Delhi
                        </h3>

                        <p class="idt-pd-text">
                            Perfect for travellers with limited time. Leave Delhi in the morning, travel comfortably to Agra and explore the Taj Mahal and Agra Fort with a private local guide before returning the same evening.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">
                    <span class="idt-pd-tag">Private Car</span>
                    <span class="idt-pd-tag orange">Same Day</span>
                    <span class="idt-pd-tag">Local Guide</span>
                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 7v5l3 2"></path>
                        </svg>
                        Approx. 12 Hours
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


            <!-- CARD 02 -->

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
                            Taj Mahal Sunrise Tour from Delhi
                        </h3>

                        <p class="idt-pd-text">
                            Designed for travellers who want a peaceful early-morning experience. Arrive in Agra before sunrise and enjoy the Taj Mahal in softer light before continuing your guided sightseeing.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">
                    <span class="idt-pd-tag">Sunrise</span>
                    <span class="idt-pd-tag orange">Early Start</span>
                    <span class="idt-pd-tag">Private Tour</span>
                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 7v5l3 2"></path>
                        </svg>
                        Early Morning Tour
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


            <!-- CARD 03 -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 20V9l8-5 8 5v11"></path>
                            <path d="M8 20v-6h8v6"></path>
                            <path d="M9 10h6"></path>
                        </svg>
                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            Taj Mahal & Agra Fort Private Tour
                        </h3>

                        <p class="idt-pd-text">
                            Enjoy a flexible private sightseeing experience covering Agra’s two most iconic landmarks. Travel at a comfortable pace with personalised local assistance throughout the journey.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">
                    <span class="idt-pd-tag">Taj Mahal</span>
                    <span class="idt-pd-tag orange">Agra Fort</span>
                    <span class="idt-pd-tag">Flexible</span>
                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="2.4"></circle>
                        </svg>
                        Private Agra Sightseeing
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


            <!-- CARD 04 -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="5" y="3" width="14" height="15" rx="2"></rect>
                            <path d="M8 21l2-3"></path>
                            <path d="M16 21l-2-3"></path>
                            <path d="M8 7h8"></path>
                            <path d="M8 12h8"></path>
                        </svg>
                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            Taj Mahal Tour by Gatimaan Express
                        </h3>

                        <p class="idt-pd-text">
                            Travel between Delhi and Agra by express train for a fast and convenient journey. On arrival, continue your sightseeing with private transportation and a professional local guide.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">
                    <span class="idt-pd-tag">Express Train</span>
                    <span class="idt-pd-tag orange">Agra Pickup</span>
                    <span class="idt-pd-tag">Guided Tour</span>
                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">
                        <svg viewBox="0 0 24 24">
                            <rect x="5" y="3" width="14" height="15" rx="2"></rect>
                            <path d="M8 21l2-3"></path>
                            <path d="M16 21l-2-3"></path>
                        </svg>
                        Train + Private Car
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


            <!-- CARD 05 -->

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
                            Taj Mahal & Fatehpur Sikri Day Tour
                        </h3>

                        <p class="idt-pd-text">
                            Combine the Taj Mahal with the historic Mughal city of Fatehpur Sikri and discover more of the architecture, history and cultural heritage surrounding Agra.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">
                    <span class="idt-pd-tag">Heritage</span>
                    <span class="idt-pd-tag orange">Fatehpur Sikri</span>
                    <span class="idt-pd-tag">Full Day</span>
                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 7v5l3 2"></path>
                        </svg>
                        Full Day Heritage Tour
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


            <!-- CARD 06 -->

            <article class="idt-pd-card">

                <div class="idt-pd-top">

                    <div class="idt-pd-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 18V9"></path>
                            <path d="M20 18V9"></path>
                            <path d="M4 13h16"></path>
                            <path d="M6 9h5v4H6z"></path>
                            <path d="M4 18v2"></path>
                            <path d="M20 18v2"></path>
                        </svg>
                    </div>

                    <div class="idt-pd-content">

                        <h3 class="idt-pd-card-title">
                            Overnight Agra & Taj Mahal Tour
                        </h3>

                        <p class="idt-pd-text">
                            Spend more time in Agra with a relaxed overnight journey. Enjoy major monuments at a comfortable pace with additional opportunities to discover local heritage and city experiences.
                        </p>

                    </div>

                </div>


                <div class="idt-pd-tags">
                    <span class="idt-pd-tag">2 Days</span>
                    <span class="idt-pd-tag orange">Overnight</span>
                    <span class="idt-pd-tag">Relaxed Pace</span>
                </div>


                <div class="idt-pd-bottom">

                    <div class="idt-pd-note">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M12 7v5l3 2"></path>
                        </svg>
                        2 Day Journey
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