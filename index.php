<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package LeroyCore
 */

//
// PHASE: BOOTSTRAP
//
define('LEROY_INSTALL_PATH', dirname(__FILE__));
define('LEROY_SITE_PATH', LEROY_INSTALL_PATH . '/site');

require(LEROY_INSTALL_PATH.'/src/CLeroy/bootstrap.php');

$ly = CLeroy::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ly->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$ly->ThemeEngineRender();