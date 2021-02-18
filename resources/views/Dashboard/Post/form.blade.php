<div class="form-body">
    <div class="row">
        <div class="col-md-4">
            <label>Title</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" id="title" class="form-control" value="{{ $post->titulo ?? "" }}" name="title"
                   placeholder="Your title">
        </div>
        <div class="col-md-4">
            <label>Tags</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" id="tags" class="form-control" value="{{ $post->tags ?? "" }}" name="tags"
                   placeholder="Tags">
        </div>
        <div class="col-md-4">
            <label>Content</label>
        </div>
        <div class="col-md-8 form-group">
            <textarea name="content" id="content" class="form-control" placeholder="content" rows="10">
                {{ $post->titulo ?? "" }}
            </textarea>
        </div>
        <div class="col-sm-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-1 mb-1">Salvar</button>
            <a href="/posts" class="btn btn-light-secondary mr-1 mb-1">Cancelar</a>
        </div>
    </div>
</div>
