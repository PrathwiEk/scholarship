<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible " content="ie=edge ">
    <title>Scholarship</title>
    <link rel="stylesheet" href="<?php echo $this->config->item('web_url') ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('web_url') ?>assets/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons " rel="stylesheet ">
    <!-- data table -->
    <link rel="stylesheet " href="<?php echo $this->config->item('web_url') ?>assets/dataTable/datatables.min.css ">
    <link rel="stylesheet " href="<?php echo $this->config->item('web_url') ?>assets/dataTable/button/css/buttons.dataTables.css ">
</head>

<body>
    <div id="app ">
    <?php $this->load->view('include/header'); ?>

        <!-- Body form  -->
        <section class="board ">
            <div class="container-wrap1 ">
                <div class="row m0 ">
                    <div class="col s12 m3 l3 hide-on-med-and-down ">
                        <div class="menu-left ">
                        <?php $this->load->view('include/menu'); ?>
                        </div>
                    </div>
                    <!-- End menu-->

                    <div class="col s12 m9 l9 ">
                        <div class="card darken-1 ">
                            <div class="card-content bord-right ">
                                <div class="title-list ">
                                    <span class="list-title ">Employee  List</span>
                                    <a href="<?php echo base_url() ?>employee/add" class="back-btn z-depth-1 waves-effect waves-ligh hoverable add-btn">
                                        <i class="material-icons add-icon ">add</i><span>Add New Employee</span></a>
                                    <select class="browser-default" id="short">
                                            <option value="10">2019 - 2020</option>
                                            <option value="50">2018 - 2019</option>
                                            <option value="150">2017  - 2018</option>
                                </select>
                                </div>
                                <div class="board-content ">
                                    <div class="hr-list">
                                        <table id="dynamic" class="striped ">
                                            <thead class="thead-list">
                                                <th class="h5-para-p2">Name</th>
                                                <th class="h5-para-p2">Email</th>
                                                <th class="h5-para-p2">Phone No</th>
                                                <th class="h5-para-p2">Employee Designation</th>
                                                <th class="h5-para-p2">Reg Date</th>
                                                <th class="h5-para-p2">Status</th>
                                                <th class="h5-para-p2">Action</th>
                                            </thead>
                                            <tbody class="tbody-list">
                                                <tr role="row" class="odd">
                                                    <td>ISRTCr</td>
                                                    <td class="truncate">example@gmail.com</td>
                                                    <td>989890989</td>
                                                    <td>Financial</td>
                                                    <td class="">22-10-209</td>
                                                    <td class="">
                                                        <p class="status">Active</p>
                                                    </td>
                                                    <td class="action-btn center-align">
                                                        <a href="" class="green white-text"> <i class="material-icons action-icon ">remove_red_eye</i></a>
                                                        <a href="" class="red white-text"> <i class="material-icons action-icon ">delete</i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End right board -->
                </div>
            </div>
        </section>

        <!-- bulk upload file -->
        <!-- Modal Structure -->
        <!-- Modal Structure -->
        <div id="import" class="modal">
            <div class="modal-content company-mc">
                <h4>Bulk Upload Document</h4>
                <a href="#!" class="modal-close">
                    <i class="material-icons cc-close">close</i>
                </a>
            </div>
            <div class="modal-footer company-mf">
                <form action="">
                    <div class="form-file">
                        <div class="row">
                            <div class="col l12 s12 m12">
                                <div class="file-field input-field col l12 m0 upload-fil">
                                    <div class="btn ">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" placeholder="Upload hr detail" type="text" required="">
                                    </div>
                                </div>
                                <div class="col l12">
                                    <div class="ff-inp">
                                        <p><b>Note:</b>File should be in .pdf / .jpg format Size should be not more than 200KB</p>
                                    </div>
                                </div>
                                <div class="col l12 m12 s12">
                                    <center> <button class="btn-sub z-depth-1 waves-effect waves-light">
                                        Submit</button></center>
                                </div>
                            </div>
                        </div>


                    </div>

                </form>

            </div>
        </div>
        <!-- footer -->
        <?php $this->load->view('include/footer'); ?>
        <!-- End footer -->
    </div>



    <!-- scripts -->
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/vue.js "></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/materialize.min.js "></script>
    <script src="<?php echo $this->config->item('web_url') ?>assets/js/axios.min.js "></script>
    <!-- data table -->
    <script type="text/javascript " src="<?php echo $this->config->item('web_url') ?>assets/dataTable/datatables.min.js "></script>
    <script type="text/javascript " src="<?php echo $this->config->item('web_url') ?>assets/dataTable/button/js/dataTables.buttons.min.js "></script>
    <script type="text/javascript " src="<?php echo $this->config->item('web_url') ?>assets/dataTable/button/js/buttons.flash.min.js "></script>
    <script type="text/javascript " src="<?php echo $this->config->item('web_url') ?>assets/dataTable/button/js/buttons.html5.min.js "></script>
    <script type="text/javascript " src="<?php echo $this->config->item('web_url') ?>assets/dataTable/button/js/pdfmake.min.js "></script>
    <script type="text/javascript " src="<?php echo $this->config->item('web_url') ?>assets/dataTable/button/js/vfs_fonts.js "></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js "></script>
    <!-- data table -->
    <?php $this->load->view('include/menu'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var instances = M.Sidenav.init(document.querySelectorAll('.sidenav'));
            var gropDown = M.Dropdown.init(document.querySelectorAll('.dropdown-trigger'), {
                constrainWidth: false,
                alignment: 'right'
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'csv'
                ]

            });
            $('select').formSelect();
            $('.modal').modal();
        });
    </script>
</body>


</html>`