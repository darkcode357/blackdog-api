<?php

namespace Blackdog\Database;

/**
 * Classe de conexão com o banco de dados
 * 
 * @package         Blackdog
 * @copyright       2021 Hugo Henrique
 * @author          Hugo Henrique <mxhugoxm@gmail.com>
 * 
 * @property        const HOST Host do banco de dados
 * @property        const USER Usuário do banco de dados
 * @property        const PASS Senha do banco de dados
 * @property        const CHAR Charset do banco de dados
 * @property        const SCHEMA Database do banco de dados
 * 
 * @method \ClanCats\Hydrahon\Builder getConnection()
 */
class MySQL{
    private const HOST = 'localhost';
    private const USER = '';
    private const PASS = '';
    private const CHAR = 'utf8';
    private const SCHEMA = '';
    public function getConnection(){
        $connection = new \PDO('mysql:host=localhost;dbname=my_database;charset=utf8', 'username', 'password');

        $h = new \ClanCats\Hydrahon\Builder('mysql', function ($query, $queryString, $queryParameters) use ($connection) {
            $statement = $connection->prepare($queryString);
            $statement->execute($queryParameters);

            if ($query instanceof \ClanCats\Hydrahon\Query\Sql\FetchableInterface) {
                return $statement->fetchAll(\PDO::FETCH_ASSOC);
            }
        });

        return $h;
    }
}
