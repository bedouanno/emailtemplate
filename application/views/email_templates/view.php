<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="<?php echo base_url(); ?>email-templates/create" class="btn btn-sm btn-success">Create Templates</a>
    </div>

    <div class="row">
        <div class="col-lg-10 mb-4">
          <div class="card">
            <div class="card-header">
              <strong><?php echo $template['category_name'].' - '.$template['template_name']; ?></strong> <button onclick="copyToClipboard('#demo<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary float-right">Copy</button> <a href="<?php echo base_url().'email-templates/'.$template['id'].'/'.'edit'; ?>" class="btn btn-sm float-right mr-2 ml-2">Edit</a>
                    <button onclick="popup_emailheader('#pop<?php echo $template['id']; ?>')" class="btn btn-sm btn-primary float-right">Email Header</button> 
            </div>
            <div class="card-body csstemplate2" id="pop<?php echo $template['id']; ?>" style="display:none">
            <ul class="list-group" style="list-style: none">
            <li>Email Subject: <span id="subj_val" class="d-none"><?php echo $template['template_subject_ext']; ?></span><strong>Account Name <span class="text-danger"><span id="se_name">(<?php echo $this->templates_model->get_subject_extension($template['template_subject_ext'])['extension_name']; ?>)</span> <a href="javascript:;" id="update_btn" class="badge badge-sm"><i class="fa fa-edit"></i></a></span></strong>
            <form id="form_update" class="d-none" action="javascript:;">
            <div class="form-group row">
            <div class="ml-2">
              <input type="hidden" name="tempid" id="tempid" value="<?php echo $template['id']; ?>">
              <select name="subject_extension" id="list_se" class="form-control form-control-sm"></select>
              </div>
              <div class="">
              <button class="btn btn-sm btn-success" id="update_se"><i class="fa fa-check"></i></button>
              </div>
              </div>
            </form>
 
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
              <div id="list-tags-template"></div>
            </div>
          </div>
        </div>

          <div class="col-lg-2">
          <div class="card mb-2">    
            <div class="card-header">
            <strong>Add Tags</strong>
            </div>
            <div class="card-body">
              <div class="tags-content">

              </div>
              <form id="myFormTags" action="javascript:;">
              <input type="hidden" name="idtemp" id="idtemp" value="<?php echo $template['id']; ?>">
                <select multiple data-role="tagsinput" class="form-control" id="list-tags" name="template_tags[]"></select>
                <input type="submit" class="btn btn-sm btn-success float-right" id="submitBtnsTags" value="Add Tag">
              </form>

            </div>

          </div>  




  
            <div class="card">
              <div class="card-header">
              <i class="fa fa-plus mr-2"></i>Create Tag
              </div>
              <div class="card-body">
                  <form id="myForm" action="javascript:;">
                      <div class="form-group row mb-0">
                          <div class="col-sm-12  p-0">
                              <input type="text" required class="form-control" name="tag_name" id="tag_name" placeholder="Tag Name">
                          </div>
                          <div class="col-sm-12 pr-0 pl-1">
                              <input type="submit" name="submit" id="submitBtnsAddTags" value="Create Tag" class="btn btn-sm btn-warning float-right">
                          </div>
                      </div>
                    </form>
              </div>
            </div>

            <div class="card mt-2">
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
                      <div class="form-group mb-0">
                          <div class="col-sm-12  p-0">
                              <input type="text" required class="form-control" name="extension_name" id="extension_name" placeholder="Subject Extension Name">
                          </div>
                          <div class="col-sm-12 p-0">
                              <input id="submitBtnSE" type="submit" value="Add" class="btn btn-sm btn-success float-right m-0">
                          </div>
                      </div>
                    </form>
              </div>
            </div>
   
        </div>



        

      </div>


</div>
<!-- /.container-fluid -->


