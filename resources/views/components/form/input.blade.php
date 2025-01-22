@props(['type' => 'text', 'placeholder' => '', 'name', 'isWire' => false])
@if ($isWire)
  <input 
    type="{{ $type }}" 
    wire:model="{{ $name }}" 
    placeholder="{{ $placeholder }}" 
    class="bg-white text-base md:text-md rounded-sm py-8 w-full ring-0 focus:ring-0 border-none text-black placeholder:text-beige">
@else
  <input 
    type="{{ $type }}" 
    name="{{ $name }}" 
    placeholder="{{ $placeholder }}" 
    class="bg-white rounded-sm py-6 pt-6 pb-9 w-full ring-0 focus:ring-0 border-none text-black placeholder:text-beige">
@endif