<header class="">
            <div class="top-header">
                <div class="container ">
                    <div class="row m0">
                        
                        <div class="col s4 m4 push-m4">
                            <div class="center">
                                <img class="responsive-img" src="<?php echo $this->config->item('web_url') ?>assets/image/logo.png" alt="Karnataka Labour Welfare Board">
                            </div>
                        </div>
                        <div class="col s8 m4 pull-m4">
                                <div class="center-align p17 frt">
                                    <p class="top-header-title1">ಕರ್ನಾಟಕ ಸರ್ಕಾರ</p>
                                    <p class="top-header-title2">ಕರ್ನಾಟಕ ಕಾರ್ಮಿಕ ಕಲ್ಯಾಣ ಮಂಡಳಿ</p>
                                </div>
                        </div>
                        <div class="col s4 hide-on-small-only">
                            <div class="center p17">
                                <p class="top-header-title1">Government of Karnataka</p>
                                <p class="top-header-title2">Karnataka Labour Welfare Board</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="nav-block">
            <div class="nav-wrapper container-wrap1">
                <!-- <a href="#" class="brand-logo">Logo</a> -->
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile1" class="left hide-on-med-and-down">
                <li><a href="<?php echo $this->config->item('web_url') ?>">Home</a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php if ($this->session->userdata('sfn_id') == '') { ?>
                        <li><a href="<?php echo base_url('login')?>">Login</a></li>
                    <?php }else{ ?>
                        <li><a href="#!" class="dropdown-trigger my-prof" data-target='dropdown1'> <i class="material-icons user-nav-btn">account_circle</i> <span>My Profile</span></a></li>
                    <?php } ?> 
                </ul>
            </div>
            </nav>

            <ul class="sidenav" id="mobile-demo">
                <li><a href=" ">Home</a></li>
                <li><a href=" ">Hr List</a></li>
                <li><a href=" ">Scholarship Request List</a></li>
                <li><a href=" ">Scholarship Approval List</a></li>
                <li><a href=" ">Scholarship Reject List</a></li>
                <li><a href="<?php echo base_url() ?>profile"  class="<?php echo($this->uri->segment(1) == 'profile') ? 'active' :'' ?>">Account Settings</a></li>
                <li><a href="<?php echo base_url() ?>change-password"  class="<?php echo($this->uri->segment(1) == 'change-password') ? 'active' :'' ?>">Change Password</a></li>
                <li><a href="<?php echo base_url('student/logout')?>">Logout</a></li>
            </ul>

            <ul id='dropdown1' class='dropdown-content'>
              <li><a href="<?php echo base_url('profile')?>">Account Settings</a></li>
              <li><a href="<?php echo base_url('change-password')?>">Change Password</a></li>
              <li><a href="<?php echo base_url('logout')?>">Logout</a></li>
            </ul>
        </header>