<div class="px-content">
    <div class="page-header">
        <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-android-checkbox-outline"></i>Dashboard / </span>Tags</h1>
    </div>

    <?php $this->load->view('alert/alert.php'); ?>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo  validation_errors() ?>
        </div>
    <?php endif; ?>
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Tags</div>
        </div>

        <form class="panel-body" action="<?php echo base_url('Paket_tes/store') ?>" method="post">
            <div class="form-group">
                <label for="form-group-input-1">Tag</label>
                <input type="text" class="form-control" name="tag" id="form-group-input-1" placeholder="Tag">
                <small class="text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="form-group-input-1">Description</label>
                <input type="text" class="form-control" name="desc" id="form-group-input-2" placeholder="Description">
            </div>
            <div class="panel-footer text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


</div>