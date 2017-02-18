@extends('all-section.student.index')

@section('content')

    <div class="container">


        @if($profile->count() > 0)

            <div class="row" style=" margin: auto;width:90%;margin-top: 2em">

                <div class="col-md-7">

                    @foreach($profile as $profile)
                        <img width="60%" height="60%" style="margin-left: 6em;" src="{{url('Profile/'.Auth::user()->id.'/images/'.$profile->photo)}}" class="img-rounded" alt="Set Profile Picture">


                </div>

                <div class="col-md-3" style="margin-top: 5em ">
                    <h3><b>{{Auth::user()->name}}</b> Profile</h3>
                    <label for="change" class="control-label">Change Profile Picture:</label>
                    <a class="btn btn-success" href="{{route('studentprofile.edit',['id'=>$profile->id])}}">Update</a>
                        <div style="margin-top: 1em">

                            <form method="post" action="{{Route('studentprofile.destroy',['id'=>$profile->id])}}">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>


                        </div>



                </div>

            </div>

                     @endforeach

        @else


            <form method="post" action="{{route('studentprofile.store')}}" enctype="multipart/form-data">

                {{csrf_field()}}

                <div class="row" style=" width: 50%;margin: auto;padding: 3em">

                    <div class="col-md-4">
                        <div>
                            <img width="100%" src="{{url('blank profile/blankuser.png')}}" class="img-circle" alt="Set Profile Picture">

                        </div>

                    </div>

                    <div class="col-md-8">

                        <div class="form-group">
                            <h3><b>{{Auth::user()->name}}</b> Profile</h3>
                            <label for="photo" class="control-label">Upload profile Picture:</label>
                            <input type="file" name="photo" class="form-control">

                        </div>

                        <div class="form-group">

                            <input type="submit" value="submit" class="form-control btn-success">

                        </div>

                    </div>

                </div>

            </form>



        @endif


    </div>


    @stop