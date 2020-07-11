<?php
include_once './top_header.php';

include_once './data/data_list.php';
?>


<body class="hold-transition sidebar-mini">


    <?php
    if (isset($_GET['error'])) {
        $error = base64_decode($_GET['error']);
        echo '<script>  error_by_code(' . $error . ');</script>';
    }
    ?>    


    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once './navbar.php'; ?>
        <?php include_once './sidebar.php'; ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <?php
            $t1 = "Video";
            $t2 = "  List";

            include_once './page_header.php';
            ?>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="card">

                            <div class="card-header">
                                <h3 class="card-title" >
                                    <button  type="button" class="btn btn-block  btn-outline-secondary" onclick="location.href = 'file.php';">Add New Video</button>

                                </h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Post Image </th>
                                            <th>Post Title </th>
                                             
                                            <th>Post User </th>
                                            <th>Post Date</th>
                                            <th style="width:3%; text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                                     <th>Post Image </th>
                                            <th>Post Title </th>
                                           
                                            <th>Post User </th>
                                            <th>Post Date</th>
                                            <th style="width:3%; text-align: center;">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($result_file_list)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><a href="file.php?v_id=<?php echo base64_encode($row['v_id']); ?>"><?php echo '<img style="width: auto; height: 100px" src='."../".$row['v_cover'].'>'; ?></a></td>
                                                <td><a href="file.php?v_id=<?php echo base64_encode($row['v_id']); ?>"><?php echo $row['v_title']; ?></a></td>
                                                <td><?php echo getaAdminUserName($row['v_user'], $conn); ?></td>
                                                <td><?php echo printDate($row['v_post_date']); ?></td>
                                                 
                                                <td>
                                                    <?php if ($row['v_status'] == '1') { ?><button type="button"  class="btn btn-block btn-outline-danger btn-flat" onclick="delete_record('<?php echo $row['v_id']; ?>', 'videos', 'v_id', '0');"><i class="fa fa-times" aria-hidden="true"></i></button>
                                                    <?php } else { ?>
                                                        <button type="button" class="btn btn-block btn-outline-success btn-flat" onclick="activate_record('<?php echo $row['v_id']; ?>', 'videos', 'v_id', '0');"><i class="fa fa-check "  ></i></button>
                                                            <?php
                                                        }
                                                        ?>
                                                </td>   
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

        <?php include_once './control-sidebar.php'; ?>
        <!-- /.content-wrapper -->
        <?php include_once './footer.php'; ?>

    </div>
    <!-- ./wrapper -->
</body>
</html>
