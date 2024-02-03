<section>
    <form wire:submit="loginUser">
        <h2>
            Redacta tu correo
        </h2>
        <div class="input-control">
            <label for="emailInput">
                Destinatario
            </label>
            <input wire:model="email" type="email" name="email" id="emailInput" placeholder="mail@mail.com">
        </div>
        @error('email')
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
            <textarea wire:model="message" name="message" id="messageInput" cols="30" rows="20" placeholder="Escribe un mensaje aquí..."></textarea>
        </div>
        
        <button type="submit">Enviar</button>
    </form>
</section>