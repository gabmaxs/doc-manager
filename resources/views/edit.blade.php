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
                    @foreach ($page->sections as $section)
                        <section-component section-value="{{ $section }}"></section-component>
                    @endforeach
                </page-component>
            @endforeach
            <footer class="footer">
                <div class="container text-center py-5">
                    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                    <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
                    <ul class="social-list list-unstyled pt-4 mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li> 
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
                    </ul><!--//social-list-->
                </div>
            </footer>
        </div> 
    </div>
</div><!--//docs-wrapper-->
@endsection
