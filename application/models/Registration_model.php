<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
class Registration_model extends CI_Model 
{
	// View Method For Get Course Info
	public function get_course()
	{	
		$this->db->select('*');
		$this->db->from('course');
		$this->db->order_by( 'course_name ASC' );
		$this->db->group_by( 'course_name' );
		$query = $this->db->get();
		return $query->result();
	}

	// View Method For Get Designation Info
	public function get_designation()
	{
		$this->db->select('*');
		$this->db->from('designation');
		$this->db->order_by( 'designation ASC' );
		$this->db->group_by( 'designation' );
		$query = $this->db->get();
		return $query->result();
	}

	// View Method For All District Info
	public function get_district()
	{
		$this->db->select('*');
		$this->db->from('district' );
		$this->db->order_by( 'district_name ASC' );
		$this->db->group_by( 'district_name' );
		$query = $this->db->get();
		return $query->result();
	}

	// View Method For Upzilla Information
	public function get_upzilla( $district=NULL )
	{
		$this->db->select('*');
		$this->db->from( 'district' );
		$this->db->where( array( 'district_code' => $district ) );
		$this->db->order_by( 'upzilla_name ASC' );
		$query = $this->db->get();
		return $query->result();

	}

	// View Method For Student All Information
	public function studentListInfo()
	{
		$this->db->select('st.*,ad.*,edq.*');
		$this->db->from('student AS st');
		$this->db->join('address AS ad','st.participant_id=ad.participant_id');
		$this->db->join('educational_qualification AS edq','st.participant_id = edq.participant_id');
		$query = $this->db->get();
		return $query->result();
	}

	// View Method For District & Address Information
	public function disttInfo()
	{
		$this->db->select('ddu.*,add.district_code');
		$this->db->from('division_dist_upzilla AS ddu');
		$this->db->join('address AS add','ddu.district_code = add.district_code');
		$query = $this->db->get();
		return $query->result();
	}

	// View Form Method For Student Basic Information
	public function get_indivisualstData( $id )
	{
		$this->db->select('*');
		$this->db->from('student');
		$this->db->where( array('student.participant_id' => $id) );
		$query = $this->db->get();
		return $query->result();

	}

	// View Form Method For Student Address Information
	public function get_indivisualstAddress($id)
	{
		$this->db->select('*');
		$this->db->from('address');
		$this->db->where( array('participant_id' => $id) );
		$query = $this->db->get();
		return $query->result();
	}

	// Update Method For Student Basic Information
	public function updateBasicInfo($id)
	{
		$studentName	=	$this->input->post('student_name');
		$fatherName		=	$this->input->post('father_name');
		$motherName		= 	$this->input->post('mother_name');

		$data 	=	array(
			'student_name'	=>	$studentName,
			'father_name'	=>	$fatherName,
			'mother_name'	=>	$motherName
			);
		$this->db->where( array('participant_id'=>$id) );
		$data 	=	$this->security->xss_clean( $data );
		$updateResult	=	$this->db->update('student',$data);
		if ( $updateResult ) :
			return true;
		else:
			return false;
		endif;
		
	}

	// Update Method For Student Basic Information
	public function updateStudentAddress($id)
	{
		$address		=	$this->input->post('address');
		$count	=	count( $address );
		$data = array();
		for ($i=0; $i < $count; $i++) 
		{ 
			$data1[$i] = array(
				'address'	=>	$address[$i]
				);

		}
		
		$this->db->where( array('participant_id'=>$id) );

		$data 			=	$this->security->xss_clean( $data );
		$updateResult 	=	$this->db->update_batch( 'address', $data,'address' );
		echo $this->db->last_query(); exit();
		if ( $updateResult ) :
			return true;
		else:
			return false;
		endif;
	}
    
    public function get_acknoledgement()
    {
    	$this->db->select('*');
    	$this->db->from('student');
    	$this->db->where( array( 'id'=>3060));
    	$query = $this->db->get();
		return $query->result();

    }
   
    // View Method For Get Nationality Info
	public function get_nationality()
	{
		$this->db->select('*');
		$this->db->from('country');
		$query = $this->db->get();
		if ( $query ) 
		{
			return $query->result();
		}
	}

	// View Method For Get Education Level Info
	public function get_educationlevel()
	{	
		$this->db->select('*');
		$this->db->from('education_level');
		$query = $this->db->get();

		if ( $query ) 
		{
			return $query->result();
		}
	}

	// View Method For Get Universit Info
	public function get_university( $type=NULL )
	{
		$this->db->select('*');
		$this->db->from('university');
		$this->db->where( array( 'type' => $type ) );
		$query = $this->db->get();

		if ( $query ) 
		{
			return $query->result();
		}
	}

	// View Method For Get Sponsor By Info
	public function get_sponsoredby()
	{
		$this->db->select('*');
		$this->db->from('organization');
		$query = $this->db->get();

		if ( $query ) 
		{
			return $query->result();
		}
	}

