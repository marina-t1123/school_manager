@extends('layouts.app')

@section('content')
    <a href="{{ route('teachers.create') }}" class="btn btn-primary">講師作成</a>
    <a href="{{ route('courses.create')}}">コース作成</a>
    <h1>勉強会一覧</h1>
    <table class="table">
        <tr>
            <th>価格</th>
            <th>タイプ</th>
            <th>タイトル</th>
            <th>内容</th>
            <th>日時</th>
            <th>募集人数</th>
            <th>募集期限</th>
        </tr>
        @if($courses->isNotEmpty())
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->amount }}</td>
                    <td>{{ $course->type }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->content }}</td>
                    <td>{{ $course->date }}</td>
                    <td>{{ $course->capacity }}</td>
                    <td>{{ $course->booking_deadline }}</td>
                </tr>
            @endforeach
        @endif
    </table>


@endsection
