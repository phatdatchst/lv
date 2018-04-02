<?php 
    $imageURL = TEMPLATE_URL . 'default/main/' .$this->_dirImg;
    $linkHome = URL::createLink('default', 'index', 'index');
    $linkSong = URL::createLink('default', 'song', 'index');
    $linkLogin = URL::createLink('default', 'user', 'login');
    $linkRegister = URL::createLink('default', 'user', 'register');
?>

<div class="box-header" id="header">
	<div class="wrap">
		<div class="content-wrap">
			<a class="logo" title="Nghe Nhạc MP3 Online 320kps mới nhất"
				alt="Nghe Nhac MP3 Online 320kps moi nhat" href="#"></a>
			<div class="menu-subdomain">
				<a href="<?php echo $linkSong;?>" class="active">Nhạc</a>
				<a href="#" target="_blank">VIDEO</a>
			</div>
			<div id="box_search_quick" class="box_search">
				<div class="bg-top-noel"></div>
				<form id="formSearchQuick" method="GET"
					action="#"
					onsubmit="return NCTQuickSearch.buttonSearchProcess();">
					<input id="txtSearch" maxlength="45" name="q" type="text"
						class="i-search" value=""
						rel="Tìm bài hát, video, playlist, ca sĩ" autocomplete="off"> <input
						id="btnSearch" type="submit" class="b-search" value="TÌM KIẾM">
					<div class="list-keyword" id="divHotKeyword"></div>
				</form>
				<div id="divSuggestion" class="hideShowCase suggestion" m="0">
					<div style="float: left; width: 446px; max-height: 450px;">
						<div class="slimScrollDiv"
							style="position: relative; overflow: hidden; width: auto; height: 0px;">
							<div id="idScrllSuggestion"
								style="overflow: hidden; width: auto; height: 0px;">
								<ul id="contentSuggestion" class="content_search"
									style="text-transform: capitalize;"></ul>
							</div>
							<div class="slimScrollBar"
								style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
							<div class="slimScrollRail"
								style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="box_user_login" class="box_user_login">
				<div class="avatar" style="float: right;">
					<a id="btnShowBoxLogin" href="<?php echo $linkLogin;?>" title="Đăng nhập"
						rel="nofollow">Đăng nhập</a> | <a href="<?php echo $linkRegister;?>"
						title="Đăng ký" onclick="NCTLogin.showPopupRegisterNew()"
						rel="nofollow">Đăng ký</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end-header -->
	<div id="submenu" class="sub-menu-header">
		<div class="wrap">
			<div class="content-wrap">
				<!--A Begin sub-menu-top-->
				<div class="menu-top" id ="menu-top">
					<ul class="notifi" id="menuTop">
						<li class="icon_logo_menu" id="icon_menu_logo"><a
							href="<?php echo $linkHome;?>" title="Trang chủ"
							class="active">Trang chủ</a></li>
						<li><a rel="follow"
							href="<?php echo $linkSong;?>"
							title="Bài Hát">Bài Hát</a> <script type="text/javascript">
								document
										.write("<ul class=\"submenu-topbar music hideShowCase\" style=\"width: 550px; padding-left: 30px;\"><li><ul style=\"width: 130px; float: left;\"><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/nhac-tre-moi.html\" title=\"VIỆT NAM\"><b>VIỆT NAM</b></a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/nhac-tre-moi.html\" title=\"Nhạc Trẻ\">Nhạc Trẻ</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/tru-tinh-moi.html\" title=\"Trữ Tình\">Trữ Tình</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/remix-viet-moi.html\" title=\"Remix Việt\">Remix Việt</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/rap-viet-moi.html\" title=\"Rap Việt\">Rap Việt</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/tien-chien-moi.html\" title=\"Tiền Chiến\">Tiền Chiến</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/nhac-trinh-moi.html\" title=\"Nhạc Trịnh\">Nhạc Trịnh</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/thieu-nhi-moi.html\" title=\"Thiếu Nhi\">Thiếu Nhi</a></li></ul><ul style=\"width: 170px; float: left;\"><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/pop-moi.html\" title=\"ÂU MỸ\"><b>ÂU MỸ</b></a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/pop-moi.html\" title=\"Pop\"  >Pop</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/rock-moi.html\" title=\"Rock\"  >Rock</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/electronicadance-moi.html\" title=\"Electronica/Dance\"  >Electronica/Dance</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/rbhip-hoprap-moi.html\" title=\"R&B/HipHop/Rap\"  >R&B/HipHop/Rap</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/bluesjazz-moi.html\" title=\"Blues/Jazz\"  >Blues/Jazz</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/country-moi.html\" title=\"Country\">Country</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/latin-moi.html\" title=\"Latin\">Latin</a></li></ul><ul style=\"width: 130px; float: left;\"><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/nhac-han-moi.html\" title=\"CHÂU Á\"><b>CHÂU Á</b></a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/nhac-han-moi.html\" title=\"Nhạc Hàn\"  >Nhạc Hàn</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/nhac-hoa-moi.html\" title=\"Nhạc Hoa\"  >Nhạc Hoa</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/nhac-nhat-moi.html\" title=\"Nhạc Nhật\"  >Nhạc Nhật</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/nhac-thai-moi.html\" title=\"Nhạc Thái\">Nhạc Thái</a></li></ul><ul style=\"width: 100px; float: left;\"><li><a rel=\"follow\"  href=\"https://www.nhaccuatui.com/bai-hat/khong-loi-moi.html\" title=\"KHÁC\"><b>KHÁC</b></a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/khong-loi-moi.html\" title=\"Không Lời\"  >Không Lời</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/beat-moi.html\" title=\"Beat\"  >Beat</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/the-loai-khac-moi.html\" title=\"Thể Loại Khác\"  >Thể Loại Khác</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/tui-hat-moi.html\" title=\"Tui Hát\"  >Tui Hát</a></li></ul></li></ul>");
							</script>
							<ul class="submenu-topbar music hideShowCase"
								style="width: 550px; padding-left: 30px;">
								<li><ul style="width: 130px; float: left;">
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/nhac-tre-moi.html"
											title="VIỆT NAM"><b>VIỆT NAM</b></a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/nhac-tre-moi.html"
											title="Nhạc Trẻ">Nhạc Trẻ</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/tru-tinh-moi.html"
											title="Trữ Tình">Trữ Tình</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/remix-viet-moi.html"
											title="Remix Việt">Remix Việt</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/rap-viet-moi.html"
											title="Rap Việt">Rap Việt</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/tien-chien-moi.html"
											title="Tiền Chiến">Tiền Chiến</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/nhac-trinh-moi.html"
											title="Nhạc Trịnh">Nhạc Trịnh</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/thieu-nhi-moi.html"
											title="Thiếu Nhi">Thiếu Nhi</a></li>
									</ul>
									<ul style="width: 170px; float: left;">
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/pop-moi.html"
											title="ÂU MỸ"><b>ÂU MỸ</b></a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/pop-moi.html"
											title="Pop">Pop</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/rock-moi.html"
											title="Rock">Rock</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/electronicadance-moi.html"
											title="Electronica/Dance">Electronica/Dance</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/rbhip-hoprap-moi.html"
											title="R&amp;B/HipHop/Rap">R&amp;B/HipHop/Rap</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/bluesjazz-moi.html"
											title="Blues/Jazz">Blues/Jazz</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/country-moi.html"
											title="Country">Country</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/latin-moi.html"
											title="Latin">Latin</a></li>
									</ul>
									<ul style="width: 130px; float: left;">
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/nhac-han-moi.html"
											title="CHÂU Á"><b>CHÂU Á</b></a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/nhac-han-moi.html"
											title="Nhạc Hàn">Nhạc Hàn</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/nhac-hoa-moi.html"
											title="Nhạc Hoa">Nhạc Hoa</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/nhac-nhat-moi.html"
											title="Nhạc Nhật">Nhạc Nhật</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/nhac-thai-moi.html"
											title="Nhạc Thái">Nhạc Thái</a></li>
									</ul>
									<ul style="width: 100px; float: left;">
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/khong-loi-moi.html"
											title="KHÁC"><b>KHÁC</b></a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/khong-loi-moi.html"
											title="Không Lời">Không Lời</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/beat-moi.html"
											title="Beat">Beat</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/the-loai-khac-moi.html"
											title="Thể Loại Khác">Thể Loại Khác</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/bai-hat/tui-hat-moi.html"
											title="Tui Hát">Tui Hát</a></li>
									</ul></li>
							</ul></li>
						<style>
