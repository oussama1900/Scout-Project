<?php $__env->startSection('content'); ?>
 <link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/examples/css/uikit/modals.css">
 <div class="page-header">
  <h1 class="page-title font_lato">Images </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active">Images</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <!-- Panel Image Style -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Image Style</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Images Shapes -->
              <div class="example-wrap">
                <h4 class="example-title">Images Shapes</h4>
                <p>Add classes to an <code>&lt;img&gt;</code> element to easily style
                  images in any project.</p>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="example">
                      <img class="img-rounded" width="150" height="150" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png"
                      alt="...">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="example">
                      <img class="img-circle" width="150" height="150" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png"
                      alt="...">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="example">
                      <img width="150" height="150" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Images Shapes -->
            </div>
            <div class="col-lg-6">
              <!-- Example Thumbnails - Default -->
              <div class="example-wrap">
                <h4 class="example-title">Thumbnails - Default</h4>
                <p>By default, thumbnails are designed to showcase linked images with
                  minimal required markup.</p>
                <div class="row">
                  <div class="col-xs-6 col-sm-3">
                    <div class="example">
                      <a class="thumbnail" href="javascript:void(0)">
                        <img src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3">
                    <div class="example">
                      <a class="thumbnail" href="javascript:void(0)">
                        <img src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3">
                    <div class="example">
                      <a class="thumbnail" href="javascript:void(0)">
                        <img src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-3">
                    <div class="example">
                      <a class="thumbnail" href="javascript:void(0)">
                        <img src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Thumbnails - Default -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-6">
              <!-- Example Images - Bordered -->
              <div class="example-wrap">
                <h4 class="example-title">Images - Bordered</h4>
                <p>An image may include a border to emphasize the edges of white or
                  transparent content.</p>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="example">
                      <img class="img-rounded img-bordered img-bordered-primary" width="150" height="150"
                      src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="example">
                      <img class="img-circle img-bordered img-bordered-orange" width="150" height="150"
                      src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="example">
                      <img class="img-rounded img-bordered img-bordered-green" width="150" height="150"
                      src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Images - Bordered -->
            </div>
            <div class="col-lg-6">
              <!-- Example Thumbnalis - Custom -->
              <div class="example-wrap">
                <h4 class="example-title">Thumbnalis - Custom Content</h4>
                <p>With a bit of extra markup, it's possible to add any kind of HTML
                  content like headings, paragraphs, or buttons into thumbnails.</p>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="example">
                      <div class="thumbnail">
                        <img src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                        <div class="caption">
                          <h4>Thumbnail Label</h4>
                          <p>Lorem ipsum Dolore nulla mollit consectetur enim est
                            adipisicing dolor exercitation do sed irure occaecat
                            labore in proident occaecat sunt dolore aliqua qui.</p>
                          <p><a class="btn btn-primary margin-right-5" href="javascript:void(0)"
                            role="button">Button</a><a class="btn btn-default"
                            href="javascript:void(0)" role="button">Button</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="example">
                      <div class="thumbnail">
                        <img src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                        <div class="caption">
                          <h4>Thumbnail Label</h4>
                          <p>Lorem ipsum Minim in in Ut officia cupidatat sed elit
                            do cillum in dolore aliquip et ullamco ea do nisi adipisicing
                            irure officia eiusmod quis eu labore ea.
                          </p>
                          <p><a class="btn btn-primary margin-right-5" href="javascript:void(0)"
                            role="button">Button</a><a class="btn btn-default"
                            href="javascript:void(0)" role="button">Button</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="example">
                      <div class="thumbnail">
                        <img src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                        <div class="caption">
                          <h4>Thumbnail Label</h4>
                          <p>Lorem ipsum Labore laborum nisi ex et ullamco in anim
                            enim minim anim id in sed dolor occaecat fugiat mollit
                            exercitation do in pariatur sint eu proident ad.</p>
                          <p><a class="btn btn-primary margin-right-5" href="javascript:void(0)"
                            role="button">Button</a><a class="btn btn-default"
                            href="javascript:void(0)" role="button">Button</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Thumbnalis - Custom -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-sm-12">
              <!-- Example Images - Responsive -->
              <div class="example-wrap">
                <h4 class="example-title">Images - Responsive</h4>
                <p>Images in Bootstrap 3 can be made responsive-friendly via the addition
                  of the <code>.img-responsive</code> class. This applies
                  <code>max-width: 100%;</code> and <code>height: auto;</code>                  to the image so that it scales nicely to the parent element.</p>
                <div class="example">
                  <img class="img-responsive" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="...">
                </div>
              </div>
              <!-- End Example Images - Responsive -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Image Style -->
    </div>
<br/>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>