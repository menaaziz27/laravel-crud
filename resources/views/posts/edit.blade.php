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

    <form method="POST" action="/posts/{{$post->id}}">

    @method("PUT")

    @csrf

    <div class="mb-4">
      <label class="font-bold text-grey-800" for="">Title:</label>
      <input class="h-10 text-sm border border-grey-300 rounded py-4 px-3 mr-4 w-full focus:outline-none focus:border-grey-400" type="text" name="title"  value="{{$post->title}}">
    </div>

    <div class="mb-4">
      <label class="font-bold text-grey-800" for="">Content:</label>
      <input class="h-10 text-sm border border-grey-300 rounded py-4 px-3 mr-4 w-full focus:outline-none focus:border-grey-400" type="text" name="content"  value="{{$post->content}}">
    </div>

    <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" type="submit">Update</button>
    <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" >Home</a>

    <form method="POST" action="/posts/{{$post->id}}">
      @method("DELETE")
      @csrf

    <button class="bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow" type="submit">Delete</button>
    </form>

    </form>

  </div>

</body>
</html>
