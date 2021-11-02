@extends('layout.master')

@section('title','Company Info')

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
                                            <h5 class="m-b-10"> Company Info</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Company Info</a></li>
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
                                        <h5> Company Info</h5>
                                        <div class="card-header-right">
                                            <!--Start Create Company data-->
                                            <button class="btn btn-success btn-sm" type="button" data-toggle="modal"
                                                data-target="#CreateCompanyInfo">
                                                <i class="fa fa-plus">Add</i>

                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade " id="CreateCompanyInfo" tabindex="-1" role="dialog"
                                                aria-labelledby="CreateCompanyInfo" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"> Create Company Info</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{route('Company_infoSubmit')}}"
                                                                enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="email"
                                                                            class="col-form-label">Email:</label>
                                                                        <input type="email" value="{{old('email')}}"
                                                                            class="form-control" name="email" id="email"
                                                                            required>
                                                                        @error('email')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="address"
                                                                            class="col-form-label">Address:</label>
                                                                        <input type="text" value="{{old('address')}}"
                                                                            class="form-control" name="address"
                                                                            id="address" required>
                                                                        @error('address')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!--End Row-->
                                                                <!--Start Row-->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="phone"
                                                                            class="col-form-label">Phone:</label>
                                                                        <input type="text" value="" class="form-control"
                                                                            name="phone" id="phone" required>
                                                                        @error('phone')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="logo"
                                                                            class="col-form-label">logo:</label>
                                                                        <input type="file" value="" class="form-control"
                                                                            accept="image/*" name="logo" id="logo"
                                                                            required>
                                                                        @error('logo')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!--End Row-->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="latitude"
                                                                            class="col-form-label">Latitude:</label>
                                                                        <input type="text" value=""
                                                                            class="form-control latitude"
                                                                            name="latitude" id="latitude" required>
                                                                        @error('latitude')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="longitude"
                                                                            class="col-form-label">Longitude:</label>
                                                                        <input type="text" value=""
                                                                            class="form-control longitude"
                                                                            name="longitude" id="longitude" required>
                                                                        @error('longitude')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
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


                                            {{-- Edite Company data SECATION --}}


                                            <div class="modal fade" id="EditCompany" tabindex="-1" role="dialog"
                                                aria-labelledby="EditCompany" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Company</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="edit-form"
                                                                action="{{route('UpdateCompany_info')}}" method="POST"
                                                                enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="email_edit"
                                                                            class="col-form-label">Email:</label>
                                                                        <input type="text" value=""
                                                                            class="form-control email_edit" name="email"
                                                                            id="email_edit" required>
                                                                        @error('email_edit ')
                                                                        <div class="alert alert-danger">
                                                                            {{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="address_edit"
                                                                            class="col-form-label">Address:</label>
                                                                        <input type="text" value=""
                                                                            class="form-control address_edit"
                                                                            name="address" id="address_edit" required>
                                                                        @error('address_edit ')
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
                                                                        <label for="phone_edit"
                                                                            class="col-form-label">Phone:</label>
                                                                        <input type="text" value=""
                                                                            class="form-control phone_edit" name="phone"
                                                                            id="phone_edit" required>
                                                                        @error('phone_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>


                                                                    <div class="form-group col-md-6">
                                                                        <label for="logo_edit"
                                                                            class="col-form-label">logo :</label>
                                                                        <input type="file" value=""
                                                                            class="form-control logo_edit" name="logo"
                                                                            id="logo_edit" accept="image/*" required>
                                                                        <label id="logo_edit_path"></label>
                                                                        @error('logo_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!--End Row-->
                                                                <!--Start Row-->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="latitude_edit"
                                                                            class="col-form-label">Latitude :</label>
                                                                        <input type="text" value=""
                                                                            class="form-control latitude_edit"
                                                                            name="latitude" id="latitude_edit">
                                                                        @error('latitude_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="longitude_edit"
                                                                            class="col-form-label">Longitude :</label>
                                                                        <input type="text" value=""
                                                                            class="form-control longitude_edit"
                                                                            name="longitude" id="longitude_edit">
                                                                        @error('longitude_edit')
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
                                <th data-breakpoints="xs">phone</th>
                                <th data-breakpoints="xs">Email</th>
                                <th data-breakpoints="xs">address</th>
                                <th data-breakpoints="xs">logo</th>
                                <th data-breakpoints="xs">Latitude</th>
                                <th data-breakpoints="xs">Longitude</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Start Table Row-->
                            @foreach($groups as $company_data)
                            <tr class="data-row">
                                <td hidden></td>
                                <td>{{ ++$i }}</td>
                                <td class="phone">{{$company_data->phone}}</td>
                                <td class="email">{{$company_data->email}}</td>
                                <td class="address">{{$company_data->address}}</td>
                                <td class="logo">{{$company_data->logo}}</td>
                                <td class="latitude">{{$company_data->latitude}}</td>
                                <td class="longitude">{{$company_data->longitude}}</td>


                                <td>
                                    <form action="{{ route('deleteCompany_info', $company_data->id) }}" method="POST">
                                        <button class="btn btn-success btn-sm btnEditcompany" type="button"
                                            data-toggle="modal" data-item-id="{{$company_data->id}}"
                                            data-target="#EditCompany">Edit
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

    $('.btnEditcompany').on('click', function() {
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
});

    $('#EditCompany').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var email_edit = row.children(".email").text();
    var address_edit = row.children(".address").text();
    var phone_edit = row.children(".phone").text();
    var logo_edit = row.children(".logo").text();
    var latitude_edit = row.children(".latitude").text();
    var longitude_edit = row.children(".longitude").text();


    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);
    $("#email_edit").val(email_edit);
    $("#address_edit").val(address_edit);
    $("#phone_edit").val(phone_edit);
    $("#logo_edit_path").text(logo_edit);
    $("#latitude_edit").val(latitude_edit);
    $("#longitude_edit").val(longitude_edit);


  });

  $('#EditCompany').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  });

  $('#image_edit').on('change',function(){
    $("#image_edit_path").text('');
  });
});

</script>

@endsection
