<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarship</title>
    <link rel="stylesheet" href="<?php echo $this->config->item('web_url') ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('web_url') ?>assets/css/materialize.min.css">
</head>

<body>
    <div id="app">
<?php $this->load->view('include/header'); ?>

    <!-- form section -->
    <section class="bg pt30 pb30 reg-block">
        <div class="container">
            <div class="row m0">
                <div class="col l10 offset-l1">
                    <div class="card instreg">
                        <div class="card-content">
                            <div class="card-outer-heading">
                                Company Registration
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="input-field col m6">
                                        <input id="name" name="c_name" type="email" class="validate">
                                        <label for="c_name">Email</label>
                                    </div>

                                    <div class="input-field col m6">
                                        <input id="phone" name="c_phone" type="text" class="validate">
                                        <label for="c_phone">Mobile No</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <select name="c_taluk">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                        <label>Taluk</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <select name="c_district">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                        <label>District</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <select name="c_district">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                        <label>City</label>
                                    </div>
                                    <div class="input-field col m6">
                                        <input id="pincode" name="c_pincode" type="text" class="validate">
                                        <label for="c_pincode">Pin Code</label>
                                    </div>
                                    <div class="input-field col m12">
                                        <select name="c_coname">
                                            <option value="" disabled selected>Select Your Company</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                        <label>Company Name</label>
                                    </div>
                                    <div class="input-field col m4">
                                        <input id="company-reg" type="text" class="c_conreg" class="validate">
                                        <label for="c_conreg">Company Reg No</label>
                                    </div>
                                    <div class="file-field input-field col s12 m8">
                                        <div class="btn ">
                                            <span>File</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" placeholder="Upload company Reg Doc" type="text">
                                        </div>
                                    </div>
                                    <div class="input-field col m4">
                                        <input id="company-reg" type="text" class="c_gst" class="validate">
                                        <label for="c_gst">GSTIN No</label>
                                    </div>
                                    <div class="file-field input-field col s12 m8">
                                        <div class="btn ">
                                            <span>File</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" placeholder="Upload PAN Card File" type="text">
                                        </div>
                                    </div>
                                    <div class="input-field col m4">
                                        <input id="company-reg" type="text" class="c_gst" class="validate">
                                        <label for="c_gst">PAN Card No</label>
                                    </div>
                                    <div class="file-field input-field col s12 m8">
                                        <div class="btn ">
                                            <span>File</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" placeholder="Upload GSTIN Doc File" type="text">
                                        </div>
                                    </div>
                                    <div class="input-field col s12 m12">
                                        <textarea id="textarea1" name=:c_address class="materialize-textarea"></textarea>
                                        <label for="textarea1">Address</label>
                                    </div>
                                    <div class="input-field col m12">
                                        <input id="password" type="text" class="c_password" class="validate">
                                        <label for="c_password">Password</label>
                                    </div>
                                    <div class="input-field col m12">
                                        <input id="confpassword" type="text" class="c_confpassword" class="validate">
                                        <label for="c_confpassword">Confirm Password</label>
                                    </div>
                                    <div class="input-field col m12 ">
                                        <button class="waves-effect waves-light hoverable btn-theme btn">Submit</button>
                                        <span class="com-reg">If You Have an Account ?<a href="#">Login</a></span>
                                    </div>
                                    <div class="input-field col m12 ">
                                        <p class="click-com">If You Company is Not Available in Above List - <a href="#">Click Here To Submit your Details</a></p>
                                    </div>
                                    <div class="clearfix"></div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

</div>



    <!-- scripts -->
    <script src="../assets/js/vue.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var instances = M.FormSelect.init(document.querySelectorAll('select'));
        });


        var app = new Vue({
            el: '#app',
            data: {

            },

            methods: {


            }
        })
    </script>
</body>

</html>