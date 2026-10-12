<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
#idt-faq-final,
#idt-faq-final *{
    box-sizing:border-box;
}

#idt-faq-final{
    --navy:#0C2D62;
    --blue:#2E6095;
    --blue2:#123B72;
    --text:#5C6B85;
    --soft:#F5F8FC;
    --border:#D8E0EA;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:72px 24px 74px;

    background:
        linear-gradient(
            180deg,
            #FCFAF6 0%,
            #F5F8FC 100%
        );

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   DECORATION
========================================================= */

#idt-faq-final::before{
    content:"";

    position:absolute;

    width:620px;
    height:360px;

    top:-120px;
    right:-100px;

    border:2px dashed rgba(46,96,149,.18);

    border-radius:50%;

    transform:rotate(-18deg);

    pointer-events:none;
}


#idt-faq-final::after{
    content:"";

    position:absolute;

    width:460px;
    height:250px;

    left:-140px;
    bottom:-150px;

    border:2px dashed rgba(12,45,98,.10);

    border-radius:50%;

    transform:rotate(18deg);

    pointer-events:none;
}


#idt-faq-final .idt-faq-ring{
    position:absolute;

    width:165px;
    height:165px;

    right:-5px;
    top:205px;

    border:1px solid rgba(46,96,149,.15);

    border-radius:50%;

    box-shadow:
        0 0 0 24px rgba(46,96,149,.035),
        0 0 0 48px rgba(46,96,149,.02);

    pointer-events:none;
}


#idt-faq-final .idt-faq-dot{
    position:absolute;

    width:10px;
    height:10px;

    right:84px;
    top:216px;

    border-radius:50%;

    background:#FF5D00;

    box-shadow:
        0 0 0 7px rgba(46,96,149,.11),
        0 0 0 14px rgba(46,96,149,.04);

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-faq-final .idt-faq-container{
    position:relative;
    z-index:2;

    width:1400px;
    max-width:100%;

    margin:0 auto;

    display:grid;

    grid-template-columns:410px minmax(0,1fr);

    gap:60px;

    align-items:start;
}


/* =========================================================
   LEFT
========================================================= */

#idt-faq-final .idt-faq-left{
    position:sticky;

    top:100px;
}


#idt-faq-final .idt-faq-eyebrow{
    margin:0 0 7px;

    color:#2E6095;

    font-family:"Montez",cursive;

    font-size:41px;
    line-height:1.05;
    font-weight:400;
}


#idt-faq-final .idt-faq-heading{
    margin:0 0 20px;

    color:#0C2D62;

    font-family:"Playfair Display",Georgia,serif;

    font-size:43px;
    line-height:1.35;
    font-weight:700;

    letter-spacing:-1px;
}


#idt-faq-final .idt-faq-arrow{
    width:29px;
    height:29px;

    margin-bottom:20px;

    color:#777;
}


#idt-faq-final .idt-faq-arrow svg{
    width:100%;
    height:100%;
}


#idt-faq-final .idt-faq-sub{
    max-width:365px;

    margin:0 0 34px;

    color:#5C6B85;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:15px;
    line-height:1.75;
}


/* =========================================================
   IMAGE
========================================================= */

#idt-faq-final .idt-faq-image{
    position:relative;

    width:100%;
    max-width:340px;

    aspect-ratio:1 / .82;

    overflow:hidden;

    border-radius:18px;

    background:#ddd;
}


#idt-faq-final .idt-faq-image img{
    width:100%;
    height:100%;

    display:block;

    object-fit:cover;
    object-position:center;

    transition:transform .6s ease;
}


#idt-faq-final .idt-faq-image:hover img{
    transform:scale(1.035);
}


#idt-faq-final .idt-faq-pin{
    position:absolute;

    right:12px;
    bottom:12px;

    width:35px;
    height:35px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:#2E6095;

    color:#fff;

    box-shadow:
        0 7px 16px rgba(25,87,194,.30);
}


#idt-faq-final .idt-faq-pin svg{
    width:15px;
    height:15px;
    fill:currentColor;
}


/* =========================================================
   RIGHT FAQ LIST
========================================================= */

#idt-faq-final .idt-faq-list{
    display:flex;

    flex-direction:column;

    gap:16px;
}


/* =========================================================
   FAQ ITEM
========================================================= */

#idt-faq-final .idt-faq-item{
    background:#fff;

    border:1px solid #D8E0EA;

    border-radius:17px;

    padding:4px 22px;

    box-shadow:
        0 8px 22px rgba(19,45,82,.04);

    transition:
        box-shadow .25s ease,
        border-color .25s ease;
}


#idt-faq-final .idt-faq-item[open]{
    border-color:#D8E0EA;

    box-shadow:
        0 12px 28px rgba(19,45,82,.055);
}


/* =========================================================
   SUMMARY
========================================================= */

