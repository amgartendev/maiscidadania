# **-------------  +CIDADANIA  -------------**

**Criado por:** João Victor Ferreira Amgarten<br>
**Projeto:** +Cidadania

### **-------------  SOBRE O QUE É O PROJETO?  -------------**
Esse é um projeto que foi criado visando a melhoria de uma cidade, com foco centralizado na cidadania e contribuição
de todos os cidadãos de uma cidade ou até mesmo país.

### **-------------  TECNOLOGIAS UTILIZADAS  -------------**
1 - HTML5<br>
2 - CSS3 <br>
3 - PHP<br>
4 - JAVASCRIPT<br>
5 - MYSQL<br>

### **-------------  COMO FUNCIONA?  -------------**
O projeto consiste em uma página web principal, uma página de redirecionamento após o envio de um formulário, uma página de login, um painel e outra para a confirmação do funcionamento do banco de dados.

O index (página principal) é onde se encontra um formulário para que o utilizador preencha os campos com os dados pedidos, nenhum campo pode ficar em branco quando o utilizador tentar enviar o formulário para o nosso banco de dados, caso isso ocorra aparecerá uma mensagem na tela dizendo "Preencha este campo" indicando o que ficou por preencher.

Se todo o formulário estiver preenchido, o site redirecionará o utilizador para a página secundária confirmando o envio do formulário
e que todos os dados foram enviados para o nosso banco de dados, junto de uma mensagem agradecendo pela colaboração. Nessa página também
se encontra um botão para voltar para a página principal.

As ocorrências se encontram no banco de dados, onde ficam armazenados os endereços, cidades, os problemas, NIF, fotos e uma data para facilitar a busca das ocorrências mais recentes enviadas.

A página de login conta com um formulário de dois campos para serem preenchidos, sendo eles usuário e senha. Esses campos são obrigatórios e não podem ficar em branco, caso contrário aparecerá uma mensagem avisando que o utilizador deve preencher todos os campos antes de uma tentativa de login. Após todos os campos preenchidos o banco de dados fará uma verificação no usuário e senha inseridos pelo utilizador, caso as informações estejam corretas o utilizador será redirecionado para a página painel.php. Se o usuário e senha não estiver cadastrado no banco de dados o utilizador deverá ver uma mensagem informando que as credenciais não correspondem a nenhum registro.

Para uma maior segurança e organização, o site também consiste em uma página onde pode ser vista todas as ocorrências já feitas, sem precisar aceder ao banco de dados. Essa página foi criada para uma maior segurança, facilidade e organização na hora de verificar os envios.

A página de confirmação do funcionamento pode ser acessada pelo seguinte endereço: localhost/Projeto/config.php
Essa página apenas mostra na tela uma mensagem dizendo "Conexão efetuada com sucesso!!" caso o banco de dados esteja em perfeita comunicação com o site, ou uma mensagem de erro caso algo não esteja funcionando da devida forma.

### **-------------  FUTURAS IMPLEMENTAÇÕES  -------------**
Por fins de segurança, pretendo implementar um validador de NIF no meu site, isso evitaria ataques de SPAM ou falsas ocorrências sendo armazenadas no banco de dados.

Como essa implementação é de uma maior complexidade, o projeto final não tem essa funcionalidade.