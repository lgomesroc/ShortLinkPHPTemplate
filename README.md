# Encurtador de Links Básico em PHP

Este é um sistema simples de encurtador de links feito em PHP, sem banco de dados. Ele gera links curtos para URLs fornecidas e redireciona para a URL original ao clicar nos links curtos. Este projeto foi criado como um template básico, podendo ser expandido para sistemas mais robustos.

## ⚙️ Funcionalidades

- Gera links curtos para URLs fornecidas.
- Redireciona para a URL original ao acessar o link curto.
- Utiliza sessão (`$_SESSION`) para armazenar temporariamente os links, permitindo que o encurtador funcione enquanto o navegador estiver aberto.

## 🛠️ Pré-requisitos

- PHP instalado na máquina (versão 7.4 ou superior recomendada).
- Ambiente de desenvolvimento configurado (VS Code e Linux são recomendados, mas o sistema deve rodar em qualquer ambiente com PHP).
  
## 🚀 Como Usar

1. Clone o repositório em sua máquina:
```bash
   git clone https://github.com/seuusuario/nome-do-repositorio.git
   cd nome-do-repositorio
```
Inicie o servidor PHP local na pasta do projeto:

```bash

php -S localhost:8000
```
Acesse o encurtador de links no navegador:

```arduino

    [http://localhost:8000](http://localhost:8000)
```
    Na página principal, insira a URL que deseja encurtar e clique em Encurtar.

    O sistema exibirá um link curto que redirecionará para a URL original ao ser acessado.

# 📂 Estrutura do Projeto

    **index.php**: Contém todo o código do encurtador de links, incluindo a lógica para gerar o link curto e redirecionar para a URL original.

## 📋 Exemplo de Uso

    Insira uma URL, como [https://www.exemplo.com](https://www.exemplo.com).
    Receba um link curto, como [http://localhost:8000/?c=abc123](http://localhost:8000/?c=abc123).
    Acesse o link curto para ser redirecionado automaticamente para [https://www.exemplo.com](https://www.exemplo.com).

## 📝 Observações

    Este projeto não utiliza banco de dados, então os links são armazenados temporariamente na sessão. Isso significa que, quando a sessão expira ou o servidor é reiniciado, os links encurtados são perdidos.
    Para uma versão mais robusta, considere usar um banco de dados para armazenar permanentemente os links curtos.

# 🤝 Contribuições

Sinta-se à vontade para clonar, modificar e enviar melhorias para este projeto!

    Faça um fork do projeto.

    Crie uma nova branch 
```bash
    git checkout -b feature/minha-feature
```
    Commit suas alterações 
```bash
    git commit -m 'Adiciona minha feature
```
    Envie para o repositório original 
```bash
    git push origin feature/minha-feature
```
    Abra uma solicitação de pull (Pull Request) no GitHub.

# 📄 Licença

Este projeto é livre para uso e modificação. Veja o arquivo LICENSE para mais detalhes.