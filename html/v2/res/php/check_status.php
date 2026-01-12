<?php
header('Content-Type: application/json');
require "helpers.php";

function main() {
	$hashId = $_GET['hashId'] ?? '';
	if (!preg_match('/^[a-z0-9]+$/', $hashId)) {
		return jsonRes(false, "Invalid hash.");
	}

	$resultFilePath = QUEUE_RESULTS_DIR . "/$hashId";
	if (file_exists($resultFilePath)) {
		return file_get_contents($resultFilePath);
	} else {
		// File not created yet do nothing.
		return jsonRes("pending", "");
	}
}

echo main();
