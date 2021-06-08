<?php

use Apretaste\Alert;
use Apretaste\Request;
use Apretaste\Response;

class Service
{
	/**
	 * A possible home screen
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 */
	public function _main(Request $request, Response $response)
	{
		$content = [
			'text' => 'someText',
			'list' => ['one', 'two'],
			'dict' => ['first' => 'theFirstOne', 'second' => 'theSecondOne'],
			'profile' => $request->person,
		];

		$response->setTemplate("main.vue", $content);
	}
}
