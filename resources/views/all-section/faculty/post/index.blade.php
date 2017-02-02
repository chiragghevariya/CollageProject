@extends('all-section.faculty.index')

@section('content')

    <div class="container">

        <div style="margin-top: 5em">

            <a href="{{Route('post.create')}}" class="btn btn-primary pull-right"><span style="margin-right: 1em"><i class="fa fa-plus" aria-hidden="true"></i></span>Add Post</a>

        </div>



        <div style="margin-top:10em" >

            <table class="table table-hover table-striped table-responsive" >

                <tr>

                    <th>Id</th>
                    <th>Post Title</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>

                @foreach($post as $post)

                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td $post->description ></td>
                        <td>
                            {{--<form method="post" action="{{Route('department.destroy',['id'=>$dept->id])}}">--}}
                                {{--{{csrf_field()}}--}}
                                {{--{{method_field('delete')}}--}}
                                {{--<input type="submit" value="Delete" class="btn btn-danger">--}}
                            {{--</form>--}}
                        </td>

                    </tr>

                @endforeach

            </table>

        </div>




    </div>


    @stop

