<!-- INDIA DAY TRIP — CONTACT US HERO | DARKER IMAGE OVERLAY -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montez&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>
#idt-contact-hero,#idt-contact-hero *{box-sizing:border-box}
#idt-contact-hero{
 --idt-navy:#0C2D62;--idt-deep-blue:#123B72;--idt-mid-blue:#2E6095;--idt-sky:#79BDF2;
 --idt-orange:#FF5D00;--idt-orange-soft:#FF7A2F;--idt-white:#fff;
 position:relative;width:100%;max-width:100%;min-height:760px;display:flex;align-items:center;overflow:hidden;
 padding:54px 24px;font-family:"Manrope",Arial,sans-serif;isolation:isolate;
 background:
  linear-gradient(100deg,rgba(0,7,16,.88) 0%,rgba(3,20,44,.82) 34%,rgba(8,37,77,.74) 62%,rgba(1,10,23,.66) 100%),
  url("https://images.unsplash.com/photo-1539635278303-d4002c07eae3?auto=format&fit=crop&w=2000&q=92") center center/cover no-repeat;
}
#idt-contact-hero::before{content:"";position:absolute;inset:0;z-index:0;background:linear-gradient(180deg,rgba(0,0,0,.18) 0%,rgba(0,4,12,.08) 45%,rgba(0,5,14,.30) 100%);pointer-events:none}
#idt-contact-hero::after{content:"";position:absolute;inset:0;z-index:0;background:radial-gradient(circle at 15% 45%,rgba(12,45,98,.14),transparent 34%),radial-gradient(circle at 85% 25%,rgba(121,189,242,.04),transparent 29%);pointer-events:none}
#idt-contact-hero .idt-contact-container{position:relative;z-index:4;width:100%;max-width:1280px;margin:0 auto}
#idt-contact-hero .idt-contact-grid{display:grid;grid-template-columns:minmax(0,1.04fr) minmax(420px,.96fr);align-items:center;gap:72px}
#idt-contact-hero .idt-contact-content{width:100%;max-width:690px}
#idt-contact-hero .idt-contact-script{margin:0 0 8px!important;padding:0!important;color:var(--idt-sky)!important;font-family:"Montez",cursive!important;font-size:39px;line-height:1;font-weight:400;text-shadow:0 2px 12px rgba(0,0,0,.38)}
#idt-contact-hero .idt-contact-line{display:flex;align-items:center;gap:9px;width:max-content;margin:0 0 21px}
#idt-contact-hero .idt-contact-line span:first-child{display:block;width:58px;height:2px;border-radius:20px;background:linear-gradient(90deg,var(--idt-sky),var(--idt-orange))}
#idt-contact-hero .idt-contact-line span:last-child{display:block;width:8px;height:8px;background:var(--idt-orange);transform:rotate(45deg);box-shadow:0 0 18px rgba(255,93,0,.35)}
#idt-contact-hero .idt-contact-title{max-width:680px;margin:0 0 21px!important;padding:0!important;color:#fff!important;font-family:"Playfair Display",Georgia,serif!important;font-size:56px;line-height:1.07;font-weight:700;letter-spacing:-1.6px;text-shadow:0 3px 14px rgba(0,0,0,.70),0 12px 30px rgba(0,0,0,.34)}
#idt-contact-hero .idt-contact-title span{color:var(--idt-sky)!important}
#idt-contact-hero .idt-contact-desc{max-width:635px;margin:0 0 29px!important;padding:0!important;color:rgba(255,255,255,.95)!important;font-size:14.5px;line-height:1.82;font-weight:400;text-shadow:0 2px 10px rgba(0,0,0,.58)}
#idt-contact-hero .idt-contact-breadcrumb{display:inline-flex;align-items:center;justify-content:center;gap:10px;padding:10px 17px;border:1px solid rgba(255,255,255,.20);border-radius:999px;background:rgba(1,11,26,.68);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);color:rgba(255,255,255,.84)!important;font-size:11.5px;line-height:1.3;font-weight:500;box-shadow:0 10px 30px rgba(0,0,0,.20),inset 0 1px 0 rgba(255,255,255,.05)}
#idt-contact-hero .idt-contact-breadcrumb a,#idt-contact-hero .idt-contact-breadcrumb a:link,#idt-contact-hero .idt-contact-breadcrumb a:visited{color:#fff!important;text-decoration:none!important;background:none!important;transition:color .25s ease}
#idt-contact-hero .idt-contact-breadcrumb a:hover,#idt-contact-hero .idt-contact-breadcrumb a:focus,#idt-contact-hero .idt-contact-breadcrumb a:active{color:var(--idt-orange-soft)!important;text-decoration:none!important;background:none!important}
#idt-contact-hero .idt-contact-arrow{color:var(--idt-orange)!important;font-weight:700}
#idt-contact-hero .idt-contact-visual{position:relative;width:100%;display:flex;align-items:center;justify-content:flex-end}
#idt-contact-hero .idt-contact-image-wrap{position:relative;width:100%;max-width:480px;height:500px;overflow:hidden;border-radius:22px;border:1px solid rgba(255,255,255,.20);box-shadow:0 30px 70px rgba(0,0,0,.34)}
#idt-contact-hero .idt-contact-image-wrap::before{content:"";position:absolute;inset:0;z-index:2;background:linear-gradient(180deg,rgba(3,16,35,.04) 30%,rgba(3,19,40,.14) 64%,rgba(2,14,30,.54) 100%);pointer-events:none}
#idt-contact-hero .idt-contact-image-wrap::after{content:"";position:absolute;top:0;left:0;z-index:4;width:100%;height:5px;background:linear-gradient(90deg,var(--idt-orange),var(--idt-orange-soft),var(--idt-sky))}
#idt-contact-hero .idt-contact-image{display:block;width:100%;height:100%;object-fit:cover;object-position:center;transform:scale(1.01);transition:transform .7s ease}
#idt-contact-hero .idt-contact-image-wrap:hover .idt-contact-image{transform:scale(1.045)}
#idt-contact-hero .idt-contact-image-card{position:absolute;z-index:6;left:-42px;bottom:38px;width:225px;padding:18px 19px;border:1px solid rgba(255,255,255,.18);border-radius:15px;background:rgba(3,20,44,.94);-webkit-backdrop-filter:blur(14px);backdrop-filter:blur(14px);box-shadow:0 18px 42px rgba(0,0,0,.28)}
#idt-contact-hero .idt-contact-image-card::before{content:"";position:absolute;left:0;top:17px;width:3px;height:46px;background:linear-gradient(180deg,var(--idt-orange),var(--idt-orange-soft));border-radius:0 4px 4px 0}
#idt-contact-hero .idt-contact-image-card strong{display:block;margin:0 0 5px;color:#fff!important;font-size:13px;line-height:1.35;font-weight:700}
#idt-contact-hero .idt-contact-image-card span{display:block;color:rgba(255,255,255,.72)!important;font-size:10px;line-height:1.55}
#idt-contact-hero .idt-contact-outline{position:absolute;z-index:-1;top:-22px;right:-22px;width:86%;height:92%;border:1px solid rgba(121,189,242,.20);border-radius:24px;pointer-events:none}
#idt-contact-hero .idt-contact-outline::before{content:"";position:absolute;right:-1px;bottom:34px;width:3px;height:90px;background:linear-gradient(180deg,transparent,var(--idt-orange),transparent)}
@media(max-width:1200px){#idt-contact-hero{min-height:680px;padding:48px 22px}#idt-contact-hero .idt-contact-container{max-width:1080px}#idt-contact-hero .idt-contact-grid{grid-template-columns:minmax(0,1fr) 400px;gap:52px}#idt-contact-hero .idt-contact-title{font-size:48px}#idt-contact-hero .idt-contact-script{font-size:35px}#idt-contact-hero .idt-contact-image-wrap{max-width:400px;height:450px}#idt-contact-hero .idt-contact-image-card{left:-30px;width:205px}}
@media(max-width:991px) and (min-width:768px){#idt-contact-hero{min-height:auto;padding:46px 22px}#idt-contact-hero .idt-contact-grid{grid-template-columns:minmax(0,1fr) 330px;gap:36px}#idt-contact-hero .idt-contact-title{font-size:39px;line-height:1.1}#idt-contact-hero .idt-contact-script{font-size:31px}#idt-contact-hero .idt-contact-desc{font-size:12.5px;line-height:1.72}#idt-contact-hero .idt-contact-image-wrap{height:400px;border-radius:18px}#idt-contact-hero .idt-contact-image-card{left:-18px;bottom:24px;width:182px;padding:15px}#idt-contact-hero .idt-contact-image-card strong{font-size:11px}#idt-contact-hero .idt-contact-image-card span{font-size:8.5px}}
@media(max-width:767px){#idt-contact-hero{min-height:auto;padding:44px 15px 40px;background:linear-gradient(180deg,rgba(0,8,19,.82) 0%,rgba(4,25,53,.76) 52%,rgba(0,8,19,.86) 100%),url("https://images.unsplash.com/photo-1539635278303-d4002c07eae3?auto=format&fit=crop&w=1200&q=90") center center/cover no-repeat}#idt-contact-hero::before{background:linear-gradient(180deg,rgba(0,0,0,.12),rgba(0,0,0,.04) 48%,rgba(0,0,0,.22))}#idt-contact-hero .idt-contact-grid{display:flex;flex-direction:column;gap:38px}#idt-contact-hero .idt-contact-content{max-width:100%;text-align:center}#idt-contact-hero .idt-contact-script{font-size:31px}#idt-contact-hero .idt-contact-line{margin:0 auto 17px;justify-content:center}#idt-contact-hero .idt-contact-title{max-width:580px;margin:0 auto 18px!important;font-size:36px;line-height:1.13}#idt-contact-hero .idt-contact-desc{max-width:560px;margin:0 auto 24px!important;font-size:13px;line-height:1.72}#idt-contact-hero .idt-contact-visual{justify-content:center;max-width:520px;margin:0 auto}#idt-contact-hero .idt-contact-image-wrap{max-width:500px;height:410px;border-radius:18px}#idt-contact-hero .idt-contact-image-card{left:18px;bottom:18px;width:205px}#idt-contact-hero .idt-contact-outline{top:-14px;right:-8px;width:94%}}
@media(max-width:430px){#idt-contact-hero{padding:40px 13px 36px}#idt-contact-hero .idt-contact-script{font-size:28px}#idt-contact-hero .idt-contact-title{font-size:30px}#idt-contact-hero .idt-contact-desc{font-size:12.5px}#idt-contact-hero .idt-contact-image-wrap{height:370px;border-radius:16px}#idt-contact-hero .idt-contact-image-card{left:14px;right:14px;bottom:14px;width:auto;padding:14px 16px}#idt-contact-hero .idt-contact-outline{display:none}}
@media(max-width:390px){#idt-contact-hero{padding-left:12px;padding-right:12px}#idt-contact-hero .idt-contact-title{font-size:28px}#idt-contact-hero .idt-contact-image-wrap{height:365px}}
@media(max-width:360px){#idt-contact-hero{padding:38px 10px 32px}#idt-contact-hero .idt-contact-script{font-size:26px}#idt-contact-hero .idt-contact-title{font-size:26px}#idt-contact-hero .idt-contact-desc{font-size:12px}#idt-contact-hero .idt-contact-image-wrap{height:325px}}
@media(prefers-reduced-motion:reduce){#idt-contact-hero .idt-contact-image{transition:none}}
</style>

<section id="idt-contact-hero">
 <div class="idt-contact-container">
  <div class="idt-contact-grid">
   <div class="idt-contact-content">
    <p class="idt-contact-script">Contact India Day Trip</p>
    <div class="idt-contact-line" aria-hidden="true"><span></span><span></span></div>
    <h1 class="idt-contact-title">Let’s Plan Your <span>Journey Through India</span></h1>
    <p class="idt-contact-desc">Tell us where you want to go, how you like to travel, and the kind of experience you’re looking for. Our team will help you shape a private India journey around your interests, schedule, and travel style.</p>
    <div class="idt-contact-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="idt-contact-arrow">→</span><span>Contact Us</span></div>
   </div>
   <div class="idt-contact-visual">
    <div class="idt-contact-outline" aria-hidden="true"></div>
    <div class="idt-contact-image-wrap">
     <img class="idt-contact-image" src="https://indiadaytrip.com/assets/img/about/about-taj.webp" alt="India Day Trip private travel experience" loading="eager" fetchpriority="high">
    </div>
    <div class="idt-contact-image-card"><strong>Your India Journey Starts Here</strong><span>Personalised private travel, planned around your interests and schedule.</span></div>
   </div>
  </div>
 </div>
</section>