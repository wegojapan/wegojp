<!doctype html>
<html>
<head>
<?php include("../inc/gtag.php");?>        
<?php include("../inc/meta.php");?>    

     
<title>WEGO JAPAN - 活動内容(UV STK)</title>
    
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
                    <h3 class="tit">日焼け止めを塗るタイミングを知らせるUV遮断通知ステッカー！</h3>
                    <div class="util">
                        <p class="cate">News</p>
                        <p class="date">2021.07.16</p>
                        <dl class="viewer">
                            <dt>조회수 :</dt>
                            <dd>447</dd>
                        </dl>
                    </div>
                </div>
                <div class="box_txt">
                    <p class="img"><img src="./imgs/img_stk.jpg" alt=""></p>
                    <p class="txt">
                        日焼け止めを肌とボディステッカーに直接塗ります。 ボディステッカーが青く変わり始めたら日焼け止めが紫外線遮断の機能性を失ったことを意味し、青く変わり、私たちに教えてくれます。 日焼け止めを再度塗るとステッカーが再び白色に変化し、保護機能が復活されたことを示します。アメリカの特許で肌の安定性テストが完了した製品です。
                    </p>
                    <ul class="list">
                        <li>濡れた状態または乾いた状態、一日中肌にとどまります。</li>
                        <li>すべての日焼け止めと一緒に使用できます。</li>
                        <li>一つのボディステッカーが一日中動作します。</li>
                        <li>すべての野外活動に適しています。</li>
                        <li>ステッカーは1日中使用できます。</li>
                    </ul>
                </div>
                <div class="box_pnav">
                    <ul>
                        <li><a href="./">一覧に戻る</a></li>
                        <li><a href="./view_post_regina.php">前の記事へ</a></li>
                        <li><a href="./view_post_patch.php">次の記事へ</a></li>
                    </ul>
                </div>
            </div>
            <?php include("../story/temp/hot.php");?> 
        </div>        
    </div>
    <?php include("../inc/footer.php");?>    
</body>
</html>














