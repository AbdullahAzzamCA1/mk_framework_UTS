<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>

<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Call to Action-->
    <div class="card text-white bg-success my-4 py-1 ">
        <div class="card-body">
            <h2 class="text-white m-0">Fasilitas</h2>
        </div>
    </div>
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img src="img/gymroom.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Ruang Gym</h2>
                    <p class="card-text"></p>
                </div>
                <div class="card-footer"><a class="btn btn-success btn-sm" href="#!">Details</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img src="img/kolamrenang.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Kolam Renang</h2>
                    <p class="card-text"></p>
                </div>
                <div class="card-footer"><a class="btn btn-success btn-sm" href="#!">Details</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img src="img/auditorium.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Auditorium</h2>
                    <p class="card-text"></p>
                </div>
                <div class="card-footer"><a class="btn btn-success btn-sm" href="#!">Details</a></div>
            </div>
        </div>
    </div>
</div>


<!-- Footer-->
<footer class="py-3 bg-dark">
    <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">@Hotel Hebat@</p>
    </div>
</footer>


<?= $this->endSection(); ?>