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
    
</div>

<!-- Load the footer -->
<?= view('partials/footer') ?>