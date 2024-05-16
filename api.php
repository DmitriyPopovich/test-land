<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

//Общие настройки
$offer = "dfgdfg4534trg";
$comment = 'Some Offer';
$tracker_url = 'https://some-url/postback?subid=';
$url_partnerka = 'https://partnerka.com/api/';


$fmod = isset($_REQUEST['fmod']) ? trim(htmlspecialchars($_REQUEST['fmod'])) : "";
$pixel = isset($_REQUEST['pixel']) ? trim(htmlspecialchars($_REQUEST['pixel'])) : "";
$phonecc = isset($_REQUEST['phonecc']) ? trim(htmlspecialchars($_REQUEST['phonecc'])) : "";
$phone_body = isset($_REQUEST['phone']) ? trim(htmlspecialchars($_REQUEST['phone'])) : "";
$ip = $_SERVER['REMOTE_ADDR'];
$subid = isset($_REQUEST['subid']) ? trim(htmlspecialchars($_REQUEST['subid'])) : "";
$email = isset($_REQUEST['email']) ? trim(htmlspecialchars($_REQUEST['email'])) : "";
$first_name = isset($_REQUEST['first_name']) ? trim(htmlspecialchars($_REQUEST['first_name'])) : "";
$last_name = isset($_REQUEST['last_name']) ? trim(htmlspecialchars($_REQUEST['last_name'])) : "";
$url_tracker_lead = $tracker_url. $subid . '&status=lead';
$url_tracker_rejected = $tracker_url . $subid . '&status=rejected';


$postdata = [
    'offer'   => $offer,
    'ip'      => $ip,
    'email'   => $email,
    'name'    => $first_name,
    'last'    => $last_name,
    'phone'   => '+' .$phonecc.$phone_body,
    'comment' => $comment,
    'subid'   => $subid,
];

//отправляем куда-то

//$curl = curl_init();
//curl_setopt_array($curl, array(
//CURLOPT_URL => $url_partnerka,
//CURLOPT_RETURNTRANSFER => true,
//CURLOPT_ENCODING => '',
//CURLOPT_MAXREDIRS => 10,
//CURLOPT_TIMEOUT => 0,
//CURLOPT_FOLLOWLOCATION => true,
//CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//CURLOPT_CUSTOMREQUEST => 'POST',
//CURLOPT_POSTFIELDS => $postdata,
//));
//$response = json_decode(curl_exec($curl));
//curl_close($curl);

//пишем логи
file_put_contents('log.txt', print_r($postdata, true) . PHP_EOL . PHP_EOL, FILE_APPEND);
//file_put_contents('log.txt', print_r($response, true), FILE_APPEND);

//В трекер лид отстреливаем опционально
//file_get_contents($url_tracker_lead);
//
//if ($response->status != 'ok') {
//    //В трекер отмену отстреливаем опционально
//    file_get_contents($url_tracker_rejected);
//}

//echo "<pre>";
//print_r($_REQUEST);
//print_r($postdata);
//echo "<pre>";
//die();


if(!$fmod) {
    //на страницу спасибо 302 форма статическая
    header("Location: thanks/?pixel=" . $pixel);
}
else {
    //модальное окно
    $response = array(
        'success' => true,
    );
    header('Content-Type: application/json');
    echo json_encode($response);
}
exit();