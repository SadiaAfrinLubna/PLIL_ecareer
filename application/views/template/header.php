<html>
    <head>
        <title>PLIL</title>
        <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">PLIL</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>jobs">Open Jobs</a></li>
            <li><a href="<?php echo base_url(); ?>apply_procedure">Apply Procedure</a></li>
            <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
            <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
           </ul>

          <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
        </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>




    