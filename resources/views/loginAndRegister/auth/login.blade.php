@include('layout.welcome')

@section('title','Login')

@section('content')


       <button class="btn btn-default pull-right"><a href="{{url('/')}}">Back</a></button>

       <div style="width: 50%;height:50%;margin: auto;margin-top:8em">

           <form class="loginform" method="post" action="{{url('login')}}">

               {{ csrf_field() }}

               <div class="row">

                   <div class="form-group">

                       <div class="col-md-6">

                           <label for="Username">Email Id:</label>
                           <input type="email" class="form-control" name="email">

                       </div>

                   </div>

               </div>


               <div class="row">

                   <div class="form-group">

                       <div class="col-md-6">

                           <label for="Username">Password:</label>
                           <input type="password" class="form-control" name="password">

                       </div>

                   </div>

               </div>

               <div style=" margin-top: 1em; ">

                   <input type="submit" class="btn btn-default" value="Login">

               </div>

           </form>

       </div>











