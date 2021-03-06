@extends ('layout')

@section('latest-posts')
			<section class="header-background"></section>
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
									<center><a href="/posts/{{$post->id}}"><button>Read More</button></a></center>
			            		</div>
			            	</div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>
@endsection