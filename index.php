<!doctype html>
<html lang="en">
<head>
<title>Thai Herbal</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">

<link href='assets/img/home-01.jpg' rel='prefetch'>
<link href='assets/img/home-02.jpg' rel='prefetch'>
<link href='assets/img/home-03.jpg' rel='prefetch'>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" >

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- OwlCarousel2 -->
<script src="assets/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
<script src="assets/plugins/OwlCarousel2/dist/owl.rows.js"></script>
<link rel="stylesheet" href="assets/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/plugins/OwlCarousel2/dist/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/animate.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<!-- ionicons -->
<link rel="stylesheet" href="assets/css/ionicons.min.css">

<!-- jQuery UI -->
<!--
<script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="assets/plugins/jquery-ui-1.12.1/jquery-ui.theme.min.css">
-->

<!-- iChecker -->
<script src="assets/plugins/icheck/icheck.min.js"></script>
<link rel="stylesheet" href="assets/plugins/icheck/skins/all.css">

<!-- nprogress -->
<script src="assets/plugins/nprogress-master/nprogress.js"></script>
<link rel="stylesheet" href="assets/plugins/nprogress-master/nprogress.css">

<!-- Scrollify -->
<script src="assets/plugins/Scrollify-master/jquery.scrollify.min.js"></script>
<script src="assets/plugins/Scrollify-master/easing.js"></script>

<!-- parallax -->
<script src="assets/plugins/parallax-master/parallax.js"></script>

<!-- hamburgers -->
<link rel="stylesheet" href="assets/css/hamburgers.min.css" >

<!-- mCustomScrollbar -->
<script src="assets/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<link rel="stylesheet" href="assets/plugins/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

<link rel="stylesheet" href="assets/css/style.css" >

</head>
<body>

<div class="loading-overlay"><div class="loading-overlay-container"><div class="loading-overlay-loading"></div>Herbs Loading ...</div></div>

<div class="menus brown">
	<div class="menu">
		<div class="search-box">
			<input type="text" class="search-input" placeholder="Keywords Search" data-toggle="tooltip" data-placement="bottom" title="Search by Herb Name, Properties, Benefits, Interactions, Side Effects, Instructions or Disease Names" />
			<div class="search-suggestion-list">
					<div>Aloe Vera</div>
					<div>Asiatic</div>
					<div>Butterfly Pea</div>
					<div>Ginger</div>
					<div>Gooseberry</div>
					<div>Kaffir Lime</div>
					<div>Lemongrass</div>
					<div>Pepper</div>
					<div>Roselle</div>
					<div>Safflower</div>
					<div>Shallot</div>
					<div>Turmeric</div>
			</div>
		</div>
		<button class="search-button" onclick="toggleSearch();"><span class="ion-ios-search"></span></button>
	</div>
	<div class="menu">
		<button class="hamburger hamburger--emphatic" type="button" onclick="toggleMenu()">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
	</div>
</div>

