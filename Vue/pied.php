</body>
<!--footer starts from here-->
<footer>
<div class="container bottom_border">
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<center>
				<h5 class="headin5_amrc col_white_amrc pt2">Qui somme nous</h5>
				<!--headin5_amrc-->
				<p class="mb10">Nous sommes 3 étudiants en BTS SIO <br> qui aimons fortement la bière.</p>
				<p><i class="fa fa-location-arrow"></i> Pôle La Chartreuse <br> 9 rue du pont <br> 43700 BRIVES-CHARENSAC </p>
				<p><i class="fa fa-phone"></i>  04 71 09 83 09  </p>
				<a href="mailto:contact@pole-lachartreuse.fr" title="Nous contacter"><i class="fa fa fa-envelope"></i> contact@bro-bock.fr</a>
			</center>
		</div>

		<div class="col-xs-12 col-sm-4">
			<center>
				<br><br>
				<img src="img/icon2.png"/>
			</center>
		</div>

		<div class="col-xs-12 col-sm-4">
			<center>
				<h5 class="headin5_amrc col_white_amrc pt2">D'autres site de vente de bière</h5>
				<a href="https://www.saveur-biere.com/fr/">Saveur biere</a><br>
				<a href="https://www.beerwulf.com/fr-fr">Beerwulf</a><br>
				<a href="https://www.latelierdesbieres.fr/">L'atelier des biere</a><br>
				<a href="https://www.lantredebiere.com/">L'antre de biere</a><br>
				<a href="https://unepetitemousse.fr/">Une petite mousse</a><br>
				<a href="https://bieronomy.com/">Bieronomy</a>
			</center>
		</div>


		</div>

	<!--footer_ul2_amrc ends here-->
	</div>
</div>


<div class="container">
<br>
<p class="text-center">Copyright @2019 | <a href="index.php?page=accueil">Bro'Bock</a></p>

<ul class="foote_bottom_ul_amrc">
<li><a href="http://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="http://twitter.com"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://youtube.com"><i class="fab fa-youtube"></i></a></li>
<li><a href="http://instagram.com"><i class="fab fa-instagram"></i></a></li>
<br><br>
</ul>
</div>

</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
	
	<script>
		var w = window.innerWidth,
			h = window.innerHeight,
			canvas = document.getElementById('bubble'),
			ctx = canvas.getContext('2d'),
			rate = 60,
			arc = 100,
			time,
			count,
			size = 7,
			speed = 20,
			lights = new Array,
			colors = ['#d59254','#ffffff','#d59254','#ffffff'];

		canvas.setAttribute('width',w);
		canvas.setAttribute('height',h);

		function init() {
		time = 0;
		count = 0;

		for(var i = 0; i < arc; i++) {
			lights[i] = {
			x: Math.ceil(Math.random() * w),
			y: Math.ceil(Math.random() * h),
			toX: Math.random() * 5 + 1,
			toY: Math.random() * 5 + 1,
			c: colors[Math.floor(Math.random()*colors.length)],
			size: Math.random() * size
			}
		}
		}

		function bubble() {
		ctx.clearRect(0,0,w,h);

		for(var i = 0; i < arc; i++) {
			var li = lights[i];
			
			ctx.beginPath();
			ctx.arc(li.x,li.y,li.size,0,Math.PI*2,false);
			ctx.fillStyle = li.c;
			ctx.fill();
			
			li.x = li.x + li.toX * (time * 0.05);
			li.y = li.y + li.toY * (time * 0.05);
			
			if(li.x > w) { li.x = 0; }
			if(li.y > h) { li.y = 0; }
			if(li.x < 0) { li.x = w; }
			if(li.y < 0) { li.y = h; }
		}
		if(time < speed) {
			time++;
		}
		timerID = setTimeout(bubble,1000/rate);
		}
		init();
		bubble(); 

		//navigation (this is my code)
		var animation = 'easeOutCubic';
			delay     = 60;

		$(document)
		.on('click', '.fa-bars', function(){
			var i = 0;
			$('nav').before($('#bubble'));
			$('#bubble').fadeIn();
			$('#mainnav').find('li').each(function(){
			var that = $(this);
			i++;
			(function(i, that){
				setTimeout(function(){
					that
					.animate(
						{ 'left'   : '20px' }, 
						{ duration : 350, 
						easing   : animation })
					.fadeIn({queue: false});
				}, delay * i)
			}(i, that))
			}); 
			$('.fa-bars').fadeOut(100,function(){
			$(this)
				.removeClass('fa-bars')
				.addClass('fa-times')
				.fadeIn(); 
			});
		})
		.on('click', '#bubble, .fa-times', function(){ 
			$('#bubble').fadeOut();
			$('#mainnav').find('li')
			.animate(
				{ 'left'   : '-550px' }, 
				{ duration : 250 })
			.fadeOut({queue: false});
			
			$('.hamb').fadeOut(100, function(){
			$(this)
				.find($('i'))
				.removeClass('fa-times')
				.addClass('fa-bars')
				.end()
				.fadeIn();
			});
		}) 		
	</script>
</html>
