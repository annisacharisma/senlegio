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

    public function edit_data_advertising($id_adv, $data) {
        $this->db->where('id_adv', $id_adv);
        $result = $this->db->update('advertising', $data);
    }    

    public function edit_data_animatedshorts($id_as, $data) {
        $this->db->where('id_as', $id_as);
        return $this->db->update('animated_shorts', $data);
    }
}
