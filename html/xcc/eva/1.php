<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVA Dental Services | Tu Dentista de Confianza en Tumbaco</title>
    <meta name="description" content="Clínica dental en Tumbaco. Dra. Eva ofrece odontología sin dolor, implantes, ortodoncia y atención a niños con horarios extendidos y parqueadero.">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- PALETA DE COLORES Y VARIABLES --- */
        :root {
            /* Paleta solicitada: */
            --color-tomate: #FF6B4A; /* Color de acento vibrante para CTAs */
            --color-verde-profundo: #2C5E50; /* Color corporativo principal, serio y médico */
            --color-verde-suave: #E3F2ED; /* Fondos secundarios suaves */
            --color-hueso: #F9F6F0; /* Fondo principal, cálido y limpio */
            
            /* Neutros */
            --color-texto: #333333;
            --color-texto-claro: #F9F6F0;
            
            /* Estilos */
            --borde-redondeado: 16px;
            --sombra-suave: 0 10px 30px rgba(0,0,0,0.05);
        }

        /* --- RESET BÁSICO --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--color-hueso);
            color: var(--color-texto);
            line-height: 1.6;
        }
        a { text-decoration: none; }
        ul { list-style: none; }
        h1, h2, h3 { color: var(--color-verde-profundo); }
        
        /* --- COMPONENTES --- */
        .container { width: 90%; max-width: 1200px; margin: auto; }
        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 700;
            transition: 0.3s;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        /* El botón tomate es la estrella de la conversión */
        .btn-tomate {
            background-color: var(--color-tomate);
            color: white;
            box-shadow: 0 4px 15px rgba(255, 107, 74, 0.3);
        }
        .btn-tomate:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(255, 107, 74, 0.4); }
        .btn-verde {
            background-color: var(--color-verde-profundo);
            color: white;
        }

        /* --- HEADER --- */
        header {
            background-color: #fff;
            padding: 15px 0;
            box-shadow: var(--sombra-suave);
            position: sticky;
            top: 0;
            z-index: 100;
        }
[O        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-verde-profundo);
        }
        .logo span { color: var(--color-tomate); }
        .nav-links { display: flex; gap: 20px; }
        .nav-links a { color: var(--color-texto); font-weight: 600; font-size: 0.9rem; }
        .header-cta { display: none; } /* Se oculta en móviles */

        /* --- HERO SECTION (La primera impresión) --- */
        .hero {
            padding: 80px 0;
            background: linear-gradient(to right, var(--color-hueso) 50%, var(--color-verde-suave) 50%);
            /* NOTA: Aquí idealmente iría una imagen de fondo suave de gente sonriendo */
        }
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        .hero-text h1 {
            font-size: 3rem;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #555;
        }
        .hero-image-placeholder {
            width: 100%;
            height: 400px;
            background-color: #ddd;
            border-radius: var(--borde-redondeado);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #888;
            border: 4px solid var(--color-verde-suave);
            /* INSTRUCCIÓN: Reemplaza este div con una etiqueta <img> real */
            background-image: url('https://placehold.co/600x400/E3F2ED/2C5E50?text=Foto+Dra.+Eva+Sonriendo'); 
            background-size: cover;
        }

        /* --- GANCHO LOCAL (Trust Bar) --- */
        .trust-bar {
            background-color: var(--color-verde-profundo);
            color: white;
            padding: 30px 0;
            margin-top: -40px; /* Efecto de superposición */
            position: relative;
            border-radius: var(--borde-redondeado);
            box-shadow: var(--sombra-suave);
        }
        .trust-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            text-align: center;
            gap: 20px;
        }
        .trust-item i {
            color: var(--color-tomate);
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .trust-item h4 { font-size: 1.1rem; margin-bottom: 5px; }

        /* --- SERVICIOS --- */
        .servicios { padding: 80px 0; }
        .section-header { text-align: center; margin-bottom: 50px; }
        .section-header h2 { font-size: 2.5rem; }
        .servicios-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        .servicio-card {
            background: white;
            padding: 30px;
            border-radius: var(--borde-redondeado);
            box-shadow: var(--sombra-suave);
            transition: 0.3s;
            border-top: 4px solid transparent;
        }
        .servicio-card:hover {
            border-top: 4px solid var(--color-tomate);
            transform: translateY(-5px);
        }
        .servicio-icon {
            font-size: 2.5rem;
            color: var(--color-verde-profundo);
            margin-bottom: 20px;
        }
        .servicio-card h3 { margin-bottom: 15px; }

        /* --- FOOTER --- */
        footer {
            background-color: var(--color-verde-profundo);
            color: var(--color-texto-claro);
            padding: 60px 0 20px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        .footer-col h4 { color: var(--color-tomate); margin-bottom: 20px; }
        .footer-col ul li { margin-bottom: 10px; }
        .footer-col ul li a { color: var(--color-texto-claro); opacity: 0.8; }
        .copyright { text-align: center; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); font-size: 0.9rem; opacity: 0.7; }

        /* --- WHATSAPP FLOTANTE --- */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25d366; /* Color oficial de WhatsApp */
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            z-index: 1000;
            transition: 0.3s;
        }
        .whatsapp-float:hover { transform: scale(1.1); }

        /* --- RESPONSIVE (Móvil) --- */
        @media (max-width: 768px) {
            .header-cta, .nav-links { display: none; } /* Simplificamos menú en móvil */
            .hero-grid { grid-template-columns: 1fr; text-align: center; }
            .hero-text h1 { font-size: 2.2rem; }
            .trust-grid { grid-template-columns: 1fr; }
            .trust-bar { margin-top: 20px; }
            .hero { background: var(--color-hueso); } /* Quitamos el gradiente en móvil */
        }
    </style>
