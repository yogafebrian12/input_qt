<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KSys extends CI_Model {
	public function inputData($tbl,$data){
		$this->db->insert($tbl,$data);
		$id = $this->db->insert_id();
		if($this->db->affected_rows() > 0){
			$response=array(
				'code'=>0,
				'message'=>'Data saved',
				'id'=>$id
			);
		}else{
			$response=array(
				'code'=>1,
				'message'=>'Data not saved'
			);
		}
		return $response;
	}

	public function getWhere($tbl,$data){
		return $this->db->get_where($tbl,$data);
	}

	public function NullAktif(){
		$this->db->set('Aktif','0')->where('Aktif','1')->update('mstharga');
	}

	public function NullAktifTempQt(){
		$this->db->set('active','0')->where('active','1')->update('t_qt');
	}

	public function QtSelect4Print($tbl,$name){
		return $this->db->select('*')->from($tbl)->where('UserInput',$name)->order_by('id','DESC')->limit(1)->get();
	}

	public function QtUpdate4Print($tbl,$name){
		return $this->db->select('*')->from($tbl)->where('UserUpdate',$name)->order_by('id','DESC')->limit(1)->get();
	}

	public function QtPrint($v){
		return $this->db->select('*')->from('qt')->where('Kode',$v)->order_by('id','DESC')->get();
	}

	public function SelectAll($tbl,$idorder,$orderby){
		return $this->db->select('*')->from($tbl)->order_by($idorder,$orderby)->get();
	}

	public function SelectAllWhere($tbl,$where,$idorder,$orderby){
		return $this->db->select('*')->from($tbl)->where($where)->order_by($idorder,$orderby)->get();
	}

	public function updData($tbl,$where,$data){
		$this->db->where($where)->update($tbl,$data);
		if($this->db->affected_rows() > 0){
			$response=array(
				'code'=>0,
				'message'=>'Data update',
				'id'=>''
			);
		}else{
			$response=array(
				'code'=>1,
				'message'=>'Data tidak update',
				'id'=>''
			);
		}
		return $response;
	}

	public function delData($w,$t){
		$this->db->where($w);
        $this->db->delete($t);
        if($this->db->affected_rows() > 0){
			$response=array(
				'code'=>0,
				'message'=>'Hapus data berhasil'
			);
		}else{
			$response=array(
				'code'=>1,
				'message'=>'Hapus data tidak berhasil'
			);
		}
		return $response;
	}

	public function LastKodeDesainer($kode){
		return $this->db->select('max(Kode) as Kode')->from('qt a')->like('a.Kode',$kode,'after')->order_by('a.id','desc')->limit(1)->get()->row_array();
	}

	public function dataQt(){
		$this->db->select('*');
		$this->db->from('qt');
		$this->db->group_by('Kode');
		$this->db->order_by('id','desc');
		return $this->db->get();
	}

	public function dataQtLast($kode){
		$this->db->select('*');
		$this->db->from('qt a');
		$this->db->where('a.Kode',$kode);
		$this->db->order_by('a.Rev','desc');
		return $this->db->get();
	}

	public function findKode($kode){
		$this->db->select('*');
		$this->db->from('qt');
		$this->db->where('Kode',$kode);
		$this->db->order_by('id','desc');
		return $this->db->get();
	}
}