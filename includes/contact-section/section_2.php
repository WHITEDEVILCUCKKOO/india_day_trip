<!-- =========================================================
     INDIA DAY TRIP — CONTACT US
     SECTION 02 — CONTACT FORM + INFO
     COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

/* =========================================================
   BASE
========================================================= */

#idt-contact-section-two,
#idt-contact-section-two *{
    box-sizing:border-box;
}

#idt-contact-section-two{

    --idt-navy:#0C2D62;
    --idt-deep:#123B72;
    --idt-blue:#2E6095;
    --idt-sky:#79BDF2;

    --idt-orange:#FF5D00;
    --idt-orange-soft:#FF7A2F;

    --idt-dark:#171817;
    --idt-text:#617083;
    --idt-muted:#7B8794;

    --idt-cream:#F7F3E9;
    --idt-warm:#FCFAF6;
    --idt-white:#FFFFFF;

    --idt-line:#E4E8EC;

    position:relative;

    width:100%;
    max-width:100%;

    overflow:hidden;

    padding:82px 24px 86px;

    background:
        radial-gradient(
            circle at 4% 10%,
            rgba(46,96,149,.08),
            transparent 27%
        ),
        radial-gradient(
            circle at 96% 88%,
            rgba(255,93,0,.055),
            transparent 25%
        ),
        var(--idt-warm);

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   DECORATION
========================================================= */

#idt-contact-section-two::before{
    content:"";

    position:absolute;

    top:70px;
    left:-135px;

    width:290px;
    height:290px;

    border-radius:50%;

    border:
        1px solid
        rgba(12,45,98,.08);

    pointer-events:none;
}


#idt-contact-section-two::after{
    content:"";

    position:absolute;

    right:-90px;
    bottom:-100px;

    width:270px;
    height:270px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(46,96,149,.07),
            transparent 68%
        );

    pointer-events:none;
}


/* =========================================================
   CONTAINER
========================================================= */

#idt-contact-section-two .idt-c2-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1240px;

    margin:0 auto;
}


/* =========================================================
   GRID
========================================================= */

#idt-contact-section-two .idt-c2-grid{

    display:grid;

    grid-template-columns:
        minmax(0,.92fr)
        minmax(500px,1.08fr);

    gap:74px;

    align-items:center;
}


/* =========================================================
   LEFT CONTENT
========================================================= */

#idt-contact-section-two .idt-c2-left{
    width:100%;
    max-width:525px;
}


/* =========================================================
   SCRIPT
========================================================= */

#idt-contact-section-two .idt-c2-script{

    margin:0 0 7px !important;
    padding:0 !important;

    color:var(--idt-blue) !important;

    font-family:"Montez",cursive !important;

    font-size:37px;
    line-height:1;

    font-weight:400;
}


/* =========================================================
   ACCENT LINE
========================================================= */

#idt-contact-section-two .idt-c2-line{

    display:flex;

    align-items:center;

    gap:8px;

    width:max-content;

    margin:0 0 20px;
}


#idt-contact-section-two .idt-c2-line span:first-child{

    display:block;

    width:52px;
    height:2px;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--idt-blue),
            var(--idt-orange)
        );
}


#idt-contact-section-two .idt-c2-line span:last-child{

    display:block;

    width:7px;
    height:7px;

    background:var(--idt-orange);

    transform:rotate(45deg);
}


/* =========================================================
   HEADING
========================================================= */

#idt-contact-section-two .idt-c2-title{

    max-width:510px;

    margin:0 0 20px !important;
    padding:0 !important;

    color:var(--idt-navy) !important;

    font-family:"Playfair Display",Georgia,serif !important;

    font-size:44px;
    line-height:1.13;

    font-weight:700;

    letter-spacing:-1px;
}


#idt-contact-section-two .idt-c2-title span{
    color:var(--idt-blue) !important;
}


/* =========================================================
   DESCRIPTION
========================================================= */

#idt-contact-section-two .idt-c2-desc{

    margin:0 !important;
    padding:0 !important;

    color:var(--idt-text) !important;

    font-size:14px;
    line-height:1.82;

    font-weight:400;

    text-align:left;
}


/* =========================================================
   FEATURE CARDS
========================================================= */

#idt-contact-section-two .idt-c2-features{

    display:grid;

    grid-template-columns:
        repeat(2,minmax(0,1fr));

    gap:14px;

    margin-top:30px;
}


