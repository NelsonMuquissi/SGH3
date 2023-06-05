<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php?erro=True");
    exit;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="menu-btn">
        <i></i>
    </div>
    <div class="side-bar">
      <header>
        <div class="closse-btn">
            <i></i>
        </div>
        <!-----imagrm -->
        <img src="imagem/869577.png" alt="">
        <h1>Administrador</h1>
      </header>  
        <div class="menu">
            <div class="item"><a href=""><i class="fas"></i>Dashboad</a></div>
            <div class="item"><a href="TelaProf2/Add.php"><i class="fas"></i>Cadastrar Professores</a></div>
            <div class="item"><a href="TelaProf2/view.php"><i class="fas"></i>Professores</a></div>
            <div class="item"><a href="CadastrarTurma09/AddTurma.php"><i class="fas"></i>Cadastrar Horario Turmas</a></div>
            <div class="item"><a href="CadastrarTurma09/Turma.php"><i class="fas"></i>Horario de Turmas</a></div>
            <div class="item"><a href="CadastrarHorario03/AddHorario.php"><i class="fas"></i>Add Horario Professores</a></div>
            <div class="item"><a href="CadastrarHorario03/Horario.php"><i class="fas"></i>Horario Professores</a></div>
            <div class="item"><a href="TurmaProf2/Add.php"><i class="fas"></i>Add Professor a Turma</a></div>
            <div class="item"><a href="breve.php"><i class="fas"></i>Professor e Turmas</a></div>
            <div class="item"><a href="logout.php"><i class="fas"></i>Logout</a></div>

        </div>
    </div>

        <div class="mainSection">
            <div class="box-container">
                <div class="box">
                    <h3>Delete</h3>
                </div>
                <div class="box">
                    <h3>Upload</h3>
                </div>
                <div class="box">
                    <h3>Update</h3>
                </div>
            </div>
    <main class="table">
       
        <section class="table__header">
            <h1>Professores</h1>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Morada</th>
                        <th>Email</th>
                        <th>Disciplina</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include "conect.php";
                        $sql = "SELECT * FROM `CrudProf1`";
                        $result = mysqli_query($conn, $sql);
                        while($valor = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $valor['ID'] ?></td>
                                    <td><img src="carlos 998.jpg" alt=""></td>
                                    <td><?php echo $valor['nome']  ?></td>
                                    <td><?php echo $valor['morada'] ?></td>
                                    <td><?php echo $valor['email'] ?></td>
                                    <td><?php echo $valor['disciplina1'] ?><?php echo " | " ?><?php echo $valor['disciplina2'] ?></td>
                                </tr>

                            <?php
                        }

                    ?>

                </tbody>
            </table>
        </section>
    </main>
        </div>
    
</body>
</html>