@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> แก้ไขสิทธิ์</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel"><br>

                    <!--edit Quotas -->
                    <form class="form-horizontal style-form" method="post" action="{{route('admin.savepermission',['per' => $per->id])}}">
                    {{csrf_field()}}

                    <!--ชืื่อ-->
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">ประเภทพนักงาน: </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="{{$per->employee_type->name}}" name="employee_type_id">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">อายุการทำงาน:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="{{$per->worked_year}}" name="worked_year">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">เพศ:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="{{$per->gender}}" name="gender">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาป่วย</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="{{$per->sick_leave}}" name="sick_leave">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">ลากิจ</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="{{$per->business_leave}}" name="business_leave">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาพักผ่อน</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="{{$per->vacation_leave}}" name="vacation_leave">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาบวช</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="{{$per->maternity_leave}}" name="maternity_leave">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาคลอด</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="{{$per->ordination_leave}}" name="ordination_leave">
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