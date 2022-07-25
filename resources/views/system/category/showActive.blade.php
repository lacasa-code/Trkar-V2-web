@extends('layouts.vertical', ['title' => 'Task Details'])

@section('css')
    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
@endsection
<style>
    ul,
    #myUL {
        list-style-type: none;
    }



    .caret {
        cursor: pointer;
        -webkit-user-select: none;
        /* Safari 3.1+ */
        -moz-user-select: none;
        /* Firefox 2+ */
        -ms-user-select: none;
        /* IE 10+ */
        user-select: none;
    }

    ul {
        padding-right: 30px !important;
    }

    .caret::before {
        content: "\25B6";
        color: black;
        display: inline-block;
        margin-right: 6px;
    }

    .caret-down::before {
        -ms-transform: rotate(90deg);
        /* IE 9 */
        -webkit-transform: rotate(90deg);
        /* Safari */
        '
transform: rotate(90deg);
    }

    .nested {
        display: none;
    }

    .active {
        display: block;
    }
</style>
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Task Detail</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Task Detail</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <ul id="myUL">
                            <li><span class="caret " id="caret "
                                    data-tree="{{ $result->id }}">{{ $result->name_ar }}</span>
                                <ul class="nested">

                                </ul>
                            </li>
                        </ul>

                    </div> <!-- end col -->


                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- end card-body-->

    </div> <!-- end card-->
@endsection

@section('script')
    <!-- Plugins js-->
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script> --}}
    {{-- <script src="{{ asset('assets/libs/dropzone/dropzone.min.js') }}"></script> --}}
    <script>
        baseUrl = 'http://127.0.0.1:8000/admin';

        function showLoader(targetEl) {

            // div1 = document.getElementById('caret');
            // dataID = div1.getAttribute('data-tree');
            // console.log(dataID);
            $.post(
                baseUrl + "/getChilds/" + targetEl.getAttribute('data-tree'), {
                    '_method': 'POST',
                    "_token": "{{ csrf_token() }}",
                },
                function(response) {

                    if (isJSON(response)) {
                        var $data = response;
                        if ($data.status == true) {
                            // var toggler = document.getElementsByClassName("caret");
                            // console.log(toggler
                            // );
                            // console.log(response);
                            var i;
                            // alert(response);
                            var html = '';
                            response.data.forEach(element => {
                                // console.log(element);
                                if (element['parent'] == 0) {
                                    html += "<li>" + element['name_en'] + "</li>\n";
                                } else {
                                    // $('#amount').data('id',element['id']);
                                    html += "<li><span  data-tree=\"" + element['id'] +
                                        "\"  class='caret loader-btn'>" + element['name_en'] + "</span><ul class='nested '></ul></li>\n";
                                }
                                html += "";
                               
                            });
                            var toggler = document.getElementsByClassName("caret");
                            var i;
                            $(".nested").html(html);
                            // for (i = 0; i < toggler.length; i++) {
                                // console.log(this.classList);
                                toggler[0].addEventListener("click", function() {
                                    this.parentElement.querySelector(".nested").classList.toggle("active");
                                    this.classList.toggle("caret-down");
                                });
                            // }

                        } else {
                            alert('data')
                        }
                    }
                }

            )


            function isJSON(m) {
                if (typeof m == 'object') {
                    try {
                        m = JSON.stringify(m);
                    } catch (err) {
                        return false;
                    }
                }

                if (typeof m == 'string') {
                    try {
                        m = JSON.parse(m);
                    } catch (err) {
                        return false;
                    }
                }

                if (typeof m != 'object') {
                    return false;
                }
                return true;

            };

            // $.ajax({
            //     type: "POST",
            //     url: baseUrl + "/getChilds/{{ $result->id }}",
            //     dataType: 'json',
            //     cache: false,
            //     success: function($response) {
            //         alert($response);
            //         for (i = 0; i < toggler.length; i++) {
            //             var text_words = [];
            //             $html += "<li>Water</li><li>Coffee</li>";
            //             toggler[i].addEventListener("click", function() {
            //                 $("treeview-animated-list mb-3").append($html);
            //                 this.parentElement.querySelector(".nested").classList.toggle("active");
            //                 this.classList.toggle("caret-down");
            //             });
            //         }
            //     }
            // });



        }
        $(document).ready(function() {
            $('.caret').on('click', function(e) {
                showLoader(e.target);
            })

            $(document).on('click', '.caret', function(e) {
                showLoader(e.target);
            })

        })
    </script>
@endsection
