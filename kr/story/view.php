<!doctype html>
<html>
<head>
<?php include("../inc/meta.php");?>    

     
<title>WEGO JAPAN - 活動内容</title>
    
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
                    <h3 class="tit">ゴルフパッチ ホールインワン発売</h3>
                    <div class="util">
                        <p class="cate">News</p>
                        <p class="date">2021.07.29</p>
                        <dl class="viewer">
                            <dt>조회수 :</dt>
                            <dd>547</dd>
                        </dl>
                    </div>
                </div>
                <div class="box_txt">
                    <p class="txt">
                        毎日我々はこの2つを追求しています。<br>
                        最も働きやすい会社になるために努力することと、<br>
                        最高のサービス提供で顧客企業を感動させようということです。<br>
                        <br>
                        ウィゴージャパンの使命は、世界最高のビジネスコネクティング会社になることではなく、この仕事をするのに最も良い場所にすることです。 ウィゴージャパンが最も働きやすい会社であれば、最高の人々と一緒に働き、ウィゴージャパンが最高の人々と一緒に仕事をするならば、結局最高の顧客企業と一緒に仕事をすることになるでしょう。 ウィゴージャパンが最高の人々と最高の顧客企業と一緒に働くとしたら、誰がウィゴージャパンを最高の会社ではないと言えるでしょうか。
                    </p>
                    <p class="img"><img src="./imgs/img_story_02.jpg" alt=""></p>
                    <p class="txt">
                        毎日我々はこの2つを追求しています。<br>
                        最も働きやすい会社になるために努力することと、<br>
                        最高のサービス提供で顧客企業を感動させようということです。<br>
                        <br>
                        ウィゴージャパンの使命は、世界最高のビジネスコネクティング会社になることではなく、この仕事をするのに最も良い場所にすることです。 ウィゴージャパンが最も働きやすい会社であれば、最高の人々と一緒に働き、ウィゴージャパンが最高の人々と一緒に仕事をするならば、結局最高の顧客企業と一緒に仕事をすることになるでしょう。 ウィゴージャパンが最高の人々と最高の顧客企業と一緒に働くとしたら、誰がウィゴージャパンを最高の会社ではないと言えるでしょうか。
                    </p>
                </div>
                <div class="box_pnav">
                    <ul>
                        <li><a href="./">一覧に戻る</a></li>
                        <li><a href="">前の記事へ</a></li>
                        <li><a href="">次の記事へ</a></li>
                    </ul>
                
                </div>
            </div>
            <div class="box_hot">
                <h3 class="tit">
                    <strong class="en">HOT NEWS</strong>
                    <small>人気記事</small>
                </h3>
                <ul class="box_hot_list">
                    <li><a href="view.php">
                        <p class="img"><img src="./imgs/img_story_01.jpg" alt=""></p>
                        <div class="box_txt">
                            <dl class="txt">
                                <dt>ゴルフパッチ ホールインワン発売</dt>
                                <dd>両面ファブリック UVカット特殊生地を使用、肌保湿、老化防止、肌の再生力を改善したパッチ[特許出願]</dd>
                            </dl>
                            <div class="util en">
                                <p class="date">2021.07.29</p>
                                <p class="cate">Notice</p>
                                
                            </div>
                        </div>
                    </a></li>
                    <li><a href="view.php">
                        <p class="img"><img src="./imgs/img_story_02.jpg" alt=""></p>
                        <div class="box_txt">
                            <dl class="txt">
                                <dt>ゴルフパッチ ホールインワン発売</dt>
                                <dd>両面ファブリック UVカット特殊生地を使用、肌保湿、老化防止、肌の再生力を改善したパッチ[特許出願]</dd>
                            </dl>
                            <div class="util en">
                                <p class="date">2021.07.29</p>
                                <p class="cate">News</p>
                                
                            </div>
                        </div>
                    </a></li>
                    <li><a href="view.php">
                        <p class="img"><img src="./imgs/img_story_03.jpg" alt=""></p>
                        <div class="box_txt">
                            <dl class="txt">
                                <dt>ゴルフパッチ ホールインワン発売</dt>
                                <dd>両面ファブリック UVカット特殊生地を使用、肌保湿、老化防止、肌の再生力を改善したパッチ[特許出願]</dd>
                            </dl>
                            <div class="util en">
                                <p class="date">2021.07.29</p>
                                <p class="cate">Notice</p>
                                
                            </div>
                        </div>
                    </a></li>
                </ul>
                
            </div>
        </div>        
    </div>
    <?php include("../inc/footer.php");?>    

    
</body>
</html>














