<!-- =========================================================
     INDIA DAY TRIP
     GOLDEN TRIANGLE TOUR PAGE
     FAQ SECTION
     CENTERED ACCORDION
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-golden-faq,
#idt-golden-faq *{
    box-sizing:border-box;
}

#idt-golden-faq{
    --navy:#0C2D62;
    --blue:#2E6095;
    --orange:#FF5D00;
    --text:#5E6875;
    --line:#E5E9ED;
    --soft:#F7FAFD;

    width:100%;
    max-width:100%;
    overflow:hidden;

    padding:42px 24px 46px;

    background:
        linear-gradient(
            180deg,
            #FFFFFF 0%,
            #FCFAF6 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-golden-faq .idt-faq-wrap{
    width:100%;
    max-width:980px;
    margin:0 auto;
}


/* =========================================================
   CENTER HEADER
========================================================= */

#idt-golden-faq .idt-faq-head{
    max-width:720px;
    margin:0 auto 28px;

    text-align:center;
}

#idt-golden-faq .idt-faq-script{
    margin:0 0 6px;

    color:var(--blue);

    font-family:"Montez",cursive;
    font-size:31px;
    line-height:1;
    font-weight:400;
}

#idt-golden-faq .idt-faq-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;
    font-size:34px;
    line-height:1.2;
    font-weight:700;
    letter-spacing:-.5px;
}


/* ACCENT */

#idt-golden-faq .idt-faq-accent{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:7px;

    margin:13px 0 15px;
}

#idt-golden-faq .idt-faq-accent::before,
#idt-golden-faq .idt-faq-accent::after{
    content:"";

    width:34px;
    height:2px;

    border-radius:10px;
}

#idt-golden-faq .idt-faq-accent::before{
    background:var(--navy);
}

#idt-golden-faq .idt-faq-accent::after{
    background:var(--orange);
}

#idt-golden-faq .idt-faq-dot{
    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}


/* INTRO */

#idt-golden-faq .idt-faq-intro{
    margin:0 auto;

    max-width:650px;

    color:var(--text);

    font-size:15.5px;
    line-height:1.72;
}


/* =========================================================
   FAQ LIST
========================================================= */

#idt-golden-faq .idt-faq-list{
    width:100%;
    max-width:860px;

    margin:0 auto;

    border-top:1px solid var(--line);
}


/* =========================================================
   ITEM
========================================================= */

#idt-golden-faq .idt-faq-item{
    border-bottom:1px solid var(--line);
}


/* QUESTION */

#idt-golden-faq .idt-faq-question{
    appearance:none;
    -webkit-appearance:none;

    width:100%;

    display:grid;
    grid-template-columns:minmax(0,1fr) 34px;
    gap:20px;
    align-items:center;

    margin:0;
    padding:18px 0;

    border:0;
    outline:0;

    background:transparent;

    color:var(--navy);

    text-align:left;

    cursor:pointer;

    font-family:"Manrope",Arial,sans-serif;
    font-size:16.5px;
    line-height:1.45;
    font-weight:800;

    transition:color .25s ease;
}


/* PLUS */

#idt-golden-faq .idt-faq-plus{
    position:relative;

    width:32px;
    height:32px;

    border:
        1px solid
        rgba(12,45,98,.14);

    border-radius:50%;

    background:#FFFFFF;

    transition:
        background .25s ease,
        border-color .25s ease;
}

#idt-golden-faq .idt-faq-plus::before,
#idt-golden-faq .idt-faq-plus::after{
    content:"";

    position:absolute;

    top:50%;
    left:50%;

    width:11px;
    height:1.5px;

    border-radius:10px;

    background:var(--navy);

    transform:translate(-50%,-50%);

    transition:transform .25s ease;
}

#idt-golden-faq .idt-faq-plus::after{
    transform:
        translate(-50%,-50%)
        rotate(90deg);
}


/* ACTIVE */

#idt-golden-faq .idt-faq-item.active .idt-faq-question{
    color:var(--blue);
}

#idt-golden-faq .idt-faq-item.active .idt-faq-plus{
    background:var(--navy);
    border-color:var(--navy);
}

#idt-golden-faq .idt-faq-item.active .idt-faq-plus::before,
#idt-golden-faq .idt-faq-item.active .idt-faq-plus::after{
    background:#FFFFFF;
}

#idt-golden-faq .idt-faq-item.active .idt-faq-plus::after{
    transform:
        translate(-50%,-50%)
        rotate(0deg);
}


/* =========================================================
   ANSWER
========================================================= */

#idt-golden-faq .idt-faq-answer{
    display:grid;
    grid-template-rows:0fr;

    transition:grid-template-rows .32s ease;
}

#idt-golden-faq .idt-faq-item.active .idt-faq-answer{
    grid-template-rows:1fr;
}

#idt-golden-faq .idt-faq-answer-inner{
    min-height:0;
    overflow:hidden;
}

