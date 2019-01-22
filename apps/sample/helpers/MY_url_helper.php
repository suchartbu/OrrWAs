<?php

/* 
 * Orr Helper Functions
 */

function assets_url($url){
    //return "http://[::1]/OrrWAs/assets/" . $url;
    return base_url('/assets/'.$url);
}