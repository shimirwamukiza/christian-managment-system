@extends('layouts.app')
@section('content')
<fieldset>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <font color="green"><h2>christians</h2></font>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" style="background-color:brown;" href="/create" target="_parent"><font size="3">x</font></a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('christus.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> First Name:</strong>
      <input type="text" name="fname" class="form-control"></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
         <input type="text" name="lname" class="form-control">
       </div>
        </div>
       
        <div class="form-group">
      Select Gender:
  <select class="form-control" name="level">
  <option value="male">Male </option>
  <option value="female">Female</option>
  </select>
       </div>
       <div class="form-group">
       Father's Name:
         <input type="text" name="faname" class="form-control">
       </div>
       <div class="form-group">
      Mother's Name:
      <input type="text" name="mname" class="form-control">
     </div>
     <div class="form-group">
      Province:
  <select class="form-control" name="level">
  <option value="east">Eastern </option>
  <option value="south">Southern</option>
  <option value="north">Northern</option>
  <option value="west">Western</option>
  <option value="kigali">Kigali City</option>
  </select>
       </div>
       <div class="form-group">
     Enter District:
         <input type="text" name="district" class="form-control">
       </div>
       <div class="form-group">
      Enter Sector:
      <input type="text" name="sector" class="form-control">
       </div>
       <div class="form-group">
      Enter Cell:
      <input type="text" name="cell" class="form-control">
       </div>
       <div class="form-group">
      Enter Village:
      <input type="text" name="village" class="form-control">
       </div>
       <div class="form-group">
      Enter Church:
      <input type="text" name="cchurch" class="form-control">
       </div>
       <div class="form-group">
      Enter Phone:
      <input type="telephone" name="phone" maxlength="10" class="form-control">
       </div>
       <div class="form-group">
        Application status:
  <select class="form-control" name="status">
  <option value="married">Married</option>
  <option value="single">Single</option>
  </select>
       </div>
       <div>
        <input type="submit" class="btn btn-default submit" value="Apply">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" class="btn btn-danger submit" value="clear">
      </div></form>
      </div>
   
</form>
</fieldset>
@endsection
