<!-- =========================================================
     INDIA DAY TRIP
     TAJ MAHAL TOUR PAGE
     CENTERED FAQ SECTION
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>
#idt-faq-center,
#idt-faq-center *{
    box-sizing:border-box;
}

#idt-faq-center{
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

#idt-faq-center .idt-faq-wrap{
    width:100%;
    max-width:980px;
    margin:0 auto;
}


/* =========================================================
   CENTER HEADER
========================================================= */

#idt-faq-center .idt-faq-head{
    max-width:720px;
    margin:0 auto 28px;

    text-align:center;
}

#idt-faq-center .idt-faq-script{
    margin:0 0 6px;

    color:var(--blue);

    font-family:"Montez",cursive;
    font-size:31px;
    line-height:1;
    font-weight:400;
}

#idt-faq-center .idt-faq-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;
    font-size:34px;
    line-height:1.2;
    font-weight:700;
    letter-spacing:-.5px;
}


/* ACCENT */

#idt-faq-center .idt-faq-accent{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:7px;

    margin:13px 0 15px;
}

#idt-faq-center .idt-faq-accent::before,
#idt-faq-center .idt-faq-accent::after{
    content:"";

    width:34px;
    height:2px;

    border-radius:10px;
}

#idt-faq-center .idt-faq-accent::before{
    background:var(--navy);
}

#idt-faq-center .idt-faq-accent::after{
    background:var(--orange);
}

#idt-faq-center .idt-faq-dot{
    width:6px;
    height:6px;

    background:var(--orange);

    transform:rotate(45deg);
}


/* INTRO */

#idt-faq-center .idt-faq-intro{
    margin:0 auto;

    max-width:650px;

    color:var(--text);

    font-size:15.5px;
    line-height:1.72;
}


/* =========================================================
   FAQ LIST
========================================================= */

#idt-faq-center .idt-faq-list{
    width:100%;
    max-width:860px;

    margin:0 auto;

    border-top:1px solid var(--line);
}


/* =========================================================
   ITEM
========================================================= */

#idt-faq-center .idt-faq-item{
    border-bottom:1px solid var(--line);
}


/* QUESTION */

#idt-faq-center .idt-faq-question{
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

#idt-faq-center .idt-faq-plus{
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

#idt-faq-center .idt-faq-plus::before,
#idt-faq-center .idt-faq-plus::after{
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

#idt-faq-center .idt-faq-plus::after{
    transform:
        translate(-50%,-50%)
        rotate(90deg);
}


/* ACTIVE */

#idt-faq-center .idt-faq-item.active .idt-faq-question{
    color:var(--blue);
}

#idt-faq-center .idt-faq-item.active .idt-faq-plus{
    background:var(--navy);
    border-color:var(--navy);
}

#idt-faq-center .idt-faq-item.active .idt-faq-plus::before,
#idt-faq-center .idt-faq-item.active .idt-faq-plus::after{
    background:#FFFFFF;
}

#idt-faq-center .idt-faq-item.active .idt-faq-plus::after{
    transform:
        translate(-50%,-50%)
        rotate(0deg);
}


/* =========================================================
   ANSWER
========================================================= */

#idt-faq-center .idt-faq-answer{
    display:grid;
    grid-template-rows:0fr;

    transition:grid-template-rows .32s ease;
}

#idt-faq-center .idt-faq-item.active .idt-faq-answer{
    grid-template-rows:1fr;
}

#idt-faq-center .idt-faq-answer-inner{
    min-height:0;
    overflow:hidden;
}

#idt-faq-center .idt-faq-answer p{
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

#idt-faq-center .idt-faq-help{
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

#idt-faq-center .idt-faq-help-icon{
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

#idt-faq-center .idt-faq-help-icon svg{
    width:21px;
    height:21px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-faq-center .idt-faq-help h3{
    margin:0 0 5px;

    color:var(--navy);

    font-size:17px;
    line-height:1.4;

    font-weight:800;
}

#idt-faq-center .idt-faq-help p{
    max-width:520px;

    margin:0;

    color:var(--text);

    font-size:14.5px;
    line-height:1.65;
}

#idt-faq-center .idt-faq-help-btn{
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

#idt-faq-center .idt-faq-help-btn:hover{
    background:#123B72;
    transform:translateY(-2px);
}

#idt-faq-center .idt-faq-help-btn svg{
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

    #idt-faq-center{
        padding:40px 28px 44px;
    }

    #idt-faq-center .idt-faq-wrap{
        max-width:920px;
    }

}

@media(max-width:991px){

    #idt-faq-center{
        padding:38px 20px 41px;
    }

    #idt-faq-center .idt-faq-head{
        margin-bottom:25px;
    }

    #idt-faq-center .idt-faq-question{
        font-size:16px;
    }

    #idt-faq-center .idt-faq-answer p{
        font-size:14.5px;
    }

}

