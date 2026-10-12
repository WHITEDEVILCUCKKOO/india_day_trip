<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP
   TRIPADVISOR REVIEWS — COMPLETE FINAL
========================================================= */

#idt-ta-reviews,
#idt-ta-reviews *{
    box-sizing:border-box;
}

#idt-ta-reviews{
    --navy:#0C2D62;
    --blue:#2E6095;
    --royal:#123B72;
    --green:#00AF87;
    --text:#5C6672;
    --muted:#7C8DA2;
    --border:#D8E0EA;
    --soft:#F5F8FC;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:68px 24px 64px;

    background:#FCFAF6;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   DECORATIONS
========================================================= */

#idt-ta-reviews::before{
    content:"";

    position:absolute;

    width:330px;
    height:330px;

    left:-180px;
    top:-150px;

    border:2px solid rgba(46,96,149,.10);

    border-radius:50%;

    box-shadow:
        0 0 0 35px rgba(46,96,149,.025),
        0 0 0 70px rgba(46,96,149,.015);

    pointer-events:none;
}


#idt-ta-reviews::after{
    content:"";

    position:absolute;

    width:420px;
    height:220px;

    right:-160px;
    bottom:-100px;

    border:2px dashed rgba(46,96,149,.16);

    border-radius:50%;

    transform:rotate(-15deg);

    pointer-events:none;
}


#idt-ta-reviews .idt-ta-dots-bg{
    position:absolute;

    right:45px;
    bottom:55px;

    width:115px;
    height:75px;

    opacity:.30;

    background-image:
        radial-gradient(
            circle,
            #2E6095 2px,
            transparent 2.5px
        );

    background-size:20px 20px;

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-ta-reviews .idt-ta-container{
    position:relative;
    z-index:2;

    width:1200px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#idt-ta-reviews .idt-ta-head{
    max-width:760px;

    margin:0 auto;

    text-align:center;
}


#idt-ta-reviews .idt-ta-eyebrow{
    margin:0 0 3px;

    color:#2E6095;

    font-family:"Montez",cursive;

    font-size:39px;
    line-height:1.05;
    font-weight:400;
}


/* decorative arrow */

#idt-ta-reviews .idt-ta-arrow-mark{
    width:46px;
    height:24px;

    margin:2px auto 2px;

    display:block;

    color:#2E6095;
}


#idt-ta-reviews .idt-ta-heading{
    margin:0 0 12px;

    color:#0C2D62;

    font-family:"Playfair Display",Georgia,serif;

    font-size:40px;
    line-height:1.18;
    font-weight:600;

    letter-spacing:-.8px;
}


#idt-ta-reviews .idt-ta-rule{
    position:relative;

    width:46px;
    height:3px;

    margin:0 auto 18px;

    border-radius:3px;

    background:#0C2D62;
}


#idt-ta-reviews .idt-ta-rule::after{
    content:"";

    position:absolute;

    right:-10px;
    top:-2px;

    width:7px;
    height:7px;

    border-radius:50%;

    background:#FF5D00;
}


#idt-ta-reviews .idt-ta-sub{
    max-width:590px;

    margin:0 auto 24px;

    color:#5C6672;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:14px;
    line-height:1.7;
}


/* =========================================================
   TRIPADVISOR RATING BAR
========================================================= */

#idt-ta-reviews .idt-ta-rating{
    display:flex;

    align-items:center;
    justify-content:center;

    flex-wrap:wrap;

    gap:11px;

    color:#0C2D62;

    font-size:13px;
}


#idt-ta-reviews .idt-ta-brand{
    display:flex;

    align-items:center;

    gap:7px;

    font-weight:700;
}


/* Tripadvisor icon */

#idt-ta-reviews .idt-ta-owl{
    width:29px;
    height:29px;

    flex:0 0 29px;

    display:flex;

    align-items:center;
    justify-content:center;

    padding:5px;

    border:1px solid #BFE3D6;

    border-radius:50%;

    background:#fff;
}


#idt-ta-reviews .idt-ta-owl svg{
    width:100%;
    height:100%;

    fill:#00AF87;
}


#idt-ta-reviews .idt-ta-divider{
    width:1px;
    height:19px;

    background:#D8E0EA;
}


