<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
#idt-arc-destinations,
#idt-arc-destinations *{
    box-sizing:border-box;
}

#idt-arc-destinations{
    width:100%;
    position:relative;
    overflow:hidden;

    background:#ffffff;

    padding:48px 18px 48px;

    font-family:"Manrope",Arial,sans-serif;
}

#idt-arc-destinations .idt-arc-container{
    width:1800px;
    max-width:100%;
    margin:0 auto;
}


/* =========================================
   HEADING
========================================= */

#idt-arc-destinations .idt-arc-header{
    text-align:center;
    margin-bottom:50px;
}

#idt-arc-destinations .idt-arc-subtitle{
    margin:0 0 4px;

    color:#0C2D62;

    font-family:"Montez",cursive;

    font-size:42px;
    line-height:1;
    font-weight:400;
}

#idt-arc-destinations .idt-arc-title{
    margin:0;

    color:#0C2D62;

    font-family:"Playfair Display",Georgia,serif;

    font-size:46px;
    line-height:1.12;
    font-weight:600;

    letter-spacing:-1px;
}



#idt-arc-destinations .idt-arc-title::after{
    content:"";
    display:block;
    width:42px;
    height:2px;
    margin:12px auto 0;
    border-radius:999px;
    background:#FF5D00;
}

/* =========================================
   SLIDER
========================================= */

#idt-arc-destinations .idt-arc-slider{
    position:relative;

    width:100%;
    height:440px;

    overflow:hidden;

    touch-action:pan-y;
    user-select:none;
    -webkit-user-select:none;

    cursor:grab;
}

#idt-arc-destinations .idt-arc-slider:active{
    cursor:grabbing;
}


/* =========================================
   CARD
========================================= */

#idt-arc-destinations .idt-arc-card{
    position:absolute;

    top:0;
    left:50%;

    width:300px;

    opacity:0;

    pointer-events:none;

    transform:
        translate3d(-50%,130px,0)
        scale(.88);

    transition:
        transform .95s cubic-bezier(.22,.72,.22,1),
        opacity .45s ease;

    will-change:transform,opacity;
}


/* CARD INNER */

#idt-arc-destinations .idt-arc-card-inner{
    width:100%;

    text-align:center;

    transform-origin:center center;

    transition:
        transform .95s cubic-bezier(.22,.72,.22,1);
}


/* =========================================
   IMAGE
========================================= */

#idt-arc-destinations .idt-arc-image{
    width:100%;
    height:300px;

    overflow:hidden;

    border-radius:23px;

    background:#eeeeee;
}

#idt-arc-destinations .idt-arc-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;

    transform:scale(1);

    transition:transform .5s ease;
}

@media(hover:hover) and (pointer:fine){

    #idt-arc-destinations
    .idt-arc-card:hover
    .idt-arc-image img{
        transform:scale(1.04);
    }

}


/* ======================================================
   CURVED PATH
====================================================== */


/* FAR LEFT */

#idt-arc-destinations .idt-arc-card[data-pos="-2"]{
    opacity:1;

    pointer-events:auto;

    z-index:1;

    transform:
        translate3d(
            calc(-50% - 650px),
            72px,
            0
        )
        scale(.96);
}

#idt-arc-destinations
.idt-arc-card[data-pos="-2"]
.idt-arc-card-inner{
    transform:rotate(-7deg);
}


/* LEFT */

#idt-arc-destinations .idt-arc-card[data-pos="-1"]{
    opacity:1;

    pointer-events:auto;

    z-index:2;

    transform:
        translate3d(
            calc(-50% - 325px),
            22px,
            0
        )
        scale(.985);
}

#idt-arc-destinations
.idt-arc-card[data-pos="-1"]
.idt-arc-card-inner{
    transform:rotate(-3.5deg);
}


/* CENTER */

#idt-arc-destinations .idt-arc-card[data-pos="0"]{
    opacity:1;

    pointer-events:auto;

    z-index:5;

    transform:
        translate3d(
            -50%,
            0,
            0
        )
        scale(1);
}

#idt-arc-destinations
.idt-arc-card[data-pos="0"]
.idt-arc-card-inner{
    transform:rotate(0deg);
}


