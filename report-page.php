<?php
session_start();
if (!isset($_SESSION['report_page'])) {
    include "report-support.php";
    $_SESSION['report_page'] = true;
    header("Location: index.php");
    exit;
}
unset($_SESSION['report_page']);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="block" style="margin-top: 1%;">
                <div class="title"><strong class="d-block">Report Form</strong></div>
                <div class="block-body">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label">Date</label>
                            <input type="date" placeholder="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Categories</label>
                            <select class="form-control">
                                <option value="">Categories-1</option>
                                <option value="">Categories-2</option>
                                <option value="">Categories-3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Signin" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>