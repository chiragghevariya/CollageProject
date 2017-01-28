@include('layout.head')

@section('title','register page')
@section('content')


    <div class="container">

        <div class="container jumbotron ">

            <div>

            <p class="register-page">If you are student select :: Apply for Stddent Registration </p>

            <p class="register-page">If you are faculty & Hod select :: Apply for Faculty Registration </p>

            </div>

        </div>


        <button class="btn btn-default pull-right"><a href="{{url('/')}}">Back</a></button>


        <div class="row" style="margin: auto;align: center">

            <div class="col-md-2">

                <div class="btn-group">


                    <button class="btn btn-default"><a href="{{url('register/student')}}">Student Registration</a></button>


                </div>


            </div>

            <div class="col-md-2">


                <button class="btn btn-default"><a href="{{url('register/faculty')}}">Faculty Registration</a></button>


            </div>



            </div>

    </div>