<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <!-- <a href="<?php echo base_url(); ?>email-templates/create" class="btn btn-sm btn-success">Create Templates</a> -->
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-plus text-success mr-1"></i>Update Email Template          
          </div>
          <div class="card-body">
                 <?php if(!empty(validation_errors()) and $this->input->post('submit')): ?>
                  <div class="alert alert-dismissible alert-danger">
                      <strong><?php echo validation_errors(); ?></strong>
                  </div>
                  <?php endif; ?>
              <?php echo form_open('email-templates/'.$template['id'].'/edit'); ?>
                <div class="form-group row mb-0">
                  <div class="col-sm-12 pb-3">
                        <label for="template_name">Template Name:</label>
                      <input type="text" required class="form-control" name="template_name" value="<?php echo $template['template_name']; ?>" id="template_name" placeholder="Enter Template Name...">
                  </div>
                  <div class="col-sm-12 pb-3">
                      <label for="template_body">Body:</label>
                      <textarea class="form-control" name="template_body" id="template_body" placeholder="Enter Template Name..."><?php echo $template['template_body']; ?></textarea>
                  </div>
                  <div class="col-sm-12 pb-3">
                      <label for="template_name d-block">Category:</label>
                      <select name="template_category" id="template_name" class="form-control">
                         <option value="" selected disabled hidden>--- Choose Category Here ---</option>
                        <?php foreach($list_category as $category): ?>
                          <option <?php if($template['template_category'] == $category['id']): echo 'selected'; endif; ?>  value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                </div>
                      <input type="submit" class="btn btn-md btn-success float-right" value="Update" name="submit_update" id="template_category">
              </form>
          </div>
        </div>      
      </div>
    </div>
</div>
<!-- /.container-fluid -->