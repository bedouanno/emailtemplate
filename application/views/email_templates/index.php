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
            <div class="card-header">
              <strong><?php echo $template['template_category'].' - '.$template['template_name']; ?></strong> <button onclick="copyToClipboard('#demo<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary float-right">Copy</button> 
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