#idt-ta-reviews .idt-ta-rating-number{
    color:#00AF87;

    font-size:16px;
    font-weight:700;
}


#idt-ta-reviews .idt-ta-rating-dots{
    display:flex;

    gap:3px;
}


#idt-ta-reviews .idt-ta-rating-dots span{
    width:11px;
    height:11px;

    border-radius:50%;

    background:#00AF87;
}


#idt-ta-reviews .idt-ta-review-count{
    color:#5C6672;
}


#idt-ta-reviews .idt-ta-info{
    width:16px;
    height:16px;

    display:flex;

    align-items:center;
    justify-content:center;

    border:1px solid #A8B7C8;

    border-radius:50%;

    color:#7C8DA2;

    font-family:Georgia,serif;

    font-size:10px;
    font-style:italic;
}


/* =========================================================
   SLIDER
========================================================= */

#idt-ta-reviews .idt-ta-slider{
    position:relative;

    margin-top:43px;
}


#idt-ta-reviews .idt-ta-viewport{
    width:100%;

    overflow:hidden;

    padding:5px 0 15px;
}


#idt-ta-reviews .idt-ta-track{
    display:flex;

    align-items:stretch;

    gap:22px;

    cursor:grab;

    user-select:none;

    will-change:transform;

    transition:
        transform .55s
        cubic-bezier(.22,.61,.36,1);
}


#idt-ta-reviews .idt-ta-track.idt-dragging,
#idt-ta-reviews .idt-ta-track.idt-jump{
    transition:none !important;
}


#idt-ta-reviews .idt-ta-track.idt-dragging{
    cursor:grabbing;
}


/* =========================================================
   REVIEW CARD
========================================================= */

#idt-ta-reviews .idt-ta-card{
    position:relative;

    flex:
        0 0
        calc((100% - 44px) / 3);

    min-width:0;

    display:flex;
    flex-direction:column;

    padding:27px 24px 22px;

    background:#fff;

    border:1px solid #D8E0EA;

    border-radius:17px;

    box-shadow:
        0 10px 26px
        rgba(19,45,82,.05);

    transform:translate3d(0,0,0);

    transition:
        transform .30s ease,
        border-color .30s ease,
        box-shadow .30s ease;
}


@media(hover:hover) and (pointer:fine){

    #idt-ta-reviews .idt-ta-card:hover{
        transform:translate3d(0,-7px,0);

        border-color:#79BDF2;

        box-shadow:
            0 18px 35px
            rgba(19,45,82,.10);
    }

}


/* quote */

#idt-ta-reviews .idt-ta-quote{
    position:absolute;

    left:20px;
    top:12px;

    color:#D8E0EA;

    font-family:Georgia,serif;

    font-size:44px;
    line-height:1;

    pointer-events:none;
}


/* top */

#idt-ta-reviews .idt-ta-card-top{
    position:relative;
    z-index:2;

    display:flex;

    align-items:flex-start;
    justify-content:space-between;

    gap:12px;

    margin-bottom:11px;
}


/* avatar */

#idt-ta-reviews .idt-ta-avatar{
    width:48px;
    height:48px;

    flex:0 0 48px;

    display:grid;

    place-items:center;

    border-radius:50%;

    background:#0C2D62;

    color:#fff;

    font-size:17px;
    font-weight:700;

    box-shadow:
        0 5px 12px
        rgba(12,45,98,.15);
}


/* mini Tripadvisor */

#idt-ta-reviews .idt-ta-mini-brand{
    display:flex;

    align-items:center;

    gap:5px;

    color:#0C2D62;

    font-size:11px;
    font-weight:700;
}


#idt-ta-reviews .idt-ta-mini-brand .idt-ta-owl{
    width:22px;
    height:22px;

    flex-basis:22px;

    padding:4px;
}


/* author */

#idt-ta-reviews .idt-ta-name{
    margin:0 0 2px;

    color:#0C2D62;

    font-size:14px;
    font-weight:700;
}


#idt-ta-reviews .idt-ta-date{
    margin:0 0 13px;

    color:#7C8DA2;

    font-size:11px;
}


/* stars */

#idt-ta-reviews .idt-ta-stars{
    display:flex;

    align-items:center;

    gap:2px;

    margin-bottom:11px;

    color:#00AF87;
}


