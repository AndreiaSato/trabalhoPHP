** SISTEMA DE ALUGUEL DE QUARTOS PARA ESTUDANTES **

Classes:
-> cadastro estudante
-> cadastro proprietário
-> cadastro imóvel
-> cadastro reserva

Estudante
- id  (chave primária)
- nome
- cpf 
- email
- telefone
- instituição de ensino
- senha

Proprietário
- id (chave primária)
- nome
- cpf 
- email
- senha
- telefone

Imóvel

- ID
- tipo (casa/ apt)
- valor
- contrato pagamento
- descrição do imóvel
- chave estrangeira proprietário
- chave estrangeira endereço 
- situação (alugada sim ou não)

Endereço

- estado
- cidade
- rua
- número
- complemento
- bairro
- cep
- ID

Reserva

- ID
- data inicial
- data final
- situação (disponível sim/não)
- chave estrangeira estudante
- chave estrangeira imóvel

DIVIDIDO EM VIEW/ CONTROLLER/ DAO/ MODEL/ 

VIEW  -> onde fica alojado a parte visual do site, nela as páginas com formulários, os métodos POST (no listarimoveis conecta com o banco
e procura algum imovel para exibir)


CONTROLLER -> ela recebe os dados da VIEW, e envia para a camada de banco de dados Dao; quando necessário, ela trabalha os dados para poder mandar, tipo: ela teve que trabalhar o contrato (a data finicial e final do contrato de acordo com o pacote escolhido) para mandar para o banco


*DAO -> trabalha com o Banco de dados. Lá pegamos os dados e inserimos nas tabelas respectivas, Lá também trabalhamos duas tabelas ao mesmo tempo (imovelDAo)
Temos a classe ConectaBanco, que faz a função de conexão com o Banco.


*MODEL ->onde fica os modelos das tabelas do banco de dados


O diálogo das camadas na Web
View - Fala Controller ! O usuário acabou de pedir para acessar o Facebook ! Pega os dados de login dele ai.

Controller – Blz. Já te mando a resposta. Ai model, meu parceiro, toma esses dados de login e verifica se ele loga.

Model – Os dados são válidos. Mandando a resposta de login.

Controller – Blz. View, o usuário informou os dados corretos. Vou mandar pra vc os dados dele e você carrega a página de perfil.

View – Vlw. Mostrando ao usuário…

