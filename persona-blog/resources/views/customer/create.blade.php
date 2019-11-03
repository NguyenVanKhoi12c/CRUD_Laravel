<form method="post" action="{{route('customers.store')}}">
    @csrf
    Title:
    <input type="text" name="title">
    <br>
    author
    <input type="text" name="author">
    <br>
    content
    <input type="text" name="contents">
    <br>
    <button type="submit">Create</button>
</form>
