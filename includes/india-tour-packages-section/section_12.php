<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700&family=Montez&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

<style>
/* =========================================================
   INDIA DAY TRIP — YOU MAY ALSO LIKE
   PREMIUM COMPLETE FINAL SECTION
========================================================= */
#idt-related-premium,
#idt-related-premium *{box-sizing:border-box}

#idt-related-premium{
  --navy:#0C2D62;
  --deep:#071F3F;
  --blue:#2E6095;
  --sky:#79BDF2;
  --orange:#FF5D00;
  --orange-soft:#FF7A2F;
  --text:#5C6672;
  --warm:#FCFAF6;
  --white:#FFFFFF;
  --border:#D8E0EA;

  position:relative;
  width:100%;
  overflow:hidden;
  padding:66px 24px 70px;
  background:
    radial-gradient(circle at 8% 18%,rgba(121,189,242,.10),transparent 22%),
    radial-gradient(circle at 92% 82%,rgba(255,93,0,.055),transparent 21%),
    var(--warm);
  font-family:"DM Sans",Arial,sans-serif;
}

/* top premium brand line */
#idt-related-premium .idt-rp-topline{
  position:absolute;
  top:0; left:0;
  width:100%; height:3px;
  background:var(--navy);
}
#idt-related-premium .idt-rp-topline:after{
  content:"";
  position:absolute;
  left:50%;
  top:0;
  width:110px;
  height:3px;
  transform:translateX(-50%);
  background:var(--orange);
}

/* subtle background travel details */
#idt-related-premium .idt-rp-ring{
  position:absolute;
  width:270px;height:270px;
  border:1px solid rgba(46,96,149,.08);
  border-radius:50%;
  left:-155px;top:-125px;
  box-shadow:
    0 0 0 34px rgba(46,96,149,.025),
    0 0 0 68px rgba(46,96,149,.018);
  pointer-events:none;
}

#idt-related-premium .idt-rp-dots{
  position:absolute;
  right:35px;
  bottom:30px;
  width:105px;height:75px;
  opacity:.25;
  background-image:radial-gradient(circle,var(--blue) 1.6px,transparent 2px);
  background-size:18px 18px;
  pointer-events:none;
}

#idt-related-premium .idt-rp-container{
  position:relative;
  z-index:2;
  width:1220px;
  max-width:100%;
  margin:0 auto;
}

/* ================= HEADER ================= */
#idt-related-premium .idt-rp-head{
  max-width:760px;
  margin:0 auto 36px;
  text-align:center;
}

#idt-related-premium .idt-rp-eyebrow{
  margin:0 0 3px;
  color:var(--blue);
  font-family:"Montez",cursive;
  font-size:37px;
  line-height:1.05;
  font-weight:400;
}

#idt-related-premium .idt-rp-title{
  margin:0;
  color:var(--navy);
  font-family:"Playfair Display",Georgia,serif;
  font-size:40px;
  line-height:1.18;
  font-weight:600;
  letter-spacing:-.7px;
}

#idt-related-premium .idt-rp-divider{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:6px;
  width:62px;
  margin:15px auto 14px;
}
#idt-related-premium .idt-rp-divider span:first-child{
  width:43px;height:2px;
  border-radius:10px;
  background:var(--navy);
}
#idt-related-premium .idt-rp-divider span:last-child{
  width:7px;height:7px;
  border-radius:50%;
  background:var(--orange);
}

#idt-related-premium .idt-rp-desc{
  max-width:610px;
  margin:0 auto;
  color:var(--text);
  font-family:"DM Sans",Arial,sans-serif;
  font-size:15px;
  line-height:1.7;
}

/* ================= LINKS ================= */
#idt-related-premium .idt-rp-grid{
  display:grid;
  grid-template-columns:repeat(3,minmax(0,1fr));
  gap:15px;
}

#idt-related-premium .idt-rp-link{
  position:relative;
  min-height:82px;
  display:flex;
  align-items:center;
  gap:15px;
  padding:12px 14px 12px 17px;
  overflow:hidden;

  background:rgba(255,255,255,.92);
  border:1px solid #CFE0ED;
  border-radius:999px;

  color:var(--navy) !important;
  text-decoration:none !important;

  box-shadow:0 7px 20px rgba(12,45,98,.055);

  transition:
    transform .28s ease,
    box-shadow .28s ease,
    border-color .28s ease,
    background .28s ease;
}

