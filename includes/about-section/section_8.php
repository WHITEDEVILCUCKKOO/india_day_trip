<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP — ABOUT US
   SAFETY & TRANSPARENCY
   ONLY COLOR UPDATED
========================================================= */

#idt-safety-transparency,
#idt-safety-transparency *{
    box-sizing:border-box;
}

#idt-safety-transparency{
    --navy:#123B72;
    --cyan:#F2A23A;
    --text:#5E6F82;
    --soft:#F8F5EE;
    --soft2:#F4EFE5;
    --line:#E7DED0;
    --white:#ffffff;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:58px 24px;

    background:#F8F5EE;

    font-family:"Manrope",Arial,sans-serif;
}

#idt-safety-transparency::before{
    content:"";
    position:absolute;
    top:-180px;
    left:-170px;
    width:390px;
    height:390px;
    border-radius:50%;

    border:
        1px solid
        rgba(242,162,58,.13);

    pointer-events:none;
}

#idt-safety-transparency::after{
    content:"";
    position:absolute;

    right:28px;
    bottom:28px;

    width:100px;
    height:100px;

    opacity:.18;

    background-image:
        radial-gradient(
            circle,
            rgba(18,59,114,.42) 1.2px,
            transparent 1.3px
        );

    background-size:15px 15px;

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-safety-transparency .idt-safety-container{
    position:relative;
    z-index:2;

    width:1240px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   GRID
========================================================= */

#idt-safety-transparency .idt-safety-grid{
    display:grid;

    grid-template-columns:
        minmax(0,1.08fr)
        minmax(390px,.92fr);

    gap:64px;

    align-items:center;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#idt-safety-transparency .idt-safety-content{
    position:relative;
}


#idt-safety-transparency .idt-safety-line{
    display:flex;

    align-items:center;

    gap:8px;

    margin-bottom:16px;
}


#idt-safety-transparency .idt-safety-line span:first-child{
    width:48px;
    height:2px;

    background:
        linear-gradient(
            90deg,
            #123B72,
            #F2A23A
        );
}


#idt-safety-transparency .idt-safety-line span:last-child{
    width:5px;
    height:5px;

    background:#123B72;

    transform:rotate(45deg);
}


/* =========================================================
   HEADING
========================================================= */

#idt-safety-transparency .idt-safety-heading{
    max-width:700px;

    margin:0 0 25px;

    color:#123B72;

    font-size:42px;
    line-height:1.2;
    font-weight:700;

    letter-spacing:-1px;
}


/* =========================================================
   CONTENT
========================================================= */

#idt-safety-transparency .idt-safety-copy{
    display:flex;

    flex-direction:column;

    gap:18px;
}


#idt-safety-transparency .idt-safety-copy p{
    margin:0;

    color:#5E6F82;

    font-size:15.5px;
    line-height:1.82;
    font-weight:400;

    text-align:justify;
    text-justify:inter-word;
}


/* =========================================================
   RIGHT PANEL
========================================================= */

#idt-safety-transparency .idt-safety-panel{
    position:relative;

    padding:28px 26px;

    background:#ffffff;

    border:
        1px solid
        #E7DED0;

    border-radius:16px;

    box-shadow:
        0 14px 35px
        rgba(18,59,114,.07);
}


/* PANEL ACCENT */

#idt-safety-transparency .idt-safety-panel::before{
    content:"";

    position:absolute;

    top:0;
    left:24px;

    width:54px;
    height:3px;

    background:
        linear-gradient(
            90deg,
            #123B72,
            #F2A23A
        );
}


/* =========================================================
   ITEM
========================================================= */

#idt-safety-transparency .idt-safety-item{
    display:grid;

    grid-template-columns:50px 1fr;

    gap:16px;

    align-items:start;

    padding:18px 0;

    border-bottom:
        1px solid
        #EAE3D8;
}


#idt-safety-transparency .idt-safety-item:first-child{
    padding-top:6px;
}


#idt-safety-transparency .idt-safety-item:last-child{
    border-bottom:none;

    padding-bottom:2px;
}


/* =========================================================
   ICON
========================================================= */

#idt-safety-transparency .idt-safety-icon{
    width:44px;
    height:44px;

    display:flex;

    align-items:center;
    justify-content:center;

    color:#123B72;

    background:#EEF3F8;

    border-radius:10px;

    transition:
        transform .35s ease,
        background .35s ease,
        color .35s ease;
}


