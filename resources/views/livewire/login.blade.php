 <div class="login-container">
    <div class="card p-4">
      <div class="card-body">
        <h3 class="text-center mb-4">Login</h3>
        <form action="#" wire:submit="login">
          @csrf
          <div class="mb-3">
           
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" wire:model="email" id="email" placeholder="Digite seu e-mail" required>
          </div>
          <div class="mb-3">
  
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" wire:model="password" id="senha" placeholder="Digite sua senha" required>
          </div>
          <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
          <div class="text-center">
            @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @if(session()->has('error'))
              <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
          </div>
          <div class="text-center">
            <small><a href="#">Esqueceu sua senha?</a></small>
          </div>
        </form>
      </div>
    </div>
  </div>