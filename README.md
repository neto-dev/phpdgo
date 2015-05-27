### YOi v0.13

YOi v0.13 es un pequeño framework PHP que facilita la programación en el lenguaje así como también permite organizar tu proyecto de manera limpia y ordenada, evitando el código espagueti que ha hecho muy poco estable a este lenguaje.

Para clonar el proyecto es necesario instalar previamente [Git](http://git-scm.com/) en tu computador. Posteriormente entrar en tu consola y colocar los siguientes comandos.

```
$ cd your_repo_root/repo_name
$ git remote add origin https://github.com/programminghack/YOi.git
$ git fetch origin

```

### Instalaciones
Para que YOi funcione correctamente tienes que tener instalado previamente PHP5.3 o superior, Mysql y el servidor Apache o nginx. Podrás instalarlos desde consola en caso de Linux o Mac o bien instalarlos desde un archivo instalador.

> [Linux](https://www.google.com.mx/webhp?sourceid=chrome-instant&ion=1&espv=2&es_th=1&ie=UTF-8#q=lamp+linux)

> [Mac OS X](https://www.mamp.info/en/) 

> [Windows ](https://www.apachefriends.org/es/index.html)

### Configuración
Empezar a usar el proyecto es muy fácil, una vez clonado el repositorio en tu maquina, entrar en la carpeta /helpers/system/conf/config.php  en este archivo configuraremos nuestra base de datos.

```

define("DB_HOST", "localhost"); //nombre del host donde se encuentra la base de datos
define("DB_USER", "root"); // usuario con es que se accede a mysql
define("DB_PASS", "root"); // password con la que se accede a mysql
define("DB_NAME", "YOi); // nombre de la base de datos 
define("DB_CHAR", "utf8"); // tipo de codificación

```

### Conceptos básicos
En seguida se muestra un pequeño código del funcionamiento del mini Framework

> models/NameModel.php

```

<?php

    class NameModel{

        protected $conn;
        public $rows;

        public function __construct()
        {
            $this->consult = new Consultas();
        }

        public function get($comparate = null, $value = null)
        {
            $query = $this->consult->getConsultar("
                SELECT *
                FROM name
                WHERE $comparate = '$value'
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rows[] = $row;
            }

            return $this->rows;
        }
?>

```

> controllers/HomeController.php

```
<?php

class HomeController{

    public function indexAction()
    {
        $consulta = new NameModel();
        $values = $consulta->get("id", 1);
        return new View("home/index", ["title" => "Trabajando con el framework YOi", "layout" => "off", "values" => $values);
    }
}

?>
```

> project/views/home/index.tpl.php

```

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
</head>
<body>
	<h1>Hola mundo trabajando con YOi</h1>

        <?php  foreach($values as $row){  ?>
	         <h2><?=$row['name']?></h2>
        <?php } ?>

</body>
</html>

```

### Autor
@programminghack Ernesto Valenzuela, apasionado a la programación así como de las tecnologías open source, amante de los lenguajes Ruby, PHP & Python, puedes contactarme directamente a correo hello@programminghack.mx o bien seguirme en twitter [@programminghack](https://twitter.com/programminghack)

### Colaboración
Si gustas colaborar en el proyecto puedes mandar tu Pull Request o bien contactarme para incluirte como colaborador.