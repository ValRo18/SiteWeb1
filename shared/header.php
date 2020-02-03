<?php 
$menu=[["Name"=>"Page 1","Url"=>"/page_1.php"],["Name"=>"Page 2","Url"=>"/page_2.php"],["Name"=>"Page 3","Url"=>"/page_3.php"],["Name"=>"Page 4","Url"=>"/page_4.php"],["Name"=>"Page 5","Url"=>"/page_5.php"]]
?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?? 'Page' ?></title>
	<link rel="stylesheet" type="text/css" href="./css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="./imgs/logo.png" > 
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">

      <?php 
      if(sizeof($menu)>2)
        { 
      ?>
        <?php 
          for($i=0; $i<2; $i++)
          { 
            $ele = $menu[$i];
        ?>
            <a class="navbar-item" href="<?= $ele["Url"]?>">
            <?= $ele["Name"]; ?>
            <a/>
        <?php  
        } 
        ?>
        
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>
        <div class="navbar-dropdown">
          <?php for ($i=2; $i < sizeof($menu) ; $i++) { 
            $ele=$menu[$i];?>
            <a class="navbar-item" href="<?= $ele["Url"]?>">
            <?= $ele["Name"]?>
            <a/>
          <?php } ?>
          </div>
        </div>
        <?php }else {?>
          <?php for ($i=0; $i <sizeof($menu); $i++) { 
            $ele =$menu[$i];?>
           <a class="navbar-item" href="<?= $ele["Url"]?>">
            <?= $ele["Name"]?>
            <a/>   
          <?php }?>
          <?php }?>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>