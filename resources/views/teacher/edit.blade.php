@extends('layouts.app')

@section('content')
    <h1>講師編集</h1>
    <form action="{{ route('teachers.update', $teacher)}}" method="post">
    @csrf
    @method('PUT')
        <label>講師名</label>
        <input type="text" name="name" value="{{ $teacher->name }}">
        <label>コメント</label>
        <textarea name="comment" cols="30" rows="10">{{ $teacher->comment }}</textarea>
        <input type="submit">
    </form>
@endsection
