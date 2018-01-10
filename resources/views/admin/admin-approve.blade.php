@extends('layout')
@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> อนุมัติการลา</h3>

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
                                            <th>ตำแหน่ง</th>
                                            <th>วันที่ลา</th>
                                            <th>ประเภทการลา</th>
                                            <th>อนุมัติโดย Admin</th>
                                            <th>อนุมัติโดย Leader</th>
                                            <th>อนุมัติโดย Director</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>AGO</td>
                                            <td>AGO</td>
                                            <td>AGO</td>
                                            <td>AGO</td>
                                            <td>AGO</td>
                                            <td>
                                                <div class="btn-group">
                                                    <form action="">
                                                        <input type="radio" name="approve" value="approve" style="margin-right: 10px">อนุมัติ
                                                        <input type="radio" name="unapprove" value="unapprove" style="margin-right: 10px;margin-left: 10px">ไม่อนุมัติ
                                                    </form>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <form action="">
                                                        อนุมัติ
                                                    </form>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <form action="">
                                                        ไม่อนุมัติ
                                                    </form>
                                                </div>
                                            </td>
                                            <td align="center">
                                                <div class="btn-group">
                                                    <input type="button" class="btn btn-success" name="submit" value="ยืนยัน">
                                                </div>
                                            </td>
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