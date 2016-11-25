@extends('members.layout')
@section('content')
   @if (count($errors) > 0)
   <div class="alert alert-danger errors-list">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif
<h3>Add Member</h3>
<form method="post" action="{{ url('/') }}/members">
<div class="col-md-6" style="padding:0px;">
      {{ csrf_field() }}
      <div class="form-group">
         <label for="email">First Name</label>
         <input type="text" class="form-control" value="{{old('first_name')}}" name="first_name" id="email">
      </div>
      <div class="form-group">
         <label for="pwd">Last Name:</label>
         <input type="text"" name="last_name" value="{{old('last_name')}}" class="form-control" id="pwd">
      </div>
      <div class="form-group">
         <label for="pwd">Email:</label>
         <input type="text"" name="email" value="{{old('email')}}" class="form-control" id="pwd">
      </div>
      <div class="form-group">
         <label for="pwd">Age:</label>
         <input type="text"" name="age" value="{{old('age')}}" class="form-control" id="pwd">
      </div>
      <button type="submit" name="btn_submit" value="Submit" class="btn btn-primary">Submit</button>
</div>
<div class="col-md-6" style="padding-right:0px;">
      <div class="form-group">
         <label for="email">Phone</label>
         <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="phone">
      </div>
      <div class="form-group">
         <label for="email">Qualification</label>
         <input type="text" class="form-control" value="{{old('qualification')}}" name="qualification" id="qualification">
      </div>
      <div class="form-group">
         <label for="email">Address</label>
         <input type="text" class="form-control" value="{{old('address')}}" name="address" id="address">
      </div>      
      <div class="form-group">
         <label for="email">Notes</label>
         <input type="text" class="form-control" value="{{old('notes')}}" name="notes" id="notes">
      </div>
</div>
</form>
@endsection