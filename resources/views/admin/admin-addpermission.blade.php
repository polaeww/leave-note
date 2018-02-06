@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> เพิ่มพนักงาน</h3>


        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel"><br>

                    <form class="form-horizontal style-form" action="{{route('admin.storepermission')}}" method="post">

                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">ชื่อสิทธิ์ :</label>
                            <div class="col-sm-4">
                                <input type="text" name="label" class="form-control">
                            </div>
                            <label class="col-sm-1 col-sm-1 control-label">ลาป่วย :</label>
                            <div class="col-sm-4">
                                <input type="text" name="sick_leave" class="form-control">
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">ลากิจ :</label>
                            <div class="col-sm-4">
                                <input type="text" name="business_leave" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">ลาพักผ่อน:</label>
                            <div class="col-sm-4">
                                <input type="text" name="vacation_leave" class="form-control">
                            </div>

                            <label class="col-sm-1 col-sm-1 control-label">ลาบวช:</label>
                            <div class="col-sm-4">
                                <input type="text" name="maternity_leave" class="form-control">
                            </div>
                            <div class="col-sm-1"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">ลาคลอด :</label>
                            <div class="col-sm-4">
                                <input type="text" name="ordination_leave" class="form-control">
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