@extends('layouts.vertical', ['title' => 'Edit Products'])

@section('css')
    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->

        @include('layouts.shared/breadcrumb')

        <!-- end page title -->


        {!! Form::open([
            'route' => isset($result) ? ['system.category.update', $result->id] : 'system.category.store',
            'files' => true,
            'method' => isset($result) ? 'PATCH' : 'POST',
            'class' => 'forms-sample',
            'id' => 'main-form',
            'onsubmit' => 'submitMainForm();return false;',
        ]) !!}
        <div id="form-alert-message"></div>
        <div class="row">


            {{-- <div class="row"> --}}
            <div class="col-lg-6">
                <div class="card-box">


                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">{{ __('General') }}</h5>

                    <div class="form-group mb-3">
                        <label>{{ __('Name (AR)') }}</label>
                        {!! Form::text('name_ar', isset($result) ? $result->name_ar : null, [
                            'class' => 'form-control',
                            'id' => 'name_ar-form-input',
                            'autocomplete' => 'off',
                        ]) !!}
                        <div class="invalid-feedback" id="name_ar-form-error"></div>
                    </div>

                    <div class="form-group mb-3">
                        <label>{{ __('Name (EN)') }}</label>
                        {!! Form::text('name_en', isset($result) ? $result->name_en : null, [
                            'class' => 'form-control',
                            'id' => 'name_en-form-input',
                            'autocomplete' => 'off',
                        ]) !!}
                        <div class="invalid-feedback" id="name_en-form-error"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label>{{ __('Order') }}</label>
                        {!! Form::number('order', isset($result) ? $result->order : null, [
                            'class' => 'form-control',
                            'id' => 'order-form-input',
                            'autocomplete' => 'off',
                        ]) !!}
                        <div class="invalid-feedback" id="order-form-error"></div>
                    </div>
                    @if (isset($result))
                        <div class="form-group mb-3">
                            <label>{{ __('Slug') }}</label>
                            {!! Form::text('slug', isset($result) ? $result->slug : null, [
                                'class' => 'form-control',
                                'id' => 'slug-form-input',
                                'autocomplete' => 'off',
                                'disabled' => 'disabled'
                            ]) !!}
                            <div class="invalid-feedback" id="slug-form-error"></div>
                        </div>
                    @endif
                    <div class="form-group mb-3">
                        <label>{{ __('Parent Id') }}</label>
                        {!! Form::select(
                            'parent_id',
                            App\Helpers\Helper::categoriesForSelect(),
                            isset($result) ? $result->parent_id : null,
                            ['class' => 'select2 form-control ajax-categories', 'id' => 'parent_id-form-input', 'autocomplete' => 'off'],
                        ) !!}
                        
                        <div class="invalid-feedback" id="parent_id-form-error"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label>{{ __('Status') }}</label>
                        {!! Form::select('status', ['1' => __('Active'), '0' => __('In-Active')], null, [
                            'class' => 'form-control',
                            'id' => 'status-form-input',
                        ]) !!}
                        <div class="invalid-feedback" id="status-form-error"></div>

                    </div>

                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">{{ __('Category Images') }}</h5>

                    <div class="form-group mb-3">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        <div class="invalid-feedback" id="image-form-error"></div>

                    </div>
                    <div class="form-group mb-3">
                        <img id="preview-image" class="img-fluid"
                            src="{{ isset($result) ? asset('storage/' . $result->image) : asset('assets/images/avatar.jpg') }}" alt="preview image">
                    </div>
                    {{-- <div class="d-none" id="uploadPreviewTemplate">
                        <div class="card mt-1 mb-0 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                                        <p class="mb-0" data-dz-size></p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                            <i class="dripicons-cross"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-3">
                    <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>
                    <button type="submit"
                        class="btn w-sm btn-success waves-effect waves-light">{{ __('Submit') }}</button>
                </div>
            </div> <!-- end col -->
        </div>
        {{-- </div> --}}
        {!! Form::close() !!}


        <!-- end row -->


        <!-- end row -->





    </div> <!-- container -->
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
        $('#image').change(function() {

            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);

        });

        function submitMainForm() {

            formSubmit(
                '{{ isset($result) ? route('system.category.update', $result->id) : route('system.category.store') }}',
                new FormData($('#main-form')[0]),
                function($data) {
                    if ($data.status) {
                        if (typeof $data.data.url !== 'undefined') {
                            window.location = $data.data.url;
                        } else {
                            $('#main-form')[0].reset();
                            $("html, body").animate({
                                scrollTop: 0
                            }, "fast");
                            pageAlert('#form-alert-message', 'success', $data.message);
                        }
                    } else {
                        $("html, body").animate({
                            scrollTop: 0
                        }, "fast");
                        pageAlert('#form-alert-message', 'error', $data.message);
                    }
                },
                function($data) {
                    $("html, body").animate({
                        scrollTop: 0
                    }, "fast");
                    pageAlert('#form-alert-message', 'error', $data.message);
                }
            );
        }
    </script>
@endsection
