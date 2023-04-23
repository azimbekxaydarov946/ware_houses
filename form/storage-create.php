<?php
include "layout-top-form.php";
?>


<form action="../storage-support.php" method="post">
    <div class="form-group">
        <label class="form-control-label">Name</label>
        <input type="text" placeholder="Name" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label class="form-control-label">Location</label>
        <input type="text" placeholder="Location" class="form-control" name="location">
    </div>
    <div class="form-group">
        <input type="submit" value="save" class="btn btn-primary">
    </div>
</form>


<?php
include "layout-buttom-form.php";
?>