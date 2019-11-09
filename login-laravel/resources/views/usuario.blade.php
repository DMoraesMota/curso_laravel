/*Somente vai aparecer se o usuário estiver logado.*/
@auth

<h4>Você está logado!!</h4>
<p> {{ Auth::User()->name }} </p>
<p> {{ Auth::User()->email }} </p>
<p> {{ Auth::User()->id }} </p>
@endauth

//Quando o usuário não está logado
@guest
    <h4>Você não esta logado</h4>
@endguest