<!doctype html>
<html>
<head>
<?php include("../inc/gtag.php");?>    
<?php include("../inc/meta.php");?>    

     
<title>WEGO JAPAN - お問い合わせ</title>
    
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
            <div class="box_thanks">
                <i class="far fa-smile"></i>
                <h1>Thank you!</h1>
                <p class="txt">
                    お問い合わせありがとうございます。<br>
                    入力した内容が送信されました。<br>
                    内容を確認した後、担当者がご連絡いたします。
                </p>
                <p class="btn_ok">
                    <a href="../">TOPに戻る</a>
                </p>
                
            </div>
                
            
        </div>
        
    </div>
    <?php include("../inc/footer.php");?>  

    
</body>
</html>














