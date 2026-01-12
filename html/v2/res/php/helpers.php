<?php
function jsonRes($success, $message) {
	return json_encode(['success' => $success, 'message' => $message]);
}
