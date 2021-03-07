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
    <form action="<?= base_url() ?>helm/proses_input" method="post">
        <div class="p-5">
            <div class="preview">
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Kode Penitipan</label>
                        <input type="text" name="kode_penitipan" id="kode_penitipan" class="input w-full border mt-2 flex-1" value="THS<?= sprintf("%04s", $kode_penitipan); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center">
                        <input type="hidden" name="kode_deskripsi" id="kode_deskripsi" class="input w-full border mt-2 flex-1" value="THSD<?= sprintf("%04s", $kode_deskripsi); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Nama Lengkap</label>
                        <input type="text" name="nama_penitip" id="nama_penitip" class="input w-full border mt-2 flex-1" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Tanggal Lahir</label>
                        <div class="relative mt-2">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                            <input type="text" name="tgl_lahir" id="tgl_lahir" class="datepicker input pl-12 border" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <input type="hidden" name="nip" id="nip" class="input w-full border mt-2 flex-1" value="<?= $this->session->userdata('nip'); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Merk Helm</label>
                        <select name="kode_merk" id="kode_merk" class="input w-full border mt-2 flex-1" required>
                            <option>-- Pilih Merk Helm --</option>
                            <?php foreach($merk->result() as $row): ?>
                                <option value="<?= $row->kode_merk ?>"><?= $row->nama_merk ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Jenis Helm</label>
                        <select name="kode_helm" id="kode_helm" class="input w-full border mt-2 flex-1" required>
                            <option>-- Pilih Jenis Helm --</option>
                            <?php foreach($jenis->result() as $row): ?>
                                <option value="<?= $row->kode_helm ?>"><?= $row->jenis_helm ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Warna Helm</label>
                        <input type="text" name="warna_helm" id="warna_helm" class="input w-full border mt-2 flex-1" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Nomor Loker</label>
                        <select name="kode_loker" id="kode_loker" class="input w-full border mt-2 flex-1" required>
                            <option>-- Pilih Loker --</option>
                            <?php foreach($loker->result() as $row): ?>
                                <option value="<?= $row->kode_loker ?>"><?= $row->nomor_loker ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Cuci Helm</label>
                        <select name="cuci_helm" id="cuci_helm" class="input w-full border mt-2 flex-1" required>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Titip Barang</label>
                        <input type="text" name="titip_barang" id="titip_barang" class="input w-full border mt-2 flex-1" placeholder="Contoh: Tas/Kunci Motor/dll">
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <label class="w-full sm:w-20 sm:text-left sm:mr-5">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="input w-full border mt-2 flex-1" required placeholder="Contoh: Ada Baret di kaca"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="flex flex-col sm:flex-row items-center mt-3">
                        <input type="hidden" name="time_in" id="time_in" class="input w-full border mt-2 flex-1" value="<?php echo date('Y-m-d H:i:s') ?>">
                    </div>
                </div>                
                <div class="sm:ml-20 sm:pl-5 mt-5">
                    <button type="submit" class="button bg-theme-1 text-white">Tambah</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END: Horizontal Form -->