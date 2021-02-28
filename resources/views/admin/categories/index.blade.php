@extends('admin.layout.master')


@section('content')
    <h1>دسته بندی ها </h1>

    <div class="row">
        <div class="col-sm-12">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">عنوان </th>
                    <th scope="col">دسته والد</th>
                    <th scope="col">ویرایش </th>
                    <th scope="col">حذف  </th>
                </tr>
                </thead>
                <tbody>
                <@foreach($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->title}}</td>
                    <td> {{optional($category->parent)->title}} </td>
                    <td>
                        <a href="{{route('categories.edit',$category)}}" class="btn btn-sm btn-primary">ویرایش</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('categories.destroy',$category)}}">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="حذف" class="btn btn-sm btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>



        </div>
    </div>

@include('errors.error')
@endsection

@section('scripts')


@endsection
