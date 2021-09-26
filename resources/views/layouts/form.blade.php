@section('form')
 
        <form class="form" action="/add-movie" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-container">
                <input name="movie_title" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="movie_title" class="pre-placeholder">Movie Title</label>
            </div>
            <div class="input-container">
                <textarea name="descriptio" class="input descriptio"  placeholder=" "></textarea>
                <div class="cut cut-short"></div>
                <label for="descriptio" class="pre-placeholder">Description Of Movie</label>
            </div>
            <h6 class="rate-title">Movie Rating</h6>
            <output class="bubble"></output>
            <input type="range" min="0" max="10" step="0.1" class="slider" name="rating"/>
            <input type="file" class="input input-file" name="thumb" />
            <button type="submit" class="submit" >submit</button>
        </form>

        
@endsection