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

    <a href="{{ action('Web\ChecklistController@edit', ['id' => $checklist->id]) }}">Edit</a>
    <form action="{{ action('Web\ChecklistController@destroy', ['id' => $checklist->id]) }}" method="post">
      @csrf
      <input type="hidden" name="_method" value="DELETE"/>
      <button type="submit">Delete</button>
    </form>

       <table>
       <tr>
         <th>Name </th>
         <td> {{ $checklist->name}} </td>
       </tr>
       <tr>
         <th>Status </th>
         <td> {{ $checklist->is_completed}} </td>
       </tr>
       <tr>
                <th>Image</th>
                <td>@if(!empty($checklist->file_name)) <img src="{{ asset('images/'. $checklist->file_name) }}" class="img-responsive" width="100" /> @endif </td>
            </tr>
            <tr>
       <tr>
         <th>Created At </th>
         <td> {{ $checklist->created_at}} </td>
       </tr>
       <tr>
         <th>Updated At </th>
         <td> {{ $checklist->updated_at}} </td>
       </tr>
     
       </table>


    </body>
</html>
