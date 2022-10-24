<h3>Fornecedor</h3>

@php
    /*
    if(!condicao) {} //enquanto executa se o retorno for true
    */
@endphp

{{-- @unless executa se o retorno for false --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>

@isset($fornecedores[1]['cnpj'])
    {{ $fornecedores[1]['cnpj'] }}
@endisset)

@empty($teste)
    Vazio
@endempty

@empty($fornecedores[0]['cnpj'])
    - Vazio
    <br>
@endempty

@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
    Fornecedor inativo
@endunless
<br>
