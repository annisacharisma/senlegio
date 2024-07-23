<?php 
 
class M_data extends CI_Model{	
	function tampil_data_advertising(){
        return $this->db->get('advertising');
    }
    
    function tampil_data_animatedshorts(){
        return $this->db->get('animated_shorts');
    }
    
    function tampil_data_visualeffects(){
        return $this->db->get('visual_effects');
    } 

    function tampil_data_digiceleb(){
        return $this->db->get('digiceleb');
    }  
}