<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Guest_model extends CI_Model
{
    private $_table = "guest";

    public $full_name;
    public $address;
    public $phone;

    public function rules()
    {
        return [
            ['field' => 'full_name',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'address',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'phone',
            // 'label' => 'Price',
            'rules' => 'required'],
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->full_name = $post["full_name"];
        $this->address = $post["address"];
        $this->phone = $post["phone"];
        return $this->db->insert($this->_table, $this);
    }
}