<?php
$url = $_SERVER['PHP_SELF'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/c76e202a94.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .fa-li .fa-circle {
            font-size: xx-small;
        }

        li{
            text-align: justify;
        }

        .list-group-numbered>li::before {
            font-weight: 700;
        }
    </style>
</head>
<body>
<div class="container-fluid p-0">
    <nav class="navbar navbar-nav bg-primary text-light">
        <h1>Diplomado PHP - Laravel</h1>
    </nav>
</div>
<div class="container p-3">
    <div class="row">
        <div class="col-12">
            <h3>Tema 1</h3>
            <div class="accordion" id="accordionTema1">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tallerAlgoritmos">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTallerAlgoritmos" aria-expanded="true" aria-controls="collapseTallerAlgoritmos">
                            Taller Algoritmos
                        </button>
                    </h2>
                    <div id="collapseTallerAlgoritmos" class="accordion-collapse collapse show" aria-labelledby="tallerAlgoritmos"
                         data-bs-parent="#accordionTema1">
                        <div class="accordion-body">

                            <div class="accordion" id="accordionItemsTaller">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingItem1">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseItem1" aria-expanded="false" aria-controls="collapseItem1">
                                            1. Construcción de algoritmos básicos.
                                        </button>
                                    </h2>
                                    <div id="collapseItem1" class="accordion-collapse collapse" aria-labelledby="headingItem1" data-bs-parent="#accordionItemsTaller">
                                        <div class="accordion-body">

                                            <ol class="list-group list-group-numbered">
                                                <li class="border-0 list-group-item">Calcule el área del triángulo y muestre su resultado.</li>
                                                <li class="border-0 list-group-item">Suponga que un individuo desea invertir su capital en un banco y desea saber cuánto dinero ganará después de un mes, si el banco paga a razón de n% mensual.</li>
                                                <li class="border-0 list-group-item">Un vendedor recibe un sueldo base más un 10% extra por comisión de sus ventas, el vendedor desea saber cuánto dinero obtendrá por concepto de comisiones por las tres ventas que realiza en el mes y el total que recibirá en el mes tomando en cuenta su sueldo base y comisiones.</li>
                                                <li class="border-0 list-group-item">Una tienda ofrece un descuento del 15% sobre el total de la compra y un cliente desea saber cuánto deberá pagar finalmente por su compra.</li>
                                                <li class="border-0 list-group-item">Un alumno desea saber cuál será su calificación final en la materia de Algoritmos. Dicha calificación se compone de los siguientes porcentajes:
                                                    <ul class="fst-italic fw-lighter list-group">
                                                        <li class="border-0 list-group-item">55% del promedio de sus tres calificaciones parciales.</li>
                                                        <li class="border-0 list-group-item">30% de la calificación del examen final.</li>
                                                        <li class="border-0 list-group-item">15% de la calificación de un trabajo final.</li>
                                                    </ul>
                                                </li>
                                                <li class="border-0 list-group-item">Un maestro desea saber qué porcentaje de hombres y que porcentaje de mujeres hay en un grupo de n estudiantes</li>
                                                <li class="border-0 list-group-item">Dada una cantidad en pesos, obtener la equivalencia en dólares, asumiendo que la unidad cambiaría es un dato desconocido.</li>
                                                <li class="border-0 list-group-item">Calcular el número de pulsaciones que una persona debe tener por cada 10 segundos de ejercicio, si la fórmula es:
                                                    <ul class="fst-italic fw-lighter list-group">
                                                        <li class="border-0 list-group-item">num_pulsaciones = (220 - edad)/10</li>
                                                    </ul>
                                                </li>
                                                <li class="border-0 list-group-item">Calcular el nuevo salario de un empleado, sabiendo que se tuvo un incremento del 25% sobre su salario anterior.</li>
                                                <li class="border-0 list-group-item">En un hospital existen tres áreas: Ginecología, Pediatría, Traumatología. El presupuesto anual del hospital se reparte conforme a la sig. tabla:
                                                    <table class="table table-bordered table-borderless table-sm ms-3 mt-2 w-auto">
                                                        <thead class="text-center">
                                                            <th>Área</th>
                                                            <th>Porcentaje del presupesto</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Ginecología</td>
                                                            <td class="text-center">40%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Traumatología</td>
                                                            <td class="text-center">30%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pediatría</td>
                                                            <td class="text-center">30%</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>Obtener la cantidad de dinero que recibirá cada área, para cualquier monto presupuestal.</p>
                                                </li>
                                                <li class="border-0 list-group-item">El dueño de una tienda compra un artículo a un precio determinado. Obtener el precio en que lo debe vender para lograr una ganancia del 30%.</li>
                                                <li class="border-0 list-group-item">Tres personas deciden invertir su dinero para fundar una empresa. Cada una de ellas invierte una cantidad distinta. Obtener el porcentaje que cada uno invierte con respecto a la cantidad total invertida.</li>
                                                <li class="border-0 list-group-item">Un alumno desea saber cuál será su promedio general en la materia algoritmos sabiendo que en total son cuatro notas las que se computan</li>
                                                <li class="border-0 list-group-item">Un alumno desea saber cuál será su promedio general en las tres materias más difíciles que cursa y cuál será el promedio que obtendrá en cada una de ellas. Estas materias se evalúan como se muestra a continuación:
                                                    <span class="fst-normal">La calificación de Matemáticas se obtiene de la siguiente manera:</span>
                                                    <ul class="fst-italic fw-lighter list-group fa-ul">
                                                        <li><span class="fa-li"><i class="fa-solid fa-circle fa-2xs"></i></span>Examen 90%</li>
                                                        <li><span class="fa-li"><i class="fa-solid fa-circle fa-2xs"></i></span>Promedio de tareas 10%</li>
                                                        <li><span class="fa-li"><i class="fa-solid fa-circle fa-2xs"></i></span>En esta materia se pidió un total de tres tareas.</li>
                                                    </ul>

                                                    <span class="fst-normal">La calificación de Física se obtiene de la siguiente manera:</span>
                                                    <ul class="fst-italic fw-lighter list-group fa-ul">
                                                        <li><span class="fa-li"><i class="fa-solid fa-circle fa-2xs"></i></span>Examen 80%</li>
                                                        <li><span class="fa-li"><i class="fa-solid fa-circle fa-2xs"></i></span>Promedio de tareas 20%</li>
                                                        <li><span class="fa-li"><i class="fa-solid fa-circle fa-2xs"></i></span>En esta materia se pidió un total de dos tareas.</li>
                                                    </ul>

                                                    <span class="fst-normal">La calificación de Química se obtiene de la siguiente manera:</span>
                                                    <ul class="fst-italic fw-lighter list-group fa-ul">
                                                        <li><span class="fa-li"><i class="fa-solid fa-circle fa-2xs"></i></span>Examen 85%</li>
                                                        <li><span class="fa-li"><i class="fa-solid fa-circle fa-2xs"></i></span>Promedio de tareas 15%</li>
                                                        <li><span class="fa-li"><i class="fa-solid fa-circle fa-2xs"></i></span>En esta materia se pidió un promedio de tres tareas.</li>
                                                    </ul>
                                                </li>
                                                <li class="border-0 list-group-item">La presión, el volumen y la temperatura de una masa de aire se relacionan por la fórmula:
                                                    <ul class="fst-italic fw-lighter list-group">
                                                        <li class="border-0 list-group-item">masa = (presión * volumen) / (0.37 * (temperatura + 460))</li>
                                                    </ul>
                                                    <p>Mostrar el resultado de dicha operación</p>
                                                </li>
                                                <li class="border-0 list-group-item">Diseñe un algoritmo que determine el cociente y el residuo de una división entera.</li>
                                                <li class="border-0 list-group-item">Calcular el nuevo salario de un empleado sabiendo que se tuvo un incremento del 25% sobre su salario anterior.</li>
                                                <li class="border-0 list-group-item">Calcular el área de un circulo.</li>
                                                <li class="border-0 list-group-item">Calcular el área de un triángulo Equilátero.</li>
                                                <li class="border-0 list-group-item">Calcular el área de un triángulo rectángulo.</li>
                                                <li class="border-0 list-group-item">Calcular el área del rombo.</li>
                                                <li class="border-0 list-group-item">Calcular el perímetro del rombo.</li>
                                            </ol>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingItem2">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseItem2" aria-expanded="false" aria-controls="collapseItem2">
                                            2. Construcción de algoritmos aplicando estructuras selectivas simples y múltiples.
                                        </button>
                                    </h2>
                                    <div id="collapseItem2" class="accordion-collapse collapse" aria-labelledby="headingItem2" data-bs-parent="#accordionItemsTaller">
                                        <div class="accordion-body">
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingItem3">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseItem3" aria-expanded="false" aria-controls="collapseItem3">
                                            3. Construcción de algoritmos aplicando estructuras repetitivas
                                        </button>
                                    </h2>
                                    <div id="collapseItem3" class="accordion-collapse collapse" aria-labelledby="headingItem3" data-bs-parent="#accordionItemsTaller">
                                        <div class="accordion-body">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="tareasTema1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTareasTema1" aria-expanded="false" aria-controls="collapseTareasTema1">
                            Tareas
                        </button>
                    </h2>
                    <div id="collapseTareasTema1" class="accordion-collapse collapse" aria-labelledby="tareasTema1" data-bs-parent="#accordionTema1">
                        <div class="accordion-body">

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingPracticaTema1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePracticaTema1" aria-expanded="false" aria-controls="collapsePracticaTema1">
                            Práctica en clase
                        </button>
                    </h2>
                    <div id="collapsePracticaTema1" class="accordion-collapse collapse" aria-labelledby="headingPracticaTema1" data-bs-parent="#accordionTema1">
                        <div class="accordion-body">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
