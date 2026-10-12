<!-- =========================================================
     INDIA DAY TRIP
     COMPLETE FINAL HEADER
     BLOGS + BOOK NOW BUTTON INCLUDED
     UPDATED TOUR LINKS
     DESKTOP + MOBILE + STICKY
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    /* =========================================================
   RESET
========================================================= */

    #idt-complete-header,
    #idt-complete-header * {
        box-sizing: border-box;
    }

    #idt-complete-header {

        --idt-blue: #1CA8CB;
        --idt-navy: #0C2D62;
        --idt-white: #FFFFFF;
        --idt-black: #0D0D0C;
        --idt-yellow: #FFC107;
        --idt-border: #E1E4E5;

        position: relative;

        width: 100%;

        margin: 0;
        padding: 0;

        z-index: 99999;

        font-family: "Inter", Arial, sans-serif;
    }

    #idt-complete-header a {
        text-decoration: none !important;
    }


    /* =========================================================
   CONTAINER
========================================================= */

    #idt-complete-header .idt-header-container {

        width: 1776px;
        max-width: calc(100% - 48px);

        height: 100%;

        margin: 0 auto;
    }


    /* =========================================================
   TOP BAR
========================================================= */

    #idt-complete-header .idt-topbar {

        width: 100%;
        height: 42px;

        background: var(--idt-navy);

        color: #FFFFFF;
    }

    #idt-complete-header .idt-topbar-inner {

        width: 100%;
        height: 42px;

        display: flex;

        align-items: center;
        justify-content: space-between;
    }

    #idt-complete-header .idt-topbar-left,
    #idt-complete-header .idt-topbar-right {

        display: flex;

        align-items: center;

        height: 100%;
    }

    #idt-complete-header .idt-topbar-right {
        gap: 18px;
    }

    #idt-complete-header .idt-top-info {

        display: flex;

        align-items: center;

        gap: 8px;

        margin: 0;

        color: #FFFFFF !important;

        font-size: 14px;
        line-height: 1;

        font-weight: 500;

        white-space: nowrap;
    }

    #idt-complete-header .idt-top-info i {

        width: 15px;

        color: var(--idt-yellow);

        font-size: 14px;

        text-align: center;
    }

    #idt-complete-header .idt-top-divider {

        width: 1px;
        height: 16px;

        margin: 0 22px;

        background: rgba(255, 255, 255, .38);
    }

    #idt-complete-header .idt-top-contact {

        display: flex;

        align-items: center;

        gap: 19px;
    }


    /* =========================================================
   SOCIALS
========================================================= */

    #idt-complete-header .idt-top-socials {

        display: flex;

        align-items: center;

        gap: 8px;
    }

    #idt-complete-header .idt-social-icon {

        width: 36px;
        height: 36px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: rgba(255, 255, 255, .10);

        color: #FFFFFF !important;

        transition:
            background .3s ease,
            transform .3s ease;
    }

    #idt-complete-header .idt-social-icon:hover {

        transform: translateY(-2px);

        background: rgba(255, 255, 255, .20);
    }

    #idt-complete-header .idt-social-icon i {
        font-size: 13px;
    }


    /* =========================================================
   MAIN HEADER
========================================================= */

    #idt-complete-header .idt-main-header {

        position: relative;

        width: 100%;
        height: 80px;

        background: #FFFFFF;

        border-bottom: 1px solid var(--idt-border);

        transition:
            box-shadow .3s ease,
            transform .3s ease;
    }

    #idt-complete-header .idt-main-header::before {

        content: "";

        position: absolute;

        inset: 0;

        z-index: 0;

        pointer-events: none;

        opacity: .40;

        background-image:
            repeating-radial-gradient(ellipse at 8% 45%,
                transparent 0px,
                transparent 27px,
                rgba(28, 168, 203, .11) 28px,
                rgba(28, 168, 203, .11) 29px,
                transparent 30px,
                transparent 46px);

        background-size: 220px 130px;
    }


    /* =========================================================
   INNER
========================================================= */

    #idt-complete-header .idt-header-inner {

        position: relative;

        z-index: 2;

        width: 100%;
        height: 80px;

        display: grid;

        grid-template-columns:
            190px 1fr 190px;

        align-items: center;
    }


    /* =========================================================
   LOGO
========================================================= */

    #idt-complete-header .idt-header-logo {

        height: 100%;

        display: flex;

        align-items: center;
        justify-content: flex-start;
    }

    #idt-complete-header .idt-header-logo img {

        display: block;

        width: auto;
        height: 60px;

        max-width: 130px;

        object-fit: contain;
    }


    /* =========================================================
   DESKTOP NAV
========================================================= */

    #idt-complete-header .idt-main-nav {

        height: 100%;

        display: flex;

        justify-content: center;
        align-items: center;
    }

    #idt-complete-header .idt-main-nav>ul {

        height: 100%;

        display: flex;

        align-items: center;

        margin: 0;
        padding: 0;

        list-style: none;
    }

    #idt-complete-header .idt-main-nav>ul>li {

        position: relative;

        display: flex;

        align-items: center;

        height: 100%;

        margin: 0 20px;

        padding: 0;

        list-style: none;
    }

    #idt-complete-header .idt-main-nav>ul>li:first-child {
        margin-left: 0;
    }

    #idt-complete-header .idt-main-nav>ul>li:last-child {
        margin-right: 0;
    }


    /* MAIN LINK */

    #idt-complete-header .idt-main-nav>ul>li>a {

        position: relative;

        height: 100%;

        display: flex;

        align-items: center;
        justify-content: center;

        gap: 6px;

        padding: 25px 0;

        color: var(--idt-black);

        font-size: 16px;
        line-height: 1;

        font-weight: 400;

        white-space: nowrap;

        transition: color .3s ease;
    }

    #idt-complete-header .idt-main-nav>ul>li>a::before {

        content: "";

        position: absolute;

        left: 0;
        bottom: 20px;

        width: 0;
        height: 2px;

        background: var(--idt-blue);

        transition: width .35s ease;
    }

    #idt-complete-header .idt-main-nav>ul>li>a:hover {

        color: var(--idt-blue);
    }

    #idt-complete-header .idt-main-nav>ul>li>a:hover::before {

        width: 100%;
    }


    /* =========================================================
   DROPDOWN ARROW
========================================================= */

    #idt-complete-header .idt-menu-chevron {

        display: inline-flex;

        font-size: 10px;

        color: inherit;

        transition: transform .3s ease;
    }

    #idt-complete-header .idt-has-dropdown:hover .idt-menu-chevron {

        transform: rotate(180deg);
    }


    /* =========================================================
   DESKTOP SUBMENU
========================================================= */

    #idt-complete-header .idt-submenu {

        position: absolute;

        top: 100%;
        left: 50%;

        width: 300px;

        margin: 0;
        padding: 11px 0;

        list-style: none;

        background: #FFFFFF;

        border-radius: 0 0 8px 8px;

        border-bottom: 3px solid var(--idt-blue);

        box-shadow:
            0 14px 38px rgba(0, 0, 0, .13);

        opacity: 0;
        visibility: hidden;

        transform:
            translateX(-50%) translateY(8px);

        transition:
            opacity .25s ease,
            visibility .25s ease,
            transform .25s ease;

        z-index: 99999;
    }

    #idt-complete-header .idt-has-dropdown:hover .idt-submenu {

        opacity: 1;
        visibility: visible;

        transform:
            translateX(-50%) translateY(0);
    }

    #idt-complete-header .idt-submenu li {

        width: 100%;

        margin: 0;
        padding: 0;

        list-style: none;
    }

    #idt-complete-header .idt-submenu li a {

        position: relative;

        display: block;

        width: 100%;

        padding: 11px 21px;

        color: var(--idt-black);

        font-size: 13.5px;
        line-height: 1.45;

        font-weight: 400;

        transition:
            color .25s ease,
            padding-left .25s ease,
            background .25s ease;
    }

    #idt-complete-header .idt-submenu li a::before {

        content: "";

        position: absolute;

        left: 13px;
        top: 50%;

        width: 5px;
        height: 5px;

        margin-top: -2.5px;

        border-radius: 50%;

        background: var(--idt-blue);

        opacity: 0;

        transition:
            opacity .25s ease,
            left .25s ease;
    }

    #idt-complete-header .idt-submenu li a:hover {

        padding-left: 30px;

        color: var(--idt-blue);

        background: #F4FBFD;
    }

    #idt-complete-header .idt-submenu li a:hover::before {

        left: 17px;

        opacity: 1;
    }


    /* =========================================================
   BOOK NOW
========================================================= */

    #idt-complete-header .idt-book-wrapper {

        height: 100%;

        display: flex;

        align-items: center;
        justify-content: flex-end;
    }

    #idt-complete-header .idt-book-btn {

        position: relative;

        width: 180px;
        height: 58px;

        padding: 0 25px;

        overflow: hidden;

        border-radius: 999px;

        background: var(--idt-navy);

        display: flex;

        align-items: center;
        justify-content: center;

        gap: 12px;

        color: #FFFFFF !important;

        font-size: 16px;

        font-weight: 500;

        isolation: isolate;
    }

    #idt-complete-header .idt-book-btn::before {

        content: "";

        position: absolute;

        z-index: -1;

        top: 0;
        left: -5%;

        width: 0;
        height: 100%;

        border-radius: 999px;

        background: var(--idt-blue);

        transition: width .5s ease;
    }

    #idt-complete-header .idt-book-btn:hover::before {

        width: 110%;
    }

    #idt-complete-header .idt-book-arrow {

        position: relative;

        width: 25px;
        height: 14px;

        display: block;
    }

    #idt-complete-header .idt-book-arrow::before {

        content: "";

        position: absolute;

        top: 6.5px;
        left: 0;

        width: 24px;
        height: 1px;

        background: currentColor;
    }

    #idt-complete-header .idt-book-arrow::after {

        content: "";

        position: absolute;

        top: 2px;
        right: 0;

        width: 9px;
        height: 9px;

        border-top: 1px solid currentColor;
        border-right: 1px solid currentColor;

        transform: rotate(45deg);
    }


    /* =========================================================
   MOBILE TOGGLE
========================================================= */

    #idt-complete-header .idt-menu-toggle {

        display: none;

        width: 48px;
        height: 48px;

        padding: 0;

        border: 0;

        border-radius: 8px;

        background: var(--idt-blue);

        color: #FFFFFF;

        align-items: center;
        justify-content: center;

        cursor: pointer;
    }


    /* =========================================================
   MOBILE OVERLAY
========================================================= */

    #idt-complete-header .idt-mobile-wrapper {

        position: fixed;

        inset: 0;

        width: 100%;
        height: 100vh;

        z-index: 999999;

        background: rgba(0, 0, 0, .60);

        opacity: 0;
        visibility: hidden;

        transition:
            opacity .4s ease,
            visibility .4s ease;
    }

    #idt-complete-header .idt-mobile-wrapper.open {

        opacity: 1;

        visibility: visible;
    }


    /* =========================================================
   MOBILE PANEL
========================================================= */

    #idt-complete-header .idt-mobile-panel {

        position: absolute;

        top: 0;
        left: -110%;

        width: 320px;
        max-width: 88%;

        height: 100%;

        background: #FFFFFF;

        border-right: 3px solid var(--idt-navy);

        opacity: 0;
        visibility: hidden;

        transition:
            left .55s ease,
            opacity .55s ease,
            visibility .55s ease;

        overflow: hidden;
    }

    #idt-complete-header .idt-mobile-wrapper.open .idt-mobile-panel {

        left: 0;

        opacity: 1;
        visibility: visible;
    }


    /* =========================================================
   CLOSE
========================================================= */

    #idt-complete-header .idt-mobile-close {

        position: absolute;

        top: 25px;
        right: -17px;

        width: 34px;
        height: 34px;

        padding: 0;

        border: 0;

        border-radius: 50%;

        background: var(--idt-navy);

        color: #FFFFFF;

        display: flex;

        align-items: center;
        justify-content: center;

        cursor: pointer;

        z-index: 5;
    }


    /* =========================================================
   MOBILE LOGO
========================================================= */

    #idt-complete-header .idt-mobile-logo {

        width: 100%;

        padding: 25px 20px;

        background: #E9F6F9;

        display: flex;

        align-items: center;
        justify-content: center;
    }

    #idt-complete-header .idt-mobile-logo img {

        width: auto;
        height: 62px;

        max-width: 150px;

        object-fit: contain;
    }


    /* =========================================================
   MOBILE NAV
========================================================= */

    #idt-complete-header .idt-mobile-nav {

        max-height: calc(100vh - 110px);

        overflow-y: auto;

        padding: 20px 34px 40px;
    }

    #idt-complete-header .idt-mobile-nav ul {

        margin: 0;
        padding: 0;

        list-style: none;
    }

    #idt-complete-header .idt-mobile-nav>ul>li {

        width: 100%;

        margin: 0;

        border-bottom: 1px solid #F1E8EB;
    }

    #idt-complete-header .idt-mobile-nav a {

        width: 100%;

        min-height: 49px;

        padding: 11px 0;

        display: flex;

        align-items: center;

        color: var(--idt-navy);

        font-size: 15px;

        font-weight: 500;
    }


    /* =========================================================
   MOBILE DROPDOWN
========================================================= */

    #idt-complete-header .idt-mobile-dropdown-toggle {

        width: 100%;
        min-height: 49px;

        padding: 0;

        border: 0;

        background: transparent;

        display: flex;

        align-items: center;
        justify-content: space-between;

        color: var(--idt-navy);

        font-family: "Inter", Arial, sans-serif;

        font-size: 15px;

        font-weight: 500;

        cursor: pointer;
    }

    #idt-complete-header .idt-mobile-plus {

        width: 23px;
        height: 23px;

        border-radius: 50%;

        background: #E9F6F9;

        display: flex;

        align-items: center;
        justify-content: center;

        font-size: 10px;
    }

    #idt-complete-header .idt-mobile-submenu {

        display: none;

        padding: 0 0 9px 13px !important;
    }

    #idt-complete-header .idt-mobile-dropdown.open .idt-mobile-submenu {

        display: block;
    }

    #idt-complete-header .idt-mobile-submenu li {

        border-top: 1px solid #F1E8EB;
    }

    #idt-complete-header .idt-mobile-submenu a {

        min-height: 42px;

        padding: 9px 0;

        color: #5F6468;

        font-size: 13px;
    }


    /* =========================================================
   MOBILE BOOK BUTTON
========================================================= */

    #idt-complete-header .idt-mobile-book {

        width: 100%;

        height: 48px;

        margin-top: 20px;

        border-radius: 50px;

        background: var(--idt-navy);

        color: #FFFFFF !important;

        display: flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        font-size: 14px;

        font-weight: 600;
    }


    /* =========================================================
   MOBILE CONTACT
========================================================= */

    #idt-complete-header .idt-mobile-contact {

        margin-top: 24px;

        padding-top: 17px;

        border-top: 1px solid var(--idt-border);
    }

    #idt-complete-header .idt-mobile-contact-item {

        display: flex;

        align-items: flex-start;

        gap: 10px;

        margin-bottom: 12px;

        color: #5D6267 !important;

        font-size: 12px;
        line-height: 1.5;
    }

    #idt-complete-header .idt-mobile-contact-item i {

        width: 15px;

        margin-top: 3px;

        color: var(--idt-blue);
    }

    #idt-complete-header .idt-mobile-socials {

        display: flex;

        gap: 8px;

        margin-top: 17px;
    }

    #idt-complete-header .idt-mobile-social {

        width: 34px !important;
        min-height: 34px !important;
        height: 34px;

        padding: 0 !important;

        border-radius: 50%;

        background: var(--idt-navy);

        color: #FFFFFF !important;

        display: flex !important;

        align-items: center;
        justify-content: center;

        font-size: 12px;
    }


    /* =========================================================
   STICKY
========================================================= */

    #idt-complete-header .idt-main-header.sticky {

        position: fixed;

        top: 0;
        left: 0;
        right: 0;

        z-index: 99990;

        background: #FFFFFF;

        box-shadow:
            0 4px 18px rgba(0, 0, 0, .10);

        animation: idtStickyHeader .4s ease;
    }

    @keyframes idtStickyHeader {

        from {
            transform: translateY(-40px);
            opacity: .7;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }

    }


    /* =========================================================
   RESPONSIVE
========================================================= */

    @media(max-width:1500px) {

        #idt-complete-header .idt-main-nav>ul>li {

            margin-left: 16px;
            margin-right: 16px;
        }

    }


    @media(max-width:1399px) {

        #idt-complete-header .idt-header-inner {

            grid-template-columns:
                160px 1fr 165px;
        }

        #idt-complete-header .idt-main-nav>ul>li {

            margin-left: 12px;
            margin-right: 12px;
        }

        #idt-complete-header .idt-main-nav>ul>li>a {

            font-size: 14px;
        }

        #idt-complete-header .idt-book-btn {

            width: 160px;
            height: 54px;

            font-size: 14px;
        }

    }


    @media(max-width:1199px) {

        #idt-complete-header .idt-topbar {

            display: none;
        }

        #idt-complete-header .idt-main-header,
        #idt-complete-header .idt-header-inner {

            height: 80px;
        }

        #idt-complete-header .idt-header-inner {

            display: flex;

            align-items: center;
            justify-content: space-between;
        }

        #idt-complete-header .idt-main-nav,
        #idt-complete-header .idt-book-wrapper {

            display: none;
        }

        #idt-complete-header .idt-menu-toggle {

            display: flex;
        }

    }


    @media(max-width:767px) {

        #idt-complete-header .idt-main-header,
        #idt-complete-header .idt-header-inner {

            height: 70px;
        }

        #idt-complete-header .idt-header-logo img {

            height: 50px;
        }

        #idt-complete-header .idt-menu-toggle {

            width: 44px;
            height: 44px;
        }

        #idt-complete-header .idt-header-container {

            max-width: calc(100% - 28px);
        }

    }


    @media(max-width:400px) {

        #idt-complete-header .idt-mobile-panel {

            width: 280px;
        }

        #idt-complete-header .idt-mobile-nav {

            padding-left: 20px;
            padding-right: 20px;
        }

    }