#idt-faq-final .idt-faq-item summary{
    list-style:none;

    cursor:pointer;

    display:flex;

    align-items:center;

    gap:16px;

    min-height:92px;

    padding:0;

    outline:none;

    -webkit-tap-highlight-color:transparent;
}


#idt-faq-final .idt-faq-item summary::-webkit-details-marker{
    display:none;
}


#idt-faq-final .idt-faq-item summary::marker{
    content:"";
}


/* number */

#idt-faq-final .idt-faq-num{
    width:42px;
    height:42px;

    flex:0 0 42px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:#0C2D62;

    color:#fff;

    font-size:13px;
    font-weight:700;
}


/* question */

#idt-faq-final .idt-faq-question{
    flex:1;

    color:#16224E;

    font-size:16px;
    line-height:1.45;
    font-weight:700;
}


/* plus/minus */

#idt-faq-final .idt-faq-toggle{
    position:relative;

    width:36px;
    height:36px;

    flex:0 0 36px;

    border-radius:50%;

    border:1.5px solid #2E6095;
}


#idt-faq-final .idt-faq-toggle::before,
#idt-faq-final .idt-faq-toggle::after{
    content:"";

    position:absolute;

    left:50%;
    top:50%;

    background:#2E6095;

    transform:translate(-50%,-50%);

    transition:opacity .2s ease;
}


#idt-faq-final .idt-faq-toggle::before{
    width:13px;
    height:2px;
}


#idt-faq-final .idt-faq-toggle::after{
    width:2px;
    height:13px;
}


#idt-faq-final .idt-faq-item[open]
.idt-faq-toggle::after{
    opacity:0;
}


/* =========================================================
   ANSWER
========================================================= */

#idt-faq-final .idt-faq-answer-wrap{
    display:flex;

    align-items:flex-start;

    gap:16px;

    margin:0 0 20px;

    padding:22px 24px;

    border-radius:14px;

    background:#F5F8FC;
}


#idt-faq-final .idt-faq-answer-icon{
    width:50px;
    height:50px;

    flex:0 0 50px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:#EEF4FA;

    color:#2E6095;
}


#idt-faq-final .idt-faq-answer-icon svg{
    width:21px;
    height:21px;

    fill:none;

    stroke:currentColor;

    stroke-width:2;

    stroke-linecap:round;
    stroke-linejoin:round;
}


#idt-faq-final .idt-faq-answer{
    margin:3px 0 0;

    color:#45566F;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:15px;
    line-height:1.75;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-faq-final{
        padding:58px 20px 62px;
    }

    #idt-faq-final .idt-faq-container{
        grid-template-columns:1fr;

        gap:40px;
    }

    #idt-faq-final .idt-faq-left{
        position:relative;

        top:auto;
    }

    #idt-faq-final .idt-faq-image{
        max-width:430px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:640px){

    #idt-faq-final{
        padding:44px 15px 50px;
    }

    #idt-faq-final .idt-faq-eyebrow{
        font-size:29px;
    }

    #idt-faq-final .idt-faq-heading{
        font-size:30px;

        line-height:1.3;
    }

    #idt-faq-final .idt-faq-sub{
        font-size:13px;
    }

    #idt-faq-final .idt-faq-item{
        padding:3px 15px;
    }

    #idt-faq-final .idt-faq-item summary{
        gap:10px;

        min-height:76px;
    }

    #idt-faq-final .idt-faq-num{
        width:34px;
        height:34px;

        flex-basis:34px;

        font-size:11px;
    }

    #idt-faq-final .idt-faq-question{
        font-size:14px;
    }

    #idt-faq-final .idt-faq-toggle{
        width:31px;
        height:31px;

        flex-basis:31px;
    }

    #idt-faq-final .idt-faq-answer-wrap{
        padding:17px;

        gap:12px;
    }

    #idt-faq-final .idt-faq-answer-icon{
        width:40px;
        height:40px;

        flex-basis:40px;
    }

    #idt-faq-final .idt-faq-answer{
        font-size:13px;
    }

}

/* =========================================================
   INDIA DAY TRIP — FIXED FONT SYSTEM
========================================================= */
#idt-faq-final .idt-faq-num,
#idt-faq-final .idt-faq-question,
#idt-faq-final .idt-faq-toggle{
    font-family:"Manrope",Arial,sans-serif;
}

</style>


