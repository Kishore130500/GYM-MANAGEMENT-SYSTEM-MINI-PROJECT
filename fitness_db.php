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
    <table class="table table-bordered mb-5">
  <thead>
    <tr>
      <th>Sno</th>
      <th>Activity</th>
      <th>Trainer</th>
      <th>Slot</th>
    </tr>
  </thead>
  <tbody>
<?php
    $sql ="SELECT * FROM `fitness`";
    $result = mysqli_query($connection,$sql);
       if($result)
       {
           while( $row=mysqli_fetch_assoc($result))
           {
        $id = $row['id'];
        $activity = $row['activity'];
        $trainer = $row['shift'];
        $slot = $row['slot'];
        echo '<tr>
        <th>'.$id.'</th>
        <th>'.$activity.'</th>
        <th>'.$trainer.'</th>
        <th>'.$slot.'</th>
      </tr>';

           }

       }
?>

  </tbody>
</table>

    </div>

</body>
</html>