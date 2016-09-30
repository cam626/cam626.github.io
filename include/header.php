<div id='header'>
  <a href="./">
    <div id="title">
      Royal Vision
    </div>
  </a>

  <?php
    if(!isset($_SESSION['username'])){
  ?>
  <a href="./login">
    <div id="login">
      Log in
    </div>
  </a>
  <a href="./register">
    <div id="register">
      Register
    </div>
  </a>
  <?php
    }else{
  ?>

  <div id="username_display">
    <?php echo strtoupper($_SESSION['username']); ?>
  </div>
  <a href="./include/logout">
    <div id="logout">
      Log out
    </div>
  </a>



  <?php } ?>


</div>
