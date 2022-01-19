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
                    <h3 class="tit">선크림 바를 타이밍을 알려주는 UV 차단 알림 스티커!</h3>
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
                        피부에 직접 부착하셔도 좋고 옷, 장갑 등 어디에도 상관없습니다. 확인이 편한 곳에 스티커를 부착 후 자외선 차단제를 바를 때 스티커에도 똑같이 도포해줍니다. 스티커가 흰색에서 파란색으로 변하기 시작하면 자외선 차단제의 자외선 차단 효과가 상실된 것을 의미하므로 그럴때 자외선 차단제를 덧발라줍니다. 스티커가 다시 흰색으로 변하면 자외선 차단효과가 적용되고 있음을 의미합니다. 미국 특허청에서 피부 안정성 테스트를 통과한 제품입니다.
                    </p>
                    <ul class="list">
                        <li>물에 젖어도 사용할 수 있습니다.</li>
                        <li>모든 자외선 차단제와 함께 사용할 수 있습니다.</li>
                        <li>하나의 바디 스티커가 하루 종일 작동합니다.</li>
                        <li>모든 야외 활동에 적합합니다.</li>
                        <li>스티커는 하루 종일 사용할 수 있습니다.</li>
                    </ul>
                </div>
                <div class="box_pnav">
                    <ul>
                        <li><a href="./">목록</a></li>
                        <li><a href="./view_post_regina.php">이전기사</a></li>
                        <li><a href="./view_post_patch.php">다음기사</a></li>
                    </ul>
                </div>
            </div>
            <?php include("../story/temp/hot.php");?> 
        </div>        
    </div>
    <?php include("../inc/footer.php");?>    
</body>
</html>














