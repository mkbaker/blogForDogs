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
		<script src="https://kit.fontawesome.com/ac14f55a6d.js" crossorigin="anonymous"></script>
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
					<li><a href="http://www.kellenbaker.com" target="_blank">Meet the Developer</a></li>
				</ul>
            </nav>
            
            @yield('welcome')
            
            @yield('latest-posts')

            @yield('post')
		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					<div class="copyright">
						&copy; Kellen Baker 2020. Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>. Video <a href="http://coverr.co/">Coverr</a>.
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