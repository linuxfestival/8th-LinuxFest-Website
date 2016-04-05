<?php

define('section','presentations');

global $data;
$data=get_session(getInput('s'));

insertView('session');