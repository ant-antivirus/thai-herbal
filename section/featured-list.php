<section id="FeaturedList" class="full full-parallax">
	<div class="parallax-arrows">
		<a href="#" onclick="$.scrollify.previous(); return false;" class="parallax-arrow parallax-arrow-up" data-toggle="tooltip" data-placement="top" title="Up"><span class="ion-ios-arrow-up"></span></a>
		<a href="#" onclick="$.scrollify.next(); return false;" class="parallax-arrow parallax-arrow-down" data-toggle="tooltip" data-placement="top" title="Down"><span class="ion-ios-arrow-down"></span></a>
		<!-- <a href="#" onclick="showAllHerbs(); return false;" class="parallax-arrow parallax-arrow-feature" data-toggle="tooltip" data-placement="top" title="All Herbs"><span class="ion-ios-arrow-down"></span></a> -->
	</div>

	<div class="parallax parallax-first" id="Featured-01" data-section-name="Turmeric" data-section-id="01">
		<?php include("featured/turmeric.php");?>
	</div>
	<div class="parallax" id="Featured-02" data-section-name="Butterfly Pea" data-section-id="02">
		<?php include("featured/butterfly-pea.php");?>
	</div>
	<div class="parallax" id="Featured-03" data-section-name="Pepper" data-section-id="03">
		<?php include("featured/pepper.php");?>
	</div>

	<div class="parallax show-all" data-section-name="Herbs" data-section-id="All"></div>
	<div class="overlay-fx"></div>
</section>