<section id="idt-faq-final">

    <div class="idt-faq-ring"></div>
    <div class="idt-faq-dot"></div>


    <div class="idt-faq-container">


        <!-- =================================================
             LEFT
        ================================================== -->

        <div class="idt-faq-left">


            <p class="idt-faq-eyebrow">
                Have Questions?
            </p>


            <h2 class="idt-faq-heading">
                Frequently<br>
                Asked Questions
            </h2>


            <div class="idt-faq-arrow">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round">

                    <path
                        d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                    </path>

                    <path
                        d="m21.854 2.147-10.94 10.939">
                    </path>

                </svg>

            </div>


            <p class="idt-faq-sub">
                Find quick answers to the most common questions about our tours, bookings and travel services.
            </p>


            <div class="idt-faq-image">

                <img
                    src="https://media.gettyimages.com/id/2161698587/photo/woman-looking-at-hawa-mahal-in-jaipur-india-from-balcony.jpg?s=612x612&w=0&k=20&c=bfvczmsu8YVuN0PvbYPHpubU8fjGso4wkovuCH1MZLQ="
                    alt="Traveler at Hawa Mahal Jaipur"
                    loading="lazy">


                <span class="idt-faq-pin">

                    <svg viewBox="0 0 24 24">

                        <path
                            d="M12 2C7.6 2 4 5.6 4 10c0 6 8 12 8 12s8-6 8-12c0-4.4-3.6-8-8-8zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                        </path>

                    </svg>

                </span>

            </div>


        </div>



        <!-- =================================================
             FAQ LIST
        ================================================== -->

        <div class="idt-faq-list">


            <details class="idt-faq-item" open>

                <summary>

                    <span class="idt-faq-num">
                        01
                    </span>

                    <span class="idt-faq-question">
                        Are your tours private, or will we join a group?
                    </span>

                    <span class="idt-faq-toggle"></span>

                </summary>


                <div class="idt-faq-answer-wrap">

                    <span class="idt-faq-answer-icon">

                        <svg viewBox="0 0 24 24">

                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>

                        </svg>

                    </span>


                    <p class="idt-faq-answer">
                        Every tour is completely private. You won’t be grouped with other travelers; your car, driver, and guide are yours from airport pickup to final drop-off.
                    </p>

                </div>

            </details>



            <details class="idt-faq-item">

                <summary>

                    <span class="idt-faq-num">
                        02
                    </span>

                    <span class="idt-faq-question">
                        Can I customize my itinerary?
                    </span>

                    <span class="idt-faq-toggle"></span>

                </summary>


                <div class="idt-faq-answer-wrap">

                    <span class="idt-faq-answer-icon">

                        <svg viewBox="0 0 24 24">

                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>

                        </svg>

                    </span>


                    <p class="idt-faq-answer">
                        Yes, and most travelers do. Let us know what interests you most, whether that’s history, food, photography, or wildlife, and we’ll shape your India Tour Packages around those interests rather than a fixed route.
                    </p>

                </div>

            </details>



            <details class="idt-faq-item">

                <summary>

                    <span class="idt-faq-num">
                        03
                    </span>

                    <span class="idt-faq-question">
                        What’s the difference between a Golden Triangle trip and a Rajasthan trip?
                    </span>

                    <span class="idt-faq-toggle"></span>

                </summary>


                <div class="idt-faq-answer-wrap">

                    <span class="idt-faq-answer-icon">

                        <svg viewBox="0 0 24 24">

                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>

                        </svg>

                    </span>


                    <p class="idt-faq-answer">
                        The Golden Triangle covers Delhi, Agra, and Jaipur. A full Rajasthan trip goes further, adding cities like Udaipur and Jodhpur for a longer, more colorful look at the state’s forts and palaces.
                    </p>

                </div>

            </details>



            <details class="idt-faq-item">

                <summary>

                    <span class="idt-faq-num">
                        04
                    </span>

                    <span class="idt-faq-question">
                        Do you offer single-day trips, or only multi-day packages?
                    </span>

                    <span class="idt-faq-toggle"></span>

                </summary>


                <div class="idt-faq-answer-wrap">

                    <span class="idt-faq-answer-icon">

                        <svg viewBox="0 0 24 24">

                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>

                        </svg>

                    </span>


                    <p class="idt-faq-answer">
                        Both. If you only have one free day in Delhi, our same-day Agra options cover the Taj Mahal comfortably. If you have more time, we can build out a longer, multi-city itinerary instead.
                    </p>

                </div>

            </details>



            <details class="idt-faq-item">

                <summary>

                    <span class="idt-faq-num">
                        05
                    </span>

                    <span class="idt-faq-question">
                        What hotel options are available?
                    </span>

                    <span class="idt-faq-toggle"></span>

                </summary>


                <div class="idt-faq-answer-wrap">

                    <span class="idt-faq-answer-icon">

                        <svg viewBox="0 0 24 24">

                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>

                        </svg>

                    </span>


                    <p class="idt-faq-answer">
                        We work with 3-star, 4-star, and 5-star properties depending on your budget and comfort preferences, and we check every hotel for quality and location before adding it to your itinerary.
                    </p>

                </div>

            </details>


        </div>


    </div>

</section>


<script>
(function(){

    const section =
        document.getElementById("idt-faq-final");

    if(!section){
        return;
    }

    const items =
        section.querySelectorAll(".idt-faq-item");


    items.forEach(function(item){

        item.addEventListener("toggle",function(){

            if(!item.open){
                return;
            }

            items.forEach(function(other){

                if(other !== item){
                    other.open = false;
                }

            });

        });

    });

})();
</script>