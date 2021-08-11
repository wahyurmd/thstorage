<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8">
            <input type="text" id="livetime" class="ml-auto flex" style="background-color: #f1f5f8; width: 280px; text-align: right; font-weight: bold; font-size: medium;">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    General Report
                </h2>
                <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-feather="database" class="report-box__icon text-theme-10"></i> 
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"> Harian </div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold leading-8 mt-6"><?= $harian ?></div>
                            <div class="text-base text-gray-600 mt-1">Helm yang dititipkan hari ini</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-feather="database" class="report-box__icon text-theme-10"></i> 
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"> Mingguan </div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold leading-8 mt-6">
                                <?php 
                                foreach ($mingguan as $key) {
                                    echo $key->jumlah;
                                }
                                ?>
                            </div>
                            <div class="text-base text-gray-600 mt-1">Helm yang dititipkan minggu ini</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-feather="database" class="report-box__icon text-theme-10"></i> 
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"> Bulanan </div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold leading-8 mt-6"><?= $bulanan ?></div>
                            <div class="text-base text-gray-600 mt-1">Helm yang dititipkan bulan ini</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5 mt-10">
                <div class="sm:flex-row items-center p-5 border-b border-gray-200">
                    <h1 class="font-medium text-base mr-auto">
                        Data Cuci Helm
                    </h1>
                </div>
                <div class="datatable-wrapper p-5">
                    <table class="table table-report table-report--bordered display datatable w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 whitespace-no-wrap">NO</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">KODE PENITIPAN</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">MERK HELM</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">JENIS HELM</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">JAM MASUK</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <?php  $no = 1; foreach ($cuci as $key): ?>
                            <tbody>
                                <tr>
                                    <td class="border-b"><?= $no++ ?></td>
                                    <td class="text-center border-b"><?= $key->kode_penitipan ?></td>
                                    <td class="text-center border-b"><?= $key->nama_merk ?></td>
                                    <td class="text-center border-b"><?= $key->jenis_helm ?></td>
                                    <td class="text-center border-b"><?= $key->time_in ?></td>
                                    <td class="text-center border-b">
                                        <?php 
                                        $status = $key->status_cuci;
                                        if ($status == '0') {
                                            echo '<span class="rounded-md px-5 mb-2 bg-theme-1 text-white">Menunggu Antrian</span>';
                                        } else if ($status == '1') {
                                            echo '<span class="rounded-md px-5 mb-2 bg-theme-12 text-white">Sedang Pencucian</span>';
                                        }else {
                                            echo '<span class="rounded-md px-5 mb-2 bg-theme-9 text-white">Selesai</span>';
                                        }
                                        ?>
                                    </td>
                                    <td class="border-b w-5">
                                        <div class="flex sm:justify-center items-center">
                                            <a class="button bg-theme-12 flex items-center text-theme-2" href="<?= base_url() . 'beranda/prosesCuci/' . $key->kode_penitipan ?>"> <i data-feather="rotate-cw" class="w-4 h-4"></i> </a>
                                            <a class="button bg-theme-1 flex items-center text-theme-2 ml-3" href="<?= base_url() . 'beranda/selesaiCuci/' . $key->kode_penitipan ?>"> <i data-feather="check-square" class="w-4 h-4"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
            <div class="intro-y box mt-5 mt-10">
                <div class="intro-y block sm:flex items-center p-5 border-b border-gray-200">
                    <h1 class="font-medium text-base mr-auto">
                        Laporan Penitipan Helm Bulanan
                    </h1>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="rounded-md flex items-center px-5 py-2 mb-2 bg-theme-14 text-theme-10"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                    </div>
                </div>
                <div class="datatable-wrapper p-5">
                    <table class="table table-report table-report--bordered display datatable w-full">
                        <thead>
                            <tr>
                                <th class="border-b-2 whitespace-no-wrap">NO</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">KODE PEMBAYARAN</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">KODE PENITIPAN</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">PETUGAS</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">JAM KELUAR</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">CUCI</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">DENDA</th>
                                <th class="border-b-2 text-center whitespace-no-wrap">TARIF</th>
                            </tr>
                        </thead>
                        <?php $no = 1; foreach ($laporan as $key): ?>
                            <tbody>
                                <tr>
                                    <td class="border-b"><?= $no++ ?></td>
                                    <td class="text-center border-b"><?= $key->kode_pembayaran ?></td>
                                    <td class="text-center border-b"><?= $key->kode_penitipan ?></td>
                                    <td class="text-center border-b"><?= $key->nama ?></td>
                                    <td class="text-center border-b"><?= $key->time_out ?></td>
                                    <td class="text-center border-b">Rp <?= number_format($key->tarif_cuci, 0, ".", ".") ?></td>
                                    <td class="text-center border-b">Rp <?= number_format($key->denda, 0, ".", ".") ?></td>
                                    <td class="text-center border-b">Rp <?= number_format($key->tarif_penitipan, 0, ".", ".") ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- END: General Report -->
    </div>
</div>

<script type="text/javascript">
    window.setTimeout("live()", 1000);

    function live() {
        moment.locale('id');
        var date = moment().format('dddd, Do MMMM YYYY hh:mm:ss');
        setTimeout("live()", 1000);
        $('#livetime').val(date);
    }
    
</script>