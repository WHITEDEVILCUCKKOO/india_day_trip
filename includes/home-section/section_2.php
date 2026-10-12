<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
#idt-about-final,
#idt-about-final *{
    box-sizing:border-box;
}

#idt-about-final{
    --idt-bg:#ffffff;
    --idt-soft:#FCFAF6;
    --idt-primary:#0C2D62;
    --idt-navy:#0C2D62;
    --idt-text:#5F7182;
    --idt-border:#D8E0EA;
    --idt-check-bg:#F3F6FA;

    position:relative;
    width:100%;
    overflow:visible;
    isolation:isolate;

    padding:34px 24px 64px;

    background:
        radial-gradient(
            circle at 3% 25%,
            rgba(12,45,98,.07) 0,
            rgba(12,45,98,.022) 150px,
            transparent 310px
        ),
        radial-gradient(
            circle at 98% 78%,
            rgba(12,45,98,.06) 0,
            rgba(12,45,98,.02) 165px,
            transparent 325px
        ),
        #fff;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   DOT BACKGROUND
========================================================= */

#idt-about-final::before{
    content:"";
    position:absolute;
    inset:0;
    z-index:-3;
    pointer-events:none;

    background-image:
        radial-gradient(
            circle,
            rgba(12,45,98,.11) 1px,
            transparent 1.4px
        );

    background-size:20px 20px;
    opacity:.50;

    -webkit-mask-image:
        linear-gradient(
            to right,
            #000 0%,
            #000 19%,
            transparent 39%,
            transparent 61%,
            #000 82%,
            #000 100%
        );

    mask-image:
        linear-gradient(
            to right,
            #000 0%,
            #000 19%,
            transparent 39%,
            transparent 61%,
            #000 82%,
            #000 100%
        );
}


/* =========================================================
   MAIN CONTAINER
========================================================= */

#idt-about-final .idt-about-container{
    position:relative;
    z-index:5;

    width:1280px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   DECORATIONS
========================================================= */

#idt-about-final .idt-decoration{
    position:absolute;
    pointer-events:none;
    user-select:none;
    z-index:-1;
}

#idt-about-final .idt-orb-left{
    width:270px;
    height:270px;
    left:-155px;
    top:145px;

    border:2px solid rgba(12,45,98,.11);
    border-radius:50%;
}

#idt-about-final .idt-orb-left::after{
    content:"";
    position:absolute;
    inset:34px;

    border:1px dashed rgba(12,45,98,.12);
    border-radius:50%;
}

#idt-about-final .idt-orb-right{
    width:340px;
    height:340px;
    right:-205px;
    bottom:20px;

    border:2px solid rgba(12,45,98,.10);
    border-radius:50%;
}

#idt-about-final .idt-orb-right::after{
    content:"";
    position:absolute;
    inset:40px;

    border:1px dashed rgba(12,45,98,.12);
    border-radius:50%;
}


/* =========================================================
   ROUTE
========================================================= */

#idt-about-final .idt-route{
    width:560px;
    height:310px;

    right:-60px;
    top:90px;

    color:#0C2D62;

    opacity:.15;

    transform:rotate(-4deg);
}

#idt-about-final .idt-route svg{
    width:100%;
    height:100%;
    display:block;
}

#idt-about-final .idt-route path{
    fill:none;
    stroke:currentColor;
    stroke-width:2.2;
    stroke-dasharray:7 9;
}

#idt-about-final .idt-route circle{
    fill:#0C2D62;
    stroke:#fff;
    stroke-width:4;
}


/* =========================================================
   COMPASS
========================================================= */

#idt-about-final .idt-compass{
    width:90px;
    height:90px;

    left:10px;
    bottom:65px;

    color:#0C2D62;

    opacity:.13;

    transform:rotate(-12deg);
}

#idt-about-final .idt-compass svg{
    width:100%;
    height:100%;
}

#idt-about-final .idt-compass circle,
#idt-about-final .idt-compass path{
    fill:none;
    stroke:currentColor;
    stroke-width:2;
}


/* =========================================================
   HEADING
========================================================= */

#idt-about-final .idt-heading-area{
    position:relative;
    z-index:4;

    text-align:center;

    margin:0 auto 42px;
}

#idt-about-final .idt-script-title{
    margin:0;

    color:#0C2D62;

    font-family:"Montez",cursive;

    font-size:37px;
    line-height:1.05;
    font-weight:400;
}

