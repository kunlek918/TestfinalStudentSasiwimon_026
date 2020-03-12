@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  รายชื่อคณะ
                  <table class="table table-striped">
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อคณะ</th>

                    </tr>
                        @foreach ($facultys as $facultyss)
                        <tr>
                             <td>{{ $facultyss->fac_id}}</td>
                             <td>{{ $facultyss->fac_name}}</td>

                        </tr>
                        @endforeach
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
