@extends('all-section.student.index')


@section('content')



    <div class="department-form">

        <form method="post" action="{{route('result.update',['id'=>$resultt->id])}}" enctype="multipart/form-data">

            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">

            <div class="row">

                <div class="col-md-3">

                    <div class="form-group">

                        <label for="Title">Title:</label>
                        <input type="text" class="form-control" name="title" value="{{$resultt->title}}">

                    </div>

                </div>

                <div class="col-md-2">

                    <div class="form-group">

                        <label for="spi">SPI:</label>
                        <input type="text" class="form-control" name="spi" value="{{$resultt->spi}}">

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-5">

                    <div class="form-group">

                        <label for="semester">Semester</label>
                        <select class="form-control" name="semester">
                            <option>Select semester</option>
                            @for($i=1;$i<=8;$i++)
                                <option value="{{$i}}" @if($resultt->semester == $i)  selected @endif>Semester {{$i}}</option>
                            @endfor
                        </select>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-2">

                    <div class="form-group">

                        <label class="radio-inline">
                            <input type="radio" name="ps" value="pass" id="R1">pass
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="ps" value="fail" id="R2">fail
                        </label>

                    </div>

                </div>

            </div>


            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label for="Title">Image:</label>
                        <input type="file" name="photo" class="form-control" value="{{$resultt->photo}}">

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <input type="submit" class="btn btn-success" value="update">
                        <a class="btn btn-danger" href="{{Route('result.index')}}">Cancle</a>

                    </div>

                </div>

            </div>

        </form>

    </div>



@stop