<x-app-layout>
    <div>
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            @include('partials.nav-store')

            <livewire:product-list />

        </div>
    </div>
</x-app-layout>