#idt-ta-reviews .idt-ta-stars span{
    font-size:15px;
    line-height:1;
}


/* review */

#idt-ta-reviews .idt-ta-text{
    margin:0 0 17px;

    color:#5C6672;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:13px;
    line-height:1.7;

    flex:1;
}


/* package tag */

#idt-ta-reviews .idt-ta-tag{
    display:flex;

    align-items:flex-start;

    gap:8px;

    padding-top:14px;

    border-top:1px solid #EEF4FA;

    color:#5C6672;

    font-size:11px;
    line-height:1.55;
    font-weight:500;
}


#idt-ta-reviews .idt-ta-tag svg{
    width:15px;
    height:15px;

    flex:0 0 15px;

    margin-top:2px;

    fill:none;

    stroke:#2E6095;

    stroke-width:2;
}


/* =========================================================
   NAVIGATION
========================================================= */

#idt-ta-reviews .idt-ta-nav{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:16px;

    margin-top:20px;
}


#idt-ta-reviews .idt-ta-arrow{
    width:40px;
    height:40px;

    padding:0;

    display:flex;

    align-items:center;
    justify-content:center;

    border:1px solid #D8E0EA;

    border-radius:50%;

    background:#fff;

    color:#123B72;

    cursor:pointer;

    transition:
        transform .25s ease,
        background .25s ease,
        color .25s ease,
        border-color .25s ease;
}


#idt-ta-reviews .idt-ta-arrow:hover{
    transform:translateY(-2px);

    background:#123B72;

    border-color:#123B72;

    color:#fff;
}


#idt-ta-reviews .idt-ta-arrow svg{
    width:17px;
    height:17px;

    fill:none;

    stroke:currentColor;

    stroke-width:2.5;
}


/* pagination */

#idt-ta-reviews .idt-ta-slider-dots{
    display:flex;

    align-items:center;

    gap:7px;
}


#idt-ta-reviews .idt-ta-slider-dots button{
    width:8px;
    height:8px;

    padding:0;

    border:0;

    border-radius:50%;

    background:#D8E0EA;

    cursor:pointer;

    transition:
        width .25s ease,
        border-radius .25s ease,
        background .25s ease;
}


#idt-ta-reviews
.idt-ta-slider-dots
button.active{

    width:21px;

    border-radius:6px;

    background:#123B72;
}


/* =========================================================
   BOTTOM CTA
========================================================= */

#idt-ta-reviews .idt-ta-cta{
    margin-top:28px;

    padding:16px 22px;

    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:20px;

    border:1px solid #D8E0EA;

    border-radius:15px;

    background:#F5F8FC;
}


#idt-ta-reviews .idt-ta-cta-left{
    display:flex;

    align-items:center;

    gap:14px;
}


#idt-ta-reviews .idt-ta-cta-icon{
    width:43px;
    height:43px;

    flex:0 0 43px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:#EEF4FA;
}


#idt-ta-reviews .idt-ta-cta-title{
    margin:0 0 2px;

    color:#0C2D62;

    font-size:13px;
    font-weight:700;
}


#idt-ta-reviews .idt-ta-cta-sub{
    margin:0;

    color:#5C6672;

    font-family:"DM Sans","Manrope",Arial,sans-serif;

    font-size:11.5px;
}


#idt-ta-reviews .idt-ta-btn{
    min-height:44px;

    padding:0 18px;

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    border-radius:9px;

    background:#0C2D62;

    color:#fff !important;

    font-size:12px;
    font-weight:700;

    text-decoration:none !important;

    white-space:nowrap;

    transition:
        transform .25s ease,
        background .25s ease,
        box-shadow .25s ease;
}


