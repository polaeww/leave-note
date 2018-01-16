@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> แก้ไขประวัติพนักงาน</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel"><br>

                    <!--edit profile employee -->
                    <form class="form-horizontal style-form" method="post" action="{{route('employee.save')}}">
                        {{csrf_field()}}
                        <!--ชืื่อ-->
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 col-sm-2 control-label">ชื่อ:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{$user->first_name}}" name="first_name">
                                </div>
                                <label class="col-sm-2 col-sm-2 control-label">นามสกุล:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{$user->last_name}}" name="last_name">
                                </div>
                                <div class="col-sm-1 col-sm-1"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 col-sm-2 control-label">ชื่อเล่น:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{$user->nick_name}}" name="nick_name">
                                </div>
                                <label class="col-sm-2 col-sm-2 control-label">ตำแหน่งงาน:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{$user->position}}" name="position">
                                </div>
                                <div class="col-sm-1 col-sm-1"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <label class="col-sm-2 col-sm-2 control-label">เบอร์โทรศัพท์:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{$user->phone}}" name="phone">
                                </div>
                                <label class="col-sm-2 col-sm-2 control-label">อีเมล:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" value="{{$user->email}}" name="email">
                                </div>
                                <div class="col-sm-1 col-sm-1"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-10"></div>
                                <div class="col-sm-2"><button type="submit" class="btn btn-success">บันทึก</button></div>
                            </div>
                    </form>



                </div>
            </div>
        </div>
    </section>
    @endsection