<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">
      <div class="col-lg-8">
          <!-- Default Card Example -->
          <div class="card mb-4">
              <div class="card-header">
                  <i class="fa fa-tags mr-2"></i>List of Tags
              </div>
              <div class="card-body">
              <div class="list-group">
                    <!-- <?php if(!empty($tags)){ ?>
                        <?php foreach($tags as $tag): ?>
                        <a class="list-group-item text-gray-900" href="javascript:;"><i class="fa fa-tags text-primary"></i> <?php echo $tag['tag_name']; ?></a>
                        <?php endforeach; ?>
                    <?php }else{ ?>
                        <i>No tags list...</i>
                    <?php } ?> -->
                    <div id="list-container"></div>
              </div>
              </div>
          </div>
      </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
              <i class="fa fa-plus mr-2"></i>Add Tag
              </div>
              <div class="card-body">
                  <?php if(!empty(validation_errors())): ?>
                  <div class="alert alert-dismissible alert-danger">
                      <strong><?php echo validation_errors(); ?></strong>
                  </div>
                  <?php endif; ?>
                  <?php echo form_open('tags'); ?>
                      <div class="form-group row mb-0">
                          <div class="col-sm-10  p-0">
                              <input type="text" required class="form-control" name="tag_name" id="tag_name" placeholder="Tag Name">
                          </div>
                          <div class="col-sm-2 pr-0 pl-1">
                              <input type="submit" name="submit" value="Add Tag" class="btn btn-sm btn-success form-control">
                          </div>
                      </div>
                    </form>
              </div>
            </div>
          </div>
    </div>
</div>
<!-- /.container-fluid -->