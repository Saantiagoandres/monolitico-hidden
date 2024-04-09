@extends('layouts.plantilla')

@section('content')

<div class="principal2">
    <div class="contact_form">

        <div class="formulario">
           <div class="formh1"> <h2 style="color: rgb(67, 43, 175);" >Formulario de contacto</h2></div>
            <h3 style="color: rgb(55, 52, 80);">Escríbenos y en breve nos pondremos en contacto contigo</h3>


            <form action="submeter-formulario.php" method="post">


                <p>
                    <label for="nombre" class="colocar_nombre" style="color: rgb(73, 64, 105);" >Nombre
                    <span class="obligatorio" >*</span>
                  </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                </p>

                <p>
                    <label for="email" class="colocar_email" style="color: rgb(76, 64, 105);">Email
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                </p>

                <p>
                    <label for="telefone" class="colocar_telefono" style="color: rgb(67, 64, 105);" >Teléfono
                  </label>
                <input type="tel " name="introducir_telefono " id="telefono " placeholder="Escribe tu teléfono ">
            </p>


                <label for="asunto " class="colocar_asunto " style="color: rgb(64, 65, 105); ">Asunto
                <span class="obligatorio ">*</span>
                </label>
                <input type="text " name="introducir_asunto " id="assunto " required="obligatorio " placeholder="Escribe un asunto ">
            </p>

            <p>
                <label for="mensaje " class="colocar_mensaje " style="color: rgb(64, 70, 105); ">Mensaje
                    <span class="obligatorio ">*</span>
                  </label>
                <textarea name="introducir_mensaje " class="texto_mensaje " id="mensaje " required="obligatorio " placeholder="Deja aquí tu comentario... "></textarea>
            </p>

            <button type="submit " name="enviar_formulario " id="enviar "><p>Enviar</p></button>



        </form>
    </div>
</div>

<div class="mapa ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.0528258110526!2d-76.58640293161895!3d2.4894662513325816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3004682104b719%3A0x18f914dcd7b80926!2sCra.%2017%20%26%20Cl.%2056%20N%2C%20Popay%C3%A1n%2C%20Cauca!5e0!3m2!1ses!2sco!4v1691030426580!5m2!1ses!2sco" width="600" height="450" style="border: 12px ridge #85f3ee73;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
</div>

</div>
@endsection
