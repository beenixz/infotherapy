<?php
    $id   = $_POST["id"];       // $_POST[]는 전역 변수 $_POST의 id 값을 전달 받는다
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;       //두개의 이메일 하나로 합치기
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

              
    $con = mysqli_connect("localhost", "root", "7909", "sample");   //이 컴퓨터에 설치된 MySQL 계정, 비번, 데이터베이스에 연결한다.

	$sql = "insert into members(id, pass, name, email, regist_day, level, point) ";   //MySQL 명령을 $sql에 저장한다.
	$sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 0, 0)";  //저장된 명령 실행

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     //MySQL 서버 연결 끊기

    echo "
	      <script>
	          location.href = 'member_form.php';     
	      </script>
	  ";        //메인 페이지 이동
?>