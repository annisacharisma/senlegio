<!-- khusus controller -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_senlegio extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
    
	public function show_career()
	{
		$this->load->view('career');
	}
    public function show_digiceleb()
	{
		$this->load->view('digiceleb');
	}
    public function show_visualeffect()
	{
		$this->load->view('visualeffect');
	}
    public function show_ourprocess()
	{
		$this->load->view('ourprocess');
	}
    public function show_animatedshorts()
	{
		$this->load->view('animatedshorts');
	}
    public function show_advertising()
	{
		$this->load->view('advertising');
	}
	public function show_ve_project()
	{
		$this->load->view('visualeffect_TheMoors');
	}
	public function show_adv_project()
	{
		$this->load->view('adv_truffsauce');
	}
	public function show_as_project1()
	{
		$this->load->view('shorts_Handlebar');
	}
	public function show_as_project2()
	{
		$this->load->view('shorts_MarvelvsDC');
	}
	public function show_contact()
	{
		$this->load->view('index');
	}
}

