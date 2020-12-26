@extends('layouts.basics')

@section('main')
<div>
<table class="table table-bordered border-primary">
<tr>
    <th>Name</th>
    <th>Attended Days</th>
    <th>Submited Projects</th>
  </tr>
  @foreach($students as $key => $value)
  <tr>
    <td>{{$value['name']}}</td>
    <td>{{count($value['attendance'])}}</td>
    <td>{{count($value['projects'])}}</td>
  </tr>

  @endforeach
  
  
</table>
</div>

<h1>Number of Students : {{count ($students)}}</h1>


<div>
<table class="table table-bordered border-primary">
<tr>
    <th>Name</th>
    <th>Day 1 Check_in</th>
    <th>Day 1 Check_out</th>
    <th>Day 1 hours</th>
    <th>Day 2 Check_in</th>
    <th>Day 2 Check_out</th>
    <th>Day 2 hours</th>
    <th>Day 3 Check_in</th>
    <th>Day 3 Check_out</th>
    <th>Day 3 hours</th>  </tr>
  @foreach($students as $key => $value)
  <tr>
    <td>{{$value['name']}}</td>
    @foreach ($value['attendance'] as $key1 => $value1)
    <td>{{$value1['check_in']}}</td>
    <td>{{$value1['check_out']}}</td>
    @if(($value1['check_out'] - $value1['check_in']) > 8)
    <td style="background-color:green;"> {{$value1['check_out'] - $value1['check_in']}} </td>
    @else
    <td style="background-color:red;"> {{$value1['check_out'] - $value1['check_in']}} </td>
    @endif


    <!-- <td>{{$value1['check_in']}}</td>
    <td>{{$value1['check_out']}}</td>
    <td>{{$value1['check_in']}}</td>
    <td>{{$value1['check_out']}}</td> -->
  
  @endforeach
  </tr>



  @endforeach
  
  
</table>
</div>

@endsection
 