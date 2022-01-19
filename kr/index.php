<!doctype html>
<html>
<head>
<?php include("./inc/meta.php");?>    


     
<title>WEGO JAPAN - 위고재팬</title>
<?php include("./inc/config.php");?>    
<?php include("./inc/head.php");?>    
<?php include("./inc/include_slick.php");?>    

    
    
<!-- CSS Link --> 
<link rel="stylesheet" href="../css/main.css"/>
    
<!-- JS Link -->    
    
<script language="javascript">
    $(function(){
        $('.box_slider').slick({
            dots: false,
            arrows: false,
            customPaging : function(slider, i) {
                var thumb = $(slider.$slides[i]).data();
                return '<a>'+('0'+(i+1)).slice(-2)+'</a>';
                        },
            autoplay: true,
            autoplaySpeed: 4000,
            fade: true
        });
        $('.box_list').slick({
            dots: true,
            slidesToShow: 4,
            slidesToScroll: 4,
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
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                } 
            ]
        });
        
        $('.box_slider_vision').slick({
            centerMode: true,
            centerPadding: '45px',
            slidersToShow: 3,
            variableWidth: true
        });
        
        $('.btn_menu').on('click',function(e){
            $(this).toggleClass('active');
            $('.open_menu').toggleClass('active');
        });
    })
