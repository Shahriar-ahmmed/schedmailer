<?php
/**
 * Created by PhpStorm.
 * User: SHAHRIAR AHMMED T
 * Date: 25-Nov-15
 * Time: 10:12 PM
 */
$d = date('D');
print $d;
if ($d == 'Tue')
    echo 'Yea its right<br>';
else
    echo 'No its not<br>';

$ar = array(1, 2, 3, 5, 'key' => 'keyvl');
foreach ($ar as $i) {
    echo "$i <br>";
}

echo $viewer = getenv('HTTP_USER_AGENT') . "<br/>";

//if( $_POST["name"] || $_POST["age"] )
//  {
//      echo "Welcome ". $_POST['name']. "<br />";
//      echo "You are ". $_POST['age']. " years old.";
//      exit();
//  }
//
setcookie("name", "shahriar ahmmed", time()+3600, "/","", 0);
setcookie("age", "25", time()+3600, "/", "",  0);
if( isset($_COOKIE["name"]))
    echo "Welcome " . $_COOKIE["name"] . "<br />";
else
    echo "Sorry... Not recognized" . "<br />";

/* is equivalent to */
echo $_COOKIE["age"] . "<br />";
/* is equivalent to */
//echo $_HTTP_COOKIE_VARS["name"] . "<br />"; generate an error
setcookie( "name", "", time()- 60, "/","", 0);
setcookie( "age", "", time()- 60, "/","", 0);
if( isset($_COOKIE["name"]))
    echo "Welcome " . $_COOKIE["name"] . "<br />";
else
    echo "Sorry... Not recognized" . "<br />";

?>
<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
    Name: <input type="text" name="name" />
    Age: <input type="text" name="age" />
    <input type="submit" />
</form>
</body>
</html>
