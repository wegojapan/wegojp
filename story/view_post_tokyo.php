<!doctype html>
<html>
<head>
<?php include("../inc/gtag.php");?>        
<?php include("../inc/meta.php");?>    

     
<title>WEGO JAPAN - 活動内容(Vivus Regina)</title>
    
<!-- CSS Link --> 
<link rel="stylesheet" href="../css/story.css"/>
    
<!-- JS Link -->    
    
    
<?php include("../inc/config.php");?>    
<?php include("../inc/head.php");?>    
    
<script language="javascript">
    $(function(){
        $('.btn_menu').on('click',function(e){
            $(this).toggleClass('active');
            $('.open_menu').toggleClass('active');
        });
        $('.box_hot_list').slick({
            dots: false,
            arrows: false,
            slidesToShow: 3,
            responsive: [
                {
                  breakpoint: 1025,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 769,
                  settings: {
                    centerMode: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    centerMode: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                } 
            ]
        });        
    })
</script>
</head>

    
<body>
    <?php include("../inc/header.php");?>    
    <div id="con_page">
        <div class="con_story">
            <div class="sub_top_tit type_tit">
                <div class="box_tit">
                    <h2 class="tit">
                        <strong class="en">STORY</strong>
                        <small>活動内容</small>
                    </h2>
                    <ol class="nav en view_pc-tab">
                        <li><a href="../">
                            <i><img src="../imgs/common/ic_home.svg" alt=""></i>
                            <span>Home</span>
                        </a></li>
                        <li><a href="./">STORY</a></li>
                        <li>詳細</li>
                    </ol>
                </div>
            </div>
            <div class="box_view">
                <div class="box_tit">
                    <h3 class="tit">ビーバースレジーナエスピーアイ：キュアシリーズ</h3>
                    <div class="util">
                        <p class="cate">News</p>
                        <p class="date">2021.09.10</p>
                        <dl class="viewer">
                            <dt>조회수 :</dt>
                            <dd>547</dd>
                        </dl>
                    </div>
                </div>
                <div class="box_txt">
                    <p class="img"><img src="./imgs/img_regina.jpg" alt=""></p>
                    <h4>スピキュールという言葉を聞いたことがありますか？</h4>
                    <p class="txt">
                        弊社のビーバースレジーナシリーズは天然のままの成分を利用した"スピキュール"という成分を入れて製作したスキンケア製品です。エステで使用する太い針成分のスピキュールとは異なります。エステで使用するスピキュール製品は、ターンサイクルが約1週間程度で、その間に痛みとお顔の角質脱落が行われます。次の日に重要な約束がある方は、エステでの管理は少し無理があると思います。ビーバースレジーナエスピーアイ：キュアシリーズは、きれいで細かく洗練されたナノスピキュールのみを使用したホームケアデイリー製品です。
                    </P>
                    <h4>ナノスピキュールとは</h4>
                    <p class="txt">
                        清らかな海に生息するスピキュールとナノ化有効成分を真皮の中に浸透させて、72時間の間に皮膚の再生を通じ、肌が自ら溜まっている角質などを押し上げ、脱落させる原理で作用されトラブルの原因を効果的に解決します。微細針状のスピキュールが皮膚の奥深くまで浸透し、72時間刺激します。ドイツでは1960代から美容用の製品として商用化を開始し、現在、世界的に美肌のための特殊な素材として脚光を浴びています。
                    </p>
                    <ol class="list">
                        <li>表皮層を突き抜けて入ったスピキュールが有棘層まで浸透</li>
                        <li>皮脂腺を抑制し、皮脂の分泌を調節</li>
                        <li>ニキビ菌の増殖を抑制しつつ、炎症の減少</li>
                        <li>角質除去加速、持続化</li>
                        <li>毛穴 、皮膚の清潔感が持続的に維持</li>
                    </ol>
                    <h4>スピキュールとして期待される効果</h4>
                    <ol class="list">
                        <li>皮膚層再建、再生、回復、強化：細胞栄養供給、細胞の活動を活性化</li>
                        <li>角質減少、皮脂の減少、顔色の改善：表皮角質が除去され、皮膚の柔軟、メラニンを共に除去。<small>（深さ、程度に応じて。）</small></li>
                        <li>弾力性の強化、シワの改善、たるみ改善、毛穴縮小効果：表皮有棘層の厚さが増加し弾力性を強化し、シワ改善効果に繋がります。</li>
                        <li>ニキビ改善および傷の改善効果：皮脂をコントロールして、ニキビ菌の増殖を防ぐ抗炎症効果で炎症緩和もあります。またスピキュールだけでなく、肌の改善に効果的な天然成分なども含まれています。<br>皆さんも是非、ホームケアにビーバースレジーナエスピーアイ：キュアシリーズで透明感溢れるお肌を作ってみてください！</li>
                    </ol>
                    <p class="img"><img src="./imgs/img_regina_02.jpg" alt=""></p>
                </div>
                <div class="box_pnav">
                    <ul>
                        <li><a href="./">一覧に戻る</a></li>
                        <li><a href="./view_post_mask.php">前の記事へ</a></li>
                        <li><a href="./view_post_stk.php">次の記事へ</a></li>
                    </ul>
                </div>
            </div>
            <?php include("../story/temp/hot.php");?> 
        </div>        
    </div>
    <?php include("../inc/footer.php");?>    
</body>
</html>














