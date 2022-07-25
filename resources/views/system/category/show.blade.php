@extends('layouts.vertical', ['title' => 'Show'])

@section('css')
    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
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
                        <div class="treeview-animated  border mx-4 my-4">
                            <h6 class="pt-3 pl-3">Folders</h6>
                            <hr>
                            <ul class="treeview-animated-list mb-3">
                                <li class="treeview-animated-items">
                                    <a class="closed">
                                        <i class="fas fa-angle-right"></i>
                                        <span data-tree="{{ $result->id }}" class="tree"><i
                                                class="far fa-envelope-open ic-w mx-1"></i>{{ $result->name_ar }}</span>
                                    </a>
                                    <ul class="nested">

                                        {{-- <li class="treeview-animated-items">
                                    <a class="closed"><i class="fas fa-angle-right"></i>
                                      <span><i class="far fa-calendar-alt ic-w mx-1"></i>Calendar</span></a>
                                    <ul class="nested"><li><div class="treeview-animated-element"><i class="far fa-clock ic-w mr-1"></i>Deadlines</li>
                                      <li>
                                        <div class="treeview-animated-element"><i class="fas fa-users ic-w mr-1"></i>Meetings
                                      </li>
                                      <li>
                                        <div class="treeview-animated-element"><i class="fas fa-basketball-ball ic-w mr-1"></i>Workouts
                                      </li>
                                      <li>
                                        <div class="treeview-animated-element"><i class="fas fa-mug-hot ic-w mr-1"></i>Events
                                      </li>
                                    </ul>
                                  </li> --}}
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div> <!-- end card-body-->

                </div> <!-- end card-->


            </div> <!-- end col -->


        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src="{{ asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.treeview-animated').mdbTreeview();
        });
        baseUrl = 'http://127.0.0.1:8000/admin';
        
        function showLoader(targetEl , Listhtml) {

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
                          // alert({{$result->id}});
                          // if(targetEl.getAttribute('data-tree') == {{$result->id}}){
                            // var html = $('.treeview-animated-element').html();
                            // var html = $('.treeview-animated-items').html();
                          // }
                           
                            response.data.forEach(element => {
                                // console.log(element);
                                if (element['parent'] == 0) {
                                    // names.push(`<li><div class="treeview-animated-element"><i class="far fa-bell ic-w mr-1"></i>` +
                                    //     element['name_ar'] + `</li>\n`);
                                  Listhtml += `<li><div class="treeview-animated-element"><i class="far fa-bell ic-w mr-1"></i>` +
                                        element['name_ar'] + `</li>\n`;
                                } else {
                                    // names.push(`<li class="treeview-animated-items">
                                    //   <a class="closed"><i class="fas fa-angle-right"></i>
                                    //     <span class="tree" data-tree=\"` + element['id'] +
                                    //     ` ><i class="far fa-calendar-alt ic-w mx-1"></i>` + element['name_ar'] + `</span></a></li>`);
                                  Listhtml += `<li class="treeview-animated-items">
                                      <a class="closed"><i class="fas fa-angle-right"></i>
                                        <span class="tree" data-tree=\"` + element['id'] +
                                        ` ><i class="far fa-calendar-alt ic-w mx-1"></i>` + element['name_ar'] + `</span></a>`;
                                  Listhtml += '</li>\n';
                                   
                                }
                                // html += "";

                            });

                            $(".nested").html(Listhtml);

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
              var listhtml = '';
                // console.log(e);
                showLoader(e.target,listhtml);
            })

           

        })
        $(document).on('click', '.tree', function(e) {
            //   console.log(e.target);
              var listhtml = '';
              showLoader(e.target,listhtml);
            })
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
@endsection
