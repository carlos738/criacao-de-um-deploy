# criacao-de-um-deploy
Projeto com Docker

Este projeto utiliza Docker e Docker Compose para facilitar o gerenciamento e a execução de ambientes de desenvolvimento.
🧰 Fases do Projeto
1. Configuração Inicial

Na fase inicial, configuramos o ambiente de desenvolvimento utilizando Docker e Docker Compose.

    Tecnologias utilizadas:

        Docker

        Docker Compose

    Processos:

        Configuração do arquivo docker-compose.yml para definir os serviços necessários.

        Criação do Makefile para simplificar os comandos do Docker Compose.

    Comandos principais:

        make up: Sobe o projeto e reconstrói os containers.

        make start: Sobe o projeto em segundo plano.

2. Desenvolvimento

Durante o desenvolvimento, utilizamos os serviços configurados para criar e testar o código.

    Tecnologias utilizadas:

        PHP

        MySQL

        Nginx

    Processos:

        Desenvolvimento do código dentro do container PHP.

        Testes locais utilizando o ambiente configurado.

    Comandos principais:

        make logs: Exibe os logs em tempo real do container PHP.

        make sh: Abre um terminal dentro do container PHP.

3. Gerenciamento do Ambiente

Após a configuração inicial, utilizamos comandos para gerenciar o ambiente de desenvolvimento.

    Processos:

        Parar e reiniciar os containers conforme necessário.

        Monitorar os serviços em execução.

    Comandos principais:

        make stop: Para todos os containers.

        make restart: Reinicia os containers reconstruindo-os.

        make ps: Lista os containers em execução.

4. Deploy

Para o deploy, o ambiente é preparado para produção.

    Tecnologias utilizadas:

        Docker

        Docker Compose

    Processos:

        Configuração de variáveis de ambiente para produção.

        Otimização dos serviços para desempenho.

    Comandos principais:

        docker-compose -f docker-compose.prod.yml up -d: Sobe o ambiente de produção.

🚀 Como usar

    Certifique-se de ter o Docker e o Docker Compose instalados.

    Clone este repositório.

    Navegue até a raiz do projeto.

    Utilize os comandos do Makefile para gerenciar o ambiente.

Exemplo:

make up

Isso irá subir o ambiente de desenvolvimento e reconstruir os containers, se necessário.
🛠️ Personalização

Se desejar, você pode adicionar comandos extras ao Makefile, como:

    Importar um banco de dados automaticamente.

    Limpar volumes do Docker.

🧑‍💻 Tecnologias Utilizadas

    Docker

    Docker Compose

    PHP

    MySQL

    Nginx

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

Nota: Este projeto foi configurado para funcionar perfeitamente no GitHub Codespaces, mas também pode ser executado localmente.
