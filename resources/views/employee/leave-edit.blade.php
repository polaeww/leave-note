@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> แก้ไขใบลา</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <br>

                    <form class="form-horizontal style-form" action="{{route('leave.save')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">ประเภทใบลา:</label>
                            <div class="col-sm-4">
                                <input type="radio" name="leave_lengths" value="1"> ลาในเวลาทำงาน
                                <input type="radio" name="leave_lengths" value="2" style="margin-left: 20px"> ลาในเวลาปกติ
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
                                <input type="date" class="form-control" name="date_start" >
                            </div>
                            <!--ถึงเวลา-->
                            <label class="col-sm-1 col-sm-2 control-label">ถึงวันที่:</label>
                            <div class="col-sm-2">
                                <input type="date" class="form-control" name="date_end" >
                            </div>
                        </div>

                        <!--เวลาที่ลา-->
                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-2 control-label">ลาตั้งแต่เวลา:</label>
                            <div class="col-sm-2">
                                <input type="time" class="form-control" name="time_start">
                            </div>
                            <!--ถึงเวลา-->
                            <label class="col-sm-1 col-sm-2 control-label">ถึงเวลา:</label>
                            <div class="col-sm-2">
                                <input type="time" class="form-control" name="time_end">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-1"></div>
                            <label class="col-sm-1 col-sm-1 control-label">รวมเป็นเวลา:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="total_hour">
                            </div>
                        </div>

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
                                                    <input type="radio" name="leave_type_id" value="1" style="margin-right: 10px">ลาป่วย
                                                    <input type="radio" name="leave_type_id" value="2" style="margin-right: 10px;margin-left: 10px">ลากิจ
                                                    <input type="radio" name="leave_type_id" value="3" style="margin-right: 10px;margin-left: 10px">ลาพักผ่อน

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
                                        <br>
                                        <div class="row mt">
                                            <div class="row" align="center">
                                                <div class="col-md-9 col-lg-8"></div>
                                                <div class="col-md-2 col-lg-3">ลงชื่อ........{{\Illuminate\Support\Facades\Auth::user()->first_name. '..' .\Illuminate\Support\Facades\Auth::user()->last_name }}........ผู้ลา</div>
                                            </div>
                                            <div class="row" align="center">
                                                <div class="col-md-9 col-lg-8"></div>
                                                <div class="col-md-2 col-lg-3">( {{\Illuminate\Support\Facades\Auth::user()->first_name. ' ' .\Illuminate\Support\Facades\Auth::user()->last_name }} )</div>
                                            </div>
                                            <div class="row" align="center">
                                                <div class="col-md-9 col-lg-8"></div>
                                                <div class="col-md-2 col-lg-3"><input type="date"></div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection