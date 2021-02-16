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
                @foreach ($categories as $category)
                    <li class="nav-item section-title"><a class="nav-link" href="{{ route('docs',['version' => $currentVersion, 'category' => $category->id]) }}"><span class="theme-icon-holder mr-2"><i class="fas fa-map-signs"></i></span>{{$category->name}}</a></li>
                    @foreach ($category->pages as $pageMenu)
                        @if ($category->is($selectedCategory))
                            <li class="nav-item"><a class="nav-link scrollto" href="#{{ $pageMenu->title }}">{{$pageMenu->name}}</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('docs',['version' => $currentVersion, 'category' => $category->id]) . "#$pageMenu->title" }}">{{$pageMenu->name}}</a></li>
                        @endif
                    @endforeach
                @endforeach
                </ul>

        </nav><!--//docs-nav-->
    </div><!--//docs-sidebar-->
    <div class="docs-content">
        <div class="container">
            <h1>EDIT</h1>
            @foreach ($selectedCategory->pages as $page)
                <page-component page-value="{{ $page }}">
                    <section-panel-component page="{{ $page->id }}" section-list="{{ $page->sections }}"></section-panel-component>
                </page-component>
            @endforeach
        </div> 
    </div>
</div><!--//docs-wrapper-->
@endsection
