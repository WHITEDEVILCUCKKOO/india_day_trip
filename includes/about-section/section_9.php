<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP — FAQ
   FINAL BRAND COLOR VERSION
========================================================= */

#idt-about-faq,
#idt-about-faq *{
    box-sizing:border-box;
}

#idt-about-faq{
    --navy:#123B72;
    --navy-dark:#0D2C57;
    --orange:#F2A23A;
    --orange-light:#FFC167;

    --text:#607284;
    --line:#E4DED3;
    --soft:#F8F5EE;
    --white:#FFFFFF;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:58px 24px 62px;

    background:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#idt-about-faq::before{
    content:"";

    position:absolute;

    top:-190px;
    right:-170px;

    width:420px;
    height:420px;

    border-radius:50%;

    border:
        1px solid
        rgba(242,162,58,.13);

    pointer-events:none;
}


#idt-about-faq::after{
    content:"";

    position:absolute;

    left:24px;
    bottom:28px;

    width:105px;
    height:105px;

    opacity:.17;

    background-image:
        radial-gradient(
            circle,
            rgba(18,59,114,.45) 1.2px,
            transparent 1.3px
        );

    background-size:15px 15px;

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-about-faq .idt-faq-container{
    position:relative;
    z-index:2;

    width:1400px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-about-faq .idt-faq-header{
    max-width:800px;

    margin:0 auto 42px;

    text-align:center;
}


#idt-about-faq .idt-faq-line{
    display:flex;
    align-items:center;
    justify-content:center;

    gap:8px;

    margin-bottom:18px;
}


#idt-about-faq .idt-faq-line span:first-child{
    width:58px;
    height:2px;

    background:
        linear-gradient(
            90deg,
            var(--navy),
            var(--orange)
        );
}


#idt-about-faq .idt-faq-line span:last-child{
    width:6px;
    height:6px;

    background:var(--navy);

    transform:rotate(45deg);
}


#idt-about-faq .idt-faq-heading{
    margin:0;

    color:var(--navy);

    font-size:52px;
    line-height:1.15;
    font-weight:700;

    letter-spacing:-1.5px;
}


/* =========================================================
   TWO INDEPENDENT COLUMNS
========================================================= */

#idt-about-faq .idt-faq-columns{
    display:grid;

    grid-template-columns:
        repeat(2,minmax(0,1fr));

    gap:16px;

    align-items:start;
}


#idt-about-faq .idt-faq-column{
    display:flex;

    flex-direction:column;

    gap:16px;
}


/* =========================================================
   FAQ ITEM
========================================================= */

#idt-about-faq .idt-faq-item{
    position:relative;

    width:100%;

    overflow:hidden;

    background:#FFFFFF;

    border:
        1px solid
        #E5DED2;

    border-radius:15px;

    transition:
        border-color .28s ease,
        box-shadow .28s ease,
        background .28s ease;
}


#idt-about-faq .idt-faq-item:hover{
    border-color:
        rgba(242,162,58,.45);
}


#idt-about-faq .idt-faq-item.idt-active{
    border-color:
        rgba(18,59,114,.60);

    box-shadow:
        0 11px 28px
        rgba(18,59,114,.07);
}


/* =========================================================
   QUESTION
========================================================= */

#idt-about-faq .idt-faq-question{
    width:100%;

    display:grid;

    grid-template-columns:
        48px minmax(0,1fr) 42px;

    gap:14px;

    align-items:center;

    min-height:82px;

    padding:17px 22px;

    border:0;
    outline:0;

    background:transparent;

    cursor:pointer;

    text-align:left;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   NUMBER
========================================================= */

#idt-about-faq .idt-faq-number{
    color:var(--orange);

    font-family:"Montez",cursive;

    font-size:31px;
    line-height:1;

    font-weight:400;
}


/* =========================================================
   QUESTION TEXT
========================================================= */

#idt-about-faq .idt-faq-question-text{
    min-width:0;

    color:var(--navy-dark);

    font-size:17px;
    line-height:1.48;

    font-weight:700;

    transition:color .25s ease;
}


