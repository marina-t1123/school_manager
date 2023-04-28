@extends('layouts.app')

@section('content')
    <form action="{{ route('teachers.store')}}" method="post">
    @csrf
        <label>講師名</label>
        <select name="teacher_id">
            @if(!$teachers)
            @foreach($teachers as $teacher)
                <option value="{{ $teacher->id}}">{{ $teacher->name }}</option>
            @endforeach
        </select>
        <label>値段</label>
        <input type="number" name="amount">
        <label>タイプ</label>
        <input type="text" name="type">
        <label>タイトル</label>
        <input type="text" name="title">
        <label>コンテンツ</label>
        <textarea name="content"cols="30" rows="10"></textarea>
        <label>実施日</label>
        <input type="date" name="date">
        <label>募集人数</label>
        <input type="number" name="capacity">
        <label>募集期限</label>
        <input type="date" name="booking_deadline">

        <input type="submity">送信</input>
    </form>
@endsection
