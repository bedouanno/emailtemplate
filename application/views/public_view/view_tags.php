<!-- Begin Page Content -->
<div class="container-fluid p-5">
    <!-- Page Heading -->
    <div class="d-block align-items-center mb-4 overflow-hidden">
        <h1 class="h3 mb-0 text-gray-800 float-left"><?= $title; ?></h1>
        <?php if(!isset($this->session->userdata['loggedin']) && !isset($_SESSION["loggedin"])){  ?>
        <a href="<?php echo base_url(); ?>login" class="btn btn-sm btn-success float-right"><i class="fa fa-key" aria-hidden="true"></i></a>
        <a href="<?php echo base_url(); ?>view/tags" class="btn btn-sm btn-warning float-right mr-2"><i class="fa fa-tags" aria-hidden="true"></i></a>
        <a href="<?php echo base_url(); ?>" class="btn btn-sm btn-success float-right mr-2"><i class="fa fa-home" aria-hidden="true"></i> Home</a>

        <?php } else { ?>

          <a href="<?php echo base_url(); ?>logout" class="btn btn-sm btn-danger float-right">Logout</a>
          <a href="<?php echo base_url(); ?>home" class="btn btn-sm btn-success float-right mr-2">Dashboard</a>

        <?php }  ?>
    </div>

    <div class="row">
    <div class="card shadow mb-4 col-sm-12">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-tag"></i> Tags</h6>
        </div>
        <div class="card-body">
            <ul class="list-group">

                    <?php if(!empty($tags)){ ?>
                        <?php foreach($tags as $tag): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="text-gray-900" href="<?php echo base_url(); ?>tag/<?php echo $tag['id']; ?>/templates"><i class="fa fa-tags text-success"></i> <?php echo $tag['tag_name']; ?></a><span class="badge badge-primary badge-pill"><?php echo $this->tags_model->get_temp_count($tag['id']); ?></span>
                        </li>
                        <?php endforeach; ?>
                    <?php }else{ ?>
                        <i>No tags list...</i>
                    <?php } ?>
            </ul>
                <!-- <div id="list-container"></div> -->
        </div>



    </div>
    </div>

    
</div>
<!-- /.container-fluid -->