/* RIGHT */

#idt-arc-destinations .idt-arc-card[data-pos="1"]{
    opacity:1;

    pointer-events:auto;

    z-index:2;

    transform:
        translate3d(
            calc(-50% + 325px),
            22px,
            0
        )
        scale(.985);
}

#idt-arc-destinations
.idt-arc-card[data-pos="1"]
.idt-arc-card-inner{
    transform:rotate(3.5deg);
}


/* FAR RIGHT */

#idt-arc-destinations .idt-arc-card[data-pos="2"]{
    opacity:1;

    pointer-events:auto;

    z-index:1;

    transform:
        translate3d(
            calc(-50% + 650px),
            72px,
            0
        )
        scale(.96);
}

#idt-arc-destinations
.idt-arc-card[data-pos="2"]
.idt-arc-card-inner{
    transform:rotate(7deg);
}


/* =========================================
   HIDDEN LEFT
========================================= */

#idt-arc-destinations .idt-arc-card[data-pos="-3"]{
    opacity:0;

    pointer-events:none;

    z-index:0;

    transform:
        translate3d(
            calc(-50% - 960px),
            135px,
            0
        )
        scale(.90);
}

#idt-arc-destinations
.idt-arc-card[data-pos="-3"]
.idt-arc-card-inner{
    transform:rotate(-10deg);
}


/* =========================================
   HIDDEN RIGHT
========================================= */

#idt-arc-destinations .idt-arc-card[data-pos="3"]{
    opacity:0;

    pointer-events:none;

    z-index:0;

    transform:
        translate3d(
            calc(-50% + 960px),
            135px,
            0
        )
        scale(.90);
}

#idt-arc-destinations
.idt-arc-card[data-pos="3"]
.idt-arc-card-inner{
    transform:rotate(10deg);
}


/* =========================================
   CARD CONTENT
========================================= */

#idt-arc-destinations .idt-arc-content{
    padding-top:14px;

    text-align:center;
}

#idt-arc-destinations .idt-arc-card-title{
    margin:0;

    color:#0C2D62;

    font-family:"Manrope",Arial,sans-serif;

    font-size:24px;
    line-height:1.3;
    font-weight:600;
}

#idt-arc-destinations .idt-arc-card-link{
    display:inline-block;

    margin-top:7px;

    color:#66798a !important;

    font-family:"Manrope",Arial,sans-serif;

    font-size:15px;
    line-height:1.4;
    font-weight:600;

    text-decoration:none !important;

    transition:
        color .25s ease,
        transform .25s ease;
}

#idt-arc-destinations .idt-arc-card-link:hover{
    color:#FF5D00 !important;

    transform:translateY(-1px);
}


/* =========================================
   DOTS
========================================= */

#idt-arc-destinations .idt-arc-dots{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:22px;

    margin-top:5px;
}

#idt-arc-destinations .idt-arc-dot{
    appearance:none;
    -webkit-appearance:none;

    width:15px;
    height:15px;

    padding:0;
    margin:0;

    border:1.5px solid #0C2D62;

    border-radius:50%;

    background:#ffffff;

    cursor:pointer;

    transition:
        background .3s ease,
        border-color .3s ease,
        transform .3s ease;
}

#idt-arc-destinations .idt-arc-dot:hover{
    transform:scale(1.12);
}

#idt-arc-destinations .idt-arc-dot.active{
    background:#FF5D00;

    border-color:#FF5D00;

    transform:scale(1.08);
}


/* ======================================================
   LARGE LAPTOP
====================================================== */

@media(max-width:1450px){

    #idt-arc-destinations .idt-arc-slider{
        height:405px;
    }

    #idt-arc-destinations .idt-arc-card{
        width:270px;
    }

    #idt-arc-destinations .idt-arc-image{
        height:270px;
    }


    #idt-arc-destinations .idt-arc-card[data-pos="-2"]{
        transform:
            translate3d(
                calc(-50% - 555px),
                64px,
                0
            )
            scale(.95);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="-1"]{
        transform:
            translate3d(
                calc(-50% - 280px),
                20px,
                0
            )
            scale(.98);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="0"]{
        transform:
            translate3d(
                -50%,
                0,
                0
            )
            scale(1);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="1"]{
        transform:
            translate3d(
                calc(-50% + 280px),
                20px,
                0
            )
            scale(.98);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="2"]{
        transform:
            translate3d(
                calc(-50% + 555px),
                64px,
                0
            )
            scale(.95);
    }

}


