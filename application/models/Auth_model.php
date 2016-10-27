<?php defined('BASEPATH') OR exit('No direct script access allowed');	
class Auth_model extends CI_Model 
{
	//Login Access Method For User Login Process 
	public function admin_login()
	{	
		$email = $this->input->post( 'username' );
		$password = md5($this->input->post( 'password' ));

		$data = array(
			'username' => $email,
			'password' => $password				
			);

		$data = $this->security->xss_clean( $data );
		$result = $this->db->get_where( 'users', $data );

		if ( $result->num_rows() == 1 ) :		
			$data = array(
				'id' => $result->row(0)->id,					
				'username' => $result->row(0)->username,
				'email' => $result->row(0)->email,
				);				
			$this->session->set_userdata( 'logininfo',$data );
			return TRUE;		
		else:		
			return FALSE;
		endif;
	}

	// View Method For Get User Information List
	public function userlist()
	{
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		return $query->result();
	}

	// View Method For Edit User Section
	public function edit_user( $id = NULL )
	{
		$data = array(
			'id' => $id
			);
		$query = $this->db->get_where( 'users',$data );

		if ( $query->num_rows() == 1 ) :		
			return $query->result();		
		else:		
			return FALSE;
		endif;
	}

	// Update Method For User Information
	public function update_user( $id = NULL )
	{
		$firstname = $this->input->post( 'fname' );
		$lastname  = $this->input->post( 'lname' );
		$mobile	   = $this->input->post( 'mobile' );
		$email 	   = $this->input->post( 'email' );
		$postcode  = $this->input->post( 'postcode' );

		$data = array(
			'fname' => $firstname,
			'lname' => $lastname,
			'mobile'=> $mobile,
			'email' => $email,
			'postcode' => $postcode
			);
		
		$data = $this->security->xss_clean( $data );
		$this->db->where( 'id',$id );
		$updateuser = $this->db->update( 'users', $data );

		if ( $updateuser ) :		
			return TRUE;		
		else:		
			return FALSE;
		endif;
	}

	// Delete Method Of User Information
	public function delete_user( $id = NULL )
	{
		$this->db->where( 'id', $id );
		$delete_user = $this->db->delete( 'users' );

		if ( $delete_user ) :		
			return TRUE;		
		else:		
			return FALSE;
		endif;
	}
}