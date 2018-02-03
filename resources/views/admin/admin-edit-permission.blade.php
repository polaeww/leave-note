@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> แก้ไขสิทธิพนักงาน</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel"><br>

                    <!--edit permission -->
                    <form class="form-horizontal style-form" method="post" action="{{route('admin.savepermission')}}">
                    {{csrf_field()}}

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">ชื่อสิทธิ์:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="" name="label">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาป่วย:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="" name="sick_leave">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">ลากิจ:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="" name="business_leave">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาพักผ่อน:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="" name="vacation_leave">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาบวช:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="" name="maternity_leave">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">ลาคลอด:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="" name="ordination_leave">
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