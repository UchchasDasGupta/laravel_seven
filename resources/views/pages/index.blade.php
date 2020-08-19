@extends('welcome')

@section('content')
<div class="jumbotron">
        <h1 class="display-4">Hello, Home Page!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

<div class="row">
        <div class="col-lg-8 col-md-18 mx-auto">
@foreach($post as $row)
<div class="post-preview">
        <a href="{{ URL::to('view/post/'.$row->id) }}">
        <img src="{{ URL::to($row->image) }}" style="height: 300px;">
        <h2 class="post-title">
                {{ $row->title }}
        </h2>
        </a>
        <p class="post-meta">Category
        <a href="{{ URL::to('view/post/'.$row->id) }}"> {{ $row->name }}</a>
          on Slug {{ $row->slug }}</p>
      </div>
      <hr>
      @endforeach

      
      
            <!-- Pager -->
      <div class="clearfix">
        {{ $post->links() }}
        <!--<a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> -->
      </div>
    </div>
  </div>


@endsection