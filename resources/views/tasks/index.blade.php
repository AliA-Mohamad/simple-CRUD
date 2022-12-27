<x-layout title="Tasks menager">

    <div class="indexConteiner">
        <a class="createTask" href="/tasks/create"> Add a task</a>

        <ul class="tasksList">
            @foreach ($tasks as $task)
                <li class="task"> 
                    {{$task->task}}
                        <a class="editButton" href="{{ route('tasks.edit', $task->id) }}"> E </a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="delete"> X </button>
                        </form>
                </li>
            @endforeach
        </ul>
    </div>


    <style>
        .indexConteiner {
            margin: 2% 20%;
            padding: 2% 0;
            background: rgb(16, 16, 27);
            border-radius: 25px;
        }
        .createTask{
            margin: 0 40%;
            padding: 10px 40px;
            border-radius: 12px;

            background: rgb(73, 73, 141);
            color: whitesmoke;
            font-weight: bold;
            text-decoration: none;
            transition: linear 0.2s;
        }
        .createTask:hover{
            background: rgb(45, 45, 107);
            color: rgb(212, 212, 212);
        }
        .tasksList{
            font-weight: bold;
            padding-top: 20px;
            margin: 0 15px;
            color: whitesmoke;
        }
        .task{
            background: rgb(73, 73, 141);
            border-radius: 30px;
            padding: 10px;
            margin: 15px auto;
            list-style: none;
        }
        .editButton{
            color:aliceblue;
            position: absolute;
            left: 71%;
            transform: translate(0,-5px);
            padding: 5px 12px;
            border-radius: 15px;
            background: rgb(180, 177, 11);
            text-decoration: none;
        }
        .delete{
            position: absolute;
            transform: translate(0,-27px);
            padding: 7px 12px;
            left: 75%;
            border: none;
            background: rgb(197, 5, 5);
            border-radius: 15px;
        }

    </style>
</x-layout>