<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
/* =========================================================
   INDIA DAY TRIP
   FOOTER — COMPLETE FINAL WORDPRESS / ELEMENTOR VERSION
========================================================= */

#idt-footer-final,
#idt-footer-final *{
    box-sizing:border-box;
}

#idt-footer-final{
    --idt-navy:#082A5C;
    --idt-navy-dark:#061F46;
    --idt-blue:#1CA8CB;
    --idt-white:#FFFFFF;
    --idt-soft:#D9E4EE;
    --idt-orange:#F59E0B;

    position:relative;

    width:100%;

    overflow:hidden;

    margin:0;

    background:#082A5C;

    color:#fff;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   MAIN AREA
========================================================= */

#idt-footer-final .idt-footer-main{
    padding:58px 24px 52px;
}


#idt-footer-final .idt-footer-container{
    width:1380px;
    max-width:100%;

    margin:0 auto;
}


/* =========================================================
   GRID
========================================================= */

#idt-footer-final .idt-footer-grid{
    display:grid;

    grid-template-columns:
        1.5fr
        .75fr
        .85fr
        1.15fr;

    gap:48px;

    align-items:start;
}


/* =========================================================
   LOGO
========================================================= */

#idt-footer-final .idt-footer-logo{
    display:inline-block;

    margin-bottom:20px;

    text-decoration:none;
}


#idt-footer-final .idt-footer-logo img{
    width:auto;
    height:70px;

    display:block;

    object-fit:contain;
}


/* =========================================================
   ABOUT TEXT
========================================================= */

#idt-footer-final .idt-footer-about{
    max-width:440px;

    margin:0 0 24px;

    color:#D5E1EB;

    font-size:13.5px;
    line-height:1.78;
    font-weight:400;
}


/* =========================================================
   SOCIALS
========================================================= */

#idt-footer-final .idt-socials{
    display:flex;

    align-items:center;

    gap:10px;
}


#idt-footer-final .idt-socials a{
    width:38px;
    height:38px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:rgba(255,255,255,.08);

    color:#fff !important;

    text-decoration:none !important;

    transition:
        background .25s ease,
        transform .25s ease,
        color .25s ease;
}


#idt-footer-final .idt-socials a:hover{
    transform:translateY(-3px);

    background:#1CA8CB;

    color:#fff !important;
}


#idt-footer-final .idt-socials i{
    font-size:14px;
}


/* =========================================================
   HEADINGS
========================================================= */

#idt-footer-final .idt-footer-title{
    margin:0 0 22px;

    color:#fff;

    font-size:18px;
    line-height:1.3;
    font-weight:700;
}


/* =========================================================
   LINK LISTS
========================================================= */

#idt-footer-final .idt-footer-links{
    margin:0;

    padding:0;

    list-style:none;
}


#idt-footer-final .idt-footer-links li{
    margin:0 0 12px;
}


#idt-footer-final .idt-footer-links li:last-child{
    margin-bottom:0;
}


#idt-footer-final .idt-footer-links a{
    position:relative;

    display:inline-block;

    color:#D7E2EC !important;

    font-size:13.5px;
    line-height:1.45;
    font-weight:400;

    text-decoration:none !important;

    transition:
        color .25s ease,
        transform .25s ease;
}


#idt-footer-final .idt-footer-links a::before{
    content:"";

    position:absolute;

    left:-10px;
    top:50%;

    width:4px;
    height:4px;

    border-radius:50%;

    background:#1CA8CB;

    transform:translateY(-50%) scale(0);

    transition:transform .25s ease;
}


#idt-footer-final .idt-footer-links a:hover{
    color:#fff !important;

    transform:translateX(8px);
}


#idt-footer-final .idt-footer-links a:hover::before{
    transform:translateY(-50%) scale(1);
}


/* =========================================================
   CONTACT
========================================================= */

#idt-footer-final .idt-contact-list{
    display:flex;

    flex-direction:column;

    gap:18px;
}


#idt-footer-final .idt-contact-item{
    display:flex;

    align-items:flex-start;

    gap:13px;
}


#idt-footer-final .idt-contact-icon{
    width:39px;
    height:39px;

    flex:0 0 39px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:rgba(28,168,203,.16);

    color:#49C3E2;
}


