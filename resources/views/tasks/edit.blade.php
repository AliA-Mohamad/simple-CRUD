<x-layout title="Task Editor">
    <x-tasks.form :action="route('tasks.update', $task->id)" :task="$task->task"/>
</x-layout>