@media(max-width:767px){

    #idt-faq-center{
        padding:36px 15px 39px;
    }

    #idt-faq-center .idt-faq-head{
        margin-bottom:23px;
    }

    #idt-faq-center .idt-faq-intro{
        font-size:15px;
    }

    #idt-faq-center .idt-faq-question{
        grid-template-columns:minmax(0,1fr) 32px;

        gap:14px;

        padding:17px 0;

        font-size:15.5px;
    }

    #idt-faq-center .idt-faq-plus{
        width:32px;
        height:32px;
    }

    #idt-faq-center .idt-faq-answer p{
        padding:
            0 42px 17px 0;

        font-size:14.5px;
        line-height:1.68;
    }

    #idt-faq-center .idt-faq-help{
        margin-top:23px;
        padding-top:19px;
    }

}

@media(max-width:430px){

    #idt-faq-center{
        padding:34px 13px 36px;
    }

    #idt-faq-center .idt-faq-question{
        grid-template-columns:minmax(0,1fr) 30px;

        gap:12px;

        padding:15px 0;
    }

    #idt-faq-center .idt-faq-plus{
        width:30px;
        height:30px;
    }

    #idt-faq-center .idt-faq-answer p{
        padding:
            0 38px 15px 0;

        font-size:14px;
    }

}

@media(max-width:360px){

    #idt-faq-center{
        padding:32px 10px 34px;
    }

}

@media(prefers-reduced-motion:reduce){

    #idt-faq-center *,
    #idt-faq-center *::before,
    #idt-faq-center *::after{
        transition:none !important;
    }

}
</style>


<section id="idt-faq-center">

    <div class="idt-faq-wrap">


        <!-- HEADER -->

        <div class="idt-faq-head">

            <p class="idt-faq-script">
                Before You Travel
            </p>

            <h2 class="idt-faq-title">
                Frequently Asked Questions
            </h2>

            <div
                class="idt-faq-accent"
                aria-hidden="true"
            >
                <span class="idt-faq-dot"></span>
            </div>

            <p class="idt-faq-intro">
                Find answers to the most common questions about Taj Mahal tours from Delhi, pickup arrangements, private travel and sightseeing in Agra.
            </p>

        </div>


        <!-- FAQ LIST -->

        <div class="idt-faq-list">


            <div class="idt-faq-item active">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="true"
                >
                    <span>
                        Can I visit the Taj Mahal from Delhi in one day?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>
                </button>

                <div class="idt-faq-answer">
                    <div class="idt-faq-answer-inner">
                        <p>
                            Yes. A same-day Taj Mahal tour from Delhi is a practical option for travellers with limited time. You can travel by private car or choose an express-train tour and return to Delhi after sightseeing in Agra.
                        </p>
                    </div>
                </div>

            </div>


            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        What time should I leave Delhi for the Taj Mahal?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>
                </button>

                <div class="idt-faq-answer">
                    <div class="idt-faq-answer-inner">
                        <p>
                            An early departure is generally preferred for a same-day tour. Travellers planning a sunrise visit will need an earlier pickup so they can reach Agra around their preferred sightseeing time.
                        </p>
                    </div>
                </div>

            </div>


            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Are India Day Trip Taj Mahal tours private?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>
                </button>

                <div class="idt-faq-answer">
                    <div class="idt-faq-answer-inner">
                        <p>
                            Our tour options are designed around private and personalised travel, allowing greater flexibility with your pickup, sightseeing pace and itinerary.
                        </p>
                    </div>
                </div>

            </div>


            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Can the Taj Mahal itinerary be customised?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>
                </button>

                <div class="idt-faq-answer">
                    <div class="idt-faq-answer-inner">
                        <p>
                            Yes. Your sightseeing plan can be adjusted according to your available travel time, pickup point and preferred attractions. Agra Fort, Mehtab Bagh and Fatehpur Sikri can also be considered depending on your itinerary.
                        </p>
                    </div>
                </div>

            </div>


            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Is the Taj Mahal open on Fridays?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>
                </button>

                <div class="idt-faq-answer">
                    <div class="idt-faq-answer-inner">
                        <p>
                            The Taj Mahal is generally closed to regular visitors on Fridays, so this should be considered while selecting your tour date.
                        </p>
                    </div>
                </div>

            </div>


            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Can you arrange pickup from my Delhi hotel or airport?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>
                </button>

                <div class="idt-faq-answer">
                    <div class="idt-faq-answer-inner">
                        <p>
                            Pickup can be planned according to your selected tour and starting location. Share your Delhi hotel, airport or preferred pickup point while discussing your itinerary.
                        </p>
                    </div>
                </div>

            </div>


            <div class="idt-faq-item">

                <button
                    class="idt-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>
                        Should I choose a same-day or overnight Agra tour?
                    </span>

                    <span
                        class="idt-faq-plus"
                        aria-hidden="true">
                    </span>
                </button>

                <div class="idt-faq-answer">
                    <div class="idt-faq-answer-inner">
                        <p>
                            A same-day tour works well for the main Agra highlights. An overnight tour is better if you prefer a relaxed schedule and want additional time for nearby heritage attractions.
                        </p>
                    </div>
                </div>

            </div>


        </div>


        <!-- CENTER HELP -->

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
                Share your travel date, pickup location and preferred itinerary and we’ll help you plan your Taj Mahal visit.
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
        document.getElementById("idt-faq-center");

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