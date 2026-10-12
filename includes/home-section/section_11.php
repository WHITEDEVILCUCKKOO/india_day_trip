<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
#idt-partners-section,
#idt-partners-section *{
    box-sizing:border-box;
}

#idt-partners-section{
    --idt-navy:#0C2D62;
    --idt-text:#6F6F6F;

    width:100%;
    position:relative;
    overflow:hidden;
    margin:0;
    padding:32px 30px 54px;
    background:#FFFFFF !important;
    font-family:"Manrope",Arial,sans-serif;
}


/* CONTAINER */
#idt-partners-section .idt-partners-container{
    width:1540px;
    max-width:100%;
    margin:0 auto;
}


/* HEADER */
#idt-partners-section .idt-partner-header{
    text-align:center;
}


/* TITLE */
#idt-partners-section .idt-partner-title{
    margin:0;
    color:#0C2D62 !important;
    font-family:"Playfair Display",Georgia,serif;
    font-size:38px;
    line-height:1.2;
    font-weight:700;
    letter-spacing:-1px;
}


/* DESCRIPTION */
#idt-partners-section .idt-partner-description{
    margin:28px auto 0;
    color:#6F6F6F !important;
    font-family:"DM Sans","Manrope",Arial,sans-serif;
    font-size:22px;
    line-height:1.5;
    font-weight:400;
    text-align:center;
}


/* =========================
   HOTEL GRID
========================= */

#idt-partners-section .idt-hotel-grid{
    display:grid;
    grid-template-columns:repeat(6,minmax(0,1fr));
    align-items:center;
    column-gap:32px;
    row-gap:42px;
    margin-top:64px;
}


/* LOGO CONTAINER */
#idt-partners-section .idt-logo-item{
    height:96px;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:8px 12px;
    text-decoration:none !important;
    transition:transform .28s ease;
}


/* GENERAL LOGO SETTINGS */
#idt-partners-section .idt-logo-item img{
    display:block !important;
    width:auto !important;
    height:auto !important;
    object-fit:contain !important;
    filter:none !important;
    opacity:1 !important;
    border:0 !important;
    box-shadow:none !important;
}


/* =========================
   HOTEL LOGO MEDIUM SIZES
========================= */

#idt-partners-section .idt-logo-taj img{
    max-width:105px !important;
    max-height:72px !important;
}

#idt-partners-section .idt-logo-hilton img{
    max-width:130px !important;
    max-height:68px !important;
}

#idt-partners-section .idt-logo-fairmont img{
    max-width:155px !important;
    max-height:68px !important;
}

#idt-partners-section .idt-logo-holiday img{
    max-width:112px !important;
    max-height:75px !important;
}

#idt-partners-section .idt-logo-ramada img{
    max-width:145px !important;
    max-height:62px !important;
}

#idt-partners-section .idt-logo-radisson img{
    max-width:148px !important;
    max-height:64px !important;
}

#idt-partners-section .idt-logo-itc img{
    max-width:180px !important;
    max-height:78px !important;
}

#idt-partners-section .idt-logo-marriott img{
    max-width:110px !important;
    max-height:78px !important;
}

#idt-partners-section .idt-logo-novotel img{
    max-width:150px !important;
    max-height:66px !important;
}

#idt-partners-section .idt-logo-sarovar img{
    max-width:155px !important;
    max-height:72px !important;
}

#idt-partners-section .idt-logo-shangrila img{
    max-width:155px !important;
    max-height:72px !important;
}

#idt-partners-section .idt-logo-trident img{
    max-width:90px !important;
    max-height:72px !important;
}


/* HOVER */
@media(hover:hover) and (pointer:fine){
    #idt-partners-section .idt-logo-item:hover{
        transform:translateY(-4px);
    }
}


/* =========================
   TRAVEL SECTION
========================= */

#idt-partners-section .idt-travel-header{
    margin-top:50px;
}

#idt-partners-section .idt-travel-grid{
    display:grid;
    grid-template-columns:repeat(6,minmax(0,1fr));
    align-items:center;
    column-gap:38px;
    margin-top:50px;
}

#idt-partners-section .idt-travel-grid .idt-logo-item{
    height:82px;
    padding:6px 10px;
}


/* =========================
   TRAVEL LOGO MEDIUM SIZES
========================= */

#idt-partners-section .idt-logo-viator img{
    max-width:140px !important;
    max-height:52px !important;
}

#idt-partners-section .idt-logo-tripadvisor img{
    max-width:145px !important;
    max-height:50px !important;
}

#idt-partners-section .idt-logo-expedia img{
    max-width:140px !important;
    max-height:52px !important;
}

#idt-partners-section .idt-logo-lonely img{
    max-width:135px !important;
    max-height:60px !important;
}

#idt-partners-section .idt-logo-civi img{
    max-width:135px !important;
    max-height:52px !important;
}

#idt-partners-section .idt-logo-tourradar img{
    max-width:138px !important;
    max-height:48px !important;
}


/* =========================
   LAPTOP
========================= */

@media(max-width:1300px){

    #idt-partners-section{
        padding:30px 24px 50px;
    }

    #idt-partners-section .idt-partners-container{
        width:1180px;
    }

    #idt-partners-section .idt-partner-title{
        font-size:35px;
    }

    #idt-partners-section .idt-partner-description{
        font-size:19px;
    }
}


/* =========================
   TABLET
========================= */

