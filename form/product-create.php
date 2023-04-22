<?php
include "layout-top-form.php";
?>


<form action="../product-support.php" method="post">
    <div class="form-group">
        <label class="form-control-label">Product Name</label>
        <input type="text" placeholder="Product Name" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label class="form-control-label">price</label>
        <input type="number" placeholder="price" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label class="form-control-label">Expiration date</label>
        <input type="date" placeholder="Expiration date" class="form-control" name="expiration_date">
    </div>
    <div class="form-group">
        <label class="form-control-label">Desription</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label class="form-control-label">Catgories</label>
        <select name="category_id" id=""  class="form-control">
            <option value="1">Category-1</option>
            <option value="2">Category-2</option>
            <option value="3">Category-3</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" value="save" class="btn btn-primary">
    </div>
</form>

<?php
include "layout-buttom-form.php";
?>