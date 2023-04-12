@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{url('/images/faazmiar-logo-only.png')}}" class="logo" alt="FTSB Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
