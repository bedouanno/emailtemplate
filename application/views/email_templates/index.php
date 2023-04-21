<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="<?php echo base_url(); ?>email-templates/create" class="btn btn-sm btn-success">Create Templates</a>
    </div>

    <div class="row">


        <?php foreach($list_templates as $template): ?>
        <div class="col-lg-6 mb-4">
          <div class="card">
            <div class="card-header py-3 d-flex bd-highlight align-items-center">
              <strong id="cstrong" class="mr-auto p-2 bd-highlight"><?php echo $template['category_name'].' - '.$template['template_name']; ?></strong> 
              <a href="<?php echo base_url().'email-templates/view/'.$template['id']; ?>" class="btn btn-sm btn-warning mr-1">View</a> 
              <button onclick="popup_emailheader('#pop<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary mr-1">Email Header</button>
                 <button onclick="copyToClipboard('#demo<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary">Copy</button> 
                  <div class="dropdown no-arrow ml-3">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                          <div class="dropdown-header">Options:</div>
                          <a class="dropdown-item" href="<?php echo base_url().'email-templates/'.$template['id'].'/'.'edit'; ?>">Edit</a>
                          <a class="dropdown-item" href="javascript:;" onclick="deleteBtn('<?php echo $template['id']; ?>')">Delete</a>
                      </div>
                  </div>
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
          </div>
        </div>
      <?php endforeach; ?>
    </div>


    
</div>
<!-- /.container-fluid -->

<!-- <?php echo base_url().'email-templates/delete/'.$template['id'].''; ?> -->