/* ======================================================
   SMALL LAPTOP
====================================================== */

@media(max-width:1200px){

    #idt-arc-destinations{
        padding-left:14px;
        padding-right:14px;
    }

    #idt-arc-destinations .idt-arc-subtitle{
        font-size:38px;
    }

    #idt-arc-destinations .idt-arc-title{
        font-size:40px;
    }

    #idt-arc-destinations .idt-arc-header{
        margin-bottom:42px;
    }

    #idt-arc-destinations .idt-arc-slider{
        height:375px;
    }

    #idt-arc-destinations .idt-arc-card{
        width:245px;
    }

    #idt-arc-destinations .idt-arc-image{
        height:245px;
    }


    #idt-arc-destinations .idt-arc-card[data-pos="-2"]{
        transform:
            translate3d(
                calc(-50% - 490px),
                58px,
                0
            )
            scale(.94);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="-1"]{
        transform:
            translate3d(
                calc(-50% - 247px),
                18px,
                0
            )
            scale(.98);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="0"]{
        transform:
            translate3d(
                -50%,
                0,
                0
            )
            scale(1);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="1"]{
        transform:
            translate3d(
                calc(-50% + 247px),
                18px,
                0
            )
            scale(.98);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="2"]{
        transform:
            translate3d(
                calc(-50% + 490px),
                58px,
                0
            )
            scale(.94);
    }

}


/* ======================================================
   TABLET
====================================================== */

@media(max-width:900px){

    #idt-arc-destinations{
        padding-top:40px;
    }

    #idt-arc-destinations .idt-arc-header{
        margin-bottom:35px;
    }

    #idt-arc-destinations .idt-arc-slider{
        height:345px;
    }

    #idt-arc-destinations .idt-arc-card{
        width:225px;
    }

    #idt-arc-destinations .idt-arc-image{
        height:225px;
    }


    #idt-arc-destinations .idt-arc-card[data-pos="-2"],
    #idt-arc-destinations .idt-arc-card[data-pos="2"]{
        opacity:0;

        pointer-events:none;
    }


    #idt-arc-destinations .idt-arc-card[data-pos="-1"]{
        opacity:1;

        pointer-events:auto;

        transform:
            translate3d(
                calc(-50% - 230px),
                32px,
                0
            )
            scale(.92);
    }

    #idt-arc-destinations
    .idt-arc-card[data-pos="-1"]
    .idt-arc-card-inner{
        transform:rotate(-5deg);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="0"]{
        opacity:1;

        transform:
            translate3d(
                -50%,
                0,
                0
            )
            scale(1);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="1"]{
        opacity:1;

        pointer-events:auto;

        transform:
            translate3d(
                calc(-50% + 230px),
                32px,
                0
            )
            scale(.92);
    }

    #idt-arc-destinations
    .idt-arc-card[data-pos="1"]
    .idt-arc-card-inner{
        transform:rotate(5deg);
    }

}


/* ======================================================
   MOBILE
====================================================== */

