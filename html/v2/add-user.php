<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Rat Systems | Join the Colony</title>
		<style>
				body { font-family: monospace; background: #111; color: #0f0; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
				.container { border: 1px solid #0f0; padding: 2rem; width: 400px; box-shadow: 0 0 10px #0f0; }
				input { background: #000; border: 1px solid #0f0; color: #0f0; padding: 10px; width: 90%; margin-bottom: 1rem; font-family: monospace; }
				button { background: #0f0; color: #000; border: none; padding: 10px 20px; cursor: pointer; font-weight: bold; width: 100%; font-family: monospace; }
				button:hover { background: #fff; }
				#status { margin-top: 1rem; white-space: pre-wrap; word-break: break-all; }
				.hidden { display: none; }
		</style>
</head>
<body>
		<div class="container">
				<h2>./init_vandal.sh</h2>
				<div id="form-box">
						<input type="text" id="username" placeholder="Username (a-z, 0-9)" maxlength="15">
						<button onclick="submitJob()">EXECUTE</button>
				</div>
				<div id="status"></div>
		</div>

<script>
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
</script>
</body>
</html>
