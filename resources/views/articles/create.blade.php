<form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Titel</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="image">Afbeelding</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="form-group">
        <label for="date">Datum</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
        <label for="full_date">Volledige datum en tijd</label>
        <input type="datetime-local" class="form-control" id="full_date" name="full_date">
    </div>
    <div class="form-group">
        <label for="description">Korte uitleg</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Opslaan</button>
</form>