@media(max-width:650px){

    #idt-arc-destinations{
        padding:34px 8px 38px;
    }

    #idt-arc-destinations .idt-arc-header{
        margin-bottom:26px;
    }

    #idt-arc-destinations .idt-arc-subtitle{
        font-size:31px;
    }

    #idt-arc-destinations .idt-arc-title{
        font-size:30px;

        letter-spacing:-.5px;
    }

    #idt-arc-destinations .idt-arc-slider{
        height:335px;

        overflow:hidden;
    }

    #idt-arc-destinations .idt-arc-card{
        width:225px;
    }

    #idt-arc-destinations .idt-arc-image{
        height:225px;

        border-radius:20px;
    }

    #idt-arc-destinations .idt-arc-card-title{
        font-size:21px;
    }

    #idt-arc-destinations .idt-arc-card-link{
        font-size:14px;
    }


    #idt-arc-destinations .idt-arc-card[data-pos="-2"],
    #idt-arc-destinations .idt-arc-card[data-pos="2"],
    #idt-arc-destinations .idt-arc-card[data-pos="-3"],
    #idt-arc-destinations .idt-arc-card[data-pos="3"]{
        opacity:0;

        pointer-events:none;
    }


    #idt-arc-destinations .idt-arc-card[data-pos="-1"]{
        opacity:.52;

        transform:
            translate3d(
                calc(-50% - 190px),
                36px,
                0
            )
            scale(.82);
    }

    #idt-arc-destinations
    .idt-arc-card[data-pos="-1"]
    .idt-arc-card-inner{
        transform:rotate(-6deg);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="0"]{
        opacity:1;

        transform:
            translate3d(
                -50%,
                0,
                0
            )
            scale(1);
    }

    #idt-arc-destinations
    .idt-arc-card[data-pos="0"]
    .idt-arc-card-inner{
        transform:rotate(0deg);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="1"]{
        opacity:.52;

        transform:
            translate3d(
                calc(-50% + 190px),
                36px,
                0
            )
            scale(.82);
    }

    #idt-arc-destinations
    .idt-arc-card[data-pos="1"]
    .idt-arc-card-inner{
        transform:rotate(6deg);
    }


    #idt-arc-destinations .idt-arc-dots{
        gap:15px;

        margin-top:2px;
    }

    #idt-arc-destinations .idt-arc-dot{
        width:13px;
        height:13px;
    }

}


/* ======================================================
   SMALL MOBILE
====================================================== */

@media(max-width:420px){

    #idt-arc-destinations .idt-arc-slider{
        height:310px;
    }

    #idt-arc-destinations .idt-arc-card{
        width:205px;
    }

    #idt-arc-destinations .idt-arc-image{
        height:205px;
    }


    #idt-arc-destinations .idt-arc-card[data-pos="-1"]{
        transform:
            translate3d(
                calc(-50% - 172px),
                32px,
                0
            )
            scale(.80);
    }


    #idt-arc-destinations .idt-arc-card[data-pos="1"]{
        transform:
            translate3d(
                calc(-50% + 172px),
                32px,
                0
            )
            scale(.80);
    }

}
</style>


