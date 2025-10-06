@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://media.discordapp.net/attachments/1001036059431419935/1424800301952667802/Logo_transparent.png?ex=68e5442f&is=68e3f2af&hm=d4bce77017a9e8ed13fb070f9ffab7ac612cb32c2ab2a6ba00191e342ed425f3&=&format=webp&quality=lossless&width=770&height=657" class="logo" alt="Educart Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
