<?php
    include 'dbc.php';

 $name=$_POST['voter_name'];
 $classcode=$_POST['classcode'];
 $name2=$_POST['voter_name2'];

 mysqli_query($conn, "
   INSERT INTO votetable (voter_name, classcode, voter_name2) VALUES ('$name', '$classcode', '$name2') ");




?>


 <center><h1>투표완료!</h1></center>
 <center><strong><h3>창을 닫아주세요</h3></strong></center>
