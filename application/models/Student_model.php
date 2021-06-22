<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model
{
    private $_table = "student";

    public $id;
    public $username;
    public $password;
    public $first_school_year;
    public $last_school_year;
    public $school_level;
    public $full_name;
    public $gender;
    public $birth_place;
    public $birth_date;
    public $address;
    public $village;
    public $sub_district;
    public $district;
    public $prev_school;
    public $graduation_year;
    public $phone;
    public $father_name;
    public $father_employment;
    public $mother_name;
    public $mother_employment;

    public function rules()
    {
        return [
            ['field' => 'username',
            // 'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'password',
            // 'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'first_school_year',
            // 'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'last_school_year',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'school_level',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'full_name',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'gender',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'birth_place',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'birth_date',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'address',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'father_name',
            // 'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'mother_name',
            // 'label' => 'Price',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();

        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->first_school_year = $post["first_school_year"];
        $this->last_school_year = $post["last_school_year"];
        $this->school_level = $post["school_level"];
        $this->full_name = strtoupper($post["full_name"]);
        $this->gender = strtoupper($post["gender"]);
        $this->birth_place = strtoupper($post["birth_place"]);
        $this->birth_date = $post["birth_date"];
        $this->address = strtoupper($post["address"]);
        $this->village = strtoupper($post["village"]);
        $this->sub_district = strtoupper($post["sub_district"]);
        $this->district = strtoupper($post["district"]);
        $this->prev_school = strtoupper($post["prev_school"]);
        $this->graduation_year = $post["graduation_year"];
        $this->phone = $post["phone"];
        $this->father_name = strtoupper($post["father_name"]);
        $this->father_employment = strtoupper($post["father_employment"]);
        $this->mother_name = strtoupper($post["mother_name"]);
        $this->mother_employment = strtoupper($post["mother_employment"]);
        
        return $this->db->insert($this->_table, $this);
    }

}