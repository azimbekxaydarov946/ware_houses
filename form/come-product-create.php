<?php
include "layout-top-form.php";
require "../database/database_connection.php";

$db = new DB_Connection('localhost', 'root', '', 'ware_houses');

if (isset($db)) {
    $query = $db->connect()->query("SELECT id, name FROM `products`");
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_object()) {
            $product[] = $row;
        }
    }
    $query = $db->connect()->query("SELECT id, name FROM `storages`");
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_object()) {
            $storage[] = $row;
        }
    }
}
?>


<form action="../come-product-support.php" method="post">
    <div class="form-group">
        <label class="form-control-label">Product</label>
        <select name="product_id" id="" class="form-control">
            <?php
            if (isset($product)) :
                foreach ($product as $key => $item) :
            ?>
                    <option value="<?= $item->id ?>"><?= $item->name ?></option>
            <?php
                endforeach;
            endif;
            ?>
        </select>
    </div>
    <div class="form-group">
        <label class="form-control-label">Storage</label>
        <select name="storage_id" id="" class="form-control">
            <?php
            if (isset($storage)) :
                foreach ($storage as $key => $item) :
            ?>
                    <option value="<?= $item->id ?>"><?= $item->name ?></option>
            <?php
                endforeach;
            endif;
            ?>
        </select>
    </div>
    <div class="form-group">
        <label class="form-control-label">Quantity</label>
        <input type="number" placeholder="Quantity" class="form-control" name="quantity">
    </div>
    <div class="form-group">
        <label class="form-control-label">Date added</label>
        <input type="date" placeholder="Date added" class="form-control" name="date_added">
    </div>

    <div class="form-group">
        <input type="submit" value="save" class="btn btn-primary">
    </div>
</form>

<?php
include "layout-buttom-form.php";
?>