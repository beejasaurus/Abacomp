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
        <h1 class="color-green pull-left">Test your knowledge</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('learning') }}">Learning Center</a> <span class="divider">/</span></li>
            <li class="active">Test your knowledge</li>
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
                	<li><a href="#" class="web">Beginner</a></li>
                	<li><a href="#" class="ios">Intermediate</a></li>
                	<li><a href="#" class="print">Advanced</a></li>
                </ul>
            </div>
            
            <ul class="portfolio recent-work clearfix"> 
                <li data-id="id-1" class="ios">
                    <a href="{{ URL::to('learning/practice/game1') }}">
                    	<em class="overflow-hidden"><img src="{{ asset('assets/plugins/portfolioSorting/img/2.jpg') }}" alt="" /></em>
                        <span>
                            <strong>Addition Beginner Test</strong>
                            <i>Basic Addition</i>
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

