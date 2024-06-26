<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>


    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-plus text-success mr-1"></i>Add Email Template          
          </div>
          <div class="card-body">
                 <?php if(!empty(validation_errors()) and $this->input->post('submit')): ?>
                  <div class="alert alert-dismissible alert-danger">
                      <strong><?php echo validation_errors(); ?></strong>
                  </div>
                  <?php endif; ?>
              <?php echo form_open('email-templates/create'); ?>
                <div class="form-group row mb-0">
                  <div class="col-sm-12 pb-3">
                        <label for="template_name">Template Name:</label>
                      <input type="text" required class="form-control" name="template_name" id="template_name" placeholder="Enter Template Name...">
                  </div>
                  <div class="col-sm-12 pb-3">
                      <label for="template_body">Body:</label>
                      <textarea class="form-control" name="template_body" id="template_body" placeholder="Enter Template Name..."></textarea>
                  </div>
                  <div class="col-sm-12 pb-3">
                      <label for="template_name d-block">Category:</label>
                      <select name="template_category" id="template_name" class="form-control">
                         <option value="" selected disabled hidden>--- Choose Category Here ---</option>
                      </select>
                  </div>


                  <div id="list-category"></div>
                </div>
                      <input type="submit" class="btn btn-md btn-success float-right" value="Create" name="submit" id="template_category">
              </form>
          </div>
        </div>      
      </div>
              <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-header">
              <i class="fa fa-plus mr-2"></i>Add Template Category
              </div>
              <div class="card-body">
                  <?php if(!empty(validation_errors()) and $this->input->post('submit_category')): ?>
                  <div class="alert alert-dismissible alert-danger">
                      <strong><?php echo validation_errors(); ?></strong>
                  </div>
                  <?php endif; ?>
                  <form id="myForm" action="javascript:;">
                      <div class="form-group row mb-0">
                          <div class="col-sm-10  p-0">
                              <input type="text" required class="form-control" name="category_name" id="category_name" placeholder="Category Name">
                          </div>
                          <div class="col-sm-2 pr-0 pl-1">
                              <input id="submitBtns" type="submit" value="Add" class="btn btn-sm btn-success form-control">
                          </div>
                      </div>
                    </form>
              </div>
            </div>


            <div class="card">
              <div class="card-header">
              <i class="fa fa-plus mr-2"></i>Create Email Subject Extension
              </div>
              <div class="card-body">
                  <?php if(!empty(validation_errors()) and $this->input->post('submit_category')): ?>
                  <div class="alert alert-dismissible alert-danger">
                      <strong><?php echo validation_errors(); ?></strong>
                  </div>
                  <?php endif; ?>
                  <form id="myFormSE" action="javascript:;">
                      <div class="form-group row mb-0">
                          <div class="col-sm-10  p-0">
                              <input type="text" required class="form-control" name="extension_name" id="extension_name" placeholder="Subject Extension Name">
                          </div>
                          <div class="col-sm-2 pr-0 pl-1">
                              <input id="submitBtnSE" type="submit" value="Add" class="btn btn-sm btn-success form-control">
                          </div>
                      </div>
                    </form>
              </div>
              <div class="card-body pt-0">
              
              <!-- <div class="spinner-border mx-auto text-center" role="status">
                <span class="visually"></span>
              </div> -->
               <div id="list_subject_ext"></div>

              
              </div>
            </div>
          </div>


    </div>
    
</div>
<!-- /.container-fluid -->