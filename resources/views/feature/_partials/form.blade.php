<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>

    <div class="col-md-8">

        <input id="name" type="text" class="form-control" name="name"
               value="{{ $feature->name or old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>
</div>

<!-- Tags -->
<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
    <label for="url" class="col-md-2 control-label">Tags</label>
    <div class="col-md-8">
        <select name="tag_list[]" id="tag_list" class="form-control"
                multiple title="">
            @foreach($tags as $key=>$value)
                <option value="{{ $key }}"
                        {{ in_array($key, array_values($feature->tags->pluck('id')->toArray())) ? 'selected' : '' }}
                >
                    {{ $value }}</option>
            @endforeach
        </select>
        @if ($errors->has('tags'))
            <span class="help-block">
                <strong>{{ $errors->first('tags') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>

    <div class="col-md-8">
            <textarea id="description" class="form-control"
                      name="description">{{ $feature->description or old('description') }}</textarea>

        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
    <label for="url" class="col-md-2 control-label">URL</label>

    <div class="col-md-8">
        <input id="url" type="text" class="form-control" name="url"
               value="{{ $feature->url or old('url') }}">

        @if ($errors->has('url'))
            <span class="help-block">
                <strong>{{ $errors->first('url') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">

    <label for="active" class="col-md-2 control-label">Active</label>

    <div class="col-md-8">
        <input type="hidden" id="active" name="active" value="0">
        <input id="active" type="checkbox" name="active"
               value="1" {{ ($feature->active ?? "active" or old('active') or "") ? 'checked' : ""}}>
    </div>

</div>

<div class="form-group">
    <div class="col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-primary">
            {{ $button }}
        </button>
    </div>
</div>

@section('footer')
    <script>
        $('#tag_list').select2();
    </script>
@endsection