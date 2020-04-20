@include('padrao.headerUsers')

<script src="{{ asset('assets/jquery-mask/jquery.mask.js') }}"></script> 
<script src="{{ asset('assets/js/evento.js') }}"></script> 

{{-- {{ dd($eventos) }} --}}

		<div id="eventos">

			<h1>Próximos eventos:</h1>

			<div class="box_field_form">
				<label class="label_float">Data</label>
				<input type="text" name="estado" id="field_estado" class="field_form data_evento">
			</div>

			<div class="box_field_form">
				<label class="label_float">Estado</label>
				<select class="field_form" name="estado">
					<option value=""></option>
					
					@foreach($estados as $estado)
						<option value="{{ $estado->id }}"> {{ $estado->estado }} </option>
					@endforeach
				</select>
			</div>

			<div class="eventos-card">

				@foreach($eventos as $evento)
					@foreach($evento as $event)

						<div class="card">
							<div class="box_img">
								<img src="{{ $event->image }}" class="img_cover">
							</div>
							<span>{{ $event->start_date }}</span>
							<p>{{ $event->name . " - " . $event->address->state }}</p>
							<p>{{ $event->address->name }}</p>
							<button class="btn-evento"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
						</div>
	
					@endforeach
				@endforeach

			</div>
		</div>

	</section>
</body>
</html>