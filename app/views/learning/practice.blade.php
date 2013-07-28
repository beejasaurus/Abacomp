@extends('master')

@section('title')
Practice Games - Abacomps
@endsection

@section('head_items')
<link rel="stylesheet" href="{{ asset('assets/plugins/portfolioSorting/css/sorting.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bxslider/jquery.bxslider.css') }}">
@stop

@section('body')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left">Practice Games</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="{{ URL::to('learning') }}">Learning Center</a> <span class="divider">/</span></li>
            <li class="active">Practice Games</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container"> 	
	<div class="row-fluid">
		<!-- Addition Games -->
	    <div class="headline"><h3>Addition & Subtraction</h3></div>
	    <div class="row-fluid margin-bottom-40">
	        <ul id="list" class="bxslider recent-work">
	            <li>
	                <a href="{{ URL::to('learning/games/add_level1') }}">
	                	<em class="overflow-hidden"><img src="{{ asset('assets/img/games/add_level1/MtFuji_Display.png') }}" alt="" /></em>
	                    <span>
	                        <strong>Level 1</strong>
	                        <i>2 rows, up to 5 digits</i>
	                    </span>
	                </a>
	            </li>            
	        </ul>        
		</div><!--/row-->
		
    </div><!--/row-fluid-->         
</div><!--/container-->	 	
<!--=== End Content Part ===-->
@stop

@section('js_items')
<script type="text/javascript" src="{{ asset('assets/plugins/portfolioSorting/js/jquery.quicksand.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/portfolioSorting/js/sorting.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/bxslider/jquery.bxslider.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initBxSlider1();
    });
</script>
@stop

