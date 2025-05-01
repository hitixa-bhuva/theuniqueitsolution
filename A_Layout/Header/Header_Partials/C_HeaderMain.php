<?php
echo 
    '
<body>
    <div class="loader" id="pageLoader">
    <img src="./assest/img/logo/logo.webp" alt="Unique IT Logo" class="logo" />
    <div class="progress-bar">
      <div class="progress" id="progress"></div>
    </div>
  </div>
    <!-- 1 navbar -->
    <header class="page-scrolled aos-init aos-animate" data-aos="fade-in">
        <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-root-nav MuiIconButton-sizeSmall css-wrts35"
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
            <li><a title="Home" aria-current="page" href="home" class=" ' ?><?php if ($page == "index.php") {
                echo 'active';
            } ?><?php echo ' ">Home</a></li>
            <li><a title="About Us" href="about-us">About Us</a></li>
            <li class="has-submenu"><a title="Services" class="menu-expanded" onclick="goToServices(event)" href="services">Services<img
                        loading="lazy" src="./assest/img/svg/arrow-down.svg" alt="Down Arrow"></a>
                <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-entered css-c4sutr"
                    style="min-height: 0px;">
                    <div class="MuiCollapse-wrapper MuiCollapse-vertical css-hboir5">
                        <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-8atqhb">
                            <ul class="submenu">
                                <li><a title="Custom Software Development" class=""
                                        href="custom-software-development">Custom Software Development</a>
                                </li>
                                <li><a title="Work Flow Automation" class="" href="work-flow-automation">Work
                                        Flow Automation</a></li>
                                <li><a title="CRM &amp; ERP Development" class=""
                                        href="crm-and-erp-development">CRM &amp; ERP Development</a></li>
                                <li><a title="Web Development" class="" href="web-development">Web
                                        Development</a></li>
                                <li><a title="Mobile Application Development" class=""
                                        href="mobile-application-development">Mobile Application
                                        Development</a></li>
                                <li><a title="UI/UX Design" class="" href="ui-ux-design">UI/UX Design</a></li>
                                <li><a title="Hire Dedicated Developers" class=""
                                        href="hire-dedicated-developers">Hire Dedicated Developers</a></li>
                                <li><a title="IT Consulting" class="" href="it-consulting">IT Consulting</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li><a title="Technologies" class="" href="technologies">Technologies</a></li>
            <li class="has-submenu"><a title="Industries" class="menu-expanded" onclick="goToIndustries(event)" href="industries">Industries<img
                        loading="lazy" src="./assest/img/svg/arrow-down.svg" alt="Down Arrow"></a>
                <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-entered css-c4sutr"
                    style="min-height: 0px;">
                    <div class="MuiCollapse-wrapper MuiCollapse-vertical css-hboir5">
                        <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-8atqhb">
                            <ul class="submenu">
                                <li><a title="Hospitality Industry" class=""
                                        href="hospitality-industry">Hospitality Industry</a></li>
                                <li><a title="Retail &amp; Ecommerce Solution" class=""
                                        href="retail-and-ecommerce-solution">Retail &amp; Ecommerce
                                        Solution</a></li>
                                <li><a title="News &amp; Entertainment" class=""
                                        href="news-and-entertainment">News &amp; Entertainment</a></li>
                                <li><a title="Production &amp; Service Assurance" class=""
                                        href="production-and-service-assurance">Production &amp; Service
                                        Assurance</a></li>
                                <li><a title="Telecommunication Media" class=""
                                        href="telecommunication-media">Telecommunication Media</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
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