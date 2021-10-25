<?php
defined('BASEPATH') or exit("No direct script access allowed");

require_once('vendor/autoload.php');

use Dompdf\Dompdf;

class Dompdf_gen
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function image_upload()
    {
    }
}
