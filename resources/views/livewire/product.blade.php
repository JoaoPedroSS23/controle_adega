<div>
    <div class='row top-page'>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Produto</li>
                <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
            </ol>
        </nav>
    </div>

    <div class='grid'>
        <div class="text-center">
            <div class="row headerGrid">
                <div class="col">
                    <h5>#</h5>
                </div>
                <div class="col">
                    <h5>Produto</h5>
                </div>
                <div class="col">
                    <h5>Valor</h5>
                </div>
                <div class="col">
                    <h5>Status</h5>
                </div>
                <div class="col">
                    <h5>Tipo Produto</h5>
                </div>
                <div class="col">
                    <h5>Desconto (%)</h5>
                </div>
                <div class="col">
                    <h5>Valid. Desconto</h5>
                </div>
                <div class="col">
                    <h5>Ult. Att</h5>
                </div>
                <div class="col">
                    <h5>Ações</h5>
                </div>
            </div>
            <div class="row contentGrid">
                @foreach($rows as $prod)
                    <div class='row rowGrid'>
                        <div class='col'><span class='itemGridContent'>{{$prod->prd_id}}</span></div>
                        <div class='col'><span class='itemGridContent'>{{$prod->prd_nome}}</span></div>
                        <div class='col'><span class='itemGridContent'>{{$prod->prd_valor}}</span></div>
                        <div class='col'><span class='itemGridContent'>{{$prod->sta_tipo}}</span></div>
                        <div class='col'><span class='itemGridContent'>{{$prod->cla_descricao}}</span></div>
                        <div class='col'><span class='itemGridContent'>{{$prod->prd_percent_desconto}}</span></div>
                        <div class='col'><span class='itemGridContent'>{{$prod->prd_validade_desconto}}</span></div>
                        <div class='col'><span class='itemGridContent'>{{$prod->updated_at}}</span></div>
                        <div class='col'><span class='itemGridContent'></span></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    @include('components.Product.buttonDropdown')
</div>

<script>
    document.querySelector('#productMenu').classList.add('menuActive');
</script>