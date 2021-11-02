@extends('layout.master')

@section('title','Models Works')

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
                                            <h5 class="m-b-10"> Models Works</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Models Works</a></li>
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
                                        <h5>Models Works</h5>
                                        <div class="card-header-right">
                                            <!--Start Create Models Works-->

                                            <button class="btn btn-success btn-sm" type="button" data-toggle="modal"
                                                data-target="#CreateModels_Works">
                                                <i class="fa fa-plus">Add</i>

                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade " id="CreateModels_Works" tabindex="-1" role="dialog"
                                                aria-labelledby="CreateModels_Works" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Create Models Works</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post"
                                                                action="{{route('Models_WorkslSubmit')}}"
                                                                enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="image"
                                                                            class="col-form-label">image:</label>
                                                                        <input type="file" value="{{old('image')}}"
                                                                            class="form-control" accept="image/*"
                                                                            name="image" id="image">
                                                                        @error('image')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="video"
                                                                            class="col-form-label">video:</label>
                                                                        <input type="file" class="form-control"
                                                                            name="video" id="video"
                                                                            accept="video/mp4,video/x-m4v,video/*">

                                                                        @error('video')
                                                                        <div class="alert alert-danger">
                                                                            {{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="service_item_id"
                                                                            class="col-form-label">service
                                                                            item:</label>
                                                                        <select name="service_item_id"
                                                                            class="form-control">
                                                                            @foreach($sevicesItems as $service)
                                                                            <option value="{{ $service->id}}">
                                                                                {{ $service->title}} </option>
                                                                            @endforeach
                                                                            @error('service_item_id')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </select>
                                                                    </div>
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
                                    {{-- Edite Models Works SECATION --}}
                                    <div class="modal fade" id="EditModels_Works" tabindex="-1" role="dialog"
                                        aria-labelledby="EditModels_Works" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Models Works</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="edit-form" action="{{route('updateModels_Works')}}"
                                                        method="POST" enctype="multipart/form-data">
                                                        <!--Start Row-->
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="image_edit"
                                                                    class="col-form-label">Image:</label>
                                                                <input type="file" value="" accept="image/*"
                                                                    class="form-control image_edit" name="image"
                                                                    id="image_edit" >
                                                                    <label id="image_edit_path"></label>
                                                                @error('image_edit')
                                                                <div class="alert alert-danger">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="video_edit" class="col-form-label">
                                                                        video:</label>
                                                                    <input type="file" class="form-control video_edit"
                                                                        accept="video/mp4,video/x-m4v,video/*"
                                                                        name="video" id="video_edit" >
                                                                    <label id="video_edit_path"></label>
                                                                    @error('video_edit')
                                                                    <div class="alert alert-danger">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                        </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="service_item_id_edit"
                                                                        class="col-form-label">service item
                                                                        :</label>
                                                                    <select name="service_item_id"
                                                                        id="service_item_id_edit" class="form-control">
                                                                        @foreach($sevicesItems as $service)
                                                                        <option value="{{ $service->id}}">
                                                                            {{ $service->title}}</option>
                                                                        @endforeach
                                                                        @error('service_item_id_edit')
                                                                        <div class="alert alert-danger">
                                                                            {{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </select>
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
                                                        <input type="hidden" class="form-control" value=""
                                                            id="modal_input_id_edit" name="modal_input_id_edit" />
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
                <!--End Create Servicse Penfits-->
            </div>
        </div>
        <div class="card-body">
            <h5>Filtering</h5>
            <hr>
            <table id="demo-foo-filtering" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th data-breakpoints="xs">id</th>
                        <th data-breakpoints="xs">image</th>
                        <th data-breakpoints="xs">Video</th>
                        <th data-breakpoints="xs"> Services item</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Start Table Row-->
                    @foreach($models_works as $model_work)
                    <tr class="data-row">
                        <td hidden></td>
                        <td>{{ ++$i }}</td>
                        <td class="image">{{$model_work->image}}</td>
                        <td class="video">{{$model_work->video}}</td>
                        <?php
                               $serviceItems=App\service_item::where('id',$model_work->service_item_id);
                               $serviceName="";
                               if($serviceItems!=null){
                                $serviceName=$serviceItems->first()->title;
                               }
                                ?>
                        <td class="desc">{{$serviceName}}</td>
                        <td>
                            <form action="{{ route('deleteModels_Works', $model_work->id) }}" method="POST">
                                <button class="btn btn-success btn-sm btnEditModels_Works" type="button"
                                    data-toggle="modal" data-item-id="{{$model_work->id}}"
                                    data-target="#EditModels_Works">Edit
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

    $('.btnEditModels_Works').on('click', function() {
        // debugger;
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
});

    $('#EditModels_Works').on('show.bs.modal', function() {
        // debugger;

    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var image_edit = row.children(".image").text();
    var video_edit = row.children(".video").text();
    var service_item_id_edit = row.children(".service_item_id").text();

    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);
    $("#image_edit_path").text(image_edit);
    $("#video_edit_path").text(video_edit);
        $("#service_item_id_edit").val(service_item_id_edit);
  });

  $('#EditModels_Works').on('hide.bs.modal', function() {
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
