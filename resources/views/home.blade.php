@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-5">
            <div class="panel panel-default">
                <div class="panel-heading">Site Configuration</div>
                <div class="panel-body">
                    Configuration settings
                </div>
            </div>
        </div>
        <div class="col-xs-7">
            <div class="panel panel-default">
                <div class="panel-heading">Projects</div>

                <div class="panel-body">
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
