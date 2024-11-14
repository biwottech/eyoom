<?php

/**
 * theme file : /theme/THEME_NAME/tail.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<style>
	.footer {
		background-color: #1c1c1c;
		color: #ffffff;
		padding: 40px 0;
	}

	.footer .container {
		max-width: 1200px;
		margin: 0 auto;
	}

	.cs-info {
		margin-bottom: 30px;
	}

	.cs-title {
		font-size: 18px;
		font-weight: bold;
		margin-bottom: 10px;
	}

	.cs-time {
		color: #ffffff;
		margin-bottom: 5px;
	}

	.cs-notice {
		color: #999;
		font-size: 14px;
	}

	.company-info {
		margin-bottom: 30px;
	}

	.info-row {
		color: #999;
		font-size: 14px;
		margin-bottom: 5px;
	}

	.info-divider {
		margin: 0 10px;
		color: #666;
	}

	.footer-copyright {
		color: #999;
		font-size: 14px;
		margin-bottom: 20px;
	}

	.footer-links {
		border-top: 1px solid #333;
		padding-top: 20px;
	}

	.footer-links a {
		color: #999;
		text-decoration: none;
		margin-right: 20px;
		font-size: 14px;
	}

	.footer-links a:hover {
		color: #ffffff;
	}
</style>

<?php if (!$wmode) { ?>
	<?php if ($side_layout['use'] == 'yes') { ?>
		</main>
		<?php
		if ($side_layout['pos'] == 'right') {
			/* 사이드영역 시작 */
			include_once(EYOOM_THEME_PATH . '/side.html.php');
			/* 사이드영역 끝 */
		}
		?>
		</div><?php /* End .main-wrap */ ?>
	<?php } else { ?>
		</main>
		</div><?php /* End .main-wrap */ ?>
	<?php } ?>

	</div><?php /* End .container */ ?>
	</div><?php /* End .basic-body */ ?>

	<?php /*----- footer 시작 -----*/ ?>
	<footer class="footer">
		<div class="container">
			<?php /* Remove footer-top section as it's not in the design */ ?>

			<div class="footer-cont-info">
				<?php /* CS Center Information */ ?>
				<div class="cs-info">
					<div class="cs-title">CS CENTER <?php echo $bizinfo['bi_cs_tel1']; ?></div>
					<div class="cs-time">평일 10:00 ~ 17:00 (점심 12:00 ~ 13:00)</div>
					<div class="cs-notice">토요일/공휴일 · 일요일, 공휴일은 휴무입니다. 고객님의 문의 전에는 1:1 문의를 이용해주세요.</div>
				</div>

				<?php /* Company Information */ ?>
				<div class="company-info">
					<div class="info-row">
						<span>주식회사 포인트유</span>
						<span class="info-divider">|</span>
						<span>대표 : <?php echo $bizinfo['bi_company_ceo']; ?></span>
					</div>
					<div class="info-row">
						<span>사업자 등록번호 : <?php echo $bizinfo['bi_company_bizno']; ?></span>
						<span class="info-divider">|</span>
						<span>통신판매업 : <?php echo $bizinfo['bi_company_sellno']; ?></span>
					</div>
					<div class="info-row">
						<span>주소 : <?php echo $bizinfo['bi_company_addr1']; ?></span>
					</div>
				</div>

				<?php /* Copyright */ ?>
				<div class="footer-copyright">
					Copyright © P2U. All Rights Reserved
				</div>
			</div>

			<?php /* Footer Navigation */ ?>
			<div class="footer-links">
				<a href="#">이용약관</a>
				<a href="#">개인정보처리방침</a>
				<a href="#">이메일무단수집거부</a>
			</div>
		</div>
	</footer>
	<?php /*----- footer 끝 -----*/ ?>
	</div>
	<?php /*----- wrapper 끝 -----*/ ?>

	<?php /*----- 전체 검색 입력창 시작 -----*/ ?>
	<div class="search-full">
		<div class="search-close-btn"></div>
		<fieldset class="search-field">
			<legend>게시판 전체검색</legend>
			<form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
				<input type="hidden" name="sfl" value="wr_subject||wr_content">
				<input type="hidden" name="sop" value="and">
				<label for="search_input" class="sound_only">검색어 입력 필수</label>
				<input type="text" name="stx" id="search_input" maxlength="20" placeholder="검색어 입력 [ 전체 게시판 검색 ]">
				<button type="submit" class="search-btn" value="검색"><i class="fas fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
			</form>
			<script>
				function fsearchbox_submit(f) {
					var stx = f.stx.value.trim();
					if (stx.length < 2) {
						alert("검색어는 두글자 이상 입력하십시오.");
						f.stx.select();
						f.stx.focus();
						return false;
					}

					// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
					var cnt = 0;
					for (var i = 0; i < stx.length; i++) {
						if (stx.charAt(i) == ' ')
							cnt++;
					}

					if (cnt > 1) {
						alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
						f.stx.select();
						f.stx.focus();
						return false;
					}
					f.stx.value = stx;

					return true;
				}
			</script>
		</fieldset>
	</div>
	<?php /*----- 전체 검색 입력창 끝 -----*/ ?>

	<?php /* 상담 신청 버튼 */ ?>
	<?php if ($config['cf_use_counsel'] == '1') { ?>
		<a <?php if (!G5_IS_MOBILE) { ?>href="javascript:void(0);" onclick="counsel_modal();" <?php } else { ?>href="<?php echo G5_URL; ?>/page/?pid=counsel" <?php } ?> class="counsel-btn"><i class="fas fa-headset"></i><span class="sound-only">상담신청</span></a>
	<?php } ?>

	<?php /* 사이드바 회원 버튼 */ ?>
	<button type="button" class="sidebar-user-trigger sidebar-user-btn mo-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUserRight" aria-controls="offcanvasUserRight"><i class="fas fa-user-alt"></i><span class="sound-only">회원 사이드바</span></button>

	<?php /* Side Nav Mobile Toggler */ ?>
	<button type="button" class="navbar-mobile-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"><i class="fas fa-bars"></i><span class="sound-only">메뉴 사이드바</span></button>

	<?php /* Back To Top */ ?>
	<div class="eb-backtotop">
		<svg class="backtotop-progress" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			<span class="progress-count"></span>
		</svg>
	</div>
<?php } // !$wmode 
?>

<?php
include_once(EYOOM_THEME_PATH . '/misc.html.php');
?>

<?php
if ($is_member && $eyoomer['onoff_push'] == 'on') {
	include_once(EYOOM_THEME_PATH . '/skin/push/basic/push.skin.html.php');
}
?>

<script src="<?php echo EYOOM_THEME_URL; ?>/js/app.js?ver=<?php echo G5_JS_VER; ?>"></script>
<?php if ($is_admin == 'super') { ?>
	<script>
		$(document).ready(function() {
			var edit_mode = "<?php echo $eyoom_default['edit_mode']; ?>";
			if (edit_mode == 'on') {
				$(".btn-edit-mode").show();
			} else {
				$(".btn-edit-mode").hide();
			}

			$("#btn_edit_mode").click(function() {
				var edit_mode = $("#edit_mode").val();
				if (edit_mode == 'on') {
					$(".btn-edit-mode").hide();
					$("#edit_mode").val('');
				} else {
					$(".btn-edit-mode").show();
					$("#edit_mode").val('on');
				}

				$.post("<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=theme_editmode&smode=1", {
					edit_mode: edit_mode
				});
			});
		});
	</script>
<?php } ?>

<?php
if ($config['cf_analytics']) echo $config['cf_analytics'];
?>