#idt-safety-transparency .idt-safety-icon svg{
    width:21px;
    height:21px;

    fill:none;

    stroke:currentColor;

    stroke-width:1.7;

    stroke-linecap:round;
    stroke-linejoin:round;
}


#idt-safety-transparency
.idt-safety-item:hover
.idt-safety-icon{
    transform:translateY(-3px);

    background:#123B72;

    color:#F2A23A;
}


/* =========================================================
   ITEM CONTENT
========================================================= */

#idt-safety-transparency .idt-safety-item h3{
    margin:0 0 5px;

    color:#123B72;

    font-size:15px;
    line-height:1.45;

    font-weight:700;
}


#idt-safety-transparency .idt-safety-item p{
    margin:0;

    color:#5E6F82;

    font-size:13px;
    line-height:1.65;

    font-weight:400;
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-safety-transparency{
        padding:54px 22px;
    }

    #idt-safety-transparency .idt-safety-container{
        width:1060px;
    }

    #idt-safety-transparency .idt-safety-grid{
        grid-template-columns:
            minmax(0,1fr)
            380px;

        gap:46px;
    }

    #idt-safety-transparency .idt-safety-heading{
        font-size:37px;
    }

    #idt-safety-transparency .idt-safety-copy p{
        font-size:15px;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px) and (min-width:768px){

    #idt-safety-transparency{
        padding:48px 22px;
    }

    #idt-safety-transparency .idt-safety-container{
        width:100%;
        max-width:900px;
    }

    #idt-safety-transparency .idt-safety-grid{
        grid-template-columns:
            minmax(0,1.08fr)
            minmax(285px,.92fr);

        gap:32px;
    }

    #idt-safety-transparency .idt-safety-heading{
        margin-bottom:18px;

        font-size:31px;
        line-height:1.22;

        letter-spacing:-.6px;
    }

    #idt-safety-transparency .idt-safety-copy{
        gap:13px;
    }

    #idt-safety-transparency .idt-safety-copy p{
        font-size:13.5px;
        line-height:1.68;
    }

    #idt-safety-transparency .idt-safety-panel{
        padding:20px 18px;

        border-radius:13px;
    }

    #idt-safety-transparency .idt-safety-item{
        grid-template-columns:40px 1fr;

        gap:11px;

        padding:13px 0;
    }

    #idt-safety-transparency .idt-safety-icon{
        width:36px;
        height:36px;

        border-radius:8px;
    }

    #idt-safety-transparency .idt-safety-icon svg{
        width:17px;
        height:17px;
    }

    #idt-safety-transparency .idt-safety-item h3{
        font-size:12.5px;
    }

    #idt-safety-transparency .idt-safety-item p{
        font-size:11px;
        line-height:1.55;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-safety-transparency{
        padding:44px 15px 48px;
    }

    #idt-safety-transparency .idt-safety-grid{
        display:flex;

        flex-direction:column;

        gap:30px;
    }

    #idt-safety-transparency .idt-safety-content{
        width:100%;

        text-align:center;
    }

    #idt-safety-transparency .idt-safety-line{
        justify-content:center;
    }

    #idt-safety-transparency .idt-safety-heading{
        max-width:620px;

        margin:
            0 auto 20px;

        font-size:29px;
        line-height:1.25;

        text-align:center;
    }

    #idt-safety-transparency .idt-safety-copy{
        max-width:650px;

        margin:0 auto;

        gap:15px;
    }

    #idt-safety-transparency .idt-safety-copy p{
        font-size:14.5px;
        line-height:1.72;

        text-align:center;
    }

    #idt-safety-transparency .idt-safety-panel{
        width:100%;
        max-width:560px;

        margin:0 auto;

        padding:21px 18px;

        text-align:left;
    }

    #idt-safety-transparency .idt-safety-item{
        grid-template-columns:44px 1fr;

        gap:13px;

        padding:14px 0;
    }

    #idt-safety-transparency .idt-safety-icon{
        width:40px;
        height:40px;
    }

    #idt-safety-transparency .idt-safety-item h3{
        font-size:13.5px;
    }

    #idt-safety-transparency .idt-safety-item p{
        font-size:12px;
        line-height:1.58;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-safety-transparency{
        padding:40px 12px 44px;
    }

    #idt-safety-transparency .idt-safety-heading{
        font-size:26px;
    }

    #idt-safety-transparency .idt-safety-copy p{
        font-size:14px;
        line-height:1.68;
    }

    #idt-safety-transparency .idt-safety-panel{
        padding:18px 14px;
    }

    #idt-safety-transparency .idt-safety-item{
        grid-template-columns:38px 1fr;

        gap:10px;
    }

    #idt-safety-transparency .idt-safety-icon{
        width:35px;
        height:35px;
    }

    #idt-safety-transparency .idt-safety-icon svg{
        width:16px;
        height:16px;
    }

    #idt-safety-transparency .idt-safety-item h3{
        font-size:12.5px;
    }

    #idt-safety-transparency .idt-safety-item p{
        font-size:11px;
    }
}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-safety-transparency{
        padding-left:10px;
        padding-right:10px;
    }

    #idt-safety-transparency .idt-safety-heading{
        font-size:24px;
    }

    #idt-safety-transparency .idt-safety-copy p{
        font-size:13.5px;
    }
}
</style>


