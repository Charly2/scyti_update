<? if ($externo){ ?>
    <div class="profile clearfix">
        <div class="profile_pic">
            <img class="img-circle profile_img" src="files/perfil/0.jpg" alt="" style="width: 60px;height: 60px">
        </div>
        <div class="profile_info"><span>Bienvenido,</span>
            <h2><?php echo $externo['correo'];?></h2>
            <!--h2  #{user.nombre}-->
        </div>
    </div>
    <? }else{ ?>
    <div class="profile clearfix">
        <div class="profile_pic">
            <img class="img-circle profile_img" src="files/perfil/<?php echo $usuario['idusuario'];?>.jpg" alt="" style="width: 60px;height: 60px">
        </div>
        <div class="profile_info"><span>Bienvenido,</span>
            <h2><?php echo $usuario['nombre'];?></h2>
            <!--h2  #{user.nombre}-->
        </div>
    </div>
    <? } ?>
