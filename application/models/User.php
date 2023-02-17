<?php
	class User extends CI_Model
	{
		public function addUser($persona){
			$this->db->insert('users', $persona);
		}	

		public function selectAll(){
			$this->db->select('*');
			$this->db->from('users');
			return $this->db->get()->result();
		}

		public function delete($idUser){
			$this->db->where("id", $idUser);
			$this->db->delete('users');
		}

		public function update($users, $idUser){
			$this->db->where('id', $idUser);
			$this->db->update('users',$users );
		}
	}
?>
