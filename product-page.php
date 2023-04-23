<?php
session_start();
if (!isset($_SESSION['product_page'])) {
    include "product-support.php";
    $_SESSION['product_page'] = true;
    header("Location: index.php");
    exit;
}

if (isset($db)) {
    $query = $db->connect()->query("SELECT p.name, p.price, p.expiration_date, p.description, c.name as category FROM `products` as p 
                                    join `categories` as c on p.category_id=c.id");
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_object()) {
            $request[] = $row;
        }
    }
}
unset($_SESSION['product_page']);
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="block" style="margin-top: 1%;">
                <div class="title" style="display: flex; justify-content: space-between; width: 93%;">
                    <strong>Products list</strong>
                    <?php
                    if ($_SESSION['role'] != 'guest') :
                    ?>
                        <form action="/form/product-create.php">
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
                                <th>Price</th>
                                <th>Expiration date</th>
                                <th>Description</th>
                                <th>Category</th>
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
                                        <td><?= $item->price ?></td>
                                        <td><?= $item->expiration_date ?></td>
                                        <td><?= $item->description ?></td>
                                        <td><?= $item->category ?></td>
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
                                        <?php endif ?>
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