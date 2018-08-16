<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
 <meta name="keywords" content="금촌고등학교 선거, 전자투표, 웹">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="refresh" content="30">
 <meta property="og:title" content="금촌고등학교 선거웹"/>
 <meta property="og:image" content="기표도장_him9114.jpg"/>
 <meta property="description" content="전자투표 웹"/>
 <title>학교 전자투표웹</title>

  <style>

 #title {
  padding: 30px;
  background-color: #373a3c;
  color: #f8f9fa;
  text-align: center;
  margin: 0;
}

body {
  margin: 0;
  margin-top: 0;
}

#b1 {
  border-width: 1px;
  border-color: #E6E6E6;
  text-align: center;
  border-style: solid;
  margin-right: 300px;
  margin-left: 300px;
  padding: 25px;
}

.b2 {
  border-width: 1px;
  border-color: #E6E6E6;
  text-align: center;
  border-style: solid;
  margin-right: 300px;
  margin-left: 300px;
  padding: 300px;
  margin-top: 50px;
}


@media(max-width:1218px) {

  #b1 {
    border-width: 1px;
    border-color: #E6E6E6;
    text-align: center;
    border-style: solid;
    margin-right: 20px;
    margin-left: 20px;
    padding: 25px;
  }

  .b2 {
    border-width: 1px;
    border-color: #E6E6E6;
    text-align: center;
    border-style: solid;
    margin-right: 20px;
    margin-left: 20px;
    padding: 25px;
    margin-top: 50px;
  }

}


  </style>

<script>


</script>

</head>

<body>


<h3 id="title">금촌고등학교 2-1반 학급선거 웹</h3>





<form action="result.php" method="post" id="b1">
  <h3>한 번만 투표해주세요!</h3>
  <p><input type="text" name="voter_name" placeholder="반장"></p>
  <p><input type="text" name="voter_name2" placeholder="부반장"></p>
  <input type="text" name="classcode" placeholder="학번">
  <p><input type="submit"></p>








</body>

</html>
