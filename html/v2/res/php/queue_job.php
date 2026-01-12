<?php
header('Content-Type: application/json');
require "./helpers.php";

// Minimum number of characters allowed in username.
const MIN_CHARS = 4;
// Maximum number of characters allowed in username.
const MAX_CHARS = 16;
// Lowercase alphanumeric characters allowed in username.
const VALID_REGEX = '/^[a-z0-9]+$/';

function main() {
	/* Start of username validation */
	$username = $_POST["username"] ?? "";
	if (!preg_match(VALID_REGEX, $username)) {
		return jsonRes(false, "Invalid characters. Try again.");
	}
	if (strlen($username) > MAX_CHARS || strlen($username) < MIN_CHARS) {
		return jsonRes(false, "Username must be between " . MIN_CHARS . " and " . MAX_CHARS . " chars.");
	}
	/* End of username validation. */

	// No extension. 12-char long hex file name.
	$jobFileName = bin2hex(random_bytes(6));
	$jobFilePath = QUEUE_DIR . "/$jobFileName";
	$resultFilePath = QUEUE_RESULTS_DIR . "/$jobFileName";

	// Check if user already exists (quick check to save queue time)
	if (file_exists($jobFilePath) || file_exists($resultFilePath)) {
		return jsonRes(false, "Already in queue. Hold on.");
	}
	if (file_put_contents($jobFilePath, $username) === false) {
		return jsonRes(false, "System Busy (IO Error). Try again later.");
	}

	// Success! Queue file created and waiting for results.
	return json_encode([
		"success" => true,
		"message" => "Job queued correctly. Please wait.",
		"hashId" => $jobFileName
	]);
}

echo main();
