@extends('layouts.banner')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 justify-content-center">
                <div class="card border-secondary shadow">
                @if (session('alert'))
                <div class="alert alert-danger">
                    {{ session('alert') }}
                </div>
                @endif
                <div class="card-header h2 bg-tertiary">
                    <div class="row">
                        <div class="col">
                            Preguntas
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{action('EvaluationController@saveData')}}" method="POST">
                    @csrf
                        <!-- Div para la pregunta 1-->
                        <div name="pregunta_1_div" id="pregunta_1_div">
                            <label for="pregunta1" name="pregunta1"> <h4>1.- ¿Que es un SPDC?: (Marque la alternativa
                                    correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta1" value="A">A:   Es un arnés
                                    de cuerpo completo y un conjunto de componentes utilizados para detener una
                                    caída libre.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta1" value="B">B:   Es un cinturón de
                                    seguridad con estrobos de amarre.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta1" value="C">C:   Cualquier
                                    dispositivo o elemento que evite una caída (arnés, andamio, escala).
                                </label>
                            </div><hr>
                        </div>

                        <!-- Div para la pregunta 2-->
                        <div name="pregunta_2_div" id="pregunta_2_div">
                            <label for="pregunta2" name="pregunta2"> <h4>2.- ¿Que se considera trabajo en altura?:
                                    (Marque la alternativa correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta2" value="A">A:   Cualquier trabajo
                                    que implique la circulación y uso de escaleras por parte del personal.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta2" value="B">B:   Toda labor que se
                                    ejecute sobre 1.80 mts y/o presente riesgo de sufrir una caída libre.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta2" value="C">C:   El izaje de
                                    materiales utilizando “vientos guía”.
                                </label>
                            </div><hr>
                        </div>

                        <!-- Div para la pregunta 3-->
                        <div name="pregunta_3_div" id="pregunta_3_div">
                            <label for="pregunta3" name="pregunta3"> <h4>3.- El SPDC tipo “A”, indica:
                                    (Marque la alternativa correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta3" value="A">A:   Es para detención
                                    de caídas.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta3" value="B">B:   Se utiliza
                                    solamente con línea de vida metálica.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta3" value="C">C:   Tiene una
                                    capacidad de resistencia a la caída de 100 kg.
                                </label>
                            </div><hr>
                        </div>

                        <!-- Div para la pregunta 4-->
                        <div name="pregunta_4_div" id="pregunta_4_div">
                            <label for="pregunta4" name="pregunta4"> <h4>4.- Los SPDC, deben ser inspeccionados:
                                    (Marque la alternativa correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta4" value="A">A:   Por el usuario,
                                    previo a cada utilización y dejando registro escrito de la inspección.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta4" value="B">B:   Después de una
                                    caída (solo si se ha activado el sistema de retención).
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta4" value="C">C:   Por
                                    calendarización (cada 6 meses).
                                </label>
                            </div><hr>
                        </div>

                        <!-- Div para la pregunta 5-->
                        <div name="pregunta_5_div" id="pregunta_5_div">
                            <label for="pregunta5" name="pregunta5"> <h4>5.- La eliminación de suciedad (mantención
                                    básica) de un SPDC consiste en: (Marque la alternativa correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta5" value="A">A:   La limpieza
                                    “solo” del punto contaminado con petróleo (no utilizar desengrasante).
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta5" value="B">B:   Lavarlo solo con
                                    agua y jabón, secándolo al aire libre.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta5" value="C">C:   No se debe
                                    limpiar, solo mantener en su bolsa de traslado.
                                </label>
                            </div><hr>
                        </div>

                        <!-- Div para la pregunta 6-->
                        <div name="pregunta_6_div" id="pregunta_6_div">
                            <label for="pregunta6" name="pregunta6"> <h4>6.- El trabajador debe ser re instruido en el
                                    uso del SPDC cuando: (Marque la alternativa correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta6" value="A">A:   No es necesario
                                    re-instruirlo si está certificado para trabajos en altura por Medicina Ocupacional.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta6" value="B">B:   Al asignarle un
                                    SPDC diferente al equipo con el que fue entrenado originalmente.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta6" value="C">C:   Solo al
                                    efectuar trabajos sobre 1.80 mts.
                                </label>
                            </div><hr>
                        </div>

                        <!-- Div para la pregunta 7-->
                        <div name="pregunta_7_div" id="pregunta_7_div">
                            <label for="pregunta7" name="pregunta7"> <h4>7.- El Trauma por suspensión tiene un tiempo
                                    de aparición en el trabajador que está suspendido de:
                                    (Marque la alternativa correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta7" value="A">A:   De 2 a 8 minutos.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta7" value="B">B:   Depende del peso
                                    del trabajador, (es inversamente proporcional).
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta7" value="C">C:   De 15 a
                                    30 minutos.
                                </label>
                            </div><hr>
                        </div>

                        <!-- Div para la pregunta 8-->
                        <div name="pregunta_8_div" id="pregunta_8_div">
                            <label for="pregunta8" name="pregunta8"> <h4>8.- La función de la cinta anti-trauma es:
                                    (Marque la alternativa correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta8" value="A">A:   Evitar la
                                    obstrucción de la circulación sanguínea.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta8" value="B">B:   Afianzar las
                                    herramientas para evitar su caída al vacío.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta8" value="C">C:   Si el SPDC
                                    utiliza línea de vida retráctil, no es necesaria su utilización.
                                </label>
                            </div><hr>
                        </div>

                        <!-- Div para la pregunta 9-->
                        <div name="pregunta_9_div" id="pregunta_9_div">
                            <label for="pregunta9" name="pregunta9"> <h4>9.- En trabajos en altura se debe contar con
                                    un “Plan de rescate”, con la función de cada integrante del equipo de trabajo en
                                    caso de caída de un trabajador:
                                    (Marque la alternativa correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta9" value="V"> VERDADERO.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta9" value="F"> FALSO.
                                </label>
                            </div><hr>
                        </div>

                        <!-- Div para la pregunta 10-->
                        <div name="pregunta_10_div" id="pregunta_10_div">
                            <label for="pregunta10" name="pregunta10"> <h4>10.- Si un trabajador sufre una caída y una
                                    vez rescatado se encuentra inconsciente, se debe colocar en cuclillas por 10 minutos
                                    antes de que vuelva a trabajar: (Marque la alternativa correcta) </h4>
                            </label><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta10" value="V"> VERDADERO.
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="pregunta10" value="F"> FALSO.
                                </label>
                            </div><hr>
                        </div>

                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-primary">Enviar Respuestas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection