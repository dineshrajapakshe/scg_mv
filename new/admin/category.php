<?php
include_once './top_header.php';
include_once 'data/data_list.php';
include_once '../inc/functions.php';
?>
<body class="hold-transition sidebar-mini">
    <?php
    if (isset($_GET['error'])) {
        $error = base64_decode($_GET['error']);
//        echo '<script>  error_by_code(' . $error . ');</script>';
    }
    ?>
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once './navbar.php'; ?>
        <?php include_once './sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Add Category</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Category Add</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-body">
                                    <form action="data/register_category.php" class="form-horizontal" method="post" enctype="multipart/form-data" name="update_members" >

                                        <?php
                                        if ($category_id == 0) {
                                            echo '<input type="hidden" name="action" value="register">';
                                        } else {
                                            echo ' <input type="hidden" name="action" value="update">';
                                            echo ' <input type="hidden" name="category_id" value="' . $category_id . '">';
                                        }
                                        ?>

                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name"  name="name" placeholder="Category Name" value="<?php echo $row['name']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="remark" class="col-sm-2 col-form-label">Category Description</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="remark"  name="remark" placeholder="Category Description" value="<?php echo $row['remark']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="unit" class="col-sm-2 col-form-label">Parent Category</label>
                                            <div class="col-sm-10">
                                                <select name="unit" id="unit" class="form-control simple-select" required="">
                                                    <?php
                                                    $query = "SELECT * FROM category WHERE status=1";
                                                    $cat_re = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($cat_re)) {
                                                        ?>
                                                        <option value="<?= $row["category_id"] ?>"><?= $row["name"] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div  class="col-lg-12 col-md-12 form-group ">
                                            <div class="col-lg-6 col-md-6 form-group" >
                                                <br>
                                            </div>
                                            <div class="col-lg-6 col-md-6 form-group ">
                                                <div class="row">
                                                    <?php if ($category_id == 0) { ?>

                                                        <div class="col-lg-3 col-md-3 form-group">
                                                            <button type="submit" name="add_new_Submit" class="btn btn-block btn-danger">Add New</button>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="col-lg-3 col-md-3 form-group">
                                                            <button type="submit" class="btn btn-block btn-success">Update Now</button>
                                                        </div>
                                                    <?php } ?>
                                                    <div class="col-lg-3 col-md-3 form-group">
                                                        <button type="reset" class="btn btn-block btn-warning">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once './footer.php'; ?>
    </div>
</body>
</html>
