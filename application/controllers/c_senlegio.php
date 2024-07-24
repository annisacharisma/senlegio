<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_senlegio extends CI_Controller {
    function __construct(){
        parent::__construct();		
        $this->load->model('m_data');
        $this->load->helper('url');
    }

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
        $datadigiceleb = $this->m_data->tampil_data_digiceleb()->result();
	$data = array(
	'datamu' => $datadigiceleb
	);
	$this->load->view('digiceleb', $data);
    }

    public function show_visualeffect()
	{
		$datavisualeffect = $this->m_data->tampil_data_visualeffects()->result();
		$data = array(
			'datamu' => $datavisualeffect
		);
		$this->load->view('visualeffect', $data);
	}

    public function show_ourprocess()
    {
        $this->load->view('ourprocess');
    }

    public function show_animatedshorts()
    {
        $dataanimatedshorts = $this->m_data->tampil_data_animatedshorts()->result();
        $data = array(
            'datamu' => $dataanimatedshorts
        );
        $this->load->view('animatedshorts', $data);
    }

    public function show_advertising()
    {
        $dataadvertising = $this->m_data->tampil_data_advertising()->result();
        $data = array(
            'datamu' => $dataadvertising
        );
        $this->load->view('advertising', $data);
    }

    public function show_ve_project($id_ve)
	{
		$where = array('id_ve' => $id_ve);
		$data['visualeffect'] = $this->m_data->tampil_visualeffect_indie($where, 'visual_effects')->result();
		$this->load->view('visualeffect_TheMoors', $data);
	}

    public function show_adv_project($id_adv)
    {
        $where = array('id_adv' => $id_adv);
        $data['advertising'] = $this->m_data->tampil_advertising_indie($where, 'advertising')->result();
        $this->load->view('adv_truffsauce', $data);
    }

    public function show_as_project($id_as)
    {
        $where = array('id_as' => $id_as);
        $data['animated_shorts'] = $this->m_data->tampil_animatedshorts_indie($where, 'animated_shorts')->result();
        $this->load->view('shorts_Handlebar', $data);
    }

    public function show_digiceleb_project($id_dc)
    {
	$where = array('id_dc' => $id_dc);
	$data['digiceleb'] = $this->m_data->tampil_digiceleb_indie($where, 'digiceleb')->result();
	$this->load->view('digiceleb_adam', $data);
    }
    public function show_contact()
    {
        $this->load->view('index');
    }
}
