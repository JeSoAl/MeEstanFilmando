<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __('Comentarios') }}
        </h2>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white container">
                    <p>{{$comment->content}}</p>
                    <a href="{{ route('admin.comments.index') }}" class="text me-4 text-warning">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>