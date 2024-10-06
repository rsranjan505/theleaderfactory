<header>
  <div class="navbar-fixed-top"> 
  <div class="top1 top">
  	<div class="container">
	    <div class="row">
        <div class="col-lg-6">
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
          <a href="#"><i class="fa fa-skype"></i></a>
        </div>
        <div class="col-lg-6 topright">  
          <a href="skype:...?call"><i class="fa fa-phone"> <span><?php echo $contact_number; ?></span></i></a>
          <a href="mailto:<?php echo $contact_email; ?>"><i class="fa fa-envelope last"> <span> <?php echo $contact_email; ?></span></i></a>
        </div>
      </div>
    </div> 
  </div>
  <!-- menu -->
  <nav class="navbar navbar-height1 menuswitch-js"> 
	  <div class="container navbar-inner">
	    <div class="row">
      <div class="col-lg-12">
      <div class="responsive-wrapper"> 
        <a class="navbar-brand" href="#">
          <!-- <img src="images/logo.png" alt=""/> -->
           The Leader Factory
        </a> 
        <div id="toggle-icon" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div> 
      <div class="collapse navbar-collapse navbar-ex1-collapse"> 
          <div class="cl-effect-12">
            <ul class="nav navbar-nav pull-right">
              <li class="<?php echo $page_name=='home' || $page_name=='' ? 'active' : ''?>"><a href="home">Home</a></li>          
              <li class="<?php echo $page_name=='about' ? 'active' : ''?>"><a href="about">About</a></li>
              <li class="<?php echo $page_name=='events' ? 'active' : ''?>"><a href="our-work">Our Work</a></li>
              <li class="<?php echo $page_name=='our-impact' ? 'active' : ''?>"><a href="our-impact">Our Impact</a></li>
              <li class="<?php echo $page_name=='media' ? 'active' : ''?>"><a href="media">Media</a></li>
              <li class="<?php echo $page_name=='contact' ? 'active' : ''?>"><a href="contact">Contact</a></li>
              <!-- <li><a href="#">Elements</a>
                <ul>
                  <li><a href="typography.html">Typography</a></li>
				          <li><a href="columns.html">Columns</a></li>
                  <li><a href="accordions_tabs.html">Accordions tabs</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="team.html">Team box</a></li>
                  <li><a href="icon_boxes.html">Icon boxes</a></li>
                  <li><a href="sections.html">Sections</a></li>
                  <li><a href="cta.html">CTA</a></li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
	    </div>
	  </div>
    </div>
  </nav>
  <!-- menu end -->
  </div>
  </header> 