<?php
header('Content-Type: application/json');
require "./helpers.php";

function main() {
	// Minimum number of characters allowed in username.
	define("MIN_CHARS", 4);
	// Maximum number of characters allowed in username.
	define("MAX_CHARS", 16);
	// Lowercase alphanumeric characters allowed in username.
	define("VALID_REGEX", '/^[a-z0-9]+$/');

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
	$jobFile = bin2hex(random_bytes(6));
	$resultFile = QUEUE_RESULTS_DIR . "/$jobFile";

	// Check if user already exists (quick check to save queue time)
	if (file_exists($jobFile) || file_exists($resultFile)) {
		return jsonRes(false, "Already in queue. Hold on.");
	}
	if (file_put_contents($jobFile, $username) === false) {
		return jsonRes(false, "System Busy (IO Error). Try again later.");
	}

	// Success! Queue file created and waiting for results.
	return jsonRes(true, "Job queued.");
}

echo main();