#idt-related-premium .idt-rp-icon{
  width:48px;
  height:48px;
  flex:0 0 48px;
  display:grid;
  place-items:center;
  border-radius:50%;
  background:#EEF4FA;
  color:var(--blue);
  transition:background .28s ease,color .28s ease,transform .28s ease;
}

#idt-related-premium .idt-rp-icon svg{
  width:24px;height:24px;
  fill:none;
  stroke:currentColor;
  stroke-width:1.8;
  stroke-linecap:round;
  stroke-linejoin:round;
}

#idt-related-premium .idt-rp-name{
  min-width:0;
  flex:1;
  color:var(--navy);
  font-family:"Manrope",Arial,sans-serif;
  font-size:15px;
  line-height:1.35;
  font-weight:700;
}

#idt-related-premium .idt-rp-arrow{
  width:36px;
  height:36px;
  flex:0 0 36px;
  display:grid;
  place-items:center;
  border-radius:50%;
  background:var(--navy);
  color:#fff;
  transition:background .28s ease,transform .28s ease;
}

#idt-related-premium .idt-rp-arrow svg{
  width:15px;height:15px;
  fill:none;
  stroke:currentColor;
  stroke-width:2.3;
  stroke-linecap:round;
  stroke-linejoin:round;
}

/* restrained orange detail */
#idt-related-premium .idt-rp-link:before{
  content:"";
  position:absolute;
  left:0;
  top:50%;
  width:3px;
  height:26px;
  border-radius:0 4px 4px 0;
  transform:translateY(-50%) scaleY(.35);
  background:var(--orange);
  opacity:0;
  transition:opacity .28s ease,transform .28s ease;
}

@media(hover:hover) and (pointer:fine){
  #idt-related-premium .idt-rp-link:hover{
    transform:translateY(-4px);
    background:#fff;
    border-color:var(--sky);
    box-shadow:0 15px 30px rgba(12,45,98,.10);
  }
  #idt-related-premium .idt-rp-link:hover:before{
    opacity:1;
    transform:translateY(-50%) scaleY(1);
  }
  #idt-related-premium .idt-rp-link:hover .idt-rp-icon{
    background:var(--navy);
    color:#fff;
    transform:scale(1.03);
  }
  #idt-related-premium .idt-rp-link:hover .idt-rp-arrow{
    background:var(--orange);
    transform:translateX(2px);
  }
}

#idt-related-premium .idt-rp-link:focus-visible{
  outline:3px solid rgba(121,189,242,.35);
  outline-offset:3px;
}

/* ================= RESPONSIVE ================= */
@media(max-width:991px){
  #idt-related-premium{
    padding:56px 20px 60px;
  }
  #idt-related-premium .idt-rp-grid{
    grid-template-columns:repeat(2,minmax(0,1fr));
  }
  #idt-related-premium .idt-rp-title{font-size:35px}
}

@media(max-width:640px){
  #idt-related-premium{
    padding:46px 15px 50px;
  }
  #idt-related-premium .idt-rp-head{
    margin-bottom:28px;
  }
  #idt-related-premium .idt-rp-eyebrow{
    font-size:29px;
  }
  #idt-related-premium .idt-rp-title{
    font-size:29px;
    letter-spacing:-.35px;
  }
  #idt-related-premium .idt-rp-desc{
    font-size:13.5px;
  }
  #idt-related-premium .idt-rp-grid{
    grid-template-columns:1fr;
    gap:11px;
  }
  #idt-related-premium .idt-rp-link{
    min-height:72px;
    padding:10px 12px 10px 14px;
  }
  #idt-related-premium .idt-rp-icon{
    width:43px;height:43px;
    flex-basis:43px;
  }
  #idt-related-premium .idt-rp-name{
    font-size:14px;
  }
  #idt-related-premium .idt-rp-arrow{
    width:33px;height:33px;
    flex-basis:33px;
  }
}

