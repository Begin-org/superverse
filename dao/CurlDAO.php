<?php

class CurlDAO
{

    public static function getCurl($url)
    {
        $curl = curl_init();
        CurlDAO::configureCurl($curl, $url);
        return $curl;
    }
    private static function configureCurl($curl, $url)
    {
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_TIMEOUT, 5);
        curl_setopt($curl, CURLOPT_URL, $url);
    }

    public static function closeCurl($curl){
        curl_close($curl);
    }
}