#idt-about-final .idt-small-line{
    display:block;

    width:55px;
    height:2px;

    margin:11px auto 0;

    background:#FF5D00;
}

#idt-about-final .idt-large-line{
    display:block;

    width:68px;
    height:3px;

    margin:20px auto 26px;

    background:#FF5D00;
}

#idt-about-final .idt-main-heading{
    max-width:940px;

    margin:0 auto;

    color:#0C2D62;

    font-family:"Playfair Display",Georgia,serif;

    font-size:42px;
    line-height:1.16;
    font-weight:600;

    letter-spacing:-.55px;
}

#idt-about-final .idt-main-heading span{
    color:#0C2D62;
}


/* =========================================================
   MAIN CONTENT GRID
========================================================= */

#idt-about-final .idt-content-grid{
    position:relative;

    display:grid;

    grid-template-columns:
        minmax(0,.95fr)
        minmax(470px,1.05fr);

    gap:52px;

    align-items:start;
}


/* =========================================================
   LEFT COLUMN
========================================================= */

#idt-about-final .idt-text-column{
    position:relative;
    z-index:3;
}


/* =========================================================
   COPY
========================================================= */

#idt-about-final .idt-copy{
    display:flex;
    flex-direction:column;

    gap:16px;

    margin:0 0 25px;
}

#idt-about-final .idt-copy p{
    max-width:680px;

    margin:0;

    color:#526779;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:16.5px;
    line-height:1.82;
    font-weight:400;

    letter-spacing:.01em;

    text-align:justify;
    text-justify:inter-word;
}

#idt-about-final .idt-copy a{
    color:#0C2D62 !important;

    font-weight:700;

    text-decoration:none !important;

    border-bottom:
        1px solid rgba(255,93,0,.38);

    transition:
        color .25s ease,
        border-color .25s ease;
}

#idt-about-final .idt-copy a:hover{
    color:#FF5D00 !important;
    border-color:#FF5D00;
}


/* =========================================================
   BENEFITS
========================================================= */

#idt-about-final .idt-benefits{
    display:flex;
    flex-wrap:wrap;

    gap:12px 22px;

    margin:0 0 27px;
    padding:0;

    list-style:none;
}

#idt-about-final .idt-benefit{
    display:flex;
    align-items:center;

    gap:7px;

    color:#0C2D62;

    font-family:"Manrope",Arial,sans-serif;

    font-size:12.5px;
    line-height:1.35;
    font-weight:600;

    white-space:nowrap;
}

#idt-about-final .idt-check{
    width:18px;
    height:18px;

    flex:0 0 18px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:#E5F7FC;
}

#idt-about-final .idt-check svg{
    width:9px;
    height:9px;

    fill:none;

    stroke:#0C2D62;
    stroke-width:3;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   CTA
========================================================= */

#idt-about-final .idt-about-btn{
    position:relative;

    display:inline-flex;
    align-items:center;
    justify-content:center;

    gap:8px;

    min-height:48px;

    padding:0 23px;

    overflow:hidden;

    isolation:isolate;

    border-radius:9px;

    background:#0C2D62;

    color:#fff !important;

    font-family:"Manrope",Arial,sans-serif;

    font-size:13px;
    line-height:1;
    font-weight:700;

    text-decoration:none !important;

    transition:
        transform .25s ease,
        color .25s ease;
}

#idt-about-final .idt-about-btn::before{
    content:"";

    position:absolute;
    inset:0;

    z-index:-1;

    background:#FF5D00;

    transform:translateX(-101%);

    transition:transform .4s ease;
}

#idt-about-final .idt-about-btn:hover::before{
    transform:translateX(0);
}

#idt-about-final .idt-about-btn:hover{
    color:#fff !important;
    transform:translateY(-1px);
}

#idt-about-final .idt-about-btn svg{
    width:15px;
    height:15px;
}


/* =========================================================
   RIGHT COLUMN
========================================================= */

#idt-about-final .idt-media-column{
    position:relative;

    align-self:stretch;

    min-width:0;
}


/* =========================================================
   STICKY IMAGE
========================================================= */

#idt-about-final .idt-media-sticky{
    position:-webkit-sticky;
    position:sticky;

    top:95px;

    width:100%;

    z-index:4;
}


/* =========================================================
   IMAGE WRAPPER — BIGGER
========================================================= */

#idt-about-final .idt-media{
    position:relative;

    width:100%;
    max-width:540px;

    margin:0 auto;

    padding:14px;
}


