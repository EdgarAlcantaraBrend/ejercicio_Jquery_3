<!doctype html>
<html lang="en">
    <head>
        <title>CRIPTOMONEDAS</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style="background-color: #9292b9;">
        <div class="jumbotron jumbotron-fluid" style="background-color: #9292b9;" >
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <strong><h2>CALCULO DE PRECIO CRIPTOMONEDAS</h2></strong>
                    </div>
                </div>
                <div class="card" style="background-color: #87d899;">
                    <div class="card-body">
                        <div id="resultado">
                            <label for=""><h6>MONTO A GASTAR</h6></label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control"  aria-required="true" placeholder="Ingresa valor">
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col text-center">
                            <h5>MONEDA A COMPRAR</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <input type="radio" name="moneda" id="bitcoin" value="bitcoin"> 
                            <label for="bitcoin">Bitcoin (8000000)</label>
                        </div>
                        <div class="col-sm-6 text-center">
                            <input type="radio" name="moneda" id="etherium" value="etherium"> 
                            <label for="etherium">Etherium (70,000)</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <input type="radio" name="moneda" id="mana" value="mana"> 
                            <label for="mana">Mana (24 MXN)</label>
                        </div>
                        <div class="col-sm-6 text-center">
                            <input type="radio" name="moneda" id="xrp" value="xrp"> 
                            <label for="xrp">XRP (30 MXN)</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <input type="radio" name="moneda" id="bat" value="bat"> 
                            <label for="bat">Bat (21 MXN)</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <button class="btn btn-primary btn-block" id="calcular">Calcular</button>
                            <span class="btn btn-warning btn-block" id="btn_limpiar">Limpiar</span>
                        </div>
                        <div class="col text-center">
                            <label for="" id="resultado2"></label>
                            <div class="alert alert-success text-center" role="alert">
                                <div id="cantidadPagar"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

<script>

    let a=8000000;
    let b=70000;
    let c=24;
    let d=30;
    let e=21;
    let resultado;
    let resultado2;
    $(document).ready(function(){

        $('#calcular').click(function(){

            let cantidad=parseInt($('#cantidad').val());
            let moneda = $('input:radio[name=moneda]:checked').val();

            if (cantidad < 1) {
                alert("La cantidad debe ser mayor a cero");
                return false;
            }
            if (moneda == undefined) {
                alert("Debes seleccionar la moneda!");
                return false;
            }


            switch (moneda) {
            case "bitcoin":{
                
                resultado= cantidad/a;
                resultado2=Math.trunc(resultado);
                resultado2=resultado2+"";

                $("#cantidadPagar").text(resultado2);

                break;
            }
            case "etherium":{
                resultado= cantidad/b;
                resultado2=Math.trunc(resultado);
                resultado2=resultado2+"";

                $("#cantidadPagar").text(resultado2);

                break;
            }
            case "mana":{
                resultado= cantidad/c;
                resultado2=Math.trunc(resultado);
                resultado2=resultado2+"";

                $("#cantidadPagar").text(resultado2);

                break;
            }
            case "xrp":{
                resultado= cantidad/d;
                resultado2=Math.trunc(resultado);
                resultado2=resultado2+"";

                $("#cantidadPagar").text(resultado2);

                break;
            }
            case "bat":{
                resultado= cantidad/e;
                resultado2=Math.trunc(resultado);
                resultado2=resultado2+"";

                $("#cantidadPagar").text(resultado2);

                break;
            }
            default:
                alert("Opcion incorrecta");
                break;
            }
            
        });
        $('#btn_limpiar').click(function(){
            window.location='index.php'; 
        });
        
    });
    


    
</script>