#idt-contact-section-two .idt-c2-feature{

    position:relative;

    min-height:148px;

    padding:19px 17px;

    overflow:hidden;

    border:
        1px solid
        rgba(12,45,98,.10);

    border-radius:15px;

    background:#FFFFFF;

    box-shadow:
        0 8px 26px
        rgba(12,45,98,.045);

    transition:
        transform .28s ease,
        border-color .28s ease,
        box-shadow .28s ease;
}


#idt-contact-section-two .idt-c2-feature::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    width:3px;
    height:100%;

    background:
        linear-gradient(
            180deg,
            var(--idt-orange),
            var(--idt-orange-soft)
        );

    opacity:.88;
}


#idt-contact-section-two .idt-c2-feature:hover{

    transform:translateY(-4px);

    border-color:
        rgba(46,96,149,.26);

    box-shadow:
        0 15px 34px
        rgba(12,45,98,.08);
}


/* =========================================================
   FEATURE ICON
========================================================= */

#idt-contact-section-two .idt-c2-icon{

    display:flex;

    align-items:center;
    justify-content:center;

    width:42px;
    height:42px;

    margin-bottom:13px;

    border-radius:11px;

    background:
        rgba(12,45,98,.06);

    border:
        1px solid
        rgba(12,45,98,.09);

    transition:
        transform .3s ease,
        background .3s ease;
}


#idt-contact-section-two .idt-c2-feature:hover .idt-c2-icon{

    transform:translateY(-2px);

    background:
        rgba(255,93,0,.07);
}


#idt-contact-section-two .idt-c2-icon svg{

    width:20px;
    height:20px;

    fill:none;

    stroke:var(--idt-blue);

    stroke-width:1.8;

    stroke-linecap:round;
    stroke-linejoin:round;
}


/* =========================================================
   FEATURE TEXT
========================================================= */

#idt-contact-section-two .idt-c2-feature h4{

    margin:0 0 6px !important;
    padding:0 !important;

    color:var(--idt-navy) !important;

    font-size:13.5px;
    line-height:1.35;

    font-weight:700;
}


#idt-contact-section-two .idt-c2-feature p{

    margin:0 !important;
    padding:0 !important;

    color:#73808F !important;

    font-size:11px;
    line-height:1.6;
}


/* =========================================================
   FORM CARD
========================================================= */

#idt-contact-section-two .idt-c2-form-card{

    position:relative;

    width:100%;

    padding:37px 36px 35px;

    overflow:hidden;

    border:
        1px solid
        rgba(12,45,98,.11);

    border-radius:20px;

    background:#FFFFFF;

    box-shadow:
        0 22px 60px
        rgba(12,45,98,.10);
}


/* TOP ACCENT */

#idt-contact-section-two .idt-c2-form-card::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:4px;

    background:
        linear-gradient(
            90deg,
            var(--idt-navy) 0%,
            var(--idt-blue) 72%,
            var(--idt-orange) 100%
        );
}


/* SOFT GLOW */

#idt-contact-section-two .idt-c2-form-card::after{

    content:"";

    position:absolute;

    top:-105px;
    right:-105px;

    width:240px;
    height:240px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(46,96,149,.08),
            transparent 70%
        );

    pointer-events:none;
}


/* =========================================================
   FORM HEADER
========================================================= */

#idt-contact-section-two .idt-c2-form-head{

    position:relative;
    z-index:2;

    margin-bottom:25px;
}


#idt-contact-section-two .idt-c2-form-head h3{

    margin:0 0 8px !important;
    padding:0 !important;

    color:var(--idt-navy) !important;

    font-family:"Playfair Display",Georgia,serif !important;

    font-size:28px;
    line-height:1.28;

    font-weight:700;
}


#idt-contact-section-two .idt-c2-form-head p{

    max-width:500px;

    margin:0 !important;
    padding:0 !important;

    color:#718090 !important;

    font-size:12.5px;
    line-height:1.65;
}


/* =========================================================
   FLUENT FORM ID 3 — COMPLETE SCOPED DESIGN
========================================================= */

#idt-contact-section-two .idt-c2-fluent-wrap{
    position:relative;
    z-index:2;
    width:100%;
}

