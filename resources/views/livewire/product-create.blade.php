
<div class='container col-4'>
        
    <div class='row'>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Produto</li>
                <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
            </ol>
        </nav>
    </div>

    <div class='row'>
        <form wire:submit="save">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Produto" aria-label="Produto" aria-describedby="basic-addon1" name='prd_nome' wire:model='prd_nome'>
            </div>
            
            
            <div class="input-group mb-3">
                <span class="input-group-text">R$</span>
                <input type="text" class="form-control" placeholder="Valor de Venda(R$)" aria-label="Valor de Venda(R$)" name='prd_valor' wire:model='prd_valor' id='prd_valor'>
            </div>
            
            
            <div class="input-group mb-3">
                <span class="input-group-text">Status</span>
                <select class="form-select" aria-label="Default select example" name='sta_id_select' id='sta_id_select' wire:model='sta_id'>
                    <option selected>Escolha o Status do produto</option>
                    @foreach ($status as $stt) 
                        <option value="{{$stt->sta_id}}">{{$stt->sta_tipo}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Tipo</span>
                <select class="form-select" aria-label="Default select example" wire:model='cla_id' name='cla_id'>
                    <option selected >Escolha a classificação do produto</option>
                    @foreach ($classificacoes as $class)
                        <option value='{{$class->cla_id}}'>{{$class->cla_descricao}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class='mb-4'>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>


            @error('prd_nome')
            <div class="card border-danger">
                <div class="card-body text-danger">
                    {{$message}}
                </div>
            </div>
            @enderror
            
            @error('prd_valor')
            <div class="card border-danger">
                <div class="card-body text-danger">
                    {{$message}}
                </div>
            </div>
            @enderror

            @error('sta_id')
            <div class="card border-danger">
                <div class="card-body text-danger">
                    {{$message}}
                </div>
            </div>
            @enderror

            @error('cla_id')
            <div class="card border-danger">
                <div class="card-body text-danger">
                    {{$message}}
                </div>
            </div>
            @enderror

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class='gaveta'>
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>

@script
<script>
    const maskMoneyValor = () => {
        var campo = document.getElementById('prd_valor').value.replace(',', ".");
        var valor = (0.00 + parseFloat(campo)).toFixed(2);
        document.getElementById('prd_valor').value = isNaN(valor) ? 0.00 : valor;
    };

    document.getElementById('prd_valor').addEventListener('blur', maskMoneyValor);
    
    
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
