<figure>
  <picture>
    <source media="(min-width: 1280px)" srcset="/media/img/{{ $image }}-xl.jpg">    
    <source media="(min-width: 1024px)" srcset="/media/img/{{ $image }}-lg.jpg">        
    <source media="(min-width: 768px)" srcset="/media/img/{{ $image }}-md.jpg">
    <source srcset="/media/img/{{ $image }}-xs.jpg">
    <img 
      src="/media/img/{{ $image }}-xs.jpg" 
      alt="{{ $alt }}" 
      title="{{ $alt }}" 
      height="2400" 
      width="1136"
      class="block w-full h-auto">
  </picture>
</figure>