/* WinterCoatJet - Concept D Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile Navigation Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  }

  // Navbar Scroll Effect
  const navbar = document.querySelector('.winter-nav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Active Link Tracking
  const currentPath = window.location.pathname.split('/').pop() || 'index.php';
  const navAnchors = document.querySelectorAll('.nav-links a');
  
  navAnchors.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath === '' && href === 'index.php')) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });

  // Interactive Thermal Insulation & Weatherproof Rating Matrix (Concept D Feature)
  const insulationBtns = document.querySelectorAll('.insulation-tab-btn');
  const insulationDisplay = document.getElementById('insulation-matrix-display');

  const insulationData = {
    "goosedown800": {
      "name": "800-Fill Power European Goose Down Loft",
      "metric": "800+ Cuin Thermal Loft • Sub-Zero Comfort Rating",
      "notes": "Ethically harvested European goose down clusters provide maximum warmth-to-weight ratio, trapping warm body air during arctic blizzards.",
      "ideal": "Standard on Arctic Expedition Down Parkas & Flight Coats"
    },
    "nanotech20k": {
      "name": "20,000mm Hydrostatic Head Nanotech Storm Shell",
      "metric": "20,000mm Waterproof Membrane • 15,000 g/m²/24h Breathability",
      "notes": "Micro-porous hydrophobic membrane repels driving sleet, torrential winter rains, and heavy mountain snow while releasing body moisture.",
      "ideal": "Featured on Alpine Jet Travel Trenches & Storm Parkas"
    },
    "windproof0cfm": {
      "name": "0-CFM Windproof Membrane & Sealed Thermal Baffles",
      "metric": "100% Windproof Protection • Zero Cold Air Ingress",
      "notes": "Bonded windblocker lining shuts out sub-zero arctic gale-force winds up to 60 MPH during high-altitude jet travel.",
      "ideal": "Optimal Sub-Zero Wind Protection for Transatlantic Travel"
    },
    "subzerotemp": {
      "name": "Sub-Zero Alpine Comfort Rating (-30°C)",
      "metric": "-30°C Extreme Temperature Resilience",
      "notes": "Integrated fleece-lined handwarmer pockets, storm cuffs, and magnetic draft flaps maintain core body heat in polar conditions.",
      "ideal": "All-Climate Polar Defense for Global Travelers"
    }
  };

  if (insulationBtns.length > 0 && insulationDisplay) {
    insulationBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        insulationBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const key = this.getAttribute('data-insulation');
        const data = insulationData[key] || insulationData["goosedown800"];

        insulationDisplay.innerHTML = `
          <div style="background: var(--bg-surface); padding: 2rem; border-radius: 16px; border: 1px solid var(--border-silver); margin-top: 1.5rem;">
            <span style="display: inline-block; padding: 0.25rem 0.75rem; background: var(--accent-ice); color: #0B1325; font-size: 0.75rem; font-weight: 800; border-radius: 20px; text-transform: uppercase; margin-bottom: 0.75rem;">${data.metric}</span>
            <h3 style="font-size: 1.5rem; color: var(--text-frost); margin-bottom: 0.5rem;">${data.name}</h3>
            <p style="color: var(--accent-ice); font-weight: 800; font-size: 1.1rem; margin-bottom: 0.75rem;">🏔️ Alpine Atelier Specification: ${data.ideal}</p>
            <p style="color: var(--text-muted); font-size: 0.95rem;">${data.notes}</p>
          </div>
        `;
      });
    });
  }
});
