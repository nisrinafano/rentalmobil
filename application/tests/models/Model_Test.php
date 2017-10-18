<?php
class My_Model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('My_Model');
        $this->model = $this->CI->My_Model;
    }
    
    
     public function test_signup(){
        
        $expected = 'true';
        $actual = $this->model->signUp_authen('admin','admin');
        $this->assertEquals($expected, $actual);
    }
    
     public function test_signup1(){
        
        $expected = 'false';
        $actual = $this->model->signUp_authen('admin','121212admin');
        $this->assertEquals($expected, $actual);
    }
       
}