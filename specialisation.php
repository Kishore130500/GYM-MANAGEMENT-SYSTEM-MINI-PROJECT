<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 <div class="container my-5" style="padding-bottom:300px;">
   <h3>SPECIALISATION DETAILS</h3>
    <button class="btn btn-primary my-5"><a href="add_specialisation.php" class="text-light">Add new</a></button>
    <table class="table table-bordered mb-5">
  <thead>
  <tr>
      <th>Sno</th>
      <th>Specialisation_Name</th>
      <th>Trained_By</th>
    </tr>
  </thead>
  <tbody>
<?php
    $sql ="SELECT * FROM `specialisation`";
    $result = mysqli_query($connection,$sql);
       if($result)
       {
           while( $row=mysqli_fetch_assoc($result))
           {
            $id = $row['id'];
            $specialisation_name = $row['specialisation_name'];
            $trained_by = $row['trained_by'];
            echo '<tr>
            <th>'.$id.'</th>
            <th>'.$specialisation_name.'</th>
            <th>'.$trained_by.'</th>
        <td>
        <button class="btn btn-primary"><a href="specialisation_update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="specialisation_delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
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