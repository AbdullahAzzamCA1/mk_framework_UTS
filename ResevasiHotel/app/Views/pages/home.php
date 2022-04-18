<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>




<!-- Page Content-->
<div class="container px-4 px-lg-5">

    <!-- Heading Row -->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="img/hoteldb.jpg"/></div>
        <div class="col-lg-5">
            <h2 class="font-weight-light">Welcome To Hotel Hebat</h2>
            <p>Memberikan kenyamanan yang baik,<br>dengan berbagai fasilitas menarik<br><br></p>
            <a class="btn btn-success" href="\fasilitas">Cek disini</a>
        </div>
    </div>

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
                    <div class="col-auto" style="position:absolute; top:28.5%; left:50%">
                        <a href="/home/pesanform" type="submit" class="btn btn-success">Pesan</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- About US-->
<div class="about-section">
    <h2>Tentang Kami</h2>
    <p></p>
</div>
<?= $this->endSection(); ?>