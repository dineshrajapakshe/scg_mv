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
            
            $t1="Lotto";
            $t2= "  Request List";
            
            include_once './page_header.php';
            
            ?>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                         
                        <div class="card">
                          
                                                   <div class="card-header">

                        <form  action="lotto_pending_list.php" class="form-horizontal" method="post" enctype="multipart/form-data" name="register_credit">
                                       
                                       <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group row">
                                                        <label for="date_from" class="col-sm-4 col-form-label">From</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" id="date_from" name="date_from" placeholder="From"  required>
                                                        </div>
                                                    </div>
                                        </div>
                                       <div class="col-md-3">
                                             <div class="form-group row">
                                                        <label for="date_to" class="col-sm-2 col-form-label">To</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" id="date_to" name="date_to" placeholder="From" >
                                                        </div>
                                                    </div>
                                        </div>
                                           
                                           
                                        
                                           <div class="col-md-6">
                                               
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                    </div>
                                                    
                                                    <div class="col-sm-4">
                                                        <button type="submit" class="btn btn-block btn-outline-secondary"> <i class="fas fa-search"></i> Search</button>
                                                    </div>
                                                </div>
                                              
                                        </div>
                                       </div>


                                </form>  
                            </div>
                             
                            <!-- /.card-header -->
                            <div class="card-body">
                                 <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                     <thead>
                                         <tr>
                                             <th>#</th>
                                               <th>Draw No</th>
                                            <th>Ref No</th>
                                            <th>Date/Time</th>
                                            <th>User Name</th>
                                           
                                            <th>Number</th>
                                            <th>Amount</th>
 
                                             <th style="width:3%; text-align: center;">Action</th>
                                         </tr>
                                     </thead>
                                     <tfoot>
                                         <tr>
                                             <th>#</th>
                                               <th>Draw No</th>
                                            <th>Ref No</th>
                                            <th>Date/Time</th>
                                            <th>User Name</th>
                  
                                            <th>Number</th>
                                            <th>Amount</th>
                                             <th style="width:3%; text-align: center;">Action</th>
                                         </tr>
                                     </tfoot>
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($result_lotto_pending)) {
                                            
                                            
                                            ?>
                                            <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $row['n_draw_no']; ?></td>
                                                    <td><?php echo $row['n_ref']; ?></td>
                                                    <td><?php echo printDateTime($row['n_date']); ?></td>
                                                    <td><?php echo getUserName($row['n_u_id'], $conn); ?></td>
                                                    <td><?php echo (base64_decode($row['n_numbers'])); ?></td>
                                                    <td><?php echo printAmount_by_user_with_symbol($row['n_u_id'], $row['n_amount'], $conn); ?></td>
                                                    <td>
                                                        <button type="button" id="btnm<?php echo $row['n_id']; ?>" class="btn btn-block btn-outline-danger btn-flat" onclick="delete_record('<?php echo $row['n_id']; ?>', 'numbers', 'n_id', '0');"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
