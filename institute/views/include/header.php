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
              <li><a href="#!">Home</a></li>
            </ul>

            <ul id="nav-mobile" class="right hide-on-med-and-down" style="position:relative">
              <?php if($this->session->userdata('scinst') != ''){ ?>
                <li><a href="#!" class="dropdown-trigger" data-target='dropdown1'> <i class="material-icons user-nav-btn">account_circle</i> </a></li>
              <?php } else{ ?>
                <li><a href="#!">Login</a></li>
                <li><a href="#!">Registration</a></li>
              <?php } ?>
              
            </ul>
          </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="#!">Home</a></li>
            <li><a href="#!">Apply Scholarship</a></li>
            <li><a href="#!">Scholarship Status</a></li>
            <li><a href="#!">Application Detail</a></li>
            <li><a href="#!">Account Settings</a></li>
            <li><a href="#!">Logout</a></li>
            
        </ul>

        <ul id='dropdown1' class='dropdown-content' style="max-width:250px; min-width:250px">
          <li><a href="#!">Account Settings</a></li>
          <li><a href="#!">Application Status</a></li>
          <li><a href="#!">Logout</a></li>
          
        </ul>
    </header>