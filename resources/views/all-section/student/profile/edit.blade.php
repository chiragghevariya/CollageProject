@extends('all-section.student.index')

@section('content')


    <form method="post" action="{{route('studentprofile.update',['id'=>$profile])}}" enctype="multipart/form-data">

        {{csrf_field()}}

        <input type="hidden" name="_method" value="put">

        <div class="row" style="width: 50%;margin: auto;padding: 3em">
            <div class="col-md-4">

                    <div>

                        <img width="100%" src="{{url('Profile/'.Auth::user()->id.'/images/'.$profile->photo)}}" class="img-circle" alt="Set Profile Picture">

                    </div>

            </div>
            <div class="col-md-8">

                <div class="form-group">
                    <h3><b>{{Auth::user()->name}}</b> Profile</h3>
                    <label for="photo" class="control-label">Change your profile Picture:</label>
                    <input type="file" name="photo" class="form-control" value="{{$profile->photo}}">

                </div>
                <div class="form-group">

                    <input type="submit" value="Update" class="form-control btn-success">


                </div>

            </div>

        </div>

    </form>



@stop