@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <form  action="{{route('categories.update',$category)}}" method="post">
                @csrf
                @method('PATCh')
                <div class="form-group">
                    <label for="category_id">دسته والد</label>
                    <select id="category_id"name="category_id">
                        <option value=""disabled selected>دسته ی والد را انتخاب کنید </option>
                        @foreach($categories as $parent)
                            <option
                                @if($parent->id===$category->category_id)selected
                                @endif
                                value="{{$parent->id}}">{{$parent->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">عنوان </label>
                    <input name="title" class="form-control" value="{{$category->title}}" type="text"id="title">
                </div>
                <div class="form-group">
                    <input type="submit" id="submit" name="submit"value="ثبت "  class="btn btn-primary"/>
                </div>
            </form>
        </div>
    </div>



@endsection
