
      <div class="mb-3">
        <label for="tittle" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="tittle" id="tittle" placeholder="Ingrese Titulo" value="{{old('tittle', $post->tittle)}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1"> Url Limpia</label>
        <input type="text" class="form-control" name="url_clean" id="url_clean" placeholder="Password" value="{{old('url_clean',$post->url_clean)}}">
      </div>
      <div class="form-group">
        <label for="content" class="form-label">Contenido</label>
        <textarea class="form-control" id="content" name="content" rows="3">{{old('content', $post->content)}}</textarea>
      </div>
  
      <button type="submit" value="Enviar" class="btn btn-primary">Submit</button>