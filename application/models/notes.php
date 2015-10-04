<?php 

class Notes extends CI_Model 
{
	function insert($note)
	{
		$query = "INSERT INTO notes(title, created_at, updated_at) VALUES (?, now(), now())";
		$values= array($note['title']);
		$this->db->query($query, $values);
		$new_id = $this->db->insert_id();
		return $new_id;
	}
	function update($note)
	{
		$query = "UPDATE notes SET description = ?,
								   updated_at = now() 
								   WHERE id = ?";
		$values = array($note['description'], $note['id']);
		return $this->db->query($query, $values);
	}
	function remove($note)
	{
		$query = "DELETE FROM notes WHERE id = ?";
		$value = $note['id'];
		return $this->db->query($query, $value);
	}
	function get_note($id)
	{
		$query = "SELECT * FROM notes WHERE id = ?";
		$value = $id;
		return $this->db->query($query, $value)->row_array();
	}
	function all()
	{
		return $this->db->query("SELECT * FROM notes")->result_array();
	}
	// function get_id();
	// {
	// 	return $this->db->insert_id->row_array();
	// }

}
?>