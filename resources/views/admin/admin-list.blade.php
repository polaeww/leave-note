@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> สถานะใบลา</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class="row mt">
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <a href="{{ route('admin.create') }}"><button type="button" class="btn btn-success">เพิ่มพนักงาน</button></a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <section id="no-more-tables">
                                    <table class="table table-bordered table-striped table-condensed cf">
                                        <thead class="cf">
                                        <tr>
                                            <th>ชื่อ - นามสกุล</th>
                                            <th>ชื่อเล่น</th>
                                            <th>E-mail</th>
                                            <th>เบอร์โทรศัพท์</th>
                                            <th>วันที่เข้าทำงาน</th>
                                            <th>ตำแหน่ง</th>
                                            <th>ประเภทพนักงาน</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->first_name}}&nbsp;&nbsp;&nbsp;{{$user->last_name}}</td>
                                                <td>{{$user->nick_name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->start_work}}</td>
                                                <td>{{$user->position}}</td>
                                                <td>{{$user->user_types_id}}</td>
                                                <td align="center"><button class="btn btn-primary">ประวัติการลา</button></td>
                                                <td align="center"><a href="{{route('admin.delete',['user' => $user->id ])}}"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a></td>
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

