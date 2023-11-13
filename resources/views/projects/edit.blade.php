<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Project
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
           <form method="POST" action="{{ route('projects.update',$project->id) }}" class="p-4"enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <label for="skill_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Select Skill</label>
<select id="skill_id" name="skill_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @foreach( $skills as $skill)
         <option value="{{$skill->id}}" @selected(old('skill_id', $project->skill_id) == $skill->id)>{{$skill->name}}
    @endforeach
</select>
        <!-- Name -->
        <div class="mt-2">
            <x-input-label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $project->name)"    />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Project URL -->
        <div class="mt-2">
            <x-input-label for="project_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900" :value="__('URL')" />
            <x-text-input id="project_url" class="block mt-1 w-full" type="text" name="project_url" :value="old('project_url',$project->project_url)"    />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Image -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Image')" />

            <x-text-input id="image" class="block mt-1 w-full"
                            type="file"
                            name="image"
                             />
  
        </div>

        <div class="flex items-center justify-end mt-4">
           

            <x-primary-button class="ml-3">
                update
            </x-primary-button>
        </div>
    </form>
      </div>
    </div>
</x-app-layout>