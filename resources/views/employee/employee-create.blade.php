@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> สร้างใบลา</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <br>

                    <form class="form-horizontal style-form" action="{{route('leave.create')}}" method="post">
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">ประเภทใบลา:</label>
                            <div class="col-sm-4">
                                <input type="radio" name="leave_lengths" value="in-time"> ลาในเวลาทำงาน
                                <input type="radio" name="leave_lengths" value="out-time" style="margin-left: 20px"> ลาในเวลาปกติ
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">วันที่:</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="date">
                            </div>
                            <label class="col-sm-1 col-sm-1 control-label">ตำแหน่ง:</label>
                            <div class="col-sm-3">
                                {{$user->position}}
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>
                        <!--ชืื่อ-->
                        <div class="form-group">

                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-2 control-label">ชื่อ:</label>
                            <div class="col-sm-4">
                                {{$user->first_name}}
                            </div>
                            <label class="col-sm-1 col-sm-1 control-label">นามสกุล:</label>
                            <div class="col-sm-3">
                                {{$user->last_name}}
                            </div>
                            <div class="col-sm-1 col-sm-1"></div>
                        </div>

                        <!--วันที่ลา-->
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-2 control-label">ลาตั้งแต่วันที่:</label>
                            <div class="col-sm-2">
                                <input type="time" class="form-control" name="start_at">
                            </div>
                            <!--ถึงเวลา-->
                            <label class="col-sm-1 col-sm-0 control-label">ถึงวันที่:</label>
                            <div class="col-sm-3">
                                <input type="time" class="form-control" name="end_at">
                            </div>
                        </div>

                        <!--เวลาที่ลา-->
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-2 control-label">ลาตั้งแต่เวลา:</label>
                            <div class="col-sm-2">
                                <input type="time" class="form-control" name="start_at">
                            </div>
                            <!--ถึงเวลา-->
                            <label class="col-sm-1 col-sm-0 control-label">ถึงเวลา:</label>
                            <div class="col-sm-3">
                                <input type="time" class="form-control" name="end_at">
                            </div>
                        </div>

                        <!--อีเมล-->
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">รวมเป็นเวลา:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" >
                            </div>
                            <label class="col-sm-1 col-sm-0 control-label"></label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control">
                            </div>
                            <label class="col-sm-1 col-sm-0 control-label"></label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </form>

                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <section id="no-more-tables">
                                    <table class="table table-bordered table-striped table-condensed cf">
                                        <thead class="cf">
                                        <tr>
                                            <th>ประเภทการลาหยุด</th>
                                            <th>เหตุผลการลา</th>
                                            <th class="numeric">หมายเหตุ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <form action="">
                                                    <input type="radio" name="leave" value="sick" style="margin-right: 10px">ลาป่วย
                                                    <input type="radio" name="leave" value="take-leave" style="margin-right: 10px;margin-left: 10px">ลากิจ
                                                    <input type="radio" name="leave" value="vacation" style="margin-right: 10px;margin-left: 10px">ลาพักผ่อน
                                                </form>

                                            </td>
                                            <td data-title="เหตุผลการลา"> <input type="text" class="form-control"></td>
                                            <td data-title="เหตุผลการลา"> <input type="text" class="form-control"> </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="row mt">
                                        <div class="col-sm-1"></div>
                                        <label class="col-sm-1 col-sm-2 control-label">เอกสารประกอบ:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 col-lg-9"></div>
                                            <div class="col-md-2 col-lg-3">ลงชื่อ................................ผู้ลา</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 col-lg-9"></div>
                                            <div class="col-md-2 col-lg-3">( นางสาวณัฐพร  ตั้งแต่ง )</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 col-lg-9"></div>
                                            <div class="col-md-2 col-lg-3"><input type="date"></div>
                                        </div>
                                    </div>

                                    <div class="row mt">
                                        <div class="col-lg-12">
                                            <div class="content-panel">
                                                <section id="no-more-tables">
                                                    <table class="table table-bordered table-striped table-condensed cf">
                                                        <thead class="cf">
                                                        <tr>
                                                            <th>ประเภทการลา</th>
                                                            <th class="numeric">จำนวนที่ลาได้</th>
                                                            <th class="numeric">ลามาแล้ว</th>
                                                            <th class="numeric">ลาครั้งนี้</th>
                                                            <th class="numeric">คงเหลือ</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td data-title="ประเภทการลา">ลากิจ</td>
                                                            <td data-title="จำนวนที่ลาได้">30</td>
                                                            <td class="numeric" data-title="ลามาแล้ว">-0.01</td>
                                                            <td class="numeric" data-title="ลาครั้งนี้">-0.36%</td>
                                                            <td class="numeric" data-title="คงเหลือ">$1.39</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-title="ประเภทการลา">ลาป่วย</td>
                                                            <td data-title="จำนวนที่ลาได้">30</td>
                                                            <td class="numeric" data-title="ลามาแล้ว">-0.01</td>
                                                            <td class="numeric" data-title="ลาครั้งนี้">-0.36%</td>
                                                            <td class="numeric" data-title="คงเหลือ">$1.39</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-title="ประเภทการลา">ลาพักผ่อน</td>
                                                            <td data-title="จำนวนที่ลาได้">30</td>
                                                            <td class="numeric" data-title="ลามาแล้ว">-0.01</td>
                                                            <td class="numeric" data-title="ลาครั้งนี้">-0.36%</td>
                                                            <td class="numeric" data-title="คงเหลือ">$1.39</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </section>
                                            </div><!-- /content-panel -->
                                        </div><!-- /col-lg-12 -->
                                    </div><!-- /row -->
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <label class="col-sm-12  control-label">ความคิดเห็น leader/PM................................................................................................................................................................................</label>
                                        <br><br><br>
                                        <label class="col-sm-12  control-label" >ลงชื่อ.........................Leader/PM</label>
                                    </div>
                                    <br>

                                    <table class="table table-bordered table-striped table-condensed cf">
                                        <thead class="cf">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <form action="">
                                                    <input type="radio" name="approve" value="" style="margin-right: 10px">อนุมัติตามสิทธิ์พนักงานประจำ<br>
                                                    <input type="radio" name="approve" value="" style="margin-right: 10px">อนุมัติโดยให้ชดเชยวันลา<br>
                                                    <input type="radio" name="approve" value="" style="margin-right: 10px">อนุมัติโดยหักค่าจ้าง 1.5 เท่า
                                                </form>

                                            </td>
                                            <td>
                                                <header  class="text-center">ลงชื่อ.......................................ผู้อนุมัติ </header>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection