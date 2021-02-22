@extends('layouts.doc')
@section('content')
<div class="docs-wrapper">
    <div id="docs-sidebar" class="docs-sidebar">
        <div class="top-search-box d-lg-none p-3">
            <form class="search-form">
                <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <nav id="docs-nav" class="docs-nav navbar">
        <ul class="section-items list-unstyled nav flex-column pb-3">
            <category-panel-component category-list="{{$categories}}"></category-panel-component>
                    <li class="nav-item section-title mt-3">
                        <a class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> New Category</a>
                    </li>
                </ul>
        </nav>
    </div><!--//docs-sidebar-->
    <div class="docs-content">
        <div class="container">
            <div class="callout-block callout-block-info">
                <div class="content">
                <h4 class="callout-title">
                    <span class="callout-icon-holder mr-1">
                        <i class="fas fa-bullhorn"></i>
                    </span>
                    Welcome!
                </h4>
                <p>You can create new versions and manage pages and categories. Need help? <u>Check out our demo!</u></p>
                </div>
            </div>
            {{Request::url()}}
            <page-component page-value="{{ $page }}">
                <section-panel-component version="{{ $currentVersion->id }}" page="{{ $page->id }}" section-list="{{ $page->sections }}"></section-panel-component>
            </page-component>
            {{-- @foreach ($selectedCategory->pages as $page)
                <page-component page-value="{{ $page }}">
                    <section-panel-component version="{{ $currentVersion->id }}" page="{{ $page->id }}" section-list="{{ $page->sections }}"></section-panel-component>
                </page-component>
            @endforeach --}}
        </div> 
        
    </div>
</div><!--//docs-wrapper-->
@endsection
