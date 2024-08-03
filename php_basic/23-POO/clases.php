POO
<h2>Denfición de clase</h2>
<p>
    Una clase es un tipo de dato que contiene, en una misma estructura, variables y funciones. Una clase es una especie de plantilla desde la que los objetos son instanciados y toman su valor. Desde una clase se pueden construir varios objetos del mismo tipo. La definición es la siguiente:
</p>
<?php
class Persona0
{
    public $nombre;
    function getNombre()
    {
        return $this->nombre;
    }
} ?>
<p>
    MedocIdante la palabra reservada class definimos una clase completa. Las variables que se utilizarán dentro de la clase (propiedades) se definen entre el nombre de la clase y los métodos. Los métodos son las acciones que puede realizar una clase y se definen con la palabra reservada function.
</p>
<?php
class Persona
{
    public string $nombre;
    public string $apellido1;
    public string $apellido2;
    public int $docId;

    function __construct($nombre, $apellido1, $apellido2, $docId)
    {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->docId = $docId;
    }

    function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
    function getNombre()
    {
        return $this->nombre;
    }
    public function setApellidos(string $apellido1, string $apellido2)
    {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }
    // function setApellido1(string $apellido1)
    // {
    //     $this->apellido1 = $apellido1;
    // }
    // function setApellido2(string $apellido2)
    // {
    //     $this->apellido2 = $apellido2;
    // }
    protected function getApellido1()
    {
        return $this->apellido1;
    }
    protected function getApellido2()
    {
        return $this->apellido2;
    }
    public function getApellidos()
    {
        return $this->getApellido1() . " " . $this->getApellido2();
    }
    function setDocId(int $docId)
    {
        $this->docId = $docId;
    }
    function getDocId()
    {
        return $this->docId;
    }
}
?>
<p>
    La clase anterior tiene tres propiedades y seis métodos para interactuar con ellas (setters y getters). Los métodos que empiezan por set (por convención) serán utilizados para dar valor a una propiedad y los que empiezan por get para obtener ese valor.
</p>
<h2>Instancia de clase</h2>
<p>
    Para que el códocIdgo funcione, necesita crear el objeto a partir de la definición de la clase. Esto se hace utilizando el operador new seguido del nombre de la clase:
</p>
<?php $luz = new Persona("Luz Piedad", "Lastname", "Apellido", 65421778); ?>
<p>
    Con el códocIdgo anterior hemos creado un objeto que contiene todas las variables y funciones de la clase Persona. La variable que contiene ese objeto es $luz. Para acceder a las funciones desde el nuevo objeto creado, tenemos que utilizar la variable que contiene al objeto, en este caso $luz, seguido del operador (->) y el nombre del método. Para trabajar correctamente, grabe la definición de la clase en un archivo llamado clases.php y cree un nuevo archivo llamado ejemplo.php con el siguiente contenido:
</p>
<h2>
    Constructor
</h2>
En PHP existen algunos métodos especiales en la definición de una clase (métodos mágicos). El más importante es el constructor. Este se ejecuta cada vez que se crea un nuevo objeto y permite crear las variables iniciales que se necesitan. El nombre del método constructor debe ser: __construct() Podemos agregar un constructor a la clase Persona para añadocIdr los datos básicos en la creación de los objetos. Copie el siguiente códocIdgo antes de la función setNombre().

<!-- 
    function __construct($nombre, $apellidos, $docId)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->docId = $docId;
    }
-->
<h2>Herencia</h2>
<p>
    La programación orientada a objetos permite heredar de otras clases. Con esta técnica se puede ahorrar mucho tiempo de trabajo. La clase hija (clase que hereda de otra) adquiere estas propiedades:
    • Automáticamente obtiene todas las variables miembro de la clase padre.
    • También obtiene todos los métodos miembro de la clase padre, que funcionarán exactamente de la misma forma.
    • La clase hija puede a su vez definir nuevas variables y funciones.

    El siguiente ejemplo muestra la definición de una clase hija de la clase Persona1:
</p>
<?php class PersonaColombia extends Persona
{
    public int $docId;
    function setDocId($docId)
    {
        $this->docId = $docId;
    }
    function getDocId()
    {
        return $this->docId;
    }
} ?>
<p>
    La palabra reservada extends indocIdca que la nueva clase creada será una extensión (heredará) de la clase que se escribe justo a la derecha de la definición. El ejemplo anterior muestra una forma de definición de Persona muy genérica, con propiedades universales (o casi, suponiendo que en todas las culturas exista un nombre y al menos un apellido). La clase hija hace una particularidad de la Persona para adecuarla al sistema Colombiano, añadiendo el DOCID. Si creamos un objeto del tipo PersonaColombia, todas las propiedades y métodos de la clase superior se heredarán, estando disponibles para el objeto creado. Si ahora se ejecuta el código instanciando la clase que hemos creado, se puede ver que los métodos que tienen que ver con el nombre y los apellidos pueden utilizarse, aunque no estén definidos en la clase PersonaColombia.
</p>
<h2>Valores y alcance de las variables</h2>
<p>En PHP, los objetos son pasados por defecto por referencia, esto quiere decir que las modificaciones a objetos que se hagan dentro de alguna función u objeto tendrán efecto sobre el objeto original. Podemos crear una función que cambie el nombre de un objeto pasado como parámetro para ver este comportamiento. Puede añadir a su archivo de clases la siguiente función:</p>
<p>Para añadir algo más de semántica al código, es decir, para que cuando leamos el código entendamos lo que está pasando, sería interesante modificar la función cambiaNombre(); el parámetro object no nos dice nada y, en realidad, es un objeto del tipo PersonaUSA o Persona, por lo tanto, podemos cambiar el código de la siguiente forma:
</p>

