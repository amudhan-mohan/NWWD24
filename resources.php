<?php include 'header.php'; ?>

<h2>Resources</h2>

<div class="row border-bottom border-top border-dark my-4">
    <h3><b>Chinchan Source</b></h3>
    <?php
    $directory = 'resources/gif/chinchan/';
    $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

    foreach ($images as $image) {
        $imageName = basename($image);
        echo '
        <div class="col-md-4">
            <div class="card mb-4 border-dark border-3 shadow-sm">
                <img src="' . $image . '" class="card-img-top" data-bs-toggle="modal" data-bs-target="#resourcesModal-' . $imageName . '">
            </div>
        </div>

        <div class="modal fade" id="resourcesModal-' . $imageName . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'. $imageName .'</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="' . $image . '" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <a href="' . $image . '" download class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
        </div>';
    }
    ?>
</div>
<div class="row border-bottom border-dark my-4">
    <h3><b>Cycle Source</b></h3>
    <?php
    $directory = 'resources/gif/cycle/';
    $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

    foreach ($images as $image) {
        $imageName = basename($image);
        echo '
        <div class="col-md-4">
            <div class="card mb-4 border-dark border-3 shadow-sm">
                <img src="' . $image . '" class="card-img-top" data-bs-toggle="modal" data-bs-target="#resourcesModal-' . $imageName . '">
            </div>
        </div>

        <div class="modal fade" id="resourcesModal-' . $imageName . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'. $imageName .'</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="' . $image . '" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <a href="' . $image . '" download class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
        </div>';
    }
    ?>
</div>
<div class="row my-4">
    <h3><b>Dog Source</b></h3>
    <?php
    $directory = 'resources/gif/dog/';
    $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

    foreach ($images as $image) {
        $imageName = basename($image);
        echo '
        <div class="col-md-4">
            <div class="card mb-4 border-dark border-3 shadow-sm">
                <img src="' . $image . '" class="card-img-top" data-bs-toggle="modal" data-bs-target="#resourcesModal-' . $imageName . '">
            </div>
        </div>

        <div class="modal fade" id="resourcesModal-' . $imageName . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'. $imageName .'</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="' . $image . '" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <a href="' . $image . '" download class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
        </div>';
    }
    ?>
</div>

<?php include 'footer.php'; ?>
