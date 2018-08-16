@extends('backend.layouts.master')
@section('title', 'Users')
@section('style')
{!! Html::style('assets/demo-bower/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css') !!} 
@endsection
@section('content')
<div class="page-container">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-header">
                        <h2 class="header-title">{{ __('user') }}</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="{{ route('manager.home') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ __('home') }}</a>
                                <a class="breadcrumb-item" href="{{ route('users.index') }}">{{ __('users') }}</a>
                                <span class="breadcrumb-item active">{{ __('index') }}</span>
                            </nav>
                        </div>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="creat_button text-right button_create">
                        <a href="{{ route('users.create') }}" class="btn btn-success">{{ __('Add Employee') }}</a>
                    </div> 
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-overflow">
                        <table id="dt-opt" class="table table-hover table-xl">
                            <thead>
                                <tr>
                                    <th>{{ __('STT') }}</th>
                                    <th>{{ __('name') }}</th>
                                    <th>{{ __('email') }}</th>
                                    <th>{{ __('salary_day') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody> 
                                @php
                                    $stt = 1;
                                @endphp
                                @foreach($users as $value)
                                    <tr>
                                        <td>{{ $stt++ }}</td>
                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="{{ asset(config('app.link_avatar') . $value->avatar) }}" alt=" ">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title"><a href="#" data-value="{{ $value }}" data-toggle="modal" data-target="#modal-lg" id = "show-user">{!! $value->name !!}</a></span>
                                                        <span class="sub-title">{{ $value->part }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{!! str_limit($value->email, 20) !!}</td>
                                        <td>{!! $value->salary_day !!} {{ __('$') }}</td>
                                        <td class="font-size-18">
                                            <a href="{{ route('users.edit', $value->id) }}" class="text-gray m-r-15" data-toggle="tooltip" data-placement="top" title="{{ __('update') }}"><i class="ti-pencil"></i></a>
                                            <a data-toggle="modal" data-target="#basic-modal" data-url="{{ route('users.destroy', $value->id) }}" class="text-gray m-r-15"><i class="ti-trash"></i></a>
                                            @if (($value->salaries->where('month', date('m'))->where('year', date('Y'))->count() != 0))
                                            @else
                                            <a href="{{ route('salary.create', $value->id) }}" class="text-gray m-r-15" data-toggle="tooltip" data-placement="top" title="{{ __('salary') }}"><i class="ti-money"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>                        
                        </table>
                    </div> 
                </div>       
            </div>  
        </div>
        <div class="modal fade" id="basic-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div>
                            <h4 class="d-flex align-items-center h-100 head">{{ __('delete_confirm') }}</h4>
                        </div>
                        <div class="container text-center">
                            <div class="text-center font-size-70">
                                <i class="mdi mdi-checkbox-marked-circle-outline icon-gradient-success"></i>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer no-border">
                        <div class="modal_button">
                            <div class="row"> 
                                {{ Form::button(__('cancel'), ['class' =>'btn btn-default', 'data-dismiss' => 'modal']) }}
                                {!! Form::open(['id' => 'del-form', 'method' => 'delete']) !!}
                                    {{ Form::submit(__('delete'), ['class' =>'btn btn-danger']) }}
                                {!! Form::close() !!}
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg" role="document">
                <div class="card">
                    <div class="card-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="avata-name">
                                    <legend class="avata text-center">{{ __('avatar') }}</legend>
                                    <hr>
                                    </div>
                                    <div class="avata text-center">
                                        <img id = "avatar" class="avata-img img-circle" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <legend class="avata text-center">{{ __('Information') }}</legend>
                                <hr>
                                    <div class="form-group">
                                        {{ Form::label(__('name :'), null, ['class' => 'control-label']) }}
                                        <span id ="name"></span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('email :'), null, ['class' => 'control-label']) }}
                                        <span id ="email"></span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('phone :'), null, ['class' => 'control-label']) }}
                                        <span id ="phone"></span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('birth_day :'), null, ['class' => 'control-label']) }}
                                        <span id ="birthday"></span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('part :'), null, ['class' => 'control-label']) }}
                                        <span id ="part"></span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('salary_day :'), null, ['class' => 'control-label']) }}
                                        <span id ="salaryday"></span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('day_in :'), null, ['class' => 'control-label']) }}
                                        <span id ="dayin"></span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('sex :'), null, ['class' => 'control-label']) }}
                                        <span id ="sex"></span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('address :'), null, ['class' => 'control-label']) }}
                                        <span id ="address"></span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label(__('role :'), null, ['class' => 'control-label']) }}
                                        <span id ="role"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    {{ Html::script('assets/demo-bower/assets/vendor/datatables/media/js/jquery.dataTables.js') }}
    {{ Html::script('assets/demo-bower/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}
    {{ Html::script('assets/demo-bower/assets/js/tables/data-table.js') }}
    <script type="text/javascript">
        $(function() {
            $('#basic-modal').on('show.bs.modal', function(e) {
                var url = $(e.relatedTarget).data('url');
                $('#del-form').attr('action', url);
            });
            $('#modal-lg').on('show.bs.modal', function(e) {
                var value = $(e.relatedTarget).data('value');
                $('#avatar').attr('src', '/assets/images/avatars/' + value.avatar);
                $('#name').text(value.name);
                $('#email').text(value.email);
                $('#phone').text(value.phone);
                $('#birthday').text(value.birth_day);
                $('#salaryday').text(value.salary_day);
                $('#dayin').text(value.day_in);
                $('#sex').text(value.sex);
                $('#address').text(value.address);
                $('#role').text(value.role);
                $('#part').text(value.part);
            });
        });
    </script>
@endsection
