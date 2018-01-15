@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> เพิ่มพนักงาน</h3>


        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel"><br>

                    <form class="form-horizontal style-form" action="{{route('admin.store')}}" method="post">
                        <!--ชืื่อ-->
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">ชื่อ :</label>
                            <div class="col-sm-4">
                                <input type="text" name="first_name" class="form-control">
                            </div>
                            <label class="col-sm-1 col-sm-1 control-label">นามสกุล :</label>
                            <div class="col-sm-4">
                                <input type="text" name="last_name" class="form-control">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">ชื่อเล่น :</label>
                            <div class="col-sm-4">
                                <input type="text" name="nick_name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">อีเมล :</label>
                            <div class="col-sm-4">
                                <input type="email" name="email" class="form-control">
                            </div>
                            <!--เบอร์โทรศัพท์-->
                            <label class="col-sm-1 col-sm-1 control-label">เบอร์โทรศัพท์:</label>
                            <div class="col-sm-4">
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">ตำแหน่งงาน :</label>
                            <div class="col-sm-4">
                                <input type="text" name="position" class="form-control">
                            </div>
                            <!--วันที่เข้าทำงาน-->
                            <label class="col-sm-1 col-sm-1 control-label">วันที่เข้าทำงาน:</label>
                            <div class="col-sm-4">
                                <input type="text" name="start_work" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">เพศ :</label>
                            <div class="col-sm-4">
                                    <input type="radio" name="gender" value="male" style="margin-right: 10px">ชาย
                                    <input type="radio" name="gender" value="female" style="margin-right: 10px;margin-left: 10px">หญิง
                            </div>
                            <label class="col-sm-1 col-sm-1 control-label">ประเภท:</label>
                            <div class="col-sm-4">
                                    <input type="radio" name="status" value="employee" style="margin-right: 10px">พนักงานประจำ
                                    <input type="radio" name="status" value="trainee" style="margin-right: 10px;margin-left: 10px">พนักงานทดลองงาน
                                    <input type="radio" name="status" value="intern" style="margin-right: 10px;margin-left: 10px">นักศึกษาฝึกงาน
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-success">ยืนยันการเพิ่มพนักงาน</button>
                            </div>
                        </div><br>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection