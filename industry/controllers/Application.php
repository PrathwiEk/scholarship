<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_application');
        if($this->session->userdata('scinds') == ''){ redirect('/','refresh'); }
        $this->inId = $this->session->userdata('sccomp');
    }
    

    public function index($year=null)
    {
        $data['title'] = 'Scholarship';
        $year = $this->input->get('year');
        $data['result'] = $this->m_application->getScholarshipRequest($year);
        $this->load->view('application/request-list', $data, FALSE);        
    }

    // approve list
    public function approve_list($year = null)
    {
        $data['title'] = 'Scholarship | Approved list';
        $year = $this->input->get('year');
        $data['result'] = $this->m_application->getScholarshipApproved($year);
        $this->load->view('application/approved', $data, FALSE);
    }

    // rejected list
    public function reject_list($year=null)
    {
        $data['title'] = 'Scholarship | Rejected list';
        $year = $this->input->get('year');
        $data['result'] = $this->m_application->getScholarshipRejected($year);
        $this->load->view('application/rejected', $data, FALSE);
    }

        // single student data
        public function singleStudent($id = null)
        {
            $data['title'] = 'Scholarship | REquest list';
            $data['result'] = $this->m_application->singleStudent($id);
            $this->load->view('application/student-detail', $data, FALSE);
        }
        
    // // approve application
    // public function approval($var = null)
    // {
    //     if($this->m_dashboard->approval($this->input->post('id'))){
    //         $data = array('status' => 1, 'msg' => 'Approved successfully.');
    //     }else{
    //         $this->output->set_status_header('400');
    //         $data = array('status' => 0, 'msg' => 'Server error occurred. Please try again');
    //     }
    //     echo json_encode($data);
    // }

    // // Reject 
    // public function reject()
    // {
    //    $id = $this->input->post('id');
    //    $data = array(
    //        'reject_reason' => $this->input->post('reason'),
    //        'status' => 2,
    //     );
    //     if($this->m_dashboard->reject($data, $id)){
    //         $this->session->set_flashdata('success', 'Application rejected');
    //         redirect('dashboard','refresh');
    //     }else{
    //         $this->session->set_flashdata('error', 'Server error occurred.<br> Please try agin later');
    //         redirect('student/'.$id,'refresh');
    //     }
    // }

 

    // // rejected list
    // public function student_rejects()
    // {
    //     $result = $this->m_dashboard->getScholarshipRejects();
    //     echo json_encode($result);
    // }



    // // Approved list
    // public function student_approved()
    // {
    //     $result = $this->m_dashboard->getScholarshipApproved();
    //     echo json_encode($result);
    // }

    

}

/* End of file Dashboard.php */
