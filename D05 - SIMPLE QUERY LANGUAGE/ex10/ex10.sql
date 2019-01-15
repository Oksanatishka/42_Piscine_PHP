SELECT `title` AS `Title`,
       `summary` AS `Summary`,
       `prod_year`
FROM db_obibik.film
INNER JOIN db_obibik.genre
    ON db_obibik.film.id_genre = db_obibik.genre.id_genre
WHERE db_obibik.genre.name = 'erotic'
ORDER BY  `prod_year` DESC;