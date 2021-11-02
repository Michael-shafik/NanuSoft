@extends('layout.master')
@section('title','Services Items')
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
                                            <h5 class="m-b-10"> Services Items</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Services Items</a></li>
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
                                        <h5> Services Items</h5>
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
                                                            <h5 class="modal-title">Create Services Items</h5>
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
                                                                        <label for="title"
                                                                            class="col-form-label">title:</label>
                                                                        <input type="text" value="{{old('title')}}"
                                                                            class="form-control" name="title" id="title"
                                                                            required>
                                                                        @error('title')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="desc"
                                                                            class="col-form-label">Description:</label>
                                                                        <textarea rows="1" cols="5"
                                                                            value="{{old('desc')}}" class="form-control"
                                                                            name="desc" id="desc" required></textarea>
                                                                        @error('desc')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!--End Row-->
                                                                <!--Start Row-->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="detal_title	"
                                                                            class="col-form-label">details
                                                                            title:</label>
                                                                        <input type="text"
                                                                            value="{{old('detal_title')}}"
                                                                            class="form-control" name="detal_title"
                                                                            id="detal_title" required>
                                                                        @error('detal_title ')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="detal_desc"
                                                                            class="col-form-label">details
                                                                            description</label>
                                                                        <textarea rows="1" cols="5"
                                                                            value="{{old('detal_desc')}}"
                                                                            class="form-control" name="detal_desc"
                                                                            id="detal_desc" required></textarea>
                                                                        @error('detal_desc')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                </div>
                                                                <!--End Row-->
                                                                <!--Start Row-->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="price"
                                                                            class="col-form-label">Price:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="price" value="{{old('price')}}"
                                                                            id="price" required>
                                                                        @error('price')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="image" class="col-form-label">Choose
                                                                            image:</label>
                                                                        <input type="file" class="form-control"
                                                                            accept="image/*" name="image" id="image"
                                                                            required>
                                                                        @error('image')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!--End Row-->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label><strong>packages :</strong></label><br>
                                                                        @foreach($packages as $package)
                                                                        <input type="checkbox" name="packages_id[]"
                                                                            id="{{$package->id}}"
                                                                            value="{{$package->id}}">
                                                                        <label>{{$package->name}}</label><br>
                                                                        @endforeach
                                                                        @error('packages')
                                                                        <div class="alert alert-danger">
                                                                            {{ $message }}
                                                                        </div>
                                                                        @enderror
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
                                                        <h5 class="modal-title">Edit Services Items</h5>
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
                                                                <div class="form-group col-md-6">
                                                                    <label for="title_edit" class="col-form-label">
                                                                        Title:</label>
                                                                    <input type="text" value=""
                                                                        class="form-control title_edit" name="title"
                                                                        id="title_edit" required>
                                                                    @error('title_edit')
                                                                    <div class="alert alert-danger">{{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="desc_edit"
                                                                        class="col-form-label">description:</label>
                                                                    <textarea rows="1" cols="5" value=""
                                                                        class="form-control desc_edit" name="desc"
                                                                        id="desc_edit" required></textarea>
                                                                    @error('desc_edit')
                                                                    <div class="alert alert-danger">{{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                            </div>
                                                            <!--End Row-->
                                                            <!--Start Row-->
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="detal_title_edit"
                                                                        class="col-form-label">detalis
                                                                        title:</label>
                                                                    <input type="text" value=""
                                                                        class="form-control detal_title_edit"
                                                                        name="detal_title" id="detal_title_edit"
                                                                        required>
                                                                    @error('detal_title_edit ')
                                                                    <div class="alert alert-danger">{{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="detal_desc_edit" class="col-form-label">
                                                                        details
                                                                        description</label>
                                                                    <textarea rows="1" cols="5" value=""
                                                                        class="form-control detal_desc_edit"
                                                                        name="detal_desc" id="detal_desc_edit"
                                                                        required></textarea>
                                                                    @error('detal_desc_edit')
                                                                    <div class="alert alert-danger">{{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!--End Row-->
                                                            <!--Start Row-->
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="price_edit"
                                                                        class="col-form-label">Price:</label>
                                                                    <input type="text" class="form-control price_edit"
                                                                        name="price" value="" id="price_edit" required>
                                                                    @error('price_edit')
                                                                    <div class="alert alert-danger">{{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="image_edit"
                                                                        class="col-form-label">Choose
                                                                        image:</label>
                                                                    <input type="file" class="form-control image_edit"
                                                                        accept="image/*" name="image" id="image_edit"
                                                                        required>
                                                                    <label id="image_edit_path"></label>
                                                                    @error('image_edit')
                                                                    <div class="alert alert-danger">{{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <!--End Row-->
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label><strong>packages :</strong></label><br>

                                                                    @foreach($packages as $package)
                                                                    <input type="checkbox"
                                                                        class="form-control packages_id_edit"
                                                                        name="packages_id[]" id="packages_id_edit"
                                                                        value="{{$package->id}}">
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


                                                            <div class="testPackages">

                                                            </div>

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
                            <th data-breakpoints="xs"> Title</th>
                            <th data-breakpoints="xs"> description</th>
                            <th data-breakpoints="xs">detalis title</th>
                            <th data-breakpoints="xs">detalis description</th>
                            <th data-breakpoints="xs">Price</th>
                            <th data-breakpoints="xs">Image</th>
                            <th data-breakpoints="xs">packages</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Start Table Row-->
                        @foreach($service_item as $service_item)
                        <tr class="data-row">
                            <td hidden></td>
                            <td>{{ ++$i }}</td>
                            <td class="title">{{$service_item->title}}</td>
                            <td class="desc">{{$service_item->desc}}</td>
                            <td class="detal_title">{{$service_item->detal_title}}</td>
                            <td class="detal_desc">{{$service_item->detal_desc}}</td>
                            <td class="price">{{$service_item->price}}</td>
                            <td class="image">{{$service_item->image}}</td>
                            <td class="servicePackages">
                                @foreach($service_item->packages as $package)
                                <p>{{$package->name}}</p>
                                <input type="hidden" class="packageId" value="{{$package->id}}" />
                                @endforeach
                            </td>



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
<script src="{{url('assets/plugins/footable/js/footable.min.js')}}"></script>
<script>
    $(document).ready(function() {
     $('.btnEditServicesItems').on('click', function() {
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
   });

    $('#EditServicesItems').on('show.bs.modal', function() {

    $("input[type=checkbox]").prop("checked",false);

    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var title_edit = row.children(".title").text();
    var desc_edit = row.children(".desc").text();
    var detal_title_edit = row.children(".detal_title").text();
    var detal_desc_edit = row.children(".detal_desc").text();
    var price_edit = row.children(".price").text();
    var image_edit = row.children(".image").text();
    var servicePackages_edit = row.children(".servicePackages").children(".packageId");

    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);
    $("#title_edit").val(title_edit);
    $("#desc_edit").val(desc_edit);
    $("#detal_title_edit").val(detal_title_edit);
    $("#detal_desc_edit").val(detal_desc_edit);
    $("#price_edit").val(price_edit);
    $("#image_edit_path").text(image_edit);

    debugger;
    for(var i=0;i<servicePackages_edit.length;i++){
        var packageId=parseInt(servicePackages_edit[i].value);
        // var selectedCheck=$(":checkbox[value="+packageId+"]")[0];
        // $(selectedCheck).prop("checked","true");
        $("input[type=checkbox][value="+packageId+"]").prop("checked",true);
    }
  });

  $('#EditServicesItems').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  });

  $('#image_edit').on('change',function(){
    $("#image_edit_path").text('');
  });
});

</script>

@endsection
