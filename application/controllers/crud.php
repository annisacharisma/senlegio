<?php

class Crud extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->helper('url');
        $this->load->helper('file'); // Memuat helper file
    }

    // Method untuk menghapus data advertising
    public function hapus_ad($id_adv) {
        $this->Crud_model->delete_ad($id_adv);
        $this->session->set_flashdata('message', 'Data berhasil dihapus');
        redirect('c_admin2/data_advertising');
    }

    // Method untuk menghapus animated shorts
    public function hapus_as($id_as) {
        $this->Crud_model->delete_as($id_as);
        $this->session->set_flashdata('message', 'Data berhasil dihapus');
        redirect('c_admin2/data_animatedshorts');
    }

    // Method untuk menghapus visual effects
    public function hapus_ve($id_ve) {
        $this->Crud_model->delete_ve($id_ve);
        $this->session->set_flashdata('message', 'Data berhasil dihapus');
        redirect('c_admin2/data_visualeffects');
    }

    // Method untuk menghapus digital celebrity
    public function hapus_dc($id_dc) {
        $this->Crud_model->delete_dc($id_dc);
        $this->session->set_flashdata('message', 'Data berhasil dihapus');
        redirect('c_admin2/data_digiceleb');
    }
}
