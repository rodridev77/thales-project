# Projeto ERP LOJASWEST

#Instalação

para iniciar o projeto basta clonar o repositorio e utilizar o branch ```dev```

para baixar o repositório rode o comando no terminal :

```git clone https://github.com/rodridev77/thales-project ```

e para alterar o branch para dev rode o comando :

```git checkout dev ``` 

clone o arquivo .env.example renomeando a cópia para .env, e altere os dados de acesso ao banco de dados para o seu localhost MySql

rode o comando ```composer update``` para atualizar as dependências do projeto.

# Controller 

para criar um novo controller basta criar um novo arquivo no diretório ```app/Http/Controllers``` com o nome de sua preferência usando o padrão de nomeclatura CamelCase.

o arquivo deve conter o seguinte conteúdo:

```
<?php
namespace App\Http\Controllers
use App\Extensions\ControllerExtension
class NovoController extends ControllersExtends
{
  public function __construct($model = null, $template = null){
    parent::__construct(MyModel::class,"template");
  }
}
?>
```

neste exemplo estamos extentendo a classe : ControllerExtension
está classe é responsavel por tratar os métodos padrões de um Controller Básico, ele oferece os seguintes métodos:
- [X] __construct($model, $template) - responsável por inicializar a classe e definir o Model e Diretorio de template a ser trabalhado.
- [X] index() - responsável por renderizar o arquivo index.blade.php do modulo atual
- [X] create() - reponsável por renderizar o arquivo create.blade.php do modulo atual
- [X] edit($id) - responsável por renderizar o arquivo edit.blade.php do modulo atual
- [X] store() - responsável por cadastrar um novo registro
- [X] update($id) - responsável por atualizar o novo registro
- [X] destroy($id) - responsável por deletar o registro escolhido
 
 os arquivos de template devem estar presenter no diretório informado no paramêtro ```$template``` do método ```__construct()```

 há métodos adicionais nesta classe, que permite o trabalho com mais de um Model, o mesmo será apresentado a seguir.

 # Trabalhando com Models

 Para trabalhar com mais de um Model em um controller, basta declarar o método em seu controller e chamar o método da classe pai ``` withAndChange() ``` passando um array informando os models e seus dados como valor ex:

 ```
 public function store(){
    parent::withAndChange(
      [
        MyModel::class => ["nome" => "item 1", "descricao" => "item de teste"], // o primeiro model a ser informado, deve ser o model principal
        Model2::class => ["item" => "model 2"],
        ],[
          "permiss" => true, // o item permiss define se a operação permite o cadastro e alteração nos models ou não
          "key" => "mymodel_id" // o item key define a chave extrangeira nos models adicionais
    ]);
 }
 
```

 # Validações

 A Classe ControllerExtends também oeferece o método setValidate(Array $validate), que é responsável por definir as validações dos campos de formulários, para utiliza-la basta chama-la no fim método ```__construct()``` da seguinte forma :

 ``` 
 public function __construct($model = null, $template = null)
 {
   parent::__construct(MyModel::class, "template")
   parent::setValidate([
      "nome" => "required|unique:tabelas", // unique indica que o valor do campo nome não deve existir duas vezes na base de dados tabelas
      "descricao" => "required", // required indica que o campo descrição é obrigatório.
      "imagem" => "required]"
    ]);
 }
 ```