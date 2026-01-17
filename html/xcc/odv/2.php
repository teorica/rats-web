<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ortodoncia Premium | Odontólogos del Valle</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- 1. ADN EXCLUSIVO "VALLE" --- */
        :root {
            /* Colores Premium */
            --c-midnight: #021325;  /* Azul Nocturno Profundo (Texto y Títulos) */
            --c-cyan: #00C2CB;      /* Cian Eléctrico (Acentos y CTAs) */
            --c-white: #FFFFFF;     /* Blanco Puro (Fondo) */
            --c-snow: #F9FBFC;      /* Blanco Nieve (Fondos secundarios sutiles) */
            
            /* Estilos de Lujo */
            --radius: 12px;         /* Bordes suavizados, modernos */
            --shadow-premium: 0 20px 40px rgba(2, 19, 37, 0.06); /* Sombra difusa y suave */
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); /* Movimiento sofisticado */
        }

        /* --- BASE & TYPOGRAPHY --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Manrope', sans-serif;
            background-color: var(--c-white);
            color: var(--c-midnight);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3 { font-weight: 800; letter-spacing: -0.02em; }
        a { text-decoration: none; }
        .container { max-width: 1140px; margin: 0 auto; padding: 0 25px; }

        /* --- HERO SECTION (Minimalista) --- */
        .hero {
            padding: 100px 0 60px;
            text-align: left; /* Alineación izquierda es más elegante */
        }

        .hero-category {
            font-weight: 600;
            color: var(--c-cyan);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.8rem;
[O            margin-bottom: 15px;
            display: block;
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            max-width: 800px;
            margin-bottom: 25px;
        }
        
        /* Acento de color en el título */
        .highlight { color: var(--c-cyan); position: relative; }
        
        .hero p {
            font-size: 1.25rem;
            color: #4A5568; /* Gris azulado suave para el texto secundario */
            max-width: 650px;
            font-weight: 300;
        }

        /* --- TREATMENTS (Diseño Editorial) --- */
        .treatments { padding: 40px 0 100px; }
        
        .treatments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        /* La Nueva Card Premium */
        .t-card {
            background: var(--c-white);
            border-radius: var(--radius);
            overflow: hidden;
            transition: var(--transition);
            /* Sin bordes, usamos la sombra para definir */
            box-shadow: 0 2px 10px rgba(2, 19, 37, 0.03);
            position: relative;
            top: 0;
        }

        .t-card:hover {
            box-shadow: var(--shadow-premium);
            top: -10px; /* Elevación suave */
        }

        .t-img-wrap {
            height: 320px; /* Imagen alta y dominante */
            position: relative;
            overflow: hidden;
        }

        .t-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .t-card:hover .t-img-wrap img { transform: scale(1.03); } /* Zoom sutil */

        /* Badge de Precio (Elegante, no de oferta) */
        .t-price {
            position: absolute;
            top: 25px; left: 25px;
            background: rgba(2, 19, 37, 0.9); /* Fondo oscuro translúcido */
            color: var(--c-white);
            padding: 10px 18px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.95rem;
            backdrop-filter: blur(10px);
        }
        .t-price span { font-weight: 400; font-size: 0.8em; opacity: 0.8; margin-right: 5px; }

        .t-body { padding: 35px; }

        .t-title { font-size: 1.75rem; margin-bottom: 20px; }

        .t-specs {
            list-style: none;
            margin-bottom: 35px;
            font-size: 1rem;
            color: #4A5568;
        }
        
        .t-specs li {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .t-specs li i { color: var(--c-cyan); font-size: 0.9rem; }

        /* Botón Premium */
        .btn-cyan {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            width: 100%;
            padding: 16px;
            background: var(--c-cyan);
            color: var(--c-white);
            font-weight: 700;
            border-radius: 50px; /* Forma de píldora moderna */
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            transition: var(--transition);
            border: none;
            box-shadow: 0 10px 20px -5px rgba(0, 194, 203, 0.3);
        }

        .btn-cyan:hover {
            background: #009DA5; /* Un tono más oscuro al hover */
            box-shadow: 0 15px 25px -5px rgba(0, 194, 203, 0.5);
        }

        /* --- RESULTS GALLERY (Oscura para contraste) --- */
        .results {
            background-color: var(--c-midnight);
            color: var(--c-white);
            padding: 100px 0;
            overflow: hidden;
        }

        .results-header { margin-bottom: 50px; }
        .results-header h2 { font-size: 2.5rem; color: var(--c-white); }

        /* Slider Premium */
        .gallery-track {
            display: flex;
            gap: 25px;
            overflow-x: auto;
            padding-bottom: 30px;
            scroll-snap-type: x mandatory;
            /* Ocultar scrollbar nativa visualmente */
            scrollbar-width: none; 
        }
        .gallery-track::-webkit-scrollbar { display: none; }

        .gallery-item {
            min-width: 320px;
            scroll-snap-align: start;
            position: relative;
            border-radius: var(--radius);
            overflow: hidden;
        }
        
        .gallery-item img { width: 100%; display: block; transition: var(--transition); }
        .gallery-item:hover img { opacity: 0.8; }

        .gallery-caption {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            padding: 25px;
            background: linear-gradient(to top, rgba(2,19,37,1) 0%, rgba(2,19,37,0) 100%);
        }
        .gallery-caption h4 { font-size: 1.1rem; margin-bottom: 5px; }
        .gallery-tag { color: var(--c-cyan); font-weight: 600; font-size: 0.8rem; text-transform: uppercase; }

        /* --- CLINIC EXPERIENCE (Imagen Inmersiva) --- */
        .experience { padding: 100px 0; background: var(--c-snow); }
        
        .experience-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .exp-content h2 { font-size: 2.5rem; margin-bottom: 25px; }
        .exp-content p { font-size: 1.1rem; color: #4A5568; margin-bottom: 35px; }
        
        .exp-image {
            height: 500px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow-premium);
        }
        .exp-image img { width: 100%; height: 100%; object-fit: cover; }

        /* --- FOOTER MINIMALISTA --- */
        footer {
            background: var(--c-white);
            padding: 50px 0;
            text-align: center;
            border-top: 1px solid rgba(0,0,0,0.05);
        }
        .footer-logo { font-weight: 800; color: var(--c-midnight); font-size: 1.2rem; }
        .footer-logo span { color: var(--c-cyan); }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .experience-grid { grid-template-columns: 1fr; }
            .exp-image { height: 300px; order: -1; } /* Imagen arriba en móvil */
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="container">
            <span class="hero-category">Especialidades</span>
            <h1>Diseño de Sonrisa y <span class="highlight">Ortodoncia Digital.</span></h1>
            <p>La fusión perfecta entre ciencia, tecnología de vanguardia y estética facial. Redefinimos tu sonrisa en el Valle.</p>
        </div>
    </section>

    <section class="treatments">
        <div class="container">
            <div class="treatments-grid">

                <div class="t-card">
                    <div class="t-img-wrap">
                        <img src="https://placehold.co/500x400/021325/FFFFFF?text=Estetica+Zafiro+Premium" alt="Ortodoncia Zafiro">
                        <div class="t-price"><span>Inversión desde</span>$45 /mes</div>
                    </div>
                    <div class="t-body">
                        <h3 class="t-title">Ortodoncia Cristal</h3>
                        <ul class="t-specs">
                            <li><i class="fa-solid fa-circle-check"></i> Brackets de Zafiro monocristalino.</li>
                            <li><i class="fa-solid fa-circle-check"></i> Prácticamente invisibles.</li>
                            <li><i class="fa-solid fa-circle-check"></i> No se manchan con el tiempo.</li>
                        </ul>
                        <a href="https://wa.me/593992924505?text=Quiero%20info%20Ortodoncia%20Cristal" class="btn-cyan">
                            Agendar Evaluación <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="t-card">
                    <div class="t-img-wrap">
                        <img src="https://placehold.co/500x400/021325/FFFFFF?text=Tecnologia+Damon" alt="Sistema Autoligado">
                        <div class="t-price"><span>Inversión desde</span>$60 /mes</div>
                    </div>
                    <div class="t-body">
                        <h3 class="t-title">Sistema Autoligado Pasivo</h3>
                        <ul class="t-specs">
                            <li><i class="fa-solid fa-circle-check"></i> Tecnología de baja fricción.</li>
                            <li><i class="fa-solid fa-circle-check"></i> Menos visitas, mayor confort.</li>
                            <li><i class="fa-solid fa-circle-check"></i> Ideal para casos complejos.</li>
                        </ul>
                        <a href="https://wa.me/593992924505?text=Quiero%20info%20Autoligado" class="btn-cyan">
                            Agendar Evaluación <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="t-card">
                    <div class="t-img-wrap">
                        <img src="https://placehold.co/500x400/00C2CB/FFFFFF?text=Experience+Invisalign" alt="Invisalign">
                        <div class="t-price" style="background: var(--c-cyan);">Plan Full Experience</div>
                    </div>
                    <div class="t-body">
                        <h3 class="t-title">Alineadores Invisibles</h3>
                        <ul class="t-specs">
                            <li><i class="fa-solid fa-circle-check"></i> Sin metales. 100% removible.</li>
                            <li><i class="fa-solid fa-circle-check"></i> Escaneo intraoral 3D iTero.</li>
                            <li><i class="fa-solid fa-circle-check"></i> Visualiza tu resultado antes de empezar.</li>
                        </ul>
                        <a href="https://wa.me/593992924505?text=Quiero%20cotizar%20Invisalign" class="btn-cyan">
                            Solicitar Escaneo 3D <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="results">
        <div class="container">
            <div class="results-header">
                <h2>La Evidencia Clínica.</h2>
                <p style="opacity: 0.7;">Desliza para explorar casos reales de nuestros pacientes.</p>
            </div>
            <div class="gallery-track">
                <div class="gallery-item">
                    <img src="https://placehold.co/400x300/111/fff?text=Caso+Premium+1" alt="Caso 1">
                    <div class="gallery-caption">
                        <h4>Corrección Compleja</h4>
                        <span class="gallery-tag">14 Meses | Autoligado</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://placehold.co/400x300/111/fff?text=Caso+Premium+2" alt="Caso 2">
                    <div class="gallery-caption">
                        <h4>Diseño de Sonrisa</h4>
                        <span class="gallery-tag">8 Meses | Invisalign</span>
                    </div>
                </div>
                 <div class="gallery-item">
                    <img src="https://placehold.co/400x300/111/fff?text=Caso+Premium+3" alt="Caso 3">
                    <div class="gallery-caption">
                        <h4>Cierre de Espacios</h4>
                        <span class="gallery-tag">12 Meses | Zafiro</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experience">
        <div class="container experience-grid">
            <div class="exp-content">
                <h2>El Estándar del Valle.</h2>
                <p>Hemos diseñado un espacio donde la ansiedad dental desaparece. Tecnología de diagnóstico de última generación en un entorno arquitectónico pensado para tu calma y privacidad.</p>
                <a href="#" style="color: var(--c-cyan); font-weight: 700; border-bottom: 2px solid var(--c-cyan);">Conoce la Clínica</a>
            </div>
            <div class="exp-image">
                <img src="https://placehold.co/600x500/F9FBFC/021325?text=Arquitectura+y+Tecnologia+Cumbaya" alt="Clínica Cumbayá">
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-logo">ODONTÓLOGOS <span>DEL VALLE</span></div>
            <p style="color: #666; font-size: 0.9rem; margin-top: 10px;">Cumbayá, Ecuador. Excelencia en cada detalle.</p>
        </div>
    </footer>

</body>
</html>
