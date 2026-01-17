<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L_VALVE // SYSTEM_COMPONENTS</title>
    <style>
        /* --- 1. VARIABLES (PALETA "INDUSTRIAL NIGHT") --- */
        :root {
            --carbon:   #1a1a1a; /* Fondo Principal */
            --steel:    #444444; /* Estructura/Bordes */
            --titanium: #e1e1e1; /* Texto Principal */
            --safety:   #ea2e00; /* Acento Acción (Naranja) */
            --sage:     #9dbdb8; /* Acento Info (Verde) */
            --void:     #111111; /* Fondos secundarios */
            
            --font-main: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            --font-mono: 'Courier New', Courier, monospace;
        }

        /* --- 2. RESET BASICO --- */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            background-color: var(--carbon);
            color: var(--titanium);
            font-family: var(--font-main);
            padding: 40px;
            border-top: 6px solid var(--safety);
        }

        /* --- 3. TYPOGRAPHY --- */
        h1, h2, h3 { font-weight: 700; text-transform: uppercase; letter-spacing: -1px; margin-bottom: 1rem; }
        h1 { font-size: 2.5rem; line-height: 1.1; }
        h2 { font-size: 1.8rem; color: var(--titanium); border-bottom: 2px solid var(--safety); display: inline-block; padding-bottom: 5px; margin-top: 2rem;}
        h3 { font-size: 1.2rem; color: var(--sage); font-family: var(--font-mono); }
        p { margin-bottom: 1rem; line-height: 1.6; color: #bbb; max-width: 65ch; }
        .mono { font-family: var(--font-mono); font-size: 0.9rem; }

        /* --- 4. ICONOS (SVG CLASES) --- */
        .icon {
            width: 24px;
            height: 24px;
            stroke: var(--sage); /* Color por defecto */
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
            vertical-align: middle;
            margin-right: 8px;
        }
        .icon-lg { width: 48px; height: 48px; stroke-width: 1.5; }
        .icon-warn { stroke: var(--safety); }

        /* --- 5. BOTONES --- */
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            font-family: var(--font-mono);
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            cursor: pointer;
            border: 2px solid transparent;
            transition: 0.2s;
        }

        .btn-primary {
            background-color: var(--safety);
            color: #fff;
            border-color: var(--safety);
        }
        .btn-primary:hover { background-color: transparent; color: var(--safety); }

        .btn-outline {
            background-color: transparent;
            color: var(--sage);
            border-color: var(--sage);
        }
        .btn-outline:hover { background-color: rgba(157, 189, 184, 0.1); color: #fff; }

        /* --- 6. FORMULARIOS (INPUTS) --- */
        .form-group { margin-bottom: 1.5rem; max-width: 400px; }
        label { display: block; font-family: var(--font-mono); font-size: 0.8rem; color: var(--sage); margin-bottom: 0.5rem; }
        
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            background-color: var(--void);
            border: 1px solid var(--steel);
            color: #fff;
            font-family: var(--font-mono);
        }
        
        input:focus { outline: none; border-color: var(--safety); }

        /* --- 7. CARDS (TARJETAS MODULARES) --- */
        .card {
            border: 1px solid var(--steel);
            background-color: rgba(255,255,255,0.02);
            padding: 2rem;
            max-width: 400px;
            position: relative;
        }
        .card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 4px; height: 100%;
            background-color: var(--steel); /* Borde lateral grueso */
        }
        .card:hover { border-color: var(--sage); }
        .card:hover::before { background-color: var(--sage); }

        /* --- 8. ALERTS / STATUS --- */
        .alert {
            padding: 15px;
            border-left: 4px solid;
            background-color: var(--void);
            font-family: var(--font-mono);
            font-size: 0.9rem;
            margin-bottom: 1rem;
            max-width: 600px;
        }
        .alert-ok { border-color: var(--sage); color: var(--sage); }
        .alert-warn { border-color: var(--safety); color: var(--safety); }

        /* --- 9. FOOTER --- */
        .site-footer {
            margin-top: 4rem;
            border-top: 2px solid var(--steel);
            background-color: var(--void);
            padding: 3rem 0;
            font-family: var(--font-mono);
            font-size: 0.85rem;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-col h4 { color: #fff; margin-bottom: 1.2rem; text-transform: uppercase; letter-spacing: 1px; }
        .footer-col ul { list-style: none; }
        .footer-col li { margin-bottom: 0.8rem; }
        .footer-col a { color: #777; text-decoration: none; transition: 0.2s; }
        .footer-col a:hover { color: var(--safety); }

        .system-status { display: flex; align-items: center; color: var(--sage); margin-top: 1rem;}
        .dot { height: 8px; width: 8px; background-color: var(--sage); border-radius: 50%; margin-right: 8px; box-shadow: 0 0 5px var(--sage);}
    </style>
</head>
<body>

    <h1 style="color: var(--safety);">L_VALVE // COMPONENT KIT</h1>
    <p class="mono">Reference sheet for Industrial Night Shift UI elements.</p>
    <br><hr style="border-color: var(--steel);"><br>

    <h2>01. TYPOGRAPHY</h2>
    <div style="margin-top: 1rem;">
        <h1>Heading Level 1</h1>
        <h3>Heading Level 3 (Mono)</h3>
        <p>Este es el cuerpo de texto estándar. Se utiliza un color gris titanio para evitar la fatiga visual sobre fondo oscuro. La legibilidad es la prioridad número uno en entornos de ingeniería.</p>
        <p class="mono">> System output text style for logs and technical data.</p>
    </div>

    <h2>02. ICONS (SVG)</h2>
    <p>Iconografía técnica, sin relleno, trazo limpio.</p>
    <div style="margin-top: 1rem; display: flex; gap: 20px;">
        <svg class="icon icon-lg" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
        
        <svg class="icon icon-lg" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        
        <svg class="icon icon-lg" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
        
        <svg class="icon icon-lg icon-warn" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
    </div>

    <h2>03. BUTTONS</h2>
    <div style="margin-top: 1rem;">
        <a href="#" class="btn btn-primary">DEPLOY SERVER</a>
        <a href="#" class="btn btn-outline" style="margin-left: 20px;">VIEW LOGS</a>
    </div>

    <h2>04. INPUTS</h2>
    <div style="margin-top: 1rem;">
        <div class="form-group">
            <label for="email">CLIENT_ID / EMAIL</label>
            <input type="email" id="email" placeholder="user@company.com">
        </div>
        <div class="form-group">
            <label for="pass">ACCESS_KEY</label>
            <input type="password" id="pass" value="********">
        </div>
    </div>

    <h2>05. SYSTEM ALERTS</h2>
    <div style="margin-top: 1rem;">
        <div class="alert alert-ok">
            <svg class="icon" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            SYSTEM NORMAL: All services operational.
        </div>
        <div class="alert alert-warn">
            <svg class="icon icon-warn" style="stroke: var(--safety);" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            WARNING: High latency detected in Node Frankfurt_02.
        </div>
    </div>

    <h2>06. MODULE CARD</h2>
    <div style="margin-top: 1rem; display: flex; gap: 20px;">
        <div class="card">
            <h3 style="margin-bottom: 10px;">MANAGED HOSTING</h3>
            <p style="font-size: 0.9rem;">Servicio completo de administración. Nosotros parcheamos el kernel, tú vendes el producto.</p>
            <a href="#" style="color: var(--safety); font-weight: bold; font-size: 0.8rem;">CONFIGURE ></a>
        </div>
        
        <div class="card">
            <h3 style="margin-bottom: 10px;">SECURITY AUDIT</h3>
            <p style="font-size: 0.9rem;">Revisión de vulnerabilidades SQL y Hardening de Nginx.</p>
            <a href="#" style="color: var(--safety); font-weight: bold; font-size: 0.8rem;">INITIATE ></a>
        </div>
    </div>

    <h2>07. FOOTER COMPONENT</h2>
    
    <footer class="site-footer">
        <div class="footer-grid">
            <div class="footer-col">
                <h4>L_VALVE // SYS</h4>
                <p style="font-size: 0.8rem; color: #777;">
                    Infraestructura de misión crítica para negocios que no pueden detenerse.
                </p>
                <div class="system-status">
                    <span class="dot"></span> SYSTEMS ONLINE
                </div>
            </div>

            <div class="footer-col">
                <h4>SERVICIOS</h4>
                <ul>
                    <li><a href="#">Managed Hosting</a></li>
                    <li><a href="#">VPS Deployment</a></li>
                    <li><a href="#">Database Clusters</a></li>
                    <li><a href="#">Penetration Testing</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>SOPORTE</h4>
                <ul>
                    <li><a href="#">Abrir Ticket</a></li>
                    <li><a href="#">Base de Conocimiento</a></li>
                    <li><a href="#">SLA & Términos</a></li>
                    <li><a href="#">Estado de la Red</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>DATA CENTER</h4>
                <ul class="mono" style="color: #555;">
                    <li>LOC: UIO / FRA</li>
                    <li>UPTIME: 99.98%</li>
                    <li>LOAD: 0.45</li>
                </ul>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem; color: #333; font-size: 0.7rem;">
            &copy; 2026 LENINVALVE SYSTEMS. HECHO A MANO EN ECUADOR.
        </div>
    </footer>

</body>
</html>
