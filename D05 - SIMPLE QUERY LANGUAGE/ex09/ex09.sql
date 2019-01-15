SELECT COUNT(*) AS `nb_short-films`
FROM db_obibik.film
WHERE `duration` <= 42;