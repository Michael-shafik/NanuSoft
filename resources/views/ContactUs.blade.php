@extends('layout.master')

@section('title','Contact Us')

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
                                            <h5 class="m-b-10"> Contact Us</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!"> Contact Us</a></li>
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
                                        <h5> Contact US</h5>
                                        <div class="card-header-right">
                                            <!--Start Contact Us-->
                                            <button class="btn btn-success btn-sm" type="button" data-toggle="modal"
                                                data-target="#CreateContactUs">
                                                <i class="fa fa-plus">Add</i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade " id="CreateContactUs" tabindex="-1" role="dialog"
                                                aria-labelledby="CreateContactUs" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Create New Contact Us</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{route('ContactUsSubmit')}}"
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
                                                                        <label for="name"
                                                                            class="col-form-label">Phone:</label>
                                                                        <input type="text" value="{{old('phone')}}"
                                                                            class="form-control" name="phone" id="phone"
                                                                            required>
                                                                        @error('phone')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                </div>
                                                                <!--End Row-->
                                                                <!--Start Row-->
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
                                                                        <label for="message"
                                                                            class="col-form-label">message :</label>
                                                                        <textarea rows="1" cols="5"
                                                                            value="{{old('message')}}"
                                                                            class="form-control" name="message"
                                                                            id="message" required></textarea>
                                                                        @error('message')
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


                                            {{-- Edite Contact US SECATION --}}


                                            <div class="modal fade" id="EditContactUS" tabindex="-1" role="dialog"
                                                aria-labelledby="EditContactUS" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Contact Us</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="edit-form"
                                                                action="{{route('UpdateContact_Us')}}" method="POST"
                                                                enctype="multipart/form-data">
                                                                <!--Start Row-->
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name_edit"
                                                                            class="col-form-label">Name:</label>
                                                                        <input type="text" value=""
                                                                            class="form-control name_edit" name="name"
                                                                            id="name_edit" required>
                                                                        @error('name_edit')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

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
                                                                </div>
                                                                <!--End Row-->
                                                                <!--Start Row-->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="email_edit"
                                                                            class="col-form-label">Email :</label>
                                                                        <input type="text" value=""
                                                                            class="form-control email_edit" name="email"
                                                                            id="email_edit" required>
                                                                        @error('email_edit ')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                        @enderror
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label for="message_edit"
                                                                            class="col-form-label"> Message</label>
                                                                        <textarea rows="1" cols="5" value=""
                                                                            class="form-control message_edit"
                                                                            name="message" id="message_edit"
                                                                            required></textarea>
                                                                        @error('message_edit')
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
                        <!--End Create Contact US-->
                    </div>
                </div>
                <div class="card-body">
                    <h5>Filtering</h5>
                    <hr>
                    <table id="demo-foo-filtering" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th data-breakpoints="xs">Id</th>
                                <th data-breakpoints="xs">Name</th>
                                <th data-breakpoints="xs">phone</th>
                                <th data-breakpoints="xs">Email</th>
                                <th data-breakpoints="xs">Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Start Table Row-->
                            @foreach($contacts as $contact_us)
                            <tr class="data-row">
                                <td hidden></td>
                                <td>{{ ++$i }}</td>
                                <td class="name">{{$contact_us->name}}</td>
                                <td class="phone">{{$contact_us->phone}}</td>
                                <td class="email">{{$contact_us->email}}</td>
                                <td class="message">{{$contact_us->message}}</td>

                                <td>
                                    <form action="{{ route('deleteContactUS', $contact_us->id) }}" method="POST">
                                        <button class="btn btn-success btn-sm btnEditContactUS" type="button"
                                            data-toggle="modal" data-item-id="{{$contact_us->id}}"
                                            data-target="#EditContactUS">Edit
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

    $('.btnEditContactUS').on('click', function() {
          $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
});

    $('#EditContactUS').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var name_edit = row.children(".name").text();
    var phone_edit = row.children(".phone").text();
    var email_edit = row.children(".email").text();
    var message_edit = row.children(".message").text();

    // fill the data in the input fields
    $("#modal_input_id_edit").val(id);
    $("#name_edit").val(name_edit);
    $("#phone_edit").val(phone_edit);
    $("#email_edit").val(email_edit);
    $("#message_edit").val(message_edit);

  });

  $('#EditContactUS').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  });
});

</script>

@endsection
