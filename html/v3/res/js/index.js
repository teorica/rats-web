function updateLatency() {
	const targets = ['lat-co', 'lat-ec', 'lat-pe', 'lat-cl'];

	const randomId = targets[Math.floor(Math.random() * targets.length)];
	const el = document.getElementById(randomId);

	const base = parseInt(el.getAttribute('data-base'));
	const variance = parseInt(el.getAttribute('data-var'));

	const noise = Math.floor(Math.random() * (variance * 2 + 1)) - variance;
	const newVal = base + noise;

	el.innerText = newVal + " ms";
	el.classList.add('ping-flash');
	setTimeout(() => {
		el.classList.remove('ping-flash');
	}, 300);
}

setInterval(updateLatency, 1500);
setInterval(updateLatency, 2300);
