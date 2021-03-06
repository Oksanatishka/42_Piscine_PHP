SELECT upper(`last_name`) AS `NAME`,
       `first_name`,
       db_obibik.subscription.price
FROM db_obibik.user_card
INNER JOIN db_obibik.member
    ON db_obibik.member.id_user_card = db_obibik.user_card.id_user
INNER JOIN db_obibik.subscription
    ON db_obibik.subscription.id_sub = db_obibik.member.id_sub
WHERE db_obibik.subscription.price > 42
ORDER BY  db_obibik.user_card.last_name ASC, db_obibik.user_card.first_name ASC;