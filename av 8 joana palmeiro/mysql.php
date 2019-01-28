<?php 
    
    $titulo = 'MYSQL - my structured query language';
    $t_header = 'MYSQL <span>my structured query language</span>';

    include 'includes/header.php' 
    
    ?>

<section id="rp">
    <h2>Base de dados</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Create</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução CREATE DATABASE usa-se para criar um novo banco de dados SQL.
                        <br>
                        <br>
                        <b>CREATE DATABASE databasename;</b>

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Drop</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução DROP DATABASE usa-se para eliminar um banco de dados SQL existente.
                        <br>
                        <br>
                        <b>DROP DATABASE databasename;</b>

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Backup </code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução BACKUP DATABASE usa-se no SQL Server pois cria um backup completo de um banco de dados
                        SQL existente.
                        <br>
                        <br>
                        <b>BACKUP DATABASE databasename TO DISK = 'filepath'; </b>
                    </p>
                </div>
            </div>
            <!-- ./box -->
        </div>
    </div>
</section>

<section id="md">
    <h2>Tabelas</h2>
    <div class="snippets">
        <div class="boxes">
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Create</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução CREATE TABLE usa-se para criar uma nova tabela em um banco de dados.
                        <br>
                        <br>
                        <b>CREATE TABLE table_name (...);</b>

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Drop</code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução DROP TABLE usa-se para descartar uma tabela existente em um banco de dados.
                        <br>
                        <br>
                        <b>DROP TABLE table_name;</b>

                    </p>
                </div>
            </div>
            <!-- ./box -->
            <!-- box -->
            <div class="s-box ">
                <div class="sb-top">
                    <h3>
                        <code>Alter </code>
                    </h3>
                </div>
                <div class="sb-bot">
                    <p>A instrução ALTER TABLE usa-se para adicionar, excluir ou modificar colunas em uma tabela existente.
                        A instrução ALTER TABLE também se usa para adicionar e eliminar várias restrições em uma tabela existente.
                        <br>
                        <br>
                        <b>ALTER TABLE table_name ADD column_name datatype;
                        </b>
                    </p>
                </div>
            </div>
            <!-- ./box -->
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>