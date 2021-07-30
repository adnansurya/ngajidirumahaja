<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-lightblue elevation-2">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link d-none d-sm-block">
      <img  src="image/logo.jpg" alt="Logo Ngaji Di Rumah Aja" class="brand-image img-circle elevation-0" style="opacity: .8">
      <span class="brand-text font-weight-light">Ngaji Di Rumah Aja</span>
    </a>



    <!-- Sidebar -->
    <div class="sidebar">     

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

      <?php if(isset($_SESSION['logged_user'])){ ?>
        <div class="user-panel d-sm-none mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="image/logo.png" class="img-circle elevation-0 mt-2" alt="<?php echo $user_session['name']; ?>">
          </div>
          <div class="info">            
            <a href="profil.php" class="d-block">Hai, <?php echo $user_session['nickname'].' !<br>'; ?></a>            
            <small class="text-muted"><?php echo $user_session['rolename']; ?></small>
          </div>          
        </div>
      <?php }else{ ?>
        <div class="user-panel d-sm-none mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/AdminLTELogo.png" class="img-circle elevation-0 mt-2" alt="Login">
          </div>
          <div class="info">            
            <a href="login.php" class="d-block">Hai, Pelanggan!</a>            
            <small class="text-muted">Silahkan Login</small>
          </div>          
        </div>
        
      <?php } ?>  
          
      <li class="nav-header">NAVIGASI</li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="produk.php" class="nav-link">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>Produk</p>
            </a>
          </li>
        <?php 
            if(isset($_SESSION['logged_user'])){
        ?>

          <?php 
              if($user_session['role'] == 'SU' || $user_session['role'] == 'AD' || $user_session['role'] == 'ED'){
          ?>
          <li class="nav-header">ADMIN</li>
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_produk.php" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>Data Produk</p>
            </a>
          </li>
          <?php  
              } 
          ?>
          <?php 
              if($user_session['role'] == 'SU' || $user_session['role'] == 'AD'){
                $dbProduct = new SQLite3('uploads/mksrobotics.db');
                $total = $dbProduct->querySingle("SELECT COUNT(*) as count FROM transit");
                                 
          ?>
            <li class="nav-item">
              <a href="transit.php" class="nav-link">
                <i class="nav-icon fas fa-truck"></i>
                <p>Transit 
                  <?php if($total > 0){
                      echo ' <span class="badge badge-danger">'.$total.'</span>';
                  }?>
                 
                </p>
              </a>
            </li>
          <?php  
              } 
          ?>

          <?php 
              if($user_session['role'] == 'SU'){
          ?>
            <li class="nav-header">SUPERUSER</li>
            <li class="nav-item">
              <a href="data_user.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Data User</p>
              </a>
            </li>
          <?php  
              } 
          ?>

        <?php                
            }
        ?>
      
       <div class="d-sm-none">
       <li class="nav-header">AKUN</li>
      <?php if(isset($_SESSION['logged_user'])){ ?>
        
         
          <li class="nav-item">
            <a href="profil.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Ubah Profil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        
        <?php } else{?>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>Login</p>
            </a>
          </li>
          <?php } ?>
          </div>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>