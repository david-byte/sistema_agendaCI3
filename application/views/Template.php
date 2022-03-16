<!-- header -->
<?php $this->load->view('layout/header.php') ?>
<!-- /header -->

<!-- sideBar -->
<?php $this->load->view('layout/sideBar.php') ?>
<!-- /sideBar -->

<!-- topNavigation -->
<?php $this->load->view('layout/topNavigation.php') ?>
<!-- /sideBar -->



<!-- page content -->
<?= $contents; ?>
<!-- /page content -->

<!-- footer content -->
<?php $this->load->view('layout/footer.php') ?>
<!-- /footer content -->