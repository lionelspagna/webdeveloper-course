<?php
    function open_database_connection(): PDO
    {
        $connection = new PDO("mysql:host=127.0.0.1;dbname=blog_db", 'root', 'root');

        return $connection;
    }

    function close_database_connection(&$connection)
    {
        $connection = null;
    }

    function get_posts_from_result($db_result) 
    {
        while($row = $db_result->fetch(PDO::FETCH_ASSOC)) {
            yield $row;
        }
    }

    function get_all_posts() {
        $connection = open_database_connection();
        $result = $connection->query('select id, title from post');
        $posts = get_posts_from_result($result);
        close_database_connection($connection);
        return $posts;
    }

    function get_post_by_id(int $id) 
    {
        $connection = open_database_connection();

        $query = 'select title, body from post where id=:id';
        $statement = $connection->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        close_database_connection($connection);

        return $row;
    }