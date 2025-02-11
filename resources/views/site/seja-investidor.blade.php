@extends( 'site.layouts.master' )

@section('title', 'Seja um investidor')

@section( 'content' )

<!-- -->
<!-- banner -->
<section
class="h-screen md:min-h-620px min-h-400px relative bg-no-repeat bg-cover sm:bg-center pt-52 bg-ebw-grey flex items-center pb-24"
style="background-image: url( {{ asset( 'images/banner-seja-investidor.jpg' ) }} );"
>
    <div class="shadow-custom absolute top-0 left-0 right-0 w-full sm:w-1/2"></div>
    <div class="container lg:block mx-auto px-4">
        <div class="xl:w-7/12 sm:w-8/12 2xl:mb-44 mb-28">
            <h1 class="font-light text-black 2xl:text-5xl sm:text-4xl text-3xl leading-tight">
                Ser <span class="text-ebw-primary font-bold">diferente</span> é estar com quem faz a diferença. Seja um <span class="font-bold">sócio investidor EBW Bank</span>, a fintech que não para de <span class="font-bold">crescer.</span>
            </h1>
        </div>
        <a href="#form-investidor" class="page-scroller relative inline-block bg-ebw-primary sm:pl-10 pl-4 pr-32 sm:py-4 py-2 xl:text-2xl sm:text-xl text-sm font-bold uppercase tracking-wide text-white rounded-full leading-none hover:bg-opacity-90 transition-opacity duration-150">
            Quero investir <i class="fas fa-chevron-right text-white sm:text-lg text-sm absolute right-6 top-1/2 transform -translate-y-1/2"></i>
        </a>
    </div>
</section>
<!-- end banner -->

<section class="bg-center bg-no-repeat bg-cover 2xl:pt-72 pt-32 2xl:pb-44 pb-32" style="background-image: url({{ asset('images/background-seja-investidor-faixa-2.jpg') }})">
    <div class="container mx-auto md:px-10 px-5">
        <div class="flex md:-mx-10 -mx-5 mb-20 flex-wrap">
            <div class="lg:w-1/2 w-full md:px-10 px-5">
                <p class="text-black text-2xl mb-5 leading-tight">A <b>EBW Bank</b> acredita que empreender é fazer a diferença. Por isso, enxergamos mais que negócios nas relações com nossos clientes. Nós vemos propósitos de vida.</p>
                <p class="text-black text-2xl mb-5 leading-tight">Queremos apoiar o crescimento do empreendedor e, nessa parceria, abrimos nossas portas para que você seja um investidor EBW Bank.</p>
            </div>
            <div class="lg:w-1/2 w-full md:px-10 px-5">
                <h3 class="text-black font-bold text-2xl leading-tight">Conheça as vantagens de ser um sócio investidor:</h3>
                <ul class="list-disc pl-5">
                    <li class="text-black text-2xl leading-tight">A <b>EBW</b> é uma fintech que não para de crescer</li>
                    <li class="text-black text-2xl leading-tight">Investindo na <b>EBW</b>, você amplia suas frentes de investimento</li>
                    <li class="text-black text-2xl leading-tight">Só a <b>EBW</b> proporciona benefícios exclusivos para sócios investidores</li>
                    <li class="text-black text-2xl leading-tight">Cotas limitadas, somente para quem quer fazer a diferença,com quem já sabe o caminho</li>
                </ul>
            </div>
        </div>
        <div class="flex -mx-4 justify-center">
            <div class="sm:w-5/6 w-full">
                <h2 class="text-center font-light text-black tracking-wide sm:text-5xl text-3xl mb-8">
                    <span class="text-ebw-primary font-bold">Invista</span> em uma empresa <span class="text-ebw-primary font-bold">certificada.</span>
                </h2>
                <p class="text-center text-black text-2xl mb-3">Somos uma fintech certificada pelo <b>PCI, Padrão de Segurança de Dados <br>da Indústria de Cartões de Pagamento.</b></p>
                <p class="text-center text-black text-2xl mb-3">Possuímos padrões rígidos de controle contra fraudes e garantimos constante monitoramento sogre todas as transações realizadas através de nossos meios de pagamento.</p>
                <p class="text-center text-black text-2xl mb-3">E o resultado é mais segurança para quem vende e para quem compra.</p>
            </div>
        </div>
    </div>
</section>



