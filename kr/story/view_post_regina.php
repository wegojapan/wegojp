<!doctype html>
<html>
<head>
<?php include("../inc/meta.php");?>    

     
<title>WEGO JAPAN - 활동내용</title>
    
<!-- CSS Link --> 
<link rel="stylesheet" href="../../css/story.css"/>
    
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
                        <small>활동내용</small>
                    </h2>
                    <ol class="nav en view_pc-tab">
                        <li><a href="../">
                            <i><img src="../imgs/common/ic_home.svg" alt=""></i>
                            <span>Home</span>
                        </a></li>
                        <li><a href="./">STORY</a></li>
                        <li>상세</li>
                    </ol>
                </div>
            </div>
            <div class="box_view">
                <div class="box_tit">
                    <h3 class="tit">비버스 레지나 SPI:CURE 시리즈</h3>
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
                    <h4>스피큘 성분. 들어본 적이 있나요?</h4>
                    <p class="txt">
                        비버스 레지나 시리즈는 천연 그대로의 재료를 이용한 "스피큘" 성분을 넣어 제작한 스킨케어 제품입니다. 에스테틱에서 사용하는 굵은 바늘 성분의 스피큘과는 다릅니다. 에스테틱에서 사용하는 스피큘 제품은 회전주기가 약 1주일 정도로 그 사이에 통증과 얼굴의 각질 벗겨짐이 이루어집니다. 다음날 중요한 약속이 있는 분은 에스테틱에서 관리는 조금 무리가 있다고 생각합니다. 비버스 레지나 SPI:CURE 시리즈는 예쁘고 곱게 정제된 나노 스피큘 소재만을 사용한 홈 케어 데일리 제품입니다.
                    </p>
                    <h4>나노 스피큘이란?</h4>
                    <p class="txt">
                        맑은 바다에 서식하는 스피큘과 나노 유효 성분을 피부 속에 침투시켜 72시간 동안 피부의 재생을 통해 피부가 스스로 쌓여있는 각질을 제거하는 원리로 작용하여 문제 원인을 효과적으로 해결합니다. 미세 바늘의 스피큘이 피부 깊숙이 침투하여 72 시간 자극합니다. 독일에서는 1960 대에서 미용 제품으로 상용화를 시작, 현재 세계적으로 아름다운 피부를 위한 특수 소재로 각광 받고 있습니다.
                    </p>
                    <ol class="list">
                        <li>표피층을 뚫고 들어간 스피큘이 각질층까지 침투</li>
                        <li>피지선을 억제하고 피지의 분비를 조절</li>
                        <li>여드름 균의 증식을 억제하면서 염증의 감소</li>
                        <li>각질 제거 가속, 지속화</li>
                        <li>모공, 피부 청결감이 지속적으로 유지</li>
                    </ol>
                    <h4>스피큘로 기대되는 효과</h4>
                    <ol class="list">
                        <li>피부층 재건, 재생, 회복, 영양 공급, 세포 활동 활성화</li>
                        <li>각질 감소, 피지 감소, 안색 개선<small>(깊이 정도에 따라서.)</small></li>
                        <li>탄력 강화, 주름 개선, 리프팅, 모공 크기 축소 효과 : 표피 유극층의 두께가 증가하고 탄력을 강화하 주름 개선 효과</li>
                        <li>여드름 개선 및 상처 개선 효과 : 피지를 조절하여 여드름균 증식을 막아주는 항염증 효과로 염증 완화. 또한 스피큘 뿐만 아니라 피부 개선에 효과적인 천연 성분 등이 포함되어 있습니다. 여러분도 꼭 홈케어에 비버스 레지나 SPI:CURE 시리즈로 투명감 넘치는 피부를 만들어 보세요!</li>
                    </ol>
                    <p class="img"><img src="./imgs/img_regina_02.jpg" alt=""></p>
                </div>
                <div class="box_pnav">
                    <ul>
                        <li><a href="./">목록</a></li>
                        <li><a href="./view_post_mask.php">이전기사</a></li>
                        <li><a href="./view_post_stk.php">다음기사</a></li>
                    </ul>
                </div>
            </div>
            <?php include("../story/temp/hot.php");?> 
        </div>        
    </div>
    <?php include("../inc/footer.php");?>    
</body>
</html>














