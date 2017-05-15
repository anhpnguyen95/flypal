@extends ('layout')

@section ('content')


<div class="col-sn-8 establishment-detail">

	<h1>{{ $airport->airport_name }}</h1>

			<p>

				<a href="/establishments" >Explore</a>

			</p>

			<p>

				Connect

			</p>

			
		
			
			
			<p>

				
				<a href="/status" >Check flight</a>
				
				
			</p>
			
			
					<a href="/map" >Map</a>

</div>

@endsection
