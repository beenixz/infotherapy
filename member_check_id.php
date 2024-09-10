<!DOCTYPE html>
<head>
<meta charset="utf-8">
<style>
h3 {
   padding-left: 5px;
   border-left: solid 5px #edbf07;
}
#close {
   margin:20px 0 0 80px;
   cursor:pointer;
}
</style>
</head>
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
   $id = $_GET["id"];        //아이디 get방식으로 전달 받기

   if(!$id)             //아이디를 입력하지 않고 중복 버튼을 누를시 경고창 띄우기
   {
      echo("<li>아이디를 입력해 주세요!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", "root", "7909", "sample");     //데이터베이스에 있는  members 테이블에 동일한 아이디가 있는지 검사한다.
      $sql = "select * from members where id='$id'";
      $result = mysqli_query($con, $sql);
      $num_record = mysqli_num_rows($result);

      if ($num_record)                      //결과 메세지 출력
      {
         echo "<li>".$id." 아이디는 중복됩니다.</li>";
         echo "<li>다른 아이디를 사용해 주세요!</li>";
      }
      else
      {
         echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
      }
    
      mysqli_close($con);
   }
?>
</p>
<div id="close">
   <img src="close.png" onclick="javascript:self.close()">
</div>
</body>
</html>