/* =========================================================
   ROTATED FRAME
========================================================= */

#idt-about-final .idt-media::before{
    content:"";

    position:absolute;
    inset:0;

    z-index:-1;

    border:1px solid #D8E0EA;

    border-radius:23px;

    transform:rotate(2.4deg);

    background:#FCFAF6;
}


/* =========================================================
   BIG IMAGE
========================================================= */

#idt-about-final .idt-image-frame{
    position:relative;

    width:100%;
    height:600px;

    overflow:hidden;

    border-radius:20px;

    background:#FCFAF6;

    box-shadow:
        0 16px 38px rgba(9,43,76,.12);
}

#idt-about-final .idt-image-frame img{
    width:100%;
    height:100%;

    display:block;

    object-fit:cover;
    object-position:center center;

    transition:transform .7s ease;
}

#idt-about-final .idt-media:hover
.idt-image-frame img{
    transform:scale(1.035);
}

#idt-about-final .idt-image-frame::after{
    content:"";

    position:absolute;
    inset:0;

    pointer-events:none;

    background:
        linear-gradient(
            135deg,
            rgba(12,45,98,.08),
            transparent 45%
        );
}


/* =========================================================
   BADGE
========================================================= */

#idt-about-final .idt-badge{
    position:absolute;

    left:0;
    bottom:0;

    z-index:5;

    width:155px;

    padding:17px 18px;

    border:3px solid #fff;

    border-radius:10px;

    background:#0C2D62;

    box-shadow:
        0 12px 28px rgba(9,43,76,.20);
}

#idt-about-final .idt-badge-number{
    display:block;

    margin:0 0 6px;

    color:#FF5D00;

    font-family:"Montez",cursive;

    font-size:32px;
    line-height:1;
}

#idt-about-final .idt-badge-label{
    display:block;

    color:#fff;

    font-size:9px;
    line-height:1.48;
    font-weight:700;

    letter-spacing:.6px;

    text-transform:uppercase;
}


/* =========================================================
   REVEAL
========================================================= */

#idt-about-final .idt-reveal{
    opacity:0;

    transform:translateY(22px);

    transition:
        opacity .7s ease,
        transform .7s ease;
}

#idt-about-final.idt-visible
.idt-reveal{
    opacity:1;

    transform:translateY(0);
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1250px){

    #idt-about-final .idt-about-container{
        width:1120px;
    }

    #idt-about-final .idt-content-grid{
        grid-template-columns:
            minmax(0,1fr)
            450px;

        gap:42px;
    }

    #idt-about-final .idt-main-heading{
        font-size:38px;
    }

    #idt-about-final .idt-script-title{
        font-size:34px;
    }

    #idt-about-final .idt-media{
        max-width:470px;
    }

    #idt-about-final .idt-image-frame{
        height:540px;
    }

    #idt-about-final .idt-media-sticky{
        top:90px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-about-final{
        padding:32px 22px 55px;

        overflow:hidden;
    }

    #idt-about-final .idt-about-container{
        width:800px;
    }

    #idt-about-final .idt-heading-area{
        margin-bottom:35px;
    }

    #idt-about-final .idt-main-heading{
        font-size:34px;
    }

    #idt-about-final .idt-script-title{
        font-size:31px;
    }

    #idt-about-final .idt-content-grid{
        grid-template-columns:1fr;

        gap:40px;
    }

    #idt-about-final .idt-copy p{
        max-width:100%;

        font-size:15.5px;
        line-height:1.78;

        text-align:justify;
        text-justify:inter-word;
    }

    #idt-about-final .idt-media-sticky{
        position:relative;

        top:auto;
    }

    #idt-about-final .idt-media{
        width:520px;
        max-width:94%;
    }

    #idt-about-final .idt-image-frame{
        height:575px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-about-final{
        padding:28px 18px 48px;
    }

    #idt-about-final .idt-heading-area{
        margin-bottom:30px;
    }

    #idt-about-final .idt-script-title{
        font-size:28px;
    }

    #idt-about-final .idt-main-heading{
        font-size:29px;

        line-height:1.2;
    }

    #idt-about-final .idt-content-grid{
        gap:35px;
    }

    #idt-about-final .idt-copy p{
        font-size:15px;
        line-height:1.75;

        text-align:justify;
        text-justify:inter-word;
    }

    #idt-about-final .idt-benefits{
        flex-direction:column;

        gap:10px;
    }

    #idt-about-final .idt-benefit{
        font-size:12px;

        white-space:normal;
    }

    #idt-about-final .idt-about-btn{
        width:100%;
    }

    #idt-about-final .idt-media{
        width:100%;
        max-width:460px;

        padding:10px;
    }

    #idt-about-final .idt-image-frame{
        width:100%;

        height:auto;

        aspect-ratio:4 / 4.8;
    }

    #idt-about-final .idt-badge{
        left:10px;
        bottom:10px;

        width:auto;
        min-width:135px;

        padding:14px 16px;
    }

    #idt-about-final .idt-badge-number{
        font-size:27px;
    }

    #idt-about-final .idt-badge-label{
        font-size:8px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-about-final{
        padding:25px 15px 44px;
    }

    #idt-about-final .idt-script-title{
        font-size:26px;
    }

    #idt-about-final .idt-main-heading{
        font-size:26px;
    }

    #idt-about-final .idt-copy p{
        font-size:14.5px;
        line-height:1.72;

        text-align:justify;
        text-justify:inter-word;
    }

    #idt-about-final .idt-media{
        max-width:100%;
    }

    #idt-about-final .idt-image-frame{
        aspect-ratio:4 / 4.9;
    }

}
</style>


