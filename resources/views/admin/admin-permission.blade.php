@extends('layout')
@section('content')


    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> ประวัติการลา</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <section id="no-more-tables">
                                    <table class="table table-bordered table-striped table-condensed cf">
                                        <thead class="cf">
                                        <tr>
                                            <th>ชื่อ - นามสกุล</th>
                                            <th>ชื่อเล่น</th>
                                            <th>ตำแหน่งงาน</th>
                                            <th>ลากิจ</th>
                                            <th>ลาพักผ่อน</th>
                                            <th>ลาป่วย</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>AAC</td>
                                            <td>AAC</td>
                                            <td>AAC</td>
                                            <td>30</td>
                                            <td>30</td>
                                            <td>30</td>
                                            <!--เมื่อกดแก้ไขข้อมูลจะสามารถแก้บรรทัดนั้นๆได้เลย และเมื่อกดแก้ไข กดจะมีปุ่มยืนยันการแก้ไขขึ้นมา-->
                                            <td align="center"><button class="btn btn-primary">แก้ไขข้อมูล</button></td>
                                        </tr>
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