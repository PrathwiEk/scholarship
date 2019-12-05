<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarship</title>
    <link rel="stylesheet" href="<?php echo $this->config->item('web_url') ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('web_url') ?>assets/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div id="app">
    <?php $this->load->view('include/header'); ?>

    <!-- Body form  -->
        <section class="board">
            <div class="container-wrap1">
                <div class="row m0">
                <div class="col s12 m3 hide-on-med-and-down">
                        <?php $this->load->view('include/menu'); ?>
                    </div> <!-- End menu-->

                    <div class="col s12 m9">
                        <div class="card  darken-1">
                            <div class="card-content bord-right">
                                <span class="card-title">Scholarship Application Detail</span>
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
                                                                            <p class="app-item-content-head">Name</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->name))?$result->name:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Father Name</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->father_name))?$result->father_name:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Mother Name</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->mothor_name))?$result->mothor_name:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Mobile Number</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->parent_phone))?$result->parent_phone:'___'; ?></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col s12 l8">
                                                                    <ul>
                                                                        <li>
                                                                            <p class="app-item-content-head">Present Class</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->class))?$result->class:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Present School Name</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->schoolName))?$result->schoolName:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Present School Address</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->sclAddrss))?$result->sclAddrss:'___'; ?></p>
                                                                        </li>
                                                                        <li class="doted-divider"></li>
                                                                        <li>
                                                                            <p class="app-item-content-head">Student Present  Address</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->address))?$result->address:'___'; ?></p>
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
                                                                            <p class="app-item-content"><?php echo (!empty($result->prv_class))?$result->prv_class:'___-'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Marks</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->prv_marks))?$result->prv_marks:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Marks Card Copy</p>
                                                                            <p class="app-item-content"><img src="<?php echo $this->config->item('web_url') ?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->prv_marks))?$this->config->item('web_url').$result->prv_markcard:'#'; ?>"> markscard </a></p>
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
                                                            <p>Scheduled Castes / Scheduled Tribes? Certificate</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12">
                                                                    <ul>
                                                                        <li>
                                                                            <p class="app-item-content-head">Scheduled Castes / Scheduled Tribes</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->is_scst))?'Yes':'No'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Cast Certificate File</p>
                                                                            <p class="app-item-content"><img src="<?php echo $this->config->item('web_url') ?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->cast_certificate))?$this->config->item('web_url').$result->cast_certificate:'#'; ?>"> Cast-certificate </a></p>
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
                                                                            <p class="app-item-content-head">parent / Guardian Name </p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->pName))?$result->pName:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Who is Working </p>
                                                                            <p class="app-item-content"><?php if($result->who_working =='1'){ echo 'Father'; }elseif($result->who_working =='2'){ echo 'mother'; }else{ echo 'Parent'; } ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Relationship between student & parent</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->relationship ))?$result->relationship:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Monthly Salary</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->msalary))?$result->msalary:'___'; ?></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col s12 m6">
                                                                    <ul>
                                                                        <li>
                                                                            <p class="app-item-content-head">Industry Name </p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->indName))?$result->indName:'___'; ?></p>
                                                                        </li>

                                                                        <li class="row">
                                                                            <div class="col s12 m6 ">
                                                                                <p class="app-item-content-head">Taluk</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->talqName))?$result->talqName:'___'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">District</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->dstctName))?$result->dstctName:'___'; ?></p>
                                                                            </div>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Pin Code</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->indPincode))?$result->indPincode:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Industry Address</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->ind_address))?$result->ind_address:'___'; ?></p>
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
                                                            <p>Aadhaar card Detail</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12">
                                                                    <ul>
                                                                        <li>
                                                                            <p class="app-item-content-head">Adhaar</p>
                                                                            <p class="app-item-content"><?php echo (!empty($result->adharcard_no))?$result->adharcard_no:'___'; ?></p>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Adhaar card File</p>
                                                                            <p class="app-item-content"><img src="<?php echo $this->config->item('web_url') ?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->adharcard_file))?$this->config->item('web_url').$result->adharcard_file:'#'; ?>">Aadhar Xerox</a></p>
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
                                                            <p>Bank Detail</p>
                                                        </div>
                                                        <div class="app-item-body">
                                                            <div class="row m0">
                                                                <div class="col s12">
                                                                    <ul>
                                                                        <li class="row">
                                                                            <div class="col s12 m6 ">
                                                                                <p class="app-item-content-head">Bank name</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->bnkName))?$result->bnkName:'___'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">Branch Name</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->branch))?$result->branch:'___'; ?></p>
                                                                            </div>
                                                                        </li>

                                                                        <li class="row">
                                                                            <div class="col s12 m6 ">
                                                                                <p class="app-item-content-head">Account Number</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->acc_no))?$result->acc_no:'___'; ?></p>
                                                                            </div>
                                                                            <div class="col s12 m6">
                                                                                <p class="app-item-content-head">IFSC Code No</p>
                                                                                <p class="app-item-content"><?php echo (!empty($result->ifsc))?$result->ifsc:'___'; ?></p>
                                                                            </div>
                                                                        </li>

                                                                        <li>
                                                                            <p class="app-item-content-head">Passbook Front Page Copy</p>
                                                                            <p class="app-item-content"><img src="<?php echo $this->config->item('web_url') ?>assets/image/pdf.svg"  class="pdf-icon" alt=""> <a target="_blank" href="<?php echo (!empty($result->passbook))?$this->config->item('web_url').$result->passbook:'#'; ?>">Passbook</a></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End-->

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
        
    <?php $this->load->view('include/footer'); ?>
    <!-- End footer --> 
    </div>
             


<!-- scripts -->
<script src="<?php echo $this->config->item('web_url') ?>assets/js/vue.js"></script>
<script src="<?php echo $this->config->item('web_url') ?>assets/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
<script src="<?php echo $this->config->item('web_url') ?>assets/js/script.js"></script>
<?php $this->load->view('include/msg'); ?>
<script>
<script>
   


    var app = new Vue({
        el: '#app',
        data: {

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