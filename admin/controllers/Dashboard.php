<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
        if($this->session->userdata('said') == ''){ redirect('/','refresh'); }
        $this->adid = $this->session->userdata('said');
        header_remove("X-Powered-By"); 
        header("X-Frame-Options: DENY");
        header("X-XSS-Protection: 1; mode=block");
        header("X-Content-Type-Options: nosniff");
        header("Strict-Transport-Security: max-age=31536000");
        header("Content-Security-Policy: frame-ancestors none");
        header("Referrer-Policy: no-referrer-when-downgrade");
        // header("Content-Security-Policy: default-src 'none'; script-src 'self' https://www.google.com/recaptcha/api.js https://www.gstatic.com/recaptcha/releases/v1QHzzN92WdopzN_oD7bUO2P/recaptcha__en.js https://www.google.com/recaptcha/api2/anchor?ar=1&k=6Le6xNYUAAAAADAt0rhHLL9xenJyAFeYn5dFb2Xe&co=aHR0cHM6Ly9oaXJld2l0LmNvbTo0NDM.&hl=en&v=v1QHzzN92WdopzN_oD7bUO2P&size=normal&cb=k5uv282rs3x8; connect-src 'self'; img-src 'self'; style-src 'self';");
        // header("Referrer-Policy: origin-when-cross-origin");
        // header("Expect-CT: max-age=7776000, enforce");
        // header('Public-Key-Pins: pin-sha256="d6qzRu9zOECb90Uez27xWltNsj0e1Md7GkYYkVoZWmM="; pin-sha256="E9CZ9INDbd+2eRQozYqqbQ2yXLVKB9+xcprMF+44U1g="; max-age=604800; includeSubDomains; report-uri="https://example.net/pkp-report"');
        ////header("Set-Cookie: key=value; path=/; domain=www.hirewit.com; HttpOnly; Secure; SameSite=Strict");
        $this->load->library('sc_check');
        
    }

    public function index()
    {
        $year = $this->input->get('year');
        if (!empty($year)) {
            $data['years']       = $year;
        }else{
            $data['years']       = date('Y');
        }
        $data['title']      = 'Dashboard | admin';
        $data['count']      = $this->m_dashboard->dashcounts($data['years'] );
        $data['indcount']   = $this->m_dashboard->industry_counts($data['years'] );
        $data['inscount']   = $this->m_dashboard->insti_counts($data['years'] );
        $this->load->view('dashboard/index', $data, FALSE);
    }

    /**
	* get total scholarship by year to display in graph
	* @url : dashboard/getordergraph
	**/
	public function getordergraph()
	{
		$startdate 	= '2019'; //start date of the year (jan first)
		$result		= $this->m_dashboard->getordergraph($startdate);
		echo json_encode($result);
	}


    public function profile($value='')
    {
    	$data['title'] = 'Profile | admin';
    	$data['result'] = $this->m_dashboard->getProfile($this->adid);
    	$this->load->view('dashboard/profile', $data, FALSE);
    }

    public function updateprofile($value='')
    {
        $this->sc_check->limitRequests();
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $this->security->xss_clean($_POST);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces');
            $this->form_validation->set_rules('phone', 'Phone No.', 'trim|numeric|max_length[10]|min_length[10]');
            if ($this->form_validation->run() == True){
                $insert   = array(
                    'name'    => $this->input->post('name'), 
                    'phone'  => $this->input->post('phone'), 
                );
                $result = $this->m_dashboard->updateprofile($insert);
                if (!empty($result )) {
                    $this->session->set_flashdata('success', 'Profile updated succesfully');
                }else{
                    $this->session->set_flashdata('error', 'Server error occurred. <br>Please try agin later');
                }
            }else{
                $this->form_validation->set_error_delimiters('', '<br>');
                $this->session->set_flashdata('error', str_replace(array("\n", "\r"), '', validation_errors()));
            }
        	
        }else{
            $this->session->set_flashdata('error', 'Some error occured, please try again!');
        }

    	redirect('profile','refresh');
    }

    public function changepassword($value='')
    {
        $data['title'] = 'Profile | admin';
        $this->load->view('dashboard/change-password', $data, FALSE);
    }

        // psw check function
    public function checkpsw($psw='')
    {
        $output = $this->m_dashboard->checkpsw($this->input->post('crpass'));
        echo $output;
    }

    public function updatepassword($value='')
    {
        $this->sc_check->limitRequests();
        
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $this->security->xss_clean($_POST);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->form_validation->set_rules('cpswd', 'Current Password', 'trim|required');
            $this->form_validation->set_rules('npswd', 'Password', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('cn_pswd', 'Password Confirmation', 'trim|required|matches[npswd]');
            if ($this->form_validation->run() == true) {
                $hash  = $this->bcrypt->hash_password($this->input->post('npswd'));
                $datas = array('psw' => $hash );
                if ($this->m_dashboard->changePassword($datas)) {
                    $this->session->set_flashdata('success', 'Your password has been updated successfully');
                    redirect('change-password', 'refresh');
                } else {
                    $this->session->set_flashdata('error', 'Something went wrong please try again later!');
                    redirect('change-password', 'refresh');
                }

            }else{
                $error = validation_errors();
                $this->session->set_flashdata('error', $error);
                redirect('change-password','refresh');

            }
        }else{
            $this->session->set_flashdata('error', 'Some error occured, please try again!');
            redirect('change-password','refresh');
        }
    }

}

/* End of file Dashboard.php */