#idt-contact-section-two .idt-c2-fluent-wrap .fluentform,
#idt-contact-section-two .idt-c2-fluent-wrap .frm-fluent-form,
#idt-contact-section-two .idt-c2-fluent-wrap form,
#idt-contact-section-two .idt-c2-fluent-wrap .ff-el-group,
#idt-contact-section-two .idt-c2-fluent-wrap .ff-el-input--content{
    width:100% !important;
    max-width:100% !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap .ff-el-group{
    margin:0 0 15px !important;
    padding:0 !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap .ff-el-input--label{
    display:block !important;
    width:100% !important;
    margin:0 0 7px !important;
    padding:0 !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap .ff-el-input--label label{
    display:block !important;
    margin:0 !important;
    padding:0 !important;
    color:#284665 !important;
    font-family:"Manrope",Arial,sans-serif !important;
    font-size:11.5px !important;
    line-height:1.4 !important;
    font-weight:700 !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap input:not([type="checkbox"]):not([type="radio"]):not([type="submit"]),
#idt-contact-section-two .idt-c2-fluent-wrap select,
#idt-contact-section-two .idt-c2-fluent-wrap textarea{
    display:block !important;
    width:100% !important;
    max-width:100% !important;
    min-width:0 !important;
    margin:0 !important;
    border:1px solid #DCE3E8 !important;
    border-radius:10px !important;
    outline:none !important;
    background:#FCFDFD !important;
    color:#29435E !important;
    font-family:"Manrope",Arial,sans-serif !important;
    font-size:12.5px !important;
    font-weight:500 !important;
    box-shadow:none !important;
    transition:border-color .25s ease,box-shadow .25s ease,background .25s ease !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap input:not([type="checkbox"]):not([type="radio"]):not([type="submit"]),
#idt-contact-section-two .idt-c2-fluent-wrap select{
    height:48px !important;
    min-height:48px !important;
    padding:0 14px !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap textarea{
    min-height:115px !important;
    padding:13px 14px !important;
    resize:vertical !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap input::placeholder,
#idt-contact-section-two .idt-c2-fluent-wrap textarea::placeholder{
    color:#9BA6AF !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap input:focus,
#idt-contact-section-two .idt-c2-fluent-wrap select:focus,
#idt-contact-section-two .idt-c2-fluent-wrap textarea:focus{
    border-color:rgba(46,96,149,.60) !important;
    background:#FFFFFF !important;
    box-shadow:0 0 0 3px rgba(46,96,149,.08) !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap .ff-btn-submit,
#idt-contact-section-two .idt-c2-fluent-wrap button[type="submit"],
#idt-contact-section-two .idt-c2-fluent-wrap input[type="submit"]{
    display:flex !important;
    align-items:center !important;
    justify-content:center !important;
    width:100% !important;
    min-height:50px !important;
    margin:2px 0 0 !important;
    padding:12px 23px !important;
    border:0 !important;
    border-radius:10px !important;
    cursor:pointer !important;
    background:var(--idt-navy) !important;
    color:#FFFFFF !important;
    font-family:"Manrope",Arial,sans-serif !important;
    font-size:12.5px !important;
    line-height:1.2 !important;
    font-weight:700 !important;
    text-decoration:none !important;
    box-shadow:0 10px 25px rgba(12,45,98,.20) !important;
    transition:transform .25s ease,background .25s ease,box-shadow .25s ease !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap .ff-btn-submit:hover,
#idt-contact-section-two .idt-c2-fluent-wrap button[type="submit"]:hover,
#idt-contact-section-two .idt-c2-fluent-wrap input[type="submit"]:hover{
    transform:translateY(-2px);
    background:var(--idt-deep) !important;
    color:#FFFFFF !important;
    box-shadow:0 14px 30px rgba(12,45,98,.24) !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap .ff-el-is-error input,
#idt-contact-section-two .idt-c2-fluent-wrap .ff-el-is-error select,
#idt-contact-section-two .idt-c2-fluent-wrap .ff-el-is-error textarea{
    border-color:#D84C4C !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap .error,
#idt-contact-section-two .idt-c2-fluent-wrap .text-danger,
#idt-contact-section-two .idt-c2-fluent-wrap .ff-el-is-error .error{
    font-family:"Manrope",Arial,sans-serif !important;
    font-size:11px !important;
    line-height:1.5 !important;
}

#idt-contact-section-two .idt-c2-fluent-wrap .ff-message-success{
    margin:10px 0 0 !important;
    padding:14px !important;
    border-radius:10px !important;
    font-family:"Manrope",Arial,sans-serif !important;
    font-size:12.5px !important;
    line-height:1.6 !important;
}

/* =========================================================
   LAPTOP
========================================================= */

@media(max-width:1200px){

    #idt-contact-section-two{

        padding:
            68px 22px 72px;
    }


    #idt-contact-section-two .idt-c2-container{
        max-width:1060px;
    }


    #idt-contact-section-two .idt-c2-grid{

        grid-template-columns:
            minmax(0,.9fr)
            minmax(460px,1.1fr);

        gap:50px;
    }


    #idt-contact-section-two .idt-c2-title{
        font-size:39px;
    }


    #idt-contact-section-two .idt-c2-desc{
        font-size:13.5px;
    }


    #idt-contact-section-two .idt-c2-form-card{

        padding:
            32px 30px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px) and (min-width:768px){

    #idt-contact-section-two{

        padding:
            56px 22px 60px;
    }


    #idt-contact-section-two .idt-c2-container{

        width:100%;
        max-width:900px;
    }


    #idt-contact-section-two .idt-c2-grid{

        grid-template-columns:
            minmax(0,.9fr)
            minmax(390px,1.1fr);

        gap:32px;
    }


    #idt-contact-section-two .idt-c2-script{
        font-size:30px;
    }


    #idt-contact-section-two .idt-c2-title{
        font-size:32px;
    }


    #idt-contact-section-two .idt-c2-desc{

        font-size:12px;
        line-height:1.68;
    }


    #idt-contact-section-two .idt-c2-features{

        gap:9px;

        margin-top:23px;
    }


    #idt-contact-section-two .idt-c2-feature{

        min-height:128px;

        padding:
            15px 13px;
    }


    #idt-contact-section-two .idt-c2-icon{

        width:36px;
        height:36px;

        margin-bottom:10px;
    }


    #idt-contact-section-two .idt-c2-icon svg{

        width:18px;
        height:18px;
    }


    #idt-contact-section-two .idt-c2-feature h4{
        font-size:11.5px;
    }


    #idt-contact-section-two .idt-c2-feature p{
        font-size:9.5px;
    }


    #idt-contact-section-two .idt-c2-form-card{

        padding:
            27px 24px;
    }


    #idt-contact-section-two .idt-c2-form-head h3{
        font-size:23px;
    }


    #idt-contact-section-two .idt-c2-form-head p{
        font-size:11px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px){

    #idt-contact-section-two{

        padding:
            50px 15px 54px;
    }


    #idt-contact-section-two .idt-c2-grid{

        display:flex;

        flex-direction:column;

        gap:36px;
    }


    #idt-contact-section-two .idt-c2-left{

        width:100%;
        max-width:600px;

        margin:0 auto;

        text-align:center;
    }


    #idt-contact-section-two .idt-c2-script{
        font-size:31px;
    }


    #idt-contact-section-two .idt-c2-line{

        justify-content:center;

        margin:
            0 auto 16px;
    }


    #idt-contact-section-two .idt-c2-title{

        max-width:560px;

        margin:
            0 auto 17px !important;

        font-size:31px;

        line-height:1.2;
    }


    #idt-contact-section-two .idt-c2-desc{

        max-width:570px;

        margin:0 auto !important;

        font-size:13px;
        line-height:1.72;

        text-align:center;
    }


    #idt-contact-section-two .idt-c2-features{

        width:100%;
        max-width:520px;

        margin:
            25px auto 0;

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:10px;

        text-align:left;
    }


    #idt-contact-section-two .idt-c2-feature{

        min-height:132px;

        padding:
            16px 14px;
    }


    #idt-contact-section-two .idt-c2-form-card{

        width:100%;
        max-width:600px;

        margin:0 auto;

        padding:
            28px 22px;

        border-radius:18px;
    }


    #idt-contact-section-two .idt-c2-form-head{
        text-align:center;
    }


    #idt-contact-section-two .idt-c2-form-head h3{
        font-size:24px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media(max-width:430px){

    #idt-contact-section-two{

        padding:
            45px 13px 48px;
    }


    #idt-contact-section-two .idt-c2-script{
        font-size:28px;
    }


    #idt-contact-section-two .idt-c2-title{
        font-size:28px;
    }


    #idt-contact-section-two .idt-c2-desc{
        font-size:12.5px;
    }


    #idt-contact-section-two .idt-c2-features{

        grid-template-columns:1fr;

        gap:10px;
    }


    #idt-contact-section-two .idt-c2-feature{

        min-height:auto;

        padding:
            16px 15px;
    }


    #idt-contact-section-two .idt-c2-form-card{

        padding:
            25px 16px;
    }


    #idt-contact-section-two .idt-c2-form-head h3{
        font-size:22px;
    }

}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:360px){

    #idt-contact-section-two{

        padding-left:10px;
        padding-right:10px;
    }


    #idt-contact-section-two .idt-c2-title{
        font-size:26px;
    }


    #idt-contact-section-two .idt-c2-form-card{

        padding-left:14px;
        padding-right:14px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #idt-contact-section-two .idt-c2-feature,
    #idt-contact-section-two .idt-c2-icon,
    #idt-contact-section-two .idt-c2-submit,
    #idt-contact-section-two .idt-c2-submit svg{

        transition:none;
    }

}

