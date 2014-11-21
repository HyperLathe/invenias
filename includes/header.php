<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <div class="navbar_toggle_text">MENU</div>
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/logo_invenias.gif" class="img-responsive" alt="Invenias"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="cta_button_array_mobile visible-xs-block">
        <ul>
          <li><a href="#">ASK A QUESTION</a></li>
          <li><a href="#">ATTEND A WEBINAR</a></li>
          <li><a href="#">REQUEST A DEMO</a></li>
          <li><a href="#">TRY IT FOR FREE</a></li>
        </ul>
      </div>
      <div class="header_toplinks hidden-xs">
        <a href="#">CUSTOMER HELP CENTRE</a>
        <a href="#">JOIN THE TEAM</a>
      </div>
    
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown navproduct  <?php if (strpos($_SERVER['PHP_SELF'], 'product.php')) echo 'active';?>"><a href="product.php" rel="submenu1" class="dropdown-toggle" data-toggle="dropdown">PRODUCT</a>
          <ul class="dropdown-menu hidden-sm hidden-md hidden-lg" role="menu">
            <li><a href="product.php">PRODUCT OVERVIEW</a></li>
            <li><a href="#">SOFTWARE FEATURES</a></li>
            <li><a href="#">INVENIAS DATABASE</a></li>
            <li><a href="client_devices.php">CLIENT DEVICES</a></li>
            <li><a href="#">INVENIAS CLOUD</a></li>
            <li><a href="#">PRICING</a></li>
          </ul>  
        </li>
        <li class="dropdown <?php if (strpos($_SERVER['PHP_SELF'], 'services.php')) echo 'active';?>"><a href="services.php" rel="submenu2" class="dropdown-toggle" data-toggle="dropdown">SERVICES</a>
          <ul class="dropdown-menu hidden-sm hidden-md hidden-lg" role="menu">
            <li><a href="services.php">SERVICE OVERVIEW</a></li>
            <li><a href="installation.php">INSTALLATION AND SETUP</a></li>
            <li><a href="dataimport.php">DATA IMPORT AND MIGRATION</a></li>
            <li><a href="training.php">TRAINING</a></li>
            <li><a href="customer_support.php">CUSTOMER SUPPORT</a></li>
          </ul>
        </li>
        <li class="<?php if (strpos($_SERVER['PHP_SELF'], 'customers.php')) echo 'active';?>"><a href="customers.php">CUSTOMERS</a></li>
        <li class="dropdown <?php if (strpos($_SERVER['PHP_SELF'], 'aboutus.php')) echo 'active';?>"><a href="#" rel="submenu4" class="dropdown-toggle" data-toggle="dropdown">ABOUT US</a>
          <ul class="dropdown-menu hidden-sm hidden-md hidden-lg" role="menu">
            <li><a href="#">COMPANY OVERVIEW</a></li>
            <li><a href="#">MANAGEMENT TEAM</a></li>
            <li><a href="#">INVESTORS</a></li>
            <li><a href="#">CAREERS</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if (strpos($_SERVER['PHP_SELF'], 'news.php')) echo 'active';?>"><a href="#" rel="submenu5" class="dropdown-toggle" data-toggle="dropdown">NEWS</a>
          <ul class="dropdown-menu hidden-sm hidden-md hidden-lg" role="menu">
            <li><a href="press_releases.php">PRESS RELEASES</a></li>
            <li><a href="#">CASE STUDIES</a></li>
            <li><a href="#">MONTHLY NEWSLETTER</a></li>
            <li><a href="#">PUBLICATIONS</a></li>
            <li><a href="#">BLOG</a></li>
          </ul>
        </li>
        <li class="<?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'active';?>"><a href="contact.php">CONTACT</a></li>
      </ul>
      
      <div class="header_toplinks_mobile visible-xs-block">
        <a href="#">CUSTOMER HELP CENTRE</a>
        <a href="#">JOIN THE TEAM</a>
      </div>
    </div><!-- /.navbar-collapse -->
  <div class="mega_menu hidden-xs">
    <div class="submenu_container" id="submenu1" style="display: none;">
      <ul>
        <li><a href="product.php">Product Overview</a></li>
        <li><a href="#" id="innermenu-toggle1">Software Features <span class="glyphicon glyphicon-play"></span></a></li>
        <li><a href="#">Invenias Database</a></li>
        <li><a href="#" id="innermenu-toggle2">Client Devices <span class="glyphicon glyphicon-play"></span></a></li>
        <li><a href="#">Invenias Cloud</a></li>
        <li><a href="#">Pricing</a></li>
      </ul>
        <div>
          <div class="innermenu_container" id="innermenu1" style="display: none;">
            <ul>
              <li><a href="#">Invenias Database</a></li>
              <li><a href="#">Assignment Workspace</a></li>
              <li><a href="#">CRM</a></li>
              <li><a href="#">Outlook and Office Integration</a></li>
              <li><a href="#">Web and Social Integration</a></li>
              <li><a href="#">Reporting</a></li>
              <li><a href="#">Managing User and System Settings</a></li>
            </ul>
          </div>
          <div class="innermenu_container" id="innermenu2" style="display: none;">
            <ul>
              <li><a href="client_devices.php">Client Devices Overview</a></li>
              <li><a href="#">Windows Desktop</a></li>
              <li><a href="#">Mobile Apps</a></li>
              <li><a href="#">Invenias on Windows Virtual Desktop</a></li>
              <li><a href="#">Invenias on Mac</a></li>
            </ul>
          </div>
        </div>
        <div class="view_demo_box">
          <a href="#"><span><img src="images/icon_play_video.gif" alt="View Demo" class="img-responsive"></span> View Demo</a>
          <a href="#" class="view_demo_image"><img src="images/viewdemo.jpg" alt="View Demo" class="img-responsive"></a>
        </div>  
    </div>
    <div class="submenu_container" id="submenu2" style="display: none;">
      <ul>
        <li><a href="services.php">Service Overview</a></li>
        <li><a href="installation.php">Installation and SetUp</a></li>
        <li><a href="dataimport.php">Data Import and Migration</a></li>
        <li><a href="training.php">Training</a></li>
        <li><a href="customer_support.php">Customer Support</a></li>
      </ul>
      <div class="nav_purple_box">
        <h3>Contact us today</h3>
        <p>For a free trial or a one-to-one demonstration with our sales team.</p>
        <ul>
          <li><a href="#">EMEA<span class="nav_contact_link">Click here </span></a></li>
          <li><a href="#">Americas<span class="nav_contact_link">Click here </span></a></li>
          <li><a href="#">APAC<span class="nav_contact_link">Click here </span></a></li>
        </ul>
      </div>
    </div>
    <div class="submenu_container" id="submenu4" style="display: none;">
      <ul>
        <li><a href="#">Company Overview</a></li>
        <li><a href="#">Management Team</a></li>
        <li><a href="#">Investors</a></li>
        <li><a href="#">Careers</a></li>
      </ul>
      <div class="nav_purple_box">
        <img class="purple_box_icon" src="images/nav_demo_speech.png" alt="Request a Demo">
        <h3>Request a Demo</h3>
        <p>For a live demo or more information about Invenias, please complete this short form.</p>
        <form>
          <ul>
            <li><label>First Name</label><input type="text" tabindex="1" maxlength="255" value="" id="FirstName" name="FirstName" class="mktFormText mktFormString mktFReq"></li>
            <li><label>Last Name</label><input type="text" tabindex="2" maxlength="255" value="" id="LastName" name="LastName" class="mktFormText mktFormString mktFReq"></li>
            <li><label>Email Address</label><input type="text" tabindex="3" maxlength="255" value="" id="Email" name="Email" class="mktFormText mktFormEmail mktFReq"></li>
            <li><label>&nbsp;</label><input type="submit" class="submit_button" onclick="formSubmit(document.getElementById(&quot;mktForm_1014&quot;)); return false;" name="submitButton" value="Send" id="mktFrmSubmit">&nbsp;<input type="reset" onclick="formReset(document.getElementById(&quot;mktForm_1014&quot;)); return false;" name="resetButton" value="Clear" id="mktFrmReset" style="display: none;"></li> 
          </ul>
        </form>
      </div>
    </div>
    <div class="submenu_container" id="submenu5" style="display: none;">
      <ul>
        <li><a href="press_releases.php">Press Releases</a></li>
        <li><a href="#">Case Studies</a></li>
        <li><a href="#">Monthly Newsletter</a></li>
        <li><a href="#">Publications</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>  
  </div>

  <div class="cta_button_array hidden-xs">
    <ul>
      <li><a href="#">ASK A QUESTION</a></li>
      <li><a href="#">ATTEND A WEBINAR</a></li>
      <li><a href="#">REQUEST A DEMO</a></li>
      <li><a href="#">TRY IT FOR FREE</a></li>
    </ul>
  </div>

  </div><!-- /.container-fluid -->
  
</nav>




