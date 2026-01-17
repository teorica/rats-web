<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>HOSTING_ENGINEERING // SYSTEM_STATUS</title>
		<style>
/* --- 1. INDUSTRIAL COLOR PALETTE --- */
:root {
	--paper:    #f0e7d6; /* Canvas */
	--chassis:  #9dbdb8; /* Structure/Blocks */
	--switch:   #ea2e00; /* Action/Alert */
	--ink:      #1a1a1a; /* Text (Near Black for readability) */

	--font-main: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	--font-mono: 'Courier New', Courier, monospace; /* For technical feel */
}

				/* --- 2. GLOBAL RESET & TYPOGRAPHY --- */
* { box-sizing: border-box; margin: 0; padding: 0; }

body {
	background-color: var(--paper);
	color: var(--ink);
	font-family: var(--font-main);
	line-height: 1.5;
	border-top: 5px solid var(--switch); /* Top mechanical edge */
}

				a { text-decoration: none; color: var(--ink); }

				/* --- 3. UTILITY CLASSES --- */
				.container {
					max-width: 1200px;
					margin: 0 auto;
					padding: 0 20px;
					border-left: 1px solid var(--chassis);
					border-right: 1px solid var(--chassis);
					min-height: 100vh;
					background-color: var(--paper);
				}

				.mono { font-family: var(--font-mono); letter-spacing: -0.5px; }
				.uppercase { text-transform: uppercase; letter-spacing: 1px; font-weight: bold; }

				/* --- 4. HEADER (MACHINE PLATE STYLE) --- */
				header {
					display: flex;
					justify-content: space-between;
					align-items: center;
					padding: 2rem 0;
					border-bottom: 2px solid var(--ink);
				}

				.logo {
					font-size: 1.5rem;
					font-weight: 900;
					background-color: var(--ink);
					color: var(--paper);
					padding: 5px 10px;
				}

				nav a {
					margin-left: 2rem;
					font-weight: 700;
					font-size: 0.9rem;
				}

				nav a:hover { color: var(--switch); text-decoration: underline; }

				/* --- 5. HERO SECTION (STARK EFFICIENCY) --- */
				.hero {
					padding: 5rem 0;
					border-bottom: 1px solid var(--chassis);
					display: grid;
					grid-template-columns: 2fr 1fr;
					gap: 2rem;
				}

				h1 {
					font-size: 3.5rem;
					line-height: 0.9;
					margin-bottom: 1.5rem;
					letter-spacing: -1px;
				}

				.hero-specs {
					border-left: 2px solid var(--switch);
					padding-left: 1.5rem;
					display: flex;
					flex-direction: column;
					justify-content: center;
				}

				.hero-specs p { margin-bottom: 1rem; font-size: 0.9rem; }

				/* Button: Mechanical Switch Style */
				.btn {
					display: inline-block;
					background-color: var(--switch);
					color: var(--paper);
					padding: 12px 24px;
					font-weight: bold;
					font-family: var(--font-mono);
					border: none;
					cursor: pointer;
					transition: background 0.2s;
				}

				.btn:hover { background-color: var(--ink); }

				/* --- 6. METRICS GRID (BLUEPRINT STYLE) --- */
				.stats-grid {
					display: grid;
					grid-template-columns: repeat(3, 1fr);
					border-bottom: 1px solid var(--chassis);
				}

				.stat-box {
					padding: 2rem;
					border-right: 1px solid var(--chassis);
					background-color: rgba(157, 189, 184, 0.1); /* 10% opacity Teal */
				}

				.stat-box:last-child { border-right: none; }

				.stat-number {
					font-size: 2.5rem;
					font-weight: 900;
					color: var(--chassis);
					display: block;
					margin-bottom: 0.5rem;
				}

				/* --- 7. PRICING (THE "DATA SHEET") --- */
				.pricing-section { padding: 4rem 0; }

				.section-header {
					display: flex;
					justify-content: space-between;
					align-items: flex-end;
					margin-bottom: 2rem;
					border-bottom: 4px solid var(--chassis);
					padding-bottom: 10px;
				}

				.pricing-grid {
					display: grid;
					grid-template-columns: repeat(3, 1fr);
					gap: 20px;
				}

				.plan-card {
					border: 2px solid var(--ink);
					padding: 1.5rem;
					position: relative;
					background: var(--paper);
				}

				.plan-card.featured {
					background-color: var(--chassis); /* The Teal Block */
					border-color: var(--ink);
				}

				.plan-card.featured h3, 
				.plan-card.featured .price,
				.plan-card.featured li {
					color: var(--ink); /* Keep text dark for contrast */
				}

				.plan-name { font-size: 1.2rem; font-weight: 800; margin-bottom: 1rem; }
				.price { font-size: 2rem; font-family: var(--font-mono); margin-bottom: 1.5rem; display: block; }

				.features-list { list-style: none; margin-bottom: 2rem; }
				.features-list li {
					border-bottom: 1px solid rgba(0,0,0,0.1);
					padding: 8px 0;
					font-size: 0.9rem;
				}

				/* --- 8. FOOTER --- */
				footer {
					padding: 3rem 0;
					border-top: 4px solid var(--ink);
					margin-top: 4rem;
					font-size: 0.8rem;
					display: flex;
					justify-content: space-between;
				}

				.status-dot {
					height: 10px; width: 10px;
					background-color: var(--switch); /* Orange Dot */
					border-radius: 50%;
					display: inline-block;
					margin-right: 5px;
				}

		</style>
	</head>
	<body>

		<div class="container">
			<header>
				<div class="logo mono">L_VALVE // HOSTING</div>
				<nav class="uppercase">
					<a href="#">Infrastructure</a>
					<a href="#">Network</a>
					<a href="#">SLA</a>
					<a href="#" style="color: var(--switch);">Client Login</a>
				</nav>
			</header>

			<section class="hero">
				<div class="hero-text">
					<h1 class="uppercase">Bare Metal.<br>No Fluff.<br>Pure Uptime.</h1>
					<p class="mono">High-performance infrastructure for engineering-led teams.</p>
				</div>
				<div class="hero-specs mono">
					<p>LOCATION: QUITO / FRANKFURT</p>
					<p>LATENCY: &lt; 24MS</p>
					<p>UPTIME: 99.99%</p>
					<br>
					<a href="#" class="btn">INITIATE DEPLOYMENT</a>
				</div>
			</section>

			<section class="stats-grid">
				<div class="stat-box">
					<span class="stat-number mono">0.02s</span>
					<span class="uppercase">TTFB Average</span>
				</div>
				<div class="stat-box">
					<span class="stat-number mono">Tier 3</span>
					<span class="uppercase">Certification</span>
				</div>
				<div class="stat-box">
					<span class="stat-number mono">24/7</span>
					<span class="uppercase">Engineers on Site</span>
				</div>
			</section>

			<section class="pricing-section">
				<div class="section-header">
					<h2 class="uppercase">Compute Units</h2>
					<span class="mono">Monthly Billing / No Contracts</span>
				</div>

				<div class="pricing-grid">
					<div class="plan-card">
						<h3 class="plan-name uppercase">Entry</h3>
						<span class="price">$15.00</span>
						<ul class="features-list mono">
							<li>1 vCPU Core</li>
							<li>2GB ECC RAM</li>
							<li>50GB NVMe Storage</li>
							<li>Debian 12 / OpenBSD</li>
						</ul>
						<a href="#" class="btn" style="background: var(--ink);">CONFIGURE</a>
					</div>

					<div class="plan-card featured">
						<h3 class="plan-name uppercase">Standard</h3>
						<span class="price">$30.00</span>
						<ul class="features-list mono">
							<li>2 vCPU Cores</li>
							<li>4GB ECC RAM</li>
							<li>100GB NVMe Storage</li>
							<li>Daily Snapshots</li>
						</ul>
						<a href="#" class="btn">CONFIGURE</a>
					</div>

					<div class="plan-card">
						<h3 class="plan-name uppercase">Pro</h3>
						<span class="price">$60.00</span>
						<ul class="features-list mono">
							<li>4 vCPU Cores</li>
							<li>8GB ECC RAM</li>
							<li>250GB NVMe Storage</li>
							<li>Priority Lane</li>
						</ul>
						<a href="#" class="btn" style="background: var(--ink);">CONFIGURE</a>
					</div>
				</div>
			</section>

			<footer class="mono">
				<div>
					&copy; 2026 LeninValve Hosting Systems.<br>
					Operational HQ: Quito, EC.
				</div>
				<div>
					<span class="status-dot"></span> SYSTEM NOMINAL
				</div>
			</footer>
		</div>

	</body>
</html>
