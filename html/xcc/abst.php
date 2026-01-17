<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L_VALVE // INDUSTRIAL_NIGHT + CONSTELLATION</title>
    <style>
        /* --- 1. THE HYBRID PALETTE --- */
        :root {
            --carbon:   #1a1a1a; 
            --titanium: #e1e1e1;
            --steel:    #444444;
            --safety:   #ea2e00;
            --sage:     #9dbdb8; 
            --font-main: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            --font-mono: 'Courier New', Courier, monospace; 
        }

        /* --- 2. BASE & CANVAS SETUP --- */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            background-color: var(--carbon);
            color: var(--titanium);
            font-family: var(--font-main);
            line-height: 1.5;
            border-top: 6px solid var(--safety);
            position: relative; /* Necesario para que el canvas se posicione bien */
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* EL FONDO DE PARTÍCULAS */
        #particle-canvas {
            position: fixed; /* Se queda fijo al hacer scroll */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Se envía al fondo absoluto */
            pointer-events: none; /* No interfiere con clicks */
            opacity: 0.6; /* Control maestro de sutileza */
        }

        a { text-decoration: none; color: var(--titanium); transition: 0.2s; }
        a:hover { color: var(--safety); }

        /* --- 3. LAYOUT --- */
        /* Hacemos el contenedor ligeramente transparente para que se vea el fondo */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            border-left: 2px solid var(--steel); 
            border-right: 2px solid var(--steel);
            min-height: 100vh;
            background-color: rgba(31, 31, 31, 0.85); /* FONDOS SEMI-TRANSPARENTES */
            backdrop-filter: blur(2px); /* Un ligero desenfoque tecnológico */
            position: relative;
            z-index: 1;
        }

        /* --- 4. HEADER --- */
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

        /* --- 5. HERO --- */
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
        
        .hero-sub {
            font-size: 1.1rem;
            color: #999;
            margin-bottom: 2rem;
            border-left: 3px solid var(--safety);
            padding-left: 1.5rem;
        }

        /* Hacemos los paneles también semi-transparentes */
        .specs-panel {
            background-color: rgba(157, 189, 184, 0.05); 
            border: 1px solid var(--sage);
            padding: 2rem;
            font-family: var(--font-mono);
            font-size: 0.9rem;
             backdrop-filter: blur(5px);
        }

        .specs-panel p { margin-bottom: 0.8rem; display: flex; justify-content: space-between; }
        .specs-panel strong { color: var(--sage); }

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
        
        .btn:hover { background-color: transparent; color: var(--safety); }

        /* --- 8. FOOTER --- */
        footer {
            padding: 3rem 0;
            border-top: 4px solid var(--steel);
            color: #777;
            font-size: 0.8rem;
            font-family: var(--font-mono);
            display: flex;
            justify-content: space-between;
            margin-top: auto; /* Empuja el footer al fondo si hay poco contenido */
        }

    </style>
</head>
<body>

    <canvas id="particle-canvas"></canvas>

    <div class="container">
        <header>
            <div class="logo-box">L_VALVE // SYS</div>
            <nav>
                <a href="#">Infraestructura</a>
                <a href="#">Soporte</a>
                <a href="#" style="color: var(--safety);">[ ACCESO ]</a>
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
                <br>
                <span style="font-size: 0.7rem; opacity: 0.6;">REF: LV-SYS-2026-X // BACKGROUND_TASK: ACTIVE</span>
            </div>
        </section>

        <footer>
            <div>&copy; 2026 LeninValve Hosting Systems.</div>
            <div>SYSTEM_LOAD: 0.02 | TEMP: 42°C</div>
        </footer>
    </div>

    <script>
        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');

        // Configuración de la "Constelación"
        let particlesArray;
        const numberOfParticles = 70; // Cantidad de puntos (menos es más delicado)
        const connectionDistance = 120; // Distancia para conectar líneas
        
        // Colores basados en tu paleta (usamos RGBA para transparencia)
        const particleColor = 'rgba(157, 189, 184, 0.3)'; // Un toque de tu Verde Salvia, muy transparente
        const lineColor = 'rgba(157, 189, 184, 0.1)'; // Líneas aún más sutiles

        // Ajustar canvas al tamaño de la ventana
        function setCanvasSize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        setCanvasSize();
        window.addEventListener('resize', setCanvasSize);

        // Clase Partícula
        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 1.5 + 0.5; // Puntos muy pequeños (entre 0.5px y 2px)
                this.speedX = Math.random() * 0.4 - 0.2; // Velocidad muy lenta
                this.speedY = Math.random() * 0.4 - 0.2;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                // Rebotar en los bordes
                if (this.x > canvas.width || this.x < 0) this.speedX = -this.speedX;
                if (this.y > canvas.height || this.y < 0) this.speedY = -this.speedY;
            }
            draw() {
                ctx.fillStyle = particleColor;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        // Iniciar el sistema
        function init() {
            particlesArray = [];
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }
        }

        // Bucle de animación principal
        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            for (let i = 0; i < particlesArray.length; i++) {
                particlesArray[i].update();
                particlesArray[i].draw();

                // Lógica de la Constelación (conectar puntos cercanos)
                for (let j = i; j < particlesArray.length; j++) {
                    const dx = particlesArray[i].x - particlesArray[j].x;
                    const dy = particlesArray[i].y - particlesArray[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < connectionDistance) {
                        ctx.beginPath();
                        ctx.strokeStyle = lineColor;
                        ctx.lineWidth = 0.5; // Líneas muy finas
                        ctx.moveTo(particlesArray[i].x, particlesArray[i].y);
                        ctx.lineTo(particlesArray[j].x, particlesArray[j].y);
                        ctx.stroke();
                        ctx.closePath();
                    }
                }
            }
            requestAnimationFrame(animateParticles);
        }

        init();
        animateParticles();
    </script>

</body>
</html>
