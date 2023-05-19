 <!-- ==============================================================================
  |
  |  SCRIPTS
  |
  =============================================================================== -->

 <!-- jQuery -->
 <script src="<?php echo base_url("assets/js/jquery.3.2.1.js") ?>"></script>

 <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
 <script src="<?php echo base_url("assets/js/pixeladmin.min.js") ?>"></script>

 <script>
     // -------------------------------------------------------------------------
     // Initialize DEMO sidebar

     $(function() {
         pxDemo.initializeDemoSidebar();

         $('#px-demo-sidebar').pxSidebar();
         pxDemo.initializeDemo();
     });
 </script>

 <script>
     // -------------------------------------------------------------------------
     // Initialize page components

     $(function() {
         pxDemo.initializeBgsDemo('body', 1, '#000', function(isBgSet) {
             $('#px-demo-signup-link, #px-demo-signup-link a')
                 .addClass(isBgSet ? 'text-white' : 'text-muted')
                 .removeClass(isBgSet ? 'text-muted' : 'text-white');
         });

         $('#page-signin-forgot-link').on('click', function(e) {
             e.preventDefault();

             $('#page-signin-form, #page-signin-social')
                 .css({
                     opacity: '1'
                 })
                 .animate({
                     opacity: '0'
                 }, 200, function() {
                     $(this).hide();

                     $('#page-signin-forgot-form')
                         .css({
                             opacity: '0',
                             display: 'block'
                         })
                         .animate({
                             opacity: '1'
                         }, 200)
                         .find('.form-control').first().focus();

                     $(window).trigger('resize');
                 });
         });

         $('#page-signin-forgot-back').on('click', function(e) {
             e.preventDefault();

             $('#page-signin-forgot-form')
                 .animate({
                     opacity: '0'
                 }, 200, function() {
                     $(this).css({
                         display: 'none'
                     });

                     $('#page-signin-form, #page-signin-social')
                         .show()
                         .animate({
                             opacity: '1'
                         }, 200)
                         .find('.form-control').first().focus();

                     $(window).trigger('resize');
                 });
         });
     });
 </script>
 </body>

 </html>