#idt-footer-final .idt-contact-icon i{
    font-size:14px;
}


#idt-footer-final .idt-contact-text{
    margin:0;

    color:#D7E2EC;

    font-size:13px;
    line-height:1.65;
}


#idt-footer-final .idt-contact-text a{
    color:#D7E2EC !important;

    text-decoration:none !important;

    transition:color .25s ease;
}


#idt-footer-final .idt-contact-text a:hover{
    color:#fff !important;
}


/* =========================================================
   COPYRIGHT AREA
========================================================= */

#idt-footer-final .idt-footer-bottom{
    border-top:1px solid rgba(255,255,255,.10);

    background:#061F46;

    padding:18px 24px;
}


#idt-footer-final .idt-footer-bottom-inner{
    width:1380px;
    max-width:100%;

    margin:0 auto;

    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:20px;

    flex-wrap:wrap;
}


#idt-footer-final .idt-copyright{
    margin:0;

    color:#D4DEE8;

    font-size:12.5px;
    line-height:1.5;
}


#idt-footer-final .idt-copyright a{
    color:#F59E0B !important;

    text-decoration:none !important;

    font-weight:600;
}


/* =========================================================
   POLICY LINKS
========================================================= */

#idt-footer-final .idt-policy-links{
    display:flex;

    align-items:center;

    flex-wrap:wrap;

    gap:7px;

    color:#6F8095;

    font-size:12.5px;
}


#idt-footer-final .idt-policy-links a{
    color:#F59E0B !important;

    text-decoration:none !important;

    transition:color .25s ease;
}


#idt-footer-final .idt-policy-links a:hover{
    color:#fff !important;
}


/* =========================================================
   DECORATION
========================================================= */

#idt-footer-final::before{
    content:"";

    position:absolute;

    width:440px;
    height:440px;

    right:-240px;
    top:-210px;

    border:1px solid rgba(255,255,255,.04);

    border-radius:50%;

    box-shadow:
        0 0 0 40px rgba(255,255,255,.02),
        0 0 0 80px rgba(255,255,255,.015);

    pointer-events:none;
}


#idt-footer-final::after{
    content:"";

    position:absolute;

    width:320px;
    height:320px;

    left:-210px;
    bottom:-170px;

    border:1px dashed rgba(28,168,203,.08);

    border-radius:50%;

    pointer-events:none;
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:1024px){

    #idt-footer-final .idt-footer-grid{
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:40px 30px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:640px){

    #idt-footer-final .idt-footer-main{
        padding:45px 16px 42px;
    }


    #idt-footer-final .idt-footer-grid{
        grid-template-columns:1fr;

        gap:34px;
    }


    #idt-footer-final .idt-footer-logo img{
        height:62px;
    }


    #idt-footer-final .idt-footer-about{
        font-size:12.5px;
    }


    #idt-footer-final .idt-footer-title{
        font-size:17px;

        margin-bottom:17px;
    }


    #idt-footer-final .idt-footer-bottom{
        padding:18px 16px;
    }


    #idt-footer-final .idt-footer-bottom-inner{
        flex-direction:column;

        align-items:flex-start;

        gap:12px;
    }


    #idt-footer-final .idt-policy-links{
        gap:6px;

        line-height:1.7;
    }

}
</style>


