<?php

define('section','workshops');

global $data;
$data=get_session(getInput('s'));

insertView('session');