</style>


<header id="idt-complete-header">


    <!-- =====================================================
         TOP BAR
    ====================================================== -->

    <div class="idt-topbar">

        <div class="idt-header-container">

            <div class="idt-topbar-inner">


                <div class="idt-topbar-left">


                    <div class="idt-top-info">

                        <i class="fa-solid fa-location-dot"></i>

                        <span>
                            Shop No. 2, Gupta Market, Tajganj, Agra
                        </span>

                    </div>


                    <span class="idt-top-divider"></span>


                    <div class="idt-top-info">

                        <i class="fa-regular fa-clock"></i>

                        <span>
                            Daily: 8.00 am - 8.00 pm
                        </span>

                    </div>


                </div>


                <div class="idt-topbar-right">


                    <div class="idt-top-contact">


                        <a
                            href="tel:+918126052755"
                            class="idt-top-info">

                            <i class="fa-solid fa-phone"></i>

                            <span>
                                +91 81260 52755
                            </span>

                        </a>


                        <a
                            href="mailto:info@indiadaytrip.com"
                            class="idt-top-info">

                            <i class="fa-solid fa-envelope"></i>

                            <span>
                                info@indiadaytrip.com
                            </span>

                        </a>


                    </div>


                    <div class="idt-top-socials">


                        <a
                            href="https://www.facebook.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            class="idt-social-icon"
                            aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>


                        <a
                            href="https://www.twitter.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            class="idt-social-icon"
                            aria-label="Twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>


                        <a
                            href="https://www.instagram.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            class="idt-social-icon"
                            aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>


                        <a
                            href="https://wa.me/918126052755"
                            target="_blank"
                            rel="noopener"
                            class="idt-social-icon"
                            aria-label="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>


                    </div>


                </div>


            </div>

        </div>

    </div>


    <!-- =====================================================
         MAIN HEADER
    ====================================================== -->

    <div class="idt-main-header">

        <div class="idt-header-container">

            <div class="idt-header-inner">


                <!-- LOGO -->

                <a
                    href=index.php
                    class="idt-header-logo">

                    <img
                        src="https://indiadaytrip.com/wp-content/uploads/2026/09/indiadaytrip-logo.png"
                        alt="India Day Trip">

                </a>


                <!-- DESKTOP NAV -->

                <nav
                    class="idt-main-nav"
                    aria-label="Main Navigation">

                    <ul>


                        <li>

                            <a href="index.php">
                                Home
                            </a>

                        </li>


                        <li>

                            <a href="about.php">
                                About
                            </a>

                        </li>


                        <!-- TOURS -->

                        <li class="idt-has-dropdown">


                            <a href="https://indiadaytrip.com/india-tours">

                                <span>
                                    Tours
                                </span>

                                <i class="fa-solid fa-chevron-down idt-menu-chevron"></i>

                            </a>


                            <ul class="idt-submenu">


                                <li>

                                    <a href="india-tour-packages.php">

                                        India Tour Packages

                                    </a>

                                </li>


                                <li>

                                    <a href="golden-triangle-tours.php">

                                        Golden Triangle Tours

                                    </a>

                                </li>


                                <li>

                                    <a href="taj-mahal-tours.php">

                                        Taj Mahal Tours

                                    </a>

                                </li>


                                <li>

                                    <a href="varanasi-tour-packages.php">

                                        Varanasi Tour Packages

                                    </a>

                                </li>


                                <li>

                                    <a href="https://indiadaytrip.com/rajasthan-tour-packages/">

                                        Rajasthan Tour packages

                                    </a>

                                </li>


                                <li>

                                    <a href="https://indiadaytrip.com/kerala-tours-packages/">

                                        Kerala Tour Packages

                                    </a>

                                </li>


                            </ul>


                        </li>


                        <!-- BLOGS -->

                        <li>

                            <a href="https://indiadaytrip.com/blogs/">

                                Blogs

                            </a>

                        </li>


                        <!-- CONTACT -->

                        <li>

                            <a href="contact.php">

                                Contact Us

                            </a>

                        </li>


                    </ul>


                </nav>


                <!-- BOOK NOW BUTTON -->

                <div class="idt-book-wrapper">


                    <a
                        href="contact.php"
                        class="idt-book-btn">

                        <span>
                            Book Now
                        </span>

                        <span class="idt-book-arrow"></span>

                    </a>


                </div>


                <!-- MOBILE TOGGLE -->

                <button
                    type="button"
                    class="idt-menu-toggle"
                    aria-label="Open Menu"
                    aria-expanded="false">

                    <i class="fa-solid fa-bars"></i>

                </button>


            </div>

        </div>

    </div>


    <!-- =====================================================
         MOBILE MENU
    ====================================================== -->

    <div class="idt-mobile-wrapper">


        <div class="idt-mobile-panel">


            <button 
                type="button"
                class="idt-mobile-close"
                aria-label="Close Menu">

                <i class="fa-solid fa-xmark"></i>

            </button>


            <a
                href=index.php
                class="idt-mobile-logo">

                <img
                    src="https://indiadaytrip.com/wp-content/uploads/2026/09/indiadaytrip-logo.png"
                    alt="India Day Trip">

            </a>


            <div class="idt-mobile-nav">


                <ul>


                    <li>

                        <a href="index.php">
                            Home
                        </a>

                    </li>


                    <li>

                        <a href="about.php">
                            About
                        </a>

                    </li>


                    <!-- MOBILE TOURS -->

                    <li class="idt-mobile-dropdown">


                        <button
                            type="button"
                            class="idt-mobile-dropdown-toggle">

                            <span>
                                Tours
                            </span>


                            <span class="idt-mobile-plus">

                                <i class="fa-solid fa-plus"></i>

                            </span>


                        </button>


                        <ul class="idt-mobile-submenu">


                            <li>

                                <a href="india-tour-packages.php">
                                    India Tour Packages
                                </a>

                            </li>


                            <li>

                                <a href="golden-triangle-tours.php">
                                    Golden Triangle Tours
                                </a>

                            </li>


                            <li>

                                <a href="taj-mahal-tours.php/">
                                    Taj Mahal Tours
                                </a>

                            </li>


                            <li>

                                <a href="varanasi-tour-packages.php">
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


                    </li>


                    <!-- BLOGS -->

                    <li>

                        <a href="https://indiadaytrip.com/blogs/">
                            Blogs
                        </a>

                    </li>


                    <!-- CONTACT -->

                    <li>

                        <a href="contact.php">
                            Contact Us
                        </a>

                    </li>


                </ul>


                <!-- MOBILE BOOK NOW -->

                <a
                    href="contact.php"
                    class="idt-mobile-book">

                    <span>
                        Book Now
                    </span>

                    <span class="idt-book-arrow"></span>

                </a>


                <!-- CONTACT DETAILS -->

                <div class="idt-mobile-contact">


                    <div class="idt-mobile-contact-item">

                        <i class="fa-solid fa-location-dot"></i>

                        <span>
                            Shop No. 2, Gupta Market,<br>
                            Tajganj, Agra
                        </span>

                    </div>


                    <div class="idt-mobile-contact-item">

                        <i class="fa-regular fa-clock"></i>

                        <span>
                            Daily: 8.00 am - 8.00 pm
                        </span>

                    </div>


                    <a
                        href="tel:+918126052755"
                        class="idt-mobile-contact-item">

                        <i class="fa-solid fa-phone"></i>

                        <span>
                            +91 81260 52755
                        </span>

                    </a>


                    <a
                        href="mailto:info@indiadaytrip.com"
                        class="idt-mobile-contact-item">

                        <i class="fa-solid fa-envelope"></i>

                        <span>
                            info@indiadaytrip.com
                        </span>

                    </a>


                    <div class="idt-mobile-socials">


                        <a
                            href="https://www.facebook.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            class="idt-mobile-social"
                            aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>


                        <a
                            href="https://www.twitter.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            class="idt-mobile-social"
                            aria-label="Twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>


                        <a
                            href="https://www.instagram.com/indiadaytrip"
                            target="_blank"
                            rel="noopener"
                            class="idt-mobile-social"
                            aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>


                        <a
                            href="https://wa.me/918126052755"
                            target="_blank"
                            rel="noopener"
                            class="idt-mobile-social"
                            aria-label="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>


                    </div>


                </div>


            </div>


        </div>


    </div>


