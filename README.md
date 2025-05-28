# Caene - Sistema de Gestão de Estoque

Um plugin WordPress completo para gestão de estoque com QR Code para pagamentos e personalização de interface, desenvolvido para facilitar o gerenciamento de produtos e vendas.

## Índice
1. [Visão Geral](#visão-geral)
2. [Estrutura do Projeto](#estrutura-do-projeto)
3. [Explicação Detalhada de Cada Arquivo](#explicação-detalhada-de-cada-arquivo)
4. [Guia de Instalação](#guia-de-instalação)
5. [Manual de Utilização](#manual-de-utilização)
6. [Personalização do Sistema](#personalização-do-sistema)
7. [Geração de QR Code para Pagamentos](#geração-de-qr-code-para-pagamentos)
8. [Requisitos Técnicos](#requisitos-técnicos)
9. [Perguntas Frequentes](#perguntas-frequentes)
10. [Suporte](#suporte)

## Visão Geral

O Caene é um sistema completo de gestão de estoque desenvolvido como plugin WordPress, que oferece:

- **Interface Administrativa**: Gerenciamento completo de produtos, vendas e configurações visuais
- **Interface Pública**: Exibição moderna e responsiva de produtos para clientes
- **Pagamentos via QR Code**: Integração com sistemas de pagamento via QR Code com verificação de segurança
- **Personalização Visual**: Opções para adaptar cores, logo e estilo do sistema

## Estrutura do Projeto

O projeto está organizado nas seguintes pastas principais:

```
caene-gestao-estoque/
├── admin/                  # Arquivos da área administrativa
│   ├── css/                # Estilos da interface administrativa
│   ├── js/                 # JavaScript para funcionalidades administrativas
│   └── partials/           # Fragmentos HTML da interface administrativa
├── includes/               # Arquivos principais do sistema
├── public/                 # Arquivos da área pública
│   ├── css/                # Estilos da interface pública
│   ├── js/                 # JavaScript para funcionalidades públicas
│   └── partials/           # Fragmentos HTML da interface pública
├── index.html              # Página de demonstração independente
└── caene-gestao-estoque.php # Arquivo principal do plugin
```

## Explicação Detalhada de Cada Arquivo

### Arquivo Principal do Plugin

**caene-gestao-estoque.php**
- **O que é**: Arquivo principal que inicia todo o plugin
- **O que faz**: 
  - Define informações básicas do plugin (nome, versão, autor)
  - Carrega as classes necessárias
  - Registra hooks de ativação e desativação
  - Inicia o plugin
- **Como funciona**: Quando o WordPress carrega, este arquivo é executado primeiro e coordena o carregamento de todos os outros componentes

### Arquivos de Núcleo (pasta 'includes')

**class-caene.php**
- **O que é**: Classe principal que coordena todo o plugin
- **O que faz**: 
  - Carrega dependências
  - Define hooks (ganchos) para admin e público
  - Registra estilos e scripts
- **Como funciona**: Atua como o "cérebro" do plugin, gerenciando todas as partes em conjunto

**class-caene-loader.php**
- **O que é**: Sistema de carregamento de hooks do WordPress
- **O que faz**: Registra e executa todos os hooks (ações e filtros) do plugin
- **Como funciona**: Permite que diferentes partes do plugin se comuniquem com o WordPress de forma organizada

**class-caene-activator.php**
- **O que é**: Gerenciador de ativação do plugin
- **O que faz**: 
  - Cria tabelas no banco de dados quando o plugin é ativado
  - Configura permissões iniciais
  - Adiciona dados padrão se necessário
- **Como funciona**: Executa automaticamente quando o plugin é ativado no WordPress

**class-caene-deactivator.php**
- **O que é**: Gerenciador de desativação do plugin
- **O que faz**: Limpa dados temporários quando o plugin é desativado
- **Como funciona**: Executa automaticamente quando o plugin é desativado no WordPress

### Arquivos da Área Administrativa (pasta 'admin')

**class-caene-admin.php**
- **O que é**: Controlador principal da área administrativa
- **O que faz**: 
  - Cria menus no painel administrativo
  - Gerencia páginas de administração de produtos e vendas
  - Processa formulários e solicitações AJAX
- **Como funciona**: Controla todas as funcionalidades administrativas do plugin

**admin/css/caene-admin.css**
- **O que é**: Arquivo de estilos da interface administrativa
- **O que faz**: Define a aparência visual do painel administrativo
- **Como funciona**: É carregado automaticamente nas páginas administrativas do plugin

**admin/js/caene-admin.js**
- **O que é**: JavaScript para a interface administrativa
- **O que faz**: 
  - Gerencia interações do usuário (adicionar/editar/excluir produtos)
  - Processa formulários de forma assíncrona (sem recarregar a página)
  - Atualiza estatísticas e gráficos em tempo real
- **Como funciona**: Adiciona comportamentos dinâmicos às páginas administrativas

**admin/partials/caene-admin-display.php**
- **O que é**: Template principal da interface administrativa
- **O que faz**: Define a estrutura geral do painel administrativo
- **Como funciona**: Carrega diferentes abas e funcionalidades administrativas

**admin/partials/caene-admin-produtos.php**
- **O que é**: Interface de gerenciamento de produtos
- **O que faz**: 
  - Lista todos os produtos cadastrados
  - Fornece formulários para adicionar/editar produtos
  - Permite excluir ou gerenciar produtos em massa
- **Como funciona**: Interface para todas as operações relacionadas a produtos

**admin/partials/caene-admin-vendas.php**
- **O que é**: Interface de gerenciamento de vendas
- **O que faz**: 
  - Exibe histórico de vendas
  - Mostra estatísticas e gráficos
  - Permite filtrar e exportar relatórios
- **Como funciona**: Centraliza todas as informações de vendas e pagamentos

**admin/partials/caene-admin-configuracoes.php**
- **O que é**: Interface de configurações do sistema
- **O que faz**: 
  - Permite personalizar cores, logo e aparência
  - Configura integrações com servidores externos
  - Define opções gerais do sistema
- **Como funciona**: Permite personalizar o comportamento e aparência do sistema

### Arquivos da Área Pública (pasta 'public')

**class-caene-public.php**
- **O que é**: Controlador principal da área pública
- **O que faz**: 
  - Registra o shortcode para exibir o sistema
  - Carrega estilos e scripts necessários
  - Processa solicitações AJAX dos clientes
- **Como funciona**: Gerencia toda a experiência do usuário final

**public/css/caene-public.css**
- **O que é**: Arquivo de estilos da interface pública
- **O que faz**: Define a aparência visual da loja para os clientes
- **Como funciona**: É carregado automaticamente na página pública do sistema

**public/js/caene-public.js**
- **O que é**: JavaScript para a interface pública
- **O que faz**: 
  - Gerencia listagem e filtragem de produtos
  - Controla o carrinho de compras
  - Gera QR Codes para pagamento
  - Processa interações do usuário
- **Como funciona**: Adiciona funcionalidades dinâmicas à interface pública

**public/partials/caene-public-display.php**
- **O que é**: Template principal da interface pública
- **O que faz**: Define a estrutura da loja online para os clientes
- **Como funciona**: Renderiza a interface que os clientes veem e interagem

### Página de Demonstração

**index.html**
- **O que é**: Versão independente do sistema para demonstração
- **O que faz**: Exibe uma versão simplificada do sistema sem necessidade de WordPress
- **Como funciona**: Pode ser aberta diretamente em qualquer navegador para visualizar o sistema

## Guia de Instalação

### Instalação em WordPress

1. **Preparação**:
   - Certifique-se de ter WordPress 5.0 ou superior instalado
   - Verifique se o servidor atende aos requisitos mínimos (PHP 7.2+, MySQL 5.6+)

2. **Instalação do Plugin**:
   - Faça download da pasta completa `caene-gestao-estoque`
   - Faça upload da pasta para o diretório `/wp-content/plugins/` do seu WordPress
   - Acesse o painel administrativo do WordPress
   - Navegue até "Plugins" e clique em "Ativar" no plugin "Caene - Sistema de Gestão de Estoque"

3. **Configuração Inicial**:
   - Após a ativação, um novo menu "Gestão de Estoque" aparecerá no painel
   - Acesse "Gestão de Estoque > Configurações" para personalizar o sistema
   - Adicione produtos em "Gestão de Estoque > Produtos"

### Instalação Local para Testes

Para testar o sistema localmente sem WordPress:

1. Faça download de todos os arquivos
2. Abra o arquivo `index.html` diretamente em seu navegador
3. Explore a interface de demonstração (observe que algumas funcionalidades que dependem do servidor não estarão disponíveis)

## Manual de Utilização

### Para Administradores

1. **Acesso ao Painel**:
   - Faça login no WordPress como administrador
   - Acesse o menu "Gestão de Estoque" no painel lateral

2. **Gerenciamento de Produtos**:
   - Em "Gestão de Estoque > Produtos":
     - Clique em "Adicionar Novo" para cadastrar um produto
     - Preencha nome, descrição, preço, estoque e faça upload da imagem
     - Use os botões de ação para editar ou excluir produtos existentes
     - Use "Ações em Massa" para operações em múltiplos produtos

3. **Monitoramento de Vendas**:
   - Em "Gestão de Estoque > Vendas":
     - Visualize todas as vendas realizadas
     - Filtre por data, produto ou status
     - Veja gráficos de desempenho de vendas
     - Exporte relatórios quando necessário

4. **Personalização do Sistema**:
   - Em "Gestão de Estoque > Configurações":
     - Faça upload do logo da sua empresa
     - Escolha cores primária, secundária, de texto e fundo
     - Ative ou desative recursos como gradiente de cores
     - Configure integrações com servidores externos

### Para Usuários Finais

1. **Acesso à Loja**:
   - Acesse a página "Sistema de Gestão de Estoque" do site
   - Ou qualquer página que contenha o shortcode `[caene_sistema_estoque]`

2. **Navegação e Compra**:
   - Navegue pelos produtos usando as categorias ou a barra de pesquisa
   - Clique em um produto para ver detalhes
   - Adicione produtos ao carrinho
   - Finalize a compra gerando um QR Code para pagamento

## Personalização do Sistema

O sistema permite ampla personalização visual:

1. **Logo**:
   - Faça upload de um arquivo de imagem para substituir o logo padrão
   - Tamanho recomendado: 200x80 pixels

2. **Esquema de Cores**:
   - **Cor Primária**: Usada em botões e elementos principais
   - **Cor Secundária**: Usada em destaques e acentos
   - **Cor de Texto**: Define a cor principal dos textos
   - **Cor de Fundo**: Define a cor de fundo das páginas

3. **Efeitos Visuais**:
   - Ative ou desative o efeito de gradiente
   - Escolha o estilo de borda para os produtos

## Geração de QR Code para Pagamentos

O sistema gera QR Codes seguros para pagamentos:

1. **Como Funciona**:
   - Quando um cliente finaliza uma compra, o sistema gera um QR Code único
   - Este QR Code contém dados do pagamento e um código CRC de verificação
   - O cliente pode escanear o QR Code com um aplicativo de banco ou pagamento

2. **Segurança**:
   - O código CRC garante que os dados não foram adulterados
   - Cada QR Code é único e vinculado a uma venda específica
   - O sistema registra automaticamente quando um pagamento é confirmado

3. **Integração**:
   - Compatível com sistemas de pagamento PIX brasileiros
   - Pode ser integrado com outros sistemas de pagamento mediante configuração

## Requisitos Técnicos

Para funcionamento ideal do sistema:

### Requisitos do Servidor
- WordPress 5.0 ou superior
- PHP 7.2 ou superior
- MySQL 5.6 ou superior
- Módulos PHP: cURL, GD Library, JSON

### Requisitos do Cliente
- Navegador web moderno (Chrome, Firefox, Safari, Edge)
- JavaScript habilitado
- Para pagamentos: Aplicativo de banco com leitor de QR Code

## Perguntas Frequentes

**P: Como adicionar um novo produto?**
R: Acesse "Gestão de Estoque > Produtos", clique em "Adicionar Novo" e preencha todos os campos necessários.

**P: Como alterar as cores do sistema?**
R: Acesse "Gestão de Estoque > Configurações", vá para a aba "Aparência" e escolha as cores desejadas.

**P: É possível usar o sistema sem WordPress?**
R: O arquivo `index.html` fornece uma versão de demonstração, mas para funcionalidade completa o WordPress é necessário.

**P: Como exibir o sistema em uma página específica?**
R: Adicione o shortcode `[caene_sistema_estoque]` em qualquer página ou post do WordPress.

**P: O que é o código CRC nos QR Codes?**
R: É um código de verificação que garante a integridade dos dados no QR Code, evitando adulterações.

## Suporte

Para suporte técnico:
- Email: suporte@caene.com.br
- Documentação online: https://caene.com.br/docs
- Horário de atendimento: Segunda a Sexta, 9h às 18h
