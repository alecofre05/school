<?php

/**
 * @param string $controller
 * @param string $action
 * @param array $params
 * @return string
 */
function getUrl($controller = '', $action = '', $params = []) {
    $paramsString = '';
    foreach ( $params as $param => $value ) {
        $paramsString .= '&'.$param.'='.$value;
    }

    return SITEURL.'index.php?section='.$controller.'&action='.$action.$paramsString;
}