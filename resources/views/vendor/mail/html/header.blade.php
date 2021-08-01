<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ $url }}/img/banner-top/logotipo.png" class="logo" alt="Dom ruan Logo" style="width:400px">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
