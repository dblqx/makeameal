@extends('user.master')
@section('title', 'Database')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-md-12"><br/>
  <h3 align="center"></h3><br/>
  <h3>Sign up</h3>
  <form method="post" action="{{url('user')}}"> {{csrf_field()}}
    <div class="form-group">
      <input type="text" name="fname" class="form-control" placeholder="your name"/></div>
      <div class="form-group">
        <input type="text" name="lname" class="form-control" placeholder="your lastname"/></div>
        <div class="form-group"><input type="submit" class="btn btn-primary"/></div>
  </form>
</div>
  </div>
</div>


@endsection
