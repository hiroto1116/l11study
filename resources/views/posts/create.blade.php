<h1>新規投稿</h1>

<form method="POST" action="/posts">
    @csrf
    <input type="text" name="title" value="{{ old('title') }}">
    <textarea name="body">{{ old('body') }}</textarea>
    <button>保存</button>
    @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>