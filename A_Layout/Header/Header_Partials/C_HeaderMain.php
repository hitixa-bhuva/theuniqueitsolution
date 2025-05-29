<?php
$page = basename($_SERVER['PHP_SELF']);

echo

  '
<body>
     <div class="loader" id="pageLoader">
    <img src="./assest/img/logo/logo.webp" alt="Unique IT Logo" class="logo" />
    <div class="progress-bar">
      <div class="progress" id="progress"></div>
    </div>
  </div>
  <div id="spinnerLoader" class="spinner-loader" style="display:none;">
  <div class="spinner-border text-primary" role="status">
  </div>
</div> 
    <!-- 1 navbar -->
    <header class="page-scrolled aos-init aos-animate" data-aos="fade-in" >
        <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-root-nav MuiIconButton-sizeSmall css-wrts35 ps-0"
            tabindex="0" type="button" title="Menu">
            <img loading="lazy" src="./assest/img/svg/ic-hamburger.svg" alt="Hamburger">
            <img loading="lazy" src="./assest/img/svg/ic-hamburger-white.svg" class="active" alt="Hamburger">
            <span class="MuiTouchRipple-root css-w0pj6f"></span>
        </button>
        <a class="logo" title="Unique IT Solution" href="home">
            <img loading="lazy" src="./assest/img/logo/logo.webp" alt="Unique IT Solution">
            <img loading="lazy" class="mobile-logo" src="./assest/img/logo/mobile-logo.webp" alt="Unique IT Solution">
        </a>
        <ul>
            <li><a title="Home" href="home" class=" ' ?>
