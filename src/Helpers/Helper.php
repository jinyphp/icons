<?php
/**
 * Helpers
 */

if(!function_exists("xIcon")) {
    function xIcon($name, $type="heroicon") {
        return new \Jiny\Icons\Icon($name, $type);
    }
}

