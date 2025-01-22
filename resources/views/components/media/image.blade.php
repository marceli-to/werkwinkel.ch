@props(['image', 'alt', 'sizes' => [], 'width' => '1600', 'height' => '1000' , 'class' => ''])
<figure class="{{ $class }}">
  <picture>
    @if (in_array('xl', $sizes))
      <source media="(min-width: 1440px)" srcset="/media/img/{{ $image }}-xl.jpg">
    @endif
    @if (in_array('lg', $sizes))
      <source media="(min-width: 1280px)" srcset="/media/img/{{ $image }}-lg.jpg">    
    @endif
    @if (in_array('md', $sizes))
      <source media="(min-width: 1024px)" srcset="/media/img/{{ $image }}-md.jpg">    
    @endif
    @if (in_array('sm', $sizes))
      <source media="(min-width: 768px)" srcset="/media/img/{{ $image }}-sm.jpg">    
    @endif
    <source srcset="/media/img/{{ $image }}-xs.jpg">
    <img 
      src="/media/img/{{ $image }}-xs.jpg" 
      alt="{{ $alt }}" 
      title="{{ $alt }}" 
      height="{{ $width }}" 
      width="{{ $height }}"
      class="block w-full h-auto">
  </picture>
</figure>