<div class="featured-container" data-name="Turmeric">
	<div class="featured-container-more">
		<a href="#" class="featured-container-close" onclick="return closeFeaturedDetail();"><span class="ion-android-close"></span></a>
		<div class="featured-photo"><img src="assets/img/featured-01-more.jpg"/></div>
		<div class="featured-content">
			<div class="featured-content-title">Turmeric</div>
			<div class="featured-content-social">
				<a href="#" onclick="$(this).find('span').toggleClass('ion-android-star').toggleClass('ion-android-star-outline'); return false;"><span class="ion-android-star-outline "></span></a>
				<div class="social-inline">
					<div class="social-inline-slide">
						<a href="#"><span class="ion-social-facebook"></span></a>
						<a href="#"><span class="ion-social-twitter"></span></a>
						<a href="#"><span class="fa fa-instagram"></span></a>
						<a href="#"><span class="ion-social-youtube"></span></a>
						<a href="#"><span class="fa fa-weibo"></span></a>
					</div>
					<a href="#" onclick="$('.social-inline-slide').toggleClass('open'); return false;"><span class="ion-android-share-alt"></span></a>
				</div>				
			</div>
			<div class="featured-content-description">
				<p>
					<strong>Generic Name:</strong> Turmeric<br/>
					<strong>Scientific Name:</strong> Curcuma longa
				</p>
				<hr/>
				<p>
					<strong>Possible Interactions:</strong><br/>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut fermentum diam. Aenean in venenatis odio. Curabitur hendrerit sit amet nisl ut accumsan.
				</p>
				<p>
					<strong>Properties / Benefits:</strong><br/>
					Vivamus eu volutpat lacus, ac luctus sapien. Suspendisse et finibus velit. Mauris nec turpis ac sapien maximus fringilla at vitae sapien. Nullam tempus libero rutrum luctus tristique. Nunc accumsan luctus ex et laoreet. Nunc pulvinar faucibus augue, non congue ex volutpat vitae. Pellentesque ullamcorper ultricies mi sit amet posuere. Cras dictum libero dapibus eleifend ultricies. 
				</p>
				<p>
					<strong>Instructions:</strong><br/>
					facilisis vitae enim id, finibus consectetur nibh. Donec iaculis nibh in lectus luctus maximus. Phasellus et feugiat libero, nec blandit nunc. Nam tortor neque, posuere vitae viverra non, sollicitudin non ipsum.
				</p>
				<hr/>
				<p><strong>Buying products made with turmeric from Thaitrade.com</strong></p>
				<div class="featured-content-icons">
					<a href="#" onclick="return showProductsList('Cooking Ingredients', 'Turmeric');"><div class="hover"><img src="assets/img/icon-cooking.png" class="out"/><img src="assets/img/icon-cooking-over.png" class="over"/></div><br/>Cooking Ingredients</a>
					<a href="#" onclick="return showProductsList('Personal Care', 'Turmeric');"><div class="hover"><img src="assets/img/icon-personal.png" class="out"/><img src="assets/img/icon-personal-over.png" class="over"/></div> <br/>Personal Care</a>
					<a href="#" onclick="return showProductsList('Spa & Therapy', 'Turmeric');"><div class="hover"><img src="assets/img/icon-spa.png" class="out"/><img src="assets/img/icon-spa-over.png" class="over"/></div> <br/>Spa & Therapy</a>
					<a href="#" onclick="return showProductsList('Medicine & Supplement', 'Turmeric');"><div class="hover"><img src="assets/img/icon-medicine.png" class="out"/><img src="assets/img/icon-medicine-over.png" class="over"/></div> <br/>Medicine & Supplement</a>
					<a href="#" onclick="return showProductsList('All', 'Turmeric');"><div class="hover"><img src="assets/img/icon-all.png" class="out"/><img src="assets/img/icon-all-over.png" class="over"/></div> <br/>ALL Products</a>
				</div>
				<hr/>
				<p class="featured-content-button">
					<button class="btn btn-default" onclick="$(this).closest('.featured-container').find('.featured-container-story').fadeIn(); setBrown();">Story of Turmeric</button>
					<button class="btn btn-default" onclick="$(this).closest('.featured-container').find('.featured-container-possible').fadeIn(); setWhite();">Possible Usages</button>
					<button class="btn btn-default" onclick="$(this).closest('.featured-container').find('.featured-container-statistics').fadeIn(); setBrown();">Interesting Statistics</button>
				</p>
			</div>
		</div>
	</div>
	<div class="featured-container-story">
		<a href="#" class="featured-container-close" onclick="$(this).closest('.featured-container').find('.featured-container-story').fadeOut(); setWhite(); return false;"><span class="ion-android-close"></span></a>
		<div class="featured-content">
			<div class="featured-content-center">
				<div class="featured-content-subtitle">Story of Turmeric</div>
				<div class="featured-content-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut fermentum diam. Aenean in venenatis odio. Curabitur hendrerit sit amet nisl ut accumsan. Cras lobortis nec ex ut varius. Sed at tellus et nulla blandit ultricies. Proin luctus vestibulum placerat. Phasellus in sapien sed massa efficitur euismod in non felis.</p>
				</div>
			</div>
		</div>
		<div class="featured-photo"><img src="assets/img/featured-01-story.jpg"/></div>
	</div>
	<div class="featured-container-possible">
		<a href="#" class="featured-container-close" onclick="stopVideo(); $(this).closest('.featured-container').find('.featured-container-possible').fadeOut(); setWhite(); return false;"><span class="ion-android-close"></span></a>
		<div class="featured-photo"><img src="assets/img/featured-01-possible.jpg"/></div>
		<div class="featured-content featured-content-scroll" data-mcs-theme="dark-thin">
			<div class="featured-content-center ">
				<div class="featured-content-subtitle">Possible USAGES</div>
				<div class="featured-content-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut fermentum diam. Aenean in venenatis odio. </p>
					<div class="video-box">
						<div class="embed-responsive embed-responsive-16by9">
						<div class="youtubePlayer youtube-cover" style="background-image: URL('assets/img/featured-01-possible-01.jpg');"><button class="youtubeButton"><span class="ion-play"></span></button></div>
						<div class="embed-responsive-item"  id="youtubePlayer">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/U681JHymslE"></iframe>
						</div>
						</div>
					</div>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut diam. Aenean in venenatis odio. Curabitur hendrerit sit amet nisl accumsan Cras lobortis nec ex ut varius. Sed at tellus et nulla blandit ultricies.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut fermentum diam. Aenean in venenatis odio. </p>
					<p><div class="video-player"><a href="#"><span class="ion-play"></span></a><img src="assets/img/featured-01-possible-02.jpg" class="img-responsive"/></div></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut diam. Aenean in venenatis odio. Curabitur hendrerit sit amet nisl accumsan Cras lobortis nec ex ut varius. Sed at tellus et nulla blandit ultricies.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="featured-container-statistics">
		<a href="#" class="featured-container-close" onclick="$(this).closest('.featured-container').find('.featured-container-statistics').fadeOut(); setWhite(); return false;"><span class="ion-android-close"></span></a>
		<div class="featured-content featured-content-full">
			<div class="featured-content-center text-center">
				<div class="featured-content-group-center">
					<div class="featured-content-subtitle">EXPORT & CONSUMPTION STATISTICS</div>
					<div class="featured-content-description">
						<p><img src="assets/img/featured-01-graph.jpg" class="img-responsive"/></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
var player;
var player_ready = false;

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubePlayerAPIReady() {
	player = new YT.Player('youtubePlayer', {
		videoId: 'U681JHymslE',
		playerVars: {rel: 0},
		events: {
			'onReady': function() {
				player_ready = true;
				$("#youtubePlayer").hide();
				$(".youtubePlayer").fadeIn();
			},
			'onStateChange': onPlayerStateChange
		}
	});

	$(".youtubeButton").on("click", function() {
		if(player_ready) {
			$("#youtubePlayer").show();
			$(".youtubePlayer").hide();
			player.playVideo();
		}
		return false;
	});
}

function onPlayerStateChange(event) {
	var id = event.target.a.id;
	if(event.data === 0) {
		$("#youtubePlayer").hide();
		$(".youtubePlayer").fadeIn();
	}
}

function stopVideo() {
	if(player_ready) {
		player.pauseVideo();
		$(".youtubePlayer").show();
	}
}
</script>