#idt-about-faq
.idt-faq-item.idt-active
.idt-faq-question-text{
    color:var(--navy);
}


/* =========================================================
   PLUS / MINUS
========================================================= */

#idt-about-faq .idt-faq-toggle{
    position:relative;

    width:38px;
    height:38px;

    justify-self:end;

    border:
        1px solid
        rgba(18,59,114,.20);

    border-radius:9px;

    background:#F2F6FA;

    transition:
        background .25s ease,
        border-color .25s ease;
}


#idt-about-faq .idt-faq-toggle::before,
#idt-about-faq .idt-faq-toggle::after{
    content:"";

    position:absolute;

    top:50%;
    left:50%;

    width:13px;
    height:1.7px;

    background:var(--navy);

    transform:
        translate(-50%,-50%);

    transition:
        transform .28s ease,
        background .28s ease;
}


#idt-about-faq .idt-faq-toggle::after{
    transform:
        translate(-50%,-50%)
        rotate(90deg);
}


#idt-about-faq
.idt-faq-item.idt-active
.idt-faq-toggle{
    background:var(--navy);

    border-color:var(--navy);
}


#idt-about-faq
.idt-faq-item.idt-active
.idt-faq-toggle::before,
#idt-about-faq
.idt-faq-item.idt-active
.idt-faq-toggle::after{
    background:var(--orange-light);
}


#idt-about-faq
.idt-faq-item.idt-active
.idt-faq-toggle::after{
    transform:
        translate(-50%,-50%)
        rotate(0deg);
}


/* =========================================================
   ANSWER
========================================================= */

#idt-about-faq .idt-faq-answer{
    display:grid;

    grid-template-rows:0fr;

    transition:
        grid-template-rows .34s ease;
}


#idt-about-faq
.idt-faq-item.idt-active
.idt-faq-answer{
    grid-template-rows:1fr;
}


#idt-about-faq .idt-faq-answer-inner{
    min-height:0;

    overflow:hidden;
}


#idt-about-faq .idt-faq-answer-content{
    position:relative;

    margin:
        0 22px 0 22px;

    padding:
        10px 18px 22px 78px;

    color:#607284;

    font-size:15px;
    line-height:1.75;

    font-weight:400;
}


/* ANSWER VERTICAL LINE */

#idt-about-faq .idt-faq-answer-content::before{
    content:"";

    position:absolute;

    top:11px;
    left:60px;

    width:3px;

    height:
        calc(100% - 32px);

    background:
        linear-gradient(
            180deg,
            var(--navy),
            rgba(242,162,58,.35)
        );

    border-radius:20px;
}


/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-about-faq{
        padding:
            54px 22px 58px;
    }


    #idt-about-faq .idt-faq-container{
        width:1080px;
    }


    #idt-about-faq .idt-faq-heading{
        font-size:44px;
    }


    #idt-about-faq .idt-faq-question{
        grid-template-columns:
            40px minmax(0,1fr) 38px;

        min-height:76px;

        padding:
            16px 18px;
    }


    #idt-about-faq .idt-faq-number{
        font-size:27px;
    }


    #idt-about-faq .idt-faq-question-text{
        font-size:15px;
    }


    #idt-about-faq .idt-faq-toggle{
        width:34px;
        height:34px;
    }


    #idt-about-faq .idt-faq-answer-content{
        margin:
            0 18px;

        padding:
            10px 14px 20px 66px;

        font-size:14px;
    }


    #idt-about-faq .idt-faq-answer-content::before{
        left:50px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px)
