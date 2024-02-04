<div>
    <h1 class="font-semibold text-3xl">
        ¡Bienvenido {{Auth::user()->name}}!
    </h1>
    <section>
        <h2>Datos de usuario</h2>
        <table>
            <tr>
                <td class="header">Correo</td>
                <td>{{Auth::user()->email}}</td>
            </tr>
            <tr>
                <td class="header">Cédula de identidad</td>
                <td>{{Auth::user()->identification}}</td>
            </tr>
            <tr>
                <td class="header">Fecha de cumpleaños</td>
                <td>{{Auth::user()->birth_date}}</td>
            </tr>
            <tr>
                <td class="header">Teléfono celular</td>
                <td>{{Auth::user()->phone}}</td>
            </tr>
        </table>
    </section>
</div>
