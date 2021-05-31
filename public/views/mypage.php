<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALife</title>
    <link rel="stylesheet" href="public/css/common.css">
    <link rel="stylesheet" href="public/css/mypage.css">
    <link rel="shortcut icon" href="public/images/favicon/favicon.ico">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="mypage padding">
        <div class="mypage__wrap">
            <div class="profile">
                <label class="profile__img" for="rank">
                    <object data="public/images/icon/profile_g.svg" type="image/svg+xml"></object>
                </label>
                <div class="profile__label profile__row">
                    <div class="profile__label--bold"><?=$_SESSION['alife_user_name']?></div>
                    <div class="profile__label--middle">(<?=$_SESSION['alife_user_email']?>)</div>
                </div>
            </div>
            <div class="content">
                <input type="radio" name="tab" id="rank" checked>
                <input type="radio" name="tab" id="write">
                <input type="radio" name="tab" id="thumsup">
                <input type="radio" name="tab" id="history">
                <input type="radio" name="tab" id="modify">
                <div class="content__tabs">
                    <label for="write" class="content__tab">작성한 게시글</label>
                    <label for="thumsup" class="content__tab">좋아요</label>
                    <label for="history" class="content__tab">주문내역 조회</label>
                    <label for="modify" class="content__tab">회원정보 수정</label>
                </div>
                <div class="rank content__box">
                    <div class="content__title">ALife 멤버십 혜택</div>
                    <div class="rank__wrap">
                        <div class="rank__col">
                            <div class="rank__label">현재 나의 등급</div>
                            <div class="rank__bar">
                                <div class="rank__bar-outer">
                                    <div class="rank__bar-inner"></div>
                                </div>
                                <div class="rank__label">옐로우그린</div>
                            </div>
                        </div>
                        <div class="rank__icons">
                            <div class="rank__icon">
                                <div class="rank__img"><object data="public/images/icon/profile_g.svg" type="image/svg+xml"></object></div>
                                <div class="rank__name">그린</div>
                                <div class="rank__label rank__label--middle">신규가입</div>
                                <div class="rank__label rank__label--light">1,000원 할인쿠폰</div>
                                <div class="rank__label rank__label--light"></div>
                            </div>
                            <div class="rank__icon">
                                <div class="rank__img"><object data="public/images/icon/profile_yg.svg" type="image/svg+xml"></object></div>
                                <div class="rank__name">옐로우그린</div>
                                <div class="rank__label rank__label--middle">기본회원</div>
                                <div class="rank__label rank__label--light">구매 시 3% 할인</div>
                                <div class="rank__label rank__label--light">월 1회 무료배송</div>
                                <div class="rank__label rank__label--light"></div>
                            </div>
                            <div class="rank__icon">
                                <div class="rank__img"><object data="public/images/icon/profile_y.svg" type="image/svg+xml"></object></div>
                                <div class="rank__name">옐로우</div>
                                <div class="rank__label rank__label--middle"></div>
                                <div class="rank__label rank__label--light">구매시 5% 할인</div>
                                <div class="rank__label rank__label--light">월 3회 무료배송</div>
                                <div class="rank__label rank__label--light"></div>
                            </div>
                            <div class="rank__icon">
                                <div class="rank__img"><object data="public/images/icon/profile_o.svg" type="image/svg+xml"></object></div>
                                <div class="rank__name">오렌지</div>
                                <div class="rank__label rank__label--middle"></div>
                                <div class="rank__label rank__label--light">구매 시 7% 할인</div>
                                <div class="rank__label rank__label--light">월 5회 무료배송</div>
                                <div class="rank__label rank__label--light">신상 밀키트 배송</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="write content__box"></div>
                <div class="thumsup content__box"></div>
                <div class="history content__box"></div>
                <form class="modify content__box">
                    <div class="content__title">회원정보수정</div>
                    <div class="modify__wraps">
                        <div class="modify__wrap">
                            <div class="modify__label">이메일</div>
                            <input type="text" class="modify__input" disabled="true" value="<?=$_SESSION['alife_user_email']?>">
                        </div>
                        <div class="modify__wrap">
                            <div class="modify__label">휴대전화</div>
                            <input type="text" class="modify__input" value="<?=$_SESSION['alife_user_phone']?>" name="phone">
                        </div>
                        <div class="modify__wrap">
                            <div class="modify__label">이름</div>
                            <input type="text" class="modify__input" value="<?=$_SESSION['alife_user_name']?>" name="name">
                        </div>
                        <div class="modify__wrap">
                            <div class="modify__label">주소</div>
                            <input type="text" class="modify__input" value="<?=$_SESSION['alife_user_address']?>" name="address">
                        </div>
                    </div>
                    <div class="modify__buttons">
                        <div class="modify__button submit">수정완료</div>
                        <div class="modify__button cancel">취소</div>
                    </div>
                </form>
            </div>
        </div>        
    </div>
    <script type="module" src="public/js/loading.js"></script>
    <script type="module" src="public/js/common.js"></script>
    <script type="module" src="public/js/mypage.js"></script>
</body>
</html>