<!doctype html>
<html>
<head>
<?php include("../inc/gtag.php");?>        
<?php include("../inc/meta.php");?>    

     
<title>WEGO JAPAN - 活動内容(cooling)</title>
    
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
                    <h3 class="tit">肌の温度を下げるウィゴークーリング</h3>
                    <div class="util">
                        <p class="cate">News</p>
                        <p class="date">2021.05.02</p>
                        <dl class="viewer">
                            <dt>조회수 :</dt>
                            <dd>347</dd>
                        </dl>
                    </div>
                </div>
                <div class="box_txt">
                    <p class="img"><img src="./imgs/img_cooling.jpg" alt=""></p>
                    <p class="txt">
                        人間の理想的な肌の温度は、正常体温より少し低めの32度くらいが適温と言われています。肌の温度が高くなると毛穴が開き、乾燥し、損傷を受けやすいです。肌の温度を可能な限り下げるため、冷蔵庫にマスクパックを保管して頂いたり、化粧品専用の冷蔵庫を使用される方も増えてきています！
                    </p>
                    <h4>顔のほてり、むくみ、弾力感！</h4>
                    <p class="txt">
                        肌の温度を低下させ適温を維持してくれるので、特に夏場に健康な肌管理とクール感を与えてくれます。朝、浮腫んだ顔と目の腫れを抑えるときに使用したり、熱がこもった肌の鎮静にぴったりのクーリングスティックです。単独でも使用することもできますし、お持ちのマスクパックや、クリームと一緒に使用すると、クイックスキンケアまで可能です。取っ手もにぎりやすくなっており、グリップ感もしあり、掴みやすいです。サイズもコンパクトで邪魔にならず、高クオリティの厚いアルミ冷却板付きになっているためクール感が持続され、優れた耐久性と使いやすさがあるウィゴークーリングスティックです。
                    </p>
                    <p class="txt">
                        また、フェイスだけでなく、 凝り固まった肩の筋肉や足など浮腫んだボディにも使用可能です。脱毛後や皮膚科のレーザー治療後など刺激を受けた部位の冷却マッサージをすることができます。最近はマスクを1日中するため、メイクをしなくても簡単に肌が刺激されて敏感になるので、スキンケア時、クーリングマッサージすることで肌鎮静に役立ちます。
                    </p>
                    <p class="img"><img src="./imgs/img_cooling_02.jpg" alt=""></p>
                    <h4>使い方</h4>
                    <ol class="list">
                        <li>普段は冷凍庫に保管してください。</li>
                        <li>使用時は冷却板の温度をチェックし、低い温度で使用しないでください。（皮膚につく恐れがあります）</li>
                        <li>冷凍庫で3時間以上凍らせると冷却板の温度が氷点下10˚C程度になります。肌連続使用時間は30〜60分程度（氷点下3〜15˚C）です。</li>
                        <li>連続で20分以上使用しないでください。気になる部位にくるくると移したり、押しつけたりしてください。</li>
                        <li>使用時、マスクパック、クリームなどの基礎化粧品と一緒に使用すると、より一層良い効果が得られます。</li>
                        <li>使用後、水で洗浄したり、アルコールコットンで拭いて冷凍庫に保管してください。（※アルコールコットンでは冷却版のみ拭いてください。）</li>
                    </ol>
                </div>
                <div class="box_pnav">
                    <ul>
                        <li><a href="./">一覧に戻る</a></li>
                        <li><a href="./view_post_patch.php">前の記事へ</a></li>
                        <li><a href="./view_post_mask.php">次の記事へ</a></li>
                    </ul>
                </div>
            </div>
            <?php include("../story/temp/hot.php");?>
        </div>        
    </div>
    <?php include("../inc/footer.php");?>    

    
</body>
</html>














