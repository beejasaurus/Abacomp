@extends('master')

@section('title')
Practice Games - Abacomps
@endsection

@section('head_items')
<link rel="stylesheet" href="{{ asset('assets/plugins/bxslider/jquery.bxslider.css') }}">
@stop

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left">Addition - Level 1</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/')}}">Home</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('learning')}}">Learning Center</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('learning/practice')}}">Practice Games</a> <span class="divider">/</span></li>
            <li class="active">Addition - Level 1</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container portfolio-item"> 	
	<div class="row-fluid margin-bottom-20"> 
		<!-- Carousel -->
        <div class="span7">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('assets/img/games/add_level1/MtFuji_Display_lg.png') }}" alt="Adding Game Start Menu">
                        <div class="carousel-caption">
                            <h4>Addition - Level 1</h4>
                            <p>Hit the Play button on the right to get started. Scroll through for instructions.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/games/add_level1/add_level1_1.png') }}" alt="Adding Game Start Menu">
                        <div class="carousel-caption">
                            <h4>Add using 2 rows</h4>
                            <p>Select the number of digits and hit start</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/games/add_level1/add_level1_2.png') }}" alt="">
                        <div class="carousel-caption">
                            <h4>Type in your answer</h4>
                            <p>Just type your answer in and hit Enter or the Check Button</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/games/add_level1/add_level1_3.png') }}" alt="">
                        <div class="carousel-caption">
                            <h4>Get the highest score</h4>
                            <p>You will instantly be told if your answer is right or wrong. Watch your score soar at the top left</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/games/add_level1/add_level1_4.png') }}" alt="">
                        <div class="carousel-caption">
                            <h4>Make a mistake</h4>
                            <p>If you get a wrong answer, you'll see an X and you'll be given what you should have put in</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-arrow">
                    <a data-slide="prev" href="#myCarousel" class="left carousel-control"><i class="icon-angle-left"></i></a>
                    <a data-slide="next" href="#myCarousel" class="right carousel-control"><i class="icon-angle-right"></i></a>
                </div>
            </div>
        </div><!--/span7-->
        <!-- //End Tabs and Carousel -->
        
        <div class="span5">
        	<h3>Addition - Level 1</h3>
            <p>This is the first in the series of adding games. You will be given 2 numbers to add together. Select the number of digits at the top and earn more points! Get a right answer and you win points, get a wrong answer and you will be told what you should have written down</p>
            <p>Can you get the highest score? Beat your friends by adding together big number. The more you play, the more points you'll earn.</p>
            <ul class="unstyled">
            	<li><i class="icon-user color-green"></i> Bryan Neva [Author Name]</li>
            	<li><i class="icon-calendar color-green"></i> 13 Jun 2013 [Upload Date]</li>
            	<li><i class="icon-user color-green"></i> Bryan Neva [Current High Score Holder]</li>
            	<li><i class="icon-tags color-green"></i> Adding, Accuracy [Keyword Tags]</li>
            </ul>
            <p><a href="{{ asset('assets/games/Addition Level 1/index.html') }}" class="btn-u btn-u-large" href="#">PLAY Addition - Level 1</a></p>
        </div>
    </div><!--/row-fluid-->

	<!-- Recent Works -->
    <div class="headline"><h3>Related Games</h3></div>
    <div class="row-fluid margin-bottom-40">
        <ul id="list" class="bxslider recent-work">
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/2.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 3</strong>
                        <i>Anim pariatur cliche reprehenderit</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/9.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 7</strong>
                        <i>Responsive Bootstrap Template</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/4.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 8</strong>
                        <i>Pariatur prehe cliche reprehrit</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/5.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 11</strong>
                        <i>Craft labore wes anderson cred</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/6.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 12</strong>
                        <i>Anim pariatur cliche reprehenderit</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/7.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 1</strong>
                        <i>Responsive Bootstrap Template</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/8.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 2</strong>
                        <i>Pariatur prehe cliche reprehrit</i>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="{{ asset('assets/img/carousel/9.jpg') }}" alt="" /></em>
                    <span>
                        <strong>Game 4</strong>
                        <i>Craft labore wes anderson cred</i>
                    </span>
                </a>
            </li>
        </ul>        
	</div><!--/row-->
	<!-- //End Recent Works -->                
</div><!--/container-->	 	
<!--=== End Content Part ===-->
@stop

@section('js_items')
<script type="text/javascript" src="{{ asset('assets/plugins/bxslider/jquery.bxslider.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initBxSlider1();
    });
</script>
@stop

