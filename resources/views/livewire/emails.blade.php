<section>
    <button
        class="bg-[#4d55e4] text-white rounded tracking-[2px] uppercase font-semibold transition-all duration-[0.25s] ease-[ease-in] p-2 border-2 border-solid border-[#4d55e4];"
        wire:click="$dispatch('openModal', { component: 'create-email' })">
        Nuevo correo
    </button>
    <div
        class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
        <table class="w-full text-left table-auto min-w-max">
            <thead>
                <tr>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Destinatario
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Asunto
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Mensaje
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Estado
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emails as $email)
                
                <tr>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{$email->to_user}}
                        </p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{$email->subject}}
                        </p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{$email->message}}
                        </p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <a href="#"
                            class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                            {{$email->status}}
                        </a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</section>