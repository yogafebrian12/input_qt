<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller{
	public function index(){
		$this->load->view('test');
	}

	public function setflash()
    {
        // set flash data
        $this->session->set_flashdata('flash_welcome', 'Hey, welcome to the site!');
         
        // mark existing data as flash data
        $this->session->set_userdata('flash_message', 'I am flash message!');
        $this->session->mark_as_flash('flash_message');
         
        redirect('test/getflash');
    }
     
    public function getflash() 
    {
        // get flash data
        echo "Flash welcome message: ". $this->session->flashdata('flash_welcome');
        echo '<pre>';
        print_r($this->session->flashdata());
    }
 
    public function tempdata() 
    {
        // set temp data
        $this->session->set_tempdata('coupon_code', 'XYEceQ!', 300);
 
        // mark existing data as temp data
        $this->session->set_userdata('coupon_code', 'Hendrick!');
        $this->session->mark_as_temp('coupon_code', 300);
         
        // get temp data
        echo $this->session->tempdata('coupon_code');
    }
 
    public function destroy()
    {
        $this->session->set_userdata('favourite_website', 'http://tutsplus.com');
         
        // destory session
        $this->session->sess_destroy();
    }

    public function tes1(){
        //echo base_url();
        $map = directory_map('./assets/photo_items');
        echo '<pre>';
        print_r($map);
        echo '</pre>';
    }

    public function tes2(){
        $this->load->view('test');
    }

    public function tes3(){
        echo $_FILES['foto']['name'];
        //echo $this->input->post('tes');
    }

    public function tes4(){
        echo '<img src="'.base_url().'assets/photo_items/05027.jpg" />';
    }
}?>