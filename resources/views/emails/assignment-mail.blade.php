@extends('emails/layouts/default')

@section('content')
	<p>{{ trans('mail.hello') }} {{ $first_name }},</p>


		<p>{{ trans('mail.new_item_checked') }}</p>

	<table>
		<tr>
			<td>
				{{ trans('mail.asset_name') }}
			</td>
			<td>
				<strong>{{ $item_name }}</strong>
			</td>
		</tr>
		@if (isset($item_tag))
			<tr>
				<td>
					{{ trans('mail.asset_tag') }}
				</td>
				<td>
					<strong>{{ $item_tag }}</strong>
				</td>
			</tr>
		@endif
		@if (isset($item_serial))
			<tr>
				<td>
					{{ trans('mail.serial') }}
				</td>
				<td>
					<strong>{{ $item_serial }}</strong>
				</td>
			</tr>
		@endif
		<tr>
			<td>
				{{ trans('mail.checkout_date') }}
			</td>
			<td>
				<strong>{{ $checkout_date }}</strong>
			</td>
		</tr>
		@if (isset($expected_checkin))
			<tr>
				<td>
					{{ trans('mail.expecting_checkin_date') }}
				</td>
				<td>
					<strong>{{ $expected_checkin }}</strong>
				</td>
			</tr>
		@endif
	</table>
	<p>
		{{ trans('mail.assignment_reminder') }}
	</p>
@stop