and (min-width:768px){

    #idt-about-faq{
        padding:
            48px 22px 52px;
    }


    #idt-about-faq .idt-faq-container{
        width:100%;
        max-width:900px;
    }


    #idt-about-faq .idt-faq-header{
        margin-bottom:30px;
    }


    #idt-about-faq .idt-faq-heading{
        font-size:34px;
    }


    #idt-about-faq .idt-faq-columns{
        gap:10px;
    }


    #idt-about-faq .idt-faq-column{
        gap:10px;
    }


    #idt-about-faq .idt-faq-question{
        grid-template-columns:
            30px minmax(0,1fr) 30px;

        gap:9px;

        min-height:68px;

        padding:
            13px 13px;
    }


    #idt-about-faq .idt-faq-number{
        font-size:23px;
    }


    #idt-about-faq .idt-faq-question-text{
        font-size:12.5px;
        line-height:1.45;
    }


    #idt-about-faq .idt-faq-toggle{
        width:28px;
        height:28px;

        border-radius:7px;
    }


    #idt-about-faq .idt-faq-answer-content{
        margin:
            0 13px;

        padding:
            9px 10px 17px 49px;

        font-size:11.5px;
        line-height:1.65;
    }


    #idt-about-faq .idt-faq-answer-content::before{
        top:9px;
        left:37px;

        height:
            calc(100% - 26px);
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-about-faq{
        padding:
            44px 14px 48px;
    }


    #idt-about-faq .idt-faq-header{
        margin-bottom:27px;
    }


    #idt-about-faq .idt-faq-heading{
        font-size:30px;
        line-height:1.25;
    }


    #idt-about-faq .idt-faq-columns{
        display:flex;

        flex-direction:column;

        gap:10px;
    }


    #idt-about-faq .idt-faq-column{
        display:contents;
    }


    #idt-about-faq .idt-faq-item[data-order="1"]{
        order:1;
    }

    #idt-about-faq .idt-faq-item[data-order="2"]{
        order:2;
    }

    #idt-about-faq .idt-faq-item[data-order="3"]{
        order:3;
    }

    #idt-about-faq .idt-faq-item[data-order="4"]{
        order:4;
    }

    #idt-about-faq .idt-faq-item[data-order="5"]{
        order:5;
    }

    #idt-about-faq .idt-faq-item[data-order="6"]{
        order:6;
    }

    #idt-about-faq .idt-faq-item[data-order="7"]{
        order:7;
    }

    #idt-about-faq .idt-faq-item[data-order="8"]{
        order:8;
    }


    #idt-about-faq .idt-faq-question{
        grid-template-columns:
            32px minmax(0,1fr) 32px;

        gap:10px;

        min-height:66px;

        padding:
            14px 14px;
    }


    #idt-about-faq .idt-faq-number{
        font-size:23px;
    }


    #idt-about-faq .idt-faq-question-text{
        font-size:13px;
        line-height:1.45;
    }


    #idt-about-faq .idt-faq-toggle{
        width:30px;
        height:30px;
    }


    #idt-about-faq .idt-faq-answer-content{
        margin:
            0 14px;

        padding:
            10px 10px 18px 48px;

        font-size:12.5px;
        line-height:1.68;
    }


    #idt-about-faq .idt-faq-answer-content::before{
        left:35px;
        top:10px;

        height:
            calc(100% - 28px);
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-about-faq{
        padding:
            40px 10px 44px;
    }


    #idt-about-faq .idt-faq-heading{
        font-size:26px;
    }


    #idt-about-faq .idt-faq-question{
        grid-template-columns:
            27px minmax(0,1fr) 29px;

        gap:8px;

        min-height:62px;

        padding:
            13px 11px;
    }


    #idt-about-faq .idt-faq-number{
        font-size:21px;
    }


    #idt-about-faq .idt-faq-question-text{
        font-size:12px;
    }


    #idt-about-faq .idt-faq-toggle{
        width:27px;
        height:27px;
    }


    #idt-about-faq .idt-faq-answer-content{
        margin:
            0 11px;

        padding:
            9px 8px 16px 42px;

        font-size:11.5px;
        line-height:1.65;
    }


    #idt-about-faq .idt-faq-answer-content::before{
        left:30px;
    }

}


/* =========================================================
   EXTRA SMALL MOBILE
========================================================= */

