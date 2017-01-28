@include('layout.head')

@section('title','Login')

@section('content')


    <div class="container">

        <button class="btn btn-default pull-right back"><a href="{{url('/')}}">Back</a></button>

        <form class="loginform">

           <div class="row">



                   <div class="form-group">

                       <div class="col-md-3">

                       <label for="Username">Email Id:</label>
                       <input type="email" class="form-control" name="username">

                       </div>

               </div>

           </div>


            <div class="row">

                <div class="form-group">

                        <div class="col-md-3">

                        <label for="Username">Password:</label>
                        <input type="password" class="form-control" name="password">

                        </div>

                </div>

            </div>

            <div style="margin-top: 1em; ">

                <button type="submit" class="btn btn-default">Submit</button>

            </div>



        </form>

    </div>





