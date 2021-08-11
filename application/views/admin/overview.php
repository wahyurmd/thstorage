<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->
<head>
    <?php $this->load->view('admin/template/head.php') ?>
</head>
<!-- END: Head -->
<body class="app">
    <!-- BEGIN: Top Bar -->
    <?php echo $header ?>
    <!-- END: Top Bar -->
    <!-- BEGI: Top Menu -->
    <?php echo $topmenu; ?>
    <!-- END: Top Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <?php echo $body ?>
    </div>
    <!-- END: Content -->
    <!-- BEGIN: Footer -->
    <?php echo $footer ?>
    <!-- END: Footer -->

    
    <!-- BEGIN: JS Assets-->
    <script src="<?php echo base_url() ?>assets/dist/js/app.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/jquery.mask.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/jquery-ui.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/moment.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/moment-with-locales.min.js"></script>
    <!-- END: JS Assets-->
</body>
</html>