<?php 

class C_upload extends CI_Controller {


    function proses()
    {
        $config['upload_path']          = './assets/images';
        $config['allowed_types']        = 'jpg|png|mp4';
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('poster_adv'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_admin_table_adv', $error);
        }
        else
        {
        $upload_data = $this->upload->data();
        $data['title_adv'] = $this->input->post('title_adv');
        $data['poster_adv'] = $upload_data['file_name'];
        $data['bg_adv'] = $upload_data['file_name'];
        $data['description_adv'] = $this->input->post('description_adv');
        $data['image_adv1'] = $upload_data['file_name'];
        $data['image_adv2'] = $upload_data['file_name'];
        $data['image_adv3'] = $upload_data['file_name'];
        $data['image_adv4'] = $upload_data['file_name'];
        $data['video_adv'] = $upload_data['file_name'];
        
        $this->db->insert('advertising', $data);
        redirect('c_upload');
        }
    }


    public function index()
    {
        $data['poster_adv'] = $this->db->get('advertising');
        $this->load->view('v_admin_advertising',$data);
    }
}


