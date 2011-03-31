<?php

class ChecksController extends PingdomCustomCheckAppController {
	var $name = 'Checks';

    function ping() {
		$this->layout = 'xml';
	}

}