#idt-ta-reviews .idt-ta-btn:hover{
    transform:translateY(-2px);

    background:#123B72;

    color:#fff !important;

    box-shadow:
        0 9px 20px
        rgba(12,45,98,.18);
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    #idt-ta-reviews{
        padding:58px 20px;
    }

    #idt-ta-reviews .idt-ta-card{
        flex:
            0 0
            calc((100% - 22px) / 2);
    }

    #idt-ta-reviews .idt-ta-heading{
        font-size:35px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:640px){

    #idt-ta-reviews{
        padding:44px 15px 48px;
    }

    #idt-ta-reviews .idt-ta-eyebrow{
        font-size:29px;
    }

    #idt-ta-reviews .idt-ta-heading{
        font-size:29px;
    }

    #idt-ta-reviews .idt-ta-sub{
        font-size:12.5px;
    }

    #idt-ta-reviews .idt-ta-rating{
        gap:8px;
    }

    #idt-ta-reviews .idt-ta-divider{
        display:none;
    }

    #idt-ta-reviews .idt-ta-card{
        flex:0 0 100%;

        padding:24px 20px 20px;
    }

    #idt-ta-reviews .idt-ta-cta{
        flex-direction:column;

        align-items:stretch;

        text-align:center;
    }

    #idt-ta-reviews .idt-ta-cta-left{
        flex-direction:column;
    }

    #idt-ta-reviews .idt-ta-btn{
        width:100%;
    }

}
</style>


