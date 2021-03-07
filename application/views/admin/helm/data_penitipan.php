<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Penitipan
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="<?php echo base_url() ?>helm/input_penitipan" class="button text-white bg-theme-1 shadow-md mr-2">Input Penitipan</a>
        <a href="<?php echo base_url() ?>transaksi/transaksi_pembayaran" class="button bg-theme-6 shadow-md mr-2 items-center text-theme-2"> Pembayaran </a>
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">NO</th>
                <th class="border-b-2 text-center whitespace-no-wrap">KODE PENITIPAN</th>
                <th class="border-b-2 text-center whitespace-no-wrap">NAMA</th>
                <th class="border-b-2 text-center whitespace-no-wrap">MERK</th>
                <th class="border-b-2 text-center whitespace-no-wrap">LOKER</th>
                <th class="border-b-2 text-center whitespace-no-wrap">CUCI</th>
                <th class="border-b-2 text-center whitespace-no-wrap">TITIP BARANG</th>
                <th class="border-b-2 text-center whitespace-no-wrap">JAM MASUK</th>
                <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($helm as $h) { ?>
                <tr>
                    <td class="border-b"><?= $no++ ?></td>
                    <td class="text-center border-b"><?= $h->kode_penitipan ?></td>
                    <td class="text-center border-b"><?= $h->nama_penitip ?></td>
                    <td class="text-center border-b"><?= $h->nama_merk ?></td>
                    <td class="text-center border-b"><?= $h->nomor_loker ?></td>
                    <td class="text-center border-b"><?= $h->cuci_helm ?></td>
                    <td class="text-center border-b"><?= $h->titip_barang ?></td>
                    <td class="text-center border-b"><?= $h->time_in ?></td>
                    <td class="border-b w-5">
                        <div class="flex sm:justify-center items-center">
                            <a class="button bg-theme-7 flex items-center text-theme-2 mr-2" href="<?= base_url() . 'helm/cetakPenitipan/' . $h->kode_penitipan ?>" target="_blank"> <i data-feather="printer" class="w-4 h-4 mr-1"></i> Cetak </a>
                            <a class="button bg-theme-4 flex items-center text-theme-2 mr-2" href="<?= base_url() . 'helm/penitipan/' . $h->kode_penitipan ?>"> <i data-feather="eye" class="w-4 h-4 mr-1"></i> Detail </a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
            <!-- END: Datatable -->