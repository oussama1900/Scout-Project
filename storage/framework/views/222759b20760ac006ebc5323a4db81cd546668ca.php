<?php $__env->startSection('content'); ?>
 
<body class="page-login layout-full page-dark">
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
	data-animsition-out="fade-out">
	
	<div class="page-content vertical-align-middle" style="background: rgba(40, 41, 41, 0.17);">
      <div class="brand">
	  <img class="navbar-brand-logo" style="height:50px" src="<?php echo e(URL::to('/images/faleh-logo.png')); ?>" title="faleh logo"/>
        <h2 class="brand-text"> <?php echo e(trans('app.scoutspace')); ?></h2>
      </div>
      <p> <?php echo e(trans('app.sing_into_your_pages_account')); ?></p>
       <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>         
		 
		<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
					
						<input  style="    font-family: Arial,Segoe UI, Tahoma, Geneva, Verdana,sans-serif !important;" id="email" type="text" class="form-control" placeholder="<?php echo e(trans('app.login_creds')); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

						<?php if($errors->has('email')): ?>
							<span class="help-block">
								<strong><?php echo e($errors->first('email')); ?></strong>
							</span>
						<?php endif; ?>					
				</div>
			
		 <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">			
				<input id="password"  style="    font-family: Arial,Segoe UI, Tahoma, Geneva, Verdana,sans-serif !important;" type="password" required class="form-control" name="password" placeholder="<?php echo e(trans('app.password')); ?>">

				<?php if($errors->has('password')): ?>
					<span class="help-block">
						<strong><?php echo e($errors->first('password')); ?></strong>
					</span>
				<?php endif; ?>
		</div>
		
          <div class="form-group clearfix">
		 
            <div class="checkbox-custom checkbox-inline checkbox-primary pull-right">


              <input type="checkbox" id="remember" name="checkbox" title="remember">
				<label ></label>
            </div>
			  <span class="pull-right" style="margin-right:5px;margin-top:5px"><?php echo e(trans('app.remember_me')); ?><span style="font-family: Arial,Segoe UI, Tahoma, Geneva, Verdana,sans-serif !important;"><?php echo e(trans('app.question_mark')); ?></span></span>


			  <a class="pull-left" style="margin-top:5px" href="<?php echo e(url('/password/reset')); ?>"><?php echo e(trans('app.forget_password')); ?> <span style="font-family: Arial,Segoe UI, Tahoma, Geneva, Verdana,sans-serif !important;"><?php echo e(trans('app.question_mark')); ?></span></a>
			  
			
		  </div>
          <!--<button type="submit" class="btn btn-primary btn-block" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading.."><?php echo e(trans('app.sign_in')); ?></button>-->
        
		<button type="submit" class="btn btn-primary ladda-button btn-block" data-plugin="ladda" data-style="expand-left">
			  <?php echo e(trans('app.sign_in')); ?>

		<span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0;"></div>
		</button>
		
		</form>
		 <!--p><?php echo e(trans('app.still_no_account_please_go_to')); ?> <a href="<?php echo e(url('/register')); ?>"> <?php echo e(trans('app.register')); ?> </a></p-->
      <!--footer style="padding:20px">          
          <div class="social">           
            <a class="btn btn-icon btn-round social-facebook" href="<?php echo e(url('/redirect/facebook')); ?>">
              <i class="icon bd-facebook" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-google-plus" href="<?php echo e(url('/redirect/google')); ?>">
              <i class="icon bd-google-plus" aria-hidden="true"></i>
            </a>
			 <a class="btn btn-icon btn-round social-twitter" href="<?php echo e(url('/redirect/twitter')); ?>">
              <i class="icon bd-twitter" aria-hidden="true"></i>
            </a>
          </div>
        </footer-->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>