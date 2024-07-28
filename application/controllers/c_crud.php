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

    public function edit_digiceleb($id_dc) {
        $data['digiceleb'] = $this->m_edit->get_data_digiceleb($id_dc);
        $this->load->view('v_admin_edit_dc', $data);
    }

    public function edit_visualeffects($id_ve) {
        $data['visual_effects'] = $this->m_edit->get_data_visualeffects($id_ve);
        $this->load->view('v_admin_edit_ve', $data);
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
        
        $image_fields = array('poster_as', 'bg_as', 'video_as', 'image_as1', 'image_as2', 'image_as3', 'image_as4', 'image_as5', 'image_as6', 'image_as7', 'image_as8');
    
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
    

        $result = $this->m_edit->edit_data_animatedshorts($id_as, $data);
        if ($result) {
            echo "Data berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data.";
        }
         
        redirect('c_data/data_animatedshorts');
    }

    public function edit_data_digiceleb() {
        $id_dc = $this->input->post('id_dc');
        
        $data = array(
            'title_dc' => $this->input->post('title_dc'),
            'description_line1' => $this->input->post('description_line1'),
            'description_line2' => $this->input->post('description_line2'),
            'description_line3' => $this->input->post('description_line3'),
            'instagram' => $this->input->post('instagram'),
        );
        
        $image_fields = array('poster_dc', 'bg_dc', 'image_dc1', 'image_dc2');
    
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
    

        $result = $this->m_edit->edit_data_digiceleb($id_dc, $data);
        if ($result) {
            echo "Data berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data.";
        }
         
        redirect('c_data/data_digiceleb');
    }

    public function edit_data_visualeffects() {
        $id_ve = $this->input->post('id_ve');
        
        $data = array(
            'title_ve' => $this->input->post('title_ve'),
            'description_ve' => $this->input->post('description_ve')
        );
        
        $image_fields = array('poster_ve', 'bg_ve', 'image_ve1', 'image_ve2', 'image_ve3', 'image_ve4', 'video_ve1', 'video_ve2', 'video_ve3', 'video_ve4', 'video_ve5');
    
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
    

        $result = $this->m_edit->edit_data_visualeffects($id_ve, $data);
        if ($result) {
            echo "Data berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data.";
        }
         
        redirect('c_data/data_visualeffects');
    }
}
