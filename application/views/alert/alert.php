<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> This alert box could indicate a successful or positive action.
    </div>
<?php else : ?>
    <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
        </div>
    <?php else : ?>
        <?php if ($this->session->flashdata('warning')) : ?>
            <div class="alert alert-warning alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
            </div>
        <?php else : ?>
            <?php if ($this->session->flashdata('info')) : ?>
                <div class="alert alert-info alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>