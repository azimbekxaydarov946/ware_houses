<?php
session_start();
if (!isset($_SESSION['category_page'])) {
    include "category-support.php";
    $_SESSION['category_page']=true;
    header("Location: index.php");
    exit;
}
unset($_SESSION['category_page']);
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="block" style="margin-top: 1%;">
                <div class="title"><strong>Categories list</strong></div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Acitions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td style="display: flex; justify-content: space-around; width: 50%;">
                                    <form action="">
                                        <button class="btn btn-success">
                                            <div class="icon icon-new-file"></div>
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>