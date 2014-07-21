{{-- Show Only if Message exists --}}
@if ( $message )
	<div id="informer" class="{{ $message->classname() }}">
		<div id="informer-content">
			<div id="informer-title">
				<h1>{{ $message->title }}</h1>
			</div>
			<div id="informer-body">
				{{ $message->body }}
			</div>
		</div>
	</div>
@endif