@extends('layouts.template')
@section('content')
<link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/asrange/asRange.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/uikit/icon.css">
  <!-- Fonts -->
  
  <link rel="stylesheet" href="{{URL::to('/')}}/global/fonts/material-design/material-design.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  
<div class="page-header">
  <h1 class="page-title font_kufi">Material Icon </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/icons')}}">Icons</a></li>
		<li class="active">Material Icon</li>
	</ol>
  </div>
</div> 
 <div class="page-content container-fluid">
      <div class="row padding-vertical-30">
        <div class="col-sm-12 text-center">
          <h2>Search from Material Icon.</h2>
          <form role="search">
            <div class="input-search">
              <input type="text" class="form-control round" placeholder="Search icon...">
              <button type="submit" class="input-search-btn">
                <i class="icon wb-search" aria-hidden="true"></i>
              </button>
            </div>
          </form>
          <div class="margin-bottom-25">
            <div class="asRange" id="icon_change" data-plugin="asRange" data-namespace="rangeUi"
            data-step="1" data-min="16" data-max="64" data-value="24"></div>
            <span id="icon_size">24px</span>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Web Application</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="3d-rotation">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-3d-rotation" aria-hidden="true"></i>
                <div class="icon-title">3d-rotation</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airplane-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airplane-off" aria-hidden="true"></i>
                <div class="icon-title">airplane-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airplane">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airplane" aria-hidden="true"></i>
                <div class="icon-title">airplane</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="album">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-album" aria-hidden="true"></i>
                <div class="icon-title">album</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="archive">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-archive" aria-hidden="true"></i>
                <div class="icon-title">archive</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="assignment-account">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-assignment-account" aria-hidden="true"></i>
                <div class="icon-title">assignment-account</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="assignment-alert">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-assignment-alert" aria-hidden="true"></i>
                <div class="icon-title">assignment-alert</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="assignment-check">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-assignment-check" aria-hidden="true"></i>
                <div class="icon-title">assignment-check</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="assignment-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-assignment-o" aria-hidden="true"></i>
                <div class="icon-title">assignment-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="assignment-return">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-assignment-return" aria-hidden="true"></i>
                <div class="icon-title">assignment-return</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="assignment-returned">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-assignment-returned" aria-hidden="true"></i>
                <div class="icon-title">assignment-returned</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="assignment">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-assignment" aria-hidden="true"></i>
                <div class="icon-title">assignment</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="attachment-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-attachment-alt" aria-hidden="true"></i>
                <div class="icon-title">attachment-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="attachment">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-attachment" aria-hidden="true"></i>
                <div class="icon-title">attachment</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="audio">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-audio" aria-hidden="true"></i>
                <div class="icon-title">audio</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="badge-check">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-badge-check" aria-hidden="true"></i>
                <div class="icon-title">badge-check</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="balance-wallet">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-balance-wallet" aria-hidden="true"></i>
                <div class="icon-title">balance-wallet</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="balance">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-balance" aria-hidden="true"></i>
                <div class="icon-title">balance</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="battery-alert">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-battery-alert" aria-hidden="true"></i>
                <div class="icon-title">battery-alert</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="battery-flash">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-battery-flash" aria-hidden="true"></i>
                <div class="icon-title">battery-flash</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="battery-unknown">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-battery-unknown" aria-hidden="true"></i>
                <div class="icon-title">battery-unknown</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="battery">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-battery" aria-hidden="true"></i>
                <div class="icon-title">battery</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bike">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bike" aria-hidden="true"></i>
                <div class="icon-title">bike</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="block-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-block-alt" aria-hidden="true"></i>
                <div class="icon-title">block-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="block">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-block" aria-hidden="true"></i>
                <div class="icon-title">block</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="boat">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-boat" aria-hidden="true"></i>
                <div class="icon-title">boat</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="book-image">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-book-image" aria-hidden="true"></i>
                <div class="icon-title">book-image</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="book">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-book" aria-hidden="true"></i>
                <div class="icon-title">book</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bookmark-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bookmark-outline" aria-hidden="true"></i>
                <div class="icon-title">bookmark-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bookmark">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bookmark" aria-hidden="true"></i>
                <div class="icon-title">bookmark</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="brush">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-brush" aria-hidden="true"></i>
                <div class="icon-title">brush</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bug">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bug" aria-hidden="true"></i>
                <div class="icon-title">bug</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bus" aria-hidden="true"></i>
                <div class="icon-title">bus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cake">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cake" aria-hidden="true"></i>
                <div class="icon-title">cake</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="car-taxi">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-car-taxi" aria-hidden="true"></i>
                <div class="icon-title">car-taxi</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="car-wash">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-car-wash" aria-hidden="true"></i>
                <div class="icon-title">car-wash</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="car">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-car" aria-hidden="true"></i>
                <div class="icon-title">car</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="card-giftcard">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-card-giftcard" aria-hidden="true"></i>
                <div class="icon-title">card-giftcard</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="card-membership">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-card-membership" aria-hidden="true"></i>
                <div class="icon-title">card-membership</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="card-travel">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-card-travel" aria-hidden="true"></i>
                <div class="icon-title">card-travel</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="card">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-card" aria-hidden="true"></i>
                <div class="icon-title">card</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="case-check">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-case-check" aria-hidden="true"></i>
                <div class="icon-title">case-check</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="case-download">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-case-download" aria-hidden="true"></i>
                <div class="icon-title">case-download</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="case-play">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-case-play" aria-hidden="true"></i>
                <div class="icon-title">case-play</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="case">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-case" aria-hidden="true"></i>
                <div class="icon-title">case</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cast-connected">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cast-connected" aria-hidden="true"></i>
                <div class="icon-title">cast-connected</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cast">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cast" aria-hidden="true"></i>
                <div class="icon-title">cast</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chart-donut">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-chart-donut" aria-hidden="true"></i>
                <div class="icon-title">chart-donut</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chart">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-chart" aria-hidden="true"></i>
                <div class="icon-title">chart</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="city-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-city-alt" aria-hidden="true"></i>
                <div class="icon-title">city-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="city">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-city" aria-hidden="true"></i>
                <div class="icon-title">city</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="close-circle-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-close-circle-o" aria-hidden="true"></i>
                <div class="icon-title">close-circle-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="close-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-close-circle" aria-hidden="true"></i>
                <div class="icon-title">close-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="close">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-close" aria-hidden="true"></i>
                <div class="icon-title">close</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cocktail">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cocktail" aria-hidden="true"></i>
                <div class="icon-title">cocktail</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="code-setting">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-code-setting" aria-hidden="true"></i>
                <div class="icon-title">code-setting</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="code-smartphone">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-code-smartphone" aria-hidden="true"></i>
                <div class="icon-title">code-smartphone</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="code">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-code" aria-hidden="true"></i>
                <div class="icon-title">code</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="coffee">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-coffee" aria-hidden="true"></i>
                <div class="icon-title">coffee</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-bookmark">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-bookmark" aria-hidden="true"></i>
                <div class="icon-title">collection-bookmark</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-case-play">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-case-play" aria-hidden="true"></i>
                <div class="icon-title">collection-case-play</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-folder-image">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-folder-image" aria-hidden="true"></i>
                <div class="icon-title">collection-folder-image</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-image-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-image-o" aria-hidden="true"></i>
                <div class="icon-title">collection-image-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-image">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-image" aria-hidden="true"></i>
                <div class="icon-title">collection-image</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-1">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-1" aria-hidden="true"></i>
                <div class="icon-title">collection-item-1</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-2">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-2" aria-hidden="true"></i>
                <div class="icon-title">collection-item-2</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-3">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-3" aria-hidden="true"></i>
                <div class="icon-title">collection-item-3</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-4">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-4" aria-hidden="true"></i>
                <div class="icon-title">collection-item-4</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-5">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-5" aria-hidden="true"></i>
                <div class="icon-title">collection-item-5</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-6">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-6" aria-hidden="true"></i>
                <div class="icon-title">collection-item-6</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-7">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-7" aria-hidden="true"></i>
                <div class="icon-title">collection-item-7</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-8">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-8" aria-hidden="true"></i>
                <div class="icon-title">collection-item-8</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-9-plus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-9-plus" aria-hidden="true"></i>
                <div class="icon-title">collection-item-9-plus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item-9">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item-9" aria-hidden="true"></i>
                <div class="icon-title">collection-item-9</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-item">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-item" aria-hidden="true"></i>
                <div class="icon-title">collection-item</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-music">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-music" aria-hidden="true"></i>
                <div class="icon-title">collection-music</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-pdf">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-pdf" aria-hidden="true"></i>
                <div class="icon-title">collection-pdf</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-plus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-plus" aria-hidden="true"></i>
                <div class="icon-title">collection-plus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-speaker">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-speaker" aria-hidden="true"></i>
                <div class="icon-title">collection-speaker</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-text">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-text" aria-hidden="true"></i>
                <div class="icon-title">collection-text</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="collection-video">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-collection-video" aria-hidden="true"></i>
                <div class="icon-title">collection-video</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="compass">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-compass" aria-hidden="true"></i>
                <div class="icon-title">compass</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cutlery">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cutlery" aria-hidden="true"></i>
                <div class="icon-title">cutlery</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="delete">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-delete" aria-hidden="true"></i>
                <div class="icon-title">delete</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="dialpad">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-dialpad" aria-hidden="true"></i>
                <div class="icon-title">dialpad</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="dns">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-dns" aria-hidden="true"></i>
                <div class="icon-title">dns</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="drink">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-drink" aria-hidden="true"></i>
                <div class="icon-title">drink</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="edit">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-edit" aria-hidden="true"></i>
                <div class="icon-title">edit</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="email-open">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-email-open" aria-hidden="true"></i>
                <div class="icon-title">email-open</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="email">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-email" aria-hidden="true"></i>
                <div class="icon-title">email</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="eye-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-eye-off" aria-hidden="true"></i>
                <div class="icon-title">eye-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="eye">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-eye" aria-hidden="true"></i>
                <div class="icon-title">eye</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="eyedropper">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-eyedropper" aria-hidden="true"></i>
                <div class="icon-title">eyedropper</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="favorite-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-favorite-outline" aria-hidden="true"></i>
                <div class="icon-title">favorite-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="favorite">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-favorite" aria-hidden="true"></i>
                <div class="icon-title">favorite</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="filter-list">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-filter-list" aria-hidden="true"></i>
                <div class="icon-title">filter-list</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="fire">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-fire" aria-hidden="true"></i>
                <div class="icon-title">fire</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flag">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flag" aria-hidden="true"></i>
                <div class="icon-title">flag</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flare">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flare" aria-hidden="true"></i>
                <div class="icon-title">flare</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flash-auto">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flash-auto" aria-hidden="true"></i>
                <div class="icon-title">flash-auto</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flash-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flash-off" aria-hidden="true"></i>
                <div class="icon-title">flash-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flash">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flash" aria-hidden="true"></i>
                <div class="icon-title">flash</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flip">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flip" aria-hidden="true"></i>
                <div class="icon-title">flip</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flower-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flower-alt" aria-hidden="true"></i>
                <div class="icon-title">flower-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flower">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flower" aria-hidden="true"></i>
                <div class="icon-title">flower</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="font">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-font" aria-hidden="true"></i>
                <div class="icon-title">font</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="fullscreen-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-fullscreen-alt" aria-hidden="true"></i>
                <div class="icon-title">fullscreen-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="fullscreen-exit">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-fullscreen-exit" aria-hidden="true"></i>
                <div class="icon-title">fullscreen-exit</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="fullscreen">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-fullscreen" aria-hidden="true"></i>
                <div class="icon-title">fullscreen</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="functions">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-functions" aria-hidden="true"></i>
                <div class="icon-title">functions</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gas-station">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-gas-station" aria-hidden="true"></i>
                <div class="icon-title">gas-station</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gesture">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-gesture" aria-hidden="true"></i>
                <div class="icon-title">gesture</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="globe-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-globe-alt" aria-hidden="true"></i>
                <div class="icon-title">globe-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="globe-lock">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-globe-lock" aria-hidden="true"></i>
                <div class="icon-title">globe-lock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="globe">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-globe" aria-hidden="true"></i>
                <div class="icon-title">globe</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="graduation-cap">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-graduation-cap" aria-hidden="true"></i>
                <div class="icon-title">graduation-cap</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="home">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-home" aria-hidden="true"></i>
                <div class="icon-title">home</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hospital-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hospital-alt" aria-hidden="true"></i>
                <div class="icon-title">hospital-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hospital">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hospital" aria-hidden="true"></i>
                <div class="icon-title">hospital</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hotel">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hotel" aria-hidden="true"></i>
                <div class="icon-title">hotel</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hourglass-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hourglass-alt" aria-hidden="true"></i>
                <div class="icon-title">hourglass-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hourglass-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hourglass-outline" aria-hidden="true"></i>
                <div class="icon-title">hourglass-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hourglass">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hourglass" aria-hidden="true"></i>
                <div class="icon-title">hourglass</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="http">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-http" aria-hidden="true"></i>
                <div class="icon-title">http</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="image-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-image-alt" aria-hidden="true"></i>
                <div class="icon-title">image-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="image-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-image-o" aria-hidden="true"></i>
                <div class="icon-title">image-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="image">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-image" aria-hidden="true"></i>
                <div class="icon-title">image</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="inbox">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-inbox" aria-hidden="true"></i>
                <div class="icon-title">inbox</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="invert-colors-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-invert-colors-off" aria-hidden="true"></i>
                <div class="icon-title">invert-colors-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="invert-colors">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-invert-colors" aria-hidden="true"></i>
                <div class="icon-title">invert-colors</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="key">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-key" aria-hidden="true"></i>
                <div class="icon-title">key</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="label-alt-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-label-alt-outline" aria-hidden="true"></i>
                <div class="icon-title">label-alt-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="label-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-label-alt" aria-hidden="true"></i>
                <div class="icon-title">label-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="label-heart">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-label-heart" aria-hidden="true"></i>
                <div class="icon-title">label-heart</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="label">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-label" aria-hidden="true"></i>
                <div class="icon-title">label</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="labels">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-labels" aria-hidden="true"></i>
                <div class="icon-title">labels</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="lamp">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-lamp" aria-hidden="true"></i>
                <div class="icon-title">lamp</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="landscape">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-landscape" aria-hidden="true"></i>
                <div class="icon-title">landscape</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="layers-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-layers-off" aria-hidden="true"></i>
                <div class="icon-title">layers-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="layers">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-layers" aria-hidden="true"></i>
                <div class="icon-title">layers</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="library">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-library" aria-hidden="true"></i>
                <div class="icon-title">library</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="link">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-link" aria-hidden="true"></i>
                <div class="icon-title">link</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="lock-open">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-lock-open" aria-hidden="true"></i>
                <div class="icon-title">lock-open</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="lock-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-lock-outline" aria-hidden="true"></i>
                <div class="icon-title">lock-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="lock">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-lock" aria-hidden="true"></i>
                <div class="icon-title">lock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mail-reply-all">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mail-reply-all" aria-hidden="true"></i>
                <div class="icon-title">mail-reply-all</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mail-reply">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mail-reply" aria-hidden="true"></i>
                <div class="icon-title">mail-reply</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mail-send">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mail-send" aria-hidden="true"></i>
                <div class="icon-title">mail-send</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mall">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mall" aria-hidden="true"></i>
                <div class="icon-title">mall</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="map">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-map" aria-hidden="true"></i>
                <div class="icon-title">map</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="menu">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-menu" aria-hidden="true"></i>
                <div class="icon-title">menu</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="money-box">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-money-box" aria-hidden="true"></i>
                <div class="icon-title">money-box</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="money-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-money-off" aria-hidden="true"></i>
                <div class="icon-title">money-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="money">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-money" aria-hidden="true"></i>
                <div class="icon-title">money</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="more-vert">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-more-vert" aria-hidden="true"></i>
                <div class="icon-title">more-vert</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="more">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-more" aria-hidden="true"></i>
                <div class="icon-title">more</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="movie-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-movie-alt" aria-hidden="true"></i>
                <div class="icon-title">movie-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="movie">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-movie" aria-hidden="true"></i>
                <div class="icon-title">movie</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="nature-people">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-nature-people" aria-hidden="true"></i>
                <div class="icon-title">nature-people</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="nature">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-nature" aria-hidden="true"></i>
                <div class="icon-title">nature</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="navigation">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-navigation" aria-hidden="true"></i>
                <div class="icon-title">navigation</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="open-in-browser">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-open-in-browser" aria-hidden="true"></i>
                <div class="icon-title">open-in-browser</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="open-in-new">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-open-in-new" aria-hidden="true"></i>
                <div class="icon-title">open-in-new</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="palette">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-palette" aria-hidden="true"></i>
                <div class="icon-title">palette</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="parking">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-parking" aria-hidden="true"></i>
                <div class="icon-title">parking</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pin-account">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pin-account" aria-hidden="true"></i>
                <div class="icon-title">pin-account</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pin-assistant">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pin-assistant" aria-hidden="true"></i>
                <div class="icon-title">pin-assistant</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pin-drop">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pin-drop" aria-hidden="true"></i>
                <div class="icon-title">pin-drop</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pin-help">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pin-help" aria-hidden="true"></i>
                <div class="icon-title">pin-help</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pin-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pin-off" aria-hidden="true"></i>
                <div class="icon-title">pin-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pin">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pin" aria-hidden="true"></i>
                <div class="icon-title">pin</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pizza">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pizza" aria-hidden="true"></i>
                <div class="icon-title">pizza</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plaster">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-plaster" aria-hidden="true"></i>
                <div class="icon-title">plaster</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="power-setting">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-power-setting" aria-hidden="true"></i>
                <div class="icon-title">power-setting</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="power">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-power" aria-hidden="true"></i>
                <div class="icon-title">power</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="print">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-print" aria-hidden="true"></i>
                <div class="icon-title">print</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="puzzle-piece">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-puzzle-piece" aria-hidden="true"></i>
                <div class="icon-title">puzzle-piece</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="quote">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-quote" aria-hidden="true"></i>
                <div class="icon-title">quote</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="railway">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-railway" aria-hidden="true"></i>
                <div class="icon-title">railway</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="receipt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-receipt" aria-hidden="true"></i>
                <div class="icon-title">receipt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="refresh-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-refresh-alt" aria-hidden="true"></i>
                <div class="icon-title">refresh-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="refresh-sync-alert">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-refresh-sync-alert" aria-hidden="true"></i>
                <div class="icon-title">refresh-sync-alert</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="refresh-sync-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-refresh-sync-off" aria-hidden="true"></i>
                <div class="icon-title">refresh-sync-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="refresh-sync">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-refresh-sync" aria-hidden="true"></i>
                <div class="icon-title">refresh-sync</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="refresh">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-refresh" aria-hidden="true"></i>
                <div class="icon-title">refresh</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="roller">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-roller" aria-hidden="true"></i>
                <div class="icon-title">roller</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="ruler">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-ruler" aria-hidden="true"></i>
                <div class="icon-title">ruler</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="scissors">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-scissors" aria-hidden="true"></i>
                <div class="icon-title">scissors</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="screen-rotation-lock">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-screen-rotation-lock" aria-hidden="true"></i>
                <div class="icon-title">screen-rotation-lock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="screen-rotation">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-screen-rotation" aria-hidden="true"></i>
                <div class="icon-title">screen-rotation</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="search-for">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-search-for" aria-hidden="true"></i>
                <div class="icon-title">search-for</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="search-in-file">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-search-in-file" aria-hidden="true"></i>
                <div class="icon-title">search-in-file</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="search-in-page">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-search-in-page" aria-hidden="true"></i>
                <div class="icon-title">search-in-page</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="search-replace">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-search-replace" aria-hidden="true"></i>
                <div class="icon-title">search-replace</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="search">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-search" aria-hidden="true"></i>
                <div class="icon-title">search</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="seat">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-seat" aria-hidden="true"></i>
                <div class="icon-title">seat</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="settings-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-settings-square" aria-hidden="true"></i>
                <div class="icon-title">settings-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="settings">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-settings" aria-hidden="true"></i>
                <div class="icon-title">settings</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="shield-check">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-shield-check" aria-hidden="true"></i>
                <div class="icon-title">shield-check</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="shield-security">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-shield-security" aria-hidden="true"></i>
                <div class="icon-title">shield-security</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="shopping-basket">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-shopping-basket" aria-hidden="true"></i>
                <div class="icon-title">shopping-basket</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="shopping-cart-plus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-shopping-cart-plus" aria-hidden="true"></i>
                <div class="icon-title">shopping-cart-plus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="shopping-cart">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-shopping-cart" aria-hidden="true"></i>
                <div class="icon-title">shopping-cart</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sign-in">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-sign-in" aria-hidden="true"></i>
                <div class="icon-title">sign-in</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sort-amount-asc">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-sort-amount-asc" aria-hidden="true"></i>
                <div class="icon-title">sort-amount-asc</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sort-amount-desc">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-sort-amount-desc" aria-hidden="true"></i>
                <div class="icon-title">sort-amount-desc</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sort-asc">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-sort-asc" aria-hidden="true"></i>
                <div class="icon-title">sort-asc</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sort-desc">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-sort-desc" aria-hidden="true"></i>
                <div class="icon-title">sort-desc</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="spellcheck">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-spellcheck" aria-hidden="true"></i>
                <div class="icon-title">spellcheck</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="storage">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-storage" aria-hidden="true"></i>
                <div class="icon-title">storage</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="store-24">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-store-24" aria-hidden="true"></i>
                <div class="icon-title">store-24</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="store">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-store" aria-hidden="true"></i>
                <div class="icon-title">store</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="subway">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-subway" aria-hidden="true"></i>
                <div class="icon-title">subway</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sun">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-sun" aria-hidden="true"></i>
                <div class="icon-title">sun</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tab-unselected">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tab-unselected" aria-hidden="true"></i>
                <div class="icon-title">tab-unselected</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tab">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tab" aria-hidden="true"></i>
                <div class="icon-title">tab</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tag-close">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tag-close" aria-hidden="true"></i>
                <div class="icon-title">tag-close</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tag-more">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tag-more" aria-hidden="true"></i>
                <div class="icon-title">tag-more</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tag">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tag" aria-hidden="true"></i>
                <div class="icon-title">tag</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="thumb-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-thumb-down" aria-hidden="true"></i>
                <div class="icon-title">thumb-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="thumb-up-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-thumb-up-down" aria-hidden="true"></i>
                <div class="icon-title">thumb-up-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="thumb-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-thumb-up" aria-hidden="true"></i>
                <div class="icon-title">thumb-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="ticket-star">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-ticket-star" aria-hidden="true"></i>
                <div class="icon-title">ticket-star</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="toll">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-toll" aria-hidden="true"></i>
                <div class="icon-title">toll</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="toys">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-toys" aria-hidden="true"></i>
                <div class="icon-title">toys</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="traffic">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-traffic" aria-hidden="true"></i>
                <div class="icon-title">traffic</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="translate">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-translate" aria-hidden="true"></i>
                <div class="icon-title">translate</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="triangle-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-triangle-down" aria-hidden="true"></i>
                <div class="icon-title">triangle-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="triangle-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-triangle-up" aria-hidden="true"></i>
                <div class="icon-title">triangle-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="truck">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-truck" aria-hidden="true"></i>
                <div class="icon-title">truck</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="turning-sign">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-turning-sign" aria-hidden="true"></i>
                <div class="icon-title">turning-sign</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wallpaper">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wallpaper" aria-hidden="true"></i>
                <div class="icon-title">wallpaper</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="washing-machine">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-washing-machine" aria-hidden="true"></i>
                <div class="icon-title">washing-machine</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="window-maximize">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-window-maximize" aria-hidden="true"></i>
                <div class="icon-title">window-maximize</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="window-minimize">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-window-minimize" aria-hidden="true"></i>
                <div class="icon-title">window-minimize</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="window-restore">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-window-restore" aria-hidden="true"></i>
                <div class="icon-title">window-restore</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wrench">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wrench" aria-hidden="true"></i>
                <div class="icon-title">wrench</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="zoom-in">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-zoom-in" aria-hidden="true"></i>
                <div class="icon-title">zoom-in</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="zoom-out">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-zoom-out" aria-hidden="true"></i>
                <div class="icon-title">zoom-out</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Notifications</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alert-circle-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alert-circle-o" aria-hidden="true"></i>
                <div class="icon-title">alert-circle-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alert-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alert-circle" aria-hidden="true"></i>
                <div class="icon-title">alert-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alert-octagon">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alert-octagon" aria-hidden="true"></i>
                <div class="icon-title">alert-octagon</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alert-polygon">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alert-polygon" aria-hidden="true"></i>
                <div class="icon-title">alert-polygon</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alert-triangle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alert-triangle" aria-hidden="true"></i>
                <div class="icon-title">alert-triangle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="help-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-help-outline" aria-hidden="true"></i>
                <div class="icon-title">help-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="help">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-help" aria-hidden="true"></i>
                <div class="icon-title">help</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="info-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-info-outline" aria-hidden="true"></i>
                <div class="icon-title">info-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="info">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-info" aria-hidden="true"></i>
                <div class="icon-title">info</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="notifications-active">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-notifications-active" aria-hidden="true"></i>
                <div class="icon-title">notifications-active</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="notifications-add">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-notifications-add" aria-hidden="true"></i>
                <div class="icon-title">notifications-add</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="notifications-none">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-notifications-none" aria-hidden="true"></i>
                <div class="icon-title">notifications-none</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="notifications-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-notifications-off" aria-hidden="true"></i>
                <div class="icon-title">notifications-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="notifications-paused">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-notifications-paused" aria-hidden="true"></i>
                <div class="icon-title">notifications-paused</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="notifications">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-notifications" aria-hidden="true"></i>
                <div class="icon-title">notifications</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Person</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="account-add">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-account-add" aria-hidden="true"></i>
                <div class="icon-title">account-add</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="account-box-mail">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-account-box-mail" aria-hidden="true"></i>
                <div class="icon-title">account-box-mail</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="account-box-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-account-box-o" aria-hidden="true"></i>
                <div class="icon-title">account-box-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="account-box-phone">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-account-box-phone" aria-hidden="true"></i>
                <div class="icon-title">account-box-phone</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="account-box">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-account-box" aria-hidden="true"></i>
                <div class="icon-title">account-box</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="account-calendar">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-account-calendar" aria-hidden="true"></i>
                <div class="icon-title">account-calendar</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="account-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-account-circle" aria-hidden="true"></i>
                <div class="icon-title">account-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="account-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-account-o" aria-hidden="true"></i>
                <div class="icon-title">account-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="account">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-account" aria-hidden="true"></i>
                <div class="icon-title">account</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="accounts-add">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-accounts-add" aria-hidden="true"></i>
                <div class="icon-title">accounts-add</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="accounts-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-accounts-alt" aria-hidden="true"></i>
                <div class="icon-title">accounts-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="accounts-list-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-accounts-list-alt" aria-hidden="true"></i>
                <div class="icon-title">accounts-list-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="accounts-list">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-accounts-list" aria-hidden="true"></i>
                <div class="icon-title">accounts-list</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="accounts-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-accounts-outline" aria-hidden="true"></i>
                <div class="icon-title">accounts-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="accounts">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-accounts" aria-hidden="true"></i>
                <div class="icon-title">accounts</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="face">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-face" aria-hidden="true"></i>
                <div class="icon-title">face</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="female">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-female" aria-hidden="true"></i>
                <div class="icon-title">female</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="male-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-male-alt" aria-hidden="true"></i>
                <div class="icon-title">male-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="male-female">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-male-female" aria-hidden="true"></i>
                <div class="icon-title">male-female</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="male">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-male" aria-hidden="true"></i>
                <div class="icon-title">male</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mood-bad">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mood-bad" aria-hidden="true"></i>
                <div class="icon-title">mood-bad</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mood">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mood" aria-hidden="true"></i>
                <div class="icon-title">mood</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="run">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-run" aria-hidden="true"></i>
                <div class="icon-title">run</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="walk">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-walk" aria-hidden="true"></i>
                <div class="icon-title">walk</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">File</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-box">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cloud-box" aria-hidden="true"></i>
                <div class="icon-title">cloud-box</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cloud-circle" aria-hidden="true"></i>
                <div class="icon-title">cloud-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-done">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cloud-done" aria-hidden="true"></i>
                <div class="icon-title">cloud-done</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-download">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cloud-download" aria-hidden="true"></i>
                <div class="icon-title">cloud-download</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cloud-off" aria-hidden="true"></i>
                <div class="icon-title">cloud-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-outline-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cloud-outline-alt" aria-hidden="true"></i>
                <div class="icon-title">cloud-outline-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cloud-outline" aria-hidden="true"></i>
                <div class="icon-title">cloud-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-upload">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cloud-upload" aria-hidden="true"></i>
                <div class="icon-title">cloud-upload</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-cloud" aria-hidden="true"></i>
                <div class="icon-title">cloud</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="download">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-download" aria-hidden="true"></i>
                <div class="icon-title">download</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-plus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-file-plus" aria-hidden="true"></i>
                <div class="icon-title">file-plus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-text">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-file-text" aria-hidden="true"></i>
                <div class="icon-title">file-text</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-file" aria-hidden="true"></i>
                <div class="icon-title">file</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="folder-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-folder-outline" aria-hidden="true"></i>
                <div class="icon-title">folder-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="folder-person">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-folder-person" aria-hidden="true"></i>
                <div class="icon-title">folder-person</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="folder-star-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-folder-star-alt" aria-hidden="true"></i>
                <div class="icon-title">folder-star-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="folder-star">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-folder-star" aria-hidden="true"></i>
                <div class="icon-title">folder-star</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="folder">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-folder" aria-hidden="true"></i>
                <div class="icon-title">folder</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gif">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-gif" aria-hidden="true"></i>
                <div class="icon-title">gif</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="upload">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-upload" aria-hidden="true"></i>
                <div class="icon-title">upload</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Editor</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-all">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-all" aria-hidden="true"></i>
                <div class="icon-title">border-all</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-bottom">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-bottom" aria-hidden="true"></i>
                <div class="icon-title">border-bottom</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-clear">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-clear" aria-hidden="true"></i>
                <div class="icon-title">border-clear</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-color">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-color" aria-hidden="true"></i>
                <div class="icon-title">border-color</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-horizontal">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-horizontal" aria-hidden="true"></i>
                <div class="icon-title">border-horizontal</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-inner">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-inner" aria-hidden="true"></i>
                <div class="icon-title">border-inner</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-left" aria-hidden="true"></i>
                <div class="icon-title">border-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-outer">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-outer" aria-hidden="true"></i>
                <div class="icon-title">border-outer</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-right" aria-hidden="true"></i>
                <div class="icon-title">border-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-style">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-style" aria-hidden="true"></i>
                <div class="icon-title">border-style</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-top">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-top" aria-hidden="true"></i>
                <div class="icon-title">border-top</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="border-vertical">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-border-vertical" aria-hidden="true"></i>
                <div class="icon-title">border-vertical</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="copy">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-copy" aria-hidden="true"></i>
                <div class="icon-title">copy</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop" aria-hidden="true"></i>
                <div class="icon-title">crop</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-align-center">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-align-center" aria-hidden="true"></i>
                <div class="icon-title">format-align-center</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-align-justify">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-align-justify" aria-hidden="true"></i>
                <div class="icon-title">format-align-justify</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-align-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-align-left" aria-hidden="true"></i>
                <div class="icon-title">format-align-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-align-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-align-right" aria-hidden="true"></i>
                <div class="icon-title">format-align-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-bold">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-bold" aria-hidden="true"></i>
                <div class="icon-title">format-bold</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-clear-all">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-clear-all" aria-hidden="true"></i>
                <div class="icon-title">format-clear-all</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-clear">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-clear" aria-hidden="true"></i>
                <div class="icon-title">format-clear</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-color-fill">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-color-fill" aria-hidden="true"></i>
                <div class="icon-title">format-color-fill</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-color-reset">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-color-reset" aria-hidden="true"></i>
                <div class="icon-title">format-color-reset</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-color-text">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-color-text" aria-hidden="true"></i>
                <div class="icon-title">format-color-text</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-indent-decrease">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-indent-decrease" aria-hidden="true"></i>
                <div class="icon-title">format-indent-decrease</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-indent-increase">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-indent-increase" aria-hidden="true"></i>
                <div class="icon-title">format-indent-increase</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-italic">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-italic" aria-hidden="true"></i>
                <div class="icon-title">format-italic</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-line-spacing">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-line-spacing" aria-hidden="true"></i>
                <div class="icon-title">format-line-spacing</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-list-bulleted">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-list-bulleted" aria-hidden="true"></i>
                <div class="icon-title">format-list-bulleted</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-list-numbered">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-list-numbered" aria-hidden="true"></i>
                <div class="icon-title">format-list-numbered</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-ltr">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-ltr" aria-hidden="true"></i>
                <div class="icon-title">format-ltr</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-rtl">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-rtl" aria-hidden="true"></i>
                <div class="icon-title">format-rtl</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-size">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-size" aria-hidden="true"></i>
                <div class="icon-title">format-size</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-strikethrough-s">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-strikethrough-s" aria-hidden="true"></i>
                <div class="icon-title">format-strikethrough-s</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-strikethrough">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-strikethrough" aria-hidden="true"></i>
                <div class="icon-title">format-strikethrough</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-subject">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-subject" aria-hidden="true"></i>
                <div class="icon-title">format-subject</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-underlined">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-underlined" aria-hidden="true"></i>
                <div class="icon-title">format-underlined</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-valign-bottom">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-valign-bottom" aria-hidden="true"></i>
                <div class="icon-title">format-valign-bottom</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-valign-center">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-valign-center" aria-hidden="true"></i>
                <div class="icon-title">format-valign-center</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="format-valign-top">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-format-valign-top" aria-hidden="true"></i>
                <div class="icon-title">format-valign-top</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="redo">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-redo" aria-hidden="true"></i>
                <div class="icon-title">redo</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="select-all">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-select-all" aria-hidden="true"></i>
                <div class="icon-title">select-all</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="space-bar">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-space-bar" aria-hidden="true"></i>
                <div class="icon-title">space-bar</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="text-format">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-text-format" aria-hidden="true"></i>
                <div class="icon-title">text-format</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="transform">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-transform" aria-hidden="true"></i>
                <div class="icon-title">transform</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="undo">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-undo" aria-hidden="true"></i>
                <div class="icon-title">undo</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wrap-text">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wrap-text" aria-hidden="true"></i>
                <div class="icon-title">wrap-text</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Comment</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-alert">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-alert" aria-hidden="true"></i>
                <div class="icon-title">comment-alert</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-alt-text">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-alt-text" aria-hidden="true"></i>
                <div class="icon-title">comment-alt-text</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-alt" aria-hidden="true"></i>
                <div class="icon-title">comment-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-edit">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-edit" aria-hidden="true"></i>
                <div class="icon-title">comment-edit</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-image">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-image" aria-hidden="true"></i>
                <div class="icon-title">comment-image</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-list">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-list" aria-hidden="true"></i>
                <div class="icon-title">comment-list</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-more">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-more" aria-hidden="true"></i>
                <div class="icon-title">comment-more</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-outline" aria-hidden="true"></i>
                <div class="icon-title">comment-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-text-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-text-alt" aria-hidden="true"></i>
                <div class="icon-title">comment-text-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-text">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-text" aria-hidden="true"></i>
                <div class="icon-title">comment-text</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-video">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment-video" aria-hidden="true"></i>
                <div class="icon-title">comment-video</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comment" aria-hidden="true"></i>
                <div class="icon-title">comment</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comments">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-comments" aria-hidden="true"></i>
                <div class="icon-title">comments</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Form</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="check-all">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-check-all" aria-hidden="true"></i>
                <div class="icon-title">check-all</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="check-circle-u">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-check-circle-u" aria-hidden="true"></i>
                <div class="icon-title">check-circle-u</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="check-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-check-circle" aria-hidden="true"></i>
                <div class="icon-title">check-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="check-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-check-square" aria-hidden="true"></i>
                <div class="icon-title">check-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="check">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-check" aria-hidden="true"></i>
                <div class="icon-title">check</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="circle-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-circle-o" aria-hidden="true"></i>
                <div class="icon-title">circle-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-circle" aria-hidden="true"></i>
                <div class="icon-title">circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="dot-circle-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-dot-circle-alt" aria-hidden="true"></i>
                <div class="icon-title">dot-circle-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="dot-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-dot-circle" aria-hidden="true"></i>
                <div class="icon-title">dot-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="minus-circle-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-minus-circle-outline" aria-hidden="true"></i>
                <div class="icon-title">minus-circle-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="minus-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-minus-circle" aria-hidden="true"></i>
                <div class="icon-title">minus-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="minus-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-minus-square" aria-hidden="true"></i>
                <div class="icon-title">minus-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="minus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-minus" aria-hidden="true"></i>
                <div class="icon-title">minus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plus-circle-o-duplicate">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-plus-circle-o-duplicate" aria-hidden="true"></i>
                <div class="icon-title">plus-circle-o-duplicate</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plus-circle-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-plus-circle-o" aria-hidden="true"></i>
                <div class="icon-title">plus-circle-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plus-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-plus-circle" aria-hidden="true"></i>
                <div class="icon-title">plus-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plus-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-plus-square" aria-hidden="true"></i>
                <div class="icon-title">plus-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-plus" aria-hidden="true"></i>
                <div class="icon-title">plus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="square-o">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-square-o" aria-hidden="true"></i>
                <div class="icon-title">square-o</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="star-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-star-circle" aria-hidden="true"></i>
                <div class="icon-title">star-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="star-half">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-star-half" aria-hidden="true"></i>
                <div class="icon-title">star-half</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="star-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-star-outline" aria-hidden="true"></i>
                <div class="icon-title">star-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="star">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-star" aria-hidden="true"></i>
                <div class="icon-title">star</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Hardware</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bluetooth-connected">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bluetooth-connected" aria-hidden="true"></i>
                <div class="icon-title">bluetooth-connected</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bluetooth-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bluetooth-off" aria-hidden="true"></i>
                <div class="icon-title">bluetooth-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bluetooth-search">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bluetooth-search" aria-hidden="true"></i>
                <div class="icon-title">bluetooth-search</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bluetooth-setting">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bluetooth-setting" aria-hidden="true"></i>
                <div class="icon-title">bluetooth-setting</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bluetooth">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-bluetooth" aria-hidden="true"></i>
                <div class="icon-title">bluetooth</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera-add">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera-add" aria-hidden="true"></i>
                <div class="icon-title">camera-add</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera-alt" aria-hidden="true"></i>
                <div class="icon-title">camera-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera-bw">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera-bw" aria-hidden="true"></i>
                <div class="icon-title">camera-bw</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera-front">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera-front" aria-hidden="true"></i>
                <div class="icon-title">camera-front</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera-mic">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera-mic" aria-hidden="true"></i>
                <div class="icon-title">camera-mic</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera-party-mode">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera-party-mode" aria-hidden="true"></i>
                <div class="icon-title">camera-party-mode</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera-rear">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera-rear" aria-hidden="true"></i>
                <div class="icon-title">camera-rear</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera-roll">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera-roll" aria-hidden="true"></i>
                <div class="icon-title">camera-roll</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera-switch">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera-switch" aria-hidden="true"></i>
                <div class="icon-title">camera-switch</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="camera">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-camera" aria-hidden="true"></i>
                <div class="icon-title">camera</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="card-alert">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-card-alert" aria-hidden="true"></i>
                <div class="icon-title">card-alert</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="card-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-card-off" aria-hidden="true"></i>
                <div class="icon-title">card-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="card-sd">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-card-sd" aria-hidden="true"></i>
                <div class="icon-title">card-sd</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="card-sim">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-card-sim" aria-hidden="true"></i>
                <div class="icon-title">card-sim</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="desktop-mac">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-desktop-mac" aria-hidden="true"></i>
                <div class="icon-title">desktop-mac</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="desktop-windows">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-desktop-windows" aria-hidden="true"></i>
                <div class="icon-title">desktop-windows</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="device-hub">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-device-hub" aria-hidden="true"></i>
                <div class="icon-title">device-hub</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="devices-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-devices-off" aria-hidden="true"></i>
                <div class="icon-title">devices-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="devices">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-devices" aria-hidden="true"></i>
                <div class="icon-title">devices</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="dock">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-dock" aria-hidden="true"></i>
                <div class="icon-title">dock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="floppy">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-floppy" aria-hidden="true"></i>
                <div class="icon-title">floppy</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gamepad">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-gamepad" aria-hidden="true"></i>
                <div class="icon-title">gamepad</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gps-dot">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-gps-dot" aria-hidden="true"></i>
                <div class="icon-title">gps-dot</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gps-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-gps-off" aria-hidden="true"></i>
                <div class="icon-title">gps-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gps">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-gps" aria-hidden="true"></i>
                <div class="icon-title">gps</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="headset-mic">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-headset-mic" aria-hidden="true"></i>
                <div class="icon-title">headset-mic</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="headset">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-headset" aria-hidden="true"></i>
                <div class="icon-title">headset</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="input-antenna">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-input-antenna" aria-hidden="true"></i>
                <div class="icon-title">input-antenna</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="input-composite">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-input-composite" aria-hidden="true"></i>
                <div class="icon-title">input-composite</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="input-hdmi">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-input-hdmi" aria-hidden="true"></i>
                <div class="icon-title">input-hdmi</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="input-power">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-input-power" aria-hidden="true"></i>
                <div class="icon-title">input-power</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="input-svideo">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-input-svideo" aria-hidden="true"></i>
                <div class="icon-title">input-svideo</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="keyboard-hide">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-keyboard-hide" aria-hidden="true"></i>
                <div class="icon-title">keyboard-hide</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="keyboard">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-keyboard" aria-hidden="true"></i>
                <div class="icon-title">keyboard</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="laptop-chromebook">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-laptop-chromebook" aria-hidden="true"></i>
                <div class="icon-title">laptop-chromebook</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="laptop-mac">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-laptop-mac" aria-hidden="true"></i>
                <div class="icon-title">laptop-mac</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="laptop">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-laptop" aria-hidden="true"></i>
                <div class="icon-title">laptop</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mic-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mic-off" aria-hidden="true"></i>
                <div class="icon-title">mic-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mic-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mic-outline" aria-hidden="true"></i>
                <div class="icon-title">mic-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mic-setting">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mic-setting" aria-hidden="true"></i>
                <div class="icon-title">mic-setting</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mic">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mic" aria-hidden="true"></i>
                <div class="icon-title">mic</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mouse">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-mouse" aria-hidden="true"></i>
                <div class="icon-title">mouse</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="network-alert">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-network-alert" aria-hidden="true"></i>
                <div class="icon-title">network-alert</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="network-locked">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-network-locked" aria-hidden="true"></i>
                <div class="icon-title">network-locked</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="network-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-network-off" aria-hidden="true"></i>
                <div class="icon-title">network-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="network-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-network-outline" aria-hidden="true"></i>
                <div class="icon-title">network-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="network-setting">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-network-setting" aria-hidden="true"></i>
                <div class="icon-title">network-setting</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="network">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-network" aria-hidden="true"></i>
                <div class="icon-title">network</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-bluetooth">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-bluetooth" aria-hidden="true"></i>
                <div class="icon-title">phone-bluetooth</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-end">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-end" aria-hidden="true"></i>
                <div class="icon-title">phone-end</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-forwarded">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-forwarded" aria-hidden="true"></i>
                <div class="icon-title">phone-forwarded</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-in-talk">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-in-talk" aria-hidden="true"></i>
                <div class="icon-title">phone-in-talk</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-locked">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-locked" aria-hidden="true"></i>
                <div class="icon-title">phone-locked</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-missed">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-missed" aria-hidden="true"></i>
                <div class="icon-title">phone-missed</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-msg">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-msg" aria-hidden="true"></i>
                <div class="icon-title">phone-msg</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-paused">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-paused" aria-hidden="true"></i>
                <div class="icon-title">phone-paused</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-ring">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-ring" aria-hidden="true"></i>
                <div class="icon-title">phone-ring</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-setting">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-setting" aria-hidden="true"></i>
                <div class="icon-title">phone-setting</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone-sip">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone-sip" aria-hidden="true"></i>
                <div class="icon-title">phone-sip</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="phone">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-phone" aria-hidden="true"></i>
                <div class="icon-title">phone</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="portable-wifi-changes">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-portable-wifi-changes" aria-hidden="true"></i>
                <div class="icon-title">portable-wifi-changes</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="portable-wifi-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-portable-wifi-off" aria-hidden="true"></i>
                <div class="icon-title">portable-wifi-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="portable-wifi">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-portable-wifi" aria-hidden="true"></i>
                <div class="icon-title">portable-wifi</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="radio">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-radio" aria-hidden="true"></i>
                <div class="icon-title">radio</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="reader">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-reader" aria-hidden="true"></i>
                <div class="icon-title">reader</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="remote-control-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-remote-control-alt" aria-hidden="true"></i>
                <div class="icon-title">remote-control-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="remote-control">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-remote-control" aria-hidden="true"></i>
                <div class="icon-title">remote-control</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="router">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-router" aria-hidden="true"></i>
                <div class="icon-title">router</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="scanner">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-scanner" aria-hidden="true"></i>
                <div class="icon-title">scanner</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-android">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-android" aria-hidden="true"></i>
                <div class="icon-title">smartphone-android</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-download">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-download" aria-hidden="true"></i>
                <div class="icon-title">smartphone-download</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-erase">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-erase" aria-hidden="true"></i>
                <div class="icon-title">smartphone-erase</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-info">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-info" aria-hidden="true"></i>
                <div class="icon-title">smartphone-info</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-iphone">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-iphone" aria-hidden="true"></i>
                <div class="icon-title">smartphone-iphone</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-landscape-lock">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-landscape-lock" aria-hidden="true"></i>
                <div class="icon-title">smartphone-landscape-lock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-landscape">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-landscape" aria-hidden="true"></i>
                <div class="icon-title">smartphone-landscape</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-lock">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-lock" aria-hidden="true"></i>
                <div class="icon-title">smartphone-lock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-portrait-lock">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-portrait-lock" aria-hidden="true"></i>
                <div class="icon-title">smartphone-portrait-lock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-ring">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-ring" aria-hidden="true"></i>
                <div class="icon-title">smartphone-ring</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-setting">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-setting" aria-hidden="true"></i>
                <div class="icon-title">smartphone-setting</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone-setup">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone-setup" aria-hidden="true"></i>
                <div class="icon-title">smartphone-setup</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="smartphone">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-smartphone" aria-hidden="true"></i>
                <div class="icon-title">smartphone</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="speaker">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-speaker" aria-hidden="true"></i>
                <div class="icon-title">speaker</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tablet-android">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tablet-android" aria-hidden="true"></i>
                <div class="icon-title">tablet-android</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tablet-mac">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tablet-mac" aria-hidden="true"></i>
                <div class="icon-title">tablet-mac</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tablet">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tablet" aria-hidden="true"></i>
                <div class="icon-title">tablet</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tv-alt-play">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tv-alt-play" aria-hidden="true"></i>
                <div class="icon-title">tv-alt-play</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tv-list">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tv-list" aria-hidden="true"></i>
                <div class="icon-title">tv-list</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tv-play">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tv-play" aria-hidden="true"></i>
                <div class="icon-title">tv-play</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tv">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tv" aria-hidden="true"></i>
                <div class="icon-title">tv</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="usb">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-usb" aria-hidden="true"></i>
                <div class="icon-title">usb</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="videocam-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-videocam-off" aria-hidden="true"></i>
                <div class="icon-title">videocam-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="videocam-switch">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-videocam-switch" aria-hidden="true"></i>
                <div class="icon-title">videocam-switch</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="videocam">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-videocam" aria-hidden="true"></i>
                <div class="icon-title">videocam</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="watch">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-watch" aria-hidden="true"></i>
                <div class="icon-title">watch</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wifi-alt-2">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wifi-alt-2" aria-hidden="true"></i>
                <div class="icon-title">wifi-alt-2</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wifi-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wifi-alt" aria-hidden="true"></i>
                <div class="icon-title">wifi-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wifi-info">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wifi-info" aria-hidden="true"></i>
                <div class="icon-title">wifi-info</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wifi-lock">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wifi-lock" aria-hidden="true"></i>
                <div class="icon-title">wifi-lock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wifi-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wifi-off" aria-hidden="true"></i>
                <div class="icon-title">wifi-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wifi-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wifi-outline" aria-hidden="true"></i>
                <div class="icon-title">wifi-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wifi">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wifi" aria-hidden="true"></i>
                <div class="icon-title">wifi</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Directional</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-left-bottom">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-arrow-left-bottom" aria-hidden="true"></i>
                <div class="icon-title">arrow-left-bottom</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-arrow-left" aria-hidden="true"></i>
                <div class="icon-title">arrow-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-merge">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-arrow-merge" aria-hidden="true"></i>
                <div class="icon-title">arrow-merge</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-missed">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-arrow-missed" aria-hidden="true"></i>
                <div class="icon-title">arrow-missed</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-right-top">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-arrow-right-top" aria-hidden="true"></i>
                <div class="icon-title">arrow-right-top</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-arrow-right" aria-hidden="true"></i>
                <div class="icon-title">arrow-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-split">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-arrow-split" aria-hidden="true"></i>
                <div class="icon-title">arrow-split</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrows">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-arrows" aria-hidden="true"></i>
                <div class="icon-title">arrows</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="caret-down-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-caret-down-circle" aria-hidden="true"></i>
                <div class="icon-title">caret-down-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="caret-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-caret-down" aria-hidden="true"></i>
                <div class="icon-title">caret-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="caret-left-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-caret-left-circle" aria-hidden="true"></i>
                <div class="icon-title">caret-left-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="caret-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-caret-left" aria-hidden="true"></i>
                <div class="icon-title">caret-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="caret-right-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-caret-right-circle" aria-hidden="true"></i>
                <div class="icon-title">caret-right-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="caret-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-caret-right" aria-hidden="true"></i>
                <div class="icon-title">caret-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="caret-up-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-caret-up-circle" aria-hidden="true"></i>
                <div class="icon-title">caret-up-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="caret-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-caret-up" aria-hidden="true"></i>
                <div class="icon-title">caret-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chevron-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-chevron-down" aria-hidden="true"></i>
                <div class="icon-title">chevron-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chevron-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-chevron-left" aria-hidden="true"></i>
                <div class="icon-title">chevron-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chevron-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-chevron-right" aria-hidden="true"></i>
                <div class="icon-title">chevron-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chevron-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-chevron-up" aria-hidden="true"></i>
                <div class="icon-title">chevron-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="forward">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-forward" aria-hidden="true"></i>
                <div class="icon-title">forward</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="long-arrow-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-long-arrow-down" aria-hidden="true"></i>
                <div class="icon-title">long-arrow-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="long-arrow-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-long-arrow-left" aria-hidden="true"></i>
                <div class="icon-title">long-arrow-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="long-arrow-return">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-long-arrow-return" aria-hidden="true"></i>
                <div class="icon-title">long-arrow-return</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="long-arrow-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-long-arrow-right" aria-hidden="true"></i>
                <div class="icon-title">long-arrow-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="long-arrow-tab">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-long-arrow-tab" aria-hidden="true"></i>
                <div class="icon-title">long-arrow-tab</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="long-arrow-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-long-arrow-up" aria-hidden="true"></i>
                <div class="icon-title">long-arrow-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="rotate-ccw">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-rotate-ccw" aria-hidden="true"></i>
                <div class="icon-title">rotate-ccw</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="rotate-cw">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-rotate-cw" aria-hidden="true"></i>
                <div class="icon-title">rotate-cw</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="rotate-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-rotate-left" aria-hidden="true"></i>
                <div class="icon-title">rotate-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="rotate-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-rotate-right" aria-hidden="true"></i>
                <div class="icon-title">rotate-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="square-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-square-down" aria-hidden="true"></i>
                <div class="icon-title">square-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="square-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-square-right" aria-hidden="true"></i>
                <div class="icon-title">square-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="swap-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-swap-alt" aria-hidden="true"></i>
                <div class="icon-title">swap-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="swap-vertical-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-swap-vertical-circle" aria-hidden="true"></i>
                <div class="icon-title">swap-vertical-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="swap-vertical">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-swap-vertical" aria-hidden="true"></i>
                <div class="icon-title">swap-vertical</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="swap">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-swap" aria-hidden="true"></i>
                <div class="icon-title">swap</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="trending-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-trending-down" aria-hidden="true"></i>
                <div class="icon-title">trending-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="trending-flat">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-trending-flat" aria-hidden="true"></i>
                <div class="icon-title">trending-flat</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="trending-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-trending-up" aria-hidden="true"></i>
                <div class="icon-title">trending-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="unfold-less">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-unfold-less" aria-hidden="true"></i>
                <div class="icon-title">unfold-less</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="unfold-more">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-unfold-more" aria-hidden="true"></i>
                <div class="icon-title">unfold-more</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">View</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="apps">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-apps" aria-hidden="true"></i>
                <div class="icon-title">apps</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="grid-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-grid-off" aria-hidden="true"></i>
                <div class="icon-title">grid-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="grid">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-grid" aria-hidden="true"></i>
                <div class="icon-title">grid</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-agenda">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-agenda" aria-hidden="true"></i>
                <div class="icon-title">view-agenda</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-array">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-array" aria-hidden="true"></i>
                <div class="icon-title">view-array</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-carousel">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-carousel" aria-hidden="true"></i>
                <div class="icon-title">view-carousel</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-column">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-column" aria-hidden="true"></i>
                <div class="icon-title">view-column</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-comfy">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-comfy" aria-hidden="true"></i>
                <div class="icon-title">view-comfy</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-compact">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-compact" aria-hidden="true"></i>
                <div class="icon-title">view-compact</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-dashboard">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-dashboard" aria-hidden="true"></i>
                <div class="icon-title">view-dashboard</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-day">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-day" aria-hidden="true"></i>
                <div class="icon-title">view-day</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-headline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-headline" aria-hidden="true"></i>
                <div class="icon-title">view-headline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-list-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-list-alt" aria-hidden="true"></i>
                <div class="icon-title">view-list-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-list">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-list" aria-hidden="true"></i>
                <div class="icon-title">view-list</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-module">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-module" aria-hidden="true"></i>
                <div class="icon-title">view-module</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-quilt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-quilt" aria-hidden="true"></i>
                <div class="icon-title">view-quilt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-stream">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-stream" aria-hidden="true"></i>
                <div class="icon-title">view-stream</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-subtitles">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-subtitles" aria-hidden="true"></i>
                <div class="icon-title">view-subtitles</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-toc">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-toc" aria-hidden="true"></i>
                <div class="icon-title">view-toc</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-web">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-web" aria-hidden="true"></i>
                <div class="icon-title">view-web</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="view-week">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-view-week" aria-hidden="true"></i>
                <div class="icon-title">view-week</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="widgets">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-widgets" aria-hidden="true"></i>
                <div class="icon-title">widgets</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Date / Time</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alarm-check">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alarm-check" aria-hidden="true"></i>
                <div class="icon-title">alarm-check</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alarm-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alarm-off" aria-hidden="true"></i>
                <div class="icon-title">alarm-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alarm-plus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alarm-plus" aria-hidden="true"></i>
                <div class="icon-title">alarm-plus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alarm-snooze">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alarm-snooze" aria-hidden="true"></i>
                <div class="icon-title">alarm-snooze</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alarm">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-alarm" aria-hidden="true"></i>
                <div class="icon-title">alarm</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="calendar-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-calendar-alt" aria-hidden="true"></i>
                <div class="icon-title">calendar-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="calendar-check">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-calendar-check" aria-hidden="true"></i>
                <div class="icon-title">calendar-check</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="calendar-close">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-calendar-close" aria-hidden="true"></i>
                <div class="icon-title">calendar-close</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="calendar-note">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-calendar-note" aria-hidden="true"></i>
                <div class="icon-title">calendar-note</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="calendar">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-calendar" aria-hidden="true"></i>
                <div class="icon-title">calendar</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="time-countdown">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-time-countdown" aria-hidden="true"></i>
                <div class="icon-title">time-countdown</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="time-interval">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-time-interval" aria-hidden="true"></i>
                <div class="icon-title">time-interval</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="time-restore-setting">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-time-restore-setting" aria-hidden="true"></i>
                <div class="icon-title">time-restore-setting</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="time-restore">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-time-restore" aria-hidden="true"></i>
                <div class="icon-title">time-restore</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="time">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-time" aria-hidden="true"></i>
                <div class="icon-title">time</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="timer-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-timer-off" aria-hidden="true"></i>
                <div class="icon-title">timer-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="timer">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-timer" aria-hidden="true"></i>
                <div class="icon-title">timer</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Social</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="android-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-android-alt" aria-hidden="true"></i>
                <div class="icon-title">android-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="android">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-android" aria-hidden="true"></i>
                <div class="icon-title">android</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="apple">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-apple" aria-hidden="true"></i>
                <div class="icon-title">apple</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="behance">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-behance" aria-hidden="true"></i>
                <div class="icon-title">behance</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="codepen">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-codepen" aria-hidden="true"></i>
                <div class="icon-title">codepen</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="dribbble">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-dribbble" aria-hidden="true"></i>
                <div class="icon-title">dribbble</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="dropbox">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-dropbox" aria-hidden="true"></i>
                <div class="icon-title">dropbox</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="evernote">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-evernote" aria-hidden="true"></i>
                <div class="icon-title">evernote</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="facebook-box">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-facebook-box" aria-hidden="true"></i>
                <div class="icon-title">facebook-box</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="facebook">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-facebook" aria-hidden="true"></i>
                <div class="icon-title">facebook</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="github-box">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-github-box" aria-hidden="true"></i>
                <div class="icon-title">github-box</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="github">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-github" aria-hidden="true"></i>
                <div class="icon-title">github</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="google-drive">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-google-drive" aria-hidden="true"></i>
                <div class="icon-title">google-drive</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="google-earth">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-google-earth" aria-hidden="true"></i>
                <div class="icon-title">google-earth</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="google-glass">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-google-glass" aria-hidden="true"></i>
                <div class="icon-title">google-glass</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="google-maps">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-google-maps" aria-hidden="true"></i>
                <div class="icon-title">google-maps</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="google-pages">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-google-pages" aria-hidden="true"></i>
                <div class="icon-title">google-pages</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="google-play">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-google-play" aria-hidden="true"></i>
                <div class="icon-title">google-play</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="google-plus-box">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-google-plus-box" aria-hidden="true"></i>
                <div class="icon-title">google-plus-box</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="google-plus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-google-plus" aria-hidden="true"></i>
                <div class="icon-title">google-plus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="google">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-google" aria-hidden="true"></i>
                <div class="icon-title">google</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="instagram">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-instagram" aria-hidden="true"></i>
                <div class="icon-title">instagram</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="language-css3">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-language-css3" aria-hidden="true"></i>
                <div class="icon-title">language-css3</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="language-html5">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-language-html5" aria-hidden="true"></i>
                <div class="icon-title">language-html5</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="language-javascript">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-language-javascript" aria-hidden="true"></i>
                <div class="icon-title">language-javascript</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="language-python-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-language-python-alt" aria-hidden="true"></i>
                <div class="icon-title">language-python-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="language-python">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-language-python" aria-hidden="true"></i>
                <div class="icon-title">language-python</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="lastfm">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-lastfm" aria-hidden="true"></i>
                <div class="icon-title">lastfm</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="linkedin-box">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-linkedin-box" aria-hidden="true"></i>
                <div class="icon-title">linkedin-box</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="paypal">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-paypal" aria-hidden="true"></i>
                <div class="icon-title">paypal</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pinterest-box">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pinterest-box" aria-hidden="true"></i>
                <div class="icon-title">pinterest-box</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pocket">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pocket" aria-hidden="true"></i>
                <div class="icon-title">pocket</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="polymer">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-polymer" aria-hidden="true"></i>
                <div class="icon-title">polymer</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="share">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-share" aria-hidden="true"></i>
                <div class="icon-title">share</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="stack-overflow">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-stack-overflow" aria-hidden="true"></i>
                <div class="icon-title">stack-overflow</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="steam-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-steam-square" aria-hidden="true"></i>
                <div class="icon-title">steam-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="steam">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-steam" aria-hidden="true"></i>
                <div class="icon-title">steam</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="twitter-box">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-twitter-box" aria-hidden="true"></i>
                <div class="icon-title">twitter-box</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="twitter">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-twitter" aria-hidden="true"></i>
                <div class="icon-title">twitter</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="vk">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-vk" aria-hidden="true"></i>
                <div class="icon-title">vk</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wikipedia">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wikipedia" aria-hidden="true"></i>
                <div class="icon-title">wikipedia</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="windows">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-windows" aria-hidden="true"></i>
                <div class="icon-title">windows</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Image</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="aspect-ratio-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-aspect-ratio-alt" aria-hidden="true"></i>
                <div class="icon-title">aspect-ratio-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="aspect-ratio">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-aspect-ratio" aria-hidden="true"></i>
                <div class="icon-title">aspect-ratio</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="blur-circular">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-blur-circular" aria-hidden="true"></i>
                <div class="icon-title">blur-circular</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="blur-linear">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-blur-linear" aria-hidden="true"></i>
                <div class="icon-title">blur-linear</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="blur-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-blur-off" aria-hidden="true"></i>
                <div class="icon-title">blur-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="blur">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-blur" aria-hidden="true"></i>
                <div class="icon-title">blur</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="brightness-2">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-brightness-2" aria-hidden="true"></i>
                <div class="icon-title">brightness-2</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="brightness-3">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-brightness-3" aria-hidden="true"></i>
                <div class="icon-title">brightness-3</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="brightness-4">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-brightness-4" aria-hidden="true"></i>
                <div class="icon-title">brightness-4</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="brightness-5">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-brightness-5" aria-hidden="true"></i>
                <div class="icon-title">brightness-5</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="brightness-6">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-brightness-6" aria-hidden="true"></i>
                <div class="icon-title">brightness-6</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="brightness-7">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-brightness-7" aria-hidden="true"></i>
                <div class="icon-title">brightness-7</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="brightness-auto">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-brightness-auto" aria-hidden="true"></i>
                <div class="icon-title">brightness-auto</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="brightness-setting">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-brightness-setting" aria-hidden="true"></i>
                <div class="icon-title">brightness-setting</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="broken-image">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-broken-image" aria-hidden="true"></i>
                <div class="icon-title">broken-image</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="center-focus-strong">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-center-focus-strong" aria-hidden="true"></i>
                <div class="icon-title">center-focus-strong</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="center-focus-weak">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-center-focus-weak" aria-hidden="true"></i>
                <div class="icon-title">center-focus-weak</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="compare">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-compare" aria-hidden="true"></i>
                <div class="icon-title">compare</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop-16-9">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop-16-9" aria-hidden="true"></i>
                <div class="icon-title">crop-16-9</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop-3-2">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop-3-2" aria-hidden="true"></i>
                <div class="icon-title">crop-3-2</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop-5-4">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop-5-4" aria-hidden="true"></i>
                <div class="icon-title">crop-5-4</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop-7-5">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop-7-5" aria-hidden="true"></i>
                <div class="icon-title">crop-7-5</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop-din">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop-din" aria-hidden="true"></i>
                <div class="icon-title">crop-din</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop-free">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop-free" aria-hidden="true"></i>
                <div class="icon-title">crop-free</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop-landscape">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop-landscape" aria-hidden="true"></i>
                <div class="icon-title">crop-landscape</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop-portrait">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop-portrait" aria-hidden="true"></i>
                <div class="icon-title">crop-portrait</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="crop-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-crop-square" aria-hidden="true"></i>
                <div class="icon-title">crop-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="exposure-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-exposure-alt" aria-hidden="true"></i>
                <div class="icon-title">exposure-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="exposure">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-exposure" aria-hidden="true"></i>
                <div class="icon-title">exposure</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="filter-b-and-w">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-filter-b-and-w" aria-hidden="true"></i>
                <div class="icon-title">filter-b-and-w</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="filter-center-focus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-filter-center-focus" aria-hidden="true"></i>
                <div class="icon-title">filter-center-focus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="filter-frames">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-filter-frames" aria-hidden="true"></i>
                <div class="icon-title">filter-frames</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="filter-tilt-shift">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-filter-tilt-shift" aria-hidden="true"></i>
                <div class="icon-title">filter-tilt-shift</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gradient">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-gradient" aria-hidden="true"></i>
                <div class="icon-title">gradient</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="grain">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-grain" aria-hidden="true"></i>
                <div class="icon-title">grain</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="graphic-eq">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-graphic-eq" aria-hidden="true"></i>
                <div class="icon-title">graphic-eq</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hdr-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hdr-off" aria-hidden="true"></i>
                <div class="icon-title">hdr-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hdr-strong">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hdr-strong" aria-hidden="true"></i>
                <div class="icon-title">hdr-strong</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hdr-weak">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hdr-weak" aria-hidden="true"></i>
                <div class="icon-title">hdr-weak</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hdr">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hdr" aria-hidden="true"></i>
                <div class="icon-title">hdr</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="iridescent">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-iridescent" aria-hidden="true"></i>
                <div class="icon-title">iridescent</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="leak-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-leak-off" aria-hidden="true"></i>
                <div class="icon-title">leak-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="leak">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-leak" aria-hidden="true"></i>
                <div class="icon-title">leak</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="looks">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-looks" aria-hidden="true"></i>
                <div class="icon-title">looks</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="loupe">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-loupe" aria-hidden="true"></i>
                <div class="icon-title">loupe</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="panorama-horizontal">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-panorama-horizontal" aria-hidden="true"></i>
                <div class="icon-title">panorama-horizontal</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="panorama-vertical">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-panorama-vertical" aria-hidden="true"></i>
                <div class="icon-title">panorama-vertical</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="panorama-wide-angle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-panorama-wide-angle" aria-hidden="true"></i>
                <div class="icon-title">panorama-wide-angle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="photo-size-select-large">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-photo-size-select-large" aria-hidden="true"></i>
                <div class="icon-title">photo-size-select-large</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="photo-size-select-small">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-photo-size-select-small" aria-hidden="true"></i>
                <div class="icon-title">photo-size-select-small</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="picture-in-picture">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-picture-in-picture" aria-hidden="true"></i>
                <div class="icon-title">picture-in-picture</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="slideshow">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-slideshow" aria-hidden="true"></i>
                <div class="icon-title">slideshow</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="texture">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-texture" aria-hidden="true"></i>
                <div class="icon-title">texture</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tonality">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tonality" aria-hidden="true"></i>
                <div class="icon-title">tonality</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="vignette">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-vignette" aria-hidden="true"></i>
                <div class="icon-title">vignette</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="wb-auto">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-wb-auto" aria-hidden="true"></i>
                <div class="icon-title">wb-auto</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Audio / Video</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="eject-alt">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-eject-alt" aria-hidden="true"></i>
                <div class="icon-title">eject-alt</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="eject">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-eject" aria-hidden="true"></i>
                <div class="icon-title">eject</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="equalizer">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-equalizer" aria-hidden="true"></i>
                <div class="icon-title">equalizer</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="fast-forward">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-fast-forward" aria-hidden="true"></i>
                <div class="icon-title">fast-forward</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="fast-rewind">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-fast-rewind" aria-hidden="true"></i>
                <div class="icon-title">fast-rewind</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="forward-10">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-forward-10" aria-hidden="true"></i>
                <div class="icon-title">forward-10</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="forward-30">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-forward-30" aria-hidden="true"></i>
                <div class="icon-title">forward-30</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="forward-5">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-forward-5" aria-hidden="true"></i>
                <div class="icon-title">forward-5</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hearing">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hearing" aria-hidden="true"></i>
                <div class="icon-title">hearing</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pause-circle-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pause-circle-outline" aria-hidden="true"></i>
                <div class="icon-title">pause-circle-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pause-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pause-circle" aria-hidden="true"></i>
                <div class="icon-title">pause-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pause">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-pause" aria-hidden="true"></i>
                <div class="icon-title">pause</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="play-circle-outline">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-play-circle-outline" aria-hidden="true"></i>
                <div class="icon-title">play-circle-outline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="play-circle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-play-circle" aria-hidden="true"></i>
                <div class="icon-title">play-circle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="play">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-play" aria-hidden="true"></i>
                <div class="icon-title">play</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="playlist-audio">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-playlist-audio" aria-hidden="true"></i>
                <div class="icon-title">playlist-audio</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="playlist-plus">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-playlist-plus" aria-hidden="true"></i>
                <div class="icon-title">playlist-plus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="repeat-one">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-repeat-one" aria-hidden="true"></i>
                <div class="icon-title">repeat-one</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="repeat">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-repeat" aria-hidden="true"></i>
                <div class="icon-title">repeat</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="replay-10">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-replay-10" aria-hidden="true"></i>
                <div class="icon-title">replay-10</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="replay-30">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-replay-30" aria-hidden="true"></i>
                <div class="icon-title">replay-30</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="replay-5">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-replay-5" aria-hidden="true"></i>
                <div class="icon-title">replay-5</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="replay">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-replay" aria-hidden="true"></i>
                <div class="icon-title">replay</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="shuffle">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-shuffle" aria-hidden="true"></i>
                <div class="icon-title">shuffle</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="skip-next">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-skip-next" aria-hidden="true"></i>
                <div class="icon-title">skip-next</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="skip-previous">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-skip-previous" aria-hidden="true"></i>
                <div class="icon-title">skip-previous</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="stop">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-stop" aria-hidden="true"></i>
                <div class="icon-title">stop</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="surround-sound">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-surround-sound" aria-hidden="true"></i>
                <div class="icon-title">surround-sound</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tune">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tune" aria-hidden="true"></i>
                <div class="icon-title">tune</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="volume-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-volume-down" aria-hidden="true"></i>
                <div class="icon-title">volume-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="volume-mute">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-volume-mute" aria-hidden="true"></i>
                <div class="icon-title">volume-mute</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="volume-off">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-volume-off" aria-hidden="true"></i>
                <div class="icon-title">volume-off</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="volume-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-volume-up" aria-hidden="true"></i>
                <div class="icon-title">volume-up</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Numbers</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="n-1-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-n-1-square" aria-hidden="true"></i>
                <div class="icon-title">n-1-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="n-2-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-n-2-square" aria-hidden="true"></i>
                <div class="icon-title">n-2-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="n-3-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-n-3-square" aria-hidden="true"></i>
                <div class="icon-title">n-3-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="n-4-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-n-4-square" aria-hidden="true"></i>
                <div class="icon-title">n-4-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="n-5-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-n-5-square" aria-hidden="true"></i>
                <div class="icon-title">n-5-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="n-6-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-n-6-square" aria-hidden="true"></i>
                <div class="icon-title">n-6-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="neg-1">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-neg-1" aria-hidden="true"></i>
                <div class="icon-title">neg-1</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="neg-2">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-neg-2" aria-hidden="true"></i>
                <div class="icon-title">neg-2</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plus-1">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-plus-1" aria-hidden="true"></i>
                <div class="icon-title">plus-1</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plus-2">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-plus-2" aria-hidden="true"></i>
                <div class="icon-title">plus-2</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sec-10">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-sec-10" aria-hidden="true"></i>
                <div class="icon-title">sec-10</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sec-3">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-sec-3" aria-hidden="true"></i>
                <div class="icon-title">sec-3</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="zero">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-zero" aria-hidden="true"></i>
                <div class="icon-title">zero</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Other</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airline-seat-flat-angled">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airline-seat-flat-angled" aria-hidden="true"></i>
                <div class="icon-title">airline-seat-flat-angled</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airline-seat-flat">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airline-seat-flat" aria-hidden="true"></i>
                <div class="icon-title">airline-seat-flat</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airline-seat-individual-suite">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airline-seat-individual-suite" aria-hidden="true"></i>
                <div class="icon-title">airline-seat-individual-suite</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airline-seat-legroom-extra">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airline-seat-legroom-extra" aria-hidden="true"></i>
                <div class="icon-title">airline-seat-legroom-extra</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airline-seat-legroom-normal">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airline-seat-legroom-normal" aria-hidden="true"></i>
                <div class="icon-title">airline-seat-legroom-normal</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airline-seat-legroom-reduced">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airline-seat-legroom-reduced" aria-hidden="true"></i>
                <div class="icon-title">airline-seat-legroom-reduced</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airline-seat-recline-extra">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airline-seat-recline-extra" aria-hidden="true"></i>
                <div class="icon-title">airline-seat-recline-extra</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airline-seat-recline-normal">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airline-seat-recline-normal" aria-hidden="true"></i>
                <div class="icon-title">airline-seat-recline-normal</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="airplay">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-airplay" aria-hidden="true"></i>
                <div class="icon-title">airplay</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="closed-caption">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-closed-caption" aria-hidden="true"></i>
                <div class="icon-title">closed-caption</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="confirmation-number">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-confirmation-number" aria-hidden="true"></i>
                <div class="icon-title">confirmation-number</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="developer-board">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-developer-board" aria-hidden="true"></i>
                <div class="icon-title">developer-board</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="disc-full">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-disc-full" aria-hidden="true"></i>
                <div class="icon-title">disc-full</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="explicit">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-explicit" aria-hidden="true"></i>
                <div class="icon-title">explicit</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flight-land">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flight-land" aria-hidden="true"></i>
                <div class="icon-title">flight-land</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flight-takeoff">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flight-takeoff" aria-hidden="true"></i>
                <div class="icon-title">flight-takeoff</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flip-to-back">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flip-to-back" aria-hidden="true"></i>
                <div class="icon-title">flip-to-back</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flip-to-front">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-flip-to-front" aria-hidden="true"></i>
                <div class="icon-title">flip-to-front</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="group-work">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-group-work" aria-hidden="true"></i>
                <div class="icon-title">group-work</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hd">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hd" aria-hidden="true"></i>
                <div class="icon-title">hd</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hq">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-hq" aria-hidden="true"></i>
                <div class="icon-title">hq</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="markunread-mailbox">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-markunread-mailbox" aria-hidden="true"></i>
                <div class="icon-title">markunread-mailbox</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="memory">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-memory" aria-hidden="true"></i>
                <div class="icon-title">memory</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="nfc">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-nfc" aria-hidden="true"></i>
                <div class="icon-title">nfc</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="play-for-work">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-play-for-work" aria-hidden="true"></i>
                <div class="icon-title">play-for-work</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="power-input">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-power-input" aria-hidden="true"></i>
                <div class="icon-title">power-input</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="present-to-all">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-present-to-all" aria-hidden="true"></i>
                <div class="icon-title">present-to-all</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="satellite">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-satellite" aria-hidden="true"></i>
                <div class="icon-title">satellite</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tap-and-play">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-tap-and-play" aria-hidden="true"></i>
                <div class="icon-title">tap-and-play</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="vibration">
              <div class="icondemo vertical-align-middle">
                <i class="icon md-vibration" aria-hidden="true"></i>
                <div class="icon-title">vibration</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<br/>
	
	@stop
	