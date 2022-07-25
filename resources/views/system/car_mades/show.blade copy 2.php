@extends('layouts.vertical', ['title' => 'Task Details'])

@section('css')
    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
@endsection
<style>
    ul, #myUL {
      list-style-type: none;
    }
    
  
    
    .caret {
      cursor: pointer;
      -webkit-user-select: none; /* Safari 3.1+ */
      -moz-user-select: none; /* Firefox 2+ */
      -ms-user-select: none; /* IE 10+ */
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
      -ms-transform: rotate(90deg); /* IE 9 */
      -webkit-transform: rotate(90deg); /* Safari */'
      transform: rotate(90deg);  
    }
    
    .nested {
      display: none;
    }
    
    .active {
      display: block;
    }
    </style>@section('content')
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
                                {{-- <ul class="nested">
                                    <li>Water</li>
                                    <li>Coffee</li>
                                    <li><span class="caret">Tea</span>
                                        <ul class="nested">
                                            <li>Black Tea</li>
                                            <li>White Tea</li>
                                            <li><span class="caret">Green Tea</span>
                                                <ul class="nested">
                                                    <li>Sencha</li>
                                                    <li>Gyokuro</li>
                                                    <li>Matcha</li>
                                                    <li>Pi Lo Chun</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> --}}
                                {{json_encode($result->managedIDs())}}
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
    <script src="{{ asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script>
        var toggler = document.getElementsByClassName("caret");
        console.log(toggler);
        var i;

        for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function() {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
        }

        // function showLoader(){
        //     $.ajax({
        //         type: "POST",
        //         url: baseUrl+"/getChilds/",
        //         dataType : 'html',
        //         cache: false,
        //         success : function($response){
        //             $("treeview-animated-list mb-3").append(" <b>Appended text</b>.");
        //         }
        //     });
        // }
    </script>
@endsection
