<div class="topbar-style navbar-static-top" style="margin-bottom:25px;">
    <nav class="navbar navbar-default">
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
       <a href="<?php echo base_url().$language.'/home/' ?>" class="pull-left">
            <span class="lobster color-green bold" style="text-shadow: 1px 1px #007700;font-family: 'Candal', sans-serif;">
              <object type="image/svg+xml" data="<?php  echo site_url("images/icons/svg/books8.svg"); ?>" class="svg">Your browser does not support SVG</object>
                    
             Lesson Learned</span>
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav static-home-nav  margin-mini" >
        <li class="active ">
          <a href="#" class=" static-link">
            <i class="glyphicon glyphicon-home active"> </i> 
            <?php echo $this->lang->line('main_first_item'); ?> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li>
          <a class="  static-link" href="/">
            <i class="glyphicon glyphicon-user"></i> 

            <?php echo $this->lang->line('main_second_item'); ?>
          </a>
        </li>
       <li> 
          <a class="static-link" href="/work"><i class="glyphicon glyphicon-home active">
          </i> <?php echo $this->lang->line('main_third_item'); ?>
         </a>
      </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle static-link" data-toggle="dropdown"  aria-expanded="false">
            <i class="glyphicon glyphicon-leaf active"> </i> 
            <?php echo $this->lang->line('main_fourth_item'); ?> 
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#"><?php echo $this->lang->line('fourth_sub_category1'); ?> </a></li>
            <li><a href="#"><?php echo $this->lang->line('fourth_sub_category2'); ?> </a></li>
            <li><a href="#"><?php echo $this->lang->line('fourth_sub_category3'); ?> </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><?php echo $this->lang->line('fourth_sub_category5'); ?>  </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><?php echo $this->lang->line('fourth_sub_category5'); ?> </a></li>
          </ul>
        </li>
      </ul>

      
    
      






          <ul class="nav navbar-nav navbar-right pull-right">
        <li class="btn-green-display">
          <button data-toggle="modal" data-target="#hr-dialog-4397332843" class="btn btn-flat btn-green "  onclick="modal_toggle('login')">
            <?php echo $this->lang->line('btn_login'); ?>
          </button>
        </li>
        <li class="btn-green-display">
          <button href="#" data-toggle="modal" data-target="#hr-dialog-4397332843" class="btn btn-flat btn-green "  onclick="modal_toggle('signup')">
            <?php echo $this->lang->line('btn_signup'); ?>
          </button>
        </li>
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle static-link" data-toggle="dropdown" role="button"  aria-expanded="false">
            <?php echo $this->lang->line('btn_option'); ?>
             <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href=" <?php echo 'home/change_language/sr/'.$total_url;  ?>" class="static-link">
              <img src="<?php echo site_url('images/icons/Flag_of_the_United_Kingdom.png'); ?>" alt="united kingdom flag" style="width:20px;height:12px;padding:2px;margin-bottom:8px;"/>
              English 
            </a>
          </li>
            <li>
              <a href="<?php echo 'home/change_language/sr/';  ?>" class="static-link">
                <img src="<?php echo site_url('images/icons/Flag_of_Serbia.png'); ?>" alt="serbian flag" style="width:22px;height:15px;padding:2px;margin-bottom:8px;"/>
                Serbian
              </a>
            </li>
            
            <li role="separator" class="divider"></li>
            <li class="btn-green-mini"><a href="#">User login:</a></li>
            <li class="btn-green-mini"><a href="#" class="btn btn-flat btn-green "><?php echo $this->lang->line('btn_login'); ?></a></li>
            <li class="btn-green-mini"> <a href="#" class="btn btn-flat btn-green btn-green-mini"><?php echo $this->lang->line('btn_signup'); ?></a></li>
            
          </ul>
        </li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<script type="text/javascript">
$('.dropdown-toggle').dropdown().fadein();



</script>
