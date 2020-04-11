@extends('layouts.main')

@section('title', 'Create project')
@section('module', 'Create project')
@section('path', 'Project / Create')

@section('content')

<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>

                <h2 class="panel-title">Form Elements</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered" method="get">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Title</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputDefault">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Server</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputDefault">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">File Upload</label>
                        <div class="col-md-6">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input">
                                        <i class="fa fa-file fileupload-exists"></i>
                                        <span class="fileupload-preview"></span>
                                    </div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileupload-exists">Change</span>
                                        <span class="fileupload-new">Select file</span>
                                        <input type="file" />
                                    </span>
                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" style="margin-left: 45%;">
                        <a href="#" class="btn btn-primary" data-toggle="confirmation" data-original-title="" title="">Click me</a>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>


@endsection