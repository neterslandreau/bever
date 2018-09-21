@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <button type="button" class="btn btn-primary" id="toggle-panels">Toggle</button>
    <div class="row">

        <div id="site-configuration" style="display:none;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Site Configuration</div>
                    <div class="panel-body" style="overflow: scroll;">
                        @include('partials.admin-configs')
                    </div>
                </div>
            </div>
        </div>

        <div id="site-projects" style="display:block;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Projects</div>

                    <div class="panel-body" style="overflow: scroll;">
                        @include('partials.admin-projects')
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@foreach ($projects as $project)

    @include('partials.portfolio-modal')
    
@endforeach
@endsection
