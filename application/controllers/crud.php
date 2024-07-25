<?php 
 
class Crud extends CI_Controller {
    
    public function hapus_ad($id_adv) {
        // Load model
        $this->load->model('Crud_model');
        
        // Call the delete function from the model
        $this->Crud_model->delete_ad($id_adv);
        
        // Redirect to the list page or any other page
        redirect('path_to_redirect_after_delete');
    }

    public function hapus_as($id_as) {

        $this->load->model('Crud_model');
        
        $this->Crud_model->delete_as($id_as);
        
        redirect('path_to_redirect_after_delete');
    }

    public function hapus_ve($id_ve) {

        $this->load->model('Crud_model');
        
        $this->Crud_model->delete_ve($id_ve);
        
        redirect('path_to_redirect_after_delete');
    }

    public function hapus_dc($id_dc) {

        $this->load->model('Crud_model');
        
        $this->Crud_model->delete_dc($id_dc);
        
        redirect('path_to_redirect_after_delete');
    }
}

 
