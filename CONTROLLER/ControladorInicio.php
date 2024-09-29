<?php

    require_once('../MODEL/modeloLogin.php'); 

    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $correoIN = $_POST['email']; 
    $contraIN = $_POST['password'];
        try {
            
            $objUsuario = new modeloUsuario(NULL,NULL,NULL,NULL,NULL,$correoIN,NULL,NULL,NULL); 

            $consultaLogin = $objUsuario->consultaLogin(); 
            $usuarioBD = $consultaLogin->correoUsuario; 
            $contraBD =  $consultaLogin->claveUsuario;
            $estadoUsuarioBD = $consultaLogin->estadoUsuario;
            $tipoIdUsuarioBD = $consultaLogin->idRol; 
            
            
            if ($correoIN == $usuarioBD)
            {
                if ($contraIN == $contraBD)
                {
                    session_start(); 
                    $_SESSION['email']=$usuarioBD; 

                    if($tipoIdUsuarioBD == $tipoIdUsuarioBD )
                    {
                        
                        if($tipoIdUsuarioBD==1){
                            
                            if($estadoUsuarioBD=="Activo"){
                                $tipoIdUsuarioBD =1;
                                echo '<script type="text/javascript">
                                alert("¡¡INGRESO EXITOSO ADMINISTRADOR!!");    
                                window.location.href="../VIEW/menu_administrador.php"; 
                                </script> ';

                            }elseif($estadoUsuarioBD="Inactivo"){

                                echo '<script type="text/javascript">
                                alert("ERROR: Estado Inactivo");   
                                window.location.href="../VIEW/login.php";  
                                 </script> '; 


                            }
                            
                        }elseif($tipoIdUsuarioBD ==2){
                            
                            if($estadoUsuarioBD=="Activo"){
                                $tipoIdUsuarioBD =2;
                                echo '<script type="text/javascript">
                                alert("¡¡INGRESO EXITOSO CLIENTE!!");    
                                window.location.href="../VIEW/IndexV.php"; 
                                </script> ';

                            }elseif($estadoUsuarioBD="Inactivo"){

                                echo '<script type="text/javascript">
                                alert("ERROR: Estado Inactivo");   
                                window.location.href="../VIEW/login.php";  
                                 </script> '; 


                            }
                        }elseif($tipoIdUsuarioBD==3){
                            
                            if($estadoUsuarioBD=="Activo"){
                                $tipoIdUsuarioBD=3;
                                echo '<script type="text/javascript">
                                alert("¡¡INGRESO EXITOSO PROVEEDOR!!");    
                                window.location.href="../VIEW/menu_productos_prov.php"; 
                                </script> ';

                            }elseif($estadoUsuarioBD="Inactivo"){

                                echo '<script type="text/javascript">
                                alert("ERROR: Estado Inactivo");   
                                window.location.href="../VIEW/login.php";  
                                 </script> '; 


                            }
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">
                        alert("ERROR: Tipo de usuario incorrecto");  
                        window.location.href="../VIEW/login.php";    
                    </script> ';   
                    }
                }
                else
                {
                    echo '<script type="text/javascript">
                            alert("ERROR: Contraseña incorrecta");   
                            window.location.href="../VIEW/login.php";
                        </script> '; 
                }
            }   
            else
            {
                echo '<script type="text/javascript">
                    alert("ERROR: Usuario incorrecto");  
                    window.location.href="../VIEW/login.php";    
                </script> '; 
            }

        } catch (\Throwable $error) {
            echo 'ERROR: '. $error->getMessage();  
            die(); 
        }
    }
    else
    {
        header('location: index.php'); 
    }

?>
