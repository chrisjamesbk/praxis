<?php
	// set up page variables
	$path = "../..";
	$pageid = "media";
	$pagetitle = "Media";
	
    // insert header
	include($path."/_includes/php/header.php");
?>

		<section>
			
			<h1>Photos</h1>
			
			<article id="gallery">
				
				<img class="feat" src="../../_includes/img/praxis11_orchestra2.jpg" alt="Praxis gallery" />
				
				<ul class="clearfix">
					<li><a href="../../_includes/img/praxis11_orchestra2.jpg"><img src="../../_includes/img/praxis11_orchestra2-thumb.jpg"></a></li>
					<li><a href="../../_includes/img/praxis11_nathan.jpg"><img src="../../_includes/img/praxis11_nathan-thumb.jpg"></a></li>
					<li><a href="../../_includes/img/praxis11_student.jpg"><img src="../../_includes/img/praxis11_student-thumb.jpg"></a></li>
					<li><a href="../../_includes/img/praxis11_strings.jpg"><img src="../../_includes/img/praxis11_strings-thumb.jpg"></a></li>
					<li><a href="../../_includes/img/praxis11_nathan2.jpg"><img src="../../_includes/img/praxis11_nathan2-thumb.jpg"></a></li>
					<li><a href="../../_includes/img/praxis11_mentoring.jpg"><img src="../../_includes/img/praxis11_mentoring-thumb.jpg"></a></li>
					<li><a href="../../_includes/img/praxis11_violin.jpg"><img src="../../_includes/img/praxis11_violin-thumb.jpg"></a></li>
					<li><a href="../../_includes/img/praxis11_anna.jpg"><img src="../../_includes/img/praxis11_anna-thumb.jpg"></a></li>
					<li><a href="../../_includes/img/praxis11_orchestra.jpg"><img src="../../_includes/img/praxis11_orchestra-thumb.jpg"></a></li>
				</ul>
				
			</article>
		
		</section>
		
		<section class="videos">
			
			<h1>Videos</h1>
			
			<article>
				
				<iframe src="http://player.vimeo.com/video/29631890?title=0&amp;byline=0&amp;portrait=0" width="960" height="536" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
			
			</article>
				
			<article>
				
				<iframe src="http://player.vimeo.com/video/20367393?title=0&amp;byline=0&amp;portrait=0" width="960" height="536" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
			
			</article>
		
		</section>
		
		<section>
			
			<h1>Audio</h1>
			
			<article>
				
				<p>Mozart: Symphony No. 40 in G minor, K. 550, IV. Allegro assai.</p>
				<p>Recorded live at the Stephen Wise Free Synagogue in NYC, 2011.</p>
				
				<object type="application/x-shockwave-flash" data="../../_includes/swf/dewplayer.swf" width="200" height="20" id="dewplayer" name="dewplayer">
				<param name="movie" value="../../_includes/swf/dewplayer.swf" />
				<param name="flashvars" value="mp3=../../_includes/media/MozartIV.mp3" />
				<param name="wmode" value="transparent" />
				</object>
			
			</article>
		
		</section>
		
		<script>
		
			$('#gallery ul li a').click(function(){
			
				// gather anchor tag's href attribute value
				var src = $(this).attr('href');

				// fade out current #bg img & fade in new img
				$('#gallery img.feat').stop().animate({opacity:'0'},200,function(){
					$(this).attr('src',src);
				}).load(function(){
					$(this).stop().animate({opacity:'1'});
				});

				// prevents anchor default
			    return false;
			});
		
		</script>

<?php
	// insert footer
	include($path."/_includes/php/footer.php");
?>