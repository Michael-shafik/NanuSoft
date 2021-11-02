@extends('layout.master')

@section('title','Packages feature')

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
                                            <h5 class="m-b-10">Packages feature</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Packages feature</a></li>
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
                                        <h5> Packages feature</h5>
                                        <div class="card-header-right">
                                            <!--Start CreatePackages feature-->

                                            <button class="btn btn-success btn-sm" type="button" data-toggle="modal"
                                                data-target="#CreatePackages_feature">
                                                <i class="fa fa-plus">Add</i>

                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade " id="CreatePackages_feature" tabindex="-1"
                                                role="dialog" aria-labelledby="CreatePackages_feature"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Create Packages feature</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post"
                                                                action="{{route('CreatePackages_FeatureSubmit')}}"
                                                                enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name"
                                                                            class="col-form-label">Name:</label>
                                                                        <input type="text" value="{{old('name')}}"
                                                                            class="form-control" name="name" id="name">
                                                                        @error('name')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>


                                                                <div class="form-group col-md-6">
                                                                    <label for="package_id"
                                                                        class="col-form-label">package id :</label>
                                                                    <select name="package_id"
                                                                        class="form-control">
                                                                        @foreach($package as $packages)
                                                                        <option value="{{ $packages->id}}">
                                                                            {{ $packages->name}} </option>
                                                                        @endforeach
                                                                        @error('package_id')
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
                                                                        Create
                                                                    </button>
                                                                </div>
                                                                <!--End Row-->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            {{-- Edite packages featurs SECATION --}}
                                            <div class="modal fade" id="EditPackages_Feature" tabindex="-1"
                                                role="dialog" aria-labelledby="EditPackages_Feature" aria-hidden="true">
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
                                                            <form class="edit-form"
                                                                action="{{route('UpdatePackages_Feature')}}"
                                                                method="POST">
                                                                <!--Start Row-->
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name_edit" class="col-form-label">
                                                                            Name:</label>
                                                                        <input type="text" value=""
                                                                            class="form-control name_edit" name="name"
                                                                            id="name_edit">
                                                                        @error('name_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="package_id_edit"
                                                                            class="col-form-label">package id
                                                                            :</label>
                                                                        <select name="package_id"
                                                                            id="package_id_edit"
                                                                            class="form-control">
                                                                            @foreach($package as $packages)
                                                                            <option value="{{ $packages->id}}">
                                                                                {{ $packages->name}}</option>
                                                                            @endforeach
                                                                            @error('package_id_edit')
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
                        <!--End Create Packages FEATURES-->
                    </div>
                </div>
                <div class="card-body">
                    <h5>Filtering</h5>
                    <hr>
                    <table id="demo-foo-filtering" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th data-breakpoints="xs">id</th>
                                <th data-breakpoints="xs"> Name</th>
                                <th data-breakpoints="xs"> Packages id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Start Table Row-->
                            @foreach($packagFeature as $package_feature)
                            <tr class="data-row">
                                <td hidden></td>
                                <td>{{ ++$i }}</td>
                                <td class="name">{{$package_feature->name}}</td>
                                <?php
                                  $packagesName=App\packages::where('id',$package_feature->package_id)->first()->name;
                                ?>
                                <td class="desc">{{$packagesName}}</td>


                                <td>
                                    <form action="{{ route('deletePackages_Feature',$package_feature->id) }}"
                                        method="POST">
                                        <button class="btn btn-success btn-sm btnEditPackages_Feature" type="button"
                                            data-toggle="modal" data-item-id="{{$package_feature->id}}"
                                            data-target="#EditPackages_Feature">Edit
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

    $('.btnEditPackages_Feature').on('click', function() {
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
});

    $('#EditPackages_Feature').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var name_edit = row.children(".name").text();
    var package_id_edit = row.children(".package_id").text();


    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);
    $("#name_edit").val(name_edit);
    $("#package_id_edit").val(package_id_edit);
  });

  $('#EditPackages_Feature').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  });
});

</script>

@endsection
