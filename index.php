<!DOCTYPE html>
<html lang="en-US">
<head>

	<title>MINA LI</title>

	<meta name = "Mina Li" content= "A redone website." />
	<meta charset="utf-8">

</head>

<?php include('php/sources.php'); ?>

<body>
	<div id="hidden">
		<img src="img/splash/splash-japanesegarden-s.jpg" />
		<img src="img/splash/splash-eiffel-s.jpg" />
		<img src="img/splash/splash-latte-s.jpg" />
		<img src="img/splash/splash-notredame-s.jpg" />
		<img src="img/blue-circle.png" />
		<img src="img/purple-circle.png" />
		<img src="img/green-circle.png" />
		<img src="img/orange-circle.png" />
		<img src="img/blue-circle-m.png" />
		<img src="img/purple-circle-m.png" />
		<img src="img/green-circle-m.png" />
		<img src="img/orange-circle-m.png" />
	</div>
	<div class="content">

		<section id="home">
			<h1>Mina Li</h1>
			<div id="splash">
				<img src="img/splash/splash-japanesegarden-s.jpg" />
				<img src="img/splash/splash-eiffel-s.jpg" />
				<img src="img/splash/splash-latte-s.jpg" />
				<img src="img/splash/splash-notredame-s.jpg" />
			</div>
		</section>



		<section id="about-me">
			<h2>About me</h2>
			<div id="me-text">
				Hello! Welcome to my newly re-designed website.<br /><br />
				A number of sections have been redone or collapsed together, but regardless, I hope you enjoy your stay.
				Do let me know if you see any issues with the webiste, and I'll fix it as soon as I can.
				<br /><br /><br />
				<h4>Who am I?</h4>
				My name is Mina Li. I am a third-year Computer Science major in University of California, Berkeley, and am planning on graduating May 2015.
				Time passed a lot more quickly than I ever thought it would, and now I'm looking for a full-time position starting in the summer.
				<br /><br />
				Primarily, I'm interested in doing work that is personally and socially meaningful. I think technology has a great capabilities for changing 
				the way society operates and I want to see it change for the better around me. 
				<br /><br />
				That being said, I still don't know exactly what I want to do, but I'm open-minded and like to try new things, so 
				I'll probably keep trying out whatever opportunities come my way until I figure it out.
				<br /><br /><br />
				<h4>Academic and Professional Life</h4>
				UC Berkeley: <a href="php/coursework.php">Coursework</a><br />
				Resume: <a href="files/MINA_LI-RESUME.pdf" target=_blank>PDF</a><br />
				News: <a href="php/news.php">Articles</a><br />
			</div>
			<div id="face">
				<img src="img/about-me/face-crop-s.jpg"/>
			</div>
		</section>

		

		<section id="contact-me">
			<h2>Contact Me</h2>
			Here's how you get in contact with me.<br /><br />

			<h3>Professional:</h3>
			<strong>Email</strong> - <a href="mailto:li.mina888@berkeley.edu" target=_blank>li.mina888@berkeley.edu</a><br />
			<strong>Phone</strong> - <a href="tel:7817715366" target=_blank>781-771-5366</a><br />
			<strong>LinkedIn</strong> - <a href="http://www.linkedin.com/in/limina" target=_blank>Mina Li</a><br />
			<strong>InternMatch</strong> - <a href="http://profiles.internmatch.com/users/209310" target=_blank>Mina Li</a><br /><br />
			<h3>Personal Life:</h3>
			<strong>Tumblr</strong> - <a href="http://beautyinyourlines.tumblr.com/" target=_blank>Beauty in Your Lines</a><br>
			<strong>Twitter</strong> - <a href="https://twitter.com/Mina_Online" target=_blank>@Mina_Online</a>
			<div id="zen">
				<img src="img/contact-me/zengarden-stone.jpg" />
			</div>

		</section>

		

		<section id="code">
			<h2>Code</h2>
			<div id="qualifications">
				<strong>GitHub</strong> - <a href="https://github.com/LiMina" target=_blank>LiMina</a><br /><br />
				Unfortunately, most of my repositories are private because they're used for work purposes, but you can see 
				this website on there.
				<br /><br />
				<h3>Languages</h3>
				Here is a listing of languages I know, have worked with, and dabbled with.
				<ul>
					<li>Python</li>
					<li>Java</li>
					<li>C</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>Javascript/JQuery</li>
					<li>PHP</li>
					<li>MIPS</li>
					<li>Ida (specifically in <a href="http://www-inst.eecs.berkeley.edu/~cs61c/sp14/projs/04/manual.html" target=_blank>this project</a>)</li>
					<li>MySQL</li>
					<li>RoR</li>
				</ul>
			</div>
			<div id="example">
				<img src="img/code/example.png" />
			</div>
		</section>


		<section id="art">
			<h2>Art</h2>
			Under development.
			<div class="container-fluid">
				<div class="row">
					<div class="pbox col-xs-5">
						<h4>Drawings</h4>
						<img class="art" src="img/assorted-art/Drawings/3.jpg" />
					</div>
					<div class="col-xs-2"></div>
					<div class="pbox col-xs-5">
						<h4>Photos</h4>
						<img class="photos" src="img/assorted-art/Photos/6.jpg" />
					</div>
				</div>
				<div class="row">
					<div class="pbox col-xs-5">
						<h4>Self Portraits</h4>
						<img class="self-portraits" src="img/assorted-art/Self-Portraits/0.jpg" />
					</div>
					<div class="col-xs-2"></div>
					<div class="pbox col-xs-5">
						<h4>Modeling</h4>
						<img class="modeling" src="img/assorted-art/Modeling/7.jpg" />
					</div>
				</div>
			</div>
		</section>

	</div>

	<?php include('php/carousel.php'); ?>

	<footer>
		<ul>
			<li class="pulse"><a class="p-link" href="#about-me"><div>About me</div></a></li>
			<li class="pulse"><a class="p-link" href="#contact-me"><div>Contact me</div></a></li>
			<li class="pulse"><a class="p-link" href="#code"><div>Code</div></a></li>
			<li class="pulse"><a class="p-link" href="#art"><div>Assorted art</div></a></li>
		</ul>
		<div id="home"><a class="home" href="#home">Home.</a></div>
	</footer>

</body>
</html>
