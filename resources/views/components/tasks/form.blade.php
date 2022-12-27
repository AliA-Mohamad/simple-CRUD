<form class="creatorConteiner" action="{{ $action }}" method="POST">
    @csrf

    @isset($task)
    @method('PUT')
    @endisset

    <label class="creatorLabel" for="task"> what do you need to do? </label>
    <input  class="creatorInput" 
            type="text" 
            placeholder="type..." 
            id="task" 
            name="task"
            @isset($task)
                value="{{ $task }}"
            @endisset>
    <button class="creatorButton" type="submit"> Submit </button>
</form>

<style>
    .creatorConteiner{
        justify-content: center;
        margin: 2% 20%;
        padding: 2% 0;
        background: rgb(16, 16, 27);
        border-radius: 25px;
    }
    .creatorLabel{
        margin: 0 35%;
        font-size: 22px;
        color: whitesmoke;
    }
    .creatorInput{
        margin: 15px;
        width: 70%;
        padding: 10px 15px;
        color: white;
        background: transparent;
        border-radius: 30px;
        border: solid rgb(73, 73, 141);
        font-size: 18px;
        outline: none;
    }
    .creatorButton{
        padding: 10px 40px;
        border-radius: 12px;
        border: none;
        background: rgb(73, 73, 141);
        color: whitesmoke;
        font-weight: bold;
        text-decoration: none;
        transition: linear 0.2s;
    }
    .creatorButton:hover{
        background: rgb(45, 45, 107);
        color: rgb(212, 212, 212);
    }
</style>