.canyouhereme {
	color: #ff8b94 !important;
	font-weight: bold;
	font-style: italic;
}

.canyouhereme.icon-label-event {
	padding: 0px 0px;
	right: 5px;
	top: 3px;
	text-transform: uppercase;
	position: absolute;
	background: url(https://stc-id.nixcdn.com/v11//images/event_button.gif);
	height: 9px;
	width: 25px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	color: #FFFFFF;
	text-align: center;
	font-size: 8px !important;
}
</style>
						<!--<li>
    <span class="canyouhereme icon-label-event"></span>
    <a target="_blank" rel="follow" href="https://www.nhaccuatui.com/san-ve-seoul-music-award?utm_source=NCT-Web&utm_medium=Tabmenu&utm_campaign=PNJ-XMAS " class="canyouhereme" title="Săn Vé Seoul Music Award">#SănVéSeoul.M.A</a>
    <script type="text/javascript">
        var isCanYouHearMe = true;
    </script>
</li>-->
						<li><a rel="follow"
							href="https://www.nhaccuatui.com/playlist/playlist-moi.html"
							title="Playlist">Playlist</a> <script type="text/javascript">
								document
										.write("<ul class=\"submenu-topbar music hideShowCase\" style=\"width: 550px; padding-left: 30px;\"><li><ul style=\"width: 130px; float: left;\"><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/nhac-tre-moi.html\" title=\"VIỆT NAM\"><b>VIỆT NAM</b></a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/nhac-tre-moi.html\" title=\"Nhạc Trẻ\">Nhạc Trẻ</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/tru-tinh-moi.html\" title=\"Trữ Tình\">Trữ Tình</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/remix-viet-moi.html\" title=\"Remix Việt\">Remix Việt</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/rap-viet-moi.html\" title=\"Rap Việt\">Rap Việt</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/tien-chien-moi.html\" title=\"Tiền Chiến\">Tiền Chiến</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/nhac-trinh-moi.html\" title=\"Nhạc Trịnh\">Nhạc Trịnh</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/thieu-nhi-moi.html\" title=\"Thiếu Nhi\">Thiếu Nhi</a></li></ul><ul style=\"width: 170px; float: left;\"><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/pop-moi.html\" title=\"ÂU MỸ\"><b>ÂU MỸ</b></a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/pop-moi.html\" title=\"Pop\"  >Pop</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/rock-moi.html\" title=\"Rock\"  >Rock</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/electronicadance-moi.html\" title=\"Electronica/Dance\"  >Electronica/Dance</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/rbhip-hoprap-moi.html\" title=\"R&B/HipHop/Rap\"  >R&B/HipHop/Rap</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/bluesjazz-moi.html\" title=\"Blues/Jazz\"  >Blues/Jazz</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/country-moi.html\" title=\"Country\">Country</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/latin-moi.html\" title=\"Latin\">Latin</a></li></ul><ul style=\"width: 130px; float: left;\"><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/nhac-han-moi.html\" title=\"CHÂU Á\"><b>CHÂU Á</b></a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/nhac-han-moi.html\" title=\"Nhạc Hàn\"  >Nhạc Hàn</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/nhac-hoa-moi.html\" title=\"Nhạc Hoa\"  >Nhạc Hoa</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/nhac-nhat-moi.html\" title=\"Nhạc Nhật\"  >Nhạc Nhật</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/nhac-thai-moi.html\" title=\"Nhạc Thái\">Nhạc Thái</a></li></ul><ul style=\"width: 100px; float: left;\"><li><a rel=\"follow\"  href=\"https://www.nhaccuatui.com/playlist/khong-loi-moi.html\" title=\"KHÁC\"><b>KHÁC</b></a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/khong-loi-moi.html\" title=\"Không Lời\"  >Không Lời</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/nhac-phim-moi.html\" title=\"Nhạc Phim\"  >Nhạc Phim</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/playlist/the-loai-khac-moi.html\" title=\"Thể Loại Khác\"  >Thể Loại Khác</a></li></ul></li></ul>");
							</script>
							<ul class="submenu-topbar music hideShowCase"
								style="width: 550px; padding-left: 30px;">
								<li><ul style="width: 130px; float: left;">
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/nhac-tre-moi.html"
											title="VIỆT NAM"><b>VIỆT NAM</b></a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/nhac-tre-moi.html"
											title="Nhạc Trẻ">Nhạc Trẻ</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/tru-tinh-moi.html"
											title="Trữ Tình">Trữ Tình</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/remix-viet-moi.html"
											title="Remix Việt">Remix Việt</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/rap-viet-moi.html"
											title="Rap Việt">Rap Việt</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/tien-chien-moi.html"
											title="Tiền Chiến">Tiền Chiến</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/nhac-trinh-moi.html"
											title="Nhạc Trịnh">Nhạc Trịnh</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/thieu-nhi-moi.html"
											title="Thiếu Nhi">Thiếu Nhi</a></li>
									</ul>
									<ul style="width: 170px; float: left;">
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/pop-moi.html"
											title="ÂU MỸ"><b>ÂU MỸ</b></a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/pop-moi.html"
											title="Pop">Pop</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/rock-moi.html"
											title="Rock">Rock</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/electronicadance-moi.html"
											title="Electronica/Dance">Electronica/Dance</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/rbhip-hoprap-moi.html"
											title="R&amp;B/HipHop/Rap">R&amp;B/HipHop/Rap</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/bluesjazz-moi.html"
											title="Blues/Jazz">Blues/Jazz</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/country-moi.html"
											title="Country">Country</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/latin-moi.html"
											title="Latin">Latin</a></li>
									</ul>
									<ul style="width: 130px; float: left;">
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/nhac-han-moi.html"
											title="CHÂU Á"><b>CHÂU Á</b></a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/nhac-han-moi.html"
											title="Nhạc Hàn">Nhạc Hàn</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/nhac-hoa-moi.html"
											title="Nhạc Hoa">Nhạc Hoa</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/nhac-nhat-moi.html"
											title="Nhạc Nhật">Nhạc Nhật</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/nhac-thai-moi.html"
											title="Nhạc Thái">Nhạc Thái</a></li>
									</ul>
									<ul style="width: 100px; float: left;">
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/khong-loi-moi.html"
											title="KHÁC"><b>KHÁC</b></a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/khong-loi-moi.html"
											title="Không Lời">Không Lời</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/nhac-phim-moi.html"
											title="Nhạc Phim">Nhạc Phim</a></li>
										<li><a rel="follow"
											href="https://www.nhaccuatui.com/playlist/the-loai-khac-moi.html"
											title="Thể Loại Khác">Thể Loại Khác</a></li>
									</ul></li>
							</ul></li>
						
						

						<li><a rel="follow"
							href="https://www.nhaccuatui.com/bai-hat/top-20.nhac-viet.html"
							title="BXH">BXH</a> <script type="text/javascript">
								document
										.write("<ul class=\"submenu-topbar chart hideShowCase\"><div class=\"menu_chart_hide\"><li><ul><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/top-20.nhac-viet.html\" title=\"Việt Nam\"  >Việt Nam</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/top-20.au-my.html\" title=\"Âu Mỹ\"  >Âu Mỹ</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/bai-hat/top-20.nhac-han.html\" title=\"Hàn Quốc\"  >Hàn Quốc</a></li></ul></li></div></ul>");
							</script>
							<ul class="submenu-topbar chart hideShowCase">
								<div class="menu_chart_hide">
									<li><ul>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/bai-hat/top-20.nhac-viet.html"
												title="Việt Nam">Việt Nam</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/bai-hat/top-20.au-my.html"
												title="Âu Mỹ">Âu Mỹ</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/bai-hat/top-20.nhac-han.html"
												title="Hàn Quốc">Hàn Quốc</a></li>
										</ul></li>
								</div>
							</ul></li>
						<li><a rel="follow"
							href="https://www.nhaccuatui.com/chu-de.html" title="Chủ Đề">Chủ
								Đề</a> <script type="text/javascript">
									document
											.write("<ul class=\"submenu-topbar music hideShowCase\"><div class=\"menu_music_hide\"><li><ul><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/giai-thuong-am-nhac-the-gioi.weizycujk.html\" title=\"Music Awards\"  >Music Awards</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/chill-out.wepgktzom.html\" title=\"Chill Out\"  >Chill Out</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/acoustic-music.weoofjbgp.html\" title=\"Acoustic\"  >Acoustic</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/music-for-love.weiizplaw.html\" title=\"For Love\"  >For Love</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/edm.weojnddgy.html\" title=\"EDM\"  >EDM</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/nhac-thuy-nga.wepogqvbt.html\" title=\"Nhạc Thúy Nga\"  >Nhạc Thúy Nga</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/giang-sinh.weimonede.html\" title=\"Merry Christmas\"  >Merry Christmas</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/nhac-vang.weoqvlgbx.html\" title=\"Nhạc Vàng\"  >Nhạc Vàng</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/nhac-remix-hay-nhat.weodprtkm.html\" title=\"Remix Hits\"  >Remix Hits</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/us-uk-greatest-hits.weieatejm.html\" title=\"US-UK Hits\"  >US-UK Hits</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/k-pop-greatest-hits.weoizzksn.html\" title=\"K-Pop Hits\"  >K-Pop Hits</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/v-pop-greatest-hits.weiwjycnu.html\" title=\"V-Pop Hits\"  >V-Pop Hits</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/cover-mashup.wepydsnux.html\" title=\"Cover & Mashup\"  >Cover & Mashup</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/coffee-time.weocfcben.html\" title=\"Coffee Time\"  >Coffee Time</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/gym-music.weoklplbd.html\" title=\"Gym Music\"  >Gym Music</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/happy-wedding.weofrqore.html\" title=\"Wedding\"  >Wedding</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/nhac-phim.weibcrjia.html\" title=\"Nhạc Phim\"  >Nhạc Phim</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/bolero.weouymyiu.html\" title=\"Bolero\"  >Bolero</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/top-100-songs.weitkxvlh.html\" title=\"Top 100 Songs\"  >Top 100 Songs</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/that-tinh.weoumvsph.html\" title=\"Thất Tình\"  >Thất Tình</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/chu-de/piano.wepdpfwej.html\" title=\"Piano\"  >Piano</a></li></ul></li></div></ul>");
								</script>
							<ul class="submenu-topbar music hideShowCase"
								style="width: 550px; padding-left: 30px;">
								<div class="menu_music_hide">
									<li><ul style="width: 130px; float: left;">
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/giai-thuong-am-nhac-the-gioi.weizycujk.html"
												title="Music Awards">Music Awards</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/chill-out.wepgktzom.html"
												title="Chill Out">Chill Out</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/acoustic-music.weoofjbgp.html"
												title="Acoustic">Acoustic</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/music-for-love.weiizplaw.html"
												title="For Love">For Love</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/edm.weojnddgy.html"
												title="EDM">EDM</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/nhac-thuy-nga.wepogqvbt.html"
												title="Nhạc Thúy Nga">Nhạc Thúy Nga</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/giang-sinh.weimonede.html"
												title="Merry Christmas">Merry Christmas</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/nhac-vang.weoqvlgbx.html"
												title="Nhạc Vàng">Nhạc Vàng</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/nhac-remix-hay-nhat.weodprtkm.html"
												title="Remix Hits">Remix Hits</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/us-uk-greatest-hits.weieatejm.html"
												title="US-UK Hits">US-UK Hits</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/k-pop-greatest-hits.weoizzksn.html"
												title="K-Pop Hits">K-Pop Hits</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/v-pop-greatest-hits.weiwjycnu.html"
												title="V-Pop Hits">V-Pop Hits</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/cover-mashup.wepydsnux.html"
												title="Cover &amp; Mashup">Cover &amp; Mashup</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/coffee-time.weocfcben.html"
												title="Coffee Time">Coffee Time</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/gym-music.weoklplbd.html"
												title="Gym Music">Gym Music</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/happy-wedding.weofrqore.html"
												title="Wedding">Wedding</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/nhac-phim.weibcrjia.html"
												title="Nhạc Phim">Nhạc Phim</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/bolero.weouymyiu.html"
												title="Bolero">Bolero</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/top-100-songs.weitkxvlh.html"
												title="Top 100 Songs">Top 100 Songs</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/that-tinh.weoumvsph.html"
												title="Thất Tình">Thất Tình</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/chu-de/piano.wepdpfwej.html"
												title="Piano">Piano</a></li>
										</ul></li>
								</div>
							</ul></li>
						<li><a rel="follow"
							href="https://www.nhaccuatui.com/top100/top-100-nhac-tre.m3liaiy6vVsF.html"
							title="Top 100">Top 100</a> <script type="text/javascript">
								document
										.write("<ul class=\"submenu-topbar chart hideShowCase\"><div class=\"menu_chart_hide\"><li><ul><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/top100/top-100-nhac-tre.m3liaiy6vVsF.html\" title=\"Việt Nam\"  >Việt Nam</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/top100/top-100-pop.zE23R7bc8e9X.html\" title=\"Âu Mỹ\"  >Âu Mỹ</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/top100/top-100-nhac-han.iciV0mD8L9Ed.html\" title=\"Châu Á\"  >Châu Á</a></li><li><a rel=\"follow\" href=\"https://www.nhaccuatui.com/top100/top-100-khong-loi.kr9KYNtkzmnA.html\" title=\"Không Lời\"  >Không Lời</a></li></ul></li></div></ul>");
							</script>
							<ul class="submenu-topbar chart hideShowCase">
								<div class="menu_chart_hide">
									<li><ul>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/top100/top-100-nhac-tre.m3liaiy6vVsF.html"
												title="Việt Nam">Việt Nam</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/top100/top-100-pop.zE23R7bc8e9X.html"
												title="Âu Mỹ">Âu Mỹ</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/top100/top-100-nhac-han.iciV0mD8L9Ed.html"
												title="Châu Á">Châu Á</a></li>
											<li><a rel="follow"
												href="https://www.nhaccuatui.com/top100/top-100-khong-loi.kr9KYNtkzmnA.html"
												title="Không Lời">Không Lời</a></li>
										</ul></li>
								</div>
							</ul></li>
						
					</ul>
				</div>
				<!--End sub-menu-top-->
				<div class="box-action-right">
					 <span id="idMyPlaylist"> <a
						href="https://www.nhaccuatui.com/playlist/nhaccuatuicom-dang-cap-nhat.VnSWEg2KHKgW.html"
						id="my_playlist" class="btn-play-music-me" title="Nhạc Của Tui"
						alt="Nhạc Của Tui">Nhạc Của Tui</a>
					</span> 
				</div>
			</div>
		</div>
	</div>
