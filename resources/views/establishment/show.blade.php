@extends ('layout')

@section ('content')


<div class="col-sn-8 establishment-detail">

	<h1>{{ $establishment-> name }}</h1>

		<p>

				{{ $establishment -> description}}
			</p>

			<p>

				{{ $establishment -> hours}}, {{ $establishment -> phone}}

			</p>

			<p>

				{{ $establishment -> location}}
			</p>

</div>

@endsection
