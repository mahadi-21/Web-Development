@foreach ($blogs as $blog )
<h1>{{ $blog->blog }}</h1>
<h2>{{ $blog->writer }}</h2>
@endforeach