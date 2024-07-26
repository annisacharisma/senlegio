<?php

class Crud_model extends CI_Model {


    public function get_all_adv() {
        $query = $this->db->get('advertising');
        return $query->result();
    }
        public function delete_ad($id_adv) {
            $file_info = $this->get_file_info_adv('advertising', 'id_adv', $id_adv);
            
            if ($file_info) {

                $file_path = './assets/images/' . $file_info->poster_adv;
    
                log_message('debug', 'File path: ' . $file_path);
    
                if (file_exists($file_path)) {
                    if (unlink($file_path)) {
                        log_message('debug', 'File deleted successfully: ' . $file_path);
                    } else {
                        log_message('error', 'Failed to delete file: ' . $file_path);
                    }
                } else {
                    log_message('error', 'File does not exist: ' . $file_path);
                }
                
                $this->db->where('id_adv', $id_adv);
                $this->db->delete('advertising');
    
                if ($this->db->affected_rows() > 0) {
                    log_message('debug', 'Database record deleted successfully for ID: ' . $id_adv);
                } else {
                    log_message('error', 'Failed to delete database record for ID: ' . $id_adv);
                }
            } else {
                log_message('error', 'No file info found for ID: ' . $id_adv);
            }
        }
    
        private function get_file_info_adv($table, $id_column, $id) {
            $this->db->select('poster_adv'); 
            $this->db->where($id_column, $id);
            return $this->db->get($table)->row();
        }

    
        public function get_all_as() {
            $query = $this->db->get('animated_shorts');
            return $query->result();
        }
        
            public function delete_as($id_as) {
                $file_info = $this->get_file_info_as('animated_shorts', 'id_as', $id_as);
                
                if ($file_info) {
                    $file_path = './assets/images/' . $file_info->poster_as;
        
                    log_message('debug', 'File path: ' . $file_path);
        
                    if (file_exists($file_path)) {
                        if (unlink($file_path)) {
                            log_message('debug', 'File deleted successfully: ' . $file_path);
                        } else {
                            log_message('error', 'Failed to delete file: ' . $file_path);
                        }
                    } else {
                        log_message('error', 'File does not exist: ' . $file_path);
                    }
                    
                    $this->db->where('id_as', $id_as);
                    $this->db->delete('animated_shorts');
        
                    if ($this->db->affected_rows() > 0) {
                        log_message('debug', 'Database record deleted successfully for ID: ' . $id_as);
                    } else {
                        log_message('error', 'Failed to delete database record for ID: ' . $id_as);
                    }
                } else {
                    log_message('error', 'No file info found for ID: ' . $id_as);
                }
            }
        
            private function get_file_info_as($table, $id_column, $id) {
                $this->db->select('poster_as');
                $this->db->where($id_column, $id);
                return $this->db->get($table)->row();
            }
    
            public function get_all_ve() {
                $query = $this->db->get('visual_effects');
                return $query->result();
            }
            
                public function delete_ve($id_ve) {
                    $file_info = $this->get_file_info_ve('visual_effects', 'id_ve', $id_ve);
                    
                    if ($file_info) {
                        $file_path = './assets/images/' . $file_info->poster_ve;
            
                        log_message('debug', 'File path: ' . $file_path);
            
                        if (file_exists($file_path)) {
                            if (unlink($file_path)) {
                                log_message('debug', 'File deleted successfully: ' . $file_path);
                            } else {
                                log_message('error', 'Failed to delete file: ' . $file_path);
                            }
                        } else {
                            log_message('error', 'File does not exist: ' . $file_path);
                        }
                        
                        $this->db->where('id_ve', $id_ve);
                        $this->db->delete('visual_effects');
            
                        if ($this->db->affected_rows() > 0) {
                            log_message('debug', 'Database record deleted successfully for ID: ' . $id_ve);
                        } else {
                            log_message('error', 'Failed to delete database record for ID: ' . $id_ve);
                        }
                    } else {
                        log_message('error', 'No file info found for ID: ' . $id_ve);
                    }
                }
            
                private function get_file_info_ve($table, $id_column, $id) {
                    $this->db->select('poster_ve');
                    $this->db->where($id_column, $id);
                    return $this->db->get($table)->row();
                }
    
                public function get_all_dc() {
                    $query = $this->db->get('digiceleb');
                    return $query->result();
                }
                
                    public function delete_dc($id_dc) {
                        $file_info = $this->get_file_info_dc('digiceleb', 'id_dc', $id_dc);
                        
                        if ($file_info) {
                            $file_path = './assets/images/' . $file_info->poster_dc;
                
                            log_message('debug', 'File path: ' . $file_path);
                
                            if (file_exists($file_path)) {
                                if (unlink($file_path)) {
                                    log_message('debug', 'File deleted successfully: ' . $file_path);
                                } else {
                                    log_message('error', 'Failed to delete file: ' . $file_path);
                                }
                            } else {
                                log_message('error', 'File does not exist: ' . $file_path);
                            }
                            
                            $this->db->where('id_dc', $id_dc);
                            $this->db->delete('digiceleb');
                
                            if ($this->db->affected_rows() > 0) {
                                log_message('debug', 'Database record deleted successfully for ID: ' . $id_dc);
                            } else {
                                log_message('error', 'Failed to delete database record for ID: ' . $id_dc);
                            }
                        } else {
                            log_message('error', 'No file info found for ID: ' . $id_dc);
                        }
                    }
                
                    private function get_file_info_dc($table, $id_column, $id) {
                        $this->db->select('poster_dc');
                        $this->db->where($id_column, $id);
                        return $this->db->get($table)->row();
                    }
        
}
