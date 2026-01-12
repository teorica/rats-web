<?php
header('Content-Type: application/json');
require "./helpers.php";

function main() {
	if (empty($_POST["username"])) {
		return jsonRes(false, "Username required.");
	}

	$user = $_POST["username"];
	if (!preg_match('/^[a-z0-9]+$/', $user)) {
		return jsonRes(false, "Invalid characters. Only a-z and 0-9 allowed.");
	}

	if (strlen($user) > 15 || strlen($user) < 3) {
		return jsonRes(false, "Username must be between 3 and 15 chars.");
	}

	// 3. Create Ticket
	$queueDir = "/opt/rats/queue";
	$jobFile = "$queueDir/$user.job";
	$resultFile = "/opt/rats/results/$user.job";

	// Check if user already exists (quick check to save queue time)
	if (file_exists($jobFile) || file_exists($resultFile)) {
		return jsonRes(false, "User is already being processed or exists.");
	}

	// Write empty job file
	if (file_put_contents($jobFile, "") === false) {
		// This handles the "Disk Full" or "Permission Denied" case gracefully
		return jsonRes(false, "System Busy (IO Error). Try again later.");
	}

	return jsonRes(true, "Job queued.");
}
main();
?>