<footer id="idt-footer-final">


    <!-- =====================================================
         MAIN FOOTER
    ====================================================== -->

    <div class="idt-footer-main">

        <div class="idt-footer-container">

            <div class="idt-footer-grid">


                <!-- =================================================
                     COLUMN 1
                ================================================== -->

                <div>


                    <a
                        href="/"
                        class="idt-footer-logo">

                        <img
                            src="https://indiadaytrip.com/assets/img/logo/logo-footer.webp"
                            alt="India Day Trip">

                    </a>


                    <p class="idt-footer-about">

                        Agra’s premier travel company for unforgettable Taj Mahal and Golden Triangle tours. We deliver world-class service, carefully crafted itineraries, and expert local guidance to ensure a smooth and luxurious travel experience. Trusted by travelers for years, we are committed to excellence, comfort, and creating remarkable memories at every destination.

                    </p>


                    <div class="idt-socials">


                        <a
                            href="https://www.facebook.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            aria-label="Facebook">

                            <i class="fa-brands fa-facebook-f"></i>

                        </a>


                        <a
                            href="https://www.twitter.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            aria-label="Twitter">

                            <i class="fa-brands fa-x-twitter"></i>

                        </a>


                        <a
                            href="https://wa.me/918126052755"
                            target="_blank"
                            rel="noopener"
                            aria-label="WhatsApp">

                            <i class="fa-brands fa-whatsapp"></i>

                        </a>


                        <a
                            href="https://www.instagram.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            aria-label="Instagram">

                            <i class="fa-brands fa-instagram"></i>

                        </a>


                    </div>


                </div>



                <!-- =================================================
                     QUICK LINKS
                ================================================== -->

                <div>


                    <h3 class="idt-footer-title">
                        Quick Links
                    </h3>


                    <ul class="idt-footer-links">

                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="/about/">
                                About
                            </a>
                        </li>

                        <li>
                            <a href="/gallery/">
                                Gallery
                            </a>
                        </li>

                        <li>
                            <a href="/contact/">
                                Contact
                            </a>
                        </li>

                        <li>
                            <a href="/to_book/">
                                Book Trip
                            </a>
                        </li>

                    </ul>


                </div>



                <!-- =================================================
                     TOURS
                ================================================== -->

                <div>


                    <h3 class="idt-footer-title">
                        Tours
                    </h3>


                    <ul class="idt-footer-links">

                        <li>
                            <a href="/tour/">
                                All Tours
                            </a>
                        </li>

                        <li>
                            <a href="/same-day-tours/">
                                Same Day Tours
                            </a>
                        </li>

                        <li>
                            <a href="/taj-mahal-tours/">
                                Taj Mahal Tours
                            </a>
                        </li>

                        <li>
                            <a href="/golden-triangle-tours/">
                                Golden Triangle Tours
                            </a>
                        </li>

                        <li>
                            <a href="/rajasthan-tour-packages/">
                                Rajasthan Tours
                            </a>
                        </li>

                    </ul>


                </div>



                <!-- =================================================
                     CONTACT
                ================================================== -->

                <div>


                    <h3 class="idt-footer-title">
                        Get In Touch
                    </h3>


                    <div class="idt-contact-list">


                        <!-- ADDRESS -->

                        <div class="idt-contact-item">

                            <span class="idt-contact-icon">

                                <i class="fa-solid fa-location-dot"></i>

                            </span>


                            <p class="idt-contact-text">

                                Shop No. 2, Gupta Market, Tajganj, Agra, Uttar Pradesh, India

                            </p>

                        </div>



                        <!-- PHONE -->

                        <div class="idt-contact-item">

                            <span class="idt-contact-icon">

                                <i class="fa-solid fa-phone"></i>

                            </span>


                            <p class="idt-contact-text">

                                <a href="tel:+918126052755">
                                    +91 81260 52755
                                </a>

                            </p>

                        </div>



                        <!-- EMAIL -->

                        <div class="idt-contact-item">

                            <span class="idt-contact-icon">

                                <i class="fa-solid fa-envelope"></i>

                            </span>


                            <p class="idt-contact-text">

                                <a href="mailto:indiadaytrip@gmail.com">
                                    indiadaytrip@gmail.com
                                </a>

                            </p>

                        </div>


                    </div>


                </div>


            </div>

        </div>

    </div>



    <!-- =====================================================
         COPYRIGHT
    ====================================================== -->

    <div class="idt-footer-bottom">

        <div class="idt-footer-bottom-inner">


            <p class="idt-copyright">

                Copyright 2026

                <a href="/">
                    India Day Trip
                </a>.

                All Rights Reserved. Operated by ANSHUL GUPTA.

            </p>



            <div class="idt-policy-links">

                <a href="/privacy-policy/">
                    Privacy Policy
                </a>

                <span>|</span>

                <a href="/terms-conditions/">
                    Terms &amp; Conditions
                </a>

                <span>|</span>

                <a href="/refund-cancellation-policy/">
                    Refund &amp; Cancellation Policy
                </a>

            </div>


        </div>

    </div>


</footer>