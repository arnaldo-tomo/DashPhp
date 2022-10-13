<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pre-Regsito | Instituto Industrial e Comercial da Beira</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="estilo/fontawesome-free/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    
    <link rel="stylesheet" href="estilo/css/estilo.css">
  </head>
<body>
  
    <!-- As a link -->
<nav class="navbar navbar-dark bg- " style="background-color: #3e0202;">
     <div class="container">
  <a class="navbar-brand" href="#"><img src="Connect/logo.png" alt="img " width="200px;"></a>
     </div>
</nav>
<!-- As a heading -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand mb-0 h1"><h6><b>Pré Inscrição | Presencial</b></h6></span>
    </div>
</nav>
    
    <!-- Jumbotron-->
    <div id="box1">
        <div class="container">
     <nav class="navbar navbar-dark bg- " style="background-color: #3e0202;">
         <h6>Entroduza os seus dados reais na Pré Inscrição .</h6>
         </nav>
<!-- As a heading -->
     <nav class="navbar navbar-dark bg-dark">
    </nav>
            
     <div class="card-header">
    <div class="jumbotron rounded-0" style="background-color: ">
        <form method="POST" action="config.php"  >
          <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                     <label>Apelido Candidato</label>
                    <input type="text" name="apelido" class="form-control"  placeholder="Apelido Candidato" >
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                     <label >Nome Candidato</label>
                    <input type="text" name="candidato" class="form-control"  placeholder="Nome Candidato">
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                     <label for="exampleFormControlInput1">Data Nascimento</label>
                    <input type="date" name="datanascimento" class="form-control"  placeholder="Data Nascimento" >
                     </div>
                  </div>
           </div>
        <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                         <div class="form-group">
                        <label>Tipo Documento</label>
                  <select class="form-control select2" name="documento" style="width: 100%;">
                    <option   name="documento"  selected="selected">--Selecione o Documento--</option>
                    <option value="B.I" > B.I</option>
                    <option value="Passaporte" >Passaporte</option>
                    <option value="Carta Condução" >Carta Condução</option>
                      </select>
                      </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Número Documento</label>
                    <input type="number" name="numero" class="form-control"  placeholder=" Digite o numero do documento escolhido">
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                         <label>Sexo</label>
                  <select class="form-control select2" name="sexo" style="width: 100%;">
                    <option name="sexo" selected="selected"> --Selecione e o sexo --</option>
                    <option value='Masculino'>Masculino</option>
                    <option value="Femenino">Femenino</option>
                      </select>
                     </div>
                  </div>
           </div>
        
        <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                         <div class="form-group">
                        <label> Estado Civil </label>
                  <select class="form-control select2" name="status" style="width: 100%;">
                    <option selected="selected">  -- escolha o estado civil --</option>
                    <option>Solteiro</option>
                    <option>Casado</option>
                    <option>Divorciado</option>
                      </select>
                      </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                     <label>Província Residente </label>
                  <select class="form-control select2"  name="provincia" style="width: 100%;">
                    <option selected="selected">Escolha a Província </option>
                    <option>Beira</option>
                    <option>Nampula</option>
                    <option>Maputo</option>
                    <option>inhambene</option>
                    <option>Gaza</option>
                      </select>
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                         <div class="form-group">
                     <label for="exampleFormControlInput1">Contacto</label>
                    <input type="number" name="contacto" class="form-control" placeholder="Contacto">
                     </div>
                     </div>
              
                      <button type="resit"  class="btn btn-danger mb-2 md-2">REFAZER</button>
                      <button type="submit"  id="btn" class="btn btn-primary mb-2 md-2">PROXIMO</button>
                  </div>
            
           </div>
        
        </form>
            </div>
          </div><!--card-header-->
              
            </div>  <!--card spur-card-->
        </div>
    <div class="container">
            <div id="footer"><h9 text-center>Telef.: +258 84 6474 687 /Fax.: +258 ou +258 </h9> </div>   
            <div id="footer"><h9 text-center>Província Residentzdsjcvsdhl je </h9> </div>   
            <div id="footer"><h9 text-center>Província Residentesdnbfvds.bfdsgfmdckgvjdbs </h9> </div>  
        </div>
    <div class="container">
    <div id="colorF">
        &nbsp;
        </div>
    </div>
      <script>
    $('#btn').on('click',function(){
        swal.fire({
            type: 'sucessu',
            title: 'your Title',
            text: 'tknsbjc'
        })
    })
    </script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
  
    
</body>
</html>
    <script src="estilo/sweetalert2/sweetalert2@8"></script>
    <script type="text/javascript" src="estilo/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="estilo/jquery/jquery-3.3.1.slim.min.js" ></script>
    <script type="text/javascript" src="estilo/jquery/jquery.min.js" ></script>
    <script type="text/javascript" src="estilo/popper/popper.min.js"></script>
    <script type="text/javascript" src="estilo/bootstrap/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="estilo/bootstrap/js/bootstrap.bundle.min.js" ></script>
    <script type="text/javascript" src="estilo/js/spur.js"></script>
