@csrf
<label for="">Titulo <br>
    <input type="text" name="title" value="{{old('title',$project->title) }}">
</label>
<br>
<label for="">URL <br>
    <input type="text" name="url" value="{{old('url',$project->url)}}">
</label>
<br>
<label for="">Description <br>
    <textarea name="description">{{old('description',$project->description)}}</textarea>
</label>

<button>{{$btnText}}</button>