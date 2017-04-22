
<div class="establishment">

	<h2 class="establishment-name">

		<a href="/establishments/{{ $establishment -> establishment_id }}">

			{{ $establishment->name}}

		</a>
	</h2>

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