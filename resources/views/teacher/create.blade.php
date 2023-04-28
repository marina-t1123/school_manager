@extends('layouts.app')

@section('content')
    <form action="{{ route('teachers.store')}}" method="post">
    @csrf
        <label>講師名</label>
        <input type="text" name="name">
        <label>コメント</label>
        <textarea name="comment" cols="30" rows="10"></textarea>
        <input type="submit">
    </form>
@endsection
