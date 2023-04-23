<?php
include "layout-top-form.php";
require "../database/database_connection.php";

$db = new DB_Connection('localhost', 'root', '', 'ware_houses');

if (isset($db)) {
    $query = $db->connect()->query("SELECT name FROM `roles`");
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_object()) {
            $request[] = $row;
        }
    }
}
?>


<form action="../user-support.php" method="post">
    <div class="form-group">
        <label class="form-control-label">User Name</label>
        <input type="text" placeholder="User Name" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label class="form-control-label">Email</label>
        <input type="email" placeholder="Email Address" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label class="form-control-label">Password</label>
        <input type="password" placeholder="Password" class="form-control" name="password">
    </div>

    <div class="form-group">
        <label class="form-control-label">Role</label>
        <select name="role" id="" class="form-control">
            <?php
            if (isset($request)) :
                foreach ($request as $key => $item) :
            ?>
                    <option value="<?= $item->name ?>"><?= $item->name ?></option>
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