</script>
</head>

    
<body>
    
    <?php include('./inc/header.php'); ?>
    <div id="con_page">
        <section class="con_main">
            <div class="box_slider">
                <div class="slider_01"></div>
            </div>
            <div class="con_slogan">
                <div class="box_slogan">
                    <span>새로운 가치를 창조하여 세계를 잇다</span>
                    <strong class="en">WE WILL GO TOGETHER</strong>
                    <em>변화의 중심, 상생을 통해 새로운 미래를 만들어 가는</em>
                    <small class="en">WEGO JAPAN INTERNATIONAL</small>
                </div>
            </div>
            <ul class="box_sns view_pc">
                <li><a href="https://www.instagram.com/wego_jp/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#123"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#123"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </section>
        
        <section class="con_story">
            <h2 class="tit">
                <strong class="en">OUR STORY</strong>
                <small>다양한 소식을 확인하세요.</small>
            </h2>
            <article class="box_story">
                <div class="box_list">
                    <div class="card"><a href="./story/view_post_regina.php">
                        <p class="img"><img src="../imgs/img_thum_regina.jpg" alt=""></p>
                        <dl>
                            <dt>비버스 레지나 SPI:CURE 시리즈</dt>
                            <dd>천연 그대로의 성분을 이용한 "스피큘" 성분을 넣어 제작한 스킨케어 제품입니다.</dd>
                        </dl>
                    </a></div>
                    <div class="card"><a href="./story/view_post_stk.php">
                        <p class="img"><img src="../imgs/img_thum_sun.jpg" alt=""></p>
                        <dl>
                            <dt>선크림 바를 타이밍을 알려주는 UV 차단 알림 스티커!</dt>
                            <dd>미국 특허 자외선 차단제 사용 타이밍을 알리는 자회선 차단 알림 스티커</dd>
                        </dl>
                    </a></div>
                    <div class="card"><a href="./story/view_post_patch.php">
                        <p class="img"><img src="../imgs/img_thum_patch.jpg" alt=""></p>
                        <dl>
                            <dt>골프전용 골프패치 출시</dt>
                            <dd>양면 패브릭 자외선 차단 특수 원단 사용, 피부 보습, 노화 방지, 피부 재생력 개선 패치 [특허 출원]</dd>
                        </dl>
                    </a></div>
                    <div class="card"><a href="./story/view_post_cooling.php">
                        <p class="img"><img src="../imgs/img_thum_cooling.jpg" alt=""></p>
                        <dl>
                            <dt>피부 온도 낮추기 위고쿨링</dt>
                            <dd>아침에 부은 얼굴과 눈의 붓기를 가라앉힐 때 사용하거나 열이 담긴 피부 진정에 도움을 주는 쿨링 스틱입니다.</dd>
                        </dl>
                    </a></div>
                    <div class="card"><a href="./story/view_post_mask.php">
                        <p class="img"><img src="../imgs/img_thum_mask.jpg" alt=""></p>
                        <dl>
                            <dt>스트랩이 들어있는 항균 구리 마스크</dt>
                            <dd>코로나 시대에 당사의 구리 마스크를 사용하여 건강 관리에 도움을 주고 지구 환경을 지킬 수 있습니다.</dd>
                        </dl>
                    </a></div>
                </div>
            </article>
        </section>
        
        <section class="con_vision">
            <div class="box_top">
                <h2 class="tit en">
                    <small>OUR VISION</small>
                    <strong class="en">WE CONNECT<br>THE WORLD</strong>
                </h2>
                <dl class="txt">
                    <dt>사람과 사람을 이어주는 기업,<br>지속 가능한 성장을 통해 <br class="view_sp">더 나은 미래를 만들어갑니다.</dt>
                    <dd>우리는 핵심가치의 실천을 통해 신뢰받는 기업을 넘어<br>세계적으로 사랑받는 글로벌 기업으로 성장하기 위해 <br class="view_sp">노력하고 있습니다.</dd>
                </dl>
            </div>
            <ul class="box_slider_vision">
                <li><img src="./imgs/img_inte_01.jpg" alt=""></li>
                <li><img src="./imgs/img_inte_02.jpg" alt=""></li>
                <li><img src="./imgs/img_inte_03.jpg" alt=""></li>
                <li><img src="./imgs/img_inte_01.jpg" alt=""></li>
                <li><img src="./imgs/img_inte_02.jpg" alt=""></li>
                <li><img src="./imgs/img_inte_03.jpg" alt=""></li>
            </ul>
            <p class="btn_more"><a href="./company/">자세히 보기</a></p>
        </section>
        
        <section class="con_biz">
            <h2 class="tit en">
                <small class="en">WHAT WE DO</small>
                <strong class="en">BUSINESS</strong>
            </h2>
            <article class="box_biz">
                <div class="biz_card"><a href="./business/#oem">
                    <p class="img"><img src="./imgs/img_cate_01.jpg" alt=""></p>
                    <dl>
                        <dt>
                            <strong class="en">MANUFACTURING</strong>
                            <small>OEM 제작 / 수입 / 납품</small>
                        </dt>
                        <dd>상품의 OEM 제작, 상담은 물론 <br class="view_pc-tab">디자인부터 제품 출시까지 전 과정을 지원합니다.</dd>
                    </dl>
                </a></div>
                <div class="biz_card"><a href="./business/#food">
                    <p class="img"><img src="./imgs/img_cate_02.jpg" alt=""></p>
                    <dl>
                        <dt>
                            <strong class="en">FRANCHISE</strong>
                            <small>외식&amp;프랜차이즈</small>
                        </dt>
                        <dd>자신의 가게를 갖고 싶다면! <br class="view_pc-tab">인테리어부터 오픈까지 전방향으로 지원합니다.</dd>
                    </dl>
                </a></div>
                <div class="biz_card"><a href="./business/#ebiz">
                    <p class="img"><img src="./imgs/img_cate_03.jpg" alt=""></p>
                    <dl>
                        <dt>
                            <strong class="en">e - BUSINESS</strong>
                            <small>인터넷비지니스</small>
                        </dt>
                        <dd> 전문적인 지식 없이도 온라인 비지니스를 <br class="view_pc-tab">운영하실 수 있도록 지원합니다.</dd>
                    </dl>
                </a></div>
                <div class="biz_card"><a href="./business/#consulting">
                    <p class="img"><img src="./imgs/img_cate_04.jpg" alt=""></p>
                    <dl>
                        <dt>
                            <strong class="en">CONSULTING</strong>
                            <small>컨설팅</small>
                        </dt>
                        <dd>우리는 고객의 성공적인 성장을 위해 <br class="view_pc-tab">다양한 분야의 전문가를 통한 상담을 지원합니다</dd>
                    </dl>
                </a></div>
            </article>
            <p class="btn_more"><a href="./business">자세히 보기</a></p>
        </section>
        
        <section class="con_md_slogan view_pc">
            <div class="box_md_slogan">
                <div class="box_slogan">
                    <span>새로운 가치를 창조하여 세계를 잇다</span>
                    <strong class="en">WE WILL GO TOGETHER</strong>
                    <em>변화의 중심, 상생을 통해 새로운 미래를 만들어 가는</em>
                    <small class="en">WEGO JAPAN INTERNATIONAL</small>
                </div>
            </div>
        </section>
        
        <section class="con_contact">
            <div class="box_contact">
                <p class="txt">고객사와의 신뢰를 바탕으로 <br class="view_sp">성공적인 관계를 구축해 나갑니다.<br>위고 재팬과 함께 새로운 시작을</p>
                <p class="btn_more"><a href="./contact/">문의하기</a></p>
            </div>
        </section>
        
    </div>
    <?php include('./inc/footer.php'); ?>

    
</body>
</html>














