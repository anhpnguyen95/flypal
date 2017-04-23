@extends ('layout')

@section ('content')

<section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Establishments</h1>

        <p class="lead text-muted">Bored during your layover? Walk around and explore the eclectic mix of bookstores, gift shops, cafes, and restaurants.</p>
        
      </div>
    </section>

  <div class="album text-muted">
      <div class="container">
      
        @foreach($establishments->chunk(3) as $establishments)
        <div class="row course-set courses__row">
          
            @foreach ($establishments as $establishment)

            <article class="col-md-4 course-block course-block-lessons">
              @include ('establishment.establishment')

            </article>

            @endforeach

        </div>

        @endforeach

        </div>
      </div>



@endsection