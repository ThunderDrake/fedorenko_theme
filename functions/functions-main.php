<?php

use Fedorenko\Helper;
use Fedorenko\Site;

function ct(): Site {
	return Site::getInstance();
}

function cth(): Helper {
	return Helper::getInstance();
}
