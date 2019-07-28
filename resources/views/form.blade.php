<form action="/form" method="post">
    {{ csrf_field() }}
    <input type="text">
    <button type="submit">SEND</button>
</form>
