<?php
                        if(!isset($_SERVER['PHP_AUTH_USER'])||
                            !isset($_SERVER['PHP_AUTH_PW'])||
                            ($_SERVER['PHP_AUTH_USER']!="oulaya")||
                            ($_SERVER['PHP_AUTH_PW']!="12345")){
                                header('WWW-Authenticate: Basic realm="Accès sécurisé"');
                                echo 'Authentification requise.';
                                exit;
                        }
                        else
                        {
                            echo 'Bienvenue ';
                    }?>