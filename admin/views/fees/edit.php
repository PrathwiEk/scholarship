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
</head>

<body>
    <div id="app">
    <?php $this->load->view('include/header'); ?>

        <!-- Body form  -->
        <section class="board hiegt-box">
            <div class="container-wrap1">
                <div class="row m0">
                    <div class="col s12 m3 hide-on-med-and-down">
                    <?php $this->load->view('include/menu'); ?>
                    </div>
                    <!-- End menu-->

                    <div class="col s12 m8">
                        <div class="card  darken-1">
                            <div class="card-content bord-right">
                                <div class="title-list">
                                    <span class="list-title">Fees Edit</span>
                                    <a href="<?php echo base_url('fees/manage') ?>" class="back-btn z-depth-1 waves-effect waves-ligh right">Back</a>
                                </div>
                                <div class="board-content">
                                    <div class="row m0">
                                        <div class="col s12 m12 l12">
                                            <form action="<?php echo base_url() ?>fees/update" method="post">

                                                <div class="input-field col s12 m8 l5 ad-selt2">
                                                    <select id="graduation" name="graduation" required="" class="select2 ">
                                                        <option value="" >Choose your option</option>
                                                        <?php if (!empty($grad)) {
                                                            foreach ($grad as $key => $value) { ?>
                                                                <option value="<?php echo $value->id ?>" <?php if($value->id == $result[0]->class){ echo 'selected'; } ?>><?php echo  $value->title ?></option>';
                                                        <?php } } ?>
                                                    </select>
                                                    <label for="graduation">Graduation</label>
                                                </div>

        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                

                                                <div class="input-field col m8 l5">
                                                    <input id="fees_am" name="fees_am" required type="text" class="validate" value="<?php echo $result[0]->amount ?>" >
                                                    <label for="fees_am">Fees Amount</label>
                                                </div>
                                                <input type="hidden" value="<?php echo $result[0]->feesId ?>" name="id">
                                                <div class="input-field col s12">
                                                    <button class="waves-effect waves-light hoverable btn-theme btn mr10">Submit</button>
                                                    <a href="<?php echo base_url('fees/manage') ?>" class="waves-effect waves-light hoverable btn-theme btn" >Back</a>
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


      

        <?php $this->load->view('include/footer'); ?>
        <!-- End footer -->
    </div>



    <!-- scripts -->
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/vue.js"></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/script.js"></script>
    <?php $this->load->view('include/msg'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var instances = M.FormSelect.init(document.querySelectorAll('.select2'));
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
                student: {
                    name: '',
                    email: '',
                    mobile: '',
                    profile: '',
                },
                profilePic: '',

            },

            methods: {
                onFileChange(e) {
                    const file = e.target.files[0];
                    this.student.profile = URL.createObjectURL(file);
                }
            }
        })
    </script>
</body>

</html>