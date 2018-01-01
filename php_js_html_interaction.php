<p id="para1">Hello world, I'm a <strong>PHP</strong> script!</p>
<?php
/* Write your PHP code here */
echo "<p>Hello world, I'm a <strong>PHP</strong> script!</p>";
echo '<script type="text/javascript">','$(document).ready(function(){console.log( "window loaded" );});$( "p" ).hide( "slow" );$( "p" ).show( "slow" );$( "p" ).slideUp( 800 );$( "p" ).slideDown( 800 );document.getElementById("para1").innerHTML = "YES !!!!";','</script>';
echo "<p>Hello world, I'm a <strong>PHP</strong> script!</p>";
?>

<p id="para2">Hello world, I'm a <strong>PHP</strong> script!</p>
<script>document.getElementById("para1").innerHTML = "NO !!!!";</script>
<script>document.getElementById("para2").innerHTML = "NO WAY !!!!";</script>