<section id="idt-arc-destinations">

    <div class="idt-arc-container">


        <!-- HEADING -->

        <div class="idt-arc-header">

            <div class="idt-arc-subtitle">
                Wonderful Place For You
            </div>

            <h2 class="idt-arc-title">
                Top Destinations
            </h2>

        </div>


        <!-- SLIDER -->

        <div class="idt-arc-slider">


            <!-- DELHI -->

            <div class="idt-arc-card">

                <div class="idt-arc-card-inner">

                    <div class="idt-arc-image">

                        <img
                            src="https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=900&q=88"
                            alt="Delhi">

                    </div>

                    <div class="idt-arc-content">

                        <h3 class="idt-arc-card-title">
                            Delhi
                        </h3>

                        <a
                            class="idt-arc-card-link"
                            href="#">
                            See Packages
                        </a>

                    </div>

                </div>

            </div>


            <!-- AGRA -->

            <div class="idt-arc-card">

                <div class="idt-arc-card-inner">

                    <div class="idt-arc-image">

                        <img
                            src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=900&q=88"
                            alt="Agra">

                    </div>

                    <div class="idt-arc-content">

                        <h3 class="idt-arc-card-title">
                            Agra
                        </h3>

                        <a
                            class="idt-arc-card-link"
                            href="#">
                            See Packages
                        </a>

                    </div>

                </div>

            </div>


            <!-- JAIPUR -->

            <div class="idt-arc-card">

                <div class="idt-arc-card-inner">

                    <div class="idt-arc-image">

                        <img
                            src="https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=900&q=88"
                            alt="Jaipur">

                    </div>

                    <div class="idt-arc-content">

                        <h3 class="idt-arc-card-title">
                            Jaipur
                        </h3>

                        <a
                            class="idt-arc-card-link"
                            href="#">
                            See Packages
                        </a>

                    </div>

                </div>

            </div>


            <!-- AMRITSAR -->

            <div class="idt-arc-card">

                <div class="idt-arc-card-inner">

                    <div class="idt-arc-image">

                        <img
                            src="https://images.unsplash.com/photo-1609947017136-9daf32a5eb16?auto=format&fit=crop&w=900&q=88"
                            alt="Amritsar">

                    </div>

                    <div class="idt-arc-content">

                        <h3 class="idt-arc-card-title">
                            Amritsar
                        </h3>

                        <a
                            class="idt-arc-card-link"
                            href="#">
                            See Packages
                        </a>

                    </div>

                </div>

            </div>


            <!-- RANTHAMBORE -->

            <div class="idt-arc-card">

                <div class="idt-arc-card-inner">

                    <div class="idt-arc-image">

                        <img
                            src="https://images.unsplash.com/photo-1561731216-c3a4d99437d5?auto=format&fit=crop&w=900&q=88"
                            alt="Ranthambore">

                    </div>

                    <div class="idt-arc-content">

                        <h3 class="idt-arc-card-title">
                            Ranthambore
                        </h3>

                        <a
                            class="idt-arc-card-link"
                            href="#">
                            See Packages
                        </a>

                    </div>

                </div>

            </div>


            <!-- UDAIPUR -->

            <div class="idt-arc-card">

                <div class="idt-arc-card-inner">

                    <div class="idt-arc-image">

                        <img
                            src="https://images.unsplash.com/photo-1595658658481-d53d3f999875?auto=format&fit=crop&w=900&q=88"
                            alt="Udaipur">

                    </div>

                    <div class="idt-arc-content">

                        <h3 class="idt-arc-card-title">
                            Udaipur
                        </h3>

                        <a
                            class="idt-arc-card-link"
                            href="#">
                            See Packages
                        </a>

                    </div>

                </div>

            </div>


            <!-- VARANASI -->

            <div class="idt-arc-card">

                <div class="idt-arc-card-inner">

                    <div class="idt-arc-image">

                        <img
                            src="https://images.unsplash.com/photo-1561361513-2d000a50f0dc?auto=format&fit=crop&w=900&q=88"
                            alt="Varanasi">

                    </div>

                    <div class="idt-arc-content">

                        <h3 class="idt-arc-card-title">
                            Varanasi
                        </h3>

                        <a
                            class="idt-arc-card-link"
                            href="#">
                            See Packages
                        </a>

                    </div>

                </div>

            </div>


        </div>


        <!-- DOTS -->

        <div class="idt-arc-dots"></div>


    </div>

</section>


