<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelTemp extends CI_Model
{
    public function getTemp()
    {
        return $this->db->get('temp');
    }
}
