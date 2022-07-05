<x-layout title="Series List">

    <ul class="list-group my-5">
        @foreach ($series as $serie)
            {{-- TODO: Arrumar alinhamento --}}
            <li class="list-group-item ">

                <div class="row">
                    <div class="col">{{ $serie->name }}</div>
                    <form class='col' action='/series/delete' method='post'>
                        @csrf
                        <input hidden name='name' value='{{ $serie->name }}'>
                        <button type="submit" class='btn'><img src="{{ asset('images/trash.svg') }}" alt=""></button>
                    </form>
                </div>

            </li>
        @endforeach
    </ul>
    <a href="series/create" class='btn btn-success'>Add New Serie</a>

</x-layout>