@media(max-width:360px){

    #idt-about-faq{
        padding-left:8px;
        padding-right:8px;
    }


    #idt-about-faq .idt-faq-heading{
        font-size:24px;
    }


    #idt-about-faq .idt-faq-question{
        grid-template-columns:
            24px minmax(0,1fr) 27px;

        gap:7px;

        padding:
            12px 9px;
    }


    #idt-about-faq .idt-faq-number{
        font-size:19px;
    }


    #idt-about-faq .idt-faq-question-text{
        font-size:11px;
    }


    #idt-about-faq .idt-faq-answer-content{
        margin:
            0 9px;

        padding:
            8px 6px 15px 37px;

        font-size:11px;
    }


    #idt-about-faq .idt-faq-answer-content::before{
        left:26px;
    }

}

</style>


<section id="idt-about-faq">

    <div class="idt-faq-container">


        <div class="idt-faq-header">

            <div
                class="idt-faq-line"
                aria-hidden="true">

                <span></span>
                <span></span>

            </div>


            <h2 class="idt-faq-heading">
                Frequently Asked Questions
            </h2>

        </div>



        <div class="idt-faq-columns">


            <!-- LEFT COLUMN -->

            <div class="idt-faq-column">


                <!-- FAQ 01 -->

                <div
                    class="idt-faq-item"
                    data-order="1">

                    <button
                        class="idt-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span class="idt-faq-number">
                            01
                        </span>

                        <span class="idt-faq-question-text">
                            When was India Day Trip established?
                        </span>

                        <span
                            class="idt-faq-toggle"
                            aria-hidden="true">
                        </span>

                    </button>


                    <div class="idt-faq-answer">

                        <div class="idt-faq-answer-inner">

                            <div class="idt-faq-answer-content">
                                India Day Trip was established in 2015 by Anshul Gupta with a simple idea: to create more personal and meaningful ways for international travellers to experience India. Over the years, we have designed private journeys that go beyond standard sightseeing and allow travelers to discover India at their own pace.
                            </div>

                        </div>

                    </div>

                </div>



                <!-- FAQ 03 -->

                <div
                    class="idt-faq-item"
                    data-order="3">

                    <button
                        class="idt-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span class="idt-faq-number">
                            03
                        </span>

                        <span class="idt-faq-question-text">
                            Is it safe to book with a small, private tour operator in India?
                        </span>

                        <span
                            class="idt-faq-toggle"
                            aria-hidden="true">
                        </span>

                    </button>


                    <div class="idt-faq-answer">

                        <div class="idt-faq-answer-inner">

                            <div class="idt-faq-answer-content">
                                Yes, as long as they carefully check their drivers and guides. We run background checks on everyone we hire, and you can reach us on WhatsApp any time, day or night.
                            </div>

                        </div>

                    </div>

                </div>



                <!-- FAQ 05 -->

                <div
                    class="idt-faq-item"
                    data-order="5">

                    <button
                        class="idt-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span class="idt-faq-number">
                            05
                        </span>

                        <span class="idt-faq-question-text">
                            Can you build a custom itinerary instead of selling me a fixed package?
                        </span>

                        <span
                            class="idt-faq-toggle"
                            aria-hidden="true">
                        </span>

                    </button>


                    <div class="idt-faq-answer">

                        <div class="idt-faq-answer-inner">

                            <div class="idt-faq-answer-content">
                                Yes, that's actually our usual approach. Just let us know your interests and budget, and we'll create a trip that fits you.
                            </div>

                        </div>

                    </div>

                </div>



                <!-- FAQ 07 -->

                <div
                    class="idt-faq-item"
                    data-order="7">

                    <button
                        class="idt-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span class="idt-faq-number">
                            07
                        </span>

                        <span class="idt-faq-question-text">
                            How much does a private India tour cost?
                        </span>

                        <span
                            class="idt-faq-toggle"
                            aria-hidden="true">
                        </span>

                    </button>


                    <div class="idt-faq-answer">

                        <div class="idt-faq-answer-inner">

                            <div class="idt-faq-answer-content">
                                The price depends on which cities you visit, how long you stay, and the hotels you choose. Once we know what you want to see, we’ll give you an exact quote.
                            </div>

                        </div>

                    </div>

                </div>


            </div>



            <!-- RIGHT COLUMN -->

            <div class="idt-faq-column">


                <!-- FAQ 02 -->

                <div
                    class="idt-faq-item"
                    data-order="2">

                    <button
                        class="idt-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span class="idt-faq-number">
                            02
                        </span>

                        <span class="idt-faq-question-text">
                            How many days do you need for the Golden Triangle tour?
                        </span>

                        <span
                            class="idt-faq-toggle"
                            aria-hidden="true">
                        </span>

                    </button>


                    <div class="idt-faq-answer">

                        <div class="idt-faq-answer-inner">

                            <div class="idt-faq-answer-content">
                                Most people find that five to eight days is a good amount of time for Delhi, Agra, and Jaipur. If you have more or less time, we can adjust the trip to fit your schedule.
                            </div>

                        </div>

                    </div>

                </div>



                <!-- FAQ 04 -->

                <div
                    class="idt-faq-item"
                    data-order="4">

                    <button
                        class="idt-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span class="idt-faq-number">
                            04
                        </span>

                        <span class="idt-faq-question-text">
                            What's included in an India tour package?
                        </span>

                        <span
                            class="idt-faq-toggle"
                            aria-hidden="true">
                        </span>

                    </button>


                    <div class="idt-faq-answer">

                        <div class="idt-faq-answer-inner">

                            <div class="idt-faq-answer-content">
                                Most packages cover a private car, hotel, guide, and entry tickets for the places you visit. If you need meals or help with your visa, we can include those too.
                            </div>

                        </div>

                    </div>

                </div>



                <!-- FAQ 06 -->

                <div
                    class="idt-faq-item"
                    data-order="6">

                    <button
                        class="idt-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span class="idt-faq-number">
                            06
                        </span>

                        <span class="idt-faq-question-text">
                            Should first-time visitors to India hire a private guide?
                        </span>

                        <span
                            class="idt-faq-toggle"
                            aria-hidden="true">
                        </span>

                    </button>


                    <div class="idt-faq-answer">

                        <div class="idt-faq-answer-inner">

                            <div class="idt-faq-answer-content">
                                It really helps. Crowds, traffic, and local customs can be overwhelming if you're on your own. Since most of our guests are first-timers, we plan slower and simpler trips to make things easier.
                            </div>

                        </div>

                    </div>

                </div>



                <!-- FAQ 08 -->

                <div
                    class="idt-faq-item"
                    data-order="8">

                    <button
                        class="idt-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span class="idt-faq-number">
                            08
                        </span>

                        <span class="idt-faq-question-text">
                            Do you handle airport pickups and the rest of the trip, too?
                        </span>

                        <span
                            class="idt-faq-toggle"
                            aria-hidden="true">
                        </span>

                    </button>


                    <div class="idt-faq-answer">

                        <div class="idt-faq-answer-inner">

                            <div class="idt-faq-answer-content">
                                Yes, we take care of everything including transfers, hotels, transport, and sightseeing, so you don’t have to book with several different people.
                            </div>

                        </div>

                    </div>

                </div>


            </div>


        </div>

    </div>

</section>


<script>
(function(){

    const faqSection =
        document.querySelector("#idt-about-faq");

    if(!faqSection) return;


    const faqItems =
        faqSection.querySelectorAll(".idt-faq-item");


    faqItems.forEach(function(item){

        const button =
            item.querySelector(".idt-faq-question");


        button.addEventListener("click",function(){

            const isAlreadyOpen =
                item.classList.contains("idt-active");


            faqItems.forEach(function(otherItem){

                otherItem.classList.remove("idt-active");

                const otherButton =
                    otherItem.querySelector(".idt-faq-question");

                if(otherButton){

                    otherButton.setAttribute(
                        "aria-expanded",
                        "false"
                    );

                }

            });


            if(!isAlreadyOpen){

                item.classList.add("idt-active");

                button.setAttribute(
                    "aria-expanded",
                    "true"
                );

            }

        });

    });

})();
</script>