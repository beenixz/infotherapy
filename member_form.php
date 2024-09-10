<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>INFOTHERAPY</title>
<link rel="stylesheet" type="text/css" href="testcss.css">
<link rel="stylesheet" type="text/css" href="membercss.css">
<script>
   function check_input()                                        /*함수 정의. 저장하기 버튼을 클릭하면 동작한다 */
   {
      if (!document.member_form.id.value) {    /*document.member_form.id.value는 회원 가입 페이지의 아이디 입력 창에 사용자가 입력한 데이터 값*/   
          alert("아이디를 입력하세요!");
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.email1.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email1.focus();
          return;
      }

      if (!document.member_form.email2.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email2.focus();
          return;
      }

      if (document.member_form.pass.value !=  /*비밀번호와 비밀번호 확인 입력 창에 입력된 데이터가 같은지 비교 */
            document.member_form.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();           /*사용자가 입력한 데이터 전달 member_insert에 전달한다*/
   }                                                                 /*회원 가입 페이지의 입력 창에 사용자가 입력한 데이터가 있는지 확인한다 document는 현재 웹 페이지의 파일 자체 member_form은 form태그의 name값 id는 아이디 입력 창의 name값*/

   function reset_form() {                      /*취소하기 버튼을 누르면 입력된 데이터가 초기화 되는 함수 */
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
      document.member_form.id.focus();
      return;
   }

   function check_id() {                    /* 아이디 중복확인 버튼을 클릭하면 입력된 아이디가 중복되는지 검사 하는 함수 */
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<section>       
        <div id="main_content">
      		<div id="join_box">
          	<form  name="member_form" method="post" action="member_insert.php">   <!-- 폼 태그 랑 액션 속성 설정-->
			    <h2>회원 가입</h2>
    		    	<div class="form id">
				        <div class="col1">아이디</div>
				        <div class="col2">
							<input type="text" name="id">       <!-- 입력한 아이디는 name 속성으로 설정된 id의해 POST 방식으로 member_insert에 전달된다 -->
				        </div>  
				        <div class="col3">
				        	<a href="#"><img src="check_id.gif" 
				        		onclick="check_id()"></a>  
				        </div>                 
                    </div>
			       	<div class="clear"></div>

			       	<div class="form">
				        <div class="col1">비밀번호</div>
				        <div class="col2">
							<input type="password" name="pass">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">비밀번호 확인</div>
				        <div class="col2">
							<input type="password" name="pass_confirm">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">이름</div>
				        <div class="col2">
							<input type="text" name="name">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form email">
				        <div class="col1">이메일</div>
				        <div class="col2">
							<input type="text" name="email1">@<input type="text" name="email2">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
	                	<img style="cursor:pointer" src="button_save.gif" onclick="check_input()">&nbsp;   <!-- 클릿기 check_input함수가 실행되고 이상이 없을시 마지막 ~~submit에 의해 member_insert로 전달되고 페이지 이동한다 -->
                  		<img id="reset_button" style="cursor:pointer" src="button_reset.gif"
                  			onclick="reset_form()">
	           		</div>
           	</form>
        	</div> <!-- join_box -->
        </div> <!-- main_content -->
	</section> 
    <footer>
        <p>  
        © 2024 천안월봉고등학교 인포테라피
        </p>
    </footer>
</body>
</html> 