<script>
(function(){

    const section =
        document.querySelector(
            '#idt-arc-destinations'
        );

    if(!section){
        return;
    }


    if(
        section.dataset.sliderReady
        === 'true'
    ){
        return;
    }


    section.dataset.sliderReady =
        'true';


    const slider =
        section.querySelector(
            '.idt-arc-slider'
        );


    const cards = Array.from(
        section.querySelectorAll(
            '.idt-arc-card'
        )
    );


    const dotsContainer =
        section.querySelector(
            '.idt-arc-dots'
        );


    if(
        !slider ||
        !cards.length ||
        !dotsContainer
    ){
        return;
    }


    const total = cards.length;


    /*
       Start Jaipur in center
    */

    let current = 2;

    let autoplay = null;

    let startX = 0;
    let lastX = 0;

    let dragging = false;
    let hasDragged = false;


/* =========================================
   RELATIVE CIRCULAR POSITION
========================================= */

function getRelativePosition(index){

    let diff =
        index - current;


    while(
        diff >
        Math.floor(total / 2)
    ){

        diff -= total;

    }


    while(
        diff <
        -Math.floor(total / 2)
    ){

        diff += total;

    }


    return diff;

}


/* =========================================
   UPDATE CARDS
========================================= */

function updateCards(){

    cards.forEach(
        function(card,index){

            let position =
                getRelativePosition(index);


            if(position < -3){
                position = -3;
            }


            if(position > 3){
                position = 3;
            }


            card.setAttribute(
                'data-pos',
                String(position)
            );


            card.setAttribute(
                'aria-hidden',
                Math.abs(position) > 2
                    ? 'true'
                    : 'false'
            );

        }
    );


    const dots =
        dotsContainer.querySelectorAll(
            '.idt-arc-dot'
        );


    dots.forEach(
        function(dot,index){

            dot.classList.toggle(
                'active',
                index === current
            );

        }
    );

}


/* =========================================
   CREATE DOTS
========================================= */

function createDots(){

    dotsContainer.innerHTML = '';


    cards.forEach(
        function(card,index){

            const dot =
                document.createElement(
                    'button'
                );


            dot.type = 'button';

            dot.className =
                'idt-arc-dot';


            const title =
                card.querySelector(
                    '.idt-arc-card-title'
                );


            dot.setAttribute(
                'aria-label',
                'Show ' +
                (
                    title
                        ? title.textContent.trim()
                        : 'destination'
                )
            );


            dot.addEventListener(
                'click',
                function(){

                    current = index;

                    updateCards();

                    restartAutoplay();

                }
            );


            dotsContainer.appendChild(
                dot
            );

        }
    );

}


/* =========================================
   NEXT
========================================= */

function nextSlide(){

    current =
        (current + 1) % total;

    updateCards();

}


/* =========================================
   PREVIOUS
========================================= */

function previousSlide(){

    current =
        (current - 1 + total)
        % total;

    updateCards();

}


/* =========================================
   AUTOPLAY
========================================= */

function stopAutoplay(){

    if(autoplay !== null){

        window.clearInterval(
            autoplay
        );

        autoplay = null;

    }

}


function startAutoplay(){

    stopAutoplay();


    autoplay =
        window.setInterval(
            function(){

                nextSlide();

            },
            3200
        );

}


function restartAutoplay(){

    stopAutoplay();

    startAutoplay();

}


/* =========================================
   POINTER START
========================================= */

slider.addEventListener(
    'pointerdown',
    function(event){

        dragging = true;

        hasDragged = false;

        startX =
            event.clientX;

        lastX =
            startX;


        stopAutoplay();


        if(
            typeof slider.setPointerCapture
            === 'function'
        ){

            try{

                slider.setPointerCapture(
                    event.pointerId
                );

            }
            catch(error){}

        }

    }
);


/* =========================================
   POINTER MOVE
========================================= */

slider.addEventListener(
    'pointermove',
    function(event){

        if(!dragging){
            return;
        }


        lastX =
            event.clientX;


        if(
            Math.abs(
                lastX - startX
            ) > 7
        ){

            hasDragged = true;

        }

    }
);


/* =========================================
   POINTER END
========================================= */

function finishSwipe(){

    if(!dragging){
        return;
    }


    dragging = false;


    const distance =
        lastX - startX;


    if(distance <= -45){

        nextSlide();

    }
    else if(distance >= 45){

        previousSlide();

    }


    startAutoplay();

}


slider.addEventListener(
    'pointerup',
    finishSwipe
);


slider.addEventListener(
    'pointercancel',
    function(){

        dragging = false;

        startAutoplay();

    }
);


/* =========================================
   CLICK SIDE CARD
========================================= */

cards.forEach(
    function(card,index){

        card.addEventListener(
            'click',
            function(event){

                if(hasDragged){

                    event.preventDefault();

                    hasDragged = false;

                    return;

                }


                const position =
                    getRelativePosition(
                        index
                    );


                /*
                   If side card clicked,
                   bring it into center.
                */

                if(position !== 0){

                    event.preventDefault();

                    current = index;

                    updateCards();

                    restartAutoplay();

                }

            }
        );

    }
);


/* =========================================
   KEYBOARD
========================================= */

section.setAttribute(
    'tabindex',
    '0'
);


section.addEventListener(
    'keydown',
    function(event){

        if(
            event.key ===
            'ArrowRight'
        ){

            nextSlide();

            restartAutoplay();

        }


        if(
            event.key ===
            'ArrowLeft'
        ){

            previousSlide();

            restartAutoplay();

        }

    }
);


/* =========================================
   PAGE VISIBILITY
========================================= */

document.addEventListener(
    'visibilitychange',
    function(){

        if(document.hidden){

            stopAutoplay();

        }
        else{

            startAutoplay();

        }

    }
);


/* =========================================
   INITIALIZE
========================================= */

createDots();

updateCards();

startAutoplay();

})();
</script>