<div class="menus-overflow">
	<div class="menus-container ">
		<ul class="languages">
			<li class="lang-th"><a href="#" onclick="return changeLanguage('th');">ไทย</a></li>
			<li class="lang-en active"><a href="#" onclick="return changeLanguage('en');">ENG</a></li>
			<li class="lang-ch"><a href="#" onclick="return changeLanguage('ch');">中文</a></li>
			<li class="lang-jp"><a href="#" onclick="return changeLanguage('jp');">日本語</a></li>
		</ul>

		<ul class="menu-all">
			<li class="main active" data-menu="Home" data-lang-th="Home" data-lang-en="Home" data-lang-ch="主页" data-lang-jp="ホーム" ><a href="#" onclick="return showHome($(this));">Home</a></li>
			<li class="main" data-menu="Featured Thai Herbs" data-lang-th="Featured Thai Herbs" data-lang-en="Featured Thai Herbs" data-lang-ch="特色泰国草药" data-lang-jp="一番 おすすめのハーブ"><a href="#" onclick="return showFeatured($(this));">Featured Thai Herbs</a></li>
			<li class="main" data-menu="All Thai Herbs" data-lang-th="Explore All Herbs" data-lang-en="Explore All Herbs" data-lang-ch="所有草药" data-lang-jp="すべてのハーブ"><a href="#" onclick="return showAllHerbs($(this));">Explore All Herbs</a></li>
			<li class="main" data-menu="Products" data-lang-th="Products" data-lang-en="Products" data-lang-ch="制品" data-lang-jp="タイのハーブ製品"><a href="#" onclick="return showProducts($(this));">Products</a></li>
			<li class="main" data-menu="History of Thai Herbs" data-lang-th="History of Thai Herbs" data-lang-en="History of Thai Herbs" data-lang-ch="泰国草药的历史" data-lang-jp="タイのハーブの歴史"><a href="#" onclick="return showHistory($(this));">History of Thai Herbs</a></li>
			<li class="main" data-menu="Contact" data-lang-th="Contact" data-lang-en="Contact" data-lang-ch="联系我们" data-lang-jp="お問い合わせ"><a href="#" onclick="return showContact($(this));">Contact</a></li>
			<li class="my-account account-th account-en ">
				<a href="#">My Profile</a> |
				<a href="#">My Favourites</a> |
				<a href="#">Recommended Herbs</a>
			</li>
			<li class="my-account account-ch">
				<a href="#">我的简历</a> |
				<a href="#">我最喜欢的</a> |
				<a href="#">推荐的草药</a>
			</li>
			<li class="my-account account-jp">
				<a href="#">私のプロフィール</a> |
				<a href="#">私のお気に入り</a> |
				<a href="#">推奨ハーブ</a>
			</li>
		</ul>

		<ul class="social">
			<li><a href="#"><span class="ion-social-facebook"></span></a></li>
			<li><a href="#"><span class="ion-social-twitter"></span></a></li>
			<li><a href="#"><span class="fa fa-instagram"></span></a></li>
			<li><a href="#"><span class="ion-social-youtube"></span></a></li>
			<li><a href="#"><span class="fa fa-weibo"></span></a></li>
			<li>|</li>
			<li><a href="#"><span class="fa fa-share-alt"></span></a></li>
			<li class="social-account account-th account-en "><a href="#">SIGN UP</a> / <a href="#">SIGN IN</a></li>
			<li class="social-account account-ch"><a href="#">注册</a> / <a href="#">签到</a></li>
			<li class="social-account account-jp"><a href="#">サインアップ</a> / <a href="#">サインイン</a></li>
		</ul>
	</div>

	<div class="content-overflow">
		<?php include("overflow/products.php");?>
		<?php include("overflow/featured.php");?>
	</div>

</div>

<div class="logos">
	<a href="#" class="logo logo-thai-herbal hidden"><img src="assets/img/logo-thai-herbal-color.png"/></a>
	<a href="#" class="logo logo-ditp hidden"><img src="assets/img/logo-ditp-color.png"/></a>
</div>

<div class="sound">
	<a href="#" class="sound-button brown" onclick="return toggleSound();">
		<!-- <img src="assets/img/sound-brown.png"/> -->
		<div id="onoff-sound" class="soundwave">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</a>
</div>

<?php include("section/home.php");?>
<?php include("section/featured.php");?>
<?php include("section/featured-list.php");?>
<?php include("section/products-list.php");?>

<audio id="myAudio" loop >
	<source src="assets/sound/sound-bg-demo.mp3" type="audio/mpeg">
</audio>

<script>
NProgress.start()
setTimeout(function() {
	NProgress.done();
	$(".loading-overlay").fadeOut();
}, 1000);