<section id="idt-ta-reviews">

    <div class="idt-ta-dots-bg"></div>


    <div class="idt-ta-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="idt-ta-head">

            <p class="idt-ta-eyebrow">
                Loved by Travelers
            </p>


            <svg
                class="idt-ta-arrow-mark"
                viewBox="0 0 46 28"
                fill="none">

                <path
                    d="M2 24C16 22 32 18 40 6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-dasharray="1 6"
                    stroke-linecap="round">
                </path>

                <path
                    d="M28 4L41 5L37 17"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                </path>

            </svg>


            <h2 class="idt-ta-heading">
                What Our Travelers Say
            </h2>


            <div class="idt-ta-rule"></div>


            <p class="idt-ta-sub">
                Real reviews and ratings from Tripadvisor. See why travelers trust us for their perfect India trips.
            </p>



            <!-- RATING -->

            <div class="idt-ta-rating">


                <span class="idt-ta-brand">

                    <span class="idt-ta-owl">

                        <svg viewBox="0 0 24 24">
                            <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6zM12 9.2l1.5 2.6L12 14.5l-1.5-2.7L12 9.2z"></path>
                        </svg>

                    </span>

                    Tripadvisor

                </span>


                <span class="idt-ta-divider"></span>


                <span class="idt-ta-rating-number">
                    4.8
                </span>


                <span class="idt-ta-rating-dots">

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                </span>


                <span class="idt-ta-review-count">
                    18 reviews
                </span>


                <span
                    class="idt-ta-info"
                    title="Tripadvisor Rating">
                    i
                </span>


            </div>

        </div>



        <!-- =================================================
             SLIDER
        ================================================== -->

        <div class="idt-ta-slider">


            <div class="idt-ta-viewport">

                <div
                    class="idt-ta-track"
                    id="idtTaTrack">


                    <!-- REVIEW 1 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>


                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                E
                            </div>


                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">

                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>

                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            Excursion29608869537
                        </p>

                        <p class="idt-ta-date">
                            August 22, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            Shahrukh is good at Japanese and explained various things to me. Thank you very much.
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            From Delhi: Taj Mahal and Agra Tour by Gatimaan Express Train

                        </div>

                    </article>



                    <!-- REVIEW 2 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>

                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                V
                            </div>

                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            Voyage01418374719
                        </p>

                        <p class="idt-ta-date">
                            August 11, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            I had a comfortable trip! The guides were also friendly and fun!
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            From Delhi: 8 Day Golden Triangle Tour with Varanasi

                        </div>

                    </article>



                    <!-- REVIEW 3 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>

                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                N
                            </div>

                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            NorthStar61973662515
                        </p>

                        <p class="idt-ta-date">
                            July 10, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            Our experience with the guide and driver was outstanding. Everything was handled professionally and efficiently. Our driver was punctual and courteous, while our guide was knowledgeable, friendly and adapted the tour to our interests.
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            7 Days Golden Triangle with Tiger Safari &amp; Varanasi

                        </div>

                    </article>



                    <!-- REVIEW 4 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>

                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                S
                            </div>

                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            Sophia Atwell
                        </p>

                        <p class="idt-ta-date">
                            July 5, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            This was our first trip to India and the 7-day tour was perfect for seeing the cultural highlights. Our transportation was comfortable, our driver was reliable and attentive, and our guides spoke good English and German.
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            7 Days Golden Triangle with Tiger Safari &amp; Varanasi

                        </div>

                    </article>



                    <!-- REVIEW 5 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>

                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                E
                            </div>

                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            Explore58151649937
                        </p>

                        <p class="idt-ta-date">
                            June 10, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            The guide was excellent and the Taj Mahal experience was fantastic. We were well taken care of and the trip was comfortable, safe, efficient, interesting and fun.
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            Taj Mahal &amp; Agra Tour by Gatimaan Express Train

                        </div>

                    </article>



                    <!-- REVIEW 6 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>

                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                S
                            </div>

                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            Stay04622096502
                        </p>

                        <p class="idt-ta-date">
                            June 6, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            This tour is amazing and great value. Pickup was right on time, the train ride was smooth and our tour of the Taj Mahal and other sights was excellent.
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            Taj Mahal &amp; Agra Tour by Gatimaan Express Train

                        </div>

                    </article>



                    <!-- REVIEW 7 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>

                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                R
                            </div>

                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            Ronald G
                        </p>

                        <p class="idt-ta-date">
                            May 20, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            A perfectly organized trip with all the highlights of the Golden Triangle, Tiger Safari in Ranthambore and Varanasi, with very good guides and drivers.
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            Golden Triangle with Tiger Safari &amp; Varanasi

                        </div>

                    </article>



                    <!-- REVIEW 8 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>

                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                N
                            </div>

                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            Nick
                        </p>

                        <p class="idt-ta-date">
                            May 9, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            Anshul did a great job organizing my trip through Rajasthan. All hotels, transport and guides were sorted in each location and everything ran like clockwork.
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            Rajasthan &amp; Golden Triangle Tour

                        </div>

                    </article>



                    <!-- REVIEW 9 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>

                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                J
                            </div>

                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            Juan Andrés P
                        </p>

                        <p class="idt-ta-date">
                            April 21, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            It was a very enjoyable experience overall. Having a private air-conditioned car and Spanish-speaking guides made our journey comfortable and easy.
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            Golden Triangle with Tiger Safari &amp; Varanasi

                        </div>

                    </article>



                    <!-- REVIEW 10 -->

                    <article class="idt-ta-card">

                        <span class="idt-ta-quote">“</span>

                        <div class="idt-ta-card-top">

                            <div class="idt-ta-avatar">
                                Q
                            </div>

                            <span class="idt-ta-mini-brand">

                                <span class="idt-ta-owl">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </span>

                                Tripadvisor

                            </span>

                        </div>


                        <p class="idt-ta-name">
                            Quest31052195091
                        </p>

                        <p class="idt-ta-date">
                            April 16, 2026
                        </p>


                        <div class="idt-ta-stars">
                            <span>●</span><span>●</span><span>●</span><span>●</span><span>●</span>
                        </div>


                        <p class="idt-ta-text">
                            This was one of the best organized tours I have done. Our driver and guide went above and beyond to make our trip special. Highly recommend.
                        </p>


                        <div class="idt-ta-tag">

                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>

                            Golden Triangle with Tiger Safari &amp; Varanasi

                        </div>

                    </article>


                </div>

            </div>



            <!-- =================================================
                 NAVIGATION
            ================================================== -->

            <div class="idt-ta-nav">


                <button
                    type="button"
                    class="idt-ta-arrow"
                    id="idtTaPrev"
                    aria-label="Previous Reviews">

                    <svg viewBox="0 0 24 24">
                        <path d="M15 18L9 12L15 6"></path>
                    </svg>

                </button>


                <div
                    class="idt-ta-slider-dots"
                    id="idtTaDots">
                </div>


                <button
                    type="button"
                    class="idt-ta-arrow"
                    id="idtTaNext"
                    aria-label="Next Reviews">

                    <svg viewBox="0 0 24 24">
                        <path d="M9 18L15 12L9 6"></path>
                    </svg>

                </button>


            </div>


        </div>



        <!-- =================================================
             BOTTOM CTA
        ================================================== -->

        <div class="idt-ta-cta">


            <div class="idt-ta-cta-left">


                <div class="idt-ta-cta-icon">

                    <span class="idt-ta-owl">

                        <svg viewBox="0 0 24 24">
                            <path d="M12 5.5c-2.3 0-4.4.5-6.2 1.5H2l1.2 1.7A5.8 5.8 0 1 0 12 16a5.8 5.8 0 1 0 8.8-7.3L22 7h-3.8A12.5 12.5 0 0 0 12 5.5zm-6 10.3a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm12 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                        </svg>

                    </span>

                </div>


                <div>

                    <p class="idt-ta-cta-title">
                        See all reviews on Tripadvisor
                    </p>

                    <p class="idt-ta-cta-sub">
                        Check out more reviews from our happy travelers.
                    </p>

                </div>


            </div>


            <a
                href="https://www.tripadvisor.com/Attraction_Review-g304551-d33250443-Reviews-India_Day_Trip-New_Delhi_National_Capital_Territory_of_Delhi.html"
                target="_blank"
                rel="noopener noreferrer"
                class="idt-ta-btn">

                View on Tripadvisor

                <svg
                    width="14"
                    height="14"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2">

                    <path d="M18 13V19A2 2 0 0 1 16 21H5A2 2 0 0 1 3 19V8A2 2 0 0 1 5 6H11"></path>

                    <path d="M15 3H21V9"></path>

                    <path d="M10 14L21 3"></path>

                </svg>

            </a>


        </div>


    </div>

