<?php
/**
 * Orr Projects
 * @author Suchart Bunhachirat <suchartbu@gmail.com>
 */

$request_uri = $_SERVER['REQUEST_URI'];
$codeigniter_url = 'https://localhost/OrrWAs/vendor/codeigniter/framework';
$part_ = explode('/', $request_uri);
foreach ($part_ as $key => $value) {
    if ($key == 3) {
        $app_index_url .= '/' . $value . '.php';
    } else if ($key > 2) {
        $app_index_url .= '/' . $value;
    }
}
$app_url = $codeigniter_url . $app_index_url;
header("Location: $app_url");
exit;