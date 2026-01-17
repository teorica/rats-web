const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector("nav");
const lis = nav.querySelectorAll("li");

hamburger.onclick = () => {
	nav.classList.toggle("visible");
}

/*
const pages = ["inicio", "matriculas", "servicios", "conozcanos"];
const index = pages.indexOf(page);
lis[index].setAttribute("class", "navActive");
*/

window.addEventListener("load", () => {
	const p = window.performance.getEntriesByType("navigation")[0];
	let tcp = Math.round(p.connectEnd - p.connectStart);
	let ttfb = Math.round(p.responseStart - p.requestStart);
	let dom = Math.round(p.domComplete - p.domInteractive);

	console.log("tcp = " + tcp);
	console.log("ttfb = " + ttfb);
	console.log("dom = " + dom);
});
