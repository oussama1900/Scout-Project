@extends('layouts.template')
@section('content')
 <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/slick-carousel/slick.css">
 <link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/uikit/carousel.css">
 <div class="page-header">
  <h1 class="page-title font_kufi">Carousel</h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">Carousel</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <!-- Panel Carousel -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Carousel</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Default -->
              <div class="example-wrap margin-lg-0">
                <h4 class="example-title">Default</h4>
                <p>A slideshow component for cycling through elements, like a carousel.</p>
                <div class="example">
                  <div class="carousel slide" id="exampleCarouselDefault" data-ride="carousel">
                    <ol class="carousel-indicators carousel-indicators-fall">
                      <li class="active" data-slide-to="0" data-target="#exampleCarouselDefault"></li>
                      <li class="" data-slide-to="1" data-target="#exampleCarouselDefault"></li>
                      <li class="" data-slide-to="2" data-target="#exampleCarouselDefault"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..."
                        />
                      </div>
                      <div class="item">
                        <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..."
                        />
                      </div>
                      <div class="item">
                        <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..."
                        />
                      </div>
                    </div>
                    <a class="left carousel-control" href="#exampleCarouselDefault" role="button" data-slide="prev">
                      <span class="icon wb-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#exampleCarouselDefault" role="button"
                    data-slide="next">
                      <span class="icon wb-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Example Default -->
            </div>
            <div class="col-lg-6">
              <!-- Example Captions -->
              <div class="example-wrap">
                <h4 class="example-title">Captions</h4>
                <p>Add captions to your slides easily with the <code>.carousel-caption</code>                  element within any item.</p>
                <div class="example">
                  <div class="carousel slide" id="exampleCarouselCaptions" data-ride="carousel">
                    <ol class="carousel-indicators carousel-indicators-fillin">
                      <li class="active" data-slide-to="0" data-target="#exampleCarouselCaptions"></li>
                      <li class="" data-slide-to="1" data-target="#exampleCarouselCaptions"></li>
                      <li class="" data-slide-to="2" data-target="#exampleCarouselCaptions"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..."
                        />
                        <div class="carousel-caption">
                          <h3>First Slide Label</h3>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                      </div>
                      <div class="item">
                        <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..."
                        />
                        <div class="carousel-caption">
                          <h3>Second Slide Label</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          </p>
                        </div>
                      </div>
                      <div class="item">
                        <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..."
                        />
                        <div class="carousel-caption">
                          <h3>Third Slide Label</h3>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                          </p>
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#exampleCarouselCaptions" role="button"
                    data-slide="prev">
                      <span class="icon wb-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#exampleCarouselCaptions" role="button"
                    data-slide="next">
                      <span class="icon wb-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Example Captions -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Carousel -->
      <!-- Panel Slick -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Slick
            <small><a class="example-plugin-link" href="#"
              target="_blank">official website</a></small>
          </h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-6">
              <!-- Example Single Item -->
              <div class="example-wrap">
                <h4 class="example-title">Single Item</h4>
                <div class="example">
                  <div class="slider" id="exampleSingleItem">
                    <div>
                      <h3>1</h3>
                    </div>
                    <div>
                      <h3>2</h3>
                    </div>
                    <div>
                      <h3>3</h3>
                    </div>
                    <div>
                      <h3>4</h3>
                    </div>
                    <div>
                      <h3>5</h3>
                    </div>
                    <div>
                      <h3>6</h3>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Single Item -->
            </div>
            <div class="col-md-6">
              <!-- Example Multiple Items -->
              <div class="example-wrap">
                <h4 class="example-title">Multiple Items</h4>
                <div class="example">
                  <div class="slider" id="exampleMultipleItems">
                    <div>
                      <h3>1</h3>
                    </div>
                    <div>
                      <h3>2</h3>
                    </div>
                    <div>
                      <h3>3</h3>
                    </div>
                    <div>
                      <h3>4</h3>
                    </div>
                    <div>
                      <h3>5</h3>
                    </div>
                    <div>
                      <h3>6</h3>
                    </div>
                    <div>
                      <h3>7</h3>
                    </div>
                    <div>
                      <h3>8</h3>
                    </div>
                    <div>
                      <h3>9</h3>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Multiple Items -->
            </div>
            <div class="clearfix visible-md-block visible-lg-block"></div>
            <div class="col-md-6">
              <!-- Example Responsive Display -->
              <div class="example-wrap">
                <h4 class="example-title">Responsive Display</h4>
                <div class="example">
                  <div class="slider" id="exampleResponsive">
                    <div>
                      <h3>1</h3>
                    </div>
                    <div>
                      <h3>2</h3>
                    </div>
                    <div>
                      <h3>3</h3>
                    </div>
                    <div>
                      <h3>4</h3>
                    </div>
                    <div>
                      <h3>5</h3>
                    </div>
                    <div>
                      <h3>6</h3>
                    </div>
                    <div>
                      <h3>7</h3>
                    </div>
                    <div>
                      <h3>8</h3>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Responsive Display -->
            </div>
            <div class="col-md-6">
              <!-- Example Variable Width -->
              <div class="example-wrap">
                <h4 class="example-title">Variable Width</h4>
                <div class="example">
                  <div class="slider" id="exampleVariableWidth">
                    <div class="width-200">
                      <h3>200</h3>
                    </div>
                    <div class="width-150">
                      <h3>150</h3>
                    </div>
                    <div class="width-250">
                      <h3>250</h3>
                    </div>
                    <div class="width-300">
                      <h3>300</h3>
                    </div>
                    <div class="width-100">
                      <h3>100</h3>
                    </div>
                    <div class="width-350">
                      <h3>350</h3>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Variable Width -->
            </div>
            <div class="clearfix visible-md-block visible-lg-block"></div>
            <div class="col-md-6">
              <!-- Example Adaptive Height -->
              <div class="example-wrap">
                <h4 class="example-title">Adaptive Height</h4>
                <div class="example">
                  <div class="slider" id="exampleAdaptiveHeight">
                    <div>
                      <h3>1</h3>
                    </div>
                    <div>
                      <h3>2</h3>
                      <p>Look ma!</p>
                    </div>
                    <div>
                      <h3>3</h3>
                      <p>Check
                        <br/>this out!</p>
                    </div>
                    <div>
                      <h3>4</h3>
                      <p>Woo!</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Adaptive Height -->
            </div>
            <div class="col-md-6">
              <!-- Example Data Attribute Settings -->
              <div class="example-wrap">
                <h4 class="example-title">Data Attribute Settings</h4>
                <div class="example">
                  <div class="slider" id="exampleData" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                    <div>
                      <h3>1</h3>
                    </div>
                    <div>
                      <h3>2</h3>
                    </div>
                    <div>
                      <h3>3</h3>
                    </div>
                    <div>
                      <h3>4</h3>
                    </div>
                    <div>
                      <h3>5</h3>
                    </div>
                    <div>
                      <h3>6</h3>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Data Attribute Settings -->
            </div>
            <div class="clearfix visible-md-block visible-lg-block"></div>
            <div class="col-md-6">
              <!-- Example Center Mode -->
              <div class="example-wrap">
                <h4 class="example-title">Center Mode</h4>
                <div class="example">
                  <div class="slider" id="exampleCenter">
                    <div>
                      <h3>1</h3>
                    </div>
                    <div>
                      <h3>2</h3>
                    </div>
                    <div>
                      <h3>3</h3>
                    </div>
                    <div>
                      <h3>4</h3>
                    </div>
                    <div>
                      <h3>5</h3>
                    </div>
                    <div>
                      <h3>6</h3>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Center Mode -->
            </div>
            <div class="col-md-6">
              <!-- Example Lazy Loading -->
              <div class="example-wrap">
                <h4 class="example-title">Lazy Loading</h4>
                <div class="example">
                  <div class="slider" id="exampleLazy">
                    <div>
                      <img class="img-responsive" alt="..." data-lazy="{{URL::to('/')}}/global/photos/placeholder.png"
                      />
                    </div>
                    <div>
                      <img class="img-responsive" alt="..." data-lazy="{{URL::to('/')}}/global/photos/placeholder.png"
                      />
                    </div>
                    <div>
                      <img class="img-responsive" alt="..." data-lazy="{{URL::to('/')}}/global/photos/placeholder.png"
                      />
                    </div>
                    <div>
                      <img class="img-responsive" alt="..." data-lazy="{{URL::to('/')}}/global/photos/placeholder.png"
                      />
                    </div>
                    <div>
                      <img class="img-responsive" alt="..." data-lazy="{{URL::to('/')}}/global/photos/placeholder.png"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Lazy Loading -->
            </div>
            <div class="clearfix visible-md-block visible-lg-block"></div>
            <div class="col-md-6">
              <!-- Example Autoplay -->
              <div class="example-wrap">
                <h4 class="example-title">Autoplay</h4>
                <div class="example">
                  <div class="slider" id="exampleAutoplay">
                    <div>
                      <h3>1</h3>
                    </div>
                    <div>
                      <h3>2</h3>
                    </div>
                    <div>
                      <h3>3</h3>
                    </div>
                    <div>
                      <h3>4</h3>
                    </div>
                    <div>
                      <h3>5</h3>
                    </div>
                    <div>
                      <h3>6</h3>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Autoplay -->
            </div>
            <div class="col-md-6">
              <!-- Example Fade -->
              <div class="example-wrap">
                <h4 class="example-title">Fade</h4>
                <div class="example">
                  <div class="slider" id="exampleFade">
                    <div>
                      <img class="img-responsive" alt="..." data-lazy="{{URL::to('/')}}/global/photos/placeholder.png"
                      />
                    </div>
                    <div>
                      <img class="img-responsive" alt="..." data-lazy="{{URL::to('/')}}/global/photos/placeholder.png"
                      />
                    </div>
                    <div>
                      <img class="img-responsive" alt="..." data-lazy="{{URL::to('/')}}/global/photos/placeholder.png"
                      />
                    </div>
                    <div>
                      <img class="img-responsive" alt="..." data-lazy="{{URL::to('/')}}/global/photos/placeholder.png"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Fade -->
            </div>
            <div class="clearfix visible-md-block visible-lg-block"></div>
            <div class="col-md-6">
              <!-- Example Add & Remove -->
              <div class="example-wrap margin-md-0">
                <h4 class="example-title">Add & Remove</h4>
                <div class="example example-buttons">
                  <div class="slider" id="exampleAddRemove">
                    <div>
                      <h3>1</h3>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary btn-outline" id="exampleAddSlide">Add Slide</button>
                  <button type="button" class="btn btn-primary btn-outline" id="exampleRemoveSlide">Remove Slide</button>
                </div>
              </div>
              <!-- End Example Add & Remove -->
            </div>
            <div class="col-md-6">
              <!-- Example Filtering -->
              <div class="example-wrap">
                <h4 class="example-title">Filtering</h4>
                <div class="example">
                  <div class="slider" id="exampleFiltering">
                    <div>
                      <h3>1</h3>
                    </div>
                    <div>
                      <h3>2</h3>
                    </div>
                    <div>
                      <h3>3</h3>
                    </div>
                    <div>
                      <h3>4</h3>
                    </div>
                    <div>
                      <h3>5</h3>
                    </div>
                    <div>
                      <h3>6</h3>
                    </div>
                    <div>
                      <h3>7</h3>
                    </div>
                    <div>
                      <h3>8</h3>
                    </div>
                    <div>
                      <h3>9</h3>
                    </div>
                    <div>
                      <h3>10</h3>
                    </div>
                    <div>
                      <h3>11</h3>
                    </div>
                    <div>
                      <h3>12</h3>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary btn-outline" id="exampleFilter">Filtering</button>
                </div>
              </div>
              <!-- End Example Filtering -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Slick -->
      <!-- Panel Owlcarousel -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Owlcarousel
            <small><a class="example-plugin-link" href="https://github.com/smashingboxes/OwlCarousel2"
              target="_blank">official website</a></small>
          </h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example No Margins -->
              <div class="example-wrap">
                <h4 class="example-title">No Margins</h4>
                <p>Image carousels allow users to browse through a set of items and
                  make a selection of one if they so choose. Typically, the images
                  are hyperlinked.</p>
                <div class="example">
                  <div class="owl-carousel" data-plugin="owlCarousel" data-center="false" data-dots="false"
                  data-nav="true">
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example No Margins -->
            </div>
            <div class="col-lg-6">
              <!-- Example Centered -->
              <div class="example-wrap">
                <h4 class="example-title">Centered</h4>
                <p>This carousel slider will let you enable swipe for desktop and
                  mobile devices dragging to view through dozens of images fast.
                  In order for the images to auto fit to slider containers use
                  width 100%.</p>
                <div class="example">
                  <div class="owl-carousel-centered" data-plugin="owlCarousel" data-center="true"
                  data-dots="false" data-nav="true">
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                    <div class="item">
                      <img src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Centered -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Logos -->
              <div class="example-wrap margin-lg-0">
                <h4 class="example-title">Logos</h4>
                <p>Partner logo image was usefully show by carousel style.</p>
                <div class="example">
                  <div class="owl-carousel-shortcode" data-plugin="owlCarousel" data-center="true"
                  data-dots="true" data-nav="false">
                    <div class="item">
                      <i class="icon font-size-40 margin-right-15 bd-facebook" aria-hidden="true"></i>                      Facebook
                    </div>
                    <div class="item">
                      <i class="icon font-size-40 margin-right-15 bd-twitter" aria-hidden="true"></i>                      Twitter
                    </div>
                    <div class="item">
                      <i class="icon font-size-40 margin-right-15 bd-google-plus" aria-hidden="true"></i>                      Google Plus
                    </div>
                    <div class="item">
                      <i class="icon font-size-40 margin-right-15 bd-linkedin" aria-hidden="true"></i>                      Linkedin
                    </div>
                    <div class="item">
                      <i class="icon font-size-40 margin-right-15 bd-html5" aria-hidden="true"></i>                      HTML5
                    </div>
                    <div class="item">
                      <i class="icon font-size-40 margin-right-15 bd-css3" aria-hidden="true"></i>                      CSS3
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Logos -->
            </div>
            <div class="col-lg-6">
              <!-- Example Sample Portfolio -->
              <div class="example-wrap">
                <h4 class="example-title">Sample Portfolio</h4>
                <p>You can also add title and excerpt text below the gallery images
                  when you click it ,the lightbox displayed.</p>
                <div class="example margin-bottom-0">
                  <div class="owl-carousel-portfolio owl-carousel-navOut" data-plugin="owlCarousel"
                  data-margin="30">
                    <div class="item">
                      <div class="cover">
                        <img class="cover-image" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="...">
                      </div>
                      <h4>Lorem Ipsum Dolor</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer nec odio. </p>
                    </div>
                    <div class="item">
                      <div class="cover">
                        <img class="cover-image" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="...">
                      </div>
                      <h4>Lorem Ipsum Dolor</h4>
                      <p>Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
                        Nulla quis sem at. </p>
                    </div>
                    <div class="item">
                      <div class="cover">
                        <img class="cover-image" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="...">
                      </div>
                      <h4>Lorem Ipsum Dolor</h4>
                      <p>ed nisi. Nulla quis sem at nibh elementum imperdiet. Lorem
                        ipsum dolor sit. </p>
                    </div>
                    <div class="item">
                      <div class="cover">
                        <img class="cover-image" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="...">
                      </div>
                      <h4>Lorem Ipsum Dolor</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer nec odio. </p>
                    </div>
                    <div class="item">
                      <div class="cover">
                        <img class="cover-image" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="...">
                      </div>
                      <h4>Lorem Ipsum Dolor</h4>
                      <p>Integer nec odio. Praesent libero. Sed cursus ante dapibus
                        diam. Sed nisi. </p>
                    </div>
                    <div class="item">
                      <div class="cover">
                        <img class="cover-image" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="...">
                      </div>
                      <h4>Lorem Ipsum Dolor</h4>
                      <p>Consectetur adipiscing elit. Integer nec odio. Praesent libero.
                        Sed cursus. </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Sample Portfolio -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>
<br/>

@stop