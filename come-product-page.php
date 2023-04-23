<?php
session_start();
if (!isset($_SESSION['come_product_page'])) {
    include "come-product-support.php";
    $_SESSION['come_product_page'] = true;
    header("Location: index.php");
    exit;
}

if (isset($db)) {
    $query = $db->connect()->query(
        "SELECT p.name, c.name as category, cp.quantity, s.name as storage, cp.date_added as date_added FROM `come_product` as cp
         join `products` as p on cp.product_id=p.id
         join `categories` as c on p.category_id=c.id
         join `storages` as s on cp.storage_id=s.id
        "

    );
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_object()) {
            $request[] = $row;
        }
    }
}
unset($_SESSION['come_product_page']);
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="block" style="margin-top: 1%;">
                <div class="title" style="display: flex; justify-content: space-between; width: 87%;">
                    <strong>Arrival of Goods list</strong>
                    <?php
                    if ($_SESSION['role'] != 'guest') :
                    ?>
                        <form action="/form/come-product-create.php">
                            <button class="btn btn-success">
                                Create
                            </button>
                        </form>
                    <?php endif ?>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Storage</th>
                                <th>Date added</th>
                                <?php
                                if ($_SESSION['role'] != 'guest') :
                                ?>
                                    <th>Acitions</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($request)) :
                                foreach ($request as $key => $item) :

                            ?>
                                    <tr>
                                        <th scope="row"><?= ++$key ?></th>
                                        <td><?= $item->name ?></td>
                                        <td><?= $item->category ?></td>
                                        <td><?= $item->quantity ?></td>
                                        <td><?= $item->storage ?></td>
                                        <td><?= $item->date_added ?></td>
                                        <?php
                                        if ($_SESSION['role'] != 'guest') :
                                        ?>
                                            <td style="display: flex; justify-content: space-around; width: 50%;">
                                                <form action="">
                                                    <button class="btn btn-info">
                                                        <div class="icon icon-paper-and-pencil"></div>
                                                    </button>
                                                </form>
                                                <form action="">
                                                    <button class="btn btn-warning">
                                                        <div class="icon icon-settings-1"></div>
                                                    </button>
                                                </form>
                                                <form action="">
                                                    <button class="btn btn-danger">
                                                        <div class="icon icon-close"></div>
                                                    </button>
                                                </form>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>