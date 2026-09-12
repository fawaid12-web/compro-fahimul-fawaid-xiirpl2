<x-landing-page.layout>
    <x-landing-page.navigation />
    <x-landing-page.home />
     <x-landing-page.profile/>
     <x-landing-page.product />
    <x-landing-page.article :articles="$articles ?? collect()" />
     <x-landing-page.gallery />
     <x-landing-page.coba />
     <x-landing-page.footer />
</x-landing-page.layout>
