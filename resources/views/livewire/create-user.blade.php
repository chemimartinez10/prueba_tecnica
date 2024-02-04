<section>
    <form wire:submit="submit">
        <h2 class="font-semibold text-3xl">
            Crear usuario
        </h2>
        <div class="input-control">
            <label for="nameInput">
                Nombre
            </label>
            <input wire:model="name" type="text" name="name" id="nameInput" placeholder="Ingrese un nombre...">
        </div>
        @error('name')
        <label class="errorMessage">{{$message}}</label>
        @enderror
        <div class="input-control">
            <label for="emailInput">
                Correo electrónico
            </label>
            <input wire:model="email" type="email" name="email" id="emailInput" placeholder="mail@test.com">
        </div>
        @error('email')
        <label class="errorMessage">{{$message}}</label>
        @enderror

        <div class="input-control">
            <label for="passwordInput">
                Contraseña
            </label>
            <input wire:model="password" type="password" name="password" id="passwordInput"
                placeholder="Ingrese una contraseña...">
        </div>
        @error('password')
        <label class="errorMessage">{{$message}}</label>
        @enderror

        <div class="input-control">
            <label for="passwordConfirmationInput">
                Repita la contraseña
            </label>
            <input wire:model="password_confirmation" type="password" name="password_confirmation" id="passwordConfirmationInput"
                placeholder="Repita la contraseña...">
        </div>
        @error('password_confirmation')
        <label class="errorMessage">{{$message}}</label>
        @enderror

        <div class="input-control">
            <label for="birthDateInput">
                Fecha de nacimiento
            </label>
            <input wire:model="birth_date" type="date" name="birth_date" id="birthDateInput">
        </div>
        @error('birth_date')
        <label class="errorMessage">{{$message}}</label>
        @enderror

        <div class="input-control">
            <label for="identificationInput">
                Cédula
            </label>
            <input wire:model="identification" type="text" name="identification" id="identificationInput"
                placeholder="Ingresa la cédula de identidad...">
        </div>
        @error('identification')
        <label class="errorMessage">{{$message}}</label>
        @enderror

        <div class="input-control">
            <label for="phoneInput">
                Teléfono celular
            </label>
            <input wire:model="phone" type="text" name="phone" id="phoneInput" placeholder="Ingresa el teléfono...">
        </div>
        @error('phone')
        <label class="errorMessage">{{$message}}</label>
        @enderror

        <button type="submit"
            class="bg-[#4d55e4] text-white rounded tracking-[2px] uppercase font-semibold transition-all duration-[0.25s] ease-[ease-in] p-2 border-2 border-solid border-[#4d55e4];">Crear</button>
    </form>
</section>