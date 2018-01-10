@extends('layout')

@section('script')
    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '2017-12-12',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2017-12-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2017-12-07',
                        end: '2017-12-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-12-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-12-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2017-12-11',
                        end: '2017-12-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-12-12T10:30:00',
                        end: '2017-12-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2017-12-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-12-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2017-12-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2017-12-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2017-12-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2017-12-28'
                    }
                ]
            });
        });
    </script>
    <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-size: 14px;
        }
        #calendar {
            max-width: 1300px;
            margin: 0 auto;
        }
    </style>
    @endsection

@section('content')
    <section class="wrapper">
        <br><h3><i class="fa fa-angle-right"></i> ปฏิทินการลาของพนักงาน</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel"><br><br>
                    <br><div id='calendar' style="color: black"></div>
                </div>
            </div>
        </div>
    </section>
    @endsection
