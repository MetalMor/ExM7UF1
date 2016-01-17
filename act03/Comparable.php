<?php

/**
 * 
 * 191015
 * @author mor
 * 
 * UNA INTERFICIE NO ES UNA CLASE!!!!
 * Declara la interficie publica de una o mas clase (las operaciones publicas 
 * q tendran).
 * 
 * REPITO TODAS LAS OPERACIONES DE UNA INTERFACE SON PUBLICAS Y NO HAY ATRIBUTOS
 * 
 * Viene siendo como una clase abstracta pero sin propiedades (?)(?) ademas no 
 * solo se extiende entre las clases que heredan sino q puede extenderse a 
 * cualquier clase.
 * 
 * Una clase puede implementar varias interficies, una interficie puede heredar
 * de otra interficie. No se puede heredar o implementar dos interficies que 
 * comparten algun metodo.
 * 
 * Se pueden crear matrices (arrays) de una interface, pero los objetos q la
 * formen han de ser de una clase q implemente la interficie
 * 
 */

interface Comparable {
    
    public function equals($other);
    
}