<?php
function cambiaNombre(Persona $persona, string $nombre)
{
    $persona->setNombre($nombre);
}

// function cambiaNombre(object $objeto, string $nombre)
// {
//     $objeto->setNombre($nombre);
// }
?>
Como la función va a recibir un objeto, el tipo de dato lo hemos puesto a object. Ahora, en el archivo ejemplo2.php, podemos forzar el cambio de nombre invocando a la función.
<br>
<?php cambiaNombre($luz, "Luuz");
echo $luz->getNombre(); ?>
<p>
    Dentro de los objetos, hay que tener también cuidado con el alcance de las variables. Las variables definidas fuera del entorno del objeto no son accesibles desde los métodos de las clases, a menos que anteponga la palabra global.
</p>
<h2>
    Miembros públicos, privados y protegidos
</h2>
Mientras no se especifique otra cosa, los métodos y propiedades de una clase son siempre públicos, es decir, son accesibles desde fuera del objeto de la forma: $objeto->método. Pero existe un camino para que las variables y los métodos no puedan ser accesibles desde código externo al objeto. Tal y como están definidas las variables en la clase Persona (public), se podría acceder a las propiedades de la forma $objeto->propiedad. Las propiedades deberían estar protegidas del acceso exterior para evitar que se introduzcan datos erróneos, haciendo la entrada de datos desde un método accesorio (setPropiedad).
<h2>
    Propiedades y métodos privados
</h2>
Si declaramos un método o propiedad como privada, solo se podrá acceder a ella desde la clase que lo define. Las clases que hereden de una clase con propiedades o métodos privados no tendrán acceso a estos y tampoco será posible desde fuera del objeto hacer llamadas. Para hacer un método o propiedad privado, solo hay que anteponer la palabra private delante de la declaración.
<!-- class Persona { private string $nombre; private string $apellido1; private string $apellido2; -->
De esta manera, las propiedades solo serán accesibles a través de los métodos que interactúan con ellas. De la misma forma, se pueden declarar métodos privados, que únicamente podrán utilizarse desde la propia clase.
<h2>
    Propiedades y métodos protegidos
</h2>
Los métodos protegidos son menos restrictivos que los privados. Cuando declaramos un método como protegido, su visibilidad se extiende a la clase que lo declara y a todas las clases que lo heredan. Todos los métodos que no requieran acceso desde el
exterior de la clase deberían ser definidos como protegidos y debe anteponerse la palabra protected a la propiedad o método. En nuestro caso se pueden definir los métodos getApellido1 y getApellido2 de la clase Persona como protegidos, porque solo lo van a utilizar esta clase y las clases derivadas.
<h2>Propiedades y métodos públicos</h2>
<p>
    Por defecto, todos los métodos y propiedades que se declaren en una clase son públicos, a menos que lleven asociados la palabra protected o private. Como buena práctica de programación, las variables deben definirse como privadas o protegidas, para que no puedan modificarse desde fuera del objeto. Los métodos públicos serán considerados la interfaz del objeto, es decir, es la parte conocida de ese objeto para el resto de la aplicación. A partir de aquí, debe tener cuidado con modificar los métodos públicos de las clases porque puede implicar cambios en otras clases.
</p>
<h2>Intefaces</h2>
<p>
    veces, es necesario que un equipo de varias personas trabajen juntas. En este caso se hace imprescindible definir unas pautas generales de trabajo para que el resultado final sea el esperado. Si el desarrollo consiste en programar varios objetos, el analista de la aplicación puede definir la estructura básica en papel o crear una pequeña plantilla con métodos que el objeto final debería tener obligatoriamente. Esta plantilla es una interfaz y permite establecer una clase con funciones definidas, pero sin desarrollar, que obliga a
    todas las clases que lo implementen a declarar estos métodos como mínimo. Las interfaces aseguran que una clase cumple una serie de requisitos para que luego puedan utilizarse de una forma concreta. Puede ver las interfaces como un contrato, donde se especifica qué debe cumplirse obligatoriamente.
</p>
<?php
interface Humano1
{
    public function setNombre(string $nombre);
    public function getNombre();
    public function setApellidos(string $apellido1, string $apellido2);
    public function getApellidos();
} ?>
<p>
    La interfaz anterior define la estructura básica que queremos para las clases de humano que existen. Solo es necesario exponer qué métodos básicos son obligatorios para que las clases que implementen esta interfaz los desarrollen. Para obligar a una clase a implementar todos los métodos de la interfaz tendremos que hacerlo de la siguiente forma:
    class Persona implements Humano { ... }
</p>
<h2>Clases Abstractas</h2>
<p>
    Una interfaz no permite crear el cuerpo de ninguna función, dejando esta tarea a las clases que la implementen. Las clases abstractas permiten definir funciones que deben implementarse obligatoriamente en las clases que hereden y, además, permiten definir funciones completas que pueden heredarse. Las clases abstractas deben llevar la palabra reservada abstract en la declaración de la clase y en todos los métodos que solo definan su nombre.
</p>
<?php abstract class Humano
{
    private $nombre;
    private $apellido1;
    private $apellido2;
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setApellidos(string $apellido1, string $apellido2)
    {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }
    protected function getApellido1()
    {
        return $this->apellido1;
    }
    protected function getApellido2()
    {
        return $this->apellido2;
    }
    public function getApellidos()
    {
        return $this->getApellido1() . " " . $this->getApellido2();
    }
    abstract public function getNombreCompleto();
}
