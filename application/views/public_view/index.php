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


        <?php foreach($list_templates as $template): ?>
        <div class="col-lg-6 mb-4">
          <div class="card">
            <div class="card-header">
            <?php echo $template['id']; ?>
              <strong><?php echo $template['category_name'].' - '.$template['template_name']; ?></strong> <button onclick="copyToClipboard('#demo<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary float-right ml-2">Copy</button> 
              <button onclick="popup_emailheader('#pop<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary float-right">Email Header</button> 
            </div>
            <div class="card-body csstemplate2" id="pop<?php echo $template['id']; ?>" style="display:none">
            <ul class="list-group" style="list-style: none">
            <li>Email Subject:	<strong>Account Name <span class="text-danger">(add email extension)</span></strong></li>
            <li>To:	<i>client's email address</i></li>
            <li>Cc:	</li>
            <li>Agent to Queue:	refer <a onclick="open_pop()" href="javascript:;" class="badge badge-sm badge-danger" id="opennote">Open Note</a></li>
            </ul>
            </div>
            <div class="card-body csstemplate">
                <?php echo $template['template_body']; ?>
                <textarea class="d-none" id="demo<?php echo $template['id']; ?>"><?php echo strip_tags($template['template_body']); ?></textarea>
            </div>
            <div class="card-footer">
              <?php $user_id = $template['template_created_by']; ?>

              <?php $date=date_create($template['template_date_created']); ?>
              <span class="badge badge-sm float-right">Added by <?php echo $this->users_model->get_user($user_id)['first_name'].', created date: '.date_format($date,"M d, Y");; ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    
</div>
<!-- /.container-fluid -->