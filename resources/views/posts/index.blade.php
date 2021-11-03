<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  
  <div style="width:900px" class="container  mx-auto pt-4">
    <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" >Create</a>
  
    @foreach($posts as $post)
    <a href="/posts/{{ $post->id }}/edit">
      <h2 class="text-lg font-bold text-indego-400">{{ $post->title }}</h2>
      <h2 class="text-sm">{{$post->content}}</h2>
    </a>
    @endforeach
  </div>

</body>
</html>
