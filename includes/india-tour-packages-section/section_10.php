<!-- =========================================================
 INDIA DAY TRIP
 INDIA TOUR PACKAGES
 SECTION 10 — FAQ
 CLEAN EDITORIAL ACCORDION
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

#idt-india-faq,
#idt-india-faq *{
    box-sizing:border-box;
}

#idt-india-faq{
    --navy:#0C2D62;
    --deep:#071F3F;
    --blue:#2E6095;
    --sky:#79BDF2;
    --orange:#FF5D00;
    --text:#5C6875;
    --dark:#273747;
    --line:#DDE4EA;
    --warm:#F8F6F1;
    --white:#FFFFFF;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:82px 24px 84px;

    background:
        radial-gradient(
            circle at 0% 10%,
            rgba(121,189,242,.09),
            transparent 27%
        ),
        #F8F6F1;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   WRAPPER
========================================================= */

#idt-india-faq .idt-ifaq-wrap{
    width:100%;
    max-width:1180px;
    margin:0 auto;

    display:grid;

    grid-template-columns:
        minmax(300px,.72fr)
        minmax(0,1.28fr);

    gap:80px;

    align-items:start;
}


/* =========================================================
   LEFT INTRO
========================================================= */

#idt-india-faq .idt-ifaq-left{
    padding-top:5px;
}

#idt-india-faq .idt-ifaq-script{
    margin:0 0 8px;

    color:var(--blue);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;
    font-weight:400;
}

#idt-india-faq .idt-ifaq-title{
    margin:0;

    color:var(--navy);

    font-family:"Playfair Display",Georgia,serif;

    font-size:37px;
    line-height:1.2;

    font-weight:700;

    letter-spacing:-.55px;
}

#idt-india-faq .idt-ifaq-accent{
    display:flex;
    align-items:center;
    gap:7px;

    margin:17px 0 20px;
}

#idt-india-faq .idt-ifaq-accent::before{
    content:"";

    width:42px;
    height:2px;

    background:var(--navy);
}

#idt-india-faq .idt-ifaq-accent span{
    display:block;

    width:7px;
    height:7px;

    background:var(--orange);

    transform:rotate(45deg);
}

#idt-india-faq .idt-ifaq-accent::after{
    content:"";

    width:25px;
    height:2px;

    background:var(--orange);
}

#idt-india-faq .idt-ifaq-intro{
    margin:0;

    max-width:390px;

    color:var(--text);

    font-size:14.5px;
    line-height:1.8;
}


/* =========================================================
   SMALL HELP AREA
========================================================= */

#idt-india-faq .idt-ifaq-help{
    display:flex;
    align-items:flex-start;
    gap:13px;

    margin-top:29px;

    padding-top:23px;

    border-top:1px solid var(--line);
}

#idt-india-faq .idt-ifaq-help-icon{
    display:flex;
    align-items:center;
    justify-content:center;

    width:39px;
    height:39px;

    flex:0 0 39px;

    border-radius:50%;

    background:var(--navy);

    color:#FFFFFF;
}

#idt-india-faq .idt-ifaq-help-icon svg{
    width:18px;
    height:18px;

    fill:none;
    stroke:currentColor;

    stroke-width:1.8;
    stroke-linecap:round;
    stroke-linejoin:round;
}

#idt-india-faq .idt-ifaq-help-text span{
    display:block;

    margin-bottom:3px;

    color:var(--orange);

    font-size:9px;
    line-height:1.2;

    font-weight:800;

    letter-spacing:.09em;

    text-transform:uppercase;
}

#idt-india-faq .idt-ifaq-help-text p{
    margin:0;

    color:var(--dark);

    font-size:12.7px;
    line-height:1.65;

    font-weight:600;
}


/* =========================================================
   RIGHT FAQ
========================================================= */

#idt-india-faq .idt-ifaq-list{
    width:100%;

    border-top:1px solid #CDD6DE;
}


/* =========================================================
   FAQ ITEM
========================================================= */

#idt-india-faq .idt-ifaq-item{
    position:relative;

    border-bottom:1px solid #CDD6DE;
}


/* =========================================================
   QUESTION
========================================================= */

