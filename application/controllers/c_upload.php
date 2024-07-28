<?php 

class C_upload extends CI_Controller {
// kode proses input adv
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

    // kode proses input dc
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
    
    // kode proses input as
    public function proses_as()
    {
        $this->load->library('upload');

        // Configure upload for each file
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|mp4';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $data = [];
        $data['title_as'] = $this->input->post('title_as');
        $data['description_as'] = $this->input->post('description_as');
        
        // Upload and save poster_as
        if ($this->upload->do_upload('poster_as')) {
            $upload_data = $this->upload->data();
            $data['poster_as'] = $upload_data['file_name'];
        }

        // Upload and save bg_as
        if ($this->upload->do_upload('bg_as')) {
            $upload_data = $this->upload->data();
            $data['bg_as'] = $upload_data['file_name'];
        }

        // Upload and save image_as1
        if ($this->upload->do_upload('image_as1')) {
            $upload_data = $this->upload->data();
            $data['image_as1'] = $upload_data['file_name'];
        }

        // Upload and save image_as2
        if ($this->upload->do_upload('image_as2')) {
            $upload_data = $this->upload->data();
            $data['image_as2'] = $upload_data['file_name'];
        }

        if ($this->upload->do_upload('image_as3')) {
            $upload_data = $this->upload->data();
            $data['image_as3'] = $upload_data['file_name'];
        }
        if ($this->upload->do_upload('image_as4')) {
            $upload_data = $this->upload->data();
            $data['image_as4'] = $upload_data['file_name'];
        }
        if ($this->upload->do_upload('image_as5')) {
            $upload_data = $this->upload->data();
            $data['image_as5'] = $upload_data['file_name'];
        }
        if ($this->upload->do_upload('image_as6')) {
            $upload_data = $this->upload->data();
            $data['image_as6'] = $upload_data['file_name'];
        }
        if ($this->upload->do_upload('image_as7')) {
            $upload_data = $this->upload->data();
            $data['image_as7'] = $upload_data['file_name'];
        }
        if ($this->upload->do_upload('image_as8')) {
            $upload_data = $this->upload->data();
            $data['image_as8'] = $upload_data['file_name'];
        }
        if ($this->upload->do_upload('video_as')) {
            $upload_data = $this->upload->data();
            $data['video_as'] = $upload_data['file_name'];
        }
        // Insert data into the database
        $this->db->insert('animated_shorts', $data);
        // Redirect to the main page
        redirect('c_data/data_animatedshorts');
    }
    public function load_as()
    {
        $data['poster_as'] = $this->db->get('animated_shorts')->result();
        $this->load->view('v_admin_animatedshorts', $data);
    }

// kode proses input ve
    public function proses_ve()
{
    $this->load->library('upload');

    // Configure upload for each file
    $config['upload_path'] = './assets/images/';
    $config['allowed_types'] = 'jpg|png|mp4';
    $config['encrypt_name'] = TRUE;

    $this->upload->initialize($config);

    $data = [];
    $data['title_ve'] = $this->input->post('title_ve');
    $data['description_ve'] = $this->input->post('description_ve');
    
    // Upload and save poster_ve
    if ($this->upload->do_upload('poster_ve')) {
        $upload_data = $this->upload->data();
        $data['poster_ve'] = $upload_data['file_name'];
    }

    // Upload and save bg_ve
    if ($this->upload->do_upload('bg_ve')) {
        $upload_data = $this->upload->data();
        $data['bg_ve'] = $upload_data['file_name'];
    }

    // Upload and save image_ve1
    if ($this->upload->do_upload('image_ve1')) {
        $upload_data = $this->upload->data();
        $data['image_ve1'] = $upload_data['file_name'];
    }

    // Upload and save image_ve2
    if ($this->upload->do_upload('image_ve2')) {
        $upload_data = $this->upload->data();
        $data['image_ve2'] = $upload_data['file_name'];
    }

    if ($this->upload->do_upload('image_ve3')) {
        $upload_data = $this->upload->data();
        $data['image_ve3'] = $upload_data['file_name'];
    }
    if ($this->upload->do_upload('image_ve4')) {
        $upload_data = $this->upload->data();
        $data['image_ve4'] = $upload_data['file_name'];
    }
    if ($this->upload->do_upload('video_ve1')) {
        $upload_data = $this->upload->data();
        $data['video_ve1'] = $upload_data['file_name'];
    }
    if ($this->upload->do_upload('video_ve2')) {
        $upload_data = $this->upload->data();
        $data['video_ve2'] = $upload_data['file_name'];
    }
    if ($this->upload->do_upload('video_ve3')) {
        $upload_data = $this->upload->data();
        $data['video_ve3'] = $upload_data['file_name'];
    }
    if ($this->upload->do_upload('video_ve4')) {
        $upload_data = $this->upload->data();
        $data['video_ve4'] = $upload_data['file_name'];
    }
    if ($this->upload->do_upload('video_ve5')) {
        $upload_data = $this->upload->data();
        $data['video_ve5'] = $upload_data['file_name'];
    }
    // Insert data into the database
    $this->db->insert('visual_effects', $data);
    // Redirect to the main page
    redirect('c_data/data_visualeffects');
}
public function load_ve()
{
    $data['poster_ve'] = $this->db->get('visual_effects')->result();
    $this->load->view('v_admin_visualeffects', $data);
}

}

   
