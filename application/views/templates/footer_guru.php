<!-- JS for Navbar, Image Hero Dashboard, and icon profil -->
<script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
<!-- JS for Navbar, Image Hero Dashboard, and icon profil -->

<!-- Tables -->
<script src="<?= base_url('assets/'); ?>tableStyle/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>tableStyle/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
$(document).ready(function() {
    $('#example_').DataTable();
});
</script>
<!-- Tables -->

<!-- Clikable Tables For Modals-->
<script>
jQuery(document).ready(function() {
    $(".clickable-row").click(function() {
        $($(this).data('href')).appendTo("body").modal('show');
    });
});
</script>
<!-- Clikable Tables For Modals-->
<footer class="main-footer">
    <div class="text-center">
        Copyright &copy; 2020 <div class="bullet"></div><a href="#" style="text-decoration: none">Partoba Nabisuk</a>
    </div>
</footer>
</body>

</html>