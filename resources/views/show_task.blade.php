@extends('layouts.app')
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('style.css')?>">
    <title>To do list</title>

</head>
<body>
<div class="container">

<div class="col-md-8">

@auth
<div class="insert">
    <form name="a" method="get" action="insert_task">
    
            <label for="content_0">Dodaj nowe zadania: </label>
            <textarea name="content_0" cols="50" rows="5">

            </textarea>

            <input type="submit" value="Send">

    </form>

</div>

    <div class="notes"> Zadania:</div><br>

    @foreach($tasks as $task)
        <div class="col-md-8 notes"> 
        
        <span>{{$task->content_0}}</span>
        <a href="/home/functions/update_task_0?id={{$task->id}}"> 
        <input type="submit" name="edit" value="Edit"></a>
        @if ($req_0==true && $task->id==$id_0)
            <form name="b" method="get" action="update_task?id=$task->id">

                <textarea name="content_0" cols="5" rows="5" id="{{$task->id}}">
                {{$task->content_0}}

                </textarea>

                <label for="id"> Kliknij tutaj aby zapisać zmiany: </label>
                <input type="hidden" name="id" value="{{$task->id}}">
                <input type="submit" value="Save">
            </form>
        @endif

        <a href="/home/functions/delete_task?id={{$task->id}}"> <input type="submit" value="Delete"></a>
        </div>

    @endforeach

@endauth
</div>
</div>
   
</body>
</html>