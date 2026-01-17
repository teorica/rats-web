const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector("nav");
const lis = nav.querySelectorAll("li");

hamburger.onclick = () => {
	nav.classList.toggle("visible");
}

// Speed test
async function ping() {
	const start = performance.now();
	const url = "https://www.odontologos-del-valle.com/?t=" + new Date().getTime();
	try {
		await fetch(url, {
			method: 'HEAD',
			cache: 'no-store'
		});
		const end = performance.now();
		const latency = Math.round(end - start);
		console.log(latency);
	} catch(error) {
		console.log("error");
	}
}
ping();

/*
const pages = ["inicio", "matriculas", "servicios", "conozcanos"];
const index = pages.indexOf(page);
lis[index].setAttribute("class", "navActive");
*/
