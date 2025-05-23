<?php
echo
'

   <script async src="https://www.googletagmanager.com/gtag/js?id=G-CF5WXSGXNK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());
 
  gtag("config", "G-CF5WXSGXNK");
</script>
 
    <div class="chat-widget">
        <!-- Small Chat Bubble -->
        <iframe id="chat-widget-small" src="about:blank" frameborder="0" scrolling="no" title="Chat Widget"></iframe>

        <!-- Fullscreen Chat Overlay -->
        <iframe id="chat-widget-overlay" src="about:blank" frameborder="0" scrolling="no"
            title="Chat Widget Overlay"></iframe>

        <!-- Chat Bar -->
        <iframe id="chat-widget-bar" src="about:blank" frameborder="0" scrolling="no" title="Chat Widget Bar"></iframe>

        <!-- Chat Bubble -->
        <div id="chat-bubble"></div>
    </div>
 
    <script>

    (function() {

      var script = document.createElement("script");

      script.src = "https://embed.tawk.to/67931682825083258e0a5d6e/1iib8vs7v";

      script.async = true;

      script.charset = "UTF-8";

      script.setAttribute("crossorigin", "*");

      document.body.appendChild(script);

    })();
</script>
 
    <!-- jQuery & Slick JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
  AOS.init({
    once: true, // Animation happens only once
    duration: 1000 // Animation duration
  });
</script>
 
    <!-- Your custom script -->
    <script src="./assest/js/dev-script.js"></script>
    <script src="./assest/js/dev-navbar.js"></script>   
    <script src="./assest/js/services-slider.js"></script>
    <script src="./assest/js/industries-slider.js"></script>
    <script src="./assest/js/animation.js"></script>
    <script src="./assest/js/loader.js"></script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
'
  ?>