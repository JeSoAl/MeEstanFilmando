<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __($film->title) }}
        </h2>
      </div>
    </x-slot>

    <?php
        $user = Auth::user();
    ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  <form action="{{ route('comments.store') }}" method="POST">
                    @csrf

                    <div class="row w-auto">
                        <div class="col-12 col-md-12">
                          <x-admin-card>
                            @include('comments.partials.form')
                          </x-admin-card>
                        </div>
                    </div>

                  </form>
                  @if ($comments->count() == 0)
                    <p class="display-6 text-black">Aún no hay opiniones sobre esta película</p>
                  @endif
                  @foreach ($comments as $comment)
                    <div class="row w-auto mt-3">
                    @if ($user->id == $comment->user_id)
                        <div class="col-8 bg-warning rounded offset-4 text-black">
                          <p><b>{{$comment->user->name}}</b> <span class="text-light">({{$comment->user->email}})</span></p>
                    @else
                        <div class="col-8 bg-light rounded text-black">
                          <p><b>{{$comment->user->name}}</b> <span class="text-warning">({{$comment->user->email}})</span></p>
                    @endif
                        <p>{{$comment->content}}</p>
                        <p class="text-dark">{{date('d/m/Y', strtotime($comment->created_at))}}</p>
                      </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
