<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="<?= base_url() ?>assets/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>TH Storage - <?php echo ucfirst($this->uri->segment(2)); ?></title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img class="w-6" src="<?= base_url() ?>assets/dist/images/logo.svg">
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
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Daftar Akun untuk Login!
                    </h2>
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="rounded-md px-5 py-4 mb-2 bg-theme-9 text-white">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?php echo base_url() ?>auth/register">
                        <div class="input-group intro-x mt-8 form-group">
                            <!-- NIP -->
                            <div class="input-group">
                                <input type="text" name="nip" id="nip" class="intro-x login__input input input--lg border border-gray-300 block" value="101<?= sprintf("%06s", $nip); ?>" readonly>
                            </div>
                            <!-- NAMA -->
                            <div class="input-group">
                                <input type="text" name="nama" id="nama" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Nama Lengkap">
                                <?php if (form_error('nama')): ?>
                                    <div class="rounded-md flex items-center px-3 py-2 mb-2 bg-theme-17 text-theme-6"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> <?= form_error('nama') ?> </div>
                                <?php endif ?>
                            </div>
                            <!-- EMAIL -->
                            <div class="input-group">
                                <input type="text" name="email" id="email" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email">
                                <?php if (form_error('email')): ?>
                                    <div class="rounded-md flex items-center px-3 py-2 mb-2 bg-theme-17 text-theme-6"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> <?= form_error('email') ?> </div>
                                <?php endif ?>
                            </div>
                            <!-- NO HP -->
                            <div class="input-group">
                                <input type="text" name="nohp" id="nohp" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="No. Handphone">
                                <?php if (form_error('nohp')): ?>
                                    <div class="rounded-md flex items-center px-3 py-2 mb-2 bg-theme-17 text-theme-6"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> <?= form_error('nohp') ?> </div>
                                <?php endif ?>
                            </div>
                            <!-- PASSWORD -->
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password">
                                <?php if (form_error('password')): ?>
                                    <div class="rounded-md flex items-center px-3 py-2 mb-2 bg-theme-17 text-theme-6"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> <?= form_error('password') ?> </div>
                                <?php endif ?>
                            </div>
                            <!-- KONFIRMASI PASSWORD -->
                            <div class="input-group">
                                <input type="password" name="password2" id="password2" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Konfirmasi Password">
                                <?php if (form_error('password2')): ?>
                                    <div class="rounded-md flex items-center px-3 py-4 mb-2 bg-theme-17 text-theme-6"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> <?= form_error('password2') ?> </div>
                                <?php endif ?>
                            </div>
                            <!-- TANGGAL PEMBUATAN -->
                            <div class="input-group">
                                <input type="hidden" name="createtime" id="createtime" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Createtime">
                            </div>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Daftar</button>
                            <a href="<?= base_url() ?>auth/login" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 xl:mr-3" type="button">Kembali</a></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="<?= base_url() ?>assets/dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>
</html>