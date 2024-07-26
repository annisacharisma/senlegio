<?php 

class C_upload extends CI_Controller {

    public function proses()
    {
        $this->load->library('upload');

        // Configure upload for each file
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|mp4';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $data = [];
        $data['title_adv'] = $this->input->post('title_adv');
        $data['description_adv'] = $this->input->post('description_adv');

        // Upload and save poster_adv
        if ($this->upload->do_upload('poster_adv')) {
            $upload_data = $this->upload->data();
            $data['poster_adv'] = $upload_data['file_name'];
        }

        // Upload and save bg_adv
        if ($this->upload->do_upload('bg_adv')) {
            $upload_data = $this->upload->data();
            $data['bg_adv'] = $upload_data['file_name'];
        }

        // Upload and save image_adv1
        if ($this->upload->do_upload('image_adv1')) {
            $upload_data = $this->upload->data();
            $data['image_adv1'] = $upload_data['file_name'];
        }

        // Upload and save image_adv2
        if ($this->upload->do_upload('image_adv2')) {
            $upload_data = $this->upload->data();
            $data['image_adv2'] = $upload_data['file_name'];
        }

        // Upload and save image_adv3
        if ($this->upload->do_upload('image_adv3')) {
            $upload_data = $this->upload->data();
            $data['image_adv3'] = $upload_data['file_name'];
        }

        // Upload and save image_adv4
        if ($this->upload->do_upload('image_adv4')) {
            $upload_data = $this->upload->data();
            $data['image_adv4'] = $upload_data['file_name'];
        }

        // Upload and save video_adv
        if ($this->upload->do_upload('video_adv')) {
            $upload_data = $this->upload->data();
            $data['video_adv'] = $upload_data['file_name'];
        }

        // Insert data into the database
        $this->db->insert('advertising', $data);

        // Redirect to the main page
        redirect('c_upload');
    }

    public function index()
    {
        $data['poster_adv'] = $this->db->get('advertising');
        $this->load->view('v_admin_advertising', $data);
    }

    public function proses_dc()
    {
        $this->load->library('upload');

        // Configure upload for each file
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|mp4';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $data = [];
        $data['title_dc'] = $this->input->post('title_dc');
        $data['description_line1'] = $this->input->post('description_line1');
        $data['description_line2'] = $this->input->post('description_line2');
        $data['description_line3'] = $this->input->post('description_line3');
        $data['instagram'] = $this->input->post('instagram');

        // Upload and save poster_dc
        if ($this->upload->do_upload('poster_dc')) {
            $upload_data = $this->upload->data();
            $data['poster_dc'] = $upload_data['file_name'];
        }

        // Upload and save bg_dc
        if ($this->upload->do_upload('bg_dc')) {
            $upload_data = $this->upload->data();
            $data['bg_dc'] = $upload_data['file_name'];
        }

        // Upload and save image_dc1
        if ($this->upload->do_upload('image_dc1')) {
            $upload_data = $this->upload->data();
            $data['image_dc1'] = $upload_data['file_name'];
        }

        // Upload and save image_dc2
        if ($this->upload->do_upload('image_dc2')) {
            $upload_data = $this->upload->data();
            $data['image_dc2'] = $upload_data['file_name'];
        }

        // Insert data into the database
        $this->db->insert('digiceleb', $data);

        // Redirect to the main page
        redirect('c_data/data_digiceleb');
    }
    public function load_dc()
    {
        $data['poster_dc'] = $this->db->get('digiceleb')->result();
        $this->load->view('v_admin_digiceleb', $data);
    }
}

