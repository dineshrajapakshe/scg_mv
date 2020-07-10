      <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?=$lang['SCG']?></span>
            </a><!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
  <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="index.php" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        <?=$lang['Dashboard']?>
                    </p>
                </a>
            </li>
            <?php if($_SESSION['login_type']==1){ ?>
            <li class="nav-item has-treeview">
                <a href="admin_list.php" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                         <?=$lang['ADMIN USERS']?>
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    
                    <?php if($_SESSION['login_type']<2){?>
                    <li class="nav-item">
                        <a href="admin_list.php?type=<?= base64_encode(2)?>" class="nav-link" style="font-size: 13px;">
                            <i class="far fa-user nav-icon"></i>
                            <p> <?=$lang[getAdminType(2,$conn)]?> </p>
                        </a>
                    </li>
                    <?php }?>
                
                
                    <br>
                </ul>
            </li>
            <?php }?>
     
         <?php if($_SESSION['login_type']<3){?>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                        <?=$lang['FILES MANAGEMENT']?>
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="file_list.php" class="nav-link" style="font-size: 13px;">
                            <i class="fa fa-play-circle nav-icon"></i>
                            <p><?=$lang['Video Files']?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="file_approved_list.php" class="nav-link" style="font-size: 13px;">
                            <i class="fa fa-thumbs-up nav-icon"></i>
                            <p><?=$lang['Approved List']?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="file_rejected_list.php" class="nav-link" style="font-size: 13px;">
                            <i class="fa fa-thumbs-down nav-icon"></i>
                            <p><?=$lang['Rejected List']?></p>
                        </a>
                    </li>
                  
                    <br>
                </ul>
            </li>
            <?php }?>  
   
            <li class="nav-item">
                <a  href="javascript:logout()"  class="nav-link">
                    <i class="nav-icon  fas  fa-sign-out-alt"></i>
                    <p>
                        LOGOUT
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

   </aside>
      
      