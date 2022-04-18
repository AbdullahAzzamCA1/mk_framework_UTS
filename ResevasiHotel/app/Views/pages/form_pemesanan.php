<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>

<!-- Page Content-->
<div class="container px-4 px-lg-5">

    <!-- PESAN-->
    <div class="card text-white bg-dark my-5 py-4 text-left">
        <div class="card-body">
            <form>
                <div class="row align-items-center g-4">
                    <div class="col-auto">
                        <label for="cekin">Tanggal Cek In</label>
                        <input type="date" class="form-control" id="cekin" placeholder="" name="cekin">
                    </div>
                    <div class="col-auto">
                        <label for="cekout">Tanggal Cek Out</label>
                        <input type="date" class="form-control" id="cekout" name="cekout">
                    </div>

                    <div class="col-auto">
                        <label for="kamar">Jumlah kamar</label>
                        <input type="number" class="form-control" id="kamar" placeholder="kamar" name="kamar">
                    </div>
                    <div class="col-auto" style="position:absolute; top:28%; left:50%">
                        <a href="/pages/pesan" class="btn btn-success">Pesan</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


        <!-- Content Row-->
        <div class="row">
            <div class="col text-left">
                <h1 style="text-align: center;">Form Pemesanan</h1>
                <form action="/pages/save" method="POST">
                    <?= csrf_field(); ?>
                    <div class="col-md-5">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama_pemesan" />
                    </div>
                    <div class="col-md-5">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div id="emailHelp" class="form-text">Kami tidak akan membagikan email anda kepada siapapun.</div>
                    </div>
                    <div class="col-md-5">
                        <label for="nohp" class="form-label">No handphone</label>
                        <input type="text" class="form-control" id="nohp" name="noHP" />

                    </div>
                    <div class="col-md-5">
                        <label for="nama_tamu" class="form-label">Nama tamu</label>
                        <input type="text" class="form-control" id="nama_tamu" name="nama_tamu">
                    </div>
                    <div class="col-md-4">
                        <label for="tipe_kamar" class="form-label">Tipe kamar</label>
                        <select id="inputState" class="form-control" name="jenis_kamar">
                            <option selected>Choose...</option>
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                    </div>
                    <div class="col-mb-4">
                        <a href="http://"></a>
                    </div>
                    <div class="col-lg-5">
                        <button style="position:relative; top: 10px;" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    <?= $this->endSection(); ?>