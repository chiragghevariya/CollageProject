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
                    <th>Photo</th>
                    <th>show</th>
                    {{--<th>Description</th>--}}
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>

                @foreach($post as $post)

                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td><img width="40" height="40" src="{{url('Post/'.Auth::user()->id. '/images/'.$post->photo)}}"></td>
                        <td><a class="btn btn-success" href="{{route('post.show',['id'=>$post->id])}}">Show</a></td>
                        {{--<td>{!! $post->description!!}</td>--}}
                        <td><a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form method="post" action="{{Route('post.destroy',['id'=>$post->id])}}">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>

                    </tr>

                @endforeach

            </table>

        </div>

    </div>

@stop

