<?php

/**
 * @param string $controller
 * @param string $action
 * @param array $params
 * @return string
 */
function getUrl($controller = '', $action = '', $params = [], $api=false) {
    $paramsString = '';
    foreach ( $params as $param => $value ) {
        $paramsString .= '&'.$param.'='.$value;
    }
    $loader = $api ? "api" : "index";
    return SITEURL.$loader.'.php?section='.$controller.'&action='.$action.$paramsString;
}