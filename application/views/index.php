<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

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
                        <a class="text-gray-900" href="javascript:;"><i class="fa fa-tags text-success"></i> <?php echo $tag['tag_name']; ?></a><span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <?php endforeach; ?>
                    <?php }else{ ?>
                        <i>No tags list...</i>
                    <?php } ?>
            </ul>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->