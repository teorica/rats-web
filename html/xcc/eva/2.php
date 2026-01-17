<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVA Dental Services | Tumbaco</title>
    <meta name="description" content="Odontología profesional en Tumbaco. Clínica Dental Eva.">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            /* --- LA PALETA INTENSA --- */
            /* Fanta/Tomate Intenso: Energía pura, usado para llamar la atención */
            --color-accent: #FF4500; 
            
            /* Verde Quirúrgico Profundo: Autoridad y Salud */
            --color-primary: #004D40; 
            
            /* Blanco Hueso: La base limpia */
            --color-bg: #F5F5F0;
            --color-white: #FFFFFF;
            
            /* Texto */
            --text-main: #1A1A1A;
            --text-light: #F5F5F0;

            /* Espaciado y Bordes */
            --radius: 8px; /* Bordes ligeramente curvos, no redondos, más serios */
        }

        /* --- ESTRUCTURA BASE --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-bg);
            color: var(--text-main);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        a { text-decoration: none; transition: 0.3s ease; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        /* --- UTILIDADES --- */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            border-radius: var(--radius);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-white);
            box-shadow: 0 4px 0 #cc3700; /* Sombra sólida para efecto 3D sutil */
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 0 #cc3700;
        }

        .btn-outline {
            border: 2px solid var(--color-primary);
            color: var(--color-primary);
            background: transparent;
        }

        .btn-outline:hover {
            background: var(--color-primary);
            color: var(--color-white);
        }

        /* --- HEADER --- */
        header {
            background-color: var(--color-white);
            border-bottom: 3px solid var(--color-accent); /* Línea de acento inferior */
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 900;
            color: var(--color-primary);
            letter-spacing: -1px;
            text-transform: uppercase;
        }
        
        .logo span { color: var(--color-accent); }

        .nav-menu { display: flex; gap: 30px; align-items: center; }
        .nav-menu a {
            color: var(--text-main);
            font-weight: 500;
            font-size: 0.95rem;
        }
        .nav-menu a:hover { color: var(--color-accent); }

        /* --- HERO SECTION --- */
        .hero {
            padding: 100px 0;
            background-color: var(--color-bg);
            position: relative;
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 0.8fr;
            gap: 60px;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            color: var(--color-primary);
            margin-bottom: 20px;
            font-weight: 900;
        }

        .hero-content p {
            font-size: 1.125rem;
            color: #555;
            margin-bottom: 35px;
            max-width: 90%;
        }

        /* Caja de imagen con borde de diseño */
        .hero-img-box {
            position: relative;
        }
        
        .hero-img-box img {
            border-radius: var(--radius);
            position: relative;
            z-index: 2;
            border: 2px solid var(--color-white);
        }

        /* Elemento decorativo sólido */
        .hero-img-box::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: var(--color-accent);
            top: 20px;
            left: 20px;
            border-radius: var(--radius);
            z-index: 1;
        }

        /* --- BARRA DE DATOS (Clean Info) --- */
        .info-bar {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 40px 0;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            text-align: center;
        }

        .info-item h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: #A7F3D0; /* Verde muy claro para contraste */
        }
        
        .info-item p { font-size: 0.95rem; opacity: 0.9; }

        /* --- SERVICIOS (Cards Limpias) --- */
        .services { padding: 100px 0; }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--color-primary);
            font-weight: 800;
            display: inline-block;
            border-bottom: 4px solid var(--color-accent);
            padding-bottom: 10px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--color-white);
            padding: 40px;
            border-radius: var(--radius);
            border: 1px solid #E0E0E0;
            transition: 0.3s;
        }

        .service-card:hover {
            border-color: var(--color-accent);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background-color: var(--color-bg);
            color: var(--color-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            border-radius: var(--radius);
            margin-bottom: 20px;
        }

        .service-card h3 {
            margin-bottom: 15px;
            color: var(--text-main);
            font-weight: 700;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #111; /* Casi negro para contraste máximo con el blanco */
            color: #888;
            padding: 60px 0 30px;
            font-size: 0.9rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            color: var(--color-white);
            font-weight: 900;
            font-size: 1.5rem;
            margin-bottom: 20px;
            display: block;
        }

        .footer-contact strong { color: var(--color-white); display: block; margin-top: 15px;}

        /* --- WHATSAPP FIX --- */
        .wa-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--color-accent); /* Usamos el tomate para que resalte más que el verde típico */
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            box-shadow: 0 10px 20px rgba(255, 69, 0, 0.4);
            z-index: 999;
        }
        .wa-btn:hover { transform: scale(1.1); }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .hero-grid { grid-template-columns: 1fr; text-align: center; }
            .hero-content h1 { font-size: 2.5rem; }
            .nav-menu { display: none; } /* En prod usaríamos un menú hamburguesa */
            .info-grid { grid-template-columns: 1fr; }
            .hero-img-box { max-width: 400px; margin: 0 auto; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container header-wrap">
            <a href="#" class="logo">EVA<span>DENTAL</span></a>
            <nav class="nav-menu">
                <a href="#">Tratamientos</a>
                <a href="#">Ubicación</a>
                <a href="https://wa.me/593995328721" class="btn btn-primary" style="padding: 10px 20px;">
                    099 532 8721
                </a>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <h1>Odontología de Precisión en Tumbaco.</h1>
                <p>Sin dolor. Sin estrés. Tecnología moderna y un trato humano en Juan Montalvo. Tu sonrisa en manos expertas.</p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center; md:justify-content: start;">
                    <a href="https://wa.me/593995328721" class="btn btn-primary">AGENDAR CITA</a>
                    <a href="#servicios" class="btn btn-outline">VER SERVICIOS</a>
                </div>
            </div>
            <div class="hero-img-box">
                <img src="https://placehold.co/600x500/F5F5F0/004D40?text=Foto+Profesional+Dra+Eva" alt="Clínica Eva Dental">
            </div>
        </div>
    </section>

    <section class="info-bar">
        <div class="container info-grid">
            <div class="info-item">
                <i class="fa-solid fa-location-dot" style="font-size: 24px; margin-bottom: 10px; color: var(--color-accent);"></i>
                <h3>Ubicación Estratégica</h3>
                <p>Juan Montalvo, Tumbaco</p>
            </div>
            <div class="info-item">
                <i class="fa-solid fa-clock" style="font-size: 24px; margin-bottom: 10px; color: var(--color-accent);"></i>
                <h3>Horario Extendido</h3>
                <p>Lunes a Sábado hasta las 19:00</p>
            </div>
            <div class="info-item">
                <i class="fa-solid fa-shield-heart" style="font-size: 24px; margin-bottom: 10px; color: var(--color-accent);"></i>
                <h3>Seguridad</h3>
                <p>Parqueadero y Protocolos de Higiene</p>
            </div>
        </div>
    </section>

    <section id="servicios" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Nuestros Servicios</h2>
                <p style="margin-top: 10px; color: #666;">Soluciones completas bajo un mismo techo.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="icon-box"><i class="fa-solid fa-tooth"></i></div>
                    <h3>Implantes & Estética</h3>
                    <p style="color: #666; font-size: 0.9rem;">Recupera la funcionalidad completa. Carillas y coronas de alta durabilidad.</p>
                </div>
                <div class="service-card">
                    <div class="icon-box"><i class="fa-solid fa-child"></i></div>
                    <h3>Odontopediatría</h3>
                    <p style="color: #666; font-size: 0.9rem;">Atención especializada para niños. Cuidado preventivo y ortodoncia temprana.</p>
                </div>
                <div class="service-card">
                    <div class="icon-box"><i class="fa-solid fa-notes-medical"></i></div>
                    <h3>Urgencias y Dolor</h3>
                    <p style="color: #666; font-size: 0.9rem;">Atención inmediata para dolor agudo. Endodoncias y extracciones seguras.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <span class="footer-logo">EVA<span style="color:var(--color-accent)">DENTAL</span></span>
                    <p>Comprometidos con la salud oral de Tumbaco. <br>Excelencia técnica y calidez humana.</p>
                </div>
                <div class="footer-contact">
                    <p><strong>Citas y Consultas:</strong></p>
                    <p style="font-size: 1.2rem; color: var(--color-white);">099 532 8721</p>
                    <p style="margin-top: 20px;"><strong>Dirección:</strong></p>
                    <p>Juan Montalvo, Tumbaco, Ecuador.</p>
                </div>
            </div>
            <div style="border-top: 1px solid #333; padding-top: 20px; text-align: center; color: #555;">
                &copy; 2024 Eva Dental Services. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <a href="https://wa.me/593995328721" class="wa-btn" target="_blank" title="Contactar por WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

</body>
</html>
