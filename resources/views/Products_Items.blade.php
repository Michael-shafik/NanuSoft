@extends('layout.master')

@section('title','Products Items')

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
                                            <h5 class="m-b-10">Products Items</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Products Items</a></li>
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
                                        <h5> Products Items</h5>
                                        <div class="card-header-right">
                                            <!--Start Create Products Items-->

                                            <button class="btn btn-success btn-sm" type="button" data-toggle="modal"
                                                data-target="#CreateProducts_Items">
                                                <i class="fa fa-plus">Add</i>

                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade " id="CreateProducts_Items" tabindex="-1"
                                                role="dialog" aria-labelledby="CreateProducts_Items" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Create Products Items</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post"
                                                                action="{{route('Products_ItemsSubmit')}}"
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
                                                                <!--Start Row-->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="desc" class="col-form-label">
                                                                            description</label>
                                                                        <textarea rows="1" cols="5"
                                                                            value="{{old('desc')}}"
                                                                            class="form-control " name="desc" id="desc"
                                                                            required></textarea>
                                                                        @error('desc')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>


                                                                    <div class="form-group col-md-6">
                                                                        <label for="image"
                                                                            class="col-form-label">image:</label>
                                                                        <input type="file" value="{{old('image')}}"
                                                                            class="form-control" accept="image/*"
                                                                            name="image" id="image" required>
                                                                        @error('image')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!--End Row-->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="catageores_id"
                                                                            class="col-form-label">catageores id
                                                                            :</label>
                                                                        <select name="catageores_id"
                                                                            class="form-control">
                                                                            @foreach($categories as $category)
                                                                            <option value="{{ $category->id}}">
                                                                                {{ $category->name}} </option>
                                                                            @endforeach
                                                                            @error('catageores_id')
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


                                            {{-- Edite Products Items SECATION --}}
                                            <div class="modal fade" id="EditProducts_Items" tabindex="-1" role="dialog"
                                                aria-labelledby="EditProducts_Items" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Products Items</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="edit-form"
                                                                action="{{route('UpdateProducts_Items')}}" method="POST"
                                                                enctype="multipart/form-data">
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
                                                                            value="" id="price_edit" required>
                                                                        @error('price_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="desc_edit" class="col-form-label">
                                                                            details
                                                                            description</label>
                                                                        <textarea rows="1" cols="5" value=""
                                                                            class="form-control desc_edit" name="desc"
                                                                            id="desc_edit" required></textarea>
                                                                        @error('desc_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>


                                                                    <div class="form-group col-md-6">
                                                                        <label for="image_edit"
                                                                            class="col-form-label">Image:</label>
                                                                        <input type="file" value=""
                                                                            class="form-control image_edit" name="image"
                                                                            id="image_edit" required>
                                                                        <label id="image_edit_path"></label>
                                                                        @error('image_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="row">

                                                                    <div class="form-group col-md-6">
                                                                        <label for="catageores_id_edit"
                                                                            class="col-form-label">catageores id
                                                                            :</label>
                                                                        <select name="catageores_id"
                                                                            id="catageores_id_edit"
                                                                            class="form-control">
                                                                            @foreach($categories as $category)
                                                                            <option value="{{ $category->id}}">
                                                                                {{ $category->name}}</option>
                                                                            @endforeach
                                                                            @error('catageores_id_edit')
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
                        <!--End Create Products items-->
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
                                <th data-breakpoints="xs">Price</th>
                                <th data-breakpoints="xs"> description</th>
                                <th data-breakpoints="xs">Image</th>
                                <th data-breakpoints="xs"> Categories id</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Start Table Row-->
                            @foreach($product_item as $product_item)
                            <tr class="data-row">
                                <td hidden></td>
                                <td>{{ ++$i }}</td>
                                <td class="name">{{$product_item->name}}</td>
                                <td class="price">{{$product_item->price}}</td>
                                <td class="desc">{{$product_item->desc}}</td>
                                <td class="image">{{$product_item->image}}</td>
                                <?php
                                   $categoriesName=App\categories::where('id',$product_item->catageores_id)->first()->name;
                               ?>
                                <td class="desc">{{$categoriesName}}</td>

                                <td>
                                    <form action="{{ route('deleteProducts_Items',$product_item->id) }}" method="POST">
                                        <button class="btn btn-success btn-sm btnEditProducts_Items" type="button"
                                            data-toggle="modal" data-item-id="{{$product_item->id}}"
                                            data-target="#EditProducts_Items">Edit
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
<script src="{{url('assets/plugins/footable/js/footable.min.js')}}"></script> --}}
<script>
    $(document).ready(function() {

    $('.btnEditProducts_Items').on('click', function() {
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
});

    $('#EditProducts_Items').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var name_edit = row.children(".name").text();
    var price_edit = row.children(".price").text();
    var desc_edit = row.children(".desc").text();
    var image_edit = row.children(".image").text();
    var catageores_id_edit = row.children(".catageores_id").text();


    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);
    $("#name_edit").val(name_edit);
    $("#price_edit").val(price_edit);
    $("#desc_edit").val(desc_edit);
    $("#image_edit_path").text(image_edit);
    $("#catageores_id_edit").val(catageores_id_edit);
  });

  $('#EditProducts_Items').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  });
  $('#image_edit').on('change',function(){
    $("#image_edit_path").text('');
  });
});

</script>

@endsection