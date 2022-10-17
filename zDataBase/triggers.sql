


/* Trigger encargado de agregar a la tabla inventario el numero de items(que se especifica en la casiila cantidad)
que se agrega como camino de registro del departamento de ceye en la parte final en la tabla acta_instrumentos_ceye */

create trigger registrar_inventario after insert on acta_instrumentos_ceye

for each row begin 


DECLARE i BIGINT DEFAULT 0;

    mi_ciclo: loop 

    
        set i = i+1;

        IF i>new.cantidad THEN
            LEAVE mi_ciclo;
        END IF;


        insert into inventario values(null, new.codigo, default, new.extra, new.instrumento_id, new.id);
        

    end loop mi_ciclo;

end; 