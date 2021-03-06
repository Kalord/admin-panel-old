@extends('layouts.main')

@section('title', 'Project')
@section('module', 'Project')
@section('path', 'Project')

@section('content')
<!-- start: page -->
<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
  <div class="content-with-menu-container">
    <div class="inner-menu-toggle">
      <a href="#" class="inner-menu-expand" data-open="inner-menu">
        Show Bar <i class="fa fa-chevron-right"></i>
      </a>
    </div>

    <menu id="content-menu" class="inner-menu" role="menu">
      <div class="nano">
        <div class="nano-content">

          <div class="inner-menu-toggle-inside">
            <a href="#" class="inner-menu-collapse">
              <i class="fa fa-chevron-up visible-xs-inline"></i><i class="fa fa-chevron-left hidden-xs-inline"></i> Hide Bar
            </a>
            <a href="#" class="inner-menu-expand" data-open="inner-menu">
              Show Bar <i class="fa fa-chevron-down"></i>
            </a>
          </div>

          <div class="inner-menu-content">

            <a class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
              <i class="fa fa-upload mr-xs"></i>
              Upload Files
            </a>

            <hr class="separator" />

            <div class="sidebar-widget m-none">
              <div class="widget-header clearfix">
                <h6 class="title pull-left mt-xs">Folders</h6>
                <div class="pull-right">
                  <a href="#" class="btn btn-dark btn-sm btn-widget-act">Add Folder</a>
                </div>
              </div>
              <div class="widget-content">
                <ul class="mg-folders">
                  <li>
                    <a href="#" class="menu-item"><i class="fa fa-folder"></i> My Documents</a>
                    <div class="item-options">
                      <a href="#">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="#" class="text-danger">
                        <i class="fa fa-times"></i>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="menu-item"><i class="fa fa-folder"></i> Templates</a>
                    <div class="item-options">
                      <a href="#">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="#" class="text-danger">
                        <i class="fa fa-times"></i>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="menu-item"><i class="fa fa-folder"></i> Design</a>
                    <div class="item-options">
                      <a href="#">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="#" class="text-danger">
                        <i class="fa fa-times"></i>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="menu-item"><i class="fa fa-folder"></i> PSDs</a>
                    <div class="item-options">
                      <a href="#">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="#" class="text-danger">
                        <i class="fa fa-times"></i>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="menu-item"><i class="fa fa-folder"></i> Downloads</a>
                    <div class="item-options">
                      <a href="#">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="#" class="text-danger">
                        <i class="fa fa-times"></i>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="menu-item"><i class="fa fa-folder"></i> Photos</a>
                    <div class="item-options">
                      <a href="#">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="#" class="text-danger">
                        <i class="fa fa-times"></i>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="menu-item"><i class="fa fa-folder"></i> Projects</a>
                    <div class="item-options">
                      <a href="#">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="#" class="text-danger">
                        <i class="fa fa-times"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <hr class="separator" />

            <div class="sidebar-widget m-none">
              <div class="widget-header">
                <h6 class="title">Labels</h6>
                <span class="widget-toggle">+</span>
              </div>
              <div class="widget-content">
                <ul class="mg-tags">
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Projects</a></li>
                  <li><a href="#">Photos</a></li>
                  <li><a href="#">Websites</a></li>
                  <li><a href="#">Documentation</a></li>
                  <li><a href="#">Download</a></li>
                  <li><a href="#">Images</a></li>
                  <li><a href="#">Vacation</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </menu>
    <div class="inner-body mg-main">

      <div class="inner-toolbar clearfix">
        <ul>
          <li>
            <a href="#" id="mgSelectAll"><i class="fa fa-check-square"></i> <span data-all-text="Select All" data-none-text="Select None">Select All</span></a>
          </li>
          <li>
            <a href="/module/project/create"><i class="fa fa-pencil"></i> Create</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-trash-o"></i> Delete</a>
          </li>
        </ul>
      </div>

      <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">

        @foreach($projects as $project)
        <div class="isotope-item document col-sm-6 col-md-4 col-lg-3" style="cursor: pointer;">
          <div class="thumbnail">
            <div class="thumb-preview">
              <a class="thumb-image" href="{{$project->id}}">
                <img src="/{{$project->avatar}}" class="img-responsive" alt="Project">
              </a>
              <div class="mg-thumb-options">
                <div class="mg-zoom"><i class="fa fa-search"></i></div>
                <div class="mg-toolbar">
                  <div class="mg-option checkbox-custom checkbox-inline">
                    <input type="checkbox" id="file_1" value="1">
                    <label for="file_1">SELECT</label>
                  </div>
                  <div class="mg-group pull-right">
                    <a href="#">EDIT</a>
                    <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                      <i class="fa fa-caret-up"></i>
                    </button>
                    <ul class="dropdown-menu mg-menu" role="menu">
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <h5 class="mg-title text-weight-semibold">{{$project->title}}<small>.png</small></h5>
            <div class="mg-description">
              <small class="pull-left text-muted">Project</small>
              <small class="pull-right text-muted">07/10/2014</small>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- end: page -->
@endsection