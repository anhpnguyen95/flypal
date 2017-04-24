@extends ('layout')

@section ('content')

<section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Please select your airport</h1>

        @foreach($airports->chunk(3) as $airports)
        <div class="row course-set courses__row">
          
            @foreach ($airports as $airport)

            <article class="col-md-4 course-block course-block-lessons">
              @include ('airports.airport')

            </article>

            @endforeach

        </div>

        @endforeach

    </div>

</div>

@endsection