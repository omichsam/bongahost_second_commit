<!-- < ?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?> -->
<!-- <ul>
    <li><a class="< ?php active('page1.php');?>" href="http://localhost/page1.php">page1</a></li> 
</ul> -->
<?php
function PageName()
{
  return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

$current_page = PageName();
?>

<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!-- <div class="topnav">
<a href="index.php" class="<?= ($activePage == 'index') ? 'active' : ''; ?>">Home</a>
<a href="about.php" class="<?= ($activePage == 'about') ? 'active' : ''; ?>">About</a>
</div> -->