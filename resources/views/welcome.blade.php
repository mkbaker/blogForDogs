@extends('layout')

@section('welcome')
            <!-- Banner -->
            <!--
	            To use a video as your background, set data-video to the name of your video without
	            its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
	            formats to work correctly.
            -->         
	        <section id="banner" data-video="/images/banner">
	        	<div class="inner">
	        		<h1>Blog for Dogs</h1>
	        		<p>A portfolio project using Laravel. Content for the well-informed pupperino.</p>
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
									<p>{{Str::words($post->body, $words = 100, $end = '...')}}</p>
									<center>
										<a href="/posts/{{$post->id}}">
											<button>Read More</button>
										</a>
									</center>
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
								<h3>Laravel</h3>
							</header>
							<p>I made this project to explore routing and data management with Laravel. Learn more about this PHP framework at this link.</p>
							<ul class="actions">
								<li><a href="http://www.laravel.com" target="_blank" class="button alt">Learn More</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>Artisan</h3>
							</header>
							<p>I used the Artisan CLI to create most of the files that make up this site. It's a really powerful tool!</p>
							<ul class="actions">
								<li><a href="https://laravel.com/docs/5.8/artisan" target="_blank" class="button alt">Learn More</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>Adopt a Dog</h3>
							</header>
							<p>There's a dog near you that needs a home. Consider adopting today!</p>
							<ul class="actions">
								<li><a href="https://www.humanesociety.org/" target="_blank" class="button alt">Learn More</a></li>
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
									<p>This is an "about the author" section</p>
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
						<h2>Thanks for visiting!</h2>
						<p>Please check out my full portfolio at <a href="http://www.kellenbaker.com" target="_blank">kellenbaker.com</a>.</p>
					</header>

				</div>
			</section>
@endsection
