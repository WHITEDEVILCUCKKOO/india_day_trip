<!-- =========================================================
     INDIA DAY TRIP
     FOOTER — COMPLETE FINAL VERSION
     
     QUICK LINKS:
     Home
     Blogs
     About
     Contact

     BOTTOM:
     Privacy Policy
     Terms & Conditions

     Refund & Cancellation Policy REMOVED
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


<style>

/* =========================================================
   RESET
========================================================= */

#idt-footer-final,
#idt-footer-final *{
    box-sizing:border-box;
}

#idt-footer-final a{
    text-decoration:none !important;
}


/* =========================================================
   FOOTER BASE
========================================================= */

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
    color:#FFFFFF;

    font-family:"Manrope",Arial,sans-serif;
}


/* =========================================================
   MAIN FOOTER
========================================================= */

#idt-footer-final .idt-footer-main{
    position:relative;
    z-index:2;
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
        .78fr
        1.08fr
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
}

#idt-footer-final .idt-footer-logo img{

    display:block;

    width:auto;
    height:70px;

    object-fit:contain;
}


/* =========================================================
   ABOUT
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
   SOCIAL ICONS
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

    color:#FFFFFF !important;

    transition:
        background .25s ease,
        transform .25s ease;
}

#idt-footer-final .idt-socials a:hover{

    transform:translateY(-3px);

    background:#1CA8CB;
}

#idt-footer-final .idt-socials i{
    font-size:14px;
}


/* =========================================================
   FOOTER HEADINGS
========================================================= */

#idt-footer-final .idt-footer-title{

    margin:0 0 22px;

    color:#FFFFFF;

    font-size:18px;
    line-height:1.3;

    font-weight:700;
}


/* =========================================================
   FOOTER LINKS
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

    transform:
        translateY(-50%)
        scale(0);

    transition:transform .25s ease;
}

#idt-footer-final .idt-footer-links a:hover{

    color:#FFFFFF !important;

    transform:translateX(8px);
}

#idt-footer-final .idt-footer-links a:hover::before{

    transform:
        translateY(-50%)
        scale(1);
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

    transition:color .25s ease;
}

#idt-footer-final .idt-contact-text a:hover{
    color:#FFFFFF !important;
}


/* =========================================================
   BOTTOM FOOTER
========================================================= */

#idt-footer-final .idt-footer-bottom{

    position:relative;

    z-index:2;

    border-top:
        1px solid
        rgba(255,255,255,.10);

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


/* =========================================================
   COPYRIGHT
========================================================= */

#idt-footer-final .idt-copyright{

    margin:0;

    color:#D4DEE8;

    font-size:12.5px;
    line-height:1.5;
}

#idt-footer-final .idt-copyright a{

    color:#F59E0B !important;

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

    transition:color .25s ease;
}

#idt-footer-final .idt-policy-links a:hover{
    color:#FFFFFF !important;
}


/* =========================================================
   BACKGROUND DECORATION
========================================================= */

#idt-footer-final::before{

    content:"";

    position:absolute;

    width:440px;
    height:440px;

    right:-240px;
    top:-210px;

    border:
        1px solid
        rgba(255,255,255,.04);

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

    border:
        1px dashed
        rgba(28,168,203,.08);

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

        padding:
            45px 16px 42px;
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

        margin-bottom:17px;

        font-size:17px;
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


<!-- =========================================================
     FOOTER START
========================================================= -->

<footer id="idt-footer-final">


    <!-- =====================================================
         MAIN FOOTER
    ====================================================== -->

    <div class="idt-footer-main">

        <div class="idt-footer-container">

            <div class="idt-footer-grid">


                <!-- =================================================
                     COLUMN 1 — BRAND
                ================================================== -->

                <div class="idt-footer-brand">


                    <a
                        href="https://indiadaytrip.com/"
                        class="idt-footer-logo"
                    >

                        <img
                            src="https://indiadaytrip.com/wp-content/uploads/2026/09/indiadaytrip-logo.png"
                            alt="India Day Trip"
                        >

                    </a>


                    <p class="idt-footer-about">

                        Agra’s premier travel company for unforgettable Taj Mahal and Golden Triangle tours. We deliver world-class service, carefully crafted itineraries, and expert local guidance to ensure a smooth and luxurious travel experience. Trusted by travelers for years, we are committed to excellence, comfort, and creating remarkable memories at every destination.

                    </p>


                    <!-- SOCIAL LINKS -->

                    <div class="idt-socials">


                        <a
                            href="https://www.facebook.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            aria-label="Facebook"
                        >

                            <i class="fa-brands fa-facebook-f"></i>

                        </a>


                        <a
                            href="https://www.twitter.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            aria-label="Twitter"
                        >

                            <i class="fa-brands fa-x-twitter"></i>

                        </a>


                        <a
                            href="https://wa.me/918126052755"
                            target="_blank"
                            rel="noopener"
                            aria-label="WhatsApp"
                        >

                            <i class="fa-brands fa-whatsapp"></i>

                        </a>


                        <a
                            href="https://www.instagram.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            aria-label="Instagram"
                        >

                            <i class="fa-brands fa-instagram"></i>

                        </a>


                    </div>


                </div>


                <!-- =================================================
                     COLUMN 2 — QUICK LINKS
                ================================================== -->

                <div>


                    <h3 class="idt-footer-title">
                        Quick Links
                    </h3>


                    <ul class="idt-footer-links">


                        <li>

                            <a href="https://indiadaytrip.com/">
                                Home
                            </a>

                        </li>


                        <li>

                            <a href="https://indiadaytrip.com/blogs">
                                Blogs
                            </a>

                        </li>


                        <li>

                            <a href="https://indiadaytrip.com/about-us/">
                                About
                            </a>

                        </li>


                        <li>

                            <a href="https://indiadaytrip.com/contact-us/">
                                Contact
                            </a>

                        </li>


                    </ul>


                </div>


                <!-- =================================================
                     COLUMN 3 — TOURS
                ================================================== -->

                <div>


                    <h3 class="idt-footer-title">
                        Tours
                    </h3>


                    <ul class="idt-footer-links">


                        <li>

                            <a href="https://indiadaytrip.com/india-tour-packages">
                                India Tour Packages 
                            </a>

                        </li>


                        <li>

                            <a href="https://indiadaytrip.com/golden-triangle-tours/">
                                Golden Triangle Tours
                            </a>

                        </li>


                        <li>

                            <a href="https://indiadaytrip.com/taj-mahal-tours/">
                                Taj Mahal Tours
                            </a>

                        </li>


                        <li>

                            <a href="https://indiadaytrip.com/varanasi-tour-packages/">
                                Varanasi Tour Packages 
                            </a>

                        </li>


                        <li>

                            <a href="https://indiadaytrip.com/rajasthan-tour-packages/">
                                Rajasthan Tour Packages 
                            </a>

                        </li>


                        <li>

                            <a href="https://indiadaytrip.com/kerala-tours-packages/">
                                Kerala Tour Packages
                            </a>

                        </li>


                    </ul>


                </div>


                <!-- =================================================
                     COLUMN 4 — GET IN TOUCH
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

                                Shop No. 2, Gupta Market, Tajganj,
                                Agra, Uttar Pradesh, India

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
         BOTTOM FOOTER
    ====================================================== -->

    <div class="idt-footer-bottom">


        <div class="idt-footer-bottom-inner">


            <!-- COPYRIGHT -->

            <p class="idt-copyright">

                Copyright 2026

                <a href="https://indiadaytrip.com/">
                    India Day Trip
                </a>.

                All Rights Reserved. Operated by ANSHUL GUPTA.

            </p>


            <!-- =================================================
                 POLICY LINKS
                 REFUND & CANCELLATION REMOVED
            ================================================== -->

            <div class="idt-policy-links">


                <a href="https://indiadaytrip.com/privacy-policy">

                    Privacy Policy

                </a>


                <span>|</span>


                <a href="https://indiadaytrip.com/terms-conditions/">

                    Terms &amp; Conditions

                </a>


            </div>


        </div>


    </div>


</footer>

<!-- =========================================================
     FOOTER END
========================================================= -->