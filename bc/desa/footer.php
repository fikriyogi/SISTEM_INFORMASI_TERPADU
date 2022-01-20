</div>

        <script src="<?php echo SITE_URL;?>public/assets/js/bundle.js?ver=2.9.0"></script>
        <script src="<?php echo SITE_URL;?>public/assets/js/scripts.js?ver=2.9.0"></script>
        <script src="<?php echo SITE_URL;?>public/assets/js/app.js"></script>
        <!-- <script src="assets/js/demo-settings.js?ver=2.9.0"></script> -->
        <script src="<?php echo SITE_URL;?>public/assets/js/charts/gd-hospital.js?ver=2.9.0"></script>

        <script src="<?php echo SITE_URL;?>public/assets/js/libs/fullcalendar.js?ver=2.9.0"></script>
        <script src="<?php echo SITE_URL;?>public/assets/js/apps/calendar.js?ver=2.9.0"></script>


        <script type="text/javascript" src="https://www.jqueryscript.net/demo/Facebook-like-jQuery-Scrollbar-Plugin-slimScroll/jquery.slimscroll.js"></script>
        <script type="text/javascript">
            $('#testDiv').slimscroll({
              height: 'auto'
            });
        </script>
        <script>
                $('#click').on('click', function () {
                    if ($('#click').text() === 'Balas') {
          
                        // This block is executed when
                        // you click the show button
                        $('#click').text('Batal');
                        $('#element').css('display', 'flex');
                    }
                    else {
          
                        // This block is executed when
                        // you click the hide button
                        $('#click').text('Balas');
                        $('#element').css('display', 'none');
                    }
                });
            </script>
    </body>
</html>
