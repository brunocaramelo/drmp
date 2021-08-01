@component('mail::message')
# Contato pelo Site

<table>
    <tbody>
        <tr>
            <td><strong>Nome:</strong></td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td><strong>Telefone Whatsapp:</strong></td>
            <td>{{$whatsapp_phone}}</td>
        </tr>
        <tr>
            <td><strong>Cidade:</strong></td>
            <td>{{$city}}</td>
        </tr>
        <tr>
            <td><strong>Estado:</strong></td>
            <td>{{$state}}</td>
        </tr>
        <tr>
            <td><strong>Mensagem:</strong></td>
            <td>{{$message}}</td>
        </tr>
    </tbody>
</table>

<br />
<br />
<br />
Obrigado,<br>
{{ config('app.name') }}
@endcomponent
