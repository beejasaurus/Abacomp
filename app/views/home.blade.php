@extends('master')

@section('title')
Abacomps
@endsection

@section('slider')
<div id="headerIMG">
	<img src="{{ asset('assets/img/header.png') }}" alt="Header">
</div>
@stop

@section('body')
<!--=== Purchase Block ===-->
<div class="row-fluid purchase margin-bottom-30">
    <div class="container">
		<div class="span9">
            <span>Unlock your child's full potential with Abacus Mental Math! </span>
            <p>ABACOMPS is designed to help your child develop their Math, Computer, Memorization and Retention abilities.</p>
        </div>
        
        <a href="#" class="btn-buy hover-effect">Sign up now</a>       
    </div>
</div><!--/row-fluid-->
<!-- End Purchase Block -->

<!--=== Content Part ===-->
<div class="container">	
	<!-- Service Blocks -->
	<div class="row-fluid">
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-resize-small"></i>
    			<div class="desc">
    				<h4>Computer Learning</h4>
                    <p>With 20 computer stations, educational software, and art programs, we have the ability to teach children everything from internet research and safety to something else.</p>
    			</div>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-cogs"></i>
    			<div class="desc">
    				<h4>Mental math</h4>
                    <p>Children will learn to focus their mind as they grow. They will learn to imagine the abacus and see the beads move in their mind. These exercises will teach them to focus their concentration earlier than other children and with more precision.</p>
    			</div>
    		</div>	
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-plane"></i>
    			<div class="desc">
    				<h4>School Pick-Up</h4>
                    <p>We offer weekly programs, after school care, and summer camps. We transport from local elementary schools to pick up your children and get them here on time for Abacus class. We've got you covered!</p>
    			</div>
    		</div>	
    	</div>			    
	</div><!--/row-fluid-->
	<!-- //End Service Blokcs -->
	    
</div><!--/container-->		
<!-- End Content Part -->
@stop

