SELECT `last_name`,
       `first_name`
FROM db_obibik.user_card
WHERE db_obibik.user_card.last_name LIKE '%-%'
      OR db_obibik.user_card.first_name LIKE '%-%'
ORDER BY  db_obibik.user_card.last_name ASC, db_obibik.user_card.first_name ASC;