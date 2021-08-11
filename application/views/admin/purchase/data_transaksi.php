<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Penitipan
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="<?php echo base_url() ?>transaksi/transaksi_pembayaran" class="button bg-theme-6 shadow-md mr-2 items-center text-theme-2"> Pembayaran </a>
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">NO</th>
                <th class="border-b-2 text-center whitespace-no-wrap">KODE PEMBAYARAN</th>
                <th class="border-b-2 text-center whitespace-no-wrap">KODE PENITIPAN</th>
                <th class="border-b-2 text-center whitespace-no-wrap">JAM MASUK</th>
                <th class="border-b-2 text-center whitespace-no-wrap">JAM KELUAR</th>
                <th class="border-b-2 text-center whitespace-no-wrap">LAMA PENITIPAN / JAM</th>
                <th class="border-b-2 text-center whitespace-no-wrap">TOTAL</th>
                <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php $no =1; foreach ($getData as $key): ?>
                <tr>
                    <td class="border-b"><?= $no++ ?></td>
                    <td class="text-center border-b"><?= $key->kode_pembayaran ?></td> 
                    <td class="text-center border-b"><?= $key->kode_penitipan ?></td>
                    <td class="text-center border-b"><?= $key->time_in ?></td>
                    <td class="text-center border-b"><?= $key->time_out ?></td>
                    <td class="text-center border-b"><?= $key->lama_penitipan ?></td>
                    <td class="text-center border-b">Rp <?= number_format($key->tarif_penitipan, 0, ".", ".") ?></td>
                    <td class="border-b w-5">
                        <div class="flex sm:justify-center items-center">
                            <a href="<?= base_url() . 'transaksi/cetakPembayaran/' . $key->kode_pembayaran ?>" class="button bg-theme-7 items-center text-theme-2 flex mr-2" target="_blank"> <i data-feather="printer" class="w-4 h-4 mr-1"></i> Cetak </a>
                            <a class="button bg-theme-4 flex items-center text-theme-2" href="<?= base_url() . 'transaksi/pembayaran/' . $key->kode_pembayaran ?>"> <i data-feather="eye" class="w-4 h-4 mr-1"></i> Detail </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<!-- END: Datatable -->