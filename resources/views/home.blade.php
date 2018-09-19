@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Site Configuration</div>
                <div class="panel-body" style="overflow: scroll;">
                    @include('partials.admin-configs')
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Projects</div>

                <div class="panel-body" style="overflow: scroll;">
                    @include('partials.admin-projects')
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($projects as $project)

    @include('partials.portfolio-modal')
    
@endforeach
@endsection
