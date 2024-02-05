<section>
    <form wire:submit="submit">
        <h2 class="font-semibold text-3xl">
            Redacta tu correo
        </h2>
        <div class="input-control">
            <label for="emailInput">
                Destinatario
            </label>
            <input wire:model="to_user" type="email" name="to_user" id="emailInput" placeholder="mail@mail.com">
        </div>
        @error('to_user')
        <label class="errorMessage">{{$message}}</label>
        @enderror
        <div class="input-control">
            <label for="subjectInput">
                Asunto
            </label>
            <input wire:model="subject" type="text" name="subject" id="subjectInput" placeholder="Escribe un asunto...">
        </div>
        <div class="input-control">
            <label for="subjectInput">
                Mensaje
            </label>
            <textarea wire:model="message" name="message" id="messageInput" cols="30" rows="10"
                placeholder="Escribe un mensaje aquí..."></textarea>
        </div>

        <button type="submit"
            class="bg-[#4d55e4] text-white rounded tracking-[2px] uppercase font-semibold transition-all duration-[0.25s] ease-[ease-in] p-2 border-2 border-solid border-[#4d55e4];">Enviar</button>
    </form>
</section>