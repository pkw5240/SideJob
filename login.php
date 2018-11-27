<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>사이드잡 프로젝트</title>

    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/skin/member/basic/style.css">
    <!-- 실제 운영되는 코드들 보니까   위에  css?  ver=  이런식으로한다.     https://t-school.kr/plugin/oauth/style.css?ver=161020"   -->
  </head>
  <body>
    <div id="wrapper">

        <?php   include 'basic/header.html';     ?>


        <div id="container_ts" class="sub_container">
        <!-- 로그인 시작 { -->
            <div class="inner">
              	<h2 class="p_tit welcome_tit">로그인</h2>
              	<div id="mb_login" class="mbskin">
            		<form name="flogin" action="https://t-school.kr/bbs/login_check.php" onsubmit="return flogin_submit(this);" method="post">

                		<input type="hidden" name="url" value="https%3A%2F%2Ft-school.kr">
      		          <fieldset id="login_fs">
              			<legend>회원로그인</legend>
              			<input type="text" name="mb_id" id="login_id" required class="frm_input login_id required" size="20" maxLength="20" placeholder="아이디">
              			<input type="password" name="mb_password" id="login_pw" required class="frm_input login_pw required" size="20" maxLength="20" placeholder="비밀번호">
              			<input type="submit" value="로그인" class="btn_submit">
      		          </fieldset>
      		          <section id="login_btm">
    		            <div class="login_btm_inner">
    				          <ul>
                					<li><a href="./register.php">회원가입</a></li>
                					<li><a href="./password_lost.php">아이디 비밀번호 찾기</a></li>
    		              </ul>
                    <p class="mem_time">업무시간 : 평일 10:00 ~ 19:00</p>
        			     </div> <!-- login_btm_inner -->
      		         </section>

    		       </form>
    	         </div> <!-- mb-login -->
            </div> <!-- inner -->

              <script>

              function flogin_submit(f)
              {
                  return true;
              }
              </script>
        </div>   <!-- container-ts -->

        <?php include 'basic/footer.html'; ?>

    </div> <!--wrapper-->

  </body>
</html>
