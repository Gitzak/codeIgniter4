<!-- Load the header -->
<?= view('partials/header') ?>

<!-- content -->
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <?= view('partials/navbar') ?>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <?= view('partials/sidebar') ?>
    <!-- END Sidebar -->

    <?= $this->renderSection('content') ?>
    
    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://pixelcave.com" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://pixelcave.com/products/dashmix" target="_blank">Dashmix 5.8</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>

<!-- Load the footer -->
<?= view('partials/footer') ?>