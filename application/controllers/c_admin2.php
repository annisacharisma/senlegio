<?php

class C_admin2 extends CI_Controller {

    function __construct() {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }

        $this->load->model('Crud_model');
    }

    function index() {
        $this->load->view('v_dashboard');
    }

    function data_advertising() {
        $id_adv = $this->input->get('hapus_ad');

        if ($id_adv) {
            $this->Crud_model->delete_ad($id_adv);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('c_admin2/data_advertising');
        }

        $data['datamu'] = $this->Crud_model->get_all_adv();
        $this->load->view('v_admin_advertising', $data);
    }

    function data_animatedshorts() {
        $id_as = $this->input->get('hapus_as');

        if ($id_as) {
            $this->Crud_model->delete_as($id_as);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('c_admin2/data_animatedshorts');
        }

        $data['datamu'] = $this->Crud_model->get_all_as();
        $this->load->view('v_admin_animatedshorts', $data);
    }

    function data_visualeffects() {
        $id_ve = $this->input->get('hapus_ve');

        if ($id_ve) {
            $this->Crud_model->delete_ve($id_ve);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('c_admin2/data_visualeffects');
        }

        $data['datamu'] = $this->Crud_model->get_all_ve();
        $this->load->view('v_admin_visualeffects', $data);
    }

    function data_digiceleb() {
        $id_dc = $this->input->get('hapus_dc');

        if ($id_dc) {
            $this->Crud_model->delete_dc($id_dc);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('c_admin2/data_digiceleb');
        }

        $data['datamu'] = $this->Crud_model->get_all_dc();
        $this->load->view('v_admin_digiceleb', $data);
    }
}
?>