#idt-india-faq .idt-ifaq-question{
    appearance:none;
    -webkit-appearance:none;

    width:100%;

    display:grid;

    grid-template-columns:
        minmax(0,1fr)
        38px;

    gap:20px;

    align-items:center;

    padding:22px 0;

    border:0;

    background:transparent;

    text-align:left;

    cursor:pointer;

    color:var(--navy);

    font-family:"Manrope",Arial,sans-serif;

    transition:color .2s ease;
}

#idt-india-faq .idt-ifaq-question:hover{
    color:var(--blue);
}

#idt-india-faq .idt-ifaq-question:focus{
    outline:none;
}

#idt-india-faq .idt-ifaq-question:focus-visible{
    outline:2px solid rgba(46,96,149,.25);
    outline-offset:4px;
}

#idt-india-faq .idt-ifaq-question-text{
    display:block;

    font-size:16px;
    line-height:1.5;

    font-weight:800;
}


/* =========================================================
   PLUS ICON
========================================================= */

#idt-india-faq .idt-ifaq-toggle{
    position:relative;

    display:flex;
    align-items:center;
    justify-content:center;

    width:36px;
    height:36px;

    border:1px solid #CAD4DD;

    border-radius:50%;

    color:var(--navy);

    transition:
        border-color .25s ease,
        color .25s ease,
        transform .25s ease;
}

#idt-india-faq .idt-ifaq-toggle::before,
#idt-india-faq .idt-ifaq-toggle::after{
    content:"";

    position:absolute;

    width:12px;
    height:1.5px;

    border-radius:5px;

    background:currentColor;

    transition:transform .25s ease;
}

#idt-india-faq .idt-ifaq-toggle::after{
    transform:rotate(90deg);
}


/* OPEN STATE */

#idt-india-faq .idt-ifaq-item.is-open .idt-ifaq-question{
    color:var(--navy);
}

#idt-india-faq .idt-ifaq-item.is-open .idt-ifaq-toggle{
    color:#FFFFFF;

    border-color:var(--navy);

    background:var(--navy);
}

#idt-india-faq .idt-ifaq-item.is-open .idt-ifaq-toggle::after{
    transform:rotate(0deg);
}


/* =========================================================
   ANSWER
========================================================= */

#idt-india-faq .idt-ifaq-answer{
    display:grid;

    grid-template-rows:0fr;

    transition:grid-template-rows .32s ease;
}

#idt-india-faq .idt-ifaq-item.is-open .idt-ifaq-answer{
    grid-template-rows:1fr;
}

#idt-india-faq .idt-ifaq-answer-inner{
    overflow:hidden;
}

#idt-india-faq .idt-ifaq-answer-content{
    max-width:650px;

    padding:
        0 54px 23px 0;
}

#idt-india-faq .idt-ifaq-answer-content p{
    margin:0;

    color:var(--text);

    font-size:13.7px;
    line-height:1.78;
}


/* =========================================================
   RESPONSIVE — TABLET
========================================================= */

@media(max-width:991px){

    #idt-india-faq{
        padding:64px 20px 68px;
    }

    #idt-india-faq .idt-ifaq-wrap{
        grid-template-columns:1fr;

        gap:42px;

        max-width:760px;
    }

    #idt-india-faq .idt-ifaq-left{
        max-width:650px;

        padding-top:0;
    }

    #idt-india-faq .idt-ifaq-intro{
        max-width:600px;
    }

    #idt-india-faq .idt-ifaq-help{
        max-width:500px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-india-faq{
        padding:52px 15px 56px;
    }

    #idt-india-faq .idt-ifaq-wrap{
        gap:35px;
    }

    #idt-india-faq .idt-ifaq-script{
        font-size:28px;
    }

    #idt-india-faq .idt-ifaq-title{
        font-size:30px;
    }

    #idt-india-faq .idt-ifaq-question{
        grid-template-columns:
            minmax(0,1fr)
            34px;

        gap:15px;

        padding:20px 0;
    }

    #idt-india-faq .idt-ifaq-question-text{
        font-size:15px;
    }

    #idt-india-faq .idt-ifaq-toggle{
        width:33px;
        height:33px;
    }

    #idt-india-faq .idt-ifaq-answer-content{
        padding:
            0 42px 21px 0;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-india-faq{
        padding:46px 13px 50px;
    }

    #idt-india-faq .idt-ifaq-script{
        font-size:26px;
    }

    #idt-india-faq .idt-ifaq-title{
        font-size:27px;
    }

    #idt-india-faq .idt-ifaq-intro{
        font-size:13.8px;
    }

    #idt-india-faq .idt-ifaq-question{
        padding:18px 0;
    }

    #idt-india-faq .idt-ifaq-question-text{
        font-size:14px;
        line-height:1.5;
    }

    #idt-india-faq .idt-ifaq-answer-content{
        padding:
            0 10px 19px 0;
    }

    #idt-india-faq .idt-ifaq-answer-content p{
        font-size:13.2px;
        line-height:1.72;
    }
}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-india-faq{
        padding:42px 10px 46px;
    }

    #idt-india-faq .idt-ifaq-title{
        font-size:25px;
    }

}

