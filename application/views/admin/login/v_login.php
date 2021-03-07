<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="<?php echo base_url() ?>assets/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <?php foreach ($this->uri->segments as $segment): ?>
        <?php 
        $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
        $is_active =  $url == $this->uri->uri_string;
        ?>
        <title>TH Storage - <?php echo ucfirst($this->uri->segment(2)); ?></title>
    <?php endforeach; ?>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img class="w-6" src="<?php echo base_url() ?>assets/dist/images/logo.svg">
                    <span class="text-white text-lg ml-3"> TH<span class="font-medium"> Storage</span> </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="<?php echo base_url() ?>assets/dist/images/illustration.svg">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Aplikasi Penitipan Helm</div>
                    <div class="-intro-x mt-5 text-lg text-white">
                        Ketelitian dan ke hati-hati an sangat penting, sehat selalu dan semoga harimu menyenangkan.
                    </div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Silahkan Login!
                    </h2>
                    <?php if ($this->session->flashdata('message')): ?>
                        <div class="rounded-md flex items-center px-3 py-2 mb-2 bg-theme-12 text-white">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i>
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                    <?php endif ?>
                    <form action="<?= base_url() ?>auth/cek_login" method="POST">
                        <div class="intro-x mt-8 form-group">
                            <!-- EMAIL -->
                            <input type="email" name="email" id="email" class="form-control intro-x login__input input input--lg border border-gray-300 block" placeholder="Email" required>
                            <!-- PASSWORD -->
                            <input type="password" name="password" id="password" class="form-control intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" required>
                        </div>
                        <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4 form-group">
                            <a href="<?= base_url('auth/reset_password') ?>">Lupa Password?</a> 
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left form-group">
                            <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 btn_login">Login</button>
                            <a href="<?= base_url() ?>auth/register" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 xl:mr-3" type="button">Daftar</a></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="<?php echo base_url() ?>assets/dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>
</html>