<!doctype html>
<html>
<head>
<?php include("../inc/gtag.php");?>    
<?php include("../inc/meta.php");?>    

     
<title>WEGO JAPAN - 활동내용</title>
    
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
                        <small>활동내용</small>
                    </h2>
                    <ol class="nav en view_pc-tab">
                        <li><a href="../">
                            <i><img src="../imgs/common/ic_home.svg" alt=""></i>
                            <span>Home</span>
                        </a></li>
                        <li>STORY</li>
                    </ol>
                </div>
            </div>
            <div class="box_story">
                <div class="box_nav">
                    <dl class="sum en">
                        <dt>TOTAL</dt>
                        <dd><strong>5</strong></dd>
                    </dl>
                    <ul class="nav">
                        <li class="active"><a href="#123">ALL</a></li>
                        <li><a href="#123">Notice</a></li>
                        <li><a href="#123">News</a></li>
                        <li><a href="#123">Culture</a></li>
                    </ul>
                </div>
                <ul class="box_list">
                    <li><a href="view_post_regina.php">
                        <p class="img"><img src="./imgs/img_regina.jpg" alt=""></p>
                        <div class="box_txt">
                            <dl class="txt">
                                <dt>비버스 레지나 SPI:CURE 시리즈</dt>
                                <dd>천연 그대로의 성분을 이용한 "스피큘" 성분을 넣어 제작한 스킨케어 제품입니다.</dd>
                            </dl>
                            <div class="util en">
                                <p class="date">2021.09.10</p>
                                <p class="cate">news</p>
                                
                            </div>
                        </div>
                    </a></li>
                    <li><a href="view_post_stk.php">
                        <p class="img"><img src="./imgs/img_stk.jpg" alt=""></p>
                        <div class="box_txt">
                            <dl class="txt">
                                <dt>선크림 바를 타이밍을 알려주는 UV 차단 알림 스티커!</dt>
                                <dd>미국 특허 자외선 차단제 사용 타이밍을 알리는 자회선 차단 알림 스티커</dd>
                            </dl>
                            <div class="util en">
                                <p class="date">2021.07.16</p>
                                <p class="cate">News</p>
                                
                            </div>
                        </div>
                    </a></li>
                    <li><a href="view_post_patch.php">
                        <p class="img"><img src="./imgs/img_patch.jpg" alt=""></p>
                        <div class="box_txt">
                            <dl class="txt">
                                <dt>비버스 골프, 골프전용 골프패치 출시</dt>
                                <dd>양면 패브릭 자외선 차단 특수 원단 사용, 피부보습, 노화방지, 피부 재생력을 개선하는 패치[특허 출원]</dd>
                            </dl>
                            <div class="util en">
                                <p class="date">2021.07.10</p>
                                <p class="cate">news</p>
                                
                            </div>
                        </div>
                    </a></li>
                    <li><a href="view_post_cooling.php">
                        <p class="img"><img src="./imgs/img_cooling.jpg" alt=""></p>
                        <div class="box_txt">
                            <dl class="txt">
                                <dt>피부 온도 낮추기 "위고쿨링" 테라피 스틱</dt>
                                <dd>아침에 부은 얼굴과 눈의 붓기를 가라앉힐 때 사용하거나 열이 나는 피부 진정에 도움을 주는 쿨링 스틱입니다.</dd>
                            </dl>
                            <div class="util en">
                                <p class="date">2021.05.02</p>
                                <p class="cate">news</p>
                            </div>
                        </div>
                    </a></li>
                    <li><a href="view_post_mask.php">
                        <p class="img"><img src="./imgs/img_mask.jpg" alt=""></p>
                        <div class="box_txt">
                            <dl class="txt">
                                <dt>스트랩이 들어있는 항균 구리마스크</dt>
                                <dd>코로나 시대에 당사의 구리 마스크를 사용하여 건강을 지키고 환경도 보호할 수 있습니다.</dd>
                            </dl>
                            <div class="util en">
                                <p class="date">2020.04.17</p>
                                <p class="cate">news</p>
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