$(document).ready(function() {
	document.getElementById("myAudio").play();
	searchSuggestionHide();

	$(".search-input").tooltip({
		trigger: 'manual',
		template: '<div class="tooltip search-tooltip" role="tooltip"><div class="tooltip-inner"></div></div>',
	}).on("focus", function() {
		if($('.search-input').val() != "") {
			searchSuggestion();
			$('.search-suggestion-list').fadeIn();
			$('.search-input').tooltip('hide');
		} else {
			searchSuggestionHide();
			$('.search-input').tooltip('show');
		}
	}).on("blur", function() {
		$('.search-input').tooltip('hide');
		setTimeout(function() {
			searchSuggestionHide();
		}, 500);
	}).on("keyup", function() {
		if($('.search-input').val() != "") {
			searchSuggestion();
			$('.search-suggestion-list').fadeIn();
			$('.search-input').tooltip('hide');
		} else {
			searchSuggestionHide();
			$('.search-input').tooltip('show');
		}
	});

	$(".search-suggestion-list").find("div").on("click", function() {
		$('.search-input').val($(this).text());
		searchSuggestionHide();
	});


	$(".parallax-arrow").tooltip({
		html: true,
		trigger: 'manual',
		template: '<div class="tooltip arrow-tooltip" role="tooltip"><div class="tooltip-inner"></div></div>',
	}).on("mouseover", function() {
		$(this).tooltip('show');
	}).on("mouseout", function() {
		$(this).tooltip('hide');
	});
	
	$('.homeCarousel').owlCarousel({
		nav:false,
		dots:false,
		margin: 0,
		loop: true,
		items: 1,
		autoplay: true,
		autoplayTimeout: 4000,
		animateOut: 'fadeOut',
		// animateIn: 'fadeIn',
	});

	$(".content-overflow-body").mCustomScrollbar();
	$(".featured-content-scroll").mCustomScrollbar();

	$.scrollify({
		section: ".parallax",
		easing: "easeOutQuad",
		scrollbars: false,
		scrollSpeed: 500,
		sectionName: "section-name",
		setHeights: false,
		overflowScroll: false,
		before: paralaxBeforeCallback,
		after: paralaxAfterCallback,
		afterRender() {
			$.scrollify.update();
			// paralaxBeforeCallback();
		}
	});

	$(".social-account").hide();
	$(".my-account").hide();
	$(".account-en").show();


	$.scrollify.disable();
	showHome($(".main.active").find("a"));
	// showFeaturedList('Pepper');
	// showProductsList('All', 'All');
});

var last_language = "en";
function changeLanguage(lang) {
	$(".languages").find("li").removeClass("active");
	$(".menu-all").find(".main").removeClass("animated flipInX");
	$("li.lang-"+lang).addClass("active");
	$(".social-account").hide();
	$(".my-account").hide();
	$(".account-"+lang).show();
	if(last_language == lang) return;
	var time = 100;
	$(".menu-all").find(".main").each(function() {
		var elm = $(this);
		setTimeout(function() {
			$(elm).addClass("animated flipInX")
			$(elm).find("a").text($(elm).attr("data-lang-"+lang));
		}, time);
		time = time + 100;
	});
		
	setTimeout(function() {
		$(".menu-all").find(".main").removeClass("animated flipInX");
	}, 2000);

	last_language = lang;
	return;
}

function searchSuggestionHide() {
	$(".search-suggestion-list").find("div").each(function() {
		$(this).text($(this).text());
	}).hide();
}

function searchSuggestion() {
	var value = $('.search-input').val().toLowerCase();
	var target = $('.search-suggestion-list');
	var reg = new RegExp(value, 'gi');
	$(target).find("div").each(function() {
		var result = $(this).text();
		var final_string= result.replace(reg, function(str) {return '<b style="color: #8e6a3f;">'+str+'</b>'});
		 var index_of = result.toLowerCase().indexOf(value);
		 if(index_of < 0) {
			 $(this).hide();
		 } else {
			$(this).show().html(final_string);
		 }
	});
}

function showFeaturedDetail(name) {
	stopVideo();
	$.scrollify.disable();
	$(".menus").hide();
	$(".sound").hide();
	$(".logo-thai-herbal").removeClass("hidden");
	$(".logo-ditp").removeClass("hidden");
	$(".featured-container-more").show();
	$(".featured-container[data-name='"+name+"']").fadeIn();
	return false;
}

