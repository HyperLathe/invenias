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
      <a class="navbar-brand" href="#"><img src="images/logo_invenias.gif" class="img-responsive" alt="Invenias"></a>
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
        <li class="dropdown" <?php if (strpos($_SERVER['PHP_SELF'], 'product.php')) echo 'active';?>><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCT</a>
          <div class="dropdown-menu" id="submenu1" role="menu">
            <ul>
              <li><a href="#">Product Overview</a></li>
              <li><a href="#" id="innermenu-toggle1">Software Features <span class="glyphicon glyphicon-play"></span></a></li>
              <li><a href="#">Invenias Database</a></li>
              <li><a href="#" id="innermenu-toggle2">Client Devices <span class="glyphicon glyphicon-play"></span></a></li>
              <li><a href="#">Invenias Cloud</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
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
            <div class="view_demo_box">
              <a href="#"><span><img src="images/icon_play_video.gif" alt="View Demo" class="img-responsive"></span> View Demo</a>
              <a href="#" class="view_demo_image"><img src="images/viewdemo.jpg" alt="View Demo" class="img-responsive"></a>
            </div> 
          </div>
        </li>
        <li class="dropdown" <?php if (strpos($_SERVER['PHP_SELF'], 'services.php')) echo 'active';?>><a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES</a>
          <div class="dropdown-menu submenu-container" id="submenu2" role="menu">
            <ul>
              <li><a href="#">Service Overview</a></li>
              <li><a href="#">Installation and SetUp</a></li>
              <li><a href="#">Data Import and Migration</a></li>
              <li><a href="#">Training</a></li>
              <li><a href="#">Customer Support</a></li>
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
        </li>
        <li <?php if (strpos($_SERVER['PHP_SELF'], 'customers.php')) echo 'active';?>><a href="#">CUSTOMERS</a></li>
        <li class="dropdown" <?php if (strpos($_SERVER['PHP_SELF'], 'aboutus.php')) echo 'active';?>><a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US</a>
          <div class="dropdown-menu submenu-container" id="submenu4" role="menu">
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
        </li>
        <li class="dropdown" <?php if (strpos($_SERVER['PHP_SELF'], 'news.php')) echo 'active';?>><a href="#" class="dropdown-toggle" data-toggle="dropdown">NEWS</a>
          <div class="dropdown-menu submenu-container" id="submenu5" role="menu">
            <ul>
              <li><a href="#">Press Releases</a></li>
              <li><a href="#">Case Studies</a></li>
              <li><a href="#">Monthly Newsletter</a></li>
              <li><a href="#">Publications</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
        </li>
        <li <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'active';?>><a href="#">CONTACT</a>
        </li>
      </ul>
      
      <div class="header_toplinks_mobile visible-xs-block">
        <a href="#">CUSTOMER HELP CENTRE</a>
        <a href="#">JOIN THE TEAM</a>
      </div>
    </div><!-- /.navbar-collapse -->
  <!--<div class="mega_menu">
    <div class="submenu_container" id="submenu1" style="display: none;">
      <ul>
        <li><a href="#">Product Overview</a></li>
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
        <li><a href="#">Service Overview</a></li>
        <li><a href="#">Installation and SetUp</a></li>
        <li><a href="#">Data Import and Migration</a></li>
        <li><a href="#">Training</a></li>
        <li><a href="#">Customer Support</a></li>
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
        <li><a href="#">Press Releases</a></li>
        <li><a href="#">Case Studies</a></li>
        <li><a href="#">Monthly Newsletter</a></li>
        <li><a href="#">Publications</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>  
  </div>-->

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




