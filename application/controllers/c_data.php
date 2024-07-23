<?php 

class C_data extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('v_dashboard');
	}

	function data_advertising(){
        $dataadvertising = $this->m_data->tampil_data_advertising()->result();
        $data = array(
            'datamu' => $dataadvertising
        );
        $this->load->view('v_admin_advertising', $data);
    }

	function data_animatedshorts(){
        $dataanimatedshorts = $this->m_data->tampil_data_animatedshorts()->result();
        $data = array(
            'datamu' => $dataanimatedshorts
        );
        $this->load->view('v_admin_animatedshorts', $data);
    }

	function data_visualeffects(){
        $datavisualeffects = $this->m_data->tampil_data_visualeffects()->result();
        $data = array(
            'datamu' => $datavisualeffects
        );
        $this->load->view('v_admin_visualeffects', $data);
    }

	function data_digiceleb(){
        $datadigiceleb = $this->m_data->tampil_data_digiceleb()->result();
        $data = array(
            'datamu' => $datadigiceleb
        );
        $this->load->view('v_admin_digiceleb', $data);
    }
}