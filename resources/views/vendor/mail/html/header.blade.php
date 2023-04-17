@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Faazmiar_Team')
<img src="{{url('/images/faazmiar.png')}}" class="logo" alt="FTSB Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
