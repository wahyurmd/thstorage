<!-- BEGIN: Top Menu -->
<nav class="top-nav">
    <ul>
        <li>
            <a href="<?= base_url() ?>beranda" <?php if($this->uri->segment(1) == "beranda") {echo 'class="top-menu top-menu--active"';} ?> class="top-menu">
                <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                <div class="top-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="<?= base_url() ?>helm/data_penitipan" <?php if($this->uri->segment(2) == "data_penitipan") {echo 'class="top-menu top-menu--active"';} else if($this->uri->segment(2) == "penitipan") {echo 'class="top-menu top-menu--active"';} ?> class="top-menu">
                <div class="top-menu__icon"> <i data-feather="file"></i> </div>
                <div class="top-menu__title"> Data Penitipan </div>
            </a>
        </li>
        <li>
            <a href="<?= base_url() ?>helm/input_penitipan" <?php if($this->uri->segment(2) == "input_penitipan") {echo 'class="top-menu top-menu--active"';} ?> class="top-menu">
                <div class="top-menu__icon"> <i data-feather="file-plus"></i> </div>
                <div class="top-menu__title"> Input Penitipan </div>
            </a>
        </li>
        <li>
            <a href="<?= base_url() ?>transaksi/data_transaksi" <?php if($this->uri->segment(2) == "data_transaksi") {echo 'class="top-menu top-menu--active"';} else if($this->uri->segment(2) == "pembayaran") {echo 'class="top-menu top-menu--active"';} ?> class="top-menu">
                <div class="top-menu__icon"> <i data-feather="file"></i> </div>
                <div class="top-menu__title"> Data Transaksi </div>
            </a>
        </li>
        <li>
            <a href="<?= base_url() ?>transaksi/transaksi_pembayaran" <?php if($this->uri->segment(2) == "transaksi_pembayaran") {echo 'class="top-menu top-menu--active"';} ?> class="top-menu">
                <div class="top-menu__icon"> <i data-feather="file-plus"></i> </div>
                <div class="top-menu__title"> Input Transaksi </div>
            </a>
        </li>
    </ul>
</nav>
<!-- END: Top Menu -->