<footer class="px-footer px-footer-bottom">

    <span class="text-muted">Copyright © 2017 PixelAdmin LLC. All rights reserved.</span>
</footer>

<!-- ==============================================================================
  |
  |  SCRIPTS
  |
  =============================================================================== -->

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/pixeladmin.min.js"></script>

<script>
    // -------------------------------------------------------------------------
    // Initialize DEMO sidebar

    $(function() {
        pxDemo.initializeDemoSidebar();

        $('#px-demo-sidebar').pxSidebar();
        pxDemo.initializeDemo();
    });
</script>

<script type="text/javascript">
    // -------------------------------------------------------------------------
    // Initialize DEMO

    $(function() {
        var file = String(document.location).split('/').pop();

        // Remove unnecessary file parts
        file = file.replace(/(\.html).*/i, '$1');

        if (!/.html$/i.test(file)) {
            file = 'index.html';
        }

        // Activate current nav item
        $('body > .px-nav')
            .find('.px-nav-item > a[href="' + file + '"]')
            .parent()
            .addClass('active');

        $('body > .px-nav').pxNav();
        $('body > .px-footer').pxFooter();

        $('#navbar-notifications').perfectScrollbar();
        $('#navbar-messages').perfectScrollbar();
    });
</script>
</body>

</html>