<div class="scene" data-hover-only="true" data-relative-input="true" >
	<div class="layer" data-depth="0.1"><div class="objects object-1"><img src="assets/img/parallax/1_1.png"/></div></div>
	<div class="layer" data-depth="0.05"><div class="objects object-2"><img src="assets/img/parallax/1_2.png"/></div></div>
	<div class="layer" data-depth="0.3"><div class="objects object-3"><img src="assets/img/parallax/1_3.png"/></div></div>
	<div class="layer" data-depth="0.1"><div class="objects object-4"><img src="assets/img/parallax/1_4.png"/></div></div>
</div>

<div class="parallax-container">
	<div class="section-number">01</div>
	<div class="section-title">TURMERIC</div>
	<div class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut fermentum diam. in venenatis odio. Curabitur hendrerit sit amet nisl ut accumsan. Cras lobortis nec ex ut varius. Sed at tellus et nulla ultri.</div>
	<div class="section-button"><button class="btn btn-default" onclick="setWhite(); return showFeaturedDetail('Turmeric');">LEARN MORE</button></div>
</div>

<script>
$(document).ready(function() {
	$('.scene').each( function() {
		var dummy = new Parallax( this );
	});
});
</script>