<h1>We are in blog .php</h1>

<form action="{{ route('create-blog') }}" method="post">
@csrf
    <label for="">Blog</label>
    <input type="text" name="blog"><br>
    <label for="">Writer</label>
    <input type="text" name="writer"><br>
    <input type="submit" value="Submit">
</form>