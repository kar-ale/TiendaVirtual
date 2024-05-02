<a name="br1"></a> 

# TIENDA VIRTUAL "NOCHE ESTRELLADA" 

- **Marroquin Mendoza Karla Alejandra**
- **Velasco Ramirez Berenice**
- **Ensayo de un Modelo, Vista, Controlador (MVC)**
- **Instituto Tecnológico de Tláhuac I**
- **Ingeniería en Sistemas Computacionales**
- **Grupo 8S2**
- **Programación web PHP con MVC**
- **2 de mayo de 2024**

## **ÍNDICE**

1. [RESUMEN](#br1)[ ](#br1)[............................................................................................................................................](#br1)[ ](#br1)[1](#br1)
2. [INTRODUCCIÓN](#br2)[...................................................................................................................................](#br2)[ ](#br2)[2](#br2)
3. [DESARROLLO](#br2)[ ](#br2)[.......................................................................................................................................](#br2)[ ](#br2)[2](#br2)
4. [INSTALACIÓN](#br2)[ ](#br2)[.......................................................................................................................................](#br2)[ ](#br2)[2](#br2)
5. [INDEX.PHP](#br3)[.......................................................................................................................................](#br3)[ ](#br3)[3](#br3)
6. [MODELO](#br3)[..........................................................................................................................................](#br3)[ ](#br3)[3](#br3)
7. [VISTA](#br4)[................................................................................................................................................](#br4)[ ](#br4)[4](#br4)
8. [CONTROLADOR](#br5)[ ](#br5)[...............................................................................................................................](#br5)[ ](#br5)[5](#br5)
9. [ASSET](#br6)[...............................................................................................................................................](#br6)[ ](#br6)[6](#br6)
10. [DIAGRAMA](#br7)[ ](#br7)[DE](#br7)[ ](#br7)[CLASES](#br7)[ ](#br7)[....................................................................................................................](#br7)[ ](#br7)[7](#br7)
11. [CONCLUSIONES](#br8)[ ](#br8)[...................................................................................................................................](#br8)[ ](#br8)[8](#br8)
12. [REFERENCIAS](#br8)[.......................................................................................................................................](#br8)[ ](#br8)[8](#br8)

## **RESUMEN**

El Modelo-Vista-Controlador (MVC) es un patrón de diseño ampliamente utilizado en el desarrollo de aplicaciones web en PHP. 
Este enfoque divide la aplicación en tres componentes principales: el modelo, que gesꢀona la lógica de negocio y la interacción
con la base de datos; la vista, que se encarga de la presentación de la información al usuario; y el controlador, que actúa como intermediarios entre el modelo y la vista, gestionando las peticiones del usuario y coordinando la comunicación entre ambos.

El uso de MVC en el desarrollo de aplicaciones web en PHP tiene varios beneﬁcios, como la
separación de preocupaciones, que facilita la organización del código y mejora la mantenibilidad 
de la aplicación. Además, MVC promueve la reuꢀlización de código y permite una mayor escalabilidad 
al facilitar la incorporación de nuevas funcionalidades sin afectar al resto de la aplicación.

En resumen, la modelo vista controlador es un enfoque eﬁcaz y estructurado para el desarrollo 
de aplicaciones web en PHP, que ayuda a mantener el código organizado, facilita la colaboración entre diferentes equipos de desarrollo y mejora la experiencia de usuario al ofrecer una interfaz clara y coherente.<br>


## **INTRODUCCIÓN**

La modelo vista controlador (MVC) es un patrón arquitectónico que se utiliza en el desarrollo
de aplicaciones web para separar la lógica de negocio, la presentación de la información y
el control de la interacción del usuario. En este ensayo, exploraremos la implementación del
MVC en una aplicación web desarrollada en PHP, un lenguaje de programación ampliamente
utilizado en la creación de siꢀos web dinámicos.

El objetivo de utilizar el patrón MVC en el desarrollo de aplicaciones web es mejorar la
organización del código, facilitar su mantenimiento y permiꢀr la reuꢀlización de
componentes. En la arquitectura MVC, el modelo se encarga de la representación de los
datos y la lógica de negocio, la vista se encarga de la presentación de la información al
usuario y el controlador se encarga de gesꢀonar la interacción del usuario con la aplicación
y coordinar la comunicación entre el modelo y la vista.

En este ensayo, examinaremos cómo se implementa el patrón MVC en una aplicación web
desarrollada en PHP, incluyendo la creación de las clases y la estructura de directorios
necesaria, así como la forma en que se realiza la interacción entre el modelo, la vista y el
controlador. También discuꢀremos las ventajas y desventajas de la utilización de MVC en el
desarrollo de aplicaciones web en PHP, y daremos algunas recomendaciones para opꢀmizar
su implementación.

## **DESARROLLO**

MVC es una propuesta de arquitectura del soﬅware utilizada para separar el código por sus
distintas responsabilidades, manteniendo distintas capas que se encargan de hacer una
tarea muy concreta, lo que ofrece beneﬁcios diversos.<br>
La descripción técnica de una aplicación web, con una organización de carpetas y archivos
identiﬁcados con el nombre de vista, modelo y controlador, assets y un archivo index.php de una Tienda Virtual nombrada *"NOCHE ESTRELLADA"* donde se mostrara los siguientes fragmentos de las carpetas mencionadas.<br>

![imagen](<Capturas del programa/IMAG1.jpg>)<br>
*Figura 1 Archivos principales del programa*<br>

- *PHP es un lenguaje de código abierto que se puede incrustar en HTML.*<br>
- *HTML deﬁne el signiﬁcado y la estructura del contenido web.*<br>

## **INSTALACIÓN**
Para poder hacer uso de la pagina web la Tienda Virtual "NOCHE-ESTRELLADA".<br>
1. Tener instalado XAMPP en tu PC donde debe estar activado el Apache y MySQL.<br>
   
![iamgen16](<Capturas del programa/img16.jpeg>)<br>
*Figura 2 Xampp*<br>

2. Tener tu programa en una sola carpeta con tus archivos (modelo, vista, controlador, asset y index.php) para que funcione.<br>
   
![iamgen13](<Capturas del programa/img13.png>)<br>
*Figura 3 Carpeta principal "TiendaVirtual Version 1.0.4"*<br>

![iamgen14](<Capturas del programa/img14.png>)<br>
*Figura 4 Archivos y carpetas de la carpeta principal*<br>

3. Abrir desde tu navegador (Microsoft, Chrome, etc) el localhost -> localhost/TiendaVirt...<br>
   
![iamgen15](<Capturas del programa/img15.png>)<br>
*Figura 5 localhost desde navegador*<br>

## **INDEX.PHP**

Es responsable de mostrar la página principal o página predeterminada del sitio<br>

![imagen2](<Capturas del programa/IMAG2.jpg>)<br>
*Figura 6 Fragmento de código del Index.php*<br>

## **MODELO**

En la carpeta “modelo” se encuentra el código "config.php" donde se trabaja los datos, por tanto,
contendrá mecanismos para acceder a la información y también para actualizar su estado.<br>

![iamgen3](<Capturas del programa/IMAG3.jpg>)<br>
*Figura 7 Archivo config.php de la carpeta modelo*<br>

![imagen4](<Capturas del programa/IMAG4.jpg>)<br>
*Figura 8 Código del config.php*<br>

## **VISTA**

En la capeta "vista" contienen el código de nuestra aplicación que va a producir la visualización de las
interfaces de usuario, o sea, el código que nos permitirá renderizar los estados de
nuestra aplicación en HTML.<br>

 ![iamgen5](<Capturas del programa/IMAG5.jpg>)<br>
 *Figura 9 Archivos en HTML del programa*<br>

  ![iamgen6](<Capturas del programa/IMAG6.jpg>)<br>
  *Figura 10 Fragmento de codigo del archivo accesorios.html*<br>

- Visualisacion del programa en el navegador.<br>
  
  ![iamgen7](<Capturas del programa/IMAG7.jpg>)<br>
  *Figura 11 Visualizacion del programa de html en el navegador*<br>

## **CONTROLADOR**

En la carpeta "controlador" contiene el código necesario para responder a las acciones que se solicitan en la
aplicación, como visualizar un elemento, realizar una compra, una búsqueda de
información, etc.<br>

![imagen8](<Capturas del programa/IMAG8.jpg>)<br>
*Figura 12 Archivos en php de la carpeta controlador*<br>

![imagen20](<Capturas del programa/img20.png>)<br>
*Figura 13 Fragmento de código del archivo login.php*<br>

## **ASSET**

### Contenido de la carpeta asset<br>

![imagen9](<Capturas del programa/IMAG9.jpg>)<br>
*Figura 14 Carpetas de la carpeta principal asset*<br>

- ### css<br>
![imagen10](<Capturas del programa/IMAG10.jpg>)<br>
*Figura 15 Archivos CSS*<br>

- ### js<br>
![imagen11](<Capturas del programa/IMAG11.jpg>)<br>
*Figura 16 Archivos JavaScript*<br>

- ### img<br>
![imagen12](<Capturas del programa/IMAG12.jpg>)<br>
*Figura 17 Carpeta de algunas imagenes que se utilizan en el programa*<br>

## **DIAGRAMA DE CLASES**

El diagrama de clases es uno de los diagramas incluidos en UML 2.5 clasiﬁcado dentro de
los diagramas de estructura y, como tal, se utiliza para representar los elementos que
componen un sistema de información desde un punto de vista estáꢀco.

Es importante destacar que, por esta misma razón, este diagrama no incluye la forma en la
que se comportan a lo largo de la ejecución los distintos elementos, esa función puede ser
representada a través de un diagrama de comportamiento, como por ejemplo un diagrama
de secuencia o un diagrama de casos de uso.

El diagrama de clases es un diagrama puramente orientado al modelo de programación
orientado a objetos, ya que deﬁne las clases que se uꢀlizarán cuando se pase a la fase de
construcción y la manera en que se relacionan las mismas. Se podría equiparar, salvando las
distancias, al famoso diagrama de modelo Enꢀdad-Relación (E/R), no recogido en UML,
tiene una utilidad similar: la representación de datos y su interacción. Ambos diagramas
muestran el modelo lógico de los datos de un sistema.

### Ejemplo del programa de una tienda virtual:<br>
![Diagrama1](<Capturas del programa/DIA1.jpg>)<br>
*Diagrama 1 Caso de uso*<br>

![Diagrama2](<Capturas del programa/DIA2.jpg>)<br>

*Diagrama 2 Entidad-relación*<br>

## **CONCLUSIONES**

En conclusión, la descripción de una técnica de una aplicación web de una tienda virtual "NOCHE ESTRELLADA" utilizando el patrón
modelo, vista, controlador revela la estructura organizativa, se logra una separación clara de
las responsabilidades entre los distintos componentes del sistema, lo que conduce a una
mayor modularidad, permite una gestión eﬁciente de la lógica de negocio (modelo), la
presentación de datos al usuario (vista) y la gestión de las interacciones del usuario
(controlador), de manera que el código este bien estructurado sea fácil de mantener y
proporciona una estructura sólida y organizada.

## **REFERENCIAS**

- *García, M. (2017, October 5). MVC (Model-View-Controller): what is it and what is it for?
https://codingornot.com/mvc-what-is-it-and-what-is-it-for*

- *Hernandez, R. D. (2021, June 28). The model-view-controller pattern: Architecture and frameworks explained.freeCodeCamp.org.<br>
https://www.freecodecamp.org/espanol/news/el-modelo-de-arquitectura-view-controller-pattern/*

- *Porto, J. P., & Gardey, A. (2021, June 25). *Html - Qué es, definición, estructura e historia*.
Definición.de. https://definicion.de/html/*

- *López, M. (2023, October 18). *Qué es PHP | Definición, Significado y Ejemplos*. Arimetrics.
https://www.arimetrics.com/glosario-digital/php*

