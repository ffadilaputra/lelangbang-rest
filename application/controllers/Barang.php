<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Barang extends REST_Controller {

    function __construct($config = 'rest'){
        parent::__construct($config);
        $this->load->database();
        $this->table = 'tb_barang';
        $this->joine = 'tb_kategori';
        $this->id = 'id_barang';
        $this->wildcard = 'id_kategori = fk_kategori';
    }

    function index_get(){
        $id = $this->get($this->id);
        if ($id == '') {
            $this->db->select('id_barang,nama_barang,nama_kategori,deskripsi,open_bid');
            $this->db->from($this->table);
            $this->db->join($this->joine,$this->wildcard);
            $kat = $this->db->get()->result();
            
        }else{
            $this->db->where($this->id,$id);
            $kat = $this->db->get($this->table)->result();
        }
        $this->response($kat,200);
    }

    function index_post(){
        $data = $this->input->post();
        $insert = $this->db->insert($this->table,$data);
        if ($insert) {
            $this->response($data,200);
        }else{
             $this->response(array('status' => 'fail',502));
        }
    }

    function index_put(){
        $id = $this->put($this->id);
        $data = $this->put();
        $this->db->where($this->id,$id);
        $update = $this->db->update($this->table,$data);
        if ($update) {
          $this->response($data,200);
          var_dump($this->put());
        }else{
          $this->response(array('status' => 'fail',502));
        }
    }

    function index_delete(){
        $id = $this->delete($this->id);
        $this->db->where($this->id,$id);
        $delete = $this->db->delete($this->table);
        if ($delete) {
          $this->response(array('status' => 'success'),201);
        }else {
          $this->response(array('status' => 'fail'),502);
        }
    }


}