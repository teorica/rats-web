<?php
// Dir with all jobs. www-data has write only permissions here.
define("QUEUE_DIR", "/opt/rats/queue");
// Dir with all jobs results. www-data has read only permissions here.
define("QUEUE_RESULTS_DIR", "/opt/rats/results");

function jsonRes($success, $message) {
	return json_encode(['success' => $success, 'message' => $message]);
}
