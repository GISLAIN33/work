
<?php
require 'connect.php';
$edit = $_GET['demo'];

$sql = mysqli_query($conn,"SELECT * FROM `student` WHERE id = $edit");
$rows = mysqli_fetch_array($sql);
echo"  <form method='post'><table border='2'>";
 echo "<tr>
 <td><input type='hidden' name='' placeholder='$rows[id]'></td>
 <td><input type='text' name='name' placeholder='$rows[firstname]'></td>
 <td><input type='text' name='lnam' placeholder='$rows[lastname]'></td>
 <td><input type='text' name='email' placeholder='$rows[email]'></td>
 <td><input type='text' name='conu' placeholder='$rows[country]'></td>
 <td><input type='text' name='dod' placeholder='$rows[dob]'></td>
 <td><input type='text' name='gender' placeholder='$rows[gender]'></td>
 <button name='save'>Save</button>
 
 </tr>";

 if(isset($_POST['save'])){
    $nam =$_POST['name'];
    $lnam =$_POST['lnam'];
    $em =$_POST['email'];
    $co =$_POST['conu'];
    $dod =$_POST['dod'];
    $gen =$_POST['gender'];

    $up = mysqli_query($conn,"UPDATE `student` SET firstname='$nam',lastname='$lnam',
    email='$em', country='$co',gender='$gen' WHERE id='$edit'");
    if($up){
        header("location:select.php");

    }
    

 }
echo"</table>";
echo "</form>";

?>