#idt-golden-faq .idt-faq-answer p{
    margin:0;

    max-width:760px;

    padding:
        0 48px 18px 0;

    color:var(--text);

    font-size:15px;
    line-height:1.7;
}


/* =========================================================
   CENTER HELP CTA
========================================================= */

#idt-golden-faq .idt-faq-help{
    display:flex;
    flex-direction:column;
    align-items:center;

    max-width:650px;

    margin:27px auto 0;

    padding-top:22px;

    border-top:
        1px solid
        rgba(12,45,98,.08);

    text-align:center;
}

#idt-golden-faq .idt-faq-help-icon{
    display:flex;
    align-items:center;
    justify-content:center;

    width:44px;
    height:44px;

    margin-bottom:11px;

    border-radius:50%;

    background:#EEF5FB;

    color:var(--blue);
}

#idt-golden-faq .idt-faq-help-icon svg{
    width:21px;
    height:21px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-golden-faq .idt-faq-help h3{
    margin:0 0 5px;

    color:var(--navy);

    font-size:17px;
    line-height:1.4;

    font-weight:800;
}

#idt-golden-faq .idt-faq-help p{
    max-width:520px;

    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.65;
}

#idt-golden-faq .idt-faq-help-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:8px;

    min-height:43px;

    margin-top:14px;

    padding:10px 17px;

    border-radius:5px;

    background:var(--navy);

    color:#FFFFFF;

    text-decoration:none;

    font-size:13px;
    line-height:1;

    font-weight:800;

    transition:
        background .25s ease,
        transform .25s ease;
}

#idt-golden-faq .idt-faq-help-btn:hover{
    background:#123B72;
    transform:translateY(-2px);
}

#idt-golden-faq .idt-faq-help-btn svg{
    width:16px;
    height:16px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:1200px){

    #idt-golden-faq{
        padding:40px 28px 44px;
    }

    #idt-golden-faq .idt-faq-wrap{
        max-width:920px;
    }

}


@media(max-width:991px){

    #idt-golden-faq{
        padding:38px 20px 41px;
    }

    #idt-golden-faq .idt-faq-head{
        margin-bottom:25px;
    }

    #idt-golden-faq .idt-faq-question{
        font-size:16px;
    }

    #idt-golden-faq .idt-faq-answer p{
        font-size:14.5px;
    }

}


@media(max-width:767px){

    #idt-golden-faq{
        padding:36px 15px 39px;
    }

    #idt-golden-faq .idt-faq-head{
        margin-bottom:23px;
    }

    #idt-golden-faq .idt-faq-script{
        font-size:28px;
    }

    #idt-golden-faq .idt-faq-title{
        font-size:29px;
        line-height:1.22;
    }

    #idt-golden-faq .idt-faq-intro{
        font-size:15px;
    }

    #idt-golden-faq .idt-faq-question{
        grid-template-columns:minmax(0,1fr) 32px;

        gap:14px;

        padding:17px 0;

        font-size:15.5px;
    }

    #idt-golden-faq .idt-faq-plus{
        width:32px;
        height:32px;
    }

    #idt-golden-faq .idt-faq-answer p{
        padding:
            0 42px 17px 0;

        font-size:14.5px;
        line-height:1.68;
    }

    #idt-golden-faq .idt-faq-help{
        margin-top:23px;
        padding-top:19px;
    }

}


@media(max-width:430px){

    #idt-golden-faq{
        padding:34px 13px 36px;
    }

    #idt-golden-faq .idt-faq-script{
        font-size:26px;
    }

    #idt-golden-faq .idt-faq-title{
        font-size:27px;
    }

    #idt-golden-faq .idt-faq-question{
        grid-template-columns:minmax(0,1fr) 30px;

        gap:12px;

        padding:15px 0;
    }

    #idt-golden-faq .idt-faq-plus{
        width:30px;
        height:30px;
    }

    #idt-golden-faq .idt-faq-answer p{
        padding:
            0 38px 15px 0;

        font-size:14px;
    }

}


@media(max-width:360px){

    #idt-golden-faq{
        padding:32px 10px 34px;
    }

    #idt-golden-faq .idt-faq-script{
        font-size:25px;
    }

    #idt-golden-faq .idt-faq-title{
        font-size:25px;
    }

}


@media(prefers-reduced-motion:reduce){

    #idt-golden-faq *,
    #idt-golden-faq *::before,
    #idt-golden-faq *::after{
        transition:none !important;
    }

}

</style>