@media(max-width:1024px){

    #idt-partners-section .idt-hotel-grid{
        grid-template-columns:repeat(4,minmax(0,1fr));
        row-gap:30px;
    }

    #idt-partners-section .idt-travel-grid{
        grid-template-columns:repeat(3,minmax(0,1fr));
        row-gap:26px;
    }

    #idt-partners-section .idt-logo-item{
        height:88px;
    }
}


/* =========================
   MOBILE
========================= */

@media(max-width:767px){

    #idt-partners-section{
        padding:36px 18px 44px;
    }

    #idt-partners-section .idt-partner-title{
        font-size:29px;
    }

    #idt-partners-section .idt-partner-description{
        margin-top:16px;
        font-size:15px;
    }

    #idt-partners-section .idt-hotel-grid{
        grid-template-columns:repeat(3,minmax(0,1fr));
        gap:20px 14px;
        margin-top:38px;
    }

    #idt-partners-section .idt-logo-item{
        height:74px;
        padding:7px;
    }

    #idt-partners-section .idt-logo-item img{
        transform:scale(.88);
    }

    #idt-partners-section .idt-travel-header{
        margin-top:36px;
    }

    #idt-partners-section .idt-travel-grid{
        grid-template-columns:repeat(3,minmax(0,1fr));
        gap:20px 14px;
        margin-top:32px;
    }

    #idt-partners-section .idt-travel-grid .idt-logo-item{
        height:66px;
    }
}


/* =========================
   SMALL MOBILE
========================= */

@media(max-width:520px){

    #idt-partners-section{
        padding:32px 14px 40px;
    }

    #idt-partners-section .idt-partner-title{
        font-size:27px;
    }

    #idt-partners-section .idt-partner-description{
        font-size:14px;
    }

    #idt-partners-section .idt-hotel-grid{
        grid-template-columns:repeat(2,minmax(0,1fr));
        gap:17px 12px;
    }

    #idt-partners-section .idt-travel-grid{
        grid-template-columns:repeat(2,minmax(0,1fr));
        gap:17px 12px;
    }

    #idt-partners-section .idt-logo-item{
        height:70px;
    }

    #idt-partners-section .idt-logo-item img{
        transform:scale(.82);
    }

    #idt-partners-section .idt-travel-grid .idt-logo-item{
        height:62px;
    }
}

</style>


<section id="idt-partners-section">

    <div class="idt-partners-container">


        <!-- HOTEL PARTNERS -->

        <div class="idt-partner-header">

            <h2 class="idt-partner-title">
                Our Hotel Partners
            </h2>

            <p class="idt-partner-description">
                We collaborate with the finest hotels to ensure your stay is comfortable
            </p>

        </div>


        <div class="idt-hotel-grid">

            <div class="idt-logo-item idt-logo-taj">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/taj.webp" alt="Taj Hotels">
            </div>

            <div class="idt-logo-item idt-logo-hilton">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/hilton.webp" alt="Hilton Hotels and Resorts">
            </div>

            <div class="idt-logo-item idt-logo-fairmont">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/fairmount.webp" alt="Fairmont Hotels and Resorts">
            </div>

            <div class="idt-logo-item idt-logo-holiday">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/holiday.webp" alt="Holiday Inn">
            </div>

            <div class="idt-logo-item idt-logo-ramada">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/ramada.webp" alt="Ramada">
            </div>

            <div class="idt-logo-item idt-logo-radisson">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/redission.webp" alt="Radisson Blu">
            </div>

            <div class="idt-logo-item idt-logo-itc">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/itc-holel.webp" alt="ITC Hotels">
            </div>

            <div class="idt-logo-item idt-logo-marriott">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/marrite.webp" alt="Marriott">
            </div>

            <div class="idt-logo-item idt-logo-novotel">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/novetl.webp" alt="Novotel">
            </div>

            <div class="idt-logo-item idt-logo-sarovar">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/sarovar.webp" alt="Sarovar Hotels and Resorts">
            </div>

            <div class="idt-logo-item idt-logo-shangrila">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/shanrila.webp" alt="Shangri-La Hotels and Resorts">
            </div>

            <div class="idt-logo-item idt-logo-trident">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/trident.webp" alt="Trident Hotels">
            </div>

        </div>


        <!-- TRAVEL PARTNERS -->

        <div class="idt-partner-header idt-travel-header">

            <h2 class="idt-partner-title">
                Our Travel Partners
            </h2>

            <p class="idt-partner-description">
                We work with trusted travel companies to provide the best experiences
            </p>

        </div>


        <div class="idt-travel-grid">

            <div class="idt-logo-item idt-logo-viator">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/viator.webp" alt="Viator">
            </div>

            <div class="idt-logo-item idt-logo-tripadvisor">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/tripadvisor.webp" alt="Tripadvisor">
            </div>

            <div class="idt-logo-item idt-logo-expedia">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/expedia.webp" alt="Expedia">
            </div>

            <div class="idt-logo-item idt-logo-lonely">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/lonely.webp" alt="Lonely Planet">
            </div>

            <div class="idt-logo-item idt-logo-civi">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/civi.webp" alt="Civitatis">
            </div>

            <div class="idt-logo-item idt-logo-tourradar">
                <img src="https://indiadaytrip.com/wp-content/uploads/2026/09/tour-radar.webp" alt="TourRadar">
            </div>

        </div>

    </div>

</section>