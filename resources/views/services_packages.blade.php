@extends('layout.master')
@section('title',' packages and Services Items')
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
                                        <div class="page-header-packages and Services Items</h5>
                                        </div>
                                        <ul class=" breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!"> packages and Services Items</a>
                                            </li>
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
                                            <h5>packages and Services Items</h5>
                                            <div class="card-header-right">
                                                <!--Start Create Services Items-->
                                                <button class="btn btn-success btn-sm" type="button" data-toggle="modal"
                                                    data-target="#CreateAboutUs">
                                                    <i class="fa fa-plus">Add</i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade " id="CreateAboutUs" tabindex="-1" role="dialog"
                                                    aria-labelledby="CreateAboutUs" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Create packages and Services
                                                                    Items</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post"
                                                                    action="{{route('Services_ItemsSubmit')}}"
                                                                    enctype="multipart/form-data">
                                                                    <!--Start Row-->
                                                                    @csrf

                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label><strong>packages
                                                                                    :</strong></label><br>
                                                                            @foreach($packages as $package)
                                                                            <input type="checkbox"
                                                                                class="form-control packages_id"
                                                                                name="packages_id[]" id="packages_id_"
                                                                                value="{{$package->name}}">
                                                                            <span>{{$package->name}}</span>
                                                                            @endforeach
                                                                            @error('packages_id')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                            @enderror
                                                                        </div>
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
                                            {{-- Edite Services Items SECATION --}}
                                            <div class="modal fade" id="EditServicesItems" tabindex="-1" role="dialog"
                                                aria-labelledby="EditServicesItems" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit packages and Services Items
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="edit-form"
                                                                action="{{route('UpdateServices_Items')}}" method="POST"
                                                                enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="row">
                                                                    {{-- <div class="form-group col-md-6">
                                                                    <label for="package_id_edit"
                                                                        class="col-form-label">service item
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
                                                                --}}

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
                                                                <div class="form-group col-md-6">
                                                                    <label><strong>packages :</strong></label><br>
                                                                    @foreach($packages as $package)
                                                                    <input type="checkbox"
                                                                        class="form-control packages_id_edit"
                                                                        name="packages_id[]" id="packages_id_edit"
                                                                        value="{{$package->name}}">
                                                                    <span>{{$package->name}}</span>
                                                                    @endforeach
                                                                    @error('packages_id_edit')
                                                                    <div class="alert alert-danger">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                        </div>
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
                    <!--End Create Servicse Item-->
                </div>
            </div>
            <div class="card-body">
                <h5>Filtering</h5>
                <hr>
                <table id="demo-foo-filtering" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th data-breakpoints="xs">Id</th>
                            <th data-breakpoints="xs">packages</th>
                            <th data-breakpoints="xs"> Services item</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Start Table Row-->
                        @foreach($packagFeature as $package_feature)
                        <tr class="data-row">
                            <td hidden></td>
                            <td>{{ ++$i }}</td>

                            <?php
                              $packagesName=App\packages::where('id',$package_feature->package_id)->first()->name;

                              $serviceItems=App\service_item::where('id',$benefit->service_item_id);
                            $serviceName="";
                            if($serviceItems!=null){
                             $serviceName=$serviceItems->first()->title;
                            }
                           ?>
                            <td class="desc">{{$packagesName}}</td>
                            <td class="desc">{{$serviceName}}</td>
                            <td>

                            <td>
                            <td>
                                <form action="{{ route('deleteServices_Items', $service_item->id) }}" method="POST">
                                    <button class="btn btn-success btn-sm btnEditServicesItems" type="button"
                                        data-toggle="modal" data-item-id="{{$service_item->id}}"
                                        data-target="#EditServicesItems">Edit
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
<script src="{{url('assets/plugins/footable/js/footable.min.js')}}"></script> --}}
<script>
    $(document).ready(function() {

    $('.btnEditServicesItems').on('click', function() {
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
});

    $('#EditServicesItems').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var package_id_edit = row.children(".package_id").text();
    var service_item_id_edit = row.children(".service_item_id").text();



    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);

    $("#package_id_edit").val(package_id_edit);
    $("#service_item_id_edit").val(service_item_id_edit);

  });

  $('#EditServicesItems').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  });


});

</script>

@endsection
