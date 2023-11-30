<style>
    /*.othermenu .one,.othermenu .two,.othermenu .three,.othermenu .dropdown-item ,.othermenu .dropdown-item,.othermenu .dropdown-item{
    display: none;
    }*/
    ul 
    {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    ul li 
    {
      display: block;
      position: relative;
      float: left;
    }
    
    /* This hides the dropdowns */
    li ul 
    { 
      display: none; 
    }
    
    ul li a 
    {
      display: block;
      padding: 1em;
      text-decoration: none;
      white-space: nowrap;
      color: #000;
    }
    
    ul li a:hover 
    { 
      background: transparent; 
    }
    
    /* Display the dropdown */
    li:hover > ul 
    {
      display: block;
      position: absolute;
    }
    
    li:hover > div 
    {
      display: block;
      position: absolute;
    }
    
    .othermenu:hover > div 
    {
      display: block;
      position: absolute;
      top: 18px;
      left: 175px;
    
    }
    
    li:hover li 
    { 
      float: none; 
    }
    
    li:hover a 
    { 
      background: #fff; 
    }
    
    li:hover li a:hover 
    { 
      background: #f4f6fa; 
      text-decoration: none; 
    }
    
    .main-navigation li ul li 
    { 
      border-top: 0; 
    }
    
    /* Displays second level dropdowns to the right of the first level dropdown */
    ul ul ul 
    {
      left: 100%;
      top: 0;
    }
    
    a.dropdown-item.active {
      background-color: #f4f6fa;
      color: black;
    }
    
    @media only screen and (min-width:1200px)
    {
      .userside .dropdown-menu-arrow:before
      {
        left: 6.75rem !important;
      }
    }
    
    @media only screen and (max-width:1200px)
    {
      .userside .dropdown-menu-arrow:before
      {
        left: 8.75rem !important;
      }
    }
    .dropselects
    {
      position: absolute;
      left: 21%;
    }
    @media only screen and (max-width: 1430px) {
      .payrollsubmenu:hover > div{
        left: -440px !important;
      }
      .reportsubmenu:hover > div{
        left: -175px !important; 
      }
      .listmenu{
        left: -194px !important;
      }
      .transactionsubmenu:hover > div{
        left: -178px !important;
      }
      .listmenu2{
        left: -177px !important;
      }
    }
    .listmenu{
      left: 175px;
    }
    @media only screen and (max-width: 1175px){
      .accountreportsubmenu:hover > div{
        left: -180px !important;
      }
      .accreportmenu{
        left: -178px !important;
      }
    }
    .accreportmenu{
      left: 175px;
    }
    a.dropdown-item.active {
      background-color: #206bc4 !important;
      color: #fff !important;
    }
    </style>
    <body class="antialiased">
      <div class="page">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
          <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
              <a href="<?php //echo base_url();?>Dashboard">
              <!--  <img src="<?php //echo base_url();?>assets/images/logo2.png"  alt="Sarco" width="324" height="55">  -->
                TASK MANAGER
             </a>
           </h1>
           
                
           
             <!--  <div class="dropselects">
                <form method="post" id="myform" action="<?php //echo base_url(); ?>Dashboard/session_reset" name="myform">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <select name="comp_code" id="company" class="form-control" style="background: url(<?php //echo base_url('');?>assets/br1.PNG) no-repeat right;-webkit-appearance: none;background-position-x: 243px;" onchange="get_year();">
                          <option>Select Company</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <select name="year" id="year" class="form-control" style="background: url(<?php //echo base_url('');?>assets/br1.PNG) no-repeat right;-webkit-appearance: none;background-position-x: 148px;">
                          <option value="">Select Year</option>
                        
                        </select>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <button type="submit" class="btn" onclick="form_submit();">Proceed</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div> -->
              <ul class="navbar-nav flex-row order-md-last userside">
                <!-- <li class="nav-item dropdown d-none d-md-flex me-3">
                  <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                    <span class="badge bg-red"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                    <div class="card">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                      </div>
                    </div>
                  </div>
                </li> -->
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                   <div class="d-none d-xl-block ps-2">
                    <div><?php //echo "User : ".$this->session->userdata('username');?></div>
                    <!-- <div class="mt-1 small text-muted">UI Designer</div> -->
                  </div>
                  <!-- Download SVG icon from http://tabler-icons.io/i/caret-down -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 15l-6 -6l-6 6h12" transform="rotate(180 12 12)" /></svg>
                  <!--  <span class="avatar avatar-sm" style="background-image: url(<?php //echo base_url();?>assets/src/static/avatars/000m.jpg)"></span> -->
                  
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <!-- <div class="dropdown-divider"></div> -->
                  
                </div>
              </li>
            </ul>
          </div>
        </header>
        <div class="navbar-expand-md">
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
              <div class="container-xl">
                <ul class="navbar-nav">
                                   
                    
                   
    
                                      


                    <li class="nav-item <?php echo ((isset($master_class) && $master_class == 'Global') ?  'active' : ''); ?>">
                      <a class="nav-link" href="{{route('task')}}" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                        </span>
                        <span class="nav-link-title">
                          Task Manager
                        </span>
                      </a>
                      
                    </li>                                  

                  </ul>
    
    
    
               
                </div>
              </div>
            </div>
          </div>
          <!-- nav end -->
    
         
    <!-- http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png -->