<section id="idt-golden-faq">

    <div class="idt-faq-wrap">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-faq-head">

            <p class="idt-faq-script">
                Before You Travel
            </p>

            <h2 class="idt-faq-title">
                Golden Triangle Tour FAQs
            </h2>

            <div
                class="idt-faq-accent"
                aria-hidden="true"
            >
                <span class="idt-faq-dot"></span>
            </div>

            <p class="idt-faq-intro">
                Find answers to common questions about Golden Triangle tours, travel between Delhi, Agra and Jaipur, tour duration, private transportation and itinerary customisation.
            </p>

        </div>


        <!-- =================================================
             FAQ LIST
        ================================================== -->

        <div class="idt-faq-list">


            <!-- FAQ 01 -->

            <div class="idt-faq-item active">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="true"
                >
                    <span>
                        What is the Golden Triangle Tour in India?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>

                </button>

                <div class="idt-faq-answer">

                    <div class="idt-faq-answer-inner">

                        <p>
                            The Golden Triangle is a classic North India travel route connecting Delhi, Agra and Jaipur. It combines historic landmarks, Mughal heritage, royal architecture and cultural experiences across three of India’s most popular destinations.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 02 -->

            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        How many days are recommended for a Golden Triangle Tour?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>

                </button>

                <div class="idt-faq-answer">

                    <div class="idt-faq-answer-inner">

                        <p>
                            The route can be planned in different durations. A 3-day itinerary works for travellers with limited time, while 4 or 5 days allows a more relaxed pace with additional sightseeing and flexibility in each city.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 03 -->

            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Which cities are included in the Golden Triangle?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>

                </button>

                <div class="idt-faq-answer">

                    <div class="idt-faq-answer-inner">

                        <p>
                            The classic Golden Triangle route includes Delhi, Agra and Jaipur. Depending on your available time and preferred itinerary, additional heritage stops such as Fatehpur Sikri may also be added.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 04 -->

            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Are Golden Triangle tours private?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>

                </button>

                <div class="idt-faq-answer">

                    <div class="idt-faq-answer-inner">

                        <p>
                            Our Golden Triangle tour options are designed around private and personalised travel, giving you more flexibility with your pickup point, sightseeing schedule, travel pace and itinerary.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 05 -->

            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Can I customise my Golden Triangle itinerary?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>

                </button>

                <div class="idt-faq-answer">

                    <div class="idt-faq-answer-inner">

                        <p>
                            Yes. The itinerary can be adjusted according to your travel dates, available days, preferred sightseeing, pickup location and travel pace. Additional destinations can also be discussed when planning your journey.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 06 -->

            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Can the Golden Triangle Tour include a Taj Mahal sunrise visit?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>

                </button>

                <div class="idt-faq-answer">

                    <div class="idt-faq-answer-inner">

                        <p>
                            Yes. A sunrise Taj Mahal experience can be included during the Agra part of your itinerary, depending on your travel dates, overnight arrangements and overall tour schedule.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 07 -->

            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Where can the Golden Triangle Tour start and finish?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>

                </button>

                <div class="idt-faq-answer">

                    <div class="idt-faq-answer-inner">

                        <p>
                            Your starting and finishing arrangements can be discussed according to your wider travel plans. Pickup can be planned from suitable locations such as your hotel or airport depending on the confirmed itinerary.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 08 -->

            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Can Fatehpur Sikri be added between Agra and Jaipur?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>

                </button>

                <div class="idt-faq-answer">

                    <div class="idt-faq-answer-inner">

                        <p>
                            Yes. Fatehpur Sikri can be considered as an additional heritage stop while travelling from Agra towards Jaipur, depending on your selected package and available sightseeing time.
                        </p>

                    </div>

                </div>

            </div>


        </div>


        <!-- =================================================
             CENTER HELP
        ================================================== -->

        <div class="idt-faq-help">

            <span class="idt-faq-help-icon">

                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M9.8 9a2.4 2.4 0 1 1 3.3 2.2c-.8.4-1.1.9-1.1 1.8"></path>
                    <path d="M12 17h.01"></path>
                </svg>

            </span>

            <h3>
                Still Have a Question?
            </h3>

            <p>
                Share your travel dates, preferred duration and pickup location and we’ll help you plan your Delhi, Agra and Jaipur journey.
            </p>

            <a
                class="idt-faq-help-btn"
                href="https://wa.me/918126052755"
                target="_blank"
                rel="noopener"
            >
                Ask on WhatsApp

                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14"></path>
                    <path d="m14 7 5 5-5 5"></path>
                </svg>

            </a>

        </div>


    </div>

</section>


<script>

(function(){

    const section =
        document.getElementById("idt-golden-faq");

    if(!section) return;

    const items =
        section.querySelectorAll(".idt-faq-item");


    items.forEach(function(item){

        const button =
            item.querySelector(".idt-faq-question");

        button.addEventListener("click",function(){

            const isOpen =
                item.classList.contains("active");


            items.forEach(function(other){

                other.classList.remove("active");

                const otherButton =
                    other.querySelector(".idt-faq-question");

                if(otherButton){

                    otherButton.setAttribute(
                        "aria-expanded",
                        "false"
                    );

                }

            });


            if(!isOpen){

                item.classList.add("active");

                button.setAttribute(
                    "aria-expanded",
                    "true"
                );

            }

        });

    });

})();

</script>