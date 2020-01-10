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
                    <div class="col s12 m3 l3 hide-on-med-and-down ">
                            <?php $this->load->view('include/menu'); ?>
                    </div>
                    <!-- End menu-->

                    <div class="col s12 m8">
                        <div class="card  darken-1">
                            <div class="card-content bord-right">
                                <div class="title-list">
                                    <span class="list-title">Institute Add</span>
                                    <a href="<?php echo base_url('institute') ?>"  class="back-btn z-depth-1 waves-effect waves-ligh">Back</a>
                                </div>
                                <div class="board-content">
                                    <div class="row m0">
                                        <div class="col s12 m12 l12">
                                            <form ref="form" @submit.prevent="formSubmit" action="<?php echo base_url('institute-add') ?>" method="post">
                                                <div class="input-field col m6">
                                                    <input id="name" name="name" type="text" class="validate" v-model="name" @change="namecheck()">
                                                    <label for="name">Institute Name</label>
                                                    <span class="helper-text red-text">{{nameError}}</span>
                                                </div>
                                                <div class="input-field col m6">
                                                    <input id="rno" name="rno" type="text" class="validate" v-model="regno" @change="regnocheck()">
                                                    <label for="rno">Register Number</label>
                                                     <span class="helper-text red-text">{{noError}}</span>
                                                </div>

                                                <div class="input-field col m6">
                                                    <input id="mtype" name="mtype" type="text" class="validate">
                                                    <label for="mtype">Management Type</label>
                                                </div>

                                                <div class="input-field col m6">
                                                    <input id="sccat" name="sccat" type="text" class="validate">
                                                    <label for="sccat">School Category</label>
                                                </div>

                                                <div class="input-field col m6">
                                                    <input id="sctype" name="sctype" type="text" class="validate">
                                                    <label for="sctype">School Type</label>
                                                </div>

                                                <div class="input-field col sel-hr s12 m6">
                                                    <select name="rural" class="">
                                                            <option value="" disabled selected>Choose Region Type</option>
                                                            <option value="Urban">Urban</option>
                                                            <option value="Rural">Rural</option>
                                                        </select>
                                                    <label>Region Type</label>
                                                </div>
                                                <div class="input-field col sel-hr s12 m6">
                                                    <select name="district" class="">
                                                            <option value="" disabled selected>Choose your option</option>
                                                            <?php
                                                            if (!empty($district)) {
                                                               foreach ($district as $key => $value) { 
                                                                   echo '<option value="'.$value->districtId.'">'.$value->district.'</option>';
                                                              } } ?>
                                                        </select>
                                                    <label>District</label>
                                                </div>
                                                <div class="input-field col sel-hr s12 m6">
                                                    <select name="taluk" class="">
                                                            <option value="" disabled selected>Choose your option</option>
                                                            <?php
                                                            if (!empty($taluk)) {
                                                               foreach ($taluk as $key => $value) { 
                                                                   echo '<option value="'.$value->tallukId.'">'.$value->talluk.'</option>';
                                                              } } ?>
                                                        </select>
                                                    <label>Taluk</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <button class="waves-effect waves-light hoverable btn-theme btn">Submit</button>
                                                </div>
                                            </form>
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
        <section>

        </section>

        <!-- footer -->

        <?php $this->load->view('include/footer'); ?>
        
        <!-- End footer -->
    </div>



    <!-- scripts -->
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/vue.js"></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/axios.min.js "></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var instances = M.FormSelect.init(document.querySelectorAll('select'));
        });
        document.addEventListener('DOMContentLoaded', function() {
            var instances = M.Sidenav.init(document.querySelectorAll('.sidenav'));
            var gropDown = M.Dropdown.init(document.querySelectorAll('.dropdown-trigger'), {
                constrainWidth: false,
                alignment: 'right'
            })
        });


        var app = new Vue({
            el: '#app',
            data: {
                name:'',
                nameError:'',
                regno:'',
                noError:'',

            },

            methods: {
                namecheck(){
                    this.nameError='';
                    const formData = new FormData();
                    formData.append('name',this.name);
                    axios.post('<?php echo base_url('school/namecheck') ?>',formData)
                    .then(response =>{
                        if(response.data == 1){
                            this.nameError = 'School Already Exist!';
                        }
                    }).catch(error => {
                        if (error.response) {
                            this.errormsg = error.response.data.error;
                        }
                    })

                },
                regnocheck(){
                    this.noError='';
                    const formData = new FormData();
                    formData.append('regno',this.regno);
                    axios.post('<?php echo base_url('school/regcheck') ?>',formData)
                    .then(response =>{
                        if(response.data == 1){
                            this.noError = 'Register Number Already Exist!';
                        }

                    }).catch(error => {
                        if (error.response) {
                            this.errormsg = error.response.data.error;
                        }
                    })

                },
                formSubmit() {
                if ((this.noError == '') && (this.nameError == '')) {
                    this.$refs.form.submit();
                }
            }
                
            }
        })
    </script>
</body>

</html>