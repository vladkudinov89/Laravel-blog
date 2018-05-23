<label for="">Статус</label>
<select name="published" class="form-control">

    @if(isset($article->id))
        <option value="0"
                @if($article->published == 0) selected @endif>
            Не опубликовано
        </option>

        <option value="1" @if($article->published == 1) selected @endif>
            Опубликовано
        </option>

    @else
        <option value="0" > Не опубликовано</option>
        <option value="1" >Опубликовано</option>
    @endif

</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок материала"
       value="{{ $article->title or ""  }}" required>

<label for="">Slug (Уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация"
       value="{{ $article->slug or ""  }}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">

    @include('admin.categories.partials.categories' , ['categories' => $categories])

</select>

<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">
    {{ $article->description_short or "" }}
</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">
    {{ $article->description or "" }}
</textarea>

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок"
       value="{{ $article->meta_title or ""  }}">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание"
       value="{{ $article->meta_description or ""  }}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="Ключевые слова , через запятую"
       value="{{ $article->meta_keywords or ""  }}">

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
