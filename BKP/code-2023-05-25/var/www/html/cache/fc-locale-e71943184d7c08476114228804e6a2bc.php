<?php return array (
  'admin.hostedContexts' => 'Revistas hospedadas',
  'admin.settings.redirect' => 'Redirecionamento para revista',
  'admin.settings.redirectInstructions' => 'As solicitações realizadas ao portal serão direcionadas a esta revista. Esta opção pode ser útil caso o Portal hospede apenas uma revista.',
  'admin.settings.defaultMetricDescription' => '
		O OJS está configurado para registrar mais de uma métrica de uso. Estatísticas de uso serão exibidas em vários contextos. Há casos onde uma estatística única deve ser usada, como, por exemplo, para exibir listas ordenadas dos artigos mais usados, ou para classificar resultados de pesquisa. Escolha uma das métricas configuradas como padrão.
	',
  'admin.languages.confirmDisable' => 'Tem certeza de que deseja desativar este idioma? Isso pode afetar qualquer revistas hospedadas utilizando o idioma.',
  'admin.languages.primaryLocaleInstructions' => 'Este será o idioma padrão para o portal e todas as revistas hospedadas.',
  'admin.languages.supportedLocalesInstructions' => 'Os idiomas selecionados estarão disponíveis para todas as revistas no portal, e constarão da lista de idiomas que aparece em cada página do sistema (esta opção pode ser desativada individualmente por revista). Caso não sejam selecionados vários idiomas, a lista de idiomas não estará disponível e a opção "configurações de idioma" não estará disponível para as revistas.',
  'admin.locale.maybeIncomplete' => 'Idiomas marcados podem estar incompletos.',
  'admin.languages.confirmUninstall' => 'Deseja realmente remover este idioma? A execução pode afetar revistas hospedas que podem estar utilizando o idioma.',
  'admin.languages.installNewLocalesInstructions' => 'Selecione idiomas adicionais para uso no sistema. Os idiomas devem ser instalados antes que possam ser utilizados pelas revistas hospedadas. Veja a documentação para informações sobre como incluir novos idiomas no sistema.',
  'admin.auth.ojs' => 'Base de dados de usuários',
  'admin.auth.enableSyncProfiles' => 'Habilitar sincronização de perfil de usuários (caso suportado pelo plugin de autenticação!). Os perfis dos usuários serão atualizados com o conteúdo da fonte remota assim que o usuário acessar o sistema, e alterações no perfil (incluindo alteração de senha) realizadas dentro do sistema atualizarão a fonte remota. Caso esta opção não esteja habilitada, os perfis no sistema serão mantidos separados da fonte remota.',
  'admin.auth.enableSyncPasswords' => 'Habilitar alteração de senha de usuário (caso suportado pelo plugin de autenticação!). Habilitar esta opção permite ao usuário modificar a senha do sistema e fazer uso da opção de recuperação de senha para criar uma nova senha. Estas funcionalidades não estarão disponíveis aos usuários com esta fonte de autenticação, caso esta opção não seja habilitada.',
  'admin.auth.enableCreateUsers' => 'Habilitar criação de usuários (caso suportado pelo plugin de autenticação!). Usuários criados no sistema serão automaticamente incluídos na fonte de autenticação remota, caso não existam ainda. Inclusive, usuários criados através do cadastro de usuários também serão incluídos automaticamente na fonte remota, caso esta seja a fonte de autenticação padrão.',
  'admin.systemVersion' => 'Versão do OJS',
  'admin.systemConfiguration' => 'Configuração do OJS',
  'admin.systemConfigurationDescription' => 'Configurações do OJS no arquivo <tt>config.inc.php</tt>.',
  'admin.journals.createInstructions' => 'Seu cadastro como Gerente da Revista será automático. Após a criação de uma revista, acesse-a como gerente e continue com as configurações da revista e cadastro de usuários.',
  'admin.journals.journalSettings' => 'Configurações da revista',
  'admin.journals.noneCreated' => 'Nenhuma revista foi criada.',
  'admin.contexts.create' => 'Criar revista',
  'admin.journals.urlWillBe' => 'Geralmente é usado um acrônimo que identifica o periódico. A URL do periódico será: {$sampleUrl}.',
  'admin.contexts.form.titleRequired' => 'O título é obrigatório.',
  'admin.contexts.form.pathRequired' => 'O caminho é obrigatório.',
  'admin.contexts.form.pathAlphaNumeric' => 'O caminho deve conter apenas caracteres alfanuméricos, sublinhado, hífens, e deve começar e terminar com um caractere alfanumérico.',
  'admin.contexts.form.pathExists' => 'O caminho selecionado já está em uso por outra revista.',
  'admin.contexts.form.primaryLocaleNotSupported' => 'O idioma principal deve ser um dos idiomas disponíveis da revista.',
  'admin.journals.enableJournalInstructions' => 'Permitir Acesso Livre a esta revista no portal',
  'admin.contexts.contextDescription' => 'Descrição',
  'admin.journal.pathImportInstructions' => 'Caminho existente ou caminho a ser criado (ex.: "ojs").',
  'admin.journals.importSubscriptions' => 'Importar assinaturas',
  'admin.journals.transcode' => 'Transcodificar metadados de ISO8859-1',
  'admin.journals.redirect' => 'Gerar código para mapear URLs da versão 1 do OJS para URLs da versão 2',
  'admin.journals.form.importPathRequired' => 'O caminho físico para a importação é obrigatório.',
  'admin.journals.importErrors' => 'Importação falhou',
  'admin.mergeUsers' => 'Mesclar usuários',
  'admin.mergeUsers.mergeUser' => 'Mesclar usuário',
  'admin.mergeUsers.into.description' => 'Escolha um usuário a quem deseja atribuir as submissões e histórico de tarefas do cadastro anterior.',
  'admin.mergeUsers.from.description' => 'Escolha um usuário para mesclar o cadastro com o de outra conta (quando um usuário possui duas contas distintas, em vez de acumular papéis editoriais). O cadastro selecionado primeiro será excluído e suas submissões e histórico de tarefas atribuídas ao segundo cadastro escolhido.',
  'admin.mergeUsers.allUsers' => 'Todos os usuários',
  'admin.mergeUsers.confirm' => 'Deseja realmente mesclar os "{$oldAccountCount}" cadastro(s) selecionado(s) no cadastro do usuário "{$newUsername}"? As contas selecionadas "{$oldAccountCount}" serão excluídas permanentemente. Esta ação é irreversível.',
  'admin.mergeUsers.noneEnrolled' => 'Nenhum usuário cadastrado.',
  'admin.scheduledTask.subscriptionExpiryReminder' => 'Lembrete de Expiração da Assinatura',
  'admin.scheduledTask.openAccessNotification' => 'Notificação de Acesso Aberto',
  'admin.scheduledTask.reviewReminder' => 'Lembrete de Avaliação',
  'admin.settings.enableBulkEmails.description' => 'Selecione os periódicos hospedados que devem ter permissão para enviar e-mails em massa. Quando este recurso está ativado, um gerente da revista será capaz de enviar um e-mail a todos os usuários registrados em sua revista. <br><br> O uso indevido desse recurso para enviar e-mail não solicitado pode violar as leis anti-spam em algumas jurisdições e pode resultar nos e-mails do seu servidor sendo bloqueados como spam. Procure aconselhamento técnico antes de ativar este recurso e considere consultar os gerentes da revista para garantir que seja usado de maneira adequada. <br><br> Restrições adicionais sobre este recurso podem ser ativadas para cada revista visitando seu assistente de configuração na lista de <a href="{$hostedContextsUrl}"> Revistas  hospedadas </a>.',
  'admin.settings.disableBulkEmailRoles.description' => 'Um gerente de revista não poderá enviar e-mails em massa para nenhuma das funções selecionadas abaixo. Use esta configuração para limitar o abuso do recurso de notificação por e-mail. Por exemplo, pode ser mais seguro desativar e-mails em massa para leitores, autores ou outros grandes grupos de usuários que não consentiram em receber esses e-mails. <br><br> O recurso de e-mail em massa pode ser desativado completamente para este jornal em <a href="{$siteSettingsUrl}"> Administração> Configurações do Portal</a>.',
  'admin.settings.disableBulkEmailRoles.contextDisabled' => 'O recurso de e-mail em massa foi desativado para esta revista. Habilite este recurso em <a href="{$siteSettingsUrl}"> Administração> Configurações do Portal </a>.',
  'admin.contexts.confirmDelete' => '
realmente excluir permanentemente esta revista e seu conteúdo?"',
);