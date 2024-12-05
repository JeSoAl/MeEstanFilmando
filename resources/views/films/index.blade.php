<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __('Opiniones') }}
        </h2>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  @include('films.partials.search')

                  @foreach ($films as $film)
                    <a
                        href="{{ route('comments.index', $film) }}"
                        style="text-decoration:none;"
                        class="rounded-md row px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        <section class="col-12 justify-content-around bg-light display-6 rounded-pill">
                            {{$film->title}}
                        </section>
                    </a>
                  @endforeach
                  @if ($films->links())
                    <div class="card-footer justify-content-center">
                      {{ $films->appends(request()->query())->links() }}
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
