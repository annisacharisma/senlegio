<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_crud extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_edit');
    }

    public function edit_advertising($id_adv) {
        $data['advertising'] = $this->m_edit->get_data_advertising($id_adv);
        $this->load->view('v_admin_edit_adv', $data);
    }

    public function edit_animatedshorts($id_as) {
        $data['animated_shorts'] = $this->m_edit->get_data_animatedshorts($id_as);
        $this->load->view('v_admin_edit_as', $data);
    }

    
    public function edit_data_advertising() {
        $id_adv = $this->input->post('id_adv');
        
        $data = array(
            'title_adv' => $this->input->post('title_adv'),
            'description_adv' => $this->input->post('description_adv')
        );
        
        $image_fields = array('poster_adv', 'bg_adv', 'video_adv', 'image_adv1', 'image_adv2', 'image_adv3', 'image_adv4');
    
        foreach ($image_fields as $field) {
            if (!empty($_FILES[$field]['name'])) {
                $upload_path = './assets/images/';
                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
                $config['file_name'] = uniqid();
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload($field)) {
                    $upload_data = $this->upload->data();
                    $data[$field] = $upload_data['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    echo $error;
                }
            }
        }
    

        $result = $this->m_edit->edit_data_advertising($id_adv, $data);
        if ($result) {
            echo "Data berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data.";
        }
         
        redirect('c_upload');
    }       
    
    public function edit_data_animatedshorts() {
        $id_as = $this->input->post('id_as');
        
        $data = array(
            'title_as' => $this->input->post('title_as'),
            'description_as' => $this->input->post('description_as')
        );
        
        $image_fields = array('poster_as', 'bg_as', 'video_as', 'image_as1', 'image_as2', 'image_as3', 'image_as4', 'image_as5', 'image_as6', 'image_as7', 'image_as8', 'image_as9', 'image_as10');
    
        foreach ($image_fields as $field) {
            if (!empty($_FILES[$field]['name'])) {
                $upload_path = './assets/';
                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
                $config['file_name'] = uniqid();
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload($field)) {
                    $upload_data = $this->upload->data();
                    $data[$field] = $upload_path . $upload_data['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    echo $error;
                }
            }
        }
    
        $this->m_edit->edit_data_animatedshorts($id_as, $data);
        redirect('c_upload');
    }
}