<section id="idt-about-final">


    <!-- DECORATIONS -->

    <div class="idt-decoration idt-orb-left"></div>

    <div class="idt-decoration idt-orb-right"></div>


    <div class="idt-decoration idt-route">

        <svg viewBox="0 0 700 420">

            <path
                d="
                M55 335
                C130 275 105 205 185 185
                C270 164 265 270 350 240
                C430 211 390 125 480 105
                C555 88 590 125 645 65
                ">
            </path>

            <circle cx="55" cy="335" r="7"></circle>
            <circle cx="185" cy="185" r="7"></circle>
            <circle cx="350" cy="240" r="7"></circle>
            <circle cx="480" cy="105" r="7"></circle>
            <circle cx="645" cy="65" r="7"></circle>

        </svg>

    </div>


    <div class="idt-decoration idt-compass">

        <svg viewBox="0 0 120 120">

            <circle cx="60" cy="60" r="43"></circle>

            <circle cx="60" cy="60" r="30"></circle>

            <path d="M60 17V31"></path>

            <path d="M60 89V103"></path>

            <path d="M17 60H31"></path>

            <path d="M89 60H103"></path>

            <path d="M60 38L70 60L60 82L50 60Z"></path>

        </svg>

    </div>



    <div class="idt-about-container">


        <!-- HEADING -->

        <div class="idt-heading-area idt-reveal">

            <p class="idt-script-title">
                About India Day Trip India
            </p>

            <span class="idt-small-line"></span>

            <span class="idt-large-line"></span>


            <h2 class="idt-main-heading">

                Best India Tour Packages —<br>

                <span>
                    Private &amp; Customized
                </span>

                Tours Across India

            </h2>

        </div>



        <!-- CONTENT -->

        <div class="idt-content-grid idt-reveal">


            <!-- LEFT TEXT -->

            <div class="idt-text-column">

                <div class="idt-copy">


                    <p>
                        India is not a country to visit once; it is a hub of historical imprints and cultural aesthetics that you return to each time, discovering a whole new world of amazement. Living religions, snow-capped Himalayas, ancient empires, spice-scented bazaars, emerald backwaters, and sun-baked deserts exist side by side across a subcontinent so vast and varied that no single journey can contain it. India Day Trip India has exceptionally crafted
                        <a href="/tour/">India tour packages</a>
                        for over 25 years, catering to provide customers with a rich-viewing experience of the delights of India.
                    </p>


                    <p>
                        Whether you're planning a milestone honeymoon from the UK, planning to book your first-ever India tours from the USA, or wish to explore the depths of the south, our travel specialists will be there at your service, designing every journey as per your convenience from scratch. With a strong grasp of the geographical nuances of India, we build personalized, private itineraries that honor the pace and curiosity of every individual traveler.
                    </p>


                    <p>
                        As a reliable India tour operator with sound years of experience in the Indian travel industry, we take care of every travel necessity. From hand-picked accommodation and airport transfers to private air-conditioned vehicles and expert city guides with round-the-clock on-trip support, our tour package approach is very neat and thoughtful. Whether you are looking for
                        <a href="/tour/">luxury India tour packages</a>
                        in palace hotels,
                        <a href="/tour/">budget India tour packages</a>
                        that maximize experience per rupee, or customized India tour packages that combine wildlife, heritage, beaches, and wellness, India Day Trip India makes it seamlessly possible.
                    </p>


                    <p>
                        At
                        <a href="/about/">India Day Trip,</a>
                        we build value through transparency, quality, and personalized service. Our years of experience in the Indian tourism industry enable us to deliver authentic and content-rich experiences, ranging from the modern vibrancy of Delhi to the historic tranquility of Agra. Whether you are a solo traveler, a couple on a honeymoon, or a family on vacation, we tailor our services to meet your specific needs. Explore India with confidence, knowing you are guided by professionals who are passionate about showing you the best of our country.
                    </p>


                    <p>
                        Travelers seeking a deep cultural immersion in a limited timeframe will find our expertise unmatched. Our strategic base in Agra gives us unrivaled access to India's finest attractions. For those pressed for time, our
                        <a href="/same-day-tours/">Same Day Tour Packages</a>
                        offer seamless excursions from Delhi to the Taj Mahal, maximizing your experience without the rush.

                        For a more extensive exploration, our signature
                        <a href="/golden-triangle-tours/">Golden Triangle Tour Packages</a>
                        connect the historic capitals of Delhi, Agra, and Jaipur. This route is the perfect introduction to India, offering a harmonious blend of history, vibrant culture, and regal architecture, all curated with the highest standard of travel comfort.
                    </p>

                </div>



                <!-- BENEFITS -->

                <ul class="idt-benefits">

                    <li class="idt-benefit">
                        <span class="idt-check">
                            <svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        Private &amp; Tailor-Made
                    </li>


                    <li class="idt-benefit">
                        <span class="idt-check">
                            <svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        24/7 On-Trip Support
                    </li>


                    <li class="idt-benefit">
                        <span class="idt-check">
                            <svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        Hand-Picked Accommodation
                    </li>


                    <li class="idt-benefit">
                        <span class="idt-check">
                            <svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        No Hidden Costs
                    </li>


                    <li class="idt-benefit">
                        <span class="idt-check">
                            <svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        Expert Local Guides
                    </li>


                    <li class="idt-benefit">
                        <span class="idt-check">
                            <svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        Airport Transfers Included
                    </li>

                </ul>



                <!-- CTA -->

                <a
                    href="/about/"
                    class="idt-about-btn">

                    <svg viewBox="0 0 24 24" fill="none">

                        <circle
                            cx="12"
                            cy="12"
                            r="9"
                            stroke="currentColor"
                            stroke-width="1.7">
                        </circle>

                        <path
                            d="M12 10.5V16"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round">
                        </path>

                        <circle
                            cx="12"
                            cy="7.5"
                            r="1"
                            fill="currentColor">
                        </circle>

                    </svg>

                    <span>
                        Learn More About Us
                    </span>

                </a>

            </div>



            <!-- RIGHT BIG STICKY IMAGE -->

            <div class="idt-media-column">

                <div class="idt-media-sticky">

                    <div class="idt-media">


                        <div class="idt-image-frame">

                            <img
                                src="../assets/img/about/about-1.webp"
                                alt="Taj Mahal India Tour Packages"
                                loading="lazy"
                                onerror="this.onerror=null;this.src='https://indiadaytrip.com/wp-content/uploads/2026/09/hero-agra.webp';">

                        </div>


                        <div class="idt-badge">

                            <span class="idt-badge-number">
                                25+
                            </span>

                            <span class="idt-badge-label">
                                Years of<br>
                                Crafting Memories
                            </span>

                        </div>

                    </div>

                </div>

            </div>


        </div>


    </div>


</section>


<script>
(function(){

    const section =
        document.getElementById(
            "idt-about-final"
        );

    if(!section){
        return;
    }


    if("IntersectionObserver" in window){

        const observer =
            new IntersectionObserver(
                function(entries){

                    entries.forEach(
                        function(entry){

                            if(entry.isIntersecting){

                                section.classList.add(
                                    "idt-visible"
                                );

                                observer.unobserve(
                                    section
                                );

                            }

                        }
                    );

                },
                {
                    threshold:0.08
                }
            );

        observer.observe(
            section
        );

    }else{

        section.classList.add(
            "idt-visible"
        );

    }

})();
</script>