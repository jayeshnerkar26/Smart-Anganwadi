<html>
<head>
<title>user_display</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    table
    {
        width: 90%;
        margin-left: 65px;
        text-align: center;
    }
    .bg 
    {
        background-image: url(image_upload/Capture.jpg);
    }
</style>
<body class="bg">
    <?php
    include('aconnect.php');
        $sql = "SELECT * FROM food_system";   
        echo "<table border ='1'> 
        <br><br><br>
            <tr>
                <th>Number</th>
                <th>FOOD TYPE</th>
                <th>DAY</th>
                <th>TIMING</th>
            </tr>";

            $result=mysqli_query($conn,$sql);
            while($data = mysqli_fetch_array($result))
            {
                $id = $data['id'];
                echo"<tr>";
                echo"<td>" .$data['id']."</td>";
                echo"<td>" .$data['food_type']."</td>";
                echo"<td>" .$data['day']."</td>";
                echo"<td>".$data['timing']."</td>"; 
                echo "</tr>";
            } 
        echo "</table><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo"<button><a href=anganvaadi_index.php?id=$id>Back</a></button>";
    ?>
</body>
</html>