@extends('master/index')

@section('meta')
   <meta name="description" content="{{ strlen($product->description) > 2 ? $product->description : $product->title.' '.siteSettings('description') }}">
   <meta name="keywords" content="{{ strlen($product->tags) > 2 ? $product->tags : $product->title }}">
   <meta property="og:title" content="{{ $product->title }} - {{ siteSettings('siteName') }}"/>
   <meta property="og:type" content="article"/>
   <meta property="og:url" content="{{ route('product', ['id' => $product->id, 'slug' => $product->slug]) }}"/>
   <meta property="og:description" content="{{ strlen($product->description) > 2 ? $product->description : $product->title.' '.siteSettings('description') }}"/>
   <meta property="og:product" content="{{ Resize::img($product->main_image,'mainProduct') }}"/>
   <meta name="author" content="{{ $product->user->fullname }}">
@endsection

@section('content')

   <img src="{{ Resize::img($product->info->cover_image,'coverProduct') }}"  width="500"/>

   <h1 class="content-heading">{{ $product->title }}</h1>
   <div class="main-product">
      <p>
      <a href="{{ Resize::img($product->main_image,'mainProduct') }}" class="product">
         <img src="{{ Resize::img($product->main_image,'mainProduct') }}" alt="{{ $product->title }}" class="mainProduct img-thumbnail"/>
      </a>
      </p>
   </div>
   <!--.main-product-->
   <div class="clearfix">
      <div class="row">
         <div class="col-md-8">
            <h3 class="content-heading">
               {{ t('Description') }}
            </h3>
            <p>{!! nl2br(\App\Helpers\Smilies::parse($product->description))  !!}</p>
         </div>
         <div class="col-md-4">
            <h3 class="content-heading">{{ t('Details') }}</h3>
            <div class="product-status">
               <ul class="list-inline">
                  <li><i class="fa fa-eye"></i> {{ $product->views }}</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!--.clearfix-->

@endsection

@section('sidebar')
   @include('product/sidebar')
@endsection
