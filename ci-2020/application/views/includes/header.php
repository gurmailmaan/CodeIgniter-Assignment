<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    
    <title><?php
 if(APP_NAME){
 $title = APP_NAME;
 }
 if(isset($heading)){
 $title = $title . " - " . $heading;
 }
 echo $title;
 ?></title>


  </head>
  <body>
  <div class=”container”>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="navbar-brand" href="<?php echo base_url()?>"> <i class="material-icons">home</i></a>
      <a class="navbar-brand" href="<?php echo base_url()?>auth/login/">Login</a>
      <a class="navbar-brand" href="<?php echo base_url()?>auth/logout/">Logout</a>
      
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Articles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url()?>articles">Read</a>
          <a class="dropdown-item" href="<?php echo base_url()?>articles/write">Write</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php if ($this->ion_auth->logged_in()) : ?>
<?php
$user_id = $this->ion_auth->user()->row()->id ;
$username = $this->ion_auth->user()->row()->username ;
?>
<!-- Here you do your links & Bootstrap for the Logged in part:
Links to logout, change password, and create article would be nice.
-->
Logged in <?php echo $username; ?>
<?php else: ?>
<a href="<?php echo base_url()?>auth/login">Login </a>
<?php endif; ?>
    </form>
  </div>
</nav>

<?php $message = $this->session->userdata('message'); ?>
 <?php if(isset($message)): ?>
    <h3 class="alert alert-primary" id="message"><i class="material-icons">thumb_up</i><?php echo $message
?></h3>
 <?php endif; ?>
 <?php $this->session->unset_userdata('message'); ?>

 <script type="text/javascript">
 $(document).ready(function(){
 console.log('ready');
 });
 </script>

<script type="text/javascript">
 $(document).ready(function(){
 // fade #message if exists
 if($('#message').length){
 $( "#message" ).delay(3000).fadeOut({}, 3000);
 }
 });
 </script>