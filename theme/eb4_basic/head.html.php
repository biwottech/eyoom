<?php

/**
 * theme file : /theme/THEME_NAME/head.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/style.css?ver=' . G5_CSS_VER . '">', 0);
add_stylesheet('<link rel="stylesheet" href="' . EYOOM_THEME_URL . '/css/custom.css?ver=' . G5_CSS_VER . '">', 0);

/**
 * 로고 타입 : 'image' || 'text'
 */
$logo = 'image';

/**
 * 메뉴바 전체 메뉴 출력 : 'yes' || 'no'
 */
$is_megamenu = 'yes';
?>
<style>
    /* Global container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    /* Top info bar */
    .top-info-bar {
        background: #f8f8f8;
        padding: 8px 0;
        border-bottom: 1px solid #eee;
        font-size: 13px;
    }

    .top-info-bar .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Member links in top bar */
    .member-links {
        display: flex;
        gap: 15px;
    }

    .member-btn-box {
        text-decoration: none;
    }

    .member-btn {
        color: #666;
        font-size: 13px;
        padding: 0 5px;
    }

    .member-btn:hover {
        color: #6b3cc9;
    }

    /* Main navigation */
    .main-nav-wrap {
        border-bottom: 1px solid #eee;
    }

    .nav-row {
        display: flex;
        align-items: center;
        padding: 20px 0;
    }

    /* Logo */
    .logo {
        margin-right: 40px;
    }

    .logo img {
        height: 35px;
    }

    /* Primary Menu */
    .primary-menu {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 30px;
    }

    .primary-menu a {
        color: #333;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .menu-purple {
        color: #6b3cc9 !important;
    }

    /* Mega Menu */
    .menu-item-all {
        position: relative;
    }

    .mega-menu {
        display: none;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 100%;
        background: #fff;
        border-top: 1px solid #eee;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        width: 100vw;
    }

    .mega-menu .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 30px 15px;
    }

    /* Category Menu in Mega Menu */
    .category-menu {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 25px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .category-menu>li {
        padding-right: 20px;
    }

    .category-menu a {
        color: #666;
        text-decoration: none;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 8px 0;
        white-space: nowrap;
    }

    .category-menu i {
        font-size: 10px;
        color: #999;
    }

    /* Submenu Styles */
    .has-submenu {
        position: relative;
    }

    .submenu {
        display: none;
        position: absolute;
        top: -10px;
        left: 100%;
        background: #fff;
        border: 1px solid #eee;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        min-width: 200px;
        padding: 10px 0;
        z-index: 1001;
        list-style: none;
    }

    .has-submenu:hover .submenu {
        display: block;
    }

    .menu-item-all:hover .mega-menu {
        display: block;
    }

    .submenu a {
        padding: 8px 20px;
        white-space: nowrap;
    }

    .submenu a:hover {
        background: #f8f8f8;
    }

    /* Hover effects */
    .primary-menu a:hover {
        color: #6b3cc9;
    }

    .category-menu a:hover {
        color: #6b3cc9;
    }

    .category-menu a:hover i {
        color: #6b3cc9;
    }

    /* Responsive Styles */
    @media (max-width: 1200px) {
        .category-menu {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 992px) {
        .primary-menu {
            gap: 20px;
        }

        .category-menu {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .nav-row {
            flex-direction: column;
            text-align: center;
        }

        .logo {
            margin: 0 0 20px 0;
        }

        .primary-menu {
            flex-wrap: wrap;
            justify-content: center;
        }

        .mega-menu {
            position: static;
            transform: none;
            width: 100%;
            box-shadow: none;
        }

        .category-menu {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .submenu {
            position: static;
            box-shadow: none;
            border: none;
            padding-left: 20px;
        }

        .top-info-bar .container {
            flex-direction: column;
            gap: 10px;
        }

        .member-links {
            justify-content: center;
            flex-wrap: wrap;
        }

        .member-btn-box {
            text-align: center;
        }
    }
</style>
<?php if (!$wmode) { ?>
    <?php /*----- wrapper 시작 -----*/ ?>
    <div class="wrapper">
        <h1 id="hd-h1"><?php echo $g5['title'] ?></h1>
        <div class="to-content"><a href="#container">본문 바로가기</a></div>
        <?php
        // 팝업창
        if (defined('_INDEX_') && $newwin_contents) { // index에서만 실행
            echo $newwin_contents;
        }
        ?>

        <?php /*----- header 시작 -----*/ ?>
        <header class="header-wrap">
            <?php /* Top bar with contact info */ ?>
            <?php /* Top bar with contact info */ ?>
            <div class="top-info-bar">
                <div class="container">
                    <span>중고장터 11151,882 P2U</span>
                    <div class="top-right-links">
                        <div class="member-links">
                            <?php if ($is_member) { ?>
                                <a href="<?php echo G5_BBS_URL ?>/logout.php" class="member-btn-box">
                                    <div class="member-btn">로그아웃</div>
                                </a>
                                <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" class="member-btn-box">
                                    <div class="member-btn">마이페이지</div>
                                </a>
                            <?php } else { ?>
                                <a href="<?php echo G5_BBS_URL ?>/login.php" class="member-btn-box">
                                    <div class="member-btn">로그인</div>
                                </a>
                                <a href="<?php echo G5_BBS_URL ?>/register.php" class="member-btn-box">
                                    <div class="member-btn">회원가입</div>
                                </a>
                            <?php } ?>
                            <a href="#" class="member-btn-box">
                                <div class="member-btn">마이페이지</div>
                            </a>
                            <a href="#" class="member-btn-box">
                                <div class="member-btn">티켓존</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* Main navigation */ ?>
            <div class="main-nav-wrap">
                <div class="container">
                    <div class="nav-row">
                        <?php /* Logo */ ?>
                        <a href="<?php echo G5_URL; ?>" class="logo">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.svg" alt="P2U">
                        </a>

                        <?php /* Main Menu */ ?>
                        <nav class="main-nav">
                            <ul class="primary-menu">
                                <li class="menu-item-all">
                                    <a href="#" class="menu-purple">전체상품 <i class="fas fa-chevron-down"></i></a>
                                    <?php /* Secondary Menu - Hidden by default */ ?>
                                    <div class="mega-menu">
                                        <div class="container">
                                            <ul class="category-menu">
                                                <li class="has-submenu">
                                                    <a href="#">웨딩/파티 <i class="fas fa-chevron-right"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="#">스드메이</a></li>
                                                        <li><a href="#">웨딩홀</a></li>
                                                        <li><a href="#">본식영상</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#">신선푸드 <i class="fas fa-chevron-right"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="#">메이크업</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#">가정용품 <i class="fas fa-chevron-right"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="#">웨어러너</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">제선/파티</a></li>
                                                <li><a href="#">디저트/간식</a></li>
                                                <li><a href="#">생활용품</a></li>
                                                <li><a href="#">가구/인테리어</a></li>
                                                <li><a href="#">지역특산품</a></li>
                                                <li><a href="#">위생/건강</a></li>
                                                <li><a href="#">주방용품</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">P2U소개</a></li>
                                <li><a href="#">히트상품</a></li>
                                <li><a href="#" class="menu-purple">브랜드관</a></li>
                                <li><a href="#">추석선물</a></li>
                                <li><a href="#">이벤트</a></li>
                                <li><a href="#">공모전</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <?php /*----- header 끝 -----*/ ?>

        <?php if (!defined('_INDEX_')) { // 메인이 아닐때 
        ?>
            <?php /*----- page title 시작 -----*/ ?>
            <div class="page-title-wrap">
                <div class="container">
                    <?php if (!defined('_EYOOM_MYPAGE_')) { ?>
                        <h2>
                            <?php if (!$it_id) { ?>
                                <i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?>
                            <?php } else { ?>
                                <span class="f-s-14r"><i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?></span>
                            <?php } ?>
                        </h2>
                        <?php if (!$it_id) { ?>
                            <div class="sub-breadcrumb-wrap">
                                <ul class="sub-breadcrumb hidden-xs">
                                    <?php echo $subinfo['path']; ?>
                                </ul>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <h2><i class="fas fa-arrow-alt-circle-right"></i> 마이페이지</h2>
                    <?php } ?>
                </div>
            </div>
            <?php /*----- page title 끝 -----*/ ?>
        <?php } ?>

        <div class="basic-body <?php if (!defined('_INDEX_')) { ?>page-body<?php } ?>">
            <?php if (defined('_INDEX_')) { ?>
                <div class="main-slider-top">
                    <?php /* EB슬라이더 - basic */ ?>
                    <?php echo eb_slider('1516512257'); ?>
                </div>
            <?php } ?>
            <div class="container">
                <?php if ($side_layout['use'] == 'yes') { ?>
                    <div class="main-wrap">
                        <?php
                        if ($side_layout['pos'] == 'left') {
                            /* 사이드영역 시작 */
                            include_once(EYOOM_THEME_PATH . '/side.html.php');
                            /* 사이드영역 끝 */
                        }
                        ?>
                        <main class="basic-body-main <?php if ($side_layout['pos'] == 'left') {
                                                            echo 'right';
                                                        } else {
                                                            echo 'left';
                                                        } ?>-main">
                        <?php } else { ?>
                            <div class="main-wrap">
                                <main class="basic-body-main">
                                <?php } ?>
                            <?php } // !$wmode 
                            ?>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Add hover delay for smoother dropdown experience
                                    const menuItems = document.querySelectorAll('.has-submenu');

                                    menuItems.forEach(item => {
                                        let timeout;

                                        item.addEventListener('mouseenter', () => {
                                            clearTimeout(timeout);
                                            menuItems.forEach(other => {
                                                const otherSubmenu = other.querySelector('.submenu');
                                                if (other !== item && otherSubmenu) {
                                                    otherSubmenu.style.display = 'none';
                                                }
                                            });
                                            const submenu = item.querySelector('.submenu');
                                            if (submenu) {
                                                submenu.style.display = 'block';
                                            }
                                        });

                                        item.addEventListener('mouseleave', () => {
                                            timeout = setTimeout(() => {
                                                const submenu = item.querySelector('.submenu');
                                                if (submenu) {
                                                    submenu.style.display = 'none';
                                                }
                                            }, 200);
                                        });
                                    });
                                });
                            </script>