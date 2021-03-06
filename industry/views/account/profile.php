<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarship</title>
    <link rel="stylesheet" href="<?php echo $this->config->item('web_url') ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('web_url') ?>assets/css/materialize.min.css">
    <link  rel="stylesheet" href="<?php echo $this->config->item('web_url') ?>assets/css/material-icons.css">
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/vue.js"></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/axios.min.js"></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/script.js"></script>
</head>

<body>
    <div id="app">
       <?php $this->load->view('include/header'); ?>

        <!-- Body form  -->
        <section class="board">
            <div class="container-wrap1">
                <div class="row m0">
                <?php $this->load->view('include/menu'); ?>
                    <!-- End menu-->

                    <div class="col s12 m8">
                        <div class="card">
                            <div class="card-content">
                                <div class="row m0">
                                    <div class="app-detail-items">
                                        <div class="col s12">
                                            <div class="app-detail-item">
                                                <div class="app-item-heading">
                                                    <p>INDUSTRY DETAILS</p>
                                                </div>
                                                <div class="app-item-body pl15 pr15">
                                                    <div class="row ">
                                                        <a href="#edtModal" class="waves-effect waves-light editButton modal-trigger"> <i class="material-icons tiny"> edit </i> Edit</a>
                                                        <div class="col s12 l6">
                                                            <ul>
                                                                <li>
                                                                    <p class="app-item-content-head">Industry Name</p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->indNAme))?$info->indNAme:'---'; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p class="app-item-content-head">Industry Reg.No</p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->reg_id))?$info->reg_id:'---'; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p class="app-item-content-head">GSTIN No</p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->gst_no))?$info->gst_no:'---'; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p class="app-item-content-head">PAN Card No</p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->pan_no))?$info->pan_no:'---'; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p class="app-item-content-head">Email</p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->email))?$info->email:'---'; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p class="app-item-content-head">Mobile No</p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->mobile))?$info->mobile:'---'; ?></p>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="col s12 l6">
                                                            <ul>
                                                                <li>
                                                                    <p class="app-item-content-head">Director Name </p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->director))?$info->director:'---'; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p class="app-item-content-head">District</p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->district))?$info->district:'---'; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p class="app-item-content-head">Taluk</p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->taluk))?$info->taluk:'---'; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p class="app-item-content-head">Full Address</p>
                                                                    <p class="app-item-content"><?php echo (!empty($info->address))?$info->address:'---'; ?>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m6">
                                            <div class="app-detail-item">
                                                <div class="app-item-heading">
                                                    <p>Industry Register file</p>
                                                </div>
                                                <div class="app-item-body">
                                                    <div class="row m0">
                                                        <div class="col s12">
                                                            <ul>
                                                                <li>
                                                                    <div class="app-item-content center">
                                                                        <img class="responsive-img" :src="certificate" alt="" >
                                                                        <button class="upload-btn " @click="SelectFile('regfile')"><i class="material-icons ">backup </i> Upload</button>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m6">
                                            <div class="app-detail-item">
                                                <div class="app-item-heading">
                                                    <p>GSTIN Certificate</p>
                                                </div>
                                                <div class="app-item-body">
                                                    <div class="row m0">
                                                        <div class="col s12">
                                                            <ul>
                                                                <li>
                                                                    <div class="app-item-content center">
                                                                        <img class="responsive-img" :src="gst" alt="">
                                                                        <button class="upload-btn " @click="SelectFile('gst')"><i class="material-icons ">backup </i> Upload</button>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m6">
                                            <div class="app-detail-item">
                                                <div class="app-item-heading">
                                                    <p>PAN CARD</p>
                                                </div>
                                                <div class="app-item-body">
                                                    <div class="row m0">
                                                        <div class="col s12">
                                                            <ul>
                                                                <li>
                                                                    <div class="app-item-content center">
                                                                        <img class="responsive-img" :src="pan" alt="">
                                                                        <button class="upload-btn " @click="SelectFile('pan')"><i class="material-icons ">backup </i> Upload</button>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                        <div class="col s12 m6">
                                            <div class="app-detail-item">
                                                <div class="app-item-heading">
                                                    <p>SEAL</p>
                                                </div>
                                                <div class="app-item-body">
                                                    <div class="row m0">
                                                        <div class="col s12">
                                                            <ul>
                                                                <li>
                                                                    <div class="app-item-content center">
                                                                        <img class="responsive-img" :src="seal" alt="">
                                                                        <button class="upload-btn " @click="SelectFile('seal')"><i class="material-icons ">backup </i> Upload</button>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col s12 m6">
                                            <div class="app-detail-item">
                                                <div class="app-item-heading">
                                                    <p>SIGNATURE</p>
                                                </div>
                                                <div class="app-item-body">
                                                    <div class="row m0">
                                                        <div class="col s12">
                                                            <ul>
                                                                <li>
                                                                    <div class="app-item-content center">
                                                                        <img class="responsive-img" :src="sign" alt="">
                                                                        <button class="upload-btn " @click="SelectFile('sign')"><i class="material-icons ">backup </i> Upload</button>
                                                                    </div>
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
                    <!-- End right board -->
                </div>
            </div>
        </section>


        <!-- End Body form  -->

        <input type="file" id="profileimg" @change="upload" ref="fileInput" class="hide" accept="image/*">
        <!-- End Body form  -->
        <div id="edtModal" class="modal modal-fixed-footer">
            <form ref="form" @submit.prevent="checkForm" action="<?php echo base_url() ?>dashboard/update" method="post">
                <div class="modal-content">
                    <h5>Edit Detail</h5>
                    <div class="row m0">
                        <div class="input-field col m6">
                            <input id="iname" readonly value="<?php echo (!empty($info->indNAme))?$info->indNAme:''; ?>" name="iname" type="text" required class="validate">
                            <label for="iname">Industry Name</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <select name="taluk" required id="taluk">
                                <option value="" disabled >Select Taluk</option>
                                <?php
                                if(!empty($taluk)){
                                    foreach ($taluk as $key => $value) {
                                       echo '<option value="'.$value->id.'" ';if($info->talluk == $value->id){ echo 'selected'; } echo ' >'.$value->title.'</option>';
                                    } }                              
                                ?>
                            </select>
                            <label for="taluk">Taluk</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <select name="district" required id="district">
                                <option value="" disabled >Select District</option>
                                <?php
                                if(!empty($district)){
                                    foreach ($district as $key => $value) {
                                       echo '<option value="'.$value->id.'" ';if($info->district == $value->id){ echo 'selected'; } echo ' >'.$value->title.'</option>';
                                    } }                              
                                ?>
                            </select>
                            <label for="district">District</label>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        </div>
                        <div class="input-field col m6">
                            <input id="director" value="<?php echo (!empty($info->director))?$info->director:''; ?>" type="text" name="director" class="validate" pattern="^[a-zA-Z0-9,._-!?@ ]*$">
                            <label for="director">Director Name</label>
                        </div>

                         <div class="input-field col m6">
                            <input id="email" name="email" type="email" required class="validate" v-model="email"  @change="emailCheck()">
                            <label for="email">Email</label>
                            <span class="helper-text red-text">{{ emailError }}</span>

                        </div>

                        <div class="input-field col m6">
                            <input id="number" name="number" type="number" required class="validate" v-model="mobile"  @change="mobileCheck()">
                            <label for="number">Phone Number</label>
                            <span class="helper-text red-text">{{mobileError}}</span>
                        </div>

                        <div class="input-field col m6 ">
                            <input id="gstno" name="gstno" value="<?php echo (!empty($info->gst_no))?$info->gst_no:''; ?>" type="text" class="validate" required minlength="15" maxlength="15">
                            <label for="gstno">Industry  GSTIN Number</label>
                        </div>


                        <div class="input-field col m6 ">
                            <input id="panno" value="<?php echo (!empty($info->pan_no))?$info->pan_no:''; ?>" name="panno" value="" type="text" class="validate" required minlength="10" maxlength="10">
                            <label for="panno">Industry PAN card Number</label>
                        </div>

                        <div class="input-field col s12 m12">
                            <textarea id="address" required name="address" class="materialize-textarea" pattern="^[a-zA-Z0-9,._-!?@ ]*$"><?php echo (!empty($info->address))?$info->address:''; ?></textarea>
                            <label for="address">Full Address</label>
                        </div>



                        <div class="clearfix"></div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a class="waves-effect waves-light hoverable red darken-4 btn modal-close">Cancel</a>
                    <button class="waves-effect waves-light hoverable btn-theme btn">Update</button>
                </div>
            </form>
        </div>
        <!-- footer -->

        <?php $this->load->view('include/footer'); ?>
        
        <!-- End footer -->
    </div>



    <!-- scripts -->
    <script>
        <?php $this->load->view('include/msg'); ?>
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, {
                preventScrolling: false
            });
        });

        var app = new Vue({
            el: '#app',
            data: {
                type: '',
                file: '',
                loader:false,
                pan: '<?php echo (!empty($info->pancard))?base_url('show-images/').$info->pancard:''; ?>',
                gst: '<?php echo (!empty($info->gst))?base_url('show-images/').$info->gst:''; ?>',
                certificate: '<?php echo (!empty($info->register_doc))?base_url('show-images/').$info->register_doc:''; ?>',
                seal: '<?php echo (!empty($info->seal))?base_url('show-images/').$info->seal:''; ?>',
                sign: '<?php echo (!empty($info->sign))?base_url('show-images/').$info->sign:''; ?>',
                mobile: '<?php echo (!empty($info->mobile))?$info->mobile:''; ?>',
                email: '<?php echo (!empty($info->email))?$info->email:''; ?>',
                emailError: '',
                mobileError: '',

            },
            mounted() {

            },
            methods: {
                SelectFile(type) {
                    this.type = type;
                    this.$refs.fileInput.click()
                },
                upload(e) {
                    loader:true;
                    const file = e.target.files[0];
                    formData = new FormData();
                    formData.append('file', file);
                    formData.append('type', this.type);
                    if(this.type == 'regfile'){
                        this.certificate = URL.createObjectURL(file);
                    }
                    else if(this.type == 'gst'){
                        this.gst = URL.createObjectURL(file);
                    } else if(this.type == 'pan'){
                        this.pan = URL.createObjectURL(file);
                    }else if(this.type == 'seal'){
                        this.seal = URL.createObjectURL(file);
                    }else if(this.type == 'sign'){
                        this.sign = URL.createObjectURL(file);
                    }

                    formData.append('<?php echo $this->security->get_csrf_token_name() ?>','<?php echo $this->security->get_csrf_hash() ?>');
                    axios.post('<?php echo base_url() ?>industry-doc', formData,{
                            headers: {
                            'Content-Type': 'multipart/form-data'
                            } 
                    })
                    .then(function (response) {
                        loader:false;
                        var msg = response.data.msg;
                        M.toast({html: msg, classes: 'green darken-2'});
                        self.disabled = true;
                    })
                    .catch(function (error) {
                        loader:false;
                        var msg = error.response.data.msg;
                        M.toast({html: msg, classes: 'red darken-4'});
                    })

                },

                                //check student email already exist
            emailCheck(){
                this.emailError='';
                const formData = new FormData();
                formData.append('email',this.email);
                formData.append('<?php echo $this->security->get_csrf_token_name() ?>','<?php echo $this->security->get_csrf_hash() ?>');
                axios.post('<?php echo base_url('account/emailcheck') ?>',formData)
                .then(response =>{
                    if (response.data == '1') {
                        this.emailError = 'This Email id already exist!';
                    } else {
                        this.emailError = '';
                    }

                }).catch(error => {
                    if (error.response) {
                        this.errormsg = error.response.data.error;
                    }
                })
            },
             //check student mobile already exist
             mobileCheck(){
                if(this.mobile.length != 10 ){
                    this.mobileError = 'Phone number must be 10 digits.';
                }else{
                    this.mobileError='1';
                    const formData = new FormData();
                    formData.append('mobile',this.mobile);
                    formData.append('<?php echo $this->security->get_csrf_token_name() ?>','<?php echo $this->security->get_csrf_hash() ?>');
                    axios.post('<?php echo base_url('account/inmobile_check') ?>', formData)
                    .then(response => {
                        if (response.data == '1') {
                            this.mobileError = 'This Mobile number already exist!';
                        } else {
                            this.mobileError = '';
                        }

                    }).catch(error =>{
                        if (error.response) {
                            this.errormsg = error.response.data.error;
                        }
                    } )
                }
            },
            checkForm() {
                if ((this.mobileError == '') && (this.emailError == '')) {
                    this.$refs.form.submit();
                }
            }
            }
        })
    </script>
</body>

</html>