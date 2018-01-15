@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> สถานะใบลา</h3>

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
                                            <th class="text-center">วันที่</th>
                                            <th class="text-center">ประเภทใบลา</th>
                                            <th class="text-center">อนุมัติโดย Admin</th>
                                            <th class="text-center">อนุมัติโดย Leader</th>
                                            <th class="text-center">อนุมัติโดย Director</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td data-title="วันที่">12/12/2560</td>
                                            <td data-title="ประเภทใบลา">ลากิจ</td>
                                            <td data-title="อนุมัติโดย Admin">อนุมัติ</td>
                                            <td data-title="อนุมัติโดย Leader">ไม่อนุมัติ</td>
                                            <td data-title="อนุมัติโดย Director">ไม่อนุมัติ</td>
                                            <td data-title="เรียกดู"><button type="button" class="btn btn-info  btn-md ">ดูใบลา</button></td>
                                            <td data-title="แก้ไขใบลา"><button type="button" class="btn btn-primary  btn-md ">แก้ไขใบลา</button></td>
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