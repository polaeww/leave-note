@extends('layout') 
@section('content')
<section class="wrapper">
    <br>
    <h3><i class="fa fa-angle-right"></i> ประวัติพนักงาน</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <!--profile employee -->
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2"><a href="{{route('employee.edit')}}"><button class="btn btn-danger">แก้ไขข้อมูล</button></a></div>
                </div><br>
                <form class="form-horizontal style-form" method="get" action="{{route('employee.index')}}">
                    <!--ชืื่อ-->
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-2 col-sm-2 control-label">ชื่อ:</label>
                        <div class="col-sm-3">
                            {{$user->first_name}}
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">นามสกุล:</label>
                        <div class="col-sm-3">
                            {{$user->last_name}}
                        </div>
                        <div class="col-sm-1 col-sm-1"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-2 col-sm-2 control-label">ชื่อเล่น:</label>
                        <div class="col-sm-3">
                            {{$user->nick_name}}
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">ตำแหน่งงาน:</label>
                        <div class="col-sm-3">
                            {{$user->position}}
                        </div>
                        <div class="col-sm-1 col-sm-1"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-2 col-sm-2 control-label">เบอร์โทรศัพท์:</label>
                        <div class="col-sm-3">
                            {{$user->phone}}
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label">อีเมล:</label>
                        <div class="col-sm-3">
                            {{$user->email}}
                        </div>
                        <div class="col-sm-1 col-sm-1"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <label class="col-sm-2 col-sm-2 control-label">วันที่เข้าทำงาน:</label>
                        <div class="col-sm-3">
                            {{$user->start_work}}
                        </div>
                    </div>
                </form>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <h4> สิทธิ์ลาทั้งหมด </h4>
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
                                      @foreach($quotas as $quota)
                                      <tr>
                                        <td data-title="ประเภทการลา">{{$quota->name}}</td>
                                        <td data-title="จำนวนที่ลาได้">{{ceil($quota->limit/8)}}</td>
                                        <td class="numeric" data-title="ลามาแล้ว">{{ceil($quota->used/8)}}</td>
                                        <td class="numeric" data-title="ลาครั้งนี้">-0.36%</td>
                                        <td class="numeric" data-title="คงเหลือ">{{ceil($quota->remaining/8)}}</td>
                                    </tr>
                                      @endforeach()
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