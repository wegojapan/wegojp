<!doctype html>
<html>
<head>
<?php include("../inc/gtag.php");?>    
<?php include("../inc/meta.php");?>    

     
<title>WEGO JAPAN - 문의하기</title>
    
<!-- CSS Link --> 
<link rel="stylesheet" href="../../css/contact.css"/>
    
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
            <div class="box_thanks">
                <i class="far fa-smile"></i>
                <h1>Thank you!</h1>
                <p class="txt">
                    문의주셔서 감사합니다.<br>
                    입력하신 내용이 안전하게 전송되었습니다.<br>
                    내용을 확인한 후 담당자가 연락 드리도록 하겠습니다.
                </p>
                <p class="btn_ok">
                    <a href="../">메인화면으로</a>
                </p>
                
            </div>
                
            
        </div>
        
    </div>
    <?php include("../inc/footer.php");?>  

    
</body>
</html>














