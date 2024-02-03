<div>
    <form class="card" wire:submit="loginUser">
        <h2>
            Ingresa tus datos
        </h2>
        <div class="input-control">
            <input wire:model="email" type="email" name="email" id="emailInput" placeholder=" ">
            <label for="emailInput">
                Correo electrónico
            </label>
        </div>
        @error('email')
            <label class="errorMessage">{{$message}}</label>
        @enderror
        <div class="input-control">
            <input wire:model="password" type="password" name="pass" id="passInput" placeholder=" ">
            <label for="emailInput">
                Contraseña
            </label>
        </div>
        <button type="submit">Ingresar</button>
    </form>
</div>
