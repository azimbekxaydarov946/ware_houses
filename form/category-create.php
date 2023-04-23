<?php
include "layout-top-form.php";
?>


<form action="../category-support.php" method="post">
    <div class="form-group">
        <label class="form-control-label">Name</label>
        <input type="text" placeholder="Name" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label class="form-control-label">Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control" ></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="save" class="btn btn-primary">
    </div>
</form>


<?php
include "layout-buttom-form.php";
?>