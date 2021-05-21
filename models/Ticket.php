<?php
class Ticket extends Conectar
{
    public function insert_ticket($usu_id, $cat_id, $tick_titulo, $tick_descrip)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO hd_ticket(tick_id,usu_id,cat_id,tick_titulo,tick_descrip,tick_estado,fech_crea,est) VALUES(NULL,?,?,?,?,'Abierto',now(),'1');";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_id);
        $sql->bindValue(2, $cat_id);
        $sql->bindValue(3, $tick_titulo);
        $sql->bindValue(4, $tick_descrip);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_ticket_x_usu($usu_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT hd_ticket.tick_id, hd_ticket.usu_id,hd_ticket.cat_id,hd_ticket.tick_titulo,hd_ticket.tick_descrip,hd_ticket.tick_estado,hd_ticket.fech_crea,hd_usuario.usu_nomb,hd_usuario.usu_ape,hd_categoria.cat_nom FROM hd_ticket INNER JOIN hd_categoria on hd_ticket.cat_id = hd_categoria.cat_id INNER JOIN hd_usuario on hd_ticket.usu_id = hd_usuario.usu_id WHERE hd_ticket.est = 1 AND hd_usuario.usu_id=?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usu_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_ticket()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT hd_ticket.tick_id, hd_ticket.usu_id,hd_ticket.cat_id,hd_ticket.tick_titulo,hd_ticket.tick_descrip,hd_ticket.tick_estado,hd_ticket.fech_crea,hd_usuario.usu_nomb,hd_usuario.usu_ape,hd_categoria.cat_nom FROM hd_ticket INNER JOIN hd_categoria on hd_ticket.cat_id = hd_categoria.cat_id INNER JOIN hd_usuario on hd_ticket.usu_id = hd_usuario.usu_id WHERE hd_ticket.est = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_ticketdetalle_x_ticket($tick_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT hd_ticketdetalle.tickd_id, hd_ticketdetalle.tickd_descrip, hd_ticketdetalle.fech_crea, hd_usuario.usu_nomb, hd_usuario.usu_ape FROM `hd_ticketdetalle` 
            INNER JOIN hd_usuario on hd_ticketdetalle.usu_id = hd_usuario.usu_id
            WHERE tick_id=1";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $tick_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
