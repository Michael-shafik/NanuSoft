@extends('layout.master')
@section('title','Add New Contact')

@section('content')
<div class="container">
    <br> <br> <br> <br>
    <br> <br>
    <br> <br>

    <div class="row ">
        <div class="form-group col-md-2">
            <h5 class="modal-title">Add New Contact</h5>
        </div>
        <div class="form col-md-6">
            <form method="post" action="{{route('postGroupContact')}}">
                <!--Start Row-->
                @csrf
                <div class="row">

                    {{-- <div class="form-group col-md-12">
                            <label for="country_code" class="col-form-label">Country Code:</label>
                            <select name="country_code" id="country_code" class="form-control">
                                <option value="1" @if (old('country')=='1' ) selected="selected" @endif>EGYPY</option>
                                <option value="2" @if (old('country')=='2' ) selected="selected" @endif>london</option>

                            </select>
                            @error('country_code')
                            <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div> --}}
        <input name="pid" type="hidden" value="{{$group->id}}" />

        <div class="form-group col-sm-12">
            <label for="phone_number" class="col-form-label">phone number:</label>
            <input type="text" value="{{old('phone_number')}}" class="form-control" name="phone_number"
                id="phone_number">
            @error('phone_number')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-sm-12">
            <label for="first_name" class="col-form-label">First Name:</label>

            <input type="text" value="{{old('first_name')}}" class="form-control" name="first_name" id="first_name">
            @error('first_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-sm-12">
            <label for="last_name" class="col-form-label">Last Name:</label>

            <input type="text" value="{{old('last_name')}}" class="form-control" name="last_name" id="last_name">
            @error('last_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <!--End Row-->
    <!--Start Row-->

    <div class="form-group">
        <label for="email_address" class="col-form-label">email address:</label>
        <input type="text" class="form-control" name="email_address"
            id="email_address">

        @error('email_address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="form-group col-sm-12">
            <label for="company" class="col-form-label">company:</label>
            <input type="text" value="{{old('company')}}" class="form-control" name="company" id="company">
            @error('company')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-sm-12">
            <label for="user_name" class="col-form-label">User Name:</label>
            <input type="text" value="{{old('user_name')}}" name="user_name" class="form-control">
            @error('user_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
    </form>
    <!--End Row-->
    </form>

</div>

</div>
</div>
</div>



@endsection
