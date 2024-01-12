<form action="{{ route('tasks.store') }}" method="post">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="Projet">Projet <span class="text-danger">*</span></label>
            <select name="projetId" id="Projet" class="custom-select">
                @foreach ($Projects as $Project)
                    <option value="{{ $Project->id }}">{{ $Project->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nominputnom1">Nom <span class="text-danger">*</span></label>
            <input name="nom" type="text"
                class="form-control @error('nom') border-danger @enderror" id="nominputnom1"
                placeholder="Enter le name de Tâche" value="{{ old('nom') }}">
            @error('nom')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>
        <div class="form-group">
            <label class="">Description</label>
            <textarea class="form-control @error('description') border-danger @enderror" name="description" rows="3"
                placeholder="Entre un Description">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>
    </div>

    <div class="card-footer">
        <a href="{{ route('tasks.index') }}" class="btn btn-default">annuler</a>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
</form>
