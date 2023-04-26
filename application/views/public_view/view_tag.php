<!-- Begin Page Content -->
<div class="container-fluid p-5">
    <!-- Page Heading -->
    <div class="d-block align-items-center mb-4 overflow-hidden">
        <h1 class="h3 mb-0 text-gray-800 float-left"><?= $title; ?></h1>
        <?php if(!isset($this->session->userdata['loggedin']) && !isset($_SESSION["loggedin"])){  ?>
        <a href="<?php echo base_url(); ?>login" class="btn btn-sm btn-success float-right"><i class="fa fa-key" aria-hidden="true"></i></a>
        <a href="<?php echo base_url(); ?>view/tags" class="btn btn-sm btn-warning float-right mr-2"><i class="fa fa-tags" aria-hidden="true"></i></a>
        <a href="<?php echo base_url(); ?>search" class="btn btn-sm btn-success float-right mr-2"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
        <a href="<?php echo base_url(); ?>" class="btn btn-sm btn-success float-right mr-2"><i class="fa fa-home" aria-hidden="true"></i> Home</a>


        <?php } else { ?>

          <a href="<?php echo base_url(); ?>logout" class="btn btn-sm btn-danger float-right">Logout</a>
          <a href="<?php echo base_url(); ?>home" class="btn btn-sm btn-success float-right mr-2">Dashboard</a>

        <?php }  ?>
    </div>
     <div class="row">

        <?php if($list_templates != NULL){ ?>
        <?php foreach($list_templates as $template): ?>
        <div class="col-lg-6 mb-4">
          <div class="card">
            <div class="card-header">
            
              <strong><?php echo $template['template_name']; ?></strong> <button onclick="copyToClipboard('#demo<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary float-right ml-2">Copy</button> 
                <button onclick="popup_emailheader('#pop<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary float-right">Email Header</button> 
            </div>

            <div class="card-body csstemplate2" id="pop<?php echo $template['id']; ?>" style="display:none">
            <ul class="list-group" style="list-style: none">
            <li>Email Subject:	<strong>Account Name <span class="text-danger">(<?php if($this->templates_model->get_subject_extension($template['template_subject_ext']) != NULL){ echo $this->templates_model->get_subject_extension($template['template_subject_ext'])['extension_name']; }else{ echo 'Add Subject Extension'; } ?>)</span></strong></li>
            <li>To:	<i>client's email address</i></li>
            <li>Cc:	</li>
            <li>Agent to Queue:	refer <a onclick="open_pop()" href="javascript:;" class="badge badge-sm badge-danger" id="opennote">Open Note</a></li>
            </ul>
            </div>
            <div class="card-body csstemplate">
                <?php echo $template['template_body']; ?>
                <textarea class="d-none" id="demo<?php echo $template['id']; ?>"><?php echo strip_tags($template['template_body']); ?></textarea>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    <?php  }else{ ?>
  <h2 class="text-center d-block col-12">No data found!</h2>
    <?php  } ?>
    </div>

</div>
<!-- /.container-fluid -->
