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
		<script src="res/js/main.js"></script>
	</body>
</html>
