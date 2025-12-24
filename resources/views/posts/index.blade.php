<h1>投稿一覧</h1>

<a href="/posts/create">新規作成</a>

@foreach ($posts as $post)
<div>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <a href="/posts/{{ $post->id }}/edit">編集</a>
    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('DELETE')
        <button>削除</button>
    </form>
</div>
@endforeach
@if (session('success'))
<div>
    {{ session('success') }}
</div>
@endif