</style>


<section id="idt-contact-section-two">

    <div class="idt-c2-container">

        <div class="idt-c2-grid">


            <!-- =================================================
                 LEFT CONTENT
            ================================================== -->

            <div class="idt-c2-left">


                <p class="idt-c2-script">
                    Start Planning
                </p>


                <div
                    class="idt-c2-line"
                    aria-hidden="true">

                    <span></span>
                    <span></span>

                </div>


                <h2 class="idt-c2-title">
                    Tell Us About Your
                    <span>India Journey</span>
                </h2>


                <p class="idt-c2-desc">
                    Share a few details about your travel plans, preferred destinations, dates, and the kind of experience you are looking for. This helps our team understand your journey and plan it around the way you actually want to travel.
                </p>


                <!-- =================================================
                     FEATURE CARDS
                ================================================== -->

                <div class="idt-c2-features">


                    <div class="idt-c2-feature">

                        <div class="idt-c2-icon">

                            <svg
                                viewBox="0 0 24 24"
                                aria-hidden="true">

                                <path d="M12 21s7-4.4 7-11a7 7 0 1 0-14 0c0 6.6 7 11 7 11z"></path>

                                <circle
                                    cx="12"
                                    cy="10"
                                    r="2.5">
                                </circle>

                            </svg>

                        </div>

                        <h4>
                            Your Destinations
                        </h4>

                        <p>
                            Tell us which places in India you would like to explore.
                        </p>

                    </div>


                    <div class="idt-c2-feature">

                        <div class="idt-c2-icon">

                            <svg
                                viewBox="0 0 24 24"
                                aria-hidden="true">

                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="16"
                                    rx="2">
                                </rect>

                                <path d="M16 3v4M8 3v4M3 10h18"></path>

                            </svg>

                        </div>

                        <h4>
                            Your Travel Dates
                        </h4>

                        <p>
                            Share your expected dates so the journey can be planned smoothly.
                        </p>

                    </div>


                    <div class="idt-c2-feature">

                        <div class="idt-c2-icon">

                            <svg
                                viewBox="0 0 24 24"
                                aria-hidden="true">

                                <circle
                                    cx="9"
                                    cy="8"
                                    r="3">
                                </circle>

                                <path d="M3 20v-2a6 6 0 0 1 12 0v2"></path>

                                <circle
                                    cx="17"
                                    cy="9"
                                    r="2">
                                </circle>

                                <path d="M16 14a5 5 0 0 1 5 5v1"></path>

                            </svg>

                        </div>

                        <h4>
                            Your Travel Style
                        </h4>

                        <p>
                            Private, relaxed, cultural or photography-focused — tell us your preference.
                        </p>

                    </div>


                    <div class="idt-c2-feature">

                        <div class="idt-c2-icon">

                            <svg
                                viewBox="0 0 24 24"
                                aria-hidden="true">

                                <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"></path>

                                <path d="M8 9h8M8 13h5"></path>

                            </svg>

                        </div>

                        <h4>
                            Your Preferences
                        </h4>

                        <p>
                            Add anything important that will help us personalise your experience.
                        </p>

                    </div>


                </div>

            </div>


            <!-- =================================================
                 RIGHT FORM
            ================================================== -->

            <div class="idt-c2-form-card">


                <div class="idt-c2-form-head">

                    <h3>
                        Send Your Travel Inquiry
                    </h3>

                    <p>
                        Fill in the details below and share your India travel plans with our team.
                    </p>

                </div>


                <div class="idt-c2-fluent-wrap">
                    [fluentform id="3"]
                </div>


            </div>


        </div>

    </div>

</section>