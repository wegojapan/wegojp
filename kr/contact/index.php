<!doctype html>
<html>
<head>
<?php include("../inc/gtag.php");?>    
<?php include("../inc/meta.php");?>    

     
<title>WEGO JAPAN - 문의하기</title>
    
<!-- CSS Link --> 
<link rel="stylesheet" href="../css/contact.css"/>
    
<!-- JS Link -->    
    
    
<?php include("../inc/config.php");?>    
<?php include("../inc/head.php");?>    
    
<script language="javascript">
    $(function(){
        $('.btn_menu').on('click',function(e){
            $(this).toggleClass('active');
            $('.open_menu').toggleClass('active');
        });
    })
</script>
</head>

    
<body>
    <?php include("../inc/header.php");?>
    <div id="con_page">
        <div class="con_cont">
            <div class="sub_top_tit type_tit">
                <div class="box_tit">
                    <h2 class="tit">
                        <strong class="en">CONTACT</strong>
                        <small>문의하기</small>
                    </h2>
                    <ol class="nav en view_pc-tab">
                        <li><a href="../">
                            <i><img src="../imgs/common/ic_home.svg" alt=""></i>
                            <span>Home</span>
                        </a></li>
                        <li>CONTACT</li>
                    </ol>
                </div>
            </div>
            <div class="box_cont">
                <h3 class="st">입력항목은 모두 필수 항목입니다.</h3>
                <form action="https://formsubmit.co/info@wegojp.com" method="POST">
                    <input type="hidden" name="_next" value="https://wegojp.com/kr/contact/thanks.php">
                    <fieldset class="form_cate">
                        <legend>문의하실 항목을 선택해주세요</legend>
                        <p>
                            <input type="radio" name="cate" id="cate1" value="oem" checked/>
                            <label for="cate1">OEM 제작/수입/납품</label>
                        </p>
                        <p>
                            <input type="radio" name="cate" id="cate2" value="food" />
                            <label for="cate2">외식&amp;프랜차이즈</label>
                        </p>
                        <p>
                            <input type="radio" name="cate" id="cate3" value="internet" />
                            <label for="cate3">인터넷 비지니스</label>
                        </p>
                        <p>
                            <input type="radio" name="cate" id="cate4" value="consult" />
                            <label for="cate4">컨설팅</label>
                        </p>
                        <p>
                            <input type="radio" name="cate" id="cate5" value="etc" />
                            <label for="cate5">기타</label>
                        </p>
                    </fieldset>
                    <fieldset class="form_info">
                        <p>
                            <label for="company">회사명</label>
                            <input type="text" name="company" id="company" required>
                        </p>
                        <p>
                            <label for="part">업종</label>
                            <input type="text" name="part" id="part" required>
                        </p>
                        <p>
                            <label for="name">담당자</label>
                            <input type="text" name="name" id="name" required>
                        </p>
                        <p>
                            <label for="tel">연락처</label>
                            <input type="tel" name="tel" id="tel" required>
                        </p>
                        <p>
                            <label for="mail">이메일</label>
                            <input type="email" name="mail" id="mail" required>
                        </p>
                        <p>
                            <label for="msg">상담내용</label>
                            <textarea name="msg" id="msg" cols="30" rows="5" required></textarea>
                        </p>
                    </fieldset>
                    <div class="box_law">
                        <dl class="tit">
                            <dt>개인정보취급방침</dt>
                            <dd>당사는 개인정보를 엄중하게 관리하기 위해서 <br class="view_sp">아래의 내용을 실시합니다.</dd>
                        </dl>
                        <div class="box_txt">
                            <p class="txt">
                                개인정보는 개인정보보호 매뉴얼 및 내부규정에 따라 철저하게 관리합니다.<br>
                                개인정보는 상담자의 동의없이 제 3자에게 제공되지 않으며 이하의 목적으로만 사용됩니다.
                            </p>
                            <ul>
                                <li>
                                    <strong>수집하는 개인정보 항목</strong>
                                    <dl>
                                        <dt>수집 항목</dt>
                                        <dd>사명, 담당자, 전화번호, 이메일 등</dd>
                                    </dl>
                                    <dl>
                                        <dt>수집 방법</dt>
                                        <dd>홈페이지 입력 양식</dd>
                                    </dl>
                                </li>
                                <li>
                                    <strong>개인정보 수집 및 이용목적</strong>
                                    <p>상담문의 대응, 마케팅 등 자사 홍보자료에 활용</p>
                                </li>
                            </ul>
                        </div>
                        <p class="box_agree">
                            <input type="checkbox" id="check" required>
                            <label for="check">개인정보취급방침에 동의합니다.</label>
                        </p>
                    </div>
                    <p class="btn_send">
                        <input type="submit" value="전송하기">
                    </p>
                </form>            
            </div>
        </div>
        
    </div>
    <?php include("../inc/footer.php");?>  

    
</body>
</html>














