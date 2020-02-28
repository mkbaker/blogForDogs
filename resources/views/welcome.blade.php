<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Blog for Dogs</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo">
                    <a href="/">
                        Blog for Dogs<span> a project by Kellen Baker</span>
                    </a>
                </div>
				<a href="#menu" class="toggle">
                    <span>Menu</span>
                </a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="/">Home</a></li>
					<li><a href="/posts">Posts</a></li>
					<li><a href="/kellen">Meet the Developer</a></li>
				</ul>
			</nav>

            <!-- Banner -->
            <!--
	            To use a video as your background, set data-video to the name of your video without
	            its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
	            formats to work correctly.
            -->         
	        <section id="banner" data-video="/images/banner">
	        	<div class="inner">
	        		<h1>Blog for Dogs</h1>
	        		<p>A portfolio project using Laravel and based on the very silly concept that dogs need something to read online.</p>
	        		<a href="#one" class="button special scrolly">Sniff Around</a>
	        	</div>
            </section>
    

		<!-- One -->
			<section id="one" class="wrapper style2">
                <h1>Latest Posts</h1>
                <div class="inner">
		            <div class="grid-style">
                    @foreach($posts as $post)
			            <div>
			            	<div class="box">
			            		<div class="image fit">
                                    <img src="{{$post->photo_url}}" alt="" />
			            		</div>
			            		<div class="content">
			            			<header class="align-center">
			            				<h2>{{$post->title}}</h2>
			            				<p>{{$post->excerpt}}</p>
			            			</header>
			            			<hr />
                                    <p>{{$post->body}}</p>
			            		</div>
			            	</div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<div id="flexgrid">
						<div>
							<header>
								<h3>Tempus Feugiat</h3>
							</header>
							<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>Aliquam Nulla</h3>
							</header>
							<p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed </p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>Sed Magna</h3>
							</header>
							<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<div>
						<div class="box">
							<div class="image fit">
                                <img src="https://images.unsplash.com/photo-1569145128494-9ebff3f617eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80" alt="" />
							</div>
							<div class="content">
								<header class="align-center">
									<h2>Little Dog, Big World</h2>
									<p>Most angery pupper I have ever seen much</p>
								</header>
								<hr />
                                <p> Clouds big ol pupper I am bekom fat corgo, noodle horse vvv. Aqua doggo smol borking doggo with a long snoot for pats very hand that feed shibe, mlem.</p>
                                <p>Dat tungg tho heckin very taste wow doing me a frighten pupperino boof, wow very biscit corgo borking doggo snoot. Dat tungg tho blep pupper boofers noodle horse, heckin I am bekom fat porgo h*ck, you are doing me the shock doge mlem. The neighborhood pupper borkdrive woofer pupperino ruff, heckin good boys what a nice floof long woofer big ol pupper doge, very jealous pupper smol mlem. What a nice floof the neighborhood pupper pupper long doggo, stop it fren.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style3">
				<div class="inner">

					<header class="align-center">
						<h2>Morbi interdum mollis sapien</h2>
						<p>Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
					</header>

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
							<div class="content">
								<h2 class="align-center">Get in Touch</h2>
								<hr />
								<form action="#" method="post">
									<div class="field half first">
										<label for="name">Name</label>
										<input name="name" id="name" type="text" placeholder="Name">
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input name="email" id="email" type="email" placeholder="Email">
									</div>
									<div class="field">
										<label for="dept">Department</label>
										<div class="select-wrapper">
											<select name="dept" id="dept">
												<option value="">- Category -</option>
												<option value="1">Manufacturing</option>
												<option value="1">Shipping</option>
												<option value="1">Administration</option>
												<option value="1">Human Resources</option>
											</select>
										</div>
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
									</div>
									<ul class="actions align-center">
										<li><input value="Send Message" class="button special" type="submit"></li>
									</ul>
								</form>
							</div>
						</div>
					</section>
					<div class="copyright">
						&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>. Video <a href="http://coverr.co/">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/skel.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>