@extends('layouts.doc')
@section('content')
<div class="page-header theme-bg-dark py-5 text-center position-relative">
    <div class="theme-bg-shapes-right"></div>
    <div class="theme-bg-shapes-left"></div>
    <div class="container">
        <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
        <div class="page-intro single-col-max mx-auto">Everything you need to get your software documentation online.</div>
        <div class="main-search-box pt-3 d-block mx-auto">
             <form class="search-form w-100">
                <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
            </form>
         </div>
    </div>
</div><!--//page-header-->
<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                @foreach ($categories as $category)    
                <div class="col-12 col-lg-4 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="theme-icon-holder card-icon-holder mr-2">
                                    <i class="fas fa-map-signs"></i>
                                </span><!--//card-icon-holder-->
                                <span class="card-title-text">{{ $category->name }}</span>
                            </h5>
                            <div class="card-text">
                                Section overview goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            </div>
                            <a class="card-link-mask" href="{{ route('docs', ["version" => $currentVersion->id, "category" => $category->id]) }}"></a>
                        </div><!--//card-body-->
                    </div><!--//card-->
                </div><!--//col-->
                @endforeach

            </div><!--//row-->
        </div><!--//container-->
    </div><!--//container-->
</div><!--//page-content-->
@endsection
