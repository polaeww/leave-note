@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> กำหนดสิทธิ์ลา</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class="row mt">
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <a href="{{ route('admin.createper') }}"><button type="button" class="btn btn-success">กำหนดสิทธิ์ใหม่</button></a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <section id="no-more-tables">
                                    <table class="table table-bordered table-striped table-condensed cf">
                                        <thead class="cf">
                                        <tr>
                                            <th>สำหรับพนักงาน</th>
                                            <th>อายุการทำงาน</th>
                                            <th>เพศ</th>
                                            <th>ลาป่วย</th>
                                            <th>ลากิจ</th>
                                            <th>ลาพักผ่อน</th>
                                            <th>ลาคลอด</th>
                                            <th>ลาบวช</th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($pers as $per)
                                            <tr>
                                                <td>{{$per->employee_type->name}}</td>
                                                <td>{{$per->worked_year}}</td>
                                                <td>{{$per->gender}}</td>
                                                <td>{{$per->sick_leave}}</td>
                                                <td>{{$per->business_leave}}</td>
                                                <td>{{$per->vacation_leave}}</td>
                                                <td>{{$per->maternity_leave}}</td>
                                                <td>{{$per->ordination_leave}}</td>

                                                <td align="center"><a href="{{route('admin.editpermission',['per' => $per->id ])}}">
                                                        <button type="button" class="btn btn-warning">แก้ไข</button></a></td>

                                                <td align="center"><a href="{{route('admin.delete',['user' => $user->id ])}}">
                                                        <button type="button" class="btn btn-danger">ลบข้อมูล</button></a></td>
                                            </tr>
                                        @endforeach()
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

