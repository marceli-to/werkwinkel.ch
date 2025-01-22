@extends('app')
@section('seo_title', 'Impressum')
@section('content')
<x-layout.section>
  <x-layout.inner class="imprint">
    <h1>Impressum</h1>
    <p>
     Sanjo Management AG<br>Ziegelwies 2<br>8852 Altendorf<br>
      <a href="tel:+41 55 446 60 40" title="Telefon Nr." class="hover:underline decoration-1 underline-offset-2">+41 55 446 60 40</a><br>
      <a href="https://www.sanjo.ch" target="_blank" rel="noopener" title="Webseite Sanjo Management AG" class="hover:underline decoration-1 underline-offset-2">www.sanjo.ch</a>
    </p>  
    <h2>Konzept/Entwicklung</h2>
    <p>Stoz Werbeagentur AG<br>Barzloostrasse 2<br>8330 Pfäffikon ZH<br><a href="mailto:hello@stoz.ch" target="_blank" class="hover:underline underline-offset-2 decoration-1">hello@stoz.ch</a><br><a href="https://www.stoz.ch" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">www.stoz.ch</a></p>
    <h2>Programmierung</h2>
    <p>Marcel Stadelmann, Zürich<br><a href="https://marceli.to" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">marceli.to</a></p>
  </x-layout.inner>
</x-layout.section>
@endsection