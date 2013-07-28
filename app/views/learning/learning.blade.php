@extends('master')

@section('title')
Practice Games - Abacomps
@endsection

@section('head_items')
<link rel="stylesheet" href="{{ asset('assets/plugins/portfolioSorting/css/sorting.css') }}">
@stop

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left">Learning Center</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li class="active">Learning Center</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container"> 	
	<div class="row-fluid"> 
        <div id="w">    
            <div class="sort" id="sort">
				<ul class="unstyled inline">
                	<li><a href="#" class="all selected">All</a></li>
                	<li><a href="#" class="lessons">Lessons</a></li>
                	<li><a href="#" class="games">Games</a></li>
                	<li><a href="#" class="tests">Tests</a></li>
                </ul>
            </div>
            
            <ul class="portfolio recent-work clearfix"> 
                <li data-id="lesson1" class="lessons">
                    <a href="#">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/img/soroban.png') }}" alt="" /></em>
                        <span>
                            <strong>Lesson 1</strong>
                            <i>Just Learning the Basics</i>
                        </span>
                    </a>
                </li>
                <li data-id="add_level1" class="games">
                    <a href="{{ URL::to('learning/games/add_level1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/img/games/add_level1/MtFuji_Display.png') }}" alt="Lesson 1 - Learning the Soroban" /></em>
                        <span>
                            <strong>Addition - Level 1</strong>
                            <i>2 rows, up to 5 digits</i>
                        </span>
                    </a>
                </li>
                
            </ul>
        </div>                
    </div><!--/row-fluid-->         
</div><!--/container-->	 	
<!--=== End Content Part ===-->
@stop

@section('js_items')
<script type="text/javascript" src="{{ asset('assets/plugins/portfolioSorting/js/jquery.quicksand.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/portfolioSorting/js/sorting.js') }}"></script>
@stop

