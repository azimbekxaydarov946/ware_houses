<?php
include "layout-top-form.php";
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
        <input type="submit" value="save" class="btn btn-primary">
    </div>
</form>


<?php
include "layout-buttom-form.php";
?>