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

     <a href="{{action('Web\ChecklistController@create')}}"> Create</a>
     <br/>


       <table>
       <tr>
         <th>Name </th>
         <th>Status </th>
         <th>Created At </th>
         <th>Updated At </th>
         <th>Action </th>
       </tr>

       @foreach($checklists as $checklist)
       <tr>
       <td><a href="{{ action('Web\ChecklistController@show', ['id' => $checklist->id]) }}">{{ $checklist -> name}}</a>
           
       </td>
       <td>
           {{ $checklist->is_completed}}
       </td>
       <td>
           {{ $checklist->created_at}}
       </td>
       <td>
           {{ $checklist->updated_at}}
       </td>
       </tr>

       @endforeach 

       </table>


    </body>
</html>
