
@extends('layout')

@section('content')
<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
						<span class="icon fa-diamond major"></span>
						<h2></h2>
						<p>Melodify is an attempt to algorithmically generate four bars of melody with the goal to facilitate the brainstorming process for composers.
                           The underlying mechanism of this algorithm is a Markov Model for determining subsequent notes and beats. We built the model by analyzing numerous music sheets to strengthen the resemblance between melodies algorithmically generated and those traditionally composed.
                           In addition, we manipulated the Markov Model to convey specific emotions through analyzing chord progressions, beats, and tempo of existing compositions that have been scientifically proven to convey that emotion. 
                           Limitations are set based on basic music theory concepts.</p>
						<ul class="actions">
							<li><a href="http://algorhythm.online/?fbclid=IwAR2KfETPYdN8Pfe6V7sujhaE7vdp9zc-vj6UpeLX8bkxN9AomfcVR1dzSXs" class="button big">Melodify your thoughts now!</a></li>
						</ul>
					</section>

				<!-- Items -->
					{{-- <section class="main items">
						<article class="item">
							<header>
								<a href="#"><img src="images/pic01.jpg" alt="" /></a>
								<h3>Feugiat et faucibus</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="images/pic02.jpg" alt="" /></a>
								<h3>Blandit adipiscing</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="images/pic03.jpg" alt="" /></a>
								<h3>Lorem massa nulla</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="images/pic04.jpg" alt="" /></a>
								<h3>Ipsum sed tempus</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article>
					</section> --}}

				<!-- CTA -->
					<section id="cta" class="main special">
						<h2><a href="/login" class="button big">Join our community today!</a></h2>
						<p>Sign in/ sign up to keep a log of your Melodified thoughts and emotions for your compositional inspirations.</p>
					</section>

				<!-- Main -->
				<!--
					<section id="main" class="main">
						<header>
							<h2>Lorem ipsum dolor</h2>
						</header>
						<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</section>
				-->

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Melodify. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
					</footer>

			</div>

@endsection