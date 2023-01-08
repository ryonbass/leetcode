# Write your MySQL query statement below
select id from Weather , (
  SELECT DATE_ADD(recordDate, INTERVAL 1 DAY) AS i_date, temperature AS i_temperature
  FROM Weather) AS i_Weather
where recordDate = i_date
and temperature > i_temperature