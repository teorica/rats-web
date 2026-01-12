async function submitJob() {
	const user = document.getElementById('username').value;
	const statusDiv = document.getElementById('status');
	const btn = document.querySelector('button');

	if(!user) return;

	// 1. Send Request
	btn.disabled = true;
	statusDiv.innerHTML = "Creating job ticket...";

	try {
		let response = await fetch('api_queue_job.php', {
		method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: 'username=' + encodeURIComponent(user)
	});

		let data = await response.json();

		if(!data.success) {
			statusDiv.innerHTML = "ERROR: " + data.message;
			btn.disabled = false;
			return;
		}

		// 2. Start Polling
		statusDiv.innerHTML = "Job queued. Waiting for observer daemon...";
		pollStatus(user);

	} catch (e) {
		statusDiv.innerHTML = "Network Error.";
		btn.disabled = false;
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

