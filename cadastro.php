<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/global.css">
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="stylesheet" href="estilos/index.css">
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <title>SENAI</title>
</head>
<body>
    <div class="header">
        <div class="logo">
        <ion-icon style="color: #f5f5ff;" size="large" name="planet-sharp"></ion-icon>
        </div>
            <ul class="menu">
                <li><a href="index.php"><ion-icon size="small" name="home-sharp"></ion-icon></a></li>
                <li><a href="cadastro.php"><ion-icon size="small" name="people-circle-sharp"></ion-icon></a></li>
                <li><a href="#"><ion-icon size="small" name="information-circle-sharp"></ion-icon></a></li>
            </ul>
    </div>
    <div class="container">

    <div class="imgRight">
            <img width="200px" src="src/imgRight.svg">
        </div>

        <div class="formulario">
            <h3 class="comentario">Faça Cadastro <ion-icon style="margin-left: 10px; color: dodgerblue;" name="person-add-outline"></ion-icon></h3>
            <form action="" method="post">
                <div class="bloco">
                    <div class="blocoinput">
                        <p>Nome:</p>
                        <input style="width:95%;" type="text" placeholder="Digite o seu nome" name="nome" id="nome">
                    </div>
                    <div class="blocoinput">
                        <p>Telefone:</p>
                        <input style="width:100%;" type="tel" placeholder="(71) 99999-9999" name="telefone" id="telefone">
                    </div>
                </div>
              <div class="blocomaior">
                <div class="blocoinput">
                    <p>Email</p>
                    <input style="width:100%;" type="email" placeholder="Digite o seu melhor e-mail" name="email" id="email">
                </div>
               
              </div>
              <div class="blocomaior">
                <div class="blocoinput">
                    <p>Curso</p>
                    <input style="width:100%;" placeholder="Qual curso você faz?" type="text" name="curso" id="curso">
                </div>

              </div>
                
                

                

                <div class="bloco">

                    <div class="blocoinput" style="width:95%;">
                        <p>Instituição</p>
                        <select name="instituicao" id="instituicao" class="institu">
                            <option value="senaiD">SENAI Dendezeiros</option>
                            <option value="senaiC">SENAI CIMATEC</option>
                            <option value="senaiCet">SENAI CETIND</option>
                        </select>
                    </div>

                    <div class="blocoinput" style="width:100%;">
                        <p>Nº de Matrícula</p>
                        <input type="text" placeholder="11.829890" name="nMatricula" id="nMatricula">
                    </div>

                </div>

                <div class="bloco">
                    <div class="blocoinput" style="width: 95%">
                        <p>Foto</p>
                        <input class="institu" type="file" name="foto" id="foto">
                    </div>

                    <div class="blocoinput">
                        <p>Data de Nascimento</p>
                        <input style="width:100%;"  type="date" name="dtNascimento" id="dtNascimento">
                    </div>

                </div>

                
                

                <button type="submit" class="cadastrar">Confirmar</button>

            </form>


        </div>


        <div class="imgLeft">
            <img width="500px" src="src/imgRight.svg">
        </div>
       
    </div>


</body>
</html>
