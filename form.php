<?php

require_once 'FullName.php';
use App\classes\FullName;
//echo '<pre>';
//print_r($_POST);
//
//echo $_POST[first_name];
//echo $_POST[last_name];


//$name='hasim amla';
if (isset($_POST['btn'])){

//    $fullName=new App\classes\FullName();
//    $result=$fullName->makeFullName($_POST);

  $result=FullName::makeFullName($_POST);
}





?>


<form action="" method="post">
    <table>
    <tr>
        <th>First Name</th>
        <td><input type="text" name="first_name"></td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td><input type="text" name="last_name"></td>
    </tr>
    <tr>
        <th>Full Name</th>
        <td><input type="text" value="<?php echo $result;?>" ></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="Submit"></td>
    </tr>
</table>
</form>