<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ortodoncia | EVA Dental Tumbaco</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES (ADN Fanta-Quirúrgico) --- */
        :root {
            --c-tomate: #FF4500;   /* Acción / Precio */
            --c-verde: #004D40;    /* Estructura / Textos */
            --c-hueso: #F5F5F0;    /* Fondo */
            --c-blanco: #FFFFFF;
            --c-gris: #333333;
            
            --radius: 6px; 
            --shadow: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-hover: 0 15px 25px rgba(0,0,0,0.15);
        }

        /* --- BASE --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background-color: var(--c-hueso); color: var(--c-gris); line-height: 1.5; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        a { text-decoration: none; }

        /* --- 1. ENCABEZADO DE ESPECIALIDAD (Intro Rápida) --- */
        .spec-header {
            background-color: var(--c-verde);
            color: var(--c-hueso);
            padding: 80px 0;
            text-align: center;
        }
        .spec-title {
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -1px;
            margin-bottom: 15px;
        }
        .spec-desc {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.9;
            font-weight: 400;
        }
        .spec-indicator {
            display: inline-block;
            background: var(--c-tomate);
            padding: 5px 15px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            border-radius: 50px;
            margin-bottom: 20px;
        }

        /* --- 2. GRID DE PRODUCTOS (El Núcleo de Venta) --- */
        .products-section { padding: 60px 0; }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }

        /* CARD DE PRODUCTO */
        .prod-card {
            background: var(--c-blanco);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            display: flex;
            flex-direction: column;
            border: 1px solid #e0e0e0;
        }

        .prod-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: var(--c-tomate);
        }

        /* Imagen Dominante */
        .prod-img-box {
            width: 100%;
            height: 250px; /* Altura fija para uniformidad */
            position: relative;
        }
        .prod-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Etiqueta de Precio Flotante */
        .price-tag {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: var(--c-tomate);
            color: white;
            padding: 10px 20px;
            font-weight: 800;
            font-size: 1.1rem;
            border-top-left-radius: var(--radius);
        }
        .price-sub { font-size: 0.7rem; font-weight: 400; display: block; text-transform: uppercase; }

        /* Contenido de la Card */
        .prod-content { padding: 30px; flex-grow: 1; display: flex; flex-direction: column; }
        
        .prod-title {
            color: var(--c-verde);
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .prod-bullets {
            list-style: none;
            margin-bottom: 25px;
            flex-grow: 1; /* Empuja el botón al fondo */
        }
        .prod-bullets li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
            font-size: 0.95rem;
            color: #555;
        }
        .prod-bullets li::before {
            content: '\f00c'; /* Check icon FontAwesome */
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--c-tomate);
        }

        /* Botón Específico */
        .btn-card {
            display: block;
            width: 100%;
            padding: 12px;
            text-align: center;
            background-color: #25D366; /* Verde WhatsApp */
            color: white;
            font-weight: 700;
            border-radius: var(--radius);
            text-transform: uppercase;
            font-size: 0.9rem;
            transition: 0.2s;
        }
        .btn-card:hover { background-color: #128C7E; }

        /* --- 3. SLIDER ANTES Y DESPUÉS (Scroll Snap - Mecánico) --- */
        .cases-section {
            background-color: var(--c-verde);
            color: var(--c-hueso);
            padding: 80px 0;
            overflow: hidden;
        }
        .section-title { text-align: center; margin-bottom: 40px; font-weight: 900; font-size: 2rem; }
        
        .snap-slider {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 20px; /* Espacio para scrollbar */
            -webkit-overflow-scrolling: touch;
        }
        /* Ocultar scrollbar pero permitir scroll */
        .snap-slider::-webkit-scrollbar { height: 8px; }
        .snap-slider::-webkit-scrollbar-track { background: rgba(255,255,255,0.1); }
        .snap-slider::-webkit-scrollbar-thumb { background: var(--c-tomate); border-radius: 4px; }

        .case-card {
            flex: 0 0 350px; /* Ancho fijo de cada caso */
            scroll-snap-align: center;
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            position: relative;
        }
        
        .case-img { width: 100%; height: 250px; object-fit: cover; }
        .case-label {
            position: absolute;
            top: 10px; left: 10px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 4px 8px;
            font-size: 0.7rem;
            border-radius: 4px;
        }
        .case-desc {
            padding: 15px;
            color: var(--c-gris);
            font-size: 0.9rem;
            text-align: center;
            font-weight: 600;
        }

        /* --- 4. INSTALACIONES (Galería Simple) --- */
        .office-section { padding: 80px 0; background: var(--c-blanco); }
        .office-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        .office-grid img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: var(--radius);
            filter: grayscale(20%); /* Toque serio */
            transition: 0.3s;
        }
        .office-grid img:hover { filter: grayscale(0%); }

        /* --- FOOTER (Minimal) --- */
        footer { background: #111; color: #666; padding: 40px 0; text-align: center; font-size: 0.9rem; }
        
        /* Mobile fixes */
        @media (max-width: 768px) {
            .spec-title { font-size: 2rem; }
            .office-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header class="spec-header">
        <div class="container">
            <span class="spec-indicator">Especialidad</span>
            <h1 class="spec-title">Ortodoncia</h1>
            <p class="spec-desc">Corrige la posición de tus dientes y mejora tu mordida. Desde soluciones metálicas tradicionales hasta tecnología invisible.</p>
        </div>
    </header>

    <section class="products-section">
        <div class="container">
            <div class="products-grid">
                
                <div class="prod-card">
                    <div class="prod-img-box">
                        <img src="https://placehold.co/400x300/e0e0e0/333?text=Brackets+Metalicos" alt="Brackets Metálicos">
                        <div class="price-tag">
                            <span class="price-sub">Cuotas desde</span>
                            $35 /mes
                        </div>
                    </div>
                    <div class="prod-content">
                        <h3 class="prod-title">Ortodoncia Metálica</h3>
                        <ul class="prod-bullets">
                            <li>Alta durabilidad y resistencia.</li>
                            <li>La opción más económica.</li>
                            <li>Resultados garantizados en casos complejos.</li>
                        </ul>
                        <a href="https://wa.me/593995328721?text=Info%20sobre%20Brackets%20Metalicos" class="btn-card">
                            <i class="fa-brands fa-whatsapp"></i> Más Info
                        </a>
                    </div>
                </div>

                <div class="prod-card" style="border-top: 4px solid var(--c-tomate);"> <div class="prod-img-box">
                        <img src="https://placehold.co/400x300/e0e0e0/333?text=Autoligado+Damon" alt="Brackets Autoligados">
                        <div class="price-tag">
                            <span class="price-sub">Cuotas desde</span>
                            $45 /mes
                        </div>
                    </div>
                    <div class="prod-content">
                        <h3 class="prod-title">Sistema Autoligado</h3>
                        <ul class="prod-bullets">
                            <li><strong>Sin ligas:</strong> Menos fricción y dolor.</li>
                            <li>Tratamiento hasta 30% más rápido.</li>
                            <li>Citas de control más espaciadas.</li>
                        </ul>
                        <a href="https://wa.me/593995328721?text=Info%20sobre%20Autoligados" class="btn-card">
                            <i class="fa-brands fa-whatsapp"></i> Quiero este
                        </a>
                    </div>
                </div>

                <div class="prod-card">
                    <div class="prod-img-box">
                        <img src="https://placehold.co/400x300/e0e0e0/333?text=Alineadores" alt="Ortodoncia Invisible">
                        <div class="price-tag">
                            <span class="price-sub">Plan completo</span>
                            Consultar
                        </div>
                    </div>
                    <div class="prod-content">
                        <h3 class="prod-title">Alineadores Invisibles</h3>
                        <ul class="prod-bullets">
                            <li>Totalmente transparentes.</li>
                            <li>Removibles para comer y limpiar.</li>
                            <li>Sin metales ni alambres en boca.</li>
                        </ul>
                        <a href="https://wa.me/593995328721?text=Info%20sobre%20Invisalign" class="btn-card">
                            <i class="fa-brands fa-whatsapp"></i> Cotizar
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cases-section">
        <div class="container">
            <h2 class="section-title">Resultados Reales</h2>
            <div class="snap-slider">
                <div class="case-card">
                    <div class="case-label">Antes / Después</div>
                    <img src="https://placehold.co/350x250/333/fff?text=Caso+1" class="case-img" alt="Caso 1">
                    <div class="case-desc">Corrección de apiñamiento severo (18 meses)</div>
                </div>
                <div class="case-card">
                    <div class="case-label">Antes / Después</div>
                    <img src="https://placehold.co/350x250/333/fff?text=Caso+2" class="case-img" alt="Caso 2">
                    <div class="case-desc">Cierre de diastema central (12 meses)</div>
                </div>
                <div class="case-card">
                    <div class="case-label">Antes / Después</div>
                    <img src="https://placehold.co/350x250/333/fff?text=Caso+3" class="case-img" alt="Caso 3">
                    <div class="case-desc">Mordida cruzada infantil (9 meses)</div>
                </div>
                <div class="case-card">
                    <div class="case-label">Antes / Después</div>
                    <img src="https://placehold.co/350x250/333/fff?text=Caso+4" class="case-img" alt="Caso 4">
                    <div class="case-desc">Alineación estética pre-boda (6 meses)</div>
                </div>
            </div>
            <p style="text-align:center; margin-top:20px; font-size:0.9rem; opacity:0.7;">Desliza para ver más casos <i class="fa-solid fa-arrow-right"></i></p>
        </div>
    </section>

    <section class="office-section">
        <div class="container">
            <h2 class="section-title" style="color: var(--c-verde);">Tecnología y Confort</h2>
            <div class="office-grid">
                <img src="https://placehold.co/600x400/E0E0E0/333?text=Sala+de+Espera" alt="Sala de Espera">
                <img src="https://placehold.co/600x400/E0E0E0/333?text=Sillon+Dental" alt="Sillón Dental">
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="index.html" style="color: var(--c-tomate); font-weight: 700; border-bottom: 2px solid var(--c-tomate);">
                    <i class="fa-solid fa-arrow-left"></i> Volver al Inicio
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>EVA Dental Tumbaco - Juan Montalvo y Calle B.</p>
        </div>
    </footer>

</body>
</html>
