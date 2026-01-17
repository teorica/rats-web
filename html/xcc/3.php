<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOT_ACCESS // L_VALVE</title>
    <style>
        /* --- 1. THE KERNEL PALETTE --- */
        :root {
            --void:     #111111; /* Background */
            --amber:    #FFB000; /* The Signal */
            --graphite: #333333; /* Structure */
            --silver:   #bbbbbb; /* Body Text */
            
            /* A font stack that prioritizes system monospace fonts */
            --font-stack: 'Menlo', 'Monaco', 'Consolas', 'Courier New', monospace;
        }

        /* --- 2. RESET & BASE --- */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            background-color: var(--void);
            color: var(--silver);
            font-family: var(--font-stack);
            line-height: 1.6;
            font-size: 16px;
            /* A CRT-style faint glow can be added, but let's keep it sharp for professionalism */
        }

        a { text-decoration: none; color: var(--amber); transition: all 0.2s ease; }
        a:hover { background-color: var(--amber); color: var(--void); }

        /* --- 3. LAYOUT --- */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            border-left: 1px solid var(--graphite);
            border-right: 1px solid var(--graphite);
            min-height: 100vh;
        }

        /* --- 4. HEADER (PROMPT STYLE) --- */
        header {
            padding: 2.5rem 0;
            border-bottom: 1px solid var(--graphite);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--amber);
            letter-spacing: -1px;
        }
        
        .logo::before { content: "./"; color: var(--silver); }
        .logo::after { content: "_"; animation: blink 1s infinite; }

        nav a { margin-left: 2rem; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; }

        @keyframes blink { 50% { opacity: 0; } }

        /* --- 5. HERO (COMMAND LINE OUTPUT) --- */
        .hero {
            padding: 6rem 0;
            border-bottom: 1px dashed var(--graphite); /* Dashed line for terminal paper feel */
        }

        h1 {
            font-size: 3rem;
            line-height: 1.1;
            color: var(--amber);
            margin-bottom: 2rem;
            text-transform: uppercase;
        }

        .hero-sub {
            font-size: 1.1rem;
            max-width: 600px;
            margin-bottom: 3rem;
            color: var(--silver);
            border-left: 2px solid var(--graphite);
            padding-left: 1.5rem;
        }

        /* Button: The "Execute" Block */
        .btn {
            display: inline-block;
            border: 1px solid var(--amber);
            color: var(--amber);
            padding: 15px 30px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            background: transparent;
        }
        
        .btn:hover {
            background-color: var(--amber);
            color: var(--void);
            box-shadow: 0 0 15px rgba(255, 176, 0, 0.4); /* Amber Glow */
        }

        /* --- 6. METRICS (ASCII TABLE STYLE) --- */
        .metrics-section {
            padding: 4rem 0;
            border-bottom: 1px solid var(--graphite);
        }

        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .metric-box {
            border: 1px solid var(--graphite);
            padding: 1.5rem;
        }
        
        .metric-box:hover { border-color: var(--amber); }

        .metric-val {
            font-size: 2.5rem;
            color: var(--amber);
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .metric-label { font-size: 0.8rem; text-transform: uppercase; color: var(--silver); opacity: 0.7; }

        /* --- 7. PRICING (CONFIG FILE) --- */
        .pricing-section { padding: 5rem 0; }
        
        .section-title {
            color: var(--amber);
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-transform: uppercase;
            display: inline-block;
            background-color: var(--graphite);
            color: var(--void);
            padding: 5px 10px;
            font-weight: bold;
        }

        .pricing-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .pricing-table th {
            border-bottom: 2px solid var(--amber);
            padding: 1rem;
            color: var(--amber);
            text-transform: uppercase;
            font-weight: normal;
        }

        .pricing-table td {
            border-bottom: 1px solid var(--graphite);
            padding: 1.5rem 1rem;
        }
        
        .pricing-table tr:hover td {
            background-color: rgba(255, 176, 0, 0.05); /* Slight highlight on hover */
            color: var(--amber);
        }

        .price-tag { font-weight: bold; font-size: 1.2rem; }

        /* --- 8. FOOTER (SYSTEM LOGS) --- */
        footer {
            padding: 3rem 0;
            font-size: 0.8rem;
            color: #444;
            display: flex;
            justify-content: space-between;
            border-top: 1px solid var(--graphite);
        }

    </style>
</head>
<body>

    <div class="container">
        <header>
            <div class="logo">L_VALVE_DAEMON</div>
            <nav>
                <a href="#">[MAN]UAL</a>
                <a href="#">[NET]WORK</a>
                <a href="#">[SUP]PORT</a>
                <a href="#" style="color: var(--amber);">&lt;LOGIN /&gt;</a>
            </nav>
        </header>

        <section class="hero">
            <h1>We handle the kernel panic.<br>You handle the revenue.</h1>
            <div class="hero-sub">
                <p>> Uptime is not a feature; it is a requirement.</p>
                <p>> We provide bare-metal stability for business owners who value sleep over debugging.</p>
            </div>
            <a href="#" class="btn">sudo deploy_server</a>
        </section>

        <section class="metrics-section">
            <div class="metrics-grid">
                <div class="metric-box">
                    <span class="metric-val">99.9%</span>
                    <span class="metric-label">System Availability</span>
                </div>
                <div class="metric-box">
                    <span class="metric-val">&lt; 15ms</span>
                    <span class="metric-label">Latency to Backbone</span>
                </div>
                <div class="metric-box">
                    <span class="metric-val">No. 1</span>
                    <span class="metric-label">Priority: Your Data</span>
                </div>
            </div>
        </section>

        <section class="pricing-section">
            <div class="section-title">## AVAILABLE_NODES</div>
            
            <table class="pricing-table">
                <thead>
                    <tr>
                        <th>Node_ID</th>
                        <th>Specs (CPU/RAM/SSD)</th>
                        <th>Throughput</th>
                        <th>Cost/Mo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NODE_01</td>
                        <td>1 Core / 2GB / 50GB</td>
                        <td>1 Gbps</td>
                        <td class="price-tag">$15.00</td>
                        <td><a href="#">[INIT]</a></td>
                    </tr>
                    <tr>
                        <td style="color: var(--amber);">NODE_02 *</td>
                        <td>2 Core / 4GB / 100GB</td>
                        <td>2 Gbps</td>
                        <td class="price-tag">$30.00</td>
                        <td><a href="#">[INIT]</a></td>
                    </tr>
                    <tr>
                        <td>NODE_03</td>
                        <td>4 Core / 8GB / 250GB</td>
                        <td>5 Gbps</td>
                        <td class="price-tag">$60.00</td>
                        <td><a href="#">[INIT]</a></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <footer>
            <div>
                UID: 1000 (admin) // GID: 1000 (staff)<br>
                Location: /etc/quito/ecuador
            </div>
            <div>
                Memory Usage: 124MB / 16384MB<br>
                Load Average: 0.00, 0.01, 0.05
            </div>
        </footer>
    </div>

</body>
</html>
