@extends ('layout')

@section('post')
    <section class="header-background"></section>
			<section id="one" class="wrapper style2">
                <div class="inner">
		            <div>
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
                            <center><a href='/posts'><button>Back</button></a></center>
                        </div>
                    </div>
                </div>
            </section>
@endsection