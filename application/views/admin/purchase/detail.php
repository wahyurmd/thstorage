<?php foreach ($detail as $key): ?><div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        TH Storage
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="<?= base_url() . 'transaksi/cetakPembayaran/' . $key->kode_pembayaran ?>" class="button bg-theme-7 items-center text-theme-2 mr-2" target="_blank">Cetak</a>
        <a href="<?php echo base_url() ?>transaksi/data_transaksi" class="button text-white bg-theme-1 shadow-md mr-2">Kembali</a>
    </div>
</div>
<!-- BEGIN: Horizontal Form -->
<div class="intro-y box mt-5">
    <div class="sm:flex-row items-center p-5 border-b border-gray-200" align="center">
        <h1 class="font-medium text-base mr-auto">
            Detail Pembayaran
        </h1>
    </div>
    <div class="p-5">
        <div class="preview ml-40 pl-10">
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Petugas</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base"><?= $key->nama ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center mt-5">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Kode Bayar</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->kode_pembayaran ?></label>
                    <label class="sm:text-left sm:mr-5 sm:ml-40 text-base" style="width: 110px;">Kode Penitipan</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->kode_penitipan ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center mt-5">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Nama Penitip</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->nama_penitip ?></label>
                    <label class="sm:text-left sm:mr-5 sm:ml-40 text-base" style="width: 110px;">Tanggal Lahir</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= date("d F Y", strtotime($key->tgl_lahir)) ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center mt-5">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Merk Helm</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->nama_merk ?></label>
                    <label class="sm:text-left sm:mr-5 sm:ml-40 text-base" style="width: 110px;">Jenis Helm</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->jenis_helm ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center mt-5">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Warna Helm</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->warna_helm ?></label>
                    <label class="sm:text-left sm:mr-5 sm:ml-40 text-base" style="width: 110px;">Nomor Loker</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->nomor_loker ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center mt-5">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Cuci Helm</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->cuci_helm ?></label>
                    <label class="sm:text-left sm:mr-5 sm:ml-40 text-base" style="width: 110px;">Titip Barang</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->titip_barang ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center mt-5">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Jam Masuk</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->time_in ?></label>
                    <label class="sm:text-left sm:mr-5 sm:ml-40 text-base" style="width: 110px;">Jam Keluar</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= $key->time_out ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center mt-5">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Tarif Penitipan</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= "Rp " . number_format($key->tarif_penitipan, 0,'.','.') . ",-" ?></label>
                    <label class="sm:text-left sm:mr-5 sm:ml-40 text-base" style="width: 110px;">Denda</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;"><?= "Rp " . number_format($key->denda, 0,'.','.') . ",-" ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center mt-5">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Total Bayar</label>
                    <label class="sm:mr-5">:</label>
                    <label class="text-base" style="width: 200px;">
                        <?php
                        $totalDenda = $key->denda;
                        $tarif = $key->tarif_penitipan;
                        $total = $tarif + $totalDenda;
                        echo "Rp " . number_format($total, 0,'.','.') . ",-" 
                        ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="flex flex-col sm:flex-row items-center mt-5">
                    <label class="sm:text-left sm:mr-5 text-base" style="width: 110px;">Keterangan</label>
                    <label class="sm:mr-5">:</label>
                    <p class="text-base"><?= $key->keterangan ?></p>
                </div>
            </div>
        </div>
        <div class="form-group mt-5 flex">

        </div>
    </div>
</div>
<!-- END: Horizontal Form -->
<?php endforeach ?>