@extends('layouts.vertical', ['title' => 'Show'])

@section('css')
    <!-- Plugins css -->
    {{-- <link href="{{ asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" rel="stylesheet"
        type="text/css" />
@endsection
{{-- <style>
  .treeview-animated.w-20{
         width: 100%;
  }
</style> --}}
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        @include('layouts.shared/breadcrumb')

        <div class="row" style="overflow-x:auto">
            <div class="col-xl-12 col-lg-12">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body" style="overflow-x:auto">
                        {{-- <div id="default-tree"></div> --}}
                        {{-- <div class="col-sm-4"> --}}
                        <div id="myTree"></div>
                        {{-- </div> --}}

                    </div> <!-- end card-body-->

                </div> <!-- end card-->


            </div> <!-- end col -->


        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            baseUrl = 'http://127.0.0.1:8000/admin';
            // var treeData = [];
            $.post(
                baseUrl + "/getChilds/" + 3385, {
                    '_method': 'POST',
                    "_token": "{{ csrf_token() }}",
                },
                function(response) {
                    var treeData = [];
                    if (isJSON(response)) {
                        var $data = response;
                        if ($data.status == true) {
                            console.log($('.nested').html());
                            

                            response.data.forEach(element => {
                                // console.log(element);
                                if (element['parent'] == 0) {
                                    treeData.push({
                                        text: element['name_ar'],

                                    });
                                } else {
                                    treeData.push({

                                        nodes: [{
                                            text: element['name_ar'],
                                        }],
                                    });
                                }
                                // html += "";

                            });
                          

                        } else {
                            alert('data')
                        }
                        $('#myTree').treeview({
                            color: "#428bca",
                            data: treeData,
                            onNodeSelected: function(event, data) {
                                console.log(data)
                            }
                        });
                    }
                }

            )

        });

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
    </script>
    {{-- <script>
        var myTree = [{
                text: "Item 1",
                nodes: [{
                        text: "Item 1-1",
                        nodes: [{
                                text: "Item 1-1-1"
                            },
                            {
                                text: "Item 1-1-2"
                            }
                        ]
                    },
                    {
                        text: "Item 1-2"
                    }
                ]
            },
            {
                text: "Item 2"
            },
            {
                text: "Item 3"
            }

        ];
        baseUrl = 'http://127.0.0.1:8000/admin';
        $('#default-tree').treeview({
                data: myTree
            });
        $(document).ready(function() {
            $.post(
                baseUrl + "/getChilds/" + targetEl.getAttribute('data-tree'), {
                    '_method': 'POST',
                    "_token": "{{ csrf_token() }}",
                },
                function(response) {

                    if (isJSON(response)) {
                        var $data = response;
                        if ($data.status == true) {
                            console.log($('.nested').html());
                            // $('.nested').html();
                            // alert({{ $result->id }});
                            // if(targetEl.getAttribute('data-tree') == {{ $result->id }}){
                            // var html = $('.treeview-animated-element').html();
                            // var html = $('.treeview-animated-items').html();
                            // }

                            response.data.forEach(element => {
                                // console.log(element);
                                if (element['parent'] == 0) {
                                    chart.push({
                                        text: element['name_ar'],
                                        // values: $.map(data[1], function(entry) {
                                        //     return {
                                        //         x: entry.date,
                                        //         y: Math.round(entry.value)
                                        //     };
                                        // })
                                    });
                                } else {
                                    chart.push({
                                        text: element['name_ar'],
                                        // values: $.map(data[1], function(entry) {
                                        //     return {
                                        //         x: entry.date,
                                        //         y: Math.round(entry.value)
                                        //     };
                                        // })
                                    });
                                }
                                // html += "";

                            });
                            // $(".nested").append(Listhtml);

                            // }

                        } else {
                            alert('data')
                        }
                    }
                }

            )


            $('#default-tree').treeview({
                data: myTree
            });
        });
    </script> --}}
    {{-- <script>
        $(document).ready(function() {
            $('.treeview-animated').mdbTreeview();
        });
        baseUrl = 'http://127.0.0.1:8000/admin';

        function showLoader(targetEl, Listhtml) {

            // div1 = document.getElementById('caret');
            // dataID = div1.getAttribute('data-tree');
            // console.log(targetEl.getAttribute('data-tree'));
            $.post(
                baseUrl + "/getChilds/" + targetEl.getAttribute('data-tree'), {
                    '_method': 'POST',
                    "_token": "{{ csrf_token() }}",
                },
                function(response) {

                    if (isJSON(response)) {
                        var $data = response;
                        if ($data.status == true) {
                            console.log($('.nested').html());
                            // $('.nested').html();
                            // alert({{ $result->id }});
                            // if(targetEl.getAttribute('data-tree') == {{ $result->id }}){
                            // var html = $('.treeview-animated-element').html();
                            // var html = $('.treeview-animated-items').html();
                            // }

                            response.data.forEach(element => {
                                // console.log(element);
                                if (element['parent'] == 0) {
                                    // names.push(`<li><div class="treeview-animated-element"><i class="far fa-bell ic-w mr-1"></i>` +
                                    //     element['name_ar'] + `</li>\n`);
                                    Listhtml +=
                                        `<li><div class="treeview-animated-element"><i class="far fa-bell ic-w mr-1"></i>` +
                                        element['name_ar'] + `</li>\n`;
                                } else {
                                    // names.push(`<li class="treeview-animated-items">
                                //   <a class="closed"><i class="fas fa-angle-right"></i>
                                //     <span class="tree" data-tree=\"` + element['id'] +
                                    //     ` ><i class="far fa-calendar-alt ic-w mx-1"></i>` + element['name_ar'] + `</span></a></li>`);
                                    Listhtml += `<li class="treeview-animated-items">
                                      <a class="closed"><i class="fas fa-angle-right"></i>
                                        <span class="tree" data-tree=\"` + element['id'] +
                                        ` ><i class="far fa-calendar-alt ic-w mx-1"></i>` + element['name_ar'] +
                                        `</span></a>`;
                                    Listhtml += '</li>\n';

                                }
                                // html += "";

                            });
                            $(".nested").append(Listhtml);

                            // }

                        } else {
                            alert('data')
                        }
                    }
                }

            )



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
            $('.tree').on('click', function(e) {
                //   var listhtml = '';
                // console.log(e);
                showLoader(e.target, listhtml);
            })



        })
        $(document).on('click', '.tree', function(e) {
            //   console.log(e.target);
            var listhtml = '';
            showLoader(e.target, listhtml);
        })

     
    </script> --}}
@endsection