<section id="idt-safety-transparency">

    <div class="idt-safety-container">

        <div class="idt-safety-grid">


            <!-- LEFT CONTENT -->

            <div class="idt-safety-content">

                <div
                    class="idt-safety-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>


                <h2 class="idt-safety-heading">
                    Safety at Every Step, Transparency in Every Detail
                </h2>


                <div class="idt-safety-copy">

                    <p>
                        Safety isn’t a sentence in a brochure for us; it’s a standard we check before every single trip. We review drivers' experience and driving records before pairing them with a guest. We plan routes so you don't waste time in traffic or backtracking. We choose hotels for location and quality, not just the lowest available rate.
                    </p>


                    <p>
                        Pricing for our Taj Mahal Tour Packages, Golden Triangle Tour Packages, and every other itinerary works the same way; you receive a clear quote before booking, covering transport, guides, and entry fees where applicable. If something isn’t included, we tell you upfront, not after you’ve already paid.
                    </p>


                    <p>
                        Many of our guests are visiting India for the very first time, and we plan with that in mind. Questions get answered before they turn into worries, and no one is left trying to figure things out alone in an unfamiliar country.
                    </p>

                </div>

            </div>



            <!-- RIGHT PANEL -->

            <div class="idt-safety-panel">


                <div class="idt-safety-item">

                    <div class="idt-safety-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M12 3L19 6V11C19 16 16 19 12 21C8 19 5 16 5 11V6L12 3Z"></path>
                            <path d="M9 12L11 14L15 10"></path>
                        </svg>

                    </div>


                    <div>

                        <h3>
                            Driver & Route Checks
                        </h3>

                        <p>
                            Experienced drivers and carefully planned routes before every journey.
                        </p>

                    </div>

                </div>



                <div class="idt-safety-item">

                    <div class="idt-safety-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 20V9L12 4L20 9V20"></path>
                            <path d="M8 20V14H16V20"></path>
                            <path d="M9 10H15"></path>
                        </svg>

                    </div>


                    <div>

                        <h3>
                            Hotel Quality
                        </h3>

                        <p>
                            Hotels chosen for location and quality, not simply the lowest rate.
                        </p>

                    </div>

                </div>



                <div class="idt-safety-item">

                    <div class="idt-safety-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M4 6H20"></path>
                            <path d="M4 12H20"></path>
                            <path d="M4 18H14"></path>
                            <path d="M17 16L20 19L17 22"></path>
                        </svg>

                    </div>


                    <div>

                        <h3>
                            Clear Pricing
                        </h3>

                        <p>
                            Clear inclusions and upfront information before you confirm your trip.
                        </p>

                    </div>

                </div>



                <div class="idt-safety-item">

                    <div class="idt-safety-icon">

                        <svg viewBox="0 0 24 24">
                            <path d="M5 5H19V16H9L5 20V5Z"></path>
                            <path d="M9 9H15"></path>
                            <path d="M9 12H13"></path>
                        </svg>

                    </div>


                    <div>

                        <h3>
                            Support for First-Time Visitors
                        </h3>

                        <p>
                            Questions are handled early so your first journey through India feels easier.
                        </p>

                    </div>

                </div>


            </div>


        </div>

    </div>

</section>