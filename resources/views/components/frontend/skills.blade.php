@props(['skills'])
<section class="bg-light-tail-100 dark:bg-dark-navy-100 py-24">
    <div class=" grid grid-cols-8 md:grid-flow-col">
        @foreach($skills as $skill)
             <div class="flex items-center justify-center">
                <img src="{{ asset('/storage/'. $skill->image) }}" class="lg:h-20" alt="{{ $skill->name }}" />
             </div>
        @endforeach
    </div>
</section>  