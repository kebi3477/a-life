<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/common.css">
    <link rel="stylesheet" href="/public/css/mealkitDetail.css">
    <link rel="shortcut icon" href="/public/images/favicon/favicon.ico">
    <title>ALife</title>
</head>
<body>
    <?php 
        include('header.php');
        include('interceptor/mealkitInterceptor.php');
        $mealkit = isExist($urls[2]);
        $total = $mealkit['mealkit_price']+$mealkit['mealkit_sprice']+$mealkit['mealkit_sfee']+$mealkit['mealkit_psfree'];
    ?>
    
    <div class="show padding">
        <div class="show--left">
            <div class="show__image" style="background-image: url(../mealkits/<?=$mealkit['mealkit_id']?>/title_img.jpg)"></div>
            <div class="show__remocon">
                <img src="/public/images/icon/arrow_left.svg" alt="">
                <img src="/public/images/icon/arrow_right.svg" alt="">
            </div>
        </div>
        <div class="show--right">
            <div class="show__title"><?=$mealkit['mealkit_name']?></div>
            <div class="show__wrap">
                <div class="show__label">가격</div>
                <div class="show__text"><?=$mealkit['mealkit_price']?>원</div>
            </div>
            <div class="show__wrap">
                <div class="show__label">업체명</div>
                <div class="show__text"><?=$mealkit['mealkit_cname']?></div>
            </div>
            <div class="show__wrap">
                <div class="show__label">인분</div>
                <div class="show__text"><?=$mealkit['mealkit_serving']?> 인분</div>
            </div>
            <div class="show__wrap">
                <div class="show__label">중량</div>
                <div class="show__text"><?=$mealkit['mealkit_weight']?>g</div>
            </div>
            <div class="show__wrap">
                <div class="show__label">배송비</div>
                <div class="show__text"><?=$mealkit['mealkit_sfee']?>원</div>
            </div>
            <div class="show__wrap">
                <div class="show__label">추가배송비</div>
                <div class="show__text"><?=$mealkit['mealkit_psfree']?>원</div>
            </div>
            <div class="show__wrap">
                <div class="show__label">구매수량</div>
                <div class="show__text"><input type="number"></div>
            </div>
            <div class="show__wrap show__wrap--right">
                <div class="show__label show__label--light">총 상품금액 :</div>
                <div class="show__label show__label--won"><?=$total?>원</div>
            </div>
            <div class="show__buttons">
                <div class="show__button show__button--reversal">장바구니</div>
                <div class="show__button">바로구매</div>
                <div class="show__button"><img src="/public/images/icon/heart_w.svg"></div>
            </div>
        </div>
    </div>
    <div class="info padding">
        <input type="radio" id="show1" name="show" checked>
        <input type="radio" id="show2" name="show">
        <input type="radio" id="show3" name="show">
        <input type="radio" id="show4" name="show">
        <div class="info__tabs">
            <div class="info__tab"><label for="show1" class="tab1">상품 상세정보</label></div>
            <div class="info__tab"><label for="show2" class="tab2">상품 후기</label></div>
            <div class="info__tab"><label for="show3" class="tab3">상품 문의</label></div>
            <div class="info__tab"><label for="show4" class="tab4">배송 / 교환 / 반품안내</label></div>
        </div>
        <div class="info__content tab1__content">
            <img src="../mealkits/<?=$mealkit['mealkit_id']?>/detail_img.jpg" alt="">
        </div>
        <div class="info__content tab2__content"></div>
        <div class="info__content tab3__content"></div>
        <div class="info__content tab4__content">
            
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
