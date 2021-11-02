@extends('layout.master')

@section('title','About Us')

@section('content')
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10"> About Us</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">About US</a></li>
                                        </ul>
                                    </div>
                                    @if($message = Session::get('success'))
                                    <div class="alert allert-success">{{$message}}
                                    </div>
                                    @endif

                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ foo-table ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5> About US</h5>
                                            <div class="card-header-right">
                                                <!--Start Create about us-->
                                                <button class="btn btn-success btn-sm" type="button" data-toggle="modal"
                                                    data-target="#CreateAboutUs">
                                                    <i class="fa fa-plus">Add</i>

                                                </button>
                                                {{-- Modal --}}
                                                <div class="modal fade " id="CreateAboutUs" tabindex="-1" role="dialog"
                                                    aria-labelledby="CreateAboutUs" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Create New About Us</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route('aboutUsSubmit')}}"
                                                                    enctype="multipart/form-data">
                                                                    <!--Start Row-->
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="first_title"
                                                                                class="col-form-label">First
                                                                                title:</label>
                                                                            <input type="text"
                                                                                value="{{old('first_title')}}"
                                                                                class="form-control" name="first_title"
                                                                                id="first_title" required>
                                                                            @error('first_title')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="first_desc"
                                                                                class="col-form-label">First
                                                                                desc:</label>
                                                                            <textarea rows="1" cols="5"
                                                                                value="{{old('first_desc')}}"
                                                                                class="form-control" name="first_desc"
                                                                                id="first_desc" required></textarea>
                                                                            @error('first_desc')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                    <!--End Row-->
                                                                    <!--Start Row-->
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="second_title	"
                                                                                class="col-form-label">Second
                                                                                title:</label>
                                                                            <input type="text"
                                                                                value="{{old('second_title')}}"
                                                                                class="form-control" name="second_title"
                                                                                id="second_title" required>
                                                                            @error('second_title ')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="second_desc"
                                                                                class="col-form-label">Second
                                                                                desc</label>
                                                                            <textarea rows="1" cols="5"
                                                                                value="{{old('second_desc')}}"
                                                                                class="form-control" name="second_desc"
                                                                                id="first_desc" required></textarea>
                                                                            @error('second_desc')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                    <!--End Row-->
                                                                    <!--Start Row-->
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="third_title"
                                                                                class="col-form-label">third
                                                                                title:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="third_title"
                                                                                value="{{old('third_title')}}"
                                                                                id="third_title" required>
                                                                            @error('third_title')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="third_desc"
                                                                                class="col-form-label">third
                                                                                desc:</label>
                                                                            <textarea rows="1" cols="5"
                                                                                value="{{old('third_desc')}}"
                                                                                class="form-control" name="third_desc"
                                                                                id="third_desc" required></textarea>
                                                                            @error('third_desc')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                    <!--End Row-->
                                                                    <!--Start Row-->
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="image"
                                                                                class="col-form-label">Choose
                                                                                image:</label>
                                                                            <input type="file" class="form-control"
                                                                                accept="image/*" name="image" id="image"
                                                                                required>
                                                                            @error('image')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="video"
                                                                                class="col-form-label">video:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="video" id="video"
                                                                                accept="video/mp4,video/x-m4v,video/*"
                                                                                required>
                                                                            @error('video')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                    <!--End Row-->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close
                                                                        </button>
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Create
                                                                        </button>
                                                                    </div>
                                                                    <!--End Row-->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Edite About US SECATION --}}


                                                <div class="modal fade" id="EditAboutUs" tabindex="-1" role="dialog"
                                                    aria-labelledby="EditAboutUs" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit about Us</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="edit-form"
                                                                    action="{{route('updateAbout_Us')}}" method="POST"
                                                                    enctype="multipart/form-data">
                                                                    <!--Start Row-->
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="first_title_edit"
                                                                                class="col-form-label">First
                                                                                Title:</label>
                                                                            <input type="text" value=""
                                                                                class="form-control first_title_edit"
                                                                                name="first_title" id="first_title_edit"
                                                                                required>
                                                                            @error('first_title_edit')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="first_desc_edit"
                                                                                class="col-form-label">First
                                                                                desc:</label>
                                                                            <textarea rows="1" cols="5" value=""
                                                                                class="form-control first_desc_edit"
                                                                                name="first_desc" id="first_desc_edit"
                                                                                required></textarea>
                                                                            @error('first_desc_edit')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                    <!--End Row-->
                                                                    <!--Start Row-->
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="second_title_edit"
                                                                                class="col-form-label">second title
                                                                                :</label>
                                                                            <input type="text" value=""
                                                                                class="form-control second_title_edit"
                                                                                name="second_title"
                                                                                id="second_title_edit" required>
                                                                            @error('second_title_edit ')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="second_desc_edit"
                                                                                class="col-form-label">second
                                                                                desc</label>
                                                                            <textarea rows="1" cols="5" value=""
                                                                                class="form-control second_desc_edit"
                                                                                name="second_desc" id="second_desc_edit"
                                                                                required></textarea>
                                                                            @error('second_desc_edit')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                    <!--End Row-->
                                                                    <!--Start Row-->
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="third_title_edit"
                                                                                class="col-form-label">third
                                                                                title:</label>
                                                                            <input type="text"
                                                                                class="form-control third_title_edit"
                                                                                name="third_title" value=""
                                                                                id="third_title_edit" required>
                                                                            @error('third_title_edit')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="third_desc_edit"
                                                                                class="col-form-label">third
                                                                                desc:</label>
                                                                            <textarea rows="1" cols="5" value=""
                                                                                class="form-control third_desc_edit"
                                                                                name="third_desc" id="third_desc_edit"
                                                                                required></textarea>
                                                                            @error('third_desc_edit')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                    <!--End Row-->
                                                                    <!--Start Row-->
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="image_edit"
                                                                                class="col-form-label">Choose
                                                                                image:</label>
                                                                            <input type="file"
                                                                                class="form-control image_edit"
                                                                                accept="image/*" name="image"
                                                                                id="image_edit" required>
                                                                            <label id="image_edit_path"></label>
                                                                            @error('image_edit')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="video_edit"
                                                                                class="col-form-label">
                                                                                video:</label>
                                                                            <input type="file"
                                                                                class="form-control video_edit"
                                                                                accept="video/mp4,video/x-m4v,video/*"
                                                                                name="video" id="video_edit" required>

                                                                            <label id="video_edit_path"></label>
                                                                            @error('video_edit')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <!--End Row-->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close
                                                                        </button>
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Update
                                                                        </button>
                                                                    </div>
                                                                    <input type="hidden" class="form-control"
                                                                        name="modal_input_id_edit"
                                                                        id="modal_input_id_edit" value="" />
                                                                    <!--End Row-->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Create ABOUT US-->
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>Filtering</h5>
                        <hr>
                        <table id="demo-foo-filtering" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th data-breakpoints="xs">id</th>
                                    <th data-breakpoints="xs">first title</th>
                                    <th data-breakpoints="xs">first desc</th>
                                    <th data-breakpoints="xs">Second title</th>
                                    <th data-breakpoints="xs">Second desc</th>
                                    <th data-breakpoints="xs">third title</th>
                                    <th data-breakpoints="xs">third desc</th>
                                    <th data-breakpoints="xs">image</th>
                                    <th data-breakpoints="xs">Video</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--Start Table Row-->
                                @foreach($about as $about_us)
                                <tr class="data-row">
                                    <td hidden></td>
                                    <td>{{ ++$i }}</td>
                                    <td class="first_title">{{$about_us->first_title}}</td>
                                    <td class="first_desc">{{$about_us->first_desc}}</td>
                                    <td class="second_title">{{$about_us->second_title}}</td>
                                    <td class="second_desc">{{$about_us->second_desc}}</td>
                                    <td class="third_title">{{$about_us->third_title}}</td>
                                    <td class="third_desc">{{$about_us->third_desc}}</td>
                                    <td class="image">{{$about_us->image}}</td>
                                    <td class="video">{{$about_us->video}}</td>

                                    <td>
                                        <form action="{{ route('deleteAbout_Us', $about_us->id) }}" method="POST">
                                            <button class="btn btn-success btn-sm btnEditAboutUs" type="button"
                                                data-toggle="modal" data-item-id="{{$about_us->id}}"
                                                data-target="#EditAboutUs">Edit
                                                <i class="fa fa-edit"></i>

                                            </button>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash fa-fw"></i>
                                                delete</button>
                                        </form>
                                    </td>



                                </tr>
                                @endforeach

                                <!--End Table Row-->
                                <!--End Table Row-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- [ foo-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
    </div>
    </div>
    </div>
    </div>
</section>

@endsection
<!-- [ Main Content ] end -->

@section('script')

<!-- footable Js -->
<script src="{{url('assets/plugins/footable/js/footable.min.js')}}"></script>
<script>
    $(document).ready(function() {

    $('.btnEditAboutUs').on('click', function() {
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
});

    $('#EditAboutUs').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var first_title_edit = row.children(".first_title").text();
    var first_desc_edit = row.children(".first_desc").text();
    var second_title_edit = row.children(".second_title").text();
    var second_desc_edit = row.children(".second_desc").text();
    var third_title_edit = row.children(".third_title").text();
    var third_desc_edit = row.children(".third_desc").text();
    var image_edit = row.children(".image").text();
    var video_edit = row.children(".video").text();

    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);
    $("#first_title_edit").val(first_title_edit);
    $("#first_desc_edit").val(first_desc_edit);
    $("#second_title_edit").val(second_title_edit);
    $("#second_desc_edit").val(second_desc_edit);
    $("#third_title_edit").val(third_title_edit);
    $("#third_desc_edit").val(third_desc_edit);
    $("#image_edit_path").text(image_edit);
    $("#video_edit_path").text(video_edit);

  });

  $('#EditAboutUs').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  });

  $('#image_edit').on('change',function(){
    $("#image_edit_path").text('');
  });
  $('#video_edit').on('change',function(){
    $("#video_edit_path").text('');
  });

});

</script>

@endsection
