
    <a href="{{ route('teachers.create') }}" class="btn btn-primary">講師作成</a>
    <h1>講師一覧</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>講師名</th>
            <th>経歴・コメント</th>
            <th>更新</th>
            <th>削除</th>
        </tr>
        @if(!$teachers->isEmpty())
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->comment }}</td>
                    <td><a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-primary">編集</a></td>
                    <td>
                        <button type="submit" class="btn btn-danger" form="delete-form" onclick="return confirm('本当に削除しますか？')">削除</button>
                    </td>
                </tr>
            @endforeach
        @endif
        <form action={{ route('teachers.destroy', $teacher)}} method="post" id="delete-form">
            @csrf
            @method('DELETE')
        </form>
    </table>

    <a href="{{ route('courses.create') }}" class="btn btn-primary">コース作成</a>
    <h1>コース一覧</h1>
    <table class="table">
        <tr>
            <th>講師名</th>
            <th>値段</th>
            <th>タイプ</th>
            <th>タイトル</th>
            <th>コンテンツ</th>
            <th>実施日</th>
            <th>人数制限</th>
            <th>予約期間</th>
        </tr>
        @if(!$courses->isEmpty())
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->teacher->name }}</td>
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
        <form action={{ route('teachers.destroy', $teacher)}} method="post" id="delete-form">
            @csrf
            @method('DELETE')
        </form>
    </table>

