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
    <form action="{{ action('Web\ChecklistController@update', ['id' => $checklist->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <label for="">Name</label>
            <input type="text" name="name" value="{{ $checklist->name }}"><br />
            @if($errors->first('name'))
                {{ $errors->first('name') }}
            @enderror

            <input type="checkbox" name="status" @if($checklist->is_completed) checked @endif>Status<br />
            <button type="submit" class="btn">Update</button>
        </form>
    </body>
</html>
