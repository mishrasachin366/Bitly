<?php
/**
 * Created by PhpStorm.
 * User: sachin
 * Date: 10/7/19
 * Time: 12:33 PM
 */

namespace SachinTool;

class BitlyConnect
{
     /**
     * @param $client_id
     * @param $client_secret
     * @param $code
     * @param $redirect_uri
     */
    public function connect($client_id, $client_secret, $code, $redirect_uri)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api-ssl.bitly.com/oauth/access_token');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            'client_id='.$client_id.'&client_secret='.$client_secret.'&code='.$code.'&redirect_uri='.$redirect_uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
            
        return $response;
    }
    
     /**
     * @param $access_token
     * @param $video_url
     */
    public function share($access_token, $video_url)
    {
        $host_url = 'https://api-ssl.bitly.com/v3/shorten';

        $get_url = $host_url . '?' . 'access_token=' . $access_token . '&longUrl=' . $video_url;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $get_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        return $result;
    }
}
