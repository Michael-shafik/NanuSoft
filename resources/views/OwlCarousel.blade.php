@extends('layout.master')

@section('title',' Owl Carousel')

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
                                            <h5 class="m-b-10"> Owl Carousel</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!"> Owl Carousel</a></li>
                                        </ul>
                                    </div>
                                    @if($message = Session::get('success'))
                                    <div class="alert allert-success">{{$message}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!-- [ foo-table ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5> Owl Carousel</h5>
                                        <div class="card-header-right">
                                            <!--Start Create Owl Carousel-->
                                            <button class="btn btn-success btn-sm" type="button" data-toggle="modal"
                                                data-target="#CreateOwlCarousel">
                                                <i class="fa fa-plus">Add</i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade " id="CreateOwlCarousel" tabindex="-1" role="dialog"
                                                aria-labelledby="CreateOwlCarousel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"> Create OwlCarousel</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{route('OwlCarouselSubmit')}}"
                                                                enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name"
                                                                            class="col-form-label">name:</label>
                                                                        <input type="text" value="{{old('name')}}"
                                                                            class="form-control" name="name" id="name">
                                                                        @error('name')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="image"
                                                                            class="col-form-label">image:</label>
                                                                        <input type="file" value="" class="form-control"
                                                                            accept="image/*" name="image" id="image"
                                                                            required>
                                                                        @error('image')
                                                                        <div class="alert alert-danger">{{ $message }}
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


                                            {{-- Edite   Owl Carousel SECATION --}}


                                            <div class="modal fade" id="EditOwlCarousel" tabindex="-1" role="dialog"
                                                aria-labelledby="EditOwlCarousel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Owl Carousel</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="edit-form"
                                                                action="{{route('updateOwlCarousel')}}" method="POST"
                                                                enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name_edit"
                                                                            class="col-form-label">Name:</label>
                                                                        <input type="text" value=""
                                                                            class="form-control title_edit" name="name"
                                                                            id="name_edit" >
                                                                        @error('name_edit')
                                                                        <div class="alert alert-danger">
                                                                            {{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="image_edit"
                                                                            class="col-form-label">Image:</label>
                                                                        <input type="file" value=""
                                                                            class="form-control image_edit" name="image"
                                                                            id="image_edit" >
                                                                        <label id="image_edit_path"></label>
                                                                        @error('image_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
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
                                                                    name="modal_input_id_edit" id="modal_input_id_edit"
                                                                    value="" />
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
                        <!--End CreateLatest Projects-->
                    </div>
                </div>
                <div class="card-body">
                    <h5>Filtering</h5>
                    <hr>
                    <table id="demo-foo-filtering" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th data-breakpoints="xs">Id</th>
                                <th data-breakpoints="xs">name</th>
                                <th data-breakpoints="xs">Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Start Table Row-->
                            @foreach($carousels as $pic_carousel)
                            <tr class="data-row">
                                <td hidden></td>
                                <td>{{ ++$i }}</td>
                                <td class="name">{{$pic_carousel->name}}</td>
                                <td class="image">{{$pic_carousel->image}}</td>
                                <td>
                                    <form action="{{ route('deleteOwlCarousel', $pic_carousel->id) }}" method="POST">
                                        <button class="btn btn-success btn-sm btnEditOwlCarousel" type="button"
                                            data-toggle="modal" data-item-id="{{$pic_carousel->id}}"
                                            data-target="#EditOwlCarousel">Edit
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

    $('.btnEditOwlCarousel').on('click', function() {
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
});

    $('#EditOwlCarousel').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var name_edit = row.children(".name").text();
    var image_edit = row.children(".image").text();

    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);
    $("#name_edit").val(name_edit);
    $("#image_edit_path").text(image_edit);

  });

  $('#EditOwlCarousel').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  });

  $('#image_edit').on('change',function(){
    $("#image_edit_path").text('');
  });
});

</script>

@endsection
