<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

    public function delete_ad($id_adv) {
        $this->db->where('id_adv', $id_adv);
        $this->db->delete('advertising');
    }

    public function get_all_ads() {
        $query = $this->db->get('advertising');
        return $query->result();
    }

    public function delete_as($id_as) {
        $this->db->where('id_as', $id_as);
        $this->db->delete('animated_shorts'); 
    }

    public function get_all_as() {
        $query = $this->db->get('animated_shorts');
        return $query->result();
    }

    public function delete_ve($id_ve) {
        $this->db->where('id_ve', $id_ve);
        $this->db->delete('visual_effects'); 
    }

    public function get_all_ve() {
        $query = $this->db->get('visual_effects');
        return $query->result();
    }

    public function delete_dc($id_dc) {
        $this->db->where('id_dc', $id_dc);
        $this->db->delete('digiceleb'); 
    }

    public function get_all_dc() {
        $query = $this->db->get('digiceleb');
        return $query->result();
    }
}
