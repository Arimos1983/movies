<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        @foreach($latest_movies as $latest_movie)
            <a href="/movies/{{ $latest_movie->id }}"><h4>{{ $latest_movie->title }}</h4></a>
        @endforeach
    </div>
  </aside>