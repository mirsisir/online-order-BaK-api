@extends('layouts.admin_base')

@section('content')

    @if(Session::has('success_message'))
     <div class="alert alert-success d-flex justify-content-between alert-dismissible fade show" role="alert">
            <div>
                <i class=" fas fa-fw fa-check" aria-hidden="true"></i>
                {!! session('success_message') !!}
            </div>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif



    <div class="card">
        <div class="card-body">
            <div id='calendar'></div>

        </div>
    </div>



@endsection

@section('scripts')

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid' ],
                eventClick: function(info) {
                    var eventObj = info.event;

                    if (eventObj.url) {
                        // alert(
                        //     'Clicked ' + eventObj.title + '.\n' +
                        //     'Will open ' + eventObj.url + ' in a new tab'
                        // );

                        window.open(eventObj.url);

                        info.jsEvent.preventDefault();
                    } else {
                        alert('Clicked ' + eventObj.title);
                    }
                },
                // events: [

                //     // {
                //     //     title: 'event with URL',
                //     //     url: 'https://www.google.com/',
                //     //     start: '2019-05-03'
                //     // }
                // ]

                events: [

                        @foreach($serviceOrders as $s)
                    {
                        title: "{{$s->full_name}}  {{$s->phone}}",
                        start: "{{$s->date}}",
                        {{--start: "{{$s->date}}T{{$s->start_time}}:00:00",--}}
{{--                            @if ($s->status == "complete")--}}
{{--                        color: 'yellow',--}}
{{--                        textColor: 'black',--}}
{{--                        @endif--}}
{{--                            @if ($s->paid == 1)--}}
{{--                        color: 'green',--}}
{{--                        textColor: 'white',--}}
{{--                        @endif--}}
                        url: '/service_orders/show/{{$s->id}}',


                    },
                    @endforeach

                ],
            });

            calendar.render();
        });

    </script>

     <style>
         .dataTables_filter {
             float: right;
         }
        i:hover { color: #0248fa !important; }

         html, body {
             margin: 0;
             padding: 0;
             font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
             font-size: 14px;
         }

         #calendar {
             max-width: 900px;
             margin: 40px auto;
         }
     </style>


@endsection


