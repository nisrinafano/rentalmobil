<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_test extends TestCase {
    
    public function setUp() {
        $this->resetInstance();
        $this->CI->load->model('My_Model');
        $this->obj2 = $this->CI->My_Model;
    }
    
    public function test_login (){
         $output = $this->request(
                'POST', ['MyController', 'login'], [
                'username' => 'admin',
                'pass' => 'admin',
                
                ]
             
        );
      //  $this->assertRedirect('login');
        $this->assertContains('<title>RENTAL MOBIL | Read Katalog</title>', $output);
    }
    
    public function test_index (){
         $output = $this->request(
                'POST', ['MyController', 'index'], [
                'username' => 'admin',
                'pass' => 'admin',
                
                ]
        );
        $this->assertContains('<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">RENTAL<span>MOBIL</span></a></h1>', $output);
    }
    
     public function test_index2 (){
         $output = $this->request(
                'POST', ['MyController', 'index1'], [
                ]
        );
      //  $this->assertRedirect('login');
        $this->assertContains('<div class="women simpleCart_shelfItem">', $output);
    }
    
    public function test_admin (){
         $output = $this->request(
                'POST', ['MyController', 'admin'], [
                
                ]
        );
        $this->assertContains('<meta name="viewport" content="width=device-width, initial-scale=1">', $output);
    }
    
    public function test_contact (){
         $output = $this->request(
                'POST', ['MyController', 'contact'], [
                
                ]
        );
        $this->assertContains('<meta name="viewport" content="width=device-width, initial-scale=1">', $output);
    }
    
    public function test_adminin (){
         $output = $this->request(
                'POST', ['MyController', 'adminin'], [
                
                ]
        );
        $this->assertContains('<meta name="viewport" content="width=device-width, initial-scale=1">', $output);
    }
    
    public function test_order (){
         $output = $this->request(
                'POST', ['MyController', 'order'], [
                
                ]
        );
        $this->assertContains('<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">Rental<span>Mobil</span></a></h1>', $output);
    }
    
    public function test_adminorder (){
         $output = $this->request(
                'POST', ['MyController', 'adminorder'], [
                
                ]
        );
        $this->assertContains('<div class="panel panel-default">', $output);
    }
    
    public function test_admincontact (){
         $output = $this->request(
                'POST', ['MyController', 'admincontact'], [
                
                ]
        );
        $this->assertContains('<a class="navbar-brand" href="#"><span>RENTAL MOBIL | </span>Admin</a>', $output);
    }
    
    public function test_prod (){
         $output = $this->request(
                'POST', ['MyController', 'prod'], [
                
                ]
        );
        $this->assertContains('<meta name="viewport" content="width=device-width, initial-scale=1">', $output);
    }
    
    public function test_readkatalog (){
         $output = $this->request(
                'POST', ['MyController', 'readkatalog'], [
                
                ]
        );
        $this->assertContains('<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">', $output);
    }
    
    public function test_getdetail (){
         $output = $this->request(
                'POST', ['MyController', 'getdetail','101'], [
                
                ]
        );
        $this->assertContains('<p > <h3>Nomor Polisi Kendaraan : </h3>N1234nm </p>', $output);
    }
    
    public function test_getdetail2 (){
         $output = $this->request(
                'POST', ['MyController', 'getdetail',], [
                
                ]
        );
        $this->assertContains('tidak ditemukan', $output);
    }
    
    public function test_getdetail1 (){
         $output = $this->request(
                'GET', ['MyController', 'getdetail1','101']
        );
        $this->assertContains('<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">Rental<span>Mobil</span></a></h1>', $output);
    }
    
    public function test_createcontact (){
         $output = $this->request(
                'POST', ['MyController', 'createcontact',], [
                
                ]
        );
        $this->assertContains('<div class="clearfix"></div>', $output);
    }  
    
     public function test_createorder (){
         $output = $this->request(
                'POST', ['MyController', 'createorder',], [
                
                ]
        );
        $this->assertContains('<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">Rental<span>Mobil</span></a></h1>', $output);
    }  
    
       
     public function test_createkatalog (){
         $output = $this->request(
                'POST', ['MyController', 'createkatalog',], [
                
                ]
        );
        $this->assertContains('<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>', $output);
    }  
    
    public function test_dashboard (){
         $output = $this->request(
                'POST', ['MyController', 'dashboard',], [
                
                ]
        );
        $this->assertContains('<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span', $output);
    }  
    
    public function test_signup (){
         $output = $this->request(
                'POST', ['MyController', 'signup',], [
                
                ]
        );
        $this->assertContains(' <input type="submit" name="submit" value="SIGN UP">', $output);
    }  
    
    public function test_contactus (){
         $output = $this->request(
                'POST', ['MyController', 'contactus'], [
                            
                'nama' => 'endar',
                'email' => 'endarsasmito1@gmail.com',  
                'judul' => 'avanza',
                'isi' => 'pesan',
                'tglContact' => '12012017',  
            ]
        );
        $this->assertContains('<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Contact Us</h2>', $output);
    }  
    
    public function test_createuser (){
         $output = $this->request(
                'POST', ['MyController', 'createUser'], [
                            
                'first' => 'endar',  
                'last' => 'sasmito',
                'nohp' => '12213123',
                'email' => 'endar@gmail.com',
                'jeniskelamin' => 'Male',
                'username' => 'admin999',
                'pass' => 'admin999',
            ]
                  
        );
        $this->assertContains('<title>Sign Up</title>', $output);
    }  
    
     public function test_updatekatalog (){
         $output = $this->request(
                'POST', ['MyController', 'updatekatalog'], [
                            
                "idKendaraan"=> '101',
		"merkKendaraan"=> 'avanza',
		"namaKendaraan"=> 'mobil',
		"hargaSewa"=> '100000',
			
		"nopolKendaraan"=> 'N1234nm',
		"idPemilik"=> '123',
		
		'fotoKendaraan' => '123',
		'gambarbrg_model' => '123', 
            ]
        );
        $this->assertContains('<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>', $output);
    }  
    
    public function test_doupdate (){
            
        $_SESSION['username'] = "admin";
        $_SESSION['pass'] = "admin";
                $output = $this->request(
                'POST', ['MyController', 'doupdate'], [
                            
                "idKendaraan"=> '102',
		"merkKendaraan"=> 'tes',
		"namaKendaraan"=> 'tes',
		"hargaSewa"=> '150000',
			
		"nopolKendaraan"=> 'L 4576 TY',
		"idPemilik"=> '2147483647',
		
		'fotoKendaraan' => 'agya19.png',
		'gambarbrg_model' => 'agya19.png', 
            ]
        );
        $output = $this->request('GET', 'MyController/getDetail/102');
        $this->assertContains('<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Detail Product</h2>', $output);
        
    }  
    
    public function test_create (){
         $output = $this->request(
                'POST', ['MyController', 'create',], [
                    'idKendaraan' => '999',
                    'merkKendaraan' => 'tes',
                    'namaKendaraan' => 'tes',
                    "hargaSewa"=> '250000',
			
                    "nopolKendaraan"=> 'N 4423 PI ',
                    "idPemilik"=> '2147483647',

                    'fotoKendaraan' => 'agya19.png',
                    'gambarbrg_model' => 'agya19.png', 
                ]
        );
        $output = $this->request('GET', 'MyController/getDetail/999');
        $this->assertContains('<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">', $output);
        $this->request(
                'POST', ['MyController', 'deletekatalog'],[
                 
                    'item' => '999'
                 ]      
                
           );
        $output = $this->request('GET', 'MyController/getDetail/999');
        $this->assertContains('<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Detail Product</h2>', $output);
    }  
    
    public function test_orderr (){
         $output = $this->request(
                'POST', ['MyController', 'orderr'], [
                            
                'namalengkap' => 'endar',
                'email' => 'endar@gmail.com',  
                'alamat' => 'surabaya',
                'nohp' => '12213123',
                'noktp' => '1231241',
                'namakendaraan' => 'toyota',
                'jumlahkendaraan' => '2',
                'durasipeminjaman' => '2',
            ]
        );
        $this->assertContains('input type="text" name= "email" placeholder=""required="">', $output);
    }  
      
}
