@extends('templates.template')

@section('content')
    <H1 class="text-center">@if(isset($book))Editar @else Cadastrar @endif</H1>
    <hr>

    <div class="col-8 m-auto">
        
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
        
            @if(isset($book))
                <form name="formEdit" id="formEdit" action="{{url('books/'.$book->id)}}" method="post">
                @method('PUT')
            @else
                <form name="formCad" id="formCad" action="{{url('books')}}" method="post">
            @endif
        
            @csrf
            <input class="form-control" type="text" name="title" id="title" value="{{$book->title ?? ''}}" placeholder="Título: "required><br>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? ''}}</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>
            <input class="form-control" type="text" name="pages" id="pages" value="{{$book->pages ?? ''}}" placeholder="Páginas: "required><br>
            <input class="form-control" type="text" name="price" id="price" value="{{$book->price ?? ''}}" placeholder="Preço: "required><br>
            <input class="btn btn-primary" type="submit" value="@if(isset($book))Editar @else Cadastrar @endif">
        </form>
    </div>
@endsection
