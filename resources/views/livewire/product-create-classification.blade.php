<div class='formClassificacao'>
    <div class='row top-page'>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href='/product'>Produto </a></li>
                <li class="breadcrumb-item active" aria-current="page">Cadastro de Classificações</li>
            </ol>
        </nav>
    </div>
    <div class='formCadastroClassificacao'>
        <h4 class='titulo'>Cadastro de Classificações</h4>
        <hr>
        <form wire:submit="save">
            <div class='row'>
                <div class="input-group col">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-tag"></i></span>
                    <input type="text" class="form-control" placeholder="Classificação" aria-label="Produto" aria-describedby="basic-addon1" name='cla_descricao' wire:model='cla_descricao'>
                </div>
                <div class="input-group col">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>

            @error('cla_descricao')
                <div class="card border-danger" style='max-width: 500px; margin-top: 10px;'>
                    <div class="card-body text-danger">
                        {{$message}}
                    </div>
                </div>
            @enderror
        </form>
    </div>
    <div class='grid grid-small'>
        <h4 class='text-center'>Classificações Cadastradas</h4>
        <div class="text-center">
            <div class="row headerGrid">
                <div class="col">
                    <h5>#</h5>
                </div>
                <div class="col">
                    <h5>Classificação</h5>
                </div>
            </div>
        </div>
        <div class="row contentGrid text-center">
            @foreach ($classificacoes as $class)
                <div class='row rowGrid'>
                    <div class='col'><span class='itemGridContent'>{{$class->cla_id}}</span></div>
                    <div class='col'><span class='itemGridContent'>{{$class->cla_descricao}}</span></div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@script
<script>
    const openToast = (message) => {
        const toastElement = document.getElementById('toastNotify')
        document.getElementById("messageToast").textContent = message
        bootstrap.Toast.getOrCreateInstance(toastElement).show()
    }

    window.addEventListener('open-toast', (message) => {
        openToast(message.detail.messageToast);
    });
</script>
@endscript