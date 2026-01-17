<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ortodoncia Especializada | Odontólogos del Valle</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- 1. ADN CORPORATIVO "VALLE PREMIUM" --- */
        :root {
            /* Colores */
            --color-primary: #102A43;   /* Azul Marino Profundo (Autoridad) */
            --color-accent: #00A8E8;    /* Cian Tecnológico (Acción) */
            --color-bg: #F0F4F8;        /* Gris Platino (Fondo Premium) */
            --color-white: #FFFFFF;
            --color-text: #334E68;      /* Gris Azulado (Lectura descansada) */
            
            /* Estilos */
            --border-radius: 4px;       /* Bordes más cuadrados = Más seriedad */
            --shadow-soft: 0 4px 6px rgba(16, 42, 67, 0.05);
            --shadow-hover: 0 20px 25px -5px rgba(16, 42, 67, 0.1), 0 10px 10px -5px rgba(16, 42, 67, 0.04);
            --transition: all 0.3s ease;
        }

        /* --- RESET & BASE --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--color-bg);
            color: var(--color-text);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        a { text-decoration: none; color: inherit; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        /* --- 2. HEADER: INTRODUCCIÓN SOBRIA --- */
        .header-specialty {
            background: var(--color-white);
            padding: 80px 0;
            text-align: center;
            border-bottom: 1px solid #D9E2EC;
        }

        .breadcrumb {
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 2px;
            color: var(--color-accent);
            font-weight: 700;
            margin-bottom: 15px;
            display: block;
        }

        .header-title {
            font-size: 3rem;
            color: var(--color-primary);
            font-weight: 300; /* Letra fina para elegancia */
            margin-bottom: 20px;
        }
        
        .header-title strong { font-weight: 900; } /* Contraste de peso */

        .header-desc {
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: #486581;
        }

        /* --- 3. PRODUCT CARDS (ESTILO E-COMMERCE MÉDICO) --- */
        .treatments-section { padding: 80px 0; }
        
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 30px;
        }

        .treatment-card {
            background: var(--color-white);
[O            border: 1px solid #D9E2EC;
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .treatment-card:hover {
            border-color: var(--color-accent);
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        /* Imagen Dominante */
        .card-image-box {
            height: 280px; /* Imagen grande */
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .card-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .treatment-card:hover .card-image-box img { transform: scale(1.05); }

        /* Etiqueta de Precio (Estilo Etiqueta Técnica) */
        .price-badge {
            position: absolute;
            top: 20px;
            right: 0;
            background: var(--color-primary);
            color: var(--color-white);
            padding: 8px 15px;
            font-weight: 700;
            font-size: 1rem;
            box-shadow: -4px 4px 10px rgba(0,0,0,0.2);
        }
        .price-badge small { font-weight: 300; font-size: 0.7em; margin-right: 5px; opacity: 0.8; }

        /* Cuerpo de la Card */
        .card-body { padding: 30px; flex-grow: 1; display: flex; flex-direction: column; }

        .card-title {
            font-size: 1.5rem;
            color: var(--color-primary);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .feature-list { list-style: none; margin-bottom: 30px; flex-grow: 1; }
        
        .feature-list li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 12px;
            font-size: 0.95rem;
            color: #486581;
        }
        
        .feature-list li::before {
            content: '';
            position: absolute;
            left: 0; top: 8px;
            width: 6px; height: 6px;
            background-color: var(--color-accent);
            border-radius: 50%;
        }

        /* Botón WP (Estilo Outline para no saturar) */
        .btn-whatsapp {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            width: 100%;
            padding: 12px;
            border: 2px solid #25D366;
            color: #25D366;
            font-weight: 700;
            border-radius: var(--border-radius);
            text-transform: uppercase;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .btn-whatsapp:hover { background-color: #25D366; color: white; }

        /* --- 4. SLIDER ANTES/DESPUÉS (Gallery Strip) --- */
        .results-section {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 60px 0;
            overflow: hidden;
        }
        
        .section-header-white {
            text-align: center;
            margin-bottom: 40px;
        }
        .section-header-white h2 { font-size: 2rem; font-weight: 300; }
        .section-header-white b { font-weight: 900; color: var(--color-accent); }

        .slider-container {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding: 0 20px 30px 20px; /* Padding bottom para scrollbar */
            scroll-snap-type: x mandatory;
        }
        
        /* Estilizando Scrollbar */
        .slider-container::-webkit-scrollbar { height: 6px; }
        .slider-container::-webkit-scrollbar-track { background: rgba(255,255,255,0.1); }
        .slider-container::-webkit-scrollbar-thumb { background: var(--color-accent); border-radius: 10px; }

        .case-study {
            flex: 0 0 300px;
            scroll-snap-align: center;
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .case-study img { width: 100%; height: 200px; object-fit: cover; }
        
        .case-info {
            padding: 15px;
            color: var(--color-primary);
            text-align: center;
        }
        .case-tag {
            display: inline-block;
            background: #F0F4F8;
            padding: 4px 8px;
            font-size: 0.7rem;
            color: #627D98;
            margin-bottom: 5px;
            border-radius: 4px;
        }

        /* --- 5. CONSULTORIO (Grid Limpio) --- */
        .office-section { padding: 80px 0; background: var(--color-white); }
        
        .office-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr; /* Asimetría moderna */
            gap: 20px;
            height: 400px;
        }

        .office-item {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: var(--border-radius);
            filter: saturate(0.8); /* Desaturar un poco para elegancia */
            transition: var(--transition);
        }
        
        .office-item:hover { filter: saturate(1.2); }

        /* --- 6. FOOTER --- */
        footer {
            background-color: #0A1C2E; /* Azul aún más oscuro */
            color: #829AB1;
            padding: 60px 0;
            font-size: 0.9rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        
        .footer-brand { color: white; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; display: block;}
        
        /* Mobile */
        @media (max-width: 768px) {
            .header-title { font-size: 2.2rem; }
            .office-grid { grid-template-columns: 1fr; height: auto; }
            .office-item { height: 250px; }
            .footer-content { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <section class="header-specialty">
        <div class="container">
            <span class="breadcrumb">Especialidades / Estética</span>
            <h1 class="header-title">Ortodoncia <strong>Avanzada</strong></h1>
            <p class="header-desc">
                Corrección dental con precisión digital. En Odontólogos del Valle combinamos la experiencia clínica con los sistemas de alineación más modernos del mercado.
            </p>
        </div>
    </section>

    <section class="treatments-section">
        <div class="container">
            <div class="cards-grid">

                <div class="treatment-card">
                    <div class="card-image-box">
                        <img src="https://placehold.co/600x400/102A43/FFFFFF?text=Brackets+Zafiro" alt="Brackets de Zafiro">
                        <div class="price-badge"><small>Desde</small>$45<small>/mes</small></div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Ortodoncia Estética</h3>
                        <ul class="feature-list">
                            <li>Brackets de Zafiro (Transparentes).</li>
                            <li>Alta resistencia y discreción.</li>
                            <li>Ideal para adolescentes y adultos.</li>
                        </ul>
                        <a href="https://wa.me/593992924505?text=Info%20Zafiro" class="btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Consultar Disponibilidad
                        </a>
                    </div>
                </div>

                <div class="treatment-card">
                    <div class="card-image-box">
                        <img src="https://placehold.co/600x400/102A43/FFFFFF?text=Sistema+Damon" alt="Sistema Damon">
                        <div class="price-badge"><small>Desde</small>$60<small>/mes</small></div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Sistema Autoligado</h3>
                        <ul class="feature-list">
                            <li>Tecnología de baja fricción (Menos dolor).</li>
                            <li>Tratamientos 40% más rápidos.</li>
                            <li>Menos visitas al consultorio.</li>
                        </ul>
                        <a href="https://wa.me/593992924505?text=Info%20Autoligado" class="btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Agendar Evaluación
                        </a>
                    </div>
                </div>

                <div class="treatment-card" style="border-color: var(--color-accent);"> <div class="card-image-box">
                        <img src="https://placehold.co/600x400/102A43/FFFFFF?text=Invisalign" alt="Invisalign">
                        <div class="price-badge" style="background: var(--color-accent);">Plan Completo</div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Alineadores Invisibles</h3>
                        <ul class="feature-list">
                            <li>Sin brackets, sin alambres.</li>
                            <li>Removibles para comer y cepillar.</li>
                            <li>Escaneo digital 3D incluido.</li>
                        </ul>
                        <a href="https://wa.me/593992924505?text=Info%20Invisible" class="btn-whatsapp" style="background:var(--color-accent); border-color:var(--color-accent); color:white;">
                            <i class="fa-brands fa-whatsapp"></i> Cotizar Invisalign
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="results-section">
        <div class="container">
            <div class="section-header-white">
                <h2>Transformaciones <b>Reales</b></h2>
                <p style="font-size:0.9rem; opacity:0.8; margin-top:10px;">Desliza para ver la galería clínica</p>
            </div>
            
            <div class="slider-container">
                <div class="case-study">
                    <img src="https://placehold.co/300x200/eee/333?text=Caso+Apiñamiento" alt="Caso 1">
                    <div class="case-info">
                        <span class="case-tag">14 Meses</span>
                        <h4>Corrección de Apiñamiento</h4>
                    </div>
                </div>
                <div class="case-study">
                    <img src="https://placehold.co/300x200/eee/333?text=Caso+Mordida+Abierta" alt="Caso 2">
                    <div class="case-info">
                        <span class="case-tag">18 Meses</span>
                        <h4>Cierre de Mordida Abierta</h4>
                    </div>
                </div>
                <div class="case-study">
                    <img src="https://placehold.co/300x200/eee/333?text=Caso+Invisalign" alt="Caso 3">
                    <div class="case-info">
                        <span class="case-tag">10 Meses</span>
                        <h4>Alineación Invisible</h4>
                    </div>
                </div>
                <div class="case-study">
                    <img src="https://placehold.co/300x200/eee/333?text=Caso+Infantil" alt="Caso 4">
                    <div class="case-info">
                        <span class="case-tag">12 Meses</span>
                        <h4>Ortopedia Infantil</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="office-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 40px;">
                <h2 style="font-size: 2rem; color: var(--color-primary); font-weight: 300;">Nuestras <strong>Instalaciones</strong></h2>
                <p style="color: #666;">Tecnología de punta en el corazón del Valle.</p>
            </div>
            <div class="office-grid">
                <img src="https://placehold.co/800x600/F0F4F8/102A43?text=Sillon+Dental+Moderno" class="office-item" alt="Consultorio Principal">
                <img src="https://placehold.co/600x600/F0F4F8/102A43?text=Equipo+Medico" class="office-item" alt="Equipo Odontológico">
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <span class="footer-brand">ODONTÓLOGOS DEL VALLE</span>
                    <p>Excelencia odontológica en Cumbayá.</p>
                    <p style="margin-top: 15px;"><i class="fa-solid fa-location-dot"></i> Av. Interoceánica y Calle A, Cumbayá.</p>
                </div>
                <div style="text-align: right; display: flex; flex-direction: column; justify-content: center;">
                    <p><a href="#" style="color:white; border-bottom: 1px solid var(--color-accent);">Volver al Inicio</a></p>
                    <p style="margin-top:10px;">&copy; 2024 Odontólogos del Valle.</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