@media(max-width:390px){
  #idt-related-premium{
    padding-left:12px;
    padding-right:12px;
  }
  #idt-related-premium .idt-rp-link{
    gap:11px;
  }
}
</style>

<section id="idt-related-premium">
  <div class="idt-rp-topline"></div>
  <div class="idt-rp-ring"></div>
  <div class="idt-rp-dots"></div>

  <div class="idt-rp-container">

    <header class="idt-rp-head">
      <p class="idt-rp-eyebrow">Explore More</p>
      <h2 class="idt-rp-title">You May Also Like</h2>
      <div class="idt-rp-divider" aria-hidden="true"><span></span><span></span></div>
      <p class="idt-rp-desc">
        Explore more handpicked India tours and thoughtfully planned travel experiences for your next journey.
      </p>
    </header>

    <nav class="idt-rp-grid" aria-label="Related tour packages">

      <a class="idt-rp-link" href="https://indiadaytrip.com/india-tour-packages/">
        <span class="idt-rp-icon">
          <svg viewBox="0 0 24 24"><path d="M12 3l6 4v5c0 4.3-2.5 7.2-6 9-3.5-1.8-6-4.7-6-9V7l6-4z"/><path d="M9 12h6M12 9v6"/></svg>
        </span>
        <span class="idt-rp-name">India Tour Packages</span>
        <span class="idt-rp-arrow"><svg viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg></span>
      </a>

      <a class="idt-rp-link" href="https://indiadaytrip.com/golden-triangle-tour-packages/">
        <span class="idt-rp-icon">
          <svg viewBox="0 0 24 24"><path d="M3 19h18M5 19V9h14v10M8 9V6h8v3M10 13h4M10 16h4"/></svg>
        </span>
        <span class="idt-rp-name">Golden Triangle Tour Packages</span>
        <span class="idt-rp-arrow"><svg viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg></span>
      </a>

      <a class="idt-rp-link" href="https://indiadaytrip.com/taj-mahal-tour-packages/">
        <span class="idt-rp-icon">
          <svg viewBox="0 0 24 24"><path d="M4 20h16M6 20v-7h12v7M8 13V9h8v4M10 9c0-2 1-3.5 2-4.5 1 1 2 2.5 2 4.5M12 4.5V2"/></svg>
        </span>
        <span class="idt-rp-name">Taj Mahal Tour Packages</span>
        <span class="idt-rp-arrow"><svg viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg></span>
      </a>

      <a class="idt-rp-link" href="https://indiadaytrip.com/varanasi-tour-packages/">
        <span class="idt-rp-icon">
          <svg viewBox="0 0 24 24"><path d="M3 18c3-1.5 5.5-1.5 8 0s5 1.5 10 0M6 14h12M8 14V9h8v5M10 9V6h4v3M12 6V3"/></svg>
        </span>
        <span class="idt-rp-name">Varanasi Tour Packages</span>
        <span class="idt-rp-arrow"><svg viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg></span>
      </a>

      <a class="idt-rp-link" href="https://indiadaytrip.com/rajasthan-tour-package/">
        <span class="idt-rp-icon">
          <svg viewBox="0 0 24 24"><path d="M3 20h18M5 20V10l3-2 4 2 4-2 3 2v10M8 20v-5h3v5M14 20v-5h3v5M7 8V5h2v3M15 8V5h2v3"/></svg>
        </span>
        <span class="idt-rp-name">Rajasthan Tour Packages</span>
        <span class="idt-rp-arrow"><svg viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg></span>
      </a>

      <a class="idt-rp-link" href="https://indiadaytrip.com/kerala-tours-package/">
        <span class="idt-rp-icon">
          <svg viewBox="0 0 24 24"><path d="M4 19c4-2 7-2 10 0 2 1 4 1 6 0M12 16c0-5 1-9 5-12M15 7c-2-2-4-2-6-1M16 7c2-2 4-2 5-1M15 9c-2 0-4 1-5 3"/></svg>
        </span>
        <span class="idt-rp-name">Kerala Tour Packages</span>
        <span class="idt-rp-arrow"><svg viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg></span>
      </a>

    </nav>
  </div>
</section>
