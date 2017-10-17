<?php
class Model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('My_Model');
        $this->obj = $this->CI->My_Model;
    }
    
    
     public function test_signup(){
        $awal2 = $this->obj->signUp_authen();
        $output = $this->request(
            'POST',
            ['Murid', 'daftarmurid'],
            [
            'email_murid' => 'brilianto2@gmail.com',
            'pass_murid' => 'asd',
            'nama_murid' => 'brilianto',
            'sex_murid' => 'laki-laki',
            'alamat_murid' => 'Mulyosari',
            'kecamatan_murid' => 'Mulyorejo',
            'kota_murid' => 'Aceh Barat',
            'hp_murid' => '081234155',
                ]
        $expected = $obj;
        $actual = $this->my->signUp_authen('adMin');
        $this->assertEquals($expected, $actual);
    }
       
}