@extends( 'site.layouts.master ' )

@section( 'content' )

<div>
    <img src="{{ asset('images/banner-blog.jpg') }}" class="w-full" alt="Bem vindo ao BLOG do Empreendedorismo EBW Bank">
</div>
<!-- end banner -->

<section >

        <div class="l-training pt-20 pb-16 ">
            <div class="container mx-auto px-6">
                <h2 class="text-ebw-third text-center font-semiBold tracking-wide text-5xl mb-10 -mx-6">Principais conteúdos para turbinar seu negócio</h2>
                <div class="flex -mx-6">
                    <div class="px-6">
                        <a 
                        href="{{ route('portal', ['categoria' => 'todas']) }}"
                        class="border-2 {{ is_null($categoria) || $categoria === 'todas' ? 'bg-opacity-100 hover:bg-opacity-80 text-white' : 'hover:bg-opacity-40 bg-opacity-0 text-ebw-fourth' }} bg-ebw-fourth border-ebw-fourth uppercase block py-4 px-8 font-bold text-sm rounded-full  text-white transition-colors">
                            Todas as categorias
                        </a>
                    </div>
                    @foreach ($categories as $category)
                        <div class="px-6">
                            <a href="{{ route('portal', ['categoria' => $category->category_slug]) }}"
                            class="border-2 {{ $categoria === $category->category_slug ? 'bg-opacity-100 hover:bg-opacity-80' : 'bg-opacity-0 hover:bg-opacity-40' }}  uppercase block py-4 px-8 font-bold text-sm rounded-full transition-colors"
                            style="border-color: {{ $category->category_color }}; background-color: rgba({{ hexToRgb($category->category_color) }}, var(--tw-bg-opacity));color: {{ $categoria === $category->category_slug ? '#ffffff' : $category->category_color }}">
                               {{ $category->category_name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>  


        <div class="flex justify-center pt-16">

            <div class="w-full md:w-10/12 px-4">

                <div class="flex flex-wrap -mx-4">
                    
                    <!-- loop -->
                    @forelse ($posts as $post)
                        <div class="w-full md:w-6/12 lg:w-4/12 my-4 px-6">
                            <a href="{{ route('portal.show', ['id' => $post->id, 'slug' => \Illuminate\Support\Str::slug($post->title)]) }}" class="block hover:border-ebw-secondary border-opacity-50 transition-colors border-2 border-transparent">
                                <img
                                src="{{ asset(Storage::url($post->image)) }}"
                                class="h-64 object-conver object-center w-full"
                                alt="Imagem de exemplo">
                                <div class="pt-5 pb-10">
                                    <h3 class="text-ebw-secondary font-bold text-center text-xl leading-none mb-4">
                                       {{ $post->title }}
                                    </h3>
                                    <p class="text-ebw-title text-lg leading-tight text-center">
                                        {{ \Illuminate\Support\Str::words(strip_tags($post->body), 25, '...') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @empty
                        <h3 class="text-ebw-third text-center font-semiBold tracking-wide text-3xl mb-10">Não foi encontrado nenhum contéudo</h3>       
                    @endforelse
                </div>
            </div>
        </div>



        <!-- button hidden -->
    
        <div class="flex justify-center pb-16">
            {{ $posts->withQueryString()->links() }}
        </div>
    
        <!-- end button hidden -->
   
</section>

<!-- mvv -->
@include( 'site.partials.mvv' )
<!-- end mvv -->

@endsection