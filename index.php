<?php
// WinterCoatJet - Concept D: Monolithic Arctic Editorial Gazette & Polar Frost Atelier
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WinterCoatJet — Haute Couture Winter Coats & Alpine Tailored Jackets Atelier</title>
  <meta name="description" content="WinterCoatJet is Soho New York's premier luxury outerwear atelier crafting 800-fill goose down parkas, 20,000mm nanotech trenches, and Savile Row wool overcoats.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;800&family=Playfair+Display:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Navigation Header -->
  <header class="winter-nav">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
      <a href="index.php" class="brand-logo">Winter<span>CoatJet</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">Atelier</a></li>
        <li><a href="#creations">Coat Capsule</a></li>
        <li><a href="#matrix">Thermal Matrix</a></li>
        <li><a href="blog.html">Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="contact.html" class="btn-winter btn-ice" style="padding: 0.5rem 1.25rem; font-size: 0.75rem;">Reserve Outerwear</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Arctic Frost Hero (Concept D Feature) -->
  <section class="arctic-hero" id="hero">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center;">
        <div>
          <span class="hero-badge">🏔️ 800-FILL ARCTIC DOWN PARKAS</span>
          <h1 class="font-display hero-title">
            THE ARCTIC STORM & <span class="gradient-ice">WINTER COAT</span> CAPSULE
          </h1>
          <p style="color: var(--text-muted); font-size: 1.15rem; margin-bottom: 2rem; max-width: 600px;">
            Merging 800-fill power European goose down, 20,000mm hydrostatic nanotech storm shells, Savile Row wool tailoring, and sub-zero (-30°C) windproof insulation.
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <a href="#creations" class="btn-winter btn-ice">Explore Coat Capsule</a>
            <a href="#matrix" class="btn-winter btn-outline-ice">Inspect Thermal Matrix</a>
          </div>
        </div>

        <div style="position: relative; border-radius: 24px; overflow: hidden; border: 1px solid var(--border-silver); box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);">
          <img src="https://images.unsplash.com/photo-1543087903-1ac2ec7aa8c5?auto=format&fit=crop&w=800&q=80&v=wcj_v3" alt="WinterCoatJet Luxury Winter Down Parka" style="width: 100%; height: 500px; object-fit: cover;">
          <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 1.5rem; background: linear-gradient(0deg, rgba(11,19,37,0.95) 0%, transparent 100%);">
            <span style="font-size: 0.75rem; color: var(--accent-ice); font-weight: 800; text-transform: uppercase;">Flagship Alpine Outerwear</span>
            <h3 style="color: var(--text-frost); font-size: 1.3rem;">Arctic Expedition 800-Fill Goose Down Parka</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: The Winter Coat Jet Story -->
  <section class="section" id="story" style="background: var(--bg-card);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div>
          <span class="section-subtitle">Atelier Thermal Science</span>
          <h2 class="section-title" style="font-size: 2.8rem; margin-bottom: 1.5rem;">20,000mm Nanotech Shells Meet Savile Row Tailoring</h2>
          <p style="color: var(--text-frost); margin-bottom: 1.25rem; line-height: 1.8;">
            WinterCoatJet was established at 181 Mercer Street in Soho to re-engineer cold-weather travel outerwear into majestic, stormproof sartorial armor. We combine 800-fill goose down loft with 20,000mm hydrostatic nanotech membranes.
          </p>
          <p style="color: var(--text-frost); margin-bottom: 1.5rem; line-height: 1.8;">
            Our master master tailors in New York and Milan craft double-breasted wool overcoats, alpine parkas, and flight trenches that protect against sub-zero mountain winds while packing effortlessly into jet carryall bags.
          </p>
          <div style="padding: 1.25rem; background: var(--bg-surface); border-left: 3px solid var(--accent-ice); border-radius: 8px;">
            <p style="color: var(--accent-ice); font-family: var(--font-heading); font-size: 1.1rem; font-style: italic; margin: 0;">
              "True winter luxury balances 800-fill down warmth with stormproof nanotech shells that defy polar blizzards."
            </p>
          </div>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1544923246-77307dd654cb?auto=format&fit=crop&w=800&q=80&v=wcj_v4" alt="WinterCoatJet Outerwear Tailoring Workshop" style="border-radius: 20px; border: 1px solid var(--border-silver);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Signature Jet Winter Creations -->
  <section class="section" id="creations">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Haute Couture Outerwear</span>
        <h2 class="section-title">Signature Jet Winter Creations</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
        <!-- Coat 1 -->
        <div class="coat-card">
          <div class="coat-img-wrap">
            <img src="https://images.unsplash.com/photo-1548123378-bde4eca81d2d?auto=format&fit=crop&w=800&q=80&v=wcj_v5" alt="Arctic Expedition Down Parka">
          </div>
          <div class="coat-body">
            <span style="font-size: 0.75rem; color: var(--accent-ice); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">800-Fill Goose Down • -30°C Rating</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-frost);">Arctic Expedition Down Parka</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              Ethically sourced 800-fill goose down, 20,000mm hydrostatic shell, magnetic storm placket, and shearling-lined collar.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-ice); font-weight: 800; font-size: 1.2rem;">$1,450 USD</span>
              <a href="contact.html" class="btn-winter btn-ice" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Reserve Outerwear</a>
            </div>
          </div>
        </div>

        <!-- Coat 2 -->
        <div class="coat-card">
          <div class="coat-img-wrap">
            <img src="https://images.unsplash.com/photo-1559551409-dadc959f76b8?auto=format&fit=crop&w=800&q=80&v=wcj_v6" alt="Savile Row Wool Overcoat">
          </div>
          <div class="coat-body">
            <span style="font-size: 0.75rem; color: var(--accent-ice); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">100% Cashmere-Wool Blend • Double-Breasted</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-frost);">Savile Row Tailored Wool Overcoat</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              550 GSM Italian cashmere-wool weave, horn button closure, peak lapels, windblocker inner lining, and deep welt pockets.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-ice); font-weight: 800; font-size: 1.2rem;">$1,850 USD</span>
              <a href="contact.html" class="btn-winter btn-ice" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Reserve Outerwear</a>
            </div>
          </div>
        </div>

        <!-- Coat 3 -->
        <div class="coat-card">
          <div class="coat-img-wrap">
            <img src="https://images.unsplash.com/photo-1543087903-1ac2ec7aa8c5?auto=format&fit=crop&w=800&q=80&v=wcj_v7" alt="Nanotech Travel Trench Coat">
          </div>
          <div class="coat-body">
            <span style="font-size: 0.75rem; color: var(--accent-ice); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">20,000mm Nanotech Membrane • Packable</span>
            <h3 style="font-size: 1.5rem; margin-bottom: 0.75rem; color: var(--text-frost);">Nanotech Jet Travel Trench</h3>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; flex-grow: 1;">
              3-layer hydrophobic nanotech shell, detachable down thermal vest liner, sealed seams, and compact travel pouch.
            </p>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <span style="color: var(--accent-ice); font-weight: 800; font-size: 1.2rem;">$1,620 USD</span>
              <a href="contact.html" class="btn-winter btn-ice" style="padding: 0.5rem 1rem; font-size: 0.75rem;">Reserve Outerwear</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Interactive Thermal Insulation & Weatherproof Rating Matrix -->
  <section class="section" id="matrix" style="background: var(--bg-card);">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Alpine Engineering</span>
        <h2 class="section-title">Thermal Insulation & Weatherproof Matrix</h2>
        <p style="color: var(--text-muted); max-width: 600px; margin: 0.5rem auto 0;">
          Select an arctic technology feature below to inspect insulation metrics and weatherproof ratings:
        </p>
      </div>

      <div class="insulation-matrix-card" style="max-width: 900px; margin: 0 auto; text-align: center;">
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="insulation-tab-btn active" data-insulation="goosedown800">800-Fill Goose Down</button>
          <button class="insulation-tab-btn" data-insulation="nanotech20k">20,000mm Nanotech Shell</button>
          <button class="insulation-tab-btn" data-insulation="windproof0cfm">0-CFM Windproof</button>
          <button class="insulation-tab-btn" data-insulation="subzerotemp">Sub-Zero (-30°C) Rating</button>
        </div>

        <div id="insulation-matrix-display">
          <div style="background: var(--bg-surface); padding: 2rem; border-radius: 16px; border: 1px solid var(--border-silver); margin-top: 1.5rem;">
            <span style="display: inline-block; padding: 0.25rem 0.75rem; background: var(--accent-ice); color: #0B1325; font-size: 0.75rem; font-weight: 800; border-radius: 20px; text-transform: uppercase; margin-bottom: 0.75rem;">800+ Cuin Thermal Loft • Sub-Zero Comfort Rating</span>
            <h3 style="font-size: 1.5rem; color: var(--text-frost); margin-bottom: 0.5rem;">800-Fill Power European Goose Down Loft</h3>
            <p style="color: var(--accent-ice); font-weight: 800; font-size: 1.1rem; margin-bottom: 0.75rem;">🏔️ Alpine Atelier Specification: Standard on Arctic Expedition Down Parkas & Flight Coats</p>
            <p style="color: var(--text-muted); font-size: 0.95rem;">Ethically harvested European goose down clusters provide maximum warmth-to-weight ratio, trapping warm body air during arctic blizzards.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Live Alpine Runway & Jet Lounge Styling Gallery -->
  <section class="section" id="gallery">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Visual Atmosphere</span>
        <h2 class="section-title">Alpine Runway & Jet Lounge Gallery</h2>
      </div>

      <div class="alpine-gallery">
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1544923246-77307dd654cb?auto=format&fit=crop&w=800&q=80&v=wcj_v8" alt="St. Moritz Alpine Ski Resort Outerwear">
        </div>
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1548123378-bde4eca81d2d?auto=format&fit=crop&w=800&q=80&v=wcj_v9" alt="Paris Winter Fashion Runway Show">
        </div>
        <div class="gallery-tile">
          <img src="https://images.unsplash.com/photo-1559551409-dadc959f76b8?auto=format&fit=crop&w=800&q=80&v=wcj_v10" alt="First Class Jet Lounge Winter Outerwear">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Global Connoisseur Reviews & Sartorial Acclaim -->
  <section class="section" id="reviews" style="background: var(--bg-card);">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Sartorial Acclaim</span>
        <h2 class="section-title">Global Connoisseur Reviews</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <div style="background: var(--bg-surface); padding: 2rem; border-radius: 20px; border: 1px solid var(--border-silver);">
          <p style="color: var(--text-frost); font-style: italic; margin-bottom: 1.5rem;">
            "The Arctic Expedition Down Parka kept me completely warm during sub-zero winds in Iceland. The 800-fill down loft is astonishing!"
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-ice); color: #0B1325; display: flex; align-items: center; justify-content: center; font-weight: 800;">AL</div>
            <div>
              <strong style="color: var(--accent-ice); display: block;">Arthur Laurent</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Luxury Outerwear Editor, Paris</span>
            </div>
          </div>
        </div>

        <div style="background: var(--bg-surface); padding: 2rem; border-radius: 20px; border: 1px solid var(--border-silver);">
          <p style="color: var(--text-frost); font-style: italic; margin-bottom: 1.5rem;">
            "The 20,000mm nanotech travel trench sheds torrential sleet like glass while folding into a sleek carryall bag. Masterful tailoring."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-ice); color: #0B1325; display: flex; align-items: center; justify-content: center; font-weight: 800;">MS</div>
            <div>
              <strong style="color: var(--accent-ice); display: block;">Marcus Sterling</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Alpine Jet Traveler & Ski Enthusiast</span>
            </div>
          </div>
        </div>

        <div style="background: var(--bg-surface); padding: 2rem; border-radius: 20px; border: 1px solid var(--border-silver);">
          <p style="color: var(--text-frost); font-style: italic; margin-bottom: 1.5rem;">
            "Savile Row double-breasted wool overcoat craftsmanship paired with modern windblocker lining. Unrivaled winter elegance."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--accent-ice); color: #0B1325; display: flex; align-items: center; justify-content: center; font-weight: 800;">CK</div>
            <div>
              <strong style="color: var(--accent-ice); display: block;">Clara Kensington</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Textile Outerwear Director, London</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Fine Outerwear Journal & Coat Dispatches -->
  <section class="section" id="gazette">
    <div class="container">
      <div class="section-header">
        <span class="section-subtitle">Outerwear Dispatches</span>
        <h2 class="section-title">Fine Outerwear Journal</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1543087903-1ac2ec7aa8c5?auto=format&fit=crop&w=800&q=80&v=wcj_v11" alt="800-Fill Goose Down Insulation">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-ice); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 24, 2026 • 1,394 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/the-craft-of-800-fill-goose-down-insulation.html">Craft of 800-Fill Goose Down Insulation</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">800+ cuin thermal loft, ethical down sourcing, and sub-zero warmth physics.</p>
            <a href="blog/the-craft-of-800-fill-goose-down-insulation.html" style="color: var(--accent-ice); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1544923246-77307dd654cb?auto=format&fit=crop&w=800&q=80&v=wcj_v12" alt="20,000mm Nanotech Storm Shells">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-ice); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 20, 2026 • 1,396 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/20000mm-nanotech-stormproof-membrane-technology.html">20,000mm Nanotech Stormproof Shell Technology</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">Hydrostatic head rating, hydrophobic pores, and breathable storm defense.</p>
            <a href="blog/20000mm-nanotech-stormproof-membrane-technology.html" style="color: var(--accent-ice); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1548123378-bde4eca81d2d?auto=format&fit=crop&w=800&q=80&v=wcj_v1" alt="Savile Row Double-Breasted Wool Overcoats">
          </div>
          <div class="blog-body">
            <span style="font-size: 0.75rem; color: var(--accent-ice); text-transform: uppercase; font-weight: 800; margin-bottom: 0.5rem;">August 16, 2026 • 1,395 Words</span>
            <h3 style="font-size: 1.35rem; margin-bottom: 0.75rem;"><a href="blog/savile-row-double-breasted-wool-overcoat-tailoring.html">Savile Row Double-Breasted Wool Overcoat Craft</a></h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; flex-grow: 1;">550 GSM cashmere-wool blending, canvas chest piece, and classic lapel geometry.</p>
            <a href="blog/savile-row-double-breasted-wool-overcoat-tailoring.html" style="color: var(--accent-ice); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-top: 1rem;">Read Masterclass Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: VIP Winter Jet Pass Strip & Accordion Footer -->
  <section class="section" id="pass" style="background: var(--bg-card);">
    <div class="container">
      <div style="text-align: center; max-width: 850px; margin: 0 auto; background: var(--bg-surface); padding: 3.5rem 2rem; border-radius: 24px; border: 1px solid var(--border-silver);">
        <span class="hero-badge">🏔️ VIP WINTER JET PASS</span>
        <h2 class="font-display" style="color: var(--text-frost); font-size: 2.5rem; margin-bottom: 1rem;">Join The Winter Jet Society</h2>
        <p style="color: var(--text-muted); margin-bottom: 2rem;">Receive private invitations to limited-run 800-fill down parka drops and alpine fitting events.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for joining the Winter Jet Outerwear Society.'); this.reset();" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-midnight); border: 1px solid var(--border-silver); color: var(--text-frost); border-radius: 50px;">
          <button type="submit" class="btn-winter btn-ice">Join Society</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Winter<span>CoatJet</span></a>
          <p>WinterCoatJet is a premier luxury outerwear publication dedicated to high-performance tailored jackets, nanotech wool trenches, and jet-set travel menswear.</p>
          <p style="margin-top: 1rem; color: var(--accent-silver);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Coat Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Atelier Focus</h4>
          <p>Engineering 20,000mm waterproof nanotech outerwear, Savile Row tailored jackets, and wrinkle-resistant jet travel capsules globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 WinterCoatJet Studio. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed for Luxury Outerwear & Jet-Set Performance Excellence.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
