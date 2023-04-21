<!-- Begin Page Content -->
<div class="container-fluid p-5">
    <!-- Page Heading -->
    <div class="d-block align-items-center mb-4 overflow-hidden">
        <h1 class="h3 mb-0 text-gray-800 float-left"><?= $title; ?></h1>
        <?php if(!isset($this->session->userdata['loggedin']) && !isset($_SESSION["loggedin"])){  ?>
        <a href="<?php echo base_url(); ?>login" class="btn btn-sm btn-success float-right"><i class="fa fa-key" aria-hidden="true"></i></a>
        <a href="<?php echo base_url(); ?>view/tags" class="btn btn-sm btn-success float-right mr-2"><i class="fa fa-tags" aria-hidden="true"></i> Tags</a>
        <a href="<?php echo base_url(); ?>search" class="btn btn-sm btn-warning float-right mr-2"><i class="fa fa-search" aria-hidden="true"></i></a>
        <a href="<?php echo base_url(); ?>" class="btn btn-sm btn-success float-right mr-2"><i class="fa fa-home" aria-hidden="true"></i> Home</a>

        <?php } else { ?>

          <a href="<?php echo base_url(); ?>logout" class="btn btn-sm btn-danger float-right">Logout</a>
          <a href="<?php echo base_url(); ?>home" class="btn btn-sm btn-success float-right mr-2">Dashboard</a>

        <?php }  ?>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-5">
            <form class="d-block col-md-3 mx-auto" id="search_form" action="javascript:;">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="search_key" id="input_keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="search_btn">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div id="search_result"></div>
        </div>
    </div>

    
</div>
<!-- /.container-fluid -->