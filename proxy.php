<?php
/**
 * คำสั่งจัดการ URI ของโครงการ
 * - แปลงค่า URI $host $apps $controll $parm
 */
//$url = 'http://localhost:81/Api/RestfulApi.php';
$url = 'http://127.0.0.1/OrrWAs/vendor/codeigniter/framework/jdo.php/HisPatient/fname/%E0%B8%81?page=4';

//$data = "fn=login&test=1";

/* $data = array(
  'fn' => "login"
  ); */


try {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    $content = curl_exec($ch);
    curl_close($ch);

    print_r($content);
} catch (Exception $ex) {

    echo $ex;
}