</section>


<script>
(function(){

    const section =
        document.getElementById(
            "idt-ta-reviews"
        );

    if(!section){
        return;
    }


    const slider =
        section.querySelector(
            ".idt-ta-slider"
        );

    const track =
        section.querySelector(
            "#idtTaTrack"
        );

    const prev =
        section.querySelector(
            "#idtTaPrev"
        );

    const next =
        section.querySelector(
            "#idtTaNext"
        );

    const dotsWrap =
        section.querySelector(
            "#idtTaDots"
        );


    if(
        !slider ||
        !track ||
        !prev ||
        !next ||
        !dotsWrap
    ){
        return;
    }



    /* =====================================================
       ORIGINAL CARDS
    ====================================================== */

    const originals =
        Array.from(
            track.children
        );


    const total =
        originals.length;


    if(!total){
        return;
    }



    /* =====================================================
       CREATE TRUE INFINITE LOOP
    ====================================================== */

    function cloneCards(){

        return originals.map(
            function(card){

                const clone =
                    card.cloneNode(true);

                clone.setAttribute(
                    "aria-hidden",
                    "true"
                );

                return clone;

            }
        );

    }


    track.innerHTML = "";


    cloneCards().forEach(
        function(card){

            track.appendChild(card);

        }
    );


    originals.forEach(
        function(card){

            track.appendChild(card);

        }
    );


    cloneCards().forEach(
        function(card){

            track.appendChild(card);

        }
    );


    let slides =
        Array.from(
            track.children
        );


    /*
       First actual card begins
       after first cloned set.
    */

    let index =
        total;



    /* =====================================================
       CARD STEP
    ====================================================== */

    function getGap(){

        const styles =
            window.getComputedStyle(
                track
            );

        return (
            parseFloat(
                styles.columnGap ||
                styles.gap
            ) || 22
        );

    }


    function cardStep(){

        if(!slides.length){
            return 0;
        }

        return (
            slides[0]
            .getBoundingClientRect()
            .width +
            getGap()
        );

    }



    /* =====================================================
       REAL INDEX
    ====================================================== */

    function realIndex(){

        return (
            (
                index -
                total
            ) %
            total +
            total
        ) %
        total;

    }



    /* =====================================================
       RENDER
    ====================================================== */

    function render(animate){

        if(!animate){

            track.classList.add(
                "idt-jump"
            );

        }


        track.style.transform =
            "translate3d(-" +
            (
                index *
                cardStep()
            ) +
            "px,0,0)";


        if(!animate){

            void track.offsetWidth;

            track.classList.remove(
                "idt-jump"
            );

        }


        updateDots();

    }



    /* =====================================================
       DOTS
    ====================================================== */

    function buildDots(){

        dotsWrap.innerHTML = "";


        originals.forEach(
            function(card,i){

                const dot =
                    document.createElement(
                        "button"
                    );


                dot.type =
                    "button";


                dot.setAttribute(
                    "aria-label",
                    "Go to review " +
                    (i + 1)
                );


                dot.addEventListener(
                    "click",
                    function(){

                        index =
                            total + i;

                        render(true);

                        restartAutoplay();

                    }
                );


                dotsWrap.appendChild(
                    dot
                );

            }
        );

    }


    function updateDots(){

        const dots =
            dotsWrap.querySelectorAll(
                "button"
            );


        const active =
            realIndex();


        dots.forEach(
            function(dot,i){

                dot.classList.toggle(
                    "active",
                    i === active
                );

            }
        );

    }



    /* =====================================================
       MOVE
    ====================================================== */

    function goNext(){

        index++;

        render(true);

    }


    function goPrev(){

        index--;

        render(true);

    }



    /* =====================================================
       LOOP SNAP
    ====================================================== */

    track.addEventListener(
        "transitionend",
        function(event){

            if(
                event.propertyName !==
                "transform"
            ){
                return;
            }


            if(
                index >=
                total * 2
            ){

                index -= total;

                render(false);

            }


            else if(
                index < total
            ){

                index += total;

                render(false);

            }

        }
    );



    /* =====================================================
       BUTTONS
    ====================================================== */

    next.addEventListener(
        "click",
        function(){

            goNext();

            restartAutoplay();

        }
    );


    prev.addEventListener(
        "click",
        function(){

            goPrev();

            restartAutoplay();

        }
    );



    /* =====================================================
       AUTOPLAY
    ====================================================== */

    let autoplayTimer = null;

    const AUTOPLAY_DELAY =
        4000;


    function stopAutoplay(){

        if(autoplayTimer){

            clearInterval(
                autoplayTimer
            );

            autoplayTimer =
                null;

        }

    }


    function startAutoplay(){

        stopAutoplay();


        autoplayTimer =
            setInterval(
                goNext,
                AUTOPLAY_DELAY
            );

    }


    function restartAutoplay(){

        stopAutoplay();

        startAutoplay();

    }


    slider.addEventListener(
        "mouseenter",
        stopAutoplay
    );


    slider.addEventListener(
        "mouseleave",
        startAutoplay
    );



    /* =====================================================
       DRAG / SWIPE
    ====================================================== */

    let dragging =
        false;

    let startX =
        0;

    let deltaX =
        0;

    let startOffset =
        0;


    function getPointerX(event){

        if(
            event.touches &&
            event.touches.length
        ){

            return (
                event
                .touches[0]
                .clientX
            );

        }


        return event.clientX;

    }


    function dragStart(event){

        dragging =
            true;

        deltaX =
            0;

        startX =
            getPointerX(
                event
            );

        startOffset =
            index *
            cardStep();


        track.classList.add(
            "idt-dragging"
        );


        stopAutoplay();

    }


    function dragMove(event){

        if(!dragging){
            return;
        }


        deltaX =
            getPointerX(
                event
            ) -
            startX;


        track.style.transform =
            "translate3d(-" +
            (
                startOffset -
                deltaX
            ) +
            "px,0,0)";

    }


    function dragEnd(){

        if(!dragging){
            return;
        }


        dragging =
            false;


        track.classList.remove(
            "idt-dragging"
        );


        const threshold =
            cardStep() *
            .18;


        if(
            deltaX <=
            -threshold
        ){

            goNext();

        }


        else if(
            deltaX >=
            threshold
        ){

            goPrev();

        }


        else{

            render(true);

        }


        restartAutoplay();

    }



    /* mouse */

    track.addEventListener(
        "mousedown",
        dragStart
    );


    window.addEventListener(
        "mousemove",
        dragMove
    );


    window.addEventListener(
        "mouseup",
        dragEnd
    );



    /* touch */

    track.addEventListener(
        "touchstart",
        dragStart,
        {
            passive:true
        }
    );


    track.addEventListener(
        "touchmove",
        dragMove,
        {
            passive:true
        }
    );


    track.addEventListener(
        "touchend",
        dragEnd
    );



    track.addEventListener(
        "dragstart",
        function(event){

            event.preventDefault();

        }
    );



    /* =====================================================
       RESIZE FIX
    ====================================================== */

    let resizeTimer;


    window.addEventListener(
        "resize",
        function(){

            clearTimeout(
                resizeTimer
            );


            resizeTimer =
                setTimeout(
                    function(){

                        render(false);

                    },
                    100
                );

        }
    );



    /* =====================================================
       INIT
    ====================================================== */

    buildDots();

    render(false);

    startAutoplay();

})();
</script>