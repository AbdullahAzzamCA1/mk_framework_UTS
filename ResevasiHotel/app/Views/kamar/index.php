<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>


<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Call to Action-->
    <div class="card text-white bg-success my-4 py-1 ">
        <div class="card-body">
            <h2 class="text-white m-0">Kamar</h2>
        </div>
    </div>
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Kamar 1</h2>
                    <p class="card-text">/p>
                </div>
                <div class="card-footer"><a class="btn btn-success btn-sm" href="#!">Details</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Kamar 2</h2>
                    <p class="card-text"></p>
                </div>
                <div class="card-footer"><a class="btn btn-success btn-sm" href="#!">Details</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Kamar 3</h2>
                    <p class="card-text"></p>
                </div>
                <div class="card-footer"><a class="btn btn-success btn-sm" href="#!">Details</a></div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>