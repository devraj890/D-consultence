<?php
include "../connection/connect.php";

//clear session start notice......
error_reporting(E_ALL ^ E_NOTICE);

// session_start();
if (!isset($_SESSION)) {
    session_start();
}

$user = $_SESSION['username'];
if ($user == true) {
    $query = "select * from tb_country";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);
    $count = count($row);
} else {
    header('location:admin_login.php');
}
?>

<?php
include "partical-layout/head.php";

include "partical-layout/nav.php";
?>


<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

    <!-- Demo content -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="a-head">
                    <h1>Manage Country</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="separator pt-0 pb-0"></div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="container">
                <?php
                if (isset($_SESSION['status']) && $_SESSION != '') {
                ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
            </div>

            <div class="container">
                <a href="add_country.php" class="btn btn-primary mt-1 mb-2" role="button"><i class="fa-solid fa-user-plus"></i> Add New</a>
                <div class="table-responsive table-responsive-sm table-responsive-md">
                    <table class="table table-bordered table-hover" id="myTable">
                        <thead class="bg-p">
                            <tr>
                                <th>Country ID</th>
                                <th>Country Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <?php
                        if ($count > 0) {
                            $i = 0;
                            do {
                                $i = $i + 1;
                        ?>
                                <tbody>
                                    <tr>
                                        <?php $id = $row['conid'] ?>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row['country'] ?></td>

                                        <td> <a href="update_country.php?id=<?php echo $id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Update"> <i class="fa-solid fa-pen-to-square ml-2"></i></a> || <a href="delete_country.php?id=<?php echo $id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-solid fa-trash ml-2"></i></a></td>
                                    </tr>
                                </tbody>
                        <?php
                            } while ($row = mysqli_fetch_array($result));
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include "partical-layout/foot.php";
?>