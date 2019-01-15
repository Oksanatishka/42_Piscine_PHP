SELECT datediff(max(`date`), min(`date`)) AS `uptime`
FROM db_obibik.member_history;