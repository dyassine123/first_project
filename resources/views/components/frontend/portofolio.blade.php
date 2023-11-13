@props(['skills','projects'])
<section id="portofolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
    <div class=" container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-file">My Latest Work </h2>
            <p class="subtitle">
            lorem ipsum sit amet consecteur adipisicing illo ad labore 
                   dolor elit .  
            </p>
        </div>
    </div>
    <x-frontend.projects :skills="$skills" :projects="$projects"></x-frontend.projects>
</section>