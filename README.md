# FORM_ALUNOMATERIA

## 📌 Sobre o Projeto
O **FORM_ALUNOMATERIA** foi desenvolvido como parte de uma aula do curso de Análise e Desenvolvimento de Sistemas. O objetivo da tarefa era criar um formulário de cadastro de alunos, associar os alunos às suas situações acadêmicas (aprovado ou reprovado) e gerar um arquivo JSON automaticamente com esses dados.

## 🚀 Tecnologias Utilizadas
Este projeto foi desenvolvido utilizando as seguintes tecnologias:

- **Linguagem:** PHP, JavaScript, CSS, HTML
- **Banco de Dados:** JSON (para armazenamento de alunos)
- **Ferramentas Adicionais:** Node.js (package.json e package-lock.json indicam o uso do npm)

## 🛠️ Funcionalidades
O sistema inclui as seguintes funcionalidades:

✅ Cadastro de alunos<br>
✅ Cadastro de disciplinas<br>
✅ Associação de alunos às disciplinas<br>
✅ Processamento de dados via PHP<br>
✅ Estilização do formulário com CSS

## 📂 Estrutura do Projeto

```bash
FORM_ALUNOMATERIA/
├── css/
│   └── form.css          # Estilização do formulário
├── html/
│   └── form.html         # Página principal do formulário
├── php/
│   ├── aluno.json        # Armazena os dados dos alunos
│   ├── aluno.php         # Script PHP para manipulação de alunos
│   ├── disciplina.php    # Script PHP para manipulação de disciplinas
│   ├── processar.php     # Script PHP para processar os dados
├── package-lock.json     # Gerenciamento de dependências (npm)
├── package.json          # Configurações de dependências do projeto
├── .gitignore            # Arquivos ignorados pelo Git
├── README.md             # Documentação do projeto
```

## 📦 Instalação e Execução
Para rodar o projeto localmente, siga os passos abaixo:

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/EduardoTaz/FORM_ALUNOMATERIA.git
   ```

2. **Acesse a pasta do projeto:**
   ```bash
   cd FORM_ALUNOMATERIA
   ```

3. **Instale as dependências (caso necessário):**
   ```bash
   npm install
   ```

4. **Configure o ambiente PHP**
   - Certifique-se de ter um servidor local (XAMPP, WAMP, etc.).
   - Coloque os arquivos na pasta `htdocs` (caso use XAMPP).
   - Inicie o servidor Apache.

5. **Acesse o sistema no navegador:**
   ```
   http://localhost/FORM_ALUNOMATERIA/html/form.html
   ```

## 📌 Contribuição
Se deseja contribuir com o projeto, siga os passos:

1. **Fork este repositório**
2. **Crie uma branch para sua funcionalidade:** `git checkout -b minha-feature`
3. **Faça commit das suas alterações:** `git commit -m 'Adiciona nova funcionalidade'`
4. **Envie para o repositório remoto:** `git push origin minha-feature`
5. **Abra um Pull Request**
