<x-layout title="Series List">

    <ul class="list-group my-5">
        @foreach ($series as $serie)
        {{-- TODO: Arrumar alinhamento --}}
            <li class="list-group-item"> {{ $serie->name }} <button class='btn ms-5'><img src="{{asset('images/trash.svg')}}" alt=""></button></li>
        @endforeach
    </ul>
    <a href="series/create" class='btn btn-success'>Add New Serie</a>

</x-layout>
