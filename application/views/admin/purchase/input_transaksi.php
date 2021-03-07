<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        TH Storage
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="<?php echo base_url() ?>helm/data_penitipan" class="button text-white bg-theme-1 shadow-md mr-2">Lihat Data Penitipan</a>
    </div>
</div>
<!-- BEGIN: Horizontal Form -->
<div class="intro-y box mt-5">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
        <h2 class="font-medium text-base mr-auto">
            Input Data Penitipan
        </h2>
    </div>
    <form action="<?= base_url() ?>transaksi/proses_transaksi" method="post">
        <div class="p-5">
            <div class="preview">
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center">
                        <label class="sm:w-40 sm:mr-5">Kode Pembayaran</label>
                        <input type="text" name="kode_pembayaran" id="kode_pembayaran" class="input w-full border mt-2 flex-1" value="PTHS<?= sprintf("%04s", $getKodeBayar); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="sm:w-40 sm:mr-5">Kode Penitipan</label>
                        <select name="kode_penitipan" id="kode_penitipan" class="input w-full border mt-2 flex-1" required>
                            <option>--Pilih Kode Penitipan--</option>
                            <?php foreach ($getPenitipan as $key): ?>
                                <option value="<?= $key->kode_penitipan ?>"><?= $key->kode_penitipan ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="sm:w-40 sm:mr-5">Kode Deskripsi</label>
                        <input type="text" name="kode_deskripsi" id="kode_deskripsi" class="input w-full border mt-2 flex-1" readonly required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="sm:w-40 sm:mr-5">Nama Penitip</label>
                        <input type="text" name="nama_penitip" id="nama_penitip" class="input w-full border mt-2 flex-1" readonly required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="sm:w-40 sm:mr-5">Waktu Masuk</label>
                        <input type="text" name="time_in" id="time_in" class="input border mt-2 sm:w-100" readonly required>
                        <label class="sm:w-30 sm:mr-5 sm:ml-20">Waktu Keluar</label>
                        <input type="text" name="time_out" id="time_out" class="input border mt-2 " readonly required>
                        <label class="sm:w-30 sm:mr-5 sm:ml-20">Lama Penitipan</label>
                        <input type="text" name="lama_penitipan" id="lama_penitipan" class="input border mt-2" readonly required>
                        <label class="sm:mr-5 sm:ml-3">Jam</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">

                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="sm:w-40 sm:mr-5">Cuci Helm</label>
                        <input type="text" name="cuci" id="cuci" class="input border mt-2" readonly required>
                        <label class="sm:ml-20" style="width: 105px">Tarif Cuci Helm</label>
                        <input type="text" name="tarif_cuci" id="tarif_cuci" class="input border mt-2" readonly required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="sm:w-40 sm:mr-5">Total</label>
                        <input type="text" name="tarif_penitipan" id="tarif_penitipan" class="input w-full border mt-2 flex-1" readonly required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="sm:w-40 sm:mr-5">Karcis Hilang?</label>
                        <select name="karcis_hilang" id="karcis_hilang" class="input border mt-2" style="width: 185px" onchange="karcisHilang()" required>
                            <option>--Pilih--</option>
                            <option value="10000">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                        <label class="sm:ml-20" style="width: 105px">Denda</label>
                        <input type="text" name="denda" id="denda" class="input border mt-2" readonly required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="sm:w-40 sm:mr-5">Uang Diterima</label>
                        <input type="text" name="uang_diterima" id="uang_diterima" class="input border mt-2" onkeyup="kembalian()" required>
                        <label class="sm:w-30 sm:mr-5 sm:ml-20">Uang Kembali</label>
                        <input type="text" name="uang_dikembalikan" id="uang_dikembalikan" class="input border mt-2" readonly required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <input type="hidden" name="nip" id="nip" class="input w-full border mt-2 flex-1" value="<?= $this->session->userdata('nip'); ?>" readonly>
                    </div>
                </div>  
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <input type="hidden" name="kode_loker" id="kode_loker" class="input w-full border mt-2 flex-1" readonly>
                    </div>
                </div>             
                <div class="sm:ml-40 sm:pl-5 mt-5">
                    <button type="submit" class="button bg-theme-1 text-white">Bayar</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END: Horizontal Form -->

