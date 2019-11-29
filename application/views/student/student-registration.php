<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarship</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css">
</head>
<body>
    <?php $this->load->view('includes/header'); ?>
    

    <!-- Registration form  -->
    <section class="reg-block row m0" id='app'>
        <div class="container-wrap2">
            <div class="col s12 m12 l10 push-l1 p0">
                    <div class="reg-block-content">
                    
                    <div class="col s12 m6 push-m6 push-l6 l6 reg-right">
                        <div class="form-block">
                            <div class="card-box">
                                <div class="card-heading">
                                    <p class="m0">Student Registration</p>
                                </div>
                                <form ref="form" @submit.prevent="checkForm" action="<?php echo base_url('student/submit-register') ?>" method="post" enctype="multipart/form-data" id="registerForm">
                                <div class="card-body row m0">
                                    <div class="input-field col s12">
                                        <input  id="email" @change="emailCheck()" name="email" v-model="email" type="email" class="validate" required>
                                        <label for="email">Email ID</label>
                                        <span class="helper-text red-text">{{ emailError }}</span>
                                    </div>

                                    <div class="input-field col s12">
                                        <input  id="phone" @change="mobileCheck()" name="mobile" v-model="mobile" type="text" class="validate" required>
                                        <label for="phone">Mobile No</label>
                                        <span class="helper-text red-text">{{mobileError}}</span>
                                    </div>

                                    <div class="input-field col s12">
                                        <input  id="password" v-model="psw" name="password" type="password" class="validate" required>
                                        <label for="password">Password</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input  id="cpassword" v-on:keyup="checkCpsw" name="cnpassword" v-model="cpsw" type="password" class="validate" required>
                                        <label for="cpassword">Confirm Password</label>
                                        <span class="helper-text red-text">{{confError}}</span>
                                    </div>

                                    <div class="input-field col s12">
                                        <div class="g-recaptcha"data-sitekey="6LfMhr0UAAAAAPOaSXvx2hfk0P_ruX4KDruHyu06"></div> 
                                        <span class="helper-text red-text">{{ captcha }}</span>
                                    </div>

                                    <div class="input-field col s12">
                                        <button class="waves-effect waves-light hoverable btn-theme btn">Register</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 pull-m6 pull-l6 m6 l6 reg-left valign-wrapper">
                        <div class="reg-left-box ">
                            <div class="contents">
                                <p>Welcome To</p>
                                <p>Karnataka Labour Welfare Board</p>
                                <p>If You Have an Account ? <a href="<?php echo base_url('student/login') ?>">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- footer -->
    

    <?php $this->load->view('includes/footer'); ?>
              


<!-- scripts -->
<script src="<?php echo base_url() ?>assets/js/vue.js"></script>
<script src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
<script src="<?php echo base_url()?>assets/js/axios.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    <?php $this->load->view('includes/message'); ?>
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var instances = M.FormSelect.init(document.querySelectorAll('select'));
    });


    var app = new Vue({
        el: '#app',
        data: {
            industry: '',
            mobile: '',
            email: '',
            psw: '',
            cpsw: '',
            emailError: '',
            mobileError: '',
            confError:'',
            captcha:'',
        },

        methods:{

            //check student email already exist
            emailCheck(){
                this.emailError='';
                const formData = new FormData();
                formData.append('email',this.email);
                axios.post('<?php echo base_url('student/emailcheck') ?>',formData)
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

                this.mobileError='';
                const formData = new FormData();
                formData.append('mobile',this.mobile);
                axios.post('<?php echo base_url('student/mobile_check') ?>', formData)
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
            },

            // check Password matching
            checkCpsw() {
                if (this.psw != this.cpsw) {
                    this.confError = 'Password must match with previous entry!';

                } else {
                    this.confError = '';
                }
            },
            checkForm() {
                if ((this.confError == '') && (this.mobileError == '') && (this.emailError == '')) {

                    this.$refs.form.submit();

                    // if (grecaptcha.getResponse() == '') {
                    //     this.captcha = 'Captcha is required';
                    // } else {
                    //     this.$refs.form.submit();
                    // }// 
                } else {}
            }

            
        },
    })
</script>
</body>
</html>