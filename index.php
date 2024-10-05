<style>
    table{
        border: 1px solid #ccc;
        border-collapse: collapse;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    th,td{
        border: 1px solid #ccc;
        padding: 10px 20px;
    }
    .add-new {
        margin-bottom: 20px;
    }
</style>
<div class="add-new">
    <a href="form.php"><input type="button" value="Add New"> </a>
</div>
<?php 
require('include/connection.php');

$sql= "SELECT user_id,username,email,age FROM users order by user_id desc";
$result= $conn->query($sql);

echo "<table>
<tr>
<th>s.no</th>
<th>user_id</th>
<th>username</th>
<th>email</th>
<th>age</th>
<th>update</th>
<th>delete</th>
</tr>
";
if($result->num_rows>0){
    $count= 0;
    while($row= $result->fetch_object()) {
        $num = ($result->num_rows - $count);
        echo "<tr>
        <td>$num</td>
        <td>$row->user_id</td>
        <td>$row->username</td>
        <td>$row->email</td>
        <td>$row->age</td>
        <td>
        <a href='update-form.php?user_id=$row->user_id'>edit</a>
        </td>
        <td>
        <a href='delete-data.php?user_id=$row->user_id'>delete</a>
        </td>
        </tr>";

        $count++;
    }
} else {
    echo $conn->error;
}
echo "</table>";
?>