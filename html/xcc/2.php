<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MISSION_CONTROL // L_VALVE HOSTING</title>
    <style>
        /* --- 1. AEROSPACE / F1 COLOR PALETTE --- */
        :root {
            /* The clean room environment */
            --paper:    #FFFFFF; 
            /* Deep structure, used for text and borders instead of black */
            --chassis:  #0B3D91; 
            /* High velocity accent, critical actions */
            --switch:   #FF1E00; 
            
            /* Using the deep blue for main text for a richer, high-tech feel */
            --ink:      #0B3D91; 
            
            --font-main: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            /* F1 data screens often use very clean monospaced fonts */
            --font-mono: 'Roboto Mono', 'Courier New', Courier, monospace; 
        }

        /* --- 2. GLOBAL RESET & TYPOGRAPHY --- */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            background-color: var(--paper);
            color: var(--ink);
            font-family: var(--font-main);
            line-height: 1.5;
            /* A sharp red line at the top, like a redline on a tachometer */
            border-top: 4px solid var(--switch); 
        }

        a { text-decoration: none; color: var(--ink); transition: color 0.2s;}
        a:hover { color: var(--switch); }

        /* --- 3. UTILITY CLASSES --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            /* Sharp, high-contrast borders */
            border-left: 1px solid var(--chassis);
            border-right: 1px solid var(--chassis);
            min-height: 100vh;
            background-color: var(--paper);
        }

        /* Added a slight slant to uppercase for speed */
        .mono { font-family: var(--font-mono); letter-spacing: -0.5px; }
        .uppercase { text-transform: uppercase; letter-spacing: 1px; font-weight: 800; }
        
        /* --- 4. HEADER (FLIGHT CHECKLIST STYLE) --- */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem 0;
            border-bottom: 2px solid var(--chassis);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 900;
            /* Inverted logo for high impact */
            background-color: var(--chassis);
            color: var(--paper);
            padding: 5px 15px;
            font-style: italic; /* Slight F1 speed tilt */
        }

        nav a {
            margin-left: 2rem;
            font-weight: 700;
            font-size: 0.9rem;
        }
        
        /* The CTA in the nav is now an illuminated red switch */
        .nav-cta { 
            color: var(--switch) !important; 
            border: 1px solid var(--switch);
            padding: 5px 10px;
        }
        .nav-cta:hover { background-color: var(--switch); color: var(--paper) !important; text-decoration: none; }

        /* --- 5. HERO SECTION (TELEMETRY DATA) --- */
        .hero {
            padding: 6rem 0;
            border-bottom: 1px solid var(--chassis);
            display: grid;
            grid-template-columns: 1.8fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        h1 {
            font-size: 4rem;
            line-height: 0.9;
            margin-bottom: 1.5rem;
            letter-spacing: -1.5px;
            color: var(--chassis);
        }
        
        /* Accentuating the key words with the red */
        .highlight { color: var(--switch); }

        .hero-specs {
            /* Thicker, sharper border */
            border-left: 3px solid var(--switch);
            padding-left: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(90deg, rgba(11, 61, 145, 0.05) 0%, rgba(255,255,255,0) 100%);
            padding: 2rem;
        }

        .hero-specs p { margin-bottom: 1rem; font-size: 0.95rem; font-weight: 600;}

        /* Button: High Velocity Red */
        .btn {
            display: inline-block;
            background-color: var(--switch);
            color: var(--paper);
            padding: 14px 28px;
            font-weight: 900;
            font-family: var(--font-mono);
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn:hover { 
            background-color: var(--chassis);
            box-shadow: 4px 4px 0px var(--chassis); /* Hard shadow for depth */
            transform: translate(-2px, -2px);
        }

        /* --- 6. METRICS GRID (HEADS UP DISPLAY) --- */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            border-bottom: 1px solid var(--chassis);
        }

        .stat-box {
            padding: 2.5rem 2rem;
            border-right: 1px solid var(--chassis);
            /* Very faint blue tint for the background, sterile look */
            background-color: rgba(11, 61, 145, 0.03);
            text-align: center;
        }
        
        .stat-box:last-child { border-right: none; }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            color: var(--chassis);
            display: block;
            margin-bottom: 0.5rem;
            letter-spacing: -2px;
        }

        /* --- 7. PRICING (MISSION CONFIGURATION) --- */
        .pricing-section { padding: 5rem 0; }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
            border-bottom: 2px solid var(--chassis);
            padding-bottom: 15px;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .plan-card {
            border: 2px solid var(--chassis);
            padding: 2rem;
            position: relative;
            background: var(--paper);
            transition: transform 0.2s;
        }
        
        .plan-card:hover {
             transform: translateY(-5px);
             border-color: var(--switch);
        }

        /* The featured card is now the deep aerospace blue */
        .plan-card.featured {
            background-color: var(--chassis); 
            border-color: var(--chassis);
            color: var(--paper);
        }
        
        .plan-card.featured h3, 
        .plan-card.featured .price,
        .plan-card.featured li,
        .plan-card.featured .plan-name {
            color: var(--paper); /* White text on blue background */
        }
        
        .plan-card.featured .features-list li {
             border-bottom-color: rgba(255,255,255,0.2);
        }

        .plan-name { font-size: 1.4rem; font-weight: 900; margin-bottom: 1.5rem; letter-spacing: 1px;}
        .price { font-size: 2.5rem; font-weight: 900; font-family: var(--font-mono); margin-bottom: 2rem; display: block; }
        
        .features-list { list-style: none; margin-bottom: 2.5rem; }
        .features-list li {
            border-bottom: 1px solid rgba(11, 61, 145, 0.15);
            padding: 10px 0;
            font-size: 0.95rem;
            font-weight: 600;
        }

        /* --- 8. FOOTER --- */
        footer {
            padding: 3rem 0;
            border-top: 2px solid var(--chassis);
            margin-top: 4rem;
            font-size: 0.85rem;
            display: flex;
            justify-content: space-between;
            background-color: var(--chassis);
            color: var(--paper);
            padding: 2rem;
        }
        
        .status-dot {
            height: 12px; width: 12px;
            background-color: var(--switch); /* Red Alert Dot */
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
            box-shadow: 0 0 8px var(--switch); /* Glowing effect */
        }

    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <header>
            <div class="logo uppercase">L_VALVE // MISSION CONTROL</div>
            <nav class="uppercase">
                <a href="#">Telemetry</a>
                <a href="#">Orbit Path</a>
                <a href="#">Payload</a>
                <a href="#" class="nav-cta mono">ENGAGE SYSTEMS</a>
            </nav>
        </header>

        <section class="hero">
            <div class="hero-text">
                <h1 class="uppercase">VELOCITY.<br>PRECISION.<br><span class="highlight">ZERO DRAG.</span></h1>
                <p class="mono" style="font-size: 1.1rem;">Mission-critical infrastructure for high-performance demands.</p>
            </div>
            <div class="hero-specs mono uppercase">
                <p>STATUS: ALL SYSTEMS GO</p>
                <p>LATENCY: < 24MS (T-MINUS)</p>
                <p>INTEGRITY: 99.999%</p>
                <br>
                <a href="#" class="btn">LAUNCH SEQUENCE</a>
            </div>
        </section>

        <section class="stats-grid">
            <div class="stat-box">
                <span class="stat-number mono">MACH 0.02</span>
                <span class="uppercase">RESPONSE TIME</span>
            </div>
            <div class="stat-box">
                <span class="stat-number mono">TIER 4</span>
                <span class="uppercase">ORBITAL GRADE</span>
            </div>
            <div class="stat-box">
                <span class="stat-number mono">24/7/365</span>
                <span class="uppercase">FLIGHT CREW</span>
            </div>
        </section>

        <section class="pricing-section">
            <div class="section-header">
                <h2 class="uppercase">PAYLOAD CONFIGURATION</h2>
                <span class="mono uppercase" style="font-weight: 700;">// Select Thrust Level</span>
            </div>
            
            <div class="pricing-grid">
                <div class="plan-card">
                    <h3 class="plan-name uppercase">VECTOR 1</h3>
                    <span class="price">$15.00</span>
                    <ul class="features-list mono uppercase">
                        <li>1 vCPU Core</li>
                        <li>2GB ECC RAM</li>
                        <li>50GB NVMe Storage</li>
                        <li>Debian / OpenBSD</li>
                    </ul>
                    <a href="#" class="btn" style="background: var(--chassis); width: 100%; text-align: center;">INITIALIZE</a>
                </div>

                <div class="plan-card featured">
                    <h3 class="plan-name uppercase">VELOCITY 2</h3>
                    <span class="price">$30.00</span>
                    <ul class="features-list mono uppercase">
                        <li>2 vCPU Cores</li>
                        <li>4GB ECC RAM</li>
                        <li>100GB NVMe Storage</li>
                        <li>Daily Snapshots</li>
                    </ul>
                    <a href="#" class="btn" style="background: var(--switch); color: var(--paper); width: 100%; text-align: center;">INITIALIZE</a>
                </div>

                <div class="plan-card">
                    <h3 class="plan-name uppercase">APEX 4</h3>
                    <span class="price">$60.00</span>
                    <ul class="features-list mono uppercase">
                        <li>4 vCPU Cores</li>
                        <li>8GB ECC RAM</li>
                        <li>250GB NVMe Storage</li>
                        <li>Priority Lane</li>
                    </ul>
                    <a href="#" class="btn" style="background: var(--chassis); width: 100%; text-align: center;">INITIALIZE</a>
                </div>
            </div>
        </section>

        <footer class="mono uppercase">
            <div>
                &copy; 2026 LeninValve Aerospace Compute.<br>
                Base Command: Quito, EC.
            </div>
            <div>
                <span class="status-dot"></span> CORE REACTOR STABLE
            </div>
        </footer>
    </div>

</body>
</html>
