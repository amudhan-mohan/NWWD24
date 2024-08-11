<?php include 'header.php'; ?>

<h2>Photography</h2>
<div class="row">
    <?php
    $directory = 'photography/';
    $images = glob($directory . "*.{jpg,jpeg,png}", GLOB_BRACE);

    foreach ($images as $image) {
        $imageName = basename($image);
        echo '
        <div class="col-md-4">
            <div class="card mb-4 border-dark border-3 shadow-sm">
                <img src="' . $image . '" class="card-img-top" data-bs-toggle="modal" data-bs-target="#photographyModal-' . $imageName . '">
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="photographyModal-' . $imageName . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
