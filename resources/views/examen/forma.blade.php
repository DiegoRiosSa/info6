<div class="mb-3">
    <label for="title" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Ingrese Titulo" value="{{old('title', $category->title)}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"> Url</label>
    <input type="text" class="form-control" name="url" id="url" placeholder="Password" value="{{old('url',$category->url)}}">
  </div>

  <button type="submit" value="Enviar" class="btn btn-primary">Submit</button>