<section class="bg-center bg-no-repeat bg-cover xl:pt-52 pt-32 pb-36" style="background-image: url({{ asset('images/background-seja-investidor-faixa-2.jpg') }})">
    <div class="container mx-auto px-4">
        <div class="flex -mx-4 justify-center">
            <div class="lg:w-10/12 w-full">
                <p class="lg:text-4xl md:text-3xl text-2xl text-center text-black mb-12">
                    Em breve, a <b>EBW</b> dará mais um passo importante:
                    <br>
                    seu lançamento na <b>Bolsa de Valores da Nasdaq.</b>
                </p>
                <p class="lg:text-4xl md:text-3xl text-2xl text-center text-black mb-20">
                    E aqui fica o nosso convite: Seja <span>diferente.</span>
                    <br>
                    Seja exclusivo. Seja único. Seja um investidor da <b>EBW Bank.</b>
                </p>
                <div class="flex justify-center">
                    <a href="#form-investidor" class="page-scroller relative inline-block bg-ebw-primary sm:pl-10 pl-4 sm:pr-20 pr-12 sm:py-3 py-2 sm:text-xl text-sm uppercase tracking-wide text-white rounded-full leading-none">
                        Quero ser <span class="text-white font-bold">sócio investidor</span> <i class="fas fa-chevron-right text-white sm:text-lg text-sm absolute right-6 top-1/2 transform -translate-y-1/2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="hidden bg-center bg-no-repeat bg-cover pt-24 pb-16" style="background-image: url({{ asset('images/background-seja-investidor-faixa-2.jpg') }})">
    <div class="container mx-auto px-8">
        <h2 class="xl:text-size-2.75 sm:text-4xl text-3xl text-center text-black font-light leading-none tracking-wide mb-10">Quem investe na <b>EBW Bank</b> tem <b>história</b> pra <b>contar!</b></h2>

        <div class="flex flex-wrap -mx-8">
            @foreach ($sejaInvestidorSettings['who_invest'] as $item)
                <article
                class="xl:w-1/3 md:w-1/2 w-full px-5 mb-16"
                x-data="{open: false, height: 0, hasButton: false}"
                x-init="
                    setTimeout(function() {
                        $refs.text.style.maxHeight = `${$refs.text.clientHeight}px`;
                        height = $refs.text.clientHeight;
                        if( $refs.text.scrollHeight > 90) {
                            hasButton = true;
                        }
                    }, 50);
                    $watch('open', (value) => {
                        if(value) {
                            $refs.text.style.maxHeight = `${$refs.text.scrollHeight}px`;
                        } else {
                            $refs.text.style.maxHeight = `${height}px`;
                        }
                    })
                ">
                    <img src="{{ image_url($item['investor_image']) }}" class="mb-4 w-full" alt="{{ $item['investor_name'] }}">
                    <h3 class="text-2xl leading-none text-black font-bold mb-4">{{ $item['investor_name'] }}</h3>
                    <p
                    class="text-lg leading-tight text-black  transition-all duration-200"
                    x-bind:class="!open ? 'testimonials-text' : ''"
                    x-ref="text">
                        {{ $item['investor_comment'] }}
                    </p>
                    <div class="pt-2 flex justify-end">
                        <button
                        x-cloak
                        x-show="hasButton"
                        type="button"
                        class="w-10 h-10 rounded-full bg-ebw-primary flex justify-center items-center pt-1 hover:bg-opacity-90 transition-all duration-500 transform rotate-0"
                        x-bind:class="open ? 'rotate-180' : ''"
                        x-on:click="open = !open">
                            <span class="triangle-down"></span>
                        </button>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section> --}}
{{--
<div class="bg-ebw-title pt-28 pb-32 px-5 flex justify-center items-center">
    <a href="#form-investidor" class="page-scroller relative inline-block bg-ebw-primary sm:pl-10 pl-4 sm:pr-20 pr-12 sm:py-4 py-2 xl:text-2xl sm:text-xl text-sm uppercase tracking-wide text-white rounded-full leading-none">
        Quero ser <span class="text-white font-bold">sócio investidor</span> <i class="fas fa-chevron-right text-white sm:text-lg text-sm absolute right-6 top-1/2 transform -translate-y-1/2"></i>
    </a>
</div>

<section class="bg-ebw-lightest-grey">
    <div class="container mx-auto md:px-24 sm:px-12 px-6 bg-white md:pt-28 pt-16 sm:pb-16 pb-12">
        <h2 class="2xl:text-size-4.06 xl:text-6xl lg:text-5xl sm:text-4xl text-3xl leading-none text-black text-center">
            <span class="font-bold text-ebw-primary">Diferente é</span> fazer parte de uma das fintechs que mais crescem no páis.
        </h2>
        <h3 class="leading-none text-ebw-primary text-center font-bold 2xl:text-size-4.06 xl:text-6xl lg:text-5xl sm:text-4xl text-3xl md:mb-20 mb-12">Seja um sócio investidor!</h3>
        <p class="text-xl text-black leading-tight mb-4 first-letter:pl-10">A EBW Bank nasceu com um propósito cloar: dar oportuniadde de crescimento a todos os brasileiros por meio do empreendedorismo. Já somamos cinco anos de história. Uma história marcada pela parceria. Não somos, apenas, tecnologia em meios de pagamento. Entendemos que cada cliente é muito mais do que um número de conta.</p>
        <p class="text-xl text-black leading-tight lg:mb-20 mb-12 first-letter:pl-10">É por isso que somos novos, mas nos tornamos grandes. E, neste momento, abrimos uma oportunidade única para que você se torne ainda maior conosco. Fazendo parte de um grupo seleto de investidores, que avaliam a EBW Bank como o futuro, quando o assunto é ser diferente, num cenário em que tantos são iguais.</p>
        <div class="xl:pl-20 lg:pl-12 sm:pl-8 pl-4 2xl:pr-80 xl:pr-52 lg:pr-40 sm:pr-20 pr-8">
            <h4 class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl font-bold text-black leading-none mb-4">Por que investir na EBW Bank é um excelente negócio?</h4>
            <p class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl text-black leading-none mb-4">Porque o reotrno a médio e longo prazo é bastante promissor.</p>
            <p class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl font-bold text-black leading-none mb-4">Porque você precisa diversificar os seus investimentos.</p>
            <p class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl text-black leading-none mb-4">Porque você deseja ser exclusivo.</p>
            <p class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl font-bold text-black leading-none mb-4">Porque são cotas limitadas, tornando seu investimento ainda mais rentável no futuro.</p>
        </div>
    </div>
    <div class="bg-ebw-another-grey">
        <div class="container mx-auto md:px-24 sm:px-12 px-6 sm:pt-16 pt-12 pb-10">
            <h2 class="text-white text-center font-bold xl:text-4xl sm:text-3xl text-2xl tracking-wide uppercase mb-10">Invista em uma empresa certificada</h2>
            <p class="text-xl text-white leading-snug mb-3">De empreededor e progresso, nós entendemos. E quando o assunto é tecnologia e segurança: somos craques!</p>
            <p class="text-xl text-white leading-snug mb-3">A <span class="text-white font-bold">EBW Bank/PASSOU GANHOU</span> é uma fintech certificada pelo PCI, Padrão de Segurança de Dados da Indústria de Cartões de Pagamento.</p>
            <p class="text-xl text-white leading-snug mb-3">Isso significa que adotamos rígidos padrões de controle contra fraudeem compras utilizandos nossos meios de pagamento e, ainda, mantemos monitoramento constante sobre as transações.</p>
            <p class="text-xl text-white leading-snug mb-3">É segurança para o cliente e para o investidor.</p>
        </div>
    </div>
    <div class="container mx-auto md:px-24 sm:px-12 px-6 bg-white md:pt-28 pt-16 sm:pb-16 pb-12">
        <div class="xl:pl-20 lg:pl-12 sm:pl-8 pl-4 2xl:pr-80 xl:pr-52 lg:pr-40 sm:pr-20 pr-8">
            <p class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl font-bold text-black leading-none mb-4">A EBW é uma fintech inovadora e já projeta o Lançamento na Bolsa de Valores da Nasdaq.</p>
            <p class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl text-black leading-none mb-4">Seja exclusivo.</p>
            <p class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl font-bold text-black leading-none mb-4">Seja único.</p>
            <p class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl text-black leading-none mb-4">Seja investidor da EBW Bank.</p>
        </div>
    </div>
</section> --}}
<section class="bg-ebw-form pt-20 pb-32" id="form-investidor">
    <div class="max-w-6xl mx-auto px-3">
        <h2 class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl text-white leading-snug text-center mb-10 tracking-wider">Quero ser sócio investidor</h2>
        <div class="border-white border-opacity-50 border-2 px-8 pt-16 pb-16">
            @if (session()->has('success'))
                <h2 class="text-4xl leading-tight font-bold text-center text-white mb-10">
                    Parabéns, seu cadastro foi realizado com sucesso!
                </h2>
            @else
                <form action="{{ route('partner-investor.store') }}" method="POST">
                    @csrf
                    <div>
                        <h3 class="text-black sm:text-3xl text-2xl leading-none tracking-wide mb-8">Cadastre-se agora mesmo</h3>
                    </div>
                    <div class="flex flex-wrap -mx-5">
                        <div class="md:w-7/12 w-full sm:px-5 px-0">
                            <div class="bg-ebw-input relative p-2 mb-3">
                                <label for="name" class="block text-lg text-black">Nome</label>
                                <input
                                type="text"
                                class="bg-transparent w-full shadow-none outline-none focus:border-black  border-b border-transparent pl-1"
                                name="name"
                                id="name"
                                autocomplete="off"
                                placeholder="Nome"
                                value="{{ old('name') ?? '' }}">
                                @error('name')
                                    <div class="absolute inset-0 border-red-700 pointer-events-none border-2">
                                        <span class="absolute top-1 left-0 right-0 w-full text-center pt-1 text-xs text-red-700 font-medium">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="bg-ebw-input relative p-2 mb-3">
                                <label for="phone" class="block text-lg text-black">Cel</label>
                                <input
                                type="text"
                                class="bg-transparent w-full shadow-none outline-none focus:border-black  border-b border-transparent pl-1"
                                name="phone"
                                id="phone"
                                autocomplete="off"
                                required
                                placeholder="(00) 00000-0000"
                                value="{{ old('phone') ?? '' }}">
                                @error('phone')
                                    <div class="absolute inset-0 border-red-700 pointer-events-none border-2">
                                        <span class="absolute top-1 left-0 right-0 w-full text-center pt-1 text-xs text-red-700 font-medium">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="bg-ebw-input relative p-2 mb-3">
                                <label for="email" class="block text-lg text-black">E-mail</label>
                                <input
                                type="email"
                                class="bg-transparent w-full shadow-none outline-none focus:border-black  border-b border-transparent pl-1"
                                name="email"
                                id="email"
                                autocomplete="off"
                                required
                                placeholder="contato@email.com.br"
                                value="{{ old('email') ?? '' }}">
                                @error('email')
                                    <div class="absolute inset-0 border-red-700 pointer-events-none border-2">
                                        <span class="absolute top-1 left-0 right-0 w-full text-center pt-1 text-xs text-red-700 font-medium">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="bg-ebw-input relative p-2 mb-5">
                                <label for="cpf-cnpj" class="block text-lg text-black">CPF / CNPJ</label>
                                <input
                                type="text"
                                class="bg-transparent w-full shadow-none outline-none focus:border-black  border-b border-transparent pl-1"
                                name="cpf-cnpj"
                                id="cpf-cnpj"
                                autocomplete="off"
                                required
                                placeholder="000.000.000-00 / 00.000.000/0001-00"
                                value="{{ old('name') ?? '' }}">
                                @error('cpf-cnpj')
                                    <div class="absolute inset-0 border-red-700 pointer-events-none border-2">
                                        <span class="absolute top-1 left-0 right-0 w-full text-center pt-1 text-xs text-red-700 font-medium">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="md:w-5/12 w-full px-5">
                            <h3 class="font-bold text-black text-2xl leading-none uppercase mb-8">Quanto desejo investir</h3>
                            <label class="text-black text-xl mb-6 input-checkbox" for="above-500">
                                <input type="radio" name="investment" id="above-500" checked value="Acima de R$ 500 mil">
                                <span></span>
                                Acima de R$ 500 mil
                            </label>
                            <label class="text-black text-xl mb-6 input-checkbox" for="between-500-300">
                                <input type="radio" name="investment" id="between-500-300"  value="Entre R$ 500 mil e R$ 300 mil">
                                <span></span>
                                Entre R$ 500 mil e R$ 300 mil
                            </label>
                            <label class="text-black text-xl mb-6 input-checkbox" for="between-300-100" >
                                <input type="radio" name="investment" id="between-300-100" value="Entre R$ 300 mil e R$ 100 mil">
                                <span></span>
                                Entre R$ 300 mil e R$ 100 mil
                            </label>
                            <label class="text-black text-xl mb-6 input-checkbox" for="between-100-50">
                                <input type="radio" name="investment" id="between-100-50" value="Entre R$ 100 mil e R$ 50 mil">
                                <span></span>
                                Entre R$ 100 mil e R$ 50 mil
                            </label>
                            <label class="text-black text-xl mb-6 input-checkbox" for="between-50-20">
                                <input type="radio" name="investment" id="between-50-20" value="Entre R$ 50 mil e R$ 20 mil">
                                <span></span>
                                Entre R$ 50 mil e R$ 20 mil
                            </label>
                            <label class="text-black text-xl mb-6 input-checkbox" for="below-20">
                                <input type="radio" name="investment" id="below-20" value="Até R$ 20 mil">
                                <span></span>
                            Até R$ 20 mil
                            </label>
                        </div>
                        <div class="w-full px-5">
                            <div class="flex justify-start pt-8">
                                <button type="submit" class="shadow-none outline-none c-btn-pattern text-xl c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none py-4 pl-10 pr-20 rounded-full">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
        </div>
        <div class="flex justify-center pt-10">
            <a
            href="{{ route('conheca-ebw') }}"
            class="shadow-none outline-none c-btn-pattern text-xl c-btn-icon-arrow u-border-color-primary relative inline-block font-normal uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none py-4 pl-10 pr-14 rounded-full">
               Saiba porque investir na <span class="font-bold text-white">EBW</span>
            </a>
        </div>
    </div>
</section>

@endsection

