<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ModelMitra extends CI_Model
{
	private $_table = 'mitra';

	public function rules()
	{
		return [
		['field' => 'nama_mitra',
		 'label' => 'Name',
		 'rules' => 'required'],

		['field' => 'wilayah',
		 'label' => 'Region',
		 'rules' => 'required'],
		        
		['field' => 'email',
		 'label' => 'Email',
		 'rules' => 'required'],

		['field' => 'instagram',
		 'label' => 'Instagram',
		 'rules' => 'required'],

		['field' => 'facebook',
		 'label' => 'Facebook',
		 'rules' => 'required'],

		['field' => 'telegram',
		 'label' => 'Telegram',
		 'rules' => 'required'],

		['field' => 'no_hp',
		 'label' => 'Phone',
		 'rules' => 'required'],

		['field' => 'level',
		 'label' => 'Level',
		 'rules' => 'required']
		];
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->join('level_mitra', 'level_mitra.id='.$this->_table.'.id_level');
		$this->db->join('regencies', 'regencies.id='.$this->_table.'.wilayah');
		$this->db->order_by('created_at', 'DESC');
		return $this->db->get()->result();
	}

	public function total()
	{
		return $this->db->get($this->_table)->num_rows();
	}

	public function totalDb()
	{
		$lvl = array('id_level' => 1);
		return $this->db->get_where($this->_table, $lvl)->num_rows();
	}

	public function totalMitra()
	{
		$lvl = array('id_level' => 2);
		return $this->db->get_where($this->_table, $lvl)->num_rows();
	}

	public function totalAgen()
	{
		$lvl = array('id_level' => 3);
		return $this->db->get_where($this->_table, $lvl)->num_rows();
	}

	public function getById($id)
	{
		$isi = array('id' => $id, );
		return $this->db->get_where($this->_table, $isi)->result();
	}

	public function getByPhone($phone)
	{
		$isi = array('phone' => $phone, );
		return $this->db->get_where($this->_table, $isi)->result();
	}

	public function getLevel()
	{
		return $this->db->get('level_mitra')->result();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id = uniqid();
		$this->nama_mitra = $post['nama'];
		$this->wilayah = $post['kota'];
		$this->email = $post['email'];
		$this->instagram = $post['instagram'];
		$this->facebook = $post['facebook'];
		$this->telegram = $post['telegram'];
		$this->shopee = $post['shopee'];
		$this->tokopedia = $post['tokopedia'];
		$this->no_hp = $post['phone'];
		$this->id_level = $post['level'];
		$this->created_at = date('Y-m-d H:i:s');
		$this->updated_at = date('Y-m-d H:i:s');
		$this->status = 0;
		return $this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->nama_mitra = $post[''];
		$this->wilayah = $post[''];
		$this->email = $post[''];
		$this->instagram = $post[''];
		$this->facebook = $post[''];
		$this->telegram = $post[''];
		$this->shopee = $post[''];
		$this->tokopedia = $post[''];
		$this->no_hp = $post[''];
		$this->level = $post[''];
		$this->status = $post[''];
		$this->updated_at = date('Y-m-d H:i:s');
		$id = array('id' => $post['id']);
		return $this->db->update($this->_table, $this, $id);
	}

	public function delete($id)
	{
		$id = array('id' => $id);
		return $this->db->delete($this->_table, $id);
	}
}