function closeFeaturedDetail() {
	stopVideo();
	if($(".main[data-menu='All Thai Herbs']").hasClass("active")) {
		$(".logo-thai-herbal").addClass("hidden");
		$(".logo-ditp").addClass("hidden");
	}


	$.scrollify.enable();
	$(".menus").show();
	$(".sound").show();
	$(".featured-container-more").hide();
	$(".featured-container-story").hide();
	$(".featured-container-possible").hide();
	$(".featured-container-statistics").hide();
	$(".featured-container").fadeOut();
	return false;
}

function setWhite() {
	$(".logo-thai-herbal").removeClass("brown").addClass("white");
	$(".logo-ditp").removeClass("brown").addClass("white");
	$(".menus").removeClass("brown").addClass("white");
}

function setBrown() {
	$(".logo-thai-herbal").removeClass("white").addClass("brown");
	$(".logo-ditp").removeClass("white").addClass("brown");
	$(".menus").removeClass("white").addClass("brown");
}

function paralaxAfterCallback(index) {
	var section = $(".parallax:eq("+index+")");
	var section_name = $(".parallax:eq("+index+")").attr("data-section-name");
	var section_id = $(".parallax:eq("+index+")").attr("data-section-id");
	$('.section-number').removeClass('animated fadeIn');
	setTimeout( function(){
		$('.overlay-fx').removeClass('activated');
		$('.parallax-container').removeClass('over');
	}, 100);
}

function paralaxBeforeCallback(index) {
	var section = $(".parallax:eq("+index+")");
	var section_name = $(".parallax:eq("+index+")").attr("data-section-name");
	var section_id = $(".parallax:eq("+index+")").attr("data-section-id");

	if($(section).hasClass("show-all")) {
		showAllHerbs();
		return;
	}

	if($(section).length <= 0) {
		$('.overlay-fx').removeClass('activated');
		$('.parallax-container').removeClass('over');
		$('.section-number').removeClass('animated fadeIn');
	} else {
		$('.overlay-fx').addClass('activated');
		$('.parallax-container').addClass('over');
		$('.section-number').addClass('animated fadeIn');
	}

	var next = $.scrollify.current().next();
	var next_name = $(next).attr("data-section-name");
	var next_id = $(next).attr("data-section-id");

	var previous = $.scrollify.current().prev();
	var previous_name = $(previous).attr("data-section-name");
	var previous_id = $(previous).attr("data-section-id");

	if(!$(previous).hasClass("parallax")) {
		$(".parallax-arrow-up").hide();
	} else {
		$(".parallax-arrow-up").show().attr("data-original-title", previous_id+"<br/>"+previous_name);
	}

	if(!$(next).hasClass("parallax")) {
		//$(".parallax-arrow-feature").show();
		$(".parallax-arrow-down").hide();
	} else {
		//$(".parallax-arrow-feature").hide();
		$(".parallax-arrow-down").show().attr("data-original-title", next_id+"<br/>"+next_name);
	}


	switch(index) {
		case 0:
			setWhite();
			break;
		case 1:
		case 2:
			setBrown();
			break;
	} 
}

function toggleMenu() {
	if(!$('.menus-overflow').hasClass('open')) { 
		openMenu();
	} else {
		closeMenu();
	}
	return false;
}

function closeMenu() {
	$(".hamburger").removeClass('is-active');
	$('.menus-overflow').removeClass('open');
	$('.search-box').removeClass('open'); 
	$(".content-overflow").removeClass("open");
	$(".content-overflow-body").removeClass("open");
	$(".menus").removeClass("open");
	if($(".main.active").attr("data-menu") == "Featured Thai Herbs") {
		$.scrollify.enable();
	}
	return false;
}

function openMenu() {
	$(".hamburger").addClass('is-active');
	$('.menus-overflow').addClass('open');
	$(".menus").addClass("open");
	closeFeaturedDetail();
	$.scrollify.disable();
	return false;
}

