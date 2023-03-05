@extends('admin.layout.mono')

@section('content')

<div class="row">
    <div class="col-xl-6">
        <div class="card card-default">
            <div class="card-body">
                <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#modal_new_item">
                    {{ __('language.new_iten') }}
                </button>
                <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#modal_new_group">
                    {{ __('language.new_group') }}
                </button>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card card-default">
            <div class="card-body">
                <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#modal_new_item">
                    {{ __('language.new_iten') }}
                </button>
                <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#modal_new_group">
                    {{ __('language.new_group') }}
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card card-default">
            <div class="card-body">
                <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#modal_new_item">
                    {{ __('language.new_iten') }}
                </button>
                <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#modal_new_group">
                    {{ __('language.new_group') }}
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card card-default">
            <div class="card-body">
                <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#modal_new_item">
                    {{ __('language.new_iten') }}
                </button>
                <button type="button" class="btn btn-info btn-pill" data-toggle="modal" data-target="#modal_new_group">
                    {{ __('language.new_group') }}
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card card-default">
            <div class="card-body">
                <button type="button" class="btn btn-info btn-pill" >
                    {{ __('language.new_iten') }}
                </button>
                <button type="button" class="btn btn-info btn-pill" >
                    {{ __('language.new_group') }}
                </button>
            </div>
        </div>
    </div>
</div>

@endsection