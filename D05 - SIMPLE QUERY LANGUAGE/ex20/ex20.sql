SELECT db_obibik.film.id_genre,
       db_obibik.genre.name AS `name_genre`,
       db_obibik.film.id_distrib,
       db_obibik.distrib.name AS `name_distrib`,
       `title` AS `title_film`
FROM db_obibik.film
LEFT JOIN db_obibik.genre
    ON db_obibik.genre.id_genre = db_obibik.film.id_genre
LEFT JOIN db_obibik.distrib
    ON db_obibik.distrib.id_distrib = db_obibik.film.id_distrib
WHERE db_obibik.film.id_genre
    BETWEEN 4
        AND 8;