<?php
    include 'dbc.php';

 $name=$_POST['voter_name'];

 mysqli_query($conn, "
   INSERT INTO votetable (voter_name) VALUES ('$name')

 ");

 ?>

 <script>
 windows.alert('DB로 전송 완료 !');
 location.href='main.php'
 </script>
