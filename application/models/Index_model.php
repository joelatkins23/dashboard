<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function city_lastweek_norms(){
        $this->db->select('*')
            ->from('emo_city_lastweek_norms');   
        $query = $this->db->get();       
        $res = $query->result_array();       
        return $res;
    }
    public function city_lastweek_counts(){
        $this->db->select('*')
            ->from('emo_city_lastweek_counts');   
        $query = $this->db->get();       
        $res = $query->result_array();       
        return $res;
    }
    public function city_daily_norms(){
        $this->db->select('*')
            ->from('emo_city_daily_norms');   
        $query = $this->db->get();       
        $res = $query->result_array();       
        return $res;
    }
    public function city_daily_counts(){
        $this->db->select('*')
            ->from('emo_city_daily_counts');   
        $query = $this->db->get();       
        $res = $query->result_array();       
        return $res;
    }
    public function lang_lastweek_norms(){
        $this->db->select('*')
            ->from('emo_lang_lastweek_norms');   
        $query = $this->db->get();       
        $res = $query->result_array();       
        return $res;
    }
    public function lang_lastweek_counts(){
        $this->db->select('*')
            ->from('emo_lang_lastweek_counts');   
        $query = $this->db->get();       
        $res = $query->result_array();       
        return $res;
    }   
    public function tweet_count(){
        $this->db->select('*')
            ->from('emo_lastweek_count');   
        $query = $this->db->get(); 
        $res=$query->result_array();          
        return $res[0]['emo_count'];
    }
    public function positive_score(){
        $this->db->select('*')
            ->from('emo_positive_lastweek_norm');   
        $query = $this->db->get();       
        $res=$query->result_array() ;         
        return $res[0]['emo_normalized'];
    }
    public function negative_score(){
        $this->db->select('*')
            ->from('emo_negative_lastweek_norm');   
        $query = $this->db->get();       
        $res=$query->result_array() ;         
        return $res[0]['emo_normalized'];
    }
}
?>
