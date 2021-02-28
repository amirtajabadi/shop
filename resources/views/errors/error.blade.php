<ul class="bg-danger">
    @foreach($errors->all() as $error)
        <li class="text-white">{{$error}}</li>
    @endforeach
</ul>
