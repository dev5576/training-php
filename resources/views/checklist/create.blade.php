<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body>
    <form action="{{ action('Web\ChecklistController@store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name"><br />
            @if($errors->first('name'))
                {{ $errors->first('name') }}
            @enderror
            <input type="file" name="image" ><br />
            <input type="checkbox" name="status" >Status<br />
            <button type="submit" class="btn">Create</button>
        </form>
    </body>
</html>
