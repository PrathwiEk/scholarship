<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Std_account extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('stlid') == '') { $this->session->set_flashdata('error','Please login and try again!'); redirect('student/login','refresh'); } 
        $this->load->model('m_stdaccount');
        $this->sid = $this->session->userdata('stlid');
    }

    /**
    * student Profile setting - load view
    * @url      : student/profile
    * @param    : null
    * @data     : null,
    **/
    public function index($value='')
    {
    	$data['title']  = 'Student Profile - Scholarship';
    	$data['result'] = $this->m_stdaccount->getProfile($this->sid);
		$this->load->view('student/profile', $data, FALSE);
    }


    public function update_profile($value='')
    {
    		$files = $_FILES;
	        if (file_exists($_FILES['profile']['tmp_name'])) {
	            $config['upload_path'] = 'student-profile/';
	            $config['allowed_types'] = 'jpg|png|jpeg';
	            $config['max_width'] = 0;
	            $config['encrypt_name'] = true;
	            $this->load->library('upload');
	            $this->upload->initialize($config);
	            if (!is_dir($config['upload_path'])) {
	                mkdir($config['upload_path'], 0777, true);
	            }

	            if (!$this->upload->do_upload('profile')) {
	                $error = array('error' => $this->upload->display_errors());
	                // print_r($error);exit();
	                $this->session->set_flashdata('error', $this->upload->display_errors());
	                redirect('profile');
	            } else {
	                // echo "ok";exit();
	                $upload_data = $this->upload->data();
	                $config['image_library'] = 'gd2';
	                $config['source_image'] = $upload_data['full_path'];
	                $config['create_thumb'] = true;
	                $config['maintain_ratio'] = false;
	                $config['height'] = 400;
	                $config['width'] = 400;

	                $this->load->library('image_lib', $config);
	                $this->image_lib->resize();

	                $file_name = $upload_data['file_name'];
	                $imgpath = 'student-profile/'.$file_name;
	            }

	           
	        }

	        $fname 	= $this->input->post('fname');
		    $lname 	= $this->input->post('lname');

		    $insert =  array(
		        'fname' 	=> $fname,
		        'lname' 	=> $lname,
		        'updated_on' => date('Y-m-d H:i:s')
	        );

	        if (file_exists($_FILES['profile']['tmp_name'])) {
	         $insert['profile_pic'] = $imgpath;
	        }


        	if($this->m_stdaccount->updateProfile($insert, $this->sid)){
                $this->session->set_flashdata('success', 'Profile has been updated Successfully');
                redirect('student/profile','refresh');
            }else{
                $this->session->set_flashdata('error', 'Something went wrong please try again later!');
                redirect('student/profile','refresh');
            }	        
		    

    }

    /**
    * student Change password - load view
    * @url      : student/change-password
    * @param    : null
    * @data     : null,
    **/
	public function changePassword()
	{
		$data['title']  = 'Student Change Password - Scholarship';
		$this->load->view('student/change-psw', $data, FALSE);
	}

    /**
    * student Change password - update password
    * @url      : student/update-password
    * @param    : null
    * @data     : new password,current and confirm password.
    **/
	public function update_pass($value='')
	{
		$data['title']  = 'Student Change password - Scholarship';
		$this->form_validation->set_rules('cpswd', 'Current Password', 'trim|required|callback_checkpsw_check');
        $this->form_validation->set_rules('npswd', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('cn_pswd', 'Password Confirmation', 'trim|required|matches[npswd]');
        if ($this->form_validation->run() == true) {
        	$hash  = $this->bcrypt->hash_password($this->input->post('npswd'));
        	$datas = array('password' => $hash );
        	if ($this->m_stdaccount->changePassword($datas)) {
               	$this->session->set_flashdata('success', 'Your password has been changed successfully');
               	redirect('student/change-password', 'refresh');
            } else {
               	$this->session->set_flashdata('error', 'Something went wrong please try again later!');
               	redirect('student/change-password', 'refresh');
            }

        }else{

        	$error = validation_errors();
            echo "<pre>";
            print_r ($error);
            echo "</pre>";exit();
            $this->session->set_flashdata('error', $error);
            redirect('student/change-password','refresh');

        }
	}

	// psw check function
    public function checkpsw_check($psw)
    {
        if ($this->m_stdaccount->checkpsw($psw)) {
            return true;
        } else {
            $this->form_validation->set_message('checkpsw_check', 'Invalid {field}');
            return false;
        }
    }




}

/* End of file S_account.php */
/* Location: ./application/controllers/S_account.php */