</style>


<section id="idt-india-faq">

    <div class="idt-ifaq-wrap">


        <!-- =================================================
             LEFT SIDE
        ================================================== -->

        <div class="idt-ifaq-left">

            <p class="idt-ifaq-script">
                Before You Travel
            </p>

            <h2 class="idt-ifaq-title">
                India Tour Packages — Frequently Asked Questions
            </h2>

            <div
                class="idt-ifaq-accent"
                aria-hidden="true"
            >
                <span></span>
            </div>

            <p class="idt-ifaq-intro">
                Planning a multi-city India journey often raises questions about duration, routes and flexibility. Here are answers to some of the most common questions travellers consider before finalising their itinerary.
            </p>


            <div class="idt-ifaq-help">

                <div class="idt-ifaq-help-icon">

                    <!-- MESSAGE ICON -->
                    <svg viewBox="0 0 24 24">
                        <path d="M21 11.5a8.4 8.4 0 0 1-9 8.5 9.5 9.5 0 0 1-4-.9L3 21l1.6-4.5A8.4 8.4 0 1 1 21 11.5Z"></path>
                        <path d="M8 10h8"></path>
                        <path d="M8 14h5"></path>
                    </svg>

                </div>

                <div class="idt-ifaq-help-text">

                    <span>
                        Need More Guidance?
                    </span>

                    <p>
                        Your itinerary can be discussed around your own travel dates, destinations and available number of days.
                    </p>

                </div>

            </div>

        </div>


        <!-- =================================================
             FAQ LIST
        ================================================== -->

        <div class="idt-ifaq-list">


            <!-- FAQ 01 -->

            <div class="idt-ifaq-item is-open">

                <button
                    class="idt-ifaq-question"
                    type="button"
                    aria-expanded="true"
                >

                    <span class="idt-ifaq-question-text">
                        How many days are ideal for an India tour?
                    </span>

                    <span
                        class="idt-ifaq-toggle"
                        aria-hidden="true"
                    ></span>

                </button>

                <div class="idt-ifaq-answer">

                    <div class="idt-ifaq-answer-inner">

                        <div class="idt-ifaq-answer-content">

                            <p>
                                It depends on the destinations you want to cover. Around 7 days can work well for a focused North India route, while 10–14 days gives you more flexibility to add Rajasthan, Varanasi or another region without making the journey unnecessarily rushed.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- FAQ 02 -->

            <div class="idt-ifaq-item">

                <button
                    class="idt-ifaq-question"
                    type="button"
                    aria-expanded="false"
                >

                    <span class="idt-ifaq-question-text">
                        Can I customise an India tour package?
                    </span>

                    <span
                        class="idt-ifaq-toggle"
                        aria-hidden="true"
                    ></span>

                </button>

                <div class="idt-ifaq-answer">

                    <div class="idt-ifaq-answer-inner">

                        <div class="idt-ifaq-answer-content">

                            <p>
                                Yes. Your route can be shaped around your travel dates, preferred destinations, available duration and sightseeing interests. Cities can be added or removed and the number of nights in each destination can be adjusted.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- FAQ 03 -->

            <div class="idt-ifaq-item">

                <button
                    class="idt-ifaq-question"
                    type="button"
                    aria-expanded="false"
                >

                    <span class="idt-ifaq-question-text">
                        Which destinations are best for a first trip to India?
                    </span>

                    <span
                        class="idt-ifaq-toggle"
                        aria-hidden="true"
                    ></span>

                </button>

                <div class="idt-ifaq-answer">

                    <div class="idt-ifaq-answer-inner">

                        <div class="idt-ifaq-answer-content">

                            <p>
                                Delhi, Agra and Jaipur are commonly combined because they create a practical route through some of North India’s best-known historic and cultural destinations. Depending on your time, this journey can then be extended into Rajasthan, Varanasi or other regions.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- FAQ 04 -->

            <div class="idt-ifaq-item">

                <button
                    class="idt-ifaq-question"
                    type="button"
                    aria-expanded="false"
                >

                    <span class="idt-ifaq-question-text">
                        Can Rajasthan be combined with the Golden Triangle?
                    </span>

                    <span
                        class="idt-ifaq-toggle"
                        aria-hidden="true"
                    ></span>

                </button>

                <div class="idt-ifaq-answer">

                    <div class="idt-ifaq-answer-inner">

                        <div class="idt-ifaq-answer-content">

                            <p>
                                Yes. Jaipur already forms part of the Golden Triangle, making it possible to continue deeper into Rajasthan towards destinations such as Jodhpur, Udaipur, Pushkar or Jaisalmer when your travel schedule allows.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- FAQ 05 -->

            <div class="idt-ifaq-item">

                <button
                    class="idt-ifaq-question"
                    type="button"
                    aria-expanded="false"
                >

                    <span class="idt-ifaq-question-text">
                        Are your India tours private or shared?
                    </span>

                    <span
                        class="idt-ifaq-toggle"
                        aria-hidden="true"
                    ></span>

                </button>

                <div class="idt-ifaq-answer">

                    <div class="idt-ifaq-answer-inner">

                        <div class="idt-ifaq-answer-content">

                            <p>
                                The itineraries presented on this page are designed around private travel planning, giving you greater freedom over the route, timing and sightseeing priorities than a fixed large-group itinerary.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- FAQ 06 -->

            <div class="idt-ifaq-item">

                <button
                    class="idt-ifaq-question"
                    type="button"
                    aria-expanded="false"
                >

                    <span class="idt-ifaq-question-text">
                        Can I combine India with Nepal, Sri Lanka or Bhutan?
                    </span>

                    <span
                        class="idt-ifaq-toggle"
                        aria-hidden="true"
                    ></span>

                </button>

                <div class="idt-ifaq-answer">

                    <div class="idt-ifaq-answer-inner">

                        <div class="idt-ifaq-answer-content">

                            <p>
                                These destinations can be considered as extensions to a wider South Asian journey. The most suitable combination will depend on your total travel time, preferred route and the destinations you want to prioritise.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- FAQ 07 -->

            <div class="idt-ifaq-item">

                <button
                    class="idt-ifaq-question"
                    type="button"
                    aria-expanded="false"
                >

                    <span class="idt-ifaq-question-text">
                        When should I start planning my India itinerary?
                    </span>

                    <span
                        class="idt-ifaq-toggle"
                        aria-hidden="true"
                    ></span>

                </button>

                <div class="idt-ifaq-answer">

                    <div class="idt-ifaq-answer-inner">

                        <div class="idt-ifaq-answer-content">

                            <p>
                                Starting early gives you more time to decide the route, number of nights and travel style that suit you. It is particularly useful for longer multi-city journeys where several regions need to be connected in a practical order.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<script>
(function(){

    const section = document.getElementById('idt-india-faq');

    if(!section) return;

    const items = section.querySelectorAll('.idt-ifaq-item');

    items.forEach(function(item){

        const button = item.querySelector('.idt-ifaq-question');

        if(!button) return;

        button.addEventListener('click', function(){

            const alreadyOpen = item.classList.contains('is-open');

            items.forEach(function(otherItem){

                otherItem.classList.remove('is-open');

                const otherButton =
                    otherItem.querySelector('.idt-ifaq-question');

                if(otherButton){
                    otherButton.setAttribute(
                        'aria-expanded',
                        'false'
                    );
                }

            });

            if(!alreadyOpen){

                item.classList.add('is-open');

                button.setAttribute(
                    'aria-expanded',
                    'true'
                );

            }

        });

    });

})();
</script>