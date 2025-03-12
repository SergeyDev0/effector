-- Список просмотренных фильмов
SELECT 
    users.id AS user_id,
    users.name AS user_name,
    watch_history.id AS watch_id,
    watch_history.watch_time,
    movies.id AS movie_id,
    movies.title AS movie_title
FROM 
    watch_history
JOIN 
    users ON watch_history.user_id = users.id
JOIN 
    movies ON watch_history.movie_id = movies.id;