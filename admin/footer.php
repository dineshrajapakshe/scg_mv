<!-- Main Footer -->
<footer class="main-footer"> <strong>Copyright &copy; 2020 <a href="#">  <?= $lang['System'] ?></a>.</strong> All rights reserved.
    <div class="float-right d-none d-sm-inline-block"> <b>Version</b> 3.0.2 </div>
</footer>
</div>
<script type="text/javascript">
    function logout() {
        swal({
            title: "Are You Sure ",
            text: "Loging Out",
            icon: "warning",
            buttons: ['No Cancel It', 'I am Sure'],
            dangerMode: true
        }).then(function (isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Log Out',
                    text: 'Thank You',
                    icon: 'success'
                }).then(function () {
                    window.location = 'data/logout.php';
                });
            } else {
                swal('Cancelled', 'User Not Login Out', 'error');
            }
        });
    }
</script>
<!-- ./wrapper -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>

<script src="plugins/selectize/js/selectize.js" type="text/javascript"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- PAGE SCRIPTS -->
<script src="js/recordaction.js" type="text/javascript"></script>


<script src="js/lib/datatables/datatables.min.js"></script>
<script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="js/lib/datatables/datatables-init.js"></script>
<!-- /.content-wrapper -->
<script type="text/javascript">
    window.onload = function () {
        if (document.cookie.indexOf("_instance=true") === -1) {
            document.cookie = "_instance=true";
            // Set the onunload function
            window.onunload = function () {
                document.cookie = "_instance=true;expires=Thu, 01-Jan-1970 00:00:01 GMT";
            };
            // Load the application
        } else {
            alert(" Security Alerts.You Are Opening Multiple Window. This window will now close.");
            var win = window.location.href = 'lock.php';
            win.close();
            // Notify the user
        }
    };
</script>
<script src="js/validation.js" type="text/javascript"></script>

<script>
    $(function () {
        // Summernote
        $('.textarea').summernote();
    });
</script>