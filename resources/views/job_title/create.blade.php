@extends('dashboard')
@section('huyen')
    <h1>Thêm job title</h1>
    <form action="{{ route('jobTitle.store') }}" method="post">
        @csrf
        tên : <input type="text" name="nameJob"><br>
        <input value="1" readonly name="available"><br>
        <button>Thêm</button>
    </form>
@endsection