A arquitetura utilizada foi a MVC e a estrutura de código para implementar a arquitetura foram retiradas do canal Codecourse, link de acesso <https://www.youtube.com/watch?v=OsCTzGASImQ&list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD&index=1>

Caso o diretório raiz seja renomeado para que a aplicação compile é necessário mudar também o arquivo .htaccess.
Por exemplo:
  1. Diretório raiz chama-se "teste_weslan" e passará para "avonale";
  2. Renomeia a pasta e muda o trecho de código no .htaccess:
      1. De: RewriteBase /teste_weslan/public 
      2. Para: RewriteBase /avonale/public

Teste: 

1. Criar uma função que retorne um array com 6 dezenas aleatórias entre 1 e 60, atentando que os números nunca se repitam e que estejam na ordem crescente.

2. Utilizando a função acima e pensando num volante da Megasena, criar um layout html contendo 3 tabelas com 10 colunas e 6 linhas numeradas com as 60 dezenas e destacando com a cor azul(#0000ff) os números sorteados. 
Para isso, deverão constar 3 apostas não repetidas. Há várias formas de resolver, porém, essa atividade não será avaliada pelo layout e sim pela lógica e organização do código.

3. Criar uma simples classe que possa ler o conteúdo de um arquivo texto. Essa classe deverá conter um atributo privado que será usado para guardar o conteúdo do arquivo lido, um método para carregar o arquivo e outro para visualizar o atributo.

4. Utilizando a classe criada acima, criar um form que solicite ao usuário um arquivo e que ao submeter seja visualizado o conteúdo.

5. Exibir em uma tabela html, dados da api https://randomuser.me/api