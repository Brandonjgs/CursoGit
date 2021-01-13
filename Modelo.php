<?php

class Modelo extends CI_Model
{
	function getUsuarios()
	{
		$this->db->from("usuarios");
	}
}