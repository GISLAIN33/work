<?php
include 'connect.php';

?>
<html>
    <body>
        <table border='1'>
            <tr>
                <th>#</th>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
                <th>country</th>
                <th>DOB</th>
                <th>gender</th>
                <th colspan='3'>operation</th>

            </tr>
            <?php
            $select="SELECT * FROM student";
            $sql=mysqli_query($conn, $select);
            while($row=mysqli_fetch_array($sql)){
                ?>
            <tr>
                <td><?php echo $row['id'] ; ?></td>
                <td><?php echo $row['firstname'] ; ?></td>
                <td><?php echo $row['lastname'] ; ?></td>
                <td><?php echo $row['email'] ; ?></td>
                <td><?php echo $row['country'] ; ?></td>
                <td><?php echo $row['dob'] ; ?></td>
                <td><?php echo $row['gender'] ; ?></td> 
                <td><a href="edit.php?demo=<?php echo $row['id'] ; ?>">edit</a></td>
                <td><a href="">remove</a></td>

            </tr><?php

            }
            ?>
    </body>
</html>


