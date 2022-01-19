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
                    <h3 class="tit">스트랩이 들어있는 항균 구리마스크</h3>
                    <div class="util">
                        <p class="cate">News</p>
                        <p class="date">2020.04.17</p>
                        <dl class="viewer">
                            <dt>조회수 :</dt>
                            <dd>429</dd>
                        </dl>
                    </div>
                </div>
                <div class="box_txt">
                    <p class="txt">
                        우리는 코로나 바이러스의 영향으로 마스크 생활을 하고 있습니다. 바이러스, 꽃가루 알레르기 등에서 마스크의 필요성을 느끼고 있지만 마스크를 착용하면서 업무와 사생활에서의 답답함도 동시에 느끼고 있습니다. 이러한 문제를 해결하고자 환경 및 경제적 부분도 고려하여 당사는 이번에 항균 구리 마스크를 개발했습니다.
                    </p>
                    <p class="img"><img src="./imgs/img_mask.jpg" alt=""></p>
                    <h4>친환경 마스크</h4>
                    <p class="txt">
                        코로나 바이러스가 소멸하는 시간은 부직포 기준 24시간이 소요됩니다. 그러나 구리의 경우 단 4시간이면 대부분의 바이러스가 소멸하는 강한 항균성을 자랑합니다.
                        당사의 항균 구리 마스크는 구리 자체의 뛰어난 항균 성능을 기반으로, 잦은 세탁(30회)에도 비슷한 성능을 발휘합니다. 한국의 섬유업체인 한일 합섬의 구리 섬유, ELEX는 항균 소재를 사용하고 있습니다.
                    </p>
                    <p class="img"><img src="./imgs/img_mask_02.jpg" alt=""></p>
                    <p class="txt">
                        한국 의류 시험 연구원에서 성능 인증을 받은 제품으로 착용감, 촉감이 우수하고 장시간 마스크를 착용해도 귀에 통증 및 가려움증이 없어 안심할 수 있습니다. 코로나 시대에 우리의 구리 마스크로 건강도 관리하고 환경도 보호할 수 있습니다.
                    </p>
                    <p class="txt">
                        가볍게 커피를 마시거나 밥을 먹을 때 보관이 용이하지 않거나 잃어버리지 않을까 걱정할 필요 없이 당사의 스트랩 항균 구리 마스크로 항균과 피부보호는 물론 휴대성까지 챙겨보세요.
                    </p>
                </div>
                <div class="box_pnav">
                    <ul>
                        <li><a href="./">목록</a></li>
                        <li><a href="./view_post_cooling.php">이전기사</a></li>
                        <li><a href="./view_post_regina.php">다음기사</a></li>
                    </ul>
                </div>
            </div>
            <?php include("../story/temp/hot.php");?> 
        </div>        
    </div>
    <?php include("../inc/footer.php");?>    

    
</body>
</html>














