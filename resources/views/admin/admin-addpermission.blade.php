@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> กำหนดสิทธิ์</h3>


        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel"><br>

                    <form class="form-horizontal style-form" action="{{route('admin.storepermission')}}" method="post">

                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">ประเภทพนักงาน:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="employee_type_id">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">อายุการทำงาน:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control"  name="worked_year">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">เพศ:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control"  name="gender">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาป่วย</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control"  name="sick_leave">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">ลากิจ</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control"  name="business_leave">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาพักผ่อน</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="vacation_leave">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาบวช</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control"  name="maternity_leave">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาคลอด</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control"  name="ordination_leave">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>


                            <div class="row">
                                <div class="col-sm-9"></div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-success">ยืนยันการเพิ่มพนักงาน</button>
                                </div>
                            </div><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection