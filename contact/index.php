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
            <div class="sub_top_tit type_tit">
                <div class="box_tit">
                    <h2 class="tit">
                        <strong class="en">CONTACT</strong>
                        <small>お問い合わせ</small>
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
                <h3 class="st">入力項目はすべて必須項目になります</h3>
                <form action="https://formsubmit.co/info@wegojp.com" method="POST">
                    <input type="hidden" name="_next" value="https://wegojp.com/contact/thanks.php">
                    <fieldset class="form_cate">
                        <legend>項目をお選びください</legend>
                        <p>
                            <input type="radio" name="cate" id="cate1" value="oem" checked/>
                            <label for="cate1">OEM 制作/輸入/納品</label>
                        </p>
                        <p>
                            <input type="radio" name="cate" id="cate2" value="food" />
                            <label for="cate2">外食&amp;フランチャイズ</label>
                        </p>
                        <p>
                            <input type="radio" name="cate" id="cate3" value="internet" />
                            <label for="cate3">インターネットビジネス</label>
                        </p>
                        <p>
                            <input type="radio" name="cate" id="cate4" value="consult" />
                            <label for="cate4">コンサルティング</label>
                        </p>
                        <p>
                            <input type="radio" name="cate" id="cate5" value="etc" />
                            <label for="cate5">その他</label>
                        </p>
                    </fieldset>
                    <fieldset class="form_info">
                        <p>
                            <label for="company">貴社名</label>
                            <input type="text" name="company" id="company" required>
                        </p>
                        <p>
                            <label for="part">業種</label>
                            <input type="text" name="part" id="part" required>
                        </p>
                        <p>
                            <label for="name">ご担当者</label>
                            <input type="text" name="name" id="name" required>
                        </p>
                        <p>
                            <label for="tel">電話番号</label>
                            <input type="tel" name="tel" id="tel" required>
                        </p>
                        <p>
                            <label for="mail">メールアドレス</label>
                            <input type="email" name="mail" id="mail" required>
                        </p>
                        <p>
                            <label for="msg">お問い合わせ内容</label>
                            <textarea name="msg" id="msg" cols="30" rows="5" required></textarea>
                        </p>
                    </fieldset>
                    <div class="box_law">
                        <dl class="tit">
                            <dt>個人情報の取り扱いについて</dt>
                            <dd>弊社では、個人情報を厳重に管理するために、<br class="view_sp">以下の内容を実施します。</dd>
                        </dl>
                        <div class="box_txt">
                            <p class="txt">
                                個人情報は、弊社の個人情報保護マニュアルや内部規程に従って適正に管理します。<br>
                                個人情報は、相談者の同意なく第三者に提供されず、以下の目的でのみ使用されます。
                            </p>
                            <ul>
                                <li>
                                    <strong>収集する個人情報項目</strong>
                                    <dl>
                                        <dt>収集項目</dt>
                                        <dd>使命、担当者、電話番号、Eメールなど</dd>
                                    </dl>
                                    <dl>
                                        <dt>収集方法</dt>
                                        <dd>ホームページ 入力フォーム</dd>
                                    </dl>
                                </li>
                                <li>
                                    <strong>個人情報の収集及び利用目的</strong>
                                    <p>相談のお問い合わせ、マーケティングなど自社広報資料に活用</p>
                                </li>
                            </ul>
                        </div>
                        <p class="box_agree">
                            <input type="checkbox" id="check" required>
                            <label for="check">個人情報の取り扱いについて同意する</label>
                        </p>
                    </div>
                    <p class="btn_send">
                        <input type="submit" value="送信する">
                    </p>
                </form>            
            </div>
        </div>
        
    </div>
    <?php include("../inc/footer.php");?>  

    
</body>
</html>














