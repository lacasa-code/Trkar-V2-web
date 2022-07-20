@extends('layouts.vertical', ['title' => 'Edit Products'])

@section('css')
    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <!-- Filter -->
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="collapse" id="filter-collapse">
                            {!! Form::open([
                                'id' => 'filterForm',
                                'onsubmit' => 'tablePaginationFilter($(this));return false;',
                                'class' => 'forms-sample',
                            ]) !!}
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Filter') }}</h6>
                                <div id="form-alert-message"></div>
                                <div class="form-group mb1">
                                    <label>{{ __('Created At') }}</label>
                                    <div class="input-daterange input-group" id="k_datepicker_5">
                                        {!! Form::text('created_at1', null, [
                                            'class' => 'form-control',
                                            'autocomplete' => 'off',
                                            'id' => 'created_at1-form-input',
                                        ]) !!}
                                        <div class="invalid-feedback" id="created_at1-form-error"></div>

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i
                                                    class="mdi mdi-format-horizontal-align-center"></i></span>
                                        </div>
                                        {!! Form::text('created_at2', null, [
                                            'class' => 'form-control',
                                            'autocomplete' => 'off',
                                            'id' => 'created_at2-form-input',
                                        ]) !!}
                                        <div class="invalid-feedback" id="created_at2-form-error"></div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 convert-text">
                                        <label>{{ __('ID') }}</label>
                                        {!! Form::number('id', null, ['class' => 'form-control', 'id' => 'id-form-input']) !!}
                                        <div class="invalid-feedback" id="id-form-error"></div>
                                    </div>
                                    <div class="col-sm-6 convert-text">
                                        <label>{{ __('Name') }}</label>
                                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name-form-input']) !!}
                                        <div class="invalid-feedback" id="name-form-error"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2 btn-icon-text">
                                    <i class="btn-icon-prepend" data-feather="search"></i>
                                    {{ __('Filter') }}
                                </button>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filter -->
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 convert-text">
                            <h6 class="card-title">{{ $pageTitle }}</h6>
                        </div>
                        <!-- Filter -->
                        <div class="col-sm-6 button-class">
                            <button type="button" class="btn btn-primary btn-icon-text" data-toggle="collapse"
                                href="#filter-collapse" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <i class="btn-icon-prepend" data-feather="search"></i>
                                {{ __('Filter') }}
                            </button>
                            <a class="btn btn-primary btn-icon-text" href="{{ route('system.category.create') }}">
                                <i class="mdi mdi-plus-circle-outline"></i>
                                {{ __('Create') }}
                            </a>
                        </div>
                        <!-- Filter -->
                    </div>
                    <div class="table-responsive" id="table-pagination-div">
                        <table id="table-pagination" style="text-align: center;margin-top: 25px;margin-bottom: 25px;"
                            class="table table-striped table-bordered">
                            <tbody>
                                <tr id="table-pagination-tr-empty">
                                    <td id="table-pagination-td-empty">{{ __('Loading...') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/libs/dropzone/dropzone.min.js') }}"></script>

    <!-- Page js-->
    <script src="{{ asset('assets/js/pages/form-fileuploads.init.js') }}"></script>
    <script src="{{ asset('assets/js/pages/add-product.init.js') }}"></script>
    <script src="{{ asset('js/helper.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            tablePagination('{!! url()->full() !!}');
        });

        function tablePagination($url, $onDone) {
            $.get($url, {
                'isTablePagination': true
            }, function($html) {
                $('#table-pagination-div').html($html);
                if ($onDone !== undefined) {
                    $onDone();
                }
                removeLoading();
            });
        }
    </script>
@endsection
