@props(['url'])
<tr>
   <td class="header" style="background:#333">
      <a href="{{ $url }}" style="display: inline-block;">
         @if (trim($slot) === 'Laravel')
            <img src="https://vtrmovimiento.com/media/logo.png" class="logo" alt="VTR">
         @else
            {!! $slot !!}
         @endif
      </a>
   </td>
</tr>
