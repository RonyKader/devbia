<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration extends CI_Controller 
{
	public function index()
	{
		$this->load->model( 'registration_model' );
		$data['course_name'] 		  =	$this->registration_model->get_course();
		$data['designation_name'] 	  =	$this->registration_model->get_designation();
		$data['district_info'] 		  = $this->registration_model->get_district();
		$data['upzilla_info'] 		  = $this->registration_model->get_upzilla();		
		$data['nationality_info'] 	  = $this->registration_model->get_nationality();		
		$data['educationlevel_info']  = $this->registration_model->get_educationlevel();		
		$data['university_info'] 	  = $this->registration_model->get_university();		
		$data['sponsoredby_info'] 	  = $this->registration_model->get_sponsoredby();		
		$data['student_regestration'] = 'student_regestration';
		$this->load->view('layouts/main', $data );

	}

	// View Method For Get Upazilla Data By Ajax
	public function upazillaDataAjax($divid=0)
	{
	    $divid 	= $this->input->post('district_id');
	    $this->load->model( 'registration_model' );
	    $data 	= $this->registration_model->get_upzilla($divid);
	    echo json_encode($data);
	}
    
    // View Method For Get University Data By Ajax
    public function universityDataAjax($divid=0)
    {
    	$divid  = $this->input->post('type');
    	$this->load->model( 'registration_model' );
    	$data 	= $this->registration_model->get_university($divid);
    	echo json_encode($data);
    }

    // Insert Method For Student Registration Process
	public function process_registration()
	{
		$this->form_validation->set_error_delimiters($this->alert->dmStart(),$this->alert->dmEnd());
		$this->form_validation->set_rules( 'student_name', 'Participant Name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'father_name', 'Father\'s Name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'mother_name', 'Mother\'s Name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'session_month', 'session_month', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'session_year', 'session_year', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'course_id', 'course_id', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'registration_fee', 'registration_fee', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'organization_id', 'organization_id', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'self_organization', 'self_organization', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'total_experience', 'total_experience', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'designation_id', 'designation_id', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'current_employeement', 'current_employeement', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'current_employeement_address', 'current_employeement_address', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'date_of_birth', 'date_of_birth', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'emergency_contact_name', 'emergency_contact_name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'emergency_contact_no', 'emergency_contact_no', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'gender', 'gender', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'religion', 'religion', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'marital_status', 'marital_status', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'mobile_no', 'mobile_no', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'email', 'email', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'blood_group', 'blood_group', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'country', 'country', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'nationality', 'nationality', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'nationalid', 'nationalid', 'trim|required|max_length[100]');
		
		$this->form_validation->set_rules( 'address[]', 'address', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'district_code[]', 'district_code', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'upzilla_code[]', 'upzilla_code', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'address_type[]', 'address_type', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'post_code[]', 'post_code', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'exam_id[]', 'exam_id', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'university[]', 'university', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'group[]', 'group', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'result[]', 'result', 'trim|required|max_length[100]');
		$this->form_validation->set_rules( 'gpa[]', 'gpa', 'trim|required|max_length[100]');

		if ( $this->form_validation->run() == FALSE ) 
		{
			self::index();
		}
		else
		{
			$this->load->model( 'Registration_model' );
			$data = $this->Registration_model->registration_process();
			if ( $data ) 
			{	
				$this->session->set_flashdata( 'FlsMsg', $this->alert->success( 'Thank you for registration.' ));
				redirect( 'registration' );
			}
			else
			{
				$this->session->set_flashdata( 'FlsMsg', $this->alert->danger( 'Your Registration Process is Fail' ));
				redirect( 'registration' );
			}
		}

	}

	//View Method For Get Student Information List 
	public function studentList()
	{
		$this->load->model( 'Registration_model' );
		$data['studentlistData']	=	$this->Registration_model->studentListInfo();		
		$data['disttData']			=	$this->Registration_model->disttInfo();
		$data['studentlist']		=	'studentlist_page';
		$this->load->view( 'layouts/main', $data );	
	}

	// View Form Method For Student Information
	public function studentDetails( $id )
	{
		$this->load->model( 'Registration_model' );
		$data['course_name'] 		  	=	$this->Registration_model->get_course();
		$data['designation_name'] 	  	=	$this->Registration_model->get_designation();
		$data['district_info'] 		  	=	$this->Registration_model->get_district();
		$data['upzilla_info'] 		  	=	$this->Registration_model->get_upzilla();		
		$data['nationality_info'] 	  	=	$this->Registration_model->get_nationality();		
		$data['educationlevel_info']  	=	$this->Registration_model->get_educationlevel();		
		$data['university_info'] 	  	=	$this->Registration_model->get_university();		
		$data['sponsoredby_info'] 	  	=	$this->Registration_model->get_sponsoredby();	
		$data['indivisualstData'] 		=	$this->Registration_model->get_indivisualstData($id);
		$data['student_regestration']	=	'studentDetailsPage';
		$this->load->view('layouts/main', $data );
	}

	// View Method For Acknoledgement Section
	public function acknoledgement()
	{
		$this->load->model( 'registration_model' );
		$data['acknoledgement_info']	=	$this->registration_model->get_acknoledgement();
		$data['acknoledgement']			=	'acknoledgement_page';
		$this->load->view( 'layouts/main', $data );	

    }

		// public function chek()
		// {
		// 	$get_extentin = strtolower( end( $devided ));
		// 	$unique_name = $folder_name.substr( md5( time()), 0,10 );
		// 	echo $unique_name;
		// 	echo "<br/>";

		// 	$date = substr( date(Y), 2,3 );
		// 	$month = date(m);

		// 	echo $unique_name.$date.$month;
		// }

		// public function ran()
		// {
		// 	$this->db->select(seq('one'));
		// 	$query = $this->db->get('seq_test');

		// 	$dat = $query->result();
		// 	print_r( $dat ); 
		// }

		// public function fileupload()
		// {			
		// 	$data['acknoledgement'] = 'fileupload';
		// 	$this->load->view( 'layouts/main', $data );		
		// }

		// public function fileupload_do()
		// {
		// 	echo "<pre>";
		// 	print_r( $_POST ); exit();
		// 	$customname	=	$_FILES['file_image']['name'];			
		// 	$unique_image = substr( md5( time()), 0,5 ).$customname;

		// 	$config['upload_path'] 		= './uploads/';
		// 	$config['allowed_types'] 	= 'jpg|jpeg|gif';
		// 	$config['file_name'] 	= $unique_image;
		// 	$config['remove_spaces'] 	= true;

		// 	$this->load->library('upload', $config);

		// 	if ( ! $this->upload->do_upload('file_image')) :
		// 		echo "Image Upload Fail";
		// 	else:
		// 		$image_details = $this->upload->data();	
		// 		// echo "<pre>";
		// 		// print_r( $image_details );
		// 		$saveImage = base_url().'uploads/'.$image_details['raw_name'].$image_details['file_ext'];
		// 		$this->load->model( 'Registration_model' );
		// 		$data = $this->Registration_model->fileUpload($saveImage);
		// 		if ( $data ) :
		// 			echo "Sucess fully Upload Image";
		// 		else:
		// 			echo "Sorry Not done";
		// 		endif;

		// 	endif;

			
		// 	exit();
			
		// }
}