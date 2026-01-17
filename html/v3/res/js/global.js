const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector("nav");
const lis = nav.querySelectorAll("li");

hamburger.onclick = () => {
	nav.classList.toggle("visible");
}

window.addEventListener('load', () => {
	// Pequeño retraso inicial para asegurar que performance API esté lista
	setTimeout(() => {
		const perfData = window.performance.getEntriesByType("navigation")[0];

		if (perfData) {
			// CÁLCULOS REALES
			let tcp = Math.round(perfData.connectEnd - perfData.connectStart);
			let ttfb = Math.round(perfData.responseStart - perfData.requestStart);
			let dom = Math.round(perfData.domComplete - perfData.domInteractive);
			if(tcp === 0) tcp = "<1";

			// INICIAMOS LA SECUENCIA DE "CARGA" (Con retrasos escalonados)

			// 1. TCP aparece rápido (entre 500ms y 1s)
			simulateScan('metric-tcp', tcp, 50, 500 + Math.random()*500);

			// 2. TTFB aparece un poco después (entre 1s y 1.5s)
			simulateScan('metric-ttfb', ttfb, 200, 1000 + Math.random()*500);

			// 3. DOM aparece al final (entre 1.5s y 2s)
			simulateScan('metric-dom', dom, 500, 1500 + Math.random()*500);

			// --- VEREDICTO FINAL (Aparece al final de todo) ---
			setTimeout(() => {
				const statusBox = document.getElementById('status-message');
				statusBox.style.transition = "all 0.5s";

				if (tcp < 40 && tcp !== "<1") {
					// Caso Éxito: Conexión Local
					statusBox.innerHTML = "<strong style='color:var(--sage)'>✅ CONEXIÓN LOCAL CONFIRMADA</strong><br>RUTA OPTIMIZADA.";
					statusBox.style.borderColor = "var(--sage)";
					statusBox.style.background = "rgba(157, 189, 184, 0.1)";
					statusBox.style.color = "var(--titanium)";
				} else {
					// Caso Normal/Lento
					statusBox.innerHTML = "<strong>📡 DIAGNÓSTICO COMPLETADO</strong><br>SISTEMAS NOMINALES.";
					statusBox.style.borderColor = "var(--titanium)";
					statusBox.style.color = "var(--titanium)";
				}
			}, 2200); // Aparece después de que todos los datos se han mostrado
		}
	}, 100);
});






/*
const pages = ["inicio", "matriculas", "servicios", "conozcanos"];
const index = pages.indexOf(page);
lis[index].setAttribute("class", "navActive");
*/
