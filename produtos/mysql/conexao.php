<?php
                    class adm
                    {

                        var $conexao;

                        function conectar()
                        {
                            $this->conexão = mysqli_connect("localhost", "root", "", "produtos") or die ("Conexão não efetuada");
                        }
                    }

                    function listar_dados()
                    {
                        $sql="SELECT * FROM tb_produtos";
                        $resultado = mysqli_query ($this->conexao, $sql);
                        while ($linha = mysqli_fetch_array($resultado))
                        {
                            echo $linha["Nome"] .  "<br><br>";
                        }
                    }
                   
                ?>
