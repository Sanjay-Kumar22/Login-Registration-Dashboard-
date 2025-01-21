<?php 
session_start();
if(!empty($_SESSION['login_email'])){
?>
<!DOCTYPE html>
<html lang="en">
<body>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <?php include('navbar.php'); ?>
      <!-- Main Content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="content">
        <?php include('header.php'); ?>
        

         
      </main>
    </div>
  </div>
</body>
</html>
<?php }else{ ?>
<script> window.location = 'login.php';</script>
<?php } ?>