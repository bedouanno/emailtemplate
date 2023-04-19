<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-tags text-success mr-2"></i><?= $title; ?></h1>
        <a href="<?php echo base_url(); ?>email-templates/create" class="btn btn-sm btn-success">Create Templates</a>
    </div>

     <div class="row">

<?php if($list_templates != NULL){ ?>
        <?php foreach($list_templates as $template): ?>
        <div class="col-lg-6 mb-4">
          <div class="card">
            <div class="card-header">
              <strong><?php echo $template['category_name'].' - '.$template['template_name']; ?></strong> <button onclick="copyToClipboard('#demo<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary float-right">Copy</button> <a href="<?php echo base_url().'email-templates/view/'.$template['id']; ?>" class="btn btn-sm btn-warning float-right mr-2">View</a><a href="<?php echo base_url().'email-templates/'.$template['id'].'/'.'edit'; ?>" class="btn btn-sm float-right mr-2">Edit</a> <a href="javascript:;" onclick="deleteBtn('<?php echo $template['id']; ?>')" class="btn btn-sm float-right mr-2">Delete</a>
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
