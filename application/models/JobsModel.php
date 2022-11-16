<?php
class JobsModel extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function get_jobs($slug = FALSE){
        if($slug === FALSE){
            $query = $this->db->get('jobs');
            return $query->result_array();
        }
        $query = $this->db->get_where('jobs',array('slug' => $slug));
        return $query->row_array();
    }
} 