function toggleSearch() {
	if(!$('.search-box').hasClass('open')) { 
		$('.search-box').addClass('open'); 
	} else {
		$('.search-box').removeClass('open'); 
	}

	if(!$('.menus-overflow').hasClass('open')) { 
		openMenu();
	}
	return false;
}

function showHome(elm) {
	closeMenu();
	$(".main").removeClass("active");
	$(elm).parent().addClass("active");
	$(".logo-thai-herbal").addClass("hidden");
	$(".logo-ditp").removeClass("hidden").removeClass("brown").addClass("white");
	$("section").removeClass("open");
	$(".menus").addClass("brown").removeClass("white");
	$(".sound-button").addClass("brown").removeClass("white");
	$("#Home").addClass("open");
	$.scrollify.disable();
	return false;
}

function showFeatured(elm) {
	$(".main").removeClass("active");
	$(elm).parent().addClass("active");
	$(".content-overflow").addClass("open");
	$(".content-overflow-body").hide().removeClass("open");
	$("#overflowFeatured").fadeIn().addClass("open");
	$.scrollify.disable();
	return false;
}
function showAllHerbs(elm) {
	closeMenu();
	$(".main").removeClass("active");
	$(".main[data-menu='All Thai Herbs']").addClass("active");
	$(".logo-thai-herbal").addClass("hidden");
	$(".logo-ditp").addClass("hidden");
	$(".content-overflow-body").hide().removeClass("open");
	$("section").removeClass("open");
	$(".menus").addClass("white").removeClass("brown");
	$(".sound-button").addClass("white").removeClass("brown");
	$("#Featured").addClass("open").hide().fadeIn();
	$.scrollify.disable();
	return false;
}
function showProducts(elm) {
	$(".main").removeClass("active");
	$(elm).parent().addClass("active");
	$(".content-overflow").addClass("open");
	$(".content-overflow-body").hide().removeClass("open");
	$("#overflowProducts").fadeIn().addClass("open");
	$.scrollify.disable();
	return false;
}

function showProductsList(category, name) {
	closeMenu();
	$(".menus").show();
	$(".sound").show();
	$(".main").removeClass("active");
	$(".main[data-menu='Products']").addClass("active");
	$(".logo-thai-herbal").addClass("hidden");
	$(".logo-ditp").addClass("hidden");
	$("section").removeClass("open");
	$(".menus").addClass("brown").removeClass("white");
	$(".sound-button").addClass("brown").removeClass("white");
	$("#ProductsList").addClass("open").hide().fadeIn();
	$(".featured-container").hide();
	$.scrollify.disable();

	$("#dataCategories option").prop("selected", "");
	$('#dataCategories option[value="'+category+'"]').prop("selected", "selected");

	$("#dataHerbName option").prop("selected", "");
	$('#dataHerbName option[value="'+name+'"]').prop("selected", "selected");

	return false;
}

function showHistory(elm) {
	return false;
}
function showContact(elm) {
	return false;
}

function showFeaturedList(id) {
	$.scrollify.enable();
	closeMenu();

	id = id.replace(" ", "-");

	$(".main").removeClass("active");
	$(".main[data-menu='Featured Thai Herbs']").addClass("active");

	$(".logo-thai-herbal").removeClass("hidden").addClass("white").removeClass("brown");
	$(".logo-ditp").removeClass("hidden").addClass("white").removeClass("brown");
	$("section").removeClass("open");
	$(".menus").addClass("white").removeClass("brown");
	$(".sound-button").addClass("brown").removeClass("white");
	$(".full-parallax").addClass("open").hide().fadeIn();
	paralaxBeforeCallback();

	$.scrollify.update();
	setTimeout(function() {
		$.scrollify.move("#"+id);
	}, 500);

	return;
}

function toggleSound() {
	$("#onoff-sound").toggleClass("stop");

	if($("#onoff-sound").hasClass("stop")) {
		document.getElementById("myAudio").pause();
	} else {
		document.getElementById("myAudio").play();
	}
	return false;
}
</script>

</body>
</html>