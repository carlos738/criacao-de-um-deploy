<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuários</title>
</head>
<body>
  <h1>Cadastro de Usuário</h1>
  <form method="POST" action="api/usuarios.php">
    <input type="text" name="nome" placeholder="Nome" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit">Cadastrar</button>
  </form>

  <h2>Usuários</h2>
  <?php
    $pdo = new PDO("mysql:host=" . getenv("DB_HOST") . ";dbname=" . getenv("DB_NAME"), getenv("DB_USER"), getenv("DB_PASS"));
    $usuarios = $pdo->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $u) {
      echo "<p>{$u['nome']} - {$u['email']}</p>";
    }
  ?>
</body>
</html>
