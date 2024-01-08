<x-layout-primary>
{{--    Heading--}}
    <div class="">
        <h1 class="text-center font-bold font-cormorant m-12 md:font-light">Articles</h1>
    </div>

    <div class="ml-12 font-cormorant max-w-3xl">
{{--        article-container--}}
        <div class="">
{{--            article--}}
           @unless(count($blogs)==0)
               @foreach($blogs as $blog)
                    <x-blog-card :blog="$blog"/>
               @endforeach
           @else
               <p class="text-center font-bold">No Articles</p>
           @endunless

        </div>
    </div>
</x-layout-primary>