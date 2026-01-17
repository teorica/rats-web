<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L_VALVE // INDUSTRIAL_NIGHT</title>
    <style>
        /* --- 1. THE HYBRID PALETTE --- */
        :root {
            /* Background: Dark Matte Carbon (The Machine Body) */
            --carbon:   #1a1a1a; 
            
            /* Text: Off-White/Titanium (High legibility) */
            --titanium: #e1e1e1;
            
            /* Structure: Dark Steel (Borders) */
            --steel:    #444444;
            
            /* Accent 1: Safety Orange (From Option 1 - Critical Actions) */
            --safety:   #ea2e00;
            
            /* Accent 2: Oxidized Sage (From Option 1 - Information/Panels) */
            /* We use this with opacity for backgrounds */
            --sage:     #9dbdb8; 
            
            --font-main: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            --font-mono: 'Courier New', Courier, monospace; 
        }

        /* --- 2. BASE --- */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            background-color: var(--carbon);
            color: var(--titanium);
            font-family: var(--font-main);
            line-height: 1.5;
            /* Top bar: Safety Hazard Stripe */
            border-top: 6px solid var(--safety); 
        }

        a { text-decoration: none; color: var(--titanium); transition: 0.2s; }
        a:hover { color: var(--safety); }

        /* --- 3. LAYOUT (The "Blueprint" Structure) --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            /* Thick borders like heavy machinery */
            border-left: 2px solid var(--steel); 
            border-right: 2px solid var(--steel);
            min-height: 100vh;
            background-color: #1f1f1f; /* Slightly lighter than body */
        }

        /* --- 4. HEADER (CONTROL PANEL) --- */
        header {
            padding: 2rem 0;
            border-bottom: 2px solid var(--steel);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-box {
            background-color: var(--sage);
            color: var(--carbon);
            padding: 5px 10px;
            font-weight: 900;
            font-family: var(--font-mono);
            letter-spacing: -1px;
            text-transform: uppercase;
        }

        nav a {
            margin-left: 2rem;
            font-family: var(--font-mono);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* --- 5. HERO (THE ENGINE ROOM) --- */
        .hero {
            padding: 6rem 0;
            border-bottom: 1px solid var(--steel);
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        h1 {
            font-size: 3.5rem;
            line-height: 1;
            margin-bottom: 1.5rem;
            font-weight: 700;
            letter-spacing: -1px;
        }
        
        /* The Subtitle targets the Business Owner */
        .hero-sub {
            font-size: 1.1rem;
            color: #999;
            margin-bottom: 2rem;
            border-left: 3px solid var(--safety);
            padding-left: 1.5rem;
        }

        /* Specs Panel: Using the Sage Green from Option 1 but darker */
        .specs-panel {
            background-color: rgba(157, 189, 184, 0.1); /* Sage with low opacity */
            border: 1px solid var(--sage);
            padding: 2rem;
            font-family: var(--font-mono);
            font-size: 0.9rem;
        }

        .specs-panel p { margin-bottom: 0.8rem; display: flex; justify-content: space-between; }
        .specs-panel strong { color: var(--sage); }

        /* Button: Mechanical Switch */
        .btn {
            display: inline-block;
            background-color: var(--safety);
            color: #fff;
            padding: 15px 30px;
            font-weight: bold;
            text-transform: uppercase;
            font-family: var(--font-mono);
            border: 2px solid var(--safety);
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: transparent;
            color: var(--safety);
        }

        /* --- 6. TRUST INDICATORS (ICONOGRAPHY REPLACEMENT) --- */
        .trust-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            border-bottom: 1px solid var(--steel);
        }

        .trust-item {
            padding: 3rem 2rem;
            border-right: 1px solid var(--steel);
        }
        .trust-item:last-child { border-right: none; }

        .trust-title {
            font-family: var(--font-mono);
            color: var(--sage);
            font-weight: bold;
            margin-bottom: 1rem;
            text-transform: uppercase;
            display: block;
        }

        /* --- 7. PRICING TABLE (THE "KERNEL" INFLUENCE) --- */
        .pricing-section { padding: 5rem 0; }
        
        .section-label {
            display: inline-block;
            background-color: var(--steel);
            color: #fff;
            padding: 5px 15px;
            font-family: var(--font-mono);
            font-size: 0.8rem;
            margin-bottom: 2rem;
            text-transform: uppercase;
        }

        /* Mixing the Table from Option 3 with the Style of Option 1 */
        .tech-table {
            width: 100%;
            border-collapse: collapse;
            font-family: var(--font-mono);
        }

        .tech-table th {
            text-align: left;
            border-bottom: 2px solid var(--safety); /* Orange Line */
            padding: 1rem;
            color: var(--sage);
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .tech-table td {
            padding: 1.5rem 1rem;
            border-bottom: 1px solid var(--steel);
        }

        .tech-table tr:hover {
            background-color: rgba(255,255,255, 0.03);
        }

        .price-display {
            font-size: 1.4rem;
            font-weight: bold;
            color: #fff;
        }

        .action-link {
            color: var(--safety);
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.8rem;
        }
        .action-link:hover { text-decoration: underline; }

        /* --- 8. FOOTER --- */
        footer {
            padding: 3rem 0;
            border-top: 4px solid var(--steel);
            color: #777;
            font-size: 0.8rem;
            font-family: var(--font-mono);
            display: flex;
            justify-content: space-between;
        }

    </style>
</head>
<body>

    <div class="container">
        <header>
            <div class="logo-box">L_VALVE // SYS</div>
            <nav>
                <a href="#">Soluciones</a>
                <a href="#">Infraestructura</a>
                <a href="#">Soporte</a>
                <a href="#" style="color: var(--safety);">[ ACCESO CLIENTE ]</a>
            </nav>
        </header>

        <section class="hero">
            <div>
                <h1>TU NEGOCIO VENDE.<br>NOSOTROS SOSTENEMOS.</h1>
                <div class="hero-sub">
                    Olvídate de servidores, IPs y latencia. 
                    Tú encárgate de facturar, nosotros nos encargamos 
                    de que tu tienda nunca cierre.
                </div>
                <a href="#" class="btn">DELEGAR INFRAESTRUCTURA</a>
            </div>

            <div class="specs-panel">
                <p>ESTADO SISTEMA: <strong style="color: var(--safety);">OPERATIVO</strong></p>
                <p>UBICACIÓN: <strong>QUITO / FRANKFURT</strong></p>
                <p>MONITOREO: <strong>ACTIVO 24/7</strong></p>
                <p>BACKUPS: <strong>HORARIOS</strong></p>
                <br>
                <div style="height: 2px; background: var(--steel); width: 100%;"></div>
                <br>
                <span style="font-size: 0.7rem; opacity: 0.6;">REF: LV-SYS-2026-X</span>
            </div>
        </section>

        <section class="trust-grid">
            <div class="trust-item">
                <span class="trust-title">// 01. INVISIBLE</span>
                <p>Nuestra mejor característica es que no nos notas. Si todo funciona rápido y sin errores, estamos haciendo nuestro trabajo.</p>
            </div>
            <div class="trust-item">
                <span class="trust-title">// 02. BLINDADO</span>
                <p>Seguridad de nivel bancario. Tu base de datos y correos están protegidos detrás de firewalls configurados a mano.</p>
            </div>
            <div class="trust-item">
                <span class="trust-title">// 03. HUMANO</span>
                <p>Nada de chatbots. Cuando necesitas ayuda, hablas con el ingeniero que construyó el sistema.</p>
            </div>
        </section>

        <section class="pricing-section">
            <span class="section-label">MATRIZ DE SERVICIOS</span>
            
            <table class="tech-table">
                <thead>
                    <tr>
                        <th>Nivel de Servicio</th>
                        <th>Capacidad (CPU/RAM)</th>
                        <th>Ideal Para</th>
                        <th>Inversión Mensual</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>STARTUP</strong></td>
                        <td>1 Core / 2GB ECC</td>
                        <td>Landing Pages / Blogs</td>
                        <td class="price-display">$15.00</td>
                        <td><a href="#" class="action-link">CONFIGURAR ></a></td>
                    </tr>
                    <tr>
                        <td><strong style="color: var(--sage);">NEGOCIO (Rec.)</strong></td>
                        <td>2 Core / 4GB ECC</td>
                        <td>E-commerce / Agencias</td>
                        <td class="price-display">$30.00</td>
                        <td><a href="#" class="action-link">CONFIGURAR ></a></td>
                    </tr>
                    <tr>
                        <td><strong>EMPRESA</strong></td>
                        <td>4 Core / 8GB ECC</td>
                        <td>Alto Tráfico / Apps</td>
                        <td class="price-display">$60.00</td>
                        <td><a href="#" class="action-link">CONFIGURAR ></a></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <footer>
            <div>
                &copy; 2026 LeninValve Hosting Systems.<br>
                Quito, Ecuador.
            </div>
            <div>
                SYSTEM_LOAD: 0.02<br>
                TEMP: 42°C
            </div>
        </footer>
    </div>

</body>
</html>
