@extends('all-section.student.index')

@section('content')



        <div style="width:50%;margin: auto">

            <div class="row">

                <div class="col-md-12">

                    <div class="panel panel-success">

                        <div class="panel-heading" style="text-align: center;font-size: large">SEMESTER :{{$result->semester}}</div>

                        <div class="panel-body">

                            <img width="100%" height="100%" src="{{url('Result/'.Auth::user()->id. '/images/'.$result->photo)}}">

                            <hr>

                            <div style="text-align:center">Result :{{$result->pass_fail}}
                            </div>
                            <hr>

                            <div style="text-align:center">SPI :{{$result->spi}}</div>

                        </div>

                        <hr>

                        <div class="panel-footer bg-success"  >

                            <h6 style="text-align: center">Created Date :{{$result->created_at}}</h6>
                            <h6 style="text-align: center">Updated Date :{{$result->updated_at}}</h6>

                        </div>

                    </div>

                </div>

            </div>

        </div>


@stop