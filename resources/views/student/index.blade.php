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

                  ระบบการจัดการข้อมูลนักศึกษา
                  <table class="table table-striped">
                    <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>คำนำหน้า</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>สาขา</th>
                        <th>คณะ</th>
                    </tr>
                        @foreach ($student as $students)
                        <tr>
                             <td>{{ $students->stu_code}}</td>
                             <td>{{ $students->stu_pre}}</td>
                             <td>{{ $students->stu_fname}}</td>
                             <td>{{ $students->stu_lname}}</td>
                             <td>{{ $students->major_id}}</td>
                             <td>{{ $students->fac_name}}</td>



                        </tr>
                        @endforeach
                 </table>
                    {!! $student->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
