<h1>新規投稿</h1>

<form method="POST" action="/posts">
    @csrf
    <input type="text" name="title">
    <textarea name="body"></textarea>
    <button>保存</button>
</form>