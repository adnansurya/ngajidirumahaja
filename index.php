<?php 
// session_start();
// include('access/session.php'); 
include('partials/global.php'); 

 ?>

        
        
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('partials/head.php'); ?>
        
        <title><?php echo $webname; ?> - Home</title>        
    </head>
    <body class="sidebar-collapse">
        <div class="wrapper">
            <?php include('partials/topbar.php'); ?>
           
            <?php include('partials/sidebar.php'); ?>
           
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">                
                <!-- Main content -->
                <header class="py-5 bg-image-full" style="background: linear-gradient(to right, #78D961ba, #77D960cc), url(https://images.unsplash.com/photo-1560355206-7bdbaa06ea8c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80) no-repeat top center;">            
                    <div class="text-center my-5">
                        <img class="img-fluid rounded-circle mb-4" src="https://dummyimage.com/150x150/6c757d/dee2e6.jpg" alt="..." />
                        <h1 class="text-white fs-3 fw-bolder">Ngaji Di Rumah Aja</h1>
                        <h5 class="text-white-50 mb-0">Ngaji Online Dari Rumah</h5>
                    </div>
                </header>
                <!-- Content section-->
                <section class="py-5">
                    <div class="container my-5">
                        <div class="row justify-content-center">                    
                            <div class="col-md-6">
                                <div class="container">
                                <h2><small>Cara mudah belajar mengaji?</small><br> Ngaji Di Rumah Aja!</h2>
                                <p class="lead">Belajar mengaji <b>online </b>untuk<b> semua </b>usia. <br> Anda tentukan <b>jadwal</b>nya, kami siapkan <b>mentor</b>nya.</p>
                                </div>
                                
                                <blockquote class="blockquote">
                                <p class="mb-0"><i>&quot;Sampaikanlah dariku walau satu ayat&quot;</i></p>
                                <footer class="blockquote-footer">HR Bukhari</footer>
                                </blockquote>
                            </div>
                            <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1589995635011-078e0bb91d11?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1490&q=80" class="img-fluid img-thumbnail" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php include('partials/footer.php'); ?>
        
           
        </div>
        <?php include('partials/scripts.php'); ?>
    </body>
</html>
