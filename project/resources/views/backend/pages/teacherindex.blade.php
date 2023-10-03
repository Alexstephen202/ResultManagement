
          
@extends('backend.layout.subpage')
@section('content')
<br>
<br>
<div class="container">
<div class="row">

    <div class="col-12">
<div class="row"><div class="col-sm-2">
<a href="{{route('teacher.create')}}" tite="Add" class="btn btn-success"><i style="font-size:24px" class="fa">&#xf067;</i></a>
   </div>
    
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">gender</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($users as $key => $user)

    <tr>
      <th scope="row">{{ $key+1}}</th>
      <td>{{ $user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->gender}}</td>
      
      
      

      <td><a href="{{ route('teacher.edit',$user->id) }}" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit" style="font-size:30px;color:black"></i></a>
                    <a href="{{route('teacher.destroy',$user->id)}}"  onclick="return confirm('Are you sure?')" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" style="font-size:30px;color:black"></i></a>

                        <a href="{{route('teacher.show',$user->id)}}" data-toggle="tooltip" title="View"><i class="fa fa-eye" style="font-size:30px;color:blue"></i></a>
</td>
    </tr>
    <tbody>
    @endforeach
  
</table>
</div>
</div>
</div>
</div>
                  @endsection