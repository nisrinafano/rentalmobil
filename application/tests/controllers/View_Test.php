<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_test
 *
 * @author Adrian
 */
class View_test extends TestCase {

     public function setUp() {
        $this->resetInstance();
        $this->CI->load->model('My_Model');
        $this->obj2 = $this->CI->My_Model;
    }
    
    public function test_login(){
         $output = $this->request('GET', 'MyController/admin/login');
    $this->assertContains('<meta name="viewport" content="width=device-width, initial-scale=1">', $output);
    } 
    
     public function test_order(){
         $output = $this->request('GET', 'MyController/admin/order');
    $this->assertContains('<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">', $output);
    } 
    
}