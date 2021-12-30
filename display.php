<?php
include 'connect.php';
?>



<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-wisth,initial-scale=1.0">
        <title>Crud Operation</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>  
<body>

<div class="container">
    <button class="btn btn-primary my-5"> <a href="user.php" 
    class="text-light">Add user </a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">s1 no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Opeartions</th>
    </tr>
  </thead>
  <tbody>

<?php 
$sql="select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
          <th scope="row">'.$id.'</th>
           <td>'.$name.'</td>
           <td>'.$email.'</td>
           <td>'.$mobile.'</td>
           <td>'.$password.'</td>
           <td>
           <Button class="btn btn-primary"><a href="Update.php" class="text-light">Update</a></button>
           <Button class="btn btn-danger" ><a href="delete.php?" class="text-light">Delete</a></button>
           </td>
         </tr>';
    }
}
?>
  
     </tbody>
</table>    
    
</div>

</body>
</html>  