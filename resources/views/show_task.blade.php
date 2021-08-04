<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>

</head>
<body>
    <form name="a" method="get" action="insert_task">
    
            <input type="text" name="content_0">

            <input type="submit" value="Send">

    </form>
    <form name="b" method="get" action="update_task">

            <textarea name="content_0" cols="20" rows="20">
            
            </textarea>
            <input type="number" name="id">

            <input type="submit" value="Edit">

    </form>

    @foreach($tasks as $task)
        <div class="notes"> 
        
        {{$task->id}}{{$task->content_0}}
        <a href="/home/functions/update_task_0?id={{$task->id}}"> 
        <input type="submit" name="edit" value="Edit"></a>
        <a href="/home/functions/delete_task?id={{$task->id}}"> <input type="submit" value="Delete"></a>
        </div>

    @endforeach

</body>
</html>