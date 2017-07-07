<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;


class TaskController extends Controller
{
    /**
    * Экземпляр TaskRepository.
    *
    * @var TaskRepository
    */
    protected $tasks;
    
    /**
    * Создание нового экземпляра контроллера.
    *
    * @param  TaskRepository  $tasks
    * @return void
    */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }
    
    public function test()
    {
        return view('test', [
            'test' => $this->tasks->test()
        ]);
    }
    
    /**
    * Отображение списка всех задач пользователя.
    *
    * @param  Request  $request
    * @return Response
    */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user())
        ]);
    }
    
    /**
    * Уничтожить заданную задачу.
    *
    * @param  Request  $request
    * @param  Task  $task
    * @return Response
    */
    public function destroy(Request $request, Task $task)
    {
        //$this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
    
    /**
    * Создание новой задачи.
    *
    * @param  Request  $request
    * @return Response
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }
}
