<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/examples/css/widgets/social.css">
  <div class="page-header">
  <h1 class="page-title font_lato">Material </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active">Material</li>
	</ol>
  </div>
</div> 
 <div class="page-content container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <!-- Panel Static Lables -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Static Lables</h3>
            </div>
            <div class="panel-body container-fluid">
              <form autocomplete="off">
                <div class="form-group form-material">
                  <label class="control-label" for="inputText">Text</label>
                  <input type="text" class="form-control" id="inputText" name="inputText" placeholder="Text"
                  />
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email"
                  />
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="inputPassword"
                  placeholder="Password" />
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputFile">File</label>
                  <input type="text" class="form-control" placeholder="Browse.." readonly="" />
                  <input type="file" id="inputFile" name="inputFile" multiple="" />
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="textarea">Textarea</label>
                  <textarea class="form-control" id="textarea" name="textarea" rows="3"></textarea>
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="select">Select</label>
                  <select class="form-control" id="select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="selectMulti">Multi Select</label>
                  <select class="form-control" id="selectMulti" multiple="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputDisabled">Input Disabled</label>
                  <input type="text" class="form-control" id="inputDisabled" placeholder="Input Disabled"
                  disabled>
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputFocus">Input Focus</label>
                  <input type="text" class="form-control focus" id="inputFocus" placeholder="Input Focus">
                </div>
                <div class="form-group form-material has-warning">
                  <label class="control-label" for="inputWarning">Input Warning</label>
                  <input type="text" class="form-control" id="inputWarning" placeholder="Input Warning">
                </div>
                <div class="form-group form-material has-error">
                  <label class="control-label" for="inputError">Input Error</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Input Error">
                </div>
                <div class="form-group form-material has-success">
                  <label class="control-label" for="inputSuccess">Input Success</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="Input Success">
                </div>
                <div class="form-group form-material has-info">
                  <label class="control-label" for="inputInfo">Input Info</label>
                  <input type="text" class="form-control" id="inputInfo" placeholder="Input Info">
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputSmall">Small Input</label>
                  <input type="text" class="form-control input-sm" id="inputSmall" name="inputSmall"
                  placeholder="Small Input" />
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputSmall">Default Input</label>
                  <input type="text" class="form-control" id="inputDefault" name="inputDefault" placeholder="Default Input"
                  />
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputSmall">Large Input</label>
                  <input type="text" class="form-control input-lg" id="inputLarge" name="inputLarge"
                  placeholder="Large Input" />
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputHint">Input Hint</label>
                  <input type="text" class="form-control" id="inputHint" name="inputHint" placeholder="Input Hint"
                  data-hint="Write here something cool" />
                </div>
                <div class="form-group form-material">
                  <label class="control-label" for="inputAddons">Input addons</label>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <div class="form-control-wrap">
                      <input type="text" class="form-control" id="inputAddons" />
                    </div>
                    <span class="input-group-btn">
                      <button class="btn btn-outline btn-default" type="button">Button</button>
                    </span>
                  </div>
                </div>
                <div class="form-group form-material row">
                  <div class="col-sm-6">
                    <label class="control-label" for="inputGrid1">Input Grid</label>
                    <input type="text" class="form-control" id="inputGrid1" name="inputGrid1" placeholder="col-sm-6"
                    />
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label" for="inputGrid2">Input Grid</label>
                    <input type="text" class="form-control" id="inputGrid2" name="inputGrid2" placeholder="col-sm-6"
                    />
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End Panel Static Lables -->
        </div>
        <div class="col-sm-6">
          <!-- Panel Floating Lables -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Floating Lables</h3>
            </div>
            <div class="panel-body container-fluid">
              <form autocomplete="off">
                <div class="form-group form-material floating">
                  <input type="text" class="form-control" name="inputFloatingText" />
                  <label class="floating-label">Text</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="email" class="form-control" name="inputFloatingEmail" />
                  <label class="floating-label">Email</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="password" class="form-control" name="inputFloatingPassword" />
                  <label class="floating-label">Password</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="text" class="form-control" readonly="" />
                  <input type="file" name="inputFloatingFile" multiple="" />
                  <label class="floating-label">Browse..</label>
                </div>
                <div class="form-group form-material floating">
                  <textarea class="form-control" rows="3" name="textareaFloating"></textarea>
                  <label class="floating-label">Textarea</label>
                </div>
                <div class="form-group form-material floating">
                  <select class="form-control">
                    <option>&nbsp;</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  <label class="floating-label">Select</label>
                </div>
                <div class="form-group form-material floating">
                  <label class="floating-label floating-label-static">Multi Select</label>
                  <select class="form-control" multiple="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group form-material floating">
                  <input type="text" class="form-control" disabled>
                  <label class="floating-label">Input Disabled</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="text" class="form-control focus">
                  <label class="floating-label">Input Focus</label>
                </div>
                <div class="form-group form-material floating has-warning">
                  <input type="text" class="form-control">
                  <label class="floating-label">Input Warning</label>
                </div>
                <div class="form-group form-material floating has-error">
                  <input type="text" class="form-control">
                  <label class="floating-label">Input Error</label>
                </div>
                <div class="form-group form-material floating has-success">
                  <input type="text" class="form-control">
                  <label class="floating-label">Input Success</label>
                </div>
                <div class="form-group form-material floating has-info">
                  <input type="text" class="form-control">
                  <label class="floating-label">Input Info</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="text" class="form-control input-sm" name="inputFloatingSmall" />
                  <label class="floating-label">Small Input</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="text" class="form-control" name="inputFloatingSmall" />
                  <label class="floating-label">Default Input</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="text" class="form-control input-lg" name="inputFloatingLarge" />
                  <label class="floating-label">Large Input</label>
                </div>
                <div class="form-group form-material floating">
                  <input type="text" class="form-control" name="inputFloatingHint" data-hint="Write here something cool"
                  />
                  <label class="floating-label">Input Hint</label>
                </div>
                <div class="form-group form-material floating">
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <div class="form-control-wrap">
                      <input type="text" class="form-control" />
                      <label class="floating-label">Input addons</label>
                    </div>
                    <span class="input-group-btn">
                      <button class="btn btn-outline btn-default" type="button">Button</button>
                    </span>
                  </div>
                </div>
                <div class="form-group form-material floating row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputFloatingGrid1" />
                    <label class="floating-label">Input Grid</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputFloatingGrid2" />
                    <label class="floating-label">Input Grid</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End Panel Floating Lables -->
        </div>
      </div>
    </div>
<br/>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>