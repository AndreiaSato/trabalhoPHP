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

