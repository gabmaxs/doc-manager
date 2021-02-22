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
                @foreach($categories as $category)
				<li class="nav-item section-title"><a class="nav-link" href="#{{str_replace(' ', '', $category->name)}}" data-toggle="collapse" aria-expanded="false">
                    <span class="theme-icon-holder mr-2">
                    <i class="{{$category->icon}}"></i></span>{{$category->name}} 
                    </a> <span class="btn btn-sm"><i class="fas fa-trash"></i></span></li>
  					<ul class="collapse list-unstyled" id="{{str_replace(' ', '', $category->name)}}">
                    @foreach ($category->pages as $pageMenu)
                        @if ($category->is($page->category))
                            <li class="nav-item"><a class="nav-link scrollto active" href="#{{ $pageMenu->title }}">{{$pageMenu->name}}</a> <span class="btn btn-sm"><i class="fa fa-trash trash-red"></i></span></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('docs',['version' => $currentVersion, 'page' => $pageMenu]) . "#$pageMenu->title" }}">{{$pageMenu->name}}</a> <span class="btn btn-sm"><i class="fa fa-trash trash-red"></i></span></li>
                        @endif
                    @endforeach
                    <li class="nav-item">
                            <a href="#" class="btn btn-light btn-sm"><i class="fas fa-plus"></i> New Page</a>
                        </li>
					</ul> 
                @endforeach
                    <li class="nav-item section-title mt-3">
                        <a class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> New Category</a>
                    </li>
                </ul>
        </nav>
    </div><!--//docs-sidebar-->
    <div class="docs-content">
        <div class="container">
            <h1>EDIT</h1>
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
