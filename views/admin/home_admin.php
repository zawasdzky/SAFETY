    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="hidden">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">Dashboard</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-link">
              <a href="dashboard.html">Home</a>
            </li>
            <li class="crumb-trail">Dashboard</li>
          </ol>
        </div>
        <div class="topbar-right">
          <div class="ib topbar-dropdown">
            <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
            <select id="topbar-multiple" class="hidden">
              <optgroup label="Filter By:">
                <option value="1-1">Last 30 Days</option>
                <option value="1-2" selected="selected">Last 60 Days</option>
                <option value="1-3">Last Year</option>
              </optgroup>
            </select>
          </div>
          <div class="ml15 ib va-m" id="toggle_sidemenu_r">
            <a href="#" class="pl5">
              <i class="fa fa-sign-in fs22 text-primary"></i>
              <span class="badge badge-hero badge-danger">3</span>
            </a>
          </div>
        </div>
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
        <div class="pl15 pr50">
          <h4> Administración Safety  </h4>
          <hr class="alt short">

            <div class="col-sm-4 col-xl-3">
              <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body" style="background-color: #1fd376; ">
                  <h1 class="fs30 mt5 mbn" style="color: white;"><i class="fa fa-envelope pr5"></i></h1>
                  <h6 class="text-success" style="color: white;"></h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <a href="<?php echo base_url();?>admin/Newsletters"><i class="fa fa-arrow-up pr5"></i><b>Newsletters</b></a>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-sm-4 col-xl-3">
              <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body" style="background-color: #f4ae1d; ">
                  <h1 class="fs30 mt5 mbn" style="color: white;"><i class="fa fa-check-square-o pr5"></i></h1>
                  <h6 class="text-success" style="color: white;"></h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <a href="<?php echo base_url();?>admin/Encuestas"><i class="fa fa-arrow-up pr5"></i><b>Encuestas</b></a>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-sm-4 col-xl-3">
              <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body" style="background-color: #3BAFDA; ">
                  <h1 class="fs30 mt5 mbn" style="color: white;"><i class="fa fa-text-height pr5"></i> - <i class="fa fa-video-camera pr5"></i></h1>
                  <h6 class="text-success" style="color: white;"></h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <a href="<?php echo base_url();?>admin/Varios"><i class="fa fa-arrow-up pr5"></i>  <b>Frases / Videos</b></a>
                  </span>
                </div>
              </div>
            </div>


        </div>
      </section>
      <!-- End: Content -->

    </section>

    <!-- Start: Right Sidebar -->
    <aside id="sidebar_right" class="nano affix">

      <!-- Start: Sidebar Right Content -->
      <div class="sidebar-right-content nano-content p15">
          <h5 class="title-divider text-muted mb20"> Server Statistics
            <span class="pull-right"> 2013
              <i class="fa fa-caret-down ml5"></i>
            </span>
          </h5>
          <div class="progress mh5">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
              <span class="fs11">DB Request</span>
            </div>
          </div>
          <div class="progress mh5">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
              <span class="fs11 text-left">Server Load</span>
            </div>
          </div>
          <div class="progress mh5">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
              <span class="fs11 text-left">Server Connections</span>
            </div>
          </div>
          <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
          <div class="row">
            <div class="col-xs-5">
              <h3 class="text-primary mn pl5">132</h3>
            </div>
            <div class="col-xs-7 text-right">
              <h3 class="text-success-dark mn">
                <i class="fa fa-caret-up"></i> 13.2% </h3>
            </div>
          </div>
          <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
          <div class="row">
            <div class="col-xs-5">
              <h3 class="text-primary mn pl5">212</h3>
            </div>
            <div class="col-xs-7 text-right">
              <h3 class="text-success-dark mn">
                <i class="fa fa-caret-up"></i> 25.6% </h3>
            </div>
          </div>
          <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
          <div class="row">
            <div class="col-xs-5">
              <h3 class="text-primary mn pl5">82.5</h3>
            </div>
            <div class="col-xs-7 text-right">
              <h3 class="text-danger mn">
                <i class="fa fa-caret-down"></i> 17.9% </h3>
            </div>
          </div>
          <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
            <span class="pull-right text-primary fw600">USA</span>
          </h5>
        </div>
        
    </aside>
    <!-- End: Right Sidebar -->

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo base_url();?>assets_admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url();?>assets_admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Theme Javascript -->
  <script src="<?php echo base_url();?>assets_admin/assets/js/utility/utility.js"></script>
  <script src="<?php echo base_url();?>assets_admin/assets/js/demo/demo.js"></script>
  <script src="<?php echo base_url();?>assets_admin/assets/js/main.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();


  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>
