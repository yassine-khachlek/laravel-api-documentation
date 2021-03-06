@extends('layouts.app')

@section('content')

	@foreach($routes as $route_key => $route)

		@foreach($route->methods() as $method_key => $method)

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h2 class="panel-title">
					<span class="label label-default {{ in_array(strtoupper($method), ['GET', 'HEAD']) ? 'label-primary' : '' }} {{ in_array(strtoupper($method), ['DELETE']) ? 'label-danger' : '' }} {{ in_array(strtoupper($method), ['PATCH', 'PUT']) ? 'label-warning' : '' }} {{ in_array(strtoupper($method), ['POST']) ? 'label-success' : '' }}">
						{{ $method }}
					</span>
					&nbsp;
					{{ $route->getName() }}
					<br><br>
					/{{ $route->uri }}
			    </h2>
			  </div>
			  <div class="panel-body">

				@if($route->parameterNames())

				<h4>Parameters</h4>

				<table class="table table-striped table-hover">
					<thead>
						Name
					</thead>
					<tbody>
						@foreach($route->parameterNames() as $parameter_name)
							<tr>
								<td>
									{{ $parameter_name }}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				@endif

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
			  
					@foreach($examples as $example_key => $example)

						<li role="presentation" class="{{ $example_key ? '' : 'active' }}"><a href="#{{ $route_key }}-{{ $method_key }}-{{ $example_key }}" aria-controls="{{ $route_key }}-{{ $method_key }}-{{ $example_key }}" role="tab" data-toggle="tab">
							{{ ucfirst($example) }}
						</a></li>

					@endforeach
			    
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">

					<br>

					@foreach($examples as $example_key => $example)

						<div role="tabpanel" class="tab-pane {{ $example_key ? '' : 'active' }}" id="{{ $route_key }}-{{ $method_key }}-{{ $example_key }}">
							@include('Yk\LaravelApiDocumentation::examples.'.$example, [
								'url' => url($route->uri())
							])
						</div>

					@endforeach

				</div>

			  </div>
			</div>

		@endforeach

	@endforeach

@append