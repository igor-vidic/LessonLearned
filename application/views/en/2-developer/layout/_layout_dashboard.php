
  <?php $this->load->view('en/0-components/headers/page_head'); ?>
 <body>
  

    <!-- START Navigation -->
<?php $this->load->view('en/3-user/components/navigations/navigation_static', $this->data); ?>




    <!-- END Navigation -->



 







<!-- Breadcrumbz -->
<div class="content-header">
        <div class="container bcrumb-position" style="">
            <div class="clearfix">
                <div class="pull-left  bcrumb" data-step="1" data-intro="Click here to go back to the company page" >
                <a href="/domains" class="backbone" >User</a>
                <i class="glyphicon glyphicon-chevron-right"></i>                    
                <a href="/domains/algorithms" class="backbone" >Categories</a>  
                <i class="glyphicon glyphicon-chevron-right"></i>                    
                <a href="/domains/algorithms/strings" >Courses</a>
                </div>
            </div>
        </div>
    </div>


<!-- Breadcrumbz -->


<div id="content" class="main_content">
<div class="dashboard-track">
<div class="clearfix">
  <div class="container transition challenge-container">    
    <div class="row" >




<?php $this->load->view('en/3-user/components/views/main_dashboard'); ?>
<?php //$this->load->view('en/3-user/components/sidebars/sidebar_course'); ?>


</div>









<?php $this->load->view('/en/3-user/components/footers/footer_white'); ?>
<?php $this->load->view('/en/3-user/components/footers/page_tail'); ?>