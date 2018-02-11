@extends('layout')
@section('content')
    <section class="wrapper">
        <br>
        <h3><i class="fa fa-angle-right"></i> ดูใบลา</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <br>
                    <form class="form-horizontal style-form" action="{{route('leave.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-2 col-sm-2 control-label">ประเภทใบลา:</label>
                        <div class="col-sm-4">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        {{-- <label class="col-sm-1 col-sm-1 control-label">วันที่:</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="date">
                        </div> --}}
                        <label class="col-sm-2 col-sm-2 control-label">ตำแหน่ง:</label>
                        <div class="col-sm-3">
                            {{$user->position}}
                        </div>
                        <div class="col-sm-1 col-sm-1"></div>
                    </div>
                    <!--ชืื่อ-->
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-2 col-sm-2 control-label">ชื่อ:</label>
                        <div class="col-sm-4">
                            {{$user->first_name}}
                        </div>
                        <label class="col-sm-2 col-sm-1 control-label">นามสกุล:</label>
                        <div class="col-sm-3">
                            {{$user->last_name}}
                        </div>
                        <div class="col-sm-1 col-sm-1"></div>
                    </div>
                    <!--วันที่ลา-->
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-2 col-sm-2 control-label">ลาตั้งแต่วันที่:</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" name="date_start">
                        </div>
                        <!--ถึงเวลา-->
                        <label class="col-sm-2 col-sm-2 control-label">ถึงวันที่:</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" name="date_end">
                        </div>
                    </div>
                    <!--เวลาที่ลา-->
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-2 col-sm-2 control-label">ลาตั้งแต่เวลา:</label>
                        <div class="col-sm-2">
                            <input type="time" class="form-control" name="time_start">
                        </div>
                        <!--ถึงเวลา-->
                        <label class="col-sm-2 col-sm-2 control-label">ถึงเวลา:</label>
                        <div class="col-sm-2">
                            <input type="time" class="form-control" name="time_end">
                        </div>
                    </div>
                    {{--
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-1 col-sm-1 control-label">รวมเป็นเวลา:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="total_hour">
                        </div>
                    </div> --}}
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

                                            </td>
                                            <td data-title="เหตุผลการลา"> <input type="text" class="form-control" name="reason"></td>
                                            <td data-title="หมายเหตุ"> <input type="text" class="form-control" name="note"> </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="row mt">
                                        <div class="col-sm-1"></div>
                                        <label class="col-sm-2 col-sm-2 control-label">เอกสารประกอบ:</label>
                                        <div class="col-sm-2">
                                            <input type="file" class="form-control" name="document">
                                        </div>
                                    </div>
                                    {{--
                                    <div class="row mt">
                                        <div class="row" align="center">
                                            <div class="col-md-9 col-lg-8"></div>
                                            <div class="col-md-2 col-lg-3">ลงชื่อ........{{\Illuminate\Support\Facades\Auth::user()->first_name. '..' .\Illuminate\Support\Facades\Auth::user()->last_name
                                                }}........ผู้ลา
                                            </div>
                                        </div>
                                        <div class="row" align="center">
                                            <div class="col-md-9 col-lg-8"></div>
                                            <div class="col-md-2 col-lg-3">( {{\Illuminate\Support\Facades\Auth::user()->first_name. ' ' .\Illuminate\Support\Facades\Auth::user()->last_name
                                                }} )</div>
                                        </div>
                                        <div class="row" align="center">
                                            <div class="col-md-9 col-lg-8"></div>
                                            <div class="col-md-2 col-lg-3"><input type="date"></div>
                                        </div>
                                    </div> --}} {{--
                                <div class="row mt">
                                    <label class="col-sm-10  control-label">ความคิดเห็น leader/PM : <input type="text" name="approve_reason" style="width: 200px"></label>
                                    <label class="col-sm-12  control-label">ลงชื่อ.........................Leader/PM</label>
                                </div> --}}
                                    <br> {{--
                                <table class="table table-bordered table-striped table-condensed cf">
                                    <thead class="cf">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="approve" value="" style="margin-right: 10px">อนุมัติตามสิทธิ์พนักงานประจำ<br>
                                                    <input type="radio" name="approve" value="" style="margin-right: 10px">อนุมัติโดยให้ชดเชยวันลา<br>
                                                    <input type="radio" name="approve" value="" style="margin-right: 10px">อนุมัติโดยหักค่าจ้าง
                                                    1.5 เท่า
                                                </td>
                                                <td>
                                                    <header class="text-center">ลงชื่อ.......................................ผู้อนุมัติ </header>
                                                </td>
                                            </tr>
                                        </tbody>
                                </table> --}}
                            </div>
                        </div>
                    </div>
                        <div class="row mt">
                            <div class="col-sm-1"></div>
                                <div class="btn-group col-sm-3">
                                    <input type="radio" name="approve" value="approve" style="margin-right: 10px">อนุมัติ
                                    <input type="radio" name="unapprove" value="unapprove" style="margin-right: 10px;margin-left: 10px">ไม่อนุมัติ
                                </div>
                        </div>

                        <div class="row mt">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1">ความคิดเห็น:</div>
                            <div class="btn-group col-sm-6">
                                <textarea class="form-control" style="height: 70px"></textarea>
                            </div>
                        </div>

                        <div class="row mt">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1">เลือก Leader:</div>
                            <div class="col-sm-2">
                                <select style="width: 250px">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success  btn-md ">ยืนยันการอนุมัติ</button>
                            </div>
                        </div><br>

                    </form>
                </div>
            </div>
        </div>


    </section>

@endsection