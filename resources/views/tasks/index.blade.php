<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tasks
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form action="{{ route('tasks.store')}}" method="POST">
                      @csrf
                       <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                           Task Name
                           </label>
                      <input id="task-name"id="name" name="name" class="mt-1 form-input block w-full sm:text-sm sm:leading-5 rounded" />
                      @if($errors->has('name'))
                          <div class="text-red-500">
                              {{ $errors->first('name') }}
                          </div>
                        @endif
                      <button type="submit" class="mt-3 w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-md text-center">
                            Add Task
                        </button>
                  </form>
            </div>
        </div>
    </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   list of tasks:
                    @if(count($tasks) > 0)
                        @foreach($tasks as $task)
                            <li class="  ">{{ $task->name }}</li>
                        @endforeach
                    @else
                        <p>No tasks found</p>
                    @endif
                </div>
            </div>
        </div>
</x-app-layout>
