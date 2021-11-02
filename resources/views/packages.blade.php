@extends('layout.master')

@section('title','Packages')

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
                                            <h5 class="m-b-10"> Packages</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Packages</a></li>
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
                                        <h5>Packages</h5>
                                        <div class="card-header-right">
                                            <!--Start Create Packages-->

                                            <button class="btn btn-success btn-sm" type="button" data-toggle="modal"
                                                data-target="#CreatePackages">
                                                <i class="fa fa-plus">Add</i>

                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade " id="CreatePackages" tabindex="-1" role="dialog"
                                                aria-labelledby="CreatePackages" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Create Packages</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post"
                                                                action="{{route('CreatePackagesSubmit')}}"
                                                                enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name"
                                                                            class="col-form-label">Name:</label>
                                                                        <input type="text" value="{{old('name')}}"
                                                                            class="form-control" name="name" id="name"
                                                                            required>
                                                                        @error('name')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="price"
                                                                            class="col-form-label">Price:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="price" value="{{old('price')}}"
                                                                            id="price">
                                                                        @error('price')
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
                                            {{-- Edite Packages SECATION --}}
                                            <div class="modal fade" id="EditPackages" tabindex="-1" role="dialog"
                                                aria-labelledby="EditPackages" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Packages</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="edit-form" action="{{route('UpdatePackages')}}"
                                                                method="POST" enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name_edit" class="col-form-label">
                                                                            Name:</label>
                                                                        <input type="text" value=""
                                                                            class="form-control name_edit" name="name"
                                                                            id="name_edit" required>
                                                                        @error('name_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="price_edit"
                                                                            class="col-form-label">Price:</label>
                                                                        <input type="text"
                                                                            class="form-control price_edit" name="price"
                                                                            value="" id="price_edit">
                                                                        @error('price_edit')
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
                                                                <input type="hidden" class="form-control" value=""
                                                                    id="modal_input_id_edit"
                                                                    name="modal_input_id_edit" />
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
                        <!--End Create packages-->
                    </div>
                </div>
                <div class="card-body">
                    <h5>Filtering</h5>
                    <hr>
                    <table id="demo-foo-filtering" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th data-breakpoints="xs">id</th>
                                <th data-breakpoints="xs"> name</th>
                                <th data-breakpoints="xs">Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Start Table Row-->
                            @foreach($Packages  as $packages)
                            <tr class="data-row">
                                <td hidden></td>
                                <td>{{ ++$i }}</td>
                                <td class="name">{{$packages->name}}</td>
                                <td class="price">{{$packages->price}}</td>
                                <td>
                                    <form action="{{ route('deletePackages', $packages->id) }}" method="POST">
                                        <button class="btn btn-success btn-sm btnEditPackages" type="button"
                                            data-toggle="modal" data-item-id="{{$packages->id}}"
                                            data-target="#EditPackages">Edit
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

    $('.btnEditPackages').on('click', function() {
        // debugger;
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
});

    $('#EditPackages').on('show.bs.modal', function() {
        // debugger;

    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var name_edit = row.children(".name").text();
    var price_edit = row.children(".price").text();

    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);
    $("#name_edit").val(name_edit);
    $("#price_edit").val(price_edit);
  });

  $('#EditPackages').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  });
});

</script>

@endsection
