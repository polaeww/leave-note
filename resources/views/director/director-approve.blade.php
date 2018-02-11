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
                                    <form>
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
                                                        ไม่อนุมัติ
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        อนุมัติ
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        ไม่อนุมัติ
                                                    </div>
                                                </td>
                                                <td data-title="ดูใยลา" align="center"><a href="{{route('director.approvement')}}"><button type="button" class="btn btn-info  btn-md ">ดูใบลา</button></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection