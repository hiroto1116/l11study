<!-- resources/views/posts/index.blade.php -->
<h1>投稿一覧</h1>

<a href="/posts/create">新規作成</a>

@foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </div>
@endforeach