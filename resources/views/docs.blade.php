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
				<li class="nav-item section-title"><a class="nav-link" href="#{{ $category->title }}" data-toggle="collapse" aria-expanded="false">
                    <span class="theme-icon-holder mr-2">
                    <i class="{{$category->icon}}"></i></span>{{$category->name}}
                </a></li>
  					<ul class="collapse list-unstyled" id="{{ $category->title }}">
                    @foreach ($category->pages as $pageMenu)
                        <li class="nav-item"><a class="nav-link" href="{{ route('docs',['version' => $currentVersion, 'page' => $pageMenu]) }}">{{$pageMenu->name}}</a></li>
                    @endforeach
					</ul> 
                @endforeach
                </ul>
        </nav>
           
       
          
    </div><!--//docs-sidebar-->
    <div class="docs-content">
        <div class="container">
            <article class="docs-article" id="{{ $page->title }}">
                <header class="docs-header">
                    <h1 class="docs-heading">{{ $page->name }}</h1>
                    <section class="docs-intro">
                        <ul class="nav list-unstyled flex-column">
                            @foreach ($page->sections as $section)
                                <li class="nav-item"><a class="nav-link scrollto"  href="{{ "#".$section->title }}">{{ $section->name }}</a></li>
                            @endforeach
                        </ul>
                    </section><!--//docs-intro-->
                </header>
                @foreach ($page->sections as $section)
                    <section class="docs-section" id="{{ $section->title }}">
                        <h2 class="section-heading">{{ $section->name }}</h2>
                        <p>{{ $section->content }}</p>
                    </section><!--//section-->
                @endforeach
            </article><!--//docs-article-->
        </div> 
    </div>
</div><!--//docs-wrapper-->
@endsection
