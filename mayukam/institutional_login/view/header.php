<?php 
  include_once 'admin_session_check.php';
  landing_page_check();
  $raw_data = $_SESSION['admin'];
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- header -->
  <header class="main-header">
    <a href="home.php" class="logo">
      <span class="logo-lg"><b><?php echo $raw_data['institution_name']; ?></b></span>
      <span class="logo-mini"><b>U</b>N</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../img/periyar_univ.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $raw_data['institution_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../img/periyar_univ.png" class="img-circle" alt="User Image">
                <p>
                  Thank you <?php echo $raw_data['institution_name']; ?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../controller/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- sidebar -->
  <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li><a href="home.php"><i class="fa fa-circle-o text-red "></i> <span>Student Detail</span></a></li>
          <li><a href="#" id="faculty.php"><i class="fa fa-circle-o text-yellow"></i> <span>Faculty Detail</span></a></li>
          <li><a href="#" id="examination.php"><i class="fa fa-circle-o text-aqua"></i> <span>Examination</span></a></li>
          <li><a href="#" id="student_attendence.php"><i class="fa fa-circle-o text-red "></i> <span>Student Attendence</span></a></li>
          <li><a href="#" id="internal_marks.php"><i class="fa fa-circle-o text-yellow"></i> <span>Inernal Marks</span></a></li>
          <li><a href="#" id="university_practicals.php"><i class="fa fa-circle-o text-aqua"></i> <span>University Practicals</span></a></li>

        </ul>
      </section>
  </aside>
  <!-- Content -->
  <div class="content-wrapper">