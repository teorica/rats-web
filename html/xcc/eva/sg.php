<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVA Dental - Style Guide & UI Kit</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- 1. VARIABLES GLOBALES (El ADN del Sitio) --- */
        :root {
            /* Colores Base */
            --c-tomate: #FF5722;   /* "Fanta Intenso" - Acción, Alertas, CTAs */
            --c-verde: #1B5E20;    /* "Verde Profundo" - Autoridad, Fondos oscuros */
            --c-hueso: #F7F5F0;    /* "Blanco Hueso" - Fondo general, calidez */
            --c-blanco: #FFFFFF;   /* Blanco puro - Interior de cards */
            --c-texto: #1A1A1A;    /* Casi negro - Legibilidad máxima */
            --c-gris-claro: #E0E0E0; /* Bordes sutiles */

            /* Métricas de Ingeniería */
            --radius: 6px;         /* Bordes apenas redondeados (precisión técnica) */
            --shadow-card: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-hover: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --border-thicc: 3px solid; /* Bordes gruesos para definir estructura */
        }

        body {
            background-color: var(--c-hueso);
            font-family: 'Inter', sans-serif;
            color: var(--c-texto);
            padding: 40px;
        }

        h2.guide-title {
            border-bottom: 2px solid var(--c-tomate);
            padding-bottom: 10px;
            margin: 40px 0 20px 0;
            color: var(--c-verde);
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 2px;
        }

        /* --- 2. COMPONENTE: SERVICE CARD (La Carta de Menú) --- */
        /* Diseño limpio, icono grande, hover agresivo */
        .card-servicio {
            background: var(--c-blanco);
            border: 1px solid var(--c-gris-claro);
            border-radius: var(--radius);
            padding: 30px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            max-width: 350px;
        }

        /* La barra superior de color (Estado inactivo) */
        .card-servicio::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: var(--c-verde);
            transition: 0.3s;
        }

        .card-servicio:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
            border-color: var(--c-tomate);
        }

        /* Cambio de color al hacer hover: De Verde a Tomate */
        .card-servicio:hover::before { background: var(--c-tomate); }

        .card-icon {
            font-size: 2.5rem;
            color: var(--c-verde);
            margin-bottom: 20px;
            transition: 0.3s;
        }
        
        .card-servicio:hover .card-icon { color: var(--c-tomate); transform: scale(1.1); }

        .card-title { font-weight: 800; font-size: 1.25rem; margin-bottom: 10px; }
        .card-desc { font-size: 0.95rem; color: #555; line-height: 1.5; margin-bottom: 20px; }
        
        .card-link {
            font-weight: 700;
            color: var(--c-tomate);
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        /* --- 3. COMPONENTE: FAQ ACCORDION (Resolución de Dudas) --- */
        /* Estilo mecánico: Click -> Despliegue */
        .faq-item {
            background: var(--c-blanco);
            border: 1px solid var(--c-gris-claro);
            margin-bottom: 10px;
            border-radius: var(--radius);
            overflow: hidden;
        }

        .faq-question {
            width: 100%;
            text-align: left;
            padding: 20px;
            background: none;
            border: none;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--c-verde);
        }

        .faq-question:hover { background-color: rgba(27, 94, 32, 0.05); }

        .faq-icon {
            color: var(--c-tomate);
            font-size: 1.2rem;
            transition: transform 0.3s;
        }

        /* Estado "Abierto" simulado (en JS se añadiría la clase .active) */
        .faq-answer {
            padding: 0 20px 20px 20px;
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
            display: block; /* Cambiar a none por defecto con JS */
            border-top: 1px solid var(--c-hueso);
            margin-top: -10px;
            padding-top: 20px;
        }

        /* --- 4. COMPONENTE: TEAM CARD (Credibilidad) --- */
        .team-card {
            background: var(--c-blanco);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow-card);
            max-width: 300px;
            border-bottom: 4px solid var(--c-verde); /* Base sólida */
        }

        .team-photo {
            width: 100%;
            height: 250px;
            background-color: #ddd; /* Placeholder */
            position: relative;
        }
        
        .team-photo img { width: 100%; height: 100%; object-fit: cover; }

        .team-info { padding: 20px; text-align: center; }
        
        .team-name {
            color: var(--c-verde);
            font-weight: 800;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .team-role {
            color: var(--c-tomate);
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .team-reg {
            font-size: 0.75rem;
            color: #888;
            font-family: monospace; /* Toque técnico */
            background: var(--c-hueso);
            padding: 4px 8px;
            border-radius: 4px;
            display: inline-block;
        }

        /* --- 5. COMPONENTE: TESTIMONIAL BLOCK (Prueba Social) --- */
        /* Estilo invertido: Fondo oscuro, letras claras para romper la monotonía del blanco */
        .review-card {
            background-color: var(--c-verde);
            color: var(--c-hueso);
            padding: 30px;
            border-radius: var(--radius);
            position: relative;
            max-width: 500px;
        }

        .review-stars { color: var(--c-tomate); margin-bottom: 15px; }
        
        .review-text {
            font-style: italic;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .review-author {
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .review-author img {
            width: 40px; height: 40px;
            border-radius: 50%;
            border: 2px solid var(--c-tomate);
        }

        /* Comita decorativa */
        .quote-icon {
            position: absolute;
            top: 20px; right: 20px;
            font-size: 4rem;
            color: rgba(255,255,255,0.1);
            font-family: serif;
        }

        /* --- 6. COMPONENTE: PRICE/PROMO BANNER (Urgencia) --- */
        .promo-banner {
            background: linear-gradient(135deg, var(--c-tomate) 0%, #E64A19 100%);
            color: white;
            padding: 20px;
            border-radius: var(--radius);
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 20px rgba(255, 87, 34, 0.3);
        }
        
        .promo-text strong { font-size: 1.2rem; display: block; }
        .promo-small { font-size: 0.9rem; opacity: 0.9; }
        
        .btn-promo {
            background: white;
            color: var(--c-tomate);
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 0.8rem;
        }

    </style>
</head>
<body>

    <h1>Style Guide: EVA Dental Tumbaco</h1>
    <p>Paleta: Fanta Intenso + Verde Quirúrgico + Blanco Hueso</p>

    <h2 class="guide-title">Componente: Tarjeta de Servicio</h2>
    <div class="card-servicio">
        <i class="fa-solid fa-tooth card-icon"></i>
        <h3 class="card-title">Implantes Dentales</h3>
        <p class="card-desc">Solución definitiva para recuperar tu mordida. Usamos titanio de grado médico biocompatible.</p>
        <a href="#" class="card-link">Ver detalles <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <h2 class="guide-title">Componente: Pregunta Frecuente (Accordion)</h2>
    <div style="max-width: 600px;">
        <div class="faq-item">
            <button class="faq-question">
                ¿Aceptan seguros médicos privados?
                <i class="fa-solid fa-plus faq-icon"></i>
            </button>
            <div class="faq-answer">
                Sí, trabajamos con Humana, Salud S.A. y BMI vía reembolso. Te ayudamos con todo el papeleo para que recuperes tu inversión sin estrés.
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                ¿Duele el diseño de sonrisa?
                <i class="fa-solid fa-plus faq-icon"></i>
            </button>
        </div>
    </div>

    <h2 class="guide-title">Componente: Ficha Profesional</h2>
    <div class="team-card">
        <div class="team-photo">
            <img src="https://placehold.co/300x250/1B5E20/FFFFFF?text=Dra.+Eva" alt="Doctora">
        </div>
        <div class="team-info">
            <h3 class="team-name">Dra. Eva [Apellido]</h3>
            <div class="team-role">Directora Médica</div>
            <span class="team-reg">REG: 1024-SENESCYT-2024</span>
        </div>
    </div>

    <h2 class="guide-title">Componente: Reseña Destacada</h2>
    <div class="review-card">
        <div class="quote-icon">"</div>
        <div class="review-stars">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
        </div>
        <p class="review-text">"Llegué con un dolor terrible y miedo al dentista. La Dra. Eva fue súper suave, no sentí ni la anestesia. ¡Recomendada en Tumbaco!"</p>
        <div class="review-author">
            <img src="https://placehold.co/40/FF5722/FFFFFF?text=JP" alt="Usuario">
            <span>Juan Pérez</span>
        </div>
    </div>

    <h2 class="guide-title">Componente: Banner de Urgencia</h2>
    <div class="promo-banner" style="max-width: 700px;">
        <div class="promo-text">
            <strong>¿Dolor Agudo? Te atendemos HOY.</strong>
            <span class="promo-small">Espacios de emergencia reservados diariamente.</span>
        </div>
        <a href="#" class="btn-promo">Llamar Ahora</a>
    </div>

</body>
</html>
