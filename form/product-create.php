<?php
include "layout-top-form.php";
require "../database/database_connection.php";

$db = new DB_Connection('localhost', 'root', '', 'ware_houses');

if (isset($db)) {
    $query = $db->connect()->query("SELECT id, name FROM `categories`");
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_object()) {
            $request[] = $row;
        }
    }
}
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
        <select name="category_id" id="" class="form-control">
            <?php
            if (isset($request)) :
                foreach ($request as $key => $item) :
            ?>
                    <option value="<?= $item->id ?>"><?= $item->name ?></option>
            <?php
                endforeach;
            endif;
            ?>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" value="save" class="btn btn-primary">
    </div>
</form>

<?php
include "layout-buttom-form.php";
?>