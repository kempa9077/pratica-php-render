<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prática PaaS - Lucas Kempa</title>
<style>
  body { font-family: Arial, sans-serif; max-width: 760px; margin: 40px auto; padding: 0 16px; line-height: 1.6; color: #222; }
  h1 { color: #1a4d8f; }
  .hora { color: #555; font-size: 0.95em; }
</style>
</head>
<body>
<h1>
<?php
echo "Hello World! - " . date("d/m/Y H:i:s");
?>
</h1>
<p class="hora">Data e hora do servidor no momento do acesso.</p>

<h2>Prática de Cloud Computing (PaaS) - Lucas Kempa</h2>
<p>Aplicação publicada no Render.</p>

<h2>O que é hospedagem de aplicações?</h2>
<p>
Hospedagem de aplicações é o serviço que mantém um sistema ou site funcionando em um servidor
conectado à Internet, para que qualquer pessoa possa acessá-lo por meio de uma URL. Em vez de
manter um computador próprio ligado o tempo todo, o desenvolvedor envia o código para uma
plataforma que cuida da infraestrutura, como servidores, rede, energia e disponibilidade.
No modelo PaaS (Platform as a Service), como o Render, a plataforma também fornece o ambiente
de execução e automatiza a publicação: a cada novo commit no GitHub, o serviço reconstrói e
atualiza a aplicação, permitindo que o desenvolvedor foque no código e não na administração
dos servidores.
</p>
</body>
</html>