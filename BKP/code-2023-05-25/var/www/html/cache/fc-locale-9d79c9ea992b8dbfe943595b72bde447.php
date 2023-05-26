<?php return array (
  'plugins.generic.backup.failure' => '<strong> AVISO: </strong> Pode ter ocorrido um erro durante o processo de backup. A causa mais comum são as permissões de arquivo.',
  'plugins.generic.backup.tar.config' => '{$footNoteNum}. <strong> AVISO: </strong> A ferramenta "tar" não foi configurada no arquivo de configuração config.inc.php. A configuração dependerá da configuração do seu servidor. Deve ser especificado em uma seção chamada [cli], em uma opção de configuração chamada "tar", especificando o caminho para o utilitário "tar", ou seja: <br />
<pre>[cli]
tar = "/bin/tar"
</pre><br />',
  'plugins.generic.backup.db.config' => '{$footNoteNum}. <strong> AVISO: </strong> A ferramenta de dump de banco de dados não foi configurada no arquivo de configuração config.inc.php. A configuração dependerá da configuração do servidor e do tipo de banco de dados que você usa. Ele deve ser especificado em uma seção chamada [cli], em uma opção de configuração chamada "dump". Para o MySQL, use a ferramenta mysqldump, ou seja: <br />
<pre>[cli]
dump = "/usr/bin/mysqldump -h {$hostname} -u {$username} -p{$password} {$databasename}"
</pre>
Os tokens "%s" serão substituídos por, na ordem:<ol>
<li> Nome do host do banco de dados </li>
<li> Nome de usuário do banco de dados </li>
<li> Senha do banco de dados </li>
<li> Nome do banco de dados </li>
</ol>
Observe que isso envolve a especificação da senha do banco de dados na linha de comando, o que pode ser uma preocupação de segurança. <br /> <br />',
  'plugins.generic.backup.code' => 'Código',
  'plugins.generic.backup.files' => 'Arquivos',
  'plugins.generic.backup.db' => 'Banco de Dados',
  'plugins.generic.backup.longdescription' => '<p> Os links a seguir permitem ao administrador do site baixar um backup completo dos vários componentes de uma instalação. Um backup completo contém <strong> todos </strong> dos seguintes componentes. Consulte a documentação técnica para obter mais informações sobre como esses componentes se inter-relacionam. </p>',
  'plugins.generic.backup.link' => 'Baixar Backup',
  'plugins.generic.backup.description' => 'Este plugin gera um backup da instalação.',
  'plugins.generic.backup.name' => 'Plugin de Backup',
);