<?php if ($page == "index.php") {
  echo 'active';
} ?>
<?php echo ' ">Home</a></li>
            <li><a title="About Us" href="about-us" class=" ' ?><?php if ($page == "about.php") {
               echo 'active';
             } ?><?php echo '" >About Us</a></li>
                <li class="has-submenu ">
                <a  aria-current="page" class="menu-expanded ' ?><?php if ($page == "services-main.php" || $page == "custom-software-development.php" || $page == "work-flow-automation.php" || $page == "crm-and-erp-development.php" || $page == "web-development.php" || $page == "mobile-application-development.php" || $page == "ui-ux-design.php" || $page == "hire-dedicated-developers.php" || $page == "it-consulting.php") {
                   echo 'active';
                 } ?><?php echo '" onclick="goToServices(event)" href="services">
                    Services
                    <span class="dropdown-icon" onclick="toggleSubmenu(event)">
                      <img src="./assest/img/svg/arrow-down.svg" alt="Down Arrow" />
                    </span>
                  </a>
                <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-entered css-c4sutr"
                    style="min-height: 0px;">
                    <div class="MuiCollapse-wrapper MuiCollapse-vertical css-hboir5">
                        <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-8atqhb menu-sub-top">
                            <ul class="submenu">
                                <li><a title="Custom Software Development"  class="' ?><?php if ($page == "custom-software-development.php") {
                                   echo 'active';
                                 } ?><?php echo '"
                                        href="services/custom-software-development">Custom Software Development</a>
                                </li>
                                <li><a title="Work Flow Automation"  class=" ' ?><?php if ($page == "work-flow-automation.php") {
                                   echo 'active';
                                 } ?><?php echo '" href="services/work-flow-automation">Work
                                        Flow Automation</a></li>
                                <li><a title="CRM &amp; ERP Development"  class=" ' ?><?php if ($page == "crm-and-erp-development.php") {
                                   echo 'active';
                                 } ?><?php echo '"
                                        href="services/crm-and-erp-development">CRM &amp; ERP Development</a></li>
                                <li><a title="Web Development"  class=" ' ?><?php if ($page == "web-development.php") {
                                   echo 'active';
                                 } ?><?php echo '" href="services/web-development">Web
                                        Development</a></li>
                                <li><a title="Mobile Application Development"  class=" ' ?><?php if ($page == "mobile-application-development.php") {
                                   echo 'active';
                                 } ?><?php echo '"
                                        href="services/mobile-application-development">Mobile Application
                                        Development</a></li>
                                <li><a title="UI/UX Design"  class=" ' ?><?php if ($page == "ui-ux-design.php") {
                                   echo 'active';
                                 } ?><?php echo '" href="services/ui-ux-design">UI/UX Design</a></li>
                                <li><a title="Hire Dedicated Developers"  class=" ' ?><?php if ($page == "hire-dedicated-developers.php") {
                                   echo 'active';
                                 } ?><?php echo '"
                                        href="services/hire-dedicated-developers">Hire Dedicated Developers</a></li>
                                <li><a title="IT Consulting"  class=" ' ?><?php if ($page == "it-consulting.php") {
                                   echo 'active';
                                 } ?><?php echo '" href="services/it-consulting">IT Consulting</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li><a title="Technologies"  href="technologies"  class=" ' ?><?php if ($page == "technologies.php") {
               echo 'active';
             } ?><?php echo '">Technologies</a></li>

             <li class="has-submenu ">
                <a  aria-current="page" class="menu-expanded 
                ' ?><?php if ($page == "industries.php" || $page == "hospitality-industry.php" || $page == "retail-and-ecommerce-solution.php" || $page == "news-and-entertainment.php" || $page == "production-and-service-assurance.php" || $page == "telecommunication-media.php") {
                   echo 'active';
                 } ?><?php echo '" 
                 onclick="goToIndustries(event)" href="industries">
                    Industries
                    <span class="dropdown-icon" onclick="toggleSubmenuIndustries(event)">
                      <img src="./assest/img/svg/arrow-down.svg" alt="Down Arrow" />
                    </span>
                  </a>
                <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-entered css-c4sutr"
                    style="min-height: 0px;">
                    <div class="MuiCollapse-wrapper MuiCollapse-vertical css-hboir5">
                        <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-8atqhb">
                            <ul class="submenu">
                                <li><a title="Hospitality Industry"  class="' ?><?php if ($page == "hospitality-industry.php") {
                                   echo 'active';
                                 } ?><?php echo '"
                                        href="industries/hospitality-industry">Hospitality Industry</a>
                                </li>
                                <li><a title="Retail &amp; Ecommerce Solution"  class="' ?><?php if ($page == "retail-and-ecommerce-solution.php") {
                                   echo 'active';
                                 } ?><?php echo '"
                                        href="industries/retail-and-ecommerce-solution">Retail &amp; Ecommerce Solution</a>
                                </li>
                                <li><a title="News &amp; Entertainment"  class="' ?><?php if ($page == "news-and-entertainment.php") {
                                   echo 'active';
                                 } ?><?php echo '"
                                        href="industries/news-and-entertainment">News &amp; Entertainment</a>
                                </li>
                                <li><a title="production and service assurance"  class="' ?><?php if ($page == "production-and-service-assurance.php") {
                                   echo 'active';
                                 } ?><?php echo '"
                                        href="industries/production-and-service-assurance">Production &amp; Service Assurance</a>
                                </li>
                                 <li><a title="Telecommunication Media"  class="' ?><?php if ($page == "telecommunication-media.php") {
                                   echo 'active';
                                 } ?><?php echo '"
                                        href="industries/telecommunication-media">Telecommunication Media</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
           <li><a title="blog"  href="blog"  class=" ' ?><?php if ($page == "blog.php") {
               echo 'active';
             } ?><?php echo '">Blog</a></li>
        </ul>
        <a href="contact-us">
            <button
                class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButton-colorPrimary MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButton-colorPrimary css-7dp2l8"
                tabindex="0" type="button" title="Contact Us"><span class="text">Contact Us</span><span
                    class="MuiTouchRipple-root css-w0pj6f"></span></button></a>
        <div class="sidebar-overlay"></div>
    </header>


'
                                    ?>