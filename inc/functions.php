<?php
function getData($dataCat = 'general') {
	$data = json_decode(file_get_contents('data/' . $dataCat . '.json'), true);

	if (empty($data)) {
		$result = [
			'status' => 'error',
			'content' => "Ooops! We weren't able to find <strong>{$dataCat}</strong>. Please contact us and let us know about this slight hiccup."
		];
	} else {
		$result = [
			'status' => 'ok',
			'content' => $data
		];
	}

	return $result;
}
