// Alphanumeric lowcase characters, minumum 3, maximum 16.
const VALID_REGEX = /^[a-z0-9]{3,16}$/;
const QUEUE_ADDER_ENDPOINT = "res/php/queue_job.php";
const STATUS_CHECKER_ENDPOINT = "res/php/check_status.php";


async function submitJob() {
	const username = document.getElementById('username').value;
	const statusDiv = document.getElementById('status');
	const submitBtn = document.querySelector('button');

	if (!username) {
		statusDiv.innerHTML = "Empty username. Try again.";
		return;
	}
	if (!VALID_REGEX.test(username)) {
		statusDiv.innerHTML = "Invalid username. Try again."
		return;
	}

	// 1. Send Request
	submitBtn.disabled = true;
	statusDiv.innerHTML = "Sending your data. Hold on.";

	try {
		let request = await fetch(QUEUE_ADDER_ENDPOINT, {
		method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: 'username=' + encodeURIComponent(username)
	});

		let result = await request.json();
		if (result.success === false) {
			statusDiv.innerHTML = result.message;
			submitBtn.disabled = false;
			return;
		}

		// Username correctly sent to be processed.
		// Constantly query the server for the 
		// result.
		statusDiv.innerHTML = "Job queued. Waiting for results...";
		const hashId = result.hashId;
		pollStatus(hashId);
	} catch (e) {
		statusDiv.innerHTML = "Network Error.";
		submitBtn.disabled = false;
	}
}

async function pollStatus(hashId) {
	const statusDiv = document.getElementById('status');
	const delay = 2000;

	let interval = setInterval(async () => {
		try {
			let request = await fetch(STATUS_CHECKER_ENDPOINT + '?hashId=' + encodeURIComponent(hashId));
			let result = await request.json();

			if (result.success === true) {
				clearInterval(interval);
				const username = result.username;
				const password = result.password;
				statusDiv.innerHTML = "SUCCESS!\n\nUser: " + username + "\nPass: " + password;
				document.querySelector('button').disabled = false;
			} else if (result.success === false) {
				clearInterval(interval);
				statusDiv.innerHTML = "FAILURE: " + result.message;
				document.querySelector('button').disabled = false;
			} else if (result.success === "pending") {
				statusDiv.innerHTML += ".";
				return;
			}
		} catch (e) {
			clearInterval(interval);
			statusDiv.innerHTML = "Polling/network error.";
		}
	}, delay);
}