<!-- Tampil Field Berdasarkan Kode -->
<script type="text/javascript">
    $("#kode_penitipan").change(function(){
        var kode_penitipan = $("#kode_penitipan").val();
        $.ajax({
            url: '<?php echo site_url('transaksi/getPenitip') ?>',
            method: "POST",
            data: {kode_penitipan:kode_penitipan},
            async: false,
            dataType: 'json',
            success: function(data) {
                date = new Date();

                // HITUNG SELISIH JAM
                waktuMasuk = new Date(data[0].time_in);
                selisih = date-waktuMasuk;
                detik = Math.round(selisih/1000);
                menit = Math.round(detik/60);
                jam = Math.round(menit/60);
                // var startDate = moment().format('YYYY-MM-DD 07:00:00');
                // var tanggalBerikut = moment().add(1, 'days').format('YYYY-MM-DD 07:00:00');
                // alert(menit);
                var max = 6;
                var waktu;
                if (jam >= 6 && jam < 24) {
                    waktu = max;
                } else if (menit >= 1 && menit < 60) {
                    waktu = jam+1;
                } else if (menit >= 60 && menit < 120) {
                    waktu = jam+1;
                } else if (menit > 120 && menit < 180) {
                    waktu = jam+1;
                } else if (menit > 180 && menit < 240) {
                    waktu = jam+1;
                } else if (menit > 240 && menit < 300) {
                    waktu = jam;
                } else if (menit > 300 && menit < 360) {
                    waktu = jam;
                } else if (jam >= 24 && jam < 48) {
                    waktu = jam;
                } else if (jam >= 48) {
                    waktu = jam;
                }

                // GET TANGGAL BUAT TIME OUT
                date = moment().format('YYYY-MM-DD H:mm:ss');
                // coba = moment().add(2, 'days').format('MMMM Do YYYY');
                // alert(coba);

                // HITUNG TOTAL
                tarifMax = 10000;
                tarifAwal = 2000;
                tarifBerikut = 1000;
                var tarif;
                // alert(jamBer1);
                if (menit >= 1 && menit <= 60) {
                    tarif = tarifAwal;
                } else if (menit > 60 && menit <= 120) {
                    tarif = tarifAwal+tarifBerikut;
                } else if (menit > 120 && menit <= 180) {
                    tarif = tarifAwal+(tarifBerikut*2);
                } else if (menit > 180 && menit <= 240) {
                    tarif = tarifAwal+(tarifBerikut*3);
                } else if (menit > 240 && menit <= 300) {
                    tarif = tarifAwal+(tarifBerikut*4);
                } else if (menit > 300 && menit <= 360) {
                    tarif = tarifAwal+(tarifBerikut*5);
                } else if (menit > 300 && jam <= 24) {
                    tarif = tarifMax;
                } else if (jam > 24 && jam <= 48) {
                    tarif = '50000';
                } else if (jam > 48) {
                    tarif = '100000';
                }

                var cuci = data[0].cuci_helm;
                var tarifCuci;
                if (cuci == 'Ya') {
                    tarifCuci = '10000';
                } else {
                    tarifCuci = '0';
                }

                // SET DATA SESUAI ID
                // alert(data.[i].getPenitip);
                // console.log(data[0].kode_penitipan);
                $("#kode_deskripsi").val(data[0].kode_deskripsi);
                $("#nama_penitip").val(data[0].nama_penitip);
                $("#time_in").val(data[0].time_in);
                $("#lama_penitipan").val(data[0].lama_penitipan);
                $("#time_out").val(date);
                $("#lama_penitipan").val(waktu);
                $("#tarif_penitipan").val(tarif);
                $("#kode_loker").val(data[0].kode_loker);
                $("#cuci").val(data[0].cuci_helm);
                $("#tarif_cuci").val(tarifCuci);
            }
        })
    })

    function kembalian() {
        var uangDiterima = document.getElementById('uang_diterima').value;
        var total = document.getElementById('tarif_penitipan').value;
        var denda = document.getElementById('denda').value;
        var tarif_cuci = document.getElementById('tarif_cuci').value;
        var total = parseInt(total) + parseInt(denda) + parseInt(tarif_cuci);
        var result = parseInt(uangDiterima) - parseInt(total);
        if (!isNaN(result)) {
            document.getElementById('uang_dikembalikan').value = result;
        }
        // console.log(total);
    }

    function karcisHilang(){
        var denda = document.getElementById("karcis_hilang").value;
        document.getElementById("denda").value = denda;
    }

</script>