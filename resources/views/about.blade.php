<x-app-layout>
    <x-slot name="header">
        {{ __('Saiba Mais') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs text-lg">
        <p>{{ __('José Silva tem uma rotina, muito comum, ele tem um pequeno negócio de vendas de projetos, é um projeto modelo que pode ser facilmente adaptado para gerir prefeituras no processo de licitações.') }}</p>
        <p>{{ __('Ele anotava tudo em planilhas, mas nos últimos tempos ele resolveu expandir um pouco mais o seu negócio, pois viu uma receptividade legal dos projetos que vendeu, e o retorno foi muito positivo.') }}</p>
        <p>{{ __('Começou a contatar as prefeituras e oferecer o seu projeto, e viu que o sistema em planilha ficou um pouco complicado, resolveu nos procurar para fazer um pequeno sistema que consiga facilmente gerir seu negócio.') }}</p>
        <p>{{ __('Ele quer registrar as prefeituras, com nome, cidade, telefone, números de habitantes, nome do prefeito e ponto focal (Pessoa que conversa diretamente).') }}</p>
        <p>{{ __('Data dos contatos, receptividade (nível de empolgação com a apresentação do projeto), assunto falado e pendências para aquela prefeitura.') }}</p>
        <p>{{ __('Ele quer também agendar atividades, como ligações, ou visitas, e que o sistema mostre as atividades agendadas para o dia, que chame a atenção de algum modo (lembretes).') }}</p>
        <p>{{ __('Ao final, ele deve classificar a prefeitura como ganha ou perda. A ganha é que o projeto foi vendido, a perda foi que deixou claro que não tem interesse (pelo menos na gestão do atual Prefeito).') }}</p>
        <p>{{ __('Se não vendeu, mas também deixou alguma esperança, deve deixar um status que indica a insistência em algum tempo.') }}</p>
    </div>
</x-app-layout>