</head>
<body>

    <header>
        <div class="container header-content">
            <div class="logo">EVA <span>Dental</span> Tumbaco</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#servicios">Tratamientos</a></li>
                    <li><a href="#nosotros">La Dra. Eva</a></li>
                    <li><a href="#contacto">Ubicación</a></li>
                </ul>
            </nav>
            <a href="https://wa.me/593995328721" class="btn btn-verde header-cta">
                <i class="fa-solid fa-phone"></i> 099 532 8721
            </a>
        }
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-text">
                    <h1>Tu mejor sonrisa comienza en Tumbaco.</h1>
                    <p>Odontología experta para toda la familia en un ambiente relajado. Sin dolor, con tecnología avanzada y horarios que se adaptan a ti.</p>
                    <a href="https://wa.me/593995328721?text=Hola%20Dra.%20Eva,%20quisiera%20agendar%20una%20cita." class="btn btn-tomate">
                        Agendar mi Cita Ahora <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <p style="margin-top: 15px; font-size: 0.9rem; color: #666;"><i class="fa-solid fa-check" style="color: var(--color-tomate);"></i> Aceptamos principales seguros y tarjetas.</p>
                </div>
                <div class="hero-image">
                    <div class="hero-image-placeholder"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="trust-bar">
            <div class="trust-grid">
                <div class="trust-item">
                    <i class="fa-solid fa-clock"></i>
                    <h4>Horarios Extendidos</h4>
                    <p>Atendemos hasta las 19:00</p>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-car"></i>
                    <h4>Fácil Parqueo</h4>
                    <p>Ubicación cómoda en Juan Montalvo</p>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-heart-pulse"></i>
                    <h4>Urgencias Dentales</h4>
                    <p>Te atendemos el mismo día</p>
                </div>
            </div>
        </div>
    </div>

    <section id="servicios" class="servicios">
        <div class="container">
            <div class="section-header">
                <h2>Más que dientes, cuidamos personas</h2>
                <p>Soluciones modernas para problemas dentales comunes.</p>
            </div>
            <div class="servicios-grid">
                <div class="servicio-card">
                    <div class="servicio-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                    <h3>Diseño de Sonrisa</h3>
                    <p>Carillas y estética dental para que vuelvas a sonreír con total seguridad y naturalidad.</p>
                </div>
                <div class="servicio-card">
                    <div class="servicio-icon"><i class="fa-solid fa-tooth"></i></div>
                    <h3>Implantes Dentales</h3>
                    <p>Recupera la función y la estética de tus dientes perdidos con soluciones fijas y duraderas.</p>
                </div>
                <div class="servicio-card">
                    <div class="servicio-icon"><i class="fa-solid fa-child-reaching"></i></div>
                    <h3>Odontopediatría</h3>
                    <p>Atención suave y divertida para que tus hijos crezcan sin miedo al dentista.</p>
                </div>
                <div class="servicio-card">
                    <div class="servicio-icon"><i class="fa-solid fa-teeth-open"></i></div>
                    <h3>Ortodoncia</h3>
                    <p>Alinea tus dientes. Opciones metálicas tradicionales o alineadores invisibles modernos.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="https://wa.me/593995328721" class="btn btn-tomate">Consulta por tu tratamiento</a>
            </div>
        </div>
    </section>

    <footer id="contacto">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo" style="color: white; margin-bottom: 15px;">EVA <span>Dental</span></div>
                    <p>Tu clínica dental familiar en Tumbaco. Comprometidos con la odontología ética y sin dolor.</p>
                </div>
                <div class="footer-col">
                    <h4>Contacto</h4>
                    <ul>
                        <li><i class="fa-solid fa-location-dot" style="color: var(--color-tomate);"></i> Juan Montalvo, Tumbaco, Quito</li>
                        <li><i class="fa-solid fa-phone" style="color: var(--color-tomate);"></i> 099 532 8721</li>
                        <li><i class="fa-solid fa-clock" style="color: var(--color-tomate);"></i> Lun - Sáb: 09:00 - 19:00</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Tratamientos Rápidos</h4>
                    <ul>
                        <li><a href="#">Limpieza Dental</a></li>
                        <li><a href="#">Blanqueamiento</a></li>
                        <li><a href="#">Dolor de Muela (Urgencia)</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                © 2024 EVA Dental Services Tumbaco. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <a href="https://wa.me/593995328721?text=Hola,%20estoy%20visitando%20su%20web%20y%20tengo%20una%20consulta." class="whatsapp-float" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

</body>
</html>
