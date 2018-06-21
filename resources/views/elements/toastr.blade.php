@extends('layouts.template')
@section('content')
<link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/toastr/toastr.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/advanced/toastr.css">
 <div class="page-header">
  <h1 class="page-title font_kufi">Toastr </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">Toastr</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <!-- Example Simple Alerts -->
          <div class="example-wrap">
            <h4 class="example-title">Simple Alerts</h4>
            <p>Provide contextual feedback messages for typical user actions with
              the handful of available and flexible alert messages. We provide
              two alerts style for you to choice by switching class <code>.toast-shadow</code>              and <code>.toast</code>. Wrap any text and an optional dismiss button
              in <code>.toast</code> and one of the four contextual classes (e.g.,
              <code>.toast-info</code>) for basic alert messages. </p>
            <div class="row">
              <div class="col-sm-6">
                <div class="example-wrap">
                  <div class="toast-example" id="exampleToastrInfo" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it's not super important."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-info" role="alert">
                    <div class="toast toast-just-text toast-info">
                      <button class="toast-close-button" aria-label="Close" type="button" role="button">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="toast-message">
                        <strong>Heads up!</strong> This alert needs your attention, but
                        it's not super important.</div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrSuccess" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-success" role="alert">
                    <div class="toast toast-just-text toast-success">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="toast-message">
                        <strong>Well done!</strong> You successfully read this important
                        alert message.</div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrError" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Oh snap!&lt;/strong&gt; Change a few things up and try submitting again."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-error" role="alert">
                    <div class="toast toast-just-text toast-error">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="toast-message">
                        <strong>Oh snap!</strong> Change a few things up and try submitting
                        again.
                      </div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrWarning" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;WARNING:&lt;/strong&gt; Better check yourself, you're not looking too good."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-warning" role="alert">
                    <div class="toast toast-just-text toast-warning">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="toast-message">
                        <strong>WARNING:</strong> Better check yourself, you're not looking
                        too good.</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="example-wrap">
                  <div class="toast-example" id="exampleToastrInfoShadow" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it's not super important."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-info toast-shadow" role="alert">
                    <div class="toast toast-just-text toast-shadow toast-info">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="toast-message">
                        <strong>Heads up!</strong> This alert needs your attention, but
                        it's not super important.</div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrSuccessShadow" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-success toast-shadow"
                  role="alert">
                    <div class="toast toast-just-text toast-shadow toast-success">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="toast-message">
                        <strong>Well done!</strong> You successfully read this important
                        alert message.</div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrErrorShadow" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-error toast-shadow" role="alert">
                    <div class="toast toast-just-text toast-shadow toast-error">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="toast-message">
                        <strong>Oh snap!</strong> Change a few things up and try submitting
                        again.
                      </div>
                    </div>
                  </div>
                  <div class="toast-example" id="exampleToastrWarningShadow" aria-live="polite" data-plugin="toastr"
                  data-message="&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message."
                  data-container-id="toast-top-right" data-position-class="toast-top-right"
                  data-icon-class="toast-just-text toast-warning toast-shadow"
                  role="alert">
                    <div class="toast toast-just-text toast-shadow toast-warning">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="toast-message">
                        <strong>WARNING:</strong> Better check yourself, you're not looking
                        too good.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Example Simple Alerts -->
          <div class="row">
            <div class="col-sm-12">
              <!-- Example Positions -->
              <div class="example-wrap">
                <h4 class="example-title">Positions</h4>
                <p>Click the button below you will see the notification display from
                  four direction on the screen.</p>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="example-wrap">
                      <div class="bg-blue-grey-100 position-example">
                        <div class="text-center">
                          <div class="row">
                            <div class="col-sm-4 margin-bottom-10">
                              <a class="btn btn-block btn-primary" id="exampleTopLeft" data-plugin="toastr" data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-top-left" data-position-class="toast-top-left"
                              href="javascript:void(0)" role="button">Top Left</a>
                            </div>
                            <div class="col-sm-4 margin-bottom-10">
                              <a class="btn btn-block btn-primary" id="exampleTopCenter" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-top-center" data-position-class="toast-top-center"
                              href="javascript:void(0)" role="button">Top Center</a>
                            </div>
                            <div class="col-sm-4 margin-bottom-10">
                              <a class="btn btn-block btn-primary" id="exampleTopRight" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-top-right" data-position-class="toast-top-right"
                              href="javascript:void(0)" role="button">Top Right</a>
                            </div>
                          </div>
                        </div>
                        <div class="text-center" style="bottom: 0;">
                          <div class="row">
                            <div class="col-sm-4 margin-top-10">
                              <a class="btn btn-block btn-primary" id="exampleBottomLeft" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-bottom-left" data-position-class="toast-bottom-left"
                              href="javascript:void(0)" role="button">Bottom Left</a>
                            </div>
                            <div class="col-sm-4 margin-top-10">
                              <a class="btn btn-block btn-primary" id="exampleBottomCenter" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-bottom-center" data-position-class="toast-bottom-center"
                              href="javascript:void(0)" role="button">Bottom Center</a>
                            </div>
                            <div class="col-sm-4 margin-top-10">
                              <a class="btn btn-block btn-primary" id="exampleBottomRight" data-plugin="toastr"
                              data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                              data-container-id="toast-bottom-right" data-position-class="toast-bottom-right"
                              href="javascript:void(0)" role="button">Bottom Right</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="example-wrap">
                      <div class="bg-blue-grey-100 position-example padding-20">
                        <a class="btn btn-primary btn-block" id="exampleTopFullWidth" data-plugin="toastr"
                        data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                        data-container-id="toast-topFullWidth" data-position-class="toast-top-full-width"
                        data-show-method="slideDown" href="javascript:void(0)"
                        role="button">Top Full Width</a>
                        <a class="btn btn-primary btn-block" id="exampleBottomFullWidth" data-plugin="toastr"
                        data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                        data-container-id="toast-bottomFullWidth" data-position-class="toast-bottom-full-width"
                        data-show-method="slideDown" href="javascript:void(0)"
                        role="button">Bottom Full Width</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Example Positions -->
            </div>
          </div>
          <div class="row row-lg">
            <div class="col-lg-4 col-sm-6">
              <!-- Example Just Text Notifacations -->
              <div class="example-wrap">
                <h4 class="example-title">Just Text Notifacations</h4>
                <p>This notification was just texts included, use the class.</p>
                <div class="example">
                  <div class="toast-example padding-0" aria-live="polite" role="alert">
                    <div class="toast toast-just-text toast-info">
                      <div class="toast-title">Message</div>
                      <div class="toast-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    </div>
                  </div>
                  <a class="btn btn-primary btn-outline" id="exampleJustText" data-plugin="toastr"
                  data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-title="Messages" data-icon-class="toast-just-text toast-info"
                  href="javascript:void(0)" role="button">Generate</a>
                </div>
              </div>
              <!-- End Example Just Text Notifacations -->
            </div>
            <div class="col-lg-4 col-sm-6">
              <!-- Exmaple Close Button Notifacations -->
              <div class="example-wrap">
                <h4 class="example-title">Close Button Notifacations</h4>
                <p>You can close this notification with clicking close icon.</p>
                <div class="example">
                  <div class="toast-example padding-0" aria-live="polite" role="alert">
                    <div class="toast toast-just-text toast-info">
                      <button type="button" class="toast-close-button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="toast-message">Messages</div>
                      <div class="toast-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    </div>
                  </div>
                  <a class="btn btn-primary btn-outline" id="exampleCloseButton" data-plugin="toastr"
                  data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-title="Messages" data-container-id="toast-top-right" data-close-button="true"
                  data-tap-to-dismiss="false" data-icon-class="toast-just-text toast-info"
                  href="javascript:void(0)" role="button">Generate</a>
                </div>
              </div>
              <!-- End Exmaple Close Button Notifacations -->
            </div>
            <div class="col-lg-4 col-sm-6">
              <!-- Example Progress Notifications -->
              <div class="example-wrap">
                <h4 class="example-title">Progress Notifications</h4>
                <p>Visually indicate how long before a toast expires.</p>
                <div class="example">
                  <div class="toast-example padding-0" aria-live="polite" role="alert">
                    <div class="toast toast-just-text toast-info">
                      <div class="toast-progress" style="width: 62.82%;"></div>
                      <div class="toast-title">Messages</div>
                      <div class="toast-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    </div>
                  </div>
                  <a class="btn btn-primary btn-outline" id="exampleProgressBar" data-plugin="toastr"
                  data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-title="Messages" data-container-id="toast-top-right" data-progress-bar="true"
                  data-icon-class="toast-just-text toast-info" href="javascript:void(0)"
                  role="button">Progress Bar</a>
                </div>
              </div>
              <!-- End Example Progress Notifications -->
            </div>
            <div class="clearfix visible-lg-block"></div>
            <div class="col-sm-6">
              <!-- Example Delay And Sticky -->
              <div class="example-wrap margin-sm-0">
                <h4 class="example-title">Delay And Sticky</h4>
                <p>You can define via <code>timeout</code> for what amount of time
                  in milliseconds a message is visible. You can also create a sticky
                  message by setting the timeout to zero.</p>
                <div class="example example-buttons">
                  <a class="btn btn-primary btn-outline" id="exampleDelay5s" data-plugin="toastr"
                  data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-time-out="5000" href="javascript:void(0)"
                  role="button">Delay 5s</a>
                  <a class="btn btn-primary btn-outline" id="sticky" data-plugin="toastr" data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-time-out="0" href="javascript:void(0)"
                  role="button">Sticky</a>
                </div>
              </div>
              <!-- End Example Delay And Sticky -->
            </div>
            <div class="clearfix visible-md-block visible-sm-block"></div>
            <div class="col-sm-6">
              <!-- Example Effect -->
              <div class="example-wrap">
                <h4 class="example-title">Effect</h4>
                <p>Use the jQuery show/hide method of your choice. These default to
                  fadeIn/fadeOut. The methods fadeIn/fadeOut, slideDown/slideUp,
                  and show/hide are built into jQuery.</p>
                <div class="example example-buttons">
                  <a class="btn btn-primary btn-outline" id="fadeIn" data-plugin="toastr" data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-show-method="fadeIn"
                  href="javascript:void(0)" role="button">FadeIn</a>
                  <a class="btn btn-primary btn-outline" id="slideDown" data-plugin="toastr" data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  data-container-id="toast-top-right" data-show-method="slideDown"
                  href="javascript:void(0)" role="button">SlideDown</a>
                </div>
              </div>
              <!-- End Example Effect -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Notifications -->
    </div>
<br/>

@stop