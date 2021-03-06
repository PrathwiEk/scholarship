<?php
$this->ci =& get_instance();
$this->load->model('m_stdapplication');
$this->load->library('encryption');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarship</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css">
    <link  rel="stylesheet" href="<?php echo base_url() ?>assets/css/material-icons.css">
    <script src="<?php echo base_url() ?>assets/js/vue.js"></script>
    <script src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
</head>
<body>
    <div id="app">
        <?php $this->load->view('includes/header.php'); ?>

    <!-- Body form  -->
        <section class="board">
            <div class="container-wrap1">
                <div class="row m0">
                <?php $this->load->view('includes/student-sidebar.php'); ?> <!-- End menu-->

                    <div class="col s12 m12 l9">
                        <div class="card  darken-1">
                            <div class="card-content bord-right">
                                <div class="card-title">Scholarship Application Detail
                                     <a target="_blank" href="<?php echo base_url('std_application/applicationGenerate/'.$this->ci->encryption_url->safe_b64encode($result->id).'') ?>" class="btn-small right mr10 green darken-3 waves-effect waves-light">Download</a>
                                </div>

                                <div class="board-content">
                                    <div class="row m0">
                                        <div class="app-detail-items">
                                                <div class="col s12">
                                                    <div class="app-detail-item">
                                                        <div class="app-item-heading">
                                                            <p>ONLINE SCHOLARSHIP APPLICATION FORM</p>
                                                            <p>ಸಂಘಟಿತ ಕಾರ್ಮಿಕರ ಮಕ್ಕಳಿಂಧ ಪ್ರೋತ್ಸಹ ಧನ ಸಹಾಯಕಾಗಿ ಅರ್ಜಿ</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12 l4">
                                                                    <ul>
                                                                        <li>
                                                                            <p class="app-item-content-head">Application Number</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->aId))?$result->aId:'---'; ?></p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="app-item-content-head">Name</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->name))?$result->name:'---'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Father Name</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->father_name))?$result->father_name:'---'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Mother Name</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->mothor_name))?$result->mothor_name:'---'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Mobile Number</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->parent_phone))?$result->parent_phone:'---'; ?></p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="app-item-content-head">Gender</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->gender))?$result->gender:'---'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Amount</p>
                                                                            <p class="app-item-content"><?php echo $this->ci->m_stdapplication->getamnt($result->application_year,$result->graduation) ?></p>
                                                                        </li>

                                                                        

                                                                    </ul>
                                                                </div>

                                                                <div class="col s12 l8">
                                                                    <ul>

                                                                        <li>
                                                                            <p class="app-item-content-head">Graduation</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->gradutions))?$result->gradutions:'---'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Present class/ Course</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->corse))?$result->corse.'&nbsp;'.$result->cLass:'---'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Present School Name</p>
                                                                            <p class="app-item-content"><?php echo $this->ci->m_stdapplication->schlName($result->school_id) ?></p> </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Present School Address</p>
                                                                            <p class="app-item-content"><?php echo $this->ci->m_stdapplication->schlAddress($result->school_id) ?></p>
                                                                        </li>
                                                                        <li class="doted-divider"></li>
                                                                        <li>
                                                                            <p class="app-item-content-head">Student Present  Address</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->saddress))?$result->saddress:'---'; ?></p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="app-item-content-head">Application Year</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->application_year))?$result->application_year:'---'; ?></p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="app-item-content-head">Applied On</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->date))?date('d M, Y', strtotime($result->date)):'---'; ?></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End-->

                                                <div class="col s12 l5">
                                                    <div class="app-detail-item">
                                                        <div class="app-item-heading">
                                                            <p>Previous Year Class and Marks</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12">
                                                                    <ul>
                                                                        <li>
                                                                            <p class="app-item-content-head">Class Name</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->prv_class))?$result->prv_class:'----'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Marks</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->prv_marks))?$result->prv_marks.'%':'---'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Marks Card Copy</p>

                                                                             <?php if (!empty($result->prv_markcard)) { ?>
                                                                            <p class="app-item-content"><img src="<?php echo base_url()?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->prv_marks))?base_url('show-image/').$result->prv_markcard:'#'; ?>"> markscard </a></p>
                                                                        <?php } ?>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End-->

                                                <div class="col s12 l7">
                                                    <div class="app-detail-item">
                                                        <div class="app-item-heading">
                                                            <p>Scheduled Caste / Scheduled Tribes? Certificate</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12">
                                                                    <ul>
                                                                        <li>
                                                                            <p class="app-item-content-head">Scheduled Caste / Scheduled Tribes</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->is_scst))?'Yes':'No'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Category</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->category))?ucwords($result->category):''; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Caste Certificate File/ Number</p>
                                                                                <?php if (!empty($result->is_scst)) { ?>
                                                                                    <p class="app-item-content"><img src="<?php echo base_url()?>assets/image/pdf.svg"  class="pdf-icon" alt=""> 
                                                                                    <a target="_blank" href="<?php echo (!empty($result->cast_certificate))?base_url('show-image/').$result->cast_certificate:'#'; ?>"> Caste-certificate
                                                                                    </a>
                                                                                    <?php echo (!empty($result->cast_no))?'-'.$result->cast_no:''; ?>
                                                                                    </p>
                                                                                <?php } ?>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End-->

                                                <div class="col s12 l12">
                                                    <div class="app-detail-item">
                                                        <div class="app-item-heading">
                                                            <p>Industry Detail</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12 m6">
                                                                    <ul>
                                                                        <li>
                                                                            <p class="app-item-content-head">Parent / Guardian Name </p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->pName))?$result->pName:'---'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Who is Working </p>
                                                                            <p class="app-item-content"><?php 

                                                                            if(!empty($result->who_working)){

                                                                            if($result->who_working =='1'){ echo 'Father'; }elseif($result->who_working =='2'){ echo 'mother'; }else{ echo 'Parent'; }  }else{
                                                                                echo '---';
                                                                            }


                                                                            ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Relationship between student & parent</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->relationship ))?$result->relationship:'---'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Monthly Salary</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->msalary))?$result->msalary:'---'; ?></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col s12 m6">
                                                                    <ul>
                                                                        <li>
                                                                            <p class="app-item-content-head">Industry Name </p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->indName))?$result->indName:'---'; ?></p>
                                                                        </li>

                                                                        <li class="row">
                                                                            <div class="col s12 m6 ">
                                                                                <p class="app-item-content-head">Taluk</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->talqName))?$result->talqName:'---'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">District</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->dstctName))?$result->dstctName:'---'; ?></p>
                                                                            </div>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Pin Code</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->indPincode))?$result->indPincode:'---'; ?></p>
                                                                        </li>

                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End-->

                                                <div class="col s12 l6">
                                                    <div class="app-detail-item">
                                                        <div class="app-item-heading">
                                                            <p>Aadhaar card Details</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12">
                                                                    <ul>
                                                                        <li class="row">
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Aadhaar</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->adharcard_no))?$result->adharcard_no:'---'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Aadhaar card File</p>
                                                                                <?php if (!empty($result->adharcard_file)) { ?>
                                                                                <p class="app-item-content"><img src="<?php echo base_url()?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->adharcard_file))?base_url('show-image/').$result->adharcard_file:'#'; ?>">Aadhaar Xerox</a></p>
                                                                            <?php } ?>
                                                                            </div>
                                                                        </li>

                                                                        <?php if (!empty($result->f_adharfile) || !empty($result->f_adharfile)) { ?>
                                                                        <li class="row">
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Father Aadhaar</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->f_adhar))?$result->f_adhar:'---'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Father Aadhaar card File</p>
                                                                                <?php if (!empty($result->f_adharfile)) { ?>
                                                                                <p class="app-item-content"><img src="<?php echo base_url()?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->f_adharfile))?base_url('show-image/').$result->f_adharfile:'#'; ?>">Aadhaar Xerox</a></p>
                                                                            <?php } ?>
                                                                            </div>
                                                                        </li>
                                                                    <?php } ?>

                                                                        <?php if (!empty($result->m_adhar) || !empty($result->m_adharfile)) { ?>
                                                                            <li class="row">
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Mother Aadhaar</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->m_adhar))?$result->m_adhar:'---'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Mother Aadhaar card File</p>
                                                                                <?php if (!empty($result->m_adharfile)) { ?>
                                                                                <p class="app-item-content"><img src="<?php echo base_url()?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->m_adharfile))?base_url('show-image/').$result->m_adharfile:'#'; ?>">Aadhaar Xerox</a></p>
                                                                            <?php } ?>
                                                                            </div>
                                                                        </li>
                                                                        <?php } ?>

                                                                        <?php if (!empty($result->notappli) || !empty($result->deathcertificate)) { ?>
                                                                            <li class="row">
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Adhar NA</p>
                                                                                <p class="app-item-content"><?php echo ($result->notappli)?$result->notappli:'---'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Death Certificate </p>
                                                                                <?php if (!empty($result->deathcertificate)) { ?>
                                                                                <p class="app-item-content"><img src="<?php echo base_url()?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->deathcertificate))?base_url('show-image/').$result->deathcertificate:'#'; ?>">Death Certificate</a></p>
                                                                            <?php } ?>
                                                                            </div>
                                                                        </li>

                                                                        <?php } ?>

                                                                        

                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End-->

                                                <div class="col s12 l6">
                                                    <div class="app-detail-item">
                                                        <div class="app-item-heading">
                                                            <p>Bank Details</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12">
                                                                    <ul>
                                                                        <li class="row">
                                                                            <div class="col s12 m6 ">
                                                                                <p class="app-item-content-head">Bank name</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->bnkName))?$result->bnkName:'---'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Branch Name</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->branch))?$result->branch:'---'; ?></p>
                                                                            </div>
                                                                        </li>

                                                                        <li class="row">
                                                                            <div class="col s12 m6 ">
                                                                                <p class="app-item-content-head">Account Type</p>
                                                                                <p class="app-item-content"><?php echo ((!empty($result->type)) && $result->type== '1' )?'Parent':'Student'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Account Holder name</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->holder))?$result->holder:'---'; ?></p>
                                                                            </div>
                                                                        </li>

                                                                        <li class="row">
                                                                            <div class="col s12 m6 ">
                                                                                <p class="app-item-content-head">Account Number</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->acc_no))?$result->acc_no:'---'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">IFSC Code No</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->ifsc))?$result->ifsc:'---'; ?></p>
                                                                            </div>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Passbook Front Page Copy</p>
                                                                             <?php if (!empty($result->passbook)) { ?>
                                                                            <p class="app-item-content"><img src="<?php echo base_url()?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->passbook))?base_url('show-image/').$result->passbook:'#'; ?>">Passbook</a></p>
                                                                        <?php } ?>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End-->



                                                <?php 
                                                 $dis1 = '';

                                            switch ($result->application_state) {
                                                case 1:
                                                    $display = 'none';
                                                    break;
                                                case 2:
                                                    $display = 'block';
                                                    $dis1 = 'none';
                                                    break; 
                                                case 3:
                                                    $display = 'block';
                                                    break;
                                                case 4:
                                                    $display = 'block';
                                                    break;                                                 
                                                default:
                                                    $display = 'none';
                                                    break;
                                            }


                                            ?>

                                                <div class="col s12 l6" style="display: <?php echo $display ?>">
                                                    <div class="app-detail-item">
                                                        <div class="app-item-heading">
                                                            <p>Confirmation Report</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12">
                                                                    <ul>

                                                                        <li>
                                                                            <p class="app-item-content-head">Institute Confirmation Report</p>
                                                                            <p class="app-item-content"><img src="<?php echo base_url() ?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo base_url().'institute/student/institute-certificate/'.urlencode(base64_encode($result->id)) ?>">PDF</a></p>
                                                                        </li>

                                                                        <li style="display: <?php echo  $dis1  ?>">
                                                                            <p class="app-item-content-head">Industry Confirmation Report</p>
                                                                            <p class="app-item-content"><img src="<?php echo base_url() ?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo base_url().'industry/industry-certificate/'.urlencode(base64_encode($result->id)) ?>">PDF</a></p>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End right board -->
                </div>
            </div>
        </section>


    <!-- End Body form  -->
        <section>

        </section>

    <!-- footer -->
        
    <?php $this->load->view('includes/footer'); ?>
    <!-- End footer --> 
    </div>
             


<!-- scripts -->

<script>
    <?php $this->load->view('includes/message'); ?>
</script>
<script>
   


    var app = new Vue({
        el: '#app',
        data: {
            loader:false,
            currentpsw: '',
            npsw: '',
            cpsw: '',

        },  

        methods:{
            
        }
    })
</script>



</body>
</html>