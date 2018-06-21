@extends('layouts.template')
@section('content')
 <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/plyr/plyr.css">
<div class="page-header">
  <h1 class="page-title font_kufi">Cover </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">Cover</li>
	</ol>
  </div>
</div> 
  <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Video & Audio -->
              <div class="example-wrap">
                <h4 class="example-title">Video & Audio</h4>
                <div class="example">
                  <div class="cover plyr">
                    <video poster="{{URL::to('/')}}/assets/examples/images/poster.jpg" controls crossorigin>
                      <!-- Video Files -->
                      <source type="video/mp4" src="https://cdn.selz.com/plyr/1.0/movie.mp4">
                      <source type="video/webm" src="https://cdn.selz.com/plyr/1.0/movie.webm">
                      <!-- Text Track File -->
                      <track kind="captions" label="English" srclang="en" src="//cdn.selz.com/plyr/1.0/en.vtt"
                      default>
                        <!-- Fallback For Browsers That Don'T Support The <Video> Element -->
                        <a href="https://cdn.selz.com/plyr/1.0/movie.mp4">Download</a>
                    </video>
                  </div>
                </div>
                <div class="example">
                  <div class="cover plyr">
                    <audio controls>
                      <!-- Audio Files -->
                      <source type="audio/mp3" src="https://cdn.selz.com/plyr/1.0/logistics-96-sample.mp3">
                      <source type="audio/ogg" src="https://cdn.selz.com/plyr/1.0/logistics-96-sample.ogg">
                      <!-- Fallback For Browsers That Don'T Support The <Audio> Element -->
                      <a href="https://cdn.selz.com/plyr/1.0/logistics-96-sample.mp3">Download</a>
                    </audio>
                  </div>
                </div>
              </div>
              <!-- End Example Video & Audio -->
            </div>
            <div class="col-sm-6">
              <!-- Example Quote -->
              <div class="example-wrap">
                <h4 class="example-title">Quote</h4>
                <p>Add the <code>.cover-quote</code> class to a text.</p>
                <div class="example">
                  <div class="cover">
                    <blockquote class="cover-quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                      nec odio. </blockquote>
                  </div>
                </div>
                <p>Quote with background</p>
                <div class="example">
                  <div class="cover">
                    <div class="cover-background padding-vertical-30" style="background-image: url('{{URL::to('/')}}/global/photos/placeholder.png')">
                      <blockquote class="cover-quote white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer nec odio. </blockquote>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Quote -->
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
              <!-- Example Iframe -->
              <div class="example-wrap">
                <h4 class="example-title">Iframe</h4>
                <p>Add the <code>.cover-iframe</code> class to the iframe item.</p>
                <div class="example">
                  <div class="cover">
                    <iframe class="cover-iframe height-500 height-xs-300" src="http://www.youtube.com/embed/YE7VzlLtp-4?autoplay=0&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;enablejsapi=1&amp;api=1"></iframe>
                  </div>
                </div>
              </div>
              <!-- Example Iframe -->
            </div>
            <div class="col-sm-6">
              <!-- Example Background Image -->
              <div class="example-wrap">
                <h4 class="example-title">Background Image</h4>
                <p>Add the <code>.cover-background</code> class to an element with
                  a background image.</p>
                <div class="example">
                  <div class="cover height-500 height-xs-300">
                    <div class="cover-background" style="background-image: url('{{URL::to('/')}}/global/photos/placeholder.png')"></div>
                  </div>
                </div>
              </div>
              <!-- Example Background Image -->
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6">
              <!-- Example Responsive Image -->
              <div class="example-wrap margin-sm-0">
                <h4 class="example-title">Responsive Image</h4>
                <p>Add the <code>.cover-image</code> class to a responsive image.</p>
                <div class="example">
                  <div class="cover">
                    <img class="cover-image" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="...">
                  </div>
                </div>
              </div>
              <!-- End Example Responsive Image -->
            </div>
            <div class="col-sm-6">
              <!-- Example Gallery -->
              <div class="example-wrap">
                <h4 class="example-title">Gallery</h4>
                <p>Add the <code>.cover-gallery</code> class to a gallery.</p>
                <div class="example">
                  <div class="cover">
                    <div class="cover-gallery carousel slide" id="cover-gallery-example" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li class="active" data-target="#cover-gallery-example" data-slide-to="0"></li>
                        <li data-target="#cover-gallery-example" data-slide-to="1"></li>
                        <li data-target="#cover-gallery-example" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img alt="First slide" src="{{URL::to('/')}}/global/photos/placeholder.png">
                        </div>
                        <div class="item">
                          <img alt="Second  slide" src="{{URL::to('/')}}/global/photos/placeholder.png">
                        </div>
                        <div class="item">
                          <img alt="Third  slide" src="{{URL::to('/')}}/global/photos/placeholder.png">
                        </div>
                      </div>
                      <!-- Controls -->
                      <a class="left carousel-control" href="#cover-gallery-example" data-slide="prev"
                      role="button">
                        <span class="icon wb-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#cover-gallery-example" data-slide="next"
                      role="button">
                        <span class="icon wb-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Gallery -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>
<br/>

@stop