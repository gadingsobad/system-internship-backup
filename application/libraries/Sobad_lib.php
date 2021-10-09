<?php

class Sobad_lib
{
    protected $ci;

    public function  __construct()
    {
        $this->ci = &get_instance();
    }
    function user_login()
    {
        $this->ci->auth->curl_login();
        $data['data_user'] = $this->ci->session->userdata(['msg'][0]);
    }
}
