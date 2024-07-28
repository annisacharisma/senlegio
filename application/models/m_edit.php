<?php 
class M_edit extends CI_Model {

    public function get_data_advertising($id_adv) {
        $this->db->where('id_adv', $id_adv);
        $query = $this->db->get('advertising');
        return $query->row();
    }

    public function get_data_animatedshorts($id_as) {
        $this->db->where('id_as', $id_as);
        $query = $this->db->get('animated_shorts');
        return $query->row();
    }

    public function get_data_digiceleb($id_dc) {
        $this->db->where('id_dc', $id_dc);
        $query = $this->db->get('digiceleb');
        return $query->row();
    }

    public function get_data_visualeffects($id_ve) {
        $this->db->where('id_ve', $id_ve);
        $query = $this->db->get('visual_effects');
        return $query->row();
    }

    public function edit_data_advertising($id_adv, $data) {
        $this->db->where('id_adv', $id_adv);
        $result = $this->db->update('advertising', $data);
    }    

    public function edit_data_animatedshorts($id_as, $data) {
        $this->db->where('id_as', $id_as);
        return $this->db->update('animated_shorts', $data);
    }

    public function edit_data_digiceleb($id_dc, $data) {
        $this->db->where('id_dc', $id_dc);
        return $this->db->update('digiceleb', $data);
    }

    public function edit_data_visualeffects($id_ve, $data) {
        $this->db->where('id_ve', $id_ve);
        return $this->db->update('visual_effects', $data);
    }
}
