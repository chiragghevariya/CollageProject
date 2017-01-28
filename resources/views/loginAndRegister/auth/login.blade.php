@include('layout.head')

@section('title','Login')

@section('content')


    <div class="container">

        <form class="loginform">

           <div class="row">

               <div class="col-md-4">

                   <div class="form-group">

                       <label for="Username">Email Id:</label>
                       <input type="email" class="form-control" name="username">

                   </div>

               </div>

           </div>


            <div class="row">

                <div class="col-md-4">


                    <div class="form-group">

                        <label for="Username">Password:</label>
                        <input type="password" class="form-control" name="password">

                    </div>

                </div>

            </div>


            <button type="submit" class="btn btn-default">Submit</button>

        </form>

    </div>





