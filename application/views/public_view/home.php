<!-- Begin Page Content -->
<div class="container-fluid p-5">
    <!-- Page Heading -->
    <div class="d-block align-items-center mb-4 overflow-hidden">
        <h1 class="h3 mb-0 text-gray-800 float-left"><?= $title; ?></h1>
        <?php if(!isset($this->session->userdata['loggedin']) && !isset($_SESSION["loggedin"])){  ?>
        <a href="<?php echo base_url(); ?>login" class="btn btn-sm btn-success float-right"><i class="fa fa-key" aria-hidden="true"></i></a>
        <a href="<?php echo base_url(); ?>view/tags" class="btn btn-sm btn-success float-right mr-2"><i class="fa fa-tags" aria-hidden="true"></i> Tags</a>
        <a href="<?php echo base_url(); ?>search" class="btn btn-sm btn-success float-right mr-2"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
        <a href="<?php echo base_url(); ?>" class="btn btn-sm btn-warning float-right mr-2"><i class="fa fa-home" aria-hidden="true"></i></a>

        <?php } else { ?>

          <a href="<?php echo base_url(); ?>logout" class="btn btn-sm btn-danger float-right">Logout</a>
          <a href="<?php echo base_url(); ?>home" class="btn btn-sm btn-success float-right mr-2">Dashboard</a>

        <?php }  ?>
    </div>

    <div class="row">

<div class="col-lg-6 mx-auto">
  <div class="card">
    <div class="card-header text-center">
        EMAIL TEMPLATE CATEGORIES
    </div>
    <div class="card-body d-flex justify-content-center">
      <a class="btn btn-sm btn-success w-100" href="<?php echo base_url(); ?>view/modification">MODIFICATION</a>
      <a class="btn btn-sm btn-success w-100 mx-2" href="<?php echo base_url(); ?>view/rwc">RWC</a>
      <a class="btn btn-sm btn-success w-100" href="<?php echo base_url(); ?>view/pdqa">PDQA</a>
    
    </div>
  </div>
    </div>
    </div>

    
</div>
<!-- /.container-fluid -->