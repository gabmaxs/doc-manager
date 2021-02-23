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
            <category-panel-component version="{{ $currentVersion->id }}" category-list="{{$categories}}"></category-panel-component>
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
            <page-component page-value="{{ $page }}">
                <section-panel-component version="{{ $currentVersion->id }}" page="{{ $page->id }}" section-list="{{ $page->sections }}"></section-panel-component>
            </page-component>
        </div> 
        
    </div>
    <div class="modal" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete item</h5>
              <button type="button" id="modalCloseHeaderButton" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id="modalContent"></p>
            </div>
            <div class="modal-footer">
              <button type="button" id="modalCloseButton" class="btn btn-secondary">Close</button>
              <button type="button" id="modalDeleteButton" class="btn btn-danger" data-dismiss="modal">Delete</button>
            </div>
          </div>
        </div>
      </div>
</div><!--//docs-wrapper-->
@endsection
