@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mi cuenta</div>

                <div class="panel-body">
                    @if (Auth::check())
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Auth::user()->name }}  You are logged in!
                        </div>
                    @endif
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
