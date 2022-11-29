@extends('layout.master')
@section('title', 'List of Job')
@section('content')
<h2>List of Job</h2>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">recruitment</th>
      <!-- <th scope="col">namework</th> -->
      <th scope="col">namework</a></th>
      <th scope="col">Level</a></th>
      <th scope="col">age</th>
      <th scope="col">quantity</th>
      <th scope="col">work</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($jobs as $job)
    <tr>
      <td>{{ $job->id}}</td>
      <td>{{ $job->recruitment }}</td>
      <td><a title="{{ $job->namework }}">{{ $job->namework }}</a></td>
      <td>{{ $job->level }}</td>
      <td>{{ $job->age }}</td>
      <td>{{ $job->quantity }}</td>
      <td>{{ $job->work }}</td>
      <td>{{ $job->phone }}</td>
      <td>{{ $job->email }}</td>
      <td>{{ $job->address }}</td>
    </tr>
  </tbody>
    @endforeach
</table>
</body>
</html>
@stop