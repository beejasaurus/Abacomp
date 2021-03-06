@extends('alt/master2')

@section('title')
About Us - Abacomps
@endsection

@section('body')
<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="pull-left">About Us</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a> <span class="divider">/</span></li>
            <li class="active">About Us</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid margin-bottom-30">
    	<div class="span6">
            <p>Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone. Lorem sequat ipsum dolor lorem sit amet, consectetur adipiscing dolor elit. Unify is an incredibly beautiful responsive Bootstrap Template for It works on all major web.</p>
            <ul class="unstyled">
                <li><i class="icon-ok color-green"></i> Donec id elit non mi porta gravida</li>
                <li><i class="icon-ok color-green"></i> Corporate and Creative</li>
                <li><i class="icon-ok color-green"></i> Responsive Bootstrap Template</li>
                <li><i class="icon-ok color-green"></i> Elit non mi porta gravida</li>
                <li><i class="icon-ok color-green"></i> Award winning digital agency</li>
            </ul><br />

            <!-- Blockquotes -->
            <blockquote>
                <p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why.</p>
                <small>CEO Jack Bour</small>
            </blockquote>
        </div>
    	<div class="span6">
            <iframe src="http://player.vimeo.com/video/9679622" width="100%" height="327" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
        </div>
    </div><!--/row-fluid-->

	<!-- Meer Our Team -->
	<div class="headline"><h3>Meer Our Team</h3></div>
    <ul class="thumbnails team">
        <li class="span3">
            <div class="thumbnail-style">
                <img src="{{ asset('assets/img/others/2.jpg') }}" alt="" />
                <h3><a>Jack Bour</a> <small>Chief Executive Officer / CEO</small></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                <ul class="unstyled inline">
                	<li><a href="#"><i class="icon-facebook"></i></a></li>
                	<li><a href="#"><i class="icon-twitter"></i></a></li>
                	<li><a href="#"><i class="icon-google-plus"></i></a></li>
                </ul>
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail-style">
                <img src="{{ asset('assets/img/others/7.jpg') }}" alt="" />
                <h3><a>Kate Metus</a> <small>Project Manager</small></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                <ul class="unstyled inline team">
                	<li><a href="#"><i class="icon-facebook"></i></a></li>
                	<li><a href="#"><i class="icon-twitter"></i></a></li>
                	<li><a href="#"><i class="icon-google-plus"></i></a></li>
                </ul>
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail-style">
                <img src="{{ asset('assets/img/others/3.jpg') }}" alt="" />
                <h3><a>Porta Gravida</a> <small>VP of Operations</small></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                <ul class="unstyled inline team">
                	<li><a href="#"><i class="icon-facebook"></i></a></li>
                	<li><a href="#"><i class="icon-twitter"></i></a></li>
                	<li><a href="#"><i class="icon-google-plus"></i></a></li>
                </ul>
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail-style">
                <img src="{{ asset('assets/img/others/6.jpg') }}" alt="" />
                <h3><a>Donec Elit</a> <small>Director, R &amp; D Talent</small></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                <ul class="unstyled inline team">
                	<li><a href="#"><i class="icon-facebook"></i></a></li>
                	<li><a href="#"><i class="icon-twitter"></i></a></li>
                	<li><a href="#"><i class="icon-google-plus"></i></a></li>
                </ul>
            </div>
        </li>
    </ul><!--/thumbnails-->
	<!-- //End Meer Our Team -->

</div><!--/container-->		
<!--=== End Content Part ===-->
@stop

