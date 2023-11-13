<x-frontend-layout>
  {{-- Hero primary --}}
  <x-frontend.hero></x-frontend.hero>
  {{-- Promote tail-100 --}}
  <x-frontend.promote></x-frontend.promote>
  {{-- About secondary --}}
  <x-frontend.about></x-frontend.about>
  {{-- Skills tail-100 --}}
  <x-frontend.skills :skills="$skills"></x-frontend.skills>
  {{-- Portfolio primary --}}
  <x-frontend.portofolio :skills="$skills" :projects="$projects"></x-frontend.portofolio>
  {{-- Services secondary  --}}
  <x-frontend.services></x-frontend.services>
  {{-- contact primary  --}}
  <x-frontend.contact></x-frontend.contact>
</x-frontend-layoul>