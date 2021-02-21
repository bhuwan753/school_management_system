</div>

<!-- Main Footer -->
<footer class="main-footer fixed-bottom">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0-rc
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<script src="dist/js/pages/dashboard2.js"></script>

<script src="dist/js/pages/dashboard2.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script>
    (function() {
        var path = window.location.href;
        $(".nav-link").each(function() {
            var href = $(this).attr('href');
            // console.log(href);
            if (path == decodeURIComponent(href)) {
                $(this).addClass('active');
                var parent = $(this).closest('.has-treeview');
                parent.addClass('menu-open');
                $(parent).find('.nav-link').first().addClass('active');
            };
        });
    }());
</script>

<!-- evo-calendar -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="./calendar/evo-calendar.min.js"></script>


</body>

</html>