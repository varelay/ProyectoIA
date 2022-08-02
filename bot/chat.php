<?php

include "Bot.php";
$bot = new Bot;
$questions = [
    
    "hola" =>"Hola!",
    "hello" =>"Que onda",
    "adios" =>"Que tengas buen dia!",
    "bye" =>"Bai",
    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    
];


if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'Consultar Ticket' || $msg == "1") {
            $botty->reply('Digita tu número de ticket: ');
        } elseif($msg == 'tus proveedores son?' || $msg == "2"){
            $conexion = new mysqli("ls-09e393cc458d8c9984b7ce26cc0c199c2bf93ce5.cfv20klo2ytv.us-east-1.rds.amazonaws.com","dbmasteruser","n.cf^AgcyiETV(?t==*1}6F[Ky`uwV$G","sis_venta");
            $query="select proveedor from proveedor";
            $resultado=$conexion->query($query);
            echo "Mis provedores son: ";
            while($row=$resultado->fetch_assoc()){
                echo ", ". $row['proveedor'];
            }
        } elseif($msg == "Misión" || $msg == "misión" || $msg == "mision" || $msg == 4){
            echo "Somos una empresa encargada de brindar y ofrecer productos de excelente calidad; a través de un buen servicio, con el mejor precio y un trato amable por parte de quienes conformamos esta empresa.";
        } elseif($msg == "Visión" || $msg == "visión" || $msg == "vision" || $msg == 5){
            echo "Continuar siendo la tienda de conveniencia con mejor servicio de establecimientos en Querétaro.";
        } elseif($msg == "Contactar a un agente" || $msg == "agente" || $msg == "necesisto un agente" || $msg == "necesito hablar con un humano" || $msg == "6"){
            echo "<a style='color: white;' href='http://wa.me/524421099224?text=Hola,%20Omarket%20%C2%BFme%20podr%C3%ADas%20ayudar?'>Si deseas hablar con nuestro equipo, haz click aquí!</a>";
        } elseif($msg == "ubicacion" || $msg == "Ubicación" || $msg == "Ubicacion" || $msg == "Sucursal" || $msg == "Sucursales" || $msg == "7" || $msg == "Nuestras Sucursales" ) {
            echo "<a style='color: white;' href='https://www.google.com/search?tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALiCzsZy0WQK9GsgOtVcWVwazhseXoWiSw:1659467830549&q=oxxo+ubicacion&rflfq=1&num=10&sa=X&ved=2ahUKEwj57Li076j5AhWGDEQIHV3fCJ0QjGp6BAgLEAE&biw=1440&bih=749&dpr=1#rlfi=hd:;si:;mv:[[20.663662137457187,-100.31187363382101],[20.472728351165653,-100.66206284280538],null,[20.56822508884658,-100.4869682383132],12]'>Estamos ubicados en todo Querétaro, haz click aquí!</a>";
        } elseif($msg == 'tienes gansitos?' || $msg == 'tienes coca cola?' || $msg == 'tienes mantecadas?' || $msg == 'tienes chetos?' || $msg == 'tienes Gansitos?' || $msg == 'Tienes gansito?'){
            $botty->reply('Claro que tenemos, acude a nuestra sucursal más cercana');
        } elseif (is_numeric($msg) && $msg != 1 && $msg != 2  && $msg != 3 && $msg != 4 && $msg != 5 && $msg != 6 && $msg != 7 && $msg != 8){
            $conexion = new mysqli("ls-09e393cc458d8c9984b7ce26cc0c199c2bf93ce5.cfv20klo2ytv.us-east-1.rds.amazonaws.com","dbmasteruser","n.cf^AgcyiETV(?t==*1}6F[Ky`uwV$G","sis_venta");
            $query="select * from ventaseshas where idVenta = $msg";
            $resultado=$conexion->query($query);
            $row=$resultado->fetch_assoc();
            if(is_null($row)){
                echo "Lo siento no existe tu ticket, intenta de nuevo";
            } else {
                echo "Folio Ticket: " . $row['idVenta']. "<br><br>" .
                "Cliente: " . $row['cliente'] .  "<br><br>" .
                "Subtotal: $" . $row['subtotal'] .  ".00<br><br>" .
                "Total: $" . $row['total'] .".00" ;
            }
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, No te entiendo.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