	// Insert Method For Student Registration Process
	public function registration_process()
	{		
		$query = $this->db->query( "SELECT MAX(participant_id)+1 as Mvalue FROM student" );		
		foreach ($query->result() as $participant_idd) {
			$participant_id = $participant_idd->Mvalue;
		}
		$participant_id;
		$data = array(
			// 'registration_no' 			=> $this->input->post( 'registration_no' ),
			'student_name' 				=> $this->input->post( 'student_name' ),
			'father_name' 				=> $this->input->post( 'father_name' ),
			'mother_name' 				=> $this->input->post( 'mother_name' ),
			'session_month' 			=> $this->input->post( 'session_month' ),
			'session_year' 				=> $this->input->post( 'session_year' ),
			'course_id' 				=> $this->input->post( 'course_id' ),
			'registration_fee' 			=> $this->input->post( 'registration_fee' ),
			'organization_id' 			=> $this->input->post( 'organization_id' ),
			'self_organization' 		=> $this->input->post( 'self_organization' ),
			'total_experience' 			=> $this->input->post( 'total_experience' ),
			'designation_id' 			=> $this->input->post( 'designation_id' ),
			'current_employeement' 		=> $this->input->post( 'current_employeement' ),
			'current_employeement_address' 	=> $this->input->post( 'current_employeement_address' ),
			'date_of_birth' 			=> $this->input->post( 'date_of_birth' ),
			'emergency_contact_name'   	=> $this->input->post( 'emergency_contact_name' ),
			'emergency_contact_no' 		=> $this->input->post( 'emergency_contact_no' ),
			'gender' 					=> $this->input->post( 'gender' ),
			'religion' 					=> $this->input->post( 'religion' ),
			'marital_status' 			=> $this->input->post( 'marital_status' ),
			'mobile_no' 				=> $this->input->post( 'mobile_no' ),
			'email' 					=> $this->input->post( 'email' ),
			'blood_group' 				=> $this->input->post( 'blood_group' ),
			'country' 					=> $this->input->post( 'country' ),
			'nationality' 				=> $this->input->post( 'nationality' ),
			'nationalid' 				=> $this->input->post( 'nationalid' ),
			'participant_id' 			=> $participant_id
			);

		$data 	= $this->security->xss_clean( $data );
		$result = $this->db->insert( 'student', $data );		
		
		$address 		= $this->input->post( 'address' );
		$district_code 	= $this->input->post( 'district_code' );
		$upzilla_code 	= $this->input->post( 'upzilla_code' );
		$post_office 	= $this->input->post( 'post_office' );
		$post_code 		= $this->input->post( 'post_code' );
		$count 			= count( $address );
				
		$data1 = array();
		for ($i=0; $i < $count; $i++) 
		{ 
			$data1[$i] = array(
				'address' 		=> $address[$i],
				'district_code' => $district_code[$i],
				'upzilla_code' 	=> $upzilla_code[$i],				
				'post_code' 	=> $post_code[$i],
				'participant_id' => $participant_id
				);

		}
		$data1 	= $this->security->xss_clean( $data1 );		
		$result = $this->db->insert_batch( 'address', $data1 );


		$exam_id 		= $this->input->post( 'exam_id' );
		$university 	= $this->input->post( 'university' );
		$group 			= $this->input->post( 'group' );
		$result 		= $this->input->post( 'result' );
		$gpa 			= $this->input->post( 'gpa' );
		$count 			= count( $university );

		$data2 = array();
		for ($i=0; $i < $count; $i++) 
		{ 
			$data2[$i] = array(
				'exam_id' 		=> $exam_id[$i],
				'university' 	=> $university[$i],
				'group' 		=> $group[$i],				
				'result' 		=> $result[$i],
				'gpa' 			=> $gpa[$i],
				'participant_id' => $participant_id
				);
		}
		$data2 	= $this->security->xss_clean( $data2 );
		$result = $this->db->insert_batch( 'educational_qualification', $data2 );
		// echo $this->db->last_query(); exit();
		if ( $result ) :
			return true;
		else:
			return false;
		endif;
	}

	// public function fileUpload( $imagedata )
	// {
	// 	$data_t	= $this->input->post('datatype');
	// 	if ( count( $data_t ) === 3 || count( $data_t ) === 2 ) {
	// 		$get_da = 0;
	// 	}
	// 	else
	// 	{
	// 		$get_da = $data_t[0];
	// 	}
			
	// 		echo $get_da; exit();			

	// 	$data = array(
	// 		'file_image' => $imagedata
	// 		);
	// 	$insert_query = $this->db->insert( ' image_file', $data );
	// 	if ( $insert_query ) :
	// 		return true;
	// 	else:
	// 		return false;
	// 	endif;

	// }
}