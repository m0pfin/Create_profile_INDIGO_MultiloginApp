<?php
/**
 * Created by PhpStorm.
 * User=> m0pfin
 * Date=> 07.10.2020
 * Time=> 05=>16
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$name = $_POST['name'];
$proxy = $_POST['proxy'];
$proxy_type = $_POST['proxy_type'];
$count = $_POST['count'];
$os = $_POST['os'];
$today = date("d/m/Y");
$filename = 'profile_id.txt'; // Файл с ID профилей INDIGO/MLA


/**
 * Прокси
 */

$row = explode(':', $proxy);

$ip = $row[0]; // ip
$port = $row[1]; // port
$login = $row[2]; //login
$pass = $row[3]; //pass

require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

// curl \
//     -X POST \
//     -d "{"id"=>"1","content"=>"Hello world!","date"=>"2015-06-30 19=>42=>21"}" \
//     "https=>//httpbin.org/post"

for ($i=1; $i<=$count; $i++) {
$data = array(

    "name" => $name . ' ' . $i . ' (' . $today .')',
    "browser" => "mimic",
    "os" => $os,
    "googleServices" => "true",
    "network" => [
        "proxy" => [
            "type" => $proxy_type,
            "host" => $ip,
            "port" => $port,
            "username" => $login,
            "password" => $pass,
        ]
    ],
    "storage" => [
        "local" => true,
        "extensions" => true,
        "bookmarks" => false,
        "history" => true,
        "passwords" => true
      ],
    "navigator" => [
        "language" => "ru-RU,en-US,en;q=0.9",
        "doNotTrack" => 0
    ]
);

$curl = new Curl();
$curl->setHeader('Content-Type', 'application/json');
    $curl->post('http://localhost:35000/api/v2/profile', $data);
    $response = json_decode(json_encode($curl->response),true); $curl->response;
    $uuid_id = $response['uuid']; //['id']; // получаем ID профиля
    echo $uuid_id . '<br>';

    //добавляем текст в конец файла
    $fp = fopen($filename, 'a');
    fwrite($fp, $uuid_id . PHP_EOL);
    fclose($fp);
}