</header>


<script>
    (function() {

        const header =
            document.getElementById(
                "idt-complete-header"
            );

        if (!header) {
            return;
        }


        const mainHeader =
            header.querySelector(
                ".idt-main-header"
            );

        const menuToggle =
            header.querySelector(
                ".idt-menu-toggle"
            );

        const mobileWrapper =
            header.querySelector(
                ".idt-mobile-wrapper"
            );

        const closeButton =
            header.querySelector(
                ".idt-mobile-close"
            );

        const dropdown =
            header.querySelector(
                ".idt-mobile-dropdown"
            );

        const dropdownToggle =
            header.querySelector(
                ".idt-mobile-dropdown-toggle"
            );

        const dropdownIcon =
            header.querySelector(
                ".idt-mobile-plus i"
            );


        function openMobileMenu() {

            mobileWrapper.classList.add(
                "open"
            );

            document.body.style.overflow =
                "hidden";

            if (menuToggle) {

                menuToggle.setAttribute(
                    "aria-expanded",
                    "true"
                );

            }

        }


        function closeMobileMenu() {

            mobileWrapper.classList.remove(
                "open"
            );

            document.body.style.overflow =
                "";

            if (menuToggle) {

                menuToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

            }

        }


        if (menuToggle) {

            menuToggle.addEventListener(
                "click",
                openMobileMenu
            );

        }


        if (closeButton) {

            closeButton.addEventListener(
                "click",
                closeMobileMenu
            );

        }


        if (mobileWrapper) {

            mobileWrapper.addEventListener(
                "click",
                function(event) {

                    if (event.target === mobileWrapper) {

                        closeMobileMenu();

                    }

                }
            );

        }


        if (dropdownToggle && dropdown) {

            dropdownToggle.addEventListener(
                "click",
                function() {

                    dropdown.classList.toggle(
                        "open"
                    );


                    if (dropdownIcon) {

                        if (
                            dropdown.classList.contains(
                                "open"
                            )
                        ) {

                            dropdownIcon
                                .classList
                                .remove(
                                    "fa-plus"
                                );

                            dropdownIcon
                                .classList
                                .add(
                                    "fa-minus"
                                );

                        } else {

                            dropdownIcon
                                .classList
                                .remove(
                                    "fa-minus"
                                );

                            dropdownIcon
                                .classList
                                .add(
                                    "fa-plus"
                                );

                        }

                    }

                }
            );

        }


        const mobileLinks =
            header.querySelectorAll(
                ".idt-mobile-submenu a, .idt-mobile-nav > ul > li > a, .idt-mobile-book"
            );


        mobileLinks.forEach(
            function(link) {

                link.addEventListener(
                    "click",
                    closeMobileMenu
                );

            }
        );


        document.addEventListener(
            "keydown",
            function(event) {

                if (event.key === "Escape") {

                    closeMobileMenu();

                }

            }
        );


        const stickyPoint = 120;


        function stickyHeader() {

            if (!mainHeader) {
                return;
            }

            if (window.scrollY > stickyPoint) {

                mainHeader.classList.add(
                    "sticky"
                );

            } else {

                mainHeader.classList.remove(
                    "sticky"
                );

            }

        }


        window.addEventListener(
            "scroll",
            stickyHeader, {
                passive: true
            }
        );


        stickyHeader();

    })();
</script>