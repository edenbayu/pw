<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $_table = "user_bayu";

    public $nama_bayu;
    public $username_bayu;
    public $password_bayu;
    public $level_bayu;
//    public $image = "default.jpg";
//    public $description;

    public function rules()
    {
        return [
            ['field' => 'nama_bayu',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'username_bayu',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password_bayu',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'level_bayu',
            'label' => 'Level',
            'rules' => 'required'],
        ];
        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_bayu" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_bayu = $post["nama_bayu"];
        $this->username_bayu = $post["username_bayu"];
        $this->password_bayu = $post["password_bayu"];
        $this->level_bayu = $post["level_bayu"];
        //$this->description = $post["description"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $this->load->view("menu");
        $post = $this->input->post();
        $this->nama_bayu = $post["nama_bayu"];
        $this->username_bayu = $post["username_bayu"];
        $this->password_bayu = $post["password_bayu"];
        $this->level_bayu = $post["level_bayu"];
       // $this->description = $post["description"];
        return $this->db->update($this->_table, $this, array('id_bayu' => $post['id_bayu']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_bayu" => $id));
    }

    public function caridata($keyword)
    {
	    if(!$keyword){
		return null;
	    }
	    $this->db->like('nama_bayu', $keyword);
	    $this->db->or_like('username_bayu', $keyword);
	    $query = $this->db->get($this->_table);
	    return $query->result();
    }

}