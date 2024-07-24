<?php 
 
class M_data extends CI_Model{	
	function tampil_data_advertising(){
        return $this->db->get('advertising');
    }

    function tampil_advertising_indie($where, $table){
        return $this->db->get_where($table, $where);
    }
    
    function tampil_data_animatedshorts(){
        return $this->db->get('animated_shorts');
    }

    function tampil_animatedshorts_indie($where, $table){
        return $this->db->get_where($table, $where);
    }
    
    function tampil_data_visualeffects(){
        return $this->db->get('visual_effects');
    } 

function tampil_visualeffect_indie($where, $table){
        return $this->db->get_where($table, $where);
    }
	
    function tampil_data_digiceleb(){
        return $this->db->get('digiceleb');
    }
	
    function tampil_digiceleb_indie($where, $table){
        return $this->db->get_where($table, $where);
    }

    function tampil_table_advertising(){
        return $this->db->get('advertising');
    }

    function tampil_table_animatedshorts(){
        return $this->db->get('animated_shorts');
    }

    function tampil_table_visualeffects(){
        return $this->db->get('visual_effects');
    }

    function tampil_table_digiceleb(){
        return $this->db->get('digiceleb');
    }
}
