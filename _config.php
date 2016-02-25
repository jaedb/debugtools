<?php

// define this directory
define('DEBUGTOOLS_DIR', basename(dirname(__FILE__)) );

// add functionality to SiteTree
ContentController::add_extension('DebugTools');