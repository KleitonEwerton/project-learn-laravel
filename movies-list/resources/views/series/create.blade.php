<x-layout title="Creat new Serie">

    <form class="my-3"action="/series/save" method='post'>
        @csrf
        <div class="my-3">
            <label for="nameLabel" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nameInput" name="name" aria-describedby="nameHelp">
        </div>
        <button type="submit" class="btn btn-success">Adicionar</button>

    </form>



</x-layout>
