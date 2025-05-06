# dsw_ava_2
 
**Nome completo:** Kenzo Ruthes dos Santos
 
**Data:** 06/05/2025

**Unidade Curricular:** Desenvolver de Serviços Web
 
## O que é uma API REST?
 
Uma API REST (Representational State Transfer) é um conjunto de definições que permite a comunicação entre sistemas diferentes por meio do protocolo HTTP. Ela utiliza métodos como GET, POST, PUT e DELETE para realizar operações com recursos.
 
## Códigos de Erros HTTP
 
- **200 OK:** Requisição bem-sucedida.
- **404 Not Found:** Recurso solicitado não foi encontrado.
- **500 Internal Server Error:** Erro inesperado no servidor.
 
## Diferença entre JSON, Texto Plano e XML
 
- **Texto Plano:** Apenas texto simples, sem estrutura.
- **JSON (JavaScript Object Notation):** Formato leve e fácil de ler, muito utilizado em APIs.
- **XML (Extensible Markup Language):** Formato mais verboso que JSON, mas também utilizado para transportar dados estruturados.
 
## Como testar este projeto
 
- Instale as dependências com o Composer:
 
- composer install
 
- **Inicie o servidor embutido do PHP dentro da pasta do projeto:**
 
- php -S localhost:8080
 
- **Acesse os endpoints pelo navegador ou ferramenta como Postman:**
 
http://localhost:8080/uma-api
 
Retorna explicação do que é uma API.
 
http://localhost:8080/codigos
 
Retorna explicações dos códigos HTTP.
 
http://localhost:8080/erro
 
Retorna a mensagem “Não encontrado” com status 404.
 
Certifique-se de que está usando o método GET para testar todos os endpoints acima.