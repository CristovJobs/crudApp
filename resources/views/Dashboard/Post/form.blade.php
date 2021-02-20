<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <span>
                @foreach ($errors->all() as $erro)
                    <div class="alert alert-danger alert-dismissible show fade">
                        {{ $erro }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endforeach
            </span>
        @endif
    </div>
<div class="form-body">
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-8 form-group">
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="col-md-4">
        <label>Title</label>
    </div>
    <div class="col-md-8 form-group">
        <input type="text" id="titulo" class="form-control" value="{{ $post->titulo ?? '' }}" name="titulo"
            placeholder="Your title">
    </div>
    <div class="col-md-4">
        <label>Tags</label>
    </div>
    <div class="col-md-8 form-group">
        <input type="text" id="tags" class="form-control" value="{{ $post->tags ?? '' }}" name="tags"
            placeholder="Tags">
    </div>
    <div class="col-md-4">
        <label>Content</label>
    </div>
    <div class="col-md-8 form-group">
        <textarea name="conteudo" id="conteudo" class="form-control" placeholder="content" rows="10">
                {{ $post->titulo ?? '' }}
            </textarea>
    </div>
    <div class="col-sm-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary mr-1 mb-1">Salvar</button>
        <a href="/posts" class="btn btn-light-secondary mr-1 mb-1">Cancelar</a>
    </div>
</div>
</div>
