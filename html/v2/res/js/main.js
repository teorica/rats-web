// Alphanumeric lowcase characters, minumum 3, maximum 16.
const VALID_REGEX = /^[a-z0-9]{3,16}$/;
const QUEUE_ADDER_ENDPOINT = "api_queue_job.php";
const STATUS_CHECKER_ENDPOINT = "api_check_status.php";


async function submitJob() {
	const username = document.getElementById('username').value;
	const statusDiv = document.getElementById('status');
	const submitBtn = document.querySelector('button');

	if (!username) {
		statusDiv.innerHTML = "Empty username. Try again.";
		return;
	}
	if (!VALID_REGEX.test(user)) {
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
		statusDiv.innerHTML = "Job queued. Waiting for observer daemon...";
		const hashId = result.hashId;
		console.log("Hash: " + hashId);
		//pollStatus(user);
	} catch (e) {
		statusDiv.innerHTML = "Network Error.";
		submitBtn.disabled = false;
	}
}

async function pollStatus(username) {
	const statusDiv = document.getElementById('status');

	let interval = setInterval(async () => {
	try {
		let res = await fetch('api_check_status.php?username=' + encodeURIComponent(username));
		let data = await res.json();

		if (data.status === 'ready') {
			clearInterval(interval);
			statusDiv.innerHTML = "SUCCESS!\n\nUser: " + username + "\nPass: " + data.message + "\n\nSSH port 22. Good hunting.";
			document.querySelector('button').disabled = false;
		} else if (data.status === 'error') {
			clearInterval(interval);
			statusDiv.innerHTML = "FAILURE: " + data.message;
			document.querySelector('button').disabled = false;
		} else {
			// Still pending, just add a dot
			statusDiv.innerHTML += ".";
		}
	} catch (e) {
		clearInterval(interval);
		statusDiv.innerHTML = "Polling Error.";
	}